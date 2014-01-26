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

					$this->addNote();

				}else if(isset($_GET['editNote'])){

					$this->editNote();

				}else{

					// 404: no page could be found
					$this->home();

				}

			}else{ // if user is not logged in

				if(isset($_GET['login'])){

					$this->login();

				}else if(isset($_GET['register'])){

					$this->register();

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
			$listNotes = new ListNotesModal();
			$data = $listNotes->getData();

			if($data){
				include_once 'view/includes.php';
				$include = new IncludesView();

				$include->header($title, $this->sessionStatus);
				$include->listNotes($data);
				$include->footer($this->sessionStatus);
			}else{
				header('Location: /simpleNotes/');
			}

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

		private function settings(){

				$title = 'Change Password';

				include_once 'view/includes.php';
				$include = new IncludesView();

				$include->header($title, $this->sessionStatus);
				$include->changePasswordForm();
				$include->footer($this->sessionStatus);

		}

		private function register(){

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

		private function editNote(){

				$title = 'Add a Simple Note';

				include_once 'view/includes.php';
				$include = new IncludesView();

				$include->header($title, $this->sessionStatus);
				$include->editNoteForm();
				$include->footer($this->sessionStatus);

		}

	}

?>