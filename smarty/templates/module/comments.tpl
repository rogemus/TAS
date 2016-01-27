<div class="comments-box">
    {nocache}
    <ul class="comments">


        {foreach from=$comments item=comment}

            {if $comment->post_id == $smarty.get.status_id}
                <li>
                   <div class="comment-header">
                        <div class="full_name"><a href="">{$comment->user->full_name}</a></div>
                        <div class="date">{$comment->created_at|date_format:"%e %b %Y"}</div>
                    </div>
                    <div class="comment-content">
                        <p class="text">{$comment->comment}</p>
                    </div>
                </li>
            {/if}
        {/foreach}
    </ul>
    <div class="comments-footer">
        <form action="addCommentsController.php" method="post">

            <div>
                <input type="hidden" id="status_id" value="{$smarty.get.status_id}" name="status_id"/>
                <textarea name="comment-content" id="comment-content" class="pure-input-1"
                          placeholder="Content"></textarea>
            </div>
            <div class="add">
                <input type="submit" value="Submit" class="pure-button pure-input-1 pure-button-primary">
            </div>
        </form>
    </div>
    {/nocache}
</div>
