<?php


$utilisateur="utilitateur";

$a=$_REQUEST['A'];
$b=$_REQUEST['B'];
$c=$_REQUEST['C'];
$d=$_REQUEST['D'];
$e=$_REQUEST['E'];
$f=$_REQUEST['F'];
$g=$_REQUEST['G'];
$h=$_REQUEST['H'];
$i=$_REQUEST['I'];
$j=$_REQUEST['J'];
$k=$_REQUEST['K'];
$l=$_REQUEST['L'];
$m=$_REQUEST['M'];

$nb_valeurs=count($a);
//echo "<script>alert('\$nb_valeurs='+".$nb_valeurs.")</script>";
//on ouvre le fichier
if($nb_valeurs>0){//sécurité anti robot google : évite que le fichier soit exécuté par une appel direct)
$fichier="../../mapsILIADE.js";
$op_file=fopen($fichier,"w+");

//on ecrit dans le fichier : 
for($s=0;$s<($nb_valeurs*5);$s=$s+5)
{
if($s==0){fwrite($op_file,"var mapX=new Array();var libelmap=new Array();\n\n");}
fwrite($op_file,"//****************\  CARTE n°".($s/5+1)."  /***************************************************\n");

/*
fwrite($op_file,"mapX[".($s+0)."]=\"".$a[($s/5)]."\";\n");
fwrite($op_file,"mapX[".($s+0)."]=\"".$a[($s/5)]."\";\n");
fwrite($op_file,"mapX[".($s+1)."]=\"".$b[($s/5)]."\";\n");
fwrite($op_file,"mapX[".($s+2)."]=\"".$c[($s/5)]."\";\n");
fwrite($op_file,"mapX[".($s+3)."]=\"".$d[($s/5)]."\";\n");
fwrite($op_file,"mapX[".($s+4)."]=\"".$e[($s/5)]."\";\n");

*/
fwrite($op_file,"mapX[mapX.length]=\"".$a[($s/5)]."\";\n");
fwrite($op_file,"mapX[mapX.length]=\"".$b[($s/5)]."\";\n");
fwrite($op_file,"mapX[mapX.length]=\"".$c[($s/5)]."\";\n");
fwrite($op_file,"mapX[mapX.length]=\"".$d[($s/5)]."\";\n");
fwrite($op_file,"mapX[mapX.length]=\"".$e[($s/5)]."\";\n");

fwrite($op_file,"var echelle=\"".$f[($s/5)]."\";\n");
fwrite($op_file,"var maille=\"".$g[($s/5)]."\";\n");
fwrite($op_file,"var commentTitrecarte=\"".$h[($s/5)]."\";\n");
fwrite($op_file,"var commentaireschamp=\"".$i[($s/5)]."\";\n");
fwrite($op_file,"var theme=new Array(".$j[($s/5)].");\n");
fwrite($op_file,"var autrescommnt=\"".$k[($s/5)]."\";\n");
fwrite($op_file,"var originalauthors=new Array(".$l[($s/5)].");\n");

/*
echo '<script language="javascript">alert('.$m[($s/5)].')</script>';

str_replace("''","'x'",$m[($s/5)]);
str_replace("'undefined'","'x'",$m[($s/5)]);
str_replace("()","('x','x')",$m[($s/5)]);
*/
//fwrite($op_file,"var otherauthors=new Array(".$m[($s/5)].");\n");
fwrite($op_file,"var otherauthors=new Array(\"xx\",\"xx\");\n");


fwrite($op_file,"libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);\n");

fwrite($op_file,"\n\n");
};

fclose($op_file);

$file_to_write="../../mapsILIADE.js";
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenu);
fclose($op_file);

//mise à jour des fichiers MAPX0.js dans les dossiers cartes et mise à jour du fichier maps Iliade
for($s=0;$s<($nb_valeurs*5);$s=$s+5)
{
//on ouvre le fichier
$fichier="../../".$e[($s/5)]."/MAPX0.js";
$op_file=fopen($fichier,"w+");

if($s==0){fwrite($op_file,"var mapX=new Array();var libelmap=new Array();\n\n");}
fwrite($op_file,"//****************\  CARTE /GaïaMundi  /***************************************************\n");
fwrite($op_file,"mapX[0]=\"".$a[($s/5)]."\";\n");
fwrite($op_file,"mapX[1]=\"".$b[($s/5)]."\";\n");
fwrite($op_file,"mapX[2]=\"".$c[($s/5)]."\";\n");
fwrite($op_file,"mapX[3]=\"".$d[($s/5)]."\";\n");
fwrite($op_file,"mapX[4]=\"\";\n");//   ".$e[($s/5)]."
fwrite($op_file,"var echelle=\"".$f[($s/5)]."\";\n");
fwrite($op_file,"var maille=\"".$g[($s/5)]."\";\n");
fwrite($op_file,"var commentTitrecarte=\"".$h[($s/5)]."\";\n");
fwrite($op_file,"var commentaireschamp=\"".$i[($s/5)]."\";\n");//
fwrite($op_file,"var theme=new Array(".$j[($s/5)].");\n");//
fwrite($op_file,"var autrescommnt=\"".$k[($s/5)]."\";\n");//
fwrite($op_file,"var originalauthors=new Array(".$l[($s/5)].");\n");
fwrite($op_file,"var otherauthors=new Array(".$m[($s/5)].");\n");
fwrite($op_file,"libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);\n");

fwrite($op_file,"\n\n");
fclose($op_file);

$file_to_write="../../".$e[($s/5)]."/MAPX0.js";
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenu);
fclose($op_file);



};



}

echo "<script language=\"javascript\">top.frames.trees.location.href=\"../../archi.htm\"</script>";

//echo "<script language=\"javascript\">open(\"".$fichier."\")</script>";
?>