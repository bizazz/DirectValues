<?php
include ('connect.php');

$sql = "SELECT logo, status, merchid FROM merchants WHERE type='service' AND status = 'active' ";
$result_service = mysqli_query($con,$sql);
// Associative array
$row_service = mysqli_fetch_assoc($result_service);

$sql = "SELECT logo, status, merchid FROM merchants WHERE type='retail' AND status = 'active' ";
$result_retail = mysqli_query($con,$sql);
// Associative array
$row_retail = mysqli_fetch_assoc($result_retail);

$sql = "SELECT logo, status, merchid FROM merchants WHERE type='dining' AND status = 'active' ";
$result_dining = mysqli_query($con,$sql);
// Associative array
$row_dining = mysqli_fetch_assoc($result_dining);

$sql = "SELECT merchid, logo, welcome1, welcome2 FROM merchants";
$result_all = mysqli_query($con,$sql);
// Associative array
$row_all = mysqli_fetch_assoc($result_all);

$sql = "SELECT merchid, name, logo, photo, mini FROM merchants LIMIT 2";
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
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="jcarousel/examples/responsive/jcarousel.responsive.css" rel="stylesheet">
	<link href="css/map.css" rel="stylesheet">
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
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="jcarousel/examples/responsive/jcarousel.responsive.js"></script>
	<script type="text/javascript" src="jcarousel/dist/jquery.jcarousel.min.js"></script>

</head>

<body>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
	<!-- /.modal -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      ...
	    </div>
	  </div>
	</div>
	<!-- top-bar sm md lg -->
	<div class="row clearfix full-bar background-dark bottom-rule hidden-xs">
		<div class="container">
			<div class="col-sm-7 col-md-8 col-lg-4 background-dark" style="margin-left:-24px">
				<img src="img/logo-directvalues.png" style="margin-top:10px;margin-bottom:3px"/>
			</div>
			<div class="col-md-8" style="padding-bottom:3px">
				<div class="btn-group pull-right" style="margin-top:44px">
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
	
<div class="container">
	<div class="row clearfix">
		<div class="page-header">
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


                <p class="jcarousel-pagination hidden-xs hidden-sm hidden-md"></p>

                <p class="jcarousel-pagination hidden-xs hidden-sm"></p>

            </div>
        </div>
		<!-- end carousel -->
		
		<div class="col-md-3 column background-gray text-white top-rule" style="position:relative">
			<h2 class="text-left text-white">Receive Exclusive Email Offers! </h2>
			<h4 class="text-warning">Direct in your email!</h4>
			<p class="text-left text-white">Subscribe to our Email Update to receive fantastic discounts, contests and news for local restaurants and businesses.</p>
				<h3>
					<button class="col-xs-12 btn btn-warning btn-default">
						<div class="sidebar-arrow"><img src="img/arrow.png" /></div>
						Subscribe!</button>
				</h3>
				<hr />
			<h3>
				Merchant Map
			</h3>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<div id="store-locator-container" style="margin:0px">
						<div id="map-container" style="width:255px;height:288px;margin:0;padding:0">
						<div id="map" style="width:255px;height:288px;margin:0;padding:0">
					</div>
				</div>
    </div>

    <div id="distances"></div>
				</div>
			</div> 
			<h4 style="color:#ffffff">
				<a data-toggle="modal" href="http://directvalues.com/merchant_map.php"  data-target="#myModal"	>
					<span class="btn btn-success btn-default btn-block">Merchants Near You&nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></span>
				</a>
			</h4>
			<div class="background-dark" style="padding-right:16px;padding-left:16px;padding-top:1px;padding-bottom:8px;margin-bottom:16px;text-align:justify">
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
							<h3>The Landing Page</h3>
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
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="thumbnail">
						<div style="height:139px;overflow:hidden">
						<img class="img-responsive" style="width:100%" src="http://directvalues.com/photo/<?php echo $row_thumb['photo']; ?>"/>
						</div>
						<div class="caption clearfix">
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
			<div class="tabbable" id="tabs-983614" style="margin-bottom:40px">
				<h1>Categories</h1>
				<h4>Explore The Merchants Below And Find Great Ways To Save.</h4>
				<ul class="nav nav-tabs">
					<li class="active">
						<a style="font-size:130%" href="#panel-dining" data-toggle="tab">Dining</a>
					</li>
					<li>
						<a style="font-size:130%" href="#panel-retail" data-toggle="tab">Retail</a>
					</li>
					<li>
						<a style="font-size:130%" href="#panel-services" data-toggle="tab">Services</a>
					</li>
				</ul>
				<div class="tab-content background-dark clearfix">
					<div class="tab-pane active" id="panel-dining">
						<!-- start dining category box -->
						<?php  do { ?>

						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 column text-center" id="logo-boxes" style="margin-bottom:16px;margin-top:16px">

						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 column text-center" id="logo-boxes" style="margin-bottom:16px;margin-top:16px">

							<img class="img-responsive-centered" src="logo/<?php echo $row_dining['logo']; ?>" />
							<div id="offer-boxes" style="margin-top:0px">
								<div class="btn-group btn-group-justified column" style="margin-top:4px">
								<a href="#" class="btn btn-warning btn-xs text-bold" type="button">Sign-Up</button>
								</a>
								<a href="#" class="btn btn-success btn-xs text-bold" type="button">More</button>
								</a>
							</div>
							</div>
						</div>
						<?php } while ($row_dining = mysqli_fetch_assoc($result_dining)); ?>
						<!--end dining category box -->
					</div>
					<div class="tab-pane" id="panel-retail">
						<!-- start retail category box -->
						<?php  do { ?>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 column text-center" id="logo-boxes" style="margin-bottom:16px;margin-top:16px">
							<img class="img-responsive-centered" src="logo/<?php echo $row_retail['logo']; ?>" />
							<div id="offer-boxes" style="margin-top:0px">
								<div class="btn-group btn-group-justified column" style="margin-top:4px">
								<a href="#" class="btn btn-warning btn-xs text-bold" type="button">Sign-Up</button>
								</a>
								<a href="#" class="btn btn-success btn-xs text-bold" type="button">More</button>
								</a>
							</div>
							</div>
						</div>
						<?php } while ($row_retail = mysqli_fetch_assoc($result_retail)); ?>
						<!--end retail category box -->
					</div>
					<div class="tab-pane" id="panel-services">
						<!-- start service category box -->
						<?php  do { ?>
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 column text-center" id="logo-boxes" style="margin-bottom:16px;margin-top:16px">
							<img class="img-responsive-centered" src="logo/<?php echo $row_service['logo']; ?>" />
							<div id="offer-boxes" style="margin-top:0px">
								<div class="btn-group btn-group-justified column" style="margin-top:4px">
								<a href="#" class="btn btn-warning btn-xs text-bold" type="button">Sign-Up</button>
								</a>
								<a href="#" class="btn btn-success btn-xs text-bold" type="button">More</button>
								</a>
							</div>
							</div>
						</div>
						<?php } while ($row_service = mysqli_fetch_assoc($result_service)); ?>
						<!--end service category box -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script>
//carousel script

</script>
<script src="http://maps.google.com/maps/api/js?sensor=false&region=US"></script>
<script src="js/jquery.storelocator-index.js"></script>

<script>
    $(function() {
      $('#map-container').storeLocator({ 'maxDistance': true, 'slideMap' : false, 'defaultLoc': true, 'defaultLat': '44.9207462', 'defaultLng' : '-93.3935366' });
    });
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
