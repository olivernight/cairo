<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 
 </head><body>

<?php
$REPDESTIN = urldecode( $_GET['REPDESTIN'] );
$REP = urldecode( $_GET['REP'] );
$cibledestin = urldecode( $_GET['cibledestin'] );

include("../panierData/entetesPanier.php");





$q=$_REQUEST['A'];
/*
$n=$_REQUEST['N'];
$nb_valeurs=count($n);





include("../Controle/Sauv/sauv.php");

$array=array("32");
sauv($file,$array);
*/
//echo '<script language="javascript">alert("'.$REPDESTIN.'")</script>';

$fichier2='../../'.$REPDESTIN.'/'.$cibledestin.'.js' ;	

$op_file=fopen($fichier2,"w+");


fwrite($op_file,$q[0]);


// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);

//fclose($op_file);
$contenu = file_get_contents($fichier2);
$contenu = stripslashes($contenu);

$op_file = fopen($fichier2,"w+");
fwrite($op_file,"");
fwrite($op_file,$contenu);
// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);

$fichier2='../../'.$REPDESTIN.'/'.$cibledestin.'.html' ;	

$op_file=fopen($fichier2,"w+");
fwrite($op_file,$haut);
fwrite($op_file,"\n");

fwrite($op_file,$q[0]);
fwrite($op_file,"\n");
fwrite($op_file,$bas);

// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);



//fclose($op_file);
$contenu = file_get_contents($fichier2);
$contenu = stripslashes($contenu);

$op_file = fopen($fichier2,"w+");
fwrite($op_file,"");
fwrite($op_file,$contenu);
// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);


echo "<br><b>Données ajoutées au fichier ".$REPDESTIN."/".$cibledestin.".js</b>";
//echo '<script language="javascript">setTimeout("top.close()",2000)</script>';
//echo '<script language="javascript">setTimeout("top.location.href=\'transmenu.htm\'",2000)</script>';
?>
</body></html>