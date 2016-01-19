<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 19.01.2016
 * Time: 00:57
 */

require_once 'REST.php';

session_start();

$rest = new REST();
$rest->AddOptions(array(
    'Content-Type: application/json',
    'Authorization: Bearer ' . $_SESSION['token']
));

$rest->POST('api/v1/comments/do_comment', array(
        'post_id' => $_POST['status_id'],
        'comment' => $_POST['comment-content']
    )
);

header("Location:  ../single-post.php?status_id=".$_POST['status_id']."");