<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopping Basket</title>
        <link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Ribeye' rel='stylesheet' type='text/css'>
        <link type="text/css", rel="stylesheet", href="stylesheet.css"/>
    </head>
    <body id="checkout">
        <h1>This is your shopping basket</h1>
        
        <?php
            $con = mysqli_connect("ephesus.cs.cf.ac.uk","c1338318","berlin","c1338318");
            $basket = array();
            if(isset($_COOKIE["shop_cookie"])){
                $user_id = $_COOKIE["shop_cookie"];
                $result = mysqli_query($con, "SELECT * FROM basket WHERE user_id='".$user_id."'");
                while($store = $result->fetch_object()){
                    $product_id = $store->product_id;
                    $item = mysqli_query($con, "SELECT * FROM store WHERE product_id=".$product_id);
                    $basket[] = $item->fetch_object();
                    
                }                
            }
            if(count($basket) == 0){
                echo '<center><p>Your shopping basket is empty! <a href="shop.php">View products</a>.';
            }
            else{
                echo '<center><p><a href="shop.php">Continue shopping</a></p>';
            }
        ?>
        
        
            <?php
                $total_price = 0.00;
                for($i = 0; $i < count($basket); $i++){
                    echo "<br>";
                    echo "<h2>".$basket[$i]->name."</h2>";
                    echo "<p><i>&pound;".$basket[$i]->price."</i></p>";
                    echo "<img src='".$basket[$i]->image."'/>";
                    echo "<br>";
                    echo "<a href='remove.php?id=".$basket[$i]->product_id."'>Remove From Cart</a>";
                    echo "</li>";
                    $total_price = $total_price + $basket[$i]->price;
                }

            ?>
        
    <p>TOTAL COST = $<? echo $total_price; ?> <br> <button id="pay">Checkout</button></p>

    <script>
        var pay_button = document.getElementById("pay");
        pay_button.onclick = pay;

        function pay(){
            window.location = "pay.php";
        }
    </script>

    </body>
</html>

<?
    mysqli_close($con);
?>
