<!-- NAVBAR DEKSTOP -->
<nav class="navbar navbar-expand-lg navbar-default"
	style="background : rgba(39,121,255,255)">
	<div class="container">
	  <span class="navbar-brand">
	  	<a href="<?php $base_url('/');?>">
	  		<img src="<?php $asset('/images/logo-journal-white.png');?>" 
	  			height="45px"/>
	  	</a>
	  </span> 	

	  <button class="navbar-toggler text-white" 
	  	onclick="onOpenNavbarMobile('show')">	  	 
		<i class="fa fa-stream fa-1x"></i>
	  </button>

	  <div class="collapse navbar-collapse">
	    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">	    
 	 
 	 	  <?php if(!isset($_SESSION['user'])){ ?>
 	 	  <li class="nav-item">
	      		<a class="nav-link" 
	      			href="<?php $base_url('/?page=signin');?>">
	      			<i class="fa fa-door-open fa-1x"></i>
	      			Masuk
	      		</a>
	      </li>
 	 	  <?php } ?>

 	 	  <?php if(!isset($_SESSION['user'])){ ?>
 	 	  <li class="nav-item">
	      		<a class="nav-link" 
	      			href="<?php $base_url('/?page=signup');?>">
	      			<i class="fa fa-user-plus fa-1x"></i>
	      			Daftar
	      		</a>
	      </li>
 	 	  <?php } ?>

          <?php if(isset($_SESSION['user'])){ ?>
	      <li class="nav-item">
	      		<a class="nav-link mt-1" 
	      			href="<?php $base_url('/?page=profil');?>">
	      			Profil
	      		</a>
	      </li>
	      <?php } ?>

          <?php if(isset($_SESSION['user'])){ ?>
	      <li class="nav-item">
	      	<a class="nav-link mt-1" 
	      		href="<?php $base_url('/?page=logout');?>">
	      		Keluar
	      	</a>
	      </li>
	      <?php } ?>	           
	  		
	    </ul>
	  </div>
	</div>
</nav>
<!-- NAVBAR DEKSTOP -->

<script>
function onOpenNavbarMobile(way){
	if(way == 'show'){
		$("#box-navbar-mobile").show();
		$("body").css({"overflow" : "hidden"});		
	}else{
		$("#box-navbar-mobile").hide();
		$("body").css({"overflow" : "auto"});
	}
}
</script>

<!-- NAVBAR MOBILE -->
<div class="container-fluid" 
	id="box-navbar-mobile">
	<div class="row">
		<div class="col-2 p-3 bg-dark">
			<i class="fa fa-times text-white fa-2x cursor-pointer" 
				onclick="onOpenNavbarMobile('hide')"></i>
		</div>
		<div class="col-10 pt-2 pb-2 bg-light navbar-mobile">
			<ul class="list-group p-2">
				<li class="list-group-item ft-15">
					<b>Navbar : </b>
				</li>

				<li class="list-group-item">
					<a href="<?php $base_url('/admin');?>">Home</a>
				</li>

				<li class="list-group-item">
					<a href="<?php $base_url('/admin/?page=user');?>">User</a>
				</li>

				<li class="list-group-item">
					<a href="<?php $base_url('/admin/?page=journal');?>">Journal</a>
				</li>
					
			</ul>	
		</div>
	</div>
</div>
<!-- NAVBAR MOBILE -->

<!-- CSS NAVBAR -->
<style>
.navbar-default{
	color:white;
	font-size: 15px;
	box-shadow: 5px 5px 20px 0px rgb(127,127,127,0.2);
	border-bottom: 1px solid #dddddd;
}

.navbar-default >  div > a{
	color: white !important;
}

.navbar-default > div > div > ul > li {
	padding-right: 10px;
	padding-left: 10px;
}

.navbar-default > div > div > ul > li > a{
	color: white !important;
}

.point-red{
	position:absolute;
	top:-5px;
	right:0px;
}

.point-red-mobile{
	position:absolute;
	top:-3px;
	right:0px;
	font-size: 10px;
}

#box-navbar-mobile{
	z-index:1035;
	top:0px;
	bottom:0px;
	position:fixed;
	display:none;
	overflow: auto;
}

#box-navbar-mobile > div{
    height: 100%; 
}

.navbar-mobile{
	background:rgb(242,242,242);
}

.navbar-mobile > ul > li{
	background: none;
	border:0px;
	border-radius: 0px !important;
	border-bottom: 1px solid rgb(217,217,217);
}

.navbar-mobile > ul > li > a{
	color:rgb(127,127,127,0.5);
}
</style>