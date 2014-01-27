<?php

	include_once 'modal/db.php';

	class UpdateNoteModal {

		public function __construct($userId, $noteId, $title, $body){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("UPDATE notes SET title=(:title), noteText=(:body) WHERE userId = (:userId) AND id = (:noteId)");
			$query->execute(array(':title' => $title, ':body' => $body, ':userId' => $userId, ':noteId' => $noteId));

			$this->data = $query->fetchAll();
		}

	}

?>