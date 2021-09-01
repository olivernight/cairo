<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

</head><body>


<?php


/*
$REPDEPART = "A";//urldecode( $_GET['REPDEPART'] );
$REPDEPModif = "X";//urldecode( $_GET['REPDEPART'] );
*/
$REPDEPModif = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	
		$REPDEPModif=str_replace("%20"," ",$REPDEPModif);	
		
$REPDEPART = urldecode( $_GET['rep'] ); // répertoire  ( nom du répertoire  carte à copier)
		$REPDEPART=str_replace("%20"," ",$REPDEPART);

$pdd = urldecode( $_GET['pdd'] );
		
rename ($REPDEPModif, $REPDEPART ); //no error // remet le nom original
//echo'<script language="javascript" >alert("fin renameDosCarte.php")</script>';
?>

</body></html>