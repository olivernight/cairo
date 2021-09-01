essaiBLANC=1
var panoramaModele=0
var svgns = "http://www.w3.org/2000/svg";
// Cas des encadrés-----------------------------------------------------------

			var idcarteE
			var encad2=0
			var idcible=0	
			var rid
// Cas des encadrés-----------------------------------------------------------
var numtot=10000000 /* numero de l'aire géo ajoutée pour le total = grand chiffre pour échapper au test sans le cas où le total n'est pas activé dans parametres.js*/
if(format=="small"){
/*
var Z0=0.98//0.68  // zoom de départ
var ax=-174  // décallage axe des x au départ
var ay=-57//-105    // décallage axe des y au départ
*/

var numeroTemp=0
var Icone=0 // (rang-1) dans le menu Icones : valeur au démarrage
var dernierecouche=1 // position fond ou ione au départ ( ce parametre gère aussi le check dans la fonction de réglage des positions initiales reglagePanels()
var pal=1


var iSujet=0 // -> (rang -1) dans le menuSujet : valeur au démarrage
var NoDatx=0


var palfond
var paltemp

var titrepage="<big><big><big><b>Patch carto V1gaiamini</b></big></big></big><br/>"
titrepage+="<big><b>  réalisé par </b><small>Cité Publique</small></big>"

var compage="<br/><a href='http://altko.org/PageCartoGM/PageCarto/COPYING GNU.txt' target='_blank' style='font-size:8px;opacity:0.5'><b>(GNU GPL)[Cité Publique/Hervé Paris 2009]</b></a>"

// dimensions de l'espace carte SVG
var decalvertical=-35


var Wsvg=380
var Hsvg=321


// DIVs de la carte
var CarteX=1
var CarteY=0


// rafraîchir et lisez moi
var leftcompage=20-24
var topcompage=CarteY+Hsvg+10+193

// DIV du menu icones
var MenuIcoX=Wsvg+30-24
var MenuIcoY=CarteY+Hsvg-45+1*decalvertical



// DIV du menu quantiles
var MenuQuantilesX=Wsvg+30+120-24
var MenuQuantilesY=CarteY+Hsvg-70

// DIV du menu palette
var MenuPaletteX=Wsvg+30+120-24
var MenuPaletteY=CarteY+Hsvg-95

//DIV boutons Radio
var MenuRadioX=Wsvg+30-24
var MenuRadioY=CarteY+Hsvg-65

// DIV recherche
var leftrechercheX=Wsvg+30-24
var toprechercheY=CarteY+Hsvg-75-13


// position Histo
var leftHisto=Wsvg+30-24
var topHisto=CarteY+Hsvg+20+decalvertical//90


// DIV du menu graphique
var MenuHistoX=Wsvg+30-24
var MenuHistoY=CarteY+Hsvg-20+1*decalvertical

// DIV des légende
var topleg=CarteY+Hsvg+18+decalvertical
var leftleg=CarteX

// DIV hypertexte
var leftdivtexte=Wsvg+30-24
var topdivtexte=2//5+30
}   
if(format=="big"){
/*
var Z0=1.55//0.9  // zoom de départ
var ax=-12//-102  // décallage axe des x au départ
var ay=80//-65    // décallage axe des y au départ
*/
var numeroTemp=0
var Icone=0 // (rang-1) dans le menu Icones : valeur au démarrage
var dernierecouche=1 // position fond ou ione au départ ( ce parametre gère aussi le check dans la fonction de réglage des positions initiales reglagePanels()
var pal=1


var iSujet=0 // -> (rang -1) dans le menuSujet : valeur au démarrage
var NoDatx=0


var palfond
var paltemp

var titrepage="<big><big><big><b>Patch carto V1gaiamini</b></big></big></big><br/>"
titrepage+="<big><b>  réalisé par </b><small>Cité Publique</small></big>"

var compage="<br/><a href='http://altko.org/PageCartoGM/PageCarto/COPYING GNU.txt' target='_blank' style='font-size:8px;opacity:0.5'><b>(GNU GPL)[Cité Publique/Hervé Paris 2009]</b></a>"

// dimensions de l'espace carte SVG
var decalvertical=-35


var Wsvg=650
var Hsvg=545



// DIVs de la carte
var CarteX=20
var CarteY=0


// rafraîchir et lisez moi
var leftcompage=20
var topcompage=CarteY+Hsvg+10+193

// DIV du menu icones
var MenuIcoX=Wsvg+30
var MenuIcoY=CarteY+Hsvg-45



// DIV du menu quantiles
var MenuQuantilesX=Wsvg+30+120
var MenuQuantilesY=CarteY+Hsvg-70

// DIV du menu palette
var MenuPaletteX=Wsvg+30+120
var MenuPaletteY=CarteY+Hsvg-95

//DIV boutons Radio
var MenuRadioX=Wsvg+30
var MenuRadioY=CarteY+Hsvg-95

// DIV recherche
var leftrechercheX=Wsvg+30
var toprechercheY=CarteY+Hsvg-135


// position Histo
var leftHisto=Wsvg+30
var topHisto=CarteY+Hsvg+20//90


// DIV du menu graphique
var MenuHistoX=Wsvg+30
var MenuHistoY=CarteY+Hsvg-20

// DIV des légende
var topleg=CarteY+Hsvg+18
var leftleg=CarteX

// DIV hypertexte
var leftdivtexte=Wsvg+30
var topdivtexte=2//5+30
    
}
if(format=="normal"){
/*
var Z0=1.3  // zoom de départ - standard =~ 0.86
var ax=-108  // décallage axe des x au départ - standard =~ -108 
var ay=15    // décallage axe des y au départ - standard =~ -61  
*/
var numeroTemp=0
var Icone=0 // (rang-1) dans le menu Icones : valeur au démarrage
var dernierecouche=1 // position fond ou ione au départ ( ce parametre gère aussi le check dans la fonction de réglage des positions initiales reglagePanels()
var pal=1


var iSujet=0 // -> (rang -1) dans le menuSujet : valeur au démarrage
var NoDatx=0


var palfond
var paltemp

var titrepage="<big><big><big><b>Patch carto V1gaiamini</b></big></big></big><br/>"
titrepage+="<big><b>  réalisé par </b><small>Cité Publique</small></big>"

var compage="<br/><a href='http://altko.org/PageCartoGM/PageCarto/COPYING GNU.txt' target='_blank' style='font-size:8px;opacity:0.5'><b>(GNU GPL)[Cité Publique/Hervé Paris 2009]</b></a>"

// dimensions de l'espace carte SVG
var decalvertical=-35


var Wsvg=500// standard = 500
var Hsvg=450 // standard = 320


// DIVs de la carte
var CarteX=20
var CarteY=0


// rafraîchir et lisez moi
var leftcompage=20
var topcompage=CarteY+Hsvg+10+193

// DIV du menu icones
var MenuIcoX=Wsvg+30
var MenuIcoY=CarteY+Hsvg-45+3*decalvertical



// DIV du menu quantiles
var MenuQuantilesX=Wsvg+30+120
var MenuQuantilesY=CarteY+Hsvg-70+3*decalvertical

// DIV du menu palette
var MenuPaletteX=Wsvg+30+120
var MenuPaletteY=CarteY+Hsvg-95+3*decalvertical

//DIV boutons Radio
var MenuRadioX=Wsvg+30
var MenuRadioY=CarteY+Hsvg-95+3*decalvertical

// DIV recherche
var leftrechercheX=Wsvg+30
var toprechercheY=CarteY+Hsvg-135-2*decalvertical


// position Histo
var leftHisto=Wsvg+30
var topHisto=CarteY+Hsvg+20+decalvertical


// DIV du menu graphique
var MenuHistoX=Wsvg+30
var MenuHistoY=CarteY+Hsvg-20+3*decalvertical

// DIV des légende
var topleg=CarteY+Hsvg+18+decalvertical
var leftleg=CarteX

// DIV hypertexte
var leftdivtexte=Wsvg+30
var topdivtexte=2//5+30
    
}
if(format=="complete"){
/*
var Z0=1.3  // zoom de départ - standard =~ 0.86
var ax=-108  // décallage axe des x au départ - standard =~ -108 
var ay=15    // décallage axe des y au départ - standard =~ -61  
*/
var numeroTemp=0
var Icone=0 // (rang-1) dans le menu Icones : valeur au démarrage
var dernierecouche=1 // position fond ou ione au départ ( ce parametre gère aussi le check dans la fonction de réglage des positions initiales reglagePanels()
var pal=1


var iSujet=0 // -> (rang -1) dans le menuSujet : valeur au démarrage
var NoDatx=0


var palfond
var paltemp

var titrepage="<big><big><big><b>Patch carto V1gaiamini</b></big></big></big><br/>"
titrepage+="<big><b>  réalisé par </b><small>Cité Publique</small></big>"

var compage="<br/><a href='http://altko.org/PageCartoGM/PageCarto/COPYING GNU.txt' target='_blank' style='font-size:8px;opacity:0.5'><b>(GNU GPL)[Cité Publique/Hervé Paris 2009]</b></a>"

// dimensions de l'espace carte SVG
var decalvertical=-35


var Wsvg=500// standard = 500
var Hsvg=450 // standard = 320


// DIVs de la carte
var CarteX=20
var CarteY=0


// rafraîchir et lisez moi
var leftcompage=20
var topcompage=CarteY+Hsvg+10+193

// DIV du menu icones
var MenuIcoX=Wsvg+30
var MenuIcoY=CarteY+Hsvg-45+decalvertical



// DIV du menu quantiles
var MenuQuantilesX=Wsvg+30+120
var MenuQuantilesY=CarteY+Hsvg-70+decalvertical

// DIV du menu palette
var MenuPaletteX=Wsvg+30+120
var MenuPaletteY=CarteY+Hsvg-95+decalvertical

//DIV boutons Radio
var MenuRadioX=Wsvg+30
var MenuRadioY=CarteY+Hsvg-95+decalvertical

// DIV recherche
var leftrechercheX=Wsvg+30
var toprechercheY=CarteY+Hsvg-135+decalvertical


// position Histo
var leftHisto=Wsvg+30
var topHisto=CarteY+Hsvg+20+decalvertical


// DIV du menu graphique
var MenuHistoX=Wsvg+30
var MenuHistoY=CarteY+Hsvg-20+decalvertical

// DIV des légende
var topleg=CarteY+Hsvg+18+decalvertical
var leftleg=CarteX

// DIV hypertexte
var leftdivtexte=Wsvg+30
var topdivtexte=2//5+30
    
}
var b=1
var atemp=1
var palX=0
var palY=0

var draft=0
function activeDraft(){draft=1}
var menuSujet=new Array()
var menuIconeEchelle=new Array()

function boitebalise(){

var Carteencours=window.location.href

Carteencours=Carteencours.replace("/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete","")
var longC=Carteencours.split("/").length
Carteencours=Carteencours.split("/")[longC-1].replace(/%20/g," ")


var n0
var n1
var n3
if(palicotemp0==1){palX="chinois"}
if(palicotemp0==2){palX="marron"}
if(palicotemp0==3){palX="rouge"}
if(palicotemp0==4){palX="Nonchinois"}
if(palfondtemp0==1){palY="chinois"}
if(palfondtemp0==2){palY="marron"}
if(palfondtemp0==3){palY="rouge"}
if(palfondtemp0==4){palY="Nonchinois"}
//if(IconICOtemp0==0){n0=0}else{n0=IconICOtemp0+1}
n0=IconICOtemp0+1
//if(IconFONDtemp0==0){n1=0}else{n1=IconFONDtemp0+1}
n1=IconFONDtemp0+1
if(iSujet==0){n3=1}else{n3=iSujet+1}
//proportionnel

var additif=''
if(draft==1){additif= 'var nomdos=&quot;'+Carteencours+'&quot;'}
var baliseici='javascript:'+additif+';CPonctuel('+(n0)+','+palX+','+caticotemp0+','+zpm+','+PropNonProp+');Cfond('+(n1)+','+palY+','+catfondtemp0+');Cgraph('+(n3)+','+GrandHisto+')'
if(draft==1){var graphici='javascript:var nomdos=&quot;'+Carteencours+'&quot;;Cgraph('+(n3)+','+GrandHisto+')'}else{var graphici='javascript:;Cgraph('+(n3)+','+GrandHisto+')'}
libelAIre=document.getElementById("boiteAirebalise").getAttribute("href")
if(libelAIre.indexOf("nomdos")<0 & draft==1){libelAIre=libelAIre.replace("javascript:","javascript:"+additif)}
document.getElementById("boitebalise").setAttribute("href",baliseici)
document.getElementById("balisegraph").setAttribute("href",graphici)
document.getElementById("boiteAirebalise").setAttribute("href",libelAIre)
if(caticotemp0==0){caticotemp0=2}

if(catfondtemp0==0){catfondtemp0=2}

}
var libelBalise
var libelBraph
var libelAIre
function libelbalise(){

libelBalise = prompt("entrez le libellé du lien multiple",""); 

document.getElementById("boitebalise").innerHTML=libelBalise


}

function retiSujet(){return iSujet}
function forceNoDatx(a){NoDatx=a}
function airebalise(a,b){

var Carteencours=window.location.href

Carteencours=Carteencours.replace("/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete","")
var longC=Carteencours.split("/").length
Carteencours=Carteencours.split("/")[longC-1].replace(/%20/g," ")
var additif=''
if(draft==1){additif= 'var nomdos=&quot;'+Carteencours+'&quot;'}
var AireBal=additif+';NoDatx='+a+';marqueurcarte();calculHisto(NoDatx,iSujet)'
document.getElementById("boiteAirebalise").setAttribute("href","javascript:"+AireBal)
libelAIre=b
document.getElementById("boiteAirebalise").innerHTML=libelAIre
}
function retourneairel(){
return libelAire
}
function retournebal(){
return libelBalise
}
function retournegraph(){

return libelGraph
}
function libelgraph(){

libelGraph = prompt("entrez le libellé du graph simple",""); 

document.getElementById("balisegraph").innerHTML=libelGraph


}

function ouvraide(){
document.getElementById("divapropos").style.display="block"
//document.getElementById('divMenuRadio').style.display='none'
}

function fermaide(){
document.getElementById("divapropos").style.display="none"

}

function translateSVG(ax,ay){
var reg=new RegExp("[ ,;]+", "g");
var zoo=document.getElementById("dragin").getAttribute("transform").split(reg)

zoo[0]=parseFloat(zoo[0].replace("matrix(",""))
zoo[5]=parseFloat(zoo[5].replace(")",""))


var zoo4=parseFloat(zoo[4])+ax 
var zoo5=parseFloat(zoo[5])+ay
var mat="matrix("+(parseFloat(zoo[0]))+", 0, 0, "+(parseFloat(zoo[3]))+", "+zoo4+", "+zoo5+")"


document.getElementById("dragin").setAttribute("transform",mat)



}
var dragdepart
var zoomdepart
var bz0
var compilDZ0
function zoomZ(){

zoom(bz0/bz)
zoom(1)
bz=bz0
document.getElementById("totalsvg").setAttribute("transform",zoomdepart)
document.getElementById("dragin").setAttribute("transform",dragdepart)
CX=CX0
CY=CY0
}
var bz=1

var zoomvecteur=new Array();
var rcr=30
var azoom=1
function zoom(a){

var coef=1
bz=bz*a
azoom=a
var reg=new RegExp("[ ,;]+", "g");
var zoo=document.getElementById("totalsvg").getAttribute("transform").split(reg)

zoo[0]=parseFloat(zoo[0].replace("matrix(",""))
zoo[5]=parseFloat(zoo[5].replace(")",""))
if(a <1){coef=-1}

var zoo4=(1-bz)*(Wsvg/2)+coef*parseFloat(zoo[4])*(1-a) 
var zoo5=(1-bz)*(Hsvg/2)+coef*parseFloat(zoo[5])*(1-a)
var mat="matrix("+(parseFloat(zoo[0])*a)+", 0, 0, "+(parseFloat(zoo[3])*a)+", "+zoo4+", "+zoo5+")"
document.getElementById("totalsvg").setAttribute("transform",mat)
zoomvecteur=new Array(parseFloat(zoo[0])*a,parseFloat(zoo[3])*a,zoo4,zoo5);
zoometc()
for(i=1;i<base00.length-9;i++){
var ep=1/bz
if(ep>=0.5){ep=0.5}
if(document.getElementById("p"+i)){
document.getElementById("c"+(i)).setAttribute("stroke-width",ep+"px")//  /bz
document.getElementById("p"+(i)).setAttribute("stroke-width",ep+"px")//  /bz

           if(mobDT!=1){//***********************************************FLUX
document.getElementById("fpath"+(i)).setAttribute("stroke-width",1/bz)
document.getElementById("npath"+(i)).setAttribute("stroke-width",1/bz)
           }//***********************************************fin de FLUX
		   if(panoramaModele==1){
if(i==10 || i==9 || i==8 || i==7 || i==6 || i==5 || i==4 || i==3 || i==2 || i==1){
document.getElementById("c"+(i)).setAttribute("stroke-width",(2.5*ep/0.4/0.2/1.8)+"px")//  /bz
document.getElementById("p"+(i)).setAttribute("stroke-width",(ep/0.4/0.2/2)+"px")//  /bz
document.getElementById("c"+(i)).setAttribute("stroke","orange")//  /bz
           if(mobDT!=1){//***********************************************FLUX
document.getElementById("fpath"+(i)).setAttribute("stroke-width",1/bz)
document.getElementById("npath"+(i)).setAttribute("stroke-width",1/bz)
            }//***********************************************fin de FLUX
			}
		    }
			if(panoramaModele==2){
if(i==195 || i==194 || i==193 || i==192 || i==191 || i==190 || i==189 || i==188 || i==187 || i==186){
document.getElementById("c"+(i)).setAttribute("stroke-width",(2.5*ep/0.4/0.2)+"px")//  /bz
document.getElementById("p"+(i)).setAttribute("stroke-width",(ep/0.4/0.2/2)+"px")//  /bz
document.getElementById("c"+(i)).setAttribute("stroke","orange")//  /bz
           if(mobDT!=1){//***********************************************FLUX
document.getElementById("fpath"+(i)).setAttribute("stroke-width",1/bz)
document.getElementById("npath"+(i)).setAttribute("stroke-width",1/bz)
           }//***********************************************fin de FLUX
		   }
		   }		   


//}
}		   
}
rcr=document.getElementById("cercleR").getAttribute("r")
document.getElementById("cercleR").setAttribute("r",rcr/azoom)
document.getElementById("cercleR").setAttribute("stroke-width",(1/bz+1))
//alert("zoom(a)    :   "+zoomvecteur)
compildragetzoom()
}



function zoometc(){

// récupération de la valeur du zoom de la carte svg
var reg=new RegExp("[ ,;]+", "g");
var zoo=document.getElementById("totalsvg").getAttribute("transform").split(reg)
var Wrect=Wsvg/zoo[3]; 
var Hrect=Hsvg/zoo[3]

//Dimension du rectangle d'encadrement

document.getElementById("rectmove").setAttribute("width",Wrect-5)
document.getElementById("rectmove").setAttribute("height",Hrect-5)
// récupération des paramètres transfor du rectangle "rectmove"
var reg=new RegExp("[ ,;]+", "g");
var zoorect=document.getElementById("rectmove").getAttribute("transform").split(reg)

document.getElementById("rectmove").setAttribute("x",-zoo[4]/zoo[3]+3)
var zooY=zoo[5]
var zooY=zooY.replace(")","")
var zooYrect=zoorect[5]
var zooYrect=zooYrect.replace(")","")

document.getElementById("rectmove").setAttribute("y",-zooY/zoo[3]-zooYrect+3)
document.getElementById("rectmove").setAttribute("rx","5")
var xicic=document.getElementById("rectmove").getAttribute("style")
xicic=xicic.replace("stroke: rgb(0, 0, 0)","stroke:#BFBFBF")
xicic=xicic.replace("stroke-width: 0.5","stroke-width: 3")

document.getElementById("rectmove").setAttribute("style",xicic)
document.getElementsByTagName("stop")[3].setAttribute("style","stop-color:#BDCADC")


}

function reglagePanels(){// réglage des paramètres de mise en page : fonction appellées en fin d'ouverture de fichier
if(format=="small"){
// DIV des boutons
var BoutonsX=Wsvg+CarteX-92
var BoutonsY=Hsvg+CarteY+1

document.getElementById("divcompage").style.left=leftcompage+"px"
document.getElementById("divcompage").style.top=topcompage+"px"

document.getElementById("divclic").style.left=(leftdivtexte-3)+"px"
document.getElementById("divclic").style.top=(topdivtexte-30)+"px"


document.getElementById("divtexte").style.left=leftdivtexte+"px"
document.getElementById("divtexte").style.top=(0+topdivtexte)+"px"
document.getElementById("hypertexte").height=toprechercheY-5-5-30+93-58-decalvertical-15//+15


document.getElementById("divFiche2").style.left=(leftdivtexte-3)+"px"
document.getElementById("divFiche2").style.top=(topdivtexte-39)+"px"

document.getElementById("divFiche").style.left=(leftdivtexte-3)+"px"
document.getElementById("divFiche").style.top=(topdivtexte-39)+"px"
document.getElementById("hyperFiche").height=toprechercheY-40

document.getElementById("divapropos").style.left=leftdivtexte+"px"
document.getElementById("divapropos").style.top=topdivtexte+"px"

document.getElementById("tableg1").width=(Wsvg/2-5)+"px"
document.getElementById("tableg2").width=(Wsvg/2-5)+"px"


document.getElementById("panelCarte").style.left=CarteX+"px"
document.getElementById("panelCarte").style.top=CarteY+"px"

document.getElementById("panelBoutons").style.left=BoutonsX+"px"
document.getElementById("panelBoutons").style.top=BoutonsY+"px"

document.getElementById("effaffcouleurcarte").style.left=5+"px"
document.getElementById("effaffcouleurcarte").style.top=BoutonsY+"px"//(BoutonsY-Hsvg)+"px"

document.getElementById("divMenuIco").style.left=MenuIcoX+"px"
document.getElementById("divMenuIco").style.top=(MenuIcoY-40)+"px"

document.getElementById("divMenuHisto").style.left=MenuHistoX+"px"
document.getElementById("divMenuHisto").style.top=(MenuHistoY-40)+"px"

document.getElementById("divrecherche").style.left=leftrechercheX+"px"
document.getElementById("divrecherche").style.top=(toprechercheY-6+25)+"px"

document.getElementById("divMenuPalette").style.left=MenuPaletteX+"px"
document.getElementById("divMenuPalette").style.top=(MenuPaletteY-2)+"px"

document.getElementById("divMenuQuantiles").style.left=MenuQuantilesX+"px"
document.getElementById("divMenuQuantiles").style.top=(MenuQuantilesY-2-30)+"px"

document.getElementById("divMenuRadio").style.left=MenuRadioX+"px"
document.getElementById("divMenuRadio").style.top=(MenuRadioY-2-26-30)+"px"

document.getElementById("gene").setAttribute("width",Wsvg)
document.getElementById("gene").setAttribute("height",Hsvg)

document.getElementById("innerhisto").style.top=(1+topHisto)+"px"
document.getElementById("innerhisto").style.left=(leftHisto)+"px"

document.getElementById("divlegende").style.top=(4+topleg)+"px"
document.getElementById("divlegende").style.left=leftleg+"px"
}
if(format=="big"){
// DIV des boutons
var BoutonsX=Wsvg+CarteX-92
var BoutonsY=Hsvg+CarteY+1

document.getElementById("divcompage").style.left=leftcompage+"px"
document.getElementById("divcompage").style.top=topcompage+"px"

document.getElementById("divclic").style.left=(leftdivtexte-3)+"px"
document.getElementById("divclic").style.top=(topdivtexte-30)+"px"


document.getElementById("divtexte").style.left=leftdivtexte+"px"
document.getElementById("divtexte").style.top=topdivtexte+"px"
document.getElementById("hypertexte").height=toprechercheY-5-5-30-decalvertical


document.getElementById("divFiche2").style.left=leftdivtexte+"px"
document.getElementById("divFiche2").style.top=(topdivtexte-39)+"px"

document.getElementById("divFiche").style.left=leftdivtexte+"px"
document.getElementById("divFiche").style.top=(topdivtexte-39)+"px"
document.getElementById("hyperFiche").height=toprechercheY-5-5-30

document.getElementById("divapropos").style.left=leftdivtexte+"px"
document.getElementById("divapropos").style.top=topdivtexte+"px"

document.getElementById("tableg1").width=(Wsvg/2-5)+"px"
document.getElementById("tableg2").width=(Wsvg/2-5)+"px"


document.getElementById("panelCarte").style.left=CarteX+"px"
document.getElementById("panelCarte").style.top=CarteY+"px"

document.getElementById("panelBoutons").style.left=BoutonsX+"px"
document.getElementById("panelBoutons").style.top=BoutonsY+"px"

document.getElementById("effaffcouleurcarte").style.left=30+"px"
document.getElementById("effaffcouleurcarte").style.top=BoutonsY+"px"

document.getElementById("divMenuIco").style.left=MenuIcoX+"px"
document.getElementById("divMenuIco").style.top=MenuIcoY+"px"

document.getElementById("divMenuHisto").style.left=MenuHistoX+"px"
document.getElementById("divMenuHisto").style.top=MenuHistoY+"px"

document.getElementById("divrecherche").style.left=leftrechercheX+"px"
document.getElementById("divrecherche").style.top=(toprechercheY-4)+"px"

document.getElementById("divMenuPalette").style.left=MenuPaletteX+"px"
document.getElementById("divMenuPalette").style.top=(MenuPaletteY-2)+"px"

document.getElementById("divMenuQuantiles").style.left=MenuQuantilesX+"px"
document.getElementById("divMenuQuantiles").style.top=(MenuQuantilesY-2)+"px"

document.getElementById("divMenuRadio").style.left=MenuRadioX+"px"
document.getElementById("divMenuRadio").style.top=(MenuRadioY-2)+"px"

document.getElementById("gene").setAttribute("width",Wsvg)
document.getElementById("gene").setAttribute("height",Hsvg)

document.getElementById("innerhisto").style.top=topHisto+"px"
document.getElementById("innerhisto").style.left=leftHisto+"px"

document.getElementById("divlegende").style.top=topleg+"px"
document.getElementById("divlegende").style.left=leftleg+"px"
}
if(format=="normal"){

// DIV des boutons
var BoutonsX=Wsvg+CarteX-92
var BoutonsY=Hsvg+CarteY+1

document.getElementById("divcompage").style.left=leftcompage+"px"
document.getElementById("divcompage").style.top=topcompage+"px"

document.getElementById("divclic").style.left=(leftdivtexte-3)+"px"
document.getElementById("divclic").style.top=(topdivtexte-30)+"px"


document.getElementById("divtexte").style.left=leftdivtexte+"px"
document.getElementById("divtexte").style.top=topdivtexte+"px"
document.getElementById("hypertexte").height=toprechercheY-5-5-30+93+decalvertical-27


document.getElementById("divFiche2").style.left=(leftdivtexte-3)+"px"
document.getElementById("divFiche2").style.top=(topdivtexte-39)+"px"

document.getElementById("divFiche").style.left=(leftdivtexte-3)+"px"
document.getElementById("divFiche").style.top=(topdivtexte-39)+"px"
document.getElementById("hyperFiche").height=toprechercheY-40

document.getElementById("divapropos").style.left=leftdivtexte+"px"
document.getElementById("divapropos").style.top=topdivtexte+"px"

document.getElementById("tableg1").width=(Wsvg/2-5)+"px"
document.getElementById("tableg2").width=(Wsvg/2-5)+"px"


document.getElementById("panelCarte").style.left=CarteX+"px"
document.getElementById("panelCarte").style.top=CarteY+"px"

document.getElementById("panelBoutons").style.left=BoutonsX+"px"
document.getElementById("panelBoutons").style.top=BoutonsY+"px"

document.getElementById("effaffcouleurcarte").style.left=30+"px"
document.getElementById("effaffcouleurcarte").style.top=BoutonsY+"px"

document.getElementById("divMenuIco").style.left=MenuIcoX+"px"
document.getElementById("divMenuIco").style.top=MenuIcoY+"px"

document.getElementById("divMenuHisto").style.left=MenuHistoX+"px"
document.getElementById("divMenuHisto").style.top=MenuHistoY+"px"

document.getElementById("divrecherche").style.left=leftrechercheX+"px"
document.getElementById("divrecherche").style.top=(toprechercheY-6)+"px"

document.getElementById("divMenuPalette").style.left=MenuPaletteX+"px"
document.getElementById("divMenuPalette").style.top=(MenuPaletteY-2)+"px"

document.getElementById("divMenuQuantiles").style.left=MenuQuantilesX+"px"
document.getElementById("divMenuQuantiles").style.top=(MenuQuantilesY-2)+"px"

document.getElementById("divMenuRadio").style.left=MenuRadioX+"px"
document.getElementById("divMenuRadio").style.top=(MenuRadioY-2-26)+"px"

document.getElementById("gene").setAttribute("width",Wsvg)
document.getElementById("gene").setAttribute("height",Hsvg)

document.getElementById("innerhisto").style.top=topHisto+"px"
document.getElementById("innerhisto").style.left=leftHisto+"px"

document.getElementById("divlegende").style.top=topleg+"px"
document.getElementById("divlegende").style.left=leftleg+"px"
}
if(format=="complete"){

// DIV des boutons
var BoutonsX=Wsvg+CarteX-92
var BoutonsY=Hsvg+CarteY+1

document.getElementById("divcompage").style.left=leftcompage+"px"
document.getElementById("divcompage").style.top=topcompage+"px"
// declic = selecteur Fiche et Texte
var cote1=-30
var cote2=0
var cote3=0
if(typeof(FicheEtTexte) == "undefined"){}else{
if(FicheEtTexte == 1){cote1=-30}
if(FicheEtTexte == 2){cote1=-0; cote2=27; cote3=8}
if(FicheEtTexte == 3){cote1=-30; cote3=34}
}
document.getElementById("divclic").style.left=(leftdivtexte-3)+"px"
document.getElementById("divclic").style.top=(topdivtexte+cote1)+"px"//-30


document.getElementById("divtexte").style.left=leftdivtexte+"px"
document.getElementById("divtexte").style.top=(topdivtexte+cote2)+"px"
document.getElementById("hypertexte").height=toprechercheY-5-5-30-decalvertical-cote2


document.getElementById("divFiche2").style.left=(leftdivtexte-3)+"px"
document.getElementById("divFiche2").style.top=(topdivtexte-39+cote2)+"px"

document.getElementById("divFiche").style.left=leftdivtexte+"px"
document.getElementById("divFiche").style.top=(topdivtexte-39)+"px"
document.getElementById("hyperFiche").height=toprechercheY-5-5-30+cote3

document.getElementById("divapropos").style.left=leftdivtexte+"px"
document.getElementById("divapropos").style.top=topdivtexte+"px"

document.getElementById("tableg1").width=(Wsvg/2-5)+"px"
document.getElementById("tableg2").width=(Wsvg/2-5)+"px"


document.getElementById("panelCarte").style.left=CarteX+"px"
document.getElementById("panelCarte").style.top=CarteY+"px"

document.getElementById("panelBoutons").style.left=BoutonsX+"px"
document.getElementById("panelBoutons").style.top=BoutonsY+"px"

document.getElementById("effaffcouleurcarte").style.left=30+"px"
document.getElementById("effaffcouleurcarte").style.top=BoutonsY+"px"

document.getElementById("divMenuIco").style.left=MenuIcoX+"px"
document.getElementById("divMenuIco").style.top=MenuIcoY+"px"

document.getElementById("divMenuHisto").style.left=MenuHistoX+"px"
document.getElementById("divMenuHisto").style.top=MenuHistoY+"px"

document.getElementById("divrecherche").style.left=leftrechercheX+"px"
document.getElementById("divrecherche").style.top=(toprechercheY-4)+"px"

document.getElementById("divMenuPalette").style.left=MenuPaletteX+"px"
document.getElementById("divMenuPalette").style.top=(MenuPaletteY-2)+"px"

document.getElementById("divMenuQuantiles").style.left=MenuQuantilesX+"px"
document.getElementById("divMenuQuantiles").style.top=(MenuQuantilesY-2)+"px"

document.getElementById("divMenuRadio").style.left=MenuRadioX+"px"
document.getElementById("divMenuRadio").style.top=(MenuRadioY-2)+"px"

document.getElementById("gene").setAttribute("width",Wsvg)
document.getElementById("gene").setAttribute("height",Hsvg)

document.getElementById("innerhisto").style.top=topHisto+"px"
document.getElementById("innerhisto").style.left=leftHisto+"px"

document.getElementById("divlegende").style.top=topleg+"px"
document.getElementById("divlegende").style.left=leftleg+"px"
}
translateSVG(ax,ay)
CX=ax
CY=ay

zoom(Z0)

//zoometc()
document.getElementById("radio"+dernierecouche).checked="true"

}


//xxxxxxxxxxxxxxxxxxxxxxxxxxxx module drag and drop xxxxxxxxxxxxxxxxxxxxxxxxx

var DEF=1
var initialized=false
var XY0=0
var X
var Y
var CX=0
var CY=0
var CX0=0
var CY0=0
var X1=0;
var Y1=0;
var ax0
var ay0
var dragdepart
						var draginvecteur=new Array()

						function moveZoomBox(event){ 
						//-----------------------------------------------------------------cas FireFox

						if(XY0==1){
						if(initialized==true){
						X1=-(event.clientX-X)
						Y1=-(event.clientY-Y)
						var reg=new RegExp("[ ,;]+", "g");
						var zoo=document.getElementById("dragin").getAttribute("transform").split(reg)
						zoo[0]=parseFloat(zoo[0].replace("matrix(",""))
						var mat="matrix("+zoo[0]+", 0, 0, "+zoo[3]+", "+(CX-X1)+", "+(CY-Y1)+" )"
						draginvecteur=new Array(zoo[0],zoo[3],(CX-X1),(CY-Y1))
						document.getElementById("dragin").setAttribute("transform",mat)
						}
						}//fin de if XY0
						document.getElementById("dragin").addEventListener("mouseup",disable,true)
						//return false;

						}
						var compilDZ=""
						function compildragetzoom(){
						compilDZ=""
						for(i=0;i<4;i++){
						compilDZ+=zoomvecteur[i]+","
						}
						for(i=0;i<4;i++){
						compilDZ+=draginvecteur[i]+","
						}
						compilDZ+=bz


						}
						function recupCompilDZ(){return compilDZ}
						function recupNodatx(){return NoDatx}
						function execdragandzoom(a,b){
						forceNoDatx(b);
						svgclick1();
						//alert(bz)
						rcr=document.getElementById("cercleR").getAttribute("r")
						zoomZ()
						var reg=new RegExp("[ ,;]+", "g");
						var zola=a.split(reg)
						var mat="matrix("+zola[0]+", 0, 0, "+zola[1]+", "+zola[2]+", "+zola[3]+")"
						document.getElementById("totalsvg").setAttribute("transform",mat)
						zoomvecteur=new Array(zola[0],zola[1],zola[2],zola[3])
						var mat2="matrix("+zola[4]+", 0, 0, "+zola[5]+", "+zola[6]+", "+zola[7]+")"
						document.getElementById("dragin").setAttribute("transform",mat2)
						draginvecteur=new Array(zola[4],zola[5],zola[6],zola[7])
						var xxbz=bz
						bz=zola[8]
						CX=zola[6]
						CY=zola[7]
						/**/
						document.getElementById("cercleR").setAttribute("r",rcr*xxbz/(bz))
						document.getElementById("cercleR").setAttribute("stroke-width",(1/bz+1))
						zoom(1)

						}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxx disable xxxxxxxxxxxxxxxxxxxxxxxxx

function disable(event){
//------------------------------------------------------------------------------cas FireFox----------------------------------------------------

XY0=0
if(XY0==0){
initialized=false;
CX=CX-X1
CY=CY-Y1
X1=0
Y1=0
}//fin du if XY==0 
compildragetzoom()
}

function initXY(event){
//alert(DEF+"    "+initialized)
XY0=1
if(XY0==1){
if(DEF==1 & initialized==false){
X = event.clientX;
Y = event.clientY;
initialized=true;
}
}
}
// fin du module drag and drop de la carte












var quant=0
var changepalette=0
var nomzone=new Array()
var base00=new Array()
var r0=12 // rayon initial
var factz=1.2 // facteur de grossisment des icones
var max
var min1
var min1temp
var minfond
var maxfond
var dif
var cat=2
var nbquantiles=5
var Xtriee=new Array()
var borneclas=new Array
var borneclasici=new Array
var borneclasFond=new Array
var borneclasTemp=new Array
var variable
var XX=new Array()
var XXX=new Array()
var fondfill
var colorIco
var palcol = new Array()

var basex=new Array // résulta de la fonction calculIcone()



palcol[1]= new Array("red","fuchsia","yellow","aqua","lime")
//new Array("","","","","") // jeu de Couleur de base
palcol[2]=new Array("#ECCF9A","#DC965A","#D67046","#B34B34","#5A1B1E") // DEGRADE MARRON
palcol[3]=new Array("#FFDC8C","#FFB66E","#FF8538","#F24F12","#E50916") //DEGRADE ROUGE
palcol[4]= new Array("fuchsia","lime","aqua","yellow","red")
var col=palcol[pal]


var fondXX=new Array()
//var cattemp
//var catfond
function rien(){

}

function AjoutBaliseTitre(IdDeOu,IdBaliseTitre){
if(document.getElementById(IdDeOu)){
var nouveauTitre=document.createElementNS(svgns,"title")
nouveauTitre.setAttribute("id",IdBaliseTitre)//"TitreAire"+(i+1)
document.getElementById(IdDeOu).appendChild(nouveauTitre)//(i+1)
var nouveauText=document.createTextNode(" ")
document.getElementById(IdBaliseTitre).appendChild(nouveauText)
}
}

function changeInBaliseTitre(IdBaliseTitre,Texte){
var nt1=document.createTextNode(Texte)
if(document.getElementById(IdBaliseTitre)){
var nt2=document.getElementById(IdBaliseTitre).firstChild
document.getElementById(IdBaliseTitre).replaceChild(nt1,nt2)
}
}


function union(){
var DOUNION=new Array()
if(typeof(DataUnion)=='undefenied'){
for(i=0;i<DataUnion.length;i++){
var d=""
DOUNION=DataUnion[i]
	if(DOUNION[0]==56){document.getElementById(DOUNION[0]).setAttribute("title","xxx")}
	
	
	
for(j=0;j<DOUNION.length;j++){



	
//alert(DOUNION[j])
d+=" "+document.getElementById("p"+(DOUNION[j])).getAttribute("d");

document.getElementById("p"+(DOUNION[j])).setAttribute("d","");
}
document.getElementById("p"+(DOUNION[0])).setAttribute("d",d);
}
}
}
function CREATEX(){
if(window.union){
	union()
}
for(i=1;i<base00.length-9;i++){
nomzone[i]=document.getElementById(i).getAttribute("title")
document.getElementById("c"+i).setAttribute("onclick","NoDatx="+i+";svgclick2()")
onclickENcadre(i)
document.getElementById(i).setAttribute("onclick","javascript:NoDatx="+i+";NoDatx22="+i+";svgclick1()")
document.getElementById("npath"+(i)).setAttribute("onclick","javascript:NoDatx="+i+";NoDatx22="+i+";svgclick1()")
document.getElementById("insert").setAttribute("onclick","javascript:NoDatx=0")
document.getElementById("rectmovex").setAttribute("onclick","effacemaqueurcarte()")
document.getElementById("c"+i).setAttribute("fill-opacity",0.7)

AjoutBaliseTitre(("p"+i),"TitreAire"+(i)) // crée une balsie titre vide pour les aires 

changeInBaliseTitre("TitreAire"+(i),nomzone[i]) //place le nom de l'aire comme titre
if(document.getElementById("xxp"+i)){

AjoutBaliseTitre(("xxp"+i),"xxTitreAire"+(i))
changeInBaliseTitre("xxTitreAire"+(i),nomzone[i])
}
AjoutBaliseTitre("c"+(i),"TitreCercle"+(i)) // crée une balsie titre vide pour les cercles
AjoutBaliseTitre("fpath"+(i),"TitreForme"+(i)) // crée une balsie titre vide pour les Formes Icônes
AjoutBaliseTitre("npath"+(i),"TitreNeg"+(i)) // crée une balsie titre vide pour les Formes Icônes


}
//-----flux
 GroupelegendeCouche(Wsvg,Hsvg)
 //initcalcul(acoucheJS)               pour le calcul d'une couhe contour essai
}


function triX(a,b){ // sous fonction de la fonction tri croissant pour les quantiles
return a-b
}
var longXtri=0
function Xpercent(catici,wxc){
valpercent=new Array(0,0,0,0,0)
var XXX=new Array()
XXX=wxc
var Xtriee=new Array()
var dif=nbquantiles-catici //=différence entre valeur choisie du nombre de quantiles et nombre max=5

var k=0

for(i=1;i<XXX.length;i++){if(XXX[i][0]!=-99999 & XXX[i][0]>= min1 & XXX[i][0]<=max){Xtriee[k]=XXX[i][0];k=k+1}}
var lxt=Xtriee.length
longXtri=lxt
Xtriee.sort(triX)
borneclas=new Array()
var intervpc=parseInt(lxt/catici)

borneclas[0]=min1

		// fixation de la borne de départ
		for(i=1;i<nbquantiles;i++){
		if(i<=dif){borneclas[i]=min1;valpercent[i]=0}
		}
	
		// calcul rang dernière données <=min1
//alert("catici="+catici)		

var rgcumul=0	
var intervclasreste=0
var numBorne	
var rangnumBorne
		intervclasreste=parseInt((Xtriee.length-1-rgcumul)/(catici))
		/*
for(i=1;i<catici;i++){	
numBorne=dif+i	

		numBorne=dif+i
		var intervclastemp=intervclasreste

		var decal=0
		for(rg=intervclasreste+rgcumul;rg<Xtriee.length;rg++){
		
		if(Xtriee[rg]==borneclas[numBorne-1]){decal+=1;}
		}
		rangnumBorne=rgcumul+intervclasreste+decal+1
		borneclas[numBorne]=Xtriee[rgcumul+intervclasreste+decal+1];
		rgcumul=rgcumul+intervclasreste+decal+1
		valpercent[numBorne-1]=Math.round(10000*(decal+intervclasreste)/(Xtriee.length))/100
		if(decal>0){

		
		;intervclasreste=parseInt((Xtriee.length-rangnumBorne)/(catici-i))
	
		
		}



}
*/
var kdecalmax
for(i=1;i<catici;i++){	
numBorne=dif+i	

		numBorne=dif+i
		var intervclastemp=intervclasreste

		var decal=0
		kdecalmax=0
		for(rg=(rgcumul);rg<Xtriee.length;rg++){
		
		if(Xtriee[rg]==borneclas[numBorne-1]  ){decal+=1;}
		if(Xtriee[rg]==max & rg<=(rgcumul+intervclasreste+1)){kdecalmax=1;}else{kdecalmax=0}//
		if(kdecalmax==1 ){decal=Xtriee.length-rgcumul;rg=Xtriee.length}//
		
		}
		if(kdecalmax==1)
		{rangnumBorne=rgcumul+decal-1} // CAS où le nombre de valeurs = à max est supérieur à l'effectif théorique de la clase supérieure
		else
		{rangnumBorne=rgcumul+intervclasreste+decal-1} // CAS GENERAL
		
		

		borneclas[numBorne]=Xtriee[rangnumBorne];

		valpercent[numBorne-1]=Math.round(10000*(rangnumBorne-rgcumul+1)/(Xtriee.length))/100//decal+intervclasreste
		
		if(decal>0){ intervclasreste=parseInt((Xtriee.length-rangnumBorne)/(catici-i))	}
		
		rgcumul=rangnumBorne+1//

}

//alert("valpercent="+valpercent+"       borneclas="+borneclas     )



		valpercent[4]=Math.round(10000*(Xtriee.length-rangnumBorne)/(Xtriee.length))/100
		//valpercent[4]=100-valpercent[3]-valpercent[2]-valpercent[1]-valpercent[0]
		
		var tot=0
		for(j=0;j<5;j++){tot+=valpercent[j]}
		
		for(j=0;j<5;j++){if(valpercent[j]>0){valpercent[j]=Math.round(100*1*valpercent[j]/tot)/1}else{valpercent[j]=0}}
		
if(menuIconeEchelle[Icone][3][5]>-10000000000 & menuIconeEchelle[Icone][3][5]!=-99999 &  catici==2){
borneclas[4]=menuIconeEchelle[Icone][3][5]
}
}

function ChangePalette(pal){

col=palcol[pal]

changepalette=1

}

function aplliquantile(a){

//affichIcones(a)
if(dernierecouche==2){
restorefond();

}else{affichIcones(a)}
//quant=0
}



var nbbornes=0
function nbBornes(b){//détermination du nombre de bornes distinctes
nbbornes=0
var borneclasici=b
for(d=1;d<nbquantiles+1;d++){
if(borneclasici[d+1]>borneclasici[d]){nbbornes+=1}
}

}

function quantiles(a,b,catici){//attribution des couleurs
var borneclasici=b

var idcol=0//borneclasici.length-1
for(j=1;j<borneclasici.length+1;j++){
if(borneclasici[j]>min1 & a>borneclasici[j]){idcol+=1;}
}
var add
if(catici==5){add=1}else{add=0}

colorIco=col[borneclasici.length-1-add-nbbornes+idcol]
}

var zpm=0
function tailleicoplus(){

zpm+=1
for(i=1;i<base00.length-9;i++){
			SaufEncadre(i)// encadré
			if(encad2==0){	// encadré		
r=document.getElementById("c"+(i)).getAttribute("r")*factz
document.getElementById("c"+(i)).setAttribute("r",r)
TailleCercleEncadre(i,r)// encadré

var AL=document.getElementById("c"+(i)).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(i)).getAttribute("cy")//coordnom[1]
var R=r*0.8
var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "
if(nuageici==0){
if(parseFloat(XXicotemp0[i][0])>=0){dx=""}
           if(mobDT!=1){//***********************************************FLUX

			document.getElementById("npath"+i).setAttribute("d",dx)
			}else{
			if(menuIconeEchelle[Icone][11][0]==i & dernierecouche==1 ){Valcentreflux=basex[i];basex[i]=-99999}// flux : occultation de la valeur de la zone centre et stockage pour récupération par couche unique  afin de l'afficher en format texte
			traitmobDT(r,rgxaire,i)
			}
			//***********************************************fin de FLUX
			}
			}
}
boitebalise()

}
function tailleicomoins(){
zpm-=1
for(i=1;i<base00.length-9;i++){
			SaufEncadre(i)// encadré
			if(encad2==0){	// encadré
r=document.getElementById("c"+(i)).getAttribute("r")/factz
document.getElementById("c"+(i)).setAttribute("r",r)
TailleCercleEncadre(i,r)// encadré

var AL=document.getElementById("c"+(i)).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(i)).getAttribute("cy")//coordnom[1]
var R=r*0.8
var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "
if(nuageici==0){
if(parseFloat(XXicotemp0[i][0])>=0){dx=""}
           if(mobDT!=1){//***********************************************FLUX

document.getElementById("npath"+i).setAttribute("d",dx)
			}
			else{
			if(menuIconeEchelle[Icone][11][0]==i & dernierecouche==1 ){Valcentreflux=basex[i];basex[i]=-99999}// flux : occultation de la valeur de la zone centre et stockage pour récupération par couche unique  afin de l'afficher en format texte
			traitmobDT(r,rgxaire,i)
			}//***********************************************fin de FLUX
}
			}
}
boitebalise()
}

var XXfond=new Array()// stock données et libels fond
var XXico=new Array()// stock données et libels Icones
var minfond
var minico
var maxfond
var maxico
var maxpositifnegatif
var palfond
var palico
var catfond=2
var catico=2
var borneclasIco=new Array()
var XXicotemp0=new Array()
var maxicotemp0
var minicotemp0
var caticotemp0=2
var catfondtemp0=2
var palicotemp0=0
var palfondtemp0=0
var XXfondtemp0=new Array()
var maxfondtemp0
var minfondtemp0
var IconICOtemp0=-1
var IconFONDtemp0=-1
						var maxARROND=-1000000000
						var min1ARROND=1000000000
function stockvariable(basex){
if(dernierecouche==1){zpm=0} // remise à zero zoom
if(pal==0){pal=1}
//colorIco="red"
Xtree=new Array()
XX=new Array()
max=-1000000000
min1=1000000000
// recherche valeur max
						maxARROND=-1000000000
						min1ARROND=1000000000
for(i=1;i<basex.length;i++){
if(panoramaModele!=0){

			// recherche valeur max
if(panoramaModele==1){
						
						if(i==10 || i==9 || i==8 || i==7 || i==6 ||  i==4 || i==3 || i==2 || i==1){//i==5 ||
						if(basex[i]>maxARROND & basex[i]!=-99999){maxARROND=basex[i]}
						if(basex[i]<min1ARROND & basex[i]!=-99999){min1ARROND=basex[i]}
						}
						

			
			if(i!=10 & i!=9 & i!=8 & i!=7 & i!=6 & i!=5 & i!=4 & i!=3 & i!=2 & i!=1){
			if(basex[i]>max & basex[i]!=-99999){max=basex[i]}
			if(basex[i]<min1 & basex[i]!=-99999){min1=basex[i]}
			}
}		
if(panoramaModele==2){
									
						if(i==194 || i==193 || i==192 || i==191 || i==190 || i==189 || i==188 || i==187 || i==186){
						if(basex[i]>maxARROND & basex[i]!=-99999){maxARROND=basex[i]}
						if(basex[i]<min1ARROND & basex[i]!=-99999){min1ARROND=basex[i]}
						}
						


			if(i!=195 & i!=194 & i!=193 & i!=192 & i!=191 & i!=190 & i!=189 & i!=188 & i!=187 & i!=186){
			if(basex[i]>max & basex[i]!=-99999){max=basex[i]}
			if(basex[i]<min1 & basex[i]!=-99999){min1=basex[i]}
			}
}
			}else{




				
			if(numtot==i){}else{
				if(basex[i]>max & basex[i]!=-99999){max=basex[i]}
				if(basex[i]<min1 & basex[i]!=-99999){min1=basex[i]}
				}
			}
			
	
			
var intermed=new Array()
intermed[0]=basex[i]
if(Math.abs(parseFloat(basex[i])-parseInt(basex[i]))>0){var basexla=parseInt(100*basex[i])/100}else{var basexla=basex[i]};intermed[1]=nomzone[i]+" [ "+basex[0]+" : "+basexla+" ]"
/*
if(initaff==2 ){}else{
XXfond[i]=intermed
maxfond=max
minfond=min1
}
*/

XXico[i]=intermed

maxico=max
minico=min1

if(dernierecouche==1){

XXicotemp0[i]=intermed
}else{

XXfondtemp0[i]=intermed

}
}
if(dernierecouche==1){

IconICOtemp0=Icone
palicotemp0=pal
caticotemp0=cat

maxicotemp0=max
minicotemp0=min1
}else{
catfondtemp0=cat
palfondtemp0=pal
IconFONDtemp0=Icone

maxfondtemp0=max
minfondtemp0=min1
}


couche(dernierecouche)

}
function couche(dernierecouche){
 // alert(quant)

if(dernierecouche==2){


if(initaff==2){// cas appliquer les données icones au fonds de carte

//for(i=1;i<basex.length;i++){
XXfondtemp0=XXicotemp0
maxfondtemp0=maxicotemp0
minfondtemp0=minicotemp0
palfondtemp0=palicotemp0
catfondtemp0=caticotemp0
IconFONDtemp0=IconICOtemp0


XXfond=XXfondtemp0
XXX=XXfond
maxfond=maxfondtemp0
minfond=minfondtemp0
caticotemp0=0
palicotemp0=0
IconICOtemp0=-1
//}

palfond=palfondtemp0

catfond=catfondtemp0
}else{
//for(i=1;i<basex.length;i++){

//XXfond[i]=XXfondtemp0[i]


//}
XXfond=XXfondtemp0

XXX=XXfond
maxfond=maxfondtemp0
minfond=minfondtemp0
palfond=palfondtemp0

catfond=catfondtemp0
}

if(min1>=max){;catfond=1}
Icone=IconFONDtemp0
col=palcol[palfond]
boitebalise()
affichefond(palfond,catfond)

}else{
Icone=IconICOtemp0
for(i=1;i<basex.length;i++){
XXico[i]=XXicotemp0[i]

}
maxico=maxicotemp0
minico=minicotemp0
catico=caticotemp0
if(min1>=max){catico=1}
//if(quant==0){
palico=palicotemp0
col=palcol[palico]

//}
//alert("catico="+catico)
boitebalise()
afficheicone(palico,catico)}



legende(catico,catfond)
quant=0
}


function affichefond(palfond,catfond){
document.getElementById('popup3').selectedIndex=palfond
document.getElementById('popup2').selectedIndex=catfond
ChangePalette(palfond)
Xpercent(catfond,XXfond)

borneclasFond=borneclas
nbBornes(borneclasFond)

for(i=1;i<XXfond.length;i++){

quantiles(XXfond[i][0],borneclasFond,catfond)
var titx=XXfond[i][1]

//titx=titx.replace("&"," ")
titx=titx.replace("&lt;","<")
titx=titx.replace("&gt;",">")
if(XXfond[i][0]==-99999){colorIco="#E1D2F3";titx=nomzone[i]}//#BDCADC
if(document.getElementById("p"+i)){
document.getElementById("p"+i).setAttribute("fill",colorIco)
document.getElementById("p"+i).setAttribute("title",titx)
}
if(document.getElementById("xxp"+i)){
document.getElementById("xxp"+i).setAttribute("title",titx)
changeInBaliseTitre("xxTitreAire"+(i),titx)
}
changeInBaliseTitre("TitreAire"+(i),titx)
}

}
var etatfond=0 //0 indique que le fond est vide, 1 indique que le fond a une donnée affichée
var etatico=0 //0 indique que les icones sont  absents, 1 indique qe les icones sonrt présents.


function legende(catico,catfond){

//alert(dernierecouche)
if(dernierecouche==1){
etatico=1
var borneclasxx=borneclasIco//borneclas
borneclasxx[0]=minico
borneclasxx[borneclasxx.length]=maxico
//alert(borneclasxx)
var idcol=0
var icilegico='<table><tr><td>'
for(i=borneclasIco.length-catico;i<borneclasIco.length;i++){

var a
var b

if(i==borneclasxx.length-1 || borneclasxx[i]== borneclasxx[borneclasxx.length-1]){var croch="]" }else{var croch="]"}
if(borneclasxx[i]>=min1){}else{borneclasxx[i]=borneclasxx[i-1]}
if(i>borneclasIco.length-catico+1 & i<borneclasIco.length+1 & borneclasxx[i-2]==borneclasxx[i]){}else{
if(borneclasxx[i-1]<borneclasxx[i] & min1!=-99999){

idcol+=1
var add
if(catico==5){add=1}else{add=0}
var valpc
if(catico==1){valpc="( 100 %)"}else{valpc=" ("+valpercent[i-1]+" %)"}
if(longXtri<500000){valpc=""}
if(Math.abs(parseFloat(borneclasxx[i])-parseInt(borneclasxx[i]))>0){borneclasxx[i]=parseInt(borneclasxx[i]*100)/100};if(Math.abs(parseFloat(borneclasxx[i-1])-parseInt(borneclasxx[i-1]))>0){borneclasxx[i-1]=parseInt(borneclasxx[i-1]*100)/100}
if(i==(5-catico+1)){var cruch="["}else{var cruch="]"};icilegico+='<tr><td> '+cruch+' '+borneclasxx[i-1]+' ; '+borneclasxx[i]+' '+croch+' </td><td style="background-color:'+col[borneclasIco.length-1-add-nbbornes+idcol-2]+';width:10px"></td><td>'+valpc+'</td></tr>'}else{

//if(borneclasxx[i]!=borneclasxx[0] || borneclasxx[i-1]==borneclasxx[i+1] ){}else{
//if(borneclasxx[i]==min1){}else{
if(min1==borneclasxx[5] & min1!=1000000000){
var cruch="["
icilegico+='<tr><td> '+cruch+' '+borneclasxx[i-1]+' ; '+borneclasxx[i]+' '+croch+' </td><td style="background-color:'+col[4]+';width:10px"></td><td> </td></tr>'
}
//}
//}
}
}
}
icilegico+='</td></tr></table>'
document.getElementById("legicotab").innerHTML=icilegico           // title=\""+menuIconeEchelle[Icone][12]+"\"
var icilog=""
if(testla==1){icilog="<b><i style=\"color:red\"> radius= Log(Value)</i></b>"}//radius of circles=: 
document.getElementById("legicotablibel").innerHTML="n°"+(Icone+1)+" - <b><span >"+menuIconeEchelle[Icone][1]+"</span></b> (Source : "+menuIconeEchelle[Icone][2]+")"+icilog

}else{

etatfond=1
var borneclasxx=borneclasFond
borneclasxx[0]=minfond
borneclasxx[borneclasxx.length]=maxfond
//alert(borneclasxx)

var idcol=0
var icilegfond='<table><tr><td>'
for(i=borneclasFond.length-catfond;i<borneclasFond.length;i++){
var a
var b

//if(catico==borneclas.length
if(i==borneclasxx.length-1 || borneclasxx[i]== borneclasxx[borneclasxx.length-1]){var croch="]"}else{var croch="]"}

if(borneclasxx[i]>=min1){}else{borneclasxx[i]=borneclasxx[i-1];}
if(i>borneclasFond.length-catfond+1 & i<borneclasFond.length+1 & borneclasxx[i-2]==borneclasxx[i]){}else{
if(borneclasxx[i-1]<borneclasxx[i] & min1!=-99999){


idcol+=1
var add
if(catfond==5){add=1}else{add=0}
var valpc
if(catfond==1){valpc="( 100 %)"}else{valpc=" ("+valpercent[i-1]+" %)"}
if(longXtri<500000){valpc=""}
if(Math.abs(parseFloat(borneclasxx[i])-parseInt(borneclasxx[i]))>0){borneclasxx[i]=parseInt(borneclasxx[i]*100)/100};if(Math.abs(parseFloat(borneclasxx[i-1])-parseInt(borneclasxx[i-1]))>0){borneclasxx[i-1]=parseInt(borneclasxx[i-1]*100)/100}
if(i==(5-catfond+1)){var cruch="["}else{var cruch="]"};icilegfond+='<tr><td> '+cruch+' '+borneclasxx[i-1]+' ; '+borneclasxx[i]+' '+croch+' </td><td style="background-color:'+col[borneclasFond.length-1-add-nbbornes+idcol-2]+';width:10px"></td><td>'+valpc+'</td></tr>'}else{


//if(borneclasxx[i]!=borneclasxx[0] & borneclasxx[i-1]==borneclasxx[i+1] ){}else{

//if(borneclasxx[i]==min1 ){}else{
if(min1==borneclasxx[5] & min1!=1000000000){
var cruch="["
icilegfond+='<tr><td> '+cruch+' '+borneclasxx[i-1]+' ; '+borneclasxx[i]+' '+croch+' </td><td style="background-color:'+col[4]+';width:10px"></td><td> </td></tr>'
}
//}
//}
}
}
}
icilegfond+='</td></tr></table>'
document.getElementById("legfondtab").innerHTML=icilegfond                 //title=\""+menuIconeEchelle[Icone][12]+"\"
document.getElementById("legfondtablibel").innerHTML="n°"+(Icone+1)+" - <b><span >"+menuIconeEchelle[Icone][1]+"</span></b> (Source : "+menuIconeEchelle[Icone][2]+")"
if(etatico==0){
document.getElementById("legicotab").innerHTML=""
document.getElementById("legicotablibel").innerHTML=""
}

}
document.getElementById('popup2').selectedIndex=idcol
}
var legfondtemp
function effacetemplegfond(){


}


function neg(ineg,azneg,r0zpm){
//if(ineg<10){alert(ineg)}
			SaufEncadre(ineg)// encadré
			if(encad2==0){	// encadré
var R=azneg*r0zpm/Math.abs(minico)*3/5 
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
								var mobDT, mobDTsens, rgxaire, PtX, PtY, mobDTmarqueur
var rneg=0
var testla
var clicklog=0
function afficheicone(palico,catico){
document.getElementById('popup3').selectedIndex=palico
document.getElementById('popup2').selectedIndex=catico
var r0zpm=r0
var coefz
if(Math.abs(minico)>maxico){maxpositifnegatif=minico}else{maxpositifnegatif=maxico}
		if(panoramaModele!=0){
			if(Math.abs(min1ARROND)>maxARROND){maxpositifnegatifARROND=min1ARROND}else{maxpositifnegatifARROND=maxARROND}
		}
if(zpm==0){
r0zpm=r0
}else{
if(zpm>0){coefz=factz}else{coefz=1/factz}
for(i=1;i<Math.abs(zpm)+1;i++){r0zpm=r0zpm*coefz}

}

Xpercent(catico,XXico)

borneclasIco=borneclas

nbBornes(borneclasIco)


if(Math.abs(max)>8*Math.abs(XXico[parseInt(7*XXico.length/10)][0]) || Math.abs(min1)>8*Math.abs(XXico[parseInt(3*XXico.length/10)][0]) || Math.abs(max)/Math.abs(min1)> 4 || Math.abs(min1)/Math.abs(max)> 4 ){
testla=0
}else{testla=0}
if(menuIconeEchelle[Icone][11].length==2   ){testla=0} //Cas du Flux //Cas du Flux
if(document.getElementById("checklog")){
if(clicklog==0 & menuIconeEchelle[Icone][1].indexOf("log(R)")>0){testla=1;testla2=1 ;document.getElementById("checklog").checked=true ; document.getElementById("checklog").value="1"}else{;if(clicklog==0 & testla2==1){testla2=0} }

if(testla2==1){testla=1}else{testla=0;document.getElementById("checklog").checked=false; document.getElementById("checklog").value="0"}
}
clicklog=0
for(i=1;i<XXico.length;i++){

quantiles(XXico[i][0],borneclasIco,catico)










			if(  testla==1   ){
			
			var signxxicolog=Math.abs(XXico[i][0])/XXico[i][0]
			var signmaxpone=1
			var xxicolog=parseInt(100*(signxxicolog*Math.log(Math.E+Math.abs(XXico[i][0])+0.00001)-signxxicolog))/100
			var maxpositifnegatiflog=parseInt(100*(signmaxpone*Math.log(Math.E+Math.abs(maxpositifnegatif)+0.00001)-signmaxpone))/100

			var r = Math.abs(xxicolog*r0zpm/maxpositifnegatiflog)
			}else{
			var r = Math.abs(XXico[i][0]*r0zpm/maxpositifnegatif)
			}
			if(panoramaModele==1){
				if(i==10 || i==9 || i==8 || i==7 || i==6 ||  i==4 || i==3 || i==2 || i==1 || i==5 ){//
			var r = Math.abs(XXico[i][0]*r0zpm/maxpositifnegatifARROND/0.4/0.2/1.8/1.8)				
				}
				if(i==5){
			var r = r0zpm/0.2/0.3/1.8/1.8/1.8

				}
			}
			
			if(panoramaModele==2){
				if(i==194 || i==193 || i==192 || i==191 || i==190 || i==189 || i==188 || i==187 || i==186){
			var r = Math.abs(XXico[i][0]*r0zpm/maxpositifnegatifARROND/0.4/0.2)				
				}
				if(i==195){
			var r = r0zpm/0.2/0.3
				}
			}
if(numtot==i){r=r0}

if(PropNonProp==0){r =r0/3}// proportionnel=0 ou non proportionnel=1


//-------------------appel de flux
					if(i==1){

					if(menuIconeEchelle[Icone][11][0]>0){
					
					mobDT=1
					if(menuIconeEchelle[Icone][11][1]=="1"){
					mobDTsens=1 //flÃ¨che partant du territoire de rang = menuIconeEchelle[Icone][11][0] vers les autres territoires : 
					}else{
					mobDTsens=2 //flÃ¨che tournÃ©e vers le territoire de rang = menuIconeEchelle[Icone][11][0]
					}
					//menuIconeEchelle[Icone]=top.frames.Num0.frames.datacarte.transpara("return menuIconeEchelle[Icone]")
					rgxaire=menuIconeEchelle[Icone][11][0]
					//alert(rgxaire)
					//var coordnom=menuAreas[rgxaire-1]
					PtX=document.getElementById("c"+(rgxaire)).getAttribute("cx");
					PtY=document.getElementById("c"+(rgxaire)).getAttribute("cy")
					}else{mobDT=0}
					}
					//alert("ici i= "+i+" et mobDT = "+mobDT)
					if(mobDT==1){;traitmobDT(r,rgxaire,i);mobDTmarqueur=1}else{effaceValFlux(i);}
//-------------------fin d'appel de flux

			SaufEncadre(i)// encadré
			if(encad2==0){	// encadré		

var AL=document.getElementById("c"+(i)).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(i)).getAttribute("cy")//coordnom[1]
var R=r*0.8
var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "
if(XXico[i][0]>=0){dx=""}



if(XXico[i][0]==-99999){r=0;dx=""}
//*********************************************flux
				if(mobDT!=1){
		
document.getElementById("npath"+i).setAttribute("d",dx)// normal sans flux

				}else{if(menuIconeEchelle[Icone][11][0]==i ){basex[i]=Valcentreflux;XXico[i][0]=Valcentreflux}}//-------------------fin de flux
			
document.getElementById("c"+(i)).setAttribute("r",r)

document.getElementById("c"+(i)).setAttribute("fill",colorIco)
XXico[i][1]=XXico[i][1].replace("&lt;","<")
XXico[i][1]=XXico[i][1].replace("&gt;",">")
document.getElementById("c"+i).setAttribute("title",XXico[i][1])
changeInBaliseTitre("TitreCercle"+(i),XXico[i][1]) //place le nom de l'aire comme titre
changeInBaliseTitre("TitreForme"+(i),XXico[i][1])
changeInBaliseTitre("TitreNeg"+(i),XXico[i][1])
AfficheENcadre(i,r)// encadré
}
}

}
function effaceIcone(){
document.getElementById("legicotab").innerHTML=""
document.getElementById("legicotablibel").innerHTML=""
document.getElementById("synthe1").innerHTML=""
document.getElementById("synthe1").style.display="none"

document.getElementById("radio2").checked="true"

XXicotemp0=new Array()
maxicotemp0=0
minicotemp0=0
palicotemp0=0
caticotemp0=0
IconICOtemp0=-1
zpm=0
boitebalise()

//dernierecouche=2

cat=catfondtemp0;dernierecouche=2



for(i=1;i<base00.length-9;i++){
document.getElementById("c"+(i)).setAttribute("r",0)
document.getElementById("npath"+i).setAttribute("d","")
effaceENcadre(i)// encadré
}
}

var nomzonetemp=new Array()
var XXfondtemp=new Array()
var catfondtemp
var palfondtemp
var legfondtemp

// Cas des encadrés-----------------------------------------------------------

function IdCibleENcadre(aid){// détermination de l'encadré cible
			encad=0
			idcible=0
			for(iid=0;iid<idcarteNormal.length;iid++){
			if(aid==idcarteNormal[iid]){encad=1;idcible=iid;iid=idcarteNormal.length}
			}
}	
function IdAntiCibleENcadre(aid){// détermination de l'encadré cible
			encad=0
			idcible=0
			for(iid=0;iid<idcarteEncadre.length;iid++){
			if(aid==idcarteEncadre[iid]){encad=1;idcible=iid;iid=idcarteEncadre.length}
			}
}		
function SaufEncadre(aid){

			encad2=0
			for(iid=0;iid<idcarteEncadre.length;iid++){
			if(aid==idcarteEncadre[iid]){encad2=1;iid=idcarteEncadre.length}
			}

}		
function onclickENcadre(aid){
			encad=0
			idcible=0
			IdAntiCibleENcadre(aid)// détermination de l'encadré cible
			if(encad===1){
			document.getElementById("c"+aid).setAttribute("onclick","NoDatx="+(idcarteNormal[idcible])+";svgclick2()")
			}

}
function effaceENcadre(aid){ //efface l'encadré cible
			encad=0
			idcible=0
			IdCibleENcadre(aid)// détermination de l'encadré cible
			if(encad===1){

			document.getElementById("c"+(idcarteEncadre[idcible])).setAttribute("r",0)
			document.getElementById("npath"+idcarteEncadre[idcible]).setAttribute("d","")
			}


}
function AfficheENcadre(aid,rid){

			encad=0
			idcible=0
			IdCibleENcadre(aid)// détermination de l'encadré cible
if(encad==1){

document.getElementById("c"+(idcarteEncadre[idcible])).setAttribute("r",rid)

document.getElementById("c"+(idcarteEncadre[idcible])).setAttribute("fill",colorIco)

document.getElementById("c"+idcarteEncadre[idcible]).setAttribute("title",XXico[aid][1])
changeInBaliseTitre("TitreCercle"+(idcarteEncadre[idcible]),XXico[aid][1]) //place le nom de l'aire comme titre
changeInBaliseTitre("TitreForme"+(idcarteEncadre[idcible]),XXico[aid][1])
changeInBaliseTitre("TitreNeg"+(idcarteEncadre[idcible]),XXico[aid][1])
var AL=document.getElementById("c"+(idcarteEncadre[idcible])).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(idcarteEncadre[idcible])).getAttribute("cy")//coordnom[1]
var R=rid*0.8
var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "
if(parseFloat(XXicotemp0[aid][0])>=0){dx=""}
           if(mobDT!=1){//***********************************************FLUX

document.getElementById("npath"+idcarteEncadre[idcible]).setAttribute("d",dx)
			}





}

}
function TailleCercleEncadre(aid,rid){

IdCibleENcadre(aid)// détermination de l'encadré cible
if(encad==1){
//alert(document.getElementById("c"+(idcarteEncadre[idcible])).getAttribute("r"))
document.getElementById("c"+(idcarteEncadre[idcible])).setAttribute("r",rid)
var AL=document.getElementById("c"+(idcarteEncadre[idcible])).getAttribute("cx")//coordnom[0]
var AT=document.getElementById("c"+(idcarteEncadre[idcible])).getAttribute("cy")//coordnom[1]
var R=rid*0.8
var dx="M "+AL+" "+AT+" m "+0+" "+R/5+" l"
+R/2+" "+0+" "
+0+" "+(-2*R/5)+" "
+(-2*R/2)+" "+0+" "
+0+" "+2*R/5+" "
if(parseFloat(XXicotemp0[aid][0])>=0){dx=""}
           if(mobDT!=1){//***********************************************FLUX

document.getElementById("npath"+idcarteEncadre[idcible]).setAttribute("d",dx)
			}
}
}
// fin de cas des encadrés-----------------------------------------------------


function NoDatXici(b){NoDatx=b}

var PropNonProp=1 // proportionnel=1 ou non proportionnel=0

function boutonprop(bout){// proportionnel
if(bout==1){bout="visible"}else{bout="hidden"}
document.getElementById("radioprop").style.visibility=bout
}

function fixeProp(prop){
//alert("prop="+prop)
if(prop>=-100000){PropNonProp=prop}else{PropNonProp=1}// proportionnel=1 ou non proportionnel=0
//alert("PropNonProp="+PropNonProp)
if(PropNonProp==1){document.getElementById("prop").checked=true}else{document.getElementById("prop").checked=false}
//alert(document.getElementById("prop").checked)
}
function applicProp(){
fixeProp(PropNonProp)
//alert(document.getElementById("prop").checked)
if(document.getElementById("prop").checked==false){
document.getElementById("prop").checked=true;PropNonProp=1 /* proportionnel */
}else{
document.getElementById("prop").checked=false;PropNonProp=0 /* Non proportionnel */
}

calculIcone(Icone)
}
var testla2=0
var taillicoLA
function applicLog(){
clicklog=1
document.getElementById("radio1").checked=true
boutonprop(1)
if(document.getElementById("checklog")){
if(document.getElementById("checklog").value==0){
document.getElementById("checklog").checked=true
document.getElementById("checklog").value="1"
testla2=1
}else{
testla2=0
document.getElementById("checklog").checked=false
document.getElementById("checklog").value="0"
}
}
Icone=icotempla
calculIcone(Icone)//Icone
if(taillicoLA>0){for(k=1;k<taillicoLA+1;k++){tailleicoplus()}}
if(taillicoLA<0){for(k=1;k<-taillicoLA+1;k++){tailleicomoins()}}
}
var icotempla
function radio1ponctuels(a,coul,quant,tailleICO,prop){
icotempla=a
taillicoLA=tailleICO
dernierecouche=1;
fixeProp(prop)// proportionnel
boutonprop(1)// proportionnel
document.getElementById("radio"+dernierecouche).checked="true"
pal=coul;cat=quant;
ChangePalette(pal)

Icone=a;effacemaqueurcarte();calculIcone(Icone);initselect=0;marqueurcarte()

if(tailleICO>0){for(k=1;k<tailleICO+1;k++){tailleicoplus()}}
if(tailleICO<0){for(k=1;k<-tailleICO+1;k++){tailleicomoins()}}
}

function radio2fond(a,coul,quant){
boutonprop(0)// proportionnel
dernierecouche=2;
if(initaff==2){initaff=1};
document.getElementById("radio"+dernierecouche).checked="true"
pal=coul;cat=quant;
Icone=a;effacemaqueurcarte();calculIcone(Icone);initselect=0;marqueurcarte()

}
var clickOuHyper
if(lang=="En"){var agG="Enlarge the chart";var redG="Reduce the chart"}else{var agG="Agrandir le graphique";var redG="Réduire le graphique"}
function EtatHisto2(){
clickOuHyper=1
bb=document.getElementById("commandeTialleHisto")

if(bb.innerHTML==agG){tailleHisto()}else{
bb.innerHTML==redG ;tailleHisto()
bb.innerHTML==agG ;tailleHisto()
}
}
function EtatHisto(){
clickOuHyper=0
bb=document.getElementById("commandeTialleHisto")
if(bb.innerHTML==agG){var b=1}else{var b=0}
if(b==1){
tailleHisto()
}else{
tailleHisto()
document.getElementById("innerhisto").style.left=(leftHisto)+"px"//-largeurHistoGRAND+Xdim[0]+3
}
}
function comgraphique(a,b){
clickOuHyper=0
iSujet=a;
calculHisto(NoDatx,a)
bb=document.getElementById("commandeTialleHisto")
if(b==1){
if(bb.innerHTML==agG){tailleHisto()}else{
bb.innerHTML==redG ;tailleHisto()
bb.innerHTML==agG ;tailleHisto()
}
}else{
if(bb.innerHTML==agG){}else{
bb.innerHTML==redG ;tailleHisto()
bb.innerHTML==agG ;tailleHisto()
}
}
}

function fond(){
marqueurcarte()
document.getElementById("radio2").checked="true"
dernierecouche=2

for(i=1;i<XXico.length;i++){
document.getElementById("c"+(i)).setAttribute("r",0);
effaceENcadre(i)
}

couche(dernierecouche)
}
function fond2(){

document.getElementById("radio2").checked="true"
dernierecouche=2
couche(dernierecouche)
}

var initaff=1 // fond affiché par defaut
var legfondtablibeltemp
var legfondtabtemp
function effaceaffiche(){

if(initaff==1){
catfondtemp=catfondtemp0;palfondtemp=palfondtemp0;XXfondtemp=XXfondtemp0;

legfondtabtemp=document.getElementById("legfondtab").innerHTML
legfondtablibeltemp=document.getElementById("legfondtablibel").innerHTML
fondefface();
document.getElementById("legfondtab").innerHTML=""
document.getElementById("legfondtablibel").innerHTML=""
initaff=2
} else{

catfond=catfondtemp;palfond=palfondtemp;XXfond=XXfondtemp;
affichefond(palfond,catfond);
document.getElementById("legfondtab").innerHTML=legfondtabtemp
document.getElementById("legfondtablibel").innerHTML=legfondtablibeltemp
initaff=1
}//fond2()
}

function fondefface(){
document.getElementById("legfondtab").innerHTML=""
document.getElementById("legfondtablibel").innerHTML=""
document.getElementById("synthe2").innerHTML=""
document.getElementById("synthe2").style.display="none"
//palfondtemp=palfond
//catfondtemp=catfond
document.getElementById("radio1").checked="true"

XXfondtemp0=new Array()
maxfondtemp0=0
minfondtemp0=0
palfondtemp0=0
catfondtemp0=0
IconFONDtemp0=-1
boitebalise()
cat=caticotemp0;dernierecouche=1
//dernierecouche=1
for(i=1;i<base00.length-9;i++){
if(document.getElementById("p"+i)){
document.getElementById("p"+(i)).setAttribute("fill","#EFF2F9");
document.getElementById("p"+i).setAttribute("title",nomzone[i])//
changeInBaliseTitre("TitreAire"+(i),nomzone[i])//)
}
}
colorareaTemp="#EFF2F9"
}
