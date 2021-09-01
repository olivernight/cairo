<?php
$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire pour le registre de carte mapsIliade.js: 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
															//0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$mapx= $_REQUEST["M"];
$som= $_REQUEST["S"];
$libelmap= $_REQUEST["X"];															
$platef = urldecode( $_GET['platef'] );
$pdd = urldecode( $_GET['pdd'] ); 
$l = $_REQUEST["L"];
$date_time=date("Y/m/d à H:m");

$platef = str_replace(' ','%20',$platef);

$n=$_REQUEST["N"];
$k=$_REQUEST["K"];
$repert=$_REQUEST["R"];
$REPorigine = urldecode( $_GET['reporigine'] );
$REPcible = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	


$nb_valeurs=count($n);

if($nb_valeurs !=""){
echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
echo "<html>";
echo '<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
<script language="javascript" ></script></head>';

echo"<body style='font-family:arial;font-size:13px'><p id='log'>";

echo  'L\'opération de Transfert du dossier carte :<span style="color:red"> '.str_replace('../../','',$repert[0]).' </span><br/>provenant de la plateforme<b> '.$platef.'</b><br> a été opéré vers la carte :<br/><span style="color:red"> '.str_replace('../../','',$REPcible).'</span> dans cette plateforme<br>--------------------------------------<br/><br/><big><b>Redémarrez la plateforme pour charger la carte</b></big><br>

<script language="javascript"> var xpar=parent.location.href ; /*setTimeout("parent.location.href=xpar",4000) */</script>

';




$taborigdest=array();


for($i=0;$i<$nb_valeurs;$i++){

if($n[$i] != ""){

$orig=str_replace('../../','',$platef.$n[$i]);
$orig=str_replace(' ','%20',$orig);
$dest='../'.str_replace($REPorigine,$REPcible.'/',$n[$i]);
$dest = str_replace("//","/",$dest);

$tableau = explode($REPcible,$dest );
$tableaudest = explode('/',$tableau[1] );



if(is_dir('../'.$REPcible)){}else{mkdir ('../'.$REPcible);}


$cum="";

for($t=1;$t<count($tableaudest)-1;$t+=1){
if($t==1){$sla="";}else{$sla="/";}
if(is_dir('../'.$REPcible.'/'.$cum.$sla.$tableaudest[$t])){}else{mkdir('../'.$REPcible.'/'.$cum.$sla.$tableaudest[$t]);}

$cum=$cum.$sla.$tableaudest[$t];
}
//copy($orig,$dest);
$lod=array($orig,$dest);
$taborigdest[count($taborigdest)]=$lod;

}
}
for($i=0;$i<count($taborigdest);$i+=1){
copy($taborigdest[$i][0],$taborigdest[$i][1]);
}

if($chgt==1){


$op_file = fopen("../../../mapsILIADE.js","a+");
fwrite($op_file,"\n\n");
fwrite($op_file,'mapX[mapX.length]="'.$mapx[0].'"');fwrite($op_file,"\n");

fwrite($op_file,'mapX[mapX.length]="'.$mapx[1].'"');fwrite($op_file,"\n");
fwrite($op_file,'mapX[mapX.length]="'.$mapx[2].'"');fwrite($op_file,"\n");
fwrite($op_file,'mapX[mapX.length]="'.str_replace('../../','',$REPcible).'"');fwrite($op_file,"\n");
fwrite($op_file,'mapX[mapX.length]="'.str_replace('../../','',$REPcible).'"');fwrite($op_file,"\n");

fwrite($op_file,'sommableEchelle[sommableEchelle.length]= new Array("'.str_replace(',','","',$som[0]).'")');fwrite($op_file,"\n");

fwrite($op_file,'var echelle="'.$libelmap[0].'"');fwrite($op_file,"\n");
fwrite($op_file,'var maille="'.$libelmap[1].'"');fwrite($op_file,"\n");
fwrite($op_file,'var commentTitrecarte="'.$libelmap[2].'"');fwrite($op_file,"\n");
fwrite($op_file,'var commentaireschamp="'.$libelmap[3].'"');fwrite($op_file,"\n");
fwrite($op_file,'var theme=new Array("'.str_replace(',','","',$libelmap[4]).'")');fwrite($op_file,"\n");
fwrite($op_file,'var autrescommnt="'.$libelmap[5].'"');fwrite($op_file,"\n");
fwrite($op_file,'var originalauthors="'.$libelmap[6].'"');fwrite($op_file,"\n");
fwrite($op_file,'var otherauthors="'.$libelmap[7].'"');fwrite($op_file,"\n");
fwrite($op_file,'libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors)');


fclose($op_file);
}


$file_to_open="../".$REPcible."/DATA-mappocoord.js";
if(is_file($file_to_open)){
$text =file_get_contents($file_to_open);

$rep0=str_replace("../../","",$repert[0]);
$rep0=str_replace("/","",$rep0);
$rep0cible=str_replace("../../","",$REPcible);
$text=str_replace($rep0,$rep0cible,$text);

$fichier = fopen ($file_to_open, "w+"); //
fwrite($fichier,$text);

fclose($fichier);
}
/**/



echo "</p></body></html>";
echo '<script language="javascript">


</script>';
}


?>


