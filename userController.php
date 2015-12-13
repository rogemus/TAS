<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 13:46
 */

require_once 'REST.php';
require_once 'Smarty.php';


session_start();
$rest = new REST();
$result = null;
$rest->AddOptions(array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$_SESSION['token']
));

$result = $rest->GET('api/v1/users/me');

$user_full_name = $result->full_name;
var_dump($user_full_name);
$smarty->assign('user_full_name', $user_full_name);







