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
        <?php
        include 'unloginheader.php'
        ?>
        <div class="container">
            <form class="form-horizontal" action="insertUyeler.php" method="POST">
                <center><h2>Kayıt Ol</h2></center>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Adınız</label>
                    <div class="col-md-4">
                        <input id="fn" name="ad" type="text" placeholder="Ad giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="ln">Soyadınız</label>
                    <div class="col-md-4">
                        <input id="ln" name="soyad" type="text" placeholder="Soyad giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>
                    <div class="col-md-4">
                        <input id="email" name="email" type="text" placeholder="E-mail giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Doğum Tarihi</label>
                    <div class="col-md-4">
                        <input id="email" name="dtarih" type="date" placeholder="Doğum Tarihi" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="inputPassword">Şifre</label>
                    <div class="col-md-4">
                        <input id="inputPassword" name="sifre" type="password" placeholder="Şifre giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password again input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="inputPassword">Şifre</label>
                    <div class="col-md-4">
                        <input id="inputPassword" name="sifredogrula" type="password" placeholder="Şifre tekrar giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Cinsiyet</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="cinsiyet" class="form-control input-md">
                            <option>ERKEK</option>
                            <option>KADIN</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Kayıt Ol</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>