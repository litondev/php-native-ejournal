<?php 
	if(!isset($_SESSION['user'])){
		return $redirect("/");
	}
	
	session_destroy();

	$redirect("/");
?>