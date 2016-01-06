<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 06.01.2016
 * Time: 14:56
 */

session_start();
require_once 'actions/REST.php';
require_once 'actions/Smarty.php';
require_once 'actions/infoController.php';
$smarty->display('add-status.tpl');