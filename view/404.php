<?php 
	$page_title = "404";
?>

<?php 
	include "layout/header.php";	
	include "layout/navbar.php";	
?>

<div class="container-fluid">
	<div class="row">		

		<?php 
			include "layout/sidebar.php";
		?>

		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-12 p-5 text-center">
			<img src="<?php $asset('/images/404.png');?>"
				style="width:60%" />
				
			<br />

			<h5>Halaman tidak ditemukan</h5>

			Maaf halaman yang anda cari tidak ditemukan
		</div>
	</div>
</div>

<?php	
	include "layout/footer.php";
?>