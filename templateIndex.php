<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 10:50
 */

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php null; ?></title>
</head>
<body>
    <?php if(isset($_SESSION['token'])) include_once 'topMenu.php'; ?>

    <?php $content(); ?>

    <footer></footer>
</body>
</html>