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

// envoi de mail confirmation inscription sur le forum avec coordonn�es enregistr�es

$subject='Votre inscription dans les forums de discussion du projet PageCarto Anact 2011';
$msgmail='Bonjour,
Merci de votre participation aux discussions sur PageCarto Anact 2011

Conservez pr�cieusement vos coordonn�es : 
login : '.$util.'
Mot de passe : '.$mp.'
adresse mail : '.$ad.'

Bien � vous

cite.publique@wanadoo.fr
';

//adresse de l'exp�diteur : 
$headers = 'From: Cit� Publique <cite.publique@wanadoo.fr>';


//envoi du mail :
mail($ad, $subject, $msgmail, $headers);

//echo "<p>Mail envoy�!</p>";






}
?>