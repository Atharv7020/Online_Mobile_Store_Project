<?php

    function check_Login($con)
    {

        if(isset($_SESSION['User_id']))
        {
            $id= $_SESSION['User_id'];

            $query = "select * from Sign_Up where User_id = '$id' limit 1";

            $result = mysqli_query($con,$query);

            if($result && mysqli_num_rows($result) > 0)
            {
                $User_Data = mysqli_fetch_assoc($result);

                return $User_Data;
            }
        }

        //redirect to login

        header("Location: Login.php");
        die;

    }

    function random_num($length)
    {
        $text = "";

        if($length < 5)
        {
            $length=5;
        }

        $len = rand(4,$length);

        for($i=0 ;$i < $len; $i++)
        {
            $text.= rand(0,9);
        }

        return $text;
    }

?>