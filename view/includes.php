<?php

	class IncludesView {

		public function __construct(){

		}

		public function header($title){

			include_once 'view/header.php';

		}

		public function home(){

			include_once 'view/home.php';

		}

		public function login(){
			
			include_once 'view/login.php';

		}

		public function singleNote($data){

			include_once 'view/note.php';

		}

		public function listNotes($data){
			
			include_once 'view/listnotes.php';

		}

		public function footer(){

			include_once 'view/footer.php';

		}

	}

?>