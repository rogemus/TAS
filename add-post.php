<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 27.01.2016
 * Time: 12:44
 */

session_start();
require_once 'Smarty.php';
require_once 'infoController.php';

if ( isset($_SESSION['token']) ) {
    $smarty->display('add-status.tpl');
} else {
    $smarty->display('login.tpl');
}
