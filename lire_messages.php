<?php

$page=$_REQUEST['page'];
if ($page=="") { echo "<br>erreur 'page'..."; exit; }
$db = mysql_connect('localhost', 'root', 'monaltercarto182');  // 1
mysql_select_db('plateforme_anact',$db);   
$sql = "SELECT * FROM `commentaires` WHERE `page` = '".$page."'";
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
$nb=mysql_num_rows($req);
if($nb<1){echo "pas de commentaires pour l'instant..."; exit;}
echo "<table style='width:300px'>";
while($data = mysql_fetch_assoc($req))
    {
$id=$data['id'];
$nom=$data['nom'];
$email=$data['email'];
$date=$data['date'];
$message=$data['message'];
echo "<tr><td span='texte'><font size='1'>De <a href='mailto:$email'>$nom</a></font></td><td span='texte'><font size='1'>le $date</font></td></tr>";
echo "<tr><td span='texte' colspan='2'>--> $message</td></tr>";
echo "<tr><td span='texte' colspan='2' align='center'>--</td></tr>";
    }
echo "</table>";
?>	  
