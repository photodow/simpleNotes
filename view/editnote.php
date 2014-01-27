<h2>Edit Note</h2>
<p>You can edit this note here.</p>
<form method="POST" action="?editNote=edit">
	<div>
		<input type="text" name="noteTitle" id="noteTitle" value="<?php echo $data['title']; ?>" />
	</div>
	<div>
		<textarea name="noteBody" id="noteBody"><?php echo $data['noteText']; ?></textarea>
	</div>
	<div>
		<input type="hidden" name="noteId" id="noteId" value="<?php echo $_GET['editNote']; ?>" />
		<input type="submit" id="submit" value="Save Changes" />
	</div>
</form>
<footer>
	<ul>
		<li class="back">
			<a href="/simpleNotes/?note=<?php echo $_GET['editNote']; ?>"><i class="fa fa-arrow-left"></i> Note</a>
		</li>
		<li>
			<a href="?delete=<?php echo $_GET['editNote']; ?>"><i class="fa fa-trash-o"></i> Delete</a>
		</li>
	</ul>
</footer>