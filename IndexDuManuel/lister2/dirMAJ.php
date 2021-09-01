<?php

// ATTENTION : voire la variable $inhib=10000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
// ATTENTION : voire les filtres 
//  Tout d'abord petite configuration.
// RQ: PHP; un peu comme LINUX a quelquefois du mal à résoudre le problème de déplacement dans les répertoires.

// *********************************************************
//Module Mise à jour : 
$REP = urldecode( $_GET['rep'] ); // répertoire gaïamundi ( nom du répertoire racine de la version à mettre à jour  et adresse relative sur le serveur par rapport au module de mise à jour =
$REPcible = urldecode( $_GET['REPcible'] );// adresse relative du  répertoire à lister
//après exécution, le fichier renvoie un tableau avec la liste des fichiers du répertoire REPCible et leurs dates de modification

function listingFolder($REPx){
$result2 = array();
/*		CONFIGURATION
 *
 * A adapté suivant l'endroit à vos fichiers sont stocké.
 */

// $_SERVER['DOCUMENT_ROOT'] => Fournit le repertoire physique dans lequel sont stockés les informations (etc: /var/www )
//define("mydir","../".$REPx);//
$mydir="../".$REPx;
// Adresse HTTP nécessaire pour localiser les fichiers du point de vue du reseau.
//define("myhttp","..".$REPx);//

// FIN CONFIGURATION


		if ( array_key_exists( "basedir", $_GET ) ) {

			$basedir = urldecode( $_GET['basedir'] ); // <-- Really need to validate the result here!
		} else {

			$basedir = $mydir."/";
		}

		// Ensemble des fichiers et répertoires à ignorés.
		$filter = array( 'lister2','A0-ModuleMAJ','Controle','images','lister2','telechargements','MAJ','A0-ModuleMAJ.zip');
		$filterB = array( '','');

		$dir = $basedir;
		//echo '<script language="javascript">alert("dans listingFolder $dir=  '.$dir .'")</script>';
		//echo '<script language="javascript">alert("dans listingFolder $filter[0] =  '.$filter[0] .'")</script>';
		$contents = get_folder_listing( $dir, $filter );
$result2=$contents;
//echo '<script language="javascript">alert(" dans listingFolder $contents[0][1]= '.$contents[0][1].'")</script>';
return $result2;
}


function listedir ($contents,$X,$REPx){
$k=0;
echo '<script language="javascript">var listefile=new Array();var listedir=new Array();var ecrit="";var ecritfile=""</script>';

		if ($contents) {

			
				
$inhib1=0; // 0 pour activer le listage des répertoires

			for ( $i = $inhib1; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] != "file" ) {} else {
				
		if(strpos($fileinfo[1],".zip")!=false & $fileinfo[1]!="A0-ModuleMAJ.zip"){
				
				echo'<script language="javascript"> 
				var fich="'.$fileinfo[1].'"
				//if(fich.indexOf(".zip")>=0 & fich != "A0-ModuleMAJ.zip"){
				
				
				listefile[listefile.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');
				ecritfile+="<br><span  style=\"position:relative;left:-50px;font-family:arial;font-size:12px;color:blue;opacity:0.7\"><img id=\"im'.$k.'\" width=12 onclick=\"popupfichMAJ(\''.$fileinfo[1].'\')\"><b> <a href=\"../'.$fileinfo[1].'\" target=\"_blank\">'.$fileinfo[1].'</a></b></span>"
			
			
				N+=1
				k+=1
			
				
				//}
				
				</script>';

			$k+=1;
			};
				$X+=1;	
				
				
				}
				
			}
			
			
			
			
			
$inhib2=1000; // 0 pour activer le listage des répertoires

			for ( $i = $inhib2; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {} else {
				echo'<script language="javascript"> 
				
				listedir[listedir.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');
				ecrit+="<span style=\"font-family:arial;font-size:12px;color:gray; opacity:1\"><b>'.$fileinfo[1].'<div style=\'position:relative;left:50px\' id=\''.$fileinfo[1].'\'></div>"
			
				</script>';
			
					//echo '<br>'.$fileinfo[1].'<span id="'.$fileinfo[1].'">            xx</span>';
				}
			}
			//echo '<script language="javascript">parent.recuplisteDir(listedir)</script>';
			
		}


return $X;
}
				?>

