<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

</head><body>


<?php



$cible = urldecode( $_GET['cible'] );		
		$cible=str_replace("%20"," ",$cible);	
	
//echo'<script language="javascript" >alert("'.$cible.'")</script>';
		
copy($cible, $cible.".txt" ); //no error 

echo'<script language="javascript" >window.location.href="'.$cible.'.txt"</script>';
?>

</body></html>