<html>
<head><title>télécharger fichier</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">


</script>
<?php



function supprimAccents($string){
$acc=utf8_decode('àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ');
$sansacc='aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY';

for($i=0;$i<strlen($string);$i=$i+1){
//echo'<script type="text/javascript">alert("'.substr($acc,1,1).'")</script>';
for($j=0;$j<strlen($acc);$j=$j+1){
if(substr($string,$i,1)==substr($acc,$j,1)){
$string=str_replace(substr($acc,$j,1),substr($sansacc,$j,1),$string);
}
}
}
return $string;
}


$discut = urldecode( $_GET['discut'] );
//echo "<script>alert('".$discut."')</script>";

$Qui=urldecode( $_GET['qui'] );//qui?
$Contact=urldecode( $_GET['contact'] );//contact
//$Message=urldecode( $_GET['discut'] );//Message
$Fich=urldecode( $_GET['discut'] );//contact
$Titre=urldecode( $_GET['titre'] );//Titre
$Objet=urldecode( $_GET['objet'] );//Objet




$etape=$_REQUEST['etape'];
if($etape=="")
{
//echo "<script>alert('etape=1&discut=".$Fich."&titre=".$Titre."&objet=".$Objet."&qu=".$Qui."&contact=".$Contact."')</script>";
echo "<form enctype='multipart/form-data' action='".$PHP_SELF."?etape=1&discut=".$Fich."&titre=".$Titre."&objet=".$Objet."&qui=".$Qui."&contact=".$Contact."' method='post' ><input type='hidden' name='MAX_FILE_SIZE' value='600000000' style='font-size:10px'>";
echo "<font face='Helvetica' ><b>Documents partagés</b></font><br><br>";


echo "<input id='fichier' name='fichier' type='file'  style='font-size:10px;border:1px solid gray;width : 170px'><br><br>";

echo "<input type='submit' name='valid'  value='Télécharger' style='font-size:10px'>";
echo "</form>";
}else{



 $repertoireDestination = $discut."/";

    $nom_fichier = $_FILES["fichier"]["name"];
	$nom_fichier=utf8_decode($nom_fichier);
	$nom_fichier=supprimAccents($nom_fichier);
	
	
	if($nom_fichier !=""){
	//echo'<script type="text/javascript">alert("'.$nom_fichier.'")</script>';
	$FNOM=$nom_fichier;
	    $varnom="fichier";
		 is_uploaded_file($_FILES[$varnom]["tmp_name"]);
      rename($_FILES[$varnom]["tmp_name"], $repertoireDestination.$FNOM) ;
	  
	
	
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww DEBUT de ajout à la liste de documents wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww


$haut='<html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"><script language="javascript">function OKici(){var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");if(topX>0){;parent.frames.changeaide.location.href="../ecrit_hypertext.html"}}</script></head><body onload="OKici()" style="font-family:arial; font-size:11px;background-color:white" onUnload="parent.rien()">';

$bas='</body></html>';


$NomDocument=$FNOM;//Document uploaded


if($NomDocument!=""){
$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

$datefr = $jour[date("w" )]." ".date("d")." ".$mois[date("n")]." ".date("Y")." : ".date("H")." h ".date("i"); 

$contenu = file_get_contents($Fich."/ListeDocs.html"); 
$contenu=str_replace($haut,"",$contenu);
$contenu=str_replace($bas,"",$contenu);
$iCpt = substr_count ($contenu, 'id=\'qui\'')+1;



//$Message=str_replace("**gt**","&gt;",$Message);
//$Message=str_replace("**lt**","&lt;",$Message);

$m='<!-- //////////////////////////////////////////////////// Début N°'.$iCpt.' ///////////////////////////////////////////////// -->

<table style="width:150px;font-size:10px" >
<tr id="signal'.$iCpt.'"style="border:0.5px solid gray;background-color:#CECECE;display:none">
<td  style="text-align:left;color:gray;width:10%">

</td>
<td id=\'qui\' style="text-align:left;color:gray;width:25%">
<b>'.$Qui.'</b>
</td>
<td id="contact">
<b></b>
</td>
<td>

</td>
</tr></table>
<table style="width:450px;font-size:10px" >
<tr>
<td style="text-align:left;font-size:10px;width:100%" >

<b>N°<span style="color:navy">'.$iCpt.'&nbsp;-&nbsp;</span></b>
<a href="'.$discut.'/'.$NomDocument.'" style=";color:#416BA1;" target=_"blank" ><b title="envoyé par '.$Qui.' - '.$datefr.'">'.$NomDocument.'</b></a>


</td>
</tr>
</table>

<!-- //////////////////////////////////////////////////// Fin ///////////////////////////////////////////////// -->';



$op_file = fopen($Fich."/ListeDocs.html","w+");


fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fclose($op_file);
};
$Titre=str_replace("x@x","'",$Titre);
$Objet=str_replace("x@x","'",$Objet);



//echo'<script type="text/javascript">parent.location.href="InterfaceDiscussion.html?discut='.$Fich.'&titre='.$Titre.'&objet='.$Objet.'&log='.$Qui.'&mail='.$Contact.'"</script>';
//discut=".$Fich."&titre=".$Titre."&objet=".$Objet."&log=".$Qui."&mail=".$Contact."
//wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww FIN de ajout à la liste de documents wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww



echo'<script type="text/javascript">parent.frames.uploaded.location.href="'.$Fich.'/ListeDocs.html"</script>';
	
//echo "<script>self.location.href='download.php?discut=".$discut."'</script>";
}
echo'<script type="text/javascript">parent.chargeModuleUpload()</script>';
}

?>
</font>

</body>
</html>
