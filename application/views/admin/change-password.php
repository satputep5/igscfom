<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Change Password</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-6">
		  <?php if(!empty($validation_message)){ ?><div class="alert alert-danger"><?php echo $validation_message; ?></div><?php } ?>
				 <?php if(!empty($validation_success)){ ?>
				 <div class="alert alert-success alert-dismissable">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				 <?php echo $validation_success; ?>
				 </div>
				 <script type="text/javascript">
					window.setTimeout(function() {
						$(".alert-success").slideUp(500, function(){
							  $(this).remove();
						  });
					}, 5000);
				</script>
				 <?php } ?>
		<form action="<?php echo base_url();?>change-password" id="changePsw" name="changePsw" method="post" role="form" data-toggle="validator">
			<input type="hidden" name="token" value="<?php echo $token; ?>">
			<div class="form-group">
				<label for="current_password" class="control-label">Current Password</label>			   
				<input class="form-control"  id="current_password" name="current_password" type="password" required data-bv-message="Please enter the current password">
				 <div class="help-block with-errors"></div>
			</div>
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
				 data-match="#new_password" data-match-bv-message="New Password and Confirm Password do not match" 
				 maxlength="20" size="20" data-bv-stringlength="true" 
				 data-bv-stringlength-min="8" data-bv-stringlength-min-message="Password should be at least 8 characters long" 
				 data-bv-stringlength-max="20" data-bv-stringlength-max-message="Password should not exceed 20 characters"
				 data-bv-identical="true" data-bv-identical-field="new_password" 
				 data-bv-identical-message="The password and confirm password are not the same">
			</div>	
			<div class="margin-bottom-25">
				<button  type="submit" id="chPsw" class="btn btn-submit btn-info margin-right-10 btn-primary">Submit</button>
			</div>
		</form> 
		</div>
		<!-- /.col-lg-8 -->

	</div>
	<!-- /.row -->
</div>
<script type="text/javascript">
$(document).ready(function() {
		$("#changePsw").bootstrapValidator();
});
</script>