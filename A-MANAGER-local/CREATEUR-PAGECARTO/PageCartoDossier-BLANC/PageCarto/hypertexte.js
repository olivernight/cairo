 /*
 if(!document.getElementById) document.getElementById=function (id) {
 return eval("document.all."+id);
 }

 if(document.all) {

 document.getElementsByName=function (name) {

 var el=document.all,result=new Array(),j=0;
 for(var i=0;i<el.length;i++) if(el[i].name.toLowerCase()==name.toLowerCase()) result[j++]=el[i];
 return result;
 }}
 if(!document.getElementsByTagName) document.getElementsByTagName=function (tagName) {
 var el=document.all,result=new Array(),j=0;
 for(var i=0;i<el.length;i++) if(el[i].tagName.toLowerCase()==tagName.toLowerCase()) result[j++]=el[i];
 return result;
 } 
*/
//parent.adtitre(titrepage)

function adtitre(){

if(document.getElementById("baliseTitrePage")){

document.getElementById("baliseTitrePage").innerHTML=""
var inBody=document.getElementsByTagName("body")[0].innerHTML
inBody=inBody.replace("<span id=\"baliseTitrePage\"></span>","")
}else{var inBody=document.getElementsByTagName("body")[0].innerHTML}

inBody="<span id=\"baliseTitrePage\">"+titrepage+"<hr style=\"width: 100%; height: 2px;\"  /></span>"+inBody
document.getElementsByTagName("body")[0].innerHTML=inBody
}

var iSujet=""
var tailleICO=0
var marron="marron"
var rouge="rouge"
var chinois="chinois"
var Nonchinois="Nonchinois"
function Cfond(a,coul,quant){
if(coul==marron){coul=2}
if(coul=="chinois"){coul=1}
if(coul=="rouge"){coul=3}
if(coul=="Nonchinois"){coul=4}
if(a==0){parent.fondefface()}else{
a=a-1
parent.radio2fond(a,coul,quant)// sélectionne le bouton radio est exécute les commandes afférentes
}
}
function CPonctuel(a,coul,quant,tailleICO,prop){
if(coul==marron){coul=2}
if(coul=="chinois"){coul=1}
if(coul=="rouge"){coul=3}
if(coul=="Nonchinois"){coul=4}
if(a==0){parent.effaceIcone()}else{
a=a-1
parent.radio1ponctuels(a,coul,quant,tailleICO,prop)// sélectionne le bouton radio est exécute les commandes afférentes
}
}
function Cgraph(a,b){
if(a==0){}else{
a=a-1
parent.comgraphique(a,b)
}
}
function contour(a){
parent.XidentContour(a)
}
function BlueBaliseContour(){
for(i=0;i<document.getElementsByTagName("a").length;i++){
if(document.getElementsByTagName("a")[i].id=="contour"){
document.getElementsByTagName("a")[i].firstChild.style.color="blue"
}
}
for(i=0;i<parent.frames.hyperFiche.document.getElementsByTagName("a").length;i++){
if(parent.frames.hyperFiche.document.getElementsByTagName("a")[i].id=="contour"){
parent.frames.hyperFiche.document.getElementsByTagName("a")[i].firstChild.style.color="blue"
}
}
}
function ColorBaliseContour(a){
var colorX
if(a.style.color!='brown' ){a.style.color='brown';colorX='brown'}else{a.style.color='blue';colorX='blue'}
var refcontour=a.parentNode.getAttribute("href").replace("javascript:contour(","").replace(")","")
for(i=0;i<parent.frames.hyperFiche.document.getElementsByTagName("a").length;i++){
if(parent.frames.hyperFiche.document.getElementsByTagName("a")[i].getAttribute("href").replace("javascript:contour(","").replace(")","")==refcontour){
parent.frames.hyperFiche.document.getElementsByTagName("a")[i].firstChild.style.color=colorX
}
}
}
//-----------------transforme les balses issues de l'hypertexte de GaïaMundi-------------------
var longeurligneprincipal
var longueurMenuGraphiqueSujet
var longueurMenuIcoSujet

function transParamDeuxfichiers(a,b,c){
longeurligneprincipal=a
longueurMenuGraphiqueSujet=b
longueurMenuIcoSujet=c
}

var nbicones
var nbfond
var nbfi
var nbencadre

function changeiconeEtc(){
marron="marron"
rouge="rouge"
chinois="chinois"
Nonchinois="Nonchinois"

nbspan=document.getElementsByTagName("span").length

for(i=0;i<nbspan;i++){
if(document.getElementsByTagName("span")[i].style.color=="blue"){
document.getElementsByTagName("span")[i].setAttribute("id","span"+i)


}
}

nbicones=document.getElementsByTagName("icone").length
nbfond=document.getElementsByTagName("fond").length
nbfi=document.getElementsByTagName("fi").length
nbencadre=document.getElementsByTagName("encadre").length

for(i=0;i<nbicones;i++){
document.getElementsByTagName("icone")[i].setAttribute("id","icone"+i)
}

for(i=0;i<nbfond;i++){
document.getElementsByTagName("fond")[i].setAttribute("id","fond"+i)
}

for(i=0;i<nbfi;i++){
document.getElementsByTagName("fi")[i].setAttribute("id","fi"+i)
}
for(i=0;i<nbencadre;i++){
document.getElementsByTagName("encadre")[i].setAttribute("id","encadre"+i)
}
var innerbody=document.getElementsByTagName("body")[0].innerHTML
innerbody=innerbody.replace(/<ICONE/g,"<dt")
innerbody=innerbody.replace(/ICONE>/g,"dt>")
innerbody=innerbody.replace(/<icone/g,"<dt")
innerbody=innerbody.replace(/icone>/g,"dt>")

innerbody=innerbody.replace(/<FOND/g,"<dt")
innerbody=innerbody.replace(/FOND>/g,"dt>")
innerbody=innerbody.replace(/<fond/g,"<dt")
innerbody=innerbody.replace(/fond>/g,"dt>")

innerbody=innerbody.replace(/<FI/g,"<dt")
innerbody=innerbody.replace(/FI>/g,"dt>")
innerbody=innerbody.replace(/<fi/g,"<dt")
innerbody=innerbody.replace(/fi>/g,"dt>")

innerbody=innerbody.replace(/<ENCADRE/g,"<dt")
innerbody=innerbody.replace(/ENCADRE>/g,"dt>")
innerbody=innerbody.replace(/<encadre/g,"<dt")
innerbody=innerbody.replace(/encadre>/g,"dt>")

document.getElementsByTagName("body")[0].innerHTML=innerbody

setTimeout("suiteIE()",500)
}
function suiteIE(){

/* CONVERSION ICONE + GRAPH IE -------------------*/
for(i=0;i<nbicones;i++){
var ico0=document.getElementById("icone"+i).innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[2].replace("graph","")
if(parseFloat(gr)>=100){
var lgG=window.parent.retournelongueurGraphiqueSujet("return longueurMenuGraphiqueSujet")
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=window.parent.retournelongueurIcoSujet("return longueurMenuIcoSujet")
icoici=icoici+numdecal+1000+1
}
var NewBalise='<a href="javascript:CPonctuel('+(icoici-2000)+',chinois,2,'+ico[4]+');Cfond(0,chinois,0);Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementById("icone"+i).innerHTML=NewBalise
}

/* CONVERSION FOND + GRAPH IE -------------------*/
for(i=0;i<nbfond;i++){
var ico0=document.getElementById("fond"+i).innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[4].replace("graph","")
var Qt=ico[3].replace("Q","")

if(parseFloat(gr)>=100){
var lgG=window.parent.retournelongueurGraphiqueSujet()
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=window.parent.retournelongueurIcoSujet()
icoici=icoici+numdecal+1000+1
}

var coulheur=ico[2]
if(coulheur=="defaut"){coulheur=chinois}
var NewBalise='<a href="javascript:CPonctuel(0,chinois,0,0);Cfond('+(icoici-2000)+','+coulheur+','+Qt+');Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementById("fond"+i).innerHTML=NewBalise
}

/* CONVERSION ICONE + FOND + GRAPH IE -------------------*/
// [<fi>2007,% indépendants/ensemble actifs occupés,marron,Q5,graph1,2010,% part des plus de 45 ans / ensemble Indépendents,vert,1,0,libel0</fi>]

 for(i=0;i<nbfi;i++){
var ico0=document.getElementById("fi"+i).innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[4].replace("graph","")
var Qt=ico[3].replace("Q","")
var coulheur=ico[2]
if(coulheur=="defaut"){coulheur=chinois}


if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici=icoici+numdecal+1000+1
}
var icoici2=parseFloat(ico[5])
if(parseFloat(ico[5])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici2=icoici2+numdecal+1000+1
}
var NewBalise='<a href="javascript:CPonctuel('+(icoici2-2000)+',chinois,2,'+ico[8]+');Cfond('+(icoici-2000)+','+coulheur+','+Qt+');Cgraph('+gr+')">fond : '+ico[1]+' - icone : '+ico[6]+'</a>'
document.getElementById("fi"+i).innerHTML=NewBalise
}
/* CONVERSION  GRAPH IE -------------------*/
for(i=0;i<nbencadre;i++){
var ico0=document.getElementById("encadre"+i).innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[0].replace("graph","")
if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
//alert(lgG)
gr=parseFloat(gr)+lgG-100+1
}

var NewBalise='<a href="javascript:Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementById("encadre"+i).innerHTML=NewBalise
//document.getElementById("encadre"i).src="cir_gif"
}

}



function transBaliseHyperText(){


nbspan=document.getElementsByTagName("span").length
for(i=0;i<nbspan;i++){
if(document.getElementsByTagName("span")[i].style.color=="blue"){
document.getElementsByTagName("span")[i].setAttribute("id","span"+i)


var outh=document.getElementsByTagName("span")[i].getAttribute("onclick")
if(outh){
//if(i<25){alert(outh)}
outh=outh.replace("var ","")
outh=outh.replace("top.frames.Num0.frames.couches.zoom.valNoDatx(NoDatx);top.frames.Num0.frames.couches.zoom.SVGaffichN();top.frames.Num0.frames.couches.zoom.transDATA();top.frames.Num0.frames.couches.zoom.carte()","marqueurcarte();calculHisto(NoDatx,iSujet)")
outh=outh.replace(/&#10;/g,'')
document.getElementsByTagName("span")[i].setAttribute("onclick",outh)
document.getElementsByTagName("span")[i].setAttribute("style","color:blue;cursor:pointer;")
//.onclick = function() { code javascript }
}
}
}








//Icone+graph


for(i=0;i<document.getElementsByTagName("icone").length;i++){
var ico0=document.getElementsByTagName("icone")[i].innerHTML

var ico=new Array()
ico=ico0.split(",")

var gr=ico[2].replace("graph","")
if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici=icoici+numdecal+1000+1
}


var NewBalise='<a href="javascript:CPonctuel('+(icoici-2000)+',chinois,2,'+ico[4]+');Cfond(0,0,0);Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementsByTagName("icone")[i].innerHTML=NewBalise
}
// fond+graph
for(i=0;i<document.getElementsByTagName("fond").length;i++){
var ico0=document.getElementsByTagName("fond")[i].innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[4].replace("graph","")
var Qt=ico[3].replace("Q","")

if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici=icoici+numdecal+1000+1
}

var coulheur=ico[2]
if(coulheur=="defaut"){coulheur=chinois}
var NewBalise='<a href="javascript:CPonctuel(0,chinois,0,0);Cfond('+(icoici-2000)+','+coulheur+','+Qt+');Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementsByTagName("fond")[i].innerHTML=NewBalise
}
// Fond+icone+graph
// [<fi>2007,% indépendants/ensemble actifs occupés,marron,Q5,graph1,2010,% part des plus de 45 ans / ensemble Indépendents,vert,1,0,libel0</fi>]

 for(i=0;i<document.getElementsByTagName("fi").length;i++){
var ico0=document.getElementsByTagName("fi")[i].innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[4].replace("graph","")
var Qt=ico[3].replace("Q","")
var coulheur=ico[2]
if(coulheur=="defaut"){coulheur=chinois}


if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
gr=parseFloat(gr)+lgG-100+1
}
var icoici=parseFloat(ico[0])
if(parseFloat(ico[0])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici=icoici+numdecal+1000+1
}
var icoici2=parseFloat(ico[5])
if(parseFloat(ico[5])<2000){
var numdecal=parent.retournelongueurIcoSujet()
icoici2=icoici2+numdecal+1000+1
}
var NewBalise='<a href="javascript:CPonctuel('+(icoici2-2000)+',chinois,2,'+ico[8]+');Cfond('+(icoici-2000)+','+coulheur+','+Qt+');Cgraph('+gr+')">fond : '+ico[1]+' - icone : '+ico[6]+'</a>'
document.getElementsByTagName("fi")[i].innerHTML=NewBalise
}
//graph

for(i=0;i<document.getElementsByTagName("encadre").length;i++){
var ico0=document.getElementsByTagName("encadre")[i].innerHTML
var ico=new Array()
ico=ico0.split(",")
var gr=ico[0].replace("graph","")
if(parseFloat(gr)>=100){
var lgG=parent.retournelongueurGraphiqueSujet()
//alert(lgG)
gr=parseFloat(gr)+lgG-100+1
}

var NewBalise='<a href="javascript:Cgraph('+gr+')">'+ico[1]+'</a>'
document.getElementsByTagName("encadre")[i].innerHTML=NewBalise
//document.getElementById("encadre"i).src="cir_gif"
}

}

var NoDatx=0
function rien(){}
function marqueurcarte(){
parent.transNoDatx(NoDatx)

parent.marqueurcarte()

}
function calculHisto(NoDatx,iSujet){
iSujet=parent.retourne("return iSujet")
parent.calculHisto(NoDatx,iSujet)
parent.forcerechOui()
}
//-----------------------------------Conditions initiales----------------------
function OKici(){
//alert("Okici dans hypertexte.js")
var topX=parent.location.href
topX=topX.indexOf("MENUAIDE",0)
if(topX>0){
var repcarteArray=window.location.href.split("/")
var repcarte=repcarteArray[repcarteArray.length-4]

parent.frames.changeaide.location.href="../../../A-MANAGER-local/CREATEUR-PAGECARTO/Onglet-PageCarto-Hypertexte-BLANC/SaisieMAJ-CP/MENUAIDE/filesaide/ecrit_hypertext.html?LISTEJS="+repcarte

}

}
function init(){

OKici()
parent.NoDatXici(5)
if(document.allxxxxxxxxx){
setTimeout('parent.transparam();changeiconeEtc()',1500)

//setTimeout('CPonctuel(1,chinois,2,-1);Cfond(1,marron,5);Cgraph(1)',2000)
} else{
//transBaliseHyperText()
if(parent.comgraphique){
setTimeout('Cgraph(1,0)',2000)//setTimeout('CPonctuel(11,chinois,2,0,1);Cfond(0,marron,5);Cgraph(1,0)',2000)
}else{
	
if(parent.location.href.indexOf("MODIFaide.html")>0){}else{
	
setTimeout('init()',2000)	
	
}
}


};

adtitre()
}

function affichecouchenape(a){
if(document.allxxx){
parent.couchenappeaffiche(a)
}else{
parent.document.getElementById(a).setAttribute("visibility","visible")
}}
function cachecouchenape(a){
if(document.allxxxx){
parent.couchenappecache(a)
}else{
parent.document.getElementById(a).setAttribute("visibility","hidden")
}}
 