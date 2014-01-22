<?php

	class SessionController {

		private $status;

		public function __construct(){
			
		}

		private function sanitizeUser($user){

			$passResults = false;

			if(){
				$passResults = 
			}

			return $passResults;
		}

		private function sanitizePass($pass){

			$passResults = false;

			return $passResults;
		}

		private function setStatus(){

			if(isset($_GET['login']) && $_GET['login'] === 'validateUser'){ // check if we are on the correct page

				if(!empty($_POST['username']) && !empty($_POST['password'])){ // check if the correct information has been sent

					if(sanitizeUser($_POST['username']) && sanitizePass($_POST['password'])){ // check if the information is clean

						echo 'log them in';

					}else{ // error redirect and inform the user
						header('Location: /simpleNotes/?login=error');
					}

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