<html>
<head>
<title>Sauvegarde - Restauration</title>
<script language="javascript" src="mapsILIADEmotpas.js"></script>
<script type="text/javascript">
/*
var mt
var idmt=0
var mt2='xxxxx'
var aw2=window.location.href
mt=prompt('saisissez votre mot de passe',mt2);
for(i=0;i<mtpas.length;i++){
if(mt==mtpas[i]){idmt=1}

}
var retconfirm=false
if(idmt!=1){
retconfirm=confirm("désolé, votre mot de passe est incorrect, voulez vous recommencer?");
if(retconfirm==true){

window.location.href=aw2
}else{
window.location.href="vide.html"

}
}
*/


var control=""
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
    
if(urlvar['control']){control=(urlvar['control'])}else{}

if(control!=1){window.location.href="vide.html"}
</script>
</head>
<body style="margin-left:0px;margin-top:10px;font-family:arial;font-size:10px;">

</body>
</html>
<?php 
$motscles = urldecode( $_GET['motscles'] );


//echo "<script>alert('".$motscles."');</script>";

$motscles = explode("@x@",$motscles);
//echo "<script>alert('".count($motscles)."');</script>";

if($_POST['cache']!=""){
	$cache=$_POST['cache'];
}
if($_POST['repertoire']!=""){
	$repertoire=$_POST['repertoire'];
}
if($_POST['filtre']!=""){
	$filtre=$_POST['filtre'];
}
// liste l'ensemble des sauvegardes existantes
function List_fichiers_sauv($Directory,$search_sauv,$motscles){
	$MyDirectory = opendir($Directory) or die('Erreur');
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
//          echo '<ul>'.$Directory;

			List_fichiers_sauv($Directory.'/'.$Entry,$search_sauv,$motscles);
//          </ul>';
		}
		else if(substr($Entry,0,2)==$search_sauv) {
			
				$filename = $Directory.'/'.$Entry;
				$filesize = filesize($filename);
				$last_modif = filemtime($filename);
				$filenameTest = strtolower($filename." ".date("d F Y H:i:s",$last_modif));
				
/*entree test mot cle*/				
//echo "<script>alert('".$filenameTest."');</script>";
$op=1;
//echo"<script>alert('".count($motscles)."');</script>";
for($r=0;$r<count($motscles);$r++){
	//echo"<script>alert('".$motscles[$r]."');</script>";
	
if(strpos($filenameTest, $motscles[$r])>0){}else{$op=0;$r=count($motscles);}
}
				
			if($op==1){echo "<option style='color:blue;' value='".$filename."'";
				if($_POST['file_restore']==$filename){ echo 'selected'; }
				echo "><span>".$filename." : ".$filesize." octets : ".date("d F Y H:i:s",$last_modif)."</span></option>";
			}

		}
	}
  closedir($MyDirectory);
}

// liste l'ensemble des répertoires se trouvant à la racine
function Repertory($Directory,$filtre){
//	echo "<script>alert('".$Directory."-".$filtre."');</script>";
	$MyDirectory = opendir($Directory) or die('Erreur');
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
			$filesize = filesize($Directory.'/'.$Entry);
			$last_modif = filemtime($Directory.'/'.$Entry);
			$filtres = explode(",",$filtre); // convertit une chaine en tableaux
			$count = count($filtres);
			if($filtre!="no"){  // filtre hypertext : sélection répértoire site + HYPERTEXTES-tous   // filtre radar :  RADARHypertexte
				//echo "<script>alert('".$count."');</script>";
				for($w=0;$w<$count;$w++){
					$longueur = strlen($filtres[$w]);
					// vérifie chaque répertoire, si le répertoire est présent dans le tableau alors affiche le répertoire sinon ne l'affiche
					if(substr($Entry,0,$longueur)==$filtres[$w]){ 
				//		echo "<script>alert('zzz-".$filtres[$w]."- ".$Entry." ".$count."');</script>";	
						echo "<option style='color:blue;margin-left:30px;' value='".$Directory.'/'.$Entry."'";
						if($_POST['repertoire']==$Directory.'/'.$Entry){ echo 'selected'; }
						echo "><span>".$Entry."/ : ".$filesize." octets : ".date("d F Y H:i:s",$last_modif)."</span></option>";	
					}
				}
			} else{
					//echo "<script>alert('".$count."');</script>";
					echo "<option style='color:blue;margin-left:30px;' value='".$Directory.'/'.$Entry."'";
					if($_POST['repertoire']==$Directory.'/'.$Entry){ echo 'selected'; }
					echo "><span>".$Entry."/ : ".$filesize." octets : ".date("d F Y H:i:s",$last_modif)."</span></option>";	
			}
		}
	}
  closedir($MyDirectory);
}

// Fonction de sauvegarde
function Sauv($Directory,$Entry){
	if((file_exists($Directory.'/N-1.'.$Entry)) && (file_exists($Directory.'/N-2.'.$Entry))) { 
		copy($Directory.'/N-2.'.$Entry,$Directory.'/N-3.'.$Entry);
		copy($Directory.'/N-1.'.$Entry,$Directory.'/N-2.'.$Entry);
		copy($Directory.'/'.$Entry,$Directory.'/N-1.'.$Entry);
	} else if((file_exists($Directory.'/N-1.'.$Entry))) { 
		copy($Directory.'/N-1.'.$Entry,$Directory.'/N-2.'.$Entry);
		copy($Directory.'/'.$Entry,$Directory.'/N-1.'.$Entry);
	} else {
		copy($Directory.'/'.$Entry,$Directory.'/N-1.'.$Entry);
	}
}
/* fonction avant modif
function Sauv($Directory,$Entry){
	if (file_exists($Directory.'/N-1.'.$Entry)) { 
		if (file_exists($Directory.'/N-2.'.$Entry)) { 
			copy($Directory.'/'.$Entry,$Directory.'/N-3.'.$Entry); 
		} else {
			copy($Directory.'/'.$Entry,$Directory.'/N-2.'.$Entry); 
		}
	} else {
		copy($Directory.'/'.$Entry,$Directory.'/N-1.'.$Entry); 
	}
	//echo "<script>alert('".$Directory.'/'.$Entry."');</script>";
}
*/
// prend en paramètre un répertoire et sauvegarde les fichiers sensibles sélectionnés
function Sauv_Rep($Directory,$cache,$filtre){
//	echo "<script>alert('".$cache."');</script>";
//	echo "<script>alert('xxxx ".$Directory." : ".$Entry." filtre = ".$filtre."');</script>"; 
	$MyDirectory = opendir($Directory) or die('Erreur');
	while($Entry = @readdir($MyDirectory)) {
		if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') {
			if($filtre!="no"){
			//	echo "<script>alert('ok');</script>"; 
			$filtres = explode(",",$filtre); // convertit une chaine en tableaux
			$nb0 = count($filtres);
				for($o=0;$o<$nb0;$o++){	
					$longueur = strlen($filtres[$o]);
					//echo "<script>alert('zzz ".$filtres[$o]." => ".$Directory." : ".$Entry."');</script>"; 
					if(($Directory=="./RADARHypertexte") && ($Entry=="rad")){ 
						$filtres[$o]="rad"; 
						//echo "<script>alert('ok');</script>"; 
					}
					//echo "<script>alert('".substr($Entry,0,$longueur)." = ".$filtres[$o]."');</script>"; 
					if(substr($Entry,0,$longueur)==$filtres[$o]){		
					
						if($filtres[$o]=="RADARHypertexte" && $Directory == "..".dirname($_SERVER["PHP_SELF"])."/"){
							$Entry=$Directory."RADARHypertexte/rad";
							//echo "<script>alert('sauv radar ".$Directory." : ".$Entry."');</script>"; 
						} else if($Directory=="./RADARHypertexte"){
							$Entry=$Directory."/rad";
						}
							Sauv_Rep($Entry,$cache,$filtre);	
					}
				}
			} else {
				//echo "<script>alert('ok');</script>"; 
				Sauv_Rep($Directory.'/'.$Entry,$cache,$filtre);
			}
		} else{
			$files = explode(" ",$cache);
			$nb = count($files);
			for($z=0;$z<$nb-1;$z++){
				if(substr($files[$z],0,5)=="sauv-"){
					$long = strlen($files[$z]);
					$long2 = strlen($Entry);
					$search = substr($files[$z],5,$long);
					if($search=="hyper"){
						if(substr($Entry,0,6)=="cartO-"){
							echo "<script>alert('sauv hyper ".$Directory." : ".$Entry."');</script>";
							Sauv($Directory,$Entry);
						}
					} elseif($search=="radar"){
						if((substr($Entry,$long2-3,$long2)==".js") && ($Directory != "..".dirname($_SERVER["PHP_SELF"])."/")){
							echo "<script>alert('sauv radar ".$Directory." : ".$Entry."');</script>";
							Sauv($Directory,$Entry);
						}
					} 		
				} else {
					if($Entry==$files[$z]) {
						echo "<script>alert(' non sauv mass ".$Directory." : ".$Entry." = ".$files[$z]."');</script>";
						Sauv($Directory,$Entry);
					}
				}
			}
		}
	}
	closedir($MyDirectory);
}
if($_POST['action']=="restauration" OR $_POST['action']==""){
	$selectionne1 = "checked";
	$selectionne2 = "";
} elseif($_POST['action']=="sauvegarde" OR $_POST['cache']!=""){
	$selectionne1 = "";	
	$selectionne2 = "checked";
}
//----------------------- restauration ---------------------------------
echo "<form name='resto_action' action='#' method='post' onchange='submit();' style='width:60%; display:none'><input type='radio' name='action' value='restauration' ".$selectionne1."> <span style='font-size:14px;font-weight:bold;font-family:arial'>Restauration</span></form>";
echo "<form name='lister_sauvegarde' action='#' method='post' style='font-family:arial;font-size:10px;width:60%' onchange='submit();'>
<div style='font-size:26px;color:gray;font-family:arial'>Choix du fichier</div><br>Sélectionnez dans la liste le fichier à restaurer<br><br><select name='file_restore' style='font-family:arial;font-size:10px;width:290px;height:20px'>";
echo "<option value=''>le fichier à restaurer..</option>";
$search_sauv = "N-";
if($_POST['action']=="restauration" OR $_POST['action']==""){
List_fichiers_sauv('.',$search_sauv,$motscles);	
}
echo "</select><input type='hidden' name='action' value='".$_POST['action']."'><input type='submit' value='ok' style='visibility:hidden;'></form><br>";

if($_POST['file_restore'] != ""){

$pos = strpos($_POST['file_restore'],$search_sauv);
$fin = strlen($_POST['file_restore']);
$fileN = substr($_POST['file_restore'],0,$pos).substr($_POST['file_restore'],$pos+4,$fin);

echo "La sauvegarde <span style='font-weight:bold;'>".$_POST['file_restore']."</span> va remplacer le fichier actuel <span style='font-weight:bold;'>".$fileN."</span><br>";
echo "<br><form name='valid_resto' method='post' action='#' style='width:60%'><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='validation_restauration' value='ok'><input type='hidden' name='restore' value='".$_POST['file_restore']."'><input type='hidden' name='delete' value='".$fileN."'><input type='submit' value='Lancer la restauration' style='font-family:arial;font-size:10px;'></form>"; 
}
if($_POST['validation_restauration'] == "ok"){
	copy($_POST['restore'],$_POST['delete']);
	echo "<span style='font-weight:bold;'>La restauration a été effectuée : ".$_POST['restore']." --> ".$_POST['delete']."</span>";
}
//----------------------- sauvegarde ---------------------------------
/*
if($_POST['listfiles'] != ""){
	$cache="";
	$filtre="no";
	$affichage="oui";
	foreach($_POST['listfiles'] as $cle){
		if($cle=="sauv-radar"){ $filtre = "RADARHypertexte"; }
		if($cle=="sauv-hyper"){ $filtre = "HYPERTEXTES-tous,Site-"; }
		if($cle=="Menu Ico & Graph"){ $cle = "DATA-Sujet.js DATA-Other.js DATA-IcoSujet.js DATA-IcoOther.js"; }
		if($cle=="permissionscartes.js" OR $cle=="ItemMenu.js" OR $cle=="menuencapsules-Site.js" OR $cle=="menuencapsuleslocal-Site.js"){ $filtre = "Site-"; }
		if($cle=="liensSites.js" OR $cle=="menuencapsulesILIADE.js" OR $cle=="menuencapsulesreduitILIADE.js"){ $affichage="non"; }
		$cache .= $cle.' ';
	}
}

echo "<br><br><form name='sauv_action' action='#' method='post' onchange='submit();'><input type='radio' name='action' value='sauvegarde' ".$selectionne2."> <span style='font-size:14px;font-weight:bold;font-family:arial;'>Sauvegarde</span></form>";
echo "<form name='lister_rep' action='#' method='post' style='font-family:arial;font-size:10px;' onchange='submit();'>";
echo "<input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='repertoire' value='".$_POST['repertoire']."'>";
echo "Sélectionner les fichiers que vous souhaitez sauvegardé (Central+Site - <span style='color:blue;'>Site</span> - <span style='color:red;'>Système</span>) :<br>";
// liste de fichiers sensibles
		// on peut en rajouter (.........,'')
		$list = array('sauv-hyper','sauv-radar','Menu Ico & Graph','DATA-mappocoord.js','permissionscartes.js','ItemMenu.js','menuencapsules-Site.js','menuencapsuleslocal-Site.js','liensSites.js','menuencapsulesILIADE.js','menuencapsulesreduitILIADE.js');
		$nb1 = count($list);
		$k = 0;
		for($m=0;$m<$nb1;$m++){
			$color = "black";
			if($cache != ""){
				$files = explode(" ",$cache);
				$nb = count($files);
				for($z=0;$z<$nb1-1;$z++){	
					if($files[$z]==$list[$m]){ $check='checked'; }
					if($files[$z]=="sauv-hyper" || $files[$z]=="sauv-radar"){	
					}
				}
			}
			if($list[$m]=="Menu Ico & Graph" OR $list[$m]=="DATA-mappocoord.js" OR $list[$m]=="permissionscartes.js" OR $list[$m]=="ItemMenu.js" OR $list[$m]=="menuencapsules-Site.js" OR $list[$m]=="menuencapsuleslocal-Site.js"){ $color="blue"; }
			if($list[$m]=="liensSites.js" OR $list[$m]=="menuencapsulesILIADE.js" OR $list[$m]=="menuencapsulesreduitILIADE.js"){ $color="red"; }
			echo "<input type='checkbox' name='listfiles[]' value='".$list[$m]."' ".$check."> <span style='color:".$color.";'>".$list[$m]."</span>&nbsp;&nbsp;";
			if($k==1 || $k==7){ 
				echo '<br>';
			}
			$k = $k + 1;
			$check="";
		}	
echo "<br><br>";
echo "</form>";
if($_POST['action']=="sauvegarde"){
echo "<form name='lister_rep' action='#' method='post' style='font-family:arial;font-size:10px;' onchange='submit();'>";
echo "Sélectionner <select name='repertoire' style='font-family:arial;font-size:10px;'>";
echo "<option value=''>le répertoire des fichiers sensibles à sauvegarder..</option>";
echo "<option style='margin-left:15px;color:red;' value='..".dirname($_SERVER["PHP_SELF"])."/'";
if($repertoire=='..'.dirname($_SERVER["PHP_SELF"]).'/'){ echo 'selected'; }
echo ">L'ensemble de l'arborescence : ..".dirname($_SERVER["PHP_SELF"])."/</option>";

if($affichage=="oui"){	
Repertory('.',$filtre);		
}

echo "</select><input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='cache' value='".$cache."'><input type='hidden' name='filtre' value='".$filtre."'><input type='hidden' name='form2' value='ok'></form><br>";
}
echo "<form name='lister_rep' action='#' method='post' style='font-family:arial;font-size:10px;'>";
echo "Fichier(s) à sauvegarder : ".$cache;
echo "<br>Répertoire choisi : ".$repertoire; 
echo "<input type='hidden' name='action' value='".$_POST['action']."'><input type='hidden' name='validation' value='ok'><input type='hidden' name='cache' value='".$cache."'><input type='hidden' name='filtre' value='".$filtre."'><input type='hidden' name='repertoire' value='".$repertoire."'><br><br>";
echo "<input type='submit' value='Lancer la sauvegarde' style='font-size:10px;font-family:arial;'></form>";
if($_POST['validation']=='ok'){
Sauv_Rep($repertoire,$cache,$filtre);	
}
*/


?>