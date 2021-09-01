<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<script language="javascript">

</script>
</head>
<body>
<?php
$n=$_REQUEST["N"];


if(count($n)==1 & $n[0]!=""){
$mt=urldecode( $_GET['mpt2'] );
$sn[0]=str_replace("amp;", "", $n[0]);
$sn[0]=str_replace("&gt;", ">", $n[0]);
$sn[0]=str_replace("&lt;", "<", $n[0]);
$op_file = fopen("rezo.js","w+");
fwrite($op_file,$n[0]);
fclose($op_file);
echo '<script language="javascript">

function redem(){

window.location.href="ModifRezo.html?mpt2='.$mt.'"
}

redem()
</script>';
}
?>
</body>
</html>