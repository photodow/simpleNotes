<?php

	class Page {

		private $pageTitle;

		public function __construct($title){

			$this->pageTitle = $title;

		}

		public function buildPage(){

			$this->header($this->pageTitle);
			$this->content();
			$this->footer();

		}

		private function header($title){

			include_once 'view/header.php';

		}

		private function content(){ 

			if(isset($_SESSION['loggedin'])){

				if(isset($_GET['id'])){

				include_once 'view/note.php';

				}else{

					include_once 'view/listnotes.php';

				}

			}else{

				include_once 'view/home.php';

			}

		}

		private function footer(){

			include_once 'view/footer.php';

		}

		public function setPageTitle($value){

			$this->pageTitle = $value;

		}

	}

?>