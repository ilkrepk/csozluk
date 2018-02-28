<?php
    session_start();
    include 'connect.php';

    if(!(isset($_SESSION["E-mail"]) && isset($_SESSION["Sifre"])))
    {
        header("location: index.php");
    }
    else
    {
        //kategorileri çekme
        global $connect;
        $sorgu="SELECT KategoriAdi from kategori";
        $result = mysqli_query($connect,$sorgu);

        $number_of_rows = mysqli_num_rows($result);
        $temp_array = array();

        if($number_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $temp_array[]=$row;
            }
            //print_r($temp_array);

            //echo $temp_array[i]['KategoriAdi'];
        }
        //------------------

        if(isset($_SESSION["E-mail"]))
        {
            $email=$_SESSION["E-mail"];
            if($email!="admin@admin.com")
            {
                header("location: index2.php");
            }
        }
        if ($_SERVER["REQUEST_METHOD"]=="POST")
        {
            kelimeEkle();
        }
    }

function kelimeEkle()
{
    global $connect;
    if (isset($_POST["Ckelime"]) && isset($_POST["Tkelime"]) && isset($_POST["KategoriAdi"])){

        $Ckelime = $_POST["Ckelime"];
        $Tkelime = $_POST["Tkelime"];
        $KategoriAdi = $_POST["KategoriAdi"];

        $KategoriIDOgren = "SELECT KategoriID FROM kategori WHERE KategoriAdi='$KategoriAdi'";
        $KategoriIDSonuc=mysqli_query($connect, $KategoriIDOgren) or die (mysqli_error($connect));
        $KategoriIDYaz=mysqli_fetch_assoc($KategoriIDSonuc);
        $KategoriID=$KategoriIDYaz['KategoriID'];

        $query = "INSERT INTO kelimeler (Ckelime, Tkelime, KategoriID) values ('$Ckelime','$Tkelime','$KategoriID');";
        mysqli_query($connect, $query) or die (mysqli_error($connect));

    }
    else if (isset($_POST["KategoriAdiGetir"])){

        $KategoriAdi = $_POST["KategoriAdiGetir"];
        $KategoriEkleSorgu = "INSERT INTO kategori (KategoriAdi) values ('$KategoriAdi');";
        mysqli_query($connect, $KategoriEkleSorgu) or die (mysqli_error($connect));
        mysqli_close($connect);
        header("location:admin.php");
    } else {
        header("HTTP/1.1 POST 200 OK.");
        die("An HTTP error 400 (invalid request) occurred.");
    }
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
    <script src="panelAc.js"></script>

</head>
<body>
<?php include "loginheader.php"; ?>
<!-- Buraya kadar navbar-->
<div class="container">
    <div class="row p40">
        <div class="col-md-2"></div>
            <div class="col-md-8 p0">
                <a href="#"><button type="button" id="panelAc" class="btn btn-info btn-block btn-lg" style="height: 50px; margin-top:30px; font-size: 18px;">Kelime Ekle Panelini Aç</button></a>
                <div id="panel" style="display: none;">
                    <form action="" method="post">
                        <input id="ln" name="Ckelime" type="text" placeholder="Çerkesce Kelime Gir" class="form-control input-md" style="margin-top: 20px; height: 50px">
                        <input id="ln" name="Tkelime" type="text" placeholder="Türkçe Karşılığını Gir" class="form-control input-md" style="margin-top:10px; margin-bottom:10px; height: 50px ">
                        <select id="selectbasic" name="KategoriAdi" placeholder="Kategori Seç" class="form-control input-md" style="margin-top:10px; margin-bottom:10px; height: 50px">
                            <option selected disabled>Kategori Seç</option>
                            <?php
                                for($i=0; $i<$number_of_rows; $i++)
                                {
                                    echo "<option>".$temp_array[$i]['KategoriAdi']."</option>";
                                }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-info btn-block btn-lg" style="height: 50px; margin-top:30px; margin: auto; font-size: 18px; width: 200px;">Kelimeyi Kaydet</button>
                    </form>
                </div>
                <a href="#"><button type="button" id="panelAc2" class="btn btn-info btn-block btn-lg" style="height: 50px; margin-top:30px; font-size: 18px;">Kategori Ekle Panelini Aç</button></a>
                <div id="panel2" style="display: none;">
                    <form action="" method="post">
                        <input id="ln" name="KategoriAdiGetir" type="text" placeholder="Kategori Gir" class="form-control input-md" style="margin-top: 20px; margin-bottom: 20px; height: 50px">
                        <button type="submit" class="btn btn-info btn-block btn-lg" style="height: 50px; margin-top:30px; margin: auto; font-size: 18px; width: 200px;">Kategori Ekle</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2> "></div>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
