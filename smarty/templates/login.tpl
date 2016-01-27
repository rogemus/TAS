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
                <form class="pure-form pure-form-stacked" action="loginController.php" method="post">
                    <fieldset>
                        <p>
                            <label for="email">Email</label>
                            <input id="email" name="email" type="email" placeholder="Email">
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" name="password" type="password" placeholder="Password">
                        </p>
                        <input type="submit" class="pure-button pure-button-primary" value="Login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
{/nocache}
{include file='module/footer.tpl'}