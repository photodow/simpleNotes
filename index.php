<?php

	include_once 'controller/session.php';
	$session = new SessionController('photodow');
	$sessionStatus = $session->getStatus();

	include_once 'controller/buildpage.php';
	new BuildPageController($sessionStatus);

?>