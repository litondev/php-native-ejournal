<?php 
	$users = $mysqli_query("select * from users");

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
					<th>Photo</th>
					<th>Username</th>
					<th>Email</th>
					<th>Role</th>
				</tr>
				<?php while($data = mysqli_fetch_array($users)){ ?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td>
						<img src="<?php $asset('/images/users/'.$data['photo']);?>" width="50px">
					</td>
					<td><?php echo $data['username'];?></td>
					<td><?php echo $data['email'];?></td>
					<td><?php echo $data['role'] == 'user' ? 'USER' : 'ADMIN';?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>

<?php 
	include "layout/footer.php";
?>