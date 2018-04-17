<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Intern Calendar</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>To Do List</title>

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="//cdn.rawgit.com/indrimuska/angular-moment-picker/master/dist/angular-moment-picker.min.css" rel="stylesheet">

        <script src="js/app.js"></script>
        <script src="https://unpkg.com/angular-datetime-input"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.js"></script>
        <script src="//cdn.rawgit.com/indrimuska/angular-moment-picker/master/dist/angular-moment-picker.min.js"></script>
    </head>
    <body ng-app="app">


      <section class="intern">
      <section class="intern">
          <div class="container calendar-container">
              <div class="row calendar">

                  <div class="col-md-5 left-side" ng-controller="calendarController">
                      <div class="left-side-event-container">
                          <div class="row add-event">

                              <div class="col-md-3 col-sm-3 col-xs-3">
                                  <img ng-src="@{{ userAvatar }}" alt="My avatar">
                              </div>
                              <div class="col-md-9 col-sm-9 col-xs-9">
                                  <a href="#" data-toggle="modal" data-target="#myModal">What is your next event?</a>
                              </div>

                              <!-- Modal -->
                              <div id="myModal" class="modal fade" role="dialog">
                                  <div class="modal-dialog">

                                      <!-- Modal content-->
                                      <div class="modal-content">

                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">Create Event</h4>
                                          </div>

                                          <div class="modal-body">

                                              <label for="event-title">Title</label>
                                              <input type="text" ng-model="event.title" class="form-control" id="event-title">

                                              <label for="event-description">Description</label>
                                              <input type="text" ng-model="event.description" class="form-control" id="event-description">

                                              <label for="event-date_event">When</label>
                                              <div class="input-group"
                                                   moment-picker="ctrl.datepicker"
                                                   ng-model="event.date_event"
                                                   min-view="month"
                                                   today="true"
                                                   format="DD-MM-YYYY">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                  <input class="form-control"
                                                         placeholder="Select a date"
                                                         ng-model="ctrl.datepicker"
                                                         ng-model-options="{ updateOn: 'blur' }">
                                              </div>

                                              <label for="event-starts_at">From</label>
                                              <div class="event-hour-interval">
                                                  <div class="input-group col-md-5 col-sm-5"
                                                       moment-picker="ctrl.timepicker.start"
                                                       ng-model="event.starts_at"
                                                       show-header="false"
                                                       format="HH:[00]"
                                                        min-view="day"
                                                        max-view="day">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">schedule</i>
                                                        </span>
                                                          <input id="event-starts_at" class="form-control"
                                                                 placeholder="Select a time"
                                                                 ng-model="ctrl.timepicker.start"
                                                                 ng-model-options="{ updateOn: 'blur' }">
                                                  </div>

                                                  <div class="col-md-2 col-sm-2 label-event-to"><label for="event-ends_at"> to </label></div>

                                                  <div class="input-group col-md-5 col-sm-5"
                                                       moment-picker="ctrl.timepicker.end"
                                                       ng-model="event.ends_at"
                                                       format="HH:[00]"
                                                        min-view="day"
                                                       max-view="day"
                                                        show-header="false">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">schedule</i>
                                                    </span>
                                                      <input id="event-ends_at" class="form-control"
                                                             placeholder="Select a time"
                                                             ng-model="ctrl.timepicker.end"
                                                             ng-model-options="{ updateOn: 'blur' }">
                                                  </div>
                                              </div>

                                              <ul ng-show="addEventErrors" style="color: red; margin-top: 15px; list-style-type: none; padding-left: 0">
                                                 <li ng-repeat="error in addEventErrors" ng-bind="error[0]"></li>
                                              </ul>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                              <button type="button" class="btn btn-success" ng-click="addEvent()">Save</button>
                                          </div>
                                      </div>

                                  </div>
                              </div>

                          </div>

                          <div class="row events-content">

                              <div class="events-content-container">

                                  <div class="title">

                                          <h3 >
                                             <small ng-bind="eventDay"></small>
                                              <span ng-bind="eventDayAndMonth"></span>
                                          </h3>


                                        <div class="icons-container">
                                            <a href="#" ng-click="prevDay(userId)"><i class="material-icons">keyboard_arrow_left</i></a>
                                            <a href="#" ng-click="nextDay(userId)"><i class="material-icons">keyboard_arrow_right</i></a>
                                        </div>

                                  </div>

                                  <div>

                                  </div>

                                  <div class="events-content-content">

                                      <dl>
                                          <div ng-repeat="thisEvent in events">
                                              <dt>@{{ formatDateEvent(thisEvent.starts_at) }} - @{{ formatDateEvent(thisEvent.ends_at) }}</dt>
                                              <dd> @{{ thisEvent.title }} </dd>

                                          </div>

                                          <span ng-show="!events.length">No events on this day.</span>
                                      </dl>

                                  </div>
                              </div>
                          </div>

                     </div>
                  </div>

                  <div class="col-md-7 news right-side">
                      <div class="row feed-title padding-56px">

                          <div class="feed-title-h3">Feed</div>

                          <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle edit-profile" type="button" data-toggle="dropdown"> <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span> </button>
                              <ul class="dropdown-menu">
                                  <li class="welcome">Hello {{ Auth::user()->name }}!  </li>
                                  <li><a data-toggle="modal" data-target="#editProfile">Edit Profile</a></li>
                                  <li><a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          {{ csrf_field() }}
                                      </form>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div ng-controller="newsFeedController" class="row feed-content">
                          <div class="col-md-8 news-feed">
                              <div ng-repeat="newsfeed in eventFeedObjects" class="feed-post padding-top-bottom">
                                  <span class="post-date padding-56px">
                                      @{{  newsfeed.created_at.date | dateToISO | date : 'd MMM' }}  - @{{  newsfeed.starts_at | stripSeconds }}
                                  </span>
                                  <h3 class="post-title padding-56px" ng-click="triggerComments(newsfeed.id, $index)">@{{  newsfeed.title }}</h3>
                                  <div class="post-author">
                                      <img style="margin-left:56px" ng-src="@{{ newsfeed.user.files[0].sizes.header }}" alt="Author avatar" />
                                      <span class="author-name">@{{ newsfeed.user.name }}</span>
                                  </div>

                                  <div class="feed-comments" ng-repeat="comment in eventComments" ng-if="comment.calendar_event_id == newsfeed.id">
                                      <div class="post-comment padding-56px">
                                          <img ng-src="@{{ comment.user.files[0].sizes.header }}" alt="Author avatar" />

                                          <span class="author-name">@{{ comment.user.name }}</span>
                                          <span>@{{  comment.text }}</span>
                                          <span class="hours">
                                              @{{  comment.created_at.date | dateToISO | timeFrom }}
                                          </span>
                                      </div>


                                  </div>

                                  <div ng-controller="theCommentController" class="entry-comment padding-56px" ng-class="{'hide' : variabila[$index]}">
                                      <input type="text" ng-keyup="$event.keyCode == 13 && sendComment( newsfeed.id , userId)" ng-model="thisComment" placeholder="Write a comment" >
                                  </div>

                              </div>
                          </div>
                          <div ng-controller="recentActivityController" class="col-md-4 recent-activity">
                              <h4>Recent activity</h4>
                              <div class="activity-user" ng-repeat="comment in showRecentObjects | orderBy: 'created_at':false">
                                  <img ng-src="@{{ comment.user.files[0].sizes.header }}" alt="avatar profile picture">
                                  <div class="activity-div">
                                      <span class="user-name" ng-bind="comment.user.name"> Username </span> @{{ comment.text }}
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <!-- Edit profile Modal content-->
      <div id="editProfile" class="modal fade" role="dialog" ng-controller="updateProfileController">
          <div class="modal-dialog">
              <!-- Modal content-->
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit profile</h4>
                  </div>
                  <div class="modal-body">

                      <form id="identicalForm" name="editProfileForm">

                          <!-- Profile avatar upload -->
                          <div class="form-group">
                              <input type="file" ngf-select ng-model="picFile" name="images"
                                     accept="image/*" ngf-max-size="2MB" required ngf-model-invalid="errorFile">
                              <i ng-show="editProfileForm.file.$error.required">*required</i>
                              <i ng-show="editProfileForm.file.$error.maxSize"><br>File too large
                                        @{{ errorFile.size / 1000000|number:1 }}MB: max 2MB</i>
                              <img ng-show="editProfileForm.file.$valid" ngf-thumbnail="picFile" class="avatar-upload" alt="Profile picture" >
                              <button ng-click="picFile = null" ng-show="picFile">Remove</button>
                          </div>

                          <!-- Profile avatar ends here -->
                          <div class="form-group">
                              <label for="usr">Name:</label>
                              <input type="text" class="form-control" id="userEdit" ng-model="user.name">
                          </div>
                          <div class="form-group">
                              <label for="email">Email address:</label>
                              <input type="email" class="form-control" id="emailEdit" ng-model="user.email">
                          </div>
                          <div class="form-group">
                              <label for="password">Password:</label>
                              <input id="password" type="password" class="form-control" ng-model="user_edit_password">
                          </div>
                          <div class="form-group">
                              <label for="password_confirmation">Confirm password:</label>
                              <input id="password_confirmation" type="password" class="form-control" ng-model="user_edit_password_confirmation">
                          </div>

                          <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                          <button type="submit" class="btn btn-success" ng-click="uploadPic(picFile, userId)"
                                  ng-disabled="!editProfileForm"
                          >Save</button>
                          <span class="progress" ng-show="picFile.progress >= 0">
                          <div style="width:@{{ picFile.progress }}%" ng-bind="picFile.progress + '%'"></div>
                      </span>
                          <span ng-show="picFile.result">Upload succesful</span>
                          <span class="err" ng-show="errorMsg">@{{ errorMsg }}</span>
                      </form>
                      <ul ng-show="success" id="save-success">Success! Please refresh the page to see the updates</ul>
                      <ul ng-show="errors" id="save-error">
                          <li ng-repeat="error in errors">@{{ error[0] }}</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
    </body>
</html>
