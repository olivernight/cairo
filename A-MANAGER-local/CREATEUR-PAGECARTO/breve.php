<?php
//Saise des brèves

$utilisateur="utilitateur";

$n=$_REQUEST['N'];
$z=$_REQUEST['Z'];
$nb_valeurs=count($n);
//echo "<script>alert('\$nb_valeurs='+".$nb_valeurs.")</script>";

//on ouvre le fichier
$fichier="breves.js";
$op_file=fopen($fichier,"w+");
//on ecrit dans le fichier : 
fwrite($op_file,"var titre=new Array();var breve=new Array();\n\n");
// parametre des points clés et questions répondues

for($i=0;$i<$nb_valeurs;$i++)
{
fwrite($op_file,"titre[titre.length]=\"".$n[$i]."\";\n");
fwrite($op_file,"breve[breve.length]=\"".$z[$i]."\";\n\n");
//echo "<br>n[".$i."] = ".$n[$i]."  --> inscrit dans ".$fichier." ! ";
};

fclose($op_file);

//echo "<script language=\"javascript\">top.frames.framecheck.location.href=\"".$fichier."\"</script>";

//echo "<script language=\"javascript\">open(\"".$fichier."\")</script>";
?>