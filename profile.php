<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 06.01.2016
 * Time: 18:30
 */

session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
require_once 'actions/infoController.php';

$user_id = $_GET['user_id'];

$rest = new REST();
$result = null;
$rest->AddOptions(array(
    'Content-Type: application/json'
));
$result = $rest->GET('/api/v1/statuses/statuses');
$x = json_encode($result);

$smarty->assign('statuses', $x);
$smarty->assign('status_id', $user_id);

$rest = new REST();
$result = null;
$rest->AddOptions(array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $_SESSION['token']
));

$result = $rest->GET('api/v1/users/id/'.$user_id.'');

$smarty->assign('user', $result);

$smarty->display('profile.tpl');
