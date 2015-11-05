<?php

/*------------------------------------------------------------------------
# author    Gonzalo Suez
# copyright Copyright � 2012 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;
// Column widths

$leftcolgrid 	= $this->params->get('columnWidth', 3);

$rightcolgrid	= $this->params->get('columnWidth', 3);

?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >

  <?php
  if ($this->countModules('left') == 0):?>
  <?php $leftcolgrid  = "0";?>
  <?php endif; ?>

  <?php
  if ($this->countModules('right') == 0):?>
  <?php $rightcolgrid  = "0";?>
  <?php endif; ?>

  <?php if ($this->params->get('template-width') == 1):?>
  <?php $template_width = "-fluid" ;?>
  <?php else :?>
  <?php $template_width = "" ;?>
  <?php endif; ?>

  <head>

  <jdoc:include type="head" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0"
  
  <!-- Stylesheets -->

  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/style.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/joomla.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/bootstrap-responsive.css" >
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/google-code-prettify/prettify.css" >


  </head>

  <body>

  <!--top-->
  <div id="wrap">
	<!--Navigation-->
	<?php if($this->countModules('navigation')) : ?>
	<div id="navigation" class="fix">           
		<div class="navbar">
		  <div class="navbar-inner">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
			  <span class="icon-bar"></span> 
			  <span class="icon-bar"></span> 
			  <span class="icon-bar"></span> 
			</a> 
			<?php endif; ?>

			<?php if($this->countModules('navigation')) : ?>
			  <div class="nav">
				<jdoc:include type="modules" name="navigation" style="none" />
			  </div>
			<?php endif; ?>
		  </div>
		</div>
	</div>
	<!--Navigation-->
  
  <?php if($this->countModules('top')) : ?>
    <div id="top">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="top" style="block" />	
    </div>
    </div>
    </div>
    <?php endif; ?>
	<!--top-->
    
	<?php if($this->countModules('logo')) : ?>
    <div id="logo">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="logo" style="block" />
    </div>
    </div>
    </div>
    <?php endif; ?>


    <!--fullwidth-->

    <?php if($this->countModules('fullwidth')) : ?>
    <div id="fullwidth">

    <jdoc:include type="modules" name="fullwidth" style="block"/>
    </div>

    <?php endif; ?>

    <!--fullwidth-->

    <!--Showcase-->
    <?php if($this->countModules('showcase')) : ?>
	<div id="newsWrapper">
		<div id="showcase" class="carousel">
			<div class="carousel-inner">
				<div id="c0" class="active item"></div>
				<div id="c1" class="item"></div>
				<div id="c2" class="item"></div>
				<div id="c3" class="item"></div>
				<div id="c4" class="item"></div>
				<div id="c5" class="item"></div>
			</div>
			<div class="container-fluid">
				<div class="row-fluid">
					<jdoc:include type="modules" name="showcase" style="block"/>
				</div>
			</div>
		</div>
	</div>
    <?php endif; ?>
    <!--Showcase-->

    <!--Feature-->

    <?php if($this->countModules('feature')) : ?>
    <div id="feature">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="feature" style="block" />	
    </div>
    </div>
    </div>
    <?php endif; ?>

    <!--Feature-->

    <!--above-->

    <?php if($this->countModules('above')) : ?>
    <div id="above">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="above" style="block" />	
    </div>
    </div>
    </div>
    <?php endif; ?>

    <!--above-->

    <!-- Content -->

    <div id="content">
    <div class="container-fluid">
    <jdoc:include type="message" />		
    <?php if($this->countModules('breadcrumbs')) : ?>
    <div id="breadcrumbs" class="row-fluid">
    <jdoc:include type="modules" name="breadcrumbs" style="block" />
    </div>
    <?php endif; ?>
    <div id="main" class="row-fluid">

    <!-- Left -->

    <?php if($this->countModules('left')) : ?>
    <div id="sidebar" class="span<?php echo $leftcolgrid;?>">
    <jdoc:include type="modules" name="left" style="block" />
    </div>
    <?php endif; ?>

    <!-- Component -->

    <div id="container" class="span<?php echo (12-$leftcolgrid-$rightcolgrid);?>">
    <?php if($this->countModules('content-top')) : ?>

    <!-- Content-top Module Position -->	

    <div id="content-top">
    <jdoc:include type="modules" name="content-top" style="block" />	
    </div>
    <?php endif; ?>

    <div id="main" class="main-box">
    <jdoc:include type="component" />
    </div>


    <?php if($this->countModules('content-bottom')) : ?>

    <!-- Below Content Module Position -->	

    <div id="content-bottom">
    <jdoc:include type="modules" name="content-bottom" style="block" />	
    </div>
    <?php endif; ?>
    </div>

    <!-- Right -->

    <?php if($this->countModules('right')) : ?>
    <div id="sidebar-2" class="span<?php echo $rightcolgrid;?>">
    <jdoc:include type="modules" name="right" style="block" />
    </div>
    <?php endif; ?>
    </div>
    </div>
    </div>

    <!-- Content -->

    <!-- bottom -->

    <?php if($this->countModules('bottom')) : ?>
    <div id="bottom">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="bottom" style="block" />
    </div>
    </div>
    </div>
    <?php endif; ?>
    <div id="push"></div>
    <!-- bottom -->
    </div>
    <!-- footer -->
    <?php if($this->countModules('footer')) : ?>
    <div id="footer">
    <div class="container-fluid">
    <div class="row-fluid">
    <jdoc:include type="modules" name="footer" style="block" />
    </div>
    </div>
    </div>
    <?php endif; ?>
    <!-- footer -->

    </div>
  </div>
  <jdoc:include type="modules" name="debug" />
  <!-- page -->	

  <!-- JS -->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script> 
    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/application.js"></script> -->
    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/prettify.js"></script> -->
    <script type="text/javascript">
		var $j = jQuery.noConflict();
		$j('.carousel').carousel({
			interval: 10000
		});
		
		function floatElements () {
			var elMenu = $j('#navigation')
			,  elNews = $j('#newsWrapper .container-fluid')
			,  scrollTop = $j(window).scrollTop()
			,  showHeight = $j('#showcase').height();
			
			if (scrollTop > 45) {
				if (elMenu.hasClass("fix")) {
					elMenu.removeClass("fix").addClass("float");
				};
			} else {
				if (elMenu.hasClass("float")) {
					elMenu.removeClass("float").addClass("fix");
				};
			};
			
			if (scrollTop > (showHeight - 158)) {
				if (elNews.hasClass("fix")) {
					elNews.removeClass("fix").addClass("float");
					calcPos();
				};
			} else {
				if (elNews.hasClass("float")) {
					elNews.removeClass("float").addClass("fix");
				};
			};
		};
		
		function calcPos () {
			var showHeight = $j('#showcase').height();
			
			if (elNews.hasClass("fix")) $j('#newsWrapper .container-fluid').css("bottom", "30px");
		};
		
		$j(document).ready(function(){
			$j('#newsWrapper .container-fluid').addClass('fix');
			$j(window).scroll(floatElements).trigger("scroll");
			$j(window).resize(calcPos).trigger("resize");
		});
	</script>
  <!-- JS -->
  

	<!-- Random showcase image -->
	<!--
	<script language="JavaScript" type="text/javascript">
		var $j = jQuery.noConflict();
		$j(document).ready(function() {
			var bgNum = Math.floor(Math.random() * 6);
			$j('#showcase').css("background", "url('/templates/masterbootstrap/img/fotoBG_" + bgNum + ".jpg') no-repeat");
			$j('#showcase').css("background-size", "contain"); 
		});
	</script>
	-->	
	
	</body>
</html>