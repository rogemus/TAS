{include file='header.tpl'}
{include file='middle.tpl'}

Dodaj status
<form action="addStatusController.php" method="post">
    <label for="content">Content</label>
    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Dodaj">
</form>

<hr>

<hr>
<h2>Wszystkie statusy</h2>

{foreach from=$statuses|json_decode item=status}
<div>
    <img src="{$status->user->gravatar_url}" alt="">
  <b>{$status->user->full_name}</b>
</div>
<div>
   <p>{$status->content}</p>
</div>
{/foreach}

{include file='footer.tpl'}