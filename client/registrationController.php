<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 27.01.2016
 * Time: 14:11
 */


require 'vendor/autoload.php';
require 'guzzle.php';
require_once 'Smarty.php';
session_start();

$request = $client->request('POST', '/api/v1/users/sign_up', [
        'json' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'profile_name' => $_POST['profile_name'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'password_confirmation' => $_POST['password_confirmation']
        ],
        'headers' => [
            'Content-type' => 'application/json',
        ],
    ]
);

header('Location: login.php');