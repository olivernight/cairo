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
		var urlvar=""
    
    if (window.location.search != "") {
    longueur = window.location.search.length - 1;
    
    data = window.location.search.substr(1,longueur);
    donnees = data.split("&");
    urlvar = new Array();
    urlvarnum = new Array();
    for (var i=0; i < donnees.length; i++) {
    position = donnees[i].indexOf("=");
    variable = donnees[i].substr(0,position);
    pos = position + 1;
    valeur = decodeURI(donnees[i].substr(pos,donnees[i].length));
    while (valeur.search(/\+/) != -1)
    valeur = valeur.replace(/\+/," ");
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }

	
		var XXmenu2=new Array("DATA-IcoSujet.js","DATA-IcoOther.js","DATA-Sujet.js","DATA-Other.js")	
	var XXmenu=new Array("menu Ponctuels n°1  (principal)","menu Ponctuels n°2  (complémentaire)","Menu Graphiques n°1  (principal)","Menu Grahiques n°2  (complémentaire)")
	var XXfichiersMAJ=new Array("SaisieICO-sujet.php","SaisieICO-other.php","SaisieGRAPH-sujet.php","SaisieGRAPH-other.php")
	var Xrep
	var Xmenu
	function choixmenujs(rep){
	
	document.getElementById("foldersandfiles").innerHTML=""
	document.getElementById("divfichiersjs").style.top="40px"
	Xrep=rep
	document.getElementById("nrep").innerHTML=Xrep
	document.getElementById("divselectmenu").style.visibility="visible"
	
	}
	function choixmenujs2(rep,k){
document.getElementById("header").innerHTML="<center><small>Objet : <span style='color:red'>"+XXmenu[k]+"</span> <-\> Répertoire : <span style='color:red;'>"+Xrep+"</span><i> <-\> <b>Fichier : <span style='color:violet'>"+XXmenu2[k]+"</span></b></i></small></center>"
	document.getElementById('divselectmenu').style.visibility='hidden'

	var REP
	var inhtml='<iframe id="framefichiers" name="framefichiers" width=600 height=1710 src="'+XXfichiersMAJ[k]+'?REP='
	inhtml+=rep
	inhtml+="&cible="
	if(parent.window.location.href.indexOf("Hypertexte-BLANC")>0){
	inhtml+="PageCartoDossier-BLANC/PageCarto/"+XXmenu2[k]	
	}else{
	inhtml+="PageCartoDossier/PageCarto/"+XXmenu2[k]
	}
	inhtml+='"></iframe>'
	document.getElementById("divfichiersjs").innerHTML=inhtml
document.getElementById("bferme").style.visibility="visible"
	}
	</script>

	<title>            Rédaction des menus de données</title>
</style>
</head>

<body style="font-family:arial;font-size:13px">


<script language="javascript">
//var toutescartes=top.transTTCARTES("return toutescartes")
document.write('<a name="haut"></a><table border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tr ><td id="header"><center><b><BIG>Rédaction des menus de données</big></b></center></td></tr><tr><td id="content">')
//alert("icila")
document.write('<div id="foldersandfiles" style="visibility:visible;position:absolute;top:100px">');
/*
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

*/
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
	<div id="divfichiersjs" style="position:absolute;top:40px;left:30px">	</div>
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
var Xself=window.location.href

setTimeout("window.location.href='"+Xself+"'",100)
}
		</script>

	</div>
	<div id="bferme" style="position:fixed;top:5px;left:5px;visibility:hidden"><input type="button" value="fermer"  onclick="ferme()"></input></div>
	
	<script language="javascript">
	
	choixmenujs(urlvar['carte'])
	</script>
</body>
</html>
