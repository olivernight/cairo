<HTML>
<head>
 <TITLE>paramcarte</TITLE>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <script language="javascript" >
  var ZENOM=new Array()
  </script>
<?php
$alea=mt_rand();
echo '<script language="javascript" src="CODE_NOMS.js?updated='.$alea.'"></script>';
?>
<script language="javascript">
var Xnombredaires=ZENOM.length-1

function transXNbaires(){return Xnombredaires}
transHL=top.frames.Num0.transHLecran("return transHL")
var HFrame=transHL[1]//505;
var LFrame=transHL[0]//838;
var listeLegNappes=new Array() // liste des nom de groupe dans le svg correspondant aux couches graphiques dites nappes
var listeAddContoursSVG=new Array()
var menuAreas=new Array()
var para =new Array()
var DATAlieux=new Array()
var DATAimagesfond=new Array()
var paramHISTOX0=new Array() //temporaire pour la phase de programmation
var paramreglage=new Array()
var menuImageText=new Array()
var paramHISTOX1=new Array()
var xcv
var rg
var DATAvalidit=new Array()
var DataUnion=new Array()
var menuValidit=new Array()
var Gcoord0=new Array()
var Gcoord02=new Array()
var paramCARTE=new Array()
var mappocoord=new Array()
var menuSujet=new Array()
var menuOther=new Array()
var menuIconeEchelle=new Array()
var menuIconeSup=new Array()
var menuCouchesSupl=new Array()

var base0 = new Array()
var datahistomulti = new Array
var Ax
var Bx
var Cx
var Dx
function boucleline(){
}



function Nouvelle(a){
this.donnees=a;
//alert("nouvelle")
}
var minx=600000000000
var miny=600000000000
var maxx=-600000000000
var maxy=-600000000000
function ajouter(a){

base0[base0.length]=new Nouvelle(a)
var coourant=base0[base0.length-1].donnees.split(',')
//alert("courant="+coourant)
if(parseFloat(coourant[1])<minx){minx=parseFloat(coourant[1])}
if(parseFloat(coourant[2])<miny){miny=parseFloat(coourant[2])}
if(parseFloat(coourant[1])>maxx){maxx=parseFloat(coourant[1])}
if(parseFloat(coourant[2])>maxy){maxy=parseFloat(coourant[2])}

}
var MaxMin=new Array()
function retourneMaxMin(){
MaxMin[0]=minx
MaxMin[1]=miny
MaxMin[2]=maxx
MaxMin[3]=maxy
return MaxMin
}
function transbase(){
var trabas=base0

return trabas
}
function numdata(){
numdatax=top.frames.Num0.frames.couches.zam2.numix("return numx")

datahistomulti=base0[numdatax].donnees.split(',')
return datahistomulti
}


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------
var base02 = new Array()
var datahistomulti = new Array
var Ax2
var Bx2
var Cx2
var Dx2
function boucleline(){
}



function Nouvelle2(a){
this.donnees=a;
//alert("nouvelle")
}

function ajouter2(a){

base02[base02.length]=new Nouvelle2(a)
}

function transbase2(){
var trabas2=base02

return trabas2
}

</script>
<?php
$alea=mt_rand();
echo '<script  language="JavaScript" src="listeLegNap.js?updated='.$alea.'"></script>
<script  language="JavaScript" src="DATA-imagesfond.js?updated='.$alea.'"></script>
<script  language="JavaScript" src="images1/DATA-lieux.js?updated='.$alea.'"></script>
<script  language="JavaScript" src="DATA-validit.js?updated='.$alea.'"></script>
<script  language="JavaScript" src="DATA-menuValidit.js?updated='.$alea.'"></script>
<!--script  language="JavaScript" src="DATA-ligneSVG.js"></script-->

<script language="javascript" src="DATA-Sujet.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-Other.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-IcoSujet.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-IcoOther.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-ImageText.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-couchesSupl.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-mappocoord.js?updated='.$alea.'"></script>
<script language="javascript" src="DATA-Union.js?updated='.$alea.'"></script>
<script language="javascript" src="listeAdditifContoursSVG.js?updated='.$alea.'"></script>';
?>
<!--script language="javascript" src="DATA-SVG.js"><!/script-->
<script language="javascript">
</script>
<script language="javascript">
//mappocoord[8]=parseInt(mappocoord[8])+1
</script>
<script language="javascript">
function translisteLegNappes(){ //appelée par 
return listeLegNappes
}
function retournelisteAddContoursSVG(){
return listeAddContoursSVG
}
function transDATAlieux(){
return DATAlieux
}

function transDATAimagesfond(){
return DATAimagesfond
}

function transDATAvalidit(){
return DATAvalidit
}
function transmenuValidit(){
return menuValidit
}
function transmenuAreas(){

return menuAreas
}

function transparamreglage(){
return paramreglage
}
function transmenuImageText(){
return menuImageText
}
function transparamHISTOX0(){
return paramHISTOX0
}
function transparamCARTE(){
return paramCARTE
}
function transma(){
return mappocoord
}
function transmenuSujet(){
return menuSujet
}
function transmenuOther(){
return menuOther
}
function transmenuIconeEchelle(){
return menuIconeEchelle
}
function transmenuIconeSup(){
return menuIconeSup
}
function transmenuCouchesSupl(){
return menuCouchesSupl
}
function transDATASVG(){
return Gcoord0
}
function transDATAligneSVG(){ // pour les lignes des couches et contours SVG
return Gcoord02
}

function transDATAUNION(){
return DataUnion
}
</script>
<?php
$alea=mt_rand();
echo '<script language="javascript" src="correctifcoord.js?updated='.$alea.'"></script>';
?>
<script language="javascript">

//-----------------------DECLENCHEMENT DU CHARGEMENT DES MENUS PILOTES ET CARTES
top.frames.Num0.frames.datacarte.location.href="../datacarte.html"
top.frames.Num0.document.getElementById("lieux").height=0
top.frames.Num0.document.getElementById("themes").height=0
top.frames.Num0.document.getElementById("images1").height=0
top.frames.Num0.document.getElementById("imagesfond").height=0
if(mappocoord[9]=="1"){
top.frames.Num0.document.getElementById("lieux").height=22
top.frames.Num0.frames.lieux.location.href="../lieux.html"
}
if(mappocoord[10]=="1"){
top.frames.Num0.frames.imagesfond.location.href="../imagesfond.html"
top.frames.Num0.document.getElementById("imagesfond").height=22
}

</script>

<body BGCOLOR="#FFFFFF" >


<?php
$alea=mt_rand();
echo '<script id="svg2" language="JavaScript" src="DATA-SVG2.js?updated='.$alea.'"></script>';
?>


</body >
</HTML>
