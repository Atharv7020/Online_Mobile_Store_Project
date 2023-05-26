<?php
    
SESSION_start();


include("Connection.php");
include("Function.php");

if(isset($_GET["Submit"]))
{
    $P = $_GET["Price"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabs/iPads-iPadAIr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href ="BuyingPage.css" rel = "stylesheet" type="text/css"/>
</head>
<body>

   <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav__links">
                    <li><a href="Mobiles.php" class="hover-line">Mobiles</a></li>
                    <li><a href="iPhones.php" class="hover-line">iPhone</a></li>
                    <li><a href="TabsORiPads.php" class="hover-line">Tabs/Ipad</a></li>
                    <li><a href="About.php" class="hover-line">About Us</a></li>
                    <li><a href="home.php" class="hover-line">Home</a></li>
                    
                    <a class="cta" href="home.php"><button>Logout</button></a>
                </ul>
                   
            </nav>
    </header>
    <div class="container">
    <form method="GET" action="MobilePayment.php">
        <div class="wrapper">
            <div class="product-box">
                <div class="all-images">
                <div class="small-images">
                    <img src="images\ProductImages\ipadair\main.png" onclick="clickimg(this)">
                    <img src="images\ProductImages\ipadair\1.png" onclick="clickimg(this)">
                    <img src="images\ProductImages\ipadair\2.png" onclick="clickimg(this)">
                    <img src="images\ProductImages\ipadair\3.png" onclick="clickimg(this)">
                    
                </div>
                <div class="main-images">
                    <img src="images\ProductImages\ipadair\main.png" id="imagebox">
                </div>
            </div>
            </div>
            <div class="text">
                <div class="content">
                    <p class="brand">Brand:Apple</p>
                    <input type="hidden" name="MobileName" value="Apple iPad Air">
                    <h2>
                    2022 Apple iPad Air with Apple M1 Chip (10.9-inch/27.69 cm, Wi-Fi, 64GB) - Space Gray (5th Generation)
                    </h2>   
                    <div class="review">
                        <span>(4.5)</span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="price-box">
                    <input type="hidden" name="Price" value="52,090">
                        <p class="price">&#8377;52,090.00</p>
                        <strike> &#8377;60,000.00</strike>
                    </div>
                    <a href="MobilePayment.php">
                     <button name="" class="buy">
                        
                        <span class="fa fa-shopping-cart"></span>
                        Buy Now

                     </button>
                     </a>
                </div>
            </div>
        </div>
</form>
    </div>
    <script>
        function clickimg(smallImg){
            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src
        }
    </script>
</body>
</html>    
    