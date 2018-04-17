---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#CalendarEvent
<!-- START_5d71edd7f7485409d3c9cd23c02dcf2b -->
## CalendarEvent Count

Display the count of resource.

> Example request:

```bash
curl -X GET "http://localhost/api/calendar-events/count" \
-H "Accept: application/json" \
    -d "granularity"="hour" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events/count",
    "method": "GET",
    "data": {
        "granularity": "hour"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/calendar-events/count`

`HEAD api/calendar-events/count`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    granularity | string |  optional  | `year`, `month`, `day`, `hour` or `minute`

<!-- END_5d71edd7f7485409d3c9cd23c02dcf2b -->

<!-- START_2163fba3b0e96af3a7abcde211eb2ec7 -->
## CalendarEvent Export

Exports a listing of the resource.

Export status == null if the handle was successful

> Example request:

```bash
curl -X GET "http://localhost/api/calendar-events/export" \
-H "Accept: application/json" \
    -d "type"="html" \
    -d "filename"="voluptas" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events/export",
    "method": "GET",
    "data": {
        "type": "html",
        "filename": "voluptas"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/calendar-events/export`

`HEAD api/calendar-events/export`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    type | string |  required  | `xls`, `xlsx`, `ods`, `pdf`, `html` or `csv`
    filename | string |  required  | 

<!-- END_2163fba3b0e96af3a7abcde211eb2ec7 -->

<!-- START_99f417537f50a75a8f2e0c3d58af2102 -->
## CalendarEvent List

Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/calendar-events" \
-H "Accept: application/json" \
    -d "per_page"="26" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events",
    "method": "GET",
    "data": {
        "per_page": 26
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/calendar-events`

`HEAD api/calendar-events`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    per_page | numeric |  optional  | 

<!-- END_99f417537f50a75a8f2e0c3d58af2102 -->

<!-- START_467072676be87f00aac34c3f7961b0a2 -->
## CalendarEvent Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/calendar-events" \
-H "Accept: application/json" \
    -d "title"="quas" \
    -d "description"="quas" \
    -d "starts_at"="10:44:16" \
    -d "ends_at"="10:44:16" \
    -d "user_id"="quas" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events",
    "method": "POST",
    "data": {
        "title": "quas",
        "description": "quas",
        "starts_at": "10:44:16",
        "ends_at": "10:44:16",
        "user_id": "quas"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/calendar-events`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    description | string |  optional  | 
    starts_at | date |  required  | Date format: `H:i:s`
    ends_at | date |  required  | Date format: `H:i:s`
    user_id | string |  required  | Valid user id

<!-- END_467072676be87f00aac34c3f7961b0a2 -->

<!-- START_508026f02dbcfab5e32b1b18f69885d9 -->
## CalendarEvent Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/calendar-events/{calendarEvent}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events/{calendarEvent}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/calendar-events/{calendarEvent}`

`HEAD api/calendar-events/{calendarEvent}`


<!-- END_508026f02dbcfab5e32b1b18f69885d9 -->

<!-- START_291ba7dabc694ad1878febf3bea04387 -->
## CalendarEvent Update

Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/calendar-events/{calendarEvent}" \
-H "Accept: application/json" \
    -d "title"="est" \
    -d "description"="est" \
    -d "starts_at"="10:44:16" \
    -d "ends_at"="10:44:16" \
    -d "user_id"="est" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events/{calendarEvent}",
    "method": "PUT",
    "data": {
        "title": "est",
        "description": "est",
        "starts_at": "10:44:16",
        "ends_at": "10:44:16",
        "user_id": "est"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/calendar-events/{calendarEvent}`

`PATCH api/calendar-events/{calendarEvent}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    description | string |  optional  | 
    starts_at | date |  required  | Date format: `H:i:s`
    ends_at | date |  required  | Date format: `H:i:s`
    user_id | string |  required  | Valid user id

<!-- END_291ba7dabc694ad1878febf3bea04387 -->

<!-- START_338bb15768b2335598c254b2f6c2d1ad -->
## CalendarEvent Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/calendar-events/{calendarEvent}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/calendar-events/{calendarEvent}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/calendar-events/{calendarEvent}`


<!-- END_338bb15768b2335598c254b2f6c2d1ad -->

#Comments
<!-- START_4d0a60c0c47787e2e2cb804e56b40863 -->
## Comments Count

Display the count of resource.

> Example request:

```bash
curl -X GET "http://localhost/api/comments/count" \
-H "Accept: application/json" \
    -d "granularity"="hour" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments/count",
    "method": "GET",
    "data": {
        "granularity": "hour"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/comments/count`

`HEAD api/comments/count`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    granularity | string |  optional  | `year`, `month`, `day`, `hour` or `minute`

<!-- END_4d0a60c0c47787e2e2cb804e56b40863 -->

<!-- START_6e7dc8bce73cd24e8ed3e4330f13c994 -->
## Comments Export

Exports a listing of the resource.

Export status == null if the handle was successful

> Example request:

```bash
curl -X GET "http://localhost/api/comments/export" \
-H "Accept: application/json" \
    -d "type"="xlsx" \
    -d "filename"="consectetur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments/export",
    "method": "GET",
    "data": {
        "type": "xlsx",
        "filename": "consectetur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/comments/export`

`HEAD api/comments/export`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    type | string |  required  | `xls`, `xlsx`, `ods`, `pdf`, `html` or `csv`
    filename | string |  required  | 

<!-- END_6e7dc8bce73cd24e8ed3e4330f13c994 -->

<!-- START_436edae2f6e39cfe485a4d04164f4821 -->
## Comments List

Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/comments" \
-H "Accept: application/json" \
    -d "per_page"="57444749" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments",
    "method": "GET",
    "data": {
        "per_page": 57444749
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/comments`

`HEAD api/comments`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    per_page | numeric |  optional  | 

<!-- END_436edae2f6e39cfe485a4d04164f4821 -->

<!-- START_6c560cb463cae69ddba197afa896608b -->
## Comments Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/comments" \
-H "Accept: application/json" \
    -d "text"="nam" \
    -d "calendar_event_id"="nam" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments",
    "method": "POST",
    "data": {
        "text": "nam",
        "calendar_event_id": "nam"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/comments`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    text | string |  required  | 
    calendar_event_id | string |  required  | Valid calendar_event id

<!-- END_6c560cb463cae69ddba197afa896608b -->

<!-- START_e611babbad4ed0fd2e3cde1fcc089be7 -->
## Comments Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/comments/{comments}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments/{comments}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/comments/{comments}`

`HEAD api/comments/{comments}`


<!-- END_e611babbad4ed0fd2e3cde1fcc089be7 -->

<!-- START_75e365b41a05238bfbbebb537c2a2b11 -->
## Comments Update

Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/comments/{comments}" \
-H "Accept: application/json" \
    -d "text"="dolor" \
    -d "calendar_event_id"="dolor" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments/{comments}",
    "method": "PUT",
    "data": {
        "text": "dolor",
        "calendar_event_id": "dolor"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/comments/{comments}`

`PATCH api/comments/{comments}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    text | string |  required  | 
    calendar_event_id | string |  required  | Valid calendar_event id

<!-- END_75e365b41a05238bfbbebb537c2a2b11 -->

<!-- START_5c8aef00c68dd5b657e45195ce3d72ca -->
## Comments Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/comments/{comments}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/comments/{comments}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/comments/{comments}`


<!-- END_5c8aef00c68dd5b657e45195ce3d72ca -->

#File
<!-- START_f178682e39dcb66c17814ee8c3203fcc -->
## File Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/files" \
-H "Accept: application/json" \
    -d "file"="minima" \
    -d "type"="document" \
    -d "entity"="minima" \
    -d "purpose"="minima" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/files",
    "method": "POST",
    "data": {
        "file": "minima",
        "type": "document",
        "entity": "minima",
        "purpose": "minima"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/files`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    file | file |  required  | Must be a file upload
    type | string |  required  | `document` or `image`
    entity | string |  required  | 
    purpose | string |  required  | 

<!-- END_f178682e39dcb66c17814ee8c3203fcc -->

<!-- START_d29afed26b2dd2d2fc9a405a292bc245 -->
## File Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/files/{file}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/files/{file}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/files/{file}`

`HEAD api/files/{file}`


<!-- END_d29afed26b2dd2d2fc9a405a292bc245 -->

<!-- START_7fec844060fbf8f1a57014ed9b6c8e71 -->
## File Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/files/{file}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/files/{file}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/files/{file}`


<!-- END_7fec844060fbf8f1a57014ed9b6c8e71 -->

#Image
<!-- START_63837e0f090ff808858dc8b5cdb9e35e -->
## Image Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/images/{entity}/{path}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/images/{entity}/{path}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Not found."
        ]
    },
    "data": null,
    "status": 404,
    "statusText": "Not Found"
}
```

### HTTP Request
`GET api/images/{entity}/{path}`

`HEAD api/images/{entity}/{path}`


<!-- END_63837e0f090ff808858dc8b5cdb9e35e -->

#User
<!-- START_2eaf9d20e3291194af29e0d07409723d -->
## User Count

Display the count of resource.

> Example request:

```bash
curl -X GET "http://localhost/api/users/count" \
-H "Accept: application/json" \
    -d "granularity"="month" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/count",
    "method": "GET",
    "data": {
        "granularity": "month"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/users/count`

`HEAD api/users/count`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    granularity | string |  optional  | `year`, `month`, `day`, `hour` or `minute`

<!-- END_2eaf9d20e3291194af29e0d07409723d -->

<!-- START_cf7beefad28b7de4fe22b127fd117537 -->
## User Export

Exports a listing of the resource.

Export status == null if the handle was successful

> Example request:

```bash
curl -X GET "http://localhost/api/users/export" \
-H "Accept: application/json" \
    -d "type"="xls" \
    -d "filename"="inventore" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/export",
    "method": "GET",
    "data": {
        "type": "xls",
        "filename": "inventore"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/users/export`

`HEAD api/users/export`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    type | string |  required  | `xls`, `xlsx`, `ods`, `pdf`, `html` or `csv`
    filename | string |  required  | 

<!-- END_cf7beefad28b7de4fe22b127fd117537 -->

<!-- START_da5727be600e4865c1b632f7745c8e91 -->
## User List

Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/users" \
-H "Accept: application/json" \
    -d "per_page"="46833610" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "GET",
    "data": {
        "per_page": 46833610
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/users`

`HEAD api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    per_page | numeric |  optional  | 

<!-- END_da5727be600e4865c1b632f7745c8e91 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## User Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/users" \
-H "Accept: application/json" \
    -d "name"="ut" \
    -d "email"="nakia.mcclure@example.org" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "POST",
    "data": {
        "name": "ut",
        "email": "nakia.mcclure@example.org"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | Maximum: `255`

<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8f99b42746e451f8dc43742e118cb47b -->
## User Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## User Update

Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" \
-H "Accept: application/json" \
    -d "name"="cum" \
    -d "email"="ole99@example.net" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "PUT",
    "data": {
        "name": "cum",
        "email": "ole99@example.net"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | Maximum: `255`

<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## User Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

#UserPermission
<!-- START_ce34ea73ed13a28648aa50c26561daf2 -->
## UserPermission Count

Display the count of resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-permissions/count" \
-H "Accept: application/json" \
    -d "granularity"="minute" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions/count",
    "method": "GET",
    "data": {
        "granularity": "minute"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-permissions/count`

`HEAD api/user-permissions/count`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    granularity | string |  optional  | `year`, `month`, `day`, `hour` or `minute`

<!-- END_ce34ea73ed13a28648aa50c26561daf2 -->

<!-- START_823ee27672ef8d6096bccc52f6109494 -->
## UserPermission Export

Exports a listing of the resource.

Export status == null if the handle was successful

> Example request:

```bash
curl -X GET "http://localhost/api/user-permissions/export" \
-H "Accept: application/json" \
    -d "type"="xls" \
    -d "filename"="illo" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions/export",
    "method": "GET",
    "data": {
        "type": "xls",
        "filename": "illo"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-permissions/export`

`HEAD api/user-permissions/export`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    type | string |  required  | `xls`, `xlsx`, `ods`, `pdf`, `html` or `csv`
    filename | string |  required  | 

<!-- END_823ee27672ef8d6096bccc52f6109494 -->

<!-- START_549076645b53bdb5816624bfb1302582 -->
## UserPermission List

Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-permissions" \
-H "Accept: application/json" \
    -d "per_page"="896" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions",
    "method": "GET",
    "data": {
        "per_page": 896
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-permissions`

`HEAD api/user-permissions`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    per_page | numeric |  optional  | 

<!-- END_549076645b53bdb5816624bfb1302582 -->

<!-- START_e97edfb8be8c82841d23698b9604a35f -->
## UserPermission Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/user-permissions" \
-H "Accept: application/json" \
    -d "entity"="iure" \
    -d "label"="iure" \
    -d "user_type_id"="iure" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions",
    "method": "POST",
    "data": {
        "entity": "iure",
        "label": "iure",
        "user_type_id": "iure"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/user-permissions`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    entity | string |  required  | 
    label | string |  required  | 
    user_type_id | string |  required  | 

<!-- END_e97edfb8be8c82841d23698b9604a35f -->

<!-- START_fab050ba296d7161507eaa66c3d22c88 -->
## UserPermission Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-permissions/{userPermission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions/{userPermission}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-permissions/{userPermission}`

`HEAD api/user-permissions/{userPermission}`


<!-- END_fab050ba296d7161507eaa66c3d22c88 -->

<!-- START_0763bf16f9751f5e06dd80163cc0290a -->
## UserPermission Update

Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/user-permissions/{userPermission}" \
-H "Accept: application/json" \
    -d "entity"="a" \
    -d "label"="a" \
    -d "user_type_id"="a" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions/{userPermission}",
    "method": "PUT",
    "data": {
        "entity": "a",
        "label": "a",
        "user_type_id": "a"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/user-permissions/{userPermission}`

`PATCH api/user-permissions/{userPermission}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    entity | string |  required  | 
    label | string |  required  | 
    user_type_id | string |  required  | 

<!-- END_0763bf16f9751f5e06dd80163cc0290a -->

<!-- START_ab48ba5d87fed0621aea73657297b2ab -->
## UserPermission Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/user-permissions/{userPermission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-permissions/{userPermission}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/user-permissions/{userPermission}`


<!-- END_ab48ba5d87fed0621aea73657297b2ab -->

#UserType
<!-- START_9db314ff9b408bbf7902e847bef8b28c -->
## UserType Count

Display the count of resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-types/count" \
-H "Accept: application/json" \
    -d "granularity"="month" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types/count",
    "method": "GET",
    "data": {
        "granularity": "month"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-types/count`

`HEAD api/user-types/count`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    granularity | string |  optional  | `year`, `month`, `day`, `hour` or `minute`

<!-- END_9db314ff9b408bbf7902e847bef8b28c -->

<!-- START_362c21ccb6c9e373b6fa37ea19f36777 -->
## UserType Export

Exports a listing of the resource.

Export status == null if the handle was successful

> Example request:

```bash
curl -X GET "http://localhost/api/user-types/export" \
-H "Accept: application/json" \
    -d "type"="csv" \
    -d "filename"="hic" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types/export",
    "method": "GET",
    "data": {
        "type": "csv",
        "filename": "hic"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-types/export`

`HEAD api/user-types/export`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    type | string |  required  | `xls`, `xlsx`, `ods`, `pdf`, `html` or `csv`
    filename | string |  required  | 

<!-- END_362c21ccb6c9e373b6fa37ea19f36777 -->

<!-- START_b5b6d902deb018f011f98d863041cf41 -->
## UserType List

Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-types" \
-H "Accept: application/json" \
    -d "per_page"="928719656" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types",
    "method": "GET",
    "data": {
        "per_page": 928719656
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-types`

`HEAD api/user-types`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    per_page | numeric |  optional  | 

<!-- END_b5b6d902deb018f011f98d863041cf41 -->

<!-- START_f56fa9c009da5748b13f86513fe607a8 -->
## UserType Create

Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/user-types" \
-H "Accept: application/json" \
    -d "name"="reprehenderit" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types",
    "method": "POST",
    "data": {
        "name": "reprehenderit"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/user-types`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_f56fa9c009da5748b13f86513fe607a8 -->

<!-- START_1db1ae65f23019d1a168eb785ab82f07 -->
## UserType Show

Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/user-types/{userType}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types/{userType}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "errors": {
        "general": [
            "Unauthenticated."
        ]
    },
    "data": null,
    "status": 401,
    "statusText": "Unauthorized"
}
```

### HTTP Request
`GET api/user-types/{userType}`

`HEAD api/user-types/{userType}`


<!-- END_1db1ae65f23019d1a168eb785ab82f07 -->

<!-- START_a7807b3b8cdfb33e95f4cd6b56b4a690 -->
## UserType Update

Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/user-types/{userType}" \
-H "Accept: application/json" \
    -d "name"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types/{userType}",
    "method": "PUT",
    "data": {
        "name": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/user-types/{userType}`

`PATCH api/user-types/{userType}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_a7807b3b8cdfb33e95f4cd6b56b4a690 -->

<!-- START_2b23463bba41ac03ce08bf1c0a7868f1 -->
## UserType Delete

Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/user-types/{userType}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/user-types/{userType}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/user-types/{userType}`


<!-- END_2b23463bba41ac03ce08bf1c0a7868f1 -->

