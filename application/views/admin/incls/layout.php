<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Welcome to Admin Panel</title>		
		
		<link href="<?php echo base_url(); ?>commoncss/jquery-ui.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>commoncss/bootstrap.min.css" rel="stylesheet">
		<!--<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">-->
        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>commoncss/bootstrapValidator.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/admin/main.css" rel="stylesheet"> 
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<!-- jQuery Version 1.11.0 -->
		 
	    <script src="<?php echo base_url(); ?>commonjs/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>commonjs/jquery-ui.min.js"></script>
		<script src="<?php echo base_url(); ?>commonjs/bootstrap.min.js"></script>
		<!-- Bootstrap Core JavaScript --> 
        <script src="<?php echo base_url(); ?>commonjs/bootstrapValidator.min.js"></script>
		
	</head>
 	<body>
		<div class="wrapper">
			<?php $this->load->view("admin/incls/header");?>
			<?php $this->load->view($main_content);?>
			<?php $this->load->view("admin/incls/footer");?>
		</div>
	</body>		
</html>