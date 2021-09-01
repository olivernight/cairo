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
$array=array("17");
sauv($file,$array);	
	
$fichier3="liensSites.js";
$op_file3=fopen($fichier3,"w+");
//fwrite($op_file3,"var listpubcartovision=new Array();var rangliste=new Array(); \n");
//fwrite($op_file3,"var menuencaps=new Array();\n\n");
//fwrite($op_file3,"menuencaps[menuencaps.length]=\"Sommaire\";\n");
//fwrite($op_file3,"listpubcartovision[listpubcartovision.length]=1;\n");
//

for($i=1;$i<count($n)+1;$i++){

if($l[$i]!=1){$l[$i]=0;}
fwrite($op_file3,"liensSites[liensSites.length]=\"".$n[$i]."\";\n");
fwrite($op_file3,"listpubcartovision[listpubcartovision.length]=".$l[$i].";\n");
fwrite($op_file3,"rangliste[rangliste.length]=1;\n\n");
}

fclose($op_file3);
//echo"<script type='text/javascript'>setTimeout(\"open('../../Site-".$REP."/Site-".$REP.".htm')\",1500)</script>";
echo"<script type='text/javascript'>top.selectOnglet('east',2)</script>";

//echo"<script type='text/javascript' id='menuici' ></script>";
//echo"<script type='text/javascript'>document.getElementById('menuici').src='../../liensSites.js'</script>";
//echo"<script type='text/javascript'>setTimeout(\"top.menucom(menuencaps,listpubcartovision)\",1700)</script>";
echo"<script type='text/javascript'>setTimeout(\"window.location.href='liensSites.html'\",1700)</script>";

}
?>
</font>

</body>
</html>
