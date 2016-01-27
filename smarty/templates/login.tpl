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
                <form class="pure-form pure-form-stacked" action="loginController.php" method="post" id="login-form">
                    <fieldset>
                        <p>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="Email" class="required">
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" placeholder="Password" class="required">
                        </p>
                        <input type="submit" class="pure-button pure-button-primary" value="Login">
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
        $('#login-form').validate();
    });
</script>
{/nocache}
{include file='module/footer.tpl'}
