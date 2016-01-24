<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:44
 */
require_once 'REST.php';

session_start();
//$http= new \GuzzleHttp\Client();
//https://www.youtube.com/watch?v=io_r-0e3Qcw
$rest_file = new REST();
$rest_file->AddOptions(array(
    "Content-Disposition: form-data; name=\"avatar\"; filename=\"{$_FILES['avatar']['name']}\"",
    "Content-Type: application/octet-stream",
    'Authorization: Bearer c5ed43f5332fa217770ef287b49cf4a1e552cca2b77a25442296a5b81107bfbc'
));


$rest_file->POST_FILE('api/v1/images/upload_image', array(
        'avatar=@C:/Users/Kacper/Desktop/wow.jpg')
);

//"C:\xampp\tmp\php723B.tmp"

echo '<pre>';
var_dump($_FILES['avatar']);
echo '<hr>';
echo '@' .$_FILES['avatar']['tmp_name']. ';filename="' . $_FILES['avatar']['name'].'"';
echo '<hr>';
var_dump($_POST);

//curl -H "Content-Type:multipart/form-data" -H 'Authorization: Bearer c5ed43f5332fa217770ef287b49cf4a1e552cca2b77a25442296a5b81107bfbc'
// -F avatar=@C:/Users/Kacper/Desktop/wow.jpg http://localhost:3000/api/v1/images/upload_image

//$rest_file = new REST();
//$rest_file->AddOptions(array(
//    'Content-Type:multipart/form-data',
//    'Authorization: Bearer ' . $_SESSION['token']
//));


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


#curl -H "Content-Type:multipart/form-data" -H 'Authorization: Bearer c5ed43f5332fa217770ef287b49cf4a1e552cca2b77a25442296a5b81107bfbc'
# -F avatar=@C:/Users/Kacper/Desktop/wow.jpg http://localhost:3000/api/v1/images/upload_image
