<?php

	include_once 'modal/listnotes.php';

	$notesModal = new ListNotesModal();
	$data = $notesModal->getData();

	if($data){
		echo '<ul id="notesList">';
		foreach($data as $row){
			echo '<li>';
			echo '<a href="?id=' . $row['id'] . '">' . $row['title'] . '</a>';
			echo '</li>';
		};
		echo '</ul>';
	}else{
		echo 'Error: Oops, this is embarrasing...';
	}

?>