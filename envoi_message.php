<?php

// On va faire un texte propre (evite erreur ')
$nom=$_REQUEST['nom'];
$email=$_REQUEST['email'];
$page=$_REQUEST['page'];
$message=$_REQUEST['message'];

if ($nom=="") { echo "<br>Pas de nom?"; exit; }
if ($email=="") { echo "<br>Pas d'email?"; exit; }
if ($page=="") { echo "<br>erreur 'page'..."; exit; }
if ($message=="") { echo "<br>Pas de message?"; exit; }

$message_protect=htmlentities($message);
$time=time();
$date_heure=date('Y-m-d H:i:s',$time);

$db = mysql_connect('localhost', 'root', 'monaltercarto182');  // 1
mysql_select_db('plateforme_anact',$db);   

//on ajoute le msg dans la base
$sql = "INSERT INTO `commentaires` (`id`, `page`, `nom`, `email`, `message`, `date`) VALUES ('', '$page', '$nom', '$email', '$message_protect', '$date_heure');";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

//on envoie le mail
$entetes ='From: "Plateforme Anact"<no-reply@cartoanact.fr>'."\n";
$sujet="Nouveau commentaire";
$messagemail = "Bonjour,\n
Il y a un nouveau commentaire\n
Rendez vous sur la page '$page' pour le lire. (http://altko.org/cartoanact/AUTOparadisioboules%20-%20reduit+Iliade2/$page) \n
A bientot\n
PS : ceci est un message automatique, inutile d'y repondre.";
    mail('altercarto@wanadoo.fr',  $sujet,  $messagemail, $entetes); 
 
 
 echo "<br><b>Merci pour votre commentaire.</b>";
?>	  
