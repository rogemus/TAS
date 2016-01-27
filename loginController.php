<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 22:24
 */
require_once 'vendor/autoload.php';
require 'Smarty.php';
require_once 'guzzle.php';
define('APP_ID', 'd2132e6db96d110b3eb68a368211933500efbd819abcf4ff652e63abaa335648');
define('SECRET', 'd39ed914f8dad145833d51ee86492a182519c58769c1d95e17a4c249d0261812');


session_start();
if (isset($_SESSION['token'])) {
    $smarty->display('index.tpl');
} else {
    $smarty->display('login.tpl');
}
$request = $client->request('POST', '/oauth/token', array(
    'json' => ['client_id' => APP_ID,
        'client_secret' => SECRET,
        'grant_type' => 'password',
        'password' => $_POST['password'],
        'username' => $_POST['email']
    ],
    'headers' => [
        'Content-type' => 'application/json',
    ],
));

$token = json_decode($request->getBody());
( isset($token->access_token) ) ? $_SESSION['token'] = $token->access_token : die();

header('Location: ../index.php');



