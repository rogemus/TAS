<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:03
 */

require_once 'REST.php';

define('APP_ID', 'a838a01f7ac2b99755e9b25cbd47d972d011ffe2e2072585f47dce22aa8753b2');
define('SECRET', '1ecd5c2d27a3297aec811b4cfe9bd0f9da8d7d0cf05de41d82335b940fc7dec1');

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

header('Location: index.php');