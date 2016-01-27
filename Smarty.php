<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 22:21
 */
require('vendor/smarty/smarty/libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->setTemplateDir('smarty/templates');
$smarty->setConfigDir('smarty/config');
$smarty->setCacheDir('smarty/cache');
$smarty->setCompileDir('smarty/templates_c');
