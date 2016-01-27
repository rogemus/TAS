<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 22:28
 */
session_start();
require_once 'Smarty.php';

if ( isset($_SESSION['token']) ) {
    $smarty->display('index.tpl');
} else {
    $smarty->display('login.tpl');
}


