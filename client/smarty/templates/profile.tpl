{include file='module/header.tpl'}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}

    {nocache}
    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="profile-page">
                <div class="pure-g">
                    <div class="pure-u-1-5">
                        <div class="profile-info">
                            <div class="shadow">


                                <div class="profile-content">
                                    <div class="thumbnail avatar">
                                        <img src="{$user->gravatar_url}?s=175" alt="" class="pure-img">
                                    </div>
                                    <div class="full_name">
                                        <span>{$user->full_name}</span>
                                    </div>
                                    <div class="profile-user-info">
                                        <p><b>User profile name</b> <br>
                                                <span>
                                                    {$user->profile_name}
                                                </span>
                                        </p>
                                        <p><b>User email</b> <br>
                                                <span>
                                                    {$user->email}
                                                </span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pure-u-4-5">
                        <div class="grid2">
                            {foreach item=status from=$statuses}
                            {if $status->user->id == $status_id}
                            <div class="post-box grid-item2">
                                <article class="post">
                                    <div class="shadow">
                                        <div class="post-content">
                                            <header class="post-header pure-g">
                                                <div class="pure-u-5-5">
                                                    <div class="full_name">
                                                        <a href="">{$status->user->full_name}</a>
                                                    </div>
                                                    <div class="date">
                                                        <a href="single-post.php?status_id={$status->id}">{$status->created_at|date_format:"%e
                                                            %b %Y"}</a>
                                                    </div>
                                                </div>
                                            </header>
                                            {if $status->image != "" || $status->image != null }
                                            <div class="post-img">
                                                <img src="http://localhost:3000/{$status->image->img}" alt=""
                                                     class="pure-img">
                                            </div>
                                            {/if}
                                            <div class="post-main">
                                                <p>
                                                    {$status->content}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {/nocache}
    </div>
    <script src="assets/js/scripts.js"></script>
    {include file='module/footer.tpl'}