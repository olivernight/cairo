<html><head>
<?php
include("entetesPanier.php");

$REP=$_REQUEST['R'];//
$N=$_REQUEST['N'];//
$E=$_REQUEST['E'];//
$M=$_REQUEST['M'];//
$specif=$_REQUEST['S'];//
$TESTNOM=$_REQUEST['T'];//
/*
echo '<script language="javascript">alert("ici fabriPanier.php    '.$REP[0].'")</script>';
echo '<script language="javascript">alert("ici fabriPanier.php specif[0]   '.$specif[0].'")</script>';
echo '<script language="javascript">alert("ici fabriPanier.php N[7]   '.$N[7].'")</script>';
echo '<script language="javascript">alert("ici fabriPanier.php N[8]   '.$N[8].'")</script>';
echo '<script language="javascript">alert("ici fabriPanier.php N[1]  '.$N[1].'")</script>';
*/
if($REP[0]!=""){// anti robots
//
$date_time=date("d-m-Y");
$rep=$REP[0];//.'-'.$date_time;

mkdir ("../../PANIERS-".$N[7]);
mkdir ("../../PANIERS-".$N[7]."/".$rep);
//echo"<script type='text/javascript'>alert('".$rep."')</script>";

//if($TESTNOM[0]==0){

$M[1] = stripslashes($M[1]);
$op_file = fopen("../../mapsILIADEPanier-".$N[7].".js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$M[1]);
fclose($op_file);

//}
/*
//on réouvre et on enlèves les antislash
$file_to_write="../../mapsILIADEPanier.js";
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));


$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenu);
fclose($op_file);
*/
//-----------------------------------------------------------------------
$M[0] = stripslashes($M[0]);
$op_file = fopen("../../PANIERS-".$N[7]."/".$rep."/principal-".$specif[0].".js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$M[0]);
fclose($op_file);


$op_file = fopen("../../PANIERS-".$N[7]."/".$rep."/principal-".$specif[0].".html","w+");
fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$M[0]);
fwrite($op_file,"\n\n");
fwrite($op_file,$bas);
fclose($op_file);
/*/on réouvre et on enlèves les antislash
$file_to_write="../../".$rep."/".$N[1].".js";
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file = fopen($file_to_write,"w+");
fwrite($op_file,$contenu);
fclose($op_file);

*/



$mapo='mappocoord[0]="principal-'.$specif[0].'.html"  //" fichier de données sujet"
mappocoord[1]=""
mappocoord[2]="1" //
mappocoord[3]="1" //
mappocoord[4]="'.$N[1].'" // titre du pznirt
mappocoord[5]="0" //?
mappocoord[6]="PANIERS-'.$N[7].'/'.$rep.'" //répertoire du fichier principal
mappocoord[7]="PANIERS-'.$N[7].'/'.$rep.'" //répertoire du ficheir complémentaire
mappocoord[8]="0" // 
mappocoord[9]="0" // 
mappocoord[10]="1"
mappocoord[11]="'.$N[8].'"';
$mapo = stripslashes($mapo);
$op_file = fopen("../../PANIERS-".$N[7]."/".$rep."/DATA-mappocoord.js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$mapo);
fclose($op_file);














}
//echo"<script type='text/javascript'>top.redem()</script>";

?>
</head><body></body></html>