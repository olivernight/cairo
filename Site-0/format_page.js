/*-------------------------------------------------------------------------------COULEUR du FOND---------------------------------------------------------------------------------------------------------*/
var bgcolorfond="#578078"//"#D7D7EB"//"red"

top.document.getElementById("bodyici").setAttribute('style','background-color:'+bgcolorfond)

/*-------------------------------------------------------------------------------encadré d'arrière plan---------------------------------------------------------------------------------------------------------*/

/*-------------------------------------------------------------------------------COULEUR du FOND-du BANDEAU--------------------------------------------------------------------------------------------------------*/
var bgcolorfondBandeau="red"//"#D7D7EB"

function appliqfondbandeau(){returnbgcolorfondBandeau}

/*-------------------------------------------------------------------------------encadré d'arrière plan---------------------------------------------------------------------------------------------------------*/
//----------------réglage des paramètres
var changecolorencadrefond="#6FA89E"//""//"red"//"#6C6CB5"               Mettre vide ="" ou bien une couleur
var opacitecouleurfond=0.5  //             					             Mettre 1 ou moins: ne pas mettre 0 car on ne verrai plus rien

//avec ou sans les éléments de l'entête
var encadreArrierePlan="oui" // "non"

if(encadreArrierePlan!="oui"){}else{
if(changecolorencadrefond!=""){bgcolormenu=changecolorencadrefond}else{
bgcolormenu=bgcolormenu}
document.write('<div  style="position:absolute; top:15px;left:-15px;border:5px solid #fff; opacity: 1;">')
document.write('<table bgcolor='+bgcolormenu+' style="width:1020px;height:800px;opacity:'+opacitecouleurfond+'"><tr style="height:auto"><td></td></tr></table>')
document.write('</div>') 
}
/*-------------------------------------------------------------------------------Eléments de l'entête---------------------------------------------------------------------------------------------------------*/
//----------------réglage des paramètres
var Editpastemp="10638"
function testpas(a){
var k=0;
for(i=0;i<Editpasici.length;i++){
if(a==Editpasici[i] || a==Editpastemp){Editpastemp=a;

if(poseditabon==0){
parent.document.getElementById('editici').style.visibility='visible';
}else{
top.frames.abonne.location.href="../A-MANAGER-local/creation_site/actumenu.html?REP="+repsite 
parent.document.getElementById('abon').style.visibility='visible';
parent.document.getElementById('abonne').style.height=500+'px';
}

k=1;
document.getElementById('editpas').style.visibility='hidden'}
}
if(k==0){alert("désolé, votre mot de passe n'est pas valide. Renouvelez votre saisie");}
}
var opaciteElementsEntete=0.5
//avec ou sans les éléments de l'entête
var avecEntete="oui" // "non"



if(avecEntete!="oui"){}else{
document.write('<img src="carretransparent.gif" style="position:absolute; top:20px;">')
document.write('<div class="texte" style="position:absolute;opacity:'+opaciteElementsEntete+'; top:25px; right:10px;">')
document.write('<span ><a href="mailto:cite.publique@wanadoo.fr" style="color:black">Contacts</a></span> | <span onmouseover="document.getElementById(\'ment\').style.visibility=\'visible\'" onmouseout="document.getElementById(\'ment\').style.visibility=\'hidden\'" >Mentions légales</span> ')
document.write('</div>')
document.write('<div class="texte" style="position:absolute;opacity:'+opaciteElementsEntete+'; top:35px; left:0px;">')
document.write('<big><big><b>'+repsite+'</b></big></big>')
document.write('</div>')
document.write('<div class="texte" style="position:absolute;opacity:1; top:102px; right:-5px;z-index:1000">')
//document.write('<img height=80px src=""   /><img height=80px src=""/>')
document.write('</div>')
document.write('<div class="texte" style="position:absolute;opacity:'+opaciteElementsEntete+'; top:55px; left:0px;">')
document.write('<b>Site affilié au projet GaïaMundi- Cité Publique</b>')
document.write('</div>')

document.write('<div id="ment" class="texte" style="position:absolute;opacity:0.7;border:2px solid; top:45px; right:10px;visibility:hidden;background-color:white;width:200px;z-index:1000;padding:5px">')
document.write('<center><b><br><big>Projet GaïaMundi</big><br></b>développé par <b><br><big>Cité Publique</big></b><br>61 cours de la Liberté - 69003 - Lyon - France<br><i>****<ul><li><b></i>**<i></b></li><li>Interface de cartographie dynamique dédiée au</li></li><li>Rapprochement cartographiques de données</li><li>Réseau de mutualisation de compétences et de savoirs</li><li>Espace collaboratif</li></ul></i></center>')
document.write('</div>')


document.write('<div id="editpas" class="texte" style="position:absolute;opacity:0.7;border:2px solid; top:45px; right:10px;visibility:hidden;background-color:white;width:200px;z-index:1000;padding:5px">')
document.write('<form><center><b><big>Saisissez votre mot de passe</big><br><input id="sais" type="texte" value="" ><br><input type="button" onclick="testpas(document.getElementById(\'sais\').value);" value="valider"></input>...<input type="button" value="annuler" onclick="document.getElementById(\'editpas\').style.visibility=\'hidden\'"</center></form>')
document.write('</div>')
}
