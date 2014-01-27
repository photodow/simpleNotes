<?php

	include_once 'modal/db.php';

	class RegisterUserModal {

		public function __construct($firstname, $lastname, $username, $password){

			$dbModel = new dbModel('dbf1401');
			$dbRef = $dbModel->getDB();
			$query = $dbRef->prepare("INSERT INTO users (firstname, lastname, username, password, createdDate) VALUES (:firstname, :lastname, :username, :password, now())");
			$query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':username' => $username, ':password' => $password));

			$this->data = $query->fetchAll();
		}

	}

?>