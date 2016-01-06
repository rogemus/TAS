{include file='header.tpl'}
{include file='middle.tpl'}

<form name="registration_form" action="registrationController.php" onsubmit="return validateForm()" method="post">

    <label for="first_name">First Name</label>
    <input type="text" id="first_name" name="first_name">

    <label for="last_name">Last Name</label>
    <input type="text" id="last_name" name="last_name">

    <label for="profile_name">Profile Name</label>
    <input type="text" id="profile_name" name="profile_name">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="password">Password</label>
    <input type="password" id="password" name="password">

    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" id="password_confirmation" name="password_confirmation">

    <input type="submit" value="Register">

</form>
{include file='footer.tpl'}