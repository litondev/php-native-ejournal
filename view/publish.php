<?php 
	if(!isset($_SESSION['user'])){
		return $redirect("/");
	}
	
	$page_title = "Publish";
?>

<?php 
	include "layout/header.php";	
	include "layout/navbar.php";	
?>
 <form id="form-publish" action="<?php $base_url('/user-publish.php');?>" method="post" enctype="multipart/form-data">
	<div class="container pl-5">
		<div class="row mt-4">
			<div class="col-3">
				Judul
			</div>
			<div class="col-6">
				<input type="text" class="form-control" name="title" required>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-3">
				Synopsis
			</div>
			<div class="col-6">
				<input type="text" class="form-control" name="synopsis" required>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-3">
				Gratis
			</div>
			<div class="col-3 row">
				<div class="col-6 d-flex flex-row">
					<input type="radio" class="form-control" name="is_free" value="free" checked>
					Gratis
				</div>
				<div class="col-6 d-flex flex-row">
					<input type="radio" class="form-control" name="is_free" value="pay">			
					Berbayar
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-3">
				File
			</div>
			<div class="col-6">
				<input type="file" name="file" class="form-control">
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-3">
				Content
			</div>
			<div class="col-6">
				<textarea name="content" class="form-control"></textarea>				
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-3">
				Image 1
			</div>
			<div class="col-6">
				<input type="file" name="image1" class="form-control" required>
			</div>
		</div>
		
		<div class="row mt-4">
			<div class="col-12">
				<button class="btn btn-primary" id="button-publish">Kirim</button>
			</div>
		</div>
	</div>
 </form>
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