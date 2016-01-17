<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:03
 */

require_once 'REST.php';

define('APP_ID', '3427427c3c4c02e45a446c0dbef028662ea69752365e480b03ff85cd001fd879');
define('SECRET', 'dbc7556973a022c7d29f7de57eb969c6f2b653b416189e84aed3b05dfb65ca4e');

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