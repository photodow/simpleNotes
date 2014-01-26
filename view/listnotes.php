<ul id="notesList">
<?php foreach($data as $row){ ?>
	<li>
		<ul>
			<li><a href="?editNote=<?php echo $row['id']; ?>">&nbsp;<i class="fa fa-pencil"></i>&nbsp;</a></li>
			<li><a href="?delete=<?php echo $row['id']; ?>">&nbsp;<i class="fa fa-trash-o"></i>&nbsp;</a></li>
		</ul>
		<a href="?note=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
	</li>
<?php } ?>
</ul>