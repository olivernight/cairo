
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
function zip_and_telecharge(a,b,c){
window.frames.zip_and_download.location.href="zipper_repertoire_recursif.php?REPDEPART="+a+"&NOMZIP="+b+"&REPDESTINATION="+c		
}

var chem=window.location.href.replace("LISTE-CARTO-MEDIUM-SANS.php","")

var listerepvalide=new Array()
var listerepCollab=new Array()

var liencarte
var testCollab=0

function rien(){}

var liencarte2=""
function appelcarte(k,l){
liencarte2=""
liencarte='<b><big>Versions du module <span style="color:green">'+chem+mapX[k]+'</span></big>'
liencarte+='<ul><li>'
liencarte+='<a href="'+chem+mapX[k]+'/PageCartoDossier-SANS/Normal_SANS.html" target="_blank">Normale_SANS</a>'

liencarte+='</li>'


liencarte+='<br><br><span onclick="zip_and_telecharge(\''+mapX[k]+'/PageCartoDossier-SANS/\',\'PageCartoDossier-SANS-'+mapX[k]+'.zip\',\''+mapX[k]+'/\')" style="cursor:pointer; color:blue"><big>Télécharger PageCartoDossier-SANS-'+mapX[k]+'.zip</big></span><i>';





liencarte+='<br><br><i>'
liencarte+='<b>code intégration de l\'article dans une page du site : </b><br>'
liencarte+='<small><small>'
liencarte+='&lt;span onmouseout="document.getElementById(\'how\').innerHTML=\'\'"&gt;<br>'
liencarte+='&lt;img style="opacity:0.5; cursor : pointer" onmouseover="document.getElementById(\'how\').innerHTML=\'&lt;i&gt;Cliquez sur les aires géographiques pour afficher leur graphique.&lt;br&gt;Placez la flèche au dessus des aires ou des barres du graphique pour voir les valeurs&lt;/i&gt;\'" src="iconesfree/Question.png" width="15px"&gt;<br>'
liencarte+='&lt;/span&gt;<br>'
liencarte+='&lt;span id="how" style="color:brown;"&gt;&lt;/span&gt;<br>'

if(chem.indexOf("sc1")>0){
var laplateforme=chem.split("sc1/")[1];
liencarte2+='&lt;br&gt;&lt;center&gt;&lt;div&gt;&lt;iframe id="lafr" name="lafr" style="border: 0px none ; width: 846px; height: 670px; background-color: white;" src="../sc1/'+laplateforme+mapX[k]+'/PageCartoDossier-SANS/Normal_SANS.html" scrolling="no" frameborder="0" &gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/center&gt;<br>' 
}else{
var laplateforme=chem;
liencarte2+='&lt;br&gt;&lt;center&gt;&lt;div&gt;&lt;iframe id="lafr" name="lafr" style="border: 0px none ; width: 846px; height: 670px; background-color: white;" src="'+laplateforme+mapX[k]+'/PageCartoDossier-SANS/Normal_SANS.html" scrolling="no" frameborder="0" &gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/center&gt;<br>' 
}

liencarte+=liencarte2
liencarte+='&lt;br&gt;'
liencarte+='<br></small></small>'
liencarte+='</i>'

testCollab=0
setTimeout('appelcarte2('+k+','+l+')',250)
if(parent.location.href.indexOf("ecrit")>=0){
	liencarte2=liencarte2.replace(/&lt;/g,"<").replace(/&gt;/g,">")
	parent.wysiwyg.execCommand('insertHTML',liencarte2)
	}
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
				
				var nt1=document.createTextNode("choisissez un PageCarto (-SANS)")
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
document.write('<span style="display:none"><iframe style="display:none" name="testPageCarto'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier-SANS/PageCarto/entete.js?updated='+Math.random()+'"></iframe><br></span>')
document.write('<span style="display:none"><iframe style="display:none" name="testCollab'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier-SANS/listeaide.js?updated='+Math.random()+'"></iframe><br></span>')
}


</script>
<script language='javascript' >


setTimeout('affichemenu()',5000)


</script>
<iframe id="zip_and_download" name="zip_and_download" style="display:none"></iframe>
</body></html>