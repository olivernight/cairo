<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 <script language="javascript">
 
 </script>
 </head><body>
 
<?php
$rep = urldecode( $_GET['REP0'] );
echo '<script><alert("'.$rep.'")</script>';
$fichierX='../../'.$rep.'/OperationEnCours.js';
$op_file_OP=fopen($fichierX,"a+");
fwrite($op_file_OP,"//tentative de récupération;\n"); 
fclose($op_file_OP); 
 ?>

</body></html>