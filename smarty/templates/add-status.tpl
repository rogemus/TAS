{include file='header.tpl'}
{include file='middle.tpl'}

<div id="main">
    <div class="wrapper">
        <div class="header"></div>
        <div class="add-edit-post">
            <div class="post-box post-l-wide">
                <article class="post">
                    <div class="shadow">
                        <div class="post-content">
                            <form action="addStatusController.php" method="post">
                                <div class="post-main post-edit-content">
                                    <textarea name="content" class="pure-input-1">Content</textarea>
                                    <div class="post-footer">
                                        <div class="post-attachment">
                                            <div class="pure-g">
                                                <div class="pure-u-5-5 attachment-file"><span>Add file to post</span>
                                                    <input type="file" name="attachment-file" class="pure-input-1">
                                                </div>
                                                <div class="pure-u-5-5 attachment-img"><span>Add img to post</span>
                                                    <input type="file" name="attachment-img" class="pure-input-1">
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
{include file='footer.tpl'}