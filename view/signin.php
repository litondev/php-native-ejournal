<?php 
	if(isset($_SESSION['user'])){
		return $redirect("/");
	}

	$page_title = "Signin";
?>

<?php 
	include "layout/header.php";	
?>

<div class="container-fluid">
	<div class="row mt-5">				
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 m-auto bg-white p-3" style="box-shadow: 5px 5px 20px 0px rgb(127,127,127,0.2);border-radius:10px">
			<form class="p-3" id="form-signin" method="post" action="<?php $base_url('/user-signin.php');?>">
		      <h1 class="h3 mb-3 font-weight-normal">Masuk ke Akun</h1>

		      <label for="inputEmail" class="sr-only mt-2">
		      	Email 
		      </label>

		      <input type="email" name="email" id="inputEmail" class="form-control mt-3" placeholder="Email address" required autofocus>

		      <label for="inputPassword" class="sr-only mt-2">
		      	Password
		      </label>
		      <input type="password" name="password" id="inputPassword" class="form-control mt-3" placeholder="Password" required>

		      <div class="checkbox mb-3 mt-3">
		        <label>
		          <input type="checkbox" value="remember-me"> Remember me
		        </label>
		      </div>

		      <button class="btn btn-lg btn-primary btn-block" type="submit" id="button-signin">Sign in</button>

		      <a class="mt-5" href="<?php $base_url('/');?>">Kembali</a>
		    </form>
		</div>
	</div>
</div>

<?php	
	include "layout/footer.php";
?>

<script>
$("#form-signin").parsley().on('form:validate',function(){
	if($("#form-signin").parsley().isValid()){
		$("#button-signin").html("<i class='fa fa-spinner fa-spin'></i>")
		$("#button-signin").attr("disabled",true);
	}else{
		toastr.warning("Sepertinya ada data yang belum valid","");
	}
});
</script>