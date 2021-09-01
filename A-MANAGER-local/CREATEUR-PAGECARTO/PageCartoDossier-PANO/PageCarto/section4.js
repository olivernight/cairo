
if(document.getElementById("dragin").innerHTML.indexOf("BASE GEOJSON")>=0){

Z0=Z0/1.1
ax=ax-100
}

if(format=="big"){
document.getElementById("syntheseCarte").style.right="22px"
}
if(format=="normal"){
//document.getElementById("divrecherche").style.display="none"
}

if(format=="small"){
document.getElementById("syntheseCarte").style.right="37px"
//document.getElementById("divrecherche").style.display="none"
document.getElementById("divclic").style.display="none"
document.getElementById("effFond").innerHTML="efface le fond"
document.getElementById("hypertexte").setAttribute("style","border: 2px solid #BEC4CD;-moz-border-radius: 5px;")
document.getElementById("PClogo1").style.display="none"
document.getElementById("PClogo2").style.display="none"
document.getElementById("pinsertici").style.top="-5px"
document.getElementById("Tinsertici").width="615"
}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx module drag and drop de la fiche xxxxxxxxxxxxxxxxxxxxxxxxx

var DEF=1
var finitialized=false
var XfYf0=0
var Xf=870	
var Yf=90
var CXf=0
var CYf=0
var Xf1=0;
var Yf1=0;

function moveZoomFiche(event){ 
//-----------------------------------------------------------------cas FireFox

if(XfYf0==1){
if(finitialized==true){
Xf1=-(event.clientX-Xf)
Yf1=-(event.clientY-Yf)

/*
var reg=new RegExp("[ ,;]+", "g");
var zoo=document.getElementById("dragin").getAttribute("transform").split(reg)
zoo[0]=parseFloat(zoo[0].replace("matrix(",""))
var mat="matrix("+zoo[0]+", 0, 0, "+zoo[3]+", "+(CXf-Xf1)+", "+(CYf-Yf1)+" )"
*/

document.getElementById("divFiche").style.left=(Xa-Xf1)+"px"
document.getElementById("divFiche").style.top=(Ya-Yf1)+"px"
document.getElementById("divFiche2").style.left=(Xa-Xf1)+"px"
document.getElementById("divFiche2").style.top=(Ya-Yf1)+"px"
}
}//fin de if XfYf0
document.getElementById("tabFiche").addEventListener("mouseup",Fichedisable,true)

//return false;
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx disable xxxxxxxxxxxxxxxxxxxxxxxxx

function Fichedisable(event){
//------------------------------------------------------------------------------cas FireFox----------------------------------------------------

XfYf0=0
if(XfYf0==0){
finitialized=false;
//Xf=Xf-Xf1
//Yf=Yf-Yf1
Xf1=0
Yf1=0
}//fin du if XfYf==0 

}
var Xa
var Ya
function initXfYf(event){

XfYf0=1
if(XfYf0==1){
if(DEF==1 & finitialized==false){

Xa=parseFloat(document.getElementById("divFiche").style.left)
Ya=parseFloat(document.getElementById("divFiche").style.top)
Xf = event.clientX;
Yf = event.clientY;
finitialized=true;
}
}
}
// fin du module drag and drop de la fiche
					/*
					var ne=document.createElement("div")
					ne.setAttribute("style","position:absolute;top:0px;left:0px;width:100px;height:200px")
					ne.setAttribute("id","metaX")
					document.getElementById("divtexte").appendChild(ne)
					*/
					
					
var xdataCLOUD=new Array()
function recupDataCLOUD(a,b){
xdataCLOUD=new Array()
var xdataC=new Array()
for(i=1;i<base00.length-9;i++){
xdataC=new Array()
xdataC[0]=base00[i][a]
xdataC[1]=base00[i][b]
xdataC[2]=base00[i][0]
xdataC[3]=base00[i][1].replace("'"," ")
xdataCLOUD[i]=xdataC
}
return xdataCLOUD
}
var nuageici=0
function xnuage(a){
nuageici=a

}

function passonnuage(a){
if(nuageici==1){
if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){
a=a+""
var a2=a.replace("c","")
if(window.frames.frames[document.getElementsByTagName("iframe").length-1].pointerArea("Rond"+a2)){
window.frames.frames[document.getElementsByTagName("iframe").length-1].pointerArea("Rond"+a2)
}
//window.frames.frames[4].pointerArea("Rond"+a2)
}
}
}
function passoutnuage(a){
if(nuageici==1){
if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){
a=a+""
a2=a.replace("c","")
if(window.frames.frames[document.getElementsByTagName("iframe").length-1].DepointerArea("Rond"+a2)){
window.frames.frames[document.getElementsByTagName("iframe").length-1].DepointerArea("Rond"+a2)
}
//window.frames.frames[4].DepointerArea("Rond"+a2)
}
}
}
function fixnodatx(a){NoDatx=a}
function effaceRondX(){
for(i=1;i<base00.length-9;i++){
document.getElementById("c"+(i)).setAttribute("r",0)
document.getElementById("c"+(i)).setAttribute("fill","transparent")
var R=0
ineg=i
//var coordnom=menuAreas[i-1]
var AL=document.getElementById("c"+(ineg)).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(ineg)).getAttribute("cy")//coordnom[1]

var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "


document.getElementById("npath"+ineg).setAttribute("d",dx)
document.getElementById("npath"+ineg).setAttribute("fill","black")
document.getElementById("npath"+ineg).setAttribute("stroke","none")

}
}
var curveselector=""// mémoire du bouton sélecteur des courbes additionnelle du graphique en courbe
function stockcurveselector(a){

curveselector=a
}
function recupcurveselector(){
return curveselector
}
var menucompareMDGsREF="" // pop de référence dans le cas de l'OPTION=1 dans courbe
function stockmenucompareMDGsREF(a){
menucompareMDGsREF=a
}
function RetournemenucompareMDGsREF(a){
return menucompareMDGsREF
}

var menucompareMDGs=0
function stockmenucompareMDGs(a){
menucompareMDGs=a
}
function RetournemenucompareMDGs(a){
return menucompareMDGs
}
// récupère une donnée directement dans la base pour MDGs comparaison avecles sous régions

function recupDataPourMDGs(aire){
var xdataMDGs=base00[aire]
//xdataMDGs[28]=-99999
//xdataMDGs[57]=-99999
return xdataMDGs
}
// récupère une donnée directement dans la base pour fiche.htm
function recupDataPourFiche(a){
var xdata=base00[NoDatx][a-1]
if(xdata==-99999){xdata=""}
return xdata
}
var indicfiche=0
//Récupère une donnée dans la base pour fiche.htm, via le MENU ico sujet
function recupDataMenuPourFiche(m){
indicfiche=1 //inhibiteur du stockage des résultats de calcul dans calculIcone()
var xdata=calculIcone(m-1)
indicfiche=0 // fin de l'inhibition du stockage des résultats de callcul dans calculIcone()
if(xdata[NoDatx]==-99999){return "nd"}else{
return xdata[NoDatx]
}
}
function recupIndicCouche(){
return dernierecouche
}
document.getElementById("tabFiche").addEventListener("mousemove",moveZoomFiche,true)
document.getElementById("tabFiche").addEventListener("mousedown",initXfYf,true)
document.getElementById("prop").checked=true //proportionnel
boitebalise();
reglagePanels()// réglage des parametre de mise en page

if(visiblebalise==1){document.getElementById("divbalise").style.display="block"}






var xtx=" <br/>  <br/>  <br/>  <br/>  <br/>  <br/> "
zoomdepart=document.getElementById("totalsvg").getAttribute("transform")
dragdepart=document.getElementById("dragin").getAttribute("transform")
bz0=bz
ax0=ax
ay0=ay
CX0=CX
CY0=CY