






<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<!--meta http-equiv="expires" content="0"-->
<!--meta http-equiv="pragma" content="no-cache"-->
<!--meta http-equiv="cache-control" content="no-cache, must-revalidate"--> 
<title>Index Des Manuels</title>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

	<script language="JavaScript">
	var ze=""
	var themeencours=""
		var letheme=''
	var xpage=window.location.href
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
    //alert(urlvarnum)
    letheme=(urlvar['theme'])
	if(letheme){}else{letheme=""}
	document.write('<title>'+letheme+' : Fiches de maintenance</title>')
function getSelectedText(){
if (window.getSelection){
var str = window.getSelection();
}else if (document.getSelection){
 var str = document.getSelection();
}else {
var str = document.selection.createRange().text;
}

return str;
}

function choixREP(a){
var b=document.getElementById("recherche").value

window.filelist.location.href="FilesInTheme.php?basedir="+a+"&motcle="+b

}
var thisTemp=""
function selectTheme(a,b){
if(thisTemp!=""){thisTemp.setAttribute("style","border:1px solid gray")}

a.setAttribute("style","border:3px solid black")
thisTemp=a
document.getElementById("th").innerHTML=b
}


	
	function rien(){}
	</script>


</style>
</head>

<body style="font-family:arial;font-size:13px">


	
	<table border="0" width="700px" height="100%" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<script language="JavaScript">
			
			document.write('<td id="header"><B><BIG style="color:#127D97">GaïaMundi - Index des Manuels</big><br>Thème : <span style="color:violet" id="th"></span></b></td>')
			
			</script>
		</tr>
		

		
		
		<tr>
			<td id="content">
				<hr noshade size="1" color=#ccc>
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
define("mydir","..");//

// Adresse HTTP nécessaire pour localiser les fichiers du point de vue du reseau.
define("myhttp","..");//

// FIN CONFIGURATION
?>

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
		$filter = array( '.jpg', '.gif', '.zip', '.sit' ,'bebe.jpg','.php','.png','.xml','.js','Controle','telechargements','images','MAJ','lister2');
		$filterB = array( 'Controle','vide.htm');


		// Affichons la liste des fichiers et répertoire contenu dans note sous répertoire cible.
		// Return formatted HTML
		$dir = $basedir;
		$contents = get_folder_listing( $dir, $filter );
echo '<div id="foldersandfiles" style="visibility:visible;position:absolute;top:80px">';
		echo '<table id="table_border" border="0" width="700" cellspacing="0" cellpadding="4">';

		if ($contents) {

//-----------------------------------------------------------------------------------------------------------------------------------		
		
$inhib=1000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
$jk=0;

		$p=1;
		echo '<tr><td >
		recherche par mots clés<br><input id="recherche" type="text" style="width:200px"></input><input type="button" value="OK" onclick="if(themeencours==\'\'){alert(\'Sélectionnez un thème\')}else{choixREP(themeencours)}"></input>
<table border=0 width=700><TR><TD style="font-size:9px;color:gray"><i><b ><span title="Pour les fichiers qui ne sont pas au format web (html, htm, xhtml,htmlx,xml) ni au format texte (.txt), la recherche ne s\'opère que sur le nom du fichier.">(L\'opérateur logique est le OU: la	 recherche fournit la liste des fichiers au format web(html, Xml,htmlx... )ou texte (.txt) dont le contenu ou le titre comprend au moins un des mots clés.)</span></b></i><br>Saisir des mots clés séparés par un espace, ou bien laissez ce champ vide pour avoir la liste complète des fichiers disponibles dans le thème sélectionné. <br>Pour poursuivre la recherche dans un autre thème, sélectionnez un nouvel onglet ci-dessous</TD></TR></TABLE>
		</td></tr>
		<tr><td style="text-align:justify">';		
$inhib2=0; // 0 pour activer le listage des répertoires

for ( $i = $inhib2; $i < count( $contents ); $i++ ) {
$rg=explode("_",$contents[$i][1]);
//echo '<script language="javascript">alert("'.$rg[0].'")</script>';
$datx[$i] = $rg[0];

}


rsort($datx,SORT_STRING);

			

//---------------------------------------------------------------------------------------------	
for ( $i = $inhib2; $i < count( $datx ); $i++ ) {
$fileinfo = $contents[$i];


for ( $j = $inhib2; $j < count( $datx ); $j++ ) {
$rg2=explode("_",$contents[$j][1]);
//echo '<script language="javascript">alert("'.$rg2[0].'")</script>';
if($datx[$i] == $rg2[0]){

$db=0;
for($d=0;$d<$i;$d++){if($contentstemp[$d][1]==$contents[$j][1]){$j+=1;$db=1;$d=$j;}}
if($db==0){$contentstemp[$i]=$contents[$j];}

}
}

}

for ( $i = $inhib2; $i < count( $contents ); $i++ ) {
$contents[$i]=$contentstemp[count( $contents )-1-$i];
}





			for ( $i = $inhib2; $i < count( $contents ); $i++ ) {
		
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {

				} else {

				}
				if ( $fileinfo[0] == "file" ) {} else {
					if($p==1){$p=0;$colori="#E8E8FF";}else{$p=1;$colori="#E8E8FF";}
					
					echo '<span id="select'.$k.'" style=";border:0px solid gray;" onclick="javascript: ze=document.getElementById(\'texteboite'.$jk.'\').innerHTML;selectTheme(this,ze);themeencours=\''.$fileinfo[1].'\';choixREP(\''.$fileinfo[1].'\')"><span style="background-color:'.$colori.';font-family:arial;font-size:11px;padding:2px" ><span ><b id="texteboite'.$jk.'" style="color:#035A91">'.$fileinfo[1].'</b></span></span></span><span style="font-size:22px;color:transparent"> </span>';

					$jk+=1;
				}
			}
			
			
		}
		echo '</td>';
		echo '</tr><tr ><td><iframe name="filelist"  id="filelist" src="vide.htm" width=100% height="2000" scrolling="yes" style="border:0.5px dotted gray"></iframe></td></tr>';
	
		echo '</table>';
		echo '</div>';
for ( $i = 0; $i < $jk; $i++ ) {
echo '<script>
var a=document.getElementById("texteboite'.$i.'").innerHTML
a=a.replace(/ /g,"_")
a=a.replace(/-/g,"_")
a=a.replace(/_/g,"<span style=\'color:transparent\'>_</span>")
document.getElementById("texteboite'.$i.'").innerHTML=a
</script>';

}
				?>
				
			</td>
		</tr>
		<tr>
			<td id=content">
			<h3></h3>
			</td>
		</tr>
	</table>

	<script language="javascript">

		</script>
	</div>
	
	<div style="position:fixed;top:80px;right:130px">
<input type="button" value="rafraichir"  onclick="window.location.href=xpage;return(false)"></input>
</div>
<script language="javascript">


</script>
</body>
</html>
