{include file='module/header.tpl'}
{if isset($smarty.session.token)}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}
    {/if}

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
                                    <div class="post-img">
                                        <img src="http://placehold.it/900x400/1D7E42/FFFFFF" alt=""
                                             class="pure-img">
                                    </div>
                                    <div class="post-main">
                                        <p>
                                            {$single_status_content}
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
{if isset($smarty.session.token)}
</div>
{/if}
{include file='module/footer.tpl'}