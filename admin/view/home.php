<?php 
	$user = mysqli_fetch_array($mysqli_query("select count(*) as count from users"))['count'];
	$journal = mysqli_fetch_array($mysqli_query("select count(*) as count from journals"))['count'];
	$journal_active = mysqli_fetch_array($mysqli_query("select count(*) as count from journals where status='active'"))['count'];
	$journal_non_active = mysqli_fetch_array($mysqli_query("select count(*) as count from journals where status='nonactive'"))['count'];
?>

<?php 
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
			<div class="container d-flex flex-wrap">
					<div class="col-xl-2 ml-5 mt-3 col-sm-12 widget">
						<i class="fa fa-user"></i> User 
						<br />
						<b> <?php echo $user;?> </b>
					</div>

					<div class="col-xl-2 ml-5 mt-3 col-sm-12 widget">
						<i class="fa fa-book"></i> Journal 
						<br /> <b> <?php echo $journal;?> </b>
					</div>

					<div class="col-xl-2 ml-5 mt-3 col-sm-12 widget">
						<i class="fa fa-book"></i> Journal Active 
						<br /> <b> <?php echo $journal_active;?> </b>
					</div>				

					<div class="col-xl-2 ml-5 mt-3 col-sm-12 widget">
						<i class="fa fa-book"></i> Journal Non
						<br /> <b> <?php echo $journal_non_active;?> </b>
					</div>
			</div>
		</div>
	</div>
</div>

<style>
.widget{
	background: white;
	border:1px solid rgba(39,121,255,255);
	border-top:2px solid rgba(39,121,255,255);
	border-radius:10px;
	padding: 10px;
}
</style>

<?php 
	include "layout/footer.php";
?>