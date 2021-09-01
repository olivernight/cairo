<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">






</head>

<body STYLE="background-color: transparent">
<?php

$l=$_REQUEST['L'];
$l[0]=str_replace("&lt;","<",$l[0]);
$l[0]=str_replace("&gt;",">",$l[0]);
$contenu=$l[0];
$lefich=$l[1];
$chem=$l[2];
//$chem="../../".$chem;
$mt=$l[3];

copy($chem."N-3.".$lefich,$chem."N-4.".$lefich);
copy($chem."N-2.".$lefich,$chem."N-3.".$lefich);
copy($chem."N-1.".$lefich,$chem."N-2.".$lefich);
copy($chem.$lefich,$chem."N-1.".$lefich);

$fichier2=$chem.$lefich;
$op_file2 = fopen($fichier2,"w+");
fwrite($op_file2,$contenu);

fclose($op_file2);








echo "<script language=\"javascript\">
window.location.href='onglets.htm';
</script>";
?>
</body >
</html>