<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 
 </head><body>

<?php
header('Content-type: text/html; charset=UTF-8'); 
$fich = urldecode( $_GET['fich'] );

echo '<br><br><b> Données intégrées au fichier : <br><span style="color:green">'.$fich.'</span></b>';
?>
</body></html>