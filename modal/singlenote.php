<?php

	include_once 'modal/db.php';

	class SingleNoteModal {

		private $data;

		public function __construct($id){
			$this->selectData($id);
		}

		private function selectData($id){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT * FROM notes WHERE id = " . $id);
			$query->execute();

			$this->data = $query->fetchAll();

		}

		public function getData(){
			return $this->data[0];
		}

	}

?>