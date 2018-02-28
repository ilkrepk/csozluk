<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
    include 'connect.php';
    getTest();
}
function getTest()
{
    global $connect;

    $kayitSayisi_query = "SELECT * FROM kelimeler";
    $kayitSayisi_result = mysqli_query($connect,$kayitSayisi_query);
    $kayitSayisi = mysqli_num_rows($kayitSayisi_result);

    //$kelimeID=array("soru1" =>array("D","Y1","Y2","Y3"),"soru2" =>array("D","Y1","Y2","Y3"),"soru3" =>array("D","Y1","Y2","Y3"));
    //print_r($kelimeID);
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
    //$kelimeID = array($kelimeID);
    kelimeGetir($kelimeID);
}
function kelimeGetir($kelimeID)
{
    global $connect;
    $kelimeDizisi=array();
    for($i=0;$i<10;$i++)
    {
        $id=$kelimeID[$i][0];
        $cGetir="select CKelime from kelimeler where Kid=$id";
        $cResult = mysqli_query($connect,$cGetir);
        $cnumber_of_rows = mysqli_num_rows($cResult);
        if($cnumber_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($cResult))
            {
                $kelimeDizisi[$i][0]=$row;
            }
        }
        for($j=1;$j<5;$j++)
        {
            $id=$kelimeID[$i][$j];
            $tGetir="select TKelime from kelimeler where Kid=$id";
            $tResult = mysqli_query($connect,$tGetir);
            $tnumber_of_rows = mysqli_num_rows($tResult);
            if($tnumber_of_rows > 0)
            {
                while($row = mysqli_fetch_assoc($tResult))
                {
                    $kelimeDizisi[$i][$j]=$row;
                }
            }
        }
    }
    $kelimeID = array("kelimeID" => $kelimeDizisi);
    header ('Content-Type: application/json');
    echo json_encode($kelimeID);
}
?>