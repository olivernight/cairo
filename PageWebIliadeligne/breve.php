<?php

$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];
$nb_valeurs=count($n);
if($nb_valeurs>=0 & $n[1]!=""){// protection anti robot google -> jusqu'à la fin du code

include("entetes.php");

include("../A-MANAGER-local/Controle/Sauv/sauv.php");

$array1=array("13");// cas de modification : sauvegarde le fichier antécédant
$array2=array("10","11");// cas de création d'un nouvel hypertexte : sauvegarde les deux fichiers de registre menuencapsulesILIADE.js et menuencapsulesreduitILIADE.js 
if($Indic[0]==1){
	sauv($file,$array1);	

} else{
	sauv($file,$array2);
}

if($n[1]!="")
{
$fichier3="../HYPERTEXTES-tous/cartO-".$n[1]."-encaps.htm";

$n[2]=str_replace("&lt;", "<", $n[2]);
$n[2]=str_replace("&gt;", ">", $n[2]);
$n[2]=str_replace('>" ></span','></span', $n[2]);
//$n[2]=str_replace('>" &gt;</span','></span', $n[2]);
//$n[2]=str_replace(">' &gt;</span","></span", $n[2]);
$n[2]=str_replace(">' ></span","></span", $n[2]);
echo $n[2];
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




//echo "<script language=\"javascript\">top.indica0()</script>";




if($Indic[0]==0){

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

echo "<script language=\"javascript\">top.rechargeMenuHypertexte()</script>";
};
};

$rd=rand();

echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"".$fichier3."?rd=".$rd."\"</script>";
//echo "<script language=\"javascript\">window.location.href=\"SaisieCartoVision.htm\"</script>";
}

?>