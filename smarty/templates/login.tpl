{include file='header.tpl'}
{include file='middle.tpl'}
<form action="loginController.php" method="post">

    <label for="email">Email</label>

     <input type="email" name="email">

    <label for="password">Password</label>
    <input type="password" name="password">

    <input type="submit" value="Login">

</form>

{include file='footer.tpl'}