{include file='header.tpl'}
{include file='middle.tpl'}
<div id="main">
    <div class="wrapper">
        <div class="header"></div>
        <div class="grid"></div>
        <div class="form-box">
            <header class="logo">
                <h2>OkonBOOK</h2>
            </header>
            <div class="content">
                <form class="pure-form pure-form-stacked" action="action/loginController.php" method="post">
                    <fieldset>
                        <p>
                            <label for="email">Email</label>
                            <input id="email" type="email" placeholder="Email">
                        </p>
                        <p>
                            <label for="password">Password</label>
                            <input id="password" type="password" placeholder="Password">
                        </p>
                        <input type="submit" class="pure-button pure-button-primary" value="Login">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
{include file='footer.tpl'}