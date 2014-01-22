<?php

	include_once 'modal/db.php';

	class SessionModal {

		public function __construct($user){
			$this->selectData($user);
		}

		private function selectData($user){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT password FROM users WHERE (username = :user)");
			$query->execute(array(':user' => $user));

			$this->data = $query->fetchAll();

		}

		public function getData(){
			return $this->data[0]['password'];
		}

	}

?>