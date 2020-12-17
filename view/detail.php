<?php 
	$page_title = "Detail";
?>

<?php 
	include "layout/header.php";	
	include "layout/navbar.php";	
?>

<?php 
 $detail = $mysqli_query("SELECT * FROM journals limit 0,1"); 
 $journal = mysqli_fetch_array($detail);
?>

<div class="container">
	<div class="mt-5">
		<?php 
			echo $journal['title'];
		?>
	</div>

	<div class="mt-3">
		<?php 
			echo $journal['content'];
		?>
	</div>
</div>

<?php	
	include "layout/footer.php";
?>