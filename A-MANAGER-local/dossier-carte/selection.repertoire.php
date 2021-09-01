<?php

// ATTENTION : voire la variable $inhib=10000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
// ATTENTION : voire les filtres 
//  Tout d'abord petite configuration.
// RQ: PHP; un peu comme LINUX a quelquefois du mal à résoudre le problème de déplacement dans les répertoires.

include('lister_simplement.class.php');

/*		CONFIGURATION
 *
 * A adapté suivant l'endroit à vos fichiers sont stocké.
 */

// $_SERVER['DOCUMENT_ROOT'] => Fournit le repertoire physique dans lequel sont stockés les informations (etc: /var/www )
define("mydir","../../");

// Adresse HTTP nécessaire pour localiser les fichiers du point de vue du reseau.
define("myhttp","../../");

// FIN CONFIGURATION
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
	<!-- <meta http-equiv="Content-type" content="text/html; charset=utf-8">  -->
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

	<script language="JavaScript">
	/*
	function openpopup(popurl, w, h) {
		window.open(popurl,'','width='+w+',height='+h);
	}
	*/
	var XXmenu=new Array("DATA-mappocoord.js","DATA-IcoSujet.js","DATA-IcoOther.js","DATA-Sujet.js","DATA-Other.js","DATA-Union.js","DATA-ligneSVG.js","DATA-SVG2.js","correctifcoord.js","CODE_NOMS.js","DATA-guide-cartes.js","DATA-guide-questions.js","DATA-images1.js","DATA-imagesfond.js","DATA-menuValidit.js","DATA-validit.js","DATA-ImageText.js")	
	var XXmenu2=new Array("parametre généraux de la carte","menu Icones n°1","menu Icones n°2","Menu Graphiques n°1","Menu Grahiques n°2","Unions entre les aires de la cartes","fichier des coordonnées des contours apposés sur la carte","coordonnées des aires de la carte","correctifs apportés aux coordonnées de centroïdes","Noms des aires de la carte","Saisie des paramètres des fonds de cartes seuls dans le Module pédagogique GUIDE","Saisie des paramètres des CARTES COMPOSEES et HYPOTHESES dans le Module pédagogique GUIDE","Saisie des images diaporama","Saisie des images en arrière plan","Menu pour les validités","saisie des fichiers pour les validités","encadré Image et texte")
	var XXfichiersMAJ=new Array("Saisie-mappocoord.php","SaisieICO-sujet.php","SaisieICO-other.php","SaisieGRAPH-sujet.php","SaisieGRAPH-other.php","Saisie-Union.php","Saisie-ligneSVG.php","Saisie-SVG2.php","Saisie-correctifcoord.php","Saisie-CODE_NOMS.php","Saisie-guide-cartes.php","Saisie-guide-questions.php","Saisie-images1.php","Saisie-imagesfond.php","Saisie-menuValidit.php","Saisie-validit.php","Saisie-ImageText.php")
	var Xrep
	var Xmenu
	function choixmenujs(rep){
	
	document.getElementById("foldersandfiles").innerHTML=""
	document.getElementById("divfichiersjs").style.top="100px"
	Xrep=rep
	document.getElementById("nrep").innerHTML=Xrep
	document.getElementById("divselectmenu").style.visibility="visible"
	}
	function choixmenujs2(rep,k){
document.getElementById("header").innerHTML="Répertoire choisi : <span style='color:red'>"+Xrep+"</span> <--\> Fichier en cours de mise à Jour : <span style='color:red'>"+XXmenu[k]+"</span><br><center><i><b><big>Objet : <span style='color:violet'>"+XXmenu2[k]+"</span></big></b></i></center>"
	document.getElementById('divselectmenu').style.visibility='hidden'

	var REP
	var inhtml='<iframe id="framefichiers" name="framefichiers" width=600 height=480 src="'+XXfichiersMAJ[k]+'?REP='
	inhtml+=rep
	inhtml+="&cible="
	inhtml+=XXmenu[k]
	inhtml+='"></iframe>'
	document.getElementById("divfichiersjs").innerHTML=inhtml

	}
	</script>

	<title>Rédaction des menus de données<?php echo " sur :: ".myhttp." ::"; ?></title>
</style>
</head>

<body style="font-family:arial;font-size:13px">
	<br />
	
	<table border="0" width="600" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td id="header"><B><BIG>Rédaction des menus de données</big></b><?php echo " sur :: ".myhttp." ::"; ?></td>
		</tr>
		<tr>
			<td id="content">
				<hr noshade size="1" color=#ccc>

				<?php
		// Code qui permet de se déplace dans les repertoire en passant l'adresse par l'url.
		if ( array_key_exists( "basedir", $_GET ) ) {
		//echo '<script language="javascript">alert("url composée")</script>';
			$basedir = urldecode( $_GET['basedir'] ); // <-- Really need to validate the result here!
		} else {
		//echo '<script language="javascript">alert("sans additif url")</script>';
			$basedir = mydir."/";
		}

		// Ensemble des fichiers et répertoires à ignorés.
		// ex: $filter = array( '.jpg', '.gif', '.zip', '.sit' ,'bebe.jpg','bebe');
		//$filter = array();
		$filter = array('A-HISTOMUMTI','A-MANAGER-local','COURBE','HISTO','Srip32','TEXTE','autodiag0-sauvegarde_fichiers','css','js','images','imagespointcle','PageWebIliadeligne','PagebreveCARTOnormale-ligne','PagebreveCARTOiliade-ligne','PagebreveCARTOvision-ligne','Pageb W SOURCES CARTOiliade-ligne - Copie','demo-pane-splitter_fichiers');

		// Affichons la liste des fichiers et répertoire contenu dans note sous répertoire cible.
		// Return formatted HTML
		$dir = $basedir;
		$contents = get_folder_listing( $dir, $filter );
echo '<div id="foldersandfiles" style="visibility:visible;position:absolute;top:100px">';
		echo '<table id="table_border" border="0" width="678" cellspacing="0" cellpadding="4">';
		echo '<tr id="row_header">';
		echo '<td width="300">Name</td>';
		echo '<td width="80" align="right">Size</td>';
		echo '<td width="10">&nbsp</td>';
		echo '<td width="140">Last Modified</td>';
		echo '</tr>';
		if ($contents) {
		//echo '<tr><td>Files------------------------------------------------<td></tr>';
$inhib=10000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
			for ( $i = $inhib; $i < count( $contents ); $i++ ) {
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					echo '<tr id="row_odd">';
				} else {
					// Even
					echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {
				
					echo '<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.myhttp.substr($dir,strlen(mydir),strlen($dir)).$fileinfo[1].'"><img src="img/fichier.gif" alt="fichier: " width="16" height="16" border="0"> '.$fileinfo[1].'</a></td>';
					echo '<td align="right">'.$fileinfo[2].'</td>';
					echo '<td width="10">&nbsp</td>';
					echo '<td>'.$fileinfo[3].'</td>';
					echo '</tr>';
				} else {}
			}
			echo '<tr><td>Folders<br> <small><i>les dossiers suivants ont été filtrés :';
			for($i=0;$i<count($filter);$i++){echo ' * '.$filter[$i].'';}
			echo '</small></i> ----------------------------------------------<td></tr>';
			for ( $i = 0; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					echo '<tr id="row_odd">';
				} else {
					// Even
					echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {} else {
					
					echo '<td><a href="javascript:onclick=choixmenujs(\''.$fileinfo[1].'\')"><img src="img/dossier.gif" alt="repertoire: " width="16" height="16" border="0"> '.$fileinfo[1].'</a></td>';
					echo '<td align="right">&nbsp;&nbsp;&nbsp;</td>';
					echo '<td width="10">&nbsp</td>';
					echo '<td>'.$fileinfo[3].'</td>';
					echo '</tr>';
					//echo '<script language="javascript">document.write("<dt>'.$fileinfo[1].'</dt>")</script>';
					//echo '<tr><td>'.$fileinfo[1].'<td></tr>';
				}
			}
			
			
		}
		echo '</tr>';
		echo '</table>';
		echo '</div>';

				?>
				
			</td>
		</tr>
		<tr>
			<td id=content">
			<h3></h3>
			</td>
		</tr>
	</table>
	<div id="divfichiersjs" style="position:absolute;top:300px;left:30px">	</div>
	<div id="divselectmenu" style="position:absolute;top:100px;left:30px;visibility:hidden">
	
	<b><big>REPERTOIRE = <span id="nrep" style="color:red"></span></big></b>
	<b><i>
	<ul>
	<script language="javascript">
	for(i=0;i<XXmenu.length;i++){
	document.write('<li><a href="javascript:var k='+i+';onclick=choixmenujs2(Xrep,k)">'+XXmenu[i]+'</a><dt><small>'+XXmenu2[i]+'</dt></small></li>')
	}
	</script>
	</ul>
	</b></i>
	<script language="javascript">
function ferme(){
setTimeout("window.location.href='vide.htm'",100)
}
		</script>

	</div>
	<div style="position:fixed;top:15;left:30"><input type="button" value="fermer"  onclick="top.selectOnglet('east',1);ferme()"></input></div>
</body>
</html>
