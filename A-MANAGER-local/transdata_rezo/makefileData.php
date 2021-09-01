<?php
$REP=$_REQUEST['R'];//dossier carte
$N=$_REQUEST['N'];//contenu du fichier de données texte
$F=$_REQUEST['F'];//complémentaire.txt ou principal.txt
$K=$_REQUEST['K'];//selecteur : 1=téléchargement des données du fichier .txt sans synchronisation   2 : synchronisation des données .html->.txt et téléchargement
if($REP!=""){// anti robots
$fichier="../../".$REP[0]."/datafiles/".$F[0];
if($K[0]==2){//2 : synchronisation des données .html->.txt



include("../Controle/Sauv/sauv.php");
$array=array("33");
sauv($file,$array);




echo '<script type="text/javascript" >alert("'.$fichier.'")</script>';
$op_file=fopen($fichier,"w+");



fwrite($op_file,$N[0]);


fclose($op_file);
}
//echo '<script type="text/javascript" >window.open("'.$fichier.'")</script>';
echo '<html><head></head><body><a id="ahref" href="'.$fichier.'" target="_blank">xx</a><script type="text/javascript" >
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
 click_me("ahref")
 </script>';


echo '<script type="text/javascript" >window.location.href="../../IdCodesEtNoms.html?mtp2=admin"</script>';
}
?>