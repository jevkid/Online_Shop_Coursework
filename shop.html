<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link type="text/css", rel="stylesheet", href="stylesheet.css"/>
		<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet' type='text/css'>
			<title>Cool Beans Shop</title>
		</head>
<body>
	<header>
		<div id="head">
			<a href="index.html"><h1>Cool Beans<br><img src="black.png"></h1></a>
		</div>
	</header>
	<div id="mainmenu">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="shop.php">Shop</a></li>
				<ul>
					<li><a href="about">Beans</a></li>   
					<li><a href="locations">Ground</a></li>
					<li><a href="shop">Mugs</a></li>
				</ul>
			<li><a href="about.html">About</a></li>
			<li><a href="locations.html">Locations</a></li>
			<li><a id="cart" href="basket.php"><img src="cart.png"></a>
		</ul>
		</div>
<form class="form-wrapper cf" action="search.php" method="GET">
	<input type="text" name="name" placeholder="Search..." required name="query"/>
	<button type="submit">Search</button>
</form>
<p><center><a href="shop.php?sort=category">Sort by Category (Accessories, coffee, mugs)</a> | <a href="shop.php?sort=name">Sort by Name (A-Z)</a> | <a href="shop.php?sort=price">Sort by Price (Low-High)</a></center></p>
<?php 
    $mysqli = new mysqli('ephesus.cs.cf.ac.uk', 'c1338318', 'berlin', 'c1338318');
    if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
 	if (!isset($_GET['sort'])) { 
 		$query = "SELECT * FROM store"; 
 	}
 	elseif ($_GET['sort'] == "category") {
 	 		$query = "SELECT * FROM store ORDER BY category"; 
	}
	elseif ($_GET['sort'] == "name") {
		 $query = "SELECT * FROM store ORDER BY name";
 	}
 	elseif ($_GET['sort'] == "price") {
		 $query = "SELECT * FROM store ORDER BY price";
 	}
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	if ($result->num_rows > 0) {
		while($db = $result->fetch_assoc()) {
			echo '<div class="product">
			<br>
			<p>
			<img src="'.$db['image'].'">
			<br><span>'.$db['name'].'</span>
			<br><span id="info">$'.$db['price'].'
			<br>'.$db['description'].'
			<br><a href="add.php?id='.$db["product_id"].'">Add to cart</a></span>

			</p>
			</div>';
		}
	 }
	$basket = array();
	    if(isset($_COOKIE["shop_cookie"])){
		$result = mysqli_query($con, "SELECT * FROM basket WHERE user_id='".$_COOKIE['shop_cookie']."'");
		while($store = $result->fetch_object()){
		    $basket[] = $store->product_id;
		}                
		echo '<p><a href="basket.php">Your basket ('.count($basket).')</a></p>';
	    }

mysqli_close($mysqli);?>

</body>
</html>
