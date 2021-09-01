<?php





$z=$_REQUEST['Z'];




$fichier="PageCarto/azimutArticle.js";
$op_file=fopen($fichier,"w+");

fwrite($op_file,$z[0]);


fclose($op_file);
//echo "<script language='javascript'>alert('".$z[1]."')</script>";
echo "<script language='javascript'>window.location.href='Normal-BLANC-ajustMap.html".$z[1]."'</script>";

//echo "<script language=\"javascript\">open(\"".$fichier."\")</script>";
?>