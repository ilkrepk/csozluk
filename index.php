<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Çerkesceden Türkçeye, Türkçeden Çerkesceye kelime çevirisi yapabileceğiniz ve kendinizi deneyebileceğiniz bir portal.">
        <meta name="author" content="Halit Cem Tarakçı - İlker Epik">
        <link rel="icon" href="image/cerkess.ico">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="stil.css">

    </head>
    <body>
        <?php
            include 'unloginheader.php'
        ?>
        <div class="container">
            <div class="row p40">
                <div class="col-md-2"></div>
                <!--Login olmadan çeviri yapma-->
                <div class="col-md-8 p0">
                    <form>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="basic-addon3">Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true">Türkçe</span></span>
                            <input type="text" class="form-control" placeholder="Kelime Ara">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></span>
                        </div>
                        <center><button class="cevirbutton"><span>ÇEVİR</span></button></center>
                        <p class="form-control renk h100">Çeviri Sonuçları</p>
                    </form>
                </div>
                <div class="col-md-2> "></div>
            </div>

        </div>
            <script src="js/jquery-3.2.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </body>
</html>