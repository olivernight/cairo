<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<head>

<META http-equiv="Cache-Control" content="no-cache">
<META http-equiv="Pragma" content="no-cache">
<META http-equiv="Expires" content="0"> 
  

 <TITLE>pilote</TITLE>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript">


<script language="javascript" >
var topX=top.location.href
var microsite=topX.indexOf("Site-",0)
var tipX=topX.indexOf("texte",0)// Cas Textes et Notes

topX=topX.indexOf("encaps.",0)
var matriceSVG=top.retournecreateurSVG("return createurSVG")
var transHL=top.frames.Num0.transHLecran("return transHL")
var HFrame=transHL[1]//505;
var LFrame=transHL[0]//838;




var indicouvcarte=0
var ert="vide.htm"
legendex="legend0.jpg"
var mapX=new Array();

</script>
<?php
$alea=mt_rand();
echo '<script src="mapsILIADE.js?updated='.$alea.'"></script>';
?>
 
<script language="javascript" >

var maptitre=""
var parametrescarte=new Array()
var DATACARTE="vide.htm"
var DATACARTEtemp="vide.htm"
var REPERTOIRE=""
var REPERTOIREtemp=""
var Menusujet
var XXX
var histog
//var trdat2
var trdat1
var ICD=0
var adressDATA=""
var FICHIERzeroDATAX=""
var subjectselect=""
var zam2Lx=200
var zam2Hx=200
var zam2L
var zam2H
var Titremap=""
var initleg=0
var CHOIXLEG=0
var ka1=0
var ka2=0
var ka3=0
var  visiondata=0
var initout=0
var indicdim0
var interdimL
var interdimH
var zam2L0=0//200
var zam2H0=0//210
var menu2name="sujet"
var menu3name="divers"
var carteinitiale=0
var SEL1
var SEL2
var SEL3
var SEL4
var SEL5
var SEL6
var SEL7
var SEL8
var SEL9
var SEL10
var selmenusujet
var fondcarte
var numerocarte=0
var numerocartetemp=0
var repcarte=0

//top.frames.Num0.frames.couches.location.href="carte.htm"

function transinitout(){
return initout
}


function ouvdatacarte(){
var val="repertoire="+REPERTOIRE


top.frames.Num0.frames.paramcarte.location.href=REPERTOIRE+"/PARAMCARTE.html?HF="+HFrame+"&LF="+LFrame

}


function ka2initial(){
ka2=top.frames.Num0.frames.datacarte.transka20("return ka20");

}
function retourneDATACARTE(){
return DATACARTE
}
function retourneREPERTOIRE(){
return REPERTOIRE
}
function recupparametrescarte(){ 

parametrescarte=top.frames.Num0.frames.datacarte.transparametrescarte("return parametrescarte0")

if(parametrescarte[2]>100){top.frames.Num0.frames.iconeencadre.location.href=parametrescarte[1]+"?alea="+Math.random();top.frames.Num0.frames.datacarte.inittestbasesup();}else{
top.frames.Num0.frames.iconeencadre.location.href=parametrescarte[0]+"?alea="+Math.random();top.frames.Num0.frames.datacarte.inittestbaseechelle();  //base de donn�es � l'ouverture de la carte
}
Titremap=parametrescarte[4]
top.frames.Num0.frames.couches.zatitre.location.href="bandotitre.htm"
}
function returnICD(){
var ICD0=ICD
return ICD0
}

function retournefondcarte(){
return fondcarte
}

function rien2(){
carteinitiale=0
}
function rien(){
}


var change0='<iframe id="zoom"  src="couche1photo.htm" name="zoom" ALLOWTRANSPARENCY="true"  width='
change0+=LFrame+3
change0+=' height='
change0+=HFrame
change0+=' style="border:0px;padding:0px;" scrolling="no" FRAMEBORDER=1 ></iframe>';





var change1=""

function changeX(){
//visioTOUTDATA()
dimhisto0()
change1=change0
return change1
}

function visioTOUTDATA(){
//alert("pilote visiotoutdta")
if(initout==1){
if(visiondata==0){
top.frames.Num0.frames.couches.hiddentoutDATA()
}
else{
top.frames.Num0.frames.couches.visibletoutDATA()
}
}
initout=1
}


function menuzero(){


}


//_________________________________TEXTE_________________________________________
function texte(){

change0='<iframe id="zoom" src="texte.htm" name="zoom" ALLOWTRANSPARENCY="true" FRAMEBORDER=1   width=803 height=470 style="border:0px;padding:0px;scrolling:1" ></iframe>'

top.frames.Num0.frames.couches.location.href="carte2.htm";

Titremap=""
top.frames.Num0.frames.couches.document.getElementById("zatitre").style.width=0
top.frames.Num0.frames.couches.document.getElementById("mobile2").style.height=0
top.frames.Num0.frames.couches.document.getElementById("zam2").style.height=0
top.frames.Num0.frames.couches.document.getElementById("zoom").scrolling="yes"
legendex="legend0.jpg"
//initlegende()
REPERTOIREtemp=REPERTOIRE
}
//_________________________________CARTES_et �chelles_______________________________________________________

function indicouvcarte1(){
indicouvcarte=1
}
function transindicouvcarte(){
return indicouvcarte
}

function changeECHELLE(){

if(REPERTOIRE!=REPERTOIREtemp){repcarte=0}

if(repcarte!=1){carteinitiale=0}

REPERTOIREtemp=REPERTOIRE
//repcarte=1 //
if (carteinitiale==0){

indicouvcarte=0
ouvdatacarte()
if(matriceSVG=="oui"){change0='<table  style="border:1px solid #D3DAED"><tr><td><iframe id="zoom"  style="background-color:#BABCFF" src="coucheUNIQUE createurSVG.htm" name="zoom" ALLOWTRANSPARENCY="true" FRAMEBORDER=0 SCROLLING="no" width='}else{
change0='<table  style="border:1px solid #D3DAED"><tr><td><iframe id="zoom"  style="background-color:#BABCFF" src="coucheUNIQUE.htm" name="zoom" ALLOWTRANSPARENCY="true" FRAMEBORDER=0 SCROLLING="no" width='}
change0+=LFrame//838
change0+=' height='
change0+=HFrame//505
change0+=' style="border:0px;padding:0px;" ></iframe></td></tr></table>';

visiondata=1   //-------------=1 active les ar�as de la carte et  =0 d�sactive les ar�as
ICD=parametrescarte[2]; ka2=parametrescarte[3];  //--------------position du curseur dans le menu sujet � l'ouverture. (ka2 doit coorespodre � la position dans le menu de la fonction index�e par ICD)
ka3=0        //--------------position du cursuer dans le  menu OTHER DATA � l'ouverture de l acarte

carteinitiale=1
}else{ // changements d'�chelle - n'a pas de fonction dans le cas g�n�ral. reste de la version 0. conserv� au cas o� la question se pose de nouveau de g�rer des �chelle sans recharger les donn�es
top.frames.Num0.frames.couches.frames.zoom.transDATA()
top.frames.Num0.frames.couches.frames.zoom.document.getElementById("imagecarte").src=fondcarte

carteinitiale=1
}

}


//______________________________________________choix des donn�es  et fixation de la l�gende ad'hoc------



function initlegende(){
//top.frames.Num0.frames.couches.za.location.href="legende.htm?"+legendex
}


function transdata1(){
trdat1=top.frames.Num0.frames.precarte.transbase("return trabas")
}
function transdata2(){

//trdat2=trdat1
return trdat1
}




//----transfert des dimensions de la frame zam2 ->affichage des donn�es qui ne sont pas histogramme
//_________________________________________________________________________________________________


function dimhisto0(){
indicdim0=1

}
//-------trabnsfert adresse du fichier indiquant le sujet � l'ouverture d'une carte

function Lzam2transfert(){
zam2Lx=top.frames.Num0.frames.datacarte.retourneLzam2("return Lzam20")
indicdim0=top.frames.Num0.frames.couches.zoom.NoDatdim("return NoDat")

if(indicdim0==0){zam2L=zam2L0}else{zam2L=zam2Lx}

return zam2L
}
function Hzam2transfert(){
zam2Hx=top.frames.Num0.frames.datacarte.retourneHzam2("return Hzam20")
indicdim0=top.frames.Num0.frames.couches.zoom.NoDatdim("return NoDat")
if(indicdim0==0){zam2H=zam2H0}else{zam2H=zam2Hx}

return zam2H
}



function FICHIERzero(){
var esw=top.frames.Num0.frames.datacarte.retournefichier0("return FICHIERzeroDATAX")
var FICHIERzeroDATAX=esw
ADRESSfichier0=FICHIERzeroDATAX
return ADRESSfichier0
}

//-------------------------------------transfert titre de la map choisie--
function transfertTitremap(){
return Titremap
}
var indicvalidit
var indicvaliditcarte
//___________________________________________ TACHE DE FOND DANS l'affectation de donn�es______
function changeXFOND(){
//trdat1=top.frames.Num0.frames.iconeencadre.transbase0("return trabas0")
transdata1() //transfert les donn�es "base" du fichier data vers ici
top.frames.Num0.frames.pilote.top.frames.Num0.frames.couches.zoom.RXXED() //transfert les donn�es "base" d'ici vers le fichier carte et map
top.frames.Num0.frames.pilote.top.frames.Num0.frames.couches.zoom.recupadres0() //r�cup��re le r�pertoire et caract�rise le type de l'icone encadr� affich� � l'iuverture de la carte
top.frames.Num0.frames.pilote.top.frames.Num0.frames.couches.zoom.transDATA() //l'indicateur NoDAT , (n� des aires de la carte= identificateur de la carte) �tant � 0 cette fonction charge les variables dans couche2 (frames zoom)

//alert("Xfond pilote")
top.frames.Num0.frames.pilote.top.frames.Num0.frames.couches.zoom.carte() //d�clecnche l'affichae des donn�es dans l'icone encadre (avec NODAT =0 , � l'amor�age, cela affiche le fichier 0 qui indique le titre de la donn�e)
top.frames.Num0.frames.pilote.top.frames.Num0.frames.couches.indic1() //d�clenche l'initialisation de l'indicateur DEF dans carte.htm, indicateur qui sert � discriminer les mouvements des clicks sur la carte
indicvaliditcarte=top.frames.Num0.frames.datacarte.transindicvaliditcarte("return indicvaliditcarte") // indicateur mobolis�  dans le cas des changement de validit�s
if(indicvaliditcarte==1){top.frames.Num0.frames.datacarte.carteapplique();indicvaliditcarte=0}
}

</script>
</head>
<!//_________________________________________________BODY__________________________________________>
<body BGCOLOR="#FFFFFF" onload="javascript:menuzero()">

<script language="javascript">
if(document.all){ 
document.write("<div style='left:0;top:0;visibility:visible;position:absolute'>")
}
else{
document.write("<div style='left:0;top:-15;visibility:visible;position:absolute'>")
}
</script>
<table>
<TR>
<TD>



<!-- DEBUT DU SCRIPT MENU DEROULANT--------------MAPS-->

<script>
//alert(mapX.length)
</script>
<form NAME="menu">
<p ><b><font face="Arial" size="3" color="#400080"></font></b><select title="pour re-initialiser une carte,cliquez sur 'Cartes' puis réactivez la carte désirée" NAME="popup"
onChange="change_site();" onmouseover="if(document.all){top.frames.Num0.frames.couches.zoom0()}"  style="background-color:#EFF2F9;border:0; color:gray;width:230px" size="1" >
<option VALUE="javascript:rien2()" >&nbsp;Cartes (cliquez ici pour réinitialiser une carte)</option><script >
var rgj=0
for(i=1;i<mapX.length+1;i=i+5){
var disp="block"
if(libelmap[(i-1)/5][5]=="none"){disp="none"}else{rgj+=1}
document.write('<option style="display:'+disp+'" VALUE="javascript:top.BL();legendex=')
document.write("'")
document.write(mapX[i+3]+"/"+mapX[i-1])
document.write("'")
document.write(';fondcarte=')
document.write("'")
if(matriceSVG=="oui"){document.write(mapX[i+3]+"/CARTOSVG matrice.svg")}else{
document.write(mapX[i+3]+"/"+mapX[i])}
document.write("'")
document.write(';DATACARTE=')
document.write("'")

document.write("datacarte.html")//mapX[i+1]
document.write("'")
document.write(';REPERTOIRE=')
document.write("'")
document.write(mapX[i+3])
document.write("'")
if(mapX[i+3]=="TEXTE"){
document.write(';texte()')

document.write('" >'+rgj+' ('+((i-1)/5+1)+')-'+mapX[i+2]+'</option>')}else{
document.write(';changeECHELLE()" title="n° dans le registre interne : ('+((i-1)/5+1)+')">'+rgj+' -'+mapX[i+2]+'</option>')}
}
</script>


</select> </p>

</form>
<script>
//alert(mapX)
function changecarteiciX(a){
//alert("changecarteiciX")
//top.rediminfocarte()
document.menu.popup.selectedIndex=a

change_site()
}
function changecarteici(a){

document.menu.popup.selectedIndex=top.frames.Num0.transchoixcartela("return choixcartela")

change_site()

}

function change_site() {
initout=1
var site = document.menu.popup.selectedIndex;

if(site==0){numerocarte=numerocartetemp}else{numerocartetemp=site;numerocarte=site}

if(topX>=0){top.menuBar.hideSubMenus()}

if(tipX>0 & numerocarte>0){top.chargerecherccastix()}// cas Textes et Notes

if(microsite>0){
var edt=top.frames.editla.location.href
edt=edt.indexOf("ecrit_hypertext.html",0)

if(edt>=0 & site!=0){
if(top.frames.editla.boutonhidden){
top.frames.editla.boutonhidden()

top.frames.editla.document.getElementById("cartu").style.visibility="visible"
top.frames.editla.document.getElementById("encadru").style.visibility="visible"
}
}
}
//alert(" n°option menu cate dans pilote = "+site)
//top.BL();

{

window.location.href =
document.menu.popup.options[site].value;

if(site==0){document.menu.popup.selectedIndex=0}else{document.menu.popup.selectedIndex=site}
if(site==0){ka1=0;repcarte=0}else{ka1=site}
}
if(matriceSVG=="oui"){

top.determinerep(REPERTOIRE)
}

}

function retNUMEROcarte(){
//alert("pilote numerocarte= "+numerocarte)
//numerocarte=document.menu.popup.selectedIndex;
return numerocarte}

</script>


</TD>
<TD width=2>
</TD>
<TD>

<!--------------------------------------------------MENU Sujet------------------------->
<script>


function change_site22() {
var fenetreouv=top.frames.Num0.transfenetre("return fenetre")
if(fenetreouv=="cartO2" ){
//var site = top.frames.SUJET.document.menu22.popup22.selectedIndex;
//var topX=top.location.href.substr(top.location.href.length-11,11)

if(topX>=0){
var site = top.frames.Num0.frames.pilote.framemenu.document.menu22.popup22.selectedIndex;}else{

site=top.frames.SUJET.document.menu22.popup22.selectedIndex;
top.frames.OTHER.document.menu3.popup3.selectedIndex=0;
}
}else{
var site = top.frames.Num0.frames.pilote.framemenu.document.menu22.popup22.selectedIndex;
}
{
top.frames.Num0.frames.pilote.framemenu.document.location.href =
top.frames.Num0.frames.pilote.framemenu.document.menu22.popup22.options[site].value;
ka3=0; k2=site;top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.selectedIndex=ka3
}
}

</script>


<!--------------------------------------------------MENU OTHER DATAS------------------------->

<script>
function change_site3() {
var fenetreouv=top.frames.Num0.transfenetre("return fenetre")

if(fenetreouv=="cartO2" ){
//var site = top.frames.OTHER.document.menu3.popup3.selectedIndex;
//var topX=top.location.href.substr(top.location.href.length-11,11)
if(topX>=0){
var site = top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.selectedIndex;}else{


//var site = top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.selectedIndex;

site=top.frames.OTHER.document.menu3.popup3.selectedIndex;

top.frames.SUJET.document.menu22.popup22.selectedIndex=0;
//alert("pilote iliade icicici site="+site)
}
}else{
var site = top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.selectedIndex;
}
{

top.frames.Num0.frames.pilote.framemenu1.document.location.href =
top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.options[site].value;
ka2=0; ka3=site;top.frames.Num0.frames.pilote.framemenu.document.menu22.popup22.selectedIndex=ka2
}
}

function razselectindex(a){//commendé par Menu Sujet ou Menu Other
document.menu.popup.selectedIndex=ka1
//alert("a="+a+"  ka2="+ka2)
//if(a>100 & ka2>100){top.frames.Num0.frames.pilote.framemenu1.document.menu3.popup3.selectedIndex=parseInt(ka2)-100;}

//if(a<100 & ka2<100){top.frames.Num0.frames.pilote.framemenu.document.menu22.popup22.selectedIndex=ka2;}
}
</script>
</TD>
</TR>
</table>
<BR>
<BR><BR><BR>
<p>salut les copains</p>

</div>
<script language="javascript">
if(document.all){
document.write("<div id='menupos' style='left:280;top:0;visibility:visible;position:absolute'>")
}else{
document.write("<div id='menupos' style='left:282;top:0;visibility:visible;position:absolute'>")
}
</script>
<iframe id="framemenu" name="framemenu" src="vide.htm" width=250 height=30 NORESIZE SCROLLING="no" MARGINWIDTH=0 MARGINHEIGHT=0 FRAMEBORDER=0>
</iframe>
</DIV>
<script language="javascript">
if(document.all){
document.write("<div id='menupos1' style='left:490;top:0;visibility:visible;position:absolute'>")
}else{
document.write("<div id='menupos1' style='left:565;top:0;visibility:visible;position:absolute'>")
}
</script>
<iframe id="framemenu1" name="framemenu1" src="vide.htm" width=250 height=30 NORESIZE SCROLLING="no" MARGINWIDTH=0 MARGINHEIGHT=0 FRAMEBORDER=0>
</iframe>
</DIV>

<script language="javascript">
top.frames.Num0.frames.couches.location.href="carte.htm"
//alert("ici")
//top.frames.Num0.frames.couches.carto()

</script>
</body >

</HTML>

