﻿<?php

$haut="<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr-fr\">
<head>


  <link rel=\"stylesheet\" type=\"text/css\" title=\"normal\" media=\"screen\" href=\"../style.css\">
<style type=\"text/css\">
	/* CSS for the demo. CSS needed for the scripts are loaded dynamically by the scripts */

body {
	background-image: url('' );
      	background-attachment: fixed;
			background-repeat: repeat-x;
			/*background-color: #E6EEF4;*/
color:black;
font-family:Arial;
margin:0;
padding:2;
width:95%;

}
a:link {
color:white;
}

</style>

  
  <title>cartO-Monde1-encaps.htm</title>
  <meta http-equiv=\"Content-type\" content=\"text/html; charset=UTF-8\">

  
  <meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\">
  <script language=\"javascript\" >
 
  
  </script>
    <script language=\"javascript\" src=\"../menuARTICLES.js\"></script>
  <script language=\"javascript\">
//---------------------------------------------------------------//initialisation sur le carte n°x
var choixcarte=0 //N° de la carte à l'ouverture de la page. La fonction d'ouverture est située en bas de page : \"top.document.getElementById('Num0').src='cartO2encapsule.htm\" . Si elle n'est pas activée , elle est précédée de \"//\"
//--------------------------------------------------------------------
var ili=top.location.href
ili=ili.indexOf(\"encaps\",0)

function azimuttexte(){
if(ili<0){
var bl=\"\"
if(document.getElementById(\"blabla\")){}else{
bl='<span id=\"blabla\" style=\"color: white;\">'
for(i=0;i<500;i++){
bl+=\"bla \"
}
bl+=\"</span>\"


}

if(document.getElementById(\"transpdiv\")){}else{
var inertextbody=document.getElementById(\"bod\").innerHTML
inertextbody=\"<span id='innertranspdiv'><img id='transp' src='../carretransparent.gif' style='width:470px;height:1px;;float:left'>\"+inertextbody+\"</span>\"
inertextbody+=bl
inertextbody=\"<div class='textearticle'  id='transpdiv' style='position:absolute;top:15px;textalign:left;'>\"+inertextbody+\"</div>\"





document.getElementById(\"bod\").innerHTML=inertextbody
document.getElementById('transp').style.height='413px';
}
}
}


function xxx(){// appellée par onload dans la balise body de la page de texte qui commande la carte

carte()
fond()
icone()
fi()
encadre()
//netoiantislash()
//-----function indexation des métabalises aux cartes
balayagenodes()
choixcartela=top.frames.Num0.returnchoixcartela(\"return choixcartela\")
if(choixcartela!=0){if(choixcartela!=choixcarte){carteencours=0;cartajust(choixcarte)}} 
//si la carte en cours au mement de l'ouverture de cette page est différente de 0, alors vérifier si carteeencours est égale à la première carte indéxée sur cette page. Si c'est égal, ne rien faire, si c'est différent , ouvrir la première carte de cette page
top.frames.Num0.transchoixcartela() // actualise choixcarte dans cart02encapsule.htm dans la frames Num0 du top






top.positioncache()


}
function som(){
//alert(menuencapsA)

var targetici=''
var O0='<center><dt id=\"idsommaire\">';
var O=''
var j=0
var urltop2=window.location.href
var urltop=top.location.href
if(urltop2.indexOf('Sommaire',0)>0){
O='<font size=4>Sommaire</font><br><br>'
if(urltop.indexOf('encaps',0)>0){targetici='_blank'}else{targetici='_top'}

for(i=0;i<menuencapsA.length;i++){


if(listpubcartovisionA[i]=='1'){



j=i+1
O+='<a href=\"../A0A-Page texte carto.htm?hypertext='+menuencapsA[i]+'\" target=\"'+targetici+'\" style=\"color:blue\">'
O+=j

O+='-'
O+=menuencapsA[i]
O+='</a><br>'


}
}
var O1='</dt></center>'
var textici=document.getElementsByTagName(\"body\")[0].innerHTML
if(textici.indexOf('<dt id=\"idsommaire\">')>=0){
document.getElementById('idsommaire').innerHTML=O
}else
{






document.getElementsByTagName(\"body\")[0].innerHTML=O0+O+O1+\"<br>\"+textici

}
}
}
  </script>
  
  <script language=\"javascript\" src=\"../metalanguage.js\"></script>
  
  <script language=\"javascript\">
  </script>
</head>


<body id=\"bod\"  style=\"font-family:arial;font-size:12px;padding:20px;padding-left:20px;padding-right:0px\" onload=\"azimuttexte();setTimeout('som()',250);setTimeout('xxx()',1000)\" onscroll=\"top.heightscroll();\"> "  ;//<br><br><br><center><dt id=\"idsommaire\"></dt></center>



$bas="</body></html>";


?>