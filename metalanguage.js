//document javascript inséré dans les pages htm de commande de la carte par balises encapsulées dans un texte. Ces fichiers HTM ont un nom du type " cart0-XXX-encaps.htm"
// ce dcument comporte deux partie : la première cncerne la traductin du métalanguage de cmmande de la carte . Le secnde concerne l'indexation des baslises de méta language aux balises de commande d'affichage de carte, de telle sorte que si l'on clique sur une balise de règlage d'une carte sans avoir préalablement affiché la carte, celle-ci soit affichée quand même avec un message d'alerte.

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
	



var hrefcolor
var topY=parent.location.href
topY=topY.indexOf("ecrit_hypertext",0)
var cartechange=0
var cartechange2=0
	var xicone=""
	var xfond=""
	var xcarte=""
	var a=0
	var z2=1000000 
	var kx=0
	var catx=2
	var xtbase=0
	var carteencours=10000000 // carte affichée
	var carteici=0 // carte à laquelle se réfère une balise de méta language
	function changecartencours(a){carteencours=a;kx=0;top.frames.Num0.kx0()}
function transchoixcarte(){return choixcarte} // transmission du n° de carte dans Gaïa Mundi : appelé par transchoixcarteici() à la fin de l'exécution de couche1photo.htm qui apelle à son tour tranchoixcartela() dans cartO2.htm qui appelle à son tout transchoixcarte dans cette page
function kx1(){kx=1}// indicateur de passage dans la fonction d'affichage des paramètres de fond de carte et d'affichae des icones
function transz2(){ return z2} //paramètre de menu dans la gestion de l'affichage. Actualisé dans cette page.
function transxtbase(){return xtbase}
function transcatx(){return catx}//;razapplyCARTE();virelegcarte()
//---------------------------------------------------------------------------------------------------initialisation ------------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------partie 1 - traduction des métabalises de commande de la carte--------------------------------------
function cartechange0(){cartechange=0}
function calculcarteici(){

}
function kx0(){
kx=0
}
var Xbody=''
function returnXbody(){return Xbody}
function returncarteencours(){return carteencours}

var fonctionBouton

function testcartx(a){
var idcarte="C"+a
nomcarte=document.getElementById(idcarte).firstChild.data
if(a!=carteencours){kx=0;top.frames.Num0.kx0()}
}
//function rienX(){}
function cartoui(a,b){
//top.frames.Num0.frames.couches.hidelegend2()
var idcarte="C"+a

nomcarte=document.getElementById(idcarte).firstChild.data
cartechange=0
if(a!=carteencours){
//alert(carteencours)
cartechange=1
cartechange2=1
top.BL()
kx=0;
top.frames.Num0.kx0()
choixcarte=document.getElementById(idcarte).getAttribute("nmcarte");
carteencours=a
top.frames.Num0.transchoixcartela()
top.frames.Num0.Initzam30()
top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex=choixcarte;
top.frames.Num0.frames.pilote.change_site()

fonctionBouton=b
//top.frames.Num0.frames.couches.zoom.trans.onload=setTimeout('kx=0;top.frames.Num0.kx0();'+b,5000)
}
}

function chaineAttente(){
if(cartechange2==1){
setTimeout('kx=0;top.frames.Num0.kx0();'+fonctionBouton,1000)
cartechange2=0
}
}


function cartajust(choixcarte){
top.frames.Num0.Initzam30()
top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex=choixcarte;
top.frames.Num0.frames.pilote.change_site()
top.frames.Num0.kx0()
}
function rien(){}


function carte(){
if(topY<0){
Xbody=document.getElementsByTagName("body")[0].innerHTML

//document.getElementsByTagName("body")[0].setAttribute("style","background-color: rgb(229, 234, 245)")
noeuds0=document.getElementsByTagName("body")[0]
hrefcolor=noeuds0.getAttribute('style')
hrefcolor=hrefcolor.substring(17,hrefcolor.length-1)
for(k=0;k<document.getElementsByTagName("carte").length;k++){
var libel="libel1"// affichage défaut du libellé dans le texte
var ncarte=document.createElement("img")
//ncarte.setAttribute("HREF","javascript:rien()")//"cartO2encapsule.htm"
ncarte.setAttribute("width","15")
ncarte.setAttribute("height","15")
ncarte.setAttribute("src","../rouge.png")
//ncarte.setAttribute("TARGET","Num0")
var cptcariable=0
var t=new Array()
t[0]=""
var xcarte=document.getElementsByTagName("carte")[k].firstChild.data
//alert(xcarte)
for(i1=0;i1<xcarte.length;i1++){

if(xcarte.substr(i1,1)==",")
{cptcariable+=1;t[cptcariable]=""}
else
{t[cptcariable]+=xcarte.substr(i1,1)}
}
if(t[t.length-1]=="libel0"){libel="libel0"}// le libellé n'est pas affiché dans le texte
if(k==0){choixcarte=t[0]}// première carte dans la série de 1 ou plusieurs carte indéxées dans la page (sert à ouvrir cette carte si la carte courante à l'ouverture de cette page n'est pas cette carte là)
varxonclick="javascript:cartechange=0;kx=0;top.frames.Num0.kx0();choixcarte="+t[0]+";carteencours="+k+";top.frames.Num0.transchoixcartela();top.frames.Num0.Initzam30();top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex="+t[0]+";top.frames.Num0.frames.pilote.change_site()"

ncarte.setAttribute("onclick",varxonclick)
ncarte.setAttribute("nmcarte",t[0])

var idc="C"+k
ncarte.setAttribute("onmouseover","top.ouvHelp('carte')")
ncarte.setAttribute("onmouseout","top.ouvHelp('hypert')")
ncarte.setAttribute("id",idc)
ncarte.setAttribute("title","carte "+t[0]+" : "+t[1])
document.getElementsByTagName("carte")[k].appendChild(ncarte)
neElement=document.createTextNode(" "+t[1]+" ")
document.getElementById(idc).appendChild(neElement)
if(libel=="libel0"){// pas d'affichage du libellé dans le texte : 
document.getElementsByTagName("carte")[k].firstChild.data=" "
}else{
document.getElementsByTagName("carte")[k].firstChild.data="("+t[1]+")"
}

}
//for(k=0;k<document.getElementsByTagName("carte").length;k++){

//}


//top.frames.Num0.kx0()
}
}





function fond(){
if(topY<0){
var xhref1="javascript:comptico=0;if(kx>0){pas=0;top.frames.Num0.frames.couches.zam3.indicouinit0()};comptico=1;z3="
xhref2=";z="
xhref3=";memecouleur=0;fond=1;fondcarte(z);top.frames.Num0.cartO2z2();top.frames.Num0.frames.couches.zaguide.cartO2z2()"
for(k=0;k<document.getElementsByTagName("fond").length;k++){
var libel="libel1"// affichage défaut du libellé dans le texte
var cptcariable=0
var t=new Array()
t[0]=""
var xcarte=document.getElementsByTagName("fond")[k].firstChild.data
for(i1=0;i1<xcarte.length;i1++){

if(xcarte.substr(i1,1)==",")
{cptcariable+=1;t[cptcariable]=""}
else
{t[cptcariable]+=xcarte.substr(i1,1)}
}
if(t[t.length-1]=="libel0"){libel="libel0"}// le libellé n'est pas affiché dans le texte
if(t[2]=="defaut"){t[2]=0}//coouleur palette fond
if(t[2]=="rouge"){t[2]=1}//coouleur  palette fond
if(t[2]=="marron"){t[2]=2}//coouleur palette fond
t[3]=t[3].substr(1,1)//quantile

t[4]=t[4].substr(5,t[4].length-1) // numéro du graphique (1<SUJET<100  et    100<OTHER< 1000)

varxonclick="javascript:cartoui(this.getAttribute('ad'),this);z2=0;xtbase="+t[2]+";catx="+t[3]+";top.frames.commande1.commandesvisibles();return true"
var ncarte=document.createElement("A")
var ncarte2=document.createElement("img")
ncarte2.setAttribute("width","15")
ncarte2.setAttribute("height","15")
ncarte2.setAttribute("src","../vert.png")

var xhref="javascript:top.frames.Num0.fond0("+t[4]+","+t[0]+",cartechange)"//xhref1+t[4]+xhref2+t[0]+xhref3
var hcol="color:"+hrefcolor
ncarte.setAttribute("style",hcol)
ncarte.setAttribute("HREF",xhref)
//ncarte.setAttribute("TARGET","Num0")
ncarte.setAttribute("onmouseover","top.ouvHelp('fond')")
ncarte.setAttribute("onmouseout","top.ouvHelp('hypert')")
ncarte.setAttribute("onclick",varxonclick)
var idc="F"+k
ncarte.setAttribute("id",idc)
document.getElementsByTagName("fond")[k].appendChild(ncarte)

document.getElementById(idc).appendChild(ncarte2)
ncarte2.setAttribute("title","Fond :"+t[1])
if(libel=="libel0"){// pas d'affichage du libellé dans le texte : 
document.getElementsByTagName("fond")[k].firstChild.data=" "
}else{
document.getElementsByTagName("fond")[k].firstChild.data=" ' "+t[1]+" ' "
}

}

}
}

function icone(){

if(topY<0){
//var xhref1="javascript:comptico=0;if(kx>0){pas=0;top.frames.Num0.frames.couches.zam3.indicouinit0()};comptico=1;z3="

//xhref2=";z="
//xhref3=";memecouleur="

for(k=0;k<document.getElementsByTagName("icone").length;k++){
var libel="libel1"// affichage défaut du libellé dans le texte
var cptcariable=0
var t=new Array()
t[0]=""
var xcarte=document.getElementsByTagName("icone")[k].firstChild.data
for(i1=0;i1<xcarte.length;i1++){

if(xcarte.substr(i1,1)==",")
{cptcariable+=1;t[cptcariable]=""}
else
{t[cptcariable]+=xcarte.substr(i1,1)}
}
if(t[t.length-1]=="libel0"){var libel="libel0"}// le libellé n'est pas affiché dans le texte

t[2]=t[2].substr(5,t[2].length-1) // numéro du graphique (1<SUJET<100  et    100<OTHER< 1000)


if(t.length>4){}else{
t[3]=1  //->typeicones
t[4]=0 //->tailleicone   
}
t[5]=1//quantiles 1->Q2    top.frames.Num0.frames.couches.zoom.choixICONE("+t[3]+");top.frames.Num0.frames.couches.frames.zam3.IMCX1()
t[6]=0//mêmecouleur
//xhref4=";fond=0;indicarte=0;sansfond(z,"+t[3]+","+t[4]+");top.frames.Num0.cartO2z2();top.frames.Num0.frames.couches.zaguide.cartO2z2();"
varxonclick="javascript:cartoui(this.getAttribute('ad'),this);z2=1000000;xtbase=0;catx="+t[5]+";top.frames.commande1.commandesvisibles();return true"
var ncarte=document.createElement("A")
var ncarte2=document.createElement("img")
ncarte2.setAttribute("width","15")
ncarte2.setAttribute("height","15")
ncarte2.setAttribute("src","../bleu.png")
ncarte2.setAttribute("title","icone ponctuel :"+t[1])
var xhref="javascript:parent.frames.Num0.icone0("+t[2]+","+t[0]+","+t[6]+","+t[3]+","+t[4]+",cartechange)" //xhref1+t[2]+xhref2+t[0]+xhref3+t[6]+xhref4
var hcol="color:"+hrefcolor
ncarte.setAttribute("style",hcol)
ncarte.setAttribute("HREF",xhref)
//ncarte.setAttribute("TARGET","Num0")

ncarte.setAttribute("onclick",varxonclick)
ncarte.setAttribute("onmouseover","testcartx(this.getAttribute('ad'));top.ouvHelp('icones')")
ncarte.setAttribute("onmouseout","top.ouvHelp('hypert')")
var idc="I"+k
ncarte.setAttribute("id",idc)

document.getElementsByTagName("icone")[k].appendChild(ncarte)

document.getElementById(idc).appendChild(ncarte2)

if(libel=="libel0"){// pas d'affichage du libellé dans le texte : 
document.getElementsByTagName("icone")[k].firstChild.data=" "
}else{
document.getElementsByTagName("icone")[k].firstChild.data=" ' "+t[1]+" ' "
}

}
//for(k=0;k<document.getElementsByTagName("icone").length;k++){

//}
}
}

function fi(){
if(topY<0){
var xhref1="javascript:comptico=0;if(kx>0){pas=0;top.frames.Num0.frames.couches.zam3.indicouinit0()};comptico=0;z3="
xhref2=";z="
xhref3=";memecouleur="

for(k=0;k<document.getElementsByTagName("fi").length;k++){
var libel="libel1"// affichage défaut du libellé dans le texte
var cptcariable=0
var t=new Array()
t[0]=""
var xcarte=document.getElementsByTagName("fi")[k].firstChild.data
for(i1=0;i1<xcarte.length;i1++){

if(xcarte.substr(i1,1)==",")
{cptcariable+=1;t[cptcariable]=""}
else
{t[cptcariable]+=xcarte.substr(i1,1)}
}
if(t[t.length-1]=="libel0"){libel="libel0"}// le libellé n'est pas affiché dans le texte
if(t[2]=="defaut"){t[2]=0}//coouleur palette fond
if(t[2]=="rouge"){t[2]=1}//coouleur  palette fond
if(t[2]=="marron"){t[2]=2}//coouleur palette fond

t[3]=t[3].substr(1,1)//quantile

t[4]=t[4].substr(5,t[4].length-1) // numéro du graphique (1<SUJET<100  et    100<OTHER< 1000)

if(t[7]=="vert"){t[7]=0}//même couleur=0 rouge et jaune = couleur icone
if(t[7]=="rouge"){t[7]=1}//memecouleur=1 vert et bleu=couleur icone
if(t.length>9){}else{
t[8]=1  //->typeicones
t[9]=0 //->tailleicone   
}
varxonclick="javascript:cartoui(this.getAttribute('ad'),this);z2="+t[5]+";xtbase="+t[2]+";catx="+t[3]+";top.frames.commande1.commandesvisibles();return true"
xhref4=";fond=1;fondcarte(z,"+t[8]+","+t[9]+");top.frames.Num0.cartO2z2();top.frames.Num0.frames.couches.zaguide.cartO2z2()"
var ncarte=document.createElement("A")
var ncarte2=document.createElement("img")
ncarte2.setAttribute("width","15")
ncarte2.setAttribute("height","15")
ncarte2.setAttribute("src","../violet.png")
var xhref="javascript:parent.frames.Num0.fi0("+t[4]+","+t[0]+","+t[7]+","+t[8]+","+t[9]+",cartechange)"
//var xhref=xhref1+t[4]+xhref2+t[0]+xhref3+t[7]+xhref4
var hcol="color:"+hrefcolor
ncarte.setAttribute("style",hcol)
ncarte.setAttribute("HREF",xhref)
//ncarte.setAttribute("TARGET","Num0")
ncarte.setAttribute("onmouseover","top.ouvHelp('fondicones')")
ncarte.setAttribute("onmouseout","top.ouvHelp('hypert')")
ncarte.setAttribute("onclick",varxonclick)
var idc="Fi"+k
ncarte.setAttribute("id",idc)
document.getElementsByTagName("fi")[k].appendChild(ncarte)

//neElement=document.createTextNode(" (Fond :"+t[1]+" ; Icone :"+t[6]+") ")
//document.getElementById(idc).appendChild(neElement)
document.getElementById(idc).appendChild(ncarte2)
ncarte2.setAttribute("title","Fond :"+t[1]+" ; Icone :"+t[6])

if(libel=="libel0"){// pas d'affichage du libellé dans le texte : 
document.getElementsByTagName("fi")[k].firstChild.data=" "
}else{
document.getElementsByTagName("fi")[k].firstChild.data="(Fond :"+t[1]+" ; Icone :"+t[6]+")"
}


}
//for(k=0;k<document.getElementsByTagName("fi").length;k++){
//"
//}
}
}

function encadre(){
if(topY<0){
var xhref1="javascript:"

xhref2="z="
xhref3=";top.frames.Num0.iconencadre(z)"
xhref4=""
for(k=0;k<document.getElementsByTagName("encadre").length;k++){
var libel="libel1"// affichage défaut du libellé dans le texte
var cptcariable=0
var t=new Array()
t[0]=""
var xcarte=document.getElementsByTagName("encadre")[k].firstChild.data
for(i1=0;i1<xcarte.length;i1++){

if(xcarte.substr(i1,1)==",")
{cptcariable+=1;t[cptcariable]=""}
else
{t[cptcariable]+=xcarte.substr(i1,1)}
}
if(t[t.length-1]=="libel0"){libel="libel0"}// le libellé n'est pas affiché dans le texte
t[0]=t[0].substr(5,t[0].length-1) // numéro du graphique (1<SUJET<100  et    100<OTHER< 1000)
var varxonclick="javascript:cartoui(this.getAttribute('ad'));top.frames.Num0.frames.couches.hidelegend2()"
var ncarte=document.createElement("A")
var ncarte2=document.createElement("img")
ncarte2.setAttribute("width","15")
ncarte2.setAttribute("height","15")
ncarte2.setAttribute("src","../jaune.png")

var xhref=xhref1+xhref2+t[0]+xhref3+xhref4
var hcol="color:"+hrefcolor
ncarte.setAttribute("style",hcol)
ncarte.setAttribute("HREF",xhref)
ncarte.setAttribute("onmouseover","top.ouvHelp('encadre')")
ncarte.setAttribute("onmouseout","top.ouvHelp('hypert')")
ncarte.setAttribute("onclick",varxonclick)
ncarte.setAttribute("title","cliquez sur la carte pour visualiser les donnees")
var idc="E"+k
ncarte.setAttribute("id",idc)
document.getElementsByTagName("encadre")[k].appendChild(ncarte)
//neElement=document.createTextNode(" "+t[1]+" ")
//document.getElementById(idc).appendChild(neElement)
document.getElementById(idc).appendChild(ncarte2)
if(libel=="libel0"){// pas d'affichage du libellé dans le texte : 
document.getElementsByTagName("encadre")[k].firstChild.data=""
}else{
document.getElementsByTagName("encadre")[k].firstChild.data="("+t[1]+")"
}


}
//for(k=0;k<document.getElementsByTagName("encadre").length;k++){

//}
}
}

//-----------------------------------------------------Decompte des radars insérés--------------------------
/*function compteradars(){
	var nbf=0
var nbframes=document.getElementsByTagName("iframe").length
for(i=0;i<nbframes;i++)	{
if(document.getElementsByTagName("iframe")[i].id.indexOf("cadre")>=0){nbf+=1}	
	
	
}
return nbf
}
*/
//------------------------------------------function indexation des métabalises aux cartes------------------------------------------------------------------------------------------------------------------
var varcarte=-1
var noeuds
var noeuds0



function index(a){
b=a.nodeName
if (b=="CARTE" || b=="carte"){;varcarte+=1}
if (b=="ICONE" || b=="FOND" || b=="FI" || b=="ENCADRE"){
a.childNodes[1].setAttribute("ad",varcarte);
}
}



function balayagenodes(){
if(topY<0){
noeuds0=document.getElementsByTagName("body")[0]

for(i=0;i<noeuds0.childNodes.length;i++){
noeuds=noeuds0.childNodes[i]
index(noeuds)
if(noeuds.childNodes.length>0){// si le noeudebfant i de body a un enfant, alors afficher le nombre d'enfants
explorernode(noeuds)}
}
}
}


function explorernode(noeuds){
var kn=0
for (kn=0;kn<noeuds.childNodes.length;kn+=1){
noeuds2=noeuds.childNodes[kn]
index(noeuds2)
if(noeuds2.childNodes.length>0){// si le noeudebfant i de body a un enfant, alors afficher le nombre d'enfants
explorernode2(noeuds2)}
}
}


function explorernode2(noeuds){
var kn2=0
for (kn2=0;kn2<noeuds.childNodes.length;kn2+=1){
noeuds2=noeuds.childNodes[kn2]
index(noeuds2)
if(noeuds2.childNodes.length>0){// si le noeudebfant i de body a un enfant, alors afficher le nombre d'enfants
explorernode3(noeuds2)}
}
}

function explorernode3(noeuds){
var kn3=0
for (kn3=0;kn3<noeuds.childNodes.length;kn3+=1){
noeuds2=noeuds.childNodes[kn3]
index(noeuds2)
if(noeuds2.childNodes.length>0){// si le noeudebfant i de body a un enfant, alors afficher le nombre d'enfants
explorernode4(noeuds2)}
}
}

function explorernode4(noeuds){
var kn4=0
for (kn4=0;kn4<noeuds.childNodes.length;kn4+=1){
noeuds2=noeuds.childNodes[kn4]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode5(noeuds2)}
}
}


function explorernode5(noeuds){
var kn5=0
for (kn5=0;kn5<noeuds.childNodes.length;kn5+=1){
noeuds2=noeuds.childNodes[kn5]
index(noeuds2)
if(noeuds2.childNodes.length>0){// si le noeudebfant i de body a un enfant, alors afficher le nombre d'enfants
explorernode6(noeuds2)}
}
}
function explorernode6(noeuds){
var kn6=0
for (kn6=0;kn6<noeuds.childNodes.length;kn6+=1){
noeuds2=noeuds.childNodes[kn6]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode7(noeuds2)}
}
}
function explorernode7(noeuds){
var kn7=0
for (kn7=0;kn7<noeuds.childNodes.length;kn7+=1){
noeuds2=noeuds.childNodes[kn7]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode8(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}

function explorernode8(noeuds){
var kn8=0
for (kn8=0;kn8<noeuds.childNodes.length;kn8+=1){
noeuds2=noeuds.childNodes[kn8]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode9(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}

function explorernode9(noeuds){
var kn9=0
for (kn9=0;kn9<noeuds.childNodes.length;kn9+=1){
noeuds2=noeuds.childNodes[kn9]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode10(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}

function explorernode10(noeuds){
var kn10=0
for (kn10=0;kn10<noeuds.childNodes.length;kn10+=1){
noeuds2=noeuds.childNodes[kn10]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode11(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}

function explorernode11(noeuds){
var kn11=0
for (kn11=0;kn11<noeuds.childNodes.length;kn11+=1){
noeuds2=noeuds.childNodes[kn11]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode12(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}


function explorernode12(noeuds){
var kn12=0
for (kn12=0;kn12<noeuds.childNodes.length;kn12+=1){
noeuds2=noeuds.childNodes[kn12]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode12(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}


function explorernode13(noeuds){
var kn13=0
for (kn13=0;kn13<noeuds.childNodes.length;kn13+=1){
noeuds2=noeuds.childNodes[kn13]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode14(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}



function explorernode14(noeuds){
var kn14=0
for (kn14=0;kn14<noeuds.childNodes.length;kn14+=1){
noeuds2=noeuds.childNodes[kn14]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode15(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}




function explorernode15(noeuds){
var kn15=0
for (kn15=0;kn15<noeuds.childNodes.length;kn15+=1){
noeuds2=noeuds.childNodes[kn15]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode16(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}


function explorernode16(noeuds){
var kn16=0
for (kn16=0;kn16<noeuds.childNodes.length;kn16+=1){
noeuds2=noeuds.childNodes[kn16]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode17(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}


function explorernode17(noeuds){
var kn17=0
for (kn17=0;kn17<noeuds.childNodes.length;kn17+=1){
noeuds2=noeuds.childNodes[kn17]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode18(noeuds2)}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}


function explorernode18(noeuds){
var kn18=0
for (kn18=0;kn18<noeuds.childNodes.length;kn18+=1){
noeuds2=noeuds.childNodes[kn18]
index(noeuds2)
if(noeuds2.childNodes.length>0){
explorernode19(noeuds2)
}//---------------------------------------------------------------> si les arborescences snt plus imprtantes, , poursuivre la série des fonctions explorernodes emboitées
}
}

function explorernode19(noeuds){}


