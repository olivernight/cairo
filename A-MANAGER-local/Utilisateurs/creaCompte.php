<?php
$util = urldecode( $_GET['util'] );
$mp = urldecode( $_GET['mp'] );
$ad = urldecode( $_GET['ad'] );

if($util!=""){// anti robots
$rep="../../PANIERS-".$util;
mkdir ($rep);
$fichier="listeUtil.js";


//echo '<script type="text/javascript" >alert("'.$rep.'")</script>';
//echo '<script type="text/javascript" >alert("'.$fichier.'")</script>';
$op_file=fopen($fichier,"a+");

$ligneUtil="\nlistUtil[listUtil.length]=new Array('".$util."','".$mp."','".$ad."');\n";

fwrite($op_file,$ligneUtil);


fclose($op_file);

echo '<script type="text/javascript" >parent.location.href="../../LaRoseDesVents-1.html?util='.$util.'"</script>';
//echo '<script type="text/javascript" >alert("ici");parent.close()</script>';
}
?>