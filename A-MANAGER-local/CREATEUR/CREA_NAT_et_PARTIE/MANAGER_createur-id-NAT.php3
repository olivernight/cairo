<?php
//MANAGERcartes.php
$dir="NAT";
//$_REQUEST['repert']
$n=$_REQUEST['N'];
$nb_valeurs=count($n);
//on ouvre le fichier
$fichier=$dir."/fichier_ID_CODE_NOM.txt";
$op_file=fopen($fichier,"w+");
//on ecrit dans le fichier : 
$cpt=0;
fwrite($op_file,"idcarte"."\t"."libel"."\t"."codeINSEE"."\n");
for($i=1;$i<$nb_valeurs+1;$i++)
{

fwrite($op_file,$n[$i]."\n");
$cpt=$i;
}
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."ensemble"."\t"."0"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."codeINSEE"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."-99999"."\n");
$cpt=$cpt+1;
fwrite($op_file,$cpt."\t"."-99999"."\t"."codeINSEE"."\n");
echo "<br><b>Modifications enregistrées dans ".$fichier." </b>";
fclose($op_file);
echo "<P>---| Le fichier <b>"."fichier_ID_CODE_NOM.txt"."</b> a ete genere";
echo "<p>---| <a href='".$dir."/fichier_ID_CODE_NOM.txt"."'>TELECHARGER</a>";
?>
<script language="javascript">
//top.frames.cadre.location.href="creationlistenom.php3"
</script>