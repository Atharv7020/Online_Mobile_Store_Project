<?php
SESSION_start();
include_once('connection.php');
include("Function.php");
$User_Data = check_Login($con);
$User_name= $User_Data['User_Name'];
$query="select * from product_payment where name in ('$User_name')";
$result=mysqli_query($con,$query);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            
        </title>
        <meta name="description" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Final.css">
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
    <div class="HEAD">
        <h1><i><b>Your Order Has Been Placed</b></i></h1><br>
        <h1><i><b>Your Previous Orders:</b></i></h1>
    </div>   
        
    <?php
         while($rows=mysqli_fetch_assoc($result))
         {
    ?>   
    <div class="container">  
            <h4><b>Mobile Name:-</b><?php echo $rows['mobilename'];?></h4>
            <h4><b>Mobile Price:-</b><?php echo $rows['price'];?></h4>
            <h4><b>User-id:-</b><?php echo $rows['id'];?></h4>
            <h4><b>User Name:-</b><?php echo $rows['name'];?></h4>
            <h4><b>Email:-</b><?php echo $rows['email'];?></h4>
            <h4><b>Mobile No.:-</b><?php echo $rows['mobileno'];?></h4>
            <h4><b>Address:-</b><?php echo $rows['address'];?></h4>
            <h4><b>State:-</b><?php echo $rows['state'];?></h4>
            <h4><b>City:-</b><?php echo $rows['city'];?></h4>
    </div>    
        <?php  
         }
         ?>    
       </table>
    </body>
</html>