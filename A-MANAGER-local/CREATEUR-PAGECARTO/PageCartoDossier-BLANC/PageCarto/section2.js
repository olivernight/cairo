

var ligneicone=1

var lignebase=1 //-> n° de ligne dans la base -> correspond aux territoires
//alert(menuSujet[iSujet][0][0])
function retourne(a){
return iSujet
}
function transNoDatx(a){
NoDatx=a
rechOui=1
}
function forcerechOui(){
rechOui=0
}
var TAB=new Array()//introduit ici pour variable globale utilisée par le RADAR

function calculHisto(NoDatx,iSujet){// a est le rang dans les aires indexées du SVG et b est le rang dans le tableau  menuSujet
DimH2=50

DimH=50  // demi hauteur du graphique
DimB=DimH
Hhx=9 //borne échelle max
Hbx=0 //borne échelle Min

largcol=22 // largeur barre
larginter=3 // écart interbarres
percent="%" // percent="%" si pourcentage sinon ""
absol_relat=2
//if(document.getElementById("divFiche2").style.display=="block"){window.frames.hyperFiche.initDataFiche()}
if(typeof(FicheEtTexte) == "undefined"){}else{

if(FicheEtTexte == 2 || FicheEtTexte == 3){window.frames.hyperFiche.initDataFiche()}

}
boitebalise()
fermaide()
histola=''

TAB=new Array()
TAB[0]=0
libel=new Array()
//libeltitre=new Array()
libel[0]=""

for(i=0;i<menuSujet[iSujet][0].length;i++){
var idata
if(NoDatx==0){idata=0}else{idata=menuSujet[iSujet][0][i]}
var xtab=base00[NoDatx][idata]
if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){// COURBES
}else{
if(xtab==-99999){xtab=0}
}
TAB[i+1]=xtab
libel[i+1]=menuSujet[iSujet][4][i]
//libeltitre[i]=libel[i]
}//
var titregraph
if(NoDatx==0){titregraph=" "}else{titregraph=nomzone[NoDatx]}
var libelici=menuSujet[iSujet][1]+"<br/>(<i>"+menuSujet[iSujet][2]+"</i>)"
if(menuSujet[iSujet][11][0]==1){percent="%"}else{percent=""}
var titreX=new Array(titregraph,libelici,'axeY')
largcol=menuSujet[iSujet][11][3]
//libel=menuSujet[iSujet][4]
//libeltitre
//alert(libel)
histo(DimH,DimB,Hhx,Hbx,TAB,absol_relat,largcol,larginter,coulhX,coulbX,libel,titreX,percent)
var ne=document.getElementById("zam2")
if(ne){
ne.parentNode.removeChild(ne)
}
document.getElementById("innerhisto").innerHTML=histola

if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3) || (menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1)){//RADAR

}else{

document.getElementById("innerhisto").title=menuSujet[iSujet][12]
libelhistomultiout(0)
}


marqueurcarte()
}
//
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
var Synthesetotal
var SynthX
var Snum
var Sdenom
var Stotal
var exception
var resultEnsemble=0 ;/* cas d'une aire ajouté pour la synthèse de la carte */
function exeptionSynthese(z){

exception=0
for(zz=0;zz<exceptionArray.length;zz+=1){
if(exceptionArray[zz]==z){exception=1;zz=exceptionArray.length}
}
return exception
}
			function exeptionSyntheseMenu(z){

			exceptionMenu=0
			for(zz=0;zz<exceptionColArraySujet.length;zz+=1){
			
			if(exceptionColArraySujet[zz]==z){exceptionMenu=1;zz=exceptionColArraySujet.length}
			}
			for(zz=0;zz<exceptionColArrayOther.length;zz+=1){
			if(exceptionColArrayOther[zz]==z){alert(2);exceptionMenu=1;zz=exceptionColArrayOther.length}
			}
			
			return exceptionMenu
			}

function calculIcone(Icone){

 // a est le rang dans les aires indexées du SVG et b est le rang dans le tableau menuIconeEchelle
// on lit les parametre dans le tableau menuIconeEchelle, on le  libélé et on les place dans basex[0], on calcule selon letype icone et on place le résumlta dans basex[i]  puis on appelle stockvariable(basex)
//teste le type d'icone et calcule afférents
//if(dernierecouche==1){icotempla=Icone ; alert("la")}
SynthX=""
Synthesetotal=0
Stotal=0
SnumX=0
SdenomX=0
basex=new Array()
basex[0]=menuIconeEchelle[Icone][1]
var lignbas=9
if(visiontotal==1){lignbas=10}else{lignbas=9}
//type 2,0 valeur brute
var typico=menuIconeEchelle[Icone][3][1]
//type 2,0 valeur brute__________________________________________________________________________________________________
if(typico==0){
Valcentreflux=-99999
for(i=1;i<base00.length-lignbas;i++){
if(base00[i][menuIconeEchelle[Icone][0][0]]==-99999 ){basex[i]=-99999}else{

basex[i]=base00[i][menuIconeEchelle[Icone][0][0]]

//if(i==10){basex[i]=-99999}
//***********************************************FLUX
					if(menuIconeEchelle[Icone][11][0]==i & dernierecouche==1 ){Valcentreflux=basex[i];basex[i]=-99999}// flux : occultation de la valeur de la zone centre et stockage pour récupération par couche unique  afin de l'afficher en format texte
//***********************************************fin de FLUX
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999} else {
		if(exeptionSynthese(i)==0){
		SnumX+=base00[i][menuIconeEchelle[Icone][0][0]]
		}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}
var ResX=SnumX
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]}}
ResX=parseInt(ResX*100)/100
SynthX="<td><b><span style='color:black'>Résultat : </span>"+ResX+"</b></td>"
//resultEnsemble=ResX

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 ){}else{
basex[base00.length-10]=SnumX
basex[base00.length-10]=parseInt(100*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
}
}

}
//fin de type 2,0 valeur brute--------------------------------------------------------------------------------------------------
//type 2,1 % poucentage__________________________________________________________________________________________________
if(typico==1){
for(i=1;i<base00.length-lignbas;i++){
var num=base00[i][menuIconeEchelle[Icone][0][0]]
var denom=base00[i][menuIconeEchelle[Icone][0][1]]
if(num==-99999 || denom==-99999 || denom==0){basex[i]=-99999}else{

basex[i]=parseInt(100*100*num/Math.abs(denom))/100
		if(exeptionSynthese(i)==0){

		SdenomX+=denom
		}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}else{
		if(exeptionSynthese(i)==0){
		SnumX+=(num)

		}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}

var ResX=parseInt(100*SnumX/Math.abs(SdenomX))/100;ResX=parseInt(10000*ResX)/100
var perc="%"

if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]/100;perc=""}}
SynthX="<td><b><span style='color:black'>Numérateur : a = </span>"+SnumX+"</b></td></tr><tr><td><b><span style='color:black'>Dénominateur : b= </span>"+SdenomX+"</b></td></tr><tr><td><b><span style='color:black'>Résultat : b/a = </span>"+ResX+" "+perc+"</b></td>"
//resultEnsemble=ResX

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}

}//FIN de type 2,1 % poucentage-------------------------------------------------------------------------------
//type 2,2 % accroissement__________________________________________________________________________________
if(typico==2){
SnumX=0
var SdepX=0
for(i=1;i<base00.length-lignbas;i++){
var num1=base00[i][menuIconeEchelle[Icone][0][0]]
var num2=base00[i][menuIconeEchelle[Icone][0][1]]
var denom=base00[i][menuIconeEchelle[Icone][0][2]]
if(num1==-99999 || num2==-99999 || denom==-99999 || denom==0){basex[i]=-99999; 
//alert(num1+" // "+num2+" // "+denom)
if(num1==-99999 ){num1=0}
if(num2==-99999 ){num2=0}
SnumX+=(num1-num2)
SdepX+=num2
}else{
			//

			//
basex[i]=parseInt(100*100*(num1-num2)/Math.abs(denom))/100
	if(exeptionSynthese(i)==0){
	
			SdepX+=num2
			var tden=0
			if(denom==1 & SdenomX==1){SdenomX=1;tden=1}
			if(denom==2 & SdenomX==2){SdenomX=2;tden=1}
			if(denom==100 & SdenomX==100){SdenomX=100;tden=1}
			if(tden==0){SdenomX+=denom}
			Stotal+=num2
	}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999}else{
	if(exeptionSynthese(i)==0){
			SnumX+=(num1-num2)

	}
}

if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}





Synthesetotal=SnumX
if(Synthesetotal>10){Synthesetotal=parseInt(Synthesetotal)}else{Synthesetotal=parseInt(Synthesetotal*100)/100}
if(SdenomX==100){
var perc="%"
var ResX=parseInt(100*Synthesetotal/Math.abs(SdenomX))/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8];perc=""}}
SynthX="<td><b><span style='color:black'>Résultat : (b-a) = </span>"+parseInt(10000*ResX)/100+"</b></td>"
SynthX+="</tr><tr><td><b><span style='color:black'>valeur de l'origine : a = </span>"+parseInt(SdepX*100)/100+"</b></td></tr>"
SynthX+="<tr><td><b><span style='color:black'>Amplitude de variation<br/> "+perc+" par rapport à l'origine :<br/>(b-a)/a = </span>"+parseInt(10000*Synthesetotal/SdepX)/100+" %</b></td>"

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(100*basex[base00.length-10])
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}
//resultEnsemble=parseInt(10000*ResX)/100
}else{
SynthX="<td><b><span style='color:black'>Numérateur :(b-a) = </span>"+Synthesetotal+"</b></td></tr>"
SynthX+="<tr><td><b><span style='color:black'>Dénominateur : c= </span>"+parseInt(SdenomX*100)/100+"</b></td></tr>"
var ResX=Synthesetotal/Math.abs(SdenomX);ResX=parseInt(10000*ResX)/100
var perc="%"
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]/100;perc=""}}
SynthX+="<tr><td><b><span style='color:black'>Résultat : (b-a)/c = </span>"+ResX+" "+perc+"</b></td>"
//resultEnsemble=ResX

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}

}

}

//FIN de type 2,2 % accroissement--------------------------------------------------------------------------------------
//type 2,3 % somme/denom______________________________________________________________________________________________
if(typico==3){

for(i=1;i<base00.length-lignbas;i++){
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
			if(exeptionSynthese(i)==0){
			
			SdenomX+=denom
			}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999} else {
			if(exeptionSynthese(i)==0){
			SnumX+=Snum
			
			}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}

var perc="%"
var ResX=SnumX/Math.abs(SdenomX);ResX=parseInt(10000*ResX)/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]/100;perc=""}}
SynthX="<td><b><span style='color:black'>Numérateur : a = </span>"+SnumX+"</b></td></tr><tr><td><b><span style='color:black'>Dénominateur : b= </span>"+SdenomX+"</b></td></tr><tr><td><b><span style='color:black'>Résultat : a/b = </span>"+ResX+" "+perc+"</b></td>"
//resultEnsemble=ResX
if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}

}//FIN de type 2,3 % somme/denom------------------------------------------------------------------------------------------
//type 2,5 % somme/somme_________________________________________________________________________________________________
if(typico==5){
for(i=1;i<base00.length-lignbas;i++){
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

if(parseInt(menuIconeEchelle[Icone][0][k+1]/10000)==1000){ksepar=k+1;k=menuIconeEchelle[Icone][0].length}
}
//somme dénominateur
for(k=ksepar+1;k<(menuIconeEchelle[Icone][0].length);k++){
kk2+=1
if(base00[i][menuIconeEchelle[Icone][0][k]]!=-99999){
Snum2+=base00[i][menuIconeEchelle[Icone][0][k]]
}else{k999992+=1}

}
if(  kk==k99999 || kk2==k999992 || Snum2==0){basex[i]=-99999}else{


basex[i]=parseInt(100*100*Snum/Math.abs(Snum2))/100
			if(exeptionSynthese(i)==0){
			
			SdenomX+=Snum2
			}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999} else {
			if(exeptionSynthese(i)==0){
			SnumX+=Snum
			
			}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}

}
var perc="%"
var ResX=SnumX/Math.abs(SdenomX);ResX=parseInt(10000*ResX)/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]/100;perc=""}}
SynthX="<td><b><span style='color:black'>Numérateur : a = </span>"+SnumX+"</b></td></tr><tr><td><b><span style='color:black'>Dénominateur : b= </span>"+SdenomX+"</b></td></tr><tr><td><b><span style='color:black'>Résultat : a/b = </span>"+ResX+" "+perc+"</b></td>"
//resultEnsemble=ResX

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}

}//FIN de type 2,5 % somme/somme ----------------------------------------------------------------------------------------------
//type 2,6 % (a-b)/somme_______________________________________________________________________________________________________
if(typico==6){

for(i=1;i<base00.length-lignbas;i++){

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


if(num1==-99999 || num2==-99999 || denom==-99999 || denom==0 || k99999==kk){
basex[i]=-99999
if(num1==-99999 ){num1=0}
if(num2==-99999 ){num2=0}
SnumX+=(num1-num2)

}else{

basex[i]=parseInt(100*100*(num1-num2)/Math.abs(denom))/100
			if(exeptionSynthese(i)==0){
			
			SdenomX+=denom
			}
if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999} else {
			if(exeptionSynthese(i)==0){
			SnumX+=(num1-num2)
			
			}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}
var perc="%"
var ResX=SnumX/Math.abs(SdenomX);ResX=parseInt(10000*ResX)/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){ResX=ResX*menuIconeEchelle[Icone][3][8]/100;perc=""}}
SynthX="<td><b><span style='color:black'>Numérateur : a = </span>"+SnumX+"</b></td></tr><tr><td><b><span style='color:black'>Dénominateur : b= </span>"+SdenomX+"</b></td></tr><tr><td><b><span style='color:black'>Résultat : a/b = </span>"+ResX+" "+perc+"</b></td>"
//resultEnsemble=ResX

if(visiontotal==1){

basex[base00.length-10]=0
if(SnumX==-99999 || SdenomX==-99999){}else{
basex[base00.length-10]=SnumX/Math.abs(SdenomX)
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
}


}//FIN de type 2,6 % (a-b)/somme----------------------------------------------------------------------------------------------
//type 2,4 somme _____________________________________________________________________________________________________________
if(typico==4){for(i=1;i<base00.length-lignbas;i++){
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

if(SeuilHautBasResult(i,basex[i],Icone)==0){basex[i]=-99999} else {
			if(exeptionSynthese(i)==0){
			SnumX+=Snum
			}

}
if(SeuilHautBas(i,0,Icone)==0){basex[i]=-99999}
}
}
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){SnumX=parseInt(100*SnumX*menuIconeEchelle[Icone][3][8])/100}}
var ResX=SnumX
SynthX="<td><b><span style='color:black'>Résultat = </span>"+ResX+"</b></td>"

if(visiontotal==1){
basex[base00.length-10]=SnumX
basex[base00.length-10]=parseInt(10000*basex[base00.length-10])/100
if(menuIconeEchelle[Icone][3][8]){if(menuIconeEchelle[Icone][3][8]!=-99999){basex[base00.length-10]=basex[base00.length-10]*menuIconeEchelle[Icone][3][8]/100}}
if(exeptionSynthese(i)==0 || exeptionSyntheseMenu(Icone+1)==1 ){basex[base00.length-10]=-99999}
}
//resultEnsemble=ResX
}// fin de type 2,4 somme ----------------------------------------------------------------------------------------------



for(g=1;g<basex.length;g++){

//---------application du coeficient multiplicateur---------------------

if(menuIconeEchelle[Icone][3][8]){
if(menuIconeEchelle[Icone][3][8]!=-99999 & basex[g]!=-99999){basex[g]=parseInt(100*basex[g]*menuIconeEchelle[Icone][3][8])/100}
}
//------------------ fin de l'application du coeficient multiplicateur----------------------
//---------------------------application dde la comparaison à une norme---------------------


if(menuIconeEchelle[Icone][3][9]){
if(menuIconeEchelle[Icone][3][9]!=-99999 & basex[g]!=-99999){basex[g]=parseInt(100*(basex[g]-menuIconeEchelle[Icone][3][9]))/100; resultEnsemble=basex[g]}
}

//--------------------------- fin de la comparaison à une norme-----------------

}
//---------------------------Synthèse dans le cas de la comparaison à une norme---------------------
if(menuIconeEchelle[Icone][3][9]){
if(menuIconeEchelle[Icone][3][9]!=-99999  & ResX!=-99999 ){SynthX="<td><b><span style='color:black'>Résultat : </span>"+parseInt(100*(ResX-menuIconeEchelle[Icone][3][9]))/100+"</b></td>"}
}
//---------------------------Fin de Synthèse dans le cas de la comparaison à une norme---------------------


menuIconeEchelle[Icone][9]=menuIconeEchelle[Icone][9].replace("'","‘")
var Xsyn="<table style='width:168px;font-size:9px;opacity:0.8;border:1px solid gray'><tr><td><span style=';font-size:9px;' title='"+menuIconeEchelle[Icone][9]+"'><b>"+menuIconeEchelle[Icone][1]+"</b></span></td></tr></table><table style='width:168px;font-size:9px;opacity:0.8;border:1px solid gray'><tr> "+SynthX+" </tr></table>"
if(DonneesDeSynthese==1){// =0 -> pas d'affichage des données de synthèse. =1 -> affichage des données de synthèse
//alert(exceptionColArray)
//alert(menuIconeEchelle[Icone][0])
var indicexceptCol=1
for(k=0;k<exceptionColArray.length;k++){
for(l=0;l<(menuIconeEchelle[Icone][0].length);l++){
if(exceptionColArray[k]==menuIconeEchelle[Icone][0][l]){l=menuIconeEchelle[Icone][0].length;k=exceptionColArray.length;indicexceptCol=0}
}
}

if(indicexceptCol==0){
Xsyn="<table style='width:168px;font-size:9px;opacity:0.8;border:1px solid gray'><tr><td><span style=';font-size:9px;' title='"+menuIconeEchelle[Icone][9]+"'><b>"+menuIconeEchelle[Icone][1]+"</b></span></td></tr></table><table style='width:168px;font-size:9px;opacity:0.8;border:1px solid gray'><tr><td style='color:red'><b> Données non sommables</b></td></tr></table>"
//resultEnsemble=-99999
}else{}
//alert(numtot+"     "+(base00.length-10))
//if(visiontotal==1){basex[numtot]=basex[base00.length-10]/*resultEnsemble*/}

if(dernierecouche==1){
document.getElementById("synthe1").innerHTML=Xsyn
document.getElementById("synthe1").style.display="block"
document.getElementById("syntheseCarte").style.display="block"
document.getElementById("xtabsynthe").style.display="none"
document.getElementById("xtabsynthe").style.width="175px"
}else{
document.getElementById("synthe2").innerHTML=Xsyn
document.getElementById("synthe2").style.display="block"
document.getElementById("syntheseCarte").style.display="block"
document.getElementById("xtabsynthe").style.display="none"
document.getElementById("xtabsynthe").style.width="175px"
}

}


if(indicfiche==0){
stockvariable(basex)
}else{
return basex
}
}


function xclos(){
document.getElementById("syntheseCarte").style.display="none"
DonneesDeSynthese=0
}
function xred(){
document.getElementById("xtabsynthe").style.display="none"
}
function xouv(){
document.getElementById("xtabsynthe").style.display="block"
document.getElementById("xtabsynthe").style.width="175px"
}


var initselect=0
function effacemaqueurcarte(){
fermaide()
if(initselect==1){

document.getElementById("p"+numeroTemp).setAttribute("opacity","1")
//document.getElementById("p"+numeroTemp).setAttribute("fill",colorareaTemp)
document.getElementById("p"+numeroTemp).setAttribute("stroke-width",traitareaTemp)
document.getElementById("cercleR").setAttribute("r",0)
}
}

var traitareaTemp
var colorareaTemp
var traitareaTemp
function marqueurcarte(){
if(mobDTmarqueur==1){NoDatx=menuIconeEchelle[Icone][11][0];}
if(initselect!=0){
document.getElementById("p"+numeroTemp).setAttribute("opacity","1")
//document.getElementById("p"+numeroTemp).setAttribute("fill",colorareaTemp)
document.getElementById("p"+numeroTemp).setAttribute("stroke-width",traitareaTemp)
}
if(NoDatx!=0){
if (rechOui != 2){
var crx,cry
crx=document.getElementById("c"+NoDatx).getAttribute("cx")
document.getElementById("cercleR").setAttribute("cx",crx)
cry=document.getElementById("c"+NoDatx).getAttribute("cy")
document.getElementById("cercleR").setAttribute("cy",cry)
document.getElementById("cercleR").setAttribute("r",30)

if(rcr!=0){
document.getElementById("cercleR").setAttribute("r",rcr)
document.getElementById("cercleR").setAttribute("stroke-width",(1/bz+1))
}
}else{
document.getElementById("cercleR").setAttribute("r",0)
}
colorareaTemp=document.getElementById("p"+NoDatx).getAttribute("fill")
traitareaTemp=document.getElementById("p"+NoDatx).getAttribute("stroke-width")
initselect=1
numeroTemp=NoDatx

document.getElementById("p"+NoDatx).setAttribute("stroke-width","1")
//document.getElementById("p"+NoDatx).setAttribute("fill","#77A5C2")//"#005566"
document.getElementById("p"+NoDatx).setAttribute("opacity","0.5")
if(mobDTmarqueur==1){mobDTmarqueur=0;calculHisto(NoDatx,iSujet)}//
}


airebalise(NoDatx,base00[NoDatx][1])
}






//var listeAddContoursSVG=new Array()




var zX=1//Z0//*Wsvg/900
var HFrame=505
var LFrame=838
//var MaxMin=new Array(789469,81674,799304,92881) // pour récupérer la valeur de MaxMin: placer le code : aler(MaxMin) dans la fonction retourneMaxMin() de PARAMCARTE.html de la carte dans GaïaMundi
var minx=MaxMin[0]
var miny=MaxMin[1]
var maxx=MaxMin[2]
var maxy=MaxMin[3]
var Rep
var Contour
var Couleur
var epaisseur
var tx
var ty
var rx
var ry
var x
var y

var xcontour=""
var Gcoord0=new Array()
var Gcoord02=new Array()


var base02 = new Array()
var datahistomulti = new Array
var Ax2
var Bx2
var Cx2
var Dx2

function Nouvelle2(a){
this.donnees=a;

}
function ajouter(a){

base02[base02.length]=new Nouvelle2(a)
}
function ajouter2(a){

base02[base02.length]=new Nouvelle2(a)
}


//-------------------------------------------------------------------CALCUL LIGNE SVG------------------------------------------------------------------------

var XID2=1
var XNOM2=""
//-----------------------------------------------------------------------------------------
function IDetNOM2(){
var a=L002
var indexm2
XID2=""
XNOM2=""
for(i=0;a[i]!="-";i++){

XID2+=a[i];
indexm2=i
}
for(i=(indexm2+2);i<a.length;i++){
XNOM2+=a[i]

}

}

//------------calcul

var lign02=new Array()
var L002=new Array()
//IDetNOM2()
var GCOO2=new Array()
//alert(L002)
var titreencours

function calculcoord2(){

var j=0 // rang horizontal dans une ligne GCOO
var k=0
for(l=0;l<base02.length;l++){// boucle sur les ligne de la base base0 des coordonnées originales de la carte

var lign2=base02[l].donnees.split(',')

if(lign2[0]!=titreencours ){

GCOO2[0]=1 //XID2;
GCOO2[j+1]=titreencours   //  "x"+k    // XNOM2;
titreencours=lign2[0];
Gcoord02[k]=GCOO2;
GCOO2=new Array()
j=0
k=k+1}

j=j+1

GCOO2[j]=((LFrame)-(maxx-minx)*(LFrame)/2/(maxy-miny))/2+(parseFloat(lign2[1])-minx)*(LFrame)/2/(maxy-miny)
GCOO2[j+1]=((HFrame)-parseFloat(lign2[2]-miny)*(LFrame)/2/(maxy-miny))-25


j=j+1

}
GCOO2[0]=1 //XID2;
GCOO2[j+1]=titreencours   //  "x"+k    // XNOM2;
Gcoord02[k]=GCOO2;

}


var coordini=new Array()
function tracelignes2(Contour,Couleur,epaisseur,tx,rx,ry,ty,x,y){//appelé par contours.html
if(tx>-1000000000000){}else{tx=1}
if(rx>-1000000000000){}else{rx=0}
if(ry>-1000000000000){}else{ry=0}
if(ty>-1000000000000){}else{ty=1}
if(x>-1000000000000){}else{x=0}
if(y>-1000000000000){}else{y=0}

Contour=xcontour.replace(".js","")
if(Contour!=""){
if(document.getElementById(Contour)){effaceContour(Contour)}else{
  var svgns = "http://www.w3.org/2000/svg";
//Contour=Contour.replace(".js","")
var xGcoord2=Gcoord02

var nouveaux0=document.createElementNS(svgns,"g")
nouveaux0.setAttribute("id",Contour)
document.getElementById("coucheslignes").appendChild(nouveaux0)

for(i=1;i<xGcoord2.length+1;i++){
var Gcoord=""
var GC=xGcoord2[i-1]
//alert(GC)
for(j=1;j<GC.length-1;j=j+2){
if(j==1){
Gcoord+=parseFloat(GC[j])+","+parseFloat(GC[j+1]);
coordini=Gcoord
}else{
Gcoord+=","+parseFloat(GC[j])+","+parseFloat(GC[j+1])}
}
Gcoord+=","+coordini
var titreX=GC[GC.length-1]

IDP=Contour+"-"+i
var Czero=xGcoord2[i-1]


//alert("matrix("+tx+", "+rx+", "+ry+", "+ty+", "+x+", "+y+")")
  var svgns = "http://www.w3.org/2000/svg";
var nouveau=document.createElementNS(svgns,"polyline")
nouveau.setAttribute("id",IDP)
nouveau.setAttribute("points",Gcoord)
nouveau.setAttribute("fill","none")
nouveau.setAttribute("stroke",Couleur)
nouveau.setAttribute("stroke-width",epaisseur)
//nouveau.setAttribute("transform","matrix("+tx+", "+rx+", "+ry+", "+ty+", "+x+", "+y+")") 
//alert(nouveau.getAttribute("transform"))
nouveau.setAttribute("stroke-miterlimit","10") 
nouveau.setAttribute("stroke-linecap","butt") 
nouveau.setAttribute("stroke-linejoin","miter")
nouveau.setAttribute("title",titreX)
document.getElementById(Contour).appendChild(nouveau)


}
}
}
}



function chargeDataContourJS(Contour){

Gcoord0=new Array()
Gcoord02=new Array()

xcontour=Contour
base02 = new Array()
datahistomulti = new Array
//alert(Contour)
var chem=window.location.href.split("Module-")[0]
window.frames.frameContour.location.href="contourXML.html?Cont="+Contour
}


function initcalcul2(){

lign02=base02[0].donnees.split(',')

L002=lign02[0]
//IDetNOM2()
GCOO2=new Array()
//alert(L002)
titreencours=L002
calculcoord2()

tracelignes2(Contour,Couleur,epaisseur,tx,rx,ry,ty,x,y)
}

function XidentContour(a){
identContour='contourJS'+a
acoucheJS=a
initcalcul(a)
forceidentContour()
}
var tabcouchescontour=new Array()// tableau d'état des couches contour
var acoucheJS
function initcalcul(acoucheJS){
if(tabcouchescontour[acoucheJS][0]==1){
Contour=tabcouchescontour[acoucheJS][1]

effaceContour(Contour)
tabcouchescontour[acoucheJS][0]=0
}else{

Contour=listeAddContoursSVG[acoucheJS][0]

Couleur=listeAddContoursSVG[acoucheJS][1]
epaisseur=listeAddContoursSVG[acoucheJS][2]
tx=listeAddContoursSVG[acoucheJS][3]
ty=listeAddContoursSVG[acoucheJS][4]
rx=listeAddContoursSVG[acoucheJS][5]
ry=listeAddContoursSVG[acoucheJS][6]
x=listeAddContoursSVG[acoucheJS][7]
y=listeAddContoursSVG[acoucheJS][8]

tabcouchescontour[acoucheJS][0]=1 // indique que la couche est active


chargeDataContourJS(Contour)
//setTimeout('initcalcul2()',3000)

}

}





function EffaceTousContours(){   // efface les  couches contour supplémentaires

for(i=0;i<listeAddContoursSVG.length;i++){
var ContourIci=listeAddContoursSVG[i][0]
effaceContour(ContourIci)
tabcouchescontour[i][0]=0
}
//document.removeChildGleg()
ICD=0
}


function effaceContour(Contour){ // appelé par menu icones . Le code dans la variavle IELS3 ou dans la fonction d'appel  EffaceTousContours()
Contour=Contour.replace(".js","")
if(document.getElementById(Contour)){ //si le contour ContourIci existe
var noeud=document.getElementById(Contour)

document.getElementById("coucheslignes").removeChild(noeud)
}
}





var identContour="variable"



function forceidentContour(){
identContour="variable"
}
// ---------------------------------------------------------debut de section flux---------------------------------------------------
					function GroupelegendeCouche(aleg,bleg){ //CrÃ©e un groupe GlÃ©gendeCouche et le place dans le bloc lÃ©gende et le positionnat en bas Ã  droite de l'Ã©cran a=(largeur cadre) et b=(hauteur cadre)
					var nouveau0=document.createElementNS(svgns,"g")
					nouveau0.setAttribute("id","GlegendeCouche")
					nouveau0.setAttribute("space","preserve")
					nouveau0.setAttribute("opacity","0.8")
					

					nouveau0.setAttribute("transform","translate("+(axi)+","+(ayi)+")")
					document.getElementById("gene").appendChild(nouveau0)
					var nouveau2=document.createElementNS(svgns,"text")
					document.getElementById("GlegendeCouche").appendChild(nouveau2)
					}

					function GroupelegendeCoucheN(aleg,bleg,n){ //CrÃ©e un groupe lÃ©gendeCouche spÃ©cifique pour la couche sÃ©lectionnÃ©e et le place dans le groupe  GlegendeCouche 
					var nouveau0=document.createElementNS(svgns,"g")
					nouveau0.setAttribute("id","GlegendeCouche-"+n)
					nouveau0.setAttribute("space","preserve")
					nouveau0.setAttribute("opacity","1")
					//nouveau0.setAttribute("transform","translate("+(transHL[0]-(aleg)-5)+","+(transHL[1]-(bleg)-15)+")")
					nouveau0.setAttribute("transform","translate("+aleg+","+bleg+")")
					document.getElementById("GlegendeCouche").appendChild(nouveau0)
					var nouveau2=document.createElementNS(svgns,"text")
					document.getElementById("GlegendeCouche-"+n).appendChild(nouveau2)
					}



					function legendeCoucheRectangle(aleg,bleg,n){ //crÃ©e  un rectangle de taille proportionnelle au nombre de lignes de texte insÃ©rÃ©es dans la lÃ©gende des couches "nappes"
					var nouveau=document.createElementNS(svgns,"rect")
					nouveau.setAttribute("id","legendeCouche-"+n)
					nouveau.setAttribute("fill","white")
					nouveau.setAttribute("stroke","black")
					nouveau.setAttribute("stroke-width","0.5")
					nouveau.setAttribute("fill-opacity","1")
					nouveau.setAttribute("y",-3)
					nouveau.setAttribute("x",0)
					nouveau.setAttribute("height",bleg)
					nouveau.setAttribute("width",aleg)
					nouveau.setAttribute("title","légende de la couche")
					document.getElementById("GlegendeCouche-"+n).appendChild(nouveau)
					}

					function lignedeTexteAvecOuSansRect(rectOuiNon,rectX,rectY,coulRect,textX,textY,textContenu,textSize,titrelibel,n){ // crÃ©e un ligne de texte dans la lÃ©gende des couches "nappes", avec ou sans carrÃ© de couleur 
					var nouveau2=document.createElementNS(svgns,"text")
					nouveau2.setAttribute("id","TlegendeCouche-"+n+"-"+ti)
					nouveau2.setAttribute("y",textY*(ti+1)+rectOuiNon*3)
					nouveau2.setAttribute("x",textX+1*12)
					nouveau2.setAttribute("font-family","arial")
					nouveau2.setAttribute("font-size",textSize)
					nouveau2.setAttribute("title",titrelibel)
					document.getElementById("GlegendeCouche-"+n).appendChild(nouveau2)

					if(rectOuiNon==1){
					var nouveau3=document.createElementNS(svgns,"rect")
					nouveau3.setAttribute("id","balise-"+n+"-"+balise)
					balise+=1
					nouveau3.setAttribute("fill",coulRect)
					nouveau3.setAttribute("y",rectY*(ti+1)-10+rectOuiNon*3)
					nouveau3.setAttribute("x",rectX)
					nouveau3.setAttribute("height","10")
					nouveau3.setAttribute("width","10")
					document.getElementById("TlegendeCouche-"+n+"-"+ti).appendChild(nouveau3)
					}
					var nt1=document.createTextNode(textContenu)
					document.getElementById("TlegendeCouche-"+n+"-"+ti).appendChild(nt1)

					ti+=1
					document.getElementById("legendeCouche-"+n).setAttribute("height",(ti+1)*textY)
					}
					
					function removeChildGlegN(n){
					if(document.getElementById("GlegendeCouche-"+n).hasChildNodes()){
					//alert(document.getElementById("GlegendeCouche-"+n).childNodes.length)
				
					var borner=document.getElementById("GlegendeCouche-"+n).childNodes.length
					for(l=0;l<borner;l++){
					var noeud=document.getElementById("GlegendeCouche-"+n).firstChild;
					document.getElementById("GlegendeCouche-"+n).removeChild(noeud);
					}
					
					}
					}




				var Valcentreflux=-99999

var inskape=0

				var rgxaire
				var SomMob
				var Valcentreflux
				function traitmobDT(r,rgxaire,i){
//Valcentreflux=-99999
				if(i==1){SomMob=0}
				if(basex[i]!=-99999 & i<XXico.length){SomMob+=parseFloat(basex[i])} // Ã  ce stade, la valeur de la zone centre est -9999. La somme des valeur des zones est = Ã  la part extÃ©rieure des flux
{				
				if(i==menuIconeEchelle[Icone][11][0] ){
				//Valcentreflux=top.frames.Num0.frames.iconeencadre.retourneValcentreflux("return Valcentreflux")
				basex[i]=Valcentreflux
				}

				//var coordnom=menuAreas[i-1]
	
var AL=document.getElementById("c"+(i)).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(i)).getAttribute("cy")

			if(basex[i]==-99999){var dx=""; var arcoss=0}else{
				var dx="M "+AL+" "+AT+" m "+0+" "+0+" l"+(1*(PtX-AL))+" "+(1*(PtY-AT))
				var arccos=Math.acos(((PtX-AL)/Math.sqrt((PtX-AL)*(PtX-AL)+(PtY-AT)*(PtY-AT))))
				}
				var rot
				var lon
				lon=r/5*10
				if(lon<10){lon=10}
				if(mobDTsens==1){rot=15}else{rot=10}
				var yyi=lon*Math.cos(arccos+rot)
				var xxi=lon*Math.sin(arccos+rot)
				if((PtY-AT)>0){yyi=-yyi}
				if(yyi){}else{yyi=0};if(xxi){}else{xxi=0}
				dx+=" M "+AL+" "+AT+" m "+0+" "+0+" l"+(xxi)+" "+(yyi)
				//alert("dx="+AL+" "+AT+" m "+0+" "+0+" l"+(xxi)+" "+(yyi)+" pour le rang i="+i)
				var yyi=-lon*Math.cos(arccos-rot)
				var xxi=-lon*Math.sin(arccos-rot)
				if((PtY-AT)>0){yyi=-yyi}
				if(yyi){}else{yyi=0};if(xxi){}else{xxi=0}
				dx+=" M "+AL+" "+AT+" m "+0+" "+0+" l"+(xxi)+" "+(yyi)
				  //var svgns = "http://www.w3.org/2000/svg";
				  var affval=""
				  
				  if(basex[i]>0){affval=basex[i]}
				var nouveauX=document.createElementNS(svgns,"text")
				nouveauX.setAttribute("x",AL)
				nouveauX.setAttribute("y",AT)
				nouveauX.setAttribute("id","textN"+i)
				nouveauX.setAttribute("title",basex[i])



				var nt1=document.createTextNode(affval)

				if(document.getElementById("textN"+i)){
				var nt2=document.getElementById("textN"+i).firstChild
				document.getElementById("textN"+i).replaceChild(nt1,nt2)
				document.getElementById("textN"+i).setAttribute("title",basex[i])
				}else{

				document.getElementById("n"+i).appendChild(nouveauX)
				document.getElementById("textN"+i).appendChild(nt1)
				}
				
				document.getElementById("npath"+i).setAttribute("d",dx)
				
				

				if(basex[i]==-99999){r=0.01}
				if(inskape==1){

				document.getElementById("npath"+i).style.setProperty('stroke-width',r*0.5,'')
				document.getElementById("npath"+i).style.setProperty('stroke',"navy",'')
				document.getElementById("textN"+i).style.setProperty('fill',"blue",'')
				document.getElementById("textN"+i).style.setProperty('font-size',FS,'')
				document.getElementById("textN"+i).style.setProperty('stroke-width',0.0001,'')
				document.getElementById("textN"+i).style.setProperty('font-family',"Arial",'')
				}else{
				document.getElementById("npath"+i).setAttribute("stroke-width",r*0.5)
				document.getElementById("npath"+i).setAttribute("stroke","navy")
				document.getElementById("textN"+i).setAttribute("fill","blue")
				document.getElementById("textN"+i).setAttribute("font-size",FS)
				document.getElementById("textN"+i).setAttribute("stroke-width",0.0001)
				document.getElementById("textN"+i).setAttribute("font-family","Arial")

				}


				if(i==(XXico.length-1)){
				if(affval>0){}else{affval=""}
				//alert("ici LegFluxLibelMontre i="+i)
				LegFluxLibelMontre(1,basex[menuIconeEchelle[Icone][11][0]],SomMob)
				}
		}		
				}

				function effaceValFlux(i){
				var nt1=nt1=document.createTextNode("")

				if(document.getElementById("textN"+i)){
				var nt2=document.getElementById("textN"+i).firstChild
				document.getElementById("textN"+i).replaceChild(nt1,nt2)
				document.getElementById("textN"+i).setAttribute("title",basex[i])
				}
				/*
				else{

				document.getElementById("n"+i).appendChild(nouveauX)
				document.getElementById("textN"+i).appendChild(nt1)
				}
				*/
				}

				var indiclegflux=0
				function LegFluxLibelMontre(n,interne,somext){ // appelÃ©e par menu icone dans pilote2.htm ICD=300k dont le code est dans datacarte.html variable ISEL3
				n=1
				if(indiclegflux!=0){
				removeChildGlegN(1)

				}
				indiclegflux=1





				
				ti=0
				balise=0
				var LegNapTitre="Bilan de l'aire centrale"//listeLegNappes[n][1]
				var wi=1;if(interne==-99999){wi=0}
				var si=1;if(somext==-99999){si=0}
				var Totalx="Total = "+(si*somext+wi*interne)+" "
				if(somext==-99999 || somext==0){Totalx="Total = nd"}
				if(interne==-99999){var internI="nd"}else{var internI=interne}
				var interneX="Interne = "+internI+" "
				if(si*somext==0 || (si*somext-wi*interne)==0){var externeX="Externe = nd"}else{
				//var externeX="Externe = "+(si*somext-wi*interne)+" ("+(parseInt(100*si*(si*somext-wi*interne)/(si*somext)))+"%) "
				var externeX="Externe = "+(si*somext)+" ("+(parseInt(100*si*(si*somext)/(si*somext+wi*interne)))+"%) "
				}
				if(wi==0 & si==0){externeX="Externe = nd"}
				var aleg= 125//listeLegNappes[n][2];
				var bleg=215//listeLegNappes[n][3];
				var LegNapLibel="a"//listeLegNappes[n][4]
				if(LegNapLibel.length>0){
				var textX=2;var textY=10
				var textSize=11
				var rectX=2;var rectY=textY;

				//document.getElementById("GlegendeCouche-"+n).setAttribute("transform","translate("+(transHL[0]-(aleg)-5)+","+(transHL[1]-(bleg)-15)+")")
				GroupelegendeCoucheN(aleg,bleg,n)
				legendeCoucheRectangle(aleg,bleg,n)// crÃ©ation du rectangle 
				//titre
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,LegNapTitre,11,"Bilan des flux pour la zone centrale",n)// ligne sans (pour le titre)
				for(f=0;f<LegNapLibel.length;f++){
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,"   ",6,"         ",n)// ligne sans< carrÃ©
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,Totalx,textSize,"flux internes+externes",n) //ligne avec carrÃ©
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,"   ",6,"         ",n)// ligne sans< carrÃ©
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,externeX,11,"Somme des flux externes",n)// ligne sans< carrÃ©
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,"   ",6,"         ",n)// ligne sans< carrÃ©
				lignedeTexteAvecOuSansRect(1,rectX,rectY,"transparent",textX,textY,interneX,9,"Flux interne",n)// ligne sans< carrÃ©


				}
				}
				}

//----------------------------------------------------------fin de section flux




function changeVariable(){
//alert(dernierecouche)
if(identContour.indexOf("contourJS")>=0){identContour="variable"} else{
var site=document.getElementById("popup").selectedIndex-1
Icone=site
if(dernierecouche==1){icotempla=Icone}
{

setTimeout('effacemaqueurcarte();calculIcone(Icone);initselect=0;marqueurcarte();document.getElementById("popup").selectedIndex=0',10)

}
}
identContour="variable"
}
function changeGraphique(){

var site=document.getElementById("popup1").selectedIndex-1
iSujet=site

{
setTimeout('calculHisto(NoDatx,iSujet)',10)
document.getElementById("popup1").selectedIndex=0
}
}
function adtitre(titrepage){

document.getElementById("insertici").innerHTML=titrepage
document.getElementById("divcompage").innerHTML=compage
}

function adoption(){


var optici='<option id="optX1" VALUE="javascript:rien2()" >Variables</option>'


for(i=0;i<menuIconeEchelle.length;i=i+1){

for(j=0;j<menuIconeEchelle[i].length;j++){
var menumodif=menuIconeEchelle[i][j]
if( typeof(menumodif)=="string"){
menumodif=menumodif.replace("&"," ")
menumodif=menumodif.replace("<","&lt;")
menumodif=menumodif.replace(">","&gt;")
}else{
for(k=0;k<menumodif.length;k++){
var menumodif2=menumodif[k]

if( typeof(menumodif2)=="string"){
menumodif2=menumodif2.replace("&"," ")
menumodif2=menumodif2.replace("<","&lt;")
menumodif2=menumodif2.replace(">","&gt;")
}
menumodif[k]=menumodif2
}
}
menuIconeEchelle[i][j]=menumodif
}
}

for(i=0;i<menuIconeEchelle.length;i=i+1){

optici+='<option onclick="javascript:Icone='+(i)+'" >'+(i+1)+"-"+menuIconeEchelle[i][9]+'</option>'

}

/*
for(i=3;i<base00[0].length-1;i=i+1){
optici+='<option onclick="javascript:variable='+i+';stockvariable('+i+')">'+(i-2)+"-"+base00[0][i]+'</option>'

}
*/
//Début section couchec contours


var ICD=0
var ISEL3=""

if(listeAddContoursSVG.length>0){

ISEL3+='<option id="contourJSA" style="color:gray;font-weight:bold"  > </option>;'


ISEL3+='<option id="contourJSB" style="color:black;font-weight:bold"  >-------  Contours </option>;'
var indx=0

for(i=0;i<listeAddContoursSVG.length;i++){
tabcouchescontour[i]=new Array(0,"")
tabcouchescontour[i][0]=0// indique  que la couche est inactive
tabcouchescontour[i][1]=listeAddContoursSVG[i][0]//nom de couche

ISEL3+='<option  id="contourJS'+i+'" style="color:'+listeAddContoursSVG[i][1]+';opacity:0.8"   onclick="javascript:identContour=\'contourJS'+i+'\';acoucheJS='+i+';initcalcul(acoucheJS)" >'+listeAddContoursSVG[i][0]+'</option>'
indx+=1
}

ISEL3+='<option id="contourJSC" style="color:red"  onclick="javascript:identContour=\'contourJSC\';EffaceTousContours()">-------  Cacher les contours</option>;'

ISEL3+='<option id="contourJSD" style="color:gray;font-weight:bold"  > </option>;'

}

//optici+=ISEL3



document.getElementById("popup").innerHTML=optici

var optici='<option id="optX2" VALUE="javascript:rien2()" >Graphiques</option>'

for(i=0;i<menuSujet.length;i=i+1){

for(j=0;j<menuSujet[i].length;j++){
var menumodif=menuSujet[i][j]
if( typeof(menumodif)=="string"){
menumodif=menumodif.replace("&"," ")
menumodif=menumodif.replace("<","&lt;")
menumodif=menumodif.replace(">","&gt;")
}else{
for(k=0;k<menumodif.length;k++){
var menumodif2=menumodif[k]

if( typeof(menumodif2)=="string"){
menumodif2=menumodif2.replace("&"," ")
menumodif2=menumodif2.replace("<","&lt;")
menumodif2=menumodif2.replace(">","&gt;")
}
menumodif[k]=menumodif2
}
}
menuSujet[i][j]=menumodif
}



optici+='<option >'+(i+1)+"-"+menuSujet[i][9]+'</option>'
//onclick="javascript:iSujet='+i+';setTimeout(\'alert('+i+');calculHisto(NoDatx,iSujet)\',10)"
}
document.getElementById("popup1").innerHTML=optici

}


// ///////////////----------------------------calcul pour histo

 var dataTAILLE=new Array(); var dataREGION=new Array();var dataNES=new Array()
 
 
 dataNES[dataNES.length]=new Array("agriculture", 25.20, 55.40, 19.50,49.28,0.029,0.014,0.029,0.065,0.036,0.022)
 dataNES[dataNES.length]=new Array("industrie", 30.00, 49.10, 20.90,46.69,0.031,0.03,0.022,0.036,0.057,0.033)
 dataNES[dataNES.length]=new Array("BTP", 21.90, 59.00, 19.10,40.68,0.024,0.006,0.02,0.055,0.074,0.012)
 dataNES[dataNES.length]=new Array("transports", 28.80, 48.90, 22.30,51.12,0.011,0.069,0.032,0.028,0.05,0.033)
 dataNES[dataNES.length]=new Array("commerces", 29.10, 44.00, 26.90,52.27,0.034,0.062,0.038,0.031,0.074,0.03)
 dataNES[dataNES.length]=new Array("services divers", 33.60, 40.40, 26.00,59.16,0.038,0.043,0.043,0.043,0.054,0.039)


function ExtendArray() {
 Array.prototype.remove = Array_Remove;
 Array.prototype.add = Array_Add;
 Array.prototype.swap = Array_Swap;
 // removes and returns last element
 Array.prototype.pop = Array_Pop;
 // use these with arrays of ints
 Array.prototype.min = Array_GetMin;
 Array.prototype.minrg = Array_GetMinrg;
 Array.prototype.max = Array_GetMax;
 Array.prototype.maxrg = Array_GetMaxrg;
 Array.prototype.avg = Array_GetAvg;
 Array.prototype.multipl = Array_Multipl;
}


 function Array_Remove(c) {
  var tmparr = new Array();
  for (var i=0; i<this.length; i++) if (i!=c) tmparr[tmparr.length] = this[i];
   return tmparr;
 }

 function Array_Add(c, cont) {
  var tmparr = new Array();
  for (var i=0; i<this.length; i++) {
   if (i==c) tmparr[tmparr.length] = cont;
    tmparr[tmparr.length] = this[i];
  }
  if (!tmparr[c]) tmparr[c] = cont;
   return tmparr;
 }

 function Array_Swap(x, z) {
  var zvalue = this[z];
  this[z] = this[x];
  this[x] = zvalue;
  return this;
 }

 function Array_Pop() {
  var item = this[this.length-1];
  this.length--;
  return item;
 }

 function Array_GetMin() {
  var Min = this[0];
  if (isNaN(Min*1) && !IsDate(Min)) return '';
  for (var i=0; i<this.length; i++) if (this[i]*1<Min) Min = this[i];
  return Min;
 }

 function Array_GetAvg() {
  var Total = 0;
  if (isNaN(this[0]*1) && !IsDate(this[0])) return '';
  for (var i=0; i<this.length; i++) if (this[i] != 0) Total += this[i]*1;
  var Avg = Total/(Comps.length+1)
  if ((Avg+"").indexOf(".") > -1) { 
   if (GetMax(i)-GetMin(i) > 50)
    Avg = Math.round(Avg);
    // if difference between min and max > 50, round
    else Avg = (Avg+"").substring(0,(Avg+"").indexOf(".")+((bFloat) ? 3 : 2));
    // else if all values were whole round to 2 places, else 3
   }
  return (Avg>0) ? Avg : "";
 }

 function Array_GetMax() {
  var Max = this[0];
  if (isNaN(Max*1) && !IsDate(Max)) return '';
  for (var i=0; i<this.length; i++) if (this[i]*1>Max) Max = this[i];
  return Max;
 }
 
  function Array_GetMaxrg() {
  var rangmax=0
  var Max = this[0];
  //if (isNaN(Max*1) && !IsDate(Max)) return '';
  for (var i=0; i<this.length; i++) {if (this[i]*1>Max) {Max = this[i];rangmax=i}}
  var Maxrg=new Array()
  Maxrg[0]=Max
  Maxrg[1]=rangmax
  return Maxrg;
 }
 
  function Array_GetMinrg() {
  var rangmin=0  
  var Min = this[0];
  if (isNaN(Min*1) && !IsDate(Min)) return '';
  for (var i=0; i<this.length; i++) {if (this[i]*1<Min){ Min = this[i]; rangmin=i}}
  var Minrg=new Array()
  Minrg[0]=Min
  Minrg[1]=rangmin
  return Minrg;
 }
 
 
 function Array_Multipl(c) {

  for (var i=0; i<this.length; i++) this[i]=this[i]*c;

 }



ExtendArray()

var histola=""
var DimH=50  // demi hauteur du graphique
var DimB=DimH
var Hhx=9 //borne échelle max
var Hbx=0 //borne échelle Min
var titreX=new Array('Ensemble de l\'enquête','Préoccupations des "Non Mais"','axeY')
 // 1 pour absolu, 2 pour relatif=100% de l'espace graphique
var coulhX=new Array("black","gray","#008CA4","blue","orange","red","green","violet","yellow","#723525","#2DDD93","Navy","#B00000","#248772","#9D8772","#FF6400","#BD60FF","#6352FF","#EEFF72")//"red"
var coulbX=coulhX
var largcol=22 // largeur barre
var larginter=3 // écart interbarres
var percent="%" // percent="%" si pourcentage sinon ""
var absol_relat=2
var libel=new Array()
var libeltitre=new Array()
/*

var TAB=new Array(0,3.1,4.2,3.2,3.8,6.2,3.1)// valeurs pour histo
var libel=new Array("","carrière  concurrence jeunes-âgés","horaires difficiles","fidélisation des salariés","inaptitudes et âgés","performance des jeunes","performance des âgés")
var libeltitre=new Array("","carrière  concurrence jeunes-âgés","horaires difficiles","fidélisation des salariés","inaptitudes et âgés","performance des jeunes","performance des âgés")
*/

function Nouvelle(a){
this.donnees=a;
//alert("nouvelle")
}




