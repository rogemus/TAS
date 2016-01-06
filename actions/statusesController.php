<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:28
 */


require_once 'REST.php';
require_once 'Smarty.php';


if (isset($_SESSION['token'])) {
//Wszystkie statusy
    $rest = new REST();
    $result = null;
    $rest->AddOptions(array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $_SESSION['token']
    ));

    $result = $rest->GET('api/v1/statuses/feed');
    $x = json_encode($result);
    $smarty->assign('statuses', $x);
} else {
    //w przeciwnym wypadku
}

