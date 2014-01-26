<h2>Edit Note</h2>
<p>You can edit this note here.</p>
<form method="POST" action="?editNote">
	<div>
		<input type="text" name="noteTitle" id="noteTitle" value="<?php echo $data['title']; ?>" />
	</div>
	<div>
		<textarea name="noteBody" id="noteBody"><?php echo $data['noteText']; ?></textarea>
	</div>
	<div>
		<input type="submit" id="submit" value="Save Changes" />
	</div>
</form>