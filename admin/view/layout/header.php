<!DOCTYPE HTML>
<html>
	<head>
	 <!-- META CHARSET -->
	 <meta charset="UTF-8">

	 <!-- TITLE PAGE -->
	 <title><?php echo $page_title ?? null; ?></title>

	 <!-- META VIEW PORT -->
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">

	 <!-- META VIEW PORT -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- META DESCRIPTION -->
     <meta name="description" content=""> 

     <!-- LOGO -->
     <link rel="icon" href="<?php $asset('/images/logo.png');?>" type="image/png">

     <!-- BOOTSTRAP CSS -->
	 <link rel="stylesheet" type="text/css" href="<?php $asset('/css/bootstrap.min.css');?>">

	 <!-- TOAST CSS -->
	 <link rel="stylesheet" type="text/css" href="<?php $asset('/css/toastr.min.css');?>">

	 <!-- OWL CAROUSEL CSS -->
     <link rel="stylesheet" href="<?php $asset('/css/owl/owl.carousel.min.css');?>">
     <link rel="stylesheet" href="<?php $asset('/css/owl/owl.theme.default.min.css');?>">

     <!-- DATERANGE PICKER CSS -->
     <link rel="stylesheet" href="<?php $asset('/css/daterangepicker.css');?>">    

	 <!-- CSS STYLE UNTUK PARSLEY ERRORS -->
	 <style>
		 .parsley-errors-list{
			color:red;
			list-style:none;
			padding:8px;
			opacity: 0.8;
		 }
	 </style>
	 
	</head>
<body>