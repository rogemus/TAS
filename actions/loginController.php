<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:03
 */

require_once 'REST.php';

define('APP_ID', 'd2132e6db96d110b3eb68a368211933500efbd819abcf4ff652e63abaa335648');
define('SECRET', 'd39ed914f8dad145833d51ee86492a182519c58769c1d95e17a4c249d0261812');

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