<?php include "dbConnection_arngren.php";

	if(isset($_POST['submit'])){
		$fullName = $_POST['fullName'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		submit($fullName, $password, $email);
	}
?>

<!DOCTYPE HTML>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Arngren | Home</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		h1{
			position: absolute;
			left: 225px;
			top: 15px;
			font-size: 55px;
			color: white;
			font-family: Arial black;
		}

		.ad {
			margin: 2.5% 10% 2.5% 10%;
			height: 20%;
			width: 80%;
			align-items: center;
			background-image: linear-gradient(#ffe4e3, #eba3a0, #c45b56);
		}

		.ad img {
			width: 1000px;
			height: 500px;
		}

		.featured {
			max-width: 1080px;
			margin: 2.5% 10% 2.5% 10%;
		}

		.featured a {
			margin: 0 0 2.5% ;
		}

		.featuredrow {
			
		}

		.featuredcolumn {
			border: 2px solid lightgrey;
			border-radius: 5px;
			min-width: 200px;
			padding: 5px;
		}

		.featuredcolumn img {
			width: 100%;
		}

		.featuredcolumn {
		  float: left;
		  width: 25%;
		  padding: 10px;
		  height: 350px;
		}

		/* Clear floats after the columns */
		.featuredrow:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		.content h2 {
			color: black;
			font-family: Georgia, serif;
			font-size: 45px;
		}

		.content {
			font-family: Helvetica;
			padding: 10px;
			background: #f1f1f1;
		}

		.centernav{
			position: absolute;
			left: 224px;
			top: 25px;
			font-size: 14.5px;
			color: white;
			font-family: Helvetica;
		}

		.centernav ul li {
			display: inline-block;
			list-style-type: none;
		}

		.centernav a.active {
		  color: #ecd846;
		}

		.centernav a:hover:not(.active) {
		  color: #ecd846;
		}

		.topnav{
			display: flex;
			align-items: top;
			padding: 10px;
		}

		.topnav nav{
			flex: 1;
			position: absolute;
			left: 1050px;
			text-align: right;
		}

		.topnav nav ul{
			display: inline-block;
			list-style-type: none;
		}

		.topnav li{
			color: white;
		}

		.topnav nav ul li{
			display: inline-block;
			margin-right: 20px;
		}

		.topnav a{
			text-decoration: none;
			font-family: Helvetica;
			color: white;
		}
		
		.topnav span {
			text-decoration: none;
			font-family: Helvetica;
			color: white;
		}

		.headercontainer{
			max-width: 1300px;
			margin: auto;
			padding-left: 25px;
			padding-right: 25px;
		}

		.header{
			/*background-image: linear-gradient(#7a3835, #c45b56, #db7772);*/
			background: #c45b56;
		}


		.footer{
			text-align: center;
			font-family: Helvetica;
			color: lightgrey;
			font-size: 12px;
			border-top: 2px solid lightgrey;
			margin: 40px;
			padding: 20px;
		}

		.search{
			height: 50px;
			width: 850px;
			padding: 10px;
			margin-left: 200;
			margin-top: 30px;
			border: none;
			border-radius: 25px;
			outline: none;
		}

		.searchbutton{
			position: absolute;
			left: 945px;
			top: 90px;
			bottom: 50px;
			width: 100px;
			height: 40.5px;
			border: none;
			outline: none;
			padding: 10px;
			border-radius: 25px;
			background: #ecd846;
			font-size: 15px;
			text-align: center;
			font-family: Helvetica;
			color: #c45b56;
		}
		
		.leftcolumn th, tr {
			border-bottom: 1px solid #ddd;
			  padding: 10px;
			  margin-top: 10px;
			  text-align: left;
		}
			
		input[type=text] {
			position: absolute;
			left: 200px;
			top: 55px;
			bottom: 50px;
			border: black;
			font-size: 17px;
		}

		.cart{
			position: absolute;
			left: 1075px;
			top: 95px;
		}

		.message{
			position: absolute;
			left: 1135px;
			top: 97px;
		}

		.info{
			position: absolute;
			left: 1195px;
			top: 97px;
		}
			
		.bottomnav {
		  width: 100%;
		  background-color: #c45b56;
		  border: white;
		  overflow: auto;
		}

		.bottomnav a {
		  float: left;
		  padding: 10px;
		  padding-left: 5px;
		  padding-right: 5px;
		  color: white;
		  border-top: 3px solid #ecd846;
		  /*border-bottom: 2px solid #ecd846;*/
		  text-decoration: none;
		  font-size: 15px;
		  width: 13.45%;
		  text-align: center;
		  font-family: Helvetica;
		}

		.bottomnav i {
		  float: left;
		  padding: 10px;
		  color: white;
		  border-top: 3px solid #ecd846;
		  /*border-bottom: 2px solid #ecd846;*/
		  /*background: #7a3835;*/
		  width: 2.9%;
		}

		.bottomnav a.active {
		  background-color: #ecd846;
		  color: #c45b56;
		 
		}

		.bottomnav a:hover:not(.active) {
		  background-color: #ecd846;
		  color: #c45b56;
		}
		
		.bottomnav i.active {
		  background-color: #ecd846;
		  color: #c45b56;
		 
		}

		.bottomnav i:hover:not(.active) {
		  background-color: #ecd846;
		  color: #c45b56;
		 
		}

		.bottomnav img:hover:not(.active) {
		  background-color: #7a3835;
		}

		/* Create two unequal columns that floats next to each other */
		/* Left column */
		.leftcolumn {   
		  float: left;
		  width: 75%;
		}

		/* Right column */
		.rightcolumn {
		  float: left;
		  width: 25%;
		  background-color: #f1f1f1;
		  padding-left: 20px;
		}

		/* Add a card effect for articles */
		.card {
		  background-color: white;
		  padding: 20px;
		  margin-top: 20px;
		}

		/* Clear floats after the columns */
		.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 800px) {
		  .leftcolumn, .rightcolumn {   
			width: 100%;
			padding: 0;
		  }
		}

		/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
		@media screen and (max-width: 400px) {
		  .topnav a {
			float: none;
			width: 100%;
		  }
		}

		.button {
			background-color: #4CAF50; /* Green */
			border: none;
			border-radius: 10px;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
		}

	</style>

	<script src="https://use.fontawesome.com/59805f286a.js"></script>

	<link rel="icon" type="image/x-icon" href="arngrenlogo.PNG">

</head>

<body>
	<div class = "header">
		<div class = "headercontainer">
			<div class = "topnav">
			<h1>www.ARNGREN.net</h1>
				<div class = "centernav">
					<ul>
						<li><a class="" href="index.php">Home</a></li>
						<li>|</li>
						<li><a class="" href="productList.php">Products</a></li>
						<li>|</li>
						<li><a>About</a></li>
					</ul>
				</div>
				
				<div class = "logo">
					<img src = "arngrenlogo.PNG" width = "125px">
				</div>
				
				<div class = "searchbar">
					<input type = "text" class = "search" placeholder = "Search for products..">
					<div class = "searchbutton">
						<p>Search</p> 
					</div>
					<div class = "cart">
						<a href = "shoppingCart.php"><i style = "color: white" class = "fa fa-shopping-cart fa-2x"></i></a>
                    </div>
                    <div class = "message">
						<i style = "color: white" class = "fa fa-envelope fa-2x"></i>
                    </div>
                    <div class = "info">
						<i style = "color: white" class = "fa fa-gear fa-2x"></i>
                    </div>
				</div>
				
				<nav>
					<ul>
						<?php
						   global $conn;
						   $sql = "SELECT fullName FROM user WHERE logStatus = 1;";
						   $result = mysqli_query($conn, $sql);
						
						   if ($result -> num_rows > 0)
						   {
							  while ($row = $result -> fetch_assoc())
							  {
								?>
									<li><a href = "editprofile.php">My Profile</a></li>
									<li>|</li>
									<li><a href = "logoutUser.php">Log Out</a></li>
									<?php
							  }
							}
							else
							{
								?>
									<li><a href = "registration.php">Sign Up</a></li>
									<li>|</li>
									<li><a href = "chooseLogin.php">Log In</a></li>
								<?php
							}
							?>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class = "dashboard">
			<div class = "bottomnav">
				<i style = "color: white" class = "fa fa-chevron-left"></i>
				<a>Scooter</a> 
				<a>Jeep</a> 
				<a>Electric Vehicles</a>
				<a>DVD-Player</a>
				<a>Go-Kart</a> 
				<a>Hobby & RC</a> 
				<a>Binoculars</a>
				<i style = "color: white" class = "fa fa-chevron-right"></i>
			</div>
		</div>
	</div>

	<div class = "content">
		<div class = "ad">
			<img src = "FeaturedATV.png">
		</div>
	
	    <!---Featured Products--->
		<div class = "featured">
			<a style = "margin-bottom: 100px; font-weight: bold; font-size: 25px; color: #c45b56; text-decoration: none;">
			   Featured Products
			</a>

			<div class = "featuredrow">
				<!---1st Featured Product--->
				<div class = "featuredcolumn"> 
					<a class = "active" href = "productList.php">
					<img src = "https://www.arngren.net/ATV-1.s10_1000watt_rotmetallic_seitevr.jpg">
				    </a>
					<h4 style = "color: #c45b56">Electric ATV<h4>	
					<div class = "featuredrating">
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
					</div>
					<p>$ 1,670.97</p>
		            <a href="productList.php">See more<br></a>
		            <br><br>
				</div>
                
                <!---2nd Featured Product--->
				<div class = "featuredcolumn"> 
					<a class = "active" href = "productList.php">
					<img src = "https://www.arngren.net/ATV-5.gokart_800_seitevr.jpg">
					</a>
					<h4 style = "color: #c45b56">Electric Go-Kart<h4>
					<div class = "featuredrating">
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
					</div>
					<p>$ 1,367.18</p>
					<a href="productList.php">See more<br></a>
		            <br><br>
				</div>

				<!---3rd Featured Product--->
				<div class = "featuredcolumn"> 
					<a class = "active" href = "productList.php">
					<img src = "JEEP.jpg">
				    </a>
					<h4 style = "color: #c45b56">Electric Jeep & Golf Car<h4>
					<div class = "featuredrating">
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star-half"></i>
					</div>
					<p>$ 13,674.55</p>
					<a href="productList.php">See more<br></a>
		            <br><br>
				</div>

				<!---4th Featured Product--->
				<div class = "featuredcolumn"> 
					<a class = "active" href = "productList.php">
					<img src = "TRUCK.jpg">
				    </a>
					<h4 style = "color: #c45b56">Electric T-Truck with open box <h4>
					<div class = "featuredrating">
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
						<i style = "color: #ecd846" class = "fa fa-star"></i>
					</div>
					<p>$ 18,233.16</p>
					<a href="productList.php">See more<br></a>
		            <br><br>
				</div>
			</div>
		</div>
	</div> 

	<div class = "footer">
		<p>&copy; 2021 ARNGREN. ALL RIGHTS RESERVED</p>
	</div>

</body>
</html>