<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:28
 */

require_once 'REST.php';

session_start();

echo '<pre>';

$rest = new REST();
$result = null;

if ( !isset($_SESSION['token']) )
    header('Location: index.php');

if ( isset($_GET['iduser']) )
{
    $result = $rest->GET('api/v1/statuses/'.intval($_GET['iduser']));
}
else
{
    $result = $rest->GET('api/v1/statuses/statuses');
}

$content = function() use ($result) {
    require_once 'addStatusPage.html';

    print_r($result);

    //echo $result[0]->user->full_name;
};

require_once 'templateIndex.php';