<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 23:31
 */

session_start();
require_once 'Smarty.php';
require 'vendor/autoload.php';
require 'guzzle.php';
require 'infoController.php';
$status_id = $_GET['status_id'];

$response = $client->request('GET', '/api/v1/statuses/' . $status_id, [
    'headers' => [
        'Content-type' => 'application/json',
    ],
]);

$result = json_decode($response->getBody());

$single_status_content = $result->status->content;
$single_status_created_at = $result->status->created_at;
$single_status_user = $result->status->user->full_name;
$single_status_user_avatar = $result->status->user->gravatar_url;
$single_status_image = "";
if ($result->status->image != null) {
    $single_status_image = $result->status->image->img;

}


$smarty->assign('single_status_content', $single_status_content);
$smarty->assign('single_status_created_at', $single_status_created_at);
$smarty->assign('single_status_full_name', $single_status_user);
$smarty->assign('single_status_avatar', $single_status_user_avatar);


$smarty->assign('single_status_image', $single_status_image);


$response2 = $client->request('GET', '/api/v1/comments/get_comments_for_post/' . $status_id, [
    'headers' => [
        'Content-type' => 'application/json',
    ],
]);
$comments = (object) json_decode($response2->getBody());
$smarty->assign('comments', $comments);
$smarty->display('single-post.tpl');

