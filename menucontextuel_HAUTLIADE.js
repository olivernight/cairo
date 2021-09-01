
//<!--
//PLF- http://www.jejavascript.net/
var colorbg = "#FFFFFF"//"#CCCCCC"; //couleur de fond
var colorlien = "#000000"; //couleur du texte
var colorsel = "gray"//"#0000CC"; //couleur selection
var taillebg = 150 //largeur du menu
var menutexte = new Array;
var menulien = new Array;
var menutarget = new Array;
// MENU
menutexte[0]= "<img src='cir_jaune.gif' border='0' width='15' height='15'><span style='font-familiy:arial;font-weight:bold;font-size:11px;color:black'> Si possible</span>"
menulien[0]= "javascript:attribcouleurpostit(1)"
menutarget[0]=""//"_self"


menutexte[1]= "<img src='cir_vert.gif' border='0' width='15' height='15'><span style='font-familiy:arial;font-weight:bold;font-size:11px;color:black'> Important</span>"
menulien[1]= "javascript:attribcouleurpostit(2)"
menutarget[1]=""//"_self"

menutexte[2]= "<img src='cir_bleu.gif' border='0' width='15' height='15'><span style='font-familiy:arial;font-weight:bold;font-size:11px;color:black'>  Très important</span>"
menulien[2]= "javascript:attribcouleurpostit(3)"
menutarget[2]=""//"_self"

menutexte[3]= "<img src='carretransparent.gif' border='1' width='15' height='15'><span style='font-familiy:arial;font-weight:bold;font-size:11px;color:black'>  je ne sais pas</span>"
menulien[3]= "javascript:attribcouleurpostit(4)"
menutarget[3]=""//"_self"

/*

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
*/
var Xx
var Yy
function positionX(p)
{
if(document.all){
//alert()
position_x = event.clientX-200//(navigator.appName.substring(0,3) == "Net") ? p.pageX : event.x+document.body.scrollLeft;
position_y = event.clientY//(navigator.appName.substring(0,3) == "Net") ? p.pageY : event.y+document.body.scrollTop;
}else{

position_x = (navigator.appName.substring(0,3) == "Net") ? p.pageX : event.x+document.body.scrollLeft;
position_y = (navigator.appName.substring(0,3) == "Net") ? p.pageY : event.y+document.body.scrollTop;
}
//alert(Xthis.id)
}
function indicou1(){indicouvici=0}
var indicouvici=0
function ouvrir_menu(event){
indicouvici=1
setTimeout('indicou1()',5)
if(document.all){
document.getElementById("menu_context").style.top = Yy+"px";
document.getElementById("menu_context").style.left = Xx+"px";
document.getElementById("menu_context").style.visibility = "visible";

}else{
document.getElementById("menu_context").style.top = position_y+"px";
document.getElementById("menu_context").style.left = position_x+"px";
document.getElementById("menu_context").style.visibility = "visible";
}
document.getElementById("menu_context").onmouseup=fermer_menu
return false ;
}
function fermer_menu(){

if(indicouvici==0){

//alert("fermer")
//if (document.getElementById)
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
