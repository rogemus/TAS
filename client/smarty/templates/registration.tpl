{include file='module/header.tpl'}
{nocache}
<div id="main">
    <div class="wrapper">
        <div class="header"></div>
        <div class="grid"></div>
        <div class="form-box">
            <header class="logo">
                <h2>OkonBOOK</h2>
            </header>
            <div class="content">
                <form id="signup" class="pure-form pure-form-stacked" name="registration_form"
                      action="registrationController.php" method="post">
                    <fieldset>
                        <p>
                            <label for="first_name">First Name</label>
                            <input id="first_name" type="text" placeholder="First Name" name="first_name" class="required">
                        </p>
                        <p>
                            <label for="last_name">Last Name</label>
                            <input id="last_name" type="text" placeholder="Last Name" name="last_name" class="required">
                        </p>
                        <p>
                            <label for="profile_name">Profile Name</label>
                            <input id="profile_name" type="text" placeholder="Profile Name" name="profile_name" class="required">
                        </p>
                        <p>
                            <label for="email">E-mail</label>
                            <input id="email" type="email" placeholder="E-mail" name="email" class="required">
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" placeholder="Password" class="required">
                        </p>
                        <p>
                            <label for="password_confirmation">Password Confirmation</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" class="required"
                                   placeholder="Password Confirmation">
                        </p>
                        <input type="submit" class="pure-button pure-button-primary" value="Sign in">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
    $(document).ready( function () {
        $('#signup').validate();
    });
</script>
{/nocache}
{include file='module/footer.tpl'}
