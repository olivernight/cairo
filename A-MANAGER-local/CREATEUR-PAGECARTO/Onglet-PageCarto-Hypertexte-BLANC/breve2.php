﻿<?php

$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];



include("entetes.php");

if($n[1]!="")
{
if($Indic[0]==0){//cas de création de fichier : ajout dans la liste 
$fichier2="listeaide.js";
$op_file2 = fopen($fichier2,"a+");



$liste="\n"."liste[liste.length]=\"".$n[1]."\";\n";
fwrite($op_file2,$liste);
fclose($op_file2);
};







if($Indic[0]==0){
//$n[1]=$n[1].".html";
}
$fichalea=array();
//$fichier3=$n[1];//"../../../TEMP/temp.html";//'../../../../../../perimetres-maternelles 123 2012/PageCartoDossier-BLANC/PageCarto/hypertexte.htm'   //
$fichalea=explode('?', $n[1]);

$fichier3=$fichalea[0];
//echo '<script language="javascript">alert("'.$fichier3.'")</script>';

$op_file3 = fopen($fichier3,"w+");
//
//if(is_string($fichier3)){echo "<script language=\"javascript\">alert('".$fichier3."')</script>";}
$n[2]=str_replace("&lt;", "<", $n[2]);
$n[2]=str_replace("&gt;", ">", $n[2]);
//on écrit un première fois dans le fichier


fwrite($op_file3,$n[2]);

fclose($op_file3);






//puis on réouvre et on vire les anti slashs
//$contenu = fread(fopen($fichier3, "r"), filesize($fichier3));
$contenu =file_get_contents($fichier3);
$contenu = stripslashes($contenu);

$contenu = str_replace(">", ">\n", $contenu);

$op_file3 = fopen($fichier3,"w+");
fwrite($op_file3,$haut);
fwrite($op_file3,$contenu);
fwrite($op_file3,$bas);
fclose($op_file3);

//copy($fichier3,$n[1]);
};
//echo "<script language=\"javascript\">;alert('".$Indic[1]."')</script>";
echo "<script language=\"javascript\">;setTimeout('parent.parent.frames.pagecarto.frames.hypertexte.location.href=\"../../../".$Indic[1]."/PageCartoDossier-BLANC/PageCarto/hypertexte.htm?alea=\"+Math.random()',150)</script>";
echo "<script language=\"javascript\">setTimeout('parent.location.href=\"SaisieMAJ-CP/MENUchantier.html?LISTEJS=../../../../../../".$Indic[1]."/PageCartoDossier-BLANC/PageCarto/hypertexte.htm?alea=\"+Math.random()',250)</script>";
?>