<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $core->company;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php //echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.css')?>" type="text/css" />
<script type="text/javascript">
var SITEURL = "<?php //echo $core->site_url; ?>";
var THEME = "<?php //echo THEME;?>";
</script>
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="<?php echo base_url('js/jquery.js');?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('js/jquery-ui.js')?>"></script>
<script src="<?php echo base_url('js/jquery.ui.touch-punch.js')?>"></script>
<script src="<?php echo base_url('js/global.js')?>"></script>
<script src="<?php echo base_url('js/nicescroll.js')?>" type="text/javascript" ></script>
<script src="<?php echo base_url('js/modernizr.mq.js')?>" type="text/javascript" ></script>
<script src="<?php echo base_url('js/checkbox.js')?>"></script>
<script src="<?php echo base_url('js/jquery.flexslider-min.js')?>"></script>
<script src="<?php echo base_url('js/countdown.js')?>"></script>
<script src="<?php //echo base_url('js/custom.js')?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/flexslider.css')?>" media="screen" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript"> 
// Slider with thumbnail
$(document).ready(function() {
	$('#slider').flexslider({
		animation: "slide",
		controlNav: true,
		autoplay: false,
		directionNav: true,
		animationLoop: true,
		slideshow: true
    });
});
</script>
</head>
<body data-smooth-scrolling="1">
<div id="loader" style="display:none"></div>
<div class="bg">
<div class="container" style="background: #009fda;">
<div class="in-grid">
<!-- Breadcrumbs -->
    <section id="crumbs" class="row crumbs2">
      <div class="col grid_6">
        <a href="index.php"><img src="<?php echo base_url('images/');?>" alt="Mock" class="front-logo"/></a>
      </div>
	  <div class="col grid_14">
		<ul class="social">

			<li><a href="#" target="_blank"><i class="fa fa-facebook feature-icon"></i></a></li>

			<li><a href="#" target="_blank"><i class="fa fa-twitter feature-icon"></i></a></li>

			<li><a href="#" target="_blank"><i class="fa fa-google-plus feature-icon"></i></a></li>

			<li><a href="#" target="_blank"><i class="fa fa-pinterest feature-icon"></i></a></li>

			<li><a href="#" target="_blank"><i class="fa fa-linkedin feature-icon"></i></a></li>

			<li><a href="#" target="_blank"><i class="fa fa-rss feature-icon"></i></a></li>

		</ul>
      </div>
	  <div class="col grid_4 header-login">
		<?php if (true){ ?>
			<a href="index.php#loginbox" class="button-login">Login</a><a href="register.php" class="button-register">Register</a>
		<?php } else { ?>
			<a href="logout.php" class="button-logout">Logout</a>
		<?php }  ?>
      </div>
    </section>
    <!-- Breadcrumbs /-->
	<!-- Header -->
	<header id="header" class="clearfix">
	  <div class="row grid_24 clearfix"> 
		<!-- Main Menu -->
		<nav id="menu" class="nav">
		  <ul>
			<li<?php if(true) echo ' class="active"';?>> <a href="index.php"><span>Home</span> </a> </li>
			<li> <a href="courses.php"><span>Courses</span> </a> </li>
			<li> <a href="exams.php"><span>Exams</span> </a> </li>
			<li> <a href="resources.php"><span>Resources</span> </a> </li>
			<li> <a href="faqs.php"><span>FAQs</span> </a> </li>
			<li> <a href="contact.php"><span>Contact</span> </a> </li>
		  </ul>
		</nav>
		<!-- Main Menu  /--> 
	  </div>
	</header>
</div>
</div>
<div class="container in-grid">

<!-- Header /-->
  <!-- Main Content -->
  <div  class="row grid_24">
  <div id="msgholder"></div>
            
            <?php $this->load->view($page); ?>

  </div>
  <!-- Main Content /-->

</div><!-- container /-->
</div><!-- Bg /-->

<!-- Footer -->
<div class="footer-panel">
	<section class="row in-grid">
		<div class="col grid_8">
			<h2>about text</h2>
			<p>about description</p>
		</div>
		<div class="col grid_8">
			<h2>Resourses</h2>
			<ul>
			<li><a href="#"><h4>Resource1</h4></a></li>
			</ul>

		</div>
		<div class="col grid_8 fw_git">
			<h2>Contact</h2>
			<ul>
				<li><i class="icon-truck"></i><span>123 Main St., Toronto, Ontario</span><li>
				<li><i class="icon-phone-sign"></i><span>555-555-5555</span><li>
				<li><i class="icon-envelope"></i><span>sreeraj.mnair@gmail.com</span><li>				
			</ul>
		</div>
	</section>  
</div>
	
	
<footer id="footer" class="clearfix">
  <div class="row">
    <div class="fotter-wrap">
      <div class="col grid_24">
        <div class="copyright top10">Copyright &copy;<?php echo date('Y');?> Mock  All Rights Reserved. | Powered by: Mock</div>
      </div>
    </div>
  </div>
</footer>


<script type="text/javascript">
  $('<button type="button" id="menutoggle" class="navtoogle"><i class="icon-reorder"> </i> Button</button>').insertBefore("#menu ul");
  $('#menutoggle').click(function () {
	  $(this).toggleClass('active');
  });
</script>
</body></html>