<?php
/* Smarty version 3.1.29, created on 2016-01-24 15:49:38
  from "C:\xampp\htdocs\TAS-Client-PAwel\smarty\templates\module\top-menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a4e48252e6e0_56964909',
  'file_dependency' => 
  array (
    '4019f60b4472ddb662d91012b78724bb79321617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\module\\top-menu.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a4e48252e6e0_56964909 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2444256a4e482519c39_45499392';
?>
<header class="top">
    <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                <a id="menuLink1" href="#" class="pure-menu-link">
                   <?php if (isset($_SESSION['token'])) {?>
                        <span class="thumbnail">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['user_avatar']->value;?>
?s=30" alt="">
                        </span>
                   <?php }?>
                    <span class="full_name">
                        <?php if (isset($_SESSION['token'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['user_full_name']->value;?>

                        <?php }?>
                    </span>
                </a>
                <ul class="pure-menu-children">
                    <li class="pure-menu-item">
                        <a href="logout.php" class="pure-menu-link">
                            <span>
                                <i class="fa fa-sign-out"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                    <li class="pure-menu-item">
                        <a href="user-profile.php" class="pure-menu-link">
                            <span>
                                <i class="fa fa-user"></i>
                            </span>
                            Profile
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</header><?php }
}
