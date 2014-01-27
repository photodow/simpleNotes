<?php

	include_once 'modal/db.php';

	class CreateNoteModal {

		public function __construct($userId, $title, $body){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("INSERT INTO notes (title, noteText, noteStatus, createdDate, userId) VALUES (:title, :body, 'public', date('Y-m-d H:i:s'), :userId)");
			$query->execute(array(':title' => $title, ':body' => $body, ':userId' => $userId));

			$this->data = $query->fetchAll();
		}

	}

?>