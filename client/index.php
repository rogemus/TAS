<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 22:57
 */

require_once 'Smarty.php';
require_once 'guzzle.php';
require_once 'statusesController.php';
require_once 'infoController.php';
require 'vendor/autoload.php';

if ( isset($_SESSION['token']) ) {
    $smarty->display('index.tpl');
} else {
    $smarty->display('login.tpl');
}


