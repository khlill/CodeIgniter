<h2>tirle</h2>
<?= \Config\Services::validation()->listErrors() ?>
<form action="create" method="post">
<?= csrf_field() ?>
<label for="nom">nom</label>
<input type="input" name="nom" /><br />
<label for="message">message</label>
<textarea name="message"></textarea><br />
<input type="submit" name="submit" value="Create news item" />
</form>
