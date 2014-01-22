<?php

	class BuildPageController {

		public function __construct($sessionStatus){

			if($sessionStatus){ // if user is logged in

				if(isset($_GET['listnotes'])){

					$this->listNotes();

				}else if(isset($_GET['note'])){

					$this->singleNote($_GET['note']);

				}else{

					// 404: no page could be found
					$this->home();

				}

			}else{ // if user is not logged in

				if(isset($_GET['login'])){

					$this->login();

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

			$include->header($title);
			$include->home();
			$include->footer();

		}

		private function login(){

			$title = 'Login to Simple Notes';

			include_once 'view/includes.php';
			$include = new IncludesView();

			$include->header($title);
			$include->login();
			$include->footer();

		}

		private function listNotes(){

			$title = 'List Simple Notes';

			include_once 'modal/listnotes.php';
			$listNotes = new ListNotesModal();
			$data = $listNotes->getData();

			if($data){
				include_once 'view/includes.php';
				$include = new IncludesView();

				$include->header($title);
				$include->listNotes($data);
				$include->footer();
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

					$include->header($title);
					$include->singleNote($data);
					$include->footer();
				}else{
					header('Location: /simpleNotes/');
				}

			}else{
				header('Location: /simpleNotes/');
			}

		}

	}

?>