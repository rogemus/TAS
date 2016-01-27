<?php


//define('APP_ID', 'd2132e6db96d110b3eb68a368211933500efbd819abcf4ff652e63abaa335648');
//define('SECRET', 'd39ed914f8dad145833d51ee86492a182519c58769c1d95e17a4c249d0261812');
//$client = new GuzzleHttp\Client();
////$res = $client->request('GET', 'http://localhost:3000/api/v1/statuses/statuses');
////echo $res->getHeaderLine('content-type');
////echo $res->getBody();
//
//$url = 'http://localhost:3000/api/v1/statuses/new';
//
////curl -H "Content-Type: application/json" -H 'Authorization: Bearer <access_token>' \
////-d '{"content":"To jest moj nowy status"}' -X POST http://0.0.0.0:3000/api/v1/statuses/new
//
//$request =$client->post($url,array(
//    'content-type' => 'application/json'
//),array());
//$data = "Guzzle";
//
////$request->setBody($data); #set body!
//$accessToken = 'd472d07bd36bfd7ed0ae51785a3683e3ace19ee7b186ccd8f7b6ec7fdffff329';
//$request->addHeader('Authorization: Bearer', $accessToken);
//$response = $request->send();
//


require_once 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;
use GuzzleHttp\RequestOptions;

$client = new Client([
    'base_uri' => 'http://localhost:3000',
    'timeout' => 2.0,
]);

$aut = 'e876dd0d1cfe5d8bbd51e199e1b2d324b6403922ee1bff5d2c4e116926159961';


////GET
//$response = $client->request('GET', '/api/v1/statuses/feed', [
//    'headers' => [
//        'Content-type' => 'application/json',
//        'Authorization' => 'Bearer ' . $aut
//    ],
//]);

////POST status bez obrazu
//$request = $client->request('POST', '/api/v1/statuses/new', [
//    'json' => ['content' => 'test'],
//    'headers' => [
//        'Content-type' => 'application/json',
//        'Authorization' => 'Bearer ' . $aut
//    ],
//]);
//$path = 'C:/xampp/htdocs/Guzzletest/wow.jpg';
//echo $path2 = "@" . dirname(__FILE__) . "\\wow.jpg";
//echo $path;

//POST obrazow
$request = $client->request('POST', '/api/v1/images/upload_image', [
    'multipart' => [
        [
            'name' => 'avatar',
            'contents' => fopen('C:/xampp/htdocs/Guzzletest/wow.jpg', 'r'),
            'filename' => 'wow.jpg',
        ],
    ],
    'headers' => [
        //'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $aut
    ],
]);


$body = $request->getBody();
//$body = $response->getBody();

//
//curl -H "Content-Type: application/json" -H 'Authorization: Bearer e876dd0d1cfe5d8bbd51e199e1b2d324b6403922ee1bff5d2c4e116926159961' -d '{"content":"To jest moj nowy status z obrazem"}' -X POST http://localhost:3000/api/v1/statuses/new


echo $body;