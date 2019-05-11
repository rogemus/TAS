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
// curl -H 'Authorization: Bearer c5ed43f5332fa217770ef287b49cf4a1e552cca2b77a25442296a5b81107bfbc'
// -F file=@C:/Users/Kacper/Desktop/cyurl.txt -X POST http://localhost:3000/api/v1/files/upload_document


$image_id = 0;
$file_id = 0;

if ($_FILES['file']['tmp_name'] != ""  ){


    $request = $client->request('POST', '/api/v1/files/upload_document', [
        'multipart' => [
            [
                'name' => 'file',
                'contents' => fopen($_FILES['file']['tmp_name'], 'r'),
                'filename' => $_FILES['file']['name'],
            ],
        ],
        'headers' => [
            'Authorization' => 'Bearer ' . $_SESSION['token']
        ],
    ]);
    $file_id = json_decode($request->getBody());
}
if ($_FILES['avatar']['tmp_name'] != "") {
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
    $image_id = json_decode($request->getBody());
}

$request = $client->request('POST', '/api/v1/statuses/new', [
    'json' => [
        'content' => $_POST['content'],
        'image_id' => $image_id,
        'document_id' => $file_id
    ],
    'headers' => [
        'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $_SESSION['token']
    ],
]);

header('Location: index.php');
