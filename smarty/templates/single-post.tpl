{include file='module/header.tpl'}
{if isset($smarty.session)}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}
{/if}

    {nocache}
    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="single-post">
                <div class="post-box post-wide pure-g">
                    <div class="pure-u-1-5">
                        <div class="thumbnail">
                            <img src="{$single_status_avatar}?s=125" alt="" class="pure-img">
                        </div>
                    </div>
                    <div class="pure-u-4-5">
                        <article class="post">
                            <div class="shadow">
                                <div class="post-content">
                                    <header class="post-header pure-g">
                                        <div class="pure-u-5-5">
                                            <div class="full_name">
                                                <a href="">{$single_status_full_name}</a>
                                            </div>
                                            <div class="date">
                                                <a href="">{$single_status_created_at|date_format:"%e %b %Y"}</a>
                                            </div>
                                        </div>
                                    </header>

                                    {if $single_status_image != null}
                                    <div class="post-img">
                                        <img src="http://localhost:3000/{$single_status_image}" alt="" class="pure-img">
                                    </div>
                                    {/if}


                                    <div class="post-main">
                                        <p>
                                            {$single_status_content}
                                        </p>
                                    </div>
                                    <footer class="post-footer">
                                        {include file='module/comments.tpl'}
                                    </footer>

                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {/nocache}
    {if isset($smarty.session)}
</div>
{/if}
{include file='module/footer.tpl'}