<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 13:46
 */


session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
require_once 'actions/infoController.php';


    $rest = new REST();
    $result = null;
    $rest->AddOptions(array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $_SESSION['token']
    ));

    $result = $rest->GET('api/v1/users/me');

    echo '<pre>';
    var_dump($result);



