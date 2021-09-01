
var base00 = new Array()
base00[0] = new Array()
var k=2
var colox=new Array()
var colox0=new Array()
var base00Aselect= new Array()
var base00select= new Array()
var LL
var LLx0
var typeicone0=new Array()
var kb=0
var trabas0=new Array()


function longueurdata(){
longa=LLx0
return longa
}
var rangappel=0
function rgappel(a){

rangappel=a
}
function transbas00de0(){
var lignelabel=base00[rangappel]
return lignelabel
}

function recuptypeiconeonmap(){
SL=top.frames.Num0.frames.selectana.selectvar("return selectx")
if(SL==1){
typeicone0=top.frames.Num0.frames.ico.transiconetypex("return iconetypex")
}else{
typeicone0=top.frames.Num0.frames.analyse.transiconetypex("return iconetypex")
}

}
var Valcentreflux=-99999
function retourneValcentreflux(){return Valcentreflux}

function recuptypeiconeencadre(){
typeicone0=top.frames.Num0.frames.precarte.transiconetypex("return iconetypex")
}
function recuptypehistomulti(){
typeicone0=top.frames.Num0.frames.precarte.transiconetypex("return iconetypex")

addressDATA0=top.frames.Num0.frames.precarte.transaddressDATAx("return addressDATAx")
}

function Nouvelle(a){
this.donnees=a;
}

function Nouvelle2(a){
this.donnees=a;
}


function ajouter(a){
base00[base00.length]=new Nouvelle(a)
}

function ajouter2(a){

var bastrans=new Array()
base00Aselect[base00Aselect.length]=new Nouvelle2(a)


bastrans=base00Aselect[base00Aselect.length-1].donnees.split(',')
base00select[kb]=bastrans
kb+=1

}


function calculcolox0(){
if(typeicone0[0]==1 || typeicone0[0]==2){

colox[0]=0
colox[colox0.length+1]=1
for(i=1;i<colox0.length+1;i++){colox[i]=colox0[i-1]}

}
if(typeicone0[0]==3){

colox[0]=0
colox[1]=1
for(i=2;i<colox0.length+2;i++){colox[i]=colox0[i-2]}

}
}

//---------------------------------------------
var xnul
function SeuilHautBas(lxi,rgc,Icone){ //(lxi=i,rgc=rang de colonne de donénes dans la ligne 0 du menu,Icone)
xnul=1

if(menuIconeEchelle[Icone][3][2]!=-99999 & base00[lxi][menuIconeEchelle[Icone][3][2]]!=-99999){

if( menuIconeEchelle[Icone][3][3]!=-99999){
if((base00[lxi][menuIconeEchelle[Icone][3][2]])<menuIconeEchelle[Icone][3][3]){xnul=0}
}
if( menuIconeEchelle[Icone][3][4]!=-99999){
if((base00[lxi][menuIconeEchelle[Icone][3][2]])>menuIconeEchelle[Icone][3][4]){xnul=0}
}
return xnul
}
}
var xnulRes
function SeuilHautBasResult(lxi,res,Icone){ //(lxi=i,rgc=rang de colonne de donénes dans la ligne 0 du menu,Icone)
xnulRes=1
if(menuIconeEchelle[Icone][3].length>6){
if(menuIconeEchelle[Icone][3][6]!=-99999 || menuIconeEchelle[Icone][3][7]!=-99999){

if( menuIconeEchelle[Icone][3][6]!=-99999){
if(res<=menuIconeEchelle[Icone][3][6]){xnulRes=0}
}
if( menuIconeEchelle[Icone][3][7]!=-99999){
if(res>=menuIconeEchelle[Icone][3][7]){xnulRes=0}
}
return xnulRes
}
}
}
var Icone=0
var 	menuIconeEchelle=new Array()
var basex=new Array()

function calculIcone(Icone){ 

menuIconeEchelle=new Array()
			var menuIcoEch=top.frames.Num0.frames.datacarte.transpara("return paramHISTOX1")
menuIconeEchelle[menuIconeEchelle.length]=menuIcoEch
//alert(menuIconeEchelle[Icone])

basex=new Array()
for(i=0;i<base00.length-9;i++){
if(i==0){
basex[i]=new Array("abc")//menuIconeEchelle[Icone][1].split(",")[0]+
}else{
basex[i]=""
}
}

//type 2,0 valeur brute
var typico=menuIconeEchelle[Icone][3][1]
//alert("typico="+typico)

if(typico==0){


for(i=1;i<base00.length-9;i++){
if(base00[i][menuIconeEchelle[Icone][0][0]]==-99999 ){basex[i]=-99999}else{
basex[i]=base00[i][menuIconeEchelle[Icone][0][0]]
//if(i==10){alert("là basex[i]="+basex[i]+" pour i="+i)}

//***********************************************FLUX
					if(menuIconeEchelle[Icone][11][0]==i ){ Valcentreflux=basex[i];basex[i]=-99999}// flux : occultation de la valeur de la zone centre et stockage pour récupération par couche unique  afin de l'afficher en format texte
//***********************************************fin de FLUX



if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}

}

//type 2,1 % poucentage
if(typico==1){for(i=1;i<base00.length-9;i++){
var num=base00[i][menuIconeEchelle[Icone][0][0]]
var denom=base00[i][menuIconeEchelle[Icone][0][1]]
if(num==-99999 || denom==-99999 || denom==0){basex[i]=-99999}else{
//if(i==9){alert(denom)}
//if(i==9){alert(num)}
basex[i]=parseInt(100*100*num/Math.abs(denom))/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}
//type 2,2 % accroiseement
if(typico==2){for(i=1;i<base00.length-9;i++){
var num1=base00[i][menuIconeEchelle[Icone][0][0]]
var num2=base00[i][menuIconeEchelle[Icone][0][1]]
var denom=base00[i][menuIconeEchelle[Icone][0][2]]
if(num1==-99999 || num2==-99999 || denom==-99999 || denom==0){basex[i]=-99999}else{
basex[i]=parseInt(100*100*(num1-num2)/Math.abs(denom))/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}
//type 2,3 % somme/denom
/*
if(typico==3){
for(i=1;i<base00.length-9;i++){
var denom=base00[i][menuIconeEchelle[Icone][0][menuIconeEchelle[Icone][0].length-1]]
//if(i==9){alert(denom)}
var testnum=0
var Snum=0
for(k=0;k<(menuIconeEchelle[Icone][0].length-1);k++){
//if(i==9){alert(base00[i][menuIconeEchelle[Icone][0][k]])}
Snum+=base00[i][menuIconeEchelle[Icone][0][k]]
if(base00[i][menuIconeEchelle[Icone][0][k]]==-99999){testnum+=1}
}

if(testnum>0 || denom==-99999 || denom==0){basex[i]=-99999}else{

basex[i]=parseInt(100*100*(Snum)/denom)/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}
*/
//type 2,3 % somme/denom
if(typico==3){

for(i=1;i<base00.length-9;i++){
var denom=base00[i][menuIconeEchelle[Icone][0][menuIconeEchelle[Icone][0].length-1]]
var testnum=0
var Snum=0
var k99999=0
var kk=0
for(k=0;k<(menuIconeEchelle[Icone][0].length-1);k++){
kk+=1
		if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
		Snum+=base00[i][menuIconeEchelle[Icone][0][k]]
		
		}else{k99999+=1}
}

if(kk==k99999 || denom==-99999 || denom==0){basex[i]=-99999}else{
basex[i]=parseInt(100*100*(Snum)/Math.abs(denom))/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}

//type 2,5 % somme/somme
if(typico==5){for(i=1;i<base00.length-9;i++){
//var denom=base00[i][menuIconeEchelle[Icone][0][menuIconeEchelle[Icone][0].length-1]]
var testnum=0
var testnum2=0
var Snum=0
var Snum2=0
var ksepar=0
var kk=0
var k99999=0
var kk2=0
var k999992=0
//somme numérateur
for(k=0;k<(menuIconeEchelle[Icone][0].length);k++){
kk+=1
if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
Snum+=base00[i][menuIconeEchelle[Icone][0][k]]
}else{k99999+=1}
/* Ancien : idiot!!!
Snum+=base00[i][menuIconeEchelle[Icone][0][k]]
if(base00[i][menuIconeEchelle[Icone][0][k]]==-99999){testnum+=1}
*/
if(parseInt(menuIconeEchelle[Icone][0][k+1]/10000)==1000){ksepar=k+1;k=menuIconeEchelle[Icone][0].length}
}
//somme dénominateur
for(k=ksepar+1;k<(menuIconeEchelle[Icone][0].length);k++){
kk2+=1
if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
Snum2+=base00[i][menuIconeEchelle[Icone][0][k]]
}else{k999992+=1}

/* Ancien : idiot!!!
//Snum2+=base00[i][menuIconeEchelle[Icone][0][k]]
//if(base00[i][menuIconeEchelle[Icone][0][k]]==-99999){testnum2+=1}
*/
}
//if(i==73){alert("Snum="+Snum+"   Snum2="+Snum2)}
/*
if(testnum>0 || testnum2>0 || Snum2==0){basex[i]=-99999}else{
*/
if(  kk==k99999 || kk2==k999992 || Snum2==0){basex[i]=-99999}else{
basex[i]=parseInt(100*100*Snum/Snum2)/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}
//type 2,6 % (a-b)/somme
if(typico==6){for(i=1;i<base00.length-9;i++){

var Snum2=0
var k99999=0
var kk=0
var num1=base00[i][menuIconeEchelle[Icone][0][0]]
var num2=base00[i][menuIconeEchelle[Icone][0][1]]

//somme dénominateur
for(k=3;k<(menuIconeEchelle[Icone][0].length);k++){
kk+=1

if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
Snum2+=base00[i][menuIconeEchelle[Icone][0][k]]
}else{k99999+=1}

}
var denom = Snum2


if(num1==-99999 || num2==-99999 || denom==-99999 || denom==0 || k99999==kk){basex[i]=-99999}else{
basex[i]=parseInt(100*100*(num1-num2)/Math.abs(denom))/100
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}


}
}
//type 2,4 somme
if(typico==4){for(i=1;i<base00.length-9;i++){
var k99999=0
var kk=0
var Snum=0
for(k=0;k<(menuIconeEchelle[Icone][0].length);k++){
kk+=1
if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
Snum+=base00[i][menuIconeEchelle[Icone][0][k]]

}else{k99999+=1}
}

if(k99999==kk ){basex[i]=-99999}else{
basex[i]=Snum
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}
}
}
}



// --------------------------------------ligne 0 de base00select

var base00selectx=new Array

for(h=0;h<basex.length;h++){
base00select[base00select.length]=new Array()
}


base00select[0][base00select[0].length]=menuIconeEchelle[Icone][1]
base00select[0][base00select[0].length]=base00.length-7
for(f=0;f<menuIconeEchelle[Icone][0].length;f++){
if(menuIconeEchelle[Icone][0][f]!=10000001){
base00select[0][base00select[0].length]=base00[0][menuIconeEchelle[Icone][0][f]]
}
}

base00select[0][base00select[0].length]=1

// --------------------------------------les autres lignes de base00select
for(g=1;g<basex.length;g++){

//---------application du coeficient multiplicateur----------------------

if(menuIconeEchelle[Icone][3][8]){
if(menuIconeEchelle[Icone][3][8]!=-99999 & basex[g]!=-99999){basex[g]=parseInt(100*basex[g]*menuIconeEchelle[Icone][3][8])/100}
}//------------------ fin de l'application du coeficient multiplicateur----------------------
//---------------------------application dde la comparaison à une norme---------------------


if(menuIconeEchelle[Icone][3][9]){
if(menuIconeEchelle[Icone][3][9]!=-99999 & basex[g]!=-99999){basex[g]=parseInt(100*(basex[g]-menuIconeEchelle[Icone][3][9]))/100}
}//--------------------------- fin de la comparaison à une norme-----------------


base00select[g][base00select[g].length]=g
base00select[g][base00select[g].length]=basex[g]
base00select[g][base00select[g].length]=g
base00select[g][base00select[g].length]=1
}

//return basex
/*
if(indicfiche==0){
stockvariable(basex)
}else{

}
*/
}
  
function calculbaseselct(){
colox=new Array()
colox0=new Array()
base00select= new Array()
base00Aselect=new Array()

if(typeicone0[0]==1 || typeicone0[0]==3){
calculbaseselct2()
}else{
calculIcone(Icone);

//alert("xxxx="+base00select)
;
if(SL==1){
top.frames.Num0.frames.ico.recupbaseinit() //délenche le chargement de donnÃ&#402;Â©es dans le fichier Data-ico... lui mÃ&#402;Âªme ouvert par selection dans un menu de pilote2
}else{
top.frames.Num0.frames.analyse.recupbaseinit()
}
}
}
 
function calculbaseselct2(){
	//alert("calculbaseselct2() : typeicone0 = "+typeicone0)
var menuvarici=top.frames.Num0.frames.datacarte.transpara("return paramHISTOX1")

kb=0

if(typeicone0[0]==1 || typeicone0[0]==3){

colox0=top.frames.Num0.frames.precarte.transcolonx("return colonx")//varaible tableau contenant les nÃ&#8218;Â°de colonne des donnÃ&#402;Â©es de l\'histo dans la base
calculcolox0()
}

var IndicTest=0
var IndicTest2=0
var lignebaseTestSeuil=new Array()

for (i=0;i<LLx0+1;i++){

var transitici=""
var lignbase00=new Array()
lignbase00=base00[i]
lignebaseTestSeuil=lignbase00

var borneSsurS  // détection du rang de la valeur 10000001 pour le traitement S1/S2% et (a-b)/S%

for (j=0;j<colox.length;j++){


//------------------------formation du vercteur de base : transitici------------------------------------------------------------------------

if(colox[j]=="10000001"){borneSsurS=j} //détection de la borne 10000001 : dans le cas ou cette borne est présente , on saute le rang j courant (car 1000001 n'est pas un numéro de colonne dans la base mais un séparateur entre numérateur et dénominateur) et on stocke la valeur j dans la variable borneSsurS
else{// cas général

{  var additifici=lignbase00[colox[j]]  }

{  if(j==0){transitici+=additifici}else{transitici+=","+additifici}   }
//if(typeicone0[0]==2){alert("typeicone0[0]==2"+transitici)}
if(j==0 && i==0){
	
if(typeicone0[0]==1 ){transitici=top.frames.Num0.frames.precarte.transtitrex("return titrex")}
	
}
if(j==colox.length-2 && i==0 && typeicone0[0]==1){transitici+=","+top.frames.Num0.frames.precarte.transsourcex("return sourcex")}
if(j==0 && i>0 && typeicone0[0]==3){transitici+=","+addressDATA0}
} // fin de détection de la borne 10000001
}//fin boucle j
if(typeicone0[0]==3 && i==0){transitici=top.frames.Num0.frames.precarte.transtitrex("return titrex")}
if(typeicone0[0]==3 && i==LLx0){transitici=i+","+0+",ensemble"}

ajouter2(transitici)

}//fin boucle i



// --------------------- début calcul des données de légende de l\'histo

if(typeicone0[0]!=3){ 
for (j=0;j<colox.length-2;j++){
var transitici=""
var kx=0

if(typeicone0[0]==1){kx=6}
if(typeicone0[0]==2){kx=2}

for (i=1;i<kx;i++){
var lignbase00=new Array()
lignbase00=base00[i+LLx0]


if(i==1){transitici+=lignbase00[colox[j+1]]}else{transitici+=","+lignbase00[colox[j+1]]}

}// fin de boucle en i

ajouter2(transitici)

}//fin boucle j
}

// --------------------- début calcul des commentaires détaillés
if(typeicone0[0]==[1]){
var transitici=""
var lignbase00=new Array()
lignbase00=base00[7+LLx0]
for (j=0;j<colox.length-2;j++){
transitici=lignbase00[colox[j+1]]

ajouter2(transitici)
}
}


if(typeicone0[0]==[3]){
var debj=1
var transitici=""
var lignbase00=new Array()
lignbase00=base00[1+LLx0]
for (j=0;j<colox.length-2;j++){
transitici=lignbase00[colox[j+1+debj]]

ajouter2(transitici)
}
}





//-------------------délachement de l\'affichage
if(typeicone0[0]==1 || typeicone0[0]==3){



top.frames.Num0.frames.precarte.recupbaseinit() //délenche le chargement de donnÃ&#402;Â©es dans le fichier Data-histo... lui mÃ&#402;Âªme ouvert par selection dans un menu de pilote
}
/*
if(typeicone0[0]==22222){
if(SL==1){
top.frames.Num0.frames.ico.recupbaseinit() //délenche le chargement de donnÃ&#402;Â©es dans le fichier Data-ico... lui mÃ&#402;Âªme ouvert par selection dans un menu de pilote2
}else{
top.frames.Num0.frames.analyse.recupbaseinit()
}


}
*/
}//fin function
   
 
function actubase0(){

for(i=0;i<LLx0+1;i++){
base00select[i]=base00Aselect[i].donnees.split(',')

}
trabas0=base00select
return trabas0
}
function transbase00(){

return base00Aselect
}
function transbase0(){

var trabas0=base00select
return trabas0
}

function transbase00(){
return base00
}



var DataTabCol=new Array() // table dans laquelle seront placées les colonnes de données récupérées
var tabcol= new Array()
var limit

function recuptranslim(lim){limit=lim}// reçoit la borne sup de la bpoucle sur la table des n° de colonnes
function recuptranstabcol(a){tabcol=a;}// reçoit la tables des n° de colonne

function initDimDataTabCol(){
DataTabCol=new Array()// vide la table des données à transférer
// générer la table DataTabCol aux dimensions de la base de données

for(ix=0;ix<base00.length;ix++){

var ligne_de_base_Tabcol=new Array()
for(j=0;j<limit;j++){ligne_de_base_Tabcol[ligne_de_base_Tabcol.length]=""}
DataTabCol[DataTabCol.length]=ligne_de_base_Tabcol
}

}



function extract_data(){//paramêtre = tableau contenant les n° de colonne des données à récupérer
//initDimDataTabCol()

for(nc=0;nc<limit;nc++){// boucle sur la table des n° de colonnes
for(ix=0;ix<base00.length;ix++){//boucle sur base00.length
if(ix==0 || ix==base00.length-1 || ix==base00.length-6 || ix==base00.length-7){// recherche et élimination des virgules dans les libellés
{var libelvirg=base00[ix][tabcol[nc]]+""; base00[ix][tabcol[nc]]=libelvirg.replace(/,/g,";")}
}
DataTabCol[ix][nc]=base00[ix][tabcol[nc]]
}
}
return DataTabCol
}



function add_data(xdata){
/* *********cas de figure sans controle de concordance des index***********

*/
var c=base00[0].length-1
for(i=0;i<base00.length-1;i++){//boucle sur base00.length
for(k=0;i<base00.length-1;k++){// boucle sur xdata : le premier xdata[0] écrase le zero en fin de ligne sur base00

base00[i][c+k]=xdata[k]
}
base00[i][c+xdata.length]=0
}

}



;