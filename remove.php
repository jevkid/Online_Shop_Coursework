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
                        product_id = $item_id AND
                        user_id = '$user_id'
                        ");

    mysqli_close($con);
    header('Location: basket.php');


?>
