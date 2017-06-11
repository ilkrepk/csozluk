<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    include 'connect.php';
    getKullanici();
}

function getKullanici()
{
    global $connect;
    if(isset($_GET['istek']))
    {
        $request=$_GET['istek'];
        $query="SELECT * from kelimeler WHERE TKelime='$request'";
        $result = mysqli_query($connect,$query);
        $number_of_rows = mysqli_num_rows($result);
        $temp_array = array();

        if($number_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $temp_array[]=$row;
            }
            $json_result = array("sayi" => $number_of_rows, "kelimeler"=>$temp_array);
            header ('Content-Type: application/json');
            echo json_encode ($json_result);
            mysqli_close($connect);
        }
        else
        {
            header ('Content-Type: application/json');
            echo json_encode (array("sayi" => $number_of_rows,"Error"=>"Bad Request"));
            header ('HTTP 1.1 403 Bad Request');
        }
    }
}
?>