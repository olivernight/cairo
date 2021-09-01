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
	var text=""
		var letheme=''
	var iliste=0
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

	
	function final(a){
	
	for(i=0;i<a;i++){
	if(document.getElementById("div"+i)){
	document.getElementById("div"+i).innerHTML=""
	}
	}
	if(iliste==0){document.write("<span style='font-familiy:arial;'>Aucun document ne correspond à vos critères dans cette rubrique</span>")}
	}
	

	</script>


</style>
</head>

<body style="font-family:arial;font-size:13px">

	
	<table border="0" width="640" cellspacing="0" cellpadding="0" align="center">
<tr>
			<td id="content">
				

				<?php
				$motcle = urldecode( $_GET['motcle'] );
				echo '<script language="javascript">var motcle="'.$motcle.'"</script>';
				
		
		if ( array_key_exists( "basedir", $_GET ) ) {
		
			$basedir = urldecode( $_GET['basedir'] );
		} else {
		
			$basedir = mydir."/";
		}
$basedir = mydir."/".urldecode( $_GET['basedir'] )."/";
		// Ensemble des fichiers et répertoires à ignorés.
		$filter = array('.txt', '.jpg', '.gif', '.zip', '.sit' ,'bebe.jpg','.php','.png','.xml','.js');//
		$filterB = array( 'index.html','vide.htm');
		//$filter = array();
		//$filter = array('.doc','.odt','.rtf','.pdf');


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
$rg=explode("_",$contents[$i][1]);
//echo '<script language="javascript">alert("'.$rg[0].'")</script>';
$datx[$i] = $rg[0];

}

echo '<br><br>';
rsort($datx,SORT_NUMERIC);

			

//---------------------------------------------------------------------------------------------	
for ( $i = $inhib; $i < count( $datx ); $i++ ) {
$fileinfo = $contents[$i];


for ( $j = $inhib; $j < count( $datx ); $j++ ) {
$rg2=explode("_",$contents[$j][1]);
//echo '<script language="javascript">alert("'.$rg2[0].'")</script>';
if($datx[$i] == $rg2[0]){

$db=0;
for($d=0;$d<$i;$d++){if($contentstemp[$d][1]==$contents[$j][1]){$j+=1;$db=1;$d=$j;}}
if($db==0){$contentstemp[$i]=$contents[$j];}

}
}

}
//$contents=$contentstemp;
for ( $i = $inhib; $i < count( $contents ); $i++ ) {
$contents[$i]=$contentstemp[count( $contents )-1-$i];
}
for ( $i = $inhib; $i < count( $contents ); $i++ ) {

				$fileinfo = $contents[$i];

				
				$Okici=1;
				$nbcars=350;
				
				if ( $fileinfo[0] == "file" ) {
				
				
				for($c=0;$c<count($filterB);$c++){
				if($filterB[$c] == $fileinfo[1]){$Okici=0;}
			
				}
	
			
			
				
				
				echo '<div id="div'.$i.'" style="visibility:hidden"><iframe name="Xframe'.$i.'" id="Xframe'.$i.'" height="0px" width="0px" ></iframe></div>';
				
	
					
					echo '
						<script language="javascript">
					
					var fichX="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'"
					var lefichier="'.$fileinfo[1].'".replace(\'.pdf\',\'.txt\');
					//;
					
					var indexofX=-1
					if(fichX.indexOf(".html")>0){indexofX=1}
					if(fichX.indexOf(".htm")>0){indexofX=1}
					if(fichX.indexOf(".htmlx")>0){indexofX=1}
					if(fichX.indexOf(".xhtml")>0){indexofX=1}
					if(fichX.indexOf(".xml")>0){indexofX=1}
					if(fichX.indexOf(".pdf")>0){indexofX=1}
					//if(fichX.indexOf(".txt")>0){indexofX=1}
				
					if(indexofX==1)	{
						

	
	//window.frames.Xframe'.$i.'.location.href="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$fileinfo[1].'";
	  window.frames.Xframe'.$i.'.location.href="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).'"+lefichier;								}

					</script>';
					
					$jk+=1;

				} else {}
			}



			//---------------------------------------------------------------------------------------------
			
			for ( $i = $inhib; $i <count( $contents ) ; $i++ ) {//
			$fileinfo = $contents[$i];


			
				
				if ( $fileinfo[0] == "file" ) {
				
			echo'<script language="javascript">	
	

													var datex="'.$fileinfo[3].'"
				var datex2=datex.substr(9,datex.length)
				var datex1=datex.substr(0,8)
				datex1=datex1.replace(/,/g,"/")
				datex2=datex2.replace(/,/g,":")
				datex2=datex2.replace(/:PM/g," PM")
				datex2=datex2.replace(/:AP/g," AM")
				datex="20"+datex1+"  "+datex2+""
				var fileref="'.$fileinfo[1].'";
				fileref=fileref.replace(".html","")
				fileref=fileref.replace(".htm","")
				fileref=fileref.replace(".doc","")
				fileref=fileref.replace(".pdf","")
				fileref=fileref.replace(".odt","")
				fileref=fileref.replace(".rtf","")
				fileref=fileref.replace(".php","")
				
			document.write("<tr id=\"tr'.$i.'\" style=\"display:none\"><td id=\"td'.$i.'\">");
					document.write("<span onclick=\"window.open(\''.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$contents[$i][1].'\')\">");
					document.write("<img src=\"fichier.gif\" width=\"16\" height=\"16\" border=\"0\"><span onmouseover=\"this.style.color=\'blue\'\" onmouseout=\"this.style.color=\'#035A91\'\" style=\"font-size:12px;color:#035A91\"><b><u> ");
				
				document.write(fileref)
				
				
				document.write("</b></u></span>         <br><i ><small><font color=red>");
				
			
				document.write(datex)
				
				
				document.write("</font></small></i><br><span style=\'font-size:5px\'><br></span>");
					document.write("<span onmouseover=\"this.style.color=\'blue\'\" onmouseout=\"this.style.color=\'black\'\" id=\"span'.$i.'\" style=\"font-size:12px\"> </span></span><br></td></tr>");
					
				</script>';
				}

				}
		
				//---------------------------------------------------------------------------------------------
			

			for ( $i = $inhib; $i <count( $contents ) ; $i++ ) {//
			$fileinfo = $contents[$i];
if ( $fileinfo[0] == "file" ) {
							echo'<script language="javascript">	
								
								function recuptextpartiel'.$i.'(){
							
					var txtla'.$i.'=""							
					var fichX="'.myhttp.substr($dir,(strlen(mydir)),strlen($dir)).$contents[$i][1].'"
				
					var indexofX=-1
					if(fichX.indexOf(".html")>0){indexofX=1}
					if(fichX.indexOf(".htm")>0){indexofX=1}
					if(fichX.indexOf(".htmlx")>0){indexofX=1}
					if(fichX.indexOf(".xhtml")>0){indexofX=1}
					if(fichX.indexOf(".xml")>0){indexofX=1}
					//if(fichX.indexOf(".txt")>0){indexofX=1}
					if(fichX.indexOf(".pdf")>0){indexofX=1}
					if(indexofX==1){
					
			 		
		var text'.$i.'=window.frames.Xframe'.$i.'.document.getElementsByTagName("body")[0].innerHTML//;
/*		

*/							

var borne='.$nbcars.'
var deb=0
var OKI=0
if(motcle==""){var OKI=1}else{
	var motc1=motcle.split(" ")
	var stopmot=motc1.length
	
	for(r=0;r<stopmot;r++){
	

var motc=motc1[r].toLowerCase()

if(text'.$i.'.toLowerCase().indexOf(motc)>0 || "'.$fileinfo[1].'".toLowerCase().indexOf(motc)>=0){var OKI=1;}else{
r=stopmot
}
}
	
}
						text'.$i.'=text'.$i.'.replace(/<br/g," <br");
		text'.$i.'=text'.$i.'.replace(/<div/g," <div");
		text'.$i.'=text'.$i.'.replace(/<p/g," <p");
		text'.$i.'=text'.$i.'.replace(/<dt/g," <dt");
		text'.$i.'=text'.$i.'.replace(/<h/g," <h");
		text'.$i.'=text'.$i.'.replace(/<td/g," <td");
					
					for(k=0;k<borne;k++){
					
					if(text'.$i.'.substr(k,4)=="<scr"){deb=2}
					if(text'.$i.'.substr(k,4)=="</sc" & deb==2){deb=1}
					if(text'.$i.'.substr(k,1)=="<"  & deb==0){deb=1}
					if(deb==0){txtla'.$i.'+=text'.$i.'.substr(k,1)}else{borne+=1}
					if(text'.$i.'.substr(k,1)==">" & deb==1){deb=0}
					
					}
					
if(OKI==1){	

iliste+=1	
					
document.getElementById("span'.$i.'").innerHTML=txtla'.$i.'
document.getElementById("div'.$i.'").innerHTML=""
document.getElementById("tr'.$i.'").style.display=""
			}
			}
//
			
			
			}
			
			</script>';
			}
			}
						
//---------------------------------------------------------------------------------------------------------------------						
		for ( $i = $inhib; $i <count( $contents ) ; $i++ ) {//

			$fileinfo = $contents[$i];
if ( $fileinfo[0] == "file" ) {
			echo'<script language="javascript">						
					
//				
			setTimeout("recuptextpartiel'.$i.'()",3000)
var OKI2=0;
	if(motcle==""){var OKI2=1}else{
	var motc1=motcle.split(" ")
	var stopmot=motc1.length
	
	for(r=0;r<stopmot;r++){
	
	if("'.$fileinfo[1].'".toLowerCase().indexOf(motc1[r].toLowerCase())>=0 ){var OKI2=1;}else{ 
	r=stopmot
	}
	
	
	}
	}		
	if(OKI2==1){
iliste+=1	


    document.getElementById("tr'.$i.'").style.display=""	
	}
		

					
			</script>';
			}

			}
									echo '<script>	</script>';
			echo'<script language="javascript">setTimeout("final('.count( $contents ).')",3000)</script>';
			
			

			
		}


				?>
				</table></div>
			</td>
		</tr>
		<tr>
			<td id=content">
			<h3></h3>
			</td>
		</tr>
	</table>



</body>
</html>
