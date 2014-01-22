<?php

	class SessionController {

		private $status;
		private $username;
		private $password;

		public function __construct(){
			
		}

		private function handle(){

		}

		private function sanitizeUser($user){

		}

		private function sanitizePass($password){

		}

		private function setStatus(){

			if(!empty($_POST['username']) && !empty($_POST['password'])){

			}
			
		}

		public function getStatus(){
			return $this->status;
		}

	}

?>