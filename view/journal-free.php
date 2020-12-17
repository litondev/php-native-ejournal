<?php 
	$page_title = "Journal Gratis";
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

		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-12 p-lg-5">
			<div class="container d-flex flex-wrap">				
			<?php 			
				$query = $mysqli_query("SELECT * FROM journals WHERE status='active' AND is_free=true");

				while($data = mysqli_fetch_array($query)){
					?>
					<div class="card ml-4 mt-4" style="width: 18rem;">
					  <div style="position:absolute;right:0px;top:0px;background:black;padding:10px;color:white">
						<?php echo $data['is_free'] ? 'Gratis' : 'Berbayar'?>
					  </div>

					  <img class="card-img-top" src="<?php $asset('/images/files/'.$data['images']);?>" alt="Card image cap"
					  	style="height:200px">
					  <div class="card-body">
					    <h5 class="card-title">
					    	<?php echo $data['title'];?>
						</h5>

					    <p class="card-text">
					    	<?php echo $data['breif'];?>
					    </p>

					    <?php if($data['content']){ ?>
					    <a href="<?php $base_url('/?page=detail&id='.$data['id']);?>" class="btn btn-primary">
					    	Baca
					    </a>
					    <?php } ?>

					    <?php if($data['file']){ ?>
					    <a target="_blank" href="<?php $asset('/files/'.$data['file']);?>" class="btn btn-primary">
					    	Download
					    </a>
					    <?php } ?>
					  </div>
					</div>
					<?php 
				}
			?>		

			<?php 
				if(!mysqli_num_rows($query)){
					?>
					<div class="col-12 p-5 text-center">
						<img src="<?php $asset('/images/404.png');?>"
							style="width:80%" />
							
						<br />

						<h5>Data tidak ditemukan</h5>

						Maaf data yang anda cari tidak ditemukan
					</div>
					<?php
				}
			?>		
			</div>
		</div>
	</div>
</div>

<?php	
	include "layout/footer.php";
?>