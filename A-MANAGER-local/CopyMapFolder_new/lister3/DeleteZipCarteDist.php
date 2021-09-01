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



$zipcarte = urldecode( $_GET['zipcarte'] );
$zipcarte = str_replace("%20"," ",$zipcarte);
rename($zipcarte,str_replace(" ","%20",$zipcarte));
unlink(str_replace(" ","%20",$zipcarte));

?>

</body></html>