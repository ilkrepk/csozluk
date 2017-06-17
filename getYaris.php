<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    $email = $_GET['Email'];
    global $connect;
    $durum="select * from yaris where Durum=1";
    $durumCevap = mysqli_query($connect,$durum);
    $yarisDurum = mysqli_num_rows($durumCevap);

    if($yarisDurum<1)
    {
        getYaris($email);
    }
    else
    {
        getDatabaseYaris($email);
    }
}
function getDatabaseYaris($email)
{
    global $connect;
    $durum2='select soru from yaris where Durum=1';
    $durumCevap2 = mysqli_query($connect,$durum2);
    $yarisDurum2 = mysqli_num_rows($durumCevap2);
    if($yarisDurum2 > 0)
    {
        $soru_degerleri=mysqli_fetch_assoc($durumCevap2);
    }
    $yarisDuzenelle = "UPDATE yaris SET Durum = '0' , Y2mail = '$email', Y2DogruCevap = '0' WHERE Durum='1'";
    $duzenleSonuc = mysqli_query($connect,$yarisDuzenelle);

    print_r ($soru_degerleri["soru"]);
    header ('Content-Type: application/json');
}
function getYaris($email)
{
    global $connect;

    $kayitSayisi_query = "SELECT * FROM kelimeler";
    $kayitSayisi_result = mysqli_query($connect,$kayitSayisi_query);
    $kayitSayisi = mysqli_num_rows($kayitSayisi_result);

    $kelimeID=array();
    $sorular=array();

    for($i=0;$i<10;$i++)
    {
        $j=0;
        $randomDogruSayi = rand(1,$kayitSayisi);

        while(in_array($randomDogruSayi,$sorular) || in_array($randomDogruSayi,$kelimeID))
        {
            $randomDogruSayi = rand(1,$kayitSayisi);
        }
        $kelimeID[$i][$j]=$randomDogruSayi;
        $kelimeID[$i][$j+1]=$randomDogruSayi;
        $sorular[$i]=$randomDogruSayi;

        for($j=2;$j<5;$j++)
        {
            $randomYanlisSayi = rand(1,$kayitSayisi);

            while($randomDogruSayi==$randomYanlisSayi || in_array($randomYanlisSayi,$kelimeID[$i]))
            {
                $randomYanlisSayi = rand(1,$kayitSayisi);
            }
            $kelimeID[$i][$j]=$randomYanlisSayi;
        }
    }
    kelimeGetir($kelimeID,$email);
}
function kelimeGetir($kelimeID,$email)
{
    global $connect;
    $kelimeDizisi=array();
    for($i=0;$i<5;$i++)
    {
        $id=$kelimeID[$i][0];
        $tGetir="select TKelime from kelimeler where Kid=$id";
        $tResult = mysqli_query($connect,$tGetir);
        $tnumber_of_rows = mysqli_num_rows($tResult);
        if($tnumber_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($tResult))
            {
                $kelimeDizisi[$i][0]=$row;
            }
        }
        for($j=1;$j<5;$j++)
        {
            $id=$kelimeID[$i][$j];
            $cGetir="select CKelime from kelimeler where Kid=$id";
            $cResult = mysqli_query($connect,$cGetir);
            $cnumber_of_rows = mysqli_num_rows($cResult);
            if($cnumber_of_rows > 0)
            {
                while($row = mysqli_fetch_assoc($cResult))
                {
                    $kelimeDizisi[$i][$j]=$row;
                }
            }
        }
    }
    //------------------------------------------ 5 Tkelime 5 Ckelime
    for($i=5;$i<10;$i++)
    {
        $id=$kelimeID[$i][0];
        $cGetir2="select CKelime from kelimeler where Kid=$id";
        $cResult2 = mysqli_query($connect,$cGetir2);
        $cnumber_of_rows2 = mysqli_num_rows($cResult2);
        if($cnumber_of_rows2 > 0)
        {
            while($row = mysqli_fetch_assoc($cResult2))
            {
                $kelimeDizisi[$i][0]=$row;
            }
        }
        for($j=1;$j<5;$j++)
        {
            $id=$kelimeID[$i][$j];
            $tGetir2="select TKelime from kelimeler where Kid=$id";
            $tResult2 = mysqli_query($connect,$tGetir2);
            $tnumber_of_rows2 = mysqli_num_rows($tResult2);
            if($tnumber_of_rows2 > 0)
            {
                while($row = mysqli_fetch_assoc($tResult2))
                {
                    $kelimeDizisi[$i][$j]=$row;
                }
            }
        }
    }
    //------------------------------------------
    $kelimeID = array("kelimeID" => $kelimeDizisi);
    header ('Content-Type: application/json');
    $soru = json_encode($kelimeID, JSON_UNESCAPED_UNICODE);
    $soruGonder="INSERT INTO yaris (Durum, Y1mail, Y1DogruCevap, soru) VALUES ('1','$email','0','$soru')";
    $tResult = mysqli_query($connect,$soruGonder);
    echo $soru;
}

?>