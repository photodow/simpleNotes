<?php

	include_once 'modal/db.php';

	class DeleteModal {

		public function __construct($noteId, $userId){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("DELETE FROM notes WHERE (id = :id) AND (userId = :userId)");
			$query->execute(array(':id' => $noteId, ':userId' => $userId));

			$this->data = $query->fetchAll();
		}

	}

?>