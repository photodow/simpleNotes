<h2><?php echo $data['title']; ?></h2>

<?php
	echo str_replace("\n", "</p><p>", '<p>' . trim($data['noteText']) . '</p>');
?>

<a href="/simpleNotes/laravel/public/listnotes" title="View Your Simple Notes"><i class="fa fa-arrow-left"></i> Back to Notes</a>