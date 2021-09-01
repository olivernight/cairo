<?php
$Fich=urldecode( $_GET['discut'] );
$ran=urldecode( $_GET['ran'] );
echo'<script type="text/javascript">parent.frames.uploaded.location.href="'.$Fich.'/ListeDocs.html?ran='.$ran.'"</script>';

echo'<script type="text/javascript">parent.frames.discuss.location.href="'.$Fich.'/'.$Fich.'.html?ran='.$ran.'"</script>';

?>