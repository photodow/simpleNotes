<?php

	class dbModel {

		private $dsn;
		private $user;
		private $pass;
		private $db;

		public function __construct(){
			$this->setCred('dbf1401', 'photodow', '67QceLYPWwyHZTET', 'localhost', '3306');
			$this->connectDB();
		}

		private function setCred($dbName, $user, $pass, $host, $port){
			$this->dsn = 'mysql:host=' . $host . ';port=' . $port .';dbname=' . $dbName;
			$this->user = $user;
			$this->pass = $pass;
		}

		private function connectDB(){
			$this->db = new PDO($this->dsn, $this->user, $this->pass);
		}

		public function getDB(){
			return $this->db;
		}

	}

?>