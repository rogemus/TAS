<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 15.12.2015
 * Time: 17:17
 */



if ( isset($_SESSION['token']) ) {
    $rest = new REST();
    $result = null;
    $rest->AddOptions(array(
        'Content-Type: application/json',
        'Authorization: Bearer '.$_SESSION['token']
    ));

    $result = $rest->GET('api/v1/users/me');

    $user_current_full_name = $result->full_name;
    $user_current_gravatar_url = $result->gravatar_url;
    $user_current_email = $result -> email;

    $smarty->assign('user_full_name', $user_current_full_name);
    $smarty->assign('user_avatar', $user_current_gravatar_url);
}



