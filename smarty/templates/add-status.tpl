{include file='module/header.tpl'}
<div id="layout">
    {include file='module/sidebar.tpl'}
    {include file='module/top-menu.tpl'}
    {nocache}
    <div id="main">
        <div class="wrapper">
            <div class="header"></div>
            <div class="add-edit-post">
                <div class="post-box post-l-wide">
                    <article class="post">
                        <div class="shadow">
                            <div class="post-content">
                                <form action="addStatusController.php" method="post" enctype="multipart/form-data">
                                    <div class="post-main post-edit-content">
                                        <textarea name="content" class="pure-input-1">Content</textarea>
                                        <div class="post-footer">
                                            <div class="post-attachment">
                                                <div class="pure-g">
                                                    <div class="pure-u-5-5 attachment-img"><span>Add img to post</span>
                                                        <input type="file" name="avatar" id="avatar" class="pure-input-1">
                                                    </div>
                                                    <div class="pure-u-5-5 post-submit">
                                                        <input type="submit" value="Submit" class="pure-button pure-input-1 pure-button-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    {/nocache}
</div>
{include file='module/footer.tpl'}