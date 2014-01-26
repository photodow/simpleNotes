<h2>Add Note</h2>
<p>You can add a note for yourself here.</p>
<form method="POST" action="?addNote">
	<div>
		<input type="text" name="noteTitle" id="noteTitle" placeholder="Give Your Note a Title..." />
	</div>
	<div>
		<textarea name="noteBody" id="noteBody" placeholder="You can write your note here..."></textarea>
	</div>
	<div>
		<input type="submit" id="submit" value="Create Note" />
	</div>
</form>