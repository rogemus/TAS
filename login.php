<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 15:05
 */

session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
//require_once 'actions/infoController.php';



if ( isset($_SESSION['token']) ) {
    $smarty->display('index.tpl');
} else {
    $smarty->display('login.tpl');
}


