<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>FOM Hochschule</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/front/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/front/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/front/owl.theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/front/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4VMFT5HXZT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4VMFT5HXZT');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GSTT4RR1D3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GSTT4RR1D3');
</script>

  </head>
	<body>	
		<?php $this->load->view("front/incls/header"); ?>
		<?php $this->load->view($front_content);?>			
		<?php 
			$this->load->view("front/incls/footer");
		?>	
		<script>
			// very simple to use!
			$(document).ready(function() {
				$('.js-activated').dropdownHover().dropdown();			  
			});
		</script>
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
					
					  if( ver > -1 )
					  {
						if( ver >= 7.0 ){
						  //alert("You're using a recent copy of Internet Explorer.");
						}
						else{
						  alert("You should upgrade your copy of Internet Explorer.");
						  window.opener=null;
						  window.close();
						}
					  }	  
					}
					
					checkVersion();
							
				</script>
		
	</body>
</html>
	
		