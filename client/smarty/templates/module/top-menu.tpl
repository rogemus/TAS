<header class="top">
    <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                <a id="menuLink1" href="#" class="pure-menu-link">
                   {if isset($smarty.session.token)}
                        <span class="thumbnail">
                            <img src="{$user_avatar}?s=30" alt="">
                        </span>
                   {/if}
                    <span class="full_name">
                        {if isset($smarty.session.token)}
                            {$user_full_name}
                        {/if}
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
                        <a href="profile.php?user_id={$user_id}" class="pure-menu-link">
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