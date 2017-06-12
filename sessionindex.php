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
        <script type="text/javascript" src="betik.js"></script>
        <script type="text/javascript" src="getTKelime.js"></script>
        <script type="text/javascript" src="degis.js"></script>
    </head>
    <body>
        <?php
            include 'loginheader.php'
        ?>
        <div class="container">
            <div class="row p40">
                <div class="col-md-2"></div>
                <!--Login olmadan çeviri yapma-->
                <div class="col-md-8 p0">

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon3">Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Türkçe</span>
                            <input type="text" class="form-control" placeholder="Kelime Ara" id="kelime" name="istek"/>
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="secim"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></span>
                        </div>
                        <center><button class="cevirbutton" id="cevir"><span>ÇEVİR</span></button></center>
                        <p class="form-control renk h100 size20" id="sonuc">Çeviri Sonuçları</p>

                </div>
                <div class="col-md-2> "></div>
            </div>

        </div>
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>
</html>