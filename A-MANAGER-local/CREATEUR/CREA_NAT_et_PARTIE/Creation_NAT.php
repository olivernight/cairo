<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>Altercarto.com : CREATION NAT</title><meta http-equiv="Content-type" content="text/html; charset=utf-8">


</head>
<body bgcolor="#FFFFFF" text="#000000" style="font-family:arial">
<center><p><b>CREATION NAT </b><br><small><i>création des fichiers de paramètres des cartes</i></small><br>***********</p></center>
<font face="Helvetica" size="2">
<?php

$dir="NAT";

$op_fileIDCODEetNOM=fopen($dir."/fichier_ID_CODE_NOM.txt","w+");
//on ecrit dans le fichier : 

fwrite($op_fileIDCODEetNOM,"idcarte"."\t"."libel"."\t"."codeINSEE"."\n");



$codelistenom="";
$z=0;
$po=0;
$po2=0;


/*LECTURE DES DONNEES DU FICHIER :*/

$incr=0;/*cette variable sert pour l'incrementation des lignes dans le fichier*/
$separateur=chr('9');


 /*fichier ouvert en ê¤²iture*/
$fichier2 = fopen ("NAT/CODE_NOMS.js", "w");
 /*fichier ouvert en lecture seule*/
$fichier3 = fopen ("national.num", "r");
/*fichier ouvert en ê¤²iture*/
$fichier4 = fopen ("NAT/DATA-SVG2.js", "w"); 

/*------------------------------création  DATA-SVG2.js*/
$DATSVG="";
$incr0=1;

while (!feof($fichier3)) {
/*lire une ligne*/
$buffer = fgets($fichier3, 4096);
if(substr($buffer,strlen($buffer)-1,1)!="\n")
{
$buffer=$buffer."\n";
}
$long=strlen($buffer)+1;

$po=strpos($buffer, '-');
if($incr0==2){$po2=$po;}
$Xcode[$incr0]=substr($buffer,0,$po) ;
$b=$long-$po-1;
$reste=substr($buffer,($po+1),$b);

$long=strlen($reste)+1;
$XNMcoord[$incr0]="" ;

$reste=str_replace(",",".",$reste);	
$reste=str_replace("\t",",",$reste);	

$lonreste=strlen($reste)-2;
$pox1=strpos($reste, ',');
$rest1=substr($reste,0,$pox1);
$rest2=substr($reste,$pox1+1,$lonreste-$pox1-3);

$reste=$rest1.'",'.$rest2;


$reste=substr($reste,0,$lonreste);
$XNMcoord[$incr0]=$XNMcoord[$incr0].$reste;


if(strlen($Xcode[$incr0])>0)
{
$DATSVG[$incr0]='ajouter("'.$Xcode[$incr0].'-'.$XNMcoord[$incr0].')'."\n";

fwrite($fichier4,$DATSVG[$incr0]);
$incr0=$incr0+1;

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$ligne=$buffer;

$data="";
/*cette fonction permet d'extraire les données dans un ligne, séparées par $separateur
 la fonction renvoie le array $data[ ]*/

/*correction de fin de ligne pour fichier macintosh*/
if(substr($ligne,strlen($ligne)-1,1)!="\n"){$ligne=$ligne."\n";$len_1=strlen($ligne)+1;}else{$len_1=strlen($ligne);}

$po3=strpos($ligne,$separateur,0);
$po2=strpos($ligne,"-",0);

$codelistenom[$z]=substr($ligne,0,$po2);
$data=substr($ligne,$po2+1,$po3-$po2-1);


$z=$z+1;


$xnom=$data;

$var_inser[$incr]=$xnom;
$incr=$incr+1;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
$der='ajouter("99999'."-".$XNMcoord[$incr0-1].'")'."\n";

fwrite($fichier4,$der);
/*--------------------------------------------------------fin de céation de DATASVG2.js*/

$var_inser[$incr]="";



////////////////////////////////////////////
fclose ($fichier3);
//fclose ($fichier4);
echo "<p id='messages'>";
echo "<P>---| Le fichier <b>"."DATA-SVG2.js"."</b> a ete genere";
echo "<p>---| <a href='"."NAT/DATA-SVG2.js"."' target='_blank'>TELECHARGER</a>";


//$fichier3 = fopen ("national.num", "r");
///////////////////////////////////////////
/* 
//Tant qu'on est pas à  la fin
while (!feof($fichier3)) {
// lire 4096 octets
//lire une ligne
$buffer = fgets($fichier3, 4096);


//on stocke dans le tableau la chaine lue
//$fichier_data[$incr]=$buffer;



$ligne=$buffer;

$data="";
//cette fonction permet d'extraire les données dans un ligne, séparées par $separateur 
//la fonction renvoie le array $data[ ]

//correction de fin de ligne pour fichier macintosh
if(substr($ligne,strlen($ligne)-1,1)!="\n"){$ligne=$ligne."\n";$len_1=strlen($ligne)+1;}else{$len_1=strlen($ligne);}

$po3=strpos($ligne,$separateur,0);
$po2=strpos($ligne,"-",0);

$codelistenom[$z]=substr($ligne,0,$po2);
$data=substr($ligne,$po2+1,$po3-$po2-1);


$z=$z+1;


$xnom=$data;

$var_inser[$incr]=$xnom;
$incr=$incr+1;
}
*/
$incr=$incr-1;

fwrite($fichier2,'ZENOM= new Array("');

$indica=0;
$xcodetemp="";
$hh=0;
/* boucle sur le tableau $Xcode des codes de la carte num dans le fichier national num  $Xcode[$incr0]*/
//for($g=1;$g<$incr0;$g++)
//{
//$hh=$g-1;
/* boucle sur le tableau $codelistenom de la liste de nom sans caracté³¥ problê®¡tiques  $codelistenom[$z]*/
for($h=$hh;$h<$incr;$h++)
{
if($codelistenom[$h]==$xcodetemp)
{}
else
{

//if($Xcode[$g]==$codelistenom[$h])
//{
$indica=$indica+1;
$xcodetemp=$codelistenom[$h];//$Xcode[$g];
if($indica<$incr){
fwrite($op_fileIDCODEetNOM,$indica."\t".$var_inser[$h]."\t".$codelistenom[$h]."\n");
$var_inser[$h]=$var_inser[$h].'","';

}

fwrite($fichier2,$var_inser[$h]);
//$h=$incr;
//}
}
}
//}
fwrite($op_fileIDCODEetNOM,($indica+1)."\t".$var_inser[$h-1]."\t"."99999"."\n");
$cpt=$indica+2;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."ensemble"."\t"."0"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."libel"."\t"."codeINSEE"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."libel"."\t"."codeINSEE"."\n");

fwrite($fichier2,'","rien")');

fclose($op_fileIDCODEetNOM);
fclose ($fichier2);
//fclose ($fichier3);


echo "<P>---| Le fichier <b>CODE_NOMS.js</b> a ete genere";
echo "<p>---| <a href='NAT/CODE_NOMS.js'  target='_blank'>TELECHARGER</a>";
echo "<P>---| Le fichier <b>"."fichier_ID_CODE_NOM.txt"."</b> a étét généré";
echo "<p>---| <a href='"."NAT/fichier_ID_CODE_NOM.txt"."' target='_blank'>TELECHARGER</a>";
echo "</p>";


?>


</body>
</html>
