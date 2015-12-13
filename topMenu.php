<?php
/**
 * Created by PhpStorm.
 * User: Kacper
 * Date: 13.12.2015
 * Time: 11:49
 */

if ( isset($_POST['logout']) && $_POST['logout'] === 'true' )
{
    foreach ( $_SESSION as $key => $var )
        unset( $_SESSION[$key] );

    session_destroy();

    header('Location: index.php');
}
?>

<nav>
    <form action="" method="post">
        <label for="Logout">Logout</label>
        <input type="submit" value="true" name="logout">
    </form>
</nav>
