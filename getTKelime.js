$(document).ready(function(){
    $("#cevir").click(function(){
        var icerikbasic_addon3=document.getElementById("basic-addon3").innerHTML;
        var deger=$("#kelime").val();
        if(icerikbasic_addon3=='Çerkesce<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>Türkçe')
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
                        text += data.kelimeler[i].TKelime + "<br/> <span>--------------------------------------------------------------------------------------------------------------------</span><br/>";
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
                        text += data.kelimeler[i].CKelime + "<br/> <span>--------------------------------------------------------------------------------------------------------------------</span><br/>";
                    }
                    $("#sonuc").html(text);
                }
            });
        }


    });
});