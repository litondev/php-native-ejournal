<?php 
	if(!isset($_SESSION['user'])){
		return $redirect("/");
	}
	
	$page_title = "Profil";
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
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center">
						<img src="<?php $asset('/images/users/'.$_SESSION['user']['photo']);?>"
							style="width:90%">

						<form class="p-3" id="form-update-photo" method="post" action="<?php $base_url('/user-profil-photo.php');?>"
								enctype="multipart/form-data">
					      <label for="inputPhoto" class="sr-only mt-2">
					      	Photo 
					      </label>
					      <input type="file" name="photo" id="inputPhoto" class="form-control mt-3" placeholder="Photo" required autofocus
					      	onchange="onImageChange(event)">
					      <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" id="button-signup">
					      	Edit
					      </button>
					    </form>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
						<form class="p-3" id="form-profil-data" method="post" action="<?php $base_url('/user-profil-data.php');?>">
					      <h1 class="h3 mb-4 font-weight-normal">Data Diri</h1>

					      <label for="inputEmail" class="sr-only mt-5">
					      	Email 
					      </label>
					      <input type="email" name="email" id="inputEmail" class="form-control mt-5" placeholder="Email address" required autofocus
					      	value="<?php echo $_SESSION['user']['email'];?>">

					      <label for="inputUsername" class="sr-only mt-5">
					      	Username
					      </label>
					      <input type="username" name="username" id="inputUsername" class="form-control mt-5" placeholder="Username" required
					      	value="<?php echo $_SESSION['user']['username'];?>">

					      <label for="inputPassword" class="sr-only mt-5">
					      	Password
					      </label>
					      <input type="password" name="password" id="inputPassword" class="form-control mt-5" placeholder="Password">		     

					      <button class="btn btn-lg btn-primary btn-block mt-5" type="submit" id="button-profil">
					      	Edit
					      </button>
					    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php	
	include "layout/footer.php";
?>

<script>
$("#form-profil-data").parsley().on('form:validate',function(){
	if($("#form-profil-data").parsley().isValid()){
		$("#button-profil-data").html("<i class='fa fa-spinner fa-spin'></i>")
		$("#button-profil-data").attr("disabled",true);
	}else{
		toastr.warning("Sepertinya ada data yang belum valid","");
	}
});


function onImageChange(evt){
    let target = evt.target.files[0]

    if(target){
        let type = target["type"];
        let size = target["size"];

        if(size > 10000000){
          document.getElementById("form-update-photo").reset();       
          toastr.warning("Maaf ukuran file sudah melebihi 10 mb","");
        }else if(type == "image/png" || type == "image/jpg" || type == "image/jpeg" || type == "image/gif"){
        }else{
          toastr.warning("Maaf file harus gambar","");
          document.getElementById("form-update-photo").reset();       
        }
    }
}
</script>