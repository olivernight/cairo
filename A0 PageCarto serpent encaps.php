﻿<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><!--Copyleft [2006-2012] [Hervé Paris] hpdb@wanadoo.fr - altercarto@wanadoo.fr - cite.publique@wanadoo.fr --><!--This file is part of GaïaMundi. GaïaMundi is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version. GaïaMundi is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details. You should have received a copy of the GNU General Public License along with GaïaMundi; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA-->
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
</head><body onKeyDown="javascript:test(event);" onKeyUp="javascript:antitest0(event);">
<script language="javascript">
var docu





</script>
<?php
$alea=mt_rand();
echo '
<script language="javascript" src="mapsILIADEmotpas.js?updated='.mt_rand().'"></script>

<script language="javascript" src="documentation.js?updated='.mt_rand().'"></script>';

?>
<script language="javascript">
var cedoc=window.location.href
var MAJ=new Array()
 var listeRADAR=new Array()
var initpop=0

function popupX(page,var1,var2) {
initpop=1
document.open(page,var1,var2)
pop=document.open(page,var1,var2)
}
function popuaideMENUSDATA(a){
if(initpop==1){
pop.close()
}
popupX('../../MANUELS/'+a+'.html',a,'width=750,height=550,top=100px,left=30px,toolbar=0,menuBar=1,scrollbars=1,resizable=1')
window.blur()
}
function populien(){
if(initpop==1){
pop.close()
}
popupX('lien2.htm','liens','width=350,height=250,top=200px,left=630px,toolbar=0,menuBar=1,scrollbars=1,resizable=1')
window.blur()
}

function popuBdeCartesVierges(a,b){

if(initpop==1){
pop.close()
}
popupX(a+'.html?cible='+b,a,'width=750,height=550,top=100px,left=30px,toolbar=0,menuBar=1,scrollbars=1,resizable=1')
window.blur()
}
// affichage et effacement des couches en dur (nappe ou autres identidées par un id)
function affic1(a){top.frames.Num0.couches.zoom.document.trans.getSVGDocument().getElementById(a).setAttribute('visibility' ,' visible' )}
function effac1(a){top.frames.Num0.couches.zoom.document.trans.getSVGDocument().getElementById(a).setAttribute('visibility' ,' hidden' )}

function affic1CONTOUR(a){
if(top.frames.Num0.frames.paramcarte.retournelisteAddContoursSVG){
var listeAddContoursSVG=top.frames.Num0.frames.paramcarte.retournelisteAddContoursSVG("return listeAddContoursSVG")

top.frames.Num0.frames.datacarte.appliqueContour2(mapX[(numcarte-1)*5+4],listeAddContoursSVG[a][0],listeAddContoursSVG[a][1],listeAddContoursSVG[a][2],listeAddContoursSVG[a][3],listeAddContoursSVG[a][4],listeAddContoursSVG[a][5],listeAddContoursSVG[a][6],listeAddContoursSVG[a][7],listeAddContoursSVG[a][8])
}
}



var boutonaide=0
var aw=document.location.href
var aw2=aw
var mt
var idmt=0
var repsite="HYPERTEXTES-tous"
function transrepsite(){return repsite} //appelé par couche1photo.html : ne sert à rien ici mais nécessaire pour ne pas bugger en site parrain. ça sert aux sites filleuls
var mapX=new Array()
var fileinfoMaj=new Array()
var fileinfoMaj1=new Array()
</script>
<?php

echo '<script language="javascript" src="MAJlog.js?updated='.mt_rand().'"></script>
<script language="javascript" src="mapsILIADE.js?updated=='.mt_rand().'"></"></script>
<script language="javascript" src="http://altko.org/A0-MAJ-GAIAMUNDI/lister/listeMajGaiaMundi.js?updated='.mt_rand().'"></script>';

?>
<script language="javascript">
		for(i=0;i<fileinfoMaj1.length;i=i+1){
		fileinfoMaj1[i]=fileinfoMaj1[i].replace(".zip","")

		}
var Z=new Array();
function changeMAJ(){var carte = top.frames.editMenu.document.menucarte.selectcarte.selectedIndex;if(carte!=0){Z=new Array();Z[Z.length]=top.frames.editMenu.document.getElementById("o"+carte).value;top.frames.editMenu.listemaj.location.href="zipcopyMAJ.php?Z="+Z}}


function nouvellecarte(){

var adresDepot="../Depot_cartes/AA0-MODULE-CARTE/listerepCARTEinfo.php?CEDOC="+cedoc
loadCT(adresDepot)
  
}
function gestionlistecartes(){

var adresDepot="../Depot_cartes/AA0-MODULE-CARTE/listerepCARTEinfogestion.php?CEDOC="+cedoc
loadCT(adresDepot)
  
}
function ModifFichecarte(){
var adresDepot="A-MANAGER-local/dossier-carte/modifFicheCarte.php?etape="
loadCT(adresDepot)
}
//état des mises à jour

var textmaj='<small><span style="font-family:arial"><br><br><center><big><b>Etat des mises à jour</b></big></center><br><center><b><a href="http://altko.org/A0-MAJ-GAIAMUNDI/lister/listerepMAJ.php" target="_blank">Consultez le site de Mise à jour</a></b></center>';
for(i=0;i<MAJ.length;i++){
textmaj+='<br>'+MAJ[i]

}
textmaj+='</span>'
textmaj+='<span style="font-family:arial"><br><br><center><big><b>Mises à Jour prètes à l\'exécution</b></big></center></span>'

		


		
		
		
		
		
		textmaj+='<center><form name="menucarte"><select style="width:100px" name="selectcarte" id="selectcarte" onchange="parent.changeMAJ()">'
		
		
		textmaj+='<option>&nbsp;&nbsp;Liste des mise à jour en ligne à télécharger</option>'
		for(i=0;i<fileinfoMaj1.length;i=i+1){
		textmaj+='<option id="o'+(i+1)+'" value="'+fileinfoMaj1[i]+'">'+(i+1)+'-'+fileinfoMaj1[i]+'</option>'

		}
		
		
		
		textmaj+='</select></form></center>'


textmaj+='<center><input type="button" value="Actualisez et/ou revenez à la liste" onclick="window.frames.listemaj.location.href=\'A-MANAGER-local/listerepMAJinfo.php\'"></center>'
textmaj+='<br>'
textmaj+='<iframe name="listemaj" src="A-MANAGER-local/listerepMAJinfo.php" width=100% height=100% frameborder=0 >'
textmaj+='</small>'


function etatdesMaj(){

selectOnglet('east',2)
top.frames.editMenu.location.href="vide.html"
setTimeout('top.frames.editMenu.document.getElementsByTagName("body")[0].innerHTML=textmaj',1800)
}


//setTimeout('top.frames.editMenu.document.getElementsByTagName("body")[0].innerHTML=textmaj',5000)











var Iliade="Iliade"
var createurSVG="non"
var EDit=0 // le module édtion de texte n'est pas chargé dans la frame Num0txt
var WHREH=window.location.href
if(WHREH.indexOf("?",0)>0){
WHREH=WHREH.substr(0,(WHREH.indexOf("?",0)),1)
}
function positioncache(){}// placebo dans le cas des articles
function heightscroll(){}// placebo dans le cas des articles
function retournecreateurSVG(){return createurSVG}
function retourneIliade(){return Iliade}
function retourneintitules1(){return intit}
function retourneintitules2(){return initO1}
function retmapx(){var retmap=mapX.length/5; return retmap}
var menuencaps=new Array()
var optionwiki=new Array()
</script>
<?php

echo '
<script language="javascript" src="intitulesILIADE.js?updated='.mt_rand().'"></script>
<script id="listeRADAR" language="javascript" src="RADARHypertexte/rad/listeradar.js?updated='.mt_rand().'"></script>
<script id="listemenu" language="javascript" src="menuencapsulesILIADE.js?updated='.mt_rand().'"></script>
<script id="listeARTICLES" language="javascript" src="menuARTICLES.js?updated='.mt_rand().'"></script>
<script language="javascript" src="parametregenraux2-17.js?updated='.mt_rand().'"></script>
<script language="javascript" src="wikiencapsuleILIADE.js?updated='.mt_rand().'"></script>';
?>
<script language="javascript">


function rechargeMenuHypertexte(){
listpubcartovision=new Array();rangliste=new Array(); 
menuencaps=new Array();
document.getElementById("selectcomment").innerHTML=""

    var myscript = document.createElement('script');
    myscript.setAttribute('async', 'true');
    myscript.src = "menuencapsulesILIADE.js?updated="+Math.random();

    document.documentElement.firstChild.appendChild(myscript);


setTimeout('menucom(menuencaps,listpubcartovision)',1000)
}

var IdrecupContenuFichier=""
var Xurl=''
var hauteurecran
var HsurW=window.innerHeight/window.innerWidth
//alert(HsurW)
var indicouvencours=1 // INDIQUE La position en cours de l'éditeur hypertetxte : 1 correspond dernière opératiuon =modification hypertexte; 2 ou 3 correspondent à nouvel hyper texte ou nouvel hypertexte à partir de
function etatindicouvencours(a){indicouvencours=a}
function retourneindicouvencours(){return indicouvencours } //conserve et renvoir 


var indicouvencoursR=1 // INDIQUE La position en cours de l'éditeur RADAR : 1 correspond dernière opératiuon =modification RADAR; 2 ou 3 correspondent à nouvel RADAR ou nouvel RADAR à partir de
function etatindicouvencoursR(a){indicouvencoursR=a}
function retourneindicouvencoursR(){return indicouvencoursR } //conserve et renvoir 



var toutescartes=""
var mt2
var taille=''
	
    var urlvar=''
    
    if (window.location.search != '') {
    longueur = window.location.search.length - 1;
    
    data = window.location.search.substr(1,longueur);
    donnees = data.split('&');
    urlvar = new Array();
    urlvarnum = new Array();
    for (var i=0; i < donnees.length; i++) {
    position = donnees[i].indexOf('=');
    variable = donnees[i].substr(0,position);
    pos = position + 1;
    valeur = decodeURI(donnees[i].substr(pos,donnees[i].length));
    while (valeur.search(/\+/) != -1)
    valeur = valeur.replace(/\+/,' ');
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }
    //alert(urlvarnum)
    lacible=(urlvar['cible'])
if(urlvar['tail']){taille=(urlvar['tail'])}else{taille=''}
if(urlvar['mtp2']){mt2=urlvar['mtp2']}else{mt2='xxxxxxxxxxxxxxx'}
if(urlvar['hypertext']!=""){aw=(urlvar['hypertext'])}else{aw='1'}
//paramètre pour afficher les cartes ou non . Le parametre autrescommnt="none" stocké dans la variable libelmap[5] de chaque carte dans mapsILIADE.js : valeur "none" occulte la publication dans le menu cartes mais la carte reste excéutable si des hypertextes l'appellent (double numérotaion : apprence et vrai numéro) . Pour afficher toutes les cartes (et pour modifier le statut de publication d'une carte) : placer le parametre ttcartes=1 dans l'url . Pour modifier, aller ensuite dans architecture et modifier le champ compléments : none -> non publiée, vide ou autres chose -> publiée.
if(urlvar['ttcartes']){toutescartes=urlvar['ttcartes']}else{toutescartes=''}
function transTTCARTES(){return toutescartes} // appelée par archi.html et par selection.repertoire.php dans manager Ico Sujet , appelé aussi par liensSites.html dans A-MANAGER-local



var Hici=window.innerHeight
var Wici=window.innerWidth

var deltaHW=Wici-Hici

if((deltaHW)>=300){ // écran rectangle horizontal
if(taille==""){taille='3'}
deltaHW=50
if(taille=='' || taille==0){//panoramique
hauteurecran=window.innerHeight-100//((window.innerWidth-215))/900*500+5*(HsurW*100-48)-150//70
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=window.innerWidth-largeurecran-20// tous écran
if(HsurW<0.65){Wsize=(window.innerWidth-largeurecran-20)/2}// écran panoramique large
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
}


if(taille=='1'){//panoramique

hauteurecran=window.innerHeight-120//105// ORIGINAL
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=window.innerWidth-largeurecran-20// tous écran
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS

}
if(taille=='2'){//panoramique

hauteurecran= window.innerHeight-120//  ((window.innerWidth)-40)/900*500+5*(HsurW*100-48)-150//70
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=window.innerWidth-largeurecran-20// SEUL WEST est OUVERT
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
}
if(taille=='3'){

hauteurecran= window.innerHeight-120
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=(window.innerWidth-largeurecran-20)/2 // EAST et WEST ouverts
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
}
if(taille=='4'){
hauteurecran=window.innerHeight-120// ((window.innerWidth)-40)/900*500+5*(HsurW*100-48)-170//70
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=(window.innerWidth-largeurecran-20)///2 //0.1// Seul EAST  ouvert
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
}
}else{//écrans carrés
if(taille==''){taille='3'}
					if(taille=='' || taille==0){//panoramique
					hauteurecran=((window.innerWidth)-40)/900*600-deltaHW+50//((window.innerWidth-215))/900*500+5*(HsurW*100-48)-150//70
					var largeurecran=hauteurecran/600*900//800//705//
					var Wsize=window.innerWidth-largeurecran-20// tous écran
					if(HsurW<0.65){Wsize=(window.innerWidth-largeurecran-20)/2}// écran panoramique large
					var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
					}


					if(taille=='1'){//panoramique

					hauteurecran= ((window.innerWidth)-40)/900*600-deltaHW+50//70
					var largeurecran=hauteurecran/600*900//800//705//
					var Wsize=window.innerWidth-largeurecran-20// tous écran
					var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS

					}
					if(taille=='2'){//panoramique

					hauteurecran= ((window.innerWidth)-40)/900*600-deltaHW+50//70//  ((window.innerWidth)-40)/900*500+5*(HsurW*100-48)-150//70
					var largeurecran=hauteurecran/600*900//800//705//
					var Wsize=window.innerWidth-largeurecran-20// SEUL WEST est OUVERT
					var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
					}
					if(taille=='3'){
					
					hauteurecran= ((window.innerWidth)-40)/900*600-deltaHW+50//70
					var largeurecran=hauteurecran/600*900//800//705//
					var Wsize=(window.innerWidth-largeurecran-20)/2 // EAST et WEST ouverts
					var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
					}
					if(taille=='4'){
					hauteurecran= ((window.innerWidth)-40)/900*600-deltaHW+50//70// ((window.innerWidth)-40)/900*500+5*(HsurW*100-48)-170//70
					var largeurecran=hauteurecran/600*900//800//705//
					var Wsize=(window.innerWidth-largeurecran-20)///2 //0.1// Seul EAST  ouvert
					var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud TOUS ECRANS
					}




}


//alert(Ssize)
//
/*
var Ssize=window.innerHeight-hauteurecran -82//82// hauteur de la pane Sud
var largeurecran=hauteurecran/600*900//800//705//
var Wsize=window.innerWidth-largeurecran-20// tous écran
*/

//if(HsurW<0.65){Wsize=(window.innerWidth-largeurecran-20)/2}// écran panoramique large

var chg222=0
var initulprojet=intit[4]
function retourneintit4(){ return initulprojet }
function chgbgetcolor(a,b,c){

var st="background-color:"+a+";color:"+c
b.setAttribute('style',st)
}
function chgcolor(a,b){

a="color:"+a
b.setAttribute('style',a)
}


/*
var longx2=0
for(i=0;i<aw.length;i++){
if(aw.substr((aw.length-i),1,1)=="?"){longx2=i}
}

aw=aw.substr(aw.length-longx2+1,longx2,1)
*/
function loadCT(a){

selectOnglet('east',2)
top.frames.editMenu.location.href=a
}


function valaw(){
return aw
}

function tric(event){

}
var u=0
var objaide=""
function test(event){
//alert(event.keyCode)
if  (event.keyCode == 16 ) { //e.which

u = 16
//alert(objaide)
document.getElementById("divaide").style.display="block"
document.getElementById("divmenumotcle").style.display="none"
top.frames.frameaide.location.href="aidecartecom.html?REP="+objaide
selectOnglet('west',2);
}

}
function test2(event){//évennement engendré dans le svg
//alert(event.keyCode)
//alert("test2")
if  (event.keyCode == 16 ) { //e.which

u = 16
//alert(objaide)
document.getElementById("divaide").style.display="block"
document.getElementById("divmenumotcle").style.display="none"
top.frames.frameaide.location.href="../aidecartecom.html?REP="+objaide
selectOnglet('west',2);
}

}
function test3(event){
//alert(event.keyCode)
if  (event.keyCode == 16 ) { //e.which

u = 16
//alert(objaide)
document.getElementById("divaide").style.display="block"
document.getElementById("divmenumotcle").style.display="none"
top.frames.frameaide.location.href="aidecartecom.html?REP="+objaide
selectOnglet('west',2);
}

}
function antitest0(event){
//alert("antitest0")
event.stopPropagation()}
function antitest(event){// 
u=0
document.getElementById("divaide").style.display="none"
document.getElementById("divmenumotcle").style.display="block"
window.addEventListener("keydown",test,true)

//selectOnglet('west',1)

}
function affaide(){

document.getElementById("divaide").style.display="block"
document.getElementById("divmenumotcle").style.display="none"
}
function antitestretourtop(){
//alert("retourtop")
//event.stopPropagation()
u=0
document.getElementById("divaide").style.display="none"
document.getElementById("divmenumotcle").style.display="block"
top.addEventListener("keydown",test,true)
}
function ouvHelp(a){

if(a=="Help2"){

selectOnglet('west',2)
document.getElementById("divaide").style.display="block"
document.getElementById("divmenumotcle").style.display="none"
top.frames.frameaide.location.href="aidecartecom.html?REP=Help"}

objaide=a

//top.frames.frameaide.location.href="aidecartecom.html#"+a



}

function ouvmenurecherche(a){
selectOnglet('west',2)
document.getElementById("divaide").style.display="none"
document.getElementById("divmenumotcle").style.display="block"
top.frames.framemenumotcle.location.href="readLibelDATA-menu-Recherche.html?numcarte="+a
}





function BL(){ //début signal chargement top.BL()

document.getElementById("divloading").style.top=200+'px'
top.frames.FloadingBis.location.href="vide.htm" //introduit une interruption dans le cycle firefox et permet ainsi de forcer l'affichage du signal de téléchargement

}
function EL(){//fin signal chargement  top.EL()

document.getElementById("divloading").style.top=-1000+'px'
//menuBar.hideSubMenus()
}

function redem(a){

if(a=="" || a==0){a=-1;}
if(a==-1){window.location.href=""+WHREH+"?tail="+taille+"&mtp2="+mt+"&alea="+Math.random()}
if(a==1){window.location.href=""+WHREH+"?tail=1&mtp2="+mt+"&alea="+Math.random()}
if(a==2){window.location.href=""+WHREH+"?tail=2&mtp2="+mt+"&alea="+Math.random()}
if(a==3){window.location.href=""+WHREH+"?tail=3&mtp2="+mt+"&alea="+Math.random()}
if(a==4){window.location.href=""+WHREH+"?tail=4&mtp2="+mt+"&alea="+Math.random()}
if(a==5){window.location.href=""+WHREH+"?tail="+taille+"&mtp2="+mt+"&ttcartes=1&alea="+Math.random()}
}


//----------------------------------------------------------------------------------------------------------------------------EDITEUR HYPERTEXTE 
var ouvbloc12=0 //indicateur détermine les fonctionalités d' édition : ecrithypertext.html

function retournouvbloc12(){return ouvbloc12}
var TextToModif=''
function retournTextToModif(){return TextToModif}
function annulTextToModif(){TextToModif=''}
//function alert1(){alert("$indic ==1 dans breve.php")}
var indicaici=0

function indica0(){
EDit=0 //le module édition de texte n'est pas chargé
indicaici=0
editeur(0)
document.getElementById("modifX").style.color="black"//déclenché par le module php de modification de fichier breve.php dans le dossier PageWebIliadeligne
}

var Xhyp=1

function ModifHypertexte(){
//alert("état encours = "+indicouvencours+" nouvel état = "+ouvbloc12  )
var icit
if((indicouvencours==2 || indicouvencours==3) & (ouvbloc12==1 || ouvbloc12==3)){
if(ouvbloc12==1){icit=" à modifier."}else{icit=" modèle pour votre nouvel hypertexte."};
alert(" Vous devez d'abord enregistrer ou bien quitter le travail en cours d'édition et afficher un texte"+icit+" en utilisant le  menu 'Cartes et commentaires'")
}else{ //sélection selon état de l'éditeur
//menuBar.hideSubMenus()
selectOnglet('east',1)
if(indicaici==0){
TextToModif=top.frames.Num0txt.returnXbody("return Xbody")
if(Xhyp==1){
top.frames.Num0txt.location.href="ecrit_hypertext.html"
}else{
top.frames.Num0txt.location.href="ecrit_hypertextARTICLES.html"
}


EDit=1 // le module édition de texte est chargé
if(ouvbloc12==1){var gb="gray";indicaici=1}else{gb="black"}
document.getElementById("modifX").style.color=gb
//ne pas faire pareil pour modifY et modif Z permet de relancer la sasie en remettant à zero
}
if(ouvbloc12==2 || ouvbloc12==3){

if(Xhyp==1){
top.frames.Num0txt.location.href="ecrit_hypertext.html"
}else{
top.frames.Num0txt.location.href="ecrit_hypertextARTICLES.html"
}

EDit=1 // le module édition de texte est chargé
}
}// fin de sélection selon état encours de l'éditeur

}

var editeurOuiNon=0
function editeur(a){
editeurOuiNon=a //passe à 1 à l'ouverture de l'éditeur et passe à zero lorsque le menu commentaire est activé
}

function retourneediteur(){return editeurOuiNon}



//-----------------------------------------------------------------------------------------------------------------------FIN--EDITEUR HYPERTEXTE

//----------------------------------------------------------------------------------------------------------------------------EDITEUR RADARs
var ouvblocR12=0 //indicateur détermine les fonctionalités d' édition : ecrithypertext.html

function retournouvblocR12(){return ouvblocR12}
var TextToModifR=''
function retournTextToModifR(){return TextToModifR}
function annulTextToModifR(){TextToModifR=''}
//function alert1R(){alert("$indic ==1 dans breve.php")}
var indicaiciR=0

function indica0R(){
EDitR=0 //le module édition de texte n'est pas chargé
indicaiciR=0
editeurR(0)
document.getElementById("modifXR").style.color="black"//déclenché par le module php de modification de fichier breve.php dans le dossier PageWebIliadeligne
}
</script>

<script id="ficheRADAR" language="javascript"></script>
<script language="javascript">

function ModifHypertexteR(){
var icit
if((indicouvencoursR==2 || indicouvencoursR==3) & (ouvblocR12==1 || ouvblocR12==3)){
if(ouvblocR12==1){icit=" à modifier."}else{icit=" modèle pour votre nouvel hypertexte."};
alert(" Vous devez d'abord enregistrer ou bien quitter le travail en cours d'édition et afficher un texte"+icit+" en utilisant le  menu 'Cartes et commentaires'")
}else{ //sélection selon état de l'éditeur
//menuBar.hideSubMenus()
selectOnglet('east',1)
if(indicaiciR==0){
TextToModifR=""









//alert(TextToModifR)
top.frames.Num0txt.location.href="ecrit_hypertextRADAR.html?radar="+fRADAR
EDitR=1 // le module édition de texte est chargé
if(ouvblocR12==1){var gb="gray";indicaiciR=1}else{gb="black"}
document.getElementById("modifXR").style.color=gb
//ne pas faire pareil pour modifYR et modifZR permet de relancer la sasie en remettant à zero
}
if(ouvblocR12==2 || ouvblocR12==3){top.frames.Num0txt.location.href="ecrit_hypertextRADAR.html?radar="+fRADAR;
EDitR=1 // le module édition de texte est chargé
}
}// fin de sélection selon état encours de l'éditeur

}

var editeurOuiNonR=0
function editeurR(a){
editeurOuiNonR=a //passe à 1 à l'ouverture de l'éditeur et passe à zero lorsque le menu commentaire est activé
}

function retourneediteurR(){return editeurOuiNonR}
//------------------------------------------------------------------------------------------------------------------------FIN EDITEUR RADARs
function recup(){

document.getElementById(IdrecupContenuFichier).innerHTML='<iframe width=100% height=100% id="contenu'+IdrecupContenuFichier+'" name="contenu'+IdrecupContenuFichier+'"><Iframe>'
document.getElementById('contenu'+IdrecupContenuFichier).location.href=Xurl
}

function boutonbal(a){

if(a=="encadru"){top.frames.recscenario.enregencadre(a,typeicones,tailleico)}
if(a=="iconu"){top.frames.recscenario.enregicones(a,typeicones,tailleico)}
if(a=="cartu"){top.frames.recscenario.enregcarte(a)}
if(a=="fondu"){top.frames.recscenario.enregfond(a,typeicones,tailleico)}
if(a=="f-ico"){top.frames.recscenario.enregfico(a,typeicones,tailleico)}
}

function retournemenuencaps(){
return menuencaps}

var transHL=new Array()
transHL[0]=largeurecran
transHL[1]=hauteurecran
function transHLecran(){
return transHL
}

function transscrol(){
return scrol
}
function scroltravail(){

document.getElementById("Num0").scrolling="yes"
}


function chargemenu(){

//document.getElementById("SUJET").height=0
//document.getElementById("OTHER").height=0
//document.getElementById("divsujet").style.visibility="hidden"
//document.getElementById("divother").style.visibility="hidden"
//top.frames.SUJET.location.href="MENU-SUJET.htm"
//top.frames.OTHER.location.href="MENU-OTHER.htm"
}
var btemp="b1"
function changebouton(a){

var bx="bt"+a.substr(a.length-1,1)
var ax="b"+a.substr(a.length-1,1)
var fich=document.getElementById(bx).firstChild.nodeValue
A="cartO-"+fich+"-encaps.htm"
//alert(" changebouton ligne 134 top : a="+a)
top.frames.Num0txt.location.href=A
document.getElementById(ax).src="boutonselect.png"
document.getElementById(btemp).src="bouton.png"
btemp=ax
}
function redimcomment(){
//alert("redimcomment")
document.getElementById("Num0txt2").width=0
document.getElementById("Num0txt2").height=0

document.getElementById("Num0txt").height=Hx
}

function rediminfocarte(){

Wx=document.getElementById("Num0txt").width
Hx=document.getElementById("Num0txt").height
//alert(document.getElementById("Num0txt2").width)
document.getElementById("Num0txt").height=0
document.getElementById("Num0txt2").width=Wx
document.getElementById("Num0txt2").height=Hx
}
function chargevierge0(){

if(editeurOuiNon==0){
top.frames.Num0txt2.location.href="cartO-vierge0-encaps.htm"
rediminfocarte()
}
}

function chargevierge02(){
//alert("indicinfocarte="+indicinfocarte+"       editeurOuiNon="+editeurOuiNon)   
var carteici=top.frames.Num0txt.location.href  
if(carteici.search('sommaire')>0 || (carteici.search('Sommaire')>0 || carteici.search('Projet')>0 || (carteici.search('vierge0')>0 ))& editeurOuiNon==0){top.frames.Num0txt.location.href="cartO-vierge0-encaps.htm"}//mode expert
if(indicinfocarte==1 & editeurOuiNon==0){top.frames.Num0txt2.location.href="cartO-vierge0-encaps.htm"}
}

function changepage(a){





selectOnglet('center',1)
top.document.getElementById("cartu").style.visibility="visible"
top.document.getElementById("encadru").style.visibility="visible"
top.document.getElementById("iconu").style.visibility="hidden"
top.document.getElementById("fondu").style.visibility="hidden"
top.document.getElementById("fico").style.visibility="hidden"
if(editeurOuiNon==1){
top.frames.Num0txt.document.getElementById("cartu").style.visibility="visible"
top.frames.Num0txt.document.getElementById("encadru").style.visibility="visible"
top.frames.Num0txt.document.getElementById("iconu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("fondu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("fico").style.visibility="hidden"
}
//var op="option"+a.substr(a.length-1,1)
//alert("changegage("+a+")")

var fich=document.getElementById(a).firstChild.nodeValue
var pas=fich.indexOf("-",0)
fich=fich.substr((pas+1),fich.length-(pas+1))
var xici = Math.random();
if(Xhyp==1){
A="HYPERTEXTES-tous/cartO-"+fich+"-encaps.htm?rd="+xici
}else{
A="HYPERTEXTES-articles/cartO-"+fich+"-encaps.htm?rd="+xici
}

top.frames.Num0txt.location.href=A
redimcomment()
setTimeout('eventKeyframes()',2000)
}

function changepagecrea(a){





selectOnglet('center',1)
top.document.getElementById("cartu").style.visibility="visible"
top.document.getElementById("encadru").style.visibility="visible"
top.document.getElementById("iconu").style.visibility="hidden"
top.document.getElementById("fondu").style.visibility="hidden"
top.document.getElementById("fico").style.visibility="hidden"
if(editeurOuiNon==1){
top.frames.Num0txt.document.getElementById("cartu").style.visibility="visible"
top.frames.Num0txt.document.getElementById("encadru").style.visibility="visible"
top.frames.Num0txt.document.getElementById("iconu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("fondu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("fico").style.visibility="hidden"
}
//var op="option"+a.substr(a.length-1,1)
//alert("changegage("+a+")")

var fich=document.getElementById(a).firstChild.nodeValue
var pas=fich.indexOf("-",0)
fich=fich.substr((pas+1),fich.length-(pas+1))
if(Xhyp==1){
A="../../HYPERTEXTES-tous/cartO-"+fich+"-encaps.htm"
}else{
A="../../HYPERTEXTES-articles/cartO-"+fich+"-encaps.htm"
}

top.frames.Num0txt.location.href=A
redimcomment()
setTimeout('eventKeyframes()',2000)
}

var libelaxe=new Array()
var axescote=new Array()
var coul=new Array()
var carre
var retrait
var titre
var fRADAR



function changepageR(a){
selectOnglet('center',1)
indica0R();
libelaxe=new Array()
axescote=new Array()
coul=new Array()
var carre=""
var retrait=""
var titre=""

var fich=document.getElementById(a).firstChild.nodeValue
var pas=fich.indexOf("-",0)
fich=fich.substr((pas+1),fich.length-(pas+1))

A="RADARHypertexte/rad/"+fich
fRADAR=A
//document.getElementById("ficheRADAR").src=A
top.frames.Num0txt.location.href=A
redimcomment()
setTimeout('eventKeyframes()',1000)
}


var optw=""
var selectedindextemp=0

function indicinfo1(){;indicinfocarte=1}

function change_site() {

etatindicouvencours(1)
editeur(0)
indica0()
if(document.menu.popup.selectedIndex==(document.menu.popup.options.length-1)){indicinfocarte=1};
var site = document.menu.popup.selectedIndex;
{
//alert("indicinfocarte="+indicinfocarte+"  selectedindextemp="+selectedindextemp+" site="+site)
//alert("postemp="+postemp)

if(indicinfocarte!=1 ){document.getElementById("option"+postemp).setAttribute("style","background-color:white")}
if(selectedindextemp!=site & postemp==(document.menu.popup.options.length-1)){indicinfocarte=0;redimcomment();document.getElementById("option"+selectedindextemp).setAttribute("style","background-color:white")}////////
if(indicinfocarte==1 & selectedindextemp==site){indicinfocarte=0;redimcomment()}else{
if(indicinfocarte==1){}else{selectedindextemp=site;}

//alert("  selectedindextemp="+selectedindextemp)
window.location.href =
document.menu.popup.options[site].value;


}
//alert("postemp="+postemp+"   site="+site+"  nb options="+(document.menu.popup.options.length-1))
//if(site!=(document.menu.popup.options.length-1)){
//alert("site="+site+"    postemp="+postemp)
//if(site !=(document.menu.popup.options.length-1)){indicinfocarte=0}
postemp=site
//}
document.menu.popup.selectedIndex=postemp
}

}
function rien2(){}
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
//module de commande pour créer les balises de méta language de textualisation
var initmove=0
function disable(event){
X0=document.getElementById("commande1").width
Y0=parseInt(divpoint.style.top)
imag1point.width=40
imag1point.height=40
imagpoint.style.top=parseInt(divpoint.style.top)
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+0
initmove=0
}
var trez=0
function A2moveXY(event){
if(initmove==1){


if (document.allxxxx){
//-------à faire

}else{

X1=-(event.clientX-X)
Y1=-(event.clientY-Y)
document.getElementById("commande1").height=parseInt(trez)+parseInt(Y1)
//divpoint.style.left=X0-X1+tempx
divpoint.style.top=Y0-Y1+tempy
imagpoint.style.top=Y0-Y1+tempy+30-200
imagpoint.style.left=X0-X1+tempy+0-200
if(X0-X1+tempx<400){document.getElementById("textstatus").firstChild.data=""}
document.getElementById("commande1").width=X0-X1+tempx
//trez=trez0+Y1


}

}
}

function ajustcol(){
document.getElementById('com').style.left=trucx2

}

function AmoveXY(event){

if(initmove==0){
initmove=1

if(document.allxxxx){
X = event.clientX;
Y = event.clientY;
tempx=parseInt(divpoint.style.left)
tempy=parseInt(divpoint.style.top)
}else{
X = event.clientX;
Y = event.clientY;
tempx=0
tempy=0
//trez=document.getElementById("commande1").height

imag1point.width=400
imag1point.height=400

trez=parseInt(document.getElementById("commande1").height)
}
}

}


function init2(){
if(initialmove==0){
indicinit2=1


}
}
function initmoveXY(){initmove=1}
function init(){}
function initXXXXXXXXXXXX(){//fonction d'initialisation inhibée
if(document.allxxxx){
document.getElementById("com").attachEvent("onmousedown",AmoveXY)
document.getElementById("com").attachEvent("onmousemove",A2moveXY)
document.getElementById("com").attachEvent("onmouseup",disable)
}else{

//document.getElementById("fondcom").addEventListener("mousedown",AmoveXY,true)
//document.getElementById("fondcom").addEventListener("mousemove",A2moveXY,true)
//document.getElementById("fondcom").addEventListener("mouseup",disable,true)
document.getElementById("imag0").addEventListener("mousedown",AmoveXY,true)
document.getElementById("imag0").addEventListener("mousemove",A2moveXY,true)
document.getElementById("imag0").addEventListener("mouseup",disable,true)
}

X0=document.getElementById("commande1").width//parseInt(divpoint.style.left)
Y0=parseInt(divpoint.style.top)
trez0=document.getElementById("commande1").height
initmove=0
//tempx=parseFloat(divpoint.style.left)

}


var largeurcadre0=400
var debdblc=1
/*------------------------------------------------------------------------------------------------------------------------------------------------------------------
function ouvferouv(){

if(debdblc==0){

debdblc=1
divpoint.style.top=divpoint0
document.getElementById("commande1").width=commandewidth0
document.getElementById("commande1").height=commandeheight0
imagpoint.style.left=imagpointleft0+"pt"
imagpoint.style.top=imagpointtop0

document.getElementById("textstatus").firstChild.data="Commandes et générateur de méta-balises pour wikini  "
}
X0=document.getElementById("commande1").width//parseInt(divpoint.style.left)
//trez0=

Y0=parseInt(divpoint.style.top)

imag1point.width=60
imag1point.height=40
imagpoint.style.top=parseInt(divpoint.style.top)
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+0

initmove=0
}

function ouvferfer(){
if(debdblc==1){

debdblc=0
divpoint.style.top=hauteurecran+70
document.getElementById("commande1").width=0
document.getElementById("commande1").height=0
imagpoint.style.left=5+0
imagpoint.style.top=hauteurecran
document.getElementById("textstatus").firstChild.data=""
}
X0=document.getElementById("commande1").width//parseInt(divpoint.style.left)
//trez0=

Y0=parseInt(divpoint.style.top)

imag1point.width=60
imag1point.height=40
imagpoint.style.top=parseInt(divpoint.style.top)
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+0
//stop()
initmove=0

}
---------------------------------------------------------------------------------------------------------------------------------------------------------*/


/* récupère les contenus de l'attribut onclick dans les boutons ou images de commande de la carte dans la iframe tab de cartO2encapsule.htm pour les attribuer aux boutons de commande dans la westPane */
function XclickNum0tab(a){
BL()
var fcible=top.frames.Num0.tab.document.getElementById(a).getAttribute("onclick")
top.frames.Num0.tab.location.href="javascript:"+fcible
EL()
}
function XclickNum0tabICI(){
XclickNum0tab('propX')
}
/*
function XclickNum0tabICIXXXXXXXXXXXXXXXXXXXX(){
alert("XclickNum0tabICI")
BL()

//top.frames.Num0.frames.couches.zam3.grilleapply()
top.frames.Num0.frames.tab.cursX2()

top.frames.Num0.frames.tab.ajust()
top.frames.Num0.frames.couches.zam3.propX()

top.frames.Num0.frames.couches.zoom.choixICONE(typeicones)
top.frames.Num0.frames.couches.frames.zam3.IMCX1()
EL()
}
*/



function arbrechangecarte(n){
//menuBar.hideSubMenus()
j=0
for(i=0;i<mapX.length;i=i+5){

if(n==mapX[i+3]){changecarte(j+1);i=mapX.length}
j=j+1
}
}
var translibelmapX=new Array()
var numcarte
var radarclic=0
/*change la carte en cours  et actualise la variable libelmap issus dufichiuer mapX ou mapXIliade.js ; et gère l'affichage d'infocarte <=> cartO-vierge0-encaps.htm*/
function changecarte(a){
//menuBar.hideSubMenus()
//indicateurs d'affichage des menus icones et graphs


if(radarclic==1){

menucom(menuencaps,listpubcartovision);
encapsencours='Sommaire';
change_site();

//changepage('option1')//changepage('option1')
editeurOuiNon=0
top.frames.Num0txt.location.href="HYPERTEXTES-tous/cartO-Sommaire-encaps.htm"
setTimeout("changecarte2("+a+")",2000)
}else{changecarte2(a)}
}
function changecarte2(a){

//alert("xxxxxxxxxxxxxxx")
selectOnglet('center',1)
top.document.getElementById("cartu").style.visibility="visible"
top.document.getElementById("encadru").style.visibility="visible"
top.document.getElementById("iconu").style.visibility="hidden"
top.document.getElementById("fondu").style.visibility="hidden"
top.document.getElementById("fico").style.visibility="hidden"
if(editeurOuiNon==1){
top.frames.Num0txt.document.getElementById("cartu").style.visibility="visible"
top.frames.Num0txt.document.getElementById("encadru").style.visibility="visible"
top.frames.Num0txt.document.getElementById("iconu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("fondu").style.visibility="hidden"
top.frames.Num0txt.document.getElementById("f-ico").style.visibility="hidden"
}
top.frames.Num0.onesansfondx()
if(radarclic!=1){
top.frames.Num0txt.changecartencours(a)
}else{top.frames.Num0.kx0()}
top.frames.Num0.pilote.changecarteiciX(a)
translibelmapX=libelmap[a-1]
numcarte=a
//var carteici=top.frames.Num0.returnchoixcartela("return choixcartela")
var carteici=top.frames.Num0txt.location.href

if(carteici.search('sommaire')>0 || (carteici.search('Sommaire')>0 || carteici.search('Projet')>0 || (carteici.search('vierge0')>0 ))& editeurOuiNon==0){top.frames.Num0txt.location.href="cartO-vierge0-encaps.htm"}//mode expert
if(indicinfocarte==1 & editeurOuiNon==0){top.frames.Num0txt2.location.href="cartO-vierge0-encaps.htm"}//mode hypertexte lorsque infocarte est affiché
radarclic=0
}
/* transmet les paramètres d'info contenus dans libelmap  au fichier cartO-vierge0-encaps.htm ouvert dans la frame Num0txt dans la eastpane */
function transnumcarte(){
return numcarte
}
function translibelmap(){

return translibelmapX
}
//----------------------------------------------images fond et devant6666666666666666666666666
function changeimagefond(a){
//alert("ici dans A0 serpent encaps.html")
if(top.frames.Num0.imagesfond.document.menufond){
top.frames.Num0.imagesfond.document.menufond.choix.selectedIndex=a
top.frames.Num0.imagesfond.change()
}
}
function menusimage(){
document.getElementById("imf").parentNode.innerHTML='<a id="imf" href="#"><dt onmouseover="ouvHelp(\'imagefondX\')">Images/fond</dt></a><ul width="180">'
var menimag=''
mappocoord=top.frames.Num0.frames.paramcarte.transma("return mappocoord")
if(mappocoord[10]==1){
var Xdataimagefond=top.frames.Num0.frames.paramcarte.transDATAimagesfond("return DATAimagesfond")
menimag='<a id="imf" href="#"><dt onmouseover="ouvHelp(\'imagefondX\')">Images/fond</dt></a><ul width="180">'
for(i=0;i<Xdataimagefond.length;i++){
menimag+='<li id="5000311'+i+'" ><a href="#"><dt onclick="changeimagefond('+(i+1)+')">'+Xdataimagefond[i]+'</dt></a></li>'
//alert(Xdataimagefond[i])
if(i==Xdataimagefond.length-1){}
}
menimag+='</ul>'
document.getElementById("imf").parentNode.innerHTML=menimag
}
}
//-----------------------fin images fonds et devant



var innerici=""

//-----------------------------------début des menus icones et graph---------------------------------------------------------------------------------
//indicateurs d'affichage des menus icones et graphs
var icoX
var icoY
var grap1
var grap2

function complementOptionicoX(j,nbico,born,longtextoption){
innerici=""
if((j+1)*born>nbico){var bplus=nbico}else{var bplus=(j+1)*born}
		for(i=j*born;i<bplus;i++){
		var datux=top.frames.Num0.tab.document.getElementsByTagName("option")[i].firstChild.data;
		var colordatux=top.frames.Num0.tab.document.getElementsByTagName("option")[i].style.color
		innerici+='<li id="5000211'+j+''+(i+1)+'" ><a href="javascript:tailleico=0;document.menua222.choix222.selectedIndex=0;regulZ2etsansfond();change222();commandesvisibles();top.frames.Num0.frames.datacarte.iconeoucadre2();top.frames.Num0.tab.changeicoiciX('+i+')"  title="'+datux+'" ><dt style="color:'+colordatux+'">'+datux.substr(0,longtextoption)+'</dt></a></li>';
		}
	
document.getElementById("SP5000211"+j).parentNode.innerHTML=innerici
}
var defalc
function changeIconeX(){
//alert("changeicone")
tailleico=0
//menusimage()
//alert("iconeX")
document.getElementById("innerDiv").innerHTML=''
translibelmapX=libelmap[top.frames.Num0.pilote.document.menu.popup.selectedIndex-1]
numcarte=top.frames.Num0.pilote.document.menu.popup.selectedIndex
ouvmenurecherche(numcarte)
innerici=""
document.getElementById("5000211").innerHTML='';
var rg=0
innerici='<a href="#"><dt onmouseover="ouvHelp(\'menuiconeX\')">Icone X</dt></a><ul id="trac" width="300">';
var nbico=top.frames.Num0.tab.document.getElementsByTagName("option").length;

var born=30
//defalc=parseInt(nbico/30)
if(nbico<born){born=nbico; var inf=1}else{var inf=0}
var longtextoption=40
for(j=1;j<parseInt(nbico/(born))+1;j++){
if(j==1){
if(nbico>=born){var nbico1=born;rg=j;
innerici+='<li><a href=""></a></li>'+'<li id="5000211'+(1+(rg-1))+'" ><a href="#">'
if(inf==0){innerici+='suite(1)'}
innerici+='</a><ul width="300"><span id="SP5000211'+(1+(rg-1))+'"></span></ul></li>';
}else{nbico1=nbico}
}else{
if(nbico>=j*born){rg=j;

innerici+='<li id="5000211'+(1+(rg-1))+'" ><a href="#">suite('+j+')</a><ul width="300"><span id="SP5000211'+(1+(rg-1))+'"></span></ul></li>';
}

}
}


		for(i=1;i<nbico1;i++){

		var datux=top.frames.Num0.tab.document.getElementsByTagName("option")[i].firstChild.data;
		var colordatux=top.frames.Num0.tab.document.getElementsByTagName("option")[i].style.color
		innerici+='<li id="5000211'+(i+1+rg)+'" ><a href="javascript:tailleico=0;commandesvisibles();regulZ2etsansfond();change222();top.frames.Num0.frames.datacarte.iconeoucadre2();top.frames.Num0.tab.changeicoiciX('+i+')" title="'+datux+'" ><dt style="color:'+colordatux+'">'+datux.substr(0,longtextoption)+'</dt></a></li>';
		}
innerici+='</ul>'
document.getElementById("5000211").innerHTML=innerici


for(j=1;j<rg+1;j++){


complementOptionicoX(j,nbico,born,longtextoption)

}

var tout=document.getElementById("menuModel").parentNode.innerHTML
document.getElementById("northContent").innerHTML='<div id="menuBarContainer"><div id="innerDiv"><div class="DHTMLSuite_pane_collapsedInner"><div class="buttonDiv"></div></div></div>'

document.getElementById("travailx").innerHTML=tout
document.getElementById("5000212").innerHTML='';
//indicateurs d'affichage des menus icones et graphs
icoX1()

menubarreici()


}
/* --------------------------------------------------------------------------------------------------------ICONE Y --------------------------------------------------------------------------------*/


function complementOptionicoY(j,nbico,born,longtextoption){
innerici=""
if((j+1)*born>nbico){var bplus=nbico}else{var bplus=(j+1)*born}
		for(i=j*born;i<bplus;i++){
		var datux=top.frames.Num0.tab2.document.getElementsByTagName("option")[i].firstChild.data;
				var colordatux=top.frames.Num0.tab2.document.getElementsByTagName("option")[i].style.color
if(colordatux=="navy"){colordatux="red"}
if(colordatux=="green"){colordatux="brown"}
		innerici+='<li id="5000212'+j+''+(i+1)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre2();top.frames.Num0.tab2.changeicoiciX('+i+')"  title="'+datux+'" ><dt style="color:'+colordatux+'">'+datux.substr(0,longtextoption)+'</dt></a></li>';
		}
document.getElementById("SP5000212"+j).parentNode.innerHTML=innerici
}

function changeIconeY(){
tailleico=0
//alert("iconeY")
innerici=""
document.getElementById("5000212").innerHTML='';
var rg=0
innerici='<a href="#"><dt onmouseover="ouvHelp(\'menuiconeY\')" style="color:red">Icone Y</dt></a><ul   width="300">';
var nbico=top.frames.Num0.tab2.document.getElementsByTagName("option").length;

var born=30
var longtextoption=40
if(nbico<born){born=nbico; var inf=1}else{var inf=0}
for(j=1;j<parseInt(nbico/born)+1;j++){
if(j==1){
if(nbico>=born){var nbico1=born;rg=j;
innerici+='<li  id="5000212'+(1+(rg-1))+'" ><a href="#">'
if(inf==0){innerici+='suite(1)'}
innerici+='</a><ul width="300"><span id="SP5000212'+(1+(rg-1))+'"></span></ul></li>';
}else{nbico1=nbico}
}else{
if(nbico>=j*born){rg=j;
innerici+='<li id="5000212'+(1+(rg-1))+'" ><a href="#">suite('+j+')</a><ul width="300"><span id="SP5000212'+(1+(rg-1))+'"></span></ul></li>';
}

}
}


		for(i=1;i<nbico1;i++){

		var datux=top.frames.Num0.tab2.document.getElementsByTagName("option")[i].firstChild.data;
		var colordatux=top.frames.Num0.tab2.document.getElementsByTagName("option")[i].style.color
if(colordatux=="navy"){colordatux="red"}
if(colordatux=="brown"){colordatux="violet"}
		innerici+='<li id="5000212'+(i+1+rg)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre2();top.frames.Num0.tab2.changeicoiciX('+i+')" title="'+datux+'" ><dt style="color:'+colordatux+'">'+datux.substr(0,longtextoption)+'</dt></a></li>';
		}
innerici+='</ul>'
document.getElementById("5000212").innerHTML=innerici

for(j=1;j<rg+1;j++){
complementOptionicoY(j,nbico,born,longtextoption)

}
var tout=document.getElementById("menuModel").parentNode.innerHTML
document.getElementById("northContent").innerHTML='<div id="menuBarContainer"><div id="innerDiv"><div class="DHTMLSuite_pane_collapsedInner"><div class="buttonDiv"></div></div></div>'
document.getElementById("travailx").innerHTML=tout
icoY1()
menubarreici()
//indicateurs d'affichage des menus icones et graphs



}

/* -------------------------------------------------------------------------------------------------------Graphique 1 --------------------------------------------------------------------------------*/
function complementOptionGraph1(j,nbico,born,longtextoption){
innerici=""
if((j+1)*born>nbico){var bplus=nbico}else{var bplus=(j+1)*born}
		for(i=j*born;i<bplus;i++){
		var datux=top.frames.Num0.frames.pilote.framemenu.document.getElementsByTagName("option")[i].firstChild.data;
		innerici+='<li id="5000213'+j+''+(i+1)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre1();top.frames.Num0.frames.pilote.framemenu.changemenugraph1('+i+')"  title="'+datux+'" >'+datux.substr(0,longtextoption)+'</a></li>';
		}
document.getElementById("SP5000213"+j).parentNode.innerHTML=innerici
}
function changeGraph1(){
//alert("graph1")

innerici=""
document.getElementById("5000213").innerHTML='';
var rg=0
innerici='<a  href="#"><dt onmouseover="ouvHelp(\'menugraph1\')">Graphique1</dt></a><ul  width="300">';
var nbico=top.frames.Num0.frames.pilote.frames.framemenu.document.getElementsByTagName("option").length;

var born=30
if(nbico<born){born=nbico; var inf=1}else{var inf=0}
var longtextoption=40
for(j=1;j<parseInt(nbico/born)+1;j++){
if(j==1){
if(nbico>=born){var nbico1=born;rg=j;
innerici+='<li id="5000213'+(1+(rg-1))+'" ><a href="#">'
if(inf==0){innerici+='suite(1)'}
innerici+='</a><ul width="300"><span id="SP5000213'+(1+(rg-1))+'"></span></ul></li>';
}else{nbico1=nbico}
}else{
if(nbico>=j*born){rg=j;
innerici+='<li id="5000213'+(1+(rg-1))+'" ><a href="#">suite('+j+')</a><ul width="300"><span id="SP5000213'+(1+(rg-1))+'"></span></ul></li>';
}

}
}


		for(i=1;i<nbico1;i++){

		var datux=top.frames.Num0.frames.pilote.framemenu.document.getElementsByTagName("option")[i].firstChild.data;
		
		innerici+='<li id="5000213'+(i+1+rg)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre1();top.frames.Num0.frames.pilote.framemenu.changemenugraph1('+i+')" title="'+datux+'" >'+datux.substr(0,longtextoption)+'</a></li>';
		}
innerici+='</ul>'
document.getElementById("5000213").innerHTML=innerici

for(j=1;j<rg+1;j++){
complementOptionGraph1(j,nbico,born,longtextoption)

}

var tout=document.getElementById("menuModel").parentNode.innerHTML

document.getElementById("northContent").innerHTML='<div id="menuBarContainer"><div id="innerDiv"><div class="DHTMLSuite_pane_collapsedInner"><div class="buttonDiv"></div></div></div>'
document.getElementById("travailx").innerHTML=tout
//indicateurs d'affichage des menus icones et graphs

grap11()

menubarreici()


}

/* -------------------------------------------------------------------------------------------------------Graphique 2--------------------------------------------------------------------------------*/
function complementOptionGraph2(j,nbico,born,longtextoption){
innerici=""
if((j+1)*born>nbico){var bplus=nbico}else{var bplus=(j+1)*born}
		for(i=j*born;i<bplus;i++){
		var datux=top.frames.Num0.frames.pilote.framemenu1.document.getElementsByTagName("option")[i].firstChild.data;
		innerici+='<li id="5000214'+j+''+(i+1)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre1();top.frames.Num0.frames.pilote.framemenu1.changemenugraph2('+i+')"  title="'+datux+'" >'+datux.substr(0,longtextoption)+'</a></li>';
		}
document.getElementById("SP5000214"+j).parentNode.innerHTML=innerici
}
function changeGraph2(){
//alert("graph2")

innerici=""
document.getElementById("5000214").innerHTML='';
var rg=0
innerici='<a href="#"><dt onmouseover="ouvHelp(\'menugraph2\')">Graphique2</dt></a><ul  width="300">';
var nbico=top.frames.Num0.frames.pilote.frames.framemenu1.document.getElementsByTagName("option").length;

var born=30
if(nbico<born){born=nbico; var inf=1}else{var inf=0}
var longtextoption=40
for(j=1;j<parseInt(nbico/born)+1;j++){
if(j==1){
if(nbico>=born){var nbico1=born;rg=j;
innerici+='<li id="5000214'+(1+(rg-1))+'" ><a href="#">'
if(inf==0){innerici+='suite(1)'}
innerici+='</a><ul width="300"><span id="SP5000214'+(1+(rg-1))+'"></span></ul></li>';
}else{nbico1=nbico}
}else{
if(nbico>=j*born){rg=j;
innerici+='<li id="5000214'+(1+(rg-1))+'" ><a href="#">suite('+j+')</a><ul width="300"><span id="SP5000214'+(1+(rg-1))+'"></span></ul></li>';
}

}
}


		for(i=1;i<nbico1;i++){

		var datux=top.frames.Num0.frames.pilote.framemenu1.document.getElementsByTagName("option")[i].firstChild.data;
		innerici+='<li id="5000214'+(i+1+rg)+'" ><a href="javascript:top.frames.Num0.frames.datacarte.iconeoucadre1();top.frames.Num0.frames.pilote.framemenu1.changemenugraph2('+i+')" title="'+datux+'" >'+datux.substr(0,longtextoption)+'</a></li>';
		}
innerici+='</ul>'
document.getElementById("5000214").innerHTML=innerici

for(j=1;j<rg+1;j++){
complementOptionGraph2(j,nbico,born,longtextoption)

}

var tout=document.getElementById("menuModel").parentNode.innerHTML

document.getElementById("northContent").innerHTML='<div id="menuBarContainer"><div id="innerDiv"><div class="DHTMLSuite_pane_collapsedInner"><div class="buttonDiv"></div></div></div>'
document.getElementById("travailx").innerHTML=tout
//indicateurs d'affichage des menus icones et graphs

grap21()
menubarreici()


}








</script>


<script language="javascript">
document.write('<title>'+titreA0+'</title>')
</script>
		 <script type="text/javascript" src="demo-pane-splitter_fichiers/dhtml-suite-for-applications.js?updated=1234567890"></script >



	<script type="text/javascript" src="demo-pane-splitter_fichiers/dhtmlSuite-dynamicContent.js?updated=1234567890"></script>



	<style type="text/css">
	/* CSS for the demo. CSS needed for the scripts are loaded dynamically by the scripts */
	h1{
		margin-top:0px;
	}
	#northContent{
		background-color:#c4dcfb;
		border-left:0px;
	}
	#menuBarContainer{
		width:99%;
	}
	h3{
		margin-top:30px;
	}
	.DHTMLSuite_paneContent .paneContentInner p{	/* A div inside .DHTMLSuite_paneContent. Add styling to it in case you want some padding */
		margin-top:0px;
	}
	html,body{
		width:100%;
		height:100%;
		margin:0px;
		padding:0px;
		font-family:arial;
		font-size:12px;
	}
	#by_dhtmlgoodies{
		position:absolute;
		right:10px;
		top:2px;
	}
	#by_dhtmlgoodies img{
		border:0px;
	}
	.addMenuMap{
	border:0px solid black ; /* #9cbdff */
	position:absolute;top:4px;
	left:450px;z-index:100000
	}

	.addMenuMap2{
	visibility:visible;
background-color:white;	/* #c4dcfb Light blue background color */
border-top:1px solid black ; /* #9cbdff */
}
a.tooltip img {
  border:0;
  opacity: 1;
/*  filter:alpha(opacity=100);*/
  }
a.tooltip:hover img {
  border:0;
  opacity: 0.6;
 /* filter:alpha(opacity=60);*/
  }
a.tooltip em {
    display:none;
	font-family:verdana, arial, Sans-serif;
/*font-weight:none;*/
font-size:11px;
}
a.tooltip:hover {
    border: 0;
    position: relative;
    z-index: 500;
    text-decoration:none;
}
a.tooltip:hover em {
    font-style: normal;
    display: block;
    position: absolute;
    top: 20px;
    left: -10px;
    padding: 5px;
    color: #ffffff;
    border: 0px;
    background: transparent;
	background-image: url('icones/tooltip.png');
	background-repeat: repeat-x;
    width:120px;
}
a.tooltip2 img {
  border:0;
  opacity: 1;
  /*filter:alpha(opacity=100);*/
  }
  
a.tooltip2:hover img {
  border:0;
  opacity: 0.6;
 /* filter:alpha(opacity=60);*/
  }

.tooltip2 em {
    display:none;
	font-family:verdana, arial, Sans-serif;
/*font-weight:none;*/
font-size:11px;
}

.tooltip2:hover {
    border: 0;
    position: relative;
    z-index: 500;
    text-decoration:none;
}

.tooltip2:hover em {
    font-style: normal;
    display: block;
    position: absolute;
    top: 13px;
    left: -10px;
    padding: 5px;
    color: #ffffff;
    border: 0px;
    background: transparent;
	background-image: url('icones/tooltip2.png');
	background-repeat: repeat;
    width:200px;
}
.tttt em {
	
    font-style: normal;
    display: block;
    /*position: relative;*/
	position: absolute;
    top: 33px;
    left: 240px;
    padding: 5px;
    color:#ffffff;
    border: 0px;
    background: transparent;
	background-image: url('icones/tooltip2.png');
	background-repeat: repeat;
    width:200px;
}



.deroul {
    font-style: normal;
    color: #ffffff;
    border: 0px;
    background: #2e3f50;
    width:120px;
}
.Tbouton {
	 color:#000000;
	 vertical-align: top;
	 font-size:11px;
	 padding:5px;
	 border:1px dotted #232323;
	 background-color: #d5d5d5;
	 font-family: Verdana, Arial;

}
.Tbouton:hover{
	color:#FFFFFF;
	 border:1px solid #00a2ff;
	 background-color: #000000;
}


	</style>

	<script type="text/javascript">
	var DHTML_SUITE_THEME = 'blue';	// SPecifying gray theme

	</script>


	<link type="text/css" media="screen" rel="stylesheet" href="demo-pane-splitter_fichiers/menu-item.css"><link type="text/css" media="screen" rel="stylesheet" href="demo-pane-splitter_fichiers/pane-splitter.css"><link type="text/css" media="screen" rel="stylesheet" href="demo-pane-splitter_fichiers/menu-bar.css">

<div style="position:absolute;top:0px"><a name="touthaut"></a></div>
<div style="position:fixed;top:0px;left:0px">
<iframe id="commande1" name="commande1" width=0 height="0px" frameborder=0 src="RIEN-COMMANDE.htm"></iframe><span id="travailx"></span>
<iframe style="width: 0px; height: 0px;" id="recscenario" name="recscenario" frameborder=0 src="scenario.html"></iframe>
</div>
<!-- START DATASOURCES FOR THE PANES -->
<div id="northContent"><!--  ______________________________________________début de  pane id=northContent___content : barre de menu____________________________________  -->

<div id="menuBarContainer"><div id="innerDiv"><div class="DHTMLSuite_pane_collapsedInner"><div class="buttonDiv"></div></div></div>




</div><!--  ______________________________________________fin de  pane id=northContent___content : barre de menu____________________________________  -->



<div id="westContent"><!--  _______________________début de  pane id=westContent ___content : tableau de commandes carte____________________________________  -->
<center>
<div style="position:absolute:top:0px">
<script>
if(logo1!=""){
document.write('<img width="150px" style="cursor:pointer" onclick="window.open(\'http://suitecairo.fr\')" src="'+logo1+'">  ')
}
if(logo2!=""){
document.write('<img src="'+logo2+'" >  ')
}
</script>
</center>
<br>
<br><div style="position:relative;top:0px">
<script>
document.write(textePaneOuest)
document.write('<center><img src="'+logo3+'" ></center>')
</script>

<!--
<input type="button" value=" essai chargecarte" onclick="arbrechangecarte('Essai Monde')"/>
<br>
-->

<script language="javascript">
function retaillepanne(largeur,b,c,d){
document.getElementById('DHTMLSuite_pane_center').style.width=largeur+"px"
}
function selectOnglet(origine,indexpane){

var pane='DHTMLSuite_pane_'+origine

document.getElementById(pane).childNodes[3].style.visibility="visible"
document.getElementById(pane).style.visibility="visible"
if(indexpane==1){var indexpane1=1;var indexpane2=2}else{var indexpane1=2;var indexpane2=1}
//onglets
document.getElementById(pane).childNodes[2].firstChild.firstChild.firstChild.childNodes[indexpane1-1].firstChild.className="paneSplitterActiveTab"
document.getElementById(pane).childNodes[2].firstChild.firstChild.firstChild.childNodes[indexpane2-1].firstChild.className="paneSplitterInactiveTab"
//content des onglets
document.getElementById(pane).childNodes[1].childNodes[indexpane1-1].setAttribute("style","display: block;visibility:visible")
document.getElementById(pane).childNodes[1].childNodes[indexpane2-1].setAttribute("style","display: block;visibility:hidden ")
//document.getElementById('centerContent2').setAttribute("style","display: block;")
//document.getElementById('centerContent').setAttribute("style","display: block; visibility: hidden;")
}
</script>
<!--
<br>
<input type="button" value=" essai selectOnglet 1" onclick="selectOnglet('east',1)"/>
<br>
<input type="button" value=" essai selectOnglet 2" onclick="selectOnglet('east',2)"/>
-->
</div>
</div>
</div><!--  _________________________________fin de  pane id=westContent____content : tableau de commandes carte____________________________________  -->

<div id="westContent2"><!--  _______________________début de  pane id=westContent2 ___content : ____________________________________  -->
<script language="javascript">
document.write('<div><div id="divmenumotcle" style="position:absolute;top:0px;left:10px;display:none;width:100%"><iframe id="framemenumotcle" name="framemenumotcle" frameborder=0 width=96% height="'+(hauteurecran-15)+'px" ></iframe></div></div>')
document.write('<div><div id="divaide" style="position:absolute;top:0px;left:10px;width:100%"><iframe id="frameaide" name="frameaide" frameborder=0 width=96% height="'+(hauteurecran-15)+'px"  ></iframe></div></div>')

</script>




</div><!--  ______________________________________________fin de  pane id=westContent2____content : ____________________________________  -->


<div id="southContent"><!--  _______________________début de  pane id=southContent ___content : ____________________________________  -->

<iframe  width=100% height=100% ></iframe>
<iframe id="FloadingBis" name="FloadingBis" width=0 frameborder=0 height="0px" ></iframe>

</div><!--  ______________________________________________fin de  pane id=southContent____content : ____________________________________  -->

<div id="southContent2"><!--  _______________________début de  pane id=southContent2 ___content : ____________________________________  -->
<table border=1 ><TR><TD>
<small>méta balises </small>
</TD><TD>
<b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="fico"  style="visibility: hidden;width:62px" value="f-ico" size="1" onclick="top.frames.recscenario.enregfico(this.value,typeicones,tailleico)" type="button">
</TD></tr><TR><TD>

<b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="encadru"  style="visibility: hidden;width:62px" value="encadre"  size="1" onclick="top.frames.recscenario.enregencadre(this.value,typeicones,tailleico)" type="button">

</TD><TD>

<b><font color="#400080" face="Arial" size="2"></font></b>
<input id="iconu" style="visibility: hidden;width:62px" value="Icones" size="1" onclick="top.frames.recscenario.enregicones(this.value,typeicones,tailleico)" type="button">

</TD></tr><TR><TD>

<b><font color="#400080" face="Arial" size="2"></font></b>
<input id="fondu" style="visibility: hidden;width:62px" value="fond" size="1" onclick="top.frames.recscenario.enregfond(this.value,typeicones,tailleico)" type="button">

</TD><TD>

<b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="cartu" style="visibility: hidden;width:62px" value="carte" size="1" onclick="top.frames.recscenario.enregcarte(this.value)" type="button"></span>
</TD></tr></table>




<table border=0 style="visibility:visible"><TR align="center"><TD >
<iframe id="validite"  name="validite" width="98px" height="20px" NORESIZE  MARGINWIDTH=0 MARGINHEIGHT=0 FRAMEBORDER=1></iframe>
</TD></tr><TR align="center" ><TD>
<input style="visibility: visible;width:99px"  type="button"  onclick="afficheguide()" value="GUIDE">
</TD></TR></table>

<form name="sel"><textarea name="textbalise" id="textbalise" input="text" style="font-family:arial;font-size:9px" rows="3" cols="43" >texte des méta balises pour hypertextes de commande des cartes</textarea></form>

</div><!--  ______________________________________________fin de  pane id=southContent2____content : ____________________________________  -->

<div id="eastContent"><!--  _______________________début de  pane id=eastContent ___content : ____________________________________  -->


<script>

var encapsencours=menuencaps[0]
function retournMenuencapsencours(){
return encapsencours
}
var encapsencoursR=listeRADAR[0]
function retournMenuencapsencoursR(){
return encapsencoursR
}




var postemp=0
function forceEncapsencours(a){// prend le titre court aprs enregistrement et lorad de la page créée ou modifiée
//alert("nouveau titre="+a)
encapsencours=a
}
function forceEncapsencoursR(a){// prend le titre court aprs enregistrement et lorad de la page créée ou modifiée
//alert("nouveau titre="+a)
encapsencoursR=a
}
var postemp=0
function forceEncapsencours(a){// prend le titre court aprs enregistrement et lorad de la page créée ou modifiée
//alert("nouveau titre="+a)
encapsencours=a
}
var indicinfocarte=0
var idover=0
var onc=0
//alert(largeurecran+15)
//left: '+(largeurecran+15)+'px;
</script>
<div style="position: absolute; height: 24px; top: 14px; "><form name="menu"><select id="selectcomment"  title="pour re-initialiser une page,selectionnez cartes et commentaires puis selectionnez de nouveau la page" name="popup" onmouseover="if(idover==0){document.menu.popup.selectedIndex=0;idover=0;}" onmouseout="if(idover==0){document.menu.popup.selectedIndex=postemp}" onchange="idover=0;change_site();" style="background-color: white; color: black;width:200px" size="1">

</select></form>
</div>
<script language="javascript">
var indicradar=0
function menucom(menuencaps,listpubcartovision){

document.getElementById("selectcomment").innerHTML=""
Xhyp=1;radarclic=0;encapsencours='Sommaire';
var O=''
j=0
//O+='<option id="option0" value="javascript:rien2()" >&nbsp;Cartes et Commentaires</option>'
				var nouveaux0=document.createElement("option")
				nouveaux0.setAttribute("value","javascript:rien2()")
				nouveaux0.setAttribute("id","option"+j)
				var nt1=document.createTextNode("  Cartes et Commentaires")
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcomment").appendChild(nouveaux0)

for(i=0;i<menuencaps.length;i++){

pos="absolute"
if(toutescartes!=''){listpubcartovision[i]="1"}
if(listpubcartovision[i]=="1"){
j=j+1
/*
O+='<option id="option'
O+=j
var pos="relative"//position par défaut pour apparaître dans le menu



O+='" style="position:'+pos+'" onmouseover="idover=1"    onclick="this.setAttribute(\'style\',\'background-color:gray\');encapsencours=\''+menuencaps[i]+'\';"   VALUE="javascript:encapsencours=\''+menuencaps[i]+'\';a='
O+="'option"+j+"'"
O+=';changepage(a)">'
O+=j
O+="-"
O+=menuencaps[i]
O+='</option>'
*/
				var nouveaux0=document.createElement("option")
				nouveaux0.setAttribute("value","javascript:encapsencours='"+menuencaps[i]+"';a='option"+j+"';changepage(a)")
				nouveaux0.setAttribute("id","option"+j)
				nouveaux0.setAttribute("style","position:"+pos)
				nouveaux0.setAttribute("onmouseover","idover=1")
				nouveaux0.setAttribute("onclick","this.setAttribute('style','background-color:gray');encapsencours='"+menuencaps[i]+"';")
				var nt1=document.createTextNode(j+"-"+menuencaps[i])
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcomment").appendChild(nouveaux0)
}
}

//O+='<option id="option'+(j+1)+'"   VALUE="javascript:chargevierge0()">info carte</option>'
				var nouveaux0=document.createElement("option")
				nouveaux0.setAttribute("value","javascript:chargevierge0()")
				nouveaux0.setAttribute("id","option"+(j+1))
				var nt1=document.createTextNode("info carte")
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcomment").appendChild(nouveaux0)
if(optionwiki.length){
//alert("ici")
for(i=0;i<optionwiki.length;i++){
//O+='<option onclick="change_site()" id="travail" value="javascript:appeltravail2(\''+optionwiki[i]+'\')">&nbsp;'+optionwiki[i]+'</option>'

				var nouveaux0=document.createElement("option")
				nouveaux0.setAttribute("value","javascript:appeltravail2('"+optionwiki[i]+"')")
				nouveaux0.setAttribute("id","travail")
				nouveaux0.setAttribute("onclick","change_site()")
				var nt1=document.createTextNode(optionwiki[i])
				nouveaux0.appendChild(nt1)
				document.getElementById("selectcomment").appendChild(nouveaux0)


}
}

//document.getElementById("selectcomment").innerHTML=O
}
menucom(menuencaps,listpubcartovision)

function menucomRADAR(listeRADAR){
if(indicradar==1){
var O=''
j=0
O+='<option id="option0" value="javascript:rien2()" >&nbsp;RADARS</option>'
for(i=0;i<listeRADAR.length;i++){

pos="absolute"

//if(listpubcartovision[i]=="1"){
j=j+1
O+='<option id="option'
O+=j
var pos="relative"//position par défaut pour apparaître dans le menu



O+='" style="position:'+pos+'" onmouseover="idover=1"    onclick="indicouvencoursR=1;this.setAttribute(\'style\',\'background-color:gray\');encapsencoursR=\''+listeRADAR[i]+'\';"   VALUE="javascript:encapsencoursR=\''+listeRADAR[i]+'\';a='
O+="'option"+j+"'"
O+=';changepageR(a)">'
O+=j
O+="-"
O+=listeRADAR[i]
O+='</option>'
}

//}




document.getElementById("selectcomment").innerHTML=O
}
indicradar=1
}
//menucomRADAR(listeRADAR)



function menuARTICLEScom(menuencapsA){
Xhyp=0;radarclic=0;encapsencours='Sommaire';
var O=''
j=0
O+='<option id="option0" value="javascript:rien2()" >&nbsp;Textes et notes</option>'
for(i=0;i<menuencapsA.length;i++){

pos="absolute"

if(listpubcartovisionA[i]=="1"){
j=j+1
O+='<option id="option'
O+=j
var pos="relative"//position par défaut pour apparaître dans le menu



O+='" style="position:'+pos+'" onmouseover="idover=1"    onclick="this.setAttribute(\'style\',\'background-color:gray\');encapsencours=\''+menuencapsA[i]+'\';"   VALUE="javascript:encapsencours=\''+menuencapsA[i]+'\';a='
O+="'option"+j+"'"
O+=';changepage(a)">'
O+=j
O+="-"
O+=menuencapsA[i]
O+='</option>'

}
}

O+='<option id="option'+(j+1)+'"   VALUE="javascript:chargevierge0()">info carte</option>'

if(optionwiki.length){
//alert("ici")
for(i=0;i<optionwiki.length;i++){
O+='<option onclick="change_site()" id="travail" value="javascript:appeltravail2(\''+optionwiki[i]+'\')">&nbsp;'+optionwiki[i]+'</option>'
}
}

document.getElementById("selectcomment").innerHTML=O
}
















var largtext
if(largeurecran>705){largtext=280+3.5*(largeurecran-705)/10}else{largtext=280}
//left: '+(largeurecran+15)+'px; 
document.write('<div onmouseover="top.ouvHelp(\'hypert\');idover=0" style="position: absolute; top: 50px;"><iframe  id="Num0txt" name="Num0txt"  noresize="" marginwidth="0" marginheight="0" style="border-color: white;" frameborder="0" height="'+(hauteurecran+33)+'px" scrolling="yes" width="'+largtext+'"   ></iframe></div>') 
//src="HYPERTEXTES-tous/cartO-'+menuencaps[0]+'-encaps.htm"

//left: '+(largeurecran+15)+'px;


document.write('<div style="position: absolute;  top: 50px;"><iframe  id="Num0txt2" name="Num0txt2" noresize="" marginwidth="0" marginheight="0" style="border-color: white;visibility:visible" frameborder="0" height="0px" scrolling="yes" width="0"></iframe></div>')

</script>
</div><!--  ______________________________________________fin de  pane id=eastContent____content : ____________________________________  -->


<div id="eastContent2"><!--  __________________________début de  pane id=eastContent2____content : ____________________________________  -->
<script language="javascript">
document.write('<iframe id="editMenu" frameborder=0 name="editMenu" width=100% height="'+(hauteurecran-35)+'px"  ></iframe>')//
</script>
</div><!--  ______________________________________________fin de  pane id=eastContent2____content : ____________________________________  -->


<div id="centerContent2"><!--  ________________________début de  pane id=centerContent2____content : ____________________________________  -->

<script language="javascript">

document.write('<iframe id="trees" name="trees" noresize="" marginwidth="0" marginheight="0" style="border-color: white;" frameborder="0" height="'+(hauteurecran-30)+'px" scrolling="yes" width="'+(largeurecran-8)+'px"></iframe>')
</script>


</div><!--  ______________________________________________fin de  pane id=centerContent2____content : ____________________________________  -->
<!--
<div id="centerContent3"><!--  ________________________début de  pane id=centerContent2____content : ____________________________________  -->
<!--
</div><!--  ______________________________________________fin de  pane id=centerContent2____content : ____________________________________  -->

<div id="centerContent"><!--  _________________________début de  pane id=centerContent ____content : GAIAMUNDI____________________________________  -->
<script  language="JavaScript1.2">



var correctwidth=800
var correctheight=600


</script>


<script language="javascript">
var Iliade=top.retourneIliade("return Iliade")
if(Iliade=="Iliade"){
document.write('<div style="position: absolute; left: 0px; top: 0px;"><iframe ')}else{
document.write('<div style="position: absolute; left: 0px; top: 0px;"><iframe src="cartO2encapsule.htm"')}//src="cartO2encapsuleILIADE.htm"
document.write(' id="Num0" name="Num0" style="border-color: white;" noresize="" marginwidth="0" marginheight="0" frameborder="1" height="'+(hauteurecran-4)+'px" scrolling="no" width="'+(largeurecran-8)+'px"></iframe></div>')

</script>
<div id="divloading" style="position:absolute;top:-1000px;left:400px;color:gray;visibility:visible;z-index:100000"><center><img id="loading" style="background-color:white;" width=60 border="0px" src="loading.gif"><br>CHARGEMENT en COURS</center></div>


</div><!--  ____________________________________________FIN de id=centerContent ___content : GAIAMUNDI____________________________________  -->
<!--  ____________________________________________debut munus___________________________________  -->
<!--  ____________________________________________debut munu save___________________________________  -->
<span id="origin" class="truc">
<ul id="menuModel" style="display: none;font-size:11px;font-family:arial">

	<!--
	<li id="50000" jsfunction="saveWork()" itemicon="disk.gif"><a href="#" title="Choisir le MODE :  expert ou hypertexte">Mode</a>
		<ul width="150">
			<li id="500001"><a href="#" title="Save your work">Mode Expert</a></li>
			<li id="500002"><a href="#">Mode Hypertexte</a></li>

			<li id="500004" itemtype="separator"></li>

			<li id="500003"><a href="#">Guide</a>
				<ul width="130">
					<li id="5000031"><a href="#">Project</a>
					</li><li id="5000032"><a href="#">Template</a>
					</li><li id="5000033"><a href="#">File</a>

				</li></ul>
			</li>

		</ul>
	</li>
	-->
	<!--  ____________________________________________fin mENU sAVE___________________________________  -->
	<!--  ____________________________________________debut menu maps___________________________________  -->

	<li id="50001" ><a href="#">Cartes</a>
		<ul width="130" >

		<script language="javascript">
		var indicfinbaliseU
var comptemodo=-1
		var j=0
		var j2=0
		var bornmaps=30
		var Kmodo=parseInt(mapX.length/bornmaps)
		var modo=mapX.length/bornmaps
		if (modo>0 && Kmodo>0){Kmodo+=1}
		
		for(i=0;i<mapX.length;i=i+5){
	

			//
			if(toutescartes!=''){
			
			if(	j%bornmaps==0){
	comptemodo+=1
					document.write('<li id="500011'+comptemodo+'" ><a href="#">n° ['+(comptemodo*bornmaps)+' - '+(comptemodo*bornmaps+bornmaps-1)+']</a>')
					
		document.write('<ul width="550px">ul'+comptemodo)	
			
			}
				j=j+1
			if(typeof(libelmap[i/5][2].split("]<br/>[")[3])=='undefined'){var contX="N.A."}else{var contX=(libelmap[i/5][2].split("]<br/>[")[3])}
			document.write('<li id="5000111'+(j+1)+'" ><a href="#"  ><DT onclick="javascript:chg222=0;tailleico=0;dispoExpert();changecarte('+j+')" title="Répertoire : '+mapX[i+4]+' - Contenu : '+(contX)+'">'+(i/5+1)+' - '+mapX[i+3]+'</DT></a></li>')
			
			
	if(	(j-1)%bornmaps==(bornmaps-1)){
									document.write('</ul>')			
									document.write('</li>')			
									
	
									}else{
									if(i==(mapX.length-5)){
									document.write('</ul>')			
									document.write('</li>')	
									
									
									}
									}				
			
			
			
			
			
			}else{
			

			if(libelmap[i/5][5]!="none"){
		
	if(	j2%bornmaps==0){
	indicfinbaliseU=0
	comptemodo+=1
					document.write('<li id="500011'+comptemodo+'" ><a href="#">n° ['+(comptemodo*bornmaps+1)+' - '+(comptemodo*bornmaps+bornmaps)+']</a>')
					
		document.write('<ul width="550px">ul'+comptemodo)	
						
					
					//document.write('qqq  ='+comptemodo)		
						}	
				j2=j2+1
			j=j+1
			if(typeof(libelmap[i/5][2].split("]<br/>[")[3])=='undefined'){var contX="N.A."}else{var contX=(libelmap[i/5][2].split("]<br/>[")[3])}
			document.write('<li id="5000111'+(j2+1)+'"  ><a href="#"  ><DT  onclick="javascript:chg222=0;tailleico=0;dispoExpert();changecarte('+(i/5+1)+')" title="Numéro : '+j2+' - Répertoire : '+mapX[i+4]+' - Contenu : '+contX+' - (Index interne : '+(i/5+1)+') ">'+j2+' - '+mapX[i+3]+'</DT></a></li>')
			
			
	if(	(j2-1)%bornmaps==(bornmaps-1)){
									document.write('</ul>')			
									document.write('</li>')			
									indicfinbaliseU=1
	
									}else{
									if(i==(mapX.length-5)){
									document.write('</ul>')			
									document.write('</li>')	
									indicfinbaliseU=1
									
									}
									}	
						
			
			
			}
			
			
			}
			}
									if(indicfinbaliseU==0){
									document.write('</ul>')			
									document.write('</li>')	
									indicfinbaliseU=1
									
									}
var casici=0 // cas du démarrage
function MotPas(){
idmt=0
for(i=0;i<mtpas.length;i++){
if(mt2==mtpas[i]){idmt=1;mt=mt2}

}
if(idmt!=1){
mt=prompt('saisissez votre mot de passe',mt2);

for(i=0;i<mtpas.length;i++){
if(mt==mtpas[i]){idmt=1}

}
}
var retconfirm=false
if(idmt!=1){
retconfirm=confirm("désolé, votre mot de passe est incorrect, voulez vous recommencer?");
if(retconfirm==true){
MotPas()
//window.location.href=aw2
}else{
if(casici==0){
window.location.href="http://www.gaiamundi.fr"
}else{}
}
}
casici=1
}
MotPas()

			</script>
			<!--

			-->
		</ul>
	</li>

		<!--  ____________________________________________fin mENU mAPS___________________________________  -->
	<li id="50003" itemtype="separator"></li>
		<!--  ____________________________________________dEBUT mENU icONES 1 (=X)__________________________________ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  -->
	<li id="50002"><a href="#"><dt onmouseover="ouvHelp('menudonnees')" >Données</dt></a>
		<!--ul width="100"-->
			<!--li id="500021" ><a href="#">Ponctuels et graphiques encadrés</a-->
				<ul  width="120" style="font-size:5px">
				
					<li id="5000211" ><a href="#"><dt onmouseover="ouvHelp('menuiconeX')">Ponctuel (X)</dt></a>   
					<!--ul width="250">
					<li id="50002111"><a href="#">données non chargées</a></li>
					</ul -->
				<!--/li-->
				


				<li id="5000212" ><!-- Ici sera inséré le menu icone Y lorsqu'on aura s"lectionné un icon,e X -->
				</li>




					<li id="5000213" ><a  href="#"><dt  onmouseover="ouvHelp('menugraph1')">Graphiques encadré 1</dt></a></li>
					<li id="5000214" ><a href="#"><dt  onmouseover="ouvHelp('menugraph1')">Graphiques encadré 2</dt></a></li>


<!--					<li id="5000215"><a href="#">Table widget</a>
						<ul width="190">
							<li id="50002151" jsfunction="openPage('center','tutTableWidget1','includes/tutorial-tableWidget1.inc','Tutorial - Table widget (sort data on client)','Table widget(client)')"><a href="#">Table widget(client sort)</a></li>
							<li id="50002152" jsfunction="openPage('center','tutTableWidget2','includes/tutorial-tableWidget2.inc','Tutorial - Table widget (sort data on server)','Table widget(server)')"><a href="#">Table widget(server sort)</a></li>
						</ul>
					</li>
-->


				<!--/ul-->
			</li>
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->			
	<!--li id="500031" ><a href="#">Images</a>
				<ul  width="125" style="font-size:5px">
					<li id="5000311" ><a id="imf" href="#"><dt onmouseover="ouvHelp('imagefondX')">Images/fond</dt></a>
					
					
				</li-->


				<!--li id="5000312" ><a href="#"><dt onmouseover="ouvHelp('imagefaceX')">Images/face</dt></a>
				
				</li>



				</ul>
			</li-->		
			
			
			
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<li id="500021" jsfunction="nouvellecarte()"><a href="#"><span style="color:blue;display:none">Menu(Recherche)</span></a></li>
</ul>
	</li>
	
	<!--  ____________________________________________fIN  mENU icONES 1 (=X)__________________________________  -->
		<li id="50005" itemtype="separator"></li>
<script language="javascript">
			
			
		document.write(docu)	
			
		
	
	</script>
<li id="50007" itemtype="separator"></li>

	<li id="500061"><a href="#">Edition</a>
		<ul width="200">
		<li id="5000614"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
<!-- -->			
		<!--li id="5000615" ><a  href="#"><img width="10px"   src="petit_cube.png"><span  style="color:blue;font-weight:bold">&nbsp;Hypertextes et Notes</span></a>
		
		<ul width="200"-->
		<!--li id="50006151" jsfunction="Xhyp=1;radarclic=0;indica0R();menucom(menuencaps,listpubcartovision);document.getElementById('DHTMLSuite_menuItem5000621').style.display='none';document.getElementById('DHTMLSuite_menuItem5000619').style.display='block';menucom(menuencaps,listpubcartovision);change_site();encapsencours='Sommaire';setTimeout('changepage(\'option1\')',500)"><a  href="#"><img width="10px"  onmouseup="Xhyp=1;menucom(menuencaps,listpubcartovision);change_site();encapsencours='Sommaire';setTimeout('changepage(\'option1\')',500)" src="petit_cube.png"><span  style="color:blue;font-weight:bold">&nbsp;Cartes et Commentaires</span></a></li-->
		
<!--li id="50006152" jsfunction="Xhyp=0;radarclic=0;indica0R();menuARTICLEScom(menuencapsA);document.getElementById('DHTMLSuite_menuItem5000621').style.display='none';document.getElementById('DHTMLSuite_menuItem5000619').style.display='block';menuARTICLEScom(menuencapsA);change_site();encapsencours='Sommaire';setTimeout('changepage(\'option1\')',500)"><a  href="#"><img width="10px"  onmouseup="Xhyp=0;menuARTICLEScom(menuencapsA);change_site();encapsencours='Sommaire';setTimeout('changepage(\'option1\')',500)" src="petit_cube.png"><span  style="color:blue;font-weight:bold">&nbsp;Textes et Notes</span></a></li-->
		
		<!--/ul>
		</li-->			

			<!--li id="5000616" jsfunction="radarclic=1;indica0();menucomRADAR(listeRADAR);document.getElementById('DHTMLSuite_menuItem5000619').style.display='none';document.getElementById('DHTMLSuite_menuItem5000621').style.display='block';menucomRADAR(listeRADAR);change_site();encapsencoursR='RADAR-0.js';setTimeout('changepageR(\'option1\')',500)"><a  href="#"><img width="10px" onmouseup="menucomRADAR(listeRADAR);change_site();encapsencoursR='RADAR-0.js';setTimeout('changepageR(\'option1\')',500)" src="petit_cube.png"><span  style="color:blue;font-weight:bold">&nbsp;Radars</a></li-->		
		
		<li id="5000617"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>
		
	
		
		
		<li id="5000619"><a href="#"><span style="color:blue;font-weight:bold"><u>Modifier Hypertextes</u></span></a>			
<ul width="200">
		
			<li id="50006151" jsfunction="ouvbloc12=1;ModifHypertexte()"><a href="#" title="modifier la page hypertexte en cours" ><dt  style="color:black" id="modifX">Modifier l'hypertexte</DT></a></li>
			<li id="50006171" jsfunction="ouvbloc12=2;ModifHypertexte()"><a href="#" title="Crér un nouvel Hypertext" ><dt   id="modifY">Nouvel hypertexte</DT></a></li>
			<li id="50006191" jsfunction="ouvbloc12=3;ModifHypertexte()"><a href="#" title="Crér un nouvel hypertexte à partir de l'actuel" ><dt    id="modifZ">Nouveau à partir de.</DT></a></li>
			</ul>
</li>	
			
			
			<!--li id="5000620" jsfunction="menucom(menuencaps,listpubcartovision);openPage('center','textEdit','includes/pane-splitter-text-edit.php','Inline text edit','Inline Text Edit')"><a href="#">mode wiki</a></li-->

			
			
			
			
<li id="5000621" ><a href="#"><span id="icirad" style="color:blue;font-weight:bold"><u>Modifier RADARS</u></span></a>			
<ul style="display:none" width="200">		
			
					<li id="50006151"  jsfunction="ouvblocR12=1;ModifHypertexteR()"><a href="#"  title="modifier la fiche RADAR en cours" ><dt style="color:black"  id="modifXR">Modifier le radar</DT></a></li>
			<!--li id="50006171" jsfunction="ouvblocR12=2;ModifHypertexteR()"><a href="#" title="Crér une nouvelle fiche RADAR" ><dt  id="modifYR">Nouveau radar</DT></a></li-->
			<li id="50006191" jsfunction="ouvblocR12=3;ModifHypertexteR()"><a href="#" title="Crér une nouvelle fiche RADAR à partir de l'actuelle" ><dt  id="modifZR">cloner le radar</DT></a></li>	
			
</ul>
</li>			
	

		<li id="5000624"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>
			
<li id="5000625"><a href="#"><span style="color:blue;font-weight:bold"><u>Gestion des DONNEES</u></span></a>
<ul width="200">
						<li id="50006252" jsfunction="loadCT('A-MANAGER-local/txt_to_html-Num0/selection.repertoire.php')"><a href="#">intégration de données</a></li>						  <li id="50006258" jsfunction="loadCT('IdCodesEtNoms.html?mtp2=admin')"><a href="#">Edition fichiers de données</a></li>

						<li id="50006251" jsfunction="loadCT('A-MANAGER-local/manager_menu_ICO_SUJET/selection.repertoire.php')"><a href="#">Menus de données</a></li>
												<!--li id="50006253" jsfunction="loadCT('A-MANAGER-local/transdata/transmenu.htm')"><a href="#">transfert de données ICI</a></li -->
						<li id="50006254" jsfunction="loadCT('A-MANAGER-local/transdata_rezo/transmenu.htm')"><a href="#">transfert de Menus REZO</a></li>
						<li id="50006255" jsfunction="loadCT('A-MANAGER-local/transdata_DBHtml/transmenu.htm')"><a href="#">transfert de données DBHtml</a></li>
						<script language="javascript">
//document.write('<li id="50006256" jsfunction="loadCT(\'A-MANAGER-local/AddColonnesEtPanier/transmenuPANIER.htm?util='+mt+'\')"><a href="#">transfert de données PANIER</a></li>')
//document.write('<li id="50006257" jsfunction="loadCT(\'A-MANAGER-local/AddColonnesEtPanier/transmenuPANIER.htm?util=public\')"><a href="#"><small><i>transfert Panier Public</i></small></a></li>')
</script>
						

						<li id="50006259" jsfunction="open('readLibelDATA-REC-MODULE-MENU.html')"><a href="#"><span style="color:blue"><b>Recherche de Menus</b> </span></a></li>
						<li id="50006257" jsfunction="window.open('tablespassage/Saisietables.htm')"><a href="#">tables de passage/mailles</a></li>
<li id="50006257" jsfunction="window.open('A-MANAGER-local/transdata_rezo/ModifRezo.html')"><a href="#">Plateformes en réseau</a></li>
						
						<li id="5000630"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
						

</ul>
</li>

<li id="5000680"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>
<script language="javascript">
document.write('<li id="5000633" jsfunction="open(\'LaRoseDesVents-1.html?util='+mt+'\')"><a href="#"><span style="color:green;font-weight:bold"><u>Rose des Vents (Web)</u></span></a></li>')
document.write('<li id="5000634" jsfunction="open(\'LaRoseDesVents-2.html?util='+mt+'\')"><a href="#"><span style="color:violet;font-weight:bold"><u>Rose des Vents (self)</u></span></a></li>')

function geojsonToGaia(){
window.open("../Depot_cartes/Fabricarte_GEOJSON_to_GAIA/index.html")	
}


</script>
						
						<li id="5000641"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>
						
						<li id="5000629" jsfunction="nouvellecarte()"><a href="#"><span style="color:blue;font-weight:bold" title="Module d'intégration d'une nouvelle carte"><u>Nouvelle Carte</u></span></a></li>gestionlistecartes()
						
						<li id="5000632" jsfunction="ModifFichecarte()"><a href="#"><span style="color:blue;font-weight:bold;font-style:italic;font-size:9px" title="modifier la fiche descriptive du dossier carte et de ses données"><u>Modifier fiche Carte</u></span></a></li>
						<li id="5000633"  jsfunction="loadCT('A-MANAGER-local/CopyMapFolder_new/lister3/transMapFolder.htm?mpt2=admin')"><a href="#"><span style="color:blue"><b>Transfert de Dossier Carte</b> </span></a></li>
						<li id="5000634"  jsfunction="loadCT('A-MANAGER-local/CopyMapFolder/lister3/transMapFolder.htm?mpt2=admin')"><a href="#"><span style="color:blue"><i>OLD Transfert Dossier Carte</i> </span></a></li>
						
						<li id="5000630"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>
						
						
						

<li id="50006421"><a href="#"><span style="color:blue;font-weight:bold"><u>Gestion Dépot_cartes</u></span></a>			
<ul width="200">
										
										<li id="500064211"  title="Créer un dossier Carte à Partir d'un fichier Geojson" jsfunction="geojsonToGaia()"><a href="#">Geojson to Gaia</a></li>
										<li id="500064212" jsfunction="gestionlistecartes()"><a href="#">Supprimer un dossier Carte</a></li>
										<li id="500064213" jsfunction="loadCT('../Depot_cartes/Fabricarte_GEOJSON_to_GAIA/telechargeGeojson/packModerate/Moderation.htm')"><a href="#">Gestion liste fichiers geojson</a></li>

</ul>						
</li>	
						<li id="5000641"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>						
<li id="5000642"><a href="#"><span style="color:blue;font-weight:bold"><u>PageCarto</u></span></a>			
<ul width="200">						
						<li id="50006420" jsfunction="loadCT('A-MANAGER-local/CREATEUR-PAGECARTO/choixModele.html')"><<a href="#">Générer PageCarto</a></li>
	
					<li id="50006421" jsfunction="open('A-MANAGER-local/CREATEUR-PAGECARTO/Onglet-PageCarto-Hypertexte/onglets.htm')"><a href="#">Editer les Hypertextes</a></li>
					<li id="50006421" jsfunction="open('A-MANAGER-local/CREATEUR-PAGECARTO/Onglet-PageCarto-Hypertexte-BLANC/onglets.htm')"><a href="#">Editer les CartoArticles</a></li>
										<li id="50006422" jsfunction="loadCT('LISTE-PAGESCARTO.htm')"><a href="#">Liens vers les PageCarto</a></li>
										<li id="50006422" jsfunction="loadCT('LISTE-CARTOARTICLES.htm')"><a href="#">Liens vers les CartoArticles</a></li>
										<li id="50006422" jsfunction="loadCT('LISTE-CARTO-MEDIUM-SANS.php')"><a href="#">Liens vers les Médium SANS</a></li>
										
</ul>						
</li>						
						<!--li id="5000628" jsfunction="loadCT('http://localhost/altercarto/BANQUE-CARTES-VIERGES/operateur/selection-dir-carte.php?orig='+window.location.href)"><a href="#">TRAVAUX Nouvelle Carte</a></li-->
						<!--li id="5000628" jsfunction="loadCT('A-MANAGER-local/dossier-carte/Ajout_Dcarte.php')"><a href="#">Ajout Carte+données</a></li-->

						
						<li id="5000630"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	

<script language="javascript">
if(document.all){}else{
document.write('<li id="5000631"><a href="#"><span style="color:blue;font-weight:bold"><u>Gestion des Sites</u></span></a>')
document.write('<ul width="220">')						
						
						document.write('<li id="50006311" jsfunction="loadCT(\'A-MANAGER-local/creation_site/creation_site.php\')"><a href="#">Créer un Nouveau site</a></li>')
						document.write('<li id="50006312" jsfunction="loadCT(\'A-MANAGER-local/creation_site/actu_site.php\')"><a href="#">Actualiser hypertextes partagés</a></li>')
						document.write('<li id="50006313" jsfunction="loadCT(\'A-MANAGER-local/creation_site/liensSites.html\')"><a href="#">liens vers les Sites</a></li>')
						document.write('<li id="50006314" jsfunction="loadCT(\'A-MANAGER-local/creation_site/actu_liste_Publication_Sites.php\')"><a href="#">Sites admis à la publication</a></li>')
						
						document.write('<li id="50006315" jsfunction="loadCT(\'A-MANAGER-local/creation_site/actu_permissionscartes_site.php\')"><a href="#">Accès aux cartes sur les sites</a></li>')
document.write('</ul>')
document.write('</li>	')
}
</script>
<li id="5000639"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
				
<!--li id="5000640" jsfunction="window.open('sauv_restau.php')"><a  href="#"><img width="10px"   src="petit_cube.png"><span  style="color:blue;font-weight:bold">&nbsp;sauvegarde & restaure</span></a></li-->						
<li id="5000640" jsfunction="MotPas();if(idmt==1){loadCT('restaure_fichier.html')}else{loadCT('vide.html')}"><a  href="#"><img width="10px"   src="petit_cube.png"><span  style="color:blue;font-weight:bold"><span title="Module de sauvegarde et de restauration">&nbsp;Restaure fichiers</span></span></a></li>	
<li id="5000641" jsfunction="MotPas();if(idmt==1){loadCT('zip_sauv_plateforme.php?url=1'+window.location.href)}else{loadCT('vide.html')}"><a  href="#"><img width="10px"   src="petit_cube.png"><span  style="color:blue;font-weight:bold"><span title="Module de sauvegarde et de restauration">&nbsp;Zip et télécharge</span></span></a></li>						

<li id="5000625"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	


						<li id="5000627" jsfunction="selectOnglet('center',2)"><a href="#">Architecture de données</a></li>
						<li id="5000628" jsfunction="selectOnglet('center',1)"><a href="#">Affichage des cartes</a></li>
						
<li id="5000629"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
<!--li id="5000649"><a href="#"><span style="color:blue;font-weight:bold"><u>Scénarios internes</u></span></a>			
<ul width="200">
						<li id="50006491" jsfunction="window.open('Drafts/Drafts.html?modif=3')"><a href="#"><span style="color:blue"> <b>Créer scénario</b></span></a></li>
						<li id="50006492" jsfunction="window.open('Drafts/Drafts2.html?modif=0')"><a href="#"><span style="color:blue"> <b>Publier scénario</b></span></a></li>	
</ul>
</li-->						
		</ul>
	</li>

<li id="50009" itemtype="separator"></li>

	<li id="5000650"><a href="#">Sytème</a>
		<ul width="150">
		<li id="5000625"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
<li id="50006501" jsfunction="redem(0)"><a href="#" title="même format">redémarrer()</a></li>
<!--li id="50006502" jsfunction="redem(1)"><a href="#" title="aléatoire">redémarrer(0)</a></li-->
<li id="50006503" jsfunction="redem(2)"><a href="#" title="ferme volet droit">redémarrer(1)</a></li>
<li id="50006504" jsfunction="redem(3)"><a href="#" title="optimisel'extensivité du volet droit (configuration de production et de travail avec l'hypertexte)">redémarrer(2)</a></li>
<li id="50006505" jsfunction="redem(4)"><a href="#" title="optimise l'espace de la carte (minimise l'hypertexte)">redémarrer(3)</a></li>
<li id="50006505" jsfunction="redem(5)"><a href="#" title="affiche au format actuel en intégrant dans le menu 'cartes' toutes les cartes occultées (s'il y en a)">toutes cartes</a></li>
<li id="5000625"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
<li id="50006506" jsfunction="etatdesMaj()"><a href="#" title="Etat des Mises à Jours"><span style="color:blue;font-weight:bold"><u>Mises à jour</u></span></a></li>
<li id="5000625"><a href="#"><span style="color:blue;font-weight:bold"><img width="10px"  src="carretransparent.gif"> <u></u></span></a></li>	
		
		</ul>
	</li>


</ul>

</span>

<!-- END DATASOURCES -->
<script type="text/javascript">
/* STEP 1 */
/* Create the data model for the panes */
var Wmxsize=400

var Esize=window.innerWidth-(largeurecran+Wsize)-20
var Emxsize=Esize+500
var Centxsize=largeurecran-5
var CenMaxsize=1200//900


var paneModel = new DHTMLSuite.paneSplitterModel();
DHTMLSuite.commonObj.setCssCacheStatus(false)
var paneWest = new DHTMLSuite.paneSplitterPaneModel( { position : "west", id:"westPane",size:Wsize,minSize:1,maxSize:Wmxsize,scrollbars:false,callbackOnCollapse:'callbackFunction',callbackOnExpand:'callbackFunction',callbackOnShow:'callbackFunction',callbackOnHide:'callbackFunction',callbackOnSlideIn:'callbackFunction',callbackOnSlideOut:'callbackFunction',callbackOnResize:'callBackFunctionResizePane' } );
paneWest.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"westContent",htmlElementId:'westContent',title:'Accueil',tabTitle:'Accueil' ,closable:false} ) );
paneWest.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"westContent2",htmlElementId:'westContent2',title:'Aide',tabTitle:'Guide d\'aide' ,closable:false } ) );


var paneEast = new DHTMLSuite.paneSplitterPaneModel( { position : "east", id:"eastPane",size:Esize,minSize:100,maxSize:Emxsize,scrollbars:true,callbackOnCollapse:'callbackFunction',callbackOnExpand:'callbackFunction',callbackOnShow:'callbackFunction',callbackOnHide:'callbackFunction',callbackOnSlideIn:'callbackFunction',callbackOnSlideOut:'callbackFunction',callbackOnResize:'callBackFunctionResizePane' } );
paneEast.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"eastContent",htmlElementId:'eastContent',title:'Mode Hypertexte',tabTitle: 'cartes commentées' ,closable:false} ) );
paneEast.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"eastContent2",htmlElementId:'eastContent2',title:'éditeur de Menus et données',tabTitle:'Zone technique' ,closable:false} ) );

//var paneEast = new DHTMLSuite.paneSplitterPaneModel( { position : "east", id:"eastPane",size:150,minSize:100,maxSize:200,scrollbars:true,callbackOnCollapse:'callbackFunction',callbackOnCloseContent:'callbackFunction',callbackOnBeforeCloseContent:'validateCloseContent' } );
//paneEast.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"eastContent",htmlElementId:'eastContent',title:'East',tabTitle: 'Tab 1' } ) );
//paneEast.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"eastContent2",htmlElementId:'eastContent2',title:'East 2',tabTitle:'Tab 2' } ) );

var paneSouth = new DHTMLSuite.paneSplitterPaneModel( { position : "south", id:"southPane",size:Ssize,minSize:Ssize,maxSize:230,resizable:true,callbackOnCollapse:'callbackFunction' ,callbackOnExpand:'callbackFunction',callbackOnShow:'callbackFunction',callbackOnHide:'callbackFunction',callbackOnSlideIn:'callbackFunction',callbackOnSlideOut:'callbackFunction',callbackOnResize:'callBackFunctionResizePane' } );
paneSouth.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"southContent",htmlElementId:'southContent',title:'South pane',tabTitle:'zz1',closable:false } ) );
paneSouth.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"southContent2",htmlElementId:'southContent2',title:'South pane2',tabTitle:'ZZ2',closable:false } ) );



var paneNorth = new DHTMLSuite.paneSplitterPaneModel( { position : "north", id:"northPane",size:35,scrollbars:false,resizable:false,collapsable:false } );
paneNorth.addContent( new DHTMLSuite.paneSplitterContentModel( { id:"northContent",htmlElementId:'northContent',title:'' } ) );

var paneCenter = new DHTMLSuite.paneSplitterPaneModel( { position : "center", id:"centerPane",size:Centxsize,minSize:100,maxSize:CenMaxsize,scrollbars:false,callbackOnCloseContent:'callbackFunction',callbackOnTabSwitch:'callbackFunction' } );
paneCenter.addContent( new DHTMLSuite.paneSplitterContentModel( { id: 'centerContent',htmlElementId:'centerContent',title:'Module d\'affichage des cartes : <b>GaïaMundi</b> - <i><small>licence GNU GPL - Copyleft [2006-2018] Coquelicot</small></i>',tabTitle: 'Affichage des cartes',closable:false } ) );
paneCenter.addContent( new DHTMLSuite.paneSplitterContentModel( { id:'centerContent2', htmlElementId:'centerContent2',title:'Arbres de données',tabTitle: 'Architecture des données',closable:false } ) );
//paneCenter.addContent( new DHTMLSuite.paneSplitterContentModel( { id:'centerContent3', htmlElementId:'centerContent3',title:'arbre du dépot',tabTitle: 'Architecture du dépot' } ) );


paneModel.addPane(paneSouth);
paneModel.addPane(paneEast);
paneModel.addPane(paneNorth);
paneModel.addPane(paneWest);
paneModel.addPane(paneCenter);


//alert(paneEast.size)
//paneEast.size=600
//paneSouth.size=100
/* STEP 2 */
/* Create the pane object */
var paneSplitter = new DHTMLSuite.paneSplitter();
paneSplitter.addModel(paneModel);	// Add the data model to the pane splitter
paneSplitter.init();	// Add the data model to the pane splitter
paneSplitter.panes[0].__collapse() //collapse de la pane Sud
//paneSouth.expand()

if(taille==4){paneSplitter.panes[3].__collapse()}

function dispoExpert(){


}





/* callbackOnBeforeCloseContent call back function for the east pane */
function validateCloseContent(modelObj,action,contentObj)
{
	var confirmMessage = 'Click OK to verify that you want to close pane';
	if(contentObj)confirmMessage = confirmMessage + ' ' + contentObj.title;
	confirmMessage = confirmMessage +' ?';
	confirmMessage= confirmMessage + '\n\nThis is a custom function defined to be a callback for the event\ncallbackOnBeforeCloseContent';
	return confirm(confirmMessage);
}

// This function opens a new tab - called by the menu items
function openPage(position,id,contentUrl,title,tabTitle,closable,onCompleteJsCode)
{
	var inputArray = new Array();
	inputArray['id'] = id;
	inputArray['position'] = position;
	inputArray['contentUrl'] = contentUrl;
	inputArray['title'] = title;
	inputArray['tabTitle'] = tabTitle;
	inputArray['closable'] = closable;
	// if(inputArray['position']=='center')inputArray['displayRefreshButton'] = true;
	if(!paneSplitter.addContent(position, new DHTMLSuite.paneSplitterContentModel( inputArray ),onCompleteJsCode )){
	};
	paneSplitter.showContent(id);

}
/* This is a demo for a call back function for the panes */
function callbackFunction(modelObj,action,contentObj)
{
	self.status = 'Event "' + action + '" triggered for pane with id "' + modelObj.id + (contentObj?'" - content id: ' + contentObj.id:'');
}


function callBackFunctionResizePane(modelObj,action,contentObj)
{

	var size = paneSplitter.getSizeOfPaneInPixels(modelObj.getPosition());

	self.status = 'Pane ' + modelObj.getPosition() + ' has been resized to ' + size.width + ' x ' + size.height + ' pixels';
}

function openClassDocumentation()
{
	var docWin = window.open('../doc/js_docs_out/index.html');
	docWin.focus();

}
</script>



<script type="text/javascript">
var menuBar
var menuModel
//indicateurs d'affichage des menus icones et graphs
icoX=1
icoY=1
grap1=1
grap2=1
function icoX1(){icoX=1}
function icoY1(){icoY=1}
function grap11(){grap1=1}
function grap21(){grap2=1}
var ouvertureinitiale=0
	function menubarreici(){

	if( (icoX==1 & grap1==1 & grap2==1) || icoY==1){
if(ouvertureinitiale==1){menuBar.hideSubMenus()}
ouvertureinitiale=1

	//var
	menuModel = new DHTMLSuite.menuModel();


	menuModel.addItemsFromMarkup('menuModel');
	menuModel.setMainMenuGroupWidth(00);
	menuModel.init();

	//var
	menuBar = new DHTMLSuite.menuBar();
	menuBar.addMenuItems(menuModel);


	menuBar.setTarget('innerDiv');

	menuBar.init();

	DHTMLSuite.configObj.resetCssPath();

	indicaici=0// placé ici à cause des restore des menus lors des chargements des cartes

icoX=0
icoY=0
grap1=0
grap2=0

}
document.getElementById('DHTMLSuite_menuItem5000621').style.display='none'
	}
	menubarreici()
</script>

<script language="javascript">
document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px"

document.getElementById("Num0txt").height=hauteurecran-60
//ouvferouv()


document.getElementsByClassName = function(a) {
var results = new Array();
var elements = document.getElementsByTagName('*');
for (var i=0; i<elements.length; i++) {
var classes = elements[i].className.split(" ");
for (var j=0; j<classes.length; j++) {
if (classes[j] == a) {
results[results.length] = elements[i];
}
}
}

return results;
}
//alert(document.getElementsByClassName("DHTMLSuite_resizeButtonLeft")[0].parentNode.getAttribute("class"))
//document.getElementsByClassName("DHTMLSuite_resizeButtonLeft")[0].parentNode.setAttribute("style","left:700")
</script>
<script type="text/javascript">

var Wx=largtext=document.getElementById("Num0txt").width
var Hx=document.getElementById("Num0txt").height




</script>
<!-- espace de calcul ou fonctionalités inactives  -------------------------------------------MENUS et COMMANDES en BOUTONs ---------------------------------------------------------------------------------------------------------------->
<dt id="dep">
<script language="javascript">
var typeicones=1
var tailleico=0
var colbalse=0;
var firsticone=0
var tixt="sélectionnez une variable ou une carte puis une variable"
var raapc=1
var opcicone0=0.65
var opcicone=opcicone0
var opcicone2=opcicone0
var opccarte=1
var initzam3x=0
function Initzam3(){

  initzam3x=1
}
function Initzam30(){

  initzam3x=0
}
</script>

<script>
// functions d'ajustement de la taille des icones. Commandée par les boutons PLUx et MOIx dans CartO2encapsule.htm
function tailleicoplus(){tailleico+=1}
function tailleicomoins(){tailleico-=1}
//--------------------------------------------------------------------------
function alacarte(){
top.frames.Num0.annulsansfondx()
top.frames.Num0.frames.couches.zatitre.document.getElementById("them2").firstChild.data=""
top.frames.Num0.frames.datacarte.indicnouvellecarte()
top.frames.Num0.frames.couches.zam3.indicarte21()
indicarte=1
top.frames.Num0.frames.couches.zam4.document.getElementById("enr").style.visibility="visible"
top.frames.Num0.frames.couches.zam3.grilleapplycarte()
}
function commandesvisibles(){

document.getElementById("alacarte").style.visibility="visible"
document.getElementById("choix").style.visibility="visible"
document.getElementById("choix2").style.visibility="visible"
document.getElementById("choixlibel").style.visibility="visible"
//document.getElementById("coloris").style.visibility="visible"
document.getElementById("plus").style.visibility="visible"
document.getElementById("moins").style.visibility="visible"
document.getElementById("choix222").style.visibility="visible"
document.sel.textbalise.value="faites glisser la balise dans une page en mode édition"

}


var afguide=0
function guide0(){
afguide=0
}

function afficheguide(){
if(afguide==1){afguide=0;top.frames.Num0.frames.couches.document.getElementById("mobileX").style.left=1800}else{afguide=1;top.frames.Num0.frames.couches.document.getElementById("mobileX").style.left=0;

//top.frames.Num0.frames.couches.zaguide.locat()
}
}

function rien(){
}


function opacitecarte(){
if(opccarte==1){opccarte=0.75}else{opccarte=1}
top.frames.Num0.frames.couches.zam3.carteopacity(opccarte)
}

function opaciteicone(a){
if(opcicone==1){opcicone=opcicone0}else{opcicone=1 }
top.frames.Num0.frames.couches.zam3.icoopacity(opcicone)
}
function opaciteicone2(){
if(opcicone2!=0){opcicone2=0}else{opcicone2=opcicone }
top.frames.Num0.frames.couches.zam3.icoopacity(opcicone2)
}
function razapplyCARTE(){

var idc2=top.frames.Num0.frames.datacarte.transidc2("return idc2")
top.frames.Num0.frames.couches.zoom.initselec0()
if(raapc==1){raapc=0}else{raapc=1 }
if(raapc==1){

    var mat="matrix(1 0 0 1 0 0)"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("coulf").setAttribute("transform",mat)

if(idc2==1){

top.frames.Num0.frames.couches.zatitre.document.getElementById("th2").style.top=75
}else{
top.frames.Num0.frames.couches.zatitre.document.getElementById("th1").style.top=30
}
top.frames.Num0.frames.couches.zam3.rappliquecarte()
}
if(raapc==0){
    if(initzam3x==1){
  top.frames.Num0.frames.couches.zam3.razcarte()
    }

var mat="matrix(1 0 0 1 0 -400)"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("coulf").setAttribute("transform",mat)


if(idc2==1){
top.frames.Num0.frames.couches.zatitre.document.getElementById("th2").style.top=1000
}else{
top.frames.Num0.frames.couches.zatitre.document.getElementById("th1").style.top=1000
}
}
top.frames.Num0.frames.couches.zam3.icoopacity(opcicone)
}
//ouvHelp("menugraph1")style="position:absolute;top:4px;left:450px;z-index:100000"
</script>



<div class="addMenuMap" id="XX" >
<span onmouseOver="document.getElementById('meca0').setAttribute('class','tooltip2');">
<a href="#" class="tooltip"><img OnMouseUp="top.frames.Num0.couches.visiblelegende();" onmouseOver="ouvHelp('legende');top.frames.Num0.couches.hiddenlegende()" src="icones/legende.png"><em><span></span>Légende</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('propX')" onclick="XclickNum0tab('Nonprop')" src="icones/prop_x.png"><em><span></span>Nom proportionnel</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('propX')" onclick="XclickNum0tabICI()" src="icones/nom_prop.png"><em><span></span>Proportionnel</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('opacarte')" onclick="opacitecarte()"  src="icones/opacite_carte.png"><em><span></span>Opacité de la carte</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('effacecarte')" onclick="razapplyCARTE()" src="icones/efface_carte.png"><em><span></span>Effacer la carte</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('opacicone')" onclick="opaciteicone(1)" src="icones/opacite_icones.png"><em><span></span>Opacité des icones</em></a>
<a href="#" class="tooltip"><img onmouseOver="ouvHelp('effacecarte')" onclick="opaciteicone2()" src="icones/efface_icones.png"><em><span></span>Effacer les icones</em></a>
<a href="#" class="tooltip"><img id="moins" onmouseOver="ouvHelp('icomoins')"  onclick="tailleico-=1;top.frames.Num0.frames.tab.plusmoinsadistance(2)" src="icones/ico-.png"><em><span></span>Réduire les icones</em></a>
<a href="#" class="tooltip"><img  id="plus" onmouseOver="ouvHelp('icoplus')"  onclick="tailleico+=1;top.frames.Num0.frames.tab.plusmoinsadistance(1)" src="icones/ico+.png"><em><span></span>Agrandir les icones</em></a>
</span>
<!--page option -->

<span id="meca0" class="tooltip2"><img  onmouseOver="if(document.all){document.getElementById('meca0').setAttribute('class','tttt')};;ouvHelp('outils')"  src="icones/options.png"><em>
<div onmouseOut="">
 
Paramètres
<br><br>
<form name="menulibel" >
<select  onmouseOver="ouvHelp('libell')"  id="choixlibel" name="choixlibel" onchange="changelibel()" class="deroul" title="conserve ou non le libellé la métbalise dans l'hypertexte">
<option  value="javascript:rien()">Libellé...</option>
<option  onclick="javascript:var lib='libel1';top.frames.recscenario.vallibel(lib)">avec libellé...</option>
<option  onclick="javascript:var lib='libel0';top.frames.recscenario.vallibel(lib)">sans libellé </option>
</select>
</form>
<br>
<form name="menu2">
<select  id="choix2" name="choix2" onchange="change2()" class="deroul" onmouseover="ouvHelp('palette');if(document.allxxxx){top.frames.Num0.frames.couches.zoom0()}"  title="choix de la palette de couleurs" >
<option value="javascript:rien()">Palette </option>
<option value="javascript:colbalse=0;top.frames.Num0.frames.couches.zam3.tbase(0);top.frames.Num0.frames.couches.zam3.appliquecouleur()">5 couleurs</option>
<option value="javascript:colbalse=1;top.frames.Num0.frames.couches.zam3.tbase(1);top.frames.Num0.frames.couches.zam3.appliquecouleur()">dégradé rouge</option>
<option value="javascript:colbalse=2;top.frames.Num0.frames.couches.zam3.tbase(2);top.frames.Num0.frames.couches.zam3.appliquecouleur()">dégradé marron</option>
</select>
</form>
<br>
<form NAME="menua">
<select onmouseOver="ouvHelp('choixQ')" id="choix" NAME="choix" onchange="change()" class="deroul" title="choix des quantiles">
<option  VALUE="javascript:rien()">Quantiles</option>
<option  VALUE="javascript:rien()">Q5</option>
<option  VALUE="javascript:rien()">Q4</option>
<option  VALUE="javascript:rien()">Q3</option>
<option  VALUE="javascript:rien()">Q2</option>
</select>
</form>
<br>
<form NAME="menua222" title="choix du type d'icone">
<select onmouseOver="ouvHelp('figures')" id="choix222" NAME="choix222" onchange="indicchenage222ICI=1;change222()" class="deroul" >
<option  VALUE="javascript:rien()">Cercles</option>
<option  VALUE="javascript:rien()">Etoiles</option>
<option  VALUE="javascript:rien()">Triangles</option>
<option  VALUE="javascript:rien()">Flèches</option>
</select>
</form>
<br>
<input id="alacarte" onmouseOver="ouvHelp('makefondcarte')" class="Tbouton" value="appliquer fond"  type="button" onclick="alacarte()" title="applique les données en fond de carte">
</div>
</em></span>
<!-- fin options -->
<span onmouseOver="document.getElementById('meca0').setAttribute('class','tooltip2');">
<a href="#" onmouseOver="ouvHelp('analyse')" class="tooltip"><img OnMouseUp='menuBar.hideSubMenus();top.frames.Num0.couches.hidelegend3()' onmouseOver="menuBar.hideSubMenus();top.frames.Num0.couches.disable33()" src="icones/analyse.png"><em><span></span>Module Analyse</em></a>


<a href="#" onmouseOver="ouvHelp('zoomplus')" class="tooltip"><img onclick="top.frames.Num0.couches.zoomIn()" src="icones/zoom_plus.png"><em><span></span>Zoom +</em></a>
<a href="#" onmouseOver="ouvHelp('zoommoins')" class="tooltip"><img onclick="top.frames.Num0.couches.zoomOut()" src="icones/zoom_moins.png"><em><span></span>Zoom -</em></a>
<a href="#" onmouseOver="ouvHelp('raz')" class="tooltip"><img onclick="top.frames.Num0.couches.razclick()" src="icones/taille_initiale.png"><em><span></span>Taille initiale</em></a>
<a href="#" onmouseOver="ouvHelp('mono')" class="tooltip"><img onclick="top.frames.Num0.frames.couches.zam3.monovariable()" src="icones/monovarie.png"><em><span></span>Monovarié</em></a>
<a href="#" onmouseOver="ouvHelp('graphique')" class="tooltip"><img OnMousedown="top.frames.Num0.couches.hidelegend2()"  onmouseOver="top.frames.Num0.couches.disable22();" src="jaune.png"><em><span></span>Graphiques de données</em></a>


<a href="#" class="tooltip"><img id="xboutonaide"  onclick="boutonaide=1;;setTimeout('affaide();boutonaide=0',10)" src="icones/help.png" ><em><span></span>Aides


</em></a>
</span>
</div>


<script>
function valbalise(b){
				var nt1=document.createTextNode(b)
				document.getElementById("textbalise").innerHTML=""
				document.getElementById("textbalise").value=""
				document.getElementById("textbalise").appendChild(nt1)
				document.getElementById("textbalise").value=b
//document.getElementById("textbalise").value=b
//document.getElementById("textbalise").select()
//document.sel.textbalise.value=b
//document.sel.textbalise.select()
}


function change() {

{
top.frames.Num0.frames.couches.frames.zam3.document.menu.choix.selectedIndex=document.menua.choix.selectedIndex
top.frames.Num0.frames.couches.frames.zam3.change()
}
document.menua.choix.selectedIndex=0
}

function changelibel(){}

function change2() {
var site2 = document.menu2.choix2.selectedIndex;
{
document.location.href=document.menu2.choix2.options[site2].value;
indexoption2=site2
}
document.menu2.choix2.selectedIndex=0
}

function regulZ2etsansfond(){
document.menua222.choix222.selectedIndex=0
top.frames.Num0.frames.couches.zaguide.forcez2()
top.frames.Num0.forcez2()
if(top.frames.Num0.frames.couches.frames.zam3.indicarte0){;top.frames.Num0.frames.couches.frames.zam3.indicarte0() }
}
var chg222=0
var indicchenage222ICI=0 // indique que le changement d'icone est opéré à partir du menu de ce fichier , c'est à dire à partir de l'interface globale
function forcechg2220(){chg222=0}
function change222() {
//alert(chg222)

if(chg222==0){chg222=1}else{

var site222 = document.menua222.choix222.selectedIndex;
{
//document.location.href=document.menua222.choix222.options[site222].value;
//typeicones=site222
if(site222==0){typeicones=1}
if(site222==1){typeicones=2}
if(site222==2){typeicones=3}
if(site222==3){typeicones=4}
//top.frames.Num0.frames.couches.zoom.choixICONE(typeicones)

//if(top.frames.Num0.frames.couches.frames.zam3.indicarte0){
if(indicchenage222ICI==1){top.frames.Num0.frames.couches.frames.zam3.IMCX1();indicchenage222ICI=0}
//}
}
//document.menua22.choix22.selectedIndex=0
}
}
commandesvisibles()
</script>
<dt>

<script type="text/javascript">




	  var noeudmaps=document.createElement("dt")
	  noeudmaps.setAttribute("id","insertIci")

document.getElementsByTagName("body")[0].appendChild(noeudmaps)
document.getElementById("insertIci").innerHTML=document.getElementById("dep").innerHTML
document.getElementById("dep").innerHTML=""

/*
document.getElementById("Num0txt").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("Num0txt2").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("editMenu").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("insertIci").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("westContent").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("westContent2").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("centerContent").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("selectcomment").addEventListener("mouseover",menuBar.hideSubMenus,true)
document.getElementById("northContent").addEventListener("mouseover",menuBar.hideSubMenus,true)
*/

//document.getElementById("Num0").addEventListener("mousedown",menuBar.hideSubMenus,true)

document.getElementById("trees").addEventListener("mouseup",menuBar.hideSubMenus,true)
function chargeaide(){window.frames.frameaide.location.href="aidecartecom.html?REP=";}//selectOnglet('west',1)selectOnglet('west',2);
setTimeout('chargeaide()',5000)

function eventKeyframes(){
top.frames.Num0txt.document.getElementsByTagName("body")[0].setAttribute("onkeydown","javascript:top.test2(event)")
top.frames.Num0txt.document.getElementsByTagName("body")[0].setAttribute("onclick","top.menuBar.hideSubMenus()")
//top.frames.Num0txt.document.getElementsByTagName("body")[0].setAttribute("onmouseover","javascript:top.ouvHelp('hypert')")
//top.frames.Num0txt.document.getElementsByTagName("body")[0].setAttribute("onmouseout","javascript:top.antitestretourtop(event)")
//top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("onclick","javascript:onkeydown='top.test(event)'")
}

setTimeout('top.frames.Num0txt.location.href="HYPERTEXTES-tous/cartO-'+menuencaps[0]+'-encaps.htm"',500)
setTimeout('top.frames.Num0.location.href="cartO2encapsuleILIADE.htm"',600)
//

//document.getElementById('DHTMLSuite_menuItem5000621').style.display='none'

setTimeout('top.frames.trees.location.href="archi.htm"',500)

//src="HYPERTEXTES-tous/cartO-'+menuencaps[0]+'-encaps.htm"
document.getElementById("DHTMLSuite_paneContenteast").style.overflow="hidden"
setTimeout('eventKeyframes()',3000)
</script>

</body></html>