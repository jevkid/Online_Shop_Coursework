<!DOCTYPE html>
<html> 
	<head> 
		<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet' type='text/css'>
		<link type="text/css", rel="stylesheet", href="stylesheet.css"/>
		
		<title>Cool Beans</title>
	</head>
	<body>
	<header>
		<div id="head">
			<a href="index.html"><h1>Cool Beans<br><img src="mug2.png">
			</h1></a>
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
			</li>
			<li><a href="about.html">About</a></li>
			<li><a href="locations.html">Locations</a></li>
		</ul>
		</div>
<form class="form-wrapper cf" action="search.php" method="GET">
	<input type="text" placeholder="Search..." required name="query"/>
	<button type="submit">Search</button>
</form>

<?php 
    // CONNECT TO THE DATABASE
    $mysqli = new mysqli('ephesus.cs.cf.ac.uk', 'c1338318', 'berlin', 'c1338318');
    if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

		$query = "SELECT * FROM store WHERE name LIKE '%" . $_GET['query'] . "%'";
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		if($result->num_rows > 0) {
			while($db = $result->fetch_assoc()) {
				echo '<div class="product">
				<br>
				<p>
				<img src="'.$db['image'].'">
				<br><b>'.$db['name'].'</b>
				<br>$'.$db['price'].'
				<br>'.$db['description'].'
				<br><a href="add.php?id='.$db["product_id"].'">Add to cart</a>
				</p>
				</div>';
			}
		} else {
		echo 'Sorry, no results found.';
		echo '<br>';
		echo '<input type="button" value="Back" onclick="history.back(-1)" />';	
		}

mysqli_close($mysqli);
?>
</body>
</html>
