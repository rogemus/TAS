#OKON API v1

##Overview
TODO

##Register Your App
Wchodzimy na stronę: `http://localhost:3000/oauth/applications`. Klikamy **New Application**.
```
Name: NzwaAplikacji
Redirect URI: urn:ietf:wg:oauth:2.0:oob
Scopes: Zostawiamy puste
```
Następnie zatwierdzamy zmiany **Submit**
Na liście powinna pojawić się nowo utworzona aplikacja. Klikamy w nią i naszym oczą ukazuje się: `Application Id` oraz `Secret `. Są to rzeczy potrzebne poczas autoryzacji.

##Authentication
We use an OAuth 2.0, an authentication protocol.
Endpointy systemu oauth, warto zaglądnąć. [Source](https://github.com/doorkeeper-gem/doorkeeper/wiki/api-endpoint-descriptions-and-examples)

###Getting access tokens

```
curl -H "Content-Type: application/json" \
-X POST -d '{"client_id":"CLIENT_ID",
 "client_secret":"CLIENT_SECRET",
 "grant_type":"password",
 "password":"12345678",
 "username":"jack@a.com"}' \
 http://localhost:3000/oauth/token
```
W odpowiedzi powinniśmy otrzymać `access_token`. Będzie on nam potrzebny np podczas dodawania nowego statusu.

##User Sign Up
Zakładamy nowe konto.
```
curl -H "Content-Type: application/json" \
-X POST \
-d '{"first_name":"Kathy",
"last_name":"Sierra",
"profile_name":"sierra_official",
"email":"sierra@a.com",
"password":"12345678",
"password_confirmation":"12345678"}' \
http://localhost:3000/api/v1/users/sign_up
```
## Index

Base URL: `http://0.0.0.0:3000/api/v1`
Przykład: `http://0.0.0.0:3000/api/v1/statuses/statuses`

### [Statuses](/)
| Endpoint | Description |
| ---- | --------------- |
| GET /statuses/statuses | Wszystkie statusy|
| GET /statuses/feed | Statusy (OAUTH)|
| GET /statuses/:id| Statusy dla danego użytkownika|
| [POST /statuses/new](/v1_resources/statuses.md) | Nowy status|
| PUT /statuses/:id | Edytuj status o danym id |

### [Users](/)
| Endpoint | Description |
| ---- | --------------- |
| GET /users/recent/:id |Statusy napisane przez danego użytkownika|
| GET /users/id/:id|Informacje o danym użytkowniku|
| GET /users/me|Informacje o "zalogowanym" użytkowniku (OAUTH)|
| POST /users/sign_up" | Nowy użytkownik|



