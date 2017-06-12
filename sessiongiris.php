<?php
session_start();
if(isset($_POST["inputEmail"]) && isset($_POST["inputPassword"]))
{
    $_SESSION["Email"] = $_POST["inputEmail"];
    $_SESSION["Password"] = $_POST["inputPassword"];

    header('location: sessionindex.php');
}

?>