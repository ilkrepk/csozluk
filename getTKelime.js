$(document).ready(function(){
    $("#cevir").click(function(){
        var secim=document.getElementById("secim").innerHTML;
        var deger=$("#kelime").val();
        if(secim=='Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Türkçe')
        {
            var url="getTKelime.php?istek=".concat(deger);
            $.get(url, function(data, status){
                var decoder = new TextDecoder('utf-8');
                var text="";
                if(data.sayi<1)
                {
                    $("#sonuc").html("Kelime Bulunamadı...");
                }
                else
                {
                    for (var i = 0; i < data.sayi; i++)
                    {
                        if(i==data.sayi-1)
                        {
                            text += data.kelimeler[i].TKelime;
                        }
                        else
                        {
                            text += data.kelimeler[i].TKelime + ",<br/>";
                        }
                    }
                    $("#sonuc").html(text);
                }
            });
        }
        else
        {
            var url="getCKelime.php?istek=".concat(deger);
            $.get(url, function(data, status){
                //alert("Data: " + data + "\nStatus: " + status);

                var decoder = new TextDecoder('utf-8');
                var text="";
                if(data.sayi<1)
                {
                    $("#sonuc").html("Kelime Bulunamadı...");
                }
                else
                {
                    for (var i = 0; i < data.sayi; i++)
                    {
                        if(i==data.sayi-1)
                        {
                            text += data.kelimeler[i].CKelime;
                        }
                        else
                        {
                            text += data.kelimeler[i].CKelime + ",<br/>";
                        }
                    }
                    $("#sonuc").html(text);
                }
            });
        }


    });
});