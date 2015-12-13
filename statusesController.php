<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:28
 */

require_once 'REST.php';
require_once 'Smarty.php';

//Wszystkie statusy
session_start();
$rest = new REST();
$result = null;
$rest->AddOptions(array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$_SESSION['token']
));

$result = $rest->GET('api/v1/statuses/feed');










