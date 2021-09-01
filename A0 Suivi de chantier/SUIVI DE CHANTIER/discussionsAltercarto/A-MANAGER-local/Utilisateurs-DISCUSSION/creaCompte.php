<?php
$util = urldecode( $_GET['util'] );
$mp = urldecode( $_GET['mp'] );
$ad = urldecode( $_GET['ad'] );

if($util!=""){// anti robots
$rep="";
//mkdir ($rep);
$fichier="listeUtil.js";


//echo '<script type="text/javascript" >alert("'.$rep.'")</script>';
//echo '<script type="text/javascript" >alert("'.$fichier.'")</script>';
$op_file=fopen($fichier,"a+");

$ligneUtil="\nlistUtil[listUtil.length]=new Array('".$util."','".$mp."','".$ad."');\n";

fwrite($op_file,$ligneUtil);


fclose($op_file);

// envoi de mail confirmation inscription sur le forum avec coordonnées enregistrées

$subject='Votre inscription dans les forums de discussion du projet PageCarto Anact 2011';
$msgmail='Bonjour,
Merci de votre participation aux discussions sur PageCarto Anact 2011

Conservez précieusement vos coordonnées : 
login : '.$util.'
Mot de passe : '.$mp.'
adresse mail : '.$ad.'

Bien à vous

cite.publique@wanadoo.fr
';

//adresse de l'expéditeur : 
$headers = 'From: Cité Publique <cite.publique@wanadoo.fr>';


//envoi du mail :
mail($ad, $subject, $msgmail, $headers);

//echo "<p>Mail envoyé!</p>";






}
?>