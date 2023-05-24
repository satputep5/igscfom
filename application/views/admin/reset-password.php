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
        <link href="<?php echo base_url(); ?>admincss/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">
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
							<a href="<?php echo base_url(); ?>index">
								<img src="<?php echo base_url(); ?>images/logo.jpg"alt="Maya Care Foundation" style="max-width: 100%;" title="Maya Care Foundation">
							</a>
						</div>
						<div class="login-panel panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Reset Password</h3>
							</div>
							<div class="panel-body">							
								<?php if(!empty($reset_msg)){ ?>
								<div class="alert alert-danger"><?php echo $reset_msg; ?></div>
								<a href="<?php echo base_url();?>login/" class="btn btn-submit margin-right-10  btn-success">Cancel</a>
								<?php } else{ ?>
								<?php if(!empty($validation_message)){ ?><div class="alert alert-danger"><?php echo $validation_message; ?></div><?php } ?>
								<form action="<?php echo base_url();?>resetpwd/" id="resetPsw" name="resetPsw" method="post">
									<input type="hidden" name="token" value="<?php echo $token; ?>">
									<input type="hidden" name="key" value="<?php echo $key; ?>">
									<fieldset>                                
										<div class="form-group">
											<label for="new_password" class="control-label">New Password</label>                           
											<input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" required data-bv-message="Please enter the New Password" maxlength="20" size="20" data-bv-stringlength="true" data-bv-stringlength-min="8" data-bv-stringlength-min-message="Password should be at least 8 characters long" 
											data-bv-stringlength-max="20" data-bv-stringlength-max-message="Password should not exceed 20 characters"
											data-bv-identical="true" data-bv-identical-field="confirm_password" 
											data-bv-identical-message="The new password and confirm password are not the same">
											<span class="help-block"><b>Note:</b> Minimum 8 characters</span>
										</div>
										<div class="form-group">
											<label for="confirm_password" class="control-label">Confirm Password</label>
											<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required data-bv-message="Please enter the Confirm Password" 
											 data-match="#new_password" data-match-bv-message="New Password and Confirm Password do not match" maxlength="20" size="20" data-bv-stringlength="true" 
											 data-bv-stringlength-min="8" data-bv-stringlength-min-message="Password should be at least 8 characters long" data-bv-stringlength-max="20" data-bv-stringlength-max-message="Password should not exceed 20 characters"
											 data-bv-identical="true" data-bv-identical-field="new_password" 
											 data-bv-identical-message="The password and confirm password are not the same">
										</div>	
											<!-- Change this to a button or input when using this as a form -->
										<button type="submit" class="btn btn-submit margin-right-10  btn-success">Submit</button>
										<a href="<?php echo base_url();?>login/" class="btn btn-submit margin-right-10  btn-success">Cancel</a>
										
									</fieldset>
								</form>
								<?php
									}
								?>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>       
		<script type="text/javascript">
		$(document).ready(function() {
			$('#resetPsw').bootstrapValidator();
		});
		</script>
    </body>
</html>