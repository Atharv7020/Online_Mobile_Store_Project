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
  <title>SignUp</title>
</head>
<body>
    + n<style>
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

    </style>
  
<div class="area" >
    <div class="Box">
        <form method="POST">
            <h1>
                <a href="Login.html">SignUp</a></h1>
                
            <input type="text" placeholder="User id" name="Username" required/>
            <input type="password" placeholder="Password" name="Password" required/>

            <input type="submit" value="Login" ><br><br>

            <a href="Login.php">Click To Login</a>
            
            </form>
           
        </div>
        </div>

</body>
</html>