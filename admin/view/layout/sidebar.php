<div class="col-2 p-1 sidebar d-none d-xl-block d-lg-block d-md-block d-sm-none">
	<ul class="list-group">
		<li class="list-group-item">
			<i class="fa fa-home"></i>

			<a href="<?php $base_url('/admin');?>">
				Home
			</a>
		</li>		

		<li class="list-group-item">
			<i class="fa fa-user"></i>
			<a href="<?php $base_url('/admin/?page=user');?>">			
				User
			</a>
		</li>

		<li class="list-group-item">
			<i class="fa fa-book"></i>
			<a href="<?php $base_url('/admin/?page=journal');?>">
				Journal
			</a>
		</li>

		<li class="list-group-item">
			<i class="fa fa-cog"></i>
			<a href="<?php $base_url('/admin/?page=setting');?>">
				Setting
			</a>
		</li>
	</ul>
</div>

<style>
.sidebar{
 	height:100vh;
 	background:rgba(39,121,255,255);
 	color:white;
}

.list-group-item{
	background: none;
	border:0px solid white;
}

.list-group-item > a{
	color:white;
}
</style>