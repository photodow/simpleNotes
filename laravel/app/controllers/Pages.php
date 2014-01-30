<?php

	class Pages extends BaseController {

		public function showHome(){

			return View::make('templates.pages', array('pageTitle' => 'Simple Notes'))->nest('navigationView', 'navigation')->nest('contentView', 'home');
		
		}

		public function showListNotes(){

			return View::make('templates.pages', array('pageTitle' => 'Simple List Notes'))->nest('navigationView', 'navigation')->nest('contentView', 'listnotes');
		}

	}