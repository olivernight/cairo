<?php
$REP=$_REQUEST['R'];//dossier carte
$N=$_REQUEST['N'];//contenu du fichier de donn�es texte
$F=$_REQUEST['F'];//compl�mentaire.txt ou principal.txt
$K=$_REQUEST['K'];//selecteur : 1=t�l�chargement des donn�es du fichier .txt sans synchronisation   2 : synchronisation des donn�es .html->.txt et t�l�chargement
if($REP!=""){// anti robots
$fichier="../../".$REP[0]."/datafiles/".$F[0];
if($K[0]==2){//2 : synchronisation des donn�es .html->.txt



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

    var evt = document.createEvent("MouseEvents"); // cr�er un �vennement souris
    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);  // intiailser l\'�vennement d�ja cr�e par un click
    var cb = document.getElementById(element); // pointe sur l\'�lement
    cb.dispatchEvent(evt);  // envoyer l\'�vennement vers l\'�lement
   }
 }
 click_me("ahref")
 </script>';


echo '<script type="text/javascript" >window.location.href="../../IdCodesEtNoms.html?mtp2=admin"</script>';
}
?>