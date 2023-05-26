<?php
    
    session_start();

    include("connection.php");
    include("Function.php");

    $User_Data = check_Login($con);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href ="Home.css" rel = "stylesheet" type="text/css"/>
</head>
<body>

<nav class="navbar navbar-inverse">
 
    <div class="navbar-header">
      <a class="navbar-brand" href="Home.html">All4One</a>
    </div>
  
    <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="Home.html">Home</a></li>
      <li><a href="Singup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  
</nav>
<div class="Banner-area" >
<div class="Text1">
    <h1>Do More With Your Money</h1>
    <p>Quality is Remembered Long After The Price is Forgotten</p> 
</div>
</div>

<div class="Banner-area2" >
    <div class="Text2">
        <h1>Its Really About You</h1>
        <p>It seems to us you don't need another web site. You just need a better place to spend your money. So, we've created one very simple place that puts all your needs in one very smart place.  </p> 
    </div>
    </div>

    <div class="container">
        <div class="Box1">
            <h1>Traveling</h1>
            <p>A journey of a thousand miles begins with a single step </p>
            <p>Let's travel together and get lost in beautiful places</p> <br>
            <div class="Order">
                Book Your Tour Now
            </div>
            
        </div>
        <div class="Box2">
            <h1>Food</h1>
            <p>PEOPLE<br> WHO LOVE <br> TO EAT<br>.<br>.<br>.<br>ARE<br>ALWAYS<br>THE BEST PEOPLE</p>
            <div class="Order">
                 Order Food Now
            </div>
        </div>
        <div class="Box3">
            <h1>Shopping</h1>
           
            <p>Cindrella is proof that anew pair of shoes can change your life </p>
            <p>Money Does'nt Buy Happiness<br>--You Just-- <br>does'nt know where to shop </p>
            
            <div class="Order">
                Shop With Us
            </div>
        </div>
        <div class="Box4">
            <h1>Recharge</h1>
            <p>Happiness has to be about<br> Having unlimited mobile recharge </p>
            <p>Do you recharge<br>--your phone--<br>as much as you recharge yourself </p>
            
            <div class="Order">
                Recharge Your Phone
            </div>
        </div>
    </div>

</body>
</html>
