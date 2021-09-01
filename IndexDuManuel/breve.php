<?php
$k=$_REQUEST['K'];
$r=$_REQUEST['R'];
$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];
//echo "<script language=\"javascript\">alert(\"".$n[1]."\")</script>";
//echo "<script language=\"javascript\">alert(".$n[2].")</script>";
//echo $n[2];
$n[2]=str_replace("\n", "", $n[2]);
if($n!=""){

//echo "<script language=\"javascript\">alert(\"".$Indic[0]."\")</script>";
if($n[1]!="")
{

//if($Indic[0]==3 or $Indic[0]==4){//cas de la création de page  hyper texte de commande de carte à partir d'un page existante ou d'une modif

$fichier3=$r[0]."/".$n[1].".html";
//}

$op_file3=fopen($fichier3,"w+");


fwrite($op_file3,$n[2]);

fclose($op_file3);

//on réouvre et on enlèves les antislash
$contenu = fread(fopen($fichier3, "r"), filesize($fichier3));
$contenu = stripslashes($contenu);

$op_file3 = fopen($fichier3,"w+");
//fwrite($op_file3,$haut);
fwrite($op_file3,$contenu);
//fwrite($op_file3,$bas);
fclose($op_file3);





};
/*

if($Indic[0]==3){//cas de création de page web hypertexte à partir d'un hypertexte existant
$fichier2=$r[0]."/menuencapsuleslocal-liste.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"\n");
fwrite($op_file2,"menuencaps[menuencaps.length]=\"".$n[1]."\";\n");
fwrite($op_file2,"rangliste[rangliste.length]=\"".$k[0]."\";\n");
fwrite($op_file2,"listpubcartovision[listpubcartovision.length]=1;\n\n");
fclose($op_file2);
};
*/


echo "<script language=\"javascript\">setTimeout('window.location.href=\"index.php\"',1600)</script>";
}
?>