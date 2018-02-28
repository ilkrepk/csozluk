<?php
session_start();
if(!(isset($_SESSION["E-mail"]) && isset($_SESSION["Sifre"])))
{
    header("location: index.php");
}
if(isset($_SESSION["E-mail"]))
{
    $email=$_SESSION["E-mail"];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Çerkesceden Türkçeye, Türkçeden Çerkesceye kelime çevirisi yapabileceğiniz ve kendinizi deneyebileceğiniz bir portal.">
    <meta name="author" content="Halit Cem Tarakçı - İlker Epik">
    <link rel="icon" href="image/cerkess.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stil.css">
    <script src="getYarisKelimeler.js"></script>
<body>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row" style="padding-top:60px; ">
        <div class="col-md-2"></div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="h100 size20" id="soru" style="background-color:#dff0d8; text-align: center; border: 2px solid #c0efac; border-radius:6px; margin: 15px; padding-top: 41px;"></p>
            <p hidden id="mail"><?= $email?></p>
            <button type="button" class="btn btn btn-block btn-lg" id="s1" style="height: 50px; font-size: 15px; width: 75%; margin: auto; margin-top:15px; background-color: #dff0d8"></button>
            <button type="button" class="btn btn btn-block btn-lg" id="s2" style="height: 50px; font-size: 15px; width: 75%; margin: auto; margin-top:15px;background-color: #dff0d8"></button>
            <button type="button" class="btn btn btn-block btn-lg" id="s3" style="height: 50px; font-size: 15px; width: 75%; margin: auto; margin-top:15px;background-color: #dff0d8"></button>
            <button type="button" class="btn btn btn-block btn-lg" id="s4" style="height: 50px; font-size: 15px; width: 75%; margin: auto; margin-top:15px;background-color: #dff0d8; margin-bottom:15px;"></button>

        </div>
        <div class="col-md-2> "></div>
    </div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
