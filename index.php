<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:20
 */



session_start();
require_once 'REST.php';
require_once 'Smarty.php';
require_once 'infoController.php';

if ( !isset($_SESSION['token']) ) {
    $smarty->display('login.tpl');
} else {
    $smarty->display('index.tpl');
}



