<?php

$haut="<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr-fr\">
<head>

<META http-equiv=\"Cache-Control\" content=\"no-cache\">
<META http-equiv=\"Pragma\" content=\"no-cache\">
<META http-equiv=\"Expires\" content=\"0\"> 
  

  
  <title>cartO-".$n[1]."-encaps.htm</title>
  <meta http-equiv=\"Content-type\" content=\"text/html; charset=UTF-8\">

  
  <meta http-equiv=\"Content-Script-Type\" content=\"text/javascript\">

  
  <script language=\"javascript\">
//---------------------------------------------------------------//initialisation sur le carte n°x
var choixcarte=0 //N° de la carte à l\'ouverture de la page. La fonction d\'ouverture est située en bas de page : \"top.document.getElementById(\'Num0\').src=\'cartO2encapsule.htm\" . Si elle n\'est pas activée , elle est précédée de \"//\"
//--------------------------------------------------------------------
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
//si la carte en cours au mement de l\'ouverture de cette page est différente de 0, alors vérifier si carteeencours est égale à la première carte indéxée sur cette page. Si c\'est égal, ne rien faire, si c\'est différent , ouvrir la première carte de cette page
top.frames.Num0.transchoixcartela() // actualise choixcarte dans cart02encapsule.htm dans la frames Num0 du top
}

  </script>
  
  <script language=\"javascript\" src=\"../metalanguage.js\"></script>
  
  <script language=\"javascript\">
  </script>
</head>


<body style=\"background-color: rgb(255, 255, 255);font-family:arial;font-size:11px\"  alink=\"white\" link=\"white\" vlink=\"white\" onload=\"setTimeout('xxx()',1000)\">";



$bas="</body></html>";


?>