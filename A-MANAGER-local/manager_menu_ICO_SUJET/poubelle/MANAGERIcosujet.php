<?php
//MANAGERsujet.php
//$dir=$_REQUEST['repert'];
$n=$_REQUEST['N'];
$nb_valeurs=count($n);
//on ouvre le fichier
//$fichier=$dir."/DATA-IcoSujet.js";
$fichier="DATA-IcoSujet.js";
$op_file=fopen($fichier,"w+");
//on ecrit dans le fichier : 
$j=0;
$z=0;
$a=0;
for($i=0;$i<$nb_valeurs;$i++)
{

if($j==0 and $n[$i]=="" and $n[$i+1]==""  and $n[$i+2]=="" ){$a=1;$i=$i+13;}else{$a=0;}
if($a==0){
//if($j!=1 or $j!=2 or $j!=9 or $j!=12){if($n[$i]==""){$n[$i]="\"\""; }};
if($j==0 ){fwrite($op_file,"paramHISTOX0=new Array()\n");};
if($j==0){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].",0)\n");}
if($j==3){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
if($j==1 or $j==2 or $j==9 or $j==12 or $j==6  or $j==7 or $j==8){fwrite($op_file,"paramHISTOX0[".$j."]=\"".$n[$i]."\"\n");};
if($j==4 or $j==5 or $j==11 ){fwrite($op_file,"paramHISTOX0[".$j."]=new Array()\n");};
//if($j==6  or $j==7 or $j==8){fwrite($op_file,"paramHISTOX0[".$j."]=".$n[$i]."\n");};
if($j==10 ){fwrite($op_file,"paramHISTOX0[".$j."]=2000+menuIconeEchelle.length+1\n");};
if($j==12){fwrite($op_file,"menuIconeEchelle[menuIconeEchelle.length]=paramHISTOX0\n\n");};
echo "<br>n[".$i."] = ".$n[$i]."  --> inscrit dans ".$fichier." ! ";

$j=$j+1;
if($j==13){$j=0;}
}
}
echo "<br><b>Modifications enregistrées dans ".$fichier." </b>";
fclose($op_file);
?>