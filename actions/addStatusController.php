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
    'Content-Type: multipart/form-data',
    'Authorization: Bearer ' . $_SESSION['token']
));

//$cos = '@' .$_FILES['avatar']['name'];
//$cos = $_POST['avatar'];

//$path = realpath($_POST['avatar']);
$path = realpath($_FILES['avatar']['tmp_name']);

var_dump($path);
echo $path;
$rest_file->POST_FILE('api/v1/images/upload_image', array(
        'avatar' => "@".$path)
);

//echo '@' .$_FILES['avatar']['tmp_name']. ';filename="' . $_FILES['avatar']['name'].'"';

//#curl -H "Content-Type:multipart/form-data" -H 'Authorization: Bearer c5ed43f5332fa217770ef287b49cf4a1e552cca2b77a25442296a5b81107bfbc'
//# -F avatar=@C:/Users/Kacper/Desktop/wow.jpg http://localhost:3000/api/v1/images/upload_image