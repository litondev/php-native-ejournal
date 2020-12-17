<?php
	include "config/system.php";
	
	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/?page=profil");
	}

	if(!isset($_POST['username']) || empty($_POST['username'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Username harus diisi'
		];

		return $redirect("/?page=profil");
	}

	if(!isset($_POST['email']) || empty($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email harus diisi'
		];

		return $redirect("/?page=profil");
	}	

	if(!empty($_POST['password'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Password harus diisi'
		];

		return $redirect("/?page=profil");
	}

	if(!valid_email($_POST['email'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email tidak valid'
		];

		return $redirect("/?page=profil");
	}

	if(!valid_alfa($_POST['username'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Username tidak valid'
		];

		return $redirect("/?page=profil");
	}

	$email = $_POST['email'];
	$username = $_POST['username'];
	if(!empty($_POST['password'])){
		$password = md5($_POST['password']);
	}

	if(mysqli_num_rows($mysqli_query("SELECT * FROM users WHERE email='$email' AND id NOT IN('".$_SESSION['user']['id']."') LIMIT 0,1"))){	
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Email sudah terdaftar' 
		];

		return $redirect("/?page=profil");		
	}

	$updateUser = "email='".$email."',username='".$username."'";

	if(!empty($_POST['password'])){
		$updateUser .= ",password='".$password."'";
	}

	if($mysqli_query("UPDATE users SET ".$updateUser." WHERE id='".$_SESSION['user']['id']."'")){
		$_SESSION['success'] = [
			'title' => 'Berhasil',
			'text' => 'Berhasil Update'
		];

		$query = $mysqli_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."' LIMIT 0,1");

		$_SESSION['user'] = mysqli_fetch_array($query);

		return $redirect("/?page=profil");
	}else{
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Terjadi Kesalahan'
		];

		return $redirect("/?page=profil");
	}
?>