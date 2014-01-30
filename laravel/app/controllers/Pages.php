<?php

	class Pages extends BaseController {

		public function showHome(){
			
			return View::make('templates.pages', array('pageTitle' => 'Simple Notes'))->nest('navigationView', 'navigation')->nest('contentView', 'home');
		
		}

		public function showListNotes(){

			$listOfNotes = ListNotes::all();
			return View::make('templates.pages', array('pageTitle' => 'Simple List Notes'))->nest('navigationView', 'navigation')->nest('contentView', 'listnotes', array('data' => $listOfNotes));
		
		}

		public function showNote(){

			$note = ListNotes::find($_GET['id']);
			return View::make('templates.pages', array('pageTitle' => 'Simple Note'))->nest('navigationView', 'navigation')->nest('contentView', 'note', array('data' => $note));
		
		}

	}