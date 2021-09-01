<?php


$LOGici=urldecode($_GET['log'] );




if($LOGici !=""){




$op_file = fopen("../../ecritmajlog.js","a+");
fwrite($op_file,"\n\n");

fwrite($op_file,$LOGici);
fwrite($op_file,"\n\n");
fwrite($op_file,"//________________________\n\n");
fclose($op_file);

echo '<script language="javascript">window.location.href="../../vide.html"</script>';

}


?>