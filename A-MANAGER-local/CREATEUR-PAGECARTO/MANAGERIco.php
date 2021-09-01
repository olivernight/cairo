<?php

$REP = $_POST['REP'];
$cible = $_POST['cible'];


$REP2=$REP.'/PageCartoDossier/PageCarto';
$cible2=str_replace('PageCartoDossier/PageCarto/','',$cible);

include("../Controle/Sauv/sauv.php");

//echo '<script language="javascript">alert("'.$REP2.'    '.$cible2.'")</script>';
$array=array("35");
sauv($file,$array);

$n=$_REQUEST['N'];
$nb_valeurs=count($n);

//on ouvre le fichier
$fichier='../../'.$REP.'/'.$cible;
if($cible=="PageCartoDossier/PageCarto/DATA-IcoSujet.js"){$sufix="IconeEchelle";$saisie="ICO-sujet";$index="2000";};
if($cible=="PageCartoDossier/PageCarto/DATA-IcoOther.js"){$sufix="IconeSup";$saisie="ICO-other";$index="1000";};
if($cible=="PageCartoDossier/PageCarto/DATA-Sujet.js"){$sufix="Sujet";$saisie="GRAPH-sujet";$index="0";};
if($cible=="PageCartoDossier/PageCarto/DATA-Other.js"){$sufix="Other";$saisie="GRAPH-other";$index="100";};

if($cible=="PageCartoDossier-BLANC/PageCarto/DATA-IcoSujet.js"){$sufix="IconeEchelle";$saisie="ICO-sujet";$index="2000";};
if($cible=="PageCartoDossier-BLANC/PageCarto/DATA-IcoOther.js"){$sufix="IconeSup";$saisie="ICO-other";$index="1000";};
if($cible=="PageCartoDossier-BLANC/PageCarto/DATA-Sujet.js"){$sufix="Sujet";$saisie="GRAPH-sujet";$index="0";};
if($cible=="PageCartoDossier-BLANC/PageCarto/DATA-Other.js"){$sufix="Other";$saisie="GRAPH-other";$index="100";};

$op_file=fopen($fichier,"w+");
//on ecrit dans le fichier : 
$j=0;
$z=0;
$a=0;
//for($i=0;$i<$nb_valeurs;$i++){$n[$i] = htmlspecialchars($n[$i]);}
for($i=0;$i<$nb_valeurs;$i++){
//$n[$i] = utf8_decode($n[$i]);
//$n[$i] = utf8_encode($n[$i]);
}

for($i=0;$i<$nb_valeurs;$i++)
{

if($j==0 and $n[$i]=="" and $n[$i+1]==""  and $n[$i+2]=="" ){$a=1;$i=$i+13;}else{$a=0;}
if($a==0){
//$n[$i]=str_replace("<","&lt;",$n[$i]);
//$n[$i]=str_replace(">","&gt;",$n[$i]);
if($j==0 ){
fwrite($op_file,"// ---------------------------MENU n°".($i/13+1)."----------------------------------------------\n");
fwrite($op_file,"paramHISTOX0=new Array()\n");
};
if($j==0 or $j==11){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");}
if($j==3){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
if($j==1 or $j==2 or $j==9 or $j==12 or $j==6  or $j==7 or $j==8){fwrite($op_file,"paramHISTOX0[".$j."]=\"".$n[$i]."\"\n");};
if($j==4 or $j==5 ){fwrite($op_file,"paramHISTOX0[".$j."]=new Array()\n");};//or $j==11 

if($j==10 ){fwrite($op_file,"paramHISTOX0[".$j."]=".$index."+menu".$sufix.".length+1\n");};
if($j==12){fwrite($op_file,"menu".$sufix."[menu".$sufix.".length]=paramHISTOX0\n\n");};
//echo "<br>n[".$i."] = ".$n[$i]."  --> inscrit dans ".$fichier." ! ";

$j=$j+1;
if($j==13){$j=0;}
}
}
echo "<br><b>Modifications enregistrées dans ".$fichier." </b>";
echo '<script language="javascript">parent.frames.framefichiers.document.location.href="Saisie'.$saisie.'.php?REP='.$REP.'&cible='.$cible.'&alea="+Math.random()</script>';
fclose($op_file);
?>