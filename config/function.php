<?php 
	$base_url = function($path) use ($app){
		echo $app['base_url'].$path;
	};

	$asset = function($path)  use ($app){
		echo $app['asset'].$path;
	};

	$redirect = function($path)  use ($app){
		header("location:".$app['base_url'].$path);
	};
?>