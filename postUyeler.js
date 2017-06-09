$(document).ready(function(){
    $("#kayitOl").click(function(){
        var Ad = $('#fn').val();
        var Soyad = $('#ln').val();
        var Email = $('#mail').val();
        var D_Tarihi = $('#dtarih').val();
        var Sifre = $('#inputPassword').val();
        var Sifredogrula = $('#againPassword').val();
        var Cinsiyet = $('#selectbasic').val();
        if(Sifre==Sifredogrula)
        {
            $.post("insertUyeler.php",{Ad:Ad,Soyad:Soyad,Email:Email,D_Tarihi:D_Tarihi,Sifre:Sifre,Sifredogrula:Sifredogrula,Cinsiyet:Cinsiyet }, function(data, status){
                //alert("Data: " + data + "\nStatus: " + status);
            });
            window.location.href="araf.php";
        }
        else
        {
            alert("Şifreler Uyuşmuyor");
        }

    });

});