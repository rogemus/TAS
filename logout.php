<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 21:49
 */

session_start();
$_SESSION = array();
session_unset();
session_destroy();
header("Location:index.php");
exit();
