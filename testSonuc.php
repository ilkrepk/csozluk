<?php
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["dogru"]) && isset($_POST["yanlis"])) {
        $dogru = $_POST["dogru"];
        $yanlis = $_POST["yanlis"];
    }
}
else
{
    header("HTTP/1.1 404 Not Found");
    die();
}

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
    <script src="getTestKelimeler.js"></script>
</head>
<body>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row" style="padding-top:60px; ">
        <div class="col-md-2"></div>
        <div class="col-md-8 p0" style="border:2px solid #c0efac; border-radius: 6px; background-color:#CCCCCC;">
            <p class="h100 size20" style="background-color:#D2D3D3; text-align: center; border: 2px solid #c0efac; border-radius:6px; margin: 15px; padding-top: 41px;">Yarışmayı başarı ile tamamladınız.</p>
            <p class="size20" id="dCevap" style="background-color:#dff0d8; border: 2px solid #c0efac; border-radius:6px; margin: 15px; padding-top: 15px;">Doğru cevap sayısı : <?= $dogru ?></p>
            <p class="size20" id="yCevap" style="background-color:#F2DEDE; border: 2px solid #c0efac; border-radius:6px; margin: 15px; padding-top: 15px;">Yanlış cevap sayısı: <?= $yanlis ?></p>
            <?php
                header("refresh:3;url=index.php");
            ?>
        </div>
        <div class="col-md-2> "></div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
