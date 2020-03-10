
<!DOCTYPE html>
<html>
<head>
	<title>admin main</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
	.containall{
		width: 100%;
		margin : auto;
		padding : unset;
	}
	.header{
		background-color: white;
		align-content: center;
		margin:auto;
	}
	.bignavigator{
		width: 100%;
		background-color: black;
		padding-top: 15px;
		margin-bottom: unset;
		margin : auto;
	}
	.bignavigatorleft{

	}
	.bignavigatorleftcontent{
		background-color: black;
		color: white;
		margin-bottom: 9,5px;
		padding-left: 55px;
	}
	.nignavigatorrightproperties{
		text-align : center;
		float: right;
		color: white;
	}
	#SearchInput{
		float: left;
		width: 332px;
		height: 41px;
		margin-top: 35px;
		border : 1px solid black;

	}
	.LogoImage{
		margin-left: 46px;
	}
	.searcharea{
		width: 92%;
		margin:auto;
	}

	.contactArea{
		float: right;
		text-align: right;
		margin:50px;
	}
	.searchareainput input[type=text] {
		float: left;
		padding: 5px;
		margin-top: 35px;
		border: 1px solid black;
		font-size: 20px;
		width: 60%;
	}

	.searchareainput button{
		font-size: 25px;
		float: left;
		background-color: black;
		width: 55px;
		margin-top: 34px;
	}
	.contactinsearch{
		clear: both;
		align-self: center;
		text-align: right;
	}
	.productnavigator{
		width :100%;
	}
	.navigatorproperties li {
		float: left;
		margin-bottom: 20px;
		height: 100%;

	}
	.navigatorproperties li a {
		display: block;
		color: blue;
		text-align: center;
		text-decoration: none;
		align-items: center;
	}
	.navigatorproperties{
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: white;
	}
</style>
</head>
<body>
	
	<div class="containall">
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
			
			<!-- logo image-->
			<div class="searcharea">
				<div class="row">
					<div class="searchareaproperties col-md-3 col-sm-12 col-xs-6"> <img class="img-responsive" alt="icon" src="image/horny.png"></div>

					<div class="searchareainput col-md-6 col-sm-12 col-xs-6"> 
						<!-- input in input-->
						<div class="row">
							<input type="text" placeholder="Search the entire shop here" name="search" id="input" style="position: relative;" class="">
							
							<button class="" type="button"><i class="fa fa-search" style="color: white"></i></button>
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
				<div class="row" style="">
					<center><h1 style="padding-bottom: 30px;">Choose your section </h1></center>
				</div>
				<ul class="navigatorproperties">
					<div class="row">
						<li class="col-md-3 col-sm-6 col-xs-12"> <a href="#"> <b><font size="+1"></font></b></a></li>
						<li class="col-md-2 col-sm-6 col-xs-6"> <a href="../view/productManager.php"> <b><font size="+1">PRODUCT</font></b></a></li>
						<li class="col-md-2 col-sm-6 col-xs-6"><a href="onsaleManager.php"><b><font size="+1">On sale Product</font></b></a></li>
						<li class="col-md-2 col-sm-6 col-xs-6"><a href="shopByCategories.php"><b><font size="+1">Shop By Categories</font></b></a></li>
						<li class="col-md-3 col-sm-6 col-xs-12"> <a href="#"> <b><font size="+1"></font></b></a></li>
					</div>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
include "../Controller/controllerAdmin.php";
include "../model/model.php";
include "../block/block.php";

require_once('../model/config.php');
$model = new Model($dbhost, $dbport, $dbuser, $dbpassword);
$model->createDatabase($dbname);
$model->createTable("product", "productID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                productName VARCHAR(50),
                productStatus VARCHAR(50),
                productimg VARCHAR(50)
                ",$dbname);
?>