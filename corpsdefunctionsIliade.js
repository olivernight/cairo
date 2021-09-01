var Iliade="Iliade"

function retourneIliade(){return Iliade}
var createurSVG="non"
function retournecreateurSVG(){return createurSVG}

function chgbgetcolor(a,b,c){

a="background-color:"+a+";color:"+c
b.setAttribute('style',a)
}
function chgcolor(a,b){

a="color:"+a
b.setAttribute('style',a)
}
function chgbgcolor(a,b,c){
a="font-size:"+c+";background-color:"+a
b.setAttribute('style',a)
}

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
document.getElementById("SUJET").height=25
document.getElementById("OTHER").height=25
top.frames.SUJET.location.href="MENU-SUJET.htm"
top.frames.OTHER.location.href="MENU-OTHER.htm"
}
var btemp="b1"
function changebouton(a){
var bx="bt"+a.substr(a.length-1,1)
var ax="b"+a.substr(a.length-1,1)
var fich=document.getElementById(bx).firstChild.nodeValue
A="cartO-"+fich+"-encaps.htm"
top.frames.Num0txt.location.href=A
document.getElementById(ax).src="boutonselect.png"
document.getElementById(btemp).src="bouton.png"
btemp=ax
}
function changepage(a){
//var op="option"+a.substr(a.length-1,1)
var fich=document.getElementById(a).firstChild.nodeValue
fich=fich.substr(2,fich.length-2)
A="cartO-"+fich+"-encaps.htm"
top.frames.Num0txt.location.href=A
}
var optw=""


function change_site() {
var site = document.menu.popup.selectedIndex;
{

window.location.href =
document.menu.popup.options[site].value;

document.menu.popup.selectedIndex=0
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
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+100
initmove=0
}
var trez=0
function A2moveXY(event){
if(initmove==1){


if (document.all){
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

if(document.all){
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
if(document.all){
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

function ouvferouv(){

if(debdblc==0){
debdblc=1
divpoint.style.top=divpoint0
document.getElementById("commande1").width=commandewidth0
document.getElementById("commande1").height=commandeheight0
imagpoint.style.left=imagpointleft0+100
imagpoint.style.top=imagpointtop0
document.getElementById("textstatus").firstChild.data="Commandes et générateur de méta-balises pour wikini  "
}
X0=document.getElementById("commande1").width//parseInt(divpoint.style.left)
//trez0=

Y0=parseInt(divpoint.style.top)

imag1point.width=60
imag1point.height=40
imagpoint.style.top=parseInt(divpoint.style.top)
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+100
//stop()
initmove=0
}
//}else{
function ouvferfer(){
if(debdblc==1){

debdblc=0
divpoint.style.top=hauteurecran+250
document.getElementById("commande1").width=0
document.getElementById("commande1").height=0
imagpoint.style.left=5+0+100
imagpoint.style.top=hauteurecran
document.getElementById("textstatus").firstChild.data=""

}
X0=document.getElementById("commande1").width//parseInt(divpoint.style.left)
//trez0=

Y0=parseInt(divpoint.style.top)

imag1point.width=60
imag1point.height=40
imagpoint.style.top=parseInt(divpoint.style.top)
imagpoint.style.left=parseInt(document.getElementById("commande1").width)+100
//stop()
initmove=0

}

//////////////////////////////////////////////////////////////////////////////SPECIFIQUE ILIADE////////////////////////////////////////////////////////////////////
//6666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666

// -----------------cette partie récupère gère les coordonnées de l'internaute dans l'url de la page, déclenche la récupértion des aniens travaix et passe les coordonnées dans le module  de gestion de l'enregistrement et d'édition de la chekliste
a=document.location.href
var POSreperes=0
var longx0=0
var longx1=0
var longx2=0
for(i=1;i<a.length;i++){
if(a.substr((a.length-i),1,1)=="."){longx0=i-3;i=a.length}
if(a.substr((a.length-i),1,1)=="*"){longx1=i}
if(a.substr((a.length-i),1,1)=="-"){longx2=i}
}
var pseudo=a.substr((a.length-longx1+1),(longx1-longx2-1),1)
var motpass=a.substr((a.length-longx2+1),(longx2-1),1)
var dejainscrit=a.substr((a.length-longx0+2),1,1)
if(dejainscrit==1){}else{pseudo="Votre identifiant";motpass="Votre mot de passe";dejainscrit=0}
var coordutil=new Array(pseudo,motpass,dejainscrit)

function recupdejainscrit(){//appelé de la framecheck
return dejainscrit
}


// récupère dans la check liste les travaux en cours et les excécute dans Iliade
function declenchechargeancien(){ //déclenché au chargement 


if(pseudo!="" & motpass!="" & dejainscrit==1){chargeancien()}
}

var stockcouleurpostit=new Array()
for(i=0;i<theme.length+1;i++){// création table couleur postit vide
stockcouleurpostit[stockcouleurpostit.length]=0

}
function attribcouleurpostit(a){
/*
if(a==1){a="cir_jaune.gif"}
if(a==2){a="cir_vert.gif"}
if(a==3){a="cir_bleu.gif"}
if(a==4){a="carretransparent.gif"}
document.getElementById(Xthis.id).firstChild.firstChild.src=a
*/
var numeroboxici=Xthis.id.substr(3,Xthis.id.length)
if(a>0 & a<6){
stockcouleurpostit[numeroboxici]=a
//alert(stockcouleurpostit)
if(a==1){a="orange"}
if(a==2){a="green"}
if(a==3){a="blue"}
if(a==4){a="gray"}
if(a==5){a="transparent"}


if(document.all){
document.getElementById(Xthis.id).style.setAttribute("cssText","background-color:"+a)
}else{
document.getElementById(Xthis.id).setAttribute("style","background-color:"+a)
}
}
}

function attribcouleurpostit2(z,a){// z=numéro box ; a= valeur de la couleur; déclenché lors de l'ouverture avec récupération des paramètres enregistrés
if(a>0 & a<6){
stockcouleurpostit[z]=a
//alert(stockcouleurpostit)
if(a==1){a="orange"}
if(a==2){a="green"}
if(a==3){a="blue"}
if(a==4){a="gray"}
if(a==5){a="transparent"}


if(document.all){
document.getElementById("box"+z).style.setAttribute("cssText","background-color:"+a)
//alert("box"+z+"    couleur="+a)
}else{
document.getElementById("box"+z).setAttribute("style","background-color:"+a)
}
}
}


function transcoordutil(){
return coordutil
}
var paramutil=new Array(0,0,0,0)
function recupdatautilisateur(){
paramutil=top.frames.framerep.retournparam("return paramutil")

appliquanciensdata()
}
function chargeancien(){// déclenché par function declenchechargeancien() ci-dessus
top.frames.framerep.location.href="autodiag0-sauvegarde_fichiers/check_to_html/resultat/data_"+pseudo+"_"+motpass+".htm"
}

var Qrecup=new Array()
var indicautomatrecup=0

function returnautomatrecup(){return indicautomatrecup}

function affichevideoX(a){
document.getElementById("intracadrevideo").innerHTML='<object id="monFlash" type="application/x-shockwave-flash" data="player_flv_maxi.swf" height="226" width="270"><param name="movie" value="player_flv_maxi.swf"><param name="FlashVars" value="flv=http:\/\/213.251.176.22/cartoanact/videos/'+a+'&amp;width=270&amp;height=226&amp;buffer=10&amp;title=Demonstration&amp;playercolor=#FFFFFF&amp;showvolume=1"><p>Vous devez installer le plugin Flash Macromedia pour lire la vidéo</p></object>'

document.getElementById("cadrevideo").style.visibility="visible"
}


function recupquestion(b){ // déclenché par la function runecritquestionscles() dans le  fichier  utilisateur  dans la iframe framerep : le paramètre b est la table des valeur 1 ou 2 à chacune des questions répondues par l'internate dans sa chekliste. Le rang dans le tableau indique le n° de question
indicautomatrecup=1
Qrecup=new Array()
var co=1
//alert("recup question="+b)
for(i=1;i<b.length;i+=2)
{

Qrecup[co]=b.substr(i,1,1);
co+=1
}
//alert("Qrecup="+Qrecup)
for(var i=1;i<Qrecup.length;i++)
{
top.frames.quest.document.getElementById("Q"+i+"_"+Qrecup[i]).checked="checked";
//alert(top.frames.quest.document.getElementById("Q"+i+"_"+Qrecup[i]).id)
enrQ("Q"+i+"_"+Qrecup[i])

}

//top.frames.quest.document.location.hash='#tq'+i

top.frames.quest.document.fML[2*i+11].focus()// fixe le focus après les questions récupérées dans la chkeliste de l'internaute
indicautomatrecup=0
}


function rien(){
}
//-----------------------fin de la récupération et de l'exécution des données de la checkliste utilisateur
//--------------------------------------------------------------------------------checklist (renvoi à la frame famechecklist)
function checklist(){
top.document.getElementById('framecheck').height=200
//top.document.getElementById('framecheck').frameborder=1
window.frames.framecheck.location.href="framecheck_simple.htm"
document.getElementById("divcheck").style.visibility="visible"

}
//-------------------------------------------------------------------------------fin de checklist
// -------------------------------------------------------------------------------affiche le point clé dans la frame commentaires1
function affichcontenu(a){
//alert("param="+a)

var x=paramattribarre[a]

top.frames.commentaires1.document.location.hash="#pp"+x[2]
top.location.hash="#haut"
						//gestion des affichages des vidéos
						top.frames.commentaires1.permutenq(x[2])
						top.frames.commentaires1.affichevideo(x[2])	
						top.frames.commentaires1.fermevideo(x[2])
						
}
//------------------------- fin affiche le point clé dans la frame commentaires1

var Q=new Array()
var idbarre
var nombarre
var score
var commentancre=0


function retourneQ(){
return Q
}

function enrQ(Qencours,form){ // stocke dans une table les valeurs de questions
document.getElementById("aide").style.visibility="hidden"
document.getElementById("boitevideo").style.visibility="hidden"
document.getElementById("zonerepQ").innerHTML="Vos réponses aux questions en liens avec ce sujet :" 
//-----------------------------------------------------------------------------------valable questionnaire GDA
//var iQencours=Qencours.substring(1,Qencours.length)
//Q[iQencours]=top.frames.quest.document.getElementsByName(Qencours)[0].value
//testconfiguration(iQencours)
//--------------------------------------------------------------------------------------------------------------------

var iQencours="" // numéro de la question en cours, qui peut avoir différentes modalités : ces modalités sont enregistrées dans Q[iQencours]
for(i=1;i<Qencours.length-2;i++){
iQencours+=Qencours.substring(i,i+1)
}

var yQencours=Qencours.substring(Qencours.length-2,Qencours.length)

yQencours="Q"+iQencours+yQencours

//Q[iQencours]=top.frames.quest.document.getElementById(yQencours).value // accumule les réponses au fur et à mesure et les classe dans ce tableau au rang iQuencours
Q[iQencours]=document.getElementById(yQencours).value // accumule les réponses au fur et à mesure et les classe dans ce tableau au rang iQuencours
testconfiguration(iQencours,form)

}

function rondblanc(){ // met les ronds de score à blanc
for(kz=1;kz<12;kz++){
top.document.getElementById("graphique1").getSVGDocument().getElementById("c"+kz).setAttribute("fill","white")
var kz2=kz+20
top.document.getElementById("graphique1").getSVGDocument().getElementById("c"+kz2).setAttribute("fill","white")
}
}
var PC=new Array()
PC[0]=new Array(0,0)

for(i=0;i<theme.length;i++){var wxc=new Array;wxc[0]=0;PC[PC.length]=wxc}// création du tableau PC dans lequel seront stockées les question répondues  inclues dans une ligne logique 
var eff=0
var QQencours
var valreponse=new Array()
var test0=0
var stockcyclelogique=new Array()
var stockcyclelogiquetemp=new Array()
var demarre=0
var listOK=new Array()
function testconfiguration(iQencours,form){ // exécute les fonction logiques correspondants aux croisement de questions 
listOK=new Array()
QQencours=iQencours
stockcyclelogique=new Array()
for(h=0;h<SCOREtemp.length-1;h++){
var nbx=log[h][log[h].length-1]
document.getElementById("boxX"+nbx).style.color="white";

}
//-------------------------------

for(i0=0;i0<log.length;i0++){
var idlog=new Array
var prodlog=1
var logX=log[i0]

var iQencoursInclus=0
for(j=0;j<logX.length-3;j++){// boucle j sur les réponses logiques de la ligne logique
if(iQencours==Math.round(logX[j])){iQencoursInclus=1 //si la question en cours est comprise dans les questions de  la ligne logique
//on récupère le n° du point clé de la ligne logique = LogX[logX.length-1]
//alert("n°du point clé="+logX[logX.length-1])
//on stocke dans la table PC des questions répondues par point clé en élémiminant les doublons

var pclecourant=PC[logX[logX.length-1]]


var dbl=0

for(k=0;k<pclecourant.length;k++){if(iQencours==pclecourant[k]){dbl=1;k=pclecourant.length}}
if(dbl==0){pclecourant[pclecourant.length]=iQencours}

PC[logX[logX.length-1]]=pclecourant
}

// on teste pour chaqu ligne logique si les réponses contenue dans la table Q des réponses déjà données  correpondent à la valeurs attendue pour retenir la ligne logique 
//Autrement dit : Si la réponse effective 1 ou 2 dans Q au rang=numéro de question est égaleà  la valeur de la réponse attendue située dans la ligne logique; alors on marque la lquestion  avec idlog[j]=1 et on fait leproduit des idlog[j] sur toutes les questions de la ligne logique. Si ce produit logique est = à 1, alors la ligne logique  sera retenue


if(Q[parseInt(logX[j])]==Math.round(10*(Math.round(10*logX[j])/10-Math.round(logX[j])))){idlog[j]=1}else{idlog[j]=0}
prodlog=prodlog*idlog[j]

}//j


score=logX[logX.length-2];
commentancre=logX[logX.length-1];

if(logX[logX.length-3]=="vert"){test0=nombarrevert[i0]; nombarre=commentancre; }//i0+1
if(logX[logX.length-3]=="rouge"){test0=nombarrerouge[i0];nombarre=100+commentancre}//i0+1

if(prodlog==1){// si le produit logique prodlog est = à 1
commentancreSCORE[i0]=score
score=0
if(logX[logX.length-3]=="vert"){nombarrevert[i0]=commentancre;for(z=0;z<commentancreSCORE.length;z++){if(nombarrevert[z]==commentancre){score+=commentancreSCORE[z]}} }//1
if(logX[logX.length-3]=="rouge"){nombarrerouge[i0]=commentancre;for(z=0;z<commentancreSCORE.length;z++){if(nombarrerouge[z]==commentancre){score+=commentancreSCORE[z]}}}//1





listOK[listOK.length]=commentancre
stockcyclelogique[stockcyclelogique.length]=new Array(nombarre,score,commentancre,i0)
var xbox="box"+commentancre
montre(xbox) 
//alert(xbox)
stockxbox[stockxbox.length]=commentancre

if(SCOREtemp[i0]==0){



document.getElementById(xbox).style.color="#e3e3e3";

SCOREtemp[i0]=1}
}else{//cas prduit logique prodlog=0
if(SCOREtemp[i0]==1){

SCOREtemp[i0]=0}
commentancreSCORE[i0]=0
score=0
if(logX[logX.length-3]=="vert"){nombarrevert[i0]=0; }
if(logX[logX.length-3]=="rouge"){nombarrerouge[i0]=0;}
if(logX[logX.length-3]=="vert"){for(z=0;z<commentancreSCORE.length;z++){if(nombarrevert[z]==commentancre){score+=commentancreSCORE[z]}} }//1
if(logX[logX.length-3]=="rouge"){for(z=0;z<commentancreSCORE.length;z++){if(nombarrerouge[z]==commentancre){score+=commentancreSCORE[z]}}}


eff=1
initxbox=1

if(test0!=0){effacebarre(commentancre);} 

}


}// fin de boucle for sur i0

if(demarre==1){

for(w=0;w<stockcyclelogique.length;w++){
var SClog= stockcyclelogique[w]

var OK=1
for(k=0;k<stockcyclelogiquetemp.length;k++){
var SClogtemp= stockcyclelogiquetemp[k]
if(SClogtemp[3]==SClog[3] & SClogtemp[2]==SClog[2]){OK=0}
}
if(OK==1){
for(y=0;y<stockxboxtemp.length;y++){if(SClog[2]==stockxboxtemp[y]){stockxboxtemp[y]="";}}
}
}
}
for(s=0;s<stockxboxtemp.length;s++){if(stockxboxtemp[s]!=""){
for(t=0;t<listOK.length;t++){if(listOK[t]==stockxboxtemp[s]){listOK[t]=""}}
}}


if(stockcyclelogique.length>0){// déclenche l'affichage des postits
fondsconfig(stockcyclelogique,form);
finderenouvellement()



}

demarre=1
}//fin de testconfiguration(iQencours)


function reponsesencours(){

}


function effacebarre(commentancre){//------------------------------------------------------------faire disparaître les postits ?????---xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
var xbox="box"+commentancre
cache(xbox)
enlevecachetemp(commentancre)//enlève xbox effacé de la table des stockxboxtemp pour ne pas qu'il soit effacé de nouveau si on le resélectionne
}
function enlevecachetemp(a){//enlève xbox effacé de la table des stockxboxtemp pour ne pas qu'il soit effacé de nouveau si on le resélectionne
numbox=a
//alert("tabboxdepart[numbox]="+tabboxdepart[numbox]+"    numbox="+numbox)
if(tabboxdepart[numbox]==1){}else{tabboxdepart[numbox]=1;if(tabboxdroite[numbox]==1){tabboxdroite[numbox]=0};if(tabboxgauche[numbox]==1){tabboxgauche[numbox]=0};if(tabboxcorbeille[numbox]==1){tabboxcorbeille[numbox]=0}}
var stockxboxtemp2=new Array()
stockxboxtemp2.length=0
for(i=0;i<stockxboxtemp.length;i++){
if(a==stockxboxtemp[i]){}else{stockxboxtemp2[stockxboxtemp2.length]=stockxboxtemp[i]}
}
stockxboxtemp=new Array
stockxboxtemp=stockxboxtemp2
}




var trame=''
var stockxbox=new Array()
var stockxboxtemp=new Array()
function fondsconfig(stockcyclelogique,form){//-----------------------------------------charge le gabarit du  point clé et le postit corresponsant xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
initxbox=1
actionsurinnerHTMLByIdici()
}
var xboxtemp
var xbcommentboxtemp=0
var initxbox=0
var casencours=""

function scroll0(){
window.location.hash="#hautici"
if(document.all){
document.getElementById("cadrecas").style.top=100+"px"
}else{document.getElementById("cadrecas").style.top=-100+"px"}
document.getElementById("cadrecas").style.visibility="visible"
}

function ouvrepopup(a){
//alert(a)
if(document.all){document.getElementById("cadrecas").style.top=100+"px"}else{
document.getElementById("cadrecas").style.top=-100+"px"}

// ATTENTION : le retour à top:-100px est décleché par le fichier de cas. Dans le sschéma portal : supprimer cette ligne///////
parent.document.getElementById("cadrecas").style.top=-10000+"px"   ///////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



if(document.all){document.getElementById("conteneur2").style.visibility="visible"}else{document.getElementById("conteneur").style.opacity=0.3}

/////////////////////////////////////////remettre ces deux lignes dans le cas des ressources en ligne sur le platteforme//////////////////////////////////
//document.getElementById("cadrecas").style.visibility="visible"
//casencours="http://www.anact.fr/GDA/PTCLE?pointcle="+a         ///////////et occulter la ligne suivante ////////
casencours="popup-PR_ILIADE_230508_sans_textes.html?cible="+a  /////////
///////////////////////////////////////////////////////////////////////////////////////////////////////

window.frames.casx.location.href=casencours
casencours=a
}
function changeelements(a){// affiche le contenu du point clé et les questions répondues version en ligne GOODEES

xbox="box"+a
if(kxici==0){}else{
document.getElementById(xboxtempici).firstChild.firstChild.src=imgencours
}
imgencours=document.getElementById(xbox).firstChild.firstChild.src
document.getElementById(xbox).firstChild.firstChild.src="carre_bleu.png"


kxici=1
xboxtempici=xbox

var Hici=0
var trame='<br><span style="color:white">......</span><b><font id="numero" face="arial" color="#009cff" size="5">n°x</font></b><dt ><br><br><font id="titre"  face="arial" color="gray" size="3" style="font-weight:bold">titre</font></dt><br><font  face="arial" color="black" size="2"><dt id="ici">texte point clé</dt></font><br><dt id="repquest" style="text-align:right"></dt><table width=450><tr><td>'
/*
trame+='<table style="border: 1px dotted #3d3d3d; width: 150px; height:  '+Hici+'px; padding:10px; font-weight:bold; 		font-size: 15px; text-align:center; color: #000000;"><tr valign="top"><td ><dt id="urlvideo">Option video</dt><dt ><font id="titrefilm" color="black" style="font-size:8px">titrefilm</font></dt></td></tr></table></td><td><table style="border: 1px dotted #3d3d3d; width: 150px; height:  '+Hici+'px; padding:10px; font-weight:bold; font-size: 15px; text-align:center; color: #000000;"><tr valign="top"><td ><dt  id="urlimage">Option Graphique<dt><div><dt ><font id="titreimage" color="black" style="font-size:8px">titreimage</font></dt></div></td></tr></table></td><td><table style="border: 1px dotted #3d3d3d; width: 150px; height: '+Hici+'px; padding:10px; font-weight:bold; font-size: 15px; text-align:center; color: #000000;"><tr><td ><dt id="titrecas">titrecas</dt><dt ><font id="urlcas" color="black" style="font-size:8px">illustration</font></dt></td></tr></table></td><td></table>'
*/
trame+='</td><td><center></center> <td></tr></table>'
trame+='<center><dt><a href="javascript:casencours='+a+';ouvrepopup('+a+')"><b>Ressources pour en savoir plus</b></a></dt></center>'
document.getElementById("pointcle").innerHTML=trame
document.getElementById("numero").innerHTML="n°"+a;
document.getElementById("ici").innerHTML=theme[a-1];
document.getElementById("titre").innerHTML=titre[a-1];
/*
//IMAGE
if(titreimage[a-1]!=""){document.getElementById("titreimage").innerHTML=titreimage[a-1]}else{document.getElementById("titreimage").innerHTML=""}
if(urlimage[a-1]!=""){
document.getElementById("urlimage").parentNode.parentNode.parentNode.parentNode.style.visibility="visible"
document.getElementById("urlimage").innerHTML='<img src="autodiag0-sauvegarde_fichiers/check_to_html/resultat/imagespointcle/'+urlimage[a-1]+'" height=100">'

}else{
document.getElementById("urlimage").innerHTML=""
document.getElementById("urlimage").parentNode.parentNode.parentNode.parentNode.style.visibility="hidden"
};

//VIDEO




if(urlfilm[a-1]!=""){
document.getElementById("urlvideo").parentNode.parentNode.parentNode.parentNode.style.visibility="visible"
document.getElementById("urlvideo").innerHTML="<INPUT TYPE='button' VALUE='Vidéo' onclick='affichevideoX(\""+urlfilm[a-1]+"\")'>"

//document.getElementById("urlvideo").innerHTML='<object id="monFlash" type="application/x-shockwave-flash" data="player_flv_maxi.swf" height="310" width="370"><param name="movie" value="player_flv_maxi.swf"><param name="FlashVars" value="flv=http:\/\/213.251.176.22/cartoanact/videos/'+urlfilm[a-1]+'&amp;width=270&amp;height=226&amp;buffer=10&amp;title=Demonstration&amp;playercolor=#FFFFFF&amp;showvolume=1"><p>Vous devez installer le plugin Flash Macromedia pour lire la vidéo</p></object>'

}else{document.getElementById("urlvideo").innerHTML=""
document.getElementById("urlvideo").parentNode.parentNode.parentNode.parentNode.style.visibility="hidden"
};

if(titrefilm[a-1]!=""){

document.getElementById("titrefilm").innerHTML=titrefilm[a-1]
}else{
document.getElementById("titrefilm").innerHTML=""

};


if(urlcas[a-1]!=""){
var A='<big><iframe width=550 height=450 frameborder="no" src="'+urlcas[a-1]+'" ></iframe></big>'//
document.getElementById("titrecas").parentNode.parentNode.parentNode.parentNode.style.visibility="visible"
document.getElementById("titrecas").innerHTML="<INPUT TYPE='button' VALUE='illustration' id='"+A+"' onclick='javascript:document.getElementById(\"intracadrecas\").innerHTML=this.id;document.getElementById(\"cadrecas\").style.visibility=\"visible\"'>"

}else{document.getElementById("titrecas").innerHTML=""
document.getElementById("titrecas").parentNode.parentNode.parentNode.parentNode.style.visibility="hidden"
};


if(titrecas[a-1]!=""){
document.getElementById("urlcas").innerHTML=titrecas[a-1]

}else{document.getElementById("urlcas").innerHTML=""};
*/

var QR="" //contenu de l'affichage des questions répondues
var Xpc=PC[a]
for(i=1;i<Xpc.length;i++){
var qr=Q[Xpc[i]]
if(qr==1){qr='Oui'}
if(qr==2){qr='Non'}
QR+=qr+' à Q'+Xpc[i]+' : '+question[Xpc[i]-1]+'<br>'
}
document.getElementById("QR").innerHTML=QR // affiche les questions répondues pou rle point clé courant
}

function actionsurinnerHTMLByIdici(){// écrit les éléments du point clé dans le gabarit


for(d=0;d<listOK.length;d++){if(listOK[d]!=""){commentancre=listOK[d];changeelements(listOK[d]);d=listOK.length}}

stockcyclelogiquetemp=new Array()
stockcyclelogiquetemp=stockcyclelogique
}

function attribautocorbeille(xbox,iici){
var ATTRIBAUTO=1 // attribution automatique des points clés à la corbeille d'attente

//alert(stockxboxtemp)
//alert("gauche="+tabboxgauche[stockxboxtemp[iici]]+"   droite="+tabboxdroite[stockxboxtemp[iici]])
if(ATTRIBAUTO==1){
if(tabboxgauche[stockxboxtemp[iici]]==1 || tabboxdroite[stockxboxtemp[iici]]==1){
if(tabboxgauche[stockxboxtemp[i]]==1 ){dropItems(xbox,"dropBox",900,205)}
if(tabboxdroite[stockxboxtemp[i]]==1 ){dropItems(xbox,"dropBox2",1028,205)}
}else{dropItems(xbox,"corbeille",1167,205)}
}
}
function finderenouvellement(){

//alert("c stockxboxtemp = "+stockxboxtemp)
for(i=0;i<stockxboxtemp.length;i++){
var efbox="box"+stockxboxtemp[i]
if(initxbox==1){
if(tabboxgauche[stockxboxtemp[i]]==1 || tabboxdroite[stockxboxtemp[i]]==1 || tabboxcorbeille[stockxboxtemp[i]]==1){}else{if(efbox!="box"){cache(efbox)}}}//le cas  = "box" correpond au cas où une donnée du tableau stockxtemp a été forcée à vide par  pour  faire réapparaîtreun postit qui est sélectionné une seconde fois par une nouvelle ligne logique
}

if(updown==1){// car d'un déplacement manuelle à partir d'une manipulation dans  le mode up and down des points de repère
//alert(stockxbox3temp)
for(i=0;i<stockxbox3temp.length;i++){
var efbox="box"+stockxbox3temp[i]
if(initxbox==1){ if(tabboxgauche[stockxbox3temp[i]]==1 || tabboxdroite[stockxbox3temp[i]]==1 || tabboxcorbeille[stockxbox3temp[i]]==1){}else{cache(efbox)}}
}
updown=0

}

stockxboxtemp=new Array()

for(i=0;i<stockcyclelogiquetemp.length;i++){
var SClogtemp=stockcyclelogiquetemp[i]
stockxboxtemp[i]=SClogtemp[2]

attribautocorbeille(("box"+stockxboxtemp[i]),i)
}
stockxbox=new Array()
document.getElementById("HBT").style.visibility="visible"
}
var stockxbox3temp=new Array()
var stockxbox3=new Array()

var updown=0


var kxici=0
var xboxtempici="xbox1"
var imgencours="carretransparent.gif"
function MontreCacheNavigThemes(x){
//alert("ici")


stockxbox3=new Array()
stockxbox3[0]=x
xbox="box"+x
if(kxici==0){}else{
document.getElementById(xboxtempici).firstChild.firstChild.src=imgencours
}
imgencours=document.getElementById(xbox).firstChild.firstChild.src
document.getElementById(xbox).firstChild.firstChild.src="carre_bleu.png"


kxici=1
xboxtempici=xbox

//alert(tabboxdepart[commentancre])
if(tabboxdepart[x]==1 ){;dropItems(xbox,"departXX",791,205)}
montre(xbox)
//efface les box en cours dans depart
if(updown==0){
for(i=0;i<stockxboxtemp.length;i++){
var efbox="box"+stockxboxtemp[i]
if(initxbox==1){ if(tabboxgauche[stockxboxtemp[i]]==1 || tabboxdroite[stockxboxtemp[i]]==1 || tabboxcorbeille[stockxboxtemp[i]]==1){}else{cache(efbox);}}
}




updown=1
}

if(updown==1){
for(i=0;i<stockxbox3temp.length;i++){
var efbox="box"+stockxbox3temp[i]
if(initxbox==1){ if(tabboxgauche[stockxbox3temp]==1 || tabboxdroite[stockxbox3temp]==1 || tabboxcorbeille[stockxbox3temp]==1){}else{cache(efbox)}}
}

}


//nouveau temp
stockxbox3temp=new Array()
for(i=0;i<stockxbox3.length;i++){
var sdf=stockxbox3[i]
sdf="SDF"+sdf
sdf=sdf.substr(3,sdf.length-3)
stockxbox3temp[i]=sdf
}

}



function fondsconfigSVG(nombarre,score,commentancre){
paramattribarre[nombarre]=new Array(nombarre,score,commentancre)
top.frames.commentaires1.attribbarre(nombarre,score,commentancre)
}


var k=0

function retourneLog(){return log}

var commentancreSCORE=new Array()
var SCOREtemp=new Array()
var nombarrerouge=new Array()
var nombarrevert=new Array()
//initialise à zero les tableau de registres des états affectés aux barres de couleurs et au ronds de score
for(i=0;i<log.length;i++){
nombarrevert[i]=0;
nombarrerouge[i]=0
commentancreSCORE[i]=0
SCOREtemp[i]=0
}

//////////////////////////////////////////////////////////////////////////////FIN de cette partie SPECIFIQUE ILIADE////////////////////////////////////////////////////////////////////
var largecran=screen.width
var hautecran=screen.height
hautecran-=200
hautecran=590
// BANDES LATERALES


// DIV GENERALE
//--------- VERSION GENERALE REMLACEE PAR VERSION ILLIADE CI DESSOUS : document.write('<div style="position:absolute;left:'+((largecran-960)/2+30)+';top:0"><table  class="fondtable" cellpadding=0 cellspacing=0 height='+(hautecran+10)+'><tr><td ></TD><td  width='+0+'  >')
document.write('<div style="position:absolute;left:'+((largecran-960)/2-15)+';top:0;visibility:hidden"><table  class="fondtable" cellpadding=0 cellspacing=0><tr><td ></TD><td  width='+985+' height='+(hautecran-5)+' >')
//////////////////////////////////////////////////////////////////////////////SPECIFIQUE ILIADE////////////////////////////////////////////////////////////////////
//6666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666
document.write('<iframe id="versions" name="versions" src="" width=1 style="visibility:hidden"></iframe>')



 


document.write('<div id="hauty" style="position: absolute; left: 0px; top: 0px; visibility: visible;">')
document.write('<a name="haut"> </a>')
document.write(' </div>')

//document.write('<div id="hautx" style="position: absolute; left: 20px; top: 10px; visibility: visible;">')
//document.write('<table background="bandoanact.jpg" class="angles" border=0  width="950" height=100>')
//document.write('<tr>')


//document.write('<td align=right><font size="5" face="Arial Black" color=white align=right><dt>&nbsp;</dt><dt><b>Iliade</b></dt></font>')
//document.write('<dt><font face="arial" color="white" style="font-size:12" ><b><I>Inventaire des liens interactifs entre l\'âge et le développement des entreprises</I></b></dt></td><td width="55" valign=bottom border=0><dt>&nbsp;</dt><dt><img   src="ImageFSE.jpg" width=80 height=60 border="0"></dt></td>')
//document.write('</tr>')
//document.write('</table>')
//document.write('</div>')



//document.write('<div id="divgraph" style="position: absolute; left: 475px; top:170px; visibility: visible;">')
//document.write('<embed src="autodiag0-sauvegarde_fichiers/graphSVG.svg" id="graphique1" name="graph1" noresize="" scrolling="yes" marginwidth="5" marginheight="5" frameborder="1" height="390" width="250">')
//document.write('</div>')
 
//document.write('<div id="hauty" style="position: absolute; left: 21px; top: 100px; visibility: visible;">')
//document.write('<p><font size="6" color="white"face="Arial Black">Points clés</font></p>')
//document.write('</div>')
//document.write('<div id="hauty" style="position: absolute; left: 19px; top: 98px; visibility: visible;">')
//document.write('<p><font size="6" color="gray"  face="Arial Black">Points clés</font></p>')
//document.write('</div>')

 
 

document.write('<div id="divcomment1" style="position: absolute; left: 20px; top: 160px; visibility: hidden;">')
document.write('<iframe src="" id="commentaires1" name="commentaires1" noresize="" marginwidth="5" marginheight="5"  height="410"  width="445" scrolling=yes   style="opacity:1;" class="angles"></iframe>')
document.write('</div>')


//document.write('<div id="divquest" style="position: absolute; left: 650px; top: 355px; visibility: visible;">')
//document.write('<iframe src="autodiag0-sauvegarde_fichiers/gda.html"  id="questionnaire" name="quest" noresize="" marginwidth="5" marginheight="5" frameborder="1" height="210" scrolling="yes" width="320" class="angles2"></iframe>')
//document.write('</div>')


 
document.write('<div id="divcomment" style="position: absolute; left: 670px; top: 320px; visibility: hidden;">')

document.write('</div>')
 if(document.all){
document.write('<div id="divcheck" style="position: relative; left:650px; top: -40px; visibility: hidden;">')
}else{
document.write('<div id="divcheck" style="position: relative; left:-100px; top: -200px; visibility: hidden;">')
}
if(document.all){var lar=160}else{var lar=140}
document.write('<iframe src="" id="framecheck" name="framecheck" noresize="" scrolling="no" marginwidth="5" marginheight="5" frameborder="0" height="0" width="'+lar+'" style="background-color:white;border-color: white;border:1px dotted #000;"></iframe>')
document.write('</div>')
 
document.write('<div id="divreprendre" style="position: absolute; left:5px; top: 5px; visibility: visible;">')
document.write('<iframe src="" id="framerep" name="framerep" noresize="" scrolling="no" marginwidth="5" marginheight="5" frameborder="0" height="1" width="1"></iframe>')
document.write('</div>')

document.write('<div id="hauty" style="position: absolute; left: 910px; top: 110px; visibility: visible;">')

document.write('</div>')


//document.write('<div id="hauty" style="position: absolute; left: 650px; top: 312px; visibility: visible;">')
//document.write('<p><font size="4" color="white" face="Arial Black">Thèmes</font></p>')
//document.write('</div>')
//document.write('<div id="hauty" style="position: absolute; left: 649px; top: 310px; visibility: visible;">')
//document.write('<p><font size="4" color="gray" face="Arial Black">Thèmes</font></p>')
//document.write('</div>')


//document.write('<div id="check" style="position: absolute; left: 653px; top: 220px; visibility: visible;" >')
//document.write('<table  width=145 height=70 border=0 bgcolor=#E5EAF5 ><TR><TD align=center>')
//document.write('<DT><font  onmouseOver="chgbgcolor(\'#333435\',this,14)" onmouseout="javascript:chgbgcolor(\'#E5EAF5\',this,12)" style="font-size:12;background-color:#E5EAF5" color="white" face="Arial Black" bgcolor=#E5EAF5 onclick="javascript:window.open(\'http://www.anact.fr/portal/page?_pageid=616,189741&_dad=portal&_schema=PORTAL\')">retour Plate-forme</font></DT>')
//document.write('<DT><font  onmouseOver="chgbgcolor(\'#333435\',this,14)" onmouseout="javascript:chgbgcolor(\'#E5EAF5\',this,12)" style="font-size:12;background-color:#E5EAF5" color="white" face="Arial Black" bgcolor=#E5EAF5 onclick="javascript:retourtheme()">retour aux thèmes</font></DT>')
//document.write('<DT><font  onmouseOver="chgbgcolor(\'#333435\',this,14)" onmouseout="javascript:chgbgcolor(\'#E5EAF5\',this,12)" style="font-size:12;background-color:#E5EAF5" color="white" face="Arial Black" onclick="javascript:cartog()">cartographie</font></DT>')
//document.write('<DT><font  onmouseOver="chgbgcolor(\'#333435\',this,14)" onmouseout="javascript:chgbgcolor(\'#E5EAF5\',this,12)" style="font-size:12;background-color:#E5EAF5" color="white" face="Arial Black"  onclick="javascript:top.document.getElementById(\'framecheck\').style.visibility=\'visible\';checklist()">ckeck liste</font></DT>')
//document.write('</TD></TR></table></div></div>')
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



/* INHIBITION DE ATTLAS ENCAPSULE DANS ILIADE

var cartogx=0 //indique que la carte est invisible ; =1 indique visible


document.write('<div id="divattlas" style="position: absolute; top: 0px; left: 0px;visibility:hidden">')
function retourtheme(){//height=410 width=420
document.getElementById("OTHER").style.visibility="hidden"
document.getElementById("SUJET").style.visibility="hidden"
document.getElementById("txtaideattlas").style.visibility="hidden"
document.getElementById("piloteaideattlas").style.visibility="hidden"
document.getElementById("quest").style.visibility="visible"
document.getElementById("texttheme").style.visibility="visible"
document.getElementById("divattlas").style.visibility="hidden"
document.getElementById("divattlas").style.top=-990
document.getElementById("divcomment1").style.top=160
top.document.getElementById("mobile2").style.top=-990
document.getElementById("commentaires1").width=445
document.getElementById("commentaires1").height=410
document.getElementById("retourth").style.visibility="hidden"
}
function cartog(){
document.getElementById("OTHER").style.visibility="visible"
document.getElementById("SUJET").style.visibility="visible"
document.getElementById("txtaideattlas").style.visibility="visible"
document.getElementById("piloteaideattlas").style.visibility="visible"
document.getElementById("quest").style.visibility="hidden"
document.getElementById("texttheme").style.visibility="hidden"
document.getElementById("divattlas").style.visibility="visible"
document.getElementById("divattlas").style.top=0
top.document.getElementById("mobile2").style.top=10
top.document.getElementById("zam2").height=0
//les trois lignes de commande ci-dessous sont spécifiques à ILiade ANACT
document.getElementById("commentaires1").width=445
document.getElementById("commentaires1").height=410
document.getElementById("divcomment1").style.top=160
document.getElementById("retourth").style.visibility="visible"
}

document.write('<div id="menuencaps" style="position: absolute; height: 24px; left: 735px; top: 330px;visibility:hidden"><form name="menu"><select title="pour re-initialiser une page,selectionnez cartes et commentaires puis selectionnez de nouveau la page" name="popup" onchange="change_site();" style="background-color: white; color: black;width:237" size="1"><option value="javascript:rien2()">&nbsp;Cartes et Commentaires</option>')
for(i=0;i<menuencaps.length;i++){
j=i+1
O='<option id="option'
O+=j
var pos="relative"//position par défaut pour apparaître dans le menu

if(listpubcartovision[i]=="1"){pos="relative"}else{pos="absolute"}

O+='" style="position:'+pos+'" VALUE="javascript:a='
O+="'option"+j+"'"
O+=';changepage(a)">'
O+=j
O+=" "
O+=menuencaps[i]
O+='</option>'
document.write(O)
}

for(i=0;i<optionwiki.length;i++){

document.write('<option id="travail" value="javascript:appeltravail2(\''+optionwiki[i]+'\')">&nbsp;'+optionwiki[i]+'</option>')
}
document.write('</select></form></div>')

//document.write('<div style="position: absolute; left: -35px; top: 120px;"><iframe src="cartO2encapsuleILIADE.htm?1" id="Num0" name="Num0" style="border-color: white;border:1px dotted #000;" noresize="" marginwidth="0" marginheight="0" frameborder="0" height="'+(hauteurecran-4)+'" scrolling="no" width="'+(largeurecran-8)+'"></iframe></div>')
var largtext


//document.write('<div style="position: absolute; left: '+(largeurecran+15)+'; top: 50px;"><iframe src="cartO-'+menuencaps[0]+'-encaps.htm" id="Num0txt" name="Num0txt" noresize="" marginwidth="0" marginheight="0" style="border-color: white;" frameborder="0" height="'+(hauteurecran+33)+'" scrolling="yes" width="'+largtext+'"></iframe></div>')
//document.write('<div style="position: absolute; left: 507px; top: 120px;"><iframe src="cartO-'+menuencaps[0]+'-encaps.htm" id="Num0txt" name="Num0txt" noresize="" marginwidth="5" marginheight="5" style="border-color: white;border:1px dotted #000;" frameborder="0" height="'+(hauteurecran-4)+'" scrolling="yes" width="264"></iframe></div>')


//document.write('<div style="position: absolute; left: '+(315)+'; top: '+(610)+';"><a href="COPYING GNU.txt" onmouseover="javascript:chgbgetcolor(\'transparent\',this,\'red\');" onmouseout="javascript:chgbgetcolor(\'transparent\',this,\'white\')" style="color:gray"><font size="1" >&nbsp;&nbsp;Anact Cité & Publique&nbsp;&nbsp; &copy;[H.paris][2006-7][GPL]</font></a></div>')

//document.write('<div style="position: absolute; left: '+(largeurecran-460)+'; top: '+(hauteurecran+50+187)+';"><a><b><font face="Arial" color=gray size="1">Menus des Graphiques de données : </font></b></a></div>')




// boitier de commande générateur de balises
//document.write('<div id="com" name="com" style="position:absolute;visibility:visble;left:5;top:'+(hauteurecran)+'" ><table border=0  id="fondcom" cellpadding=0 cellspacing=0><TR><TD id="tabcom" width=20 height=10 ></TD><TD id="tabcom2" style="border:solid;padding:0px;color:gray" BGCOLOR="blue" align="right"><b><font id="textstatus" face="arial" color="white" size="2" >Commandes et générateur de méta-balises pour wikini&nbsp;&nbsp;</font></b><img src="tir.gif" width=20 height=20 onClick="javascript:ouvferouv()" onmouseover="javascript:ouvferfer()"></TD><TD BGCOLOR="blue"></TD></TR><TR><TD  id="tabcom3" width=10 ></TD><TD ><iframe  id="commande1" name="commande1" src="comtravailILIADE.htm" frameborder="1" width=400 height=250 style="background-color: transparent" ></iframe></TD><TD ></TD></TR></table></div>')

var agr=0


var largeurcadre0=400
document.write('<div id="imag0" name="imag0" style="position:absolute;left:'+(5+largeurcadre0)+';top:'+(hauteurecran)+';" ><img id="imag1" title="click=ouvert;survol=fermé " onClick="javascript:ouvferouv()" onmouseover="javascript:ouvferfer()" src="carretransparent.gif" width=60 height=40></div>')

var divpoint=document.getElementById('com')
var imagpoint=document.getElementById('imag0')
var imag1point=document.getElementById('imag1')

var divpoint0=hauteurecran// position de la frame ouverte
var commandewidth0=400
var commandeheight0=250
var imagpointleft0=5+largeurcadre0+100
var imagpointtop0=hauteurecran //sert à rien

document.write('<div id="mobile2" style="left:649;top:50;visibility:visible;position:absolute">')

document.write('<iframe  ALLOWTRANSPARENCY="true" id="zam2" src="vide.htm" width=300 height=0 style="padding:0px;" FRAMEBORDER=0 scrolling="no" name="zam2"></iframe>')

document.write('</div></div></td><td></TD></TR></table></div>')
// EFFACé POUR ILIADE : document.write('<div style="position:absolute;left:285;top:233" ><img src="black.jpg"></div>')
// EFFACé POUR ILIADE : document.write('<div style="position:absolute;left:195;top:233" ><img vidth=30 height=40 src="carretransparent.gif" onclick="javascript:window.location.href=\'http://precarite.fr\'"></div>')
//ouvferfer()
// cartog()// ouvre et rend visible les frames de la carto et des commentaires hypertextes SPECIAL CARTO VISION SANS ILIADE




*/



function razero(){


var trame2="<br><br><br><b>Vous vous préoccupez de votre pyramide des âges:</b><br>Décrivez votre situation en répondant au questionnaire, les atouts dont vous disposez et les risques que vous encourez : Iliade vous aidera à faire un point pour anticiper et préserver vos chances de développement.<br><br>En fonction de votre progression, des commentaires vous seront adressés afin de guider votre réflexion. Les commentaires sont illustrés par des témoignages ou des informations complémentaires.<br>Si vous êtes interrompu, ne craignez pas de perdre vos réponses, vous pourrez les enregistrer.<br>"

var trame3='<table><tr><td><small><b>Cliquez sur le point d\'interrogation pour accéder à l\'aide</b><br> </small></td></tr></table>'


for(i=Q.length;i>0;i--){navigQhaut()}
//
for(i=1;i<question.length+1;i++){
document.getElementById("Q"+(i)+"_1").checked=false
document.getElementById("Q"+(i)+"_2").checked=false
}
Q=new Array()
stockcyclelogiquetemp=new Array()
stockcyclelogique=new Array()
stockxboxtemp=new Array()
stockxbox=new Array()
stockxbox3=new Array()
stockxbox3temp=new Array()
//tabboxgauche=new Array()
//tabboxdroite=new Array()
//tabboxcorbeille=new Array()
document.getElementById("pointcle").innerHTML=trame2
document.getElementById("QR").innerHTML=""
document.getElementById("zonerepQ").innerHTML=trame3
//tabgauch=new Array()
//tabdroit=new Array()
//tabcorb=new Array()
document.getElementById("HBT").style.visibility="hidden"

document.getElementById("depart").id="departXX"
//578 158
for(za=1;za<tabboxdepart.length;za++){
//if(tabboxdepart[za]!=0){

document.getElementById('box'+za).firstChild.firstChild.src="carretransparent.gif"
;cache('box'+za);dropItems('box'+za,'departXX',448,233)
//}
}
//448 233
for(za=1;za<tabboxgauche.length;za++){

if(tabboxgauche[za]!=0){document.getElementById('box'+za).firstChild.firstChild.src="carretransparent.gif";cache('box'+za);dropItems('box'+za,'departXX',448,233)}
}
//838 238
for(za=1;za<tabboxdroite.length;za++){

if(tabboxdroite[za]!=0){document.getElementById('box'+za).firstChild.firstChild.src="carretransparent.gif";cache('box'+za);dropItems('box'+za,'departXX',838,233)}
}
//968 225
for(za=1;za<tabboxcorbeille.length;za++){

if(tabboxcorbeille[za]!=0){document.getElementById('box'+za).firstChild.firstChild.src="carretransparent.gif";cache('box'+za);dropItems('box'+za,'departXX',838,233)}
}
document.getElementById("departXX").id="depart"


}
