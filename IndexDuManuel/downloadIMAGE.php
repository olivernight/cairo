<html>
<head><title>télécharger fichier</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">


</script>
<?php

$REP = urldecode( $_GET['REP'] );
//echo'<script language="javascript">alert("'.$REP.'")</script>';
$etape=$_REQUEST['etape'];
if($etape=="")
{
echo "<form enctype='multipart/form-data' action='".$PHP_SELF."?etape=1&REP=".$REP."' method='post'><input type='hidden' name='MAX_FILE_SIZE' value='600000000' >";
echo "<font face='Helvetica' size='2'><b>Télécharger des images</b></font><br>";
echo "<font face='Helvetica' size='1'><i>(les images sont placées dans le dossier telechargements)</i></font><br>";

echo "<input id='fichier' name='fichier' type='file'><br>";

echo "<input type='submit' name='valid'  value='Télécharger'>";
echo "</form>";
}else{


 $repertoireDestination ="telechargements/";// $REP."/";

    $nom_fichier = $_FILES["fichier"]["name"];
	if($nom_fichier !=""){
	$FNOM=$nom_fichier;
	    $varnom="fichier";
		 is_uploaded_file($_FILES[$varnom]["tmp_name"]);
      rename($_FILES[$varnom]["tmp_name"], $repertoireDestination.$FNOM) ;
//echo "<script>self.location.href='download.php'</script>";
}
}

?>
</font>

</body>
</html>
