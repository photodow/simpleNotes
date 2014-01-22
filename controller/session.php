<?php

	class SessionController {

		private $status;

		public function __construct($pass){
			
			$pass = trim($pass);
			$pass = strip_tags($pass);
			$pass = str_replace(' ', '', $pass);

			if(empty($pass)){
				$pass = false;
			}

			if($pass){
				echo $pass;
			}else{
				echo 'false';
			}
		}

		private function sanitizeUser($user){
			
			$user = trim($user);
			$user = strip_tags($user);
			$user = str_replace(' ', '', $user);

			if(empty($user)){
				$user = false;
			}

			return $user; // returns a clean username or false
		}

		private function sanitizePass($pass){
			
			$pass = trim($pass);
			$pass = strip_tags($pass);
			$pass = str_replace(' ', '', $pass);

			if(empty($pass)){
				$pass = false;
			}

			return $pass; // returns a clean password or false
		}

		private function setStatus(){

			if(isset($_GET['login']) && $_GET['login'] === 'validateUser'){ // check if we are on the correct page

				if(sanitizeUser($_POST['username']) && sanitizePass($_POST['password'])){ // check if the correct information has been sent

						echo 'log them in';

				}else{ // error redirect and inform the user
					header('Location: /simpleNotes/?login=error');
				}

			}

		}

		public function getStatus(){
			return $this->status;
		}

	}

?>