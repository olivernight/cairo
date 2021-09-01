<?php
//on recupere les variables du formulaire :
$destinataire=$_REQUEST['destinataire'];
$subject=$_REQUEST['subject'];
$msg=$_REQUEST['msg'];

//adresse de l'expéditeur : 
$headers = 'From: Altercarto <altercarto@wanadoo.fr>'."\r\n";
$headers .= "\r\n";

//envoi du mail :
mail($to, $subject, $msg, $headers);

echo "<p>Mail envoyé!</p>";

?>