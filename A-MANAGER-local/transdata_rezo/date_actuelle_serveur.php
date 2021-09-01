<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 <script language="javascript">
 
 </script>
 </head><body>
 
<?php



$dateactuelleServeur=date("y,m,d,H,i,s");

$fichierX='date-actuelle-serveur.js';
$op_file_OP=fopen($fichierX,"w+");

//$date_time=date("d-m-Y-H-m-s");


fwrite($op_file_OP,'var Date_Actuelle_Serveur="'.$dateactuelleServeur.'";'); 

fclose($op_file_OP); 




 ?>

</body></html>