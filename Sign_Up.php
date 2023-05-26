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
            //Save To DataBase
            $User_id= random_num(10);
            $query = "insert into Sign_Up (User_id,User_Name,Password) values ('$User_id','$UserName', '$Pass')";

            mysqli_query($con,$query);

            header("Location: Login.php");
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
  <title>Sign-Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <link href ="SignUp.css" rel = "stylesheet" type="text/css"/>
 
</head>
<body>
<style>
        .Box{        
    width: 400px;
    padding: 30px;
    position: absolute;
    top: 50%;
    left: 50%;
    box-shadow: inset;
    transform: translate(-50%,-50%);
    background: rgba(0,0,0,0.6);
    border-radius: 10%;
    text-align: center;
    padding: 40px;
}
.Box h1{
    color: white;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 40px;
    cursor: pointer;
}
.Box h1 a{
    color: white;
}

.Box input[type="text"],.Box input[type="password"]
{
    border: 0;
    background: none;
    display: block;
    margin: 20px;
    text-align: center;
    border: 3px solid rgb(255, 255, 255);
    padding: 14px 10px;
    width: 300px;
    outline: none;
    color: white;
    border-radius: 24%;
    transition: 0.25px;
   
}

.Box input[type="text"]:hover,.Box input[type="password"]:hover{
    border-color:aliceblue;
    
}
#Password{
    margin-bottom: 40px;
    margin-top: 30px;
   
}
.Box input[type="submit"]{
    border: 0;
    width: 200px;
    background: none;
    display: inline-block;
    margin: 20px auto;
    text-align: center;
    border: 3px solid wheat;
   padding: 15px;
    margin-right: 20px;
    margin-left: 20px;
    outline: none;
    color: white;
    border-radius: 34%;
    transition: 0.25px;
    cursor: pointer;
}
.Box input[type="submit"]:hover{
    background-color: aliceblue;
    color: black
}

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    

}
 
li, a, button {
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 18px;
    color: #edf0f1;
    text-decoration: none;
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    background-color: #011014;
}

.logo{
    margin-left: 1;
    margin-right: 20px;
    cursor: pointer;
    height: 60px;
}

.nav__links{
    list-style: none;
}

.nav__links li{
    display: inline-block;
    padding: 0px 20px;
    
}

.nav__links li a {
    transition: all 0.3s ease 0s;
}


.nav__links li a:hover {
    color: #00a9a9;

}

.hover-line::after{
    content: '';
    display: block;
    width: 0%;
    height: 2px;
    background-color: #00a9a9;
    transition:width .3;
}

.hover-line:hover::after{
    width: 100%;
    transition: width .5s;
}
button{
    padding: 9px;
    background-color: rgba(0,136, 169, 1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
}

button:hover{
    background-color: rgba(0, 136, 169, 0.8);
}

    </style>
    <div class="WholeBody">

     <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav__links">
                   
                    <li><a href="home.php" class="hover-line">Home</a></li>
                    <a class="cta" href="Login.php"><button>SignUp/Login</button></a>
                </ul>
                   
            </nav>
            
        </header>

    <form method="POST">
      
    <div class="container">
        
        
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
  
      <label for="User"><b>User id</b></label>
      <input type="text" placeholder="User id" name="Username" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>

      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="aliceblue">Terms & Privacy</a>.</p>
  
      <div class="clearfix">
        
        <input type="submit"  value="Create" class="signupbtn">
      </div>
    </div>
  </form>
</div>


</body>
</html>