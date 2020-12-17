<?php
	include "config/system.php";
	
	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/?page=profil");
	}

	if(!isset($_FILES['photo'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Photo harus diisi'
		];

		return $redirect("/?page=profil");
	}


	if($_FILES['photo']['type'] != "image/png" && $_FILES['photo']['type'] != 'image/jpg' && $_FILES['photo']['type'] != "image/jpeg"){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => "Photo tidak valid"
		];

		return $redirect("/?page=profil");
	}

	$photo = $_FILES['photo'];

	$name = rand(0,10000).".".($_FILES['photo']['type'] == "image/png" ? 'png' : 'jpg');

	move_uploaded_file($photo['tmp_name'],"asset/images/users/".$name);

	$updateUser = "photo='".$name."'";

	if($mysqli_query("UPDATE users SET ".$updateUser." WHERE id='".$_SESSION['user']['id']."'")){
		if($_SESSION['user']['photo'] !== "default.png"){
			if(file_exists("asset/images/users/".$_SESSION['user']['photo'])){
				unlink("asset/images/users/".$_SESSION['user']['photo']);
			}
		}

		$_SESSION['success'] = [
			"title" => "Berhasil",
			"text" => "Berhasil Update"
		];

		$query = $mysqli_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."' LIMIT 0,1");

		$_SESSION['user'] = mysqli_fetch_array($query);

		return $redirect("/?page=profil");
	}else{
		if(file_exists("asset/images/users/".$name)){
			unlink("asset/images/users/".$name);
		}

		$_SESSION['error'] = [
			"title" => "Terjadi Kesalahan",
			"text" => "Terjadi Kesalahan"
		];

		return $redirect("/?page=profil");
	}
?>