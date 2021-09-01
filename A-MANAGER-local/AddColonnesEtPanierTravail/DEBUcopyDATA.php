

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 <meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
 <script language="javascript">

 </script>
 <script id="fichierJS" language="javascript" ></script>

<?php

$fich = urldecode( $_GET['fichierO'] );
$rep = urldecode( $_GET['REP0'] );

?> 

 </head><body>
 
<?php
$k=0;
//$cible = urldecode( $_GET['cible'] );

$codeopencours = urldecode( $_GET['dateencours'] );
$datefichHTML=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".html"));
$datefichJS=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".js"));
$truc="pas de fichier js";
if(is_file("../../".$rep."/".$fich.".js")){$truc="le fichier js existe";}

$fichierX='../../'.$rep.'/OperationEnCours.js';
$op_file_OP=fopen($fichierX,"w+");

//$date_time=date("d-m-Y-H-m-s");


fwrite($op_file_OP,"var Code0pe0=".$codeopencours.";"); 
 fwrite($op_file_OP,"\n");
fwrite($op_file_OP,'var fichOrigine="'.$fich.'.html";');
 fwrite($op_file_OP,"\n");
fwrite($op_file_OP,'var repOrigine="'.$rep.'"'); 
 fwrite($op_file_OP,"\n");
fwrite($op_file_OP,'var datefichierHTML="'.$datefichHTML.'"'); 
 fwrite($op_file_OP,"\n");
  fwrite($op_file_OP,'var is_fichierJS="'.$truc.'"//existence du fichier de données .js'); 
 fwrite($op_file_OP,"\n");
 fwrite($op_file_OP,'var datefichierJS="'.$datefichJS.'"'); 
 fwrite($op_file_OP,"\n");
fclose($op_file_OP); 








/*

fclose ($fichiercible);

*/
echo '<script language="javascript">

 </script>';

 ?>

</body></html>