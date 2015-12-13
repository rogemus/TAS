<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:20
 */



require_once 'REST.php';
require_once 'Smarty.php';

session_start();

if ( !isset($_SESSION['token']) ) {
    $smarty->display('login.tpl');
} else {
    $smarty->display('index.tpl');
}



