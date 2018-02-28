<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'connect.php';
	login();
}
function login(){
	global $connect;

	if(isset($_POST["Sifre"]) && isset($_POST["Email"]) )
	{
		$Sifre = $_POST["Sifre"];
		$Email = $_POST["Email"];
		
		$query="SELECT * FROM uyeler WHERE Email = '$Email'  AND Sifre = '$Sifre'";
		
        $result = mysqli_query($connect,$query);
        $number_of_rows = mysqli_num_rows($result);
		$temp_array = array();
		$response = array();
			if($number_of_rows > 0)
			{
				$response ["success"] = false;
				while($row = mysqli_fetch_assoc($result))
				{
					$temp_array[]=$row;
				}
				header ('Content-Type: application/json');
				echo json_encode (array("kullanici"=>$temp_array,"success"=>$response));
				mysqli_close($connect);
			}
			else
			{
				header ('Content-Type: application/json');
				$response ["success"] =true;
				echo json_encode (array("success"=>$response));
				
				mysqli_close($connect);
			}
	}
}
?>