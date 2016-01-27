<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 22:57
 */
require_once 'Smarty.php';
require_once 'vendor/autoload.php';
require_once 'guzzle.php';
session_start();
if ( isset($_SESSION['token']) ) {

    $response = $client->request('GET', '/api/v1/statuses/feed', [
        'headers' => [
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . $_SESSION['token']
        ],
    ]);




    $statuses = (object) json_decode($response->getBody());
    $smarty->assign('statuses', $statuses);
} else {
   // $smarty->display('login.tpl');
}

