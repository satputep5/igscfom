<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">			
			<h1 class="page-header margin-bottom-10">Enquiry
			
			</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
<?php if ($success_message != "" ) {?>
	<div class="alert alert-success alert-dismissible" role="alert" data-fade="1000">
	  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	  <?php echo $success_message; ?>
	</div>
	<script type="text/javascript">
		window.setTimeout(function() {
			$(".alert-success").slideUp(500, function(){
			      $(this).remove();
			  });
		}, 5000);
	</script>
	<?php }?>
	<!-- /.row -->
	<div class="row">	
		
		<div class="col-md-12">
			<!-- /.panel-heading -->
			<div class="x_panel">                 
				<div class="x_content table-responsive">                  
					<table class="table" width="100%" align="center" border="1" cellspacing="0" cellpadding="0">
					  <thead>
						<tr align="center" bgcolor="#eeeeee" style="font-size:13px;">
						  <th>Sr.No.</th>
						  <th>First Name</th>
						  <th>Last Name</th>			  
						  <th>Email Id</th>			  
						  <th>Contact</th>
						  <th>Qualification</th>	
						  <th>Current Engagement</th>	
						  <th>How Many Years</th>	
						  <th>Enquiry Date</th>	
						  <th>Action</th>	
						</tr>
					  </thead>
					  <tbody>
						<?php if(!empty($enquirylist)){ 
							$srNo =1;
							?>                                            
							<?php foreach($enquirylist as $row){
							?>						
							<tr>
								<td><?php echo $srNo;?></td>
								<td><?php echo $row['fhe_first_name'];?></td>
								<td><?php echo $row['fhe_last_name'];?></td>									
								<td><?php echo $row['fhe_email_id'];?></td>									
								<td><?php echo $row['fhe_contact'];?></td>			
								<td><?php echo $row['fhe_qualification'];?></td>									
								<td><?php echo $row['fhe_currnt_engage'];?></td>									
								<td><?php echo isset($row['fhe_how_many_years']) && $row['fhe_how_many_years']!="" ? $row['fhe_how_many_years'] : "";?></td>									
								<td><?php echo date('d-M-Y',strtotime($row['fhe_enq_date']));?></td>									
								<td> 
									<div class="tooltip-demo">
										  <a data-toggle="tooltip" data-placement="top" title="Delete record" href="javascript:void(0);" rel="<?php echo $this->encryptdecrypt->enCrypt($row['fhe_id']);?>" class="btn btn-outline btn-primary btn-xs btn-danger deleteenquiry">Delete</a>
									</div>
								</td>
							</tr>
							<?php $srNo++;
								} ?>
						<?php } else {?>
								<tr><td colspan="9">No records available.</td></tr>
						<?php }?>
					  </tbody>
					</table>
					<div id="confirm" class="modal fade" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-sm">
							<div class="modal-content">
							  <div class="modal-body">
								Are you sure you want to delete this record?
							  </div>
							  <div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
								<button type="button" data-dismiss="modal" class="btn">Cancel</button>
							  </div>
							</div>
						</div>
					</div>	
					
					<!-- Modal -->
					<div class="modal fade" id="project_image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="close-btn clearfix">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body text-center">						
									<div id="view_image"></div>
								</div>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->

					<div id="page_refresh_model" class="modal fade" role="dialog" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							  <div class="modal-body">
								Please wait...
							  </div>						 
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.panel-body -->
		</div>	
	</div>
	<!-- /.row -->
</div>
<script type="text/javascript">
$(document).ready(function() {

	$('.deleteenquiry').on('click', function(e){
		
		var th = $(this);	    
		$('#confirm').modal({ backdrop: 'static', keyboard: false })
			.one('click', '#delete', function() {
				location.href = "<?php echo base_url()?>delete-enquiry/"+th.attr("rel")+"/?token=<?php echo $token; ?>";
		});
	}); 

});
</script>