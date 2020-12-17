<?php 
	include "config/system.php";

	if(isset($_GET['page'])){
		if(file_exists('view/'.$_GET['page'].'.php')){			
			include 'view/'.$_GET['page'].'.php';		
		}else{
			include "view/404.php";
		}
	}else{
		include "view/home.php";
	}
?>