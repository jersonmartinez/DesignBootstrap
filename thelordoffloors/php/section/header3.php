<!DOCTYPE HTML>
<?php include 'php/text.php' ?>
<html lang="en" <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebSite'";}?>>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?php 
		  if($page_name=='index.php'){echo "Home";}
		  elseif ($page_name=='about.php') {echo "About";}
		  elseif ($page_name=='services.php') {echo "Services";}
		  elseif ($page_name=='portfolio.php') {echo "Portfolio";}
		  // elseif ($page_name=='testimonials.php') {echo "Testimonials";}
		  // elseif ($page_name=='blog.php') {echo "Blog";}
		  // elseif ($page_name=='blog-page.php') {echo "Blog Page";}
		  // elseif ($page_name=='landing-page.php') {echo "Landing Page";}
		  elseif ($page_name=='contact.php') {echo "Contact Us";}?> - <?php echo "$Company"; 
		?>
	</title>
	<meta name="description" content="Pablo’s Landscaping LLC has a FREE estimate policy, so whenever you contact us, please feel free to request it....">
	<meta name="author" content="http://www.eliteonlinemedia.com/">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

	
	<script async="async" src="js/jquery-3.1.0.min.js"></script>
	
	<?php include 'php/css_minified.php' ?>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script async="async" src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script async="async" src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <!--
    <link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css" media="screen">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
	<link rel="stylesheet" href="vendor/mediaelement/mediaelementplayer.css" />
	<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">

    <link rel="stylesheet" href="css/theme.min.css">
	<link rel="stylesheet" href="css/skins/red.css">
	<link rel="stylesheet" href="css/custom.min.css">
	<link rel="stylesheet" href="css/fonts/mainfont/stylesheet.css">
	
	-->
	<script async="async" src="vendor/modernizr.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="vendor/respond.min.js"></script>
	<![endif]-->

	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->

	<link rel="shortcut icon" href="images/favicon.png">
	
	<script type="text/javascript">
	   onload=function() {
	   document.getElementById('dir').value = location.href;
	   }
	</script>

	
</head>
<body <?php if($page_name!='blog.php'){echo "itemscope itemtype='http://schema.org/WebPage'";}?>>

	<div class="site-wrapper">

		<!-- Header -->
		<header class="header header-menu-fullw header-top-clean">
		<div class="degradado-verde">&nbsp;</div>
			<!-- <div class="header-top b_green-4 t_white"> -->
				<!-- <div class="container"> -->
					<!-- <div class="header-top-left">
						<ul class="header-top-nav">
							<li><a href="contact.php" title="Address" class="t_white"><i class="fa fa-home t_white"></i> <?php echo "$Address";?></a>
							</li>									
							<li><a href="<?php echo "$MailRef";?>" title="Mail" class="t_white lowercase"><i class="fa fa-envelope t_white"></i> <?php echo "$Mail";?></a>
							</li>
						</ul>
					</div> -->
					<!-- <div class="header-top-right">
						<span class="info-item"><a href="" title="License" class="t_white"><i class="fa fa-file t_white"></i> <?php echo "$License";?></span>
						<span class="info-item"><a href="<?php echo "$PhoneRef";?>" title="Phone" class="t_white"><i class="fa fa-phone t_white"></i> <?php echo "$Phone";?></a></span>
					</div> -->
				<!-- </div> -->
			<!-- </div> -->
			<div class="header-main">
				<nav class="navbar navbar-default fhmm" role="navigation">
					<div class="navbar-header degradado-rojo bg_fixed">
						<div class="container">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
								<i class="fa fa-bars"></i>
							</button>

							<div class="logo hidden-xs" >
								<a href="index.php" title="logo"><img src="images/logo.png" alt="<?php echo "$Company";?>"></a> 
								 <!-- <h1 class="t_red-4 bars stroke3"><?php echo "$Company";?></h1>   -->
							</div>
							<div class="logo visible-xs" style="width:80%!important">
								<a href="index.php" title="logo" style="width:80%!important"><img src="images/logo.png" alt="<?php echo "$Company";?>" class="img-responsive"></a> 
								 <!-- <h1 class="t_fuchsia-1 bars stroke"><?php echo "$Company";?></h1>   -->
							</div>
							
					      <div class="search-form ">
								<div class="input-group">									
									<ul class="header-top-right bars2 b_red-1"><li><a href="<?php echo "$PhoneRef";?>" title="Phone" class="t_white"><i class="fa fa-phone t_white  padding10"></i><?php echo "$Phone";?></a></li>
									<!-- <li><a href="<?php echo "$PhoneRef2";?>" title="Phone" class="t_black"><i class="fa fa-phone t_black"></i> Phone1:<?php echo "$Phone2";?></a></li> -->
									<!-- <li><a href="<?php echo "$PhoneRef3";?>" title="Phone" class="t_black"><i class="fa fa-phone t_black"></i> Phone2:<?php echo "$Phone3";?></a></li>-->
									<li><a href="contact.php" title="Address" class="t_white"><i class="fa fa-home t_white  padding10"></i> <?php echo "$Address";?></a> </li>
									<li><a href="<?php echo "$MailRef";	?>" title="Mail" class="t_white lowercase"><i class="fa fa-envelope t_white  padding10"></i> <?php echo "$Mail";?></a>	</li>
									</ul>
								</div>
							</div>
					      <!-- Search Form / End -->

						</div>
					</div><!-- end navbar-header -->

					<div id="main-nav" class="navbar-collapse collapse b_green-4 bottom-shadow" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<div class="container">
							<ul class="nav navbar-nav">
								<li itemprop="name" class="<?php echo ($page_name=='index.php')?'active':'';?>">
								   <a itemprop="url" href="index.php" title="Home" class="t_red-1 uppercase">Home</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='about.php')?'active':'';?>">
									   <a itemprop="url" href="about.php" title="About Us" class="t_red-1 uppercase">About Us</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='services.php')?'active':'';?>" >
									   <a itemprop="url" href="services.php" title="Services" class="t_red-1 uppercase">Services</a>
								</li>
								<li itemprop="name" class="<?php echo ($page_name=='portfolio.php')?'active':'';?>" >
									   <a itemprop="url" href="portfolio.php" title="Portfolio" class="t_red-1 uppercase">Portfolio</a>
								</li>
								<!-- <li itemprop="name" class="<?php echo ($page_name=='testimonials.php')?'active':'';?>">
									   <a itemprop="url" href="testimonials.php" title="Testimonials" class="t_white uppercase">Testimonials</a>
								</li> -->
								<!--<li itemprop="name" class="<?php echo ($page_name=='blog.php')?'active':'';?>">
									   <a itemprop="url" href="blog.php" title="Blog" class="t_black uppercase">Blog</a>
								</li> -->
								<li itemprop="name" class="<?php echo ($page_name=='contact.php')?'active':'';?>">
									   <a itemprop="url" href="contact.php" title="Contact Us" class="t_red-1 uppercase">Contact Us</a>
								</li>
								<!-- <li itemprop="name" class="dropdown <?php echo ($page_name=='landing-page.php')?'active':'';?>">
									<a itemprop="url" href="#" title="DropDown" data-toggle="dropdown" class="dropdown-toggle t_black uppercase">Dropdown<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li itemprop="name" class="<?php echo ($page_name=='landing-page.php')?'active':'';?>"><a itemprop="url" href="landing-page.php" title="Landing Page" class="t_black uppercase">Landing Page</a></li>
										<li itemprop="name" class="<?php echo ($page_name=='404.php')?'active':'';?>"><a itemprop="url" href="404.php" title="Error404" class="t_black uppercase">Error404</a></li>
									</ul>
								</li> -->
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<div class="main" role="main">