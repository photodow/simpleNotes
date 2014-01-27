<?php

	class BuildPageController {

		private $sessionStatus;

		public function __construct($sessionStatus){

			$this->sessionStatus = $sessionStatus;

			if($sessionStatus){ // if user is logged in

				if(isset($_GET['listnotes'])){

					$this->listNotes();

				}else if(isset($_GET['note'])){

					$this->singleNote($_GET['note']);

				}else if(isset($_GET['settings'])){

					$this->settings();

				}else if(isset($_GET['addNote'])){

					if($_GET['addNote'] === 'create'){

						$this->createNote($_POST['noteTitle'], $_POST['noteBody']);

					}else{

						$this->addNote();

					}

				}else if(isset($_GET['editNote'])){

					if($_GET['editNote'] === 'edit'){

						$this->editNoteExec($_POST['noteId'], $_POST['noteTitle'], $_POST['noteBody']); //$noteId, $title, $body

					}else{

						$this->editNote($_GET['editNote']);

					}

				}else if(isset($_GET['delete'])){

					$this->delete($_GET['delete']);

				}else{

					// 404: no page could be found
					$this->home();

				}

			}else{ // if user is not logged in

				if(isset($_GET['login'])){

					$this->login();

				}else if(isset($_GET['register'])){

					if($_GET['register'] === 'execute'){

						$this->registerUserExec($_POST['firstName'], $_POST['lastName'], $_POST['userName'], $_POST['newPass'], $_POST['newPassRep']);

					}else{

						$this->registerUser();

					}

				}else{

					// 404: no page could be found
					$this->home();

				}

			}

		}

		private function home(){

			$title = 'Simple Notes';

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title, $this->sessionStatus);
			$include->home($this->sessionStatus);
			$include->footer($this->sessionStatus);

		}

		private function login(){

			$title = 'Login to Simple Notes';

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title, $this->sessionStatus);
			$include->login();
			$include->footer($this->sessionStatus);

		}

		private function listNotes(){

			$title = 'List Simple Notes';

			include_once 'modal/listnotes.php';
			$listNotes = new ListNotesModal($this->sessionStatus);
			$data = $listNotes->getData();

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title, $this->sessionStatus);

			if($data){
				$include->listNotes($data);
			}else{
				echo "<p>You don't have any notes at this time.</p>";
				echo "<p><a href='/simpleNotes/?addNote' title='Add a Simple Note'>Add a New Note</a></p>";
			}

			$include->footer($this->sessionStatus);

		}

		private function singleNote($id){

			if(is_numeric($id)){

				$title = 'View Simple Note';

				include_once 'modal/singlenote.php';
				$singleNote = new SingleNoteModal($id);
				$data = $singleNote->getData();

				if($data){
					include_once 'view/includes.php';
					$include = new IncludesView();

					$include->header($title, $this->sessionStatus);
					$include->singleNote($data);
					$include->footer($this->sessionStatus);
				}else{
					header('Location: /simpleNotes/');
				}

			}else{
				header('Location: /simpleNotes/');
			}

		}

		private function delete($id){

			if(is_numeric($id)){

				include_once 'modal/delete.php';
				new DeleteModal($id, $this->sessionStatus);
				
				header('Location: /simpleNotes?listnotes');

			}else{
				header('Location: /simpleNotes/');
			}

		}

		private function createNote($title, $body){

			$title = $this->sanitizeText($title);
			$body = $this->sanitizeText($body);

			if($title && $body){

				include_once 'modal/createnote.php';
				new CreateNoteModal($this->sessionStatus, $title, $body);
				
				header('Location: /simpleNotes?listnotes');

			}else{
				
				header('Location: /simpleNotes?addNote=error');

			}

		}

		private function settings(){

			$title = 'Change Password';

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title, $this->sessionStatus);
			$include->changePasswordForm();
			$include->footer($this->sessionStatus);

		}

		private function registerUserExec($firstname, $lastname, $username, $password, $repeatPass){

			$password = $this->sanitizePass($password);
			$repeatPass = $this->sanitizePass($repeatPass);

			if($password && $repeatPass && $password === $repeatPass){

				$firstname = $this->sanitizeText($firstname);
				$lastname = $this->sanitizeText($lastname);
				$username = $this->sanitizeUser($username);

				if($firstname && $lastname && $username){

					$title = 'Register New Account';

					include_once 'modal/registeruser.php';
					new RegisterUserModal($firstname, $lastname, $username, $this->hashThePass($password));
					
					header('Location: /simpleNotes?login');

				}else{
					
					header('Location: /simpleNotes?register=error');

				}
			}else{
					
				header('Location: /simpleNotes?register=error');

			}

		}

		private function registerUser(){

			$title = 'Register New Account';

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title, $this->sessionStatus);
			$include->registerForm();
			$include->footer($this->sessionStatus);

		}

		private function addNote(){

				$title = 'Add a Simple Note';

				include_once 'view/includes.php';
				$include = new IncludesView();

				$include->header($title, $this->sessionStatus);
				$include->addNoteForm();
				$include->footer($this->sessionStatus);

		}

		private function editNote($id){

			if(is_numeric($id)){

				$title = 'Edit Your Simple Note';

				include_once 'modal/singlenote.php';
				$singleNote = new SingleNoteModal($id);
				$data = $singleNote->getData();

				if($data){

					include_once 'view/includes.php';
					$include = new IncludesView();

					$include->header($title, $this->sessionStatus);
					$include->editNoteForm($data);
					$include->footer($this->sessionStatus);

				}else{
					header('Location: /simpleNotes?listnotes');
				}

			}else{
				header('Location: /simpleNotes?listnotes');
			}

		}

		private function editNoteExec($noteId, $title, $body){

			if(is_numeric($noteId)){

				$title = $this->sanitizeText($title);
				$body = $this->sanitizeText($body);

				if($title && $body){

					include_once 'modal/updatenote.php';
					new UpdateNoteModal($this->sessionStatus, $noteId, $title, $body);

					header('Location: /simpleNotes?note=' . $noteId);

				}else{

					header('Location: /simpleNotes?editNote=error');

				}

			}else{
				header('Location: /simpleNotes?listnotes');
			}

		}

		private function sanitizeText($text){
			
			$text = trim($text);
			$text = strip_tags($text);

			if(empty($text)){
				$text = false;
			}

			return $text; // returns clean text or false
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

		private function hashThePass($pass){
			include_once 'controller/andyHash.php';
			return andyHash($pass);
		}

	}

?>