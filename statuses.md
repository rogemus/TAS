## `POST /statuses/new`
Nowy status
**Authenticated**
### Parameters

| Name            | Required? | Type    | Description                                                                                                                                      |
|:----------------|:----------|:--------|:-------------------------------------------------------------------------------------------------------------------------------------------------|
| `content` | required  | string | Treść statusu |

###Example Request

```json
curl -H "Content-Type: application/json" -H 'Authorization: Bearer <access_token>' \
-d '{"content":"To jest moj nowy status"}' -X POST http://0.0.0.0:3000/api/v1/statuses/new
```
###Example Response
```json
{
	"status":{
		"id":19,"content":"To jest moj nowy status",
		"created_at":"2015-12-11T16:34:35.288Z",
		"updated_at":"2015-12-11T16:34:35.288Z",
		"user":{
			"id":1,"profile_name":"jack",
			"full_name":"Jack Donovan",
			"email":"jack@a.com",
			"gravatar_url":"http://gravatar.com/avatar/65e3decf042ec7017e71be6d2a9dc6ff"
		}
	}
}
```
