
//<!--
//PLF- http://www.jejavascript.net/
var colorbg = "#CCCCCC"; //couleur de fond
var colorlien = "#000000"; //couleur du texte
var colorsel = "#0000CC"; //couleur selection
var taillebg = 150 //largeur du menu
var menutexte = new Array;
var menulien = new Array;
var menutarget = new Array;
// MENU
menutexte[0]= "<img src='flechg.gif' border='0' width='11' height='11'>Page pr&eacute;c&eacute;dente"
menulien[0]= "javascript:history.go(-1)"
menutarget[0]="_self"
menutexte[1]= "<img src='flechd.gif' border='0' width='11' height='11'>Page suivante"
menulien[1]= "javascript:history.go(1)"
menutarget[1]="_self"
menutexte[2]= ""
menulien[2]= ""
menutarget[2]=""
menutexte[3]= "Mes Pages"
menulien[3]= ""
menutarget[3]=""
menutexte[4]= "Page1"
menulien[4]= "page1.htm"
menutarget[4]="_self"
menutexte[5]= "Page2"
menulien[5]= "page2.htm"
menutarget[5]="_self"
menutexte[6]= "Liens Externes"
menulien[6]= ""
menutarget[6]=""
menutexte[7]= "La cuisine de ma Copine"
menulien[7]= "http://www.lacuisinedemacopine.net/"
menutarget[7]="_blank"
function positionX(p,c,d)
{

position_x = (navigator.appName.substring(0,3) == "Net") ? p.pageX : event.x+document.body.scrollLeft;
position_y = (navigator.appName.substring(0,3) == "Net") ? p.pageY : event.y+document.body.scrollTop;
position_x+=c
position_y+=d
}

function indicou1(){indicouvici=0}
var indicouvici=0
function ouvrir_menu()
{
indicouvici=1
setTimeout('indicou1',5)
document.getElementById("menu_context").style.top = position_y+"px";
document.getElementById("menu_context").style.left = position_x+"px";
document.getElementById("menu_context").style.visibility = "visible";
return false ;
}
function fermer_menu()
{
if(indicouvici==0){
if (document.getElementById)
{
document.getElementById("menu_context").style.top = 0+"px";
document.getElementById("menu_context").style.left = 0+"px";
document.getElementById("menu_context").style.visibility = "hidden";
}
}
}
function menu_sel(selec, lienmenu)
{
if(selec == 1)
{
lienmenu.style.background = colorsel;
lienmenu.style.color = colorbg;
}
else
{
lienmenu.style.background =colorbg;
lienmenu.style.color = colorlien;
}
}
//if(navigator.appName.substring(0,3) == "Net"){document.captureEvents(Event.MOUSEMOVE);}
//-->
