<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Çerkesceden Türkçeye, Türkçeden Çerkesceye kelime çevirisi yapabileceğiniz ve kendinizi deneyebileceğiniz bir portal.">
    <meta name="author" content="Halit Cem Tarakçı - İlker Epik">
    <link rel="icon" href="image/cerkess.ico">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="giris.css">
    <link rel="stylesheet" type="text/css" href="stil.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-2 col-md-4"></div>
        <div class="col-lg-8 col-md-4">

            <?php
                header("refresh:6;url=giris.php");
                die(' <p class="bg-success m20" style="text-align: center">Kullanıcı kayıt işlemi başarılı bir şekilde gerçekleştirildi..
                10 saniye içerisinde giriş sayfasına yönlendirileceksiniz. Eğer beklemek istemiyorsanız<a href="giris.php"> buraya </a>tıklayınız. </p>');
            ?>
        </div>
        <div class="col-lg-2 col-md-4"></div>

    </div>
</div>
</body>
</html>