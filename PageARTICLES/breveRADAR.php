<?php

$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];


/*
include("entetes.php");



*/

if($n[1]!="")
{
$fichier3="../RADARHypertexte/rad/".$n[1];
$n[2]=str_replace("<br>", "\n", $n[2]);
//$n[2]=str_replace("&lt;", "<", $n[2]);
//$n[2]=str_replace("&gt;", ">", $n[2]);
//$n[2]=str_replace('>" ></span','></span', $n[2]);
//$n[2]=str_replace('>" &gt;</span','></span', $n[2]);
//$n[2]=str_replace(">' &gt;</span","></span", $n[2]);
//$n[2]=str_replace(">' ></span","></span", $n[2]);
$op_file3=fopen($fichier3,"w+");
//fwrite($op_file3,$haut);
fwrite($op_file3,$n[2]);
//fwrite($op_file3,$bas);
fclose($op_file3);
/*
//on réouvre et on enlèves les antislash
$contenu = fread(fopen($fichier3, "r"), filesize($fichier3));
$contenu = stripslashes($contenu);

$op_file3 = fopen($fichier3,"w+");
//fwrite($op_file3,$haut);
fwrite($op_file3,$contenu);
//fwrite($op_file3,$bas);
fclose($op_file3);
*/

//echo "<script language=\"javascript\">top.ModifHypertexteR()</script>";
echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"../ecrit_hypertextRADAR.html?radar=RADARHypertexte/".$fichier3."\"</script>";
//echo "<script language=\"javascript\">top.indica0()</script>";
};



if($Indic[0]==0){
/*
echo "<script language=\"javascript\">top.alert1()</script>";
$fichier4="../menuencapsulesreduitILIADE.js";
$op_file4=fopen($fichier4,"a+");// ajout en fin de fichier
fwrite($op_file4,"menuencaps[menuencaps.length]=\"".$n[3]."\";\n");
fwrite($op_file4,"listpubcartovision[listpubcartovision.length]=1;\n\n");
fclose($op_file4);

$fichier2="../menuencapsulesILIADE.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"menuencaps[menuencaps.length]=\"".$n[1]."\";\n");
fwrite($op_file2,"listpubcartovision[listpubcartovision.length]=1;\n\n");
fclose($op_file2);
*/

};



chmod ($fichier3, 0777);
//echo "<script language=\"javascript\">window.location.href=\"SaisieCartoVision.htm\"</script>";


?>