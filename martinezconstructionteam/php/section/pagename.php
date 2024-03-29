<section itemscope itemtype="http://schema.org/WPHeader" class="breadcumb-position">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6">
				<h4 itemprop="headline" itemprop="name" class="t-white breadcumb-title shadow-text-slider text-md-right text-center py-3">
					<?php echo $page_name2;?>
				</h4>
		    </div>
		    <div class="col-md-6 d-none d-md-block">
		    	<ol class="breadcrumb pull-right" vocab="http://schema.org/" typeof="BreadcrumbList">
		    		<li property="itemListElement" typeof="ListItem" class="breadcrumb-item">
		    			<a href="index.php" title="Home" property="item" typeof="WebPage" class="t-Color2"><i class="fa fa-home"></i> <span property="name">Home</span></a>
					  	<meta property="position" content="1">
		    		</li>
		    		<?php if ($page_name=='private-transportation-services.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a  title="House Cleaning" property="item" typeof="WebPage"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif ($page_name=='private-airport-transportation.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a  title="Apartment Cleaning" property="item" typeof="WebPage"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif ($page_name=='taxi-service.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a  title="Window Cleaning" property="item" typeof="WebPage"><span property="name">Services</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php } elseif ($page_name=='blog-page.php'){?>
		    		<li property="itemListElement" typeof="ListItem">&nbsp;|
		    			<a href="blog.php" title="Blog" property="item" typeof="WebPage"><span property="name"> Blog</span></a>
					  	<meta property="position" content="2">
		    		</li><?php } elseif ($page_name=='blog-page.php'){?>
		    		<li property="itemListElement" typeof="ListItem">
		    			<a href="blog.php" title="Blog" property="item" typeof="WebPage"><span property="name">Blog</span></a>
					  	<meta property="position" content="2">
		    		</li>
		    		<?php }?>
		    		<li property="itemListElement" typeof="ListItem">
					  	<span property="item" typeof="WebPage">
					  		<span property="name">
				    			 &nbsp;| <?php echo $page_name2;?>
				            </span>
			    		</span>
			    		<meta property="position" content="<?php if ($page_name=='flagstone.php'||$page_name=='fireplaces.php'||$page_name=='stone-and-brick-additions.php'||$page_name=='blog-page.php'){echo "3";}else{echo "2";};?>">
		    		</li>
		    	</ol>
		    </div>
		</div>
	</div>
</section>