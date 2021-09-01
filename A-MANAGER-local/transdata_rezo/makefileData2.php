<?php
$REP=$_REQUEST['R'];//dossier carte
$N=$_REQUEST['N'];//contenu du fichier de données texte
$F=$_REQUEST['F'];//complémentaire ou principal
$K=$_REQUEST['K'];//selecteur : 1=téléchargement des données du fichier .txt sans synchronisation   2 : synchronisation des données .html->.txt et téléchargement
$Z=$_REQUEST['Z'];//type d'enregistrement : 0=effacement, 1=entêtehaut, 2=entregistrement, 3=entêtebas
$file2="../../".$REP[0]."/datafiles/".$F[0].".txt";
if($REP!=""){// anti robots
$Fich=$F[0].".txt";
if($K[0]==2){//2 : synchronisation des données .html->.txt
include("../txt_to_html-Num0/entetes.php");


include("../Controle/Sauv/sauv.php");
$array=array("33");
sauv($file,$array);


/*

echo '<script type="text/javascript" >alert("'.$fichier.'")</script>';
$op_file=fopen($fichier,"w+");



fwrite($op_file,$N[0]);


fclose($op_file);

*/


//on réouvre et on enlèves les antislash


$file1="../../".$REP[0]."/".$F[0].".html";
//echo '<script type="text/javascript" >alert("'.$file2.'")</script>';
//echo '<script type="text/javascript" >alert("'.$file1.'")</script>';
//$contenu = fread(fopen($file1, "r"), filesize($file1));
//$contenu = stripslashes($contenu);
$contenu = file_get_contents($file1);

$contenu=str_replace("\r\n","xx@xx",$contenu);
$contenu=str_replace("\r","\n",$contenu);//cas mac;
$contenu=str_replace("xx@xx","\n",$contenu);

$haut=str_replace("\r\n","xx@xx",$haut);
$haut=str_replace("\r","\n",$haut);//cas mac;
$haut=str_replace("xx@xx","\n",$haut);

$bas=str_replace("\r\n","xx@xx",$bas);
$bas=str_replace("\r","\n",$bas);//cas mac;
$bas=str_replace("xx@xx","\n",$bas);
//-------------------------------------------------------------------------------------------------
$hautX='<html id="GaÃ¯aMundi AlterCarto.com"><head>';
$hautY='<html id="GaiaMundi AlterCarto.com"><head>';
$contenu=str_replace($hautX,$hautY,$contenu);
//------------------------------------------------------------------------------------------------
$contenu=str_replace($haut."\n","",$contenu);
$contenu=str_replace("\n".$bas,"",$contenu);

$contenu=str_replace(",","\t",$contenu);



$contenu=str_replace('"','',$contenu);
//$contenu=str_replace("0);\n","0\n",$contenu);// fins de ligne
$contenu=str_replace(");","",$contenu);

$contenu=str_replace("\n\n","",$contenu);// cas des fins de ligne des fichiers mals formés et autres sauts de lignes isolés



$tableau = explode("\n", $contenu);
$occurences = count($tableau)-1;

//echo '<script type="text/javascript" >alert("'.$occurences.'")</script>';
for($i=0;$i<$occurences+1;$i++){
$contenu=str_replace("base00[".$i."]=new Array(","",$contenu);

}




$op_file2 = fopen($file2,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);












}
//echo '<script type="text/javascript" >open("'.$file2.'")</script>';
echo '<html><head></head><body><a id="ahref" href="'.$file2.'" target="_blank">xx</a><script type="text/javascript" >
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