

<?php
$Qui=$_REQUEST['N'];//qui?
$Contact=$_REQUEST['C'];//contact
$Message=$_REQUEST['M'];//Message
$Titre=$_REQUEST['T'];//contact


$haut='<html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"><script language="javascript">function OKici(){var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");if(topX>0){;parent.frames.changeaide.location.href="ecrit_hypertext.html"}}</script></head><body onload="OKici()" style="font-family:arial; font-size:11px;background-color:white" onUnload="parent.rien()">';

$haut2='<html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"><script language="javascript">function OKici(){var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");if(topX>0){;parent.frames.changeaide.location.href="../ecrit_hypertext.html"}}</script></head><body onload="OKici()" style="font-family:arial; font-size:11px;background-color:white" onUnload="parent.rien()">';


$bas='</body></html>';


if($Message[0]!=""){
$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

$datefr = $jour[date("w" )]." ".date("d")." ".$mois[date("n")]." ".date("Y")." : ".date("H")." h ".date("i"); 

$contenu = file_get_contents("listediscussions.html"); 
$contenu=str_replace($haut,"",$contenu);
$contenu=str_replace($bas,"",$contenu);
$iCpt = substr_count ($contenu, 'id=\'qui\'')+1;

$Fich="discussion-".$iCpt;

$Message[0]=str_replace("**gt**","&gt;",$Message[0]);
$Message[0]=str_replace("**lt**","&lt;",$Message[0]);

$Message2=str_replace(" "," ",$Message[0]);
$Message2=str_replace(" "," ",$Message2);

$Titre2=str_replace(" "," ",$Titre[0]);
$Titre2=str_replace(" "," ",$Titre2);


$Titre2=str_replace("'","x@x",$Titre2);
$Message2=str_replace("'","x@x",$Message2);

$Message2=$Message2.'<br/><small><i> (ouverte par @@@@1'.$Contact[0].'@@@@2'.$Qui[0].')@@@@3</i></small>';
$m='<!-- //////////////////////////////////////////////////// Début N°'.$iCpt.' ///////////////////////////////////////////////// -->
<table style="width:420px;font-size:10px" >
<tr style="border:0.5px solid gray;background-color:#CECECE">
<td  style="text-align:left;color:gray;width:10%">
<b>N°<span style="color:navy">'.$iCpt.'</span></b>
</td>
<td id=\'qui\' style="text-align:left;color:gray;width:25%">
<b>'.$Qui[0].'</b>
</td>
<td id="contact">
<!-- b><a style="color:#416BA1; " href="mailto:'.$Contact[0].'">'.$Contact[0].'<a></b-->
</td>
<td>
'.$datefr.'
</td>
</tr></table>
<table style="width:420px;font-size:10px" >
<tr>
<td style="text-align:left;font-size:11px;width:100%;"><b><a href="javascript:parent.location.href=\'InterfaceDiscussion.html?discut='.$Fich.'&titre='.$Titre2.'&objet='.$Message2.'\'" target="_self" style="color:#416BA1; " ><big>'.$Titre[0].'</big></a></b></td>
</tr>
</table>
<table style="width:420px;font-size:10px" >
<tr>
<td style="text-align:left;font-size:11px;width:100%">'.$Message[0].'</td>
</tr>
</table>
<!-- //////////////////////////////////////////////////// Fin ///////////////////////////////////////////////// -->';

$m = stripslashes($m);
// ajout de la nouvelle discussion à la liste des discussionsfwrite($op_file,$haut);
$op_file = fopen("listediscussions.html","w+");
fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fclose($op_file);

//on réouvre et on enlèves les antislash
$file_to_write="listediscussions.html";
$Titre2=str_replace("'","x@x",$Titre2);
$contenu2 = file_get_contents($file_to_write);
$contenu2 = stripslashes($contenu2);
//puis on réécrit
$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu2);
fclose($op_file2);





mkdir ($Fich);
// ajout liste de documents uploadés
$op_file = fopen($Fich."/ListeDocs.html","w+");


fwrite($op_file,$haut2);
fwrite($op_file,"\n\n");
//fwrite($op_file,$m);
//fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fclose($op_file);

// création du fichier vierge de la discussion

$op_file = fopen($Fich."/".$Fich.".html","w+");


fwrite($op_file,$haut2);
fwrite($op_file,"\n\n");
//fwrite($op_file,$m);
//fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fclose($op_file);


// ajout à la liste des discussions

$op_file = fopen("listeaide.js","a+");



fwrite($op_file,"\n\n");
fwrite($op_file,'liste[liste.length]="'.$Fich.'/'.$Fich.'"');
//fwrite($op_file,$m);
//fwrite($op_file,$contenu);

fclose($op_file);


};
echo'<script type="text/javascript">window.location.href="GestionDiscussion.html"</script>';

?>