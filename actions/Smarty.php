<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 15:03
 */
require('Smarty.class.php');


// load Smarty library


$smarty = new Smarty;

$smarty->template_dir = 'C:/xampp/htdocs/okonbok_client/smarty/templates';
$smarty->config_dir = 'C:/xampp/htdocs/okonbok_client/smarty/config';
$smarty->cache_dir = 'C:/xampp/smarty/cache';
$smarty->compile_dir = 'C:/xampp/smarty/templates_c';
