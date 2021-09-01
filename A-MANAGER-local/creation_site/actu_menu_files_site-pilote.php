<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">

/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
</script>
<?php

$REP = urldecode( $_GET['REP'] );
$m=$_REQUEST['M'];//raffraichissement des fichier
$l=$_REQUEST['L'];//listpublication
$n=$_REQUEST['N'];// 
$r=$_REQUEST['R'];// 
$p=$_REQUEST['P'];// 


$m2=array();
$l2=array();
$n2=array();
$r2=array();
$p2=array();

// Traitement de la liste :  classement par rang croissant avec les ans rang à la fin
/*
for($i=1;$i<count($n);$i++){

}

*/
if(count($n)>0 ){// protection anti robot google
// enregistrement de la liste
$repertoiredepart="../../HYPERTEXTES-tous/";
$repertoireDestination ="../../";
/*
$nom="cartO-Sommaire-Site-".$REP."-encaps.htm";
copy($repertoiredepart.$nom,$repertoireDestination.$nom);
*/
	
include("../Controle/Sauv/sauv.php");
$array=array("26");
sauv($file,$array);		

$fichier3="../../menuencapsules-Site.js";
$op_file3=fopen($fichier3,"w+");
fwrite($op_file3,"var listpubcartovision=new Array();var rangliste=new Array(); \n");
fwrite($op_file3,"var menuencaps=new Array();\n\n");
fwrite($op_file3,"menuencaps[menuencaps.length]=\"Sommaire\";\n");
fwrite($op_file3,"listpubcartovision[listpubcartovision.length]=1;\n");
fwrite($op_file3,"rangliste[rangliste.length]=1;\n\n");

for($i=1;$i<count($n)+1;$i++){
if($m[$i]==1 or $m[$i]=="1"){
$m[$i]=1;
}else{
$m[$i]=0;
}
if($r[$i]>0){
}else{
$r[$i]=0;
}

if($p[$i]==1){// boucle sur coprésence
if($m[$i]==1){// raffraichissement
//echo'<script language="javascript">alert("'.$m[$i].'")</script>

$nom="cartO-".$n[$i]."-encaps.htm";
copy($repertoiredepart.$nom,$repertoireDestination.$nom);
}
fwrite($op_file3,"menuencaps[menuencaps.length]=\"".$n[$i]."\";\n");
if($r[$i]>0){
$l[$i]=1;
}else{
$l[$i]=0;
}

fwrite($op_file3,"listpubcartovision[listpubcartovision.length]=".$l[$i].";\n");
fwrite($op_file3,"rangliste[rangliste.length]=1;\n\n");//".($r[$i])."
}
}

fclose($op_file3);
//echo"<script type='text/javascript'>setTimeout(\"open('../../A-Frame-Num0-cartO2-17-ILIADE 2.htm')\",1500)</script>";

$fichierici="../../A-Frame-Num0-cartO2-17-ILIADE 2.htm";
echo '<html><head></head><body><a id="ahref" href="'.$fichierici.'" target="_blank">xx</a><script type="text/javascript" >
var strChUserAgent = navigator.userAgent

function click_me(element)
 {
  
 if(strChUserAgent.indexOf("Firefox") >=0) 
 {//pour ff

  window.open(document.getElementById("ahref").href,document.getElementById("ahref").target);
   }
  else
   
   {//pour chromium et autres 

    var evt = document.createEvent("MouseEvents"); // créer un évennement souris
    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);  // intiailser l\'évennement déja crée par un click
    var cb = document.getElementById(element); // pointe sur l\'élement
    cb.dispatchEvent(evt);  // envoyer l\'évennement vers l\'élement
   }
 }
 var aici="ahref"
 setTimeout("click_me(aici)",1500)
 </script>';








echo"<script type='text/javascript'>setTimeout(\"window.location.href='../../vide.htm'\",1700)</script>";

}
?>
</font>

</body>
</html>
