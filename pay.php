<!DOCTYPE html>
<html> 
    <head> 
        <link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet' type='text/css'>
        <link type="text/css", rel="stylesheet", href="stylesheet.css"/>
        
        <title>Cool Beans</title>
    </head>
    <body>
<?php
    $con = mysqli_connect("ephesus.cs.cf.ac.uk","c1338318","berlin","c1338318");
    
    $item_id = $_GET["id"];
    $user_id = null;

    if(isset($_COOKIE["shop_cookie"])){
        $user_id = $_COOKIE["shop_cookie"];        
    }
    else{
        header('Location: shop.php');
    }

    mysqli_query($con, "DELETE FROM basket WHERE
                        user_id = '$user_id'
                        ");

    mysqli_close($con);

    echo '<h1>Thank you!</h1>
    <p><center>Your payment was successful. <a href="shop.php">Return to store</a>.</center></p>';


?>
</body>
</html>
