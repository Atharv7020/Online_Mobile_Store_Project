<?php
    
        SESSION_start();

    include("Connection.php");
    include("Function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Somthing is posted

        $UserName = $_POST['Username'];
        $Pass = $_POST['Password'];

        if(!empty($UserName) && !empty($Pass)  && !is_numeric($UserName))
        {
           //read from DataBase
            $query = "select * from Sign_Up where User_Name = '$UserName' limit 1";
            mysqli_query($con,$query);

            $result = mysqli_query($con,$query);

            if($result)
            {
                
                if($result && mysqli_num_rows($result) > 0)
                {
                    $User_Data = mysqli_fetch_assoc($result);
                   
                    if($User_Data['Password'] === $Pass)
                    {
                        
                        $_SESSION['User_id'] = $User_Data['User_id'];
                        header("Location: Mobiles.php");
                        die; 
                    }
                }
            }
            echo "<script> alert('Please Enter Some Valid Information');window.location='Login.php'</script>";
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
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link href ="Login.css" rel = "stylesheet" type="text/css"/>
 
</head>
<body>
<header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav__links">
                   
                    <li><a href="home.php" class="hover-line">Home</a></li>
                    <a class="cta" href="Login.php"><button>SignUp/Login</button></a>
                </ul>
                   
            </nav>
            
        </header>

<div class="container">
<h2>Login Form</h2>

<form method="POST">
 

  <div class="container1">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password"  name="Password" required>
    <div class="clearfix">
    <input type="submit" value="Login">
    </div>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <div class="SU">
    <label>
      Create New Account?<a href="Sign_up.php">Sign-Up</a>
        </label>
    </div>
    </div>

  
</form>
</div>
</div>
</div>
</body>
</html>