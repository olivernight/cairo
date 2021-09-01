<?php

$rep = $_POST['rep'];
$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];
$n[2]=str_replace("\n", "", $n[2]);

include("../A-MANAGER-local/Controle/Sauv/sauv.php");

$array1=array("21");
$array2=array("18","21");
$array3=array("12");
$array4=array("12","14");

if($Indic[0]==1){
	sauv($file,$array2);	
} else if($Indic[0]==2){
	sauv($file,$array1);
} else if($Indic[0]==3){
	sauv($file,$array3);	
} else if($Indic[0]==4){
	sauv($file,$array4);
}


//echo "<script language=\"javascript\">alert(\"".$Indic[0]."\")</script>";
if($n[1]!="")
{
if($Indic[0]==1 || $Indic[0]==2){//cas modif de page web simple
include("entetes.php");
$fichier3="page-".$n[1]."-Site.htm";}
if($Indic[0]==3 or $Indic[0]==4){//cas de la création de page  hyper texte de commande de carte à partir d'un page existante ou d'une modif
include("../PageWebIliadeligne/entetes.php");//entête hypertexte
$fichier3="cartO-".$n[1]."-encaps.htm";}
//echo ' '.$fichier3.' ';
//$n[2]=str_replace("&lt;", "<", $n[2]);
//$n[2]=str_replace("&gt;", ">", $n[2]);
//$n[2]=str_replace('>" ></span','></span', $n[2]);
//$n[2]=str_replace('>" &gt;</span','></span', $n[2]);
//$n[2]=str_replace(">' &gt;</span","></span", $n[2]);
//$n[2]=str_replace(">' ></span","></span", $n[2]);
$op_file3=fopen($fichier3,"w+");
fwrite($op_file3,$haut);

fwrite($op_file3,$n[2]);
fwrite($op_file3,$bas);
fclose($op_file3);

//on réouvre et on enlèves les antislash
//$contenu = fread(fopen($fichier3, "r"), filesize($fichier3));
$contenu = file_get_contents($fichier3);
$contenu = stripslashes($contenu);

$op_file3 = fopen($fichier3,"w+");
//fwrite($op_file3,$haut);
fwrite($op_file3,$contenu);
//fwrite($op_file3,$bas);
fclose($op_file3);



//echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"".$fichier3."\"</script>";

};



if($Indic[0]==2){//cas de création de page web simple
$fichier2="ItemMenu.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"ItemMenu[ItemMenu.length]=\"".$n[1]."\";\n");// ou bien "_blank"
fwrite($op_file2,"listpagevision[listpagevision.length]=1;\n");
fwrite($op_file2,"Xtarget[Xtarget.length]='_top';\n");
fwrite($op_file2,"LienItemMenu[LienItemMenu.length]=\"pageA1.html\";\n");
fwrite($op_file2,"TitreItemMenu[TitreItemMenu.length]=\"".$n[1]."\";\n\n");
fclose($op_file2);
};
if($Indic[0]==3){//cas de création de page web hypertexte à partir d'un hypertexte existant
$fichier2="menuencapsuleslocal-Site.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"\n");
fwrite($op_file2,"menuencaps[menuencaps.length]=\"".$n[1]."\";\n");
fwrite($op_file2,"rangliste[rangliste.length]=1;\n");
fwrite($op_file2,"listpubcartovision[listpubcartovision.length]=1;\n\n");
fclose($op_file2);
};
//if($Indic[0]==3){}// cas de la modif d'un hypertexte parmis ceux crées spécifiquement pour le site

chmod ($fichier3, 0777);

echo "<script language=\"javascript\">top.document.getElementById(\"editici\").style.visibility=\"hidden\"</script>";
//
if($Indic[0]==3 || $Indic[0]==4){
echo "<script language=\"javascript\">setTimeout('top.frames.Num0txt.location.href=\"".$fichier3."\"',500)</script>";
}
//
echo "<script language=\"javascript\">var ici=top.location.href;var topXici=ici.indexOf('pageA1',0);var topXla=ici.indexOf('index',0);if(topXici>0 || topXla>0){setTimeout('top.frames.frametexte.location.href=\"".$fichier3."\"',1500)}</script>";

echo "<script language=\"javascript\">setTimeout('top.frames.editla.location.href=\"ecrit_hypertext.html\"',1600)</script>";
?>