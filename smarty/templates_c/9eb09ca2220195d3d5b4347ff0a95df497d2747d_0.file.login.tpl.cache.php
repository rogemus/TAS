<?php
/* Smarty version 3.1.29, created on 2016-01-21 22:50:34
  from "/home/pawe/Desktop/TAS-Client/smarty/templates/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a160ba470950_12079966',
  'file_dependency' => 
  array (
    '9eb09ca2220195d3d5b4347ff0a95df497d2747d' => 
    array (
      0 => '/home/pawe/Desktop/TAS-Client/smarty/templates/login.tpl',
      1 => 1453415259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:module/header.tpl' => 1,
    'file:module/footer.tpl' => 1,
  ),
),false)) {
function content_56a160ba470950_12079966 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '121961970356a160ba45d211_75233595';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
