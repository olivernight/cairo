

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Module MAJ</title>
<script language="javascript">
var liensSites=new Array()
var listpubcartovision=new Array()
var rangliste=new Array()
</script>

<script language="javascript">

var k=0
var initpop=0

function popupX(page,var1,var2) {
initpop=1
document.open(page,var1,var2)
pop=document.open(page,var1,var2)
}

function popupfichMAJ(a){
if(initpop==1){
pop.close()
}
popupX('../popupMAJ.html#_'+a,'fiche MAJ','width=450,height=500,top=150px,left=650px,toolbar=0,menuBar=1,scrollbars=1,resizable=1')
window.blur()
}







var N=0

function toutselect(){
for (n=0;n<N;n++){
document.getElementById('N['+n+']').checked=true
document.getElementById('N['+n+']').value=document.getElementById('N['+n+']').parentNode.id
//alert(document.getElementById('N['+n+']').parentNode.id)
}
}
function rienselect(){
for (n=0;n<N;n++){
document.getElementById('N['+n+']').checked=false
document.getElementById('N['+n+']').value=""
}
}
function checkit(a){

if(a.checked==false){a.value=""}else{a.value=a.parentNode.id}
}
</script>


</head>



<body>

<center><table cellspacing=0 cellpadding=0 border=0><tr><td style="font-family:arial; font-size:12px"><br><img src="../bandeau.jpg"><br><a href="http://ns34984.ovh.net/gaiamundi-dev/" target="_blank" style="color:black;opacity:0.8" >Accueil du site</a> > <a href="javascript:document.location.reload()"  style="color:black;opacity:0.8" >Téléchargement des mises à jour</a></td></tr><tr><td>
<?php
global $X;
global $filter;
global $contents;
$contents2=array();
include('lister_simplement.class.php');
include('dirMAJ.php');
?>
<form name="maj" method='post' action='MAJ.php'>


<span style="color:#008080;font-family:arial" ><big><b>GaïaMundi<br>Interface de Mise à Jour des fichiers d'application</b></big><br><br>
<span style="color:gray;font-family:arial" ><b>liste des MAJ téléchargeables (datées) </b></span><br>
</span>
<table cellspacing=0 cellpadding=0 border=0><tr><td style="vertical-align: top;width:265px">
<span style="position:relative;left:70px" id="debut"></span>
</td><td>
<?php
$X=0;
$REP="";
$contents1=listingFolder($REP);
$X=listedir ($contents1,$X,$REP);
?>
<script language="javascript">
var list1dir=listedir
document.getElementById("debut").innerHTML=ecritfile+ecrit;
</script>
</form>

<script language="javascript">
// mettre les images ? dans les balises <img

for(i=0;i<k;i++){
document.getElementById("im"+i).src="help.png"

}
//toutselect()

</script>
<div
 style="font-family: arial; width: 500px; font-size: 11px; background-color: rgb(233, 226, 244);">
<div style="text-align: center; background-color: yellow;"><span
 style="font-family: Arial;"><b><big><span
 style="color: red;">NB. Après chaque opération, videz le
cache de firefox puis actualisez vos pages ou , de manière plus
pratique, mettez la mémoire cache de firefox à zero lorsque vous faites
des opérations de maintenance ou d'écriture sur votre version de
GaïaMundi</span></big></b></span><br>
<span style="font-family: Arial;"></span></div>
<span style="font-family: Arial;"><b><big><br>
Comment exécuter
les mises à jour?</big></b></span><br
 style="font-family: Arial;">
<small><span
 style="color: red; font-weight: bold; font-family: Arial;"></span></small><br
 style="font-family: Arial;">
<span style="font-family: Arial; font-weight: bold;">1 -
repérer la date de validité de votre version : </span><br
 style="font-family: Arial;">
<span style="font-family: Arial;">rendez vous dans le
répertoire pricipal de votre version de GaïaMundi (Attlas,
TerraUrbana,ALADIN,....) et consultez le tableau de suivi des mises à
jour de votre version. Il indique
la date de la dernière mise à Jour opérée.</span> <span
 style="font-style: italic;">(</span><span
 style="font-style: italic;">cliquez sur l'onglet système de
GaïaMundi et sélectionnez Mises à jour. </span><span
 style="font-style: italic;">Si vous&nbsp;n'avez pas de
tableau de suivi, vous devez procéder à la mise à jour </span><small><b>A0-ModuleMAJ-</b></small><span
 style="font-style: italic;"><small><span
 style="color: rgb(204, 0, 0); font-weight: bold;">2009-2-11</span></small>
et toutes les suivantes )</span><br style="font-family: Arial;">
<small><span
 style="color: red; font-weight: bold; font-family: Arial;">ATTENTION
</span><br
 style="color: red; font-weight: bold; font-family: Arial;">
<span style="color: red; font-weight: bold; font-family: Arial;">Si
vous avez du retard dans les mises à jour&nbsp;, exécutez toutes
les mises à jour dans l'ordre de date pour rattraper le retard depuis
la dernière date indiquée sur le tableau de suivi de votre version.</span></small><br
 style="font-family: Arial;">
<span style="font-family: Arial;"><span
 style="font-weight: bold;"><br>
2 - </span></span><span style="font-family: Arial;"><span
 style="font-weight: bold;">r</span></span><span
 style="font-family: Arial;"><span
 style="font-weight: bold;">epérer les&nbsp;mises à
jour nécessaires</span> à la mise à niveau de votre version.<br>
repérez dans la liste ci-jointe le module de mise à jour à la première
date suivant celle indiquée dans le tableau de suivi des mises à jour
de votre version</span>.<small><span
 style="color: red; font-weight: bold; font-family: Arial;"><br>
<br style="font-family: Arial;">
</span></small><span
 style="font-family: Arial; font-weight: bold;">3 -
téléchargez le module à la date adéquate.</span><br
 style="font-family: Arial;">
<span style="font-family: Arial;">(pour cela, cliquez sur
la version désirée dans la liste ci-à-gauche).</span> <br>
<br style="font-family: Arial;">
<span style="font-family: Arial;"><span
 style="font-weight: bold;">4 - installez le module de mise à
jour:</span><br>
</span>
<div style="margin-left: 40px;">
<ul>
  <li><span style="font-family: Arial;">&nbsp;décompressez
("dézippez") le module sur votre ordinateur </span><span
 style="color: red; font-weight: bold; font-style: italic;">(ATTENTION
: dézipper sans créer de répertoire supplémentaire!)</span></li>
  <li><span style="font-family: Arial;">&nbsp;placez
le dossier décompressé dans le répertoire principal de votre
version de GaïaMundi</span>&nbsp;<span
 style="font-family: Arial;"> sur votre serveur</span></li>
  <li><span style="font-family: Arial;">Autorisez
les droits&nbsp; d'écriture, de lecture et d'exécution sur le
répertoire de mise à jour que vous venez de coller ainsi que dans
l'ensemble de ses ficfhiers et&nbsp; sous répertoires.</span></li>
</ul>
</div>
<br style="font-family: Arial;">
<span style="font-family: Arial; font-weight: bold;">5 -
exécuter la mise à jour : </span><br>
<big><big><span
 style="font-weight: bold; font-family: Arial; color: rgb(51, 153, 153);"></span></big></big><br>
<big><big><span
 style="font-weight: bold; font-family: Arial; color: rgb(51, 153, 153);">CAS
général<br>
<small><small>(en cas essayez la solution proposée en bas
de page)</small></small><br>
<br>
</span></big></big>Une fois que vous avez placé le
dossier dézippé de la mise à jour dans le répertoire principal de votre
version et que vous avez attribué les droits d'écriture, de lecture et
d'exécution (Cf c-dessus)<br>
redemarrez votre version &nbsp;: <span style="color: red;">onglet
système -&gt; <span style="color: black;">choix </span>redémarrer()</span><br>
puis sélectionnez <span style="color: red;">&nbsp;:
onglet système -&gt; <span style="color: black;">choix</span>
Mise à jour<br>
<span style="color: black;">dans la pane de droite vous
trouvez une page du type suivant : <br>
<div style="text-align: center;"><img alt=""
 src="ChoixMaj.jpg" border="1"><br>
<br style="font-family: Arial;">
</div>
cliquez sur le bouton actualisez et/ou revenir à la liste<br>
dans la partie </span></span><small><span
 style="font-family: arial;"><big><span
 style="color: rgb(51, 153, 153);">Mises à Jour prètes à
l'exécution</span> vous avez la liste des mises à jour présentes
sur votre version et non encore exécutées<br>
Pour exécuter une mise à jour cliquez sur l'élément crrespondant dans
cette liste<b><br>
</b></big></span></small><span
 style="font-family: Arial;">Vous trouvez alors une
page du
type suivant:</span><br style="font-family: Arial;">
<div style="text-align: center;"><img alt=""
 src="MAJ.jpg" border="1"><br>
<br style="font-family: Arial;">
</div>
<small><big><span style="font-family: Arial;">Tous
les
fichiers qui font l'objet de la mise à jour dans ce module sont en
bleu&nbsp; et cochés par défaut. Ne pas décocher sauf pour les
développeurs
avertis dans le cas où ils souhaiteraient conserver leur propre version.</span><br
 style="font-family: Arial;">
</big></small><small><span
 style="color: red; font-weight: bold; font-family: Arial;"><br>
Vérifiez que le répertoire principal de votre version de GaïaMundi ,
ainsi que l'ensemble de ses fichiers et sous répertoires ont les droits
d'écriture, de lecture et d'éxcéution&nbsp; pour tout le monde
(droits étendus) . Si ce n'est pas le cas, attribuez ces droits avant
d'exécuter la mise à jour. (chmod 0777 avec récursivité sous Linux)</span></small>&nbsp;<br>
<br>
<br style="font-family: Arial;">
<small><big><span style="font-family: Arial;">Cliquez
sur le bouton
"<span style="font-weight: bold;">exécuter la mise à jour</span>".</span><br
 style="font-family: Arial;">
<span style="font-family: Arial;">Le tableau de suivi des
mises à jour sera actualisé.<br>
</span></big></small>si vous redemarrez votre version
&nbsp;: <span style="color: red;">onglet
système -&gt; <span style="color: black;">choix </span>redémarrer()</span><br>
puis sélectionnez <span style="color: red;">&nbsp;:
onglet système -&gt; <span style="color: black;">choix</span>
Mise à jour</span>, et cliquez sur le bouton actualisez et/ou
revenir à la liste, <br>
Vous ne devez plus voire la mise à jour éxécutées dans la liste du bas.
En revanche, elle doit être dans la liste des mises à jour exécutées<br>
<small><span
 style="color: red; font-weight: bold; font-family: Arial;">Une
fois exécutée la mise à jour, attribuez de nouveau les droits étendus à
l'ensemble des répertoires et fichiers à l'ensemble de votre versiond e
GaïaMundi.</span></small><br>
<hr style="width: 100%; height: 2px;"><span
 style="font-weight: bold; font-family: Arial;">Infos
administrateurs et développeurs.</span><br
 style="font-family: Arial;">
<span style="font-family: Arial;">Prenez connaissance du <a
 style="font-weight: bold;" href="index.php?theme=GaiaMundi"
 target="_blank">dispositif de mise à jour</a> et du
contenu détaillé des modifications opérées dans chaque module de mise à
jour.</span><br>
<br>
<hr style="width: 100%; height: 2px;"><br>
<hr style="width: 100%; height: 2px;"><br>
<hr style="width: 100%; height: 2px;"><span
 style="font-weight: bold; font-family: Arial;"></span><br>
<small><big><span style="font-family: Arial;"></span></big>&nbsp;</small><big><big><span
 style="font-weight: bold; font-family: Arial; color: rgb(51, 153, 153);">Solution
de mise à jour manuelle<br>
</span></big></big>
<br>
<span style="font-family: Arial;"><big><big><span
 style="font-weight: bold;">Cf Point 5 ci-dessus : excéutez
la mise à jour</span></big></big><br>
Pour ouvrir le module
vous devez indiquer l'adresse suivante dans la bare d'adresse de
firefox: </span><br style="font-family: Arial;">
<span style="font-family: Arial; font-weight: bold;">http:/<span
 style="color: red;"><span style="color: black;">/</span><span
 style="color: rgb(51, 102, 102);">Chemin
serveur</span><span style="color: rgb(51, 51, 153);">/Repertoire
principal</span>/</span><span
 style="color: rgb(102, 0, 0);"><span style="color: red;">dossierMise
à jour</span>/lister/ModuleMAJ.php</span></span><br>
<br>
Exemple sur un&nbsp; serveur local :
http://localhost/altercarto/ALADIN/A0-ModuleMAJ-2009-2-11/lister/ModuleMAJ.php<br
 style="font-family: Arial;">
<div style="margin-left: 40px;">
<ul>
  <li><small><span
 style="color: rgb(51, 102, 102); font-weight: bold;">Chemin
serveur</span> indique l'adresse de votre serveur et le chemin du
répertoire principal de GaïaMundi à partir du répertoire wwww (dans
l'exemple <small>: </small>
http://localhost/altercarto/).&nbsp;<span
 style="font-style: italic;"></span></small></li>
  <li><small><span
 style="font-weight: bold; color: rgb(0, 0, 153);">répertoire
principa</span>l est le répertoire de votre version de GaäMundi
(dans l'exemple : ALADIN/)</small><small><span
 style="font-style: italic;"></span></small></li>
</ul>
<div style="margin-left: 40px;"><small><span
 style="font-style: italic;">NB.Vous pouvez identifier le
chemin serveur et le répertoire principal dans la barre d'adesse de
Firefox lorsque votre version de GaïaMundi est chargée.</span></small></div>
<ul>
  <li><small><span style="color: red; font-weight: bold;">Dossier
Mise
à jour</span> est le dossier du&nbsp; type <span
 style="position: absolute; left: 300px; top: 100px;" id="debut"><span
 style="position: relative; left: -50px; font-family: arial; font-size: 12px; color: blue; opacity: 0.7;"></span></span><b>A0-ModuleMAJ-année-mois-jour</b>
que vous avez décompressé</small> <small>(dans l'exemple :
A0-ModuleMAJ-2009-2-11/)</small></li>
</ul>
</div>
<span style="font-family: Arial;">Vous trouvez alors une
page du
type suivant:</span><br style="font-family: Arial;">
<div style="text-align: center;"><img alt=""
 src="MAJ.jpg" border="1"><br>
<br style="font-family: Arial;">
</div>
<small><big><span style="font-family: Arial;">Tous
les
fichiers qui font l'objet de la mise à jour dans ce module sont en
bleu&nbsp; et cochés par défaut. Ne pas décocher sauf pour les
développeurs
avertis dans le cas où ils souhaiteraient conserver leur propre version.</span><br
 style="font-family: Arial;">
</big></small><small><span
 style="color: red; font-weight: bold; font-family: Arial;"><br>
Vérifiez que le répertoire principal de votre version de GaïaMundi ,
ainsi que l'ensemble de ses fichiers et sous répertoires ont les droits
d'écriture, de lecture et d'éxcéution&nbsp; pour tout le monde
(droits étendus) . Si ce n'est pas le cas, attribuez ces droits avant
d'exécuter la mise à jour. (chmod 0777 avec récursivité sous Linux)</span></small>&nbsp;<br>
<br>
<br style="font-family: Arial;">
<small><big><span style="font-family: Arial;">Cliquez
sur le bouton
"<span style="font-weight: bold;">exécuter la mise à jour</span>".</span><br
 style="font-family: Arial;">
<span style="font-family: Arial;">Le tableau de suivi des
mises à jour sera actualisé.<br>
<br>
</span></big></small><small><span
 style="color: red; font-weight: bold; font-family: Arial;">Une
fois exécutée la mise à jour, attribuez de nouveau les droits étendus à
l'ensemble des répertoires et fichiers à l'ensemble de votre versiond e
GaïaMundi.</span></small><br>
<br style="font-family: Arial;">
<small><br>
<span style="color: red; font-weight: bold; font-family: Arial;">
</span></small></div>








</div>
</td></tr></table>
</td></tr><tr><td style="font-family:arial;color:gray;font-size:11px;text-align:center">GaïaMundi - H.Paris/Altercarto/Cité Publique [2006-229] GNU GPL</td></tr></table></center>


</body></html>