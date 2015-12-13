<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 13:46
 */

require_once 'REST.php';

session_start();

echo '<pre>';

$rest = new REST();
$result = null;

if ( !isset($_SESSION['token']) ) {
    header('Location: loginPage.php');
} else {
    $rest = new REST();
    $rest->AddOptions(array(
        'Content-Type: application/json',
        'Authorization: Bearer '.$_SESSION['token']
    ));

    var_dump( $userMe = $rest->GET('api/v1/users/me') );
}

