<?php

$haut='<html><head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<!--meta http-equiv="Pragma" content="no-cache" >
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" >
<meta http-equiv="Expires" content="0" -->

<META http-equiv="Cache-Control" content="no-cache">
<META http-equiv="Pragma" content="no-cache">
<META http-equiv="Expires" content="0"> 
  


<script language="javascript" src="functions.js"></script>
<script language="javascript">
function OKici(){

var topX=parent.location.href
topX=topX.indexOf("MENUAIDE",0)
if(topX>0){
parent.frames.changeaide.location.href="ecrit_hypertext.html"

}

}
</script>
</head>
<body onload="OKici()" style="font-family:arial;font-size:12px">';



$bas='</body></html>';


?>