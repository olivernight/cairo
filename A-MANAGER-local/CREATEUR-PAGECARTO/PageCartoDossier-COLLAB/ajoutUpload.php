<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 

<?php
$Qui=$_REQUEST['N'];//qui?
$Contact=$_REQUEST['C'];//contact
$Message=$_REQUEST['M'];//Message
$Fich=$_REQUEST['F'];//contact
$Titre=$_REQUEST['T'];//Titre
$Objet=$_REQUEST['O'];//Objet
$NomDocument=$_REQUEST['D'];//Document uploaded


include("entetes.php");

if($NomDocument[0]!=""){
$jour = array("Di","Lu","Ma","Me","Je","Ve","Sa");

$mois = array("","Jan","Fév","Mar","Av","Mai","Juin","Juil","Août","Sept","Oct","Nov","Déc");

$datefr = $jour[date("w" )]." ".date("d")." ".$mois[date("n")]." ".date("Y")." : ".date("H")." h ".date("i"); 

$contenu = file_get_contents("PageCarto/".$Fich[0].".htm"); 
$contenu=str_replace($haut,"",$contenu);
$contenu=str_replace($hautancien,"",$contenu);
$contenu=str_replace($bas,"",$contenu);
$contenu=str_replace($basancien,"",$contenu);
$iCpt = substr_count ($contenu, 'id=\'qui\'')+1;



//$Message[0]=str_replace("**gt**","&gt;",$Message[0]);
//$Message[0]=str_replace("**lt**","&lt;",$Message[0]);

$m='<table style="width:150px;font-size:10px" >
<tr id="signal'.$iCpt.'"style="border:0.5px solid gray;background-color:#CECECE;display:none">
<td  style="text-align:left;color:gray;width:10%">

</td>
<td id=\'qui\' style="text-align:left;color:gray;width:25%">
<b>'.$Qui[0].'</b>
</td>
<td id="contact">
<b><a style="color:#416BA1; " href="mailto:'.$Contact[0].'">'.$Contact[0].'<a></b>
</td>
<td>
'.$datefr.'
</td>
</tr></table>
<table style="width:450px;font-size:10px" >
<tr>
<td style="text-align:left;font-size:10px;width:100%" >

<b>N°<span style="color:navy">'.$iCpt.'&nbsp;-&nbsp;</span></b>
<a href="'.$NomDocument[0].'" style=";color:#416BA1;" title="'.$Message[0].'"><b>'.$NomDocument[0].'</b></a>


</td>
</tr>
</table>';



$op_file = fopen("PageCarto/".$Fich[0].".htm","w+");


fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fwrite($op_file,"\n\n");
fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fwrite($op_file,"\n\n");
flose($op_file);
};
//echo'<script type="text/javascript">window.location.href="InterfaceDiscussion.html?discut='.$Fich[0].'&titre='.$Titre[0].'&objet='.$Objet[0].'&log='.$Qui[0].'&mail='.$Contact[0].'"</script>';

?>