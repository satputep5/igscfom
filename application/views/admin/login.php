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
		
        <!-- MetisMenu CSS -->
       
        <link href="<?php echo base_url(); ?>commoncss/bootstrapValidator.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>admincss/main.css" rel="stylesheet"> 
        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>commonjs/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>commonjs/respond.min.js"></script>
        <![endif]--> 		
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                <div class="login-wrapper">
                	<div class="admin-logo">
						<center>
							<a href="<?php echo base_url(); ?>index">
								<img src="<?php echo base_url(); ?>images/fom-logo.jpg"alt="FOM Hochschule" style="max-width: 100%;" title="FOM Hochschule">
							</a>
						</center>
					</div>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <?php if(!empty($validation_message)){ ?><div class="alert alert-danger"><?php echo $validation_message; ?></div><?php } ?>
                             <?php if(!empty($validation_success)){ ?><div class="alert alert-info"><?php echo $validation_success; ?></div><?php } ?>
	  						<?php echo form_open('login',array('name'=>'frmLogin','id'=>'frmLogin', 'role'=>'form', 'data-toggle'=>'validator'));?>
	  						<input type="hidden" name="token" id="token" value="<?php echo $token;?>"  />
							<input type="hidden" name="token1" value="<?php echo $this->session->userdata('token'); ?>" />
                                <fieldset>
                                    <div class="form-group">
                                    	<label class="ie-8-label">Username</label>
                                        <input class="form-control" placeholder="Username" name="uname" type="text" autofocus required data-bv-message="Please enter the username">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                    	<label class="ie-8-label">Password</label>
                                        <input class="form-control" placeholder="Password" name="pwd" type="password" value="" required data-bv-message="Please enter the password">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form --> 
									<div class="text-right forgot-password">
											<a href="<?php echo base_url();?>forgotpwd/">Forgot Password?</a>
									</div>                                    
                                    <div class="form-group">
										<button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
									</div>
                                </fieldset>
                            <?php echo form_close();?>		
                        </div>
                    </div>
                  </div>  
                </div>
            </div>
        </div>
        <!-- Metis Menu Plugin JavaScript -->     
		<!-- jQuery Version 1.11.0 -->
		<script src="<?php echo base_url(); ?>commonjs/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>commonjs/bootstrap.min.js"></script>
		<!-- Bootstrap Core JavaScript -->        
	
        <script src="<?php echo base_url(); ?>commonjs/bootstrapValidator.min.js"></script>
        <script type="text/javascript">
			$('#frmLogin').bootstrapValidator();
		</script>
    </body>
</html>