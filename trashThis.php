<?php
include ('connect.php');

$sql = "SELECT logo, status, merchid FROM merchants WHERE type='dining' AND status = 'active' ";
$result_dining = mysqli_query($con,$sql);
// Associative array
$row_dining = mysqli_fetch_assoc($result_dining);

$sql = "SELECT merchid, logo, welcome1, welcome2 FROM merchants";
$result_all = mysqli_query($con,$sql);
// Associative array
$row_all = mysqli_fetch_assoc($result_all);

$sql = "SELECT merchid, name, logo, photo, mini FROM merchants LIMIT 3";
$result_thumb = mysqli_query($con,$sql);
// Associative array
$row_thumb = mysqli_fetch_assoc($result_thumb);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to DirectValues.com</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="jcarousel/examples/responsive/jcarousel.responsive.css" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/map.css" />
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.ico">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="jcarousel/examples/responsive/jcarousel.responsive.js"></script>
	<script type="text/javascript" src="jcarousel/dist/jquery.jcarousel.min.js"></script>

</head>

<body>
		<div style="color:#333333;height:500px;font-size:5em"><h1 class="text-center">Meet Our Merchants</h1></div>

	<!-- top-bar sm md lg -->
	<div class="row clearfix full-bar background-dark bottom-rule hidden-xs">
		<div class="container">
			<div class="col-sm-7 col-md-8 col-lg-4 background-dark" style="margin:0">
				<img src="img/logo-directvalues.png" style="margin-top:10px;margin-bottom:3px"/>
			</div>
			<div class="col-md-8" style="padding-bottom:3px">
				<div class="btn-group pull-right" style="margin-top:32px;margin-bottom:32px">
					<button class="btn  btn-default btn-sm">Featured Merchants</button>
				  <button class="btn  btn-default btn-sm">Categories</button>
				  <button class="btn btn-default btn-sm">Merchant Map</button>
				  <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
				    Merchants
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				    <li><a href="#">Choice1</a></li>
				    <li><a href="#">Choice2</a></li>
				    <li><a href="#">Choice3</a></li>
				    <li class="divider"></li>
				    <li><a href="#">Choice..</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- top-bar xs -->
	<div class="row clearfix full-bar background-dark hidden-sm hidden-md hidden-lg">
		<div class="container">
			<div class="col-sm-9 background-dark text-center bottom-rule ">
				<img src="img/logo-directvalues.png" style="margin-top:10px"/>
			</div>
			<div class="col-sm-12 background-gray"> 
				<form class="form-inline" role="form" style="margin-top:32px;margin-bottom:32px">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2">Search Merchants</label>
				    <input type="search" class="form-control" id="exampleInputEmail2" placeholder="Search Merchants">
				  </div>
				  <button type="submit" class="btn btn-success btn-default">Search</button>
				</form>
			</div>
		</div>
	</div>
	
<div class="container">
	<div class="row clearfix">
		<div class="page-header" style="padding:0px;margin:0px">
			<h1 class="text-white text-center">Meet Our Merchants</h1>
			<h3 class="text-center no-margin" style="padding-bottom:10px">Get Fantastic Offers When You Signup And More On Your Birthday!</h3>
		</div>
		<!-- start carousel -->
		<div class="wrapper">
            <div class="jcarousel-wrapper">
                <div class="jcarousel background-dark">
                    <ul>
                        <!-- start boxes -->
						<?php  do { ?>
						<li class=" text-center">
							<div class="offer-boxes">
								<img class="img-responsive-centered" src="logo/<?php echo $row_all['logo']; ?>" />
								<h3><?php echo $row_all['welcome1']  ?></h3><h4><?php echo $row_all['welcome2']  ?></h4>
								<div class="btn-group btn-group-justified column" style="margin-top:8px">
									<a style="border:none" href="#" class="btn btn-warning btn-xs text-bold" type="button">Sign-Up</button>
									</a>
									<a style="border:none" href="#" class="btn btn-success btn-xs text-bold" type="button">More</button>
									</a>
								</div>
							</div>
						</li>
						<?php } while ($row_all = mysqli_fetch_assoc($result_all)); ?>
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="#" class="jcarousel-control-next"><span class="glyphicon glyphicon-chevron-right"></span></a>

                <p class="jcarousel-pagination"></p>
            </div>
        </div>
		<!-- end carousel -->
		
		<div class="col-md-3 column background-gray text-white top-rule" style="position:relative">
			<div class="sidebar-arrow"><img src="img/arrow.png" /></div>
			<h2 class="text-left text-white">Recieve Exclusive Email Offers! </h2>
			<h4 class="text-warning">Direct in your email!</h4>
			<p class="text-left text-white">Subscribe to our Email Update to receive fantastic discounts, contests and news for local restaurants and businesses.</p>
				<h3>
					<button class="col-xs-12 btn btn-warning btn-default">Subscribe Now!</button>
				</h3>
				<hr />
			<h3>
				Merchant Map
			</h3>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<iframe src="http://directvalues.com/small-map-for-index-bootstrap.php" height="255px" scrolling="no" style="border:None;overflow:hidden"></iframe>
				</div>
			</div> 
			<h4 style="color:#ffffff">
				<a href="http://directvalues.com/merchant_map.php"	>
					<span class="btn btn-success btn-default btn-block">Merchants Near You&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></span>
				</a>
			</h4>
			<h3>
				New to this site?
			</h3>
			<div class="" id="panel-979589">
				<div class="panel">
					<a class="" data-toggle="collapse" data-parent="#panel-979589" href="#panel-element-31500">
						<div class="btn btn-warning btn-default btn-block">
							 Learn More!
						</div>
					</a>
					<div id="panel-element-31500" class="panel-collapse collapse">
						<div class="panel-body">
							<h3>Landing Page</h3>
							<p>
							On the landing page you can sign up for our Email Update which contains brand new information and money-saving coupons from local restaurants and businesses. It also contains ways to join contests and win valuable gift certificates. Also, on the landing page you can click on any merchant logo and be transported to their merchant page where you will find much information and printable coupone offers with no sign up neccessary.
							</p>
							<h3>Merchant Pages</h3>
							<p>
							On the sidebar is an area for you to sign up for the a merchant's Customer Loyalty Program which will benefit you 
							by receiving regular updates and coupon offers direct in your email.
							</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		<div class="col-md-9 column">
			<div class="page-header" style="padding:0px;margin:0px">
			<h1>
				Featured Merchants <small></small>
			</h1>
			</div>
				<div class="row">
				<!-- start thumbs -->
				<?php  do { ?>
				<div class="col-md-4">
					<div class="thumbnail">
						<img style="width:100%;height:139px;overflow:hidden" src="http://directvalues.com/photo/<?php echo $row_thumb['photo']; ?>"/>
						<div class="caption">
							<h3>
								<?php echo $row_thumb['name']; ?>
							</h3>
							<div class="mini" style="text-align:justify">
								<?php echo $row_thumb['mini']; ?>
							</div>
							<p>
								<a style="margin-top:20px" class="btn btn-primary btn-sm" href="#">More</a>
							</p>
						</div>
					</div>
				</div>
				<?php } while ($row_thumb = mysqli_fetch_assoc($result_thumb)); ?>
				<!--end thumbs -->
				
			</div>
			<div class="tabbable col-md-12" id="tabs-983614">
				<h1>Categories</h1>
				<h4>Get fantastic offers When you sign-Up & more on your birthday!</h4>
				<ul class="nav nav-tabs">
					<li class="active">
						<a style="font-size:150%" href="#panel-dining" data-toggle="tab">Dining</a>
					</li>
					<li>
						<a style="font-size:150%" href="#panel-retail" data-toggle="tab">Retail</a>
					</li>
					<li>
						<a style="font-size:150%" href="#panel-services" data-toggle="tab">Services</a>
					</li>
				</ul>
				<div class="tab-content background-dark clearfix">
					<div class="tab-pane active" id="panel-dining">
						<!-- start individual category box -->
						<?php  do { ?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 column text-center" id="logo-boxes" style="margin-bottom:16px;margin-top:16px">
							<img class="img-responsive-centered" src="logo/<?php echo $row_dining['logo']; ?>" />
							<div id="offer-boxes" style="margin-top:0px">
								<div class="btn-group btn-group-justified column" style="margin-top:8px">
								<a href="#" class="btn btn-warning btn-xs text-bold" type="button">Sign-Up</button>
								</a>
								<a href="#" class="btn btn-success btn-xs text-bold" type="button">More</button>
								</a>
							</div>
							</div>
						</div>
						<?php } while ($row_dining = mysqli_fetch_assoc($result_dining)); ?>
						<!--end individual category box -->
					</div>
					<div class="tab-pane" id="panel-retail">
						<p>
							<div class="col-md-3 column">
								<img alt="140x140" src="http://lorempixel.com/140/140/" />
								<div class="btn-group">
									 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
								</div>
							</div>
							<div class="col-md-3 column">
								<img alt="140x140" src="http://lorempixel.com/140/140/" />
								<div class="btn-group">
									 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
								</div>
							</div>
							<div class="col-md-3 column">
								<img alt="140x140" src="http://lorempixel.com/140/140/" />
								<div class="btn-group">
									 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
								</div>
							</div>
							<div class="col-md-3 column">
								<img alt="140x140" src="http://lorempixel.com/140/140/" />
								<div class="btn-group">
									 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
								</div>
							</div>
						</p>
					</div>
					<div class="tab-pane" id="panel-services">
						<p>
							<div class="col-md-3 column">
								<img class="img-responsive" alt="140x140" src="logo/blackcow_logo.jpg" />
								<div class="btn-group btn-group-justified">
									<a href="#" class="btn btn-warning btn-sm" type="button">Info</button>
									</a>
									<a href="#" class="btn btn-success btn-sm" type="button">Values</button>
									</a>
								</div>
							</div>
								<div class="col-md-3 column">
									<img alt="140x140" src="http://lorempixel.com/140/140/" />
									<div class="btn-group">
										 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
									</div>
								</div>
								<div class="col-md-3 column">
									<img alt="140x140" src="http://lorempixel.com/140/140/" />
									<div class="btn-group">
										 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
									</div>
								</div>
								<div class="col-md-3 column">
									<img alt="140x140" src="http://lorempixel.com/140/140/" />
									<div class="btn-group">
										 <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-left"></em> Left</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-center"></em> Center</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-right"></em> Right</button> <button class="btn btn-default" type="button"><em class="glyphicon glyphicon-align-justify"></em> Justify</button>
									</div>
								</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
//carousel script

</script>
<script type="text/javascript">
//remove html from .mini div
	$(".mini * ").each(function() {
		var content = $(this).contents();
	$(this).replaceWith(content);
	});
</script>
</body>
</html>
