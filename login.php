<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 15:05
 */

session_start();
require_once 'REST.php';
require_once 'Smarty.php';
require_once 'infoController.php';

$smarty->display('login.tpl');


