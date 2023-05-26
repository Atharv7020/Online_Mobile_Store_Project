
<?php
    
SESSION_start();


include("Connection.php");
include("Function.php");
$User_Data = check_Login($con);
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //Somthing is posted
     echo $User_Data['User_id'];
     $MobileName=$_GET['MobileName'];
     $Price=$_GET['Price'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    $User_Name= $User_Data['User_Name'];
    $MobileNumber=$_POST['MobileNumber'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    

    if($User_Name)
    {
        //Save To DataBase
        $User_id= random_num(10);
        $query = "insert into `product_payment` (mobilename,price,id,name,email,mobileno,address,state,city) values ('$MobileName','$Price','$User_id','$User_Name', '$Email',' $MobileNumber',' $Address','$State','$City')";

        mysqli_query($con,$query);

        header("Location: Final.php");
        die;
    }
    else 
    {
        echo "Please Enter Some Valid Information";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href ="MobilePayment.css" rel = "stylesheet" type="text/css"/>
  
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

    <div class="area" > 
        <div class="Text1">
            <div class="container">
                <form method="POST">
            <h1>
                <a href="ClothPayment.html">Place An Order</a></h1>

            <label class="label"> Mobile Name : </label>
            <input type="text" placeholder="" name="MobileName" value="<?php echo $_GET["MobileName"];?>"disabled/><br><br>

            <label class="label"> Price   : </label>
            <input type="text" placeholder="" name="Price" value="<?php echo $_GET["Price"];?>"disabled/><br><br>
           
            <label class="label"> Moblie Number   : </label>
            <input type="text" placeholder="Moblie Number" name="MobileNumber" required/><br><br>
 
            <label class="label"> Email  : </label>
            <input type="email" placeholder="Email " name="Email" required/><br><br>

            <label class="label"> Address   : </label>
            <input type="text" placeholder="Address" name="Address" required/><br><br>

            <label class="label"> City   : </label>
            <input type="text" placeholder="City" name="City" required/><br><br>

            <label class="label"> State   : </label>
            <input type="text" placeholder="State" name="State" required/><br><br>
           
            <button type="submit" class="btn btn-success btn-lg btn-block">Place An Order</button>
            
        </form>

        <script src="Payment.js">
            var Amount=document.forms["myform"]["Amount"];
        
        function validation()
        {
            if(Amount.value<200)
            {
                alert("For Final Payment Pay More Than 200 Rs.");
                return false;
            }
            else
            {
                return true;
            }
        }
        </script>
        </div>
        </div>
        </div>
