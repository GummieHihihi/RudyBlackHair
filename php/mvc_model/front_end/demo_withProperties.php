<?php 
require_once('../model/model.php');
require_once('../model/config.php');
$config = new config();
$dbhost = $config->dbhost;
$dbport = $config->dbport;
$dbuser = $config->dbuser;
$dbpassword = $config->dbpassword;
$dbname = $config->dbname;
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$selsectAll = $model->selectAll("product", "admin");
$row = $selsectAll -> fetch_all(MYSQLI_NUM);

?>
<!DOCTYPE html>
<html>
<head>
	<title>horny.sg</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- java script : my  -->
	<script src="myJavaScript.js"></script>
	
	<link href="cssWithProperties.css" rel="stylesheet">
	
	<!-- js livrary -->
	<script src="http:/path/to/jquery.min.js"></script>
	<script src="http:/path/to/slick.min.js"></script>
	<!-- auto complete library-->
	
</head>

<body>
	<!-- start-->
	
	<div class="thedivcontainall container-fluid">
		<!-- start the header-->
		<div class="header" id="headerforcomputer">
			<!-- the first big navigator-->
			<div class="bignavigator navbar row">
				<!-- navigator left -->
				<div class="bignavigatorleft col-md-6 col-xs-12">
					<div class="bignavigatorleftcontent">
						<font size="2"><b>FREE SHIPING ABOVE |  SAME DAY DELIVERY</b></font>
					</div>
				</div>
				<!-- navigator right -->
				
				<div class="nignavigatorright row col-md-6 col-xs-12">
					<div class="nignavigatorrightproperties col-md-2 col-xs-12" class="fa fa-question-circle-o"><font size="2">Contact US</font></div>
					<div class="nignavigatorrightproperties col-md-2 col-xs-12"><font size="2"><i class="fa fa-question-circle-o"></i>  Help</font></div>
					<div class="nignavigatorrightproperties col-md-2 col-xs-12"><font size="2">Log out</font></div>
					<div class="nignavigatorrightproperties col-md-3  col-xs-12" class="fa fa-user-o"><font size="2"><i class="fa fa-user-o"></i> Account</font></div>
					<div class="nignavigatorrightproperties col-md-3  col-xs-12" class="fa fa-shopping-bag"><font size="2">Shopping Bag</font></div>
				</div>
				
			</div>
			<!-- end of navigator-->
			<!-- start of the shocking comercial--> 
			<div class="shockingcomercial ">
				<div class="row">
					<div class="shockingcomercialleft col-md-8 col-xs-12">
						<font size="+2">INSIDER DEALS HURRAY COUNTING DOWN. SALES UP TO 80% OFF</font>
					</div>
					<div class="shockingcomercialright col-md-4 col-xs-12">
						<a href="" style="color: white"><font size="+">SHOP NOW -></font><b></b></a>
					</div>
				</div>
			</div>
			<!--end of the shocking comercial -->
			<!-- logo image-->
			<div class="searcharea">
				<div class="row">
					<div class="searchareaproperties col-md-3 col-sm-12 col-xs-6"> <img class="img-responsive" alt="icon" src="image/horny.png"></div>

					<div class="searchareainput col-md-6 col-sm-12 col-xs-6"> 
						<!-- input in input-->
						<div class="row">
							<input type="text" placeholder="Search the entire shop here" name="search" id="input" style="position: relative;" class="">
							<button class="" id="search" type="button"><i class="fa fa-search" style="color: white"></i></button>
							<div id="loading" style="position: absolute; width: 55px;left: 365px;top: 34px;height: 30px;"><img src="image/loadingimg.jpg" class="img-responsive"></div>
						</div>
						<div class="row">
							<span style="clear: both;" id="resultprint"></span>
						</div>
					</div>
					<div id="match-list"></div>

					<div class="searchareaproperties col-md-3 col-sm-12 col-xs-12"> 
						<div class="contactinsearch"><font size="+1"><b> Call / SMS/ What's App</b></font></div>
						<div class="contactinsearch"><font size="+3"><b>+6597772176</b></font></div>
					</div>
				</div>
			</div>
			<!-- product navigator-->
			<div class="productnavigator">
				<ul class="navigatorproperties">
					<div class="row">
						<li class="col-md-2 col-sm-6 col-xs-12"> <a href="#"> <b><font size="+1"></font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"> <a href="#"> <b><font size="+1">MEN</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">WOMEN</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">Lure</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">Anal</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">SM Fetish</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">Lingeries</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6"><a href="#"><b><font size="+1">Parites</font></b></a></li>
						<li class="col-md-1 col-sm-6 col-xs-6 "><a href="#"><b><font size="+1">Sales</font></b></a></li>
						<li class="col-md-2 col-sm-6 col-xs-12"> <a href="#"> <b><font size="+1"></font></b></a></li>
					</div>
				</ul>
			</div>
		</div>
		<!-- end of header for computer-->
		<div class="headerphone" id="headerforphone">
			<div class="bignavigatorphone navbar row">
				<div class="bignavigatorLeft col-xs-4">
					<div class="navigatorleftleft col-xs-6">
						<div class="dropdown">
							<button class="buttonsheader btn-primary dropdown-toggle" type="button" style="background-color: white; border:none" data-toggle="dropdown">
								<i style='font-size:30px; margin-top: 31px;color: black;' class='fas'>&#xf039;</i>
							</button>
							<ul class="dropdown-menu">
								<li><a href="#">HTML</a></li>
								<li><a href="#">CSS</a></li>
								<li><a href="#">JavaScript</a></li>
							</ul>
						</div>
					</div>
					<div class="navigatorleftright col-xs-6">
						<i style='font-size:30px; margin-top: 31px;' class='fas'>&#xf879;</i>
					</div>
				</div>
				<div class="bignavigatorcenter col-xs-5">
					<img src="image/horny.png" class="img-responsive">
				</div>
				<div class="bignavigatorrightphone col-xs-3">
					<i style="font-size:30px; margin-top: 31px;" class="fa">&#xf07a;</i>
				</div>
			</div>
		</div>
		<div class="searchbarphone" id="searchforphone">
			<input type="text"  placeholder="Search the entire shop here" name="searchinput" id="search" style="position: relative;" class="">
			<span id="match-list"></span>
			<button class="" type="button"><i class="fa fa-search" style="color: white"></i></button>
		</div>
		
		<!-- start body for phone-->
		<div class="bodyforphone" id="bodyforphone">
			<!-- welcome slider -->
			<div id="myCarouselwelcomephone" class="carouselbody carousel slide" data-ride="carousel" data-interval="10000">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarouselwelcomephone" data-slide-to="0" class="active"></li>
					<li data-target="#myCarouselwelcomephone" data-slide-to="1"></li>
					<li data-target="#myCarouselwelcomephone" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="image/welcome.png" alt="Los Angeles" style="width: 100%">
					</div>

					<div class="item">
						<img src="image/welcome.png" alt="Chicago" style="width: 100%">
					</div>

					<div class="item">
						<img src="image/welcome.png" alt="New york" style="width: 100%">
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarouselwelcomephone" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarouselwelcomephone" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!-- navigator -->
			<div class="navigatorphone">
				<div class="row"><a href="#"><b>NEW ARRIVALS</b></a></div>
				<div class="row"><a href="#"><b>BEST SELLERS</b></a></div>
				<div class="row"><a href="#"><b>WEEKLY SPECIAL</b></a></div>
				<div class="row"><a href="#"><b>HORNY.OG EXCLUSIVE</b></a></div>
				<div class="row"><a href="#"><b>TOY GUIDE</b></a></div>
			</div>

			<div class="whybuysfromus">
				<div class="whybuytitle">
					<font size="+2"><b>WHY BUY FROM US?</b></font>
					<img src="image/Rectangle.png" class="img-responsive">
				</div>
				<div class="whybuybody row">
					<div class="whybuyleft col-xs-6">
						<img src="image/xu.png">
						<br><b>EARN REWARD POINTS</b>
						<br>cash rebate for next purchase
						<button type="button" ><b>REGISTER</b></button>
					</div>
					<div class="whybuyright col-xs-6">
						<img src="image/faviconBig copy.png">
						<br><b>ALREADY A MEMBER ?</b>
						<br>sign in for a better using experience
						<button type="button" ><b>SIGN IN</b></button>
					</div>
				</div>
				
			</div>
			<!-- popular categories-->
			<div class="popularcategories">
				<div class="popularcategoriestitle row">
					<font size="+2"><b>WHY BUY FROM US?</b></font>
					<img src="image/Rectangle.png" class="img-responsive">
				</div>
				<div class="popularcategoriesbody row" >
					<div class="categoriespropertiesleft col-xs-4"><img class="img-responsive" alt=" categories picture" src="image/categoriesPic1.png"><b>FEMALE TOYS</b></div>
					<div class="categoriespropertiescenter col-xs-4"><img class="img-responsive" alt=" categories picture" src="image/categoriesPic2.png"><b>MALE TOYS</b></div>
					<div class="categoriespropertiesright col-xs-4"><img class="img-responsive"  alt=" categories picture" src="image/categoriesPic3.png"><b>COUPLE TOYS</b></div>
					<div class="categoriespropertiesleft col-xs-4"><img class="img-responsive" alt=" categories picture" src="image/categoriesPic4.png"><b>DILDOS</b></div>
					<div class="categoriespropertiescenter col-xs-4"><img class="img-responsive" alt=" categories picture" src="image/categoriesPic5.png"><b>ESSENTIALS</b></div>
					<div class="categoriespropertiesright col-xs-4"><img class="img-responsive" alt=" categories picture" src="image/cateogriesPic6.png"><b>BONDAGE</b></div>
				</div>
				
			</div>
			<div class="body2phone">
				<div class="bodyphone2main row" id="contact">
					<div class="col-xs-9"><a style="float: left;" href="#"><b >CUSTOMER CARE</b></a></div>
					<div class=" col-xs-1" style="float: right; border:none">
						<button  style="background-color: white;margin: 0px;
						padding: 0px;" class="btn btn-secondary dropdown-toggle" type="button">
						<span class="caret"></span>
					</button>
					
				</div>
				<div id="displaycontact" class="row"></div>
			</div>
			<div class="bodyphone2main row" id="FAQs">
				<div class="col-xs-9"><a style="float: left;" href="#"><b >FAQs</b></a></div>
				<div class=" col-xs-1" style="float: right; border:none">
					<button style="background-color: white;margin: 0px;
					padding: 0px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="caret"></span>
				</button>
			</div>
			<div id="displayFAQs" class="row"></div>
		</div>
		<div class="bodyphone2main row" id="delivery">
			<div class="col-xs-9"><a style="float: left;" href="#"><b >DELIVERY INFO</b></a></div>
			<div class=" col-xs-1" style="float: right; border:none">
				<button style="background-color: white;margin: 0px;
				padding: 0px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="caret"></span>
			</button>
		</div>
		<div id="displaydelivery"></div>
	</div>
	<div class="bodyphone2main row" id="guidepage">
		<div class="col-xs-9"><a style="float: left;" href="#"><b >GUIDE PAGE</b></a></div>
		<div class=" col-xs-1" style="float: right; border:none">
			<button style="background-color: white;margin: 0px;
			padding: 0px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
		</button>
	</div>
	<div id="displayguidepage"></div>
</div>
<div class="bodyphone2main row" id="paymentoption">
	<div class="col-xs-9"><a style="float: left;" href="#"><b >PAYMENT OPTION</b></a></div>
	<div class=" col-xs-1" style="float: right; border:none">
		<button style="background-color: white;margin: 0px;
		padding: 0px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="caret"></span>
	</button>
</div>
<div id="displaypayment"></div>
</div>
</div>
</div>
<!-- end of body for phone -->
<!-- footer for phone -->
<div class="footerphone" id="footerphone">
	<div class="footertitle">
		<font size="+2"><b>SIGN UP NOW</b></font>
		<img src="image/Rectangle.png" class="img-responsive">
	</div>
	<div class="footerbodyphone">
		<div style="padding-left: 50px">exclusive promotion, Lastest news <br> and product</div>
		<br>
		<div class="inputarea">
			<input class="col-md-8" type="text" name="EnterYourMail" placeholder="Enter Your Mail here">
			<button class="mailButton col-md-4s" type="button">Sign up</button>
		</div>
		<div class="footericon">
			<div class="footericontitle">
				Copy right 2019. all right <br> reserve
			</div>
			<div class=" footerimg">
				<img src="image/footericon.png">
			</div>
		</div>
	</div>
</div>

<div class="body" id="bodyforcomputer">

	<div id="myCarouselwelcome" class="carousel slide" data-ride="carousel" data-interval="10000">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarouselwelcome" data-slide-to="0" class="active"></li>
			<li data-target="#myCarouselwelcome" data-slide-to="1"></li>
			<li data-target="#myCarouselwelcome" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="image/welcome.png" alt="Los Angeles" style="width: 100%">
			</div>

			<div class="item">
				<img src="image/welcome.png" alt="Chicago" style="width: 100%">
			</div>

			<div class="item">
				<img src="image/welcome.png" alt="New york" style="width: 100%">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarouselwelcome" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarouselwelcome" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="certificate ">
		<ul class="certificateproperties">
			<div class="row">
				<li class="col-md-2 col-xs-6"><img alt="10%cashBack" src="image/cashBack.png">
					<div>10% Cash Back</div>
				</li>
				<li class="col-md-2 col-xs-6"><img alt="Globaldeals" src="image/GlobalDeals.png">
					<div style="clear: both;">10% Cash Back</div>
				</li>
				<li class="col-md-2 col-xs-6"><img alt="menSales" src="image/menSales.png">
					<div style="clear: both;">10% Cash Back</div>
				</li>
				<li class="col-md-2 col-xs-6"><img alt="ShopeeMart" src="image/shopMart.png">
					<div style="clear: both;">10% Cash Back</div>
				</li>
				<li class="col-md-2 col-xs-6"><img alt="dining and travel" src="image/dining and travel.png">
					<div style="clear: both;">10% Cash Back</div>
				</li>
				<li class="col-md-2 col-xs-6"><img alt="low price" src="image/lowPrice.png">
					<div style="clear: both;">10% Cash Back</div>
				</li>
			</div>
		</ul>
	</div>
	<!-- sub navigator bar-->
	<div class="producthot">
		<div class="subnavigator  row">

			<div class="subnavigatorleft col-md-5 col-sm-12 col-xs-12">
				<div class="row">
					<div class="subnavigatorleftproperties col-md-6 col-xs-6" style="color: white;"><a href="">NEW PRODUCT</a></div>
					<div class="subnavigatorleftproperties col-md-6 col-xs-6" style="color: white;"><a href="">View All New...</a></div>
				</div>	
			</div>
			<div class="subnavigatorright col-md-7 col-sm-12 col-xs-12">
				<ul>
					<div class="row">
						<li class="col-md-3 col-sm-3 col-xs-6"><a href="">Female</a></li>
						<li class="col-md-3 col-sm-3 col-xs-6"><a href="">Male</a></li>
						<li class="col-md-3 col-sm-3 col-xs-6"><a href="">Couple</a></li>
						<li class="col-md-3 col-sm-3 col-xs-6"><a href="">Lude & Better Sex</a></li>
					</div>
				</ul>
			</div>


		</div>
		<!-- List of product by categories-->
		<div class="productlist" >
			<div class="row">
				<?php
				foreach($row as $value) {
					$productId = $value[0];
					$productName = $value[1];
					$productStatus = $value[2];
					$Image = $value[3];
					?>
					<div class="productlistproperties col-md-3 col-xs-6">
						<img src="../picture/<?php echo $Image; ?>" alt="Product image hot" class="productimghot">
						<button class="addtocartbutton" type="button">ADD TO CART</button>
						<br>
						<?php echo "name : ". $productName ?>
						<br> <span style="text-decoration: line-through;"><b>$412.60</b></span><span style="text-decoration-color: pink">   $<?php echo $productStatus ?></span> <span style="text-decoration-color : grey">   ( 50% OFF)</span>
						<img src="image/4Stars.png" alt="4Star">
					</div>
					
				<?php } ?>
			</div>

		</div>
		<div class="viewmorelink">
			<a href="">View all Female toys -></a>
		</div>
		<!-- the 5 10 15% sale comercial -->
		<div class="manualSales">
			<div class="row">
				<div class="col-md-4"><img src="image/5phantram.png" alt="5%off" class="img-responsive"></div>
				<div class="col-md-4"><img src="image/10phantram.png" alt="10%off" class="img-responsive"></div>
				<div class="col-md-4"><img src="image/15phantram.png" alt="15%off" class="img-responsive"></div>
			</div>
		</div>
		<div></div>
	</div>

	<!-- the bbody with comercial-->
	<div class="bodywithcomercial row">
		<!-- left and right of the carousel -->
		<div class="bodywithcomercial_leftside col-md-9 col-xs-12">
			<div class="row">
				<div class="col-md-2" style="float: left;">
					<a class="left carousel-control" style="color: black" href="#myCarouselonsale" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<h1 id="countdown" class="col-md-8"></h1>
				<div class="col-md-2" style="float: left;">
					<a class="right carousel-control" style="color: black" href="#myCarouselonsale" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!-- the carousel : start -->
			<div id="myCarouselonsale" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarouselonsale" data-slide-to="0" class="active"></li>
					<li data-target="#myCarouselonsale" data-slide-to="1"></li>
					<li data-target="#myCarouselonsale" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown1.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown2.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown3.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
						</div>
						<div class="viewmorelink2">
							<a href="">View More -></a>
						</div>
					</div>

					<div class="item">
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown1.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown2.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
							<div class="col-md-4 col-xs-4">
								<div class="onsaleimg">
									<img src="image/SaleCountDown3.png" alt="saleCountDown" class="saleCountdownImg img-responsive">
								</div>
								<div class="onsaledescription">
									<br>
									<b>Horny Production</b>
									<br>Miss Kimochi viberator
									<span><br>Sakura Eddition<br></span>
									<b>$36.69 </b><br>
									<img src="image/4Stars.png" alt="4Star">
								</div>
							</div>
						</div>
						<div class="viewmorelink2">
							<a href="">View More -></a>
						</div>
					</div>
				</div>
			</div>

			<!-- start shop by categories-->
			<div class="shopbycategories">
				<div class="shopbycategoriestitle">
					<b><h1>SHOP BY CATEGORIES</h1></b>
					<img src="image/Rectangle.png" alt="small Rectangle">
				</div>
				<div class="shopbycategoriesproperties">
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<img src="image/dildo.png" alt="dildo img" class="img-responsive">
							<div class="shopbycategoriesdescription">
								<b>Dildos</b>
							</div>
						</div>
						<div class="col-md-4 col-xs-4 ">
							<img src="image/penisRing.png" alt="penis ring img" class="img-responsive">
							<div class="shopbycategoriesdescription">
								<b>Penis Rings</b>
							</div>
						</div>
						<div class="col-md-4 col-xs-4">
							<img src="image/lubricent.png" class="img-responsive" alt="lubricent img">
							<div class="shopbycategoriesdescription">
								<b>Lubricent</b>
							</div>
						</div>

						<div class="col-md-4 col-xs-4">
							<img src="image/SMFetish.png" class="img-responsive" alt="SM fetish">
							<div class="shopbycategoriesdescription">
								<b>SM Fetish</b>
							</div>
						</div>
						<div class="col-md-4 col-xs-4">
							<img src="image/viberator.png" class="img-responsive" alt="viberator">
							<div class="shopbycategoriesdescription">
								<b>Viberators</b>
							</div>
						</div>
						<div class="col-md-4 col-xs-4">
							<img src="image/masterbation.png" alt="masterbator" class="img-responsive">
							<div class="shopbycategoriesdescription">
								<b>Masterbators</b>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bodywithcomercial_rightside col-md-3 col-xs-12">
			<img class="img-responsive" src="image/banner right.png" alt="right comercial banner">
		</div>

	</div>
	<!-- end of body with comercials -->
	<div class="storeinstore row">
		<div class="storeinstoretitle">
			<b style="margin:auto"><h1>STORE IN STORE</h1></b>
			<img src="image/Rectangle.png" alt="small rectangle">
		</div>

		<div id="myCarouselstore" class="carousel slide row" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarouselstore" data-slide-to="0" class="active"></li>
				<li data-target="#myCarouselstore" data-slide-to="1"></li>
				<li data-target="#myCarouselstore" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6" ><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
				</div>

				<div class="item">
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6" ><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
				</div>

				<div class="item">
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6"><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
					<div class="col-md-3 col-xs-6" ><img src="image/storeInStoreProduct.png" class="img-responsive" alt="store in store img"></div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarouselstore" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarouselstore" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


	</div>
	<!-- end of store in store, start of feedback-->
	<div class="feedback">
		<div class="feedbacktitle row">
			<b><h1>WHAT CUSTOMER ARE SAYING</h1></b>
			<img alt="small rectangle" src="image/Rectangle.png">
		</div>
		<div class="feedbackbody">
			<div id="myCarouselfeedback" class="carousel slide row" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarouselfeedback" data-slide-to="0" class="active"></li>
					<li data-target="#myCarouselfeedback" data-slide-to="1"></li>
					<li data-target="#myCarouselfeedback" data-slide-to="2"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackHornyProduct.png" class="feedbackimg img-responsive">
								<b>Horny Products</b>
								<br>
								<span style="text-decoration-color: black">
								mrKimMoChi viberator</span> 
								<br>
								<img src="image/4Stars.png" alt="4Star">
								<br>
								<span> <i>"set up percipate unde"</i></span>
								<br>
								<a href="#"><b>read more -></b></a>
							</div>
							<div class="col-md-3 col-xs-6"><img src="image/feedbackSkinCeption.png" class="feedbackimg img-responsive" alt="feedback image">
								<b>SkinCeption</b>
								<br>
								<span style="text-decoration-color: black">
									intense Strech Mark theraphy
								</span> 
								<br>
								<img src="image/4Stars.png" alt="4Star">
								<br>
								<span> <i>"set up pespesiateive unde"</i></span>
								<br>
								<a href="#"><b>read more -></b></a>
							</div>
							<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackWaxie.png" class="feedbackimg img-responsive">
								<b>Moxie by We-vibe</b>
								<br>
								<span style="text-decoration-color: black">
								panty vibe</span> 
								<br>
								<img src="image/4Stars.png" alt="4Star">
								<br>
								<span> <i>"set up percipate unde"</i></span>
								<br>
								<a href="#"><b>read more -></b></a>
							</div>
							<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackPacked.png" class="feedbackimg img-responsive">
								<b>Bucked</b>
								<br>
								<span style="text-decoration-color: black">
								mrKimMoChi viberator</span> 
								<br>
								<img src="image/4Stars.png" alt="4Star">
								<br>
								<span> <i>"set up pespesiateive unde"</i></span>
								<br>
								<a href="#"><b>read more -></b></a></div>
							</div>
						</div>

						<div class="item ">
							<div class="row">
								<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackHornyProduct.png" class="feedbackimg img-responsive">
									<b>Horny Products</b>
									<br>
									<span style="text-decoration-color: black">
									mrKimMoChi viberator</span> 
									<br>
									<img src="image/4Stars.png" alt="4Star">
									<br>
									<span> <i>"set up percipate unde"</i></span>
									<br>
									<a href="#"><b>read more -></b></a>
								</div>
								<div class="col-md-3 col-xs-6"><img src="image/feedbackSkinCeption.png" class="feedbackimg img-responsive" alt="feedback image">
									<b>SkinCeption</b>
									<br>
									<span style="text-decoration-color: black">
										intense Strech Mark theraphy
									</span> 
									<br>
									<img src="image/4Stars.png" alt="4Star">
									<br>
									<span> <i>"set up pespesiateive unde"</i></span>
									<br>
									<a href="#"><b>read more -></b></a>
								</div>
								<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackWaxie.png" class="feedbackimg img-responsive">
									<b>Moxie by We-vibe</b>
									<br>
									<span style="text-decoration-color: black">
									panty vibe</span> 
									<br>
									<img src="image/4Stars.png" alt="4Star">
									<br>
									<span> <i>"set up percipate unde"</i></span>
									<br>
									<a href="#"><b>read more -></b></a>
								</div>
								<div class="col-md-3 col-xs-6"><img alt="feedback image" src="image/feedbackPacked.png" class="feedbackimg img-responsive">
									<b>Bucked</b>
									<br>
									<span style="text-decoration-color: black">
									mrKimMoChi viberator</span> 
									<br>
									<img src="image/4Stars.png" alt="4Star">
									<br>
									<span> <i>"set up pespesiateive unde"</i></span>
									<br>
									<a href="#"><b>read more -></b></a></div>
								</div>
							</div>
						</div>
						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarouselfeedback" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarouselfeedback" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

				<!-- end of feedback-->
				<div class="feature ">
					<div class="row">
						<div class=" col-md-2 col-xs-6">
							<b><h1 class="featuretitle" style="">Feature</h1></b>
							<img class="featuretitleimg" alt="feature Title" src="image/Rectangle.png">
						</div>
						<div class="col-md-10" style="float: left;">
							<div id="myCarouselfeature" class="carousel slide row" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarouselfeature" data-slide-to="0" class="active"></li>
									<li data-target="#myCarouselfeature" data-slide-to="1"></li>
									<li data-target="#myCarouselfeature" data-slide-to="2"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner">
									<div class="item active">
										<div class="col-md-2 col-xs-6"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature1.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature2.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature3.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature4.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature5.png" alt="feature image" class="img-responsive"></div>

									</div>

									<div class="item">
										<div class="col-md-2 col-xs-6"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature1.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature2.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature3.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature4.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature5.png" alt="feature image" class="img-responsive"></div>

									</div>

									<div class="item">

										<div class="col-md-2 col-xs-6"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature1.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature2.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature3.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature4.png" alt="feature image" class="img-responsive"></div>
										<div class="col-md-2 col-xs-6"><img class="featureimg" src="image/feature5.png" alt="feature image" class="img-responsive"></div>

									</div>
								</div>

								<!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarouselfeature" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#myCarouselfeature" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer" id="footercomputer">
			<div class="row">
				<div  class="footerright col-md-6 col-xs-12">
					<b>Stay In Touch</b>
					<br><br>
					subcribe to our new newsletter & get your FREE SHIPPING on your first order
					<br>
					<a href=""> <i><u>View our policy</u></i></a>
					<br><input type="text" name="EnterYourMail" placeholder="Enter Your Mail here">
					<button class="mailButton " type="button">Sign up</button>
					<br><br>
					<div class="row" style="clear: both;">
						<div class="col-md-6 col-xs-12" style="float: left;">
							<b>CONNECT WITH US</b>
							<br>
							<img src="image/connectwithus.png" alt="connect with us">
						</div>
						<div class="col-md-6 col-xs-12" style="float: left;">
							<b>PAYMENT OPTION</b>
							<br>
							<img src="image/paymentop1.png" alt="payment option">
							<img src="image/paymentop2.png" alt="payment option">
							<img src="image/paymentop3.png" alt="payment option">
							<img src="image/paymentop4.png" alt="payment option">
							<img src="image/paymentop5.png" alt="payment option">
						</div>
					</div>

				</div>
				<div class="footerleft col-md-6">
					<div class="row">
						<div class=" col-md-4 col-xs-12">
							<b>NEED HELP</b>
							<br>
							<br>enquiry@horny.com
							<br>+6597772176
							<br><br>
							Monday to Sunday
							<br>
							11ham - 8pm
							<br>
						</div>
						<div class=" col-md-4 col-xs-6">
							<b>Customer care</b><br>
							<br>
							Beginner Guide <br>
							Shopping Guide <br>
							Delivery Guide <br>
							International Shipping <br>
							Disceet packaging <br>
							Quaranty and return policy <br>
							Track your order <br>

						</div>
						<div class=" col-md-4 col-xs-6">
							<b>About us</b>
							<br>
							<br>about us
							<br>contact us
							<br>FAQs
							<br>classes and seminar
							<br>blog post
							<br>Wholesale and drop
							<br>Shipping
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function detectMob() {
			const toMatch = [
			/Android/i,
			/webOS/i,
			/iPhone/i,
			/iPad/i,
			/iPod/i,
			/BlackBerry/i,
			/Windows Phone/i
			];

			return toMatch.some((toMatchItem) => {
				return navigator.userAgent.match(toMatchItem);
			});
		}
				//version on phone
				if(detectMob()){
					document.getElementById("headerforcomputer").style.display = "none";
					document.getElementById("headerforphone").style.display = "block";
					document.getElementById("searchforphone").style.display = "block";
					document.getElementById("bodyforcomputer").style.display = "none";
					document.getElementById("bodyforphone").style.display = "block";
					document.getElementById("footercomputer").style.display = "none";
					document.getElementById("footerphone").style.display = "block";
				}
				//version on desktop
				else{
					document.getElementById("headerforcomputer").style.display = "block";
					document.getElementById("headerforphone").style.display = "none";
					document.getElementById("searchforphone").style.display = "none";
					document.getElementById("bodyforcomputer").style.display = "block";
					document.getElementById("bodyforphone").style.display = "none";
					document.getElementById("footercomputer").style.display = "block";
					document.getElementById("footerphone").style.display = "none";
				}
				document.getElementById("loading").style.display = "none";
			</script>
			<script src="myjs.js"></script>
		</body>
