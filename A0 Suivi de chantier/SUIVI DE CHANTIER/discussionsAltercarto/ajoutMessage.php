<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
/*
$Qui=$_REQUEST['N'];//qui?
$Contact=$_REQUEST['C'];//contact
$Message=$_REQUEST['M'];//Message
$Fich=$_REQUEST['F'];//contact
$Titre=$_REQUEST['T'];//Titre discussion
$Objet=$_REQUEST['O'];//Objet discussion

*/

$Qui= urldecode( $_GET['util'] );//qui?
$Contact= urldecode( $_GET['contact'] );//contact
$Message= urldecode( $_GET['message'] );//Message
$Fich= urldecode( $_GET['discussion'] );//discussion
$Titre= urldecode( $_GET['titre'] );//Titre discussion
$Objet= urldecode( $_GET['objet'] );//Objet discussion

$Titre = stripslashes($Titre);
$Objet = stripslashes($Objet);

$haut='<html><head><meta http-equiv="Content-type" content="text/html; charset=utf-8"><meta http-equiv="Content-Script-Type" content="text/javascript"><meta http-equiv="expires" content="0"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="cache-control" content="no-cache, no-store, max-age=10, must-revalidate"><script language="javascript">function OKici(){var tapX=parent.location.href;var topX=tapX.indexOf("MODIFaide");if(topX>0){;parent.frames.changeaide.location.href="../ecrit_hypertext.html"}}</script></head><body onload="OKici()" style="font-family:arial; font-size:11px;background-color:white" onUnload="parent.rien()">';

$bas='</body></html>';



if($Message!=""){
$jour = array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");

$mois = array("","Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

$datefr = $jour[date("w" )]." ".date("d")." ".$mois[date("n")]." ".date("Y")." : ".date("H")." h ".date("i"); 

$contenu = file_get_contents($Fich."/".$Fich.".html"); 
$contenu=str_replace($haut,"",$contenu);
$contenu=str_replace($bas,"",$contenu);
$iCpt = substr_count ($contenu, 'id=\'qui\'')+1;




$Message=str_replace("**gt**","&gt;",$Message);
$Message=str_replace("**lt**","&lt;",$Message);
$Message=str_replace("&lt;br/&gt;","<br/>",$Message);
$Message = stripslashes($Message);
//echo '<script language="javascript">alert("xxxx '.$Message.'")</script>';
$m='<!-- //////////////////////////////////////////////////// Début N°'.$iCpt.' ///////////////////////////////////////////////// -->

<table style="width:100%;font-size:10px" >
<tr style="border:0.5px solid gray;background-color:#CECECE">
<td  style="text-align:left;color:gray;width:10%">
<b>N°<span style="color:navy">'.$iCpt.'</span></b>
</td>
<td id=\'qui\' style="text-align:left;color:gray;width:25%">
<b>'.$Qui.'</b>
</td>
<td id="contact">
<b><a style="color:#416BA1; " href="mailto:'.$Contact.'">Contacter '.$Qui.'<a></b>
</td>
<td>
'.$datefr.'
</td>
</tr></table>
<table style="width:100%;font-size:10px" >
<tr>
<td style="text-align:left;font-size:11px;width:100%">'.$Message.'</td>
</tr>
</table>
<!-- //////////////////////////////////////////////////// Fin ///////////////////////////////////////////////// -->';




$op_file = fopen($Fich."/".$Fich.".html","w+");


fwrite($op_file,$haut);
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fwrite($op_file,$contenu);
fwrite($op_file,$bas);
fclose($op_file);


//on réouvre et on enlèves les antislash
$file_to_write=$Fich."/".$Fich.".html";

$contenu2 = file_get_contents($file_to_write);
$contenu2 = stripslashes($contenu2);
//puis on réécrit
$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu2);
fclose($op_file2);


// envoi de mail confirmation inscription sur le forum avec coordonnées enregistrées

$subject='Nouveau message sur la discussion : '.utf8_decode($Titre) ;
$msgmail=utf8_decode('Bonjour,
Un nouveau message a été ajouté sur la discussion  : '.$Titre.'
sur PageCarto Anact 2011

CONTENU DU MESSAGE : 
'.str_replace("<br/>","\n",$Message).'

Message posté par '.$Qui.'(avatar)
_____________
belle journée!

(Envoi automatique par le serveur de Cité Publique)
');

//adresse de l'expéditeur : 
$headers = utf8_decode('From: Cité Publique <cite.publique@wanadoo.fr>');
$ad='v.mandinaud@anact.fr;cite.publique@wanadoo.fr';

//envoi du mail :
mail($ad, $subject, $msgmail, $headers);

//echo "<p>Mail envoyé!</p>";



echo'<script type="text/javascript">parent.recharge2()</script>';


};

//echo'<script type="text/javascript">parent.location.href="InterfaceDiscussion.html?discut='.$Fich.'&titre='.$Titre.'&objet='.$Objet.'&log='.$Qui.'&mail='.$Contact.'"</script>';

?>