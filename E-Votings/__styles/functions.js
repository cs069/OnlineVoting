var a=1;
var b=["__styles/vote1.jpg","__styles/vote2.jpg","__styles/vote3.jpg"];
var Location=320;
var c=0;
var d=0;
var e=true;
var h2=["What is E-voting","How to vote online?","Create an account to vote!","And many more"]
$(document).ready(function()
{
onload=slid;
function slid()  {setTimeout(pip,1000);}
function pip()   { $("div#sliding__imgs").fadeIn(500);setTimeout(pip2,10000);}
function pip2()  { $("div#sliding__imgs").fadeOut(700, function() { setTimeout(pip3,100);}); slid();}
function pip3()  { $("div#sliding__imgs img").attr("src",b[a]);a++; if(a===3) a=0;}

setInterval(function() {
$("div#PiC__cont .imageslider").animate({'margin-top':'-='+Location+'px'},1000); c++; if(c===3) {c=0; if(Location>0) Location=-320; else if(Location<0) Location=320;} 
},5000);
setInterval(function()
{  $("div#HEa__DER h2").fadeOut(400, function() { $(this).html(h2[d]);$(this).fadeIn(400)});if(e)d++; else d--; if(d===3){e=false}; if(d===0){e=true;}}
,5000)

});

 
