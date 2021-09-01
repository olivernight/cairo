<?php
include('zipexportMap.php');
$n=$_REQUEST['N'];



if($n[0]!=""){


$sortie="<html><meta content='text/html; charset=UTF-8' http-equiv='content-type' /><title>Export svg : carte et légenges</title><head></head><body style='font-family:arial;font-size:11px'><br><br><center><span style='font-size:16px'><b>Export de la carte : <br>  ".str_replace('%20',' ',str_replace('PageCarto/Module-PageCarto.xml?format=complete&item=','indexVoirCarte.html',$n[6]))."</b></span><br><br><b><big>Variables</big></b><br>";
if($n[1]!=""){
$sortie=$sortie."<br><big>".$n[4]."</big>";
}
if($n[2]!=""){
$sortie=$sortie."<br><big>".$n[5]."</big>";
}
$sortie=$sortie."<br><br><span style='font-size:14px'><b>Pour récupérer les fichiers : <a href='Export_CARTOSVG.zip' target='_blank'>télécharger le dossier zippé</a></b></span><br>";

$sortie=$sortie."</center><br><br><center><table width='500px'><tr>";

/**/

/**/
$file_to_Write="Export_CARTOSVG.svg";
		$fichier2 = fopen ($file_to_Write, "w+");

		fwrite($fichier2,str_replace("xscript","script",$n[0]));

		fclose ($fichier2);

$sortie=$sortie."<iframe style='display:none' src='zipexportMap.php'></iframe>";

$sortie=$sortie."<td width='500px'   align='left'><b>Export_CARTOSVG.svg</b><br><br><div style='width:500px;overflow-x:scroll' ><embed name='lacarte' width='1000px' height='500px' onload='this.parentNode.scrollTo(0,0)'  src='".$file_to_Write."'></embed></div></td>";


$file_to_Write="Export_legendeRond.svg";
		$fichier2 = fopen ($file_to_Write, "w+");

		fwrite($fichier2,$n[1]);

		fclose ($fichier2);

if($n[1]!=""){
//echo "<script language='javascript'>window.open('".$file_to_Write."')</script>";
$sortie=$sortie."<td width='50px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width='300px' align='left' valign='top'><b>Export_legendeRond.svg</b><br><br><embed src='".$file_to_Write."'></embed></td>";
}

$file_to_Write="Export_legendeFond.svg";
		$fichier2 = fopen ($file_to_Write, "w+");

		fwrite($fichier2,$n[2]);

		fclose ($fichier2);

if($n[2]!=""){
//echo "<script language='javascript'>window.open('".$file_to_Write."')</script>";
$sortie=$sortie."<td width='50px'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td width='300px' align='left' valign='top'><b>Export_legendeFond.svg</b><br><br><embed src='".$file_to_Write."'></embed></td>";

}
$sortie=$sortie."</tr></table></center></body></html>";
$file_to_Write="Export.html";
		$fichier2 = fopen ($file_to_Write, "w+");

		fwrite($fichier2,$sortie);

		fclose ($fichier2);
		
create_zip($files_to_zip,'Export_CARTOSVG.zip');
		
echo "<script language='javascript'>window.open('".$file_to_Write."')</script>";
}
/**/
?>