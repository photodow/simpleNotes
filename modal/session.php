<?php

	include_once 'modal/db.php';

	class SessionModal {

		private $data;

		public function __construct($user){
			$this->selectData($user);
		}

		private function selectData($user){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("SELECT password, userId FROM users WHERE (username = :user)");
			$query->execute(array(':user' => $user));

			$this->data = $query->fetchAll();

		}

		public function getPassword(){
			return $this->data[0]['password'];
		}

		public function getUserId(){
			return $this->data[0]['userId'];
		}

	}

?>