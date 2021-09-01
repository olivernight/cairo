<?php

// ATTENTION : voire la variable $inhib=10000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
// ATTENTION : voire les filtres 
//  Tout d'abord petite configuration.
// RQ: PHP; un peu comme LINUX a quelquefois du mal à résoudre le problème de déplacement dans les répertoires.



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
<?php
	$alea=mt_rand();
echo '<script language="javascript" src="../../mapsILIADE.js?updated='.$alea.'"></script>';
?>

	<script language="JavaScript">
var listeAddContoursSVG= new Array()
</script>
<script language="javascript" id="listecontours"></script>
<script language="JavaScript">
	/*
	function openpopup(popurl, w, h) {
		window.open(popurl,'','width='+w+',height='+h);
	}
	
	*/
	

var urlvar=''
    
    if (window.location.search != '') {
    longueur = window.location.search.length - 1;
    
    data = window.location.search.substr(1,longueur);
    donnees = data.split('&');
    urlvar = new Array();
    urlvarnum = new Array();
    for (var i=0; i < donnees.length; i++) {
    position = donnees[i].indexOf('=');
    variable = donnees[i].substr(0,position);
    pos = position + 1;
    valeur = decodeURI(donnees[i].substr(pos,donnees[i].length));
    while (valeur.search(/\+/) != -1)
    valeur = valeur.replace(/\+/,' ');
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }
	
	var MODELE=urlvar["MODELE"]
    var carte
	var Xrep
	var tabliste=""
	function CreaPageCarto(carte){
		if(MODELE==6){
			var lesplateformes=window.location.href.split("/A-MAN")[0]
			var reporig=
			//alert("modele==6 pour carte :   lister3-SANS/ModuleMAJ.php?pdd="+lesplateformes+"/"+carte+"&plateforme="+lesplateformes+"&rep=PageCartoDossier&repcible=PageCartoDossier-SANS")
			window.location.href="lister3-SANS/ModuleMAJ.php?pdd="+lesplateformes+"/&plateforme="+lesplateformes+"/&rep="+carte+"/PageCartoDossier&repcible="+carte+"/PageCartoDossier-SANS&chgt=1&nummapx="
			}else{
			window.location.href="choixlistefichiers.html?REP="+carte+"&MODELE="+MODELE
			}

	}
	
	var typ=""
	if (MODELE==1){typ="Modèle horizontal";}
	if (MODELE==2){typ="Modèle vertictal";}
	if (MODELE==3){typ="Modèle collaboratif (vertical)";}
	if (MODELE==4){typ="Modèle PANORAMA LYON 2010";}
	if (MODELE==5){typ="Modèle article (-BLANC)";}
	</script>

	<title>            Génération de Modules PageCarto(1)</title>
</style>
</head>

<body style="font-family:arial;font-size:13px">


<script language="javascript">
var toutescartes=top.transTTCARTES("return toutescartes")
document.write('<a name="haut"></a><table border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tr ><td id="header"><center><b><BIG>Génération de Modules PageCarto(1)</big></b><br><span style="color:green">'+typ+'</span></center></td></tr><tr><td id="content">')

document.write('<div id="foldersandfiles" style="display:block;position:absolute;top:100px">');
document.write('<table id="table_border" border="0" width="500" cellspacing="0" cellpadding="1">');
document.write('<tr id="row_header" style="font-weight:bold">');
document.write('<td width="40" align="left">Répertoire</td>');
document.write('<td width="100" align="left">titre de la carte</td>');
document.write('<td width="25">Echelle</td>');
document.write('<td width="20">Maille</td>');

document.write('</tr>');			
			var coule="#E4E4E4"
			var coule2="#C0C0C0"
			var numerocarte=0
			var numcarte=""
					for(i=4;i<mapX.length;i+=5){
					if(toutescartes=='' & libelmap[(i-4)/5][5]=="none"){}else{
					if(coule=="white"){coule="#E4E4E4"}else{coule="white"}
					document.write( '<tr  style="background-color:'+coule+'"   >')
					document.write( '<td align="left" width="100"><a href="javascript:onclick=CreaPageCarto(\''+mapX[i]+'\')"><img src="img/dossier.gif" alt="repertoire: " width="16" height="16" border="0"><small> '+mapX[i]+'</small></a><br><small><small><small><i>index interne : '+((i-4)/5+1)+'</i></small></small></small></td>');
					if(coule2=="#E4F4FC"){coule2="#C0C0C0"}else{coule2="#E4F4FC"}
					if(libelmap[(i-4)/5][5]!="none"){numerocarte+=1;numcarte=numerocarte}else{numcarte="non publiée"}
					document.write('<td align="left"  style="background-color:'+coule2+'"><b><small><span style="color:red"><b>n° : '+numcarte+'</b></span><br>'+mapX[i-1]+'</small><b></td>');
					document.write( '<td><small>'+libelmap[(i-4)/5][0]+'</small></td>');
					document.write( '<td width="30"><small>'+libelmap[(i-4)/5][1]+'</small></td>');
					
					document.write( '</tr>');
					}
					}
					
		//document.write('</tr>');
		document.write('</table>');
		document.write('</div>');

				</script>
				
			</td>
		</tr>
		<tr>
			<td id=content">
			<h3></h3>
			</td>
		</tr>
	</table>

	<script language="javascript">

	
function ferme(){
setTimeout("window.location.href='vide.htm'",100)
}
		</script>

	</div>
	<div style="position:fixed;top:5px;left:5px"><input type="button" value="fermer"  onclick="top.selectOnglet('east',1);ferme()"></input></div>
</body>
</html>
