<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include 'connect.php';
        login();
    }
    else
    {
        header("location:index.php");
    }
    function login()
    {
        global $connect;
        if(isset($_POST["email"]) && isset($_POST["sifre"]))
        {
            $Email=$_POST["email"];
            $Sifre=$_POST["sifre"];
            $query="SELECT * FROM uyeler WHERE Email = '$Email'  AND Sifre = '$Sifre'";
            $result = mysqli_query($connect,$query);
            $number_of_rows = mysqli_num_rows($result);
            if($number_of_rows>0)
            {
                session_start();
                $_SESSION["E-mail"] = $_POST["email"];
                $_SESSION["Sifre"] = $_POST["sifre"];
                if($Email=="admin@admin.com" && $Sifre=="ilkrhcem1993")
                {
                    header("location: admin.php");
                }
                else
                {
                    header("location: index2.php");
                }
            }
            else
            {
                header("location: giris.php");
            }
        }
        else
        {
            header("location: index.php");
        }
    }
    /*
    session_start();
    if(isset($_POST["email"]) && isset($_POST["sifre"]))
    {
        $_SESSION["E-mail"] = $_POST["email"];
        $_SESSION["Sifre"] = $_POST["sifre"];

        if($_SESSION["E-mail"] == "admin@aadmin.com" && $_SESSION["Sifre"] == "admin123")
        {
            header("location: index2.php");
        }
        else
        {
            header("location: giris.php");
        }
    }
    else
    {
        header("location: index.php");
    }*/
?>
