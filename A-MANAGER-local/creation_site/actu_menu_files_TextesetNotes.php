<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">

/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
//alert("ok");
</script>
<?php

$REP = urldecode( $_GET['REP'] );
$m=$_REQUEST['M'];//raffraichissement des fichier
$l=$_REQUEST['L'];//listpublication
$n=$_REQUEST['N'];// 
$r=$_REQUEST['R'];// 
$p=$_REQUEST['P'];// 


$m2=array();
$l2=array();
$n2=array();
$r2=array();
$p2=array();

// Traitement de la liste :  classement par rang croissant avec les ans rang à la fin
/*
for($i=1;$i<count($n);$i++){

}

*/

// enregistrement de la liste
//$repertoiredepart="../../HYPERTEXTES-tous/";
//$repertoireDestination ="../../Site-".$REP."/";
/*
$nom="cartO-Sommaire-Site-".$REP."-encaps.htm";
copy($repertoiredepart.$nom,$repertoireDestination.$nom);
*/
if(count($n)>0 ){// protection anti robot google


include("../Controle/Sauv/sauv.php");
$array=array("29");
sauv($file,$array);	

$fichier3="../../menuARTICLES.js";
$op_file3=fopen($fichier3,"w+");
fwrite($op_file3,"var listpubcartovisionA=new Array();var ranglisteA=new Array(); \n");
fwrite($op_file3,"var menuencapsA=new Array();\n\n");
fwrite($op_file3,"menuencapsA[menuencapsA.length]=\"Sommaire\";\n");
fwrite($op_file3,"listpubcartovisionA[listpubcartovisionA.length]=1;\n");
//fwrite($op_file3,"rangliste[rangliste.length]=1;\n\n");

for($i=1;$i<count($n)+1;$i++){

if($l[$i]!=1){$l[$i]=0;}
fwrite($op_file3,"menuencapsA[menuencapsA.length]=\"".$n[$i]."\";\n");
fwrite($op_file3,"listpubcartovisionA[listpubcartovisionA.length]=".$l[$i].";\n");

}

fclose($op_file3);
//echo"<script type='text/javascript'>setTimeout(\"open('../../Site-".$REP."/Site-".$REP.".htm')\",1500)</script>";
echo"<script type='text/javascript'>top.selectOnglet('east',1)</script>";

echo"<script type='text/javascript' id='menuici' ></script>";
echo"<script type='text/javascript'>document.getElementById('menuici').src='../../menuARTICLES.js'</script>";
echo"<script type='text/javascript'>setTimeout(\"top.indica0R();top.menuARTICLEScom(menuencapsA);\",1700)</script>";
echo"<script type='text/javascript'>setTimeout(\"top.changepagecrea('option1');window.location.href='../../vide.htm'\",2200)</script>";


}
//echo"<script type='text/javascript'>setTimeout(\"window.location.href='../../vide.htm'\",2300)</script>";
?>
</font>

</body>
</html>
