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
TODO
```

## `POST /friendships/create`
Nowa znajomość.
PS. Nie wiem co to robi. Radzę używać create
*__Authenticated__*

### Parameters

| Name            | Required? | Type    | Description                                                                                                                                      |
|:----------------|:----------|:--------|:---------|
| `friend_id` | required  | string | User profile_name |

###Example Request

```bash
curl -H "Content-Type: application/json" \
-H "Authorization: Bearer  <ACCESS_TOKEN>" \
-X POST -d '{"friend_id":"<FRIEND_ID>"}' \
http://0.0.0.0:3000/api/v1/friendships/create
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
