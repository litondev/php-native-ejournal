<?php 
	$journals = $mysqli_query("select * from journals");

	$page_title = "Home";
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

		<div class="col-lg-10 col-xl-10 col-md-10 col-sm-12 p-5">
			<table class="table">
				<tr>
					<th>Id</th>
					<th>Images</th>
					<th>Title</th>
					<th>Gratis</th>
				</tr>
				<?php while($data = mysqli_fetch_array($journals)){ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td>
						<img src="<?php $asset('/images/files/'.$data['images']);?>" width="100px">
					</td>
					<td><?php echo $data['title'];?></td>
					<td><?php echo $data['is_free'] ? 'Gratis' : 'Berbayar';?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>

<?php 
	include "layout/footer.php";
?>