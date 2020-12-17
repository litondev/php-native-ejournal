<?php
	include "config/system.php";

	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/?page=publish");
	}

	if(!isset($_POST['title']) || empty($_POST['title'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Judul harus diisi'
		];

		return $redirect("/?page=publish");
	}

	if(!isset($_POST['synopsis']) || empty($_POST['synopsis'])){
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Synopsis harus diisi'
		];

		return $redirect("/?page=publish");
	}

	if(isset($_FILES['image1'])){
		$image1 = $_FILES['image1'];
		$image1name = rand(0,10000).".".($image1['type'] == "image/png" ? 'png' : 'jpg');
		move_uploaded_file($image1['tmp_name'],"asset/images/files/".$image1name);
	}

	if(isset($_FILES['file'])){
		$filename = $_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'],"asset/files/".$filename);
	}

	$title = $_POST['title'];
	$synopsis = $_POST['synopsis'];
	$is_free = $_POST['is_free'] == 'pay' ? false : true;
	$content = $_POST['content'] ?? null;
	$file = $filename ?? null;
	$images = $image1name;
	$status = "active";

	$insertData = "title='".$title
	 ."',breif='".$synopsis
	 ."',is_free='".$is_free
	 ."',content='".$content
	 ."',file='".$file
	 ."',images='".$images
	 ."',status='".$status
	 ."',user_id='".$_SESSION['user']['id']."'";

	if($mysqli_query("INSERT INTO journals SET ".$insertData)){
		$_SESSION['success'] = [
			"title" => "Berhasil",
			"text" => "Berhasil"
		];

		return $redirect("/?page=publish");
	}else{
		$_SESSION['error'] = [
			"title" => "Terjadi Kesalahan",
			"text" => "Terjadi Kesalahan"
		];

		return $redirect("/?page=publish");		
	}
?>