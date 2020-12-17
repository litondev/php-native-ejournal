<div class="col-2 p-1 sidebar d-none d-xl-block d-lg-block d-md-block d-sm-none">
	<ul class="list-group">
		<li class="list-group-item">
			 <form class="mt-1"
	        	action="<?php $base_url('/?page=search');?>"
	        	method="get">	      		
	        		<input class="form-control"
	        			type="text" 
	        			name="search"	        			
	        			placeholder="Search . . . "
	        			onkeypress="event.key == 'enter' ? this.submit() : ''">       
	    	</form>
		</li>

		<li class="list-group-item">
			<i class="fa fa-home"></i>

			<a href="<?php $base_url('/');?>">
				Home
			</a>
		</li>		

		<li class="list-group-item">
			<i class="fa fa-upload"></i>
			<a href="<?php $base_url('/?page=publish');?>">			
				Publish
			</a>
		</li>

		<li class="list-group-item">
			<i class="fa fa-book"></i>
			<a href="<?php $base_url('/?page=journal-free');?>">
				Journal Gratis
			</a>
		</li>

		<li class="list-group-item">
			<i class="fa fa-dollar-sign"></i>
			<a href="<?php $base_url('/?page=journal-pay');?>">
				Journal Berbayar
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