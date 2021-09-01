<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">
var liensSites=new Array()
var listpubcartovision=new Array()
var rangliste=new Array()
</script>
<script type='text/javascript' src='liensSites.js'></script>
<script type='text/javascript' src='../Controle/Saisie/saisie.js'></script>
<script type='text/javascript' src='../Controle/Redondance/redondance.js'></script>
<script type='text/javascript' src='../Controle/bouton.js'></script>
<script type="text/javascript">
var liensSites_temp = liensSites
var nomrep=""
/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
//alert(liensSites)
</script>
<?php


$cible = urldecode( $_GET['cible'] );
$RACINE= urldecode( $_GET['RACINE'] );

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
echo "<script type='text/javascript'>var check_r='repertory_site';  var alerter=''; </script>";		
echo '<form  action="'.$PHP_SELF.'?etape=2&cible='.$cible.'&RACINE='.$RACINE.'" method="post" Onkeyup="javascript: var inputs=new Array(document.getElementById(\'nf\').value); detect(inputs,CaracteresInterdits1); check_redondance(inputs,check_r,liensSites_temp);" onkeypress="refuserToucheEntree(event);">';
echo "<p><font face='Helvetica' size='2'>Choisissez le nom du nouveau répertoire des fichiers hypertextes<br><i>( ce nom sera la racine du nom du nouveau site)</i></font></p>";
echo"<script type='text/javascript'></script>";
echo "<input id='nf' type='text' onmouseout='javascript:nomrep=this.value' name='R[0]' value='Choisir..'>";
echo "<div id='alert' style='visibility:hidden'></div><br>";
echo "<input type='submit' id='submit' value='Valider'>";
echo "<input type='submit' id='submit2' value='Valider' disabled='disabled' style='display:none;'>";
echo "</form>";
}
else
{
$REP=$_REQUEST['R'];
if(count($REP)>0 & $REP[0]!=""){// protection anti robot google
$dir="../../";
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
$repertoiredepart="../../Site-0/";
$repertoireDestination ="../../Site-".$REP[0]."/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';
mkdir ("../../Site-".$REP[0]);

//clonage des fichiers de base du dossier Site-0
$listefile= array("format_page.js","haut.html","carretransparent.gif","cbleu.gif","haut_box.png","wikimode.png","index.html","pageA1.html","bandeau.jpg","bandeau.html","ItemMenu.js","page-liens-Site.htm","page-Accueil-Site.htm","entetes.php","breve.php","ecrit_hypertext.html","menuencapsules-Site.js","Wysiwyg.js","Wysiwyg.css","editpas.js","editeur.png","menuencapsuleslocal-Site.js","abonnement.png","vert.png","bleu.png","violet.png","rouge.png","jaune.png","vide.htm","thickbox.js","liensSites.html","inhibition.js","permissionscartes.js","page-infos-Site.htm");
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);


}
copy($repertoiredepart."cartO-Sommaire-Site-0-encaps.htm",$repertoireDestination."cartO-Sommaire-Site-".$REP[0]."-encaps.htm");
//met un double du sommaire vierge dans le répertoire commun des hypertextes du back-office pour modification via éditeur et actualisation
//copy($repertoireDestination."cartO-Sommaire-Site-".$REP[0]."-encaps.htm","../../HYPERTEXTES-tous/cartO-Sommaire-Site-".$REP[0]."-encaps.htm");

/*
// création du répertoire images 
$repertoiredepart="../../Site-0/images/";
$repertoireDestination ="../../Site-".$REP[0]."/images/";
//echo'<script language="javascript">alert("'.$repertoireDestination.'")</script>';
mkdir ("../../Site-".$REP[0]."/images");

//clonage des fichiers de base du dossier Site-0
$listefile= array();
$co=count($listefile);

for($x=0;$x<count($listefile);$x++){
//echo'<script language="javascript">alert("'.$listefile[$x].'")</script>';
copy($repertoiredepart.$listefile[$x],$repertoireDestination.$listefile[$x]);


}
*/



$repertoiredepart="../../";
$repertoireDestination ="../../";
//création de la liste de publication menuencaps-Site-....js
$fichier2="../../Site-".$REP[0]."/menuencapsules-Site.js";
//echo'<script language="javascript">alert("'.$fichier2.'")</script>';
$op_file2=fopen($fichier2,"w+");// ajout en fin de fichier
fwrite($op_file2,"var listpubcartovision=new Array();var rangliste=new Array();;\n");
fwrite($op_file2,"var menuencaps=new Array();\n\n");
fwrite($op_file2,"menuencaps[menuencaps.length]=\"Sommaire-Site-".$REP[0]."\";\n");
fwrite($op_file2,"listpubcartovision[listpubcartovision.length]=1;\n");
fwrite($op_file2,"rangliste[rangliste.length]=1;\n\n");
fclose($op_file2);
//ajout de la ligne sommaire du nouveau site dans le menu des hypertexte de l'interface back-office
/*
$fichier3="../../menuencapsulesILIADE.js";
$op_file3=fopen($fichier3,"a+");// ajout en fin de fichier
fwrite($op_file3,"\n\n");
fwrite($op_file3,"menuencaps[menuencaps.length]=\"Sommaire-Site-".$REP[0]."\";\n");
fwrite($op_file3,"listpubcartovision[listpubcartovision.length]=1;\n\n");
fclose($op_file3);
*/
// création du fichier REP.js d'identification du répertoire
$fichier3="../../Site-".$REP[0]."/REP.js";
$op_file3=fopen($fichier3,"w+");
fwrite($op_file3,"var repsite='Site-".$REP[0]."'\n");
fclose($op_file3);
// création de la page d'accueil di site dans le répertoire général

$NEWNOM="Site-".$REP[0]."/Site-".$REP[0].".htm";
$FNOM="Site-0/Site-0.htm";

copy($repertoiredepart.$FNOM,$repertoireDestination.$NEWNOM);

include("../Controle/Sauv/sauv.php");
$array=array("17");
sauv($file,$array);	

// mise à joour de la luste des sites du réseau en étoile
$fichier5="liensSites.js";
$op_file5=fopen($fichier5,"a+");// ajout en fin de fichier
fwrite($op_file5,"\n\n");
fwrite($op_file5,"liensSites[liensSites.length]='Site-".$REP[0]."'\n");
fwrite($op_file5,"listpubcartovision[listpubcartovision.length]=1;\n");
fwrite($op_file5,"rangliste[rangliste.length]=1;\n");
fclose($op_file5);

//echo"<script type='text/javascript'>setTimeout(\"open('../../Site-".$REP[0]."/Site-".$REP[0].".htm')\",1500)</script>";

$fichierici="../../Site-".$REP[0]."/Site-".$REP[0].".htm";
echo '<html><head></head><body><a id="ahref" href="'.$fichierici.'" target="_blank">xx</a><script type="text/javascript" >
var strChUserAgent = navigator.userAgent
var strChEnd = strChUserAgent.substring(strChEnd); 
function click_me(element)
 {
  
 if(strChEnd.indexOf("Firefox") != -1) 
 {//pour ff

  window.open(document.getElementById("ahref").href,document.getElementById("ahref").target);
   }
  else
   
   {//pour chromium et autres 

    var evt = document.createEvent("MouseEvents"); // créer un évennement souris
    evt.initMouseEvent("click", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);  // intiailser l\'évennement déja crée par un click
    var cb = document.getElementById(element); // pointe sur l\'élement
    cb.dispatchEvent(evt);  // envoyer l\'évennement vers l\'élement
   }
 }
 var aici="ahref"
 setTimeout("click_me(aici)",1500)
 </script>';





echo"<script type='text/javascript'>top.selectOnglet('east',1)</script>";
echo"<script type='text/javascript'>setTimeout(\"window.location.href='../../vide.htm'\",1700)</script>";
}
}
//fin de if($etape!="")else..




?>
</font>

</body>
</html>
