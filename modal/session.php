<?php

	include_once 'modal/db.php';

	class SessionModal {

		private $password;

		public function __construct($username){
			$this->selectData($username);
		}

		private function selectData($user){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT password FROM users WHERE username = '" . $user . "'");
			$query->execute();

			$this->data = $query->fetchAll();

		}

		public function getData(){
			return $this->data[0]['password'];
		}

	}

?>