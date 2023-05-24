<?php

$enquiry = ($this->uri->segment(1) == "manage-enquiry")? "class='active'":"";

?>
<script type="text/javascript">
    function getInternetExplorerVersion()
    {
        // Returns the version of Internet Explorer or a -1
        // (indicating the use of another browser).
        var rv = -1; // Return value assumes failure.
        if(navigator.appName == 'Microsoft Internet Explorer')
        {
            var ua = navigator.userAgent;
            var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
            if(re.exec(ua) != null)
                rv = parseFloat( RegExp.$1 );
        }
        return rv;
    }
	
    function checkVersion()
    {
        //var msg = "You're not using Internet Explorer.";
        var ver = getInternetExplorerVersion();
        // alert(ver);
        if( ver > -1 )
        {
            if( ver > 7 ){
                //alert("You're using a recent copy of Internet Explorer.");
            }
            else{
                alert(ver);
                window.location="<?php echo base_url("upgrade-browser")?>";
            }
        }	  
    }
	
    checkVersion();

 //   $(function() {
   //     $('#side-menu').metisMenu();
  //  });
</script>
                <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					 <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url(); ?>images/fom-logo.jpg"alt="FOM Hochschule" style="max-width: 100%;width:90px; height:auto;" title="FOM Hochschule">
                    </a>
                </div>
                <!-- /.navbar-header -->
                 <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <a href="<?php echo base_url();?>change-password/">
                            <i class="fa fa-sign-out fa-fw"></i>
							Change Password
                        </a>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>logout/?token=<?php echo $this->session->userdata("token");?>">
                            <i class="fa fa-sign-out fa-fw"></i>
                            Logout
                        </a>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">                           
                           
                            <li <?php echo $enquiry;?>>
								<a <?php echo $enquiry;?> href="<?php echo base_url();?>manage-enquiry">Manage Enquiry</a>
							</li>    
							
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>