$(document).ready(function () {
    var url = "gettopList.php";
    $.get(url, function (data, status) {
        var tur = new Array("success", "danger", "info", "warning", "active", "success", "danger", "info", "warning", "active");
        var kayit_sayisi = data.sayi;
        if (kayit_sayisi < 10) {
            for (var i = 0; i < kayit_sayisi; i++) {
                $("#flag").append("<tr class='" + tur[i] + "'><td>" + (i + 1) + "</td> <td>" + data.uye[i].Ad + "</td> <td>" + data.uye[i].Soyad + "</td><td>" + data.uye[i].Basarim + "</td> <td>" + data.uye[i].RutbeAdi + "</td></tr>");

            }
        }
        else {
            for (var i = 0; i < 10; i++) {
                $("#flag").append("<tr class='" + tur[i] + "'><td>" + (i + 1) + "</td> <td>" + data.uye[i].Ad + "</td> <td>" + data.uye[i].Soyad + "</td><td>" + data.uye[i].Basarim + "</td> <td>" + data.uye[i].RutbeAdi + "</td></tr>");
            }
        }
        /*
         $("#ad").text(data.uye[0].Ad);
         $("#soyad").text(data.uye[0].Soyad);
         $("#email").text(data.uye[0].Email);
         $("#basarim").text(data.uye[0].Basarim);
         $("#yarissayisi").text(data.uye[0].YarisSayisi);
         $("#winsayisi").text(data.uye[0].WinSayisi);
         $("#rutbe").text(data.uye[0].RutbeAdi);*/
    });
});