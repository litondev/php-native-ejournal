<?php
	$database = false;

	try{
		if(!mysqli_connect($app['host'],$app['user'],$app['pass'],$app['db'])){				
			throw new Exception("Ada Kesalahan");			
		}else{
			$database = mysqli_connect($app['host'],$app['user'],$app['pass'],$app['db']);
		}
	}catch(Exception $e){
		die("<hr><center>Ada Kesalahan Pada Koneksi Priksa Config</center>");
	}
?>