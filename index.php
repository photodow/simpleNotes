<?php

	include_once 'controller/session.php';
	$session = new SessionController('asdf');

	include_once 'controller/buildpage.php';
	new BuildPageController(true);

?>