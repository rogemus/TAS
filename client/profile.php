<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 23:44
 */
require_once 'Smarty.php';
require_once 'guzzle.php';
require_once 'statusesController.php';
require_once 'infoController.php';
require 'vendor/autoload.php';

$user_id = $_GET['user_id'];

//GET
$response = $client->request('GET', '/api/v1/statuses/statuses', [
    'headers' => [
        'Content-type' => 'application/json',
    ],
]);

$statuses = (object) json_decode($response->getBody());

$smarty->assign('statuses', $statuses);
$smarty->assign('status_id', $user_id);


$response2 = $client->request('GET', 'api/v1/users/id/'.$user_id, [
    'headers' => [
        'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $_SESSION['token']
    ],
]);
$user_info = (object) json_decode($response2->getBody());

$smarty->assign('user', $user_info);

$smarty->display('profile.tpl');
