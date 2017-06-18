var i=-1;
var dCevap=0;
var yCevap=0;
var dogruCevap;
$(document).ready(function(){
    var Email = $("#mail").html();
    $.get("getYaris.php?Email="+Email, function(data, status){
        alert(data.YarisId);
        window.YarisId = data.YarisId;
        function sonrakiSoru()
        {
            $("#s1").text("");
            $("#s2").text("");
            $("#s3").text("");
            $("#s4").text("");
            $("#soru").text("");
            var email=$('#mail').text;
            console.log(email);
            i++;
            if(i<5)
            {
                var soru=("'"+data.kelimeID[i][0].TKelime+"'"+" kelimesinin Çerkesce karşılığı aşağıdakilerden hangisidir.");
                $("#soru").text(soru);
                dogruCevap= Math.floor(Math.random() * 4) + 1;
                switch (dogruCevap)
                {
                    case 1 :
                        $("#s1").text(data.kelimeID[i][1].CKelime);
                        break;
                    case 2 :
                        $("#s2").text(data.kelimeID[i][1].CKelime);
                        break;
                    case 3 :
                        $("#s3").text(data.kelimeID[i][1].CKelime);
                        break;
                    default :
                        $("#s4").text(data.kelimeID[i][1].CKelime);
                        break;
                }
                for(var j=2; j<=4;j++)
                {
                    if($("#s1").text()=="")
                    {
                        $("#s1").text(data.kelimeID[i][j].CKelime);
                    }
                    else if($("#s2").text()=="")
                    {
                        $("#s2").text(data.kelimeID[i][j].CKelime);
                    }
                    else if($("#s3").text()=="")
                    {
                        $("#s3").text(data.kelimeID[i][j].CKelime);
                    }
                    else if($("#s4").text()=="")
                    {
                        $("#s4").text(data.kelimeID[i][j].CKelime);
                    }
                    else
                    {
                        break;
                    }
                }
            }
            else if(i>=5 && i<10)
            {

                var soru=("'"+data.kelimeID[i][0].CKelime+"'"+" kelimesinin Çerkesce karşılığı aşağıdakilerden hangisidir.");
                $("#soru").text(soru);
                dogruCevap= Math.floor(Math.random() * 4) + 1;
                switch (dogruCevap)
                {
                    case 1 :
                        $("#s1").text(data.kelimeID[i][1].TKelime);
                        break;
                    case 2 :
                        $("#s2").text(data.kelimeID[i][1].TKelime);
                        break;
                    case 3 :
                        $("#s3").text(data.kelimeID[i][1].TKelime);
                        break;
                    default :
                        $("#s4").text(data.kelimeID[i][1].TKelime);
                        break;
                }
                for(var j=2; j<=4;j++)
                {
                    if($("#s1").text()=="")
                    {
                        $("#s1").text(data.kelimeID[i][j].TKelime);
                    }
                    else if($("#s2").text()=="")
                    {
                        $("#s2").text(data.kelimeID[i][j].TKelime);
                    }
                    else if($("#s3").text()=="")
                    {
                        $("#s3").text(data.kelimeID[i][j].TKelime);
                    }
                    else if($("#s4").text()=="")
                    {
                        $("#s4").text(data.kelimeID[i][j].TKelime);
                    }
                    else
                    {
                        break;
                    }
                }
            }
            else
            {
                var dogruSayısı="Doğru Cevap Sayısı : "+dCevap;
                var dogruSayısı="Yanlış Cevap Sayısı: "+yCevap;
                $("#dCevap").text();
                $("#yCevap").text("Yanlış Cevap Sayısı: "+yCevap);
                //window.location = "testSonuc.php?dogru="+ dCevap + "&yanlis=" + yCevap;
                $.extend(
                    {
                        redirectPost: function(location, args)
                        {
                            var form = $('<form></form>');
                            form.attr("method", "post");
                            form.attr("action", location);

                            $.each( args, function( key, value ) {
                                var field = $('<input></input>');

                                field.attr("type", "hidden");
                                field.attr("name", key);
                                field.attr("value", value);

                                form.append(field);
                            });
                            $(form).appendTo('body').submit();
                        }
                    });
                var redirect = 'testSonuc.php';
                $.redirectPost(redirect, {dogru: dCevap, yanlis: yCevap, YarisId: window.YarisId});
                //---------- doğrucevap sayisi ve email'i postYsonuc.php sayfasına post etme.
                /*$.extend(
                    {
                        redirectPost: function(location, args)
                        {
                            var form = $('<form></form>');
                            form.attr("method", "post");
                            form.attr("action", location);

                            $.each( args, function( key, value ) {
                                var field = $('<input></input>');

                                field.attr("type", "hidden");
                                field.attr("name", key);
                                field.attr("value", value);

                                form.append(field);
                            });
                            $(form).appendTo('body').submit();
                        }
                    });
                var postET = 'postYsonuc.php';
                $.redirectPost(postET, {dogruSayisi: dCevap, mail: Email});*/
                alert(dCevap + " " + yCevap + " " + Email +  " " + window.YarisId);
                $.post("postYsonuc.php",{dogruSayisi:dCevap,mail:Email, YarisId:window.YarisId}, function(data, status){
                    //alert("Data: " + data + "\nStatus: " + status);
                    alert(data);
                });
                //--------------

            }
        }
        sonrakiSoru();

        $("#s1").click(function() {
            if(dogruCevap==1)
            {
                dCevap++;
            }
            else
            {
                yCevap++;
            }
            sonrakiSoru();
        });
        $("#s2").click(function() {
            if(dogruCevap==2)
            {
                dCevap++;
            }
            else
            {
                yCevap++;
            }
            sonrakiSoru();
        });
        $("#s3").click(function() {
            if(dogruCevap==3)
            {
                dCevap++;
            }
            else
            {
                yCevap++;
            }
            sonrakiSoru();
        });
        $("#s4").click(function() {
            if(dogruCevap==4)
            {
                dCevap++;
            }
            else
            {
                yCevap++;
            }
            sonrakiSoru();
        });
    });
});


