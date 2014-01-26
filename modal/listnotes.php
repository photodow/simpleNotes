<?php

	include_once 'modal/db.php';

	class ListNotesModal {

		private $data;

		public function __construct($userId){
			$this->selectData($userId);
		}

		private function selectData($userId){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT * FROM notes WHERE (userId = :userId)");
			$query->execute(array(':userId' => $userId));

			$this->data = $query->fetchAll();

		}

		public function getData(){
			return $this->data;
		}

	}

?>