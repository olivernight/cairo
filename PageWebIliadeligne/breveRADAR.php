<?php

$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];
$nb_valeurs=count($n);
if($nb_valeurs>=0 & $n[1]!=""){// protection anti robot google -> jusqu'à la fin du code
include("../A-MANAGER-local/Controle/Sauv/sauv.php");

$array1=array("20");//cas de modif : on sauvegarde  la version antécédante du fichier de radar
$array2=array("19");// cas de création d'un nouvel hypertexte : on sauvegarde le registre listeradar.js

if($Indic[0]==1){
	sauv($file,$array1);	
} else{
	sauv($file,$array2);
}

if($n[1]!="")
{
$fichier3="../RADARHypertexte/rad/".$n[1].".js";
$n[2]=str_replace("<br>", "\n", $n[2]);
$n[2]=stripslashes($n[2]);

$op_file3=fopen($fichier3,"w+");

fwrite($op_file3,$n[2]);

fclose($op_file3);





if($Indic[0]==0){

$fichier2="../RADARHypertexte/rad/listeradar.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"listeRADAR[listeRADAR.length]=\"".$n[1].".js\";\n");

fclose($op_file2);
echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"../vide.html\"</script>";
}else{
echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"../ecrit_hypertextRADAR.html?radar=RADARHypertexte/".$fichier3."\"</script>";

};
};




}
?>