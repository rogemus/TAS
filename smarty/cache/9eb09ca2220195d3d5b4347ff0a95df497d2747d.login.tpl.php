<?php
/* Smarty version 3.1.29, created on 2016-01-21 22:53:30
  from "/home/pawe/Desktop/TAS-Client/smarty/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a1616a2e5365_44962291',
  'file_dependency' => 
  array (
    '9eb09ca2220195d3d5b4347ff0a95df497d2747d' => 
    array (
      0 => '/home/pawe/Desktop/TAS-Client/smarty/templates/login.tpl',
      1 => 1453415259,
      2 => 'file',
    ),
    '7a14cb0cb123c2a1787ec75260ee06b550852cec' => 
    array (
      0 => '/home/pawe/Desktop/TAS-Client/smarty/templates/module/header.tpl',
      1 => 1453414135,
      2 => 'file',
    ),
    '34c0eb42315a87d5ff42759e357585f8b313df4a' => 
    array (
      0 => '/home/pawe/Desktop/TAS-Client/smarty/templates/module/footer.tpl',
      1 => 1453414135,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56a1616a2e5365_44962291 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>okonbook</title>
    <link rel="stylesheet" href="assets/css/_bower.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.min.js"></script>
</head>
<body>


<div id="main">
    <div class="wrapper">
        <div class="header"></div>
        <div class="grid"></div>
        <div class="form-box">
            <header class="logo">
                <h2>OkonBOOK</h2>
            </header>
            <div class="content">
                <form class="pure-form pure-form-stacked" action="actions/loginController.php" method="post">
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
<footer>
</footer>

</body>
</html><?php }
}
