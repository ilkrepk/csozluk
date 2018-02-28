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
    <script src="uyeGetir.js"></script>
<body>
<p hidden id="hiddenmail"><?= $email ?></p>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row" style="padding-top:60px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Ad:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="ad"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Soyad:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="soyad"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Email:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="email"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Başarı Puanı:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="basarim"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Yarış Sayısı:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="yarissayisi"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Kazanım Sayısı:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="winsayisi"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>
    <div class="row" style="padding-top:10px;">
        <div class="col-md-2">
            <p class="bg-warning" style="border:2px solid #c0efac;border-radius: 6px;" >Rütbe:</p>
        </div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="bg-success" id="rutbe"></p>
        </div>
        <div class="col-md-2> "></div>
    </div>

</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
