<?php

$n=$_REQUEST['N'];
$Indic=$_REQUEST['Z'];
 $nb_valeurs=count($n);
if($nb_valeurs>=0 & $n[1]!=""){// protection anti robot google -> jusqu'à la fin du code
include("../A-MANAGER-local/Controle/Sauv/sauv.php");

include("entetes.php");
$array1=array("30"); // cas modification d'hypertexte : on sauvegarde la version antécédante de l'hypertexte
$array2=array("29");  // cas création d'hypertexte : on sauvegarde le fichier de registre menuARTICLES.js

if($Indic[0]==1){
	sauv($file,$array1);	
} else{

	sauv($file,$array2);
}


if($n[1]!="")
{
$fichier3="../HYPERTEXTES-articles/cartO-".$n[1]."-encaps.htm";
$n[2]=str_replace("&lt;", "<", $n[2]);
$n[2]=str_replace("&gt;", ">", $n[2]);
$n[2]=str_replace('>" ></span','></span', $n[2]);

$n[2]=str_replace(">' ></span","></span", $n[2]);
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

fwrite($op_file3,$contenu);

fclose($op_file3);









if($Indic[0]==0){

$fichier2="../menuARTICLES.js";
$op_file2=fopen($fichier2,"a+");// ajout en fin de fichier
fwrite($op_file2,"menuencapsA[menuencapsA.length]=\"".$n[1]."\";\n");
fwrite($op_file2,"listpubcartovisionA[listpubcartovisionA.length]=1;\n\n");
fclose($op_file2);


};
};

echo "<script language=\"javascript\">top.frames.Num0txt.location.href=\"".$fichier3."\"</script>";


}

?>