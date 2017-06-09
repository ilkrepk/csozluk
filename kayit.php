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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="postUyeler.js"></script>
    </head>
    <body>
        <?php
        include 'unloginheader.php'
        ?>
        <div class="container">
            <div class="form-horizontal">
                <center><h2>Kayıt Ol</h2></center>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="fn">Adınız</label>
                    <div class="col-md-4">
                        <input id="fn" name="Ad" type="text" placeholder="Ad giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="ln">Soyadınız</label>
                    <div class="col-md-4">
                        <input id="ln" name="Soyad" type="text" placeholder="Soyad giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">E-mail</label>
                    <div class="col-md-4">
                        <input type="email" name="Email"  id="mail" class="form-control input-md" placeholder="E-mail Giriniz" required autofocus>
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">Doğum Tarihi</label>
                    <div class="col-md-4">
                        <input id="dtarih" name="D_Tarihi" type="date" placeholder="Doğum Tarihi" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="inputPassword">Şifre</label>
                    <div class="col-md-4">
                        <input id="inputPassword" name="Sifre" type="password" placeholder="Şifre giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Password again input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="inputPassword"> Tekrar Şifre</label>
                    <div class="col-md-4">
                        <input id="againPassword" name="Sifredogrula" type="password" placeholder="Şifre tekrar giriniz" class="form-control input-md" required="">
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Cinsiyet</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="Cinsiyet" class="form-control input-md">
                            <option>ERKEK</option>
                            <option>KADIN</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <button class="btn btn-lg btn-primary btn-block" type="submit" id="kayitOl">Kayıt Ol</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>