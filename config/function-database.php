<?php
	$mysqli_query = function($query) use ($database){
		return mysqli_query($database,$query);
	};
?>