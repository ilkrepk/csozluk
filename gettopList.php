<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    include 'connect.php';
    topList();
}

function topList()
{
    global $connect;

        $query="SELECT * FROM uyeler INNER JOIN rutbe on uyeler.Rid=rutbe.Rid Order By Basarim DESC LIMIT 10";
        $result = mysqli_query($connect,$query);
        $number_of_rows = mysqli_num_rows($result);
        $temp_array = array();

        if($number_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $temp_array[]=$row;
            }
            $json_result = array("sayi" => $number_of_rows, "uye" => $temp_array);
            header ('Content-Type: application/json');
            $uyeler=json_encode ($json_result);
            echo $uyeler;
            mysqli_close($connect);
        }
        else
        {
            header ('Content-Type: application/json');
            echo json_encode (array("Error"=>"Bad Request"));
            header ('HTTP 1.1 403 Bad Request');
        }
}
?>
