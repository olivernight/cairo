<?php
$hautancien='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Pragma" content="no-cache" >
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" >
<meta http-equiv="Expires" content="0" >
<!--

création Cité Publique : cite.publique@wanadoo.fr

auteur : Hervé Paris - 2009

Licence GNU GPL

-->
  <title>balisescommandes</title>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <script language="javascript" src="entete.js"></script>
  <script language="javascript" src="hypertexte.js"></script>
 

  <style type="text/css">
a:link { font-weight:bold; color:#0000E0; text-decoration:none }
a:visited { font-weight:bold; color:#000080; text-decoration:none }
a:hover { font-weight:bold; color:#E00000; text-decoration:none }
a:active { font-weight:bold; color:#E00000; text-decoration:underline }
a:focus { font-weight:bold; color:#00E000; text-decoration:underline } 
  </style>
</head>
<body
 style="background-color: rgb(228, 228, 228); font-family: arial; font-size: 10px; color: rgb(0, 0, 0);"
 onload="init()" alink="#ee0000" link="#0000ee" vlink="#551a8b">';

$basancien='</body></html>';



$haut='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"> <script language="javascript" src="entete.js"></script> <script language="javascript" src="hypertexte.js"></script>  <script language="javascript">var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");var tipX=tapX.indexOf("InterfaceDiscussion");var tepX=tapX.indexOf("Onglet");function OKici2(){if(topX>0){;parent.frames.changeaide.location.href="../ecrit_hypertext.html"}}</script><style type="text/css">a:link {  color:#0000E0; text-decoration:none ;} a:visited {  color:#0000A0; text-decoration:none ;} a:hover { font-weight:bold; color:#E00000; text-decoration:underline; } a:active { font-weight:bold; color:#E00000; text-decoration:underline ;} a:focus { font-weight:bold; color:#00E000; text-decoration:underline :} </style></head><body onload="if((topX>0 || tipX>0)& tepX<0){OKici2()}else{init()}" style="font-family:arial; font-size:10px;background-color:rgb(228, 228, 228)" onUnload="parent.rien()" >';

$haut2='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"><html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"> <script language="javascript" src="entete.js"></script> <script language="javascript" src="hypertexte.js"></script>  <script language="javascript">var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");var tipX=tapX.indexOf("InterfaceDiscussion");var tepX=tapX.indexOf("Onglet");function OKici2(){if(topX>0){;parent.frames.changeaide.location.href="../ecrit_hypertext.html"}}</script><style type="text/css">a:link {  color:#0000E0; text-decoration:none ;} a:visited {  color:#0000A0; text-decoration:none ;} a:hover { font-weight:bold; color:#E00000; text-decoration:underline; } a:active { font-weight:bold; color:#E00000; text-decoration:underline ;} a:focus { font-weight:bold; color:#00E000; text-decoration:underline :} </style></head><body onload="if((topX>0 || tipX>0)& tepX<0){OKici2()}else{init()}" style="font-family:arial; font-size:10px;background-color:rgb(228, 228, 228)" onUnload="parent.rien()" >';


$bas='<a name="xbas"></a></body></html>';


?>