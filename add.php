<?php

    $con = mysqli_connect("ephesus.cs.cf.ac.uk","c1338318","berlin","c1338318");

    $item_id = $_GET["id"];
    $user_id = null;

    if(isset($_COOKIE["shop_cookie"])){
        $user_id = $_COOKIE["shop_cookie"];        
    }
    else{
        $user_id = uniqid();
    }

    mysqli_query($con, "INSERT INTO basket VALUES(
                        $item_id,
                        '$user_id'
                        )");
    mysqli_close($con);

   setcookie("shop_cookie", $user_id);
   header('Location: basket.php');

?>
