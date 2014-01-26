<h2><?php echo $data['title']; ?></h2>
<p><?php echo $data['noteText']; ?><p>
<footer>
	<ul>
		<li class="back">
			<a href="/simpleNotes/?listnotes"><i class="fa fa-arrow-left"></i> Back</a>
		</li>
		<li>
			<a href="?editNote=<?php echo $_GET['note']; ?>"><i class="fa fa-pencil"></i> Edit</a>
		</li>
		<li>
			<a href="?delete=<?php echo $_GET['note']; ?>"><i class="fa fa-trash-o"></i> Delete</a>
		</li>
	</ul>
</footer>