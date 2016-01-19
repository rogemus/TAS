<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 17.01.2016
 * Time: 21:34
 */

if ( isset($_SESSION['token']) ) {
    $rest = new REST();
    $result = null;
    $rest->AddOptions(array(
        'Content-Type: application/json',
        'Authorization: Bearer '.$_SESSION['token']
    ));

    $result = $rest->GET('api/v1/images/show_all_img');

    $user_current_full_name = $result->full_name;
    $user_current_gravatar_url = $result->gravatar_url;
    $user_current_email = $result -> email;

    $smarty->assign('user_full_name', $user_current_full_name);
    $smarty->assign('user_avatar', $user_current_gravatar_url);
}



