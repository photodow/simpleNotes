<h2><?php echo $data['title']; ?></h2>

<?php
	echo str_replace("\n", "</p><p>", '<p>' . trim($data['noteText']) . '</p>');
?>

<footer>
	<ul>
		<li class="back">
			<a href="/simpleNotes/?listnotes"><i class="fa fa-arrow-left"></i> Notes</a>
		</li>
		<li>
			<a href="?delete=<?php echo $_GET['note']; ?>"><i class="fa fa-trash-o"></i> Delete</a>
		</li>
		<li>
			<a href="?editNote=<?php echo $_GET['note']; ?>"><i class="fa fa-pencil"></i> Edit</a>
		</li>
	</ul>
</footer>