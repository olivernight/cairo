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
<script language="javascript" src="../../mapsILIADE.js"></script>
	<script language="JavaScript">

	/*
	function openpopup(popurl, w, h) {
		window.open(popurl,'','width='+w+',height='+h);
	}
	
	*/
	
	var repracine=window.location.href
	repracine=repracine.replace('A-MANAGER-local/txt_to_html-Num0/selection.repertoire.php','')
	
	//var XXmenu=new Array("étalonner","option de base","validités")	;
	var XXmenu=new Array("option de base","ajouter des colonnes au fichier existant")	
	var XXmenu2=new Array("intégration de données avec étalonnage pour les fichiers lacunaires ou mal indexés","Ajoute des colonnes de données au fichier existant<br>(fonction étalonnage intégrée)")
	var XXfichiersMAJ=new Array("SaisieICO-sujet.php","SaisieICO-other.php","SaisieGRAPH-sujet.php","SaisieGRAPH-other.php")
	var Xrep
	var Xmenu
	function choixmenujs(rep){
	document.getElementById("foldersandfiles").innerHTML=""
	document.getElementById("divfichiersjs").style.top="95px"
	Xrep=rep
	document.getElementById("nrep").innerHTML=Xrep
	document.getElementById("divselectmenu").style.visibility="visible"
	}
	function choixmenujs2xxxxxx(rep,k){
document.getElementById("header").innerHTML="<small><center><small>Objet : <span style='color:red'>"+XXmenu[k]+"</span> <-\> Répertoire : <span style='color:red;'>"+Xrep+"</span><i> <-\> <b>Fichier : <span style='color:violet'>"+XXmenu2[k]+"</span></b></i></small></center></small>"
	document.getElementById('divselectmenu').style.visibility='hidden'

	var REP
	var inhtml='<iframe id="framefichiers" name="framefichiers" width=400 height=1710 src="'+XXfichiersMAJ[k]+'?REP='
	inhtml+=rep
	inhtml+="&cible="
	inhtml+=XXmenu2[k]
	inhtml+='"></iframe>'
	document.getElementById("divfichiersjs").innerHTML=inhtml

	}
		function choixmenujs2(rep,k){
document.getElementById("header").innerHTML="<br><br>Répertoire choisi : <span style='color:red'>"+Xrep+"</span> <br><i><b><big>Objet : <span style='color:violet'>"+XXmenu2[k]+"</span></big></b></i>"
	document.getElementById('divselectmenu').style.visibility='hidden'

	var REP
	var inhtml='<iframe id="framefichiers" name="framefichiers" frameborder="0" width=400 height=480 src="txt_to_html.php?etape=&REP='
	inhtml+=rep
	inhtml+="&cible="
	inhtml+=XXmenu[k]
	inhtml+="&RACINE="
	inhtml+=repracine
	inhtml+="&opt="
	inhtml+=(k+1)
	inhtml+='"></iframe>'

	document.getElementById("divfichiersjs").innerHTML=inhtml

	}
	</script>

	<title>            Rédaction des menus de données</title>
</style>
</head>

<body style="font-family:arial;font-size:13px;width:400px">


<script language="javascript">
var toutescartes=top.transTTCARTES("return toutescartes")
document.write('<a name="haut"></a><table border="0" width="400" cellspacing="0" cellpadding="0" align="center"><tr ><td id="header"><center><b><BIG>Intégration de données</big></b></center></td></tr><tr><td id="content">')
//alert("icila")
document.write('<div id="foldersandfiles" style="visibility:visible;position:absolute;top:100px">');
document.write('<table id="table_border" border="0" width="400" cellspacing="0" cellpadding="1">');
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
					document.write( '<td align="left" width="100"><a href="javascript:onclick=choixmenujs(\''+mapX[i]+'\')"><img src="img/dossier.gif" alt="repertoire: " width="16" height="16" border="0"><small> '+mapX[i]+'</small></a><br><small><small><small><i>index interne : '+((i-4)/5+1)+'</i></small></small></small></td>');
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
	<div id="divfichiersjs" style="position:absolute;top:95px;left:10px">	</div>
	<div id="divselectmenu" style="position:absolute;top:100px;left:30px;visibility:hidden">
	
	<b><big>REPERTOIRE = <span id="nrep" style="color:red"></span></big></b>
	<b><i>
	<ul>
	<script language="javascript">
	for(i=0;i<XXmenu.length;i++){
	document.write('<li><a href="javascript:var k='+i+';onclick=choixmenujs2(Xrep,k)">'+XXmenu[i]+'</a><dt><small>'+XXmenu2[i]+'</dt></small><br><br></li>')
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
	<div style="position:fixed;top:5px;left:5px"><input type="button" value="fermer"  onclick="top.selectOnglet('east',1);ferme()"></input></div>
</body>
</html>
