<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type='text/javascript' src='../../A0-carte-createur/MAPX0.js'></script>
<script type="text/javascript">

var nomrep=""
/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
</script>
<?php
include("../txt_to_html-Num0/entetes.php");

$cible = urldecode( $_GET['cible'] );
$RACINE= urldecode( $_GET['RACINE'] );
$REPERT="";
$li=0;
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');
$FNOM="";
$etal=0;
$fichier="";
$fichier2="";
$file_to_open="";
$file_to_write="";


//function creafichier()



function appelextractetecrit($bufferX)
{

global $etal;
global $incr;
global $li;
global $var_inser;
$separateur=chr('9');
$fichier_data[$incr]=$bufferX;

$data=extract_data($fichier_data[$incr],$separateur);

$k=count($data);
$var_inser[$incr]="";
for($i=1;$i<$k;$i++)
{
if($data[$i]==""){$data[$i]="-99999";}
if($data[$i]==" "){$data[$i]="-99999";}
$spe=chr('194');
$spe2=" ";
if($data[$i]==$spe){$data[$i]="-99999";}
if($data[$i]==$spe2){$data[$i]="-99999";}

if($incr==0 or $incr>($li-9) ){  // lignes d'entête et de terminaison
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}
//if($i<($k-1)){
$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";
//}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($etal==0){//cas général : introduction de colonnes d'essai
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."\"essai1\",\"essai2\",\"essai3\",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}

}else{// cas étalon
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}
}else{
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}

if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($etal==0){//cas général : introduction de colonnes d'essai
$ai=100+$incr;
$bi=1000-$incr;
$ci=500+$incr*2;
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",".$ai.",".$bi.",".$ci.",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{// cas étalon
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}
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
echo"<script language='javascript' >alert('".$ei."')</script>";
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
$k=1;
$derniere_position=0;
for($i=0;$i<$len_1-$yi;$i++) //$i symbolise la position du curseur dans la chaine
{
$caractere=substr($ligne,$i,1);
	if($caractere==$separateur or $caractere=="\n")
	{
	$lenght=$i-$derniere_position;
	$data[$k]=substr($ligne,$derniere_position,$lenght);
	$derniere_position=$i+1;
	$k=$k+1;
	}
}

return $data;
}

function get_folder_listing( $dir, $ext_array ) {
		// Return an array of files in a directory.
		//
		// Result:
		// Nested array. Each file or folder is represented as
		// an array in the following format.
		//
		// [ "file", filename:String, size:String, date:String ]
		// [ "folder", foldername:String, size:String, date:String ]
		
		clearstatcache();
		$result = array();
		
		if ( is_dir($dir) ) {
		//echo ' hhh  '.$dir.' hhh  ';
			$dhandle = opendir($dir);
			if ( $dhandle ) {
			
				// Loop through files
				$filename = readdir( $dhandle );
				while ( $filename ) {
				
					if ( is_file( $dir . $filename ) ) {
						if ( count( $ext_array ) > 0 ) {
						
							// Filter files by extension
							$ok = false;
							for ( $i = 0; $i < count( $ext_array ); $i++ ) {
							
								if (strrchr( $filename, '.' ) == $ext_array[$i]) {
								
									$ok = true;
									break;
								}
							}
							if ( $ok == false ) {
								if ( strpos( $filename, "." ) !== 0 ) {
									array_push( $result, file_properties( $dir, $filename ) );
									
								}
							}
						} else {
							// No filter
							
							if ( strpos( $filename, "." ) !== 0 ) {
								array_push( $result, file_properties( $dir, $filename ) );
							}
						}
					} else {
						if ( strpos( $filename, "." ) !== 0 ) {
							$ck=true;
								foreach($ext_array as $k => $v)
								{// FILTRE LES REPERTOIRE
								// DEBUG: echo "v=$v et k=$k et filename=$filename";
									if($filename==$v)
										$ck=false;
								}
								
								if($ck==true)
									array_push( $result, array( "folder", $filename, format_byte_string( filesize( $dir . $filename ) ), date( "D, m/d/y, g:i A", filemtime( $dir . $filename ) ) ) );
						}
					}
					$filename = readdir( $dhandle );
				}
			}
			closedir( $dhandle) ;
		}
		
		return( $result );
	}

function file_properties ( $dir, $filename ) {
		// Return an array with file property information
		
		$result = array();
		array_push( $result, "file" );
		array_push( $result, $filename );
		array_push( $result, format_byte_string( filesize( $dir . $filename ) ) );
		array_push( $result, date( "D, m/d/y, g:i A", filemtime( $dir . $filename ) ) );
		return( $result );
	}
		function format_byte_string($bytes, $precision = 2, $names = '' ) {
		// Convert bytes to a human readable string.
		
		if (!is_numeric($bytes) || $bytes < 0) {
			return false;
		}
		
		for ($level = 0; $bytes >= 1024; $level++) {	 	 
			$bytes /= 1024;	 	 	 
		}
		
		switch ($level)
		{
			case 0:
				$suffix = (isset($names[0])) ? $names[0] : 'Bytes';
				break;
			case 1:
				$suffix = (isset($names[1])) ? $names[1] : 'KB';
				break;
			case 2:
				$suffix = (isset($names[2])) ? $names[2] : 'MB';
				break;
			case 3:
				$suffix = (isset($names[3])) ? $names[3] : 'GB';
				break;	 	 	 
			case 4:
				$suffix = (isset($names[4])) ? $names[4] : 'TB';
				break;	 	 	 	 	 	 	 	 	 	 	 	 	 	 
			default:
				$suffix = (isset($names[$level])) ? $names[$level] : '';
				break;
		}
		
		if (empty($suffix)) {
			trigger_error('Unable to find suffix for case ' . $level);
			return false;
		}
		
		return round($bytes, $precision) . ' ' . $suffix;
	}

///////////////////////////fin de fonction extract_data


$etape=$_REQUEST['etape'];
//DEBUT :


if($etape=="")
{
//choix du fichier txt :
echo "<form  action='".$PHP_SELF."?etape=1&cible=".$cible."&RACINE=".$RACINE."' method='post'>";
echo "<p><font face='Helvetica' size='2'>Choisissez le nom du nouveau répertoire de Carte<br><i></i></font></p>";
echo"<script type='text/javascript'></script>";
echo "<input id='nf' type='text' onmouseout='javascript:nomrep=this.value' name='R[0]' value=''>";
echo "<p><input type='submit' name='valid' onmouseover='if(nomrep==\"\"){alert(\"saisissez le nom du répertoire \")}' value='Valider'></p>";
echo "</form>";
}//fin de étape=""

if($etape==1)
{
$REP=$_REQUEST['R'];

$dir="../../CARTE-0/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {} else {
					
					//echo '<dt>'.$fileinfo[1].'</dt>';
					
					if ( $fileinfo[1] == $REP[0] ){
					echo"<script type='text/javascript'>alert('Le nom de répertoire ".$REP[0]."existe déjà : choisissez un autre nom pour votre site');window.location.href='creation_site.php'</script>";
					};
					

				}
			}

// création du répertoire de site 
$repertoiredepart="../../CARTE-0/";
$repertoireDestination ="../../".$REP[0]."/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';
mkdir ("../../".$REP[0]);

//clonage des fichiers de base du dossier Site-0
$listefile= array("CARTOSVG matrice.svg","cir_0.jpg","complementaire.html","DATA-Areas.htm","DATA-Areas.js","DATA-CouchesSupl.htm","DATA-couchesSupl.js","DATA-guide-cartes.js","DATA-guide-questions.js","DATA-Guide.htm","DATA-IcoOther.htm","DATA-IcoOther.js","DATA-IcoSujet.htm","DATA-IcoSujet.js","DATA-images1.js","DATA-imagesfond.js","DATA-ImageText.htm","DATA-ImageText.js","DATA-ligneSVG.js","DATA-mappocoord.htm","DATA-mappocoord.js","DATA-menuValidit.js","DATA-Other.htm","DATA-Other.js","DATA-Sujet.htm","DATA-Sujet.js","DATA-validit.js","etalon.html","guide.htm","ICO-DATA.htm","PARAMCARTE.html","principal.html","transparent.png","vide.htm","zeroXY.gif");
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);
}

// CREATION Des sous répertoire du nouveau dossier carte
mkdir ("../../".$REP[0]."/datafiles");
mkdir ("../../".$REP[0]."/images1");
mkdir ("../../".$REP[0]."/imagesfond");
mkdir ("../../".$REP[0]."/IMAGETEXE1");

// écriture des fichiers dans le sous répertoire datafiles
$repertoiredepart="../../CARTE-0/datafiles/";
$repertoireDestination ="../../".$REP[0]."/datafiles/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';


//clonage des fichiers de base du dossier Site-0
$listefile= array("principal.txt","complementaire.txt");
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);


}
echo'<script language="javascript">alert("Assurez vous que vous avez bien placé les fichiers de paramètres de la nouvelle carte dans le dossier \"A0-carte-createur\"")</script>';


// COPIE des fichiers de paramètre de la nouvelle carte dans le dossier de la nouvelle carte
$repertoiredepart="../../A0-carte-createur/";
$repertoireDestination ="../../".$REP[0]."/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';


//clonage des fichiers de base du dossier A0-carte-createur
$listefile= array("CARTOSVG.svg","CARTOSVG matrice.svg","CODE_NOMS.js","correctifcoord.js","DATA-SVG2.js","DATA-Union.js","fichier_ID_CODE_NOM.txt","MAPX0.js");
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);
}
// création du FICHIER ETALON---------------------------------------------------------------------------------------------------------------------------------------------------
{//cas etalon
$file_to_open="../../".$REP[0]."/fichier_ID_CODE_NOM.txt";
$FNOM="etalon.html";
$etal=1;
$REPERT=$REP[0];
}

{

$html_file=$FNOM; 
$file_to_write="../../".$REPERT."/".$FNOM;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture

fwrite($fichier2,$haut."\n\n");//on insère l'entête de haut de fichier

$t=filesize($file_to_open);
//echo '<br><b>nb de carractères dans le fichier txt = </b>'.$t.'<br><b>fichier.txt  cloné = </b>'.$file_to_open.' ';

//$text =fread(fopen ($file_to_open, "r"),$t);
$text = file_get_contents($file_to_open);

echo "<script>alert('".$text."')</script>";
//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;
for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	$kw=$kw+1;
	}

}

//------------------------------------------------------------------------ on extrait les lignes du fichier text et on les écrit dans le nouveau fichier html
$li=$kw;
//echo '<br><b>nb de lignes=</b>'.($li-1).' <br>';
$kw=1;
$derniere_positionw=0;

for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	appelextractetecrit($buffer[$kw]);
	$kw=$kw+1;
	}

}

/////////}
$incr=$incr-1;
for($g=0;$g<$li-1;$g++)
{
fwrite($fichier2,$var_inser[$g]);
}

fwrite($fichier2,$bas);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);
/*
//on réouvre et on enlèves les antislash
$file_to_write="../../".$REPERT."/".$FNOM;
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);
*/
}


$REPERT="";
$li=0;
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');
$FNOM="";
$etal=0;
$fichier="";
$fichier2="";
$file_to_open="";
$file_to_write="";

// création du FICHIER principal.htm avec colonnes de données pour essai--------------------------------------------------------------------------------------------------------------------------------------------------
{//cas principal
$file_to_open="../../".$REP[0]."/fichier_ID_CODE_NOM.txt";
$FNOM="principal.html";
$etal=0;
$REPERT=$REP[0];
}

{// création de fichier

$html_file=$FNOM; 
$file_to_write="../../".$REPERT."/".$FNOM;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture

fwrite($fichier2,$haut."\n\n");//on insère l'entête de haut de fichier

$t=filesize($file_to_open);
//echo '<br><b>nb de carractères dans le fichier txt = </b>'.$t.'<br><b>fichier.txt  cloné = </b>'.$file_to_open.' ';
$text =fread(fopen ($file_to_open, "r"),$t);

//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;
for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	$kw=$kw+1;
	}

}

//------------------------------------------------------------------------ on extrait les lignes du fichier text et on les écrit dans le nouveau fichier html
$li=$kw;
//echo '<br><b>nb de lignes=</b>'.($li-1).' <br>';
$kw=1;
$derniere_positionw=0;

for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	appelextractetecrit($buffer[$kw]);
	$kw=$kw+1;
	}

}

/////////}
$incr=$incr-1;
for($g=0;$g<$li-1;$g++)
{
fwrite($fichier2,$var_inser[$g]);
}

fwrite($fichier2,$bas);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);
/*
//on réouvre et on enlèves les antislash
$file_to_write="../../".$REPERT."/".$FNOM;
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);
*/
}






echo "<form  action='".$PHP_SELF."?etape=2' method='post'>";

echo"<script type='text/javascript'>var nomrep0=\"\";var nomrep1=\"\"; var nomrep2=\"\"; var nomrep3=\"\"; var nomrep4=\"\"; var nomrep5=\"\"; var nomrep5=\"\";</script>";
echo "<input type='text' style='visibility:hidden' name='R[0]' value='".$REP[0]."'><br>";// répertoire 
echo "<input id='mapici' type='text' style='visibility:hidden' name='M[0]' value=''><br>";// rang de la carte
echo"<script type='text/javascript'>var remaps=top.retmapx(\"return retmap\");document.getElementById(\"mapici\").setAttribute(\"value\",remaps);document.getElementById(\"mapici\").value=remaps</script>";
echo "<p><font face='Helvetica' size='2'>Choisissez le nom de la Carte <br><i>(ie. Le nom qui sera affiché sur le fond d'écran)</i></font></p>";
echo "<input id='nf0' type='text' onmouseout='javascript:nomrep0=this.value' name='N[0]' maxlength='40'
value=''>";// nom de la carte / affichage fond de carte



echo "<p><font face='Helvetica' size='2'>Choisissez le code Maille de la carte <br></font></p>";
echo "<input id='nfmaille' type='text'  name='E[0]' maxlength='50' value=''>";// Code Maille
echo"<script type='text/javascript'>document.getElementById(\"nfmaille\").setAttribute(\"value\",mapX[0]);document.getElementById(\"nfmaille\").value=mapX[0]</script>";


echo "<p><font face='Helvetica' size='2'>Choisissez le nom de la Carte <br><i>(ie. Le nom inscrit dans la ligne du menu des cartes)</i></font></p>";
echo "<input id='nf1' type='text' onmouseout='javascript:nomrep1=this.value' name='N[1]' value=''>";// nom de la carte / ligne de menu maps
echo"<script type='text/javascript'>document.getElementById(\"nf1\").setAttribute(\"value\",mapX[3]);document.getElementById(\"nf1\").value=mapX[3]</script>";


echo "<p><font face='Helvetica' size='2'>indiquez le contour <br><i>(ex:contient européen,  France , région X...)</i></font></p>";
echo "<input id='nf2' type='text' onmouseout='javascript:nomrep2=this.value' name='N[2]' value=''>";// contour ou échelle
echo"<script type='text/javascript'>document.getElementById(\"nf2\").setAttribute(\"value\",echelle);document.getElementById(\"nf2\").value=echelle</script>";



echo "<p><font face='Helvetica' size='2'>indiquez la maille<br><i>(ex:pays,  région , communes, zones d'emploi...)</i></font></p>";
echo "<input id='nf3' type='text' onmouseout='javascript:nomrep3=this.value' name='N[3]' value=''>";// maille
echo"<script type='text/javascript'>document.getElementById(\"nf3\").setAttribute(\"value\",maille);document.getElementById(\"nf3\").value=maille</script>";




echo "<p><font face='Helvetica' size='2'>inscrivez un descriptif en quelques lignes<br><i>(ex:pays,  région , communes, zones d'emploi...)</i></font></p>";
echo "<textarea id='nf4' type='text' onmouseout='javascript:nomrep4=this.value' name='N[4]' value=''></textarea>";// libellé long ou commentaire sur carte commentTitrecarte
echo"<script type='text/javascript'>document.getElementById(\"nf4\").innerHTML=commentTitrecarte;document.getElementById(\"nf4\").value=commentTitrecarte;</script>";


echo "<input id='nf5' type='text' style='visibility:hidden' onmouseout='javascript:nomrep5=this.value' name='N[5]' value=''>";// auteurs originaux
echo"<script type='text/javascript'>for(d=0;d<originalauthors.length;d+=2){document.getElementById(\"nf5\").setAttribute(\"value\",(\"\'\"+originalauthors[d]+\"\','\"+originalauthors[d+1]+\"\'\"));document.getElementById(\"nf5\").value=\"\'\"+originalauthors[d]+\"\','\"+originalauthors[d+1]+\"\'\"}</script>";// auteurs originaux

echo "<input id='nf6' type='text' style='visibility:hidden' onmouseout='javascript:nomrep6=this.value' name='N[6]' value=''>";// autres auteurs
echo"<script type='text/javascript'>for(d=0;d<originalauthors.length;d+=2){document.getElementById(\"nf6\").setAttribute(\"value\",(\"\'\"+originalauthors[d]+\"\','\"+originalauthors[d+1]+\"\'\"));document.getElementById(\"nf6\").value=\"\'\"+otherauthors[d]+\"\','\"+otherauthors[d+1]+\"\'\"}</script>";// autres auteurs



echo "<p><input type='submit' name='valid' onmouseover='if(nomrep0==\"\" || nomrep1==\"\" || nomrep2==\"\" || nomrep3==\"\" || nomrep4==\"\"){alert(\"merci de saisir tous les champs \")}' value='Valider'></p>"; 
echo "</form>";


}//fin de ietape=1
//--------------------------------------------------------------------------------ECRITURE DE mappocoord.js-----------------------------------------
if($etape==2)
{
$Nnom=$_REQUEST['N'];
$Emaille=$_REQUEST['E'];
$noncarte=$Nnom[0];
$REP = $_REQUEST['R'];// prendre REP[0]
$numMaps=$_REQUEST['M'];

//echo'<script language="javascript">alert("'.$numMaps[0].'")</script>';
$m='mappocoord[0]="principal.html";
mappocoord[1]="complementaire.html";
mappocoord[2]="1" //? position du menu Sujet à l ouverture =1 par défaut;
mappocoord[3]="1" //? position du menu Sujet à l ouverture =1 par défaut;
mappocoord[4]="'.$noncarte.'"; // titre de la carte;
mappocoord[5]="0" //?;
mappocoord[6]="'.$REP[0].'"//répertoire où se trouve le fichier .html  des données sujet;
mappocoord[7]="'.$REP[0].'"//répertoire où se trouve le fichier .html  des données Other ;
mappocoord[8]="0" // couches graphiques supplémentaires sur le fond de carte;
mappocoord[9]="0" // 0 si pas d images diaporama ; 1 s il y une ou des images diaporama;
mappocoord[10]="0" // 0 si il n y a pas d arrière plan, 1 s il y une ou des images d arrière plan;


top.frames.Num0.document.getElementById("divguide").style.visibility="hidden" // rend le lien GUIDE invisible
top.frames.Num0.document.getElementById("validite").style.visibility="hidden" // rend la frame validité invisible';

//echo'<script language="javascript">alert("'.$m.'")</script>';
$op_file = fopen("../../".$REP[0]."/DATA-mappocoord.js","w+");
fwrite($op_file,$m);
fclose($op_file);



$mpx=$numMaps[0]*5;
$numc=$numMaps[0]+1;
$m="//****************\  CARTE n°".$numc."  /***************************************************\n";
$m=$m.'mapX['.($mpx).']="carretransparent.gif";
mapX['.($mpx+1).']="CARTOSVG.svg";
mapX['.($mpx+2).']="datacarte.html";
mapX['.($mpx+3).']="'.$Nnom[1].'";
mapX['.($mpx+4).']="'.$REP[0].'";
var echelle="'.$Nnom[2].'";
var maille="'.$Nnom[3].'";
var commentTitrecarte="'.$Nnom[4].'";
var commentaireschamp="";
var theme=new Array();
var autrescommnt="";
var originalauthors=new Array('.$Nnom[5].');
var otherauthors=new Array('.$Nnom[6].');
libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);';


$op_file = fopen("../../mapsILIADE.js","a+");
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fclose($op_file);
//on réouvre et on enlèves les antislash
$file_to_write="../../mapsILIADE.js";
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenu);
fclose($op_file);

echo"<script type='text/javascript'>top.redem()</script>";

}//fin de étape2



?>
</font>

</body>
</html>
