<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    global $connect;
    if(isset($_POST["dogruSayisi"]) && isset($_POST["mail"]) && isset($_POST["YarisId"]))
    {
        $dogruSayisi=$_POST["dogruSayisi"];
        $mail=$_POST["mail"];
        $Yid= $_POST["YarisId"];

        $idOgren="select Yid from yaris where Durum=1 AND Y1mail <> '$email' LIMIT 1 ";
        $durumCevap = mysqli_query($connect,$idOgren);
        $YidDizi=mysqli_fetch_assoc($durumCevap);
        //$Yid=$YidDizi["Yid"];

        $flagOgren="SELECT flag FROM yaris where Yid='$Yid'";
        $flagCevap = mysqli_query($connect,$flagOgren);
        $flagDizi=mysqli_fetch_assoc($flagCevap);
        $flag=$flagDizi["flag"];

        $y1mailOgren="SELECT Y1mail FROM yaris where Yid='$Yid'";
        $Y1mailCevap = mysqli_query($connect,$y1mailOgren);
        $Y1mail=mysqli_fetch_assoc($Y1mailCevap);

        $y2mailOgren="SELECT Y2mail FROM yaris where Yid='$Yid'";
        $Y2mailCevap = mysqli_query($connect,$y2mailOgren);
        $Y2mail=mysqli_fetch_assoc($Y2mailCevap);
        echo $mail;
        echo $Y1mail['Y1mail'];
        echo $Yid;
        echo $dogruSayisi;
        if($mail==$Y1mail['Y1mail'])
        {
            $y1Ekle="UPDATE yaris SET Y1DogruCevap ='$dogruSayisi' where Yid='$Yid'";
            mysqli_query($connect,$y1Ekle);
            $flag++;
            $flagGuncelle="UPDATE yaris SET flag ='$flag' where Yid='$Yid'";
            mysqli_query($connect,$flagGuncelle);
        }
        else
        {
            $y2Ekle="UPDATE yaris SET Y2DogruCevap ='$dogruSayisi' where Yid='$Yid'";
            mysqli_query($connect,$y2Ekle);
            $flag++;
            $flagGuncelle2="UPDATE yaris SET flag ='$flag' where Yid='$Yid'";
            mysqli_query($connect,$flagGuncelle2);
        }
        if($flag==2)
        {
            $Y1DSayisi="SELECT Y1DogruCevap FROM yaris where Yid='$Yid'";
            $Y2DSayisi="SELECT Y2DogruCevap FROM yaris where Yid='$Yid'";
            $Y1istek=mysqli_query($connect,$Y1DSayisi);
            $Y1DogruAl=mysqli_fetch_assoc($Y1istek);
            $Y1DogruSon=$Y1DogruAl['Y1DogruCevap'];

            $Y2istek=mysqli_query($connect,$Y2DSayisi);
            $Y2DogruAl=mysqli_fetch_assoc($Y2istek);
            $Y2DogruSon=$Y2DogruAl['Y2DogruCevap'];

            $Y1 = $Y1mail['Y1mail'];
            $Y2 = $Y2mail['Y2mail'];

            //yarıs Y1 sayisi
            $yarisSayisiOgren="SELECT YarisSayisi FROM uyeler where Email='$Y1'";
            $yarisSayisiCevap = mysqli_query($connect,$yarisSayisiOgren);
            $yarisSayisiDizi=mysqli_fetch_assoc($yarisSayisiCevap);
            $yarisSayisi=$yarisSayisiDizi["YarisSayisi"];
            //yaris sayisi


            //yarış sayisi güncelle
            $yarisSayisi=$yarisSayisi+1;
            $yarisSayisiGuncelle="UPDATE uyeler SET YarisSayisi ='$yarisSayisi' where Email='$Y1'";
            mysqli_query($connect,$yarisSayisiGuncelle);
            //yarış sayısı güncelle

            //yarıs Y2 sayisi
            $yarisY2SayisiOgren="SELECT YarisSayisi FROM uyeler where Email='$Y2'";
            $yarisY2SayisiCevap = mysqli_query($connect,$yarisY2SayisiOgren);
            $yarisY2SayisiDizi=mysqli_fetch_assoc($yarisY2SayisiCevap);
            $yarisY2Sayisi=$yarisY2SayisiDizi["YarisSayisi"];
            //yaris sayisi

            //yarış sayisi güncelle
            $yarisY2Sayisi=$yarisY2Sayisi+1;
            $yarisY2SayisiGuncelle="UPDATE uyeler SET YarisSayisi ='$yarisY2Sayisi' where Email='$Y2'";
            mysqli_query($connect,$yarisY2SayisiGuncelle);
            //yarış sayısı güncelle

            if($Y1DogruSon>$Y2DogruSon)
            {
                $Y1Kazan="UPDATE yaris SET KazananID ='$Y1' where Yid='$Yid'";
                mysqli_query($connect,$Y1Kazan);
                $Y1basarim= ($Y1DogruSon*4)-((10-$Y1DogruSon)*1)+10;
                $Y1BasariOgren="SELECT Basarim FROM uyeler where Email='$Y1'";
                $Y1GelenBasarim= mysqli_query($connect,$Y1BasariOgren);
                $Y1basariYaz=mysqli_fetch_assoc($Y1GelenBasarim);
                $Y1BasariSon=$Y1basariYaz['Basarim'];
                $Y1BasariSon+=$Y1basarim;
                $Y1BasarimGuncelle="UPDATE uyeler SET Basarim ='$Y1BasariSon' where Email='$Y1'";
                mysqli_query($connect,$Y1BasarimGuncelle);

                $Y2basarim= ($Y2DogruSon*4)-((10-$Y2DogruSon)*1);
                $Y2BasariOgren="SELECT Basarim FROM uyeler where Email='$Y2'";
                $Y2GelenBasarim= mysqli_query($connect,$Y2BasariOgren);
                $Y2basariYaz=mysqli_fetch_assoc($Y2GelenBasarim);
                $Y2BasariSon=$Y2basariYaz['Basarim'];
                $Y2BasariSon+=$Y2basarim;
                $Y2BasarimGuncelle="UPDATE uyeler SET Basarim ='$Y2BasariSon' where Email='$Y2'";
                mysqli_query($connect,$Y2BasarimGuncelle);

                //win sayisi
                $winY1SayisiOgren="SELECT WinSayisi FROM uyeler where Email='$Y1'";
                $winY1SayisiCevap = mysqli_query($connect,$winY1SayisiOgren);
                $winY1SayisiDizi=mysqli_fetch_assoc($winY1SayisiCevap);
                $winY1Sayisi=$winY1SayisiDizi["WinSayisi"];
                //win sayisi

                //win sayisi güncelle
                $winY1Sayisi=$winY1Sayisi+1;
                $winY1SayisiGuncelle="UPDATE uyeler SET WinSayisi ='$winY1Sayisi' where Email='$Y1'";
                mysqli_query($connect,$winY1SayisiGuncelle);
                //win sayisi güncelle

                RutbeGonder(Rutbe($Y1BasariSon),$Y1);
                RutbeGonder(Rutbe($Y2BasariSon),$Y2);



            }
            else if($Y1DogruSon<$Y2DogruSon)
            {
                $Y2Kazan="UPDATE yaris SET KazananID ='$Y2' where Yid='$Yid'";
                mysqli_query($connect,$Y2Kazan);
                $Y2basarim= ($Y2DogruSon*4)-((10-$Y2DogruSon)*1)+10;
                $Y2BasariOgren="SELECT Basarim FROM uyeler where Email='$Y2'";
                $Y2GelenBasarim= mysqli_query($connect,$Y2BasariOgren);
                $Y2basariYaz=mysqli_fetch_assoc($Y2GelenBasarim);
                $Y2BasariSon=$Y2basariYaz['Basarim'];
                $Y2BasariSon+=$Y2basarim;
                $Y2BasarimGuncelle="UPDATE uyeler SET Basarim ='$Y2BasariSon' where Email='$Y2'";
                mysqli_query($connect,$Y2BasarimGuncelle);

                $Y1basarim= ($Y1DogruSon*4)-((10-$Y1DogruSon)*1);
                $Y1BasariOgren="SELECT Basarim FROM uyeler where Email='$Y1'";
                $Y1GelenBasarim= mysqli_query($connect,$Y1BasariOgren);
                $Y1basariYaz=mysqli_fetch_assoc($Y1GelenBasarim);
                $Y1BasariSon=$Y1basariYaz['Basarim'];
                $Y1BasariSon+=$Y1basarim;
                $Y1BasarimGuncelle="UPDATE uyeler SET Basarim ='$Y1BasariSon' where Email='$Y1'";
                mysqli_query($connect,$Y1BasarimGuncelle);

                //win sayisi
                $winY2SayisiOgren="SELECT WinSayisi FROM uyeler where Email='$Y2'";
                $winY2SayisiCevap = mysqli_query($connect,$winY2SayisiOgren);
                $winY2SayisiDizi=mysqli_fetch_assoc($winY2SayisiCevap);
                $winY2Sayisi=$winY2SayisiDizi["WinSayisi"];
                //win sayisi

                //win sayisi güncelle
                $winY2Sayisi+=1;
                $winY2SayisiGuncelle="UPDATE uyeler SET WinSayisi ='$winY2Sayisi' where Email='$Y2'";
                mysqli_query($connect,$winY2SayisiGuncelle);
                //win sayisi güncelle

                RutbeGonder(Rutbe($Y1BasariSon),$Y1);
                RutbeGonder(Rutbe($Y2BasariSon),$Y2);

            }
            else
            {
                $Berabere="UPDATE yaris SET KazananID ='Berabere' where Yid='$Yid'";
                mysqli_query($connect,$Berabere);
            }
        }

    }
    $email = $_GET['Email'];
    $durum="select * from yaris where Durum=1";
    $durumCevap = mysqli_query($connect,$durum);
    $yarisDurum = mysqli_num_rows($durumCevap);

}
function Rutbe($sayi)
{
    if($sayi < 100 )
    {
        return $Rid = 1;
    }
    else if($sayi > 100 && $sayi <2000 )
    {
        return $Rid = 2;
    }

}
function RutbeGonder($Rid, $email)
{
    global $connect;
    $RGuncelle="UPDATE uyeler SET Rid ='$Rid' where Email='$email'";
    mysqli_query($connect,$RGuncelle);

}

?>