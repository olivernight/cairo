var laframe;
var laDim=38;
var laDim0=50;
var largedivref=865;//NE PAS CHANGER  valeur de référence sur laquelle est basée l'adaptaion de la taille du module
var largediv=865;// largeur de la page ou de l'encadré dans lequel le module est placé
var coefdelta=largediv/largedivref;
var delta0=(largedivref-largediv)
var delta=(largedivref-largediv)*0.04255
var dim=0;

if(largediv<largedivref){var largeframe=largediv-delta}else{var largeframe=largediv} //voir onload de l'iframe

function doc(a){var ret=document.getElementById(a); return ret}

function dimension(){
	if(dim==0){
		dim=1;setTimeout('dim=0',1000)
laframe.doc("PClogo1").style.display="none"
laframe.doc("PClogo2").style.display="none"
				//laframe.doc("divMenuQuantiles").style.display="none"
				//laframe.doc("divMenuPalette").style.display="none"
				
			laframe.doc("divMenuQuantiles").style.left=(parseInt(laframe.doc("divMenuQuantiles").style.left.replace("px",""))+100)+"px"
			laframe.doc("divMenuQuantiles").style.top=(parseInt(laframe.doc("divMenuQuantiles").style.top.replace("px",""))+52)+"px"
			
			laframe.doc("divMenuPalette").style.left=(parseInt(laframe.doc("divMenuPalette").style.left.replace("px",""))+100)+"px"
			laframe.doc("divMenuPalette").style.top=(parseInt(laframe.doc("divMenuPalette").style.top.replace("px",""))+52)+"px"
			
			laframe.doc("popup").style.width="100px" //variable
			laframe.doc("popup1").style.width="100px" // graphiques
			laframe.doc("popup2").style.width="100px" //quantiles
			laframe.doc("popup3").style.width="100px" // palette
				
			laframe.doc("divMenuRadio").style.left=(parseInt(laframe.doc("divMenuRadio").style.left.replace("px",""))+105)+"px"
			laframe.doc("divMenuRadio").style.top=(parseInt(laframe.doc("divMenuRadio").style.top.replace("px",""))+72)+"px"
			laframe.document.getElementById("hypertexte").height="285px"


			
laframe.doc("panelCarte").style.left=(22-2.2*delta)+"px";
//laframe.doc("totalsvg").setAttribute("transform","matrix("+0.96*coefdelta*1.22+", 0, 0, "+0.96*coefdelta*1.22+", "+(-50-4*delta)+", "+(-50+2*delta)+" )" )
var alphaw=laframe.retalphaW()
var nomtot=laframe.retvisiontotal()

var numTOT=laframe.retnumtot()	
if(nomtot!=0){var wsom=laframe.doc("c"+numTOT).getAttribute("cx")}else{var wsom=0}

var droitesom=(wsom-400)*500/800
var droitecontour=alphaw*500/2
if(droitesom>droitecontour & wsom!=0){var decaltot=(droitesom-droitecontour)}else{var decaltot=0}
laframe.doc("totalsvg").setAttribute("transform","matrix("+0.76*(coefdelta)*(1+0.032*delta)+", 0, 0, "+0.76*(coefdelta)*(1+0.032*delta)+", "+(-50+65-delta0/2*alphaw-decaltot)+", "+(-50+65)+" )" )	
laframe.doc("divtexte").style.left=(528-15*delta)+"px"	
laframe.doc("hypertexte").setAttribute("width",(323-8*delta)+"px")	
laDim=laDim*coefdelta;	
laDim0=laDim0*coefdelta;
laframe.doc("innerhisto").style.width=(323-8.2*delta)+"px";
laframe.doc("innerhisto").firstChild.style.width=(323-8.2*delta)+"px";	
laframe.doc("divlegende").style.left=(22-3*delta)+"px";	
laframe.doc("tableg1").style.width=(245-6*delta)+"px";	
laframe.doc("tableg2").style.width=(245-7*delta)+"px";
laframe.doc("tableg1").setAttribute("width",(245-7*delta)+"px");	
laframe.doc("tableg2").setAttribute("width",(245-7*delta)+"px");
if(laframe.doc("rondleg")){
laframe.doc("rondleg").innerHTML="Cercles";		
laframe.doc("fondleg").innerHTML="Couleurs du fond";	
}
laframe.doc("panelBoutons").style.left=(428-16*delta)+"px"		
laframe.doc("effaffcouleurcarte").style.left=(-1.4*delta+15)+"px";	
laframe.doc("panelBoutons").style.top=(451-2*delta)+"px"		
laframe.doc("effaffcouleurcarte").style.top=(451-2*delta)+"px";	
										//laframe.doc("effaffcouleurcarte").style.display="none";
										for(t=0;t<laframe.doc("effaffcouleurcarte").childNodes.length;t++){
											var leneu=laframe.doc("effaffcouleurcarte").childNodes[t]
										if(leneu.tagName){
										if(leneu.tagName=="a"){	
											if(t==3 || t==1){leneu.style.display="none"}
										}
										
										}
										}
										
										
laframe.doc("Tinsertici").style.display="none"
}else{dim=0}
laframe.zoomZ()
}






var functTaille='function tailleHisto(){;GrandHisto=1;'
functTaille+=';HISTOLA="";'
functTaille+='a=document.getElementById("commandeTialleHisto");'
functTaille+='if(a.innerHTML==agG){'
functTaille+='if(clickOuHyper==0){GrandHisto=1};'
functTaille+='recupDim();agred=redG;'
functTaille+='if(format=="small" || format=="normal"){document.getElementById("divrecherche2").style.display="none"};'
functTaille+='if(Histomulti==1 & LaCourbe==0){DimH2='+laDim+';DimH='+laDim+';var addit=42; HistomultiTEMP=1}else{DimH2='+laDim0+';DimH='+laDim0+';var addit=0;HistomultiTEMP=0};'
functTaille+='document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-(largeurHistoGRAND-200)/2)-addit+200)+"px";'
functTaille+='document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+200)+"px";'
functTaille+='if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3)){;		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]-(largeurHistoGRAND-largeurHisto)+3)+"px";		document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-largeurHisto)-3)+"px";		};'
functTaille+='		if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){'
functTaille+='		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]-(largeurHistoGRAND-largeurHisto)+3)+"px";'
functTaille+='		document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-largeurHisto)-3)+"px";		'
functTaille+='      }'
functTaille+='		}else{'
functTaille+='if(clickOuHyper==0){GrandHisto=0};'
functTaille+='recupDim();'
functTaille+='agred=agG;'
functTaille+='document.getElementById("divrecherche2").style.display="block";document.getElementById("innerhisto").style.top=topHisto+"px";'
functTaille+='document.getElementById("innerhisto").style.left=leftHisto+"px";'
functTaille+='		if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3)){;		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND-200+Xdim[0]+3)+"px";;		};'
functTaille+='		if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND-200+Xdim[0]+3)+"px";'
functTaille+='}'
functTaille+='};'
functTaille+='boitebalise();'
//functTaille+='DimH2='+laDim+' ;'
//functTaille+='DimH='+laDim+'  ;'
functTaille+='DimB=DimH;Hhx=9 ;Hbx=0 ;;largcol=22 ;larginter=3 ;percent="%";absol_relat=2;;histola="";'
functTaille+='TAB=new Array();TAB[0]=0;libel=new Array();;libel[0]="";'
functTaille+='for(i=0;i<menuSujet[iSujet][0].length;i++){'
functTaille+='var idata;if(NoDatx==0){idata=0}else{idata=menuSujet[iSujet][0][i]};'
functTaille+='var xtab=base00[NoDatx][idata];'
functTaille+='if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){;}else{;if(xtab==-99999){xtab=0}};'
functTaille+='TAB[i+1]=xtab;libel[i+1]=menuSujet[iSujet][4][i];'
functTaille+='};'
functTaille+='var titregraph;if(NoDatx==0){titregraph=" "}else{titregraph=nomzone[NoDatx]};var libelici=menuSujet[iSujet][1]+"<br/><i>"+menuSujet[iSujet][2]+"</i>";if(menuSujet[iSujet][11][0]==1){percent="%"}else{percent=""};;var titreX=new Array(titregraph,libelici,"axeY");largcol=menuSujet[iSujet][11][3];;document.getElementById("innerhisto").innerHTML="";;histo(DimH,DimB,Hhx,Hbx,TAB,absol_relat,largcol,larginter,coulhX,coulbX,libel,titreX,percent);;var ne=document.getElementById("zam2");if(ne){;ne.parentNode.removeChild(ne);};document.getElementById("innerhisto").innerHTML=HISTOLA;if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3) ||(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1) ){}else{document.getElementById("innerhisto").title=menuSujet[iSujet][12];libelhistomultiout(0);};;}';

functTaille+='function calculHisto(NoDatx,iSujet){GrandHisto=1;'
functTaille+='if(Histomulti==1){DimH2='+laDim+';DimH='+laDim+'}else{DimH2='+laDim0+';DimH='+laDim0+'};'


functTaille+='DimB=DimH;'
functTaille+='Hhx=9 ;'
functTaille+='Hbx=0 ;'

functTaille+='largcol=22 ;'
functTaille+='larginter=3 ;'
functTaille+='percent="%" ;'
functTaille+='absol_relat=2;'

functTaille+='if(typeof(FicheEtTexte) == "undefined"){}else{'

functTaille+='if(FicheEtTexte == 2 || FicheEtTexte == 3){window.frames.hyperFiche.initDataFiche()};'

functTaille+='};'
functTaille+='boitebalise();'
functTaille+='fermaide();'
functTaille+='histola="";'

functTaille+='TAB=new Array();'
functTaille+='TAB[0]=0;'
functTaille+='libel=new Array();'
functTaille+='libel[0]="";'

functTaille+='for(i=0;i<menuSujet[iSujet][0].length;i++){'
functTaille+='var idata;'
functTaille+='if(NoDatx==0){idata=0}else{idata=menuSujet[iSujet][0][i]};'
functTaille+='var xtab=base00[NoDatx][idata];'
functTaille+='if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){'
functTaille+='}else{'
functTaille+='if(xtab==-99999){xtab=0};'
functTaille+='};'
functTaille+='TAB[i+1]=xtab;'
functTaille+='libel[i+1]=menuSujet[iSujet][4][i];'

functTaille+='};'
functTaille+='var titregraph;'
functTaille+='if(NoDatx==0){titregraph=" "}else{titregraph=nomzone[NoDatx]};'
functTaille+='var libelici=menuSujet[iSujet][1]+"<br/>(<i>"+menuSujet[iSujet][2]+"</i>)";'
functTaille+='if(menuSujet[iSujet][11][0]==1){percent="%"}else{percent=""};'
functTaille+='var titreX=new Array(titregraph,libelici,"axeY");'
functTaille+='largcol=menuSujet[iSujet][11][3];'
functTaille+='histo(DimH,DimB,Hhx,Hbx,TAB,absol_relat,largcol,larginter,coulhX,coulbX,libel,titreX,percent);'
functTaille+='var ne=document.getElementById("zam2");'
functTaille+='if(ne){;'
functTaille+='ne.parentNode.removeChild(ne);'
functTaille+='};'
functTaille+='document.getElementById("innerhisto").innerHTML=histola;'

functTaille+='if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3) || (menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1)){'

functTaille+='}else{'
functTaille+='document.getElementById("innerhisto").title=menuSujet[iSujet][12];'
functTaille+='libelhistomultiout(0);'
functTaille+='};'


functTaille+='marqueurcarte();'
functTaille+='};'



var icilafla

function DesigninitPCcomplet(lafla){

icilafla=lafla
icilafla.style.height="645px"
icilafla.parentNode.parentNode.style.height="645px"
laframe=lafla.contentWindow


if(laframe){Designinit3PCcomplet()}else{setTimeout('DesigninitPCcomplet()',500)}
}

function Designinit3PCcomplet(){	


if(laframe.hypertexte){Designinit4PCcomplet()}else{setTimeout('Designinit3PCcomplet()',500)}
}
function Designinit4PCcomplet(){

	
	
var ndoc=document.createElement("script");
ndoc.innerHTML="function doc(a){var ret=document.getElementById(a); return ret}";
laframe.document.getElementsByTagName("body")[0].appendChild(ndoc)	
	
	
var ndoc2=document.createElement("script");
ndoc2.innerHTML="function retalphaW(){return alphaW}";
laframe.document.getElementsByTagName("body")[0].appendChild(ndoc2)	

var ndoc3=document.createElement("script");
ndoc3.innerHTML="function retvisiontotal(){if(nomtot){return nomtot}else{return 0}}";
laframe.document.getElementsByTagName("body")[0].appendChild(ndoc3)	

var ndoc4=document.createElement("script");
ndoc4.innerHTML="function retnumtot(){return base00.length-10}";
laframe.document.getElementsByTagName("body")[0].appendChild(ndoc4)	




if(laframe.hypertexte.document.getElementsByTagName("body")[0]){DesignPCcomplet()}else{setTimeout('Designinit4PCcomplet()',500)}


}




var larghypert=200
//;document.getElementById("innerhisto").style.left="(528+'+(-14.7*delta)+'px"

var txtfunctiondecalhistoPCcomplet='function decalhistoPCcomplet(){document.getElementById("innerhisto").style.top="353px";document.getElementById("innerhisto").style.left=document.getElementById("divtexte").style.left;document.getElementById("innerhisto").style.width="'+(323-8.2*delta)+'px";document.getElementById("panelCarte").style.left="22px";document.getElementById("divlegende").style.left="22px";document.getElementById("innerhisto").firstChild.style.width="'+(323-8.2*delta)+'px";document.getElementById("innerhisto").firstChild.style.height="230px";document.getElementById("commandeTialleHisto").parentNode.parentNode.parentNode.parentNode.parentNode.style.display="none";if(document.getElementById("syntheseCarte")){document.getElementById("syntheseCarte").style.display="none"};if(window.zam2){document.getElementById("zam2").style.width="'+(323-8*delta)+'px";document.getElementById("zam2").style.height="270px";setTimeout(\'window.frames.document.getElementsByTagName("table")[0].style.width="'+(323-8*delta-8)+'px";if(window.frames.zam2.location.href.indexOf("RADAR")>0 || window.frames.zam2.location.href.indexOf("COURBE")>0){window.frames.zam2.document.getElementsByTagName("g")[0].setAttribute("transform","matrix('+(0.85-0.85*(1-coefdelta)/3)+' 0 0 '+(0.85-0.85*(1-coefdelta)/3)+' -'+(1*delta)+' 0)");window.frames.zam2.document.getElementsByTagName("svg")[0].setAttribute("width","'+(323-8.2*delta-8)+'px");window.frames.zam2.document.getElementsByTagName("svg")[0].setAttribute("height","230px")};if(window.frames.zam2.location.href.indexOf("COURBE")>0){window.frames.zam2.document.getElementById("table").style.width="'+(323-8.2*delta-8)+'px";}\',1000);document.getElementById("divrecherche").style.display="none";document.getElementById("divMenuRadio").style.display="block";document.getElementById("divMenuHisto").style.display="block";document.getElementById("divMenuIco").style.display="block";document.getElementById("effaffcouleurcarte").style.left="13px";document.getElementById("panelBoutons").style.left="428px";if(document.getElementById("ReadMe")){document.getElementById("ReadMe").style.display="none";document.getElementById("Reset").style.display="none"};document.getElementById("insertici").style.display="none";setTimeout(\'if(document.getElementById("aflibel")){document.getElementById("aflibel").style.right="10px;"}\',1300)};document.getElementById("tableg1").style.width='+(245-6*delta)+'+"px";	document.getElementById("tableg2").style.width='+(245-7*delta)+'+"px";document.getElementById("tableg1").setAttribute("width",'+(245-7*delta)+'+"px");	document.getElementById("tableg2").setAttribute("width",'+(245-7*delta)+'+"px");if(document.getElementById("rondleg")){document.getElementById("rondleg").innerHTML="Cercles";		document.getElementById("fondleg").innerHTML="Couleurs du fond";}	document.getElementById("divlegende").style.left='+(22-3*delta)+'+"px";	document.getElementById("panelCarte").style.left='+(22-2.2*delta)+'+"px";/**/}'//aflibellaframe.document.getElementById("effaffcouleurcarte").style.left="13px";laframe.document.getElementById("panelBoutons").style.left="428px";

var nouv;
//;setTimeout(\';document.getElementById("commandeTialleHisto").style.display="none"\',2000)

var txtfunctionsPCSvgclick='function boitebalise(){setTimeout(\'decalhistoPCcomplet()\',500)};function svgclick1(){calculHisto(NoDatx,iSujet);decalhistoPCcomplet()};function svgclick2(){calculHisto(NoDatx,iSujet);decalhistoPCcomplet()};var nomtot="Ensemble de la carte";var numlongmois10=base00.length-10;AjoutBaliseTitre("p"+numlongmois10,"TitreAire"+numlongmois10);changeInBaliseTitre("TitreAire"+numlongmois10,nomtot);AjoutBaliseTitre("c"+numlongmois10,"TitreCercle"+numlongmois10);changeInBaliseTitre("TitreCercle"+numlongmois10,nomtot);AjoutBaliseTitre("fpath"+numlongmois10,"TitreForme"+numlongmois10);changeInBaliseTitre("TitreForme"+numlongmois10,nomtot);AjoutBaliseTitre("npath"+numlongmois10,"TitreNeg"+numlongmois10);changeInBaliseTitre("TitreNeg"+numlongmois10,nomtot)';
var nouv1

var cgraphgrand="function Cgraph(a,b){if(a==0){}else{a=a-1;parent.comgraphique(a,1);parent.decalhistoPCcomplet()}}"
var nouv2
var ndocxla



function DesignPCcomplet(){	







				var nouv3=document.createElement("script");
				nouv3.innerHTML=functTaille
				
				laframe.document.getElementsByTagName("body")[0].appendChild(nouv3)
laframe.document.getElementById("divtexte").style.left=(528-15*delta)+"px"
laframe.document.getElementById("hypertexte").width=(323-8*delta)+"px"
//laframe.document.getElementById("hypertexte").height="145px"


if(laframe.hypertexte.document.getElementById("fixedsom")){
	laframe.hypertexte.document.getElementById("fixedsom").style.display="none"
}
var nbtablos=laframe.hypertexte.document.getElementsByTagName("table").length
for(i=0;i<nbtablos;i++){
var tablo=laframe.hypertexte.document.getElementsByTagName("table")[i]	
tablo.style.backgroundColor="white"	
tablo.style.width="100%"	
}
var nbTDtablos=laframe.hypertexte.document.getElementsByTagName("td").length
for(i=0;i<nbTDtablos;i++){
var TDtablo=laframe.hypertexte.document.getElementsByTagName("td")[i]	
TDtablo.style.backgroundColor="white"	
	
}
laframe.hypertexte.document.getElementsByTagName("body")[0].style.backgroundColor="white"
if(laframe.hypertexte.document.getElementById("baliseTitrePage")){
laframe.hypertexte.document.getElementById("baliseTitrePage").style.display="none"
}


laframe.document.getElementById("rectmove").style.fill="white"
laframe.document.getElementById("rectmove").style.stroke="white"

setTimeout('Design1PCcomplet()',500)
}

function Design1PCcomplet(){	

nouv=document.createElement("script");
nouv.innerHTML=txtfunctiondecalhistoPCcomplet;
laframe.document.getElementsByTagName("body")[0].appendChild(nouv)
nouv1=document.createElement("script");
nouv1.innerHTML=txtfunctionsPCSvgclick;

laframe.document.getElementsByTagName("body")[0].appendChild(nouv1)
nouv2=document.createElement("script");
nouv2.innerHTML=cgraphgrand;
laframe.hypertexte.document.getElementsByTagName("body")[0].appendChild(nouv2)

ndocxla=document.createElement("script");	
ndocxla.setAttribute("src","../../../../parametres.js")

laframe.hypertexte.document.getElementsByTagName("body")[0].appendChild(ndocxla)



ndocxla=document.createElement("script");	
ndocxla.setAttribute("src","../../../../../sommairesite.js")



laframe.hypertexte.document.getElementsByTagName("body")[0].appendChild(ndocxla)






//setTimeout('laframe.document.getElementsByTagName("iframe")[0].setAttribute("onload","parent.Designinit0PCcomplet()")',100)




//setTimeout('laframe.document.getElementById("innerhisto").style.left="545px"',1500)

setTimeout('dimension()',2500)
setTimeout('laframe.document.getElementById("panelBoutons").style.left="428px";if(laframe.document.getElementsByTagName("img")[2]){laframe.document.getElementsByTagName("img")[2].src=""};laframe.document.getElementsByTagName("body")[0].appendChild(nouv1);laframe.svgclick1();laframe.document.getElementById("effaffcouleurcarte").style.left="10px"; if(laframe.document.getElementById("ReadMe")){laframe.document.getElementById("ReadMe").style.display="none";laframe.document.getElementById("Reset").style.display="none"};',1900)//laframe.document.getElementById("innerhisto").innerHTML="<table style=\'width:323px;height:230px;background-color:white;border:1px solid gray;opacity:0.75\'></table>";

}
/**/