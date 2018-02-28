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
    <script type="text/javascript" src="getTKelime.js"></script>
    <script type="text/javascript" src="degis.js"></script>
</head>
<body>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row p40">
        <div class="col-md-2"></div>
        <!--Login olmadan çeviri yapma-->
        <div class="col-md-8 p0">

            <div class="input-group-lg">

                <p class="bg-info" id="secim">Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Türkçe</p>
                <!--<span class="input-group-addon" id="basic-addon3">Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true" style="border: 1px solid #CCCCCC; border-radius: 6px !important"></span>Türkçe</span>-->
                <input type="text" class="form-control" placeholder="Kelime Ara" id="kelime" name="istek"/>
            </div>

            <center><button class="cevirbutton" id="cevir"><span>ÇEVİR</span></button></center>
            <p class="form-control renk h100 size20" id="sonuc">Çeviri Sonuçları</p>
            <div class="col-md-1 col-xs-1"></div>
            <div class="col-md-5 col-xs-5">
                <a href="test.php"><button type="button" class="btn btn-info btn-block btn-lg" style="height: 100px; margin-top:30px; font-size: 18px;">TEST</button></a>
            </div>
            <!--<div class="col-md-2 col-xs-2"></div>-->
            <div class="col-md-5 col-xs-5">
                <a href="yaris.php"><button type="button" class="btn btn-danger btn-block btn-lg" style="height: 100px; margin-top:30px; font-size: 18px;">YARIŞ</button></a>
            </div>
            <div class="col-md-1 col-xs-1"></div>
        </div>
        <div class="col-md-2> "></div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
