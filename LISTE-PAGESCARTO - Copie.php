
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
var chem=window.location.href.replace("LISTE-PAGESCARTO.php","")

function zip_and_telecharge(a,b,c){
	
window.frames.zip_and_download.location.href="zipper_repertoire_recursif.php?REPDEPART="+a+"&NOMZIP="+b+"&REPDESTINATION="+c		
}



function appelcarte(k,l){
	chem=window.location.href.replace("LISTE-PAGESCARTO.php","")
	
	liencarte2=""
liencarte='<b><big>Versions du module <span style="color:green">'+mapX[k]+'</span></big>'
liencarte+='<ul><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/Normal.html" target="_blank">Normale</a>'
liencarte+='</li><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/version-pour-fouiller.html" target="_blank">Pour fouiller</a>'
liencarte+='</li><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/REDUIT.html" target="_blank">Réduite</a>'
liencarte+='</li><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/GRAND pour Firefox.html" target="_blank">Grande</a> (pour Firefox ou W3C standard)'
liencarte+='</li><li>'
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/indexVoirCarte.html" target="_blank">Page Voir Carte</a> (new design)'


//liencarte+="<br><br><span onclick='zip_and_telecharge(\'"+chem+mapX[k]+"/PageCartoDossier/\',\'PageCartoDossier.zip\',\'"+chem+mapX[k]+"/\')' style='cursor:pointer; color:blue'>télécharger (zip)</span><br><br><i>"

liencarte+='<br><br><span onclick="zip_and_telecharge(\''+mapX[k]+'/PageCartoDossier/\',\'PageCartoDossier-'+mapX[k]+'.zip\',\''+mapX[k]+'/\')" style="cursor:pointer; color:blue"><big>Télécharger PageCartoDossier-'+mapX[k]+'.zip</big></span><i>';



liencarte+="<br><br>Code insertion dans page du site<br><br><i>"
if(chem.indexOf("sc1")>=0){chem="../sc1/"+chem.split("sc1/")[1]}
liencarte2+='&lt;a name="cadrecarte"&gt;&lt;/a&gt;&lt;b&gt;&lt;span&gt;Carte : &lt;/span&gt;&lt;span id="titrecarte-pc1"&gt;'+mapX[k]+'&lt;/span&gt;&lt;/b&gt;&lt;br&gt;&lt;div id="divref" style="width:600px;height:630px;border:1px solid gray"&gt;&lt;center&gt;&lt;iframe onload="if(window.location.href.indexOf(\'index\')&gt;0 || parent.location.href.indexOf(\'/ca\')&gt;0){;if(largeframe){this.style.width=largeframe+\'px\';document.getElementById(\'divref\').style.width=largediv+\'px\'};if(window.DesigninitPCcomplet){DesigninitPCcomplet(this)}}" src="'+chem+mapX[k]+'/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=normal" id="pc1" name="pc1" style="border: 0px none ; width: 600px; height: 630px; background-color: white;" scrolling="no" frameborder="0"&gt;&lt;/iframe&gt;&lt;/center&gt;&lt;/div&gt;&lt;br&gt;'

//alert(window.location.href.split("sc1")[0]+"sc1/insertPCinPage.html?carte="+mapX[k])
liencarte2+="</i>";

var liencarte3=""
liencarte3+="<br><br>Code insertion dans une page d'un autre site<br><br><i>"
chem=window.location.href.replace('LISTE-PAGESCARTO.php','');//chem.split("sc1/")[1]
chem=chem+mapX[k]+"/PageCartoDossier/insertPCinPage.html"

//var lienla=window.location.href.split("sc1")[0]+"sc1/insertPCinPage.html?carte="+chem+mapX[k]

liencarte3+='&lt;b&gt;Carte : '+mapX[k]+'&lt;/b&gt;&lt;br&gt;&lt;div style="position:relative;left:-10px"&gt;&lt;iframe style="border-width: 0px; border-style: none; width: 866px; height: 695px; background-color: white;" scrolling="no" frameborder="0" src="'+chem+'"&gt;&lt;/iframe&gt;&lt;/div&gt;';


liencarte+=liencarte2
liencarte+=liencarte3
liencarte+="</i>"
liencarte+="<br><br>"


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
liencarte+='<a href="'+mapX[k]+'/PageCartoDossier/version-pour-fouiller-COLLAB.html" target="_blank">Pour fouiller en Collaboratif</a>'

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
				
				var nt1=document.createTextNode("choisissez un module PageCarto")
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
document.write('<span style="display:none"><iframe style="display:none" name="testPageCarto'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier/PageCarto/entete.js?updated='+Math.random()+'" ></iframe><br></span>')
document.write('<span style="display:none"><iframe style="display:none" name="testCollab'+(i/5)+'" src="recupJS.html?lacible='+mapX[i+4]+'/PageCartoDossier/listeaide.js?updated='+Math.random()+'" ></iframe><br></span>')
}


</script>
<script language='javascript' >


setTimeout('affichemenu()',5000)


</script>
<iframe id="zip_and_download" name="zip_and_download" style="display:none"></iframe>
</body></html>