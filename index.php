<?php

	include_once 'controller/session.php';
	$session = new SessionController();

	include_once 'controller/buildpage.php';
	new BuildPageController(true);

?>