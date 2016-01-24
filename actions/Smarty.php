<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 15:03
 */
//require('../vendor/smarty/smarty/libs/Smarty.class.php');
require('Smarty.class.php');

// load Smarty library


$smarty = new Smarty;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->setTemplateDir('smarty/templates');
$smarty->setConfigDir('smarty/config');
$smarty->setCacheDir('smarty/cache');
$smarty->setCompileDir('smarty/templates_c');
