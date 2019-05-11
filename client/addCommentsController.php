<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 27.01.2016
 * Time: 00:15
 */


require_once 'Smarty.php';
require_once 'guzzle.php';
require 'vendor/autoload.php';
session_start();

$request = $client->request('POST', '/api/v1/comments/do_comment', [
    'json' => [
        'post_id' => $_POST['status_id'],
        'comment' => $_POST['comment-content']
    ],
    'headers' => [
        'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . $_SESSION['token']
    ],
]);

header("Location:  single-post.php?status_id=" . $_POST['status_id']);