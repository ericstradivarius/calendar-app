
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import angular from 'angular';
import config from './app.config';
import moment from 'moment';
import index from 'ng-file-upload';
import 'angular-ui-bootstrap';
require('./bootstrap');
require('./swiper.min');



const app = angular.module('app', [
    'ui.bootstrap',
    'moment-picker',
    'datetime',
    'ngFileUpload'
]);

app.controller('calendarController', ['$scope', '$http', function($scope, $http) {

    $scope.events = [];
    $scope.event = {};
    angular.extend($scope.event, config.events);

    $scope.addEvent = function () {
        $http({
            method: 'post',
            url: '/calendar-events',
            headers: {

            },
            data: {
                'title': $scope.event.title,
                'description': $scope.event.description,
                'starts_at': $scope.event.starts_at?$scope.event.starts_at.format("HH:mm:ss"):$scope.event.starts_at,
                'ends_at':  $scope.event.ends_at?$scope.event.ends_at.format("HH:mm:ss"):$scope.event.ends_at,
                'date_event': $scope.event.date_event?$scope.event.date_event.format("DD-MM-YYYY"):$scope.event.ends_at,
                'user_id': ''
            }
        }).then(
            function (response) {
                $('#myModal').modal('hide');
                $scope.event.title = '';
                $scope.event.description = '';
                $scope.event.starts_at = '';
                $scope.event.ends_at = '';
            },
            function (error) {
                $scope.addEventErrors = error.data.errors;
            }
        )
    };



    //Format data
    $scope.formatDateEvent = function(event) {
        return moment(event, "HH:mm:ss").format("HH:[00]");
    }

    /*Get current user id*/
    $http({
        method: 'get',
        url: '/user',
        headers: {
            "accept":"application/json"
        }
    }).then(
        function(response) {
            $scope.userId = response.data.data.id;
            $scope.currentDay($scope.userId);
        }, function(error) {
            console.log(error);
        }
    );
    /*Switching between days in Angular*/

    $scope.eventDay = moment().format("dddd");
    $scope.eventDayAndMonth = moment().format("DD MMM");
    $scope.filterTerm = moment().format("DD-MM-YYYY");

    $scope.currentDay = function (userId) {


        $http({
            method: 'get',
            url: '/calendar-events',
            headers: {
                "accept":"application/json"
            },
            params: {
                'field[]': ['date_event','user_id'],
                'op[]': ['eq','eq'],
                'term[]': [$scope.filterTerm,userId]
            }
        }).then(
            function (response) {
                $scope.events = response.data.data;
            },
            function (error) {
                console.log(error);
            }
        );

        $http({
            method: 'get',
            url: '/users/' + userId,
            headers: {
                "accept":"application/json"
            },
            params: {
                'with[]' : 'files'
            }
        }).then(
            function (response) {
                $scope.userAvatar = response.data.data.files[0].sizes.header;
                console.log($scope.userAvatar);
            },
            function (error) {
                console.log(error);
            }
        );

    };


    $scope.nextDay = function (userId) {

        $scope.eventDay = moment($scope.eventDay,"ddd").add(1,'days').format("dddd");
        $scope.eventDayAndMonth = moment($scope.eventDayAndMonth, "DD MMM").add(1, 'days').format("DD MMM");
        $scope.filterTerm = moment($scope.filterTerm,"DD-MM-YYYY").add(1,'days').format("DD-MM-YYYY");

        $http({
            method: 'get',
            url: '/calendar-events',
            headers: {
                "accept":"application/json"
            },
            params: {
                'field[]': ['date_event','user_id'],
                'op[]': ['eq','eq'],
                'term[]': [$scope.filterTerm,userId]
            }
        }).then(
            function (response) {
                $scope.events = response.data.data;
            },
            function (error) {
                console.log(error);
            }
        );

    };


    $scope.prevDay = function (userId) {
        $scope.eventDay = moment($scope.eventDay, "dddd").subtract(1,'days').format("dddd");
        $scope.eventDayAndMonth = moment($scope.eventDayAndMonth, "DD MMM").subtract(1, 'days').format("DD MMM");
        $scope.filterTerm = moment($scope.filterTerm,"DD-MM-YYYY").subtract(1,'days').format("DD-MM-YYYY");

        $http({
            method: 'get',
            url: '/calendar-events',
            headers: {
                "accept":"application/json"
            },
            params: {
                'field[]': ['date_event','user_id'],
                'op[]': ['eq','eq'],
                'term[]': [$scope.filterTerm,userId]
            }
        }).then(
            function (response) {
                $scope.events = response.data.data;
            },
            function (error) {
                console.log(error);
            }
        );
    };





}]);


/*Controller for reading and writing comments from DB*/

app.controller('newsFeedController', ['$scope', '$http', function($scope, $http) {

    /*Showing comments in the news feed*/

    $scope.showComment = function () {
        $http({
            method: 'get',
            url: '/comments',
            headers: {}
        }).then(
            function (response) {
                $scope.comments = response.data.data;

            },
            function (error) {
                $scope.errors = error.data.errors;
            }
        )
    };



    $scope.showComment();
    /*Show news feed from all other users*/


    $scope.eventNewsObject = {};

    $scope.arrLength = 15;

    angular.extend($scope.eventNewsObject, config.eventFeed);

    $scope.eventFeedFunction = function () {

        $http({
            method: 'get',
            url: '/calendar-events',
            headers: {
                "accept": "application/json"
            },
            params: {
                'with[]' : ['comments.user.files',  'user.files']
            }
        }).then(
            function (response) {
                $scope.eventFeedObjects = response.data.data;
                $scope.arrLength = $scope.eventFeedObjects.length;
            },
            function (error) {
                $scope.errors = error.data.errors;
            }
        );
    };

    $scope.eventFeedFunction();




    $scope.variabila = [];
    for( let i = 0; i < $scope.arrLength ; i++ ) {
        $scope.variabila[i] = true;
    }

    $scope.triggerComments = function(eventId, index) {

        $http({
            method: 'get',
            url: '/calendar-events/'+ eventId,
            headers: {},
            params: {
                'with[]' : ['comments.user.files']
            }
        }).then(
            function (response) {
               $scope.eventComments = response.data.data.comments;
            },
            function (error) {
                $scope.errors = error.data.errors;
            }
        );
       /* console.log(index);*/
        $scope.variabila[index] = false;
    };


    /* Clear this */

}
]);


app.controller('recentActivityController', ['$scope', '$http', function($scope, $http) {

    /*Showing comments in Recent Activity*/
    $scope.showRecentObjects = [];
    $scope.showRecentObject = {};
    angular.extend($scope.showRecentObject, config.showRecent);

    $scope.showRecent = function () {
        $http({
            method: 'get',
            url: '/comments?with[]=user.files',
            headers: { "accept": "application/json",
            },
        }).then(
            function (response) {
                $scope.showRecentObjects = response.data.data;
            },
            function (error) {
                $scope.errors = error.data.errors;
            }
        )
    };

    $scope.showRecent();
}
]);

app.controller('updateProfileController', ['$scope', '$http','Upload','$timeout', function($scope, $http, Upload, $timeout) {
    /*Update user profile*/

    $scope.success=false;

    $http({
        method: 'get',
        url: '/user',
        headers: {'Content-Type': 'application/json'}
    }).then(
        function (response) {
            $scope.userId = response.data.data.id;
            $scope.user = response.data.data;
        },
        function (error) {
            console.log(error);
        }
    );


    $scope.updateProfile = function (userId,fileResultId) {
        $http({
            method: 'put',
            url: '/users/' + userId,
            headers: {},
            data: {
                "name": $scope.user.name,
                "email": $scope.user.email,
                "password": $scope.user_edit_password,
                "password_confirmation": $scope.user_edit_password_confirmation,
                "images": [fileResultId]
            }
        }).then(
            function (response) {

             /*   console.log(response);*/
                $scope.success=true;
                $scope.errors=false;
            },

            function (error) {
                $scope.errors = error.data.errors;
            }
        )
    };

    /*Upload file*/

    $scope.uploadPic = function(file, userId) {

        file.upload = Upload.upload({
            url:'/files',
            data: {
                file: file,
                type: 'image',
                entity: userId,
                purpose: 'Avatar picture'
            }
        });



        file.upload.then(function(response){
                $scope.updateProfile(userId, response.data.data.id);
            }, function(response) {
                if(response.status > 0)
                    $scope.errorMsg = response.status + ':' + response.data;
            }, function(evt) {
                //Math.min is to fix IE which reports 200% sometimes
                file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));

            }
        );
    }
    /*$scope.returnImage = function(userId,fileResultPath) {
        $http({
            method: 'get',
            url: '/users/' + userId + '/' + fileResultPath,
            headers: {
                'Content-Type': 'application/json'
            }
        }).then(
            function (response) {
                console.log(response);
            },

            function (error) {
                $scope.errors = error.data.errors;
            }
        )
    }*/

    /*End of Upload file*/


}]);

app.controller('theCommentController', ['$scope', '$http', function($scope, $http) {

    $scope.sendComment = function(eventId, userId) {

       /* console.log(eventId);
        console.log(userId);
        console.log($scope.thisComment);*/

        $http({
            method: 'post',
            url: '/comments',
            headers: { "accept": "application/json"
            },
            data: {
                'text': $scope.thisComment ,
                'calendar_event_id': eventId ,
                'user_id': userId
            }
        }).then(
            function (response) {
              $scope.thisComment='';
            },
            function (error) {
                $scope.errors = error.data.errors;
            }
        )
    };



}
]);


app.filter('dateToISO', function() {
    return function(input) {
        return new Date(input).toISOString();
    };
});

app.filter('stripSeconds', function() {
    return function(input) {
        return moment(input, "HH:mm").format("HH:mm");
    };
});

app.filter('timeFrom', function() {
    return function(input) {
        let myTime = new Date(input).toISOString();
        console.log(myTime);
        return moment.utc(myTime).local().fromNow();
    };
});




