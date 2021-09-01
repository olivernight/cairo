<?php
$rg = "";
$file_hypertext = "cartO-".$n[1]."-encaps.htm";
$file_onglet = "page-".$n[1]."-Site.htm";

// cas modif
$file = array(
'10..'=>'menuencapsulesILIADE.js', 	// breve.php central hypertext x
'11..'=>'menuencapsulesreduitILIADE.js', // breve.php central hypertext x
'12../'.$rep=>'menuencapsuleslocal-Site.js', // breve.php site filleuil hypertext x
'13../HYPERTEXTES-tous'=>$file_hypertext, // breve.php central x
'14../'.$rep=>$file_hypertext, // breve.php site filleuil hypertext x
'15../..'=>'mapsILIADE.js', // creation_Dcarte.php x
'16../../'.$REP=>$cible, // MANAGERIco.php MANAGERIco2.php x
'17../creation_site'=>'liensSites.js', // creation_site.php x // Sites admis à la publication (actu_menu_liens-Sites.php) x
'18../'.$rep=>$file_onglet, // breve.php site filleuil onglet x
'19../RADARHypertexte/rad'=>'listeradar.js', // breveRADAR.php x
'20../RADARHypertexte/rad'=>$n[1].'.js', // breveRADAR.php fichier .js x
'21../'.$rep=>'ItemMenu.js', // breve.php site filleuil onglet x
'22../../Site-'.$REP=>'menuencapsules-Site.js', // Actualiser les sites (actu_menu_files_site.php) x
'23../../Site-'.$REP=>'menuencapsuleslocal-Site.js', // Actualiser les sites (actu_menu_files_site-local.php) x 
'24../../Site-'.$REP=>'ItemMenu.js', // Actualiser les sites (actu_menu_files_site-localOnglets.php) x
'25../../Site-'.$REP=>'permissionscartes.js', // Accès aux cartes (actu_menu_cartes_Sites.php) x
'26../..'=>'menuencapsules-Site.js', // Actualiser les sites (actu_menu_files_site-pilote.php) x
'27../..'=>'menuencapsulesILIADE.js', // Actualiser les sites (actu_menu_files_Global.php) x
'28../../'.$REP=>'DATA-mappocoord.js', // Gestion des DONNEES > intégration de données (txt_to_html.php) x
'29../'=>'menuARTICLES.js', // Actualiser les pages Textes et Notes (actu_menu_files_TextesetNotes.php) x
'30../HYPERTEXTES-articles'=>'cartO-'.$n[1].'-encaps.htm', // breve.php dans pagesARTICLES x
'31../../'.$REP=>$cible, // ADD_menu_MANAGER.php dans A-MANAGER-local/transdata x
'32../../'.$REPDESTIN=>$cibledestin, // ADD_menu_MANAGER.php dans A-MANAGER-local/transdata (Sauvegarde des fichiers principal.html ou complementaire.html dans le cas de transfert de données d'une carte à l'autre ) x
'33../../'.$REP[0].'/datafiles'=>$Fich, // makefileData.php dans A-MANAGER-local/transdata (Sauvegarde du fichiers principal.txt ou complementaire.txt avant leur actualisation lors de de transfert de données ou autres opérations sur les données ) x
'34../../'.$REPDESTIN.'/'=>$cibledestin, // A-MANAGER-local/CREATEUR/CREATEUR_NAT_et_PARTIE/Txt_to_html-REG Module.php dans  sauvegarde du fichier principal.html
'35../../'.$REP2=>$cible2, // PAGECARTO MANAGERIco.php MANAGERIco2.php x
);

function sauv($rg,$ok){
$date_time=date("d-m-Y-H-m-s");
	foreach($rg as $dossier=>$valeur){
		for($i=0;$i<5;$i++){
			$rang = substr($dossier,0,2);
			if($rang==$ok[$i]){
				$dossier = substr($dossier,2,strlen($dossier));
				//echo '<script language="javascript">alert("'.$dossier.'")</script>';

$MyDirectory = opendir($dossier);
    while (false !== ($file = @readdir($MyDirectory))) {
//echo '<script language="javascript">alert("'.$file.'    '.$valeur.'")</script>';
        if ($file == 'N-1.'.$valeur) {copy($dossier.'/'.'N-1.'.$valeur,$dossier.'/'.'N-2.'.$valeur);}
		if ($file == 'N-2.'.$valeur) {copy($dossier.'/'.'N-2.'.$valeur,$dossier.'/'.'N-3.'.$valeur);}
		if ($file == 'N-3.'.$valeur) {copy($dossier.'/'.'N-3.'.$valeur,$dossier.'/'.'N-4.'.$valeur);}
		

    }
closedir($MyDirectory);
copy($dossier.'/'.$valeur,$dossier.'/'.'N-1.'.$valeur);	


			}
		}
	}
}
?>