<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>Altercarto.com : CREATION REG</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<center><p><b>CREATION REG </b><br><small><i>création des fichiers de paramètres des cartes<br><span style="color:red">EXTRACTION REGIONALE</span></i></small><br>***********</p></center>

<font face="Helvetica" size="2">
<?php
$dir="REG";
$op_fileIDCODEetNOM=fopen($dir."/fichier_ID_CODE_NOM.txt","w+");
//on ecrit dans le fichier : 

fwrite($op_fileIDCODEetNOM,"idcarte"."\t"."libel"."\t"."codeINSEE"."\n");




$codelistenom="";
$z=0;
$po=0;
$po2=0;




/////////////////LECTURE DES DONNEES DU FICHIER :

$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');



//fichier ouvert en ꤲiture
$fichier2 = fopen ("REG/CODE_NOMS.js", "w"); 
//fichier ouvert en lecture seule
$fichier3 = fopen ("REG.num", "r"); 
 //fichier ouvert en ꤲiture
$fichier4 = fopen ("REG/DATA-SVG2.js", "w");
//fichier ouvert en lecture seule
$fichier5 = fopen ("LIGNEREG.num", "r"); 
//fichier ouvert en ꤲiture
$fichier6 = fopen ("REG/DATA-ligneSVG.js", "w"); 
// cREATION FICHIER LIGNE REGION -------------------------------------------------------------------------------------
$LIGSVG="";
$incr0lig=1;

while (!feof($fichier5)) {
$buffer = fgets($fichier5, 4096);//lire une ligne
if(substr($buffer,strlen($buffer)-1,1)!="\n")
{
$buffer=$buffer."\n";
}
$long=strlen($buffer)+1;
$Xcode[$incr0lig]=substr($buffer,0,4);
$b=$long-8;
$reste=substr($buffer,5,$b);

$long=strlen($reste)+1;
$XNMcoord[$incr0lig]="" ;

for($i=$long-3;$i>=0;$i--)
{
$X[$i]=substr($reste,$i,1);


}
for($i=$long-3;$i>=0;$i--)
{


if($X[$i]==",")
{
$X[$i]=".";
}

}

$indic0lig=0;
for($i=$long-3;$i>=0;$i--)
{

if($X[$i]=="\t")
{
$X[$i]=",";
}
$indic0lig=$indic0lig+1;
}
$indic0lig=$indic0lig-1;
for($i=0;$i<$indic0lig;$i++)
{
$XNMcoord[$incr0lig]=$XNMcoord[$incr0lig].$X[$i];
}
//echo "<DT id=\$z>---| XNcoord <b>".$Xcode[$incr0lig]."</b> = </DT>";
if(strlen($Xcode[$incr0lig])>0)
{
$LIGSVG[$incr0lig]='ajouter2("'.$Xcode[$incr0lig]."-".$XNMcoord[$incr0lig].'")'."\n";
fwrite($fichier6,$LIGSVG[$incr0lig]);

$incr0lig=$incr0lig+1;
//echo "<DT id=\$z>---| valeur de \$a <b>".$LIGSVG[$incr0lig-1]."</b> = </DT>";
}
}
//-------------------------------------------------------------------------------------------------------------------------------------
//------------------------------crꢴion  DATA-SVG2.js-------------------------------------------------------------------------------
$DATSVG="";
$incr0=1;

while (!feof($fichier3)) {
//lire une ligne
$buffer = fgets($fichier3, 4096);
if(substr($buffer,strlen($buffer)-1,1)!="\n")
{
$buffer=$buffer."\n";
}
$long=strlen($buffer)+1;

$po=strpos($buffer, '-');
if($incr0==2){$po2=$po;}
$Xcode[$incr0]=substr($buffer,0,$po);
$b=$long-$po-1;
$reste=substr($buffer,($po+1),$b);

$long=strlen($reste)+1;
$XNMcoord[$incr0]="" ;

for($i=$long-3;$i>=0;$i--)
{
$X[$i]=substr($reste,$i,1);


}
for($i=$long-3;$i>=0;$i--)
{

if($X[$i]==",")
{
$X[$i]=".";
}

}

$indic0=0;
for($i=$long-3;$i>=0;$i--)
{

if($X[$i]=="\t")
{
$X[$i]=",";
}
$indic0=$indic0+1;
}
$indic0=$indic0-1;
for($i=0;$i<$indic0;$i++)
{
$XNMcoord[$incr0]=$XNMcoord[$incr0].$X[$i];
}

if(strlen($Xcode[$incr0])>2)
{
$DATSVG[$incr0]='ajouter("'.$Xcode[$incr0]."-".$XNMcoord[$incr0].'")'."\n";

fwrite($fichier4,$DATSVG[$incr0]);
$incr0=$incr0+1;

}
}
$der='ajouter("99999'."-".$XNMcoord[$incr0-1].'")'."\n";

fwrite($fichier4,$der);
//--------------------------------------------------------fin de cꢴion de DATASVG2.js

$var_inser[$incr]="";



////////////////////////////////////////////
fclose ($fichier3);
$fichier3 = fopen ("REG.num", "r");
///////////////////////////////////////////
/* Tant qu'on est pas à  la fin*/
while (!feof($fichier3)) {
// lire 4096 octets
/*lire une ligne*/
$buffer = fgets($fichier3, 4096);


/*on stocke dans le tableau la chaine lue*/
//$fichier_data[$incr]=$buffer;



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
}
$incr=$incr-1;

fwrite($fichier2,'ZENOM= new Array("');

$indica=0;
$xcodetemp="";
$hh=0;
/* boucle sur le tableau $Xcode des codes de la carte num dans le fichier national num  $Xcode[$incr0]*/
for($g=1;$g<$incr0;$g++)
{
$hh=$g-1;
/* boucle sur le tableau $codelistenom de la liste de nom sans caracté³¥ problê®¡tiques  $codelistenom[$z]*/
for($h=$hh;$h<$incr;$h++)
{
if($Xcode[$g]==$xcodetemp)
{}
else
{

if($Xcode[$g]==$codelistenom[$h])
{
$indica=$indica+1;
$xcodetemp=$Xcode[$g];
if($indica<$incr){
fwrite($op_fileIDCODEetNOM,$indica."\t".$var_inser[$h]."\t".$Xcode[$g]."\n");
$var_inser[$h]=$var_inser[$h].'","';

}
fwrite($fichier2,$var_inser[$h]);
$h=$incr;
}
}
}
}
fwrite($op_fileIDCODEetNOM,($indica+1)."\t".$var_inser[$h-1]."\t"."99999"."\n");
$cpt=$indica+2;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."ensemble"."\t"."0"."\n");
$cpt=$cpt+1;
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."codeINSEE"."\n");
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
fwrite($op_fileIDCODEetNOM,$cpt."\t"."-99999"."\t"."codeINSEE"."\n");

fwrite($fichier2,'","rien")');


fclose($op_fileIDCODEetNOM);
fclose ($fichier2);
fclose ($fichier3);
fclose ($fichier4);
fclose ($fichier5);
fclose ($fichier6);
echo "<P>---| Le fichier <b>"."DATA-ligneSVG.js"."</b> a ete genere";
echo "<p>---| <a href='"."REG/DATA-ligneSVG.js"."' target='_blank'>TELECHARGER</a>";
echo "<P>---| Le fichier <b>"."DATA-SVG2.js"."</b> a ete genere";
echo "<p>---| <a href='"."REG/DATA-SVG2.js"."' target='_blank'>TELECHARGER</a>";
echo "<P>---| Le fichier <b>CODE_NOMS.js</b> a ete genere";
echo "<p>---| <a href='REG/CODE_NOMS.js'  target='_blank'>TELECHARGER</a>";
echo "<P>---| Le fichier <b>"."fichier_ID_CODE_NOM.txt"."</b> a étét généré";
echo "<p>---| <a href='"."REG/fichier_ID_CODE_NOM.txt"."' target='_blank'>TELECHARGER</a>";

?>

</font>

</body>
</html>
