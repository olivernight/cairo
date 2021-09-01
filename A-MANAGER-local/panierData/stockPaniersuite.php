<html><head>

<?php
$ADRESSE = urldecode( $_GET['ADRESSE'] );
$specif = urldecode( $_GET['specif'] );
$util = urldecode( $_GET['util'] );
$reporigine=urldecode( $_GET['reporigine'] );
$REZO=urldecode( $_GET['REZO'] );
echo"<script type='text/javascript'>parent.parent.frames.GestionPanier.location.href='".$ADRESSE."&specif=".$specif."&util=".$util."&reporigine=".$reporigine."&REZO=".$REZO."'</script>";//alert('stockPaniersuite : adresse =".$specif."');



?>
</head><body></body></html>