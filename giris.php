<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/cerkess.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="giris.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stil.css">
  </head>
  <body>
    <?php
      include 'unloginheader.php'
    ?>
    <div class="container">
      <form class="form-signin" method="post" action="loginindex.php">
        <center><h2>Giriş Yapınız</h2></center>
        <label for="inputEmail" class="sr-only">E-mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-mail Adresi" required autofocus>
        <label for="inputPassword" class="sr-only">Şifre</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Şifre" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Beni Hatırla
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Giriş Yap</button>
      </form>
    </div>
  </body>
</html>