<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=utf-8"> 
 
 </head><body>

<?php
$REPDESTIN = urldecode( $_GET['REPDESTIN'] );
$REP = urldecode( $_GET['REP'] );
$cibledestin = urldecode( $_GET['cibledestin'] );
$cible = urldecode( $_GET['cible'] );

include("../txt_to_html-Num0/entetes.php");





$q=$_REQUEST['A'];

$n=$_REQUEST['N'];
$nb_valeurs=count($n);




if($cible=="DATA-IcoSujet.js"){$sufix="IconeEchelle";$saisie="ICO-sujet";$index="2000";$ico=1;};
if($cible=="DATA-IcoOther.js"){$sufix="IconeSup";$saisie="ICO-other";$index="1000";$ico=1;};
if($cible=="DATA-Sujet.js"){$sufix="Sujet";$saisie="GRAPH-sujet";$index="0";$ico=0;};
if($cible=="DATA-Other.js"){$sufix="Other";$saisie="GRAPH-other";$index="100";$ico=0;};



include("../Controle/Sauv/sauv.php");
$array=array("31");
sauv($file,$array);	

$array=array("32");
sauv($file,$array);

//on ouvre le fichier
$fichier='../../'.$REP.'/'.$cible ; //"DATA-IcoSujet.js";
$op_file=fopen($fichier,"a+");//ajout en fin de fichier
//on ecrit dans le fichier : 
$j=0;
$z=0;
$a=0;

fwrite($op_file,"\n");
fwrite($op_file,"\n");
for($i=0;$i<$nb_valeurs;$i++)
{

if($j==0 and $n[$i]=="" and $n[$i+1]==""  and $n[$i+2]=="" ){$a=1;$i=$i+13;}else{$a=0;}
if($a==0){

if($j==0 ){fwrite($op_file,"paramHISTOX0=new Array()\n");};
if($j==0){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");}
if($j==3){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
if($j==11){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
if($ico==1){
if($j==1 or $j==2 or $j==9 or $j==12 or $j==6  or $j==7 or $j==8){fwrite($op_file,"paramHISTOX0[".$j."]=\"".$n[$i]."\"\n");};
if($j==4 or $j==5 ){fwrite($op_file,"paramHISTOX0[".$j."]=new Array()\n");};//or $j==11 

if($j==10 ){fwrite($op_file,"paramHISTOX0[".$j."]=".$index."+menu".$sufix.".length+1\n");};
if($j==12){fwrite($op_file,"menu".$sufix."[menu".$sufix.".length]=paramHISTOX0\n\n");};

}else{
if($j==1 or $j==2 or $j==9 or $j==12 or $j==6  or $j==7 ){fwrite($op_file,"paramHISTOX0[".$j."]=\"".$n[$i]."\"\n");};

					if($j==4){
			//$n[$i]=str_replace("'",'"',$n[$i]);
	

//echo '<script language="javascript">alert("'.$n[$i].'")</script>';

		
			$n[$i]="@".$n[$i]."@";
			
			$n[$i]=str_replace("','",'","',$n[$i]);			
			$n[$i]=str_replace("'","\'",$n[$i]);
			
			$n[$i]=str_replace("\',\'",'\",\"',$n[$i]);
			$n[$i]=str_replace("'",'\'',$n[$i]);
			$n[$i]=str_replace('@\"','\"',$n[$i]);
			$n[$i]=str_replace('\"@','\"',$n[$i]);
			$n[$i]=str_replace("@\'",'\"',$n[$i]);
			$n[$i]=str_replace("\'@",'\"',$n[$i]);
			$n[$i]=str_replace("@","",$n[$i]);	
			fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
			
			
if($j==8){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(\"\",\"\")\n");};

			
			if($j==5 ){
			

//echo '<script language="javascript">alert("'.$n[$i].'")</script>';

			
			$n[$i]="@".$n[$i]."@";
			
			$n[$i]=str_replace("','",'","',$n[$i]);			
			$n[$i]=str_replace("'","\'",$n[$i]);
			
			$n[$i]=str_replace("\',\'",'\",\"',$n[$i]);
			$n[$i]=str_replace('@\"','\"',$n[$i]);
			$n[$i]=str_replace('\"@','\"',$n[$i]);
			$n[$i]=str_replace("@\'",'\"',$n[$i]);
			$n[$i]=str_replace("\'@",'\"',$n[$i]);	
			$n[$i]=str_replace("@","",$n[$i]);	
			
			
			
			
			
			
			fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};
			
			if($j==11 ){fwrite($op_file,"paramHISTOX0[".$j."]=new Array(".$n[$i].")\n");};

if($j==10 ){fwrite($op_file,"paramHISTOX0[".$j."]=".$index."+menu".$sufix.".length+1\n");};
if($j==12){fwrite($op_file,"menu".$sufix."[menu".$sufix.".length]=paramHISTOX0\n\n");};

}
$j=$j+1;
if($j==13){$j=0;}
}

}


//echo "<br><b>Modifications enregistrées dans ".$fichier." </b>";

//echo '<script language="javascript">parent.frames.framefichiers.document.location.href="Saisie'.$saisie.'.php?REP='.$REP.'&cible='.$cible.'"</script>';
fclose($op_file);

$op_file=fopen($fichier,"r");
//$contenu = fread($op_file, filesize($fichier));
$contenu = file_get_contents($fichier);
$contenu = stripslashes($contenu);
$contenu=str_replace("\',\'",'","',$contenu);
$contenu=str_replace("\',",'",',$contenu);
$contenu=str_replace("(\'",'("',$contenu);
$contenu=str_replace("')",'")',$contenu);
$contenu=str_replace('\")','")',$contenu);
fclose($op_file);

$op_file = fopen($fichier,"w+");
fwrite($op_file,$contenu);
fclose($op_file);




$fichier2='../../'.$REPDESTIN.'/'.$cibledestin ;	

$op_file=fopen($fichier2,"w+");
fwrite($op_file,$haut);
fwrite($op_file,"\n");
echo $q[0];
fwrite($op_file,$q[0]);
fwrite($op_file,"\n");
fwrite($op_file,$bas);


// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);


$contenu = file_get_contents($fichier2);

$contenu = stripslashes($contenu);

$op_file = fopen($fichier2,"w+");
fwrite($op_file,"");
fwrite($op_file,$contenu);
// Les données sont peut être encore gardées en mémoire
fflush($op_file);
// Les données sont certainement écrites 
fclose($op_file);


echo "<br><b>Menu ajouté dans ".$REP."/".$cible."  <br>Données ajoutées au fichier ".$REPDESTIN."/".$cibledestin."</b>";
echo '<script language="javascript">setTimeout("top.frames.editMenu.location.href=\'transmenu.htm\'",2000)</script>';
?>
</body></html>