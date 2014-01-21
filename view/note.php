<?php

	$id = $_GET['id'];

	if(is_numeric($id)){
		
		include_once 'modal/singlenote.php';

		$notesModal = new SingleNoteModal($_GET[id]);
		$data = $notesModal->getData();

		if($data){

			echo '<h2>' . $data['title'] . '</h2>';
			echo '<p>' . $data['noteText'] . '</p>';
			echo '<a href="/simpleNotes/">Go Back</a>';

		}else{
			header('Location: /simpleNotes/');
		}

	}else{
		header('Location: /simpleNotes/');
	}

?>