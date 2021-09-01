<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
include("entetes.php");

$Qui= urldecode( $_GET['util'] );//qui?
$Contact= urldecode( $_GET['contact'] );//contact
$Message= urldecode( $_GET['message'] );//Message
$Fich= urldecode( $_GET['discussion'] );//discussion

$Objet= urldecode( $_GET['objet'] );//Objet discussion

//$Titre = stripslashes($Titre);
$Objet = stripslashes($Objet);



if($Message!=""){
$jour = array("Di","Lu","Ma","Me","Je","Ve","Sa");

$mois = array("","Jan","Fév","Mar","Av","Mai","Juin","Juil","Août","Sept","Oct","Nov","Déc");

$datefr = $jour[date("w" )]." ".date("d")." ".$mois[date("n")]." ".date("Y")." : ".date("H")." h ".date("i"); 

$contenu = file_get_contents("PageCarto/".$Fich.".htm"); 

$contenu=str_replace($haut,"",$contenu);
$contenu=str_replace($hautancien,"",$contenu);
$contenu=str_replace($bas,"",$contenu);
$contenu=str_replace($basancien,"",$contenu);
$iCpt = substr_count ($contenu, 'id=\'qui\'')+1;




$Message=str_replace("**gt**","&gt;",$Message);
$Message=str_replace("**lt**","&lt;",$Message);
$Message=str_replace("&lt;br/&gt;","<br/>",$Message);
$Message = stripslashes($Message);
//echo '<script language="javascript">alert("xxxx '.$Message.'")</script>';

$m='<!-- //////////////////////////////////////////////////// Début N°'.$iCpt.' ///////////////////////////////////////////////// -->

<table style="width:100%;font-size:10px" >
<tr style="border:0.5px solid gray;background-color:#CECECE">
<td  style="text-align:left;color:gray;width:35px">
<b>N°<span style="color:navy"> '.$iCpt.' </span></b>
</td>
<td id=\'qui\' style="text-align:left;color:gray;">
<b> '.$Qui.' </b>
</td>
<td id="contact" style="display:none">
<b><a style="color:#416BA1; " href="mailto:'.$Contact.'">Contacter '.$Qui.'<a></b>
</td>
<td style="text-align:left;color:gray;">
<small><small> '.$datefr.' </small></small>
</td>
</tr></table>

<dt style="text-align:left;font-size:11px;width:100%">'.$Message.'</td>

<!-- //////////////////////////////////////////////////// Fin ///////////////////////////////////////////////// -->';




$op_file = fopen("PageCarto/".$Fich.".htm","w+");


fwrite($op_file,$haut);

fwrite($op_file,$contenu);

fwrite($op_file,"&nbsp;&nbsp;&nbsp;   ".$m);
fwrite($op_file,"\n\n");
fwrite($op_file,"&nbsp;&nbsp;&nbsp;   ".$bas);
fclose($op_file);


//on réouvre et on enlèves les antislash
$file_to_write="PageCarto/".$Fich.".htm";

$contenu2 = file_get_contents($file_to_write);
$contenu2 = stripslashes($contenu2);
//puis on réécrit
$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu2);
fclose($op_file2);

/*

	// envoi de mail confirmation inscription sur le forum avec coordonnées enregistrées
	
	$Titre= "Titre du PageCarto Collaboratif";
	
	//adresse de l'expéditeur : 
	$headers = utf8_decode('From: Cité Publique <cite.publique@wanadoo.fr>');
	
	// liste des destinataires
	$ad='altercarto@wanadoo.fr;cite.publique@wanadoo.fr';
			
	$subject='Nouveau message sur  : '.utf8_decode($Titre) ;
	$msgmail=utf8_decode('Bonjour,
	Un nouveau message a été ajouté sur la discussion  : '.$Titre.'
	
	CONTENU DU MESSAGE : 
	'.str_replace("<br/>","\n",$Message).'

	Message posté par '.$Qui.' (avatar)
	_____________
	belle journée!

	(Envoi automatique)
	');

	//envoi du mail :
	mail($ad, $subject, $msgmail, $headers);

	//echo "<p>Mail envoyé!</p>";

*/

echo'<script type="text/javascript">parent.recharge2()</script>';


};



?>