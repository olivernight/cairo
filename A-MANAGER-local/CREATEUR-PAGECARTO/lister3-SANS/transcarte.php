<?php
$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire pour le registre de carte mapsIliade.js: 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
															//0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$mapx= $_REQUEST["M"];
$som= $_REQUEST["S"];
$libelmap= $_REQUEST["X"];															
$platef = urldecode( $_GET['platef'] );
$pdd = urldecode( $_GET['pdd'] ); 
$l = $_REQUEST["L"];
$date_time=date("Y/m/d à H:m");

$platef = str_replace(' ','%20',$platef);

$n=$_REQUEST["N"];
$k=$_REQUEST["K"];
$repert=$_REQUEST["R"];
$REPorigine = urldecode( $_GET['reporigine'] );
$REPcible = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	


$nb_valeurs=count($n);

if($nb_valeurs !=""){
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
echo "<html>";
echo '<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<script language="javascript" ></script></head>';

echo"<body style='font-family:arial;font-size:13px'><p id='log'>";

//echo  'L\'opération de Transfert du dossier carte :<span style="color:red"> '.str_replace('../../','',$repert[0]).' </span><br/>provenant de la plateforme<b> '.$platef.'</b><br> a été opéré vers la carte :<br/><span style="color:red"> '.str_replace('../../','',$REPcible).'</span> dans cette plateforme<br>--------------------------------------<br/><br/><big><b>Redémarrez la plateforme pour charger la carte</b></big><br><script language="javascript"> var xpar=parent.location.href ; /*setTimeout("parent.location.href=xpar",4000) */</script>';

echo  'L\'opération de création du module <span style="color:red"> '.str_replace('../../','',$REPcible).' </span></b><br> a été opérée à partir de :<br/><span style="color:red"> '.str_replace('../../','',$repert[0]).'</span><br>--------------------------------------<br/><br/><b><a href = "../../../'.$REPcible.'/Normal_SANS.html" target="_blank">Normal_SANS.html</b><br><script language="javascript"> var xpar=parent.location.href ; </script>';



$taborigdest=array();

for($i=0;$i<$nb_valeurs;$i++){

if($n[$i] != ""){

$orig=str_replace('../../','',$platef.$n[$i]);

$orig=str_replace(' ','%20',$orig);


$dest='../../../'.str_replace($REPorigine,$REPcible.'/',$n[$i]);
$dest = str_replace("//","/",$dest);

$tableau = explode($REPcible,$dest );

$tableaudest = explode('/',$tableau[1] );

if(is_dir('../../../'.$REPcible)){}else{mkdir ('../../../'.$REPcible);}

$cum="";
for($t=1;$t<count($tableaudest)-1;$t+=1){
if($t==1){$sla="";}else{$sla="/";}
if(is_dir('../../../'.$REPcible.'/'.$cum.$sla.$tableaudest[$t])){}else{mkdir('../../../'.$REPcible.'/'.$cum.$sla.$tableaudest[$t]);}
$cum=$cum.$sla.$tableaudest[$t];
}
$lod=array($orig,$dest);
$taborigdest[count($taborigdest)]=$lod;

}
}
		for($i=0;$i<count($taborigdest);$i+=1){
		$origla=$taborigdest[$i][0];
		
		if( strpos($origla,"nomcarte.js")>0 || strpos($origla,"PageCarto/")>0 || strpos($origla,"GNU")>0){
		copy($origla,$taborigdest[$i][1]);
		//echo '<script language="javascript">alert("'.$origla.'   '.$taborigdest[$i][1].'")</script>';
		}
		}




echo "</p></body></html>";
echo '<script language="javascript">


</script>';
//echo '<script language="javascript">alert("../../../'.$REPcible.'/")</script>';
copy("../PageCartoDossier-SANS/Normal_SANS.html","../../../".$REPcible."/Normal_SANS.html");
copy("../PageCartoDossier-SANS/PageCarto/section1.js","../../../".$REPcible."/PageCarto/section1.js");
copy("../PageCartoDossier-SANS/PageCarto/section2.js","../../../".$REPcible."/PageCarto/section2.js");
copy("../PageCartoDossier-SANS/PageCarto/section3.js","../../../".$REPcible."/PageCarto/section3.js");
copy("../PageCartoDossier-SANS/PageCarto/section4.js","../../../".$REPcible."/PageCarto/section4.js");
copy("../PageCartoDossier-SANS/PageCarto/Logo-x.jpg","../../../".$REPcible."/PageCarto/Logo-x.jpg");
copy("../PageCartoDossier-SANS/PageCarto/entete.js","../../../".$REPcible."/PageCarto/entete.js");
copy("../PageCartoDossier-SANS/PageCarto/export_Map.html","../../../".$REPcible."/PageCarto/export_Map.html");
copy("../PageCartoDossier-SANS/PageCarto/creation_CarteExport.php","../../../".$REPcible."/PageCarto/creation_CarteExport.php");
copy("../PageCartoDossier-SANS/PageCarto/zipexportMap.php","../../../".$REPcible."/PageCarto/zipexportMap.php");

//zipper le PageCartoDossier-SANS
$REP=str_replace("PageCartoDossier-SANS","",$REPcible);
$REPsansSlash=str_replace("/","",$REP);

$dos_a_zipper='../../../zipDossierCarteTTtypes.php?REPDEPART='.$REP.'PageCartoDossier-SANS/&NOMZIP=PageCartoDossier-SANS-'.$REPsansSlash.'.zip&REPDESTINATION='.$REP.'';
echo '<iframe style="display:none" src="'.$dos_a_zipper.'"></iframe><br>'; 
}


?>


