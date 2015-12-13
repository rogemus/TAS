{include file='header.tpl'}
{include file='middle.tpl'}

Dodaj status
<form action="addStatusController.php" method="post">
    <label for="content">Content</label>
    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Dodaj">
</form>

Wszystkie statusy

{include file='footer.tpl'}