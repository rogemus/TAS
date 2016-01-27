<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 26.01.2016
 * Time: 23:55
 */

session_start();
$_SESSION = array();
session_unset();
session_destroy();
header("Location:index.php");
exit();
