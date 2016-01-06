<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 13:23
 */

session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
//require_once 'infoController.php';

$smarty->display('registration.tpl');


