<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:20
 */



session_start();
require_once 'actions/REST.php';
require 'vendor/autoload.php';
require_once 'actions/Smarty.php';
require_once 'actions/infoController.php';
require_once 'actions/statusesController.php';

if ( !isset($_SESSION['token']) ) {
    $smarty->display('login.tpl');
} else {
    $smarty->display('index.tpl');
}



