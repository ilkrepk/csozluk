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
    <script src="gettopList.js"></script>

<body>
<p hidden id="hiddenmail"><?= $email ?></p>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->

<div class="container">
    <h2>Başarım Tablosu</h2>
    <p>Aşağıdaki tablo en iyi 10 başarım puanına sahip üyeleri göstermektedir. Denemekten vazgeçme kim bilir belki sende 1 gün adını bu listede görebilirsin :)</p>
    <table class="table">
        <thead>
        <tr>
            <th>Sıra</th>
            <th>İsim</th>
            <th>Soyisim</th>
            <th>Başarım Puanı</th>
            <th>Rütbe</th>
        </tr>
        </thead>
        <tbody id="flag">

        </tbody>
    </table>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
