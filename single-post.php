<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 06.01.2016
 * Time: 16:21
 */

session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
require_once 'actions/infoController.php';
$status_id = $_GET[status_id];

$rest = new REST();
$result = null;
$rest->AddOptions(array(
    'Content-Type: application/json'
));

$result = $rest->GET('/api/v1/statuses/'.$status_id.'');

$single_status_content = $result->status->content;
$single_status_created_at = $result->status->created_at;
$single_status_user = $result->status->user->full_name;
$single_status_user_avatar = $result->status->user->gravatar_url;

$smarty->assign('single_status_content', $single_status_content);
$smarty->assign('single_status_created_at', $single_status_created_at);
$smarty->assign('single_status_full_name', $single_status_user);
$smarty->assign('single_status_avatar', $single_status_user_avatar);


$smarty->display('single-post.tpl');

