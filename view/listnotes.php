<ul id="notesList">
<?php foreach($data as $row){ ?>
	<li>
		<a href="?note=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
	</li>
<?php } ?>
</ul>