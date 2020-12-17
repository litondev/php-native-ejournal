<?php 
	$site_name = mysqli_fetch_array($mysqli_query("select * from settings where name='site_name'"));

	$page_title = "Setting";
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
			<form id="form-publish" action="<?php $base_url('/admin/admin-setting.php');?>" method="post" enctype="multipart/form-data">
				<div class="container pl-5">
					<div class="row mt-4">
						<div class="col-3">
							Judul Website
						</div>
						<div class="col-6">
							<input type="text" class="form-control" name="site_name" required
								value="<?php echo $site_name['value'];?>">
						</div>
					</div>
					
					<div class="row mt-4">
						<div class="col-12">
							<button class="btn btn-primary" id="button-publish">Kirim</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>	
<?php	
	include "layout/footer.php";
?>
<script>
$("#form-publish").parsley().on('form:validate',function(){
	if($("#form-publish").parsley().isValid()){
		$("#button-publish").html("<i class='fa fa-spinner fa-spin'></i>")
		$("#button-publish").attr("disabled",true);
	}else{
		toastr.warning("Sepertinya ada data yang belum valid","");
	}
});
</script>