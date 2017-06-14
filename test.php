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
</head>
<body>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row p40"">
        <div class="col-md-2"></div>
        <div class="col-md-8 p0">
            <div class="col-md-2"></div>
            <div class="col-md-3"><img src="image/cerkes.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-2"><img src="image/ok.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-3"><img src="image/turk.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-2"></div>
            <a href="turkceTest.php"><button type="button" class="btn btn btn-block btn-lg" id="testBaslat" style="height: 75px; font-size: 15px; width: 50%; margin: auto; margin-top:15px; background-color: #dff0d8; padding-top: 15px;">TEST</button></a>
            <div class="col-md-2"></div>
            <div class="col-md-3"><img src="image/cerkes.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-2"><img src="image/ok.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-3"><img src="image/turk.jpg" class="img-responsive" alt="cerkes bayrağı" style="height: 100px; width: 150px; margin: auto"/></div>
            <div class="col-md-2"></div>
            <button type="button" class="btn btn btn-block btn-lg" style="height: 75px; font-size: 15px; width: 50%; margin: auto; margin-top:15px; background-color: #dff0d8; padding-top: 15px;">TEST</button>
        </div>
        <div class="col-md-2> "></div>
    </div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
