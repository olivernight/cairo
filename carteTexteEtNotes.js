
//xxxxxxxxxxxxx dimension de la iframe "zoom" dans laquelle s'affiche la carte. Dans ce script HTML, l'iframe zoom est remplacꥠpar une fonction write dont l'argument est rꤵp곩 par un script javascript dans la variable ABC. Le texte HTML de la balise iframe zoom se trouve dans le fichier pilote html.
var initout=top.frames.Num0.frames.pilote.transinitout("return initout")
//alert(top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex)
if(top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex==0){initout=0;}else{initout=1}
//alert(initout)
function chgbgcolor(a,b){
a="background-color:"+a
b.setAttribute('style',a)
}
var icik=0 // variable pour le bouton zoom-
transHL=top.frames.Num0.transHLecran("return transHL")
var HFrame=transHL[1]//505;
var LFrame=transHL[0]//838;
var LFrame0
var HFrame0
var LZOOM
//---------------------------------------------
var indicraz=0
var coefzoom0
var coefzoom=1
var rayplusmoins
var initretrait=0
var legiconeretrait=-600
var legfondretrait=-600
var xleg0=20
var yleg0=30
var xleg=xleg0
var yleg=yleg0
var xtemp=xleg0
var ytemp=yleg0
var hautleg=-80 //variable d'ajustement initial pour iconelegende
var kleg=1
var xlegdelta=0
var ylegdelta=0
var initialized2=false
var ABC="" // variable qui sert ࡲꤵp곥r le texte de la balise iframe "zoom" envoy顰ar la fonction change du fichier pilote.html
var zX=(HFrame/533)

var zXinitial=zX
function retournezX(){return zXinitial}
var zX0=zX
var CX=0//150 // rꨧlage horizontal de la position du SVG
var CY=0//-320 // rꨧlage vertical de la position du SVG
var CX0=CX
var CY0=CY
//top.frames.Num0.document.getElementById("variable2").style.visibility="visible"
//xxxxxxxxxxxxxxxxxxx variables de stockage des coordonn꦳ des Shapes "circle" situ꦳ dans les area de la map accollꥠ࡬a carte ins곩e par src dans le fichier ins곩 par src dans l'iframe "zoom"
var hide1=0
var Hza2bis
var C1 ;
var C21;
var C22;
var C23;
//xxxxxxxxxxxxxxxxx variables de stockage intermꥩaire dans la fonction zoom
var LL
var HH
//xxxxxxxxxxxxxxx variable dans laqelle est stock顬'"objet" ࡺoomer
var DOC="carretransparent.gif"

var AZI // compter de la fonction zoom0 qui sert ࡲecadrer les coordonn꦳ de l'iframe zoom lors du retour des op곡tion href quand on clik sur les zones sensbles de la map.

var zoomFactor=20 // taux d'aggrandissement entier entre 0 et 100

var DEF=1 // variable qui rꤵp鳥 un indicateur provenant du fichier contenant la carte et son map - cet indicateur sert ࡤiscriminer les 귥nnement onmousemove des 귥nnements click mouseup et mouse down de mani鳥 ࡤistinguer l'action de d걬acement de la carte et la sꭥction des zones sensibles du map

//xxxxxxxxxxxxxxxxxx divers variables utilis꦳ dans les fonctions
var tempY,tempX,X,Y,rX,rY,tempW,tempH,zoomBox;
var initialized=false


var ZI=1; // compteur de zoom

var deltamoveX=0;//= valeur du d걬acement reportꥠdans les fonction zoomIn et zoomOut
var deltamoveY=0;

//xxxxxxxxxxxx Dimensions des iframes d'affichage de la lꨥnde et des donn꦳
var Lza=0 //210;
var Hza=0 //400;
var Lza2=110;
var Hza2=135;

var Lza3=450;
var Hza3=450;

var XY0=0
var zzzz=0

//xxxxxxxxxxxxxxcoordonn꦳ initiales de zoomBox, (premi鳥 balise <div>)
var X0=0;
var Y0=0;
//xxxxxxxxxx variable de stockage intermꥩaire pour la fonction zoom
var X1=0;
var Y1=0;
var xx1=0
var yy1=0
//xxxxxxxxxxxxxx variables intermꥩaires dans la fonction zoom et zoom0
var trucy0;
var trucx0;
var trucy=Y0;
var trucx=X0;
var trucx2;
var trucy2;

var X10=0
var Y10=0

var tapx=top.location.href
tapx=tapx.indexOf("A0A",0)
//xxxxxxxxxxxxxxxxxxxxxx variables de centrage du zoom (rꨬage plus ou moins empirique)
var WindX=LFrame*0.4375//350;
var WindY=HFrame*0.534 //270;

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx DEBUT DU SCRPTxxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

function retourneX0(){return X0}

function esss2(){
var aprint=top.frames.Num0.frames.couches.zoom.document.getElementById("trans").innerHTML
//document.getElementById("zoomBox").innerHTML
return aprint
}


function rien(){
for(i=1;i<1000;i++){}
}
function transhautleg(){
return hautleg
}


function documentallhistoLZA0(){
return Lza2}
function documentallhistoHZA0(){
return Hza2}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx d걬acement xxxxxxxxxxxxxxxxxxxxxxxxx
var CXX
var CYY
function moveZoomBox(event){ 
if(document.all){
if(XY0==1){

    

if(initialized==true){
zoomBox.style.pixelLeft=tempX-(event.clientX-X)
zoomBox.style.pixelTop=tempY-(event.clientY-Y)
trucx2=zoomBox.style.pixelLeft;
trucy2=zoomBox.style.pixelTop;
if(trucx2-trucx!=0 || trucy2-trucy!=0){ 
top.frames.Num0.frames.couches.zoom.selectarea0()
}else{
  //alert("ici")
top.frames.Num0.frames.couches.zoom.selectarea1()
}
if(trucx2>(LL-LFrame0+X0)){trucx2=LL-LFrame0+X0}
if(trucy2>(HH-HFrame0+Y0)){trucy2=HH-HFrame0+Y0}
if(trucy2<Y0){trucy2=Y0}
if(trucx2<X0){trucx2=X0}
top.frames.Num0.frames.couches.zoom.scrollTo(trucx2,trucy2);
return false;

}
}//fin de if XY0

}else{//-----------------------------------------------------------------cas FireFox

if(XY0==1){
if(initialized==true){

X1=-(event.clientX-X)
Y1=-(event.clientY-Y)




var mat="matrix("+zX+" 0 0 "+zX+" "+(CX-X1)+" "+(CY-Y1)+" )"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").setAttribute("transform",mat)

}
}//fin de if XY0


top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").addEventListener("mouseup",disable,true)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").addEventListener("mouseup",disable,true)
return false;
}
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx disable xxxxxxxxxxxxxxxxxxxxxxxxx

function disable(event){
if(document.all){
XY0=0
if(XY0==0){
initialized=false;
deltamoveX=trucx2-trucx;
deltamoveY=trucy2-trucy;
trucx=trucx2
trucy=trucy2
X1+=deltamoveX;
Y1+=deltamoveY;


callegende()
}//fin du if XY==0

}else{//------------------------------------------------------------------------------cas FireFox----------------------------------------------------

//top.frames.Num0.frames.couches.zoom.movekimage(-X1,-Y1)// déplacement de l'arrière plan image : inhibé
XY0=0
if(XY0==0){

//trucx2-=X1
//trucy2-=Y1
trucx=trucx2
trucy=trucy2
initialized=false;
CX=CX-X1
CY=CY-Y1

X1=0
Y1=0

}//fin du if XY==0

}

}


function callegende(){

xleg=xtemp
yleg=ytemp
xleg=parseInt(xleg)+parseInt(deltamoveX)
yleg=parseInt(yleg)+parseInt(deltamoveY)
xtemp=xleg
ytemp=yleg
reposeleg()
}

function recupinitretrait(){initretrait=top.frames.Num0.frames.couches.zam3.recupinitanalyse("return initdataanalyse")}
var initanal=0
var initlegcouche=0
var Xlegcouche0
var Ylegcouche0

function callegendeCouchezoom(){// gère le repositionnement de a légende des couches svg "nappes" après l'exécution des functions zoomin zomout et razclick
var htmldocument=top.frames.Num0.frames.couches.zoom.document


var Ylegendecouche=parseInt(htmldocument.trans.getSVGDocument().getElementById("GlegendeCouche").getAttribute("transform").split(',')[1].replace(")",""))
var Xlegendecouche=parseInt(htmldocument.trans.getSVGDocument().getElementById("GlegendeCouche").getAttribute("transform").split(',')[0].replace("translate(",""))

  if(initlegcouche==0){Xlegcouche0=Xlegendecouche;Ylegcouche0=Ylegendecouche}
  initlegcouche=1
  if(ZI==1){
  Ylegendecouche=Ylegcouche0
  Xlegendecouche=Xlegcouche0
  }else{
Ylegendecouche=Ylegendecouche+kleg*ylegdelta
Xlegendecouche=Xlegendecouche+kleg*xlegdelta
}
htmldocument.trans.getSVGDocument().getElementById("GlegendeCouche").setAttribute("transform","translate("+Xlegendecouche+","+Ylegendecouche+")")
}

function callegendezoom(){ //gère le repositionnement des légendes après l'exécution des functions zoomin zomout et razclick

if(initanal==0){initanal=top.frames.Num0.frames.tab.recupinitanal("initanal")}

xleg=xtemp
yleg=ytemp
xleg=parseInt(xleg)+kleg*xlegdelta
yleg=parseInt(yleg)+kleg*ylegdelta
xtemp=xleg
ytemp=yleg
reposeleg()
if(initanal==1){
top.frames.Num0.frames.couches.zoom.acroiscerclelegende()
}
callegendeCouchezoom()
}

function retourcoefz(){return coefzoom}
var k=0


function reposeleg(){// repositionne la légende après les chargements de variable , application di fond et zoom + et - etc..
if(initretrait==1){

legiconeretrait=top.frames.Num0.frames.couches.zam3.translegiconeretrait("return legiconeretrait")
legfondretrait=top.frames.Num0.frames.couches.zam3.translegfondretrait("return legfondretrait")

}else{
legiconeretrait=-400
legfondretrait=-400
}
var  z2=top.frames.Num0.frames.couches.zaguide.transz2("return z2")//indicateur positionn顰ar guide.htm dans frames zaguide pour indiquer qu'une question appliquꥠn'a pas d'icone sur carte mais seulement le fond de carte et l'incone encadr鍊var fenetreouv=top.frames.Num0.transfenetre("return fenetre")

if(z2==0){legiconeretrait=-400;k+=1

if(fenetreouv=="cartO2" ){

top.frames.Num0.cachePM0(1)
}
}
else{
  if(fenetreouv=="cartO2" ){
  top.frames.Num0.cachePM0(0)
  }
  }

var mat="matrix(1 0 0 1 "+( xleg-xleg0)+" "+( yleg-yleg0+hautleg+legiconeretrait)+")"


top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("iconeslegende").setAttribute("transform",mat)
var fenetreouv=top.frames.Num0.transfenetre("return fenetre")

if(fenetreouv=="cartO2"){

  var sansfondx=top.frames.Num0.transsansfondx("return sansfondx")

  if(sansfondx==1){legfondretrait=-400}else{legfondretrait=0}
}
//indicarte=top.frames.Num0.frames.couches.zam3.transindicarte("return indicarte")
//if(indicarte==0){legfondretrait=-400}
//alert(legfondretrait)//top.frames.Num0.frames.couches.zam3.ttransindicarte("return indicarte")

var mat="matrix(1 0 0 1 "+( xleg-xleg0)+" "+( yleg-yleg0+legfondretrait)+")"

top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("coulf").setAttribute("transform",mat)
var inner=top.frames.Num0.frames.couches.frames.zam3.document.getElementsByTagName("body")[0].innerHTML

if(inner.indexOf("htm")>=0){
var init1=top.frames.Num0.frames.couches.frames.zam3.recupINIT1()
}

if(init1==1){hiddenlegende()}else{visiblelegende()}
if(z2==0){if(k==2){top.frames.Num0.frames.couches.zaguide.forcez2();k=0}}
//alert("cartenormale.js fonction reposeleg(): sansfondx="+sansfondx+"   legiconeretrait="+ legiconeretrait+"    legfondretrait="+ legfondretrait)
}
function hiddenlegende(){
 if(initout==1){
var mat="matrix(1 0 0 1 0 -600)"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("legende").setAttribute("transform",mat)
 }
}
function visiblelegende(){
 if(initout==1){
var mat="matrix(1 0 0 1 0 0)"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("legende").setAttribute("transform",mat)
 }
}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx initXY xxxxxxxxxxxxxxxxxxxxxxxxx

function initXY(event){

XY0=1
if(XY0==1){
if(document.all){ 
if(DEF==1){

zoom0()

X = event.clientX;
Y = event.clientY;
tempX=zoomBox.style.pixelLeft;
tempY=zoomBox.style.pixelTop;
initialized=true;


}
}
else { 
if(DEF==1 & initialized==false){

zoom0()


X = event.clientX;
Y = event.clientY;
tempX=0//zoomBox.style.pixelLeft;
tempY=0//zoomBox.style.pixelTop;

//trucy2=trucx
//trucx2=trucy

initialized=true;
//moveZoomBox(event)
//top.frames.Num0.frames.couches.zoom.document.onmousemove=moveZoomBox
}
}
}//fin de if XY0

}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx resize xxxxxxxxxxxxxxxxxxxxxxxxx

function resize(){

zoomBox.style.pixelLeft=X0;
zoomBox.style.pixelTop=Y0;

//window.frames.zoom.scrollTo(X0,Y0);
zoomBox.style.visibility = "visible";
trucx=zoomBox.style.pixelLeft
trucy=zoomBox.style.pixelTop
CX=CX0
CY=CY0
//top.frames.Num0.frames.couches.zoom.movekimage(CX-CX0,CY-CY0)// déplacement sous couche arrière plan : inhibé
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx raz = vue initiale xxxxxxxxxxxxxxxxxxxxxxxxx

function razclick(){

indicraz=1
zX=zX0
CX=CX0
CY=CY0
//top.frames.Num0.frames.couches.zoom.movekimage(CX-CX0,CY-CY0)
//alert("la")
for(var j=ZI;j>1;j--){
coefzoom*=1/coefzoom
top.frames.Num0.frames.datacarte.ZoomSousCouches(1,1,trucx,trucy)// (1/(1+coefzoom/100))zoom sous couche arrière plan : inhibé
}
ajusttraitetpolice0()

init()

var mat="matrix("+zX+" 0 0 "+zX+" "+CX+" "+CY+")"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").setAttribute("transform",mat)


//top.frames.Num0.frames.couches.frames.zoom.zoomcouchessuplement()
//window.frames[2].zoompos()
xleg=xleg0
yleg=yleg0
xtemp=xleg0
ytemp=yleg0

reposeleg()
if(initanal==1){
top.frames.Num0.frames.couches.frames.zoom.acroiscerclelegende()
}
callegendeCouchezoom()
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx fonction init xxxxxxxxxxxxxxxxxxxxxxxxx
var debx=0
var zici
function init(){

//if(top.frames.Num0.frames.paramcarte.zoomdepart("return z" ){//les paramètres de réglage sont dans correctifcoord.js dans le dossier de la carte
if(debx==0){
debx=1
zici=top.frames.Num0.frames.paramcarte.zoomdepart("return z")
zX=zici[0]*zX// réglage du zoom par défaut
zX0=zX
CX+=zici[1]*zXinitial//décallage du svg en x
CY+=zici[2]*zXinitial //décallage du svg en y
CX0=CX
CY0=CY
}
//}

zoomBox=document.getElementById('zoomBox');
//zoomBox.style.visibility = "hidden";
//document.getElementById("zoom").style.overflow="hidden"

//DOC=window.frames[2].document.getElementById("trans")//.document.images[0];
DOC=window.frames.zoom.document.getElementById("trans")
DOC.style.overflow="hidden"


LL=LFrame
HH=HFrame

//window.frames.zoom.scrollTo(X0,Y0);

resize()


//document.getElementById('za').width=0 //Lza;
//document.getElementById('za').height=0 //Hza;



//top.frames.Num0.frames[2].document.getElementById('za').style.visibility="hidden";
if(indicraz==0){
top.document.getElementById('zam2').width=Lza2;
top.document.getElementById('zam2').height=Hza2;
top.document.getElementById('zam2').style.visibility="hidden";
top.frames.Num0.frames.pilote.visioTOUTDATA()
}



LFrame0=LFrame
HFrame0=HFrame

document.getElementById('mobile6').style.top=-5;
document.getElementById('zam4').width=1;
document.getElementById('zam4').height=1;

ZI=1
//

//var mat="matrix("+zX+" 0 0 "+zX+" "+CX0+" "+CY0+")"
//top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
even()
//zoomOut()
zoom0()

top.frames.Num0.frames.couches.zoom.document.trans.getSVGDocument().getElementById("imagesfond1").setAttribute("width",LFrame/zX)
top.frames.Num0.frames.couches.zoom.document.trans.getSVGDocument().getElementById("imagesfond1").setAttribute("height",HFrame/zX)
top.frames.Num0.frames.couches.zoom.document.trans.getSVGDocument().getElementById("imagesfond2").setAttribute("width",LFrame/zX)
top.frames.Num0.frames.couches.zoom.document.trans.getSVGDocument().getElementById("imagesfond2").setAttribute("height",HFrame/zX)
}
function test2(event){top.test(event)}
function even(){
if(document.all){ // gestion d'evꯥment IE
window.frames[2].document.getElementById("trans").attachEvent("onmousedown",initXY)
window.frames[2].document.getElementById("trans").attachEvent("onmousemove",moveZoomBox)
window.frames[2].document.getElementById("trans").attachEvent("onmouseup",disable)
}
else{
  if(initout==1){
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").addEventListener("mousedown",initXY,true)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").addEventListener("mousemove",moveZoomBox,true)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").addEventListener("mousedown",initXY,true)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").addEventListener("mousemove",moveZoomBox,true)

  }
}
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx ZOOM plus xxxxxxxxxxxxxxxxxxxxxxxxx
var VALEURRANGensemble
var menuAreas
function zoomIn(){
icik=1
if(ZI==1){
menuAreas=top.frames.Num0.frames.paramcarte.transmenuAreas("return menuAreas")
//alert(menuAreas[2])
VALEURRANGensemble=menuAreas.length+1

}
//zoom0()
if (ZI==20){return false}else{
if(topX<0){
document.getElementById('moins').style.visibility="visible";
}
ZI+=1; //compteur de zoom + ou -

pixelZPX1=trucx;
pixelZPY1=trucy;
LL=LL*(1+zoomFactor/100)
HH=HH*(1+zoomFactor/100)




if(document.all){window.frames[2].zoompos()}
DOC.style.width=LL
DOC.style.height=HH
trucx=pixelZPX1+(X0-X1/(1-zoomFactor)+WindX+pixelZPX1)*((zoomFactor)/(100));
trucy=pixelZPY1+(Y0-Y1/(1-zoomFactor)+WindY+pixelZPY1)*((zoomFactor)/(100));

xlegdelta=(X0-X1/(1-zoomFactor)+WindX+pixelZPX1)*((zoomFactor)/(100))
ylegdelta=(Y0-Y1/(1-zoomFactor)+WindY+pixelZPY1)*((zoomFactor)/(100))

zX=zX*(1+zoomFactor/100)
CX=CX*(1+zoomFactor/100)
CY=CY*(1+zoomFactor/100)
coefzoom*=(1+zoomFactor/100)
var mat="matrix("+zX+" 0 0 "+zX+" "+CX+" "+CY+")"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").setAttribute("transform",mat)


ajusttraitetpolice()



kleg=1
//



window.frames.zoom.scrollTo(trucx,trucy);

top.frames.Num0.frames.datacarte.ZoomSousCouches(1,0,trucx,trucy)// zoom sous couche arrière plan : inhibé(1+zoomFactor/100)


zoomBox.style.pixelLeft=trucx;
zoomBox.style.pixelTop=trucy;

callegendezoom()

}

}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx ZOOM moins xxxxxxxxxxxxxxxxxxxxxxxxx

function zoomOut(){
//zoom0()

if(ZI==1){
if(topX<0){
document.getElementById('moins').style.visibility="hidden",icik=0
}
}else{
ZI+=-1
if(ZI==1){
if(topX<0){
document.getElementById('moins').style.visibility="hidden";icik=0
}
}
if(ZI<=1){

coefzoom*=1/(1+zoomFactor/100)
callegendezoom()

;ZI+=1;razclick()}else{
pixelZPX1=trucx;
pixelZPY1=trucy;
LL=LL/(1+zoomFactor/100)
HH=HH/(1+zoomFactor/100)




if(document.all){window.frames[2].zoompos();}
DOC.style.width=LL
DOC.style.height=HH
trucx=pixelZPX1-(X0-X1/(1+zoomFactor)+WindX+pixelZPX1)*(zoomFactor/100)/(1+zoomFactor/100);
trucy=pixelZPY1-(Y0+Y1/(1+zoomFactor)+WindY+pixelZPY1)*(zoomFactor/100)/(1+zoomFactor/100);

xlegdelta=(X0-X1/(1+zoomFactor)+WindX+pixelZPX1)*(zoomFactor/100)/(1+zoomFactor/100)
ylegdelta=(Y0+Y1/(1+zoomFactor)+WindY+pixelZPY1)*(zoomFactor/100)/(1+zoomFactor/100)
if(trucx<X0){trucx=X0}
if(trucy<Y0){trucy=Y0}




zX=zX/(1+zoomFactor/100)
CX=CX/(1+zoomFactor/100)
CY=CY/(1+zoomFactor/100)
coefzoom*=1/(1+zoomFactor/100)
var mat="matrix("+zX+" 0 0 "+zX+" "+CX+" "+CY+")"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").setAttribute("transform",mat)

ajusttraitetpolice()




kleg=-1


window.frames.zoom.scrollTo(trucx,trucy);

top.frames.Num0.frames.datacarte.ZoomSousCouches(1,0,trucx,trucy)// (1/(1+zoomFactor/100))zoom sous couche arrière plan : inhibé


zoomBox.style.pixelLeft=trucx;
zoomBox.style.pixelTop=trucy;
//if(!document.all){window.frames[2].zoompos()}
callegendezoom()

}
}

}


//xxxxxxxxxxxxxxxxxxxxxxx FENETRES LEGENDE ET DONNEES xxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx disable2 et 22 xxxxxxxxxxxxxxxxxxxxxxxxx
function initHIDEDIS(){
//document.getElementById('za').width=Lza;
//document.getElementById('za').height=Hza;

//top.frames.Num0.frames[2].document.getElementById('za').style.visibility="visible";
top.document.getElementById('zam2').width=Lza2;
top.document.getElementById('zam2').height=Hza2;
top.document.getElementById('zam2').style.visibility="hidden";
top.frames.Num0.frames.pilote.visioTOUTDATA()
}





function disable2(){
//document.getElementById('za').style.visibility="hidden";
//document.getElementById('za').width=100;
//document.getElementById('za').height=0;
}
function returnhide1(){return hide1}
function disable22(){

hide1=2
top.document.getElementById('zam2').style.visibility="hidden";

top.document.getElementById('zam2').height=0;

}

var kp=2
function disable33(){
var inner=top.frames.Num0.frames.couches.frames.zam3.document.getElementsByTagName("body")[0].innerHTML

if(inner.indexOf("htm")>=0){
var init1=top.frames.Num0.frames.couches.frames.zam3.recupINIT1()

top.frames.Num0.frames.couches.zam3.positionpox2()
document.getElementById('zam3').width=450;
document.getElementById('zam3').height=30;
if(init1==1){

top.frames.Num0.frames.couches.zam3.document.getElementById("poxligne").style.visibility="hidden"
}
if(kp==2){if(init1==0){top.frames.Num0.frames.couches.zam3.poxendiag()}}
document.getElementById('mobile6').style.top=-5;
document.getElementById('zam4').width=1;
document.getElementById('zam4').height=1;
if(kp==2){
if(init1==0){top.frames.Num0.frames.couches.zam3.alignpox()
top.frames.Num0.frames.couches.zam3.document.getElementById("poxligne").style.visibility="visible"
}
}
}
}
function disable33b(){
document.getElementById('zam3').height=1;
}
function disable22a(){
//top.document.getElementById('zam2').style.visibility="hidden";
top.document.getElementById('zam2').width=Lza2;
top.document.getElementById('zam2').height=187;

}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx hidden xxxxxxxxxxxxxxxxxxxxxxxxx

function hidelegend(){
//document.getElementById('za').style.visibility="visible";
//document.getElementById('za').style.ALLOWTRANSPARENCY="true";
//document.getElementById('za').width=Lza;
//document.getElementById('za').height=Hza;


}

function hidelegend2(){

var anX=top.frames.Num0.frames.couches.frames.zam3.location.href
anX=anX.indexOf("ANA",0)

if(anX>0){
var init1=top.frames.Num0.frames.couches.frames.zam3.recupINIT1()
//var indicHyper=retournIndicHyper("return indichyper")
if(init1==1 ){}else{          //&& indicHyper==1
disable33();disable33b()
}
}
hide1=1
top.document.getElementById('zam2').style.visibility="visible";
top.document.getElementById('zam2').style.ALLOWTRANSPARENCY="true";

top.document.getElementById('zam2').width=Lza2;
top.document.getElementById('zam2').height=Hza2;

if(tapx>=0){
if(Hza2==0){top.document.getElementById("ferm").style.visibility="hidden"}else{top.document.getElementById("ferm").style.visibility="visible"}
}
}
function hidelegend3(){
var init1=top.frames.Num0.frames.couches.frames.zam3.recupINIT1()
if(init1==0){top.frames.Num0.frames.couches.zam3.poxendiag()}
document.getElementById('zam3').width=Lza3;
document.getElementById('zam3').height=Hza3;
document.getElementById('mobile6').style.top=417//430
document.getElementById('zam4').width=435;
document.getElementById('zam4').height=30;
top.frames.Num0.frames.couches.zam3.document.getElementById("poxligne").style.visibility="hidden"
if(kp==0){}else{kp=2;top.frames.Num0.frames.couches.zam3.recupkp();top.frames.Num0.frames.couches.zam3.retourpositionpox2()}
if(init1==1){top.frames.Num0.frames.couches.zam3.document.getElementById("poxligne").style.visibility="hidden";}if(init1==0){top.frames.Num0.frames.couches.zam3.poxendiag()}
}
function transkp(){
return kp
}

function hidelegend2bis(){

top.document.getElementById('zam2').height=Hza2bis;
}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx autre hidden visible xxxxxxxxxxxxxxxxxxx


function visibletoutDATA(){

if(topX<0){
document.getElementById("bouton1").style.visibility="visible"
}
top.frames.Num0.frames.couches.document.getElementById("zam2").style.visibility="visible"
//top.frames.Num0.frames.couches.zoom.document.getElementById('map1').style.visibility="visible"
}



//xxxxxxxxxxxxxxxxxxxxxxxxxxxx AUXILIAIRES xxxxxxxxxxxxxxxxxxxxxxxxx
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx zoom0 xxxxxxxxxxxxxxxxxxxxxxxxx


function ajusttraitetpolice(){

top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("affichNOM").setAttribute("font-size",18/coefzoom)

for(p=1;p<VALEURRANGensemble;p++){
//top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("p"+p).setAttribute("stroke-width",1/coefzoom)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("n"+p).setAttribute("stroke-width",1/coefzoom)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("f"+p).setAttribute("stroke-width",1/coefzoom)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("c"+p).setAttribute("stroke-width",1/coefzoom)
}

}
function ajusttraitetpolice0(){

top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("affichNOM").setAttribute("font-size",18/coefzoom)
for(p=1;p<VALEURRANGensemble;p++){
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("p"+p).setAttribute("stroke-width",0.5)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("n"+p).setAttribute("stroke-width",0.5)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("f"+p).setAttribute("stroke-width",0.5)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("c"+p).setAttribute("stroke-width",0.5)
}
}
function zoom0(){

var GHI=zoomFactor
zoomFactor=0
pixelZPX1=trucx;
pixelZPY1=trucy;

LL=(LL)*(1+zoomFactor/100)
HH=HH*(1+zoomFactor/100)

if(initout==1){
DOC.style.width=LL
DOC.style.height=HH
}
trucx=pixelZPX1+(X0-X1/(1-zoomFactor)+WindX+pixelZPX1)*((zoomFactor)/(100));
trucy=pixelZPY1+(Y0-Y1/(1-zoomFactor)+WindY+pixelZPY1)*((zoomFactor)/(100));

trucx2=trucx
trucy2=trucy
//if(trucx<X0){trucx=X0}
//if(trucy<Y0){trucy=Y0}

if(!document.all){window.frames.zoom.scrollTo(trucx,trucy)};


zoomBox.style.pixelLeft=trucx;
zoomBox.style.pixelTop=trucy;
//window.frames.zoom.scrollTo(trucx,75)
zoomFactor=GHI

if(initout==1){
var mat="matrix("+zX+" 0 0 "+zX+" "+(CX)+" "+(CY)+" )"
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("totalsvg").setAttribute("transform",mat)
top.frames.Num0.frames.couches.zoom.document.getElementById("trans").getSVGDocument().getElementById("images1").setAttribute("transform",mat)
}
//window.frames[2].zoompos()
//window.frames.zoom.scrollTo(trucx,50)

}


//xxxxxxxxxxxxxxxxxxxxxxxxxxxx indic xxxxxxxxxxxxxxxxxxxxxxxxx
function indic0(){
DEF=0
}

function indic1(){
//alert("ici")
DEF=1
}

//xxxxxxxxxxxxxxxxxxxxxxxxxxxx TACHES DE FOND xxxxxxxxxxxxxxxxxxxxxxxxx


top.frames.Num0.frames.pilote.indicouvcarte1() // bascule cet indicateur de 0 vers 1 dans le fichier pilote. Cet indicateur est utilis顰ar le fichier de donn꦳ dans la frame inconeencadre. 0 indique ll'ouverture initiale de la carte, 1 indique que laa carte est dꫡ࡯uverte et que l'on est dans le cas de figure d'un changement de Validit顤es donn꦳ ࡲꨬage de la carte constant.
tempodem()
function tempodem(){


ABC=top.frames.Num0.frames.pilote.changeX("return change1"); // AMORcage : choix de la carte ou photo initiale

}

var kici=0
function dim(){
XDATA=top.frames.Num0.frames.couches.zoom.hdata("return largDATA")

Lza2=XDATA[0]
Hza2=XDATA[1]

if(hide1==0){Hza2bis=Hza2}
//hide1=1
if(hide1==2){}else{
top.document.getElementById('zam2').width=Lza2;
top.document.getElementById('zam2').height=Hza2;
}
}

function dimleg(){
//Lza=top.frames.Num0.frames.couches.za.dimleg0L("return Ltable")
//Hza=top.frames.Num0.frames.couches.za.dimleg0H("return Htable")+13
//alert(Hza)
hidelegend()
//document.getElementById("zoom").style.visibility="visible"

}

function visibilityzoom(){
document.getElementById("zoom").style.visibility="visible"
}

top.frames.Num0.document.getElementById("tab").style.visibility="visible"
