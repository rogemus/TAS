



{include file='module/header.tpl'}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}


<div id="main">
    <div class="wrapper">
        <div class="header"></div>
        <div class="profile-page">
            <div class="pure-g">
                <div class="pure-u-1-5">
                    <div class="profile-info">
                        <div class="shadow">
                            {foreach from=$statuses|json_decode item=status}
                                {if $status->user->id ==  $status_id}
                                    <div class="profile-content">
                                        <div class="thumbnail avatar">
                                            <img src="{$status->user->gravatar_url}?s=175" alt="" class="pure-img">
                                        </div>
                                        <div class="full_name">
                                            <span>{$status->user->full_name}</span>
                                        </div>
                                        <div class="profile-user-info">
                                            <p><b>User profile name</b> <br>
                                                <span>
                                                    {$status->user->profile_name}
                                                </span>
                                            </p>
                                            <p><b>User email</b> <br>
                                                <span>
                                                    {$status->user->email}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
                <div class="pure-u-4-5">
                    <div class="grid2">
                        {foreach from=$statuses|json_decode item=status}
                                {if $status->user->id ==  $status_id}
                                <div class="post-box grid-item2">
                                    <article class="post">
                                        <div class="shadow">
                                            <div class="post-content">
                                                <header class="post-header pure-g">
                                                    <div class="pure-u-5-5">
                                                        <div class="full_name">
                                                            <a href="profile-page.html">{$status->user->full_name}</a>
                                                        </div>
                                                        <div class="date">
                                                            <a href="single-post.html">{$status->created_at|date_format:"%e %b %Y"}</a>
                                                        </div>
                                                    </div>
                                                </header>
                                                <div class="post-img">
                                                    <img src="http://placehold.it/900x400/1D7E42/FFFFFF" alt="" class="pure-img">
                                                </div>
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
</div>






