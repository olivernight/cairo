<html>
<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<?php
$REPDESTIN = urldecode( $_GET['REPDESTIN'] );
$cibledestin = urldecode( $_GET['cibledestin'] );

$cibleorigine = urldecode( $_GET['cibleorigine'] );
$REPORIGINE = urldecode( $_GET['REPORIGINE'] );

//echo "cibledestin=".$cibledestin."&REPDESTIN=".$REPDESTIN."&cibleorigine=".$cibleorigine."&REPORIGINE=".$REPORIGINE;
include("entetes.php");
$CODE;
$tableau2;
$occurences2;
//FONCTIONS :
function parseInt($string) {
// return intval($string);
if(preg_match('/(\d+)/', $string, $array)) {
return $array[1];
} else {
return false;//I think that this is better!!
}
}
$li=0;
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');

function appelextractetecrit($bufferX,$incr,$occurences,$reg)
{
$li=$occurences;

global $CODE;
global $var_inser;
$separateur=chr('9');

$data=extract_data($bufferX,$separateur,$reg);

$k=count($data)+1;
$var_inser[$incr]="";
for($i=1;$i<$k;$i++)
{

if($i==3){
$CODE[$incr]=$data[3];
//echo "CODE[".$incr."]=".$CODE[$incr]."<br>";
// Cas de la CORSE
if(strpos($data[$i], "A")>0){$data[$i]=str_replace("A","101",$data[$i]);}
if(strpos($data[$i], "B")>0){$data[$i]=str_replace("B","102",$data[$i]);}
}
if($data[$i]==""){$data[$i]="-99999";}
if($data[$i]==" "){$data[$i]="-99999";}
$spe=chr('194');
$spe2=" ";
if($data[$i]==$spe){$data[$i]="-99999";}
if($data[$i]==$spe2){$data[$i]="-99999";}
//if( ){$var_inser[$incr]="base00[0]=new Array("; }
if($incr==0 or $incr>($li-9-2) ){  
if($incr==0){$numx=0;}else{$numx=($reg-($li-$incr)+9+1);}
if($i==1){$var_inser[$incr]="base00[".$numx."]=new Array(".$numx.","; // NB pour les lignes du bas On force le rang avec les indices du fichier régional
}else{
if($incr>($li-9) || $incr==0){ 
$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{$var_inser[$incr]=$var_inser[$incr]."".$data[$i]."".",";}
}
}

if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}

if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}

}


}
}


$incr=$incr+1;
}


function extract_data($ligne,$separateur)// cette fonction permet d'extraire les données dans un ligne, séparées par $separateur
// la fonction renvoie le array $data[ ]
{

global $incr;
//echo $incr;
//correction de fin de ligne dans le cas CRLF
$xi=substr($ligne,strlen($ligne)-1,1);

if(substr($xi,0,1)==chr(13)){
//echo"<script language='javascript' >alert('".$ei."')</script>";
$yi=1;
}
//correction de fin de ligne pour fichier macintosh


if(substr($ligne,strlen($ligne),1)!="\n")
{
//echo"<script language='javascript' >alert('ici')</script>";
$ligne=$ligne."\n";
}

$len_1=strlen($ligne);
//on extrait les noms de champs marqués par des separateurs et on les stocke dans nom_champ[ ] incrementé par $k


$derniere_positionw2=0;
$kw2=1;
$tableau2 = explode($separateur, $ligne);
$occurences2 = count($tableau2);
for($h=0;$h<($occurences2-1);$h++){
	$xpos2=strpos ( $ligne , $separateur  , $derniere_positionw2  ) ;	
	$data[$kw2]=substr($ligne,$derniere_positionw2,$xpos2-$derniere_positionw2);	
	$derniere_positionw2=$xpos2+1;
	$kw2=$kw2+1;
}
$xpos2=strpos ( $ligne , "\n"  , $derniere_positionw2  ) ;
$data[$kw2]=substr($ligne,$derniere_positionw2,$xpos2-$derniere_positionw2);

return $data;
}
///////////////////////////fin de fonction extract_data
///////////////////////////fin de fonction extract_data

$separateur=chr('9');





//----------------------------------------------------------------------------------------------
//Récupération des codes "Insee" dans le fichier fichier_ID_CODE_NOM.txt du répertoire de destination
$file_to_open=$REPDESTIN."/fichier_ID_CODE_NOM.txt";
$fichierREG_idCodeEtNoms = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$reg=0;
while (!feof($fichierREG_idCodeEtNoms)) {
// lire 4096 octets
$buffer = fgets($fichierREG_idCodeEtNoms,120000);
// on stocke dans le tableau la chaine lue
$fichier_data[$reg]=$buffer;
$data=extract_data($fichier_data[$reg],$separateur);


if(strpos($data[3], "A")>0){$data[3]=str_replace("A","101",$data[3]);}
if(strpos($data[3], "B")>0){$data[3]=str_replace("B","102",$data[3]);}

$CODEREG[$reg]=$data[3];
$NOMREG[$reg]=$data[2];
//echo "<P>---| c =<b>".$CODEREG[$reg]."  nom ".$data[2]."</b> a ete genere";
$reg=$reg+1;
}

fclose ($fichierREG_idCodeEtNoms);
$reg=$reg-1-9;
echo "<P>2 ---| les codes de référence du fichier de référence régionale ont été récupérés";
//-----------------------------------------------------------------------------------------------

/////////////////LECTURE DES DONNEES DU FICHIER :
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');
$file_to_open=$REPORIGINE."/".$cibleorigine;
$html_file=$cibledestin;
//echo "chimin origine=".$REPORIGINE."/".$cibleorigine;
//echo "chemin destination=".$REPDESTIN."/".$cibledestin;
$file_to_write=$REPDESTIN."/".$cibledestin;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture

fwrite($fichier2,$haut);//on insère l'entête de haut de fichier
//_________________________________________________________________________
//on récupère le contenu du fichier dans la variable $text
$t=filesize($file_to_open);
echo '<br><b>il y a '.$t.' carractères dans le fichier d\'origine :'.$file_to_open.'</b> ';
//$text =fread(fopen ($file_to_open, "r"),$t);
$text = file_get_contents($file_to_open);
//transformation en modèle unixoïde
$text=str_replace("\r\n","xx@xx",$text);
$text=str_replace("\r","\n",$text);//cas mac;
$text=str_replace("xx@xx","\n",$text);
//_________________________________________________________________________

//_________________________________________________________________________
//on compte ne nob de lignes
/*
// Tant qu'on est pas à  la fin calculer le nombre de lignes du tableau de données dans le fichier text
while (!feof($fichier)) {
// lire 4096 octets
$buffer = fgets($fichier,120000);
// on stocke dans le tableau la chaine lue
$fichier_data[$incr2]=$buffer;
$data=extract_data($fichier_data[$incr2],$separateur);
$incr2=$incr2+1;
}
fclose ($fichier);
$incr2=$incr2-1;
echo "<P>3 ---| la base de données source comporte ".($incr2)." lignes";
*/

$kw=1;
$derniere_positionw=0;

// compter le nb de lignes
 
$tableau = explode("\n", $text);
$occurences = count($tableau);
echo "<br>Il y a ".($occurences-1)." lignes dans ce fichier";

for($h=0;$h<($occurences);$h++){


	$xpos=strpos ( $text , "\n"  , $derniere_positionw  ) ;
	
	$buffer[$kw]=substr($text,$derniere_positionw,$xpos-$derniere_positionw);
	//echo '<br><buffer['.$kw.']=</b>'.$buffer[$kw].' <br>';
	$derniere_positionw=$xpos+1;
	$incr=$kw-1;
	appelextractetecrit($buffer[$kw],$incr,$occurences,$reg);
	$kw=$kw+1;


}




//______________________________________________________________________________________


//------------------------------
//crée une ligne vide pour les aires du fichier reg qui ne trouvent pas de correspondant dans la base de données source

$var_inser_99999="";
for($i=2;$i<$occurence2-1;$i++){
$var_inser_99999=$var_inser_99999."-99999,";
};
$var_inser_99999=$var_inser_99999."0);\n";
//-------------------------------




//------------------------------------------------------------------------ on extrait les lignes du fichier et on les écrit dans le nouveau fichier html
$li=$kw-1;

//echo '<br><b>nb de lignes=</b>'.($li-1).' <br>';


$kw=1;
$derniere_positionw=0;

$incr=$incr-1;

fwrite($fichier2,"\n".$var_inser[0]);//première ligne
for($g=1;$g<$reg;$g++)
{

for($z=0;$z<$occurences-9-1;$z++){
$A=parseInt($CODEREG[$g]);
$B=parseInt($CODE[$z]);
//echo "<P>---| parseInt(CODE[".$z."]) <b>".parseInt($CODE[$z])."</b> |----| parseInt(CODEREG[".$g."]) <b>".parseInt($CODEREG[$g])."</b> |---</p>";
if($A==$B){
$Ok=1;
//fwrite($fichier2,"base00[".$l."]=new Array(".$l.",".$var_inser[$z]);

$var_inser[$z]=str_replace("base00[".$z."]=new Array(".$z,"base00[".$g."]=new Array(".$g,$var_inser[$z]);
fwrite($fichier2,$var_inser[$z]);
$l=$l+1;
//echo "<P>---|  <b>".$var_inser[$g]."</b> ---------";
}
}
if($Ok==0){ // cas où une ligne du fichier régional n'a pas trouvé de ligne coportant le même code de référence dans le  fichier source
fwrite($fichier2,"base00[".$l."]=new Array(".$l.",".$NOMREG[$g].",".$CODEREG[$g].",".$var_inser_99999);// $incr-2 n° de l'avant dernière lignes du fichier source : ligne de valeurs -99999
$l=$l+1;
}
}




for($g=$occurences-1-9;$g<$occurences-1;$g++) // NB Comme on a forcé les rangs des lignes du bas du fichier origine, dans extract_data, pour les lignes du bas du fichier final on prend celles qu'on a forcées
{
fwrite($fichier2,$var_inser[$g]);
}


fwrite($fichier2,$bas);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);

//on réouvre et on enlèves les antislash
$file_to_write=$REPDESTIN."/".$cibledestin;;
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);



echo "<P>---| Le fichier <b>".$REPDESTIN."/".$html_file."</b> a ete génére";
echo "<p>---| <a href='".$file_to_write."'>TELECHARGER</a>";




?>
</font>
</body>
</html>
