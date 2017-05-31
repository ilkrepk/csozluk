<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'connect.php';
	insertUyeler();
}

function insertUyeler(){
	global $connect;
	
	if(isset($_POST["ad"]) && isset($_POST["soyad"]) && isset($_POST["email"]) && isset($_POST["dtarih"]) && isset($_POST["sifre"]) && isset($_POST["sifredogrula"])){
		
		$Ad = $_POST["ad"];
		$Soyad = $_POST["soyad"];
		$Email = $_POST["email"];
		$D_Tarihi = $_POST["dtarih"];
        $Sifre = $_POST["sifre"];
        $Sifredogrula = $_POST["sifredogrula"];
        $Cinsiyet = "";
	}
	
	else{
		header("HTTP/1.1 POST 200 OK.");
		die("An HTTP error 400 (invalid request) occurred.");
	}
	if($Sifre==$Sifredogrula)
    {
        $query = "INSERT INTO uyeler (Ad, Soyad, Sifre, Email, D_Tarihi, Cinsiyet) values ('$Ad','$Soyad','$Sifre','$Email','$D_Tarihi', '$Cinsiyet');";
        mysqli_query($connect, $query) or die (mysqli_error($connect));
        mysqli_close($connect);
    }
    else
    {
        echo"şifreler uyuşmuyor";
    }

}
?>