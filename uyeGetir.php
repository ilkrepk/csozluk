<?php
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    include 'connect.php';
    uyeGetir();
}

function uyeGetir()
{
    global $connect;
    if(isset($_GET['email']))
    {
        $mail=$_GET['email'];
        $query="SELECT * from uyeler INNER JOIN rutbe on uyeler.Rid=rutbe.Rid WHERE Email='$mail'";
        $result = mysqli_query($connect,$query);
        $number_of_rows = mysqli_num_rows($result);
        $temp_array = array();

        if($number_of_rows > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $temp_array[]=$row;
            }
            $json_result = array("uye" => $temp_array);
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
}
?>
