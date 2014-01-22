<?php

	class SessionController {

		public function __construct(){
			$this->handle();
		}

		private function handle(){

			session_start();
			if($_SESSION['loggedin'] === TRUE && isset($_GET['logout'])){
				unset($_SESSION['loggedin']);
			}

			$this->login();
		}

		private function sanitizeUser($user){

			$user = trim($user);
			$user = strip_tags($user);
			$user = str_replace(' ', '', $user);
			$user = strtolower($user);

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

		private function UnHashThePass($pass){
			include_once 'controller/andyHash.php';
			return UNandyHash($pass);
		}

		private function login(){

			if(isset($_GET['login']) && $_GET['login'] === 'validateUser'){ // check if we are on the correct page

				$usernameInput = $this->sanitizeUser($_POST['username']);
				$passwordInput = $this->sanitizePass($_POST['password']);

				if($usernameInput && $passwordInput){ // check if the correct information has been sent

					include_once 'modal/session.php';
					$session = new SessionModal($usernameInput);

					$dbPassword = $this->UnHashThePass($session->getData());

					if($dbPassword === $passwordInput){

						$_SESSION['loggedin'] = TRUE;
						header('Location: /simpleNotes/?listnotes');

					}else{ // error redirect and inform the user
						header('Location: /simpleNotes/?login=error');
					}

				}else{ // error redirect and inform the user
					header('Location: /simpleNotes/?login=error');
				}

			}

		}

		public function getStatus(){
			return $_SESSION['loggedin'];
		}

	}

?>