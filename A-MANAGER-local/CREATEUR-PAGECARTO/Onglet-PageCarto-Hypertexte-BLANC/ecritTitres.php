<?php

$N=$_REQUEST['N'];
$entete=$N[0];
$entete=str_replace('"','\"',$entete);
//echo '<script language="javascript">alert("'.$N[0].'")</script>';
$cible = urldecode( $_GET['cible'] );
$cibleE="../../../".$cible."/PageCartoDossier-BLANC/PageCarto/entete.js";
$file_to_write=$cibleE;
$fichier = fopen ($file_to_write, "w+"); //fichier ouvert en écriture
$texte='

var titrepage="'.$entete.'"';


fwrite($fichier,$texte);
fclose ($fichier);


echo "<script language=\"javascript\">;setTimeout('parent.frames.pagecarto.frames.hypertexte.location.href=\"../../../".$cible."/PageCartoDossier-BLANC/PageCarto/hypertexte.htm?alea=\"+Math.random()',150)</script>";
echo '<script language="javascript">setTimeout("window.location.href=\'editTitres.html?LISTEJS='.$cible.'\'",500)</script>';

?>