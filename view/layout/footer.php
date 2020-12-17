	<!-- JQUERY -->
	<script src="<?php $asset('/js/jquery.min.js');?>"></script>	
	<!-- POPPER -->
	<script src="<?php $asset('/js/popper.min.js');?>"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php $asset('/js/bootstrap.min.js');?>"></script>
	<!-- TOASTR -->
	<script src="<?php $asset('/js/toastr.min.js');?>"></script>
	<!-- SWETALERT -->
	<script src="<?php $asset('/js/sweetalert2.js');?>"></script>
	<!-- MOMENT -->
	<script src="<?php $asset('/js/moment.js');?>"></script>	
	<!-- MOMENT LOCALE -->
	<script src="<?php $asset('/js/moment-with-locales.js');?>"></script>
	<!-- PARSLEY -->
	<script src="<?php $asset('/js/parsley.min.js');?>"></script>
	<!-- PARSLEY I18N -->
	<script src="<?php $asset('/js/i18n/id.js');?>"></script>
	<!-- FONTAWESOME -->
	<script src="<?php $asset('/js/fontawesome.min.js');?>"></script>
	<!-- OWL CAROUSEL -->
	<script src="<?php $asset('/js/owl.carousel.min.js');?>"></script>
	<!-- DATERANGE PICKER -->
	<script src="<?php $asset('/js/daterangepicker.js');?>"></script>   	

	<!-- MOMENT SET LOCALE -->
	<script>
		moment.locale('id');
	</script>

	<!-- JIKA ADA SESSION SUCCESS DARI SERVER -->
	<?php if(isset($_SESSION['success'])){ ?>
        <script>
            toastr.success(
            	"<?php echo $_SESSION['success']['text'];?>",
    	    	"<?php echo $_SESSION['success']['title'];?>"
            );
        </script>
    <?php } ?>

    <!-- JIKA ADA SESSION ERROR DARI SERVER -->
    <?php if(isset($_SESSION['error'])){ ?> 
    	<script>
    	    toastr.error(
    	    	"<?php echo $_SESSION['error']['text'];?>",
    	    	"<?php echo $_SESSION['error']['title'];?>"
    	    );
    	</script>
    <?php } ?>

    <?php 
    	if(isset($_SESSION['success'])){
    		unset($_SESSION['success']);
    	}

    	if(isset($_SESSION['error'])){
    		unset($_SESSION['error']);
    	}
    ?>
</body>
</html>