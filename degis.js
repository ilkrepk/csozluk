window.onload = function()
{
    var secim=document.getElementById("secim");
    secim.onclick=degis;
    var sayac=0;
    function degis() {
        if(sayac==0)
        {
            document.getElementById("basic-addon3").innerHTML="Türkçe<span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>Çerkesce";
            sayac=1;
        }
        else
        {
            document.getElementById("basic-addon3").innerHTML="Çerkesce<span class='glyphicon glyphicon-menu-right' aria-hidden='true'></span>Türkçe";
            sayac=0;
        }
        console.log(sayac);
    }
}