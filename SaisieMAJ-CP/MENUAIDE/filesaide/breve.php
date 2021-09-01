<?php

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
$n[1]=$n[1].".html";
}
$fichier3=$n[1];
$n[2]=str_replace("&lt;", "<", $n[2]);
$n[2]=str_replace("&gt;", ">", $n[2]);
//on écrit un première fois dans le fichier
$op_file3 = fopen($fichier3,"w+");

fwrite($op_file3,$n[2]);

fclose($op_file3);






//puis on réouvre et on vire les anti slashs
$contenu = fread(fopen($fichier3, "r"), filesize($fichier3));

$contenu = stripslashes($contenu);
$contenu = str_replace ( "><" , ">\n<" , $contenu ); 


$op_file3 = fopen($fichier3,"w+");
fwrite($op_file3,$haut);
fwrite($op_file3,$contenu);
fwrite($op_file3,$bas);
fclose($op_file3);
};
/*
if($Indic[2]!=0){// si les onglets sont cachés (ie on travaille encapsulé dans une page avec un seul fichier désigné par lacible), alors on ne recharge pas le module saisie
// on le recharge seulement si onglet =1
echo "<script language=\"javascript\">setTimeout('parent.parent.location.href=\"../MODIFaide.html?lacible=".$Indic[1]."&onglet=".$Indic[2]."\"',250)</script>";
}else{

echo "<script language=\"javascript\">setTimeout('parent.frames.fichaide.location.href=\"".$n[1]."\"',250)</script>";
}
*/

echo "<script language=\"javascript\">setTimeout('parent.location.href=\"../../MENUchantier.html?modif=1&pane=".$pane."\"',250)</script>";
?>