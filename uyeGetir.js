$(document).ready(function(){
    var deger=$("#hiddenmail").text();
    var url="uyeGetir.php?email=".concat(deger);
    $.get(url, function(data, status){
        var decoder = new TextDecoder('utf-8');
        $("#ad").text(data.uye[0].Ad);
        $("#soyad").text(data.uye[0].Soyad);
        $("#email").text(data.uye[0].Email);
        $("#basarim").text(data.uye[0].Basarim);
        $("#yarissayisi").text(data.uye[0].YarisSayisi);
        $("#winsayisi").text(data.uye[0].WinSayisi);
        $("#rutbe").text(data.uye[0].RutbeAdi);
    });
});