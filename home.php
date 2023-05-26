<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mobile Store-Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         
            <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <!--NavBar Starts here-->
        <header>
            <img class="logo" src="images/logo.png" alt="logo">
            <nav>
                <ul class="nav__links">
                   
                    <li><a href="home.php" class="hover-line">Home</a></li>
                    <a class="cta" href="Login.php"><button>SignUp/Login</button></a>
                </ul>
                   
            </nav>
            
        </header>
        <!--NavBar ended here-->

        <!--Sliders starts From here-->
    
        <div class="slider-box">
            <div id="slider">
                <img src="images/slides/1.png">
                <img src="images/slides/2.png">
                <img src="images/slides/3.png">
                <img src="images/slides/4.png">
            </div>
            <div class="indicators">
                <span id="btn1" class="active"></span>
                <span id="btn2"></span>
                <span id="btn3"></span>
                <span id="btn4"></span>
            </div>
        </div>

        <script>
            var slide = document.getElementById("slider");
            var btn1 = document.getElementById("btn1");
            var btn2 = document.getElementById("btn2");
            var btn3 = document.getElementById("btn3");
            var btn4 = document.getElementById("btn4");

            btn1.onclick = function(){
                slide.style.transform = "translateX(0px)";
                btn1.classList.add("active");
                btn2.classList.remove("active"); 
                btn3.classList.remove("active");
                btn4.classList.remove("active");
            }

            btn2.onclick = function(){
                slide.style.transform = "translateX(-100%)";
                btn2.classList.add("active");
                btn1.classList.remove("active"); 
                btn3.classList.remove("active");
                btn4.classList.remove("active");
            }

            btn3.onclick = function(){
                slide.style.transform = "translateX(-200%)";
                btn3.classList.add("active");
                btn1.classList.remove("active"); 
                btn2.classList.remove("active");
                btn4.classList.remove("active");
            }

            btn4.onclick = function(){
                slide.style.transform = "translateX(-300%)";
                btn4.classList.add("active");
                btn1.classList.remove("active"); 
                btn3.classList.remove("active");
                btn2.classList.remove("active");
            }
        </script>
        <!--Sliders endes here-->

        <!--second set of ads starts here-->
       
        <!--second set of ads ends here-->
   
        <!--Third set of ads starts here-->

       
        <div class="main">
            <div class="container">
                <div class="card">
                    <div class="imgBX">
                    <h1 style="color: rgb(170, 126, 217);
                    text-align: center;">MacBook Pro 13"</h1>
                    <h2 style="margin: 20px; text-align: center; color:rgb(228, 106, 159)">Supercharged By M2 </h2>
                    <h3 style="margin: 16px; text-align: center; margin-bottom:10px"><br>Light.Bright.Full Of Might</h3>
                    <a href="#">
                    <img src="images/mac.jpg">
                     </a>
                    </div>
                 </div>     
            </div>
            <div class="container">
                <div class="card">
                    <div class="imgBX1">
                    <h1 style="color: rgb(170, 126, 217);
                    text-align: center;">Oneplus Watch</h1>
                    <h2 style="margin: 20px; text-align: center; color:rgb(228, 106, 159)">Cobalt Edition</h2>
                    <h3 style="margin: 16px; text-align: center ; margin-bottom:10px"><br>Harry Potter Edition</h3>
                    <a href="#">
                    <img src="images/cobalt.jpg">
                     </a>
                    </div>
                 </div>     
            </div>
            <div class="container">
                <div class="card">
                    <div class="imgBX2">
                    <h1 style="color: rgb(170, 126, 217);
                    text-align: center;">Oppo Find X2</h1>
                    <h2 style="margin: 20px; text-align: center;  color:rgb(228, 106, 159)">League Of Legends  </h2>
                    <h3 style="margin: 16px; text-align: center; margin-bottom:10px"><br>Edition</h3>
                    <a href="#">
                    <img src="images/oppo.jpg">
                     </a>
                    </div>
                 </div>     
            </div>
            
        </div>   
       
       
        
    </body>
</html>