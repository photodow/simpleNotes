<?php

	include_once 'modal/notes.php';

	$notesModal = new NotesModal();
	$data = $notesModal->getData();

	if($data){
		echo '<ul>';
		foreach($data as $row){
			echo '<li>';
			echo '<h1><a href="?id=' . $row['id'] . '">' . $row['title'] . '</a></h1>';
			echo '</li>';
		};
		echo '</ul>';
	}else{
		echo 'Error: Oops, this is embarrasing...';
	}

?>