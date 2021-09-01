<?php
//liste de publication


$p=$_REQUEST['P'];
$nbP_valeurs=count($p);
if($nbP_valeurs>0){// protection anti robot google -> jusqu'à la fin du code

//on ouvre le fichier
$fichier4="../publiCartoVision.js";

$op_file4=fopen($fichier4,"w+");



//on ecrit dans le fichier : 
fwrite($op_file4,"var listpubcartovision=new Array();\n\n");

for($i=0;$i<$nbP_valeurs;$i++)
{
fwrite($op_file4,"listpubcartovision[listpubcartovision.length]=\"".$p[$i]."\";\n");
};

fclose($op_file4);

}
?>