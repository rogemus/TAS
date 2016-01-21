<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:44
 */
require_once 'REST.php';

session_start();

$rest_file = new REST();
$rest_file->AddOptions(array(
    'Content-Type:multipart/form-data',
    'Authorization: Bearer ' . $_SESSION['token']
));


$rest_file->POST_FILE('api/v1/images/upload_image', array(
        'avatar' => '@' .$_FILES['attachment-img']['tmp_name']
                       . ';filename=' . $_FILES['attachment-img']['name'])
);

var_dump($_FILES['attachment-img']);

//$rest = new REST();
//$rest->AddOptions(array(
//    'Content-Type: application/json',
//    'Authorization: Bearer ' . $_SESSION['token']
//));
//$rest->POST('api/v1/statuses/new', array(
//        'content' => $_POST['content'])
//);

//header('Location: ../index.php');

//# curl -H 'Authorization: Bearer <token>' -F avatar=@ <zdjęcie> -X POST http://localhost:3000/api/v1/images/upload_image
