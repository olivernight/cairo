
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr-fr">
<head>
<?php
	$alea=mt_rand();
echo "<script language='javascript' src='REP.js?updated=".$alea."'></script>

<script language='javascript' src='mapsILIADE.js?updated=".$alea."'></script>";
?>
  
  <title>Liste PageCartos</title>
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">

  
  <meta http-equiv="Content-Script-Type" content="text/javascript">
<script language='javascript' >
var listerepvalide=new Array()
var listerepCollab=new Array()

var liencarte
var testCollab=0
var liencarte2=""

function rien(){}

var chem=window.location.href.replace("LISTE-CARTOARTICLES.php","")

function zip_and_telecharge(a,b,c){
window.frames.zip_and_download.location.href="zipper_repertoire_recursif.php?REPDEPART="+a+"&NOMZIP="+b+"&REPDESTINATION="+c		
}


function test_existe_Zip(a){
window.frames.zip_and_download.location.href="test_exist_zipdePageCartoDossierBLANC.php?NOM="+a+"" ;		
}

function appelcarte(k,l){
	chem=window.location.href.replace("LISTE-CARTOARTICLES.php","")
liencarte2=""
liencarte='<b><big>Versions du module <span style="color:green">'+chem+mapX[k]+'</span></big>'
liencarte+='<ul><li>'
liencarte+='<a href="'+chem+mapX[k]+'/PageCartoDossier-BLANC/Normal-BLANC.html" target="_blank">Normale-BLANC</a>'
liencarte+='</li>'
liencarte+='<br><br>'
liencarte+='<ul><li>Ajustement de la carte dans l\'article : <br>"<a style="font-weight: bold; color: rgb(51, 102, 255);" href="'+chem+mapX[k]+'/PageCartoDossier-BLANC/Normal-BLANC-ajustMap.html" target="_blank">Module de réglage </a>"</li></ul>'



liencarte+='<br><br><span id="testtel" onclick="window.open(\''+mapX[k]+'/PageCartoDossier-BLANC-'+mapX[k]+'.zip\')" style="display:none;cursor:pointer; color:blue">Télécharger PageCartoDossier-BLANC-'+mapX[k]+'.zip </span><span id="endate"></span>';


liencarte+='<br><br><span onclick="zip_and_telecharge(\''+mapX[k]+'/PageCartoDossier-BLANC/\',\'PageCartoDossier-BLANC-'+mapX[k]+'.zip\',\''+mapX[k]+'/\')" style="cursor:pointer; color:blue"><big>Télécharger PageCartoDossier-BLANC-'+mapX[k]+'.zip</big></span><i>';





liencarte+='<br><br><b>code intégration de l\'article dans une page du site : </b><br><i>'
liencarte+='<small><small>'
liencarte+='&lt;span onmouseout="document.getElementById(\'how\').innerHTML=\'\'"&gt;<br>'
liencarte+='&lt;img style="opacity:0.5; cursor : pointer" onmouseover="document.getElementById(\'how\').innerHTML=\'&lt;i&gt;Cliquez sur les aires géographiques pour afficher leur graphique.&lt;br&gt;Placez la flèche au dessus des aires ou des barres du graphique pour voir les valeurs&lt;/i&gt;\'" src="iconesfree/Question.png" width="15px"&gt;<br>'
liencarte+='&lt;/span&gt;<br>'
liencarte+='&lt;span id="how" style="color:brown;"&gt;&lt;/span&gt;<br>'

liencarte2+="</i>";



if(chem.indexOf("sc1")>0){
var laplateforme=chem.split("sc1/")[1];
liencarte2+='&lt;br&gt; &lt;iframe id="fra" name="fra" src="../sc1/'+laplateforme+mapX[k]+'/PageCartoDossier-BLANC/Normal-BLANC.html?posgraph=" scrolling="no" width="100%" height="922px"&gt;&lt;/iframe&gt;<br>' 
}else{
var laplateforme=chem0;
liencarte2+='&lt;br&gt; &lt;iframe id="fra" name="fra" src="'+laplateforme+mapX[k]+'/PageCartoDossier-BLANC/Normal-BLANC.html?posgraph=" scrolling="no" width="100%" height="922px"&gt;&lt;/iframe&gt;<br>' 

}


var liencarte3=""
liencarte3+="<br><br></i>Code insertion dans une page d'un autre site<br><br><i>"
chem=window.location.href.replace('LISTE-CARTOARTICLES.php','');//chem.split("sc1/")[1]

var chem0=chem
chem=chem+mapX[k]+"/PageCartoDossier-BLANC/Normal-BLANC.html"

//var lienla=window.location.href.split("sc1")[0]+"sc1/insertPCinPage.html?carte="+chem+mapX[k]

liencarte3+='&lt;b&gt;Carte : '+mapX[k]+'&lt;/b&gt;&lt;br&gt;&lt;div style="position:relative;left:-10px"&gt;&lt;iframe style="border-width: 0px; border-style: none; width: 866px; height: 695px; background-color: white;" scrolling="yes" frameborder="0" src="'+chem+'"&gt;&lt;/iframe&gt;&lt;/div&gt;';

liencarte+=liencarte2
liencarte+=liencarte3
liencarte+='&lt;br&gt;<br>'
liencarte+='</small></small>'
liencarte+='</i>'

testCollab=0
setTimeout('appelcarte2('+k+','+l+')',250)
if(parent.location.href.indexOf("ecrit")>=0){
	liencarte2=liencarte2.replace(/&lt;/g,"<").replace(/&gt;/g,">")
	parent.wysiwyg.execCommand('insertHTML',liencarte2)}
}


function appelcarte2(k,l){
if(listerepCollab[(l-1)]!="vide"){testCollab=1}else{;}
if(testCollab==1){
liencarte+='</li><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier-BLANC/version-pour-fouiller-COLLAB.html" target="_blank">Pour fouiller en Collaboratif</a>'

		liencarte+='<ul>'
		liencarte+='<li>'
		liencarte+='<a href="'+mapX[k]+'/Moderation.htm" target="_blank">Modération du PageCarto Collaboratif</a>'
		liencarte+='</li>'
		liencarte+='</ul>'


liencarte+='</li>'
}
liencarte+='</ul></b>'
document.getElementById('liens').innerHTML=liencarte
test_existe_Zip(mapX[k])
}

function changecarte(){
var carte = document.menucarte.selectcarte.selectedIndex;
if(carte>0){
appelcarte(document.getElementById("o"+carte).value,carte)
}

}


function affichemenu(){

for(i=0;i<mapX.length;i=i+5){
if(window.frames[(i/5)*2].recuptitrepage("return titrepage")!=""){
listerepvalide[listerepvalide.length]=(i+4)
listerepCollab[listerepCollab.length]=window.frames[(i/5)*2+1].recupliste("return titrepage")[0]
}

}
				var nouveaux0=document.createElement("option")
				
				nouveaux0.setAttribute("id","option0")
				
				var nt1=document.createTextNode("choisissez un Article Carto")
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcarte").appendChild(nouveaux0)
for(i=0;i<listerepvalide.length;i=i+1){
				var nouveaux0=document.createElement("option")
				
				nouveaux0.setAttribute("id","o"+(i+1))
				nouveaux0.setAttribute("value",listerepvalide[i])
				var nt1=document.createTextNode((i+1)+'-'+mapX[listerepvalide[i]-1])
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcarte").appendChild(nouveaux0)
}

document.getElementById('liens').innerHTML=""
}

</script>

</head>


<body style="font-family:arial;font-size:11px">
<form name="menucarte"><select name="selectcarte" id="selectcarte" onchange="changecarte()"></select></form>
<br><br><span id="liens"><big><big><b style="color:gray">Recherche en Cours</b></big></big></span>

<script language='javascript' >


for(i=0;i<mapX.length;i=i+5){
document.write('<span style="display:none"><iframe style="display:none" name="testPageCarto'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier-BLANC/PageCarto/entete.js?updated='+Math.random()+'"></iframe><br></span>')
document.write('<span style="display:none"><iframe style="display:none" name="testCollab'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier-BLANC/listeaide.js?updated='+Math.random()+'"></iframe><br></span>')
}


</script>
<script language='javascript' >


setTimeout('affichemenu()',5000)


</script>
<iframe id="zip_and_download" name="zip_and_download" style="display:none"></iframe>
</body></html>