<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 <script language="javascript">
 
 </script>
 </head><body>
 
<?php
$ok;
$k=0;
$fich = urldecode( $_GET['fichierO'] );
$rep = urldecode( $_GET['REP0'] );
$cible = urldecode( $_GET['cible'] );
$codeopencours = urldecode( $_GET['dateencours'] );



$k=0;
//$cible = urldecode( $_GET['cible'] );

$codeopencours = urldecode( $_GET['dateencours'] );
$datefichHTML=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".html"));



if(is_file("../../".$rep."/".$fich.".js")){
$truc="le fichier js existe";
$datefichJS=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".js"));
}else{
$datefichJS=date("y,m,d,H,i,s");
$truc="le fichier de transfert de données .js n'existait pas. Sa création a commencé à la date suivante :".$datefichJS ;

}

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

  fwrite($op_file_OP,'var is_fichierJS="'.$truc.'"'); 
 fwrite($op_file_OP,"\n");
 fwrite($op_file_OP,'var datefichierJS="'.$datefichJS.'"//date du début de la création du fichier js de données'); 
 fwrite($op_file_OP,"\n");
fclose($op_file_OP); 








//echo "<script>alert( 'ici')</script>";

$datefichHTML=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".html"));
$datefichJS=date("y,m,d,H,i,s", filemtime("../../".$rep."/".$fich.".js"));
if(is_file("../../".$rep."/".$fich.".js")){
if($datefichHTML>$datefichJS){$ok=1;}else{$ok=0;}

}else{$ok=1;}


if($ok==1){
$file_to_open="../../".$cible;
$fichiercible = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule








//echo "<script>alert( 'occurences='+".$occurences.")</script>";



$fichier="../../".$rep."/".$fich.".js";
$op_file=fopen($fichier,"w+");



while (!feof($fichiercible)) {

$buffer = fgets($fichiercible,200000);
$buffer=str_replace("\r\n","xx@xx",$buffer);
$buffer=str_replace("\r","\n",$buffer);//cas mac;
$buffer=str_replace("\l","\n",$buffer);//cas mac;
$buffer=str_replace("xx@xx","\n",$buffer);
/*
if(strpos($buffer, "se00[")>0){ 
if(strpos($buffer, ")")>0){

if(strpos($buffer, ",0\n")>0){
$buffer=str_replace(",0\n",",0)\n;",$buffer);
}

}else{
$buffer=str_replace("\n","",$buffer);
$buffer=$buffer.")\n;";}
fwrite($op_file,$buffer); 
$k+=1;
}
*/
if(strpos($buffer, "new Array")>0){ 
if(strpos($buffer, ")")>0){}else{

if(strpos($buffer, ",0\n")>0){
$buffer=str_replace(",0\n",",0)\n;",$buffer);
}
}
fwrite($op_file,$buffer); 
}
}

fclose ($fichiercible);


// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file); 



//on réouvre et on enlèves les antislash
$file_to_write="../../".$rep."/".$fich.".js";
$contenu = file_get_contents($file_to_write);
$contenu=str_replace("0\n","0)\n",$contenu);

$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);

// Les données sont peut être encore gardées en mémoire
fflush($op_file2);
// Les données sont certainement écrites 
fclose($op_file2);
}

$fichierX='../../'.$rep.'/OperationEnCours.js';
$op_file_OP=fopen($fichierX,"a+");
fwrite($op_file_OP,"var Code0pe1=".$codeopencours.";\n"); 
fclose($op_file_OP); 







 ?>

</body></html>