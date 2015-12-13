<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:20
 */


require_once 'REST.php';

session_start();

if ( !isset($_SESSION['token']) ) {
    header('Location: loginPage.php');
} else {


    $content = function(){
        $rest = new REST();
        $result = null;

        $rest->AddOptions(array(
            'Content-Type: application/json',
            'Authorization: Bearer '.$_SESSION['token']
        ));
        $result = $rest->GET('api/v1/statuses/feed');

//print_r($result);

//wypisywanie wszytskich postów po autoryzacji
        foreach ( $result as $key => $var ){
            echo $result[$key]->user->full_name;
            ?>
            <br>
            <?php
            echo $result[$key]->content;
            ?>
            <br>
            <?php
        }
    };

}


require_once 'templateIndex.php';



