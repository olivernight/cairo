<html><head>

<?php
//
$M=$_REQUEST['M'];

$specif=$_REQUEST['S'];
$rezo=$_REQUEST['R'];
if($M[0]!=""){// anti robots
//echo '<script language="javascript">alert("ici stockPanier.php")</script>';
$date_time=date("d-m-Y");
$rep="Z-StockPanier";//$REP[0];//.'-'.$date_time;
mkdir ("../../".$rep);

//-----------------------------------------------------------------------
$contenu = stripslashes($M[0]);
$op_file = fopen("../../".$rep."/principal-".$specif[0].".js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$contenu);
fclose($op_file);

$op_file = fopen("../../".$rep."/principal-".$specif[0].".html","w+");
fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$contenu);
fwrite($op_file,"\n\n");
fwrite($op_file,$bas);
fclose($op_file);

}
//echo '<script language="javascript">alert("'.$specif[0].'")</script>';
//echo"<script type='text/javascript'>window.open('".$rezo[0]."A-MANAGER-local/AddColonnesEtPanier/transmenu.htm?PANIER=".$rezo[1].$rep."/principal-".$specif[0].".js')</script>";
echo"<script type='text/javascript'>window.open('".$rezo[0]."ReadLibelDataGestionPanier.html?PANIER=".$rezo[1].$rep."/principal-".$specif[0].".js&specif=".$specif[0]."')</script>";
echo"<script type='text/javascript'>window.open('../../".$rep."/principal-".$specif[0].".js')</script>";
echo"<script type='text/javascript'>parent.frames.frameStockPanier.location.href='../../ReadLibelDATAStockPanier.html'</script>";


?>
</head><body></body></html>