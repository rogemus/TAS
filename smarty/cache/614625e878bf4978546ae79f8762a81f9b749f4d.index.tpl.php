<?php
/* Smarty version 3.1.29, created on 2016-01-24 15:49:38
  from "C:\xampp\htdocs\TAS-Client-PAwel\smarty\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56a4e48255b115_87668670',
  'file_dependency' => 
  array (
    '614625e878bf4978546ae79f8762a81f9b749f4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\index.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
    'd0e4c019fe0196f01824fdf2ab5eb1f1d551ef57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\module\\header.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
    '24e28c50eba4e773dc79d3b60d57c48509f92ec0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\module\\sidebar.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
    '4019f60b4472ddb662d91012b78724bb79321617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\module\\top-menu.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
    '8c66ee7f9f3b397a5ff33e1f4c9118823e49afea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TAS-Client-PAwel\\smarty\\templates\\module\\footer.tpl',
      1 => 1453643691,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_56a4e48255b115_87668670 ($_smarty_tpl) {
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

<div id="layout">
    <div id="menu">
    <div class="pure-menu"><a href="index.php" class="pure-menu-heading">OkonBOOK</a>
        <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><span><i class="fa fa-picture-o"></i></span> Images</a>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><span><i class="fa fa-files-o"></i></span> Files</a></li>
            </li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link"><span><i class="fa fa-users"></i></span> Friends</a></li>
        </ul>
        <div class="add-post">
            <h2>How are you ?</h2>
            <div class="add-post-button-container"><a href="add-post.php" class="add-post-button">Add Post</a></div>
        </div>
    </div>
</div>
    <header class="top">
    <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                <a id="menuLink1" href="#" class="pure-menu-link">
                                           <span class="thumbnail">
                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=30" alt="">
                        </span>
                                       <span class="full_name">
                                                    Kacper Rogowski
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
</header>


    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="grid">
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=14">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=13">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=12">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=11">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentd a
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=10">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=9">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=8">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=7">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentv
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=6">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentdas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=5">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentgdfg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=4">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Contentsadsa
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=3">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content ze zdjeciem
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=2">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Content
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="http://gravatar.com/avatar/6e1ad3db0d2c12a9722cde487017a2ad?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id=1">Kacper Rogowski</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id=1">19 Jan 2016</a>
                                        </div>
                                    </div>
                                </header>
                                
                                <div class="post-main">
                                    <p>
                                        Testowy post
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                            </div>
        </div>


    </div>
</div>
<script src="assets/js/scripts.js"></script>
<footer>
</footer>

</body>
</html><?php }
}
