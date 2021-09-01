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







<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!--meta http-equiv="expires" content="0"-->
<!--meta http-equiv="pragma" content="no-cache"-->
<!--meta http-equiv="cache-control" content="no-cache, must-revalidate"--> 
<title>Revue de Presse</title>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

	<script language="JavaScript">

		var letheme=''
	
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
alert(str)
return str;
}
	/*
	function openpopup(popurl, w, h) {
		window.open(popurl,'','width='+w+',height='+h);
	}
	*/
	var XXmenu=new Array("étalonner","option de base","validités")	
	var XXmenu2=new Array("créer un fichier de données étalon","Deux fichiers de données associés à la carte","fichiers homologues au fichiers de base par sous population, thèmes ou dates de validité")
	var XXfichiersMAJ=new Array("Saisie-mappocoord.php","SaisieICO-sujet.php","SaisieICO-other.php","SaisieGRAPH-sujet.php","SaisieGRAPH-other.php","Saisie-Union.php","Saisie-ligneSVG.php","Saisie-SVG2.php","Saisie-correctifcoord.php","Saisie-CODE_NOMS.php","Saisie-guide-cartes.php","Saisie-guide-questions.php","Saisie-images1.php","Saisie-imagesfond.php","Saisie-menuValidit.php","Saisie-validit.php","Saisie-ImageText.php")
	var Xrep
	var Xmenu
	
	var repracine=window.location.href
	repracine=repracine.replace('Site-precarite.fr/revuepresse/selection.repertoire.php','')
//alert(repracine)
	function choixmenujsentravaux(){alert("en travaux")}
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
	var inhtml='<iframe id="framefichiers" name="framefichiers" width=600 height=480 src="txt_to_html.php?REP='
	inhtml+=rep
	inhtml+="&cible="
	inhtml+=XXmenu[k]
	inhtml+="&RACINE="
	inhtml+=repracine
	inhtml+='"></iframe>'
	
	document.getElementById("divfichiersjs").innerHTML=inhtml

	}
	
	function rien(){}
	
	var MENUICI=new Array()
	</script>


</style>
</head>

<body style="font-family:arial;font-size:13px">

	
	<table border="0" width="640" cellspacing="0" cellpadding="0" align="center">
<tr>
			<td id="content">
				

				<?php
		// Code qui permet de se déplace dans les repertoire en passant l'adresse par l'url.
		if ( array_key_exists( "basedir", $_GET ) ) {
		//echo '<script language="javascript">alert("url composée")</script>';
			$basedir = urldecode( $_GET['basedir'] ); // <-- Really need to validate the result here!
		} else {
		//echo '<script language="javascript">alert("sans additif url")</script>';
			$basedir = mydir."/";
		}
$basedir = mydir."/".urldecode( $_GET['basedir'] )."/";
		// Ensemble des fichiers et répertoires à ignorés.
		$filter = array( '.jpg', '.gif', '.zip', '.sit' ,'bebe.jpg','.php','.png','.xml','.js');
		$filterB = array( 'index.html','vide.htm');
		$filter = array();
		//$filter = array('.doc','.odt','.rtf','.pdf');
		//$filter = array('A-HISTOMUMTI','A-MANAGER-local','COURBE','HISTO','Srip32','TEXTE','autodiag0-sauvegarde_fichiers','css','js','images','imagespointcle','PageWebIliadeligne','PagebreveCARTOnormale-ligne','PagebreveCARTOiliade-ligne','PagebreveCARTOvision-ligne','Pageb W SOURCES CARTOiliade-ligne - Copie','demo-pane-splitter_fichiers');

		// Affichons la liste des fichiers et répertoire contenu dans note sous répertoire cible.
		// Return formatted HTML
		$dir = $basedir;
		$contents = get_folder_listing( $dir, $filter );
echo '<div id="foldersandfiles" style="visibility:visible;position:absolute;top:0px">';
		echo '<table id="table_border" border="0" width="655" cellspacing="0" cellpadding="4">';

		if ($contents) {
		//echo '<tr><td>Files------------------------------------------------<td></tr>';
$inhib=0; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
$jk=0;
for ( $i = $inhib; $i < count( $contents ); $i++ ) {
$datx[$i] = $contents[$i][3];
}

echo '<br><br>';
rsort($datx,SORT_STRING);

/*
for ( $i = $inhib; $i < count( $contents ); $i++ ) {
for ( $j = $inhib; $j < count( $contents ); $j++ ) {
if($datx[$i] == $contents[$j][3]){
$indicexiste=0;
for($n=0;$n<$i;$n++){
if($contentstemp[$n][1]==$contents[$j][1]){$indicexiste=1;$n=$i;}
}

if($indicexiste==0){$contentstemp[$i]=$contents[$j];}

}
}
}
*/

for ( $i = $inhib; $i < count( $datx ); $i++ ) {


for ( $j = $inhib; $j < count( $datx ); $j++ ) {
if($datx[$i] == $contents[$j][3]){

$db=0;
for($d=0;$d<$i;$d++){if($contentstemp[$d][1]==$contents[$j][1]){$j+=1;$db=1;$d=$j;}}
if($db==0){$contentstemp[$i]=$contents[$j];}

}
}
}
$contents=$contentstemp;

				
			for ( $i = $inhib; $i < count( $contents ); $i++ ) {
				$fileinfo = $contents[$i];
				//echo '<script>alert("'.$fileinfo[2].'")</script>';
				if ( $i % 2 ) {
				
					// Odd
					echo '<tr id="row_odd">';
				} else {
					// Even
					echo '<tr id="row_even">';
				}
				$Okici=1;
				$nbcars=350;
				if ( $fileinfo[0] == "file" ) {
				for($c=0;$c<count($filterB);$c++){
				if($filterB[$c] == $fileinfo[1]){$Okici=0;}
			
				}
		
				if($Okici==1){
				echo '<script language="javascript">
				var datex="'.$fileinfo[3].'"
				var datex2=datex.substr(9,datex.length)
				var datex1=datex.substr(0,8)
				datex1=datex1.replace(/,/g,"/")
				datex2=datex2.replace(/,/g,":")
				datex2=datex2.replace(/:PM/g," PM")
				datex2=datex2.replace(/:AP/g," AM")
				datex="20"+datex1+"  "+datex2+""
				var fileref="'.$fileinfo[1].'";
				/*
				fileref=fileref.replace(".html","")
				
				fileref=fileref.replace(".doc","")
				fileref=fileref.replace(".pdf","")
				fileref=fileref.replace(".odt","")
				fileref=fileref.replace(".rtf","")	
				*/
				var indexofX=-1
				if(fileref.indexOf(".odt")>0){indexofX=1}
					if(fileref.indexOf(".doc")>0){indexofX=1}
					if(fileref.indexOf(".rtf")>0){indexofX=1}
					if(fileref.indexOf(".pdf")>0){indexofX=1}
					if(fileref.indexOf(".jpg")>0){indexofX=1}
					if(fileref.indexOf(".gif")>0){indexofX=1}
					if(fileref.indexOf(".png")>0){indexofX=1}
					
					if(indexofX==-1)	{
					var fileref2
					fileref2=fileref.replace(".html","")
					
					MENUICI[MENUICI.length]=fileref2
										}
				</script>';
					echo '<td id="td'.$i.'"><span onclick="window.open(\''.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'\')"><img src="fichier.gif" alt="" width="16" height="16" border="0"><span onmouseover="this.style.color=\'blue\'" onmouseout="this.style.color=\'#035A91\'" id="spanX'.$i.'" style=";font-size:12px;color:#035A91"><b><u> ';
					echo '<script language="javascript">
				document.write(fileref+"</b></u></span>         <i ><small><font color=red>("+datex+")</font></small></i><span style=\'font-size:5px\'></span>")
			
				</script>';
				
				
					echo '<span onmouseover="this.style.color=\'blue\'" onmouseout="this.style.color=\'black\'" id="span'.$i.'" style="font-size:12px"> </span></span></td>';
					//echo '<td align="right">'.$fileinfo[2].'</td>';
					echo '<td align="right" ><div id="div'.$i.'" style="visibility:hidden"><iframe name="Xframe'.$i.'" id="Xframe'.$i.'" height="0px" width="0px" ></iframe></div></td>';
					//src="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'"
					echo '
						<script language="javascript">
					
					var fichX="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'"
					var indexofX=-1
					
					if(fichX.indexOf(".odt")>0){indexofX=1}
					if(fichX.indexOf(".doc")>0){indexofX=1}
					if(fichX.indexOf(".rtf")>0){indexofX=1}
					if(fichX.indexOf(".pdf")>0){indexofX=1}
					if(fichX.indexOf(".jpg")>0){indexofX=1}
					if(fichX.indexOf(".gif")>0){indexofX=1}
					if(fichX.indexOf(".png")>0){indexofX=1}
					
					if(indexofX==-1)	{
						
						
	//window.frames.Xframe'.$i.'.location.href="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'";
									}
	
					//alert("'.$fileinfo[1].'");
				
					
					
					
					
					
					
					
					</script>';
					
					$jk+=1;
					echo '<td width="10">&nbsp</td>';
					//echo '<td>'.$fileinfo[3].'</td>';
					echo '</tr>';
					
					}
					
				} else {}
			}
			
			for ( $i = $inhib; $i <count( $contents ) ; $i++ ) {//
			
			
			echo'<script language="javascript">			
			
			if(document.getElementById("div'.$i.'")){
			
								function recuptextpartiel'.$i.'(){
								
					var borne='.$nbcars.'
					if(window.frames.Xframe'.$i.'.document.getElementsByTagName("body")[0]){
					var text'.$i.'=window.frames.Xframe'.$i.'.document.getElementsByTagName("body")[0].innerHTML//;
		text'.$i.'=text'.$i.'.replace(/<br/g," <br");
		text'.$i.'=text'.$i.'.replace(/<div/g," <div");
		text'.$i.'=text'.$i.'.replace(/<p/g," <p");
		text'.$i.'=text'.$i.'.replace(/<dt/g," <dt");
		text'.$i.'=text'.$i.'.replace(/<h/g," <h");
		text'.$i.'=text'.$i.'.replace(/<td/g," <td");
	

	
					var deb=0
					var txtla'.$i.'=""
					
					for(k=0;k<borne;k++){//text'.$i.'.length
					
					if(text'.$i.'.substr(k,4)=="<scr"){deb=2}
					if(text'.$i.'.substr(k,4)=="</sc" & deb==2){deb=1}
					if(text'.$i.'.substr(k,1)=="<"  & deb==0){deb=1}
					if(deb==0){txtla'.$i.'+=text'.$i.'.substr(k,1)}else{borne+=1}
					if(text'.$i.'.substr(k,1)==">" & deb==1){deb=0}
					
					
					}

					document.getElementById("span'.$i.'").innerHTML=txtla'.$i.'+"...";
					document.getElementById("div'.$i.'").innerHTML=""
			
					}else{
					
				
				
			var fichX="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'"
					var indexofX=-1
					
					if(fichX.indexOf(".odt")>0){indexofX=1}
					if(fichX.indexOf(".doc")>0){indexofX=1}
					if(fichX.indexOf(".rtf")>0){indexofX=1}
					if(fichX.indexOf(".pdf")>0){indexofX=1}
					if(fichX.indexOf(".jpg")>0){indexofX=1}
					if(fichX.indexOf(".gif")>0){indexofX=1}
					if(fichX.indexOf(".png")>0){indexofX=1}
					
					if(indexofX==-1)	{
			
					
					
					//window.frames.Xframe'.$i.'.location.href="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'";
					//setTimeout("recuptextpartiel'.$i.'()",2000)
							
									}

							
					
					}
					}

			
		/*
		
			var fichX="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'"
					var indexofX=-1
					
					if(fichX.indexOf(".odt")>0){indexofX=1}
					if(fichX.indexOf(".doc")>0){indexofX=1}
					if(fichX.indexOf(".rtf")>0){indexofX=1}
					if(fichX.indexOf(".pdf")>0){indexofX=1}
					if(fichX.indexOf(".jpg")>0){indexofX=1}
					if(fichX.indexOf(".gif")>0){indexofX=1}
					if(fichX.indexOf(".png")>0){indexofX=1}
					
					if(indexofX==-1)	{
		*/
		
			//setTimeout("recuptextpartiel'.$i.'()",3000)
									//}
			}
			</script>';
			
			}
echo'<script language="javascript">		parent.recupMENUICI(MENUICI);parent.selectmode(3)</script>';
				
			
			/*
			echo '<tr><td>Folders<br> <small><i>les dossiers suivants ont été filtrés :';
			for($i=0;$i<count($filter);$i++){echo ' * '.$filter[$i].'';}
			echo '</small></i> ----------------------------------------------<td></tr>';
			*/
			
			
$inhib2=1000; // 0 pour activer le listage des répertoires
			for ( $i = $inhib2; $i < count( $contents ); $i++ ) {
			
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

	
	<!-- div style="position:fixed;top:10px;right:150px">
<input type="button" value="rafraichir" onmouseover="getSelectedTextxxxx()" onclick="document.location.reload();return(false)"></input>
</div -->


</body>
</html>
