<html>
<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">





var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
</script>
<?php
include("../txt_to_html-Num0/entetes.php");
$REP =$_REQUEST['repert'];//= urldecode( $_GET['REP'] );
$cible =$_REQUEST['xfile'];//= urldecode( $_GET['cible'] );
$dataX=$_REQUEST['tempo'];//urldecode( $_GET['dataX'] );


echo " fichier cible=".$cible;
echo " repertoire=".$REP;

$file_to_open="../../".$REP."/".$cible;


$fichier3 = fopen ($file_to_open, "w+");
fwrite($fichier3,$haut);
$dataX = stripslashes($dataX);
echo " contenu=".$dataX;
fwrite($fichier3,$dataX);
fwrite($fichier3,$bas);


fclose ($fichier3);

//on réouvre et on enlèves les antislash
//$contenu = fread(fopen($file_to_open, "r"), filesize($file_to_open));
$contenu = file_get_contents($file_to_open);
$contenu = stripslashes($contenu);

$op_file3 = fopen($file_to_open,"w+");
fwrite($op_file3,$contenu);
fclose($op_file3);






//chmod ($file_to_open, 0777);




?>
</font>
</body>
</html>
