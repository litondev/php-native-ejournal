<?php
	include "../config/system.php";

	if($_SERVER['REQUEST_METHOD'] !== 'POST'){
		return $redirect("/admin/?page=setting");
	}

	$site_name = $_POST['site_name'];
	
	if($mysqli_query("UPDATE settings SET value='".$site_name."' WHERE name='site_name'")){
		$_SESSION['success'] = [
			"title" => "Berhasil",
			"text" => "Berhasil"
		];

		return $redirect("/admin/?page=setting");
	}else{
		$_SESSION['error'] = [
			'title' => 'Terjadi Kesalahan',
			'text' => 'Terjadi Kesalahan'
		];

		return $redirect("/admin/?page=setting");
	}
?>