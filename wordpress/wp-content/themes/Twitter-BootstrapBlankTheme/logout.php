<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/wordpress/wp-load.php');


session_start();
	unset($_SESSION['userdata']);
	unset($_SESSION['status']);

	session_destroy();

echo wp_logout_url();

	
	header("Location: http://theforexmastermind.com/wordpress");