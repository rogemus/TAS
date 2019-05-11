<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 23:05
 */

require_once 'vendor/autoload.php';
require_once 'guzzle.php';
require_once 'Smarty.php';

if (isset($_SESSION['token'])) {

    $response = $client->request('GET', '/api/v1/users/me', [
        'headers' => [
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . $_SESSION['token']
        ],
    ]);
    $result = json_decode($response->getBody());
    $user_current_full_name = $result->full_name;
    $user_current_gravatar_url = $result->gravatar_url;
    $user_current_email = $result->email;
    $user_current_id = $result->id;

    $smarty->assign('user_full_name', $user_current_full_name);
    $smarty->assign('user_avatar', $user_current_gravatar_url);
    $smarty->assign('user_id', $user_current_id);

}

