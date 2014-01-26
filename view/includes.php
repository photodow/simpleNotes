<?php

	class IncludesView {

		public function __construct(){

		}

		public function header($title, $sessionStatus){

			include_once 'view/header.php';

		}

		public function home($sessionStatus){

			include_once 'view/home.php';

		}

		public function login(){
			
			include_once 'view/login.php';

		}

		public function singleNote($data){

			include_once 'view/note.php';

		}

		public function addNoteForm(){

			include_once 'view/addnote.php';

		}

		public function editNoteForm($data){

			include_once 'view/editnote.php';

		}

		public function listNotes($data){
			
			include_once 'view/listnotes.php';

		}

		public function changePasswordForm(){
			
			include_once 'view/changepasswordform.php';

		}

		public function registerForm(){
			
			include_once 'view/registerform.php';

		}

		public function footer($sessionStatus){

			include_once 'view/footer.php';

		}

	}

?>