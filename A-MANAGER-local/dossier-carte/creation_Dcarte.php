<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type='text/javascript' src='../../mapsILIADE.js'></script>
<script language="javascript" src="../../mapsILIADEmotpas.js"></script>

<script type='text/javascript' src='../../A0-carte-createur/MAPX0.js'></script>
<script type='text/javascript' src='../Controle/Saisie/saisie.js'></script>
<script type='text/javascript' src='../Controle/Redondance/redondance.js'></script>
<script type='text/javascript' src='../Controle/bouton.js'></script>
<script type='text/javascript'>




function copyN2(){

var alerter=''; var inputs=new Array(document.getElementById('nf').value); detect(inputs,CaracteresInterdits1);


if(document.getElementById("nf").value=="Choisir.." || document.getElementById("nf").value=="Choisir.." ){
alert("Attention ! Vous n'avez pas indiqué les titres.")
}


}
/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
</script>
<?php
include("../txt_to_html-Num0/entetes.php");

//$cible = urldecode( $_GET['cible'] );
//$RACINE= urldecode( $_GET['RACINE'] );
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





function appelextractetecrit($bufferX)
{

global $etal;
global $incr;
global $li;
global $var_inser;
$separateur=chr('9');
$fichier_data[$incr]=$bufferX;
$data=extract_data($fichier_data[$incr],$separateur);

$k=count($data)+1;
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
if($etal==0){//cas général : introduction de colonnes d'essai ANNULE ANNULE ANNULE ANNULE ANNULE
//if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."\"essai1\",\"essai2\",\"essai3\",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."\"100\",\"0\");"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{// cas étalon
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."\"100\",\"0\");"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}
}else{
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}

if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{
	//cas $i=3
	
	$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"";//.",";
	//$var_inser[$incr]=$var_inser[$incr].$data[$i];
	}
if($etal==0){//cas général : 
/*$ai=100+$incr;
$bi=1000-$incr;
$ci=500+$incr*2;
//if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",".$ai.",".$bi.",".$ci.",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}*/
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",100,0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{// cas étalon
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",100,0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
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




echo '<script type="text/javascript">
var temp_mapX=new Array()
temp_mapX=mapX

var mt
var idmt=0
var mt2="xxxxx"
var aw2=window.location.href
mt="admin" //prompt("saisissez votre mot de passe",mt2);
for(i=0;i<mtpas.length;i++){
if(mt==mtpas[i]){idmt=1}

}
var retconfirm=false
if(idmt!=1){
retconfirm=confirm("désolé, votre mot de passe est incorrect, voulez vous recommencer?");
if(retconfirm==true){

window.location.href=aw2
}else{
window.location.href="../../vide.html"

}
}



</script>';








echo "<script type='text/javascript'>var check_r='repertory';  var alerter=''; </script>";	
echo '<form action="'.$PHP_SELF.'?etape=1&cible='.$cible.'&RACINE='.$RACINE.'" method="post" Onkeyup="javascript: var inputs=new Array(document.getElementById(\'nf\').value); detect(inputs,CaracteresInterdits1); check_redondance(inputs,check_r,temp_mapX);" onkeypress="refuserToucheEntree(event);">';
echo "<p><font face='Helvetica' size='2'>Choisissez le nom du nouveau répertoire de Carte<br><i></i></font></p>";
echo "<input id='nf' type='text' name='R[0]' value='Choisir..'>";
echo "<div id='alert' style='visibility:hidden'></div><br>";
echo "<input type='submit' id='submit' value='Valider' onmouseover='javascript:copyN2()'>";
echo "<input type='submit' id='submit2' value='Valider' disabled='disabled' style='display:none' >";
echo "</form>";

include("../Controle/Sauv/sauv.php");
$array=array("06");
sauv($file,$array);	

}//fin de étape=""

if($etape==1)
{
$REP=$_REQUEST['R'];
$dir="../../CARTE-0/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {
$fileinfo = $contents[$i];
if ( $fileinfo[0] == "file" ) {} else {
if ( $fileinfo[1] == $REP[0] ){
echo "<script type='text/javascript'>alert('Le nom de répertoire ".$REP[0]."existe déjà : choisissez un autre nom pour votre site');window.location.href='creation_site.php'</script>";
};
}
}


$repertoiredepart="../../CARTE-0/";
$repertoireDestination ="../../".$REP[0]."/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';
mkdir ("../../".$REP[0]);

/*
//clonage des fichiers de base du dossier ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
$listefile= array("CARTOSVG matrice.svg","cir_0.jpg","complementaire.html","DATA-Areas.htm","DATA-Areas.js","DATA-CouchesSupl.htm","DATA-couchesSupl.js","DATA-guide-cartes.js","DATA-guide-questions.js","DATA-Guide.htm","DATA-IcoOther.htm","DATA-IcoOther.js","DATA-IcoSujet.htm","DATA-IcoSujet.js","DATA-images1.js","DATA-imagesfond.js","DATA-ImageText.htm","DATA-ImageText.js","DATA-ligneSVG.js","DATA-mappocoord.htm","DATA-mappocoord.js","DATA-menuValidit.js","DATA-Other.htm","DATA-Other.js","DATA-Sujet.htm","DATA-Sujet.js","DATA-validit.js","etalon.html","guide.htm","ICO-DATA.htm","PARAMCARTE.html","principal.html","transparent.png","vide.htm","zeroXY.gif");
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*/
for ( $i = 0; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];

				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] != "file" ) {} else {
					
					//echo '<dt>'.$fileinfo[1].'</dt>';
					
					copy($repertoiredepart.$fileinfo[1],$repertoireDestination.$fileinfo[1]);
					

				}
			}

// CREATION Des sous répertoire du nouveau dossier carte
mkdir ("../../".$REP[0]."/datafiles");
mkdir ("../../".$REP[0]."/images1");
mkdir ("../../".$REP[0]."/imagesfond");
mkdir ("../../".$REP[0]."/IMAGETEXE1");

// écriture des fichiers dans le sous répertoire datafiles:
	
$repertoiredepart="../../CARTE-0/datafiles/";
$repertoireDestination ="../../".$REP[0]."/datafiles/";
$listefile= array("principal.txt","complementaire.txt");
$co=count($listefile);
for($x=0;$x<count($listefile);$x++){
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);
}

//echo'<script language="javascript">alert("Assurez vous que vous avez bien placé les fichiers de paramètres de la nouvelle carte dans le dossier \"A0-carte-createur\"")</script>';


// COPIE des fichiers de paramètre de la nouvelle carte dans le dossier de la nouvelle carte
$repertoiredepart="../../A0-carte-createur/";
$repertoireDestination ="../../".$REP[0]."/";

//clonage des fichiers  du dossier de transit "carte createur" vers le nouveau dossier carte 
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*

$listefile= array("CARTOSVG.svg","CARTOSVG matrice.svg","CODE_NOMS.js","correctifcoord.js","DATA-SVG2.js","DATA-Union.js","fichier_ID_CODE_NOM.txt","MAPX0.js","DATA-ligneSVG.js",);
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);
}

//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
*/

$dir="../../A0-carte-createur/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {	
$fileinfo = $contents[$i];
if ( $fileinfo[0] != "file" ) {} else {				
copy($repertoiredepart.$fileinfo[1],$repertoireDestination.$fileinfo[1]);
}
}

//clonage des fichiers  du dossier de transit "carte createur" vers le nouveau dossier carte //-
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// écriture des fichiers dans le sous répertoire images1:
	
$repertoiredepart="../../A0-carte-createur/images1/";
$repertoireDestination ="../../".$REP[0]."/images1/";
$dir="../../A0-carte-createur/images1/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {
$fileinfo = $contents[$i];
if ( $fileinfo[0] != "file" ) {} else {
copy($repertoiredepart.$fileinfo[1],$repertoireDestination.$fileinfo[1]);
}
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// écriture des fichiers dans le sous répertoire imagesfond:
	
$repertoiredepart="../../A0-carte-createur/imagesfond/";
$repertoireDestination ="../../".$REP[0]."/imagesfond/";
$dir="../../A0-carte-createur/imagesfond/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {
$fileinfo = $contents[$i];
if ( $fileinfo[0] != "file" ) {} else {
copy($repertoiredepart.$fileinfo[1],$repertoireDestination.$fileinfo[1]);
}
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// écriture des fichiers dans le sous répertoire IMAGETEXE1:
	
$repertoiredepart="../../A0-carte-createur/IMAGETEXE1/";
$repertoireDestination ="../../".$REP[0]."/IMAGETEXE1/";
$dir="../../A0-carte-createur/IMAGETEXE1/";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
for ( $i = 0; $i < count( $contents ); $i++ ) {
$fileinfo = $contents[$i];
if ( $fileinfo[0] != "file" ) {} else {
copy($repertoiredepart.$fileinfo[1],$repertoireDestination.$fileinfo[1]);
}
}
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------







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
$text = str_replace(chr('13'),'',$text);
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
$text = str_replace(chr('13'),'',$text);
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

echo "<form action='".$PHP_SELF."?etape=2' method='post' Onkeyup='javascript: var alerter=\"\"; var inputs=new Array(document.getElementById(\"nf0\").value,document.getElementById(\"nf1\").value,document.getElementById(\"nf2\").value,document.getElementById(\"nf3\").value,document.getElementById(\"nf4\").value); detect(inputs,CaracteresInterdits3);' onkeypress='refuserToucheEntree(event);'>";

echo "<script type='text/javascript'>var nomrep0=\"\";var nomrep1=\"\"; var nomrep2=\"\"; var nomrep3=\"\"; var nomrep4=\"\"; var nomrep5=\"\"; var nomrep5=\"\";</script>";
echo "<input type='text' style='visibility:hidden' name='R[0]' value='".$REP[0]."'><br>";// répertoire 
echo "<input id='mapici' type='text' style='visibility:hidden' name='M[0]' value=''><br>";// rang de la carte
echo "<script type='text/javascript'>var remaps=top.retmapx(\"return retmap\");document.getElementById(\"mapici\").setAttribute(\"value\",remaps);document.getElementById(\"mapici\").value=remaps</script>";
echo "<div id='alert'></div>";
echo "<div style='display:none'>";
echo "<p><font face='Helvetica' size='2' >Choisissez le nom de la Carte <br><i>(ie. Le nom qui sera affiché sur le fond d'écran)</i></font></p>";
echo "<input id='nf0' type='text' onmouseout='javascript:nomrep0=this.value' name='N[0]' maxlength='40' value=''>";// nom de la carte / affichage fond de carte
echo "</div>";
echo"<script type='text/javascript'>document.getElementById(\"nf0\").setAttribute(\"value\",mapX[mapX.length-2]);document.getElementById(\"nf0\").value=mapX[mapX.length-2]</script>";

echo "<p><font face='Helvetica' size='2'>Choisissez le code Maille de la carte <br></font></p>";
echo "<input id='nfmaille' type='text'  name='E[0]' maxlength='50' value=''>";// Code Maille
echo"<script type='text/javascript'>document.getElementById(\"nfmaille\").setAttribute(\"value\",mapX[mapX.length-5]);document.getElementById(\"nfmaille\").value=mapX[mapX.length-5]</script>";

echo "<span style='display:none'><p><font face='Helvetica' size='2' color='red'>Choisissez le nom de la Carte <br><i>(ie. Le nom inscrit dans la ligne du menu des cartes)<br>Attention : évitez les confusions. Mettez un numéro par exemple en cas de doublon</i></font></p>";
echo "<input id='nf1' type='text' onmouseout='javascript:nomrep1=this.value' name='N[1]' maxlength='80' value='".$REP[0]."'></span>";// nom de la carte / ligne de menu maps
//echo"<script type='text/javascript'>document.getElementById(\"nf1\").setAttribute(\"value\",mapX[mapX.length-2]);document.getElementById(\"nf1\").value=mapX[mapX.length-2]</script>";
echo"<script type='text/javascript'>;document.getElementById(\"nf1\").setAttribute(\"value\",\"\");document.getElementById(\"nf1\").value=\"".$REP[0]."\";nomrep1=\"".$REP[0]."\"</script>";

echo "<p><font face='Helvetica' size='2'>indiquez le contour <br><i>(ex:continent européen,  France , région X...)</i></font></p>";
echo "<input id='nf2' type='text' onmouseout='javascript:nomrep2=this.value' name='N[2]' maxlength='80' value=''>";// contour ou échelle
echo"<script type='text/javascript'>document.getElementById(\"nf2\").setAttribute(\"value\",\"\");document.getElementById(\"nf2\").value=\"\"</script>";



echo "<p><font face='Helvetica' size='2'>indiquez la maille<br><i>(ex:pays,  région , communes, zones d'emploi...)</i></font></p>";
echo "<input id='nf3' type='text' onmouseout='javascript:nomrep3=this.value' name='N[3]' maxlength='40' value=''>";// maille
echo"<script type='text/javascript'>document.getElementById(\"nf3\").setAttribute(\"value\",maille);document.getElementById(\"nf3\").value=maille</script>";




echo "<p><font face='Helvetica' size='2'>inscrivez un descriptif en quelques lignes<br><i>(ex:pays,  région , communes, zones d'emploi...)</i></font></p>";
echo "<textarea id='nf4' type='text' onmouseout='javascript:nomrep4=this.value' name='N[4]' value=''></textarea>";// libellé long ou commentaire sur carte commentTitrecarte
echo"<script type='text/javascript'>document.getElementById(\"nf4\").innerHTML=commentTitrecarte;document.getElementById(\"nf4\").value=commentTitrecarte;</script>";

echo "<br/><table  style='background-color:#E8E8FF'><tr><td style='vertical-align: bottom;width:50%'><p><font face='Helvetica' size='2'>Auteurs de la Carte<br><small><small><i>(Si posssible, respecter la présentation suivante : auteur1 : adresse1 --- auteur2 : adresse2)</i></small></small></font></p>";
echo "<textarea style='width:100%'  id='nf5' type='text' style='visibility:visible' onmouseout='javascript:nomrep5=this.value' name='N[5]' value=''></textarea>";// auteurs originaux
								echo"<script type='text/javascript'>

								var autorig=''
								if(typeof(originalauthors)!='object' ){
								document.getElementById('nf5').setAttribute('value',originalauthors);
								document.getElementById('nf5').value=originalauthors;
								}
								else
								{
								if(otherauthors.length==1){autorig=originalauthors[0]}else{
								autorig=originalauthors[0]+' : '+originalauthors[1]
								for(d=2;d<originalauthors.length;d+=2){
								autorig+=' --- '+originalauthors[d]+' : '+originalauthors[d+1]
								}
								}
								document.getElementById('nf5').setAttribute('value',autorig);
								document.getElementById('nf5').value=autorig;
								}  </script>";// auteurs originaux
echo "</td><td style='vertical-align: bottom;width:50%'>";
echo "<p><font face='Helvetica' size='2'>Autres auteurs du dossier<br/>cartes + données<br><small><small><i>(Si posssible, respecter la présentation suivante  auteur1 : adresse1 --- auteur2 : adresse2)</i></small></small></font></p>";
echo "<textarea style='width:100%'  id='nf6' type='text' style='visibility:visible' onmouseout='javascript:nomrep6=this.value' name='N[6]' value=''></textarea>";// autres auteurs
								echo"<script type='text/javascript'>

								var autother=''
								if(typeof(otherauthors)!='object'){
								document.getElementById('nf6').setAttribute('value',otherauthors);
								document.getElementById('nf6').value=otherauthors;
								}
								else
								{
								if(otherauthors.length==1){autother=otherauthors[0]}else{
								autother=otherauthors[0]+' : '+otherauthors[1]
								for(d=2;d<otherauthors.length;d+=2){
								autother+=' --- '+otherauthors[d]+' : '+otherauthors[d+1]
								}
								}
								document.getElementById('nf6').setAttribute('value',autother);
								document.getElementById('nf6').value=autother;
								
								}  </script>";// autres auteurs

echo "</td></tr></table>";// 


echo '<input type="submit" id="submit2" value="Valider" disabled="disabled" style="display:none;">';
echo "<p><input type='submit' id='submit' name='valid' value='Valider'></p>"; 
echo "</form>";


}//fin de ietape=1
//--------------------------------------------------------------------------------ECRITURE DE mappocoord.js-----------------------------------------
if($etape==2)
{
$Maille=$_REQUEST['E'];
$Nnom=$_REQUEST['N'];
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

include("../Controle/Sauv/sauv.php");
$array=array("15");
sauv($file,$array);	










$mpx=$numMaps[0]*5;
$numc=$numMaps[0]+1;
/*
$m="//****************\  CARTE n°".$numc."  /***************************************************\n";
$m=$m.'mapX['.($mpx).']="'.$Maille[0].'";;
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
*/
$m="//****************\  CARTE n°".$numc."  /***************************************************\n";
$m=$m.'mapX[mapX.length]="'.$Maille[0].'";;
mapX[mapX.length]="CARTOSVG.svg";
mapX[mapX.length]="datacarte.html";
mapX[mapX.length]="'.$Nnom[1].'";
mapX[mapX.length]="'.$REP[0].'";
sommableEchelle[sommableEchelle.length]= new Array("non précisé","non précisé",2);
var echelle="'.$Nnom[2].'";
var maille="'.$Nnom[3].'";
var commentTitrecarte="'.$Nnom[4].'";
var commentaireschamp="";
var theme=new Array("non","non","non");
var autrescommnt="";

var originalauthors="'.$Nnom[5].'";

var otherauthors="'.$Nnom[6].'";
libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);';


//on test si il le fichier mapsIliade.js a été mis à niveau pour le nouveau format de gestion des métadonnées et on le complète si nécessaire
$actu=0;
$contenuadd="";
$file_to_write="../../mapsILIADE.js";
$contenu = file_get_contents($file_to_write);
if(strpos( $contenu, "var sommableEchelle" ) === FALSE ){
$contenuadd="var sommableEchelle=new Array() // trois cas de figures codés 1 = sommable - 2 = sommable partiellement - 3 = NON sommable. Le code est inscrit en troisème terme du vecteur sommableEchelle[sommableEchelle.length]=new Array('','','');";
$actu=1;
$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenuadd);
fwrite($op_file,"\n");
fwrite($op_file,$contenu);
fclose($op_file);
}



echo $m;


$op_file = fopen("../../mapsILIADE.js","a+");
fwrite($op_file,"\n\n");

$add2="";
			if($actu==1){
			fwrite($op_file,"\n\n");
			for($i=0;$i<($numMaps[0]);$i+=1){
			fwrite($op_file,'sommableEchelle[sommableEchelle.length]= new Array("non précisé","non précisé",2);');
			fwrite($op_file,"\n");
			}
			fwrite($op_file,"\n\n");
			}
	
fwrite($op_file,$m);
fclose($op_file);


//on réouvre et on enlèves les antislash
/*
				$file_to_write="../../mapsILIADE.js";
				$contenu = file_get_contents($file_to_write);
				$contenu = stripslashes($contenu);

				$op_file = fopen($file_to_write,"w+");
				fwrite($op_file,$contenu);
				fclose($op_file);
*/
echo"<script type='text/javascript'>top.redem(-1)</script>";

}//fin de étape2



?>
</font>

</body>
</html>
