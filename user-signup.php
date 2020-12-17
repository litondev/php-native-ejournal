<?php
	include "config/system.php";
	
	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/?page=signup");
	}

	if(!isset($_POST['username']) || empty($_POST['username'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Usernam harus diisi'
		];

		return $redirect("/?page=signup");
	}

	if(!isset($_POST['email']) || empty($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email harus diisi'
		];

		return $redirect("/?page=signup");
	}

	if(!isset($_POST['password']) || empty($_POST['password'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Password harus diisi'
		];

		return $redirect("/?page=signup");
	}

	if(!valid_email($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email tidak valid'
		];

		return $redirect("/?page=signup");
	}

	if(!valid_alfa($_POST['username'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Username tidak valid'
		];

		return $redirect("/?page=signup");
	}

	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	if(mysqli_num_rows($mysqli_query("SELECT * FROM users WHERE email='$email' LIMIT 0,1"))){	
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email sudah terdaftar' 
		];

		return $redirect("/?page=signup");		
	}

	if($mysqli_query("INSERT INTO users SET email='$email',username='$username',password='$password'")){
		$_SESSION['success'] = [
			'title' => 'Berhasil',
			'text' => 'Berhasil mendaftar'
		];

		return $redirect("/?page=signin");
	}else{
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Terjadi Kesalahan',
		];			

		return $redirect("/?page=signup");		
	}
?>