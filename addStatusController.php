<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:44
 */
require_once 'REST.php';

session_start();

$rest = new REST();
$rest->AddOptions(array(
   'Content-Type: application/json',
    'Authorization: Bearer '.$_SESSION['token']
));
print_r($rest->POST('api/v1/statuses/new', array(
    'content' => $_POST['content'])
));

