<html><head>
<script id="scrpt"  language="javascript" >





</script>
</head><body>
<?php
//
$specif=$_REQUEST['S'];
$rezo=$_REQUEST['R'];
$rep="Z-StockPanier";//$REP[0];//.'-'.$date_time;
//echo '<script language="javascript">alert("ici stockPanier.php specif= '.$specif[0].'")</script>';
$PANIER=$rezo[1].$rep."/principal-".$specif[0].".js";
$gestionpanier=$rezo[0]."ReadLibelDataGestionPanier.html?PANIER=".$PANIER."&specif=".$specif[0]."&util=".$rezo[2]."&reporigine=".$rezo[3]."&REZO=".$rezo[1];//;
$M=$_REQUEST['M'];


if($M[0]!=""){// anti robots
//echo '<script language="javascript">alert("ici stockPanier.php")</script>';
$date_time=date("d-m-Y");
//$rep="Z-StockPanier";//$REP[0];//.'-'.$date_time;
mkdir ("../../".$rep);

//-----------------------------------------------------------------------
$contenu = stripslashes($M[0]);
$contenu = str_replace ( '""' , '"' , $contenu ); 
$op_file = fopen("../../".$rep."/principal-".$specif[0].".js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$contenu);
fclose($op_file);


}
//echo"<script type='text/javascript'>window.open('".$rezo[0]."ReadLibelDataGestionPanier.html?PANIER=".$rezo[1].$rep."/principal-".$specif[0].".js&specif=".$specif[0]."&util=".$rezo[2]."&reporigine=".$rezo[3]."')</script>";
//echo'<script type="text/javascript">alert("rezo[0]/rep='.$rezo[0].'      rezo[1]='.$rezo[1].$rep.'")</script>';
echo"<script type='text/javascript'>window.location.href='stockPaniersuite.php?ADRESSE=".$gestionpanier."'</script>";
//echo"<script type='text/javascript'>window.open('../../".$rep."/principal-".$specif[0].".js')</script>";
//echo"<script type='text/javascript'>setTimeout(\"parent.frames.frameStockPanier.location.href='../../ReadLibelDATAStockPanier.html'\",2000)</script>";


?>
</body></html>