<?php
/* Smarty version 3.1.29, created on 2016-01-24 15:49:38
  from "C:\xampp\htdocs\TAS-Client-PAwel\smarty\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a4e4824e6835_21585017',
  'file_dependency' => 
  array (
    '614625e878bf4978546ae79f8762a81f9b749f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\index.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:module/header.tpl' => 1,
    'file:module/sidebar.tpl' => 1,
    'file:module/top-menu.tpl' => 1,
    'file:module/footer.tpl' => 1,
  ),
),false)) {
function content_56a4e4824e6835_21585017 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '948756a4e482470526_90448153';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="layout">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="grid">
                <?php
$_from = json_decode($_smarty_tpl->tpl_vars['statuses']->value);
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_status_0_saved_item = isset($_smarty_tpl->tpl_vars['status']) ? $_smarty_tpl->tpl_vars['status'] : false;
$_smarty_tpl->tpl_vars['status'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['status']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
$__foreach_status_0_saved_local_item = $_smarty_tpl->tpl_vars['status'];
?>
                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['status']->value->user->gravatar_url;?>
?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=<?php echo $_smarty_tpl->tpl_vars['status']->value->user->id;?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value->user->full_name;?>
</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=<?php echo $_smarty_tpl->tpl_vars['status']->value->id;?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['status']->value->created_at,"%e %b %Y");?>
</a>
                                        </div>
                                    </div>
                                </header>
                                <?php if ($_smarty_tpl->tpl_vars['status']->value->image != '' || $_smarty_tpl->tpl_vars['status']->value->image != null) {?>
                                <div class="post-img">
                                    <img src="http://localhost:3000/<?php echo $_smarty_tpl->tpl_vars['status']->value->image->img;?>
" alt="" class="pure-img">
                                </div>
                                <?php }?>

                                <div class="post-main">
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['status']->value->content;?>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_0_saved_local_item;
}
if ($__foreach_status_0_saved_item) {
$_smarty_tpl->tpl_vars['status'] = $__foreach_status_0_saved_item;
}
?>
            </div>
        </div>


    </div>
</div>
<?php echo '<script'; ?>
 src="assets/js/scripts.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:module/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
