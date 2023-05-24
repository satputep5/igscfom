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
                            <h3 class="panel-title">Forgot Password</h3>
                        </div>
                        <div class="panel-body">
                         <form action="<?php echo base_url();?>forgotpwd/" id="forgotPsw" 
                          name="forgotPsw" method="post">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                <fieldset>
                                
                             <?php if(!empty($validation_message)){ ?><div class="alert alert-danger"><?php echo $validation_message; ?></div><?php } ?>
                             <?php if(!empty($validation_success)){ ?><div class="alert alert-info"><?php echo $validation_success; ?></div><?php } ?>
                                    <div class="form-group">
                                    	<label class="ie-8-label">Username</label>
                                        <input class="form-control" placeholder="Username" name="uname" type="uname" required data-bv-message="Please enter the current username">
                             			<div class="help-block with-errors"></div>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" class="btn btn-submit margin-right-10  btn-success">Submit</button>
                                    <a href="<?php echo base_url();?>login/" class="btn btn-submit margin-right-10  btn-success">Cancel</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>        
        <script type="text/javascript">
			$('#forgotPsw').bootstrapValidator();
		</script>
    </body>
</html>