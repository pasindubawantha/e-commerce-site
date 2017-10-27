<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo html_escape($site->title); ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=<?php echo html_escape($site->searchKeywords); ?> />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="<?php echo base_url(); ?>assets/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
</head>





<body>
<!-- header -->
<!--div class="header">
	<div class="container">
		<ul>
			<li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Free and Fast Delivery</li>
			<li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Free shipping On all orders</li>
			<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
		</ul>
	</div>
</div-->
<!-- //header -->
<!-- header -->
<!--div class="header">
	<div class="container">



	</div>
</div-->

<!-- header-bot -->
<div class="header-bot">
    <div class="container">
    	<?php
			if($this->session->has_userdata('sign_in_failed'))
			echo "<div class='alert alert-danger' role='alert'>Sign in failed !</div>";
			if($this->session->has_userdata('sign_up_failed'))
			echo "<div class='alert alert-danger' role='alert'>Sign up failed !</div>";
			if($this->session->has_userdata('sign_in_sucess'))
			echo "<div class='alert alert-success' role='alert'>Signed in sucefully !</div>";
			if($this->session->has_userdata('sign_up_sucess'))
			echo "<div class='alert alert-success' role='alert'>Signed up sucefully ! please verify you email address</div>";
			if($this->session->has_userdata('logged_off'))
			echo "<div class='alert alert-success' role='alert'>Logged off sucefully !</div>";
			?>
        <div class="col-md-3 header-left">
            <h1><a href="<?php echo base_url(); ?>/Page/index"><img src="<?php echo base_url(); ?>assets/images/logo3.jpg"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <?php echo form_open('Search/searchItem'); ?>
                <div class="search">
                    <input type="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required name="search">
                </div>
                <div class="section_room">
                    <select class="frm-field required" name="category">
                    	<?php
                    	echo "<option value='".NULL."'>All categories</option>";
                    	foreach($mainCategories as $category){
                    		echo "<option value='".$category->id."'>".html_escape($category->name)."</options>";
                    	}
                    	 ?>
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" " name="submit">
                </div>
                <div class="clearfix"></div>
            <?php echo form_close(); ?>
        </div>
        <div class="col-md-3 header-right footer-bottom">
            <ul>
                <li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>

                </li>

                <?php
                if($site->facebookURL != "#") echo "<li><a class='fb' href=$site->facebookURL ></a></li>";
                if($site->twitterURL != "#") echo "<li><a class='twi' href=$site->twitterURL ></a></li>";
                if($site->instagramURL != "#") echo "<li><a class='insta' href=$site->instagramURL ></a></li>";
                if($site->youtubeURL != "#") echo "<li><a class='you' href=$site->youtubeURL ></a></li>";
                ?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<!--li class="active menu__item menu__item--current"><a class="menu__link" href="Page/index">Home <span class="sr-only">(current)</span></a></li-->
					<li class="menu__item"><a class="menu__link" href=<?php echo "'".base_url()."'"?> >Home</a></li>
					<?php
					foreach($mainCategories as $mainCategory)
					{
						$subCategoriesThis = $subCategories[$mainCategory->id];
						if($subCategoriesThis == null)
						{
							echo "<li class='menu__item'><a class='menu__link' href='".base_url()."Category/".html_escape($mainCategory->id)."'>".html_escape($mainCategory->name)."</a></li>";
						}
						else
						{
							echo "<li class='dropdown menu__item'>";
							echo "<a href='".base_url()."Category/".html_escape($mainCategory->id)."' class='dropdown-toggle menu__link' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>".html_escape($mainCategory->name)."<span class='caret'></span></a>";
							echo "<ul class='dropdown-menu'>";
							echo "<li><a href='".base_url()."Category/".html_escape($mainCategory->id)."' > All </a></li>";
							for($i=0; $i < sizeof($subCategoriesThis); $i++)
							{
								echo "<li><a href='".base_url()."Category/".html_escape($subCategoriesThis[$i]->id)."' >".html_escape($subCategoriesThis[$i]->name)."</a></li>";
							}
							echo"</ul>";
							echo"</li>";
						}
					}
					?>
					<li class=" menu__item"><a class="menu__link" href=<?php echo "'".base_url()."Page/contactUs'"  ;?>>contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>

							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="banner-grid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide11.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide22.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/slide33.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="<?php echo base_url(); ?>assets/images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="<?php echo base_url(); ?>assets/images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="<?php echo base_url(); ?>assets/images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="<?php echo base_url(); ?>assets/images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->
