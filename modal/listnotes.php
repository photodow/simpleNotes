<?php

	include_once 'modal/db.php';

	class ListNotesModal {

		private $data;

		public function __construct(){
			$this->selectData();
		}

		private function selectData(){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT * FROM notes WHERE noteStatus = 'public'");
			$query->execute();

			$this->data = $query->fetchAll();

		}

		public function getData(){
			return $this->data;
		}

	}

?>