
if(document.getElementById("dragin").innerHTML.indexOf("BASE GEOJSON")>=0){

Z0=Z0/1.1
ax=ax-100
}


var nbgbal=document.getElementsByTagName("g");

function testPANORAMAmodel(){
for(i=2;i<nbgbal.length;i++){
if(nbgbal[i].getAttribute("transform")){
	if(nbgbal[i].getAttribute("transform").indexOf("matrix(0.2 0 0 0.2 80 180)")>=0){
		
		if(i<11){panoramaModele=1; 
		if(parent.location.href.indexOf("Normal")<0){Z0=Z0*1.2*1.1}else{Z0=Z0/1.2/1.2/1.2};
		ax-=285; ay-=30;
		}else{panoramaModele=2; 
		if(parent.location.href.indexOf("Normal")<0){Z0=Z0*1.2*1.2*1.2*1.2*1.2}else{Z0=Z0};
		ay+=20;
		}
		i=nbgbal.length
		
	}
	
}	
}
}

testPANORAMAmodel()

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

if(typeof(FicheEtTexte) == "undefined"){}else{
if(FicheEtTexte==1 || FicheEtTexte==2 ){
document.getElementById("divFiche2").style.display="none"
}
if( FicheEtTexte==3  ){
document.getElementById("divFiche2").style.display="block"

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
visiblebalise=0
if(visiblebalise==1){document.getElementById("divbalise").style.display="block"}






var xtx=" <br/>  <br/>  <br/>  <br/>  <br/>  <br/> "
zoomdepart=document.getElementById("totalsvg").getAttribute("transform")
dragdepart=document.getElementById("dragin").getAttribute("transform")
bz0=bz
ax0=ax
ay0=ay
CX0=CX
CY0=CY
if(document.getElementById("checklog")){
document.getElementById("checklog").checked=false
document.getElementById("checklog").value="0"
}


/* insertion d'un aire de synthèse et calcul du total sur la ligne doublée 
alert(base00[base00.length-9][1])

*/
/*
base00[base00.length]=new Array() // ajout d'une ligne vide
for(i=0;i<9;i++){// décallage des lignes vers le bas
var hautdessus=new Array()
hautdessus=base00[base00.length-1-i]

base00[base00.length-1-i]=new Array()
base00[base00.length-1-i]=hautdessus
}
for(i=1;i<base00.length;i++){// renumérotation des lignes
base00[i][0]=i

}




var nomshar="Western Sahara_EH";
var numshar=base00.length-10;
base00[numshar][1]=nomshar;
base00[numshar][2]=732;
for(j=3;j<base00.length-1;j++){
base00[numshar][base00.length-1]=0
}
base00[numshar][2]=732;
document.getElementById(numshar).setAttribute("xmlns","http://www.w3.org/2000/svg")
document.getElementById(numshar).setAttribute("onmouseout","javascript:passout(this)")
document.getElementById(numshar).setAttribute("onmouseover","javascript:passon(this)")
document.getElementById(numshar).setAttribute("title",nomshar)
document.getElementById(numshar).setAttribute("transform","matrix(1 0 0 1 0 0)")
document.getElementById(numshar).setAttribute("stroke-miterlimit","10")
document.getElementById(numshar).setAttribute("stroke-linecap","butt")
document.getElementById(numshar).setAttribute("stroke-linejoin","miter")
document.getElementById(numshar).setAttribute("stroke-width","0.5")
document.getElementById(numshar).setAttribute("fill","#EFF2F9")
document.getElementById(numshar).setAttribute("stroke","#7f7f7f")
document.getElementById(numshar).setAttribute("onclick","javascript:NoDatx="+numshar+";NoDatx22="+numshar+";svgclick1()")
document.getElementById(numshar).setAttribute("fill-opacity","1")

document.getElementById("c"+numshar).setAttribute("cx",342.13)
document.getElementById("c"+numshar).setAttribute("cy",230.52)
document.getElementById("c"+numshar).setAttribute("onclick","javascript:NoDatx="+numshar+";svgclick2()")
document.getElementById("npath"+numshar).setAttribute("d","M 342.13 230.52 m 0 0 l0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 ")
document.getElementById("npath"+numshar).setAttribute("onclick","javascript:NoDatx="+numshar+";svgclick2()")
nomzone[numshar]=nomshar
document.getElementById(numshar).firstChild.setAttribute("id","p"+numshar)
document.getElementById(numshar).firstChild.setAttribute("d","M 342.13 230.52 L 329.24 230.46 L 325.65 233.95 L 322.93 238.8 L 320.94 241.89 L 317.32 247.99 L 317.32 249.48 L 318.37 248.25 L 318.45 248.25 L 329.03 248.86 L 328.38 245.55 L 328.32 245.4 L 328.51 243.75 L 329.87 242.49 L 330.5 242.49 L 332.07 242.41 L 332.36 242.25 L 332.88 234.87 L 341.84 235.08 L 342.29 231.85 L 342.13 230.52 342.13 230.52 ")
document.getElementById(numshar).firstChild.setAttribute("stroke-width","0.5px")
AjoutBaliseTitre("p"+numshar,"TitreAire"+numshar)
changeInBaliseTitre("TitreAire"+numshar,nomshar)

document.getElementById(64).firstChild.setAttribute("d","M 342.06 230.51 L 329.25 230.45 L 330.55 229.51 L 335.62 226.37 L 339.4 223.75 L 339.69 222.54 L 339.6 218.23 L 341.79 216.48 L 342.75 213.96 L 344.47 213.01 L 346.12 211.85 L 348.75 208.37 L 351.85 205.27 L 354.72 207.29 L 358.46 206.73 L 361.81 207.28 L 362.43 211.42 L 363.94 214.38 L 364.87 215.85 L 359.69 216.18 L 358.55 218.05 L 356.29 217.4 L 356.99 219.94 L 350.31 223.39 L 348.08 223.43 L 346.13 224.98 L 343.47 224.73 L 342.07 226.49 L 341.94 229.41 L 341.94 229.41 342.06 230.51 ")
*/

if(typeof(visiontotal)!="number"){}else{
if(visiontotal==1){/* dans parametres.js*/


base00[base00.length]=new Array() /* ajout d'une ligne vide*/
for(i=0;i<9;i++){/* décallage des lignes vers le bas*/
var hautdessus=new Array()
hautdessus=base00[base00.length-1-i]

base00[base00.length-1-i]=new Array()
base00[base00.length-1-i]=hautdessus
}
for(i=1;i<base00.length;i++){/* renumérotation des lignes*/
base00[i][0]=i

}

var nomtot="Ensemble de la Carte"
var somm
for(j=3;j<base00[0].length;j++){/* calcul des sommes par colonne et affectation à la ligne insérée par le décalage vers le bas*/
somm=0
var except=0
for(ex1=0;ex1<exceptionColArray.length;ex1+=1){
if(j==exceptionColArray[ex1]){except=1}
}
if(except==0){
var constanteTest=0
for(i=1;i<base00.length-10;i++){
var except2=0
for(ex2=0;ex2<exceptionArray.length;ex2+=1){
if(i==exceptionArray[ex2]){except2=1}
}
if(except2==1){/*if(j==27){alert(except2)}*/}else{


if(base00[i][j]!=-99999 & base00[i][j]!=""){somm+=base00[i][j]}
if(i>2){/*détection des constantes*/

//var tst1=base00[i-2][j];var tst2=base00[i-1][j];var tst3=base00[i][j];
//if(tst1==tst2 & tst2==tst3 & tst2!=-99999 & tst2!=0 ){constanteTest=1;i=base00.length}
if(base00[0][j]=="100" || base00[0][j]=="1"   || base00[0][j]=="2" || base00[0][j]=="cent" || base00[0][j]=="un"   || base00[0][j]=="deux" ){constanteTest=1;i=base00.length}

}
}
}
if(constanteTest==1){somm=base00[1][j]};
//alert(base00[0][j])
if(base00[0][j]!=0){
if(base00[0][j].indexOf("%")>0 || base00[0][j].indexOf("pourcent")>0 || base00[0][j].indexOf("percent")>0){somm=-99999}
}
}else{somm=-99999}

if(document.getElementById(numtot)){
	//cas des dossiers Carte crées avec la matrice originale qui a plus de <g id="x" que d'aires effectives
}else{//créer une aire et les circle, npath et fpath associés
var svgns = "http://www.w3.org/2000/svg";
var nouv=document.createElementNS(svgns,"g")
nouv.setAttribute("id",(base00.length-10))
document.getElementById("dragin").appendChild(nouv)	
var nouv=document.createElementNS(svgns,"path")
nouv.setAttribute("id","p"+(base00.length-10))
document.getElementById(base00.length-10).appendChild(nouv)	

var nouv=document.createElementNS(svgns,"circle")
nouv.setAttribute("id","c"+(base00.length-10))
document.getElementById("dragin").appendChild(nouv)	

var nouv=document.createElementNS(svgns,"g")
nouv.setAttribute("id","n"+(base00.length-10))
document.getElementById("dragin").appendChild(nouv)	
var nouv=document.createElementNS(svgns,"path")
nouv.setAttribute("id","npath"+(base00.length-10))
document.getElementById("n"+(base00.length-10)).appendChild(nouv)	



var nouv=document.createElementNS(svgns,"g")
nouv.setAttribute("id","f"+(base00.length-10))
document.getElementById("dragin").appendChild(nouv)	
var nouv=document.createElementNS(svgns,"path")
nouv.setAttribute("id","fpath"+(base00.length-10))
document.getElementById("f"+(base00.length-10)).appendChild(nouv)
}
	




base00[base00.length-10][j]=somm

}

		
			
			
//alert("section4  "+base00[base00.length-10][230])
numtot=base00.length-10

document.getElementById(numtot).setAttribute("xmlns","http://www.w3.org/2000/svg")
document.getElementById(numtot).setAttribute("onmouseout","javascript:passout(this)")
document.getElementById(numtot).setAttribute("onmouseover","javascript:passon(this)")
document.getElementById(numtot).setAttribute("title",nomtot)
document.getElementById(numtot).setAttribute("transform","matrix(1 0 0 1 0 0)")
document.getElementById(numtot).setAttribute("stroke-miterlimit","10")
document.getElementById(numtot).setAttribute("stroke-linecap","butt")
document.getElementById(numtot).setAttribute("stroke-linejoin","miter")
document.getElementById(numtot).setAttribute("stroke-width","0.5")
document.getElementById(numtot).setAttribute("fill","#EFF2F9")
document.getElementById(numtot).setAttribute("stroke","#7f7f7f")
document.getElementById(numtot).setAttribute("onclick","javascript:NoDatx="+numtot+";NoDatx22="+numtot+";svgclick1()")
document.getElementById(numtot).setAttribute("fill-opacity","1")
var lx=500+120;
var ly=425-300;
document.getElementById("c"+numtot).setAttribute("cx",lx)
document.getElementById("c"+numtot).setAttribute("cy",ly)
document.getElementById("c"+numtot).setAttribute("onclick","javascript:NoDatx="+numtot+";svgclick2()")
document.getElementById("npath"+numtot).setAttribute("d","M "+lx+" "+ly+" m 0 0 l0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 ")
document.getElementById("npath"+numtot).setAttribute("onclick","javascript:NoDatx="+numtot+";svgclick2()")
nomzone[numtot]=nomtot
document.getElementById(numtot).firstChild.setAttribute("id","p"+numtot)
document.getElementById(numtot).firstChild.setAttribute("d","M "+(lx-25)+" "+(ly-25)+" L "+(lx+25)+" "+(ly-25)+" L "+(lx+25)+" "+(ly+25)+" L "+(lx-25)+" "+(ly+25)+" "+(lx-25)+" "+(ly-25)+" ")
document.getElementById(numtot).firstChild.setAttribute("stroke-width","0.5px")

		AjoutBaliseTitre("p"+numtot,"TitreAire"+numtot)
		changeInBaliseTitre("TitreAire"+numtot,nomtot)
		AjoutBaliseTitre("c"+numtot,"TitreCercle"+numtot)
		changeInBaliseTitre("TitreCercle"+numtot,nomtot)
		AjoutBaliseTitre("fpath"+numtot,"TitreForme"+numtot) 
		changeInBaliseTitre("TitreForme"+numtot,nomtot)
		AjoutBaliseTitre("npath"+numtot,"TitreNeg"+numtot)
		changeInBaliseTitre("TitreNeg"+numtot,nomtot)



exceptionArray[exceptionArray.length]=numtot
if(exceptionArray.length==1){exceptionArray[exceptionArray.length]=0}
}
}

var styledivrech=document.getElementById("divrecherche").getAttribute("style")
styledivrech=styledivrech.replace(111000,11100000)
document.getElementById("divrecherche").setAttribute("style",styledivrech)

// -------------------------------- GESTION EN MODE BLANC ---------------


var testBlancOnglet=0
if(essaiBLANC==1){
	if(parent.location.href.indexOf("onglet")>=0){testBlancOnglet=1}else{
		if(parent.document.getElementById("div0")){
parent.document.getElementsByTagName("iframe")[0].style.width=(Wsvg+30)+"px"

parent.document.getElementById("div0").style.width=(Wsvg+30)+"px"
parent.document.getElementById("imgtrame").style.width=(Wsvg+30)+"px"

document.getElementById("hypertexte").setAttribute("onload","parent.chargehypert()")
document.getElementById("innerhisto").style.display="none"

document.getElementById("rectmove").setAttribute("style","fill:white")
document.getElementById("effaffcouleurcarte").style.display="none"
document.getElementById("grad2").innerHTML=""



document.getElementById("PlusSign").parentNode.style.display="none"
document.getElementById("b21").parentNode.style.display="none"
document.getElementById("PClogo2").style.display="none"
document.getElementById("PClogo1").style.display="none"
document.getElementById("rondleg").parentNode.parentNode.parentNode.parentNode.parentNode.style.display="none"
document.getElementById("fondleg").parentNode.parentNode.style.display="none"

document.getElementById("legfondtablibel").setAttribute("style","border:0.5px solid gray;font-size:9px")
document.getElementById("legfondtab").setAttribute("style","border:0.5px solid gray;font-size:7px")
document.getElementById("legicotablibel").setAttribute("style","border:0.5px solid gray;font-size:9px")
document.getElementById("legicotab").setAttribute("style","border:0.5px solid gray;font-size:7px")

document.getElementById("hypertexte").style.display="none"








document.getElementById("divMenuPalette").style.display="none"
document.getElementById("divMenuRadio").style.display="none"
document.getElementById("divrecherche").style.display="none"
document.getElementById("divMenuQuantiles").style.display="none"
document.getElementById("divMenuIco").style.display="none"
document.getElementById("divMenuHisto").style.display="none"


}

}
}
function svgclick2(){

calculHisto(NoDatx,iSujet)
if(testBlancOnglet==0){
parent.copygraph()
}
}

function svgclick1(){

calculHisto(NoDatx,iSujet)
if(testBlancOnglet==0){
parent.copygraph()
}
}

// fonctions d'export des cartes et légendes au format svg

			 
			function ajoute_export(){
			var nouv2=document.createElement("div");
			nouv2.setAttribute("id","blexport")
			document.getElementById("effaffcouleurcarte").appendChild(nouv2)
			var nouv22=document.createTextNode("xxx")
			document.getElementById("blexport").appendChild(nouv22)
			document.getElementById("blexport").innerHTML='  <span onclick="exe_export()" style="cursor:pointer;color:blue">  <u>Exporter</u></span>';
			}
			setTimeout("ajoute_export()",500)   
			function exe_export(){
			
			window.frames.frameContour.location.href="export_Map.html"
			}
