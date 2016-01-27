<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 27.01.2016
 * Time: 12:43
 */


require_once 'Smarty.php';
require_once 'guzzle.php';
require 'vendor/autoload.php';
session_start();

$request = $client->request('POST', '/api/v1/images/upload_image', [
    'multipart' => [
        [
            'name' => 'avatar',
            'contents' => fopen($_FILES['avatar']['tmp_name'], 'r'),
            'filename' => $_FILES['avatar']['name'],
        ],
    ],
    'headers' => [
        'Authorization' => 'Bearer ' . $_SESSION['token']
    ],
]);
//$token = json_decode($request->getBody());
$image_id = json_decode($request->getBody());

$request = $client->request('POST', '/api/v1/statuses/new', [
    'json' => [
        'content' => 'test',
        'image_id' => $image_id
    ],
    'headers' => [
        'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $_SESSION['token']
    ],
]);

header('Location: index.php');
