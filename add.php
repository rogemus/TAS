<?php
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


$request = $client->request('POST', '/api/v1/images/upload_image', [
    'multipart' => [
        [
            'name' => 'avatar',
            'contents' => fopen($_FILES['avatar']['tmp_name'], 'r'),
            'filename' => $_FILES['avatar']['name'],
        ],
    ],
    'headers' => [
//'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $aut
    ],
]);