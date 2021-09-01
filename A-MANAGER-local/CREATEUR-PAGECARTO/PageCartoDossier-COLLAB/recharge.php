<?php
$Fich=urldecode( $_GET['discut'] );
$ran=urldecode( $_GET['ran'] );
echo'<script type="text/javascript">parent.frames.uploaded.location.href="PageCarto/ListeDocs.html?ran='.$ran.'"</script>';

echo'<script type="text/javascript">parent.frames.discuss.location.href="PageCarto/'.$Fich.'.htm?ran='.$ran.'"</script>';

?>