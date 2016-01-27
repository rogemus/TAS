{include file='module/header.tpl'}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}

    {nocache}
    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="grid">
                {foreach from=$statuses item=status}

                {if $status->document != "" || $status->document != null }
                <div class="post-box grid-item">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <header class="post-header pure-g">
                                    <div class="pure-u-1-5">
                                        <div class="thumbnail">
                                            <img src="{$status->user->gravatar_url}?s=45" alt="">
                                        </div>
                                    </div>
                                    <div class="pure-u-4-5">
                                        <div class="full_name">
                                            <a href="profile.php?user_id={$status->user->id}">{$status->user->full_name}</a>
                                        </div>
                                        <div class="date">
                                            <a href="single-post.php?status_id={$status->id}">{$status->created_at|date_format:"%e %b %Y"}</a>
                                        </div>
                                    </div>
                                </header>
                                {if $status->image != "" || $status->image != null }
                                <div class="post-img">
                                    <img src="http://localhost:3000/{$status->image->img}" alt="" class="pure-img">
                                </div>
                                {/if}

                                <div class="post-main">
                                    <p>
                                        {$status->content}
                                    </p>
                                </div>
                                <div class="post-footer">
                                    {if $status->document != "" || $status->document != null }
                                    <div class="attachment"><a class="pure-button" href="http://localhost:3000/{$status->document->attachment}"><i class="fa fa-paperclip"> </i><span>{$status->document->attachment_path}</span></a></div>
                                    {/if}
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
    {/nocache}
</div>
<script src="assets/js/scripts.js"></script>
{include file='module/footer.tpl'}