<?php

	if(isset($_GET['id'])){

		include 'view/note.php';

	}else{

		include 'view/listnotes.php';

	}

?>