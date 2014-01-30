<ul id="notesList">
<?php foreach($data as $row){ ?>
	<li>
		<a href="/simpleNotes/laravel/public/listnotes/note?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
	</li>
<?php } ?>
</ul>