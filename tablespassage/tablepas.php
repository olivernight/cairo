<?php
//Saise des brèves

$site=$_REQUEST['E'];
$site=$_REQUEST['S'];
$n=$_REQUEST['N'];
$t=$_REQUEST['T'];
$b=$_REQUEST['B'];
$m=$_REQUEST['M'];
$nb_valeurs=count($t);
$p=$_REQUEST['P'];
$nbP_valeurs=count($p);
if($nbP_valeurs>=0){// protection anti robot google -> jusqu'à la fin du code

//on ouvre le fichier


//on ouvre le fichier
$fichier1="tablepass.js";




$op_file1=fopen($fichier1,"w+");
//$op_file2=fopen($fichier2,"w+");
//$op_file1=fopen($fichier4,"w+");

//on ecrit dans le fichier : 
fwrite($op_file1,"var titre=new Array();var tablepas=new Array();var titrelong=new Array()\n\n");
fwrite($op_file1,"var listpubcartovision=new Array();\n\n");



// parametre des points clés et questions répondues

for($i=0;$i<$nb_valeurs;$i++)
{
fwrite($op_file1,"titre[titre.length]=\"".$t[$i]."\";\n");
fwrite($op_file1,"listpubcartovision[listpubcartovision.length]=\"".$p[$i]."\";\n");

fwrite($op_file1,"titrelong[titrelong.length]=\"".$m[$i]."\";\n");

$b[$i]=str_replace("\n", "<br>", $b[$i]);
//fwrite($op_file1,"tablepas[tablepas.length]=\"".$b[$i]."\";\n\n");
fwrite($op_file1,"tablepas[tablepas.length]=\"\";\n\n");
//echo "<br>n[".$i."] = ".$n[$i]."  --> inscrit dans ".$fichier." ! ";
};
if($n[1]!="")
{
$fichier3="tables/".$n[1].".js";

$op_file3=fopen($fichier3,"w+");
$n[2]=str_replace("<br>", "\n", $n[2]);
fwrite($op_file3,$n[2]);

fclose($op_file3);
echo "<script language=\"javascript\">open(\"".$fichier3."\")</script>";
};





/*
fwrite($op_file2,"var listpubcartovision=new Array();\n\n");
fwrite($op_file2,"menuencaps[menuencaps.length]=\"Projet\";\n");
fwrite($op_file2,"listpubcartovision[0]=\"1\";\n\n");
for($i=0;$i<$nb_valeurs;$i++)
{
fwrite($op_file2,"menuencaps[menuencaps.length]=\"".$t[$i]."\";\n");
fwrite($op_file2,"listpubcartovision[".($i+1)."]=\"".$p[$i]."\";\n\n");

};
*/


fclose($op_file1);
//fclose($op_file2);
fclose($op_file1);

//chmod ($fichier1, 0777);
//chmod ($fichier2, 0777);
//chmod ($fichier3, 0777);
echo "<script language=\"javascript\">window.location.href=\"Saisietables.htm\"</script>";
}

?>