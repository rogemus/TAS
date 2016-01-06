<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:03
 */

require_once 'REST.php';

define('APP_ID', 'a3166109da6ead362fe6548c204b33e4cd7645cf78c4d21be0c1782ffafb535b');
define('SECRET', '8df462a2d5065a9a641043a6817c413a8a877d75297252b202a6fa6ce3fa563f');

session_start();

$rest = new REST();
$rest->AddOptions(array(
    'Content-Type: application/json'
));
$token = $rest->POST( 'oauth/token', array(
    'client_id' => APP_ID,
    'client_secret' => SECRET,
    'grant_type' => 'password',
    'password' => $_POST['password'],
    'username' => $_POST['email']
));

( isset($token->access_token) ) ? $_SESSION['token'] = $token->access_token : die();

header('Location: ../index.php');