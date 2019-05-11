#Friendships

### [Friendships](/)
| Endpoint | Description |
| ---- | --------------- |
| [GET /friendships](/v1_resources/friendships.md#get-friendships)|Lista znajomości właściciela (OAUTH)|
| [POST /friendships](/v1_resources/friendships.md#post-friendships)|Nowa znajomość(OAUTH)|
| [POST /friendships/create](/v1_resources/friendships.md#post-friendshipscreate)|Create friendships(OAUTH)|
| [PUT /friendships/:id/edit](/v1_resources/friendships.md) | Edit friendships|
|[PUT /friendships/:id/accept](/v1_resources/friendships.md#put-friendshipsidaccept)|Accept friendships|
|[DELETE /friendships/:id](/v1_resources/friendships.md#delete-friendshipsid)|Delete friendship|


## `GET /friendships`
Lista znajomości właściciela
*__Authenticated__*

###Example Request

```bash
curl -H "Content-Type: application/json" \
-H "Authorization: Bearer <ACCESS_TOKEN>" \
-X GET http://0.0.0.0:3000/api/v1/friendships/index
```
###Example Response
```json
[{
  "id": 3,
  "user_id": 1,
  "friend_id": 1,
  "created_at": "2016-01-09T22:16:34.980Z",
  "updated_at": "2016-01-09T22:16:34.980Z",
  "state": "pending",
  "user": {
    "id": 1,
    "profile_name": "janusz",
    "full_name": "janusz janusz",
    "email": "janusz@janusz.com",
    "gravatar_url": "http://gravatar.com/avatar/4261e10e0074438b83147a48d5bca2f9"
  },
  "friend": {
    "id": 1,
    "profile_name": "janusz",
    "full_name": "janusz janusz",
    "email": "janusz@janusz.com",
    "gravatar_url": "http://gravatar.com/avatar/4261e10e0074438b83147a48d5bca2f9"
  }
}, {
  "id": 4,
  "user_id": 1,
  "friend_id": 1,
  "created_at": "2016-01-09T22:16:34.984Z",
  "updated_at": "2016-01-09T22:16:34.984Z",
  "state": "requested",
  "user": {
    "id": 1,
    "profile_name": "janusz",
    "full_name": "janusz janusz",
    "email": "janusz@janusz.com",
    "gravatar_url": "http://gravatar.com/avatar/4261e10e0074438b83147a48d5bca2f9"
  },
  "friend": {
    "id": 1,
    "profile_name": "janusz",
    "full_name": "janusz janusz",
    "email": "janusz@janusz.com",
    "gravatar_url": "http://gravatar.com/avatar/4261e10e0074438b83147a48d5bca2f9"
  }
}, {
  "id": 1,
  "user_id": 1,
  "friend_id": 2,
  "created_at": "2016-01-09T21:42:00.826Z",
  "updated_at": "2016-01-09T21:42:28.079Z",
  "state": "accepted",
  "user": {
    "id": 1,
    "profile_name": "janusz",
    "full_name": "janusz janusz",
    "email": "janusz@janusz.com",
    "gravatar_url": "http://gravatar.com/avatar/4261e10e0074438b83147a48d5bca2f9"
  },
  "friend": {
    "id": 2,
    "profile_name": "janusz2",
    "full_name": "janusz2 janusz2",
    "email": "janusz2@janusz2.com",
    "gravatar_url": "http://gravatar.com/avatar/d7b16000ae1b70faf471512aa7e593e3"
  }
}]

```

## `POST /friendships/create`
Nowa znajomość.
PS. Nie wiem co to robi. Radzę używać create
*__Authenticated__*

### Parameters

| Name            | Required? | Type    | Description                                                                                                                                      |
|:----------------|:----------|:--------|:---------|
| `friend_id` | required  | string | User ID |

###Example Request

```bash
curl -H "Content-Type: application/json" \
-H "Authorization: Bearer  <ACCESS_TOKEN>" \
-X POST -d '{"user_friendship": {"friend_id":"<FRIEND_ID>"}}' \
http://localhost:3000/api/v1/friendships/new

```
###Example Response
```json
TODO
```

## `PUT /friendships/:id/accept`
Accept friendships from user `:id`
*__Authenticated__*

###Example Request

```bash
curl -H "Content-Type: application/json" \
-H "Authorization: Bearer <ACCESS_TOKEN>" \
-X PUT http://0.0.0.0:3000/api/v1/friendships/:id/accept
```
###Example Response
```json
TODO
```


## `DELETE /friendships/:id`
Delete friendship with `:id`
*__Authenticated__*

###Example Request

```bash
curl -H "Content-Type: application/json" \
-H "Authorization: Bearer <ACCESS_TOKEN>" \
-X DELETE http://0.0.0.0:3000/api/v1/friendships/:id
```
###Example Response
```json
TODO
```













## `POST /friendships`
Nowa znajomość.
PS. Nie wiem co to robi. Radzę używać create
*__Authenticated__*

### Parameters

| Name            | Required? | Type    | Description                                                                                                                                      |
|:----------------|:----------|:--------|:---------|
| `friend_id` | required  | string | User profile_name |

###Example Request

```bash
TODO
```
###Example Response
```json
TODO
```
