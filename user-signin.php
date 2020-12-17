<?php
	include "config/system.php";

	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/?page=signin");
	}

	if(!isset($_POST['email']) || empty($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email harus diisi'
		];

		return $redirect("/?page=signin");
	}

	if(!isset($_POST['password']) || empty($_POST['password'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Password harus diisi'
		];

		return $redirect("/?page=signin");
	}

	if(!valid_email($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email tidak valid'
		];

		return $redirect("/?page=signin");
	}

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = $mysqli_query("SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 0,1");

	if(mysqli_num_rows($query)){	
		$user = mysqli_fetch_array($query);

		$_SESSION['user'] = $user;

		if($_SESSION['user']['role'] == "admin"){
			return $redirect("/admin");
		}else{
			return $redirect("/");		
		}
	}else{
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email Atau Password Tidak Ditemukan'
		];

		return $redirect("/?page=signin");
	}
?>