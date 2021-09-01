<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

</head><body>


<?php

/*
Merci aux auteurs de ce script
Téléchargé sur http://www.script-tout-fait.com/fr/script-Zipper-un-dossier-ainsi-que-son-contenu-24.html le 24/02/2018
		Description :
			Fonction récursive zippant le contenu du répertoire passé en paramètre, incluant tous les sous dossiers et tous les fichiers
		
		Note :
			Le script doit avoir les autorisations adéquates pour le dossier de destination !
			
		Prototype :
			bool zipper_repertoire_recursif ( string $nom_archive , string $adr_dossier [, string $dossier_destination] )
			/!\ Les paramètres $zip et $dossier_base ne doivent pas être modifiés /!\
		
		Paramètres :
			string $nom_archive         : le nom de l'archive qui sera créée se terminant par '.zip' (ex. 'archive.zip', 'test.zip', etc.)
			string $adr_dossier         : le dossier à archiver (ex. 'images', '../dossier1/dossier2', etc.)
			string $dossier_destination : le dossier dans lequel placer l'archive une fois celle-ci créée (ex. 'images/zip', '../archives', etc.)
			
		Retourne :
			True si ça a marché, false le cas échéant
*/
//echo'<script language="javascript" >alert("'.urldecode( $_GET['nummapx'] ).'")</script>';

$nummapx=urldecode( $_GET['nummapx'] );

$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire : 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
														    //0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$REPDEPModif = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	
		$REPDEPModif=str_replace("%20"," ",$REPDEPModif);	
		
$REPDEPART = urldecode( $_GET['rep'] ); // répertoire  ( nom du répertoire  carte à copier)
		$REPDEPART=str_replace("%20"," ",$REPDEPART);

$REPorigine = $REPDEPART;


$plateforme_distante = urldecode( $_GET['plateforme'] ); // nom de la plateforme distante où se situe le dossier carte à copier  dans la plateforme courante
		$plateforme_distante=str_replace("%20"," ",$plateforme_distante);

$pdd = urldecode( $_GET['pdd'] ); // nom de la plateforme de travail où l'on va copier le dossier carte ( plateforme de départ du travail en cours)
		$pdd=str_replace("%20"," ",$pdd);

$REPDESTINATION ="";
$NOMZIP = $REPDEPModif;




		//zipper_repertoire_recursif($NOMZIP.'.zip', $REPDEPART , $REPDESTINATION);
function zipper_repertoire_recursif($nom_archive, $adr_dossier, $dossier_destination = '', $zip=null, $dossier_base = '') {

	if($zip===null) {
		// Si l'archive n'existe toujours pas (1er passage dans la fonction, on la crée)
		$zip = new ZipArchive();
		if($zip->open($nom_archive, ZipArchive::CREATE) !== TRUE) {
			// La création de l'archive a échouée
			return false;
		}
	}
	
	if(substr($adr_dossier, -1)!='/') {
		// Si l'adresse du dossier ne se termine pas par '/', on le rajoute
		$adr_dossier .= '/';
	}
	
	if($dossier_base=="") {
		// Si $dossier_base est vide ça veut dire que l'on rentre
		// dans la fonction pour la première fois. Donc on retient 
		// le tout premier dossier (le dossier racine) dans $dossier_base
		$dossier_base=$adr_dossier;
	}
	
	if(file_exists($adr_dossier)) {
		if(@$dossier = opendir($adr_dossier)) {
			while(false !== ($fichier = readdir($dossier))) {
				if($fichier != '.' && $fichier != '..') {
					if(is_dir($adr_dossier.$fichier)) {
						$zip->addEmptyDir($adr_dossier.$fichier);
						zipper_repertoire_recursif($nom_archive, $adr_dossier.$fichier, $dossier_destination, $zip, $dossier_base);
					}
					else {
						$zip->addFile($adr_dossier.$fichier);
					}
				}
			}
		}
	}
	
	if($dossier_base==$adr_dossier) {
		// On ferme la zip
		$zip->close();
		
		if($dossier_destination!='') {
			if(substr($dossier_destination, -1)!='/') {
				// Si l'adresse du dossier ne se termine pas par '/', on le rajoute
				$dossier_destination .= '/';
			}
			
			// On déplace l'archive dans le dossier voulu
			if(rename($nom_archive, $dossier_destination.$nom_archive)) {
				return true;
			}
			else {
				return false;
			}
		}
		else {
			return true;
		}
	}
}

sleep(1);    // this does the trick
rename ("./".$REPDEPART, $REPDEPModif); //no error 

zipper_repertoire_recursif($NOMZIP.'.zip', $REPDEPModif , $REPDESTINATION);



if (is_resource($REPDEPModif)){
    fclose($REPDEPModif);
	}

//echo'<script language="javascript" >alert("fin ziptransfertDosCarte.php")</script>';	
echo'<script language="javascript" >window.location.href="renameDosCarte.php?repcible='.$REPDEPModif.'&rep='.$REPDEPART.'"</script>';

/**/



?>

</body></html>