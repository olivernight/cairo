
function retourneMenu(){// RADAR

var menu=menuSujet[iSujet]
return menu
}


function grossiH(a,lg){
document.getElementById(a).setAttribute("style","font-size:12px")
document.getElementById(a+"s").setAttribute("style","background-color:white")

for(d=1;d<lg;d++){
if(a.indexOf("H")>=0){ var HouB="H"}else{var HouB="B"}
if((HouB+d)!=a){
document.getElementById(HouB+d+"s").setAttribute("style","opacity:0.5")
}
}
;
}
function reduitH(a,b,lg){


for(d=1;d<lg;d++){
if(a.indexOf("H")>=0){ var HouB="H"}else{var HouB="B"}
//if(("H"+d)!=a){
document.getElementById(HouB+d).setAttribute("style","display:block")
document.getElementById(HouB+d).setAttribute("style","font-size:"+b+"px")
document.getElementById(HouB+d+"s").setAttribute("style","background-color:transparent;opacity:0.5")
//}
}
}
var largeurHistoGRAND=400//295
var Histomulti=0
var largeurHisto=195
var GrandHisto=0
var HISTOLA=''

var agred="Agrandir le graphique"
var HistomultiTEMP=0



function tailleHisto(){
//EtatHisto()
//alert(GrandHisto)
HISTOLA=''
a=document.getElementById("commandeTialleHisto")

if(a.innerHTML==agG){

if(clickOuHyper==0){GrandHisto=1}
recupDim()//RADAR
agred=redG
if(format=="small" || format=="normal"){document.getElementById('divrecherche2').style.display='none'}
if(Histomulti==1 & LaCourbe==0){var addit=42; HistomultiTEMP=1}else{var addit=0;HistomultiTEMP=0}
document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-(largeurHistoGRAND-200)/2)-addit+195)+"px"
document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+195)+"px"

		if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3)){//RADAR
		//document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]+3)+"px"
		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]-6-200)+"px"
		document.getElementById("innerhisto").style.top=(topHisto-200)+"px"
		}

		if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){//COURBES(largeurHistoGRAND-(largeurHistoGRAND-200)/2)-addit+195
		//alert(Xdim[0])
		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]-3-200)+"px"
		document.getElementById("innerhisto").style.top=(topHisto-200)+"px"
		//document.getElementById("innerhisto").style.right=(Xdim[0]+3)+"px"
		}
		
}
else{
if(clickOuHyper==0){GrandHisto=0}
recupDim()//RADAR
agred=agG
document.getElementById('divrecherche2').style.display='block'
document.getElementById("innerhisto").style.top=topHisto+"px"
document.getElementById("innerhisto").style.left=leftHisto+"px"

		if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3)){//RADAR

		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]+3)+"px"

		}

		if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){//COURBES
				
		document.getElementById("innerhisto").style.left=(leftHisto-largeurHistoGRAND+Xdim[0]+3)+"px"
		}
}
boitebalise()

DimH2=50

DimH=50  // demi hauteur du graphique
DimB=DimH
Hhx=9 //borne échelle max
Hbx=0 //borne échelle Min

largcol=22 // largeur barre
larginter=3 // écart interbarres
percent="%" // percent="%" si pourcentage sinon ""
absol_relat=2

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
if(xtab==-99999){xtab=0}
TAB[i+1]=xtab
libel[i+1]=menuSujet[iSujet][4][i]

//libeltitre[i]=libel[i]
}//
var titregraph
if(NoDatx==0){titregraph=" "}else{titregraph=nomzone[NoDatx]}
var libelici=menuSujet[iSujet][1]+"<br/><i>"+menuSujet[iSujet][2]+"</i>"
if(menuSujet[iSujet][11][0]==1){percent="%"}else{percent=""}

var titreX=new Array(titregraph,libelici,'axeY')
largcol=menuSujet[iSujet][11][3]
//libel=menuSujet[iSujet][4]
//libeltitre
//alert(libel)
document.getElementById("innerhisto").innerHTML=""

histo(DimH,DimB,Hhx,Hbx,TAB,absol_relat,largcol,larginter,coulhX,coulbX,libel,titreX,percent)


document.getElementById("innerhisto").innerHTML=HISTOLA
if((menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3) ||(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1) ){//RADAR ou COURBE

}else{
document.getElementById("innerhisto").title=menuSujet[iSujet][12]
libelhistomultiout(0)
}

}
							var baseCol=new Array()
							var baseColT=new Array()
							function retourneBaseCol(){
						
							
							return baseCol
							}
							var indicRef=0
							
							var datax=new Array()
							function transDATA(){//RADARS et COURBES
							if(menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3){// RADARS
							baseCol=new Array()
							
							if(menuSujet[iSujet][11][0]==0){
							//pas de comparaison
							for(b=0;b<menuSujet[iSujet][0].length;b++){
							baseCol[b]=-19999
							}
							}else{// comparaison à une norme
										if(menuSujet[iSujet][11][0]<2){// CAS ==1 : comparaison à la moyenne  : la ligne 5 du menu graphique est vide ou plutôt pas prise en compte : le premier paramètre de la ligne 11 est égal à 1
										
									
										
										for(b=0;b<menuSujet[iSujet][0].length;b++){
										var k=0
										var sommeCol=0
									var sommeColCoefPond=0	
									if(menuSujet[iSujet][11].length==3){
									
									var icidecalcolOther=0
									if( iSujet >longueurMenuGraphiqueSujet){icidecalcolOther=longeurligneprincipal-2}
									//alert(iSujet+"   "+base00[0][icidecalcolOther+menuSujet[iSujet][11][2]])
																	
											for(a=1;a<base00.length-9;a++){			
												if(base00[a][menuSujet[iSujet][0][b]]!=-99999 && base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]!=-99999){
												k=k+1
												sommeCol+=base00[a][menuSujet[iSujet][0][b]]*base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]
												sommeColCoefPond+=base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]
												}
																			
											}
										baseCol[b]=parseInt(100*sommeCol/sommeColCoefPond)/100

									
									}else{
											for(a=1;a<base00.length-9;a++){			
												if(base00[a][menuSujet[iSujet][0][b]]!=-99999){
												k=k+1
												sommeCol+=base00[a][menuSujet[iSujet][0][b]]
												}
											}
										baseCol[b]=parseInt(100*sommeCol/k)/100
										}
									}
										
										
					}else{
										//-----------			
									if(menuSujet[iSujet][5].length>0){					
										if(menuSujet[iSujet][11][0]==2){// comparaison à des colonnes de données : intégration des n° de colonne  dans la ligne [5]  du menu au format "21","23","24" : le premier paramètre de la ligne 11 est égal à 2
										for(b=0;b<menuSujet[iSujet][5].length;b++){
										baseCol[b]=base00[NoDatx][parseFloat(menuSujet[iSujet][5][b])]
										}
										}
										//-----------
										if(menuSujet[iSujet][11][0]==3){// comparaison à des valeurs introduites manuellement dans la ligne 5 du menu au format "5400","2380","5800"  : le premier paramètre de la ligne 11 est égal à 3
										for(b=0;b<menuSujet[iSujet][5].length;b++){
										baseCol[b]=parseFloat(menuSujet[iSujet][5][b])
										}
										}
										
									}	
					}			
							}

							}//FIN DE RADAR
							
														if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){// COURBES
														baseCol=new Array()
														
														if(menuSujet[iSujet][11][0]==0){
														//pas de comparaison
														}else{// comparaison à une norme
																	if(menuSujet[iSujet][11][0]==1 & menuSujet[iSujet][6]==1){// CAS de comparaison à la moyenne  : le premier paramètre de la ligne 11 est égal à 1 : ne s'applique que s'il n'y a qu'une seule courbe
																	for(b=0;b<menuSujet[iSujet][0].length;b++){
																	var k=0
																	var sommeCol=0
																	var sommeColCoefPond=0
																	if(menuSujet[iSujet][11][0]==1 & menuSujet[iSujet][11].length==3){
																	
																	var icidecalcolOther=0
																	if( iSujet >longueurMenuGraphiqueSujet){icidecalcolOther=longeurligneprincipal-2}
																	//alert(iSujet+"   "+base00[0][icidecalcolOther+menuSujet[iSujet][11][2]])
																	
																		for(a=1;a<base00.length-9;a++){			
																			if(base00[a][menuSujet[iSujet][0][b]]!=-99999 && base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]!=-99999){
																			k=k+1
																			sommeCol+=base00[a][menuSujet[iSujet][0][b]]*base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]
																			sommeColCoefPond+=base00[a][icidecalcolOther+menuSujet[iSujet][11][2]]
																			}
																			
																		}
																		baseCol[b]=parseInt(100*sommeCol/sommeColCoefPond)/100

																		
																	}else{
																	
																		for(a=1;a<base00.length-9;a++){			
																			if(base00[a][menuSujet[iSujet][0][b]]!=-99999){
																			k=k+1
																			sommeCol+=base00[a][menuSujet[iSujet][0][b]]
																			}
																		}
																		baseCol[b]=parseInt(100*sommeCol/k)/100

																	
																	}


																	
																		
																	
																	}
																	}
																	//-----------			
																	if(menuSujet[iSujet][12].length>0){					
																	if(menuSujet[iSujet][11][0]==2){// comparaison à des colonnes de données : intégration des n° de colonne  dans la ligne [5]  du menu au format "21","23","24" : le premier paramètre de la ligne 11 est égal à 2
																	var  vecteur=menuSujet[iSujet][12].split(",")
																	for(b=0;b<vecteur.length;b++){
																	baseCol[b]=base00[NoDatx][parseFloat(vecteur[b])]
																	}
																	}
																	//-----------
																	if(menuSujet[iSujet][11][0]==3){// comparaison à des valeurs introduites manuellement dans la ligne 5 du menu au format "5400","2380","5800"  : le premier paramètre de la ligne 11 est égal à 3
																	var  vecteur=menuSujet[iSujet][12].split(",")
																	for(b=0;b<vecteur.length;b++){
																	baseCol[b]=vecteur[b]
																	}
																	}
																	
																}	
															
														}

														}//FIN DE COUR>BES

							datax=new Array()//RADAR et COURBES
							datax[datax.length]=NoDatx
							
							for(s=1;s<TAB.length;s++){
							datax[datax.length]=TAB[s]
							}
							
							
							var titregraph
							if(NoDatx==0){titregraph=" "}else{titregraph=nomzone[NoDatx]}
							datax[datax.length]=titregraph
							//alert(datax)
							return datax
							}//------- FIN DE transDATA()
				//-----------------------------------------------------------------------------------------------------------------------
							var base0ici=new Array()//RADAR
							function returnBasede0(){//RADAR
							base0ici=new Array()
							base0ici[base0ici.length]=menuSujet[iSujet][1]
							for(s=0;s<menuSujet[iSujet][4].length;s++){
							base0ici[base0ici.length]=menuSujet[iSujet][4][s]
							}
							base0ici[base0ici.length]=menuSujet[iSujet][2]
							base0ici[base0ici.length]="............"
							return base0ici
							}
							var Xdim=new Array()
							function recupDim(){
							if(GrandHisto==0){
							Xdim[0]=195 // dimension du carre d'encadrement
							Xdim[1]=39 //retrait relatif aux bords du cadre
							}else{
							Xdim[0]=400 // dimension du carre d'encadrement
							Xdim[1]=22 //retrait relatif aux bords du cadre							
							}
							return Xdim
							}

							var xk=1
var LaCourbe=0
var sautl
var sommeTAB=0
function histo(DimH2,DimB,Hhx,Hbx,TAB,absol_relat,largcol2,larginter,coulh,coulb,libel,titreX,percent){


/*
sommeTAB=0
var ttest=libel+""+titreX

for(v=0;v<TAB.length;v++){if(TAB[v]!=-99999){sommeTAB+=TAB[v]}}
if(ttest.indexOf("%")>=0 || ttest.indexOf("dont")>=0 || ttest.indexOf("DONT")>=0 || ttest.indexOf("Salaires")>=0 || ttest.indexOf("salaires")>=0 || ttest.indexOf("Série")>=0 || ttest.indexOf("série")>=0 || ttest.indexOf("serie")>=0){sommeTAB=0}
*/
sommeTAB=SOMMETAB(TAB,titreX,libel)

xk=1
sautl=""


//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
if(GrandHisto==1 ){largeurHisto=largeurHistoGRAND; largcol=largcol2*largeurHistoGRAND/200;DimH=DimH2*largeurHistoGRAND/200}else{largeurHisto=195; largcol=largcol2; DimH=DimH2}
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

//alert(menuSujet[iSujet][3][0])
if(menuSujet[iSujet][3][0]==1){// cas histo simple typeico = 1,2
Histomulti=0
var Hhi=new Array()
var Hbi=new Array()
for(i=0;i<TAB.length;i++){
if(TAB[i]>=0){Hhi[i]=TAB[i];Hbi[i]=0}else{Hbi[i]=-TAB[i];Hhi[i]=0}
}
var VALXH=new Array()
var VALXB=new Array()
for(i=0;i<Hhi.length;i++){
VALXH[i]=new Nouvelle(Hhi[i])
VALXB[i]=new Nouvelle(Hbi[i])
}


var Maxh=Hhi.max("return Max")
var Maxb=Hbi.max("return Max")
//alert(absol_relat)
//alert(Hhx)
if(absol_relat==1 && (Maxh>Hhx || Maxb>Hbx)){absol_relat=2}// si dépassement des bornes alors ramener au cas 2
if(absol_relat==1) {//l'échele est fixée par Hhx  échelle supérieur maximum et  Hbx=échelle inférieure maximum
Hhi.multipl(2*DimH/(Hhx+Hbx))
Hbi.multipl(2*DimH/(Hhx+Hbx))
DimB=Hbx*2*DimH/(Hhx+Hbx)
DimH=Hhx*2*DimH/(Hhx+Hbx)
}

if(absol_relat==2) {//déployé dans toute la zone graphique : les valeurs Hhx et Hbx sont indiférentes
Hhi.multipl(2*DimH/(Maxh+Maxb))
Hbi.multipl(2*DimH/(Maxh+Maxb))
DimH=Maxh*DimH/(Maxh+Maxb)
DimB=Maxb*DimB/(Maxh+Maxb)
}

histola+='<table  cellpadding="5" width="'+largeurHisto+'px" cellspacing="0" style="border:0.5px solid gray;font-family:arial;background-color:#d7d7d7;"><tr><td>'
histola+='<table border="0" cellpadding="0" cellspacing="0"><tr><td>'



histola+='<table border="0" cellpadding="0" cellspacing="0"><tr height="20px" align="left"><td><div style="position: absolute;top:-20px"><div style="position:relative;left:-5px"><table style="background-color:white;border : solid black 0px;-moz-border-radius: 5px 5px 0px 0px;-moz-border-top-right-radius: 5px;"><tr><td><a style="opacity:0.5" id="commandeTialleHisto" href="javascript:EtatHisto()">'+agred+'</a></td></tr></table></div></div></td>'
var poltit0="13"

if(titreX[0].length>15){poltit0=9 }else{}
if(titreX[0].length>25){poltit0=8 }else{}
histola+='<td style="font-size:'+poltit0+'px;color:navy"><div  style="position:absolute"><div style="position:relative;top:-12px"><b>'+titreX[0]+'</b></div></div></td>'


var poltit="11"
if(titreX[1].length>55){poltit=9 ;titreX[1]=titreX[1].replace("<br/>","   ")}else{}
histola+='</tr><tr height="15px" align="left"><td></td><td style="font-size:'+poltit+'px;"><div  style="position:absolute"><div style="position:relative;top:-15px"><b>'+titreX[1]+'</b></div></div></td></tr><tr><td style="width:10px"></td><td>'
						histola+='<table border="0" cellpadding="0" cellspacing="0">'
						histola+='<tr height="20px"><td></td></tr><tr  style="height:'+(DimH+20)+'px" >'
//-------------------------------------------------------------POSITIFS
var fsize=8
if(Hhi.length>=20){coulh=new Array();for(x=0;x<Hhi.length;x++){coulh[coulh.length]="gray"}}
for(i=1;i<Hhi.length;i++){
histola+='<td valign="bottom">'
histola+='<table border="0" cellpadding="0" cellspacing="0">'

if(Hhi[i]>0 ){var valx=VALXH[i].donnees+percent}else{var valx=""}
if((Hhi.length+Hbi.length)/2>22 || GrandHisto==0){fsize=0}
// affichage des valeurs
histola+='<tr align="center"><td style="font-size:'+fsize+'px" id="H'+i+'"><div style="position:absolute;width:0px;height:0px"><div style="position:relative;top:-15px;width:0px;height:0px"  ><span id="H'+i+'s" style="background-color:transparent;opacity:0.5">'+valx+'</span></div></div></td></tr>'
// fin affichage des valeurs

histola+='<tr style="height:'+(Hhi[i])+'px" title="'+libel[i]+' : '+TAB[i]+'"   onmouseover="grossiH(\'H'+i+'\','+Hhi.length+');libelhistomultiover2(this)" onmouseout="reduitH(\'H'+i+'\','+fsize+','+Hhi.length+');libelhistomultiout(this)">'
histola+='<td style="background-color:'+coulh[i]+';opacity:1;width:'+largcol+'px;border:0.1px solid #E9E9E9 ;"></td><td style="background-color:transparent;width:'+larginter+'px" ></td>'
histola+='</tr>'

histola+='</table>'

histola+='</td>'
}

//------------------------------------------------------------------Fin de POSITIFS
						histola+='</tr>'
						//histola+='<tr><td><table border="1px" width=100% cellpadding="0" cellspacing="0"><tr><td ></td></tr></table></tr></td>'
						histola+='<tr style="height:'+(DimB+20)+'px">'
//--------------------------------------------------------------------NEGATIFS

for(i=1;i<Hbi.length;i++){
histola+='<td valign="top"> '
histola+='<table border="0" cellpadding="0" cellspacing="0">'
histola+='<tr style="height:'+Hbi[i]+'px"  title="'+libel[i]+' : '+TAB[i]+'">'
histola+='<td style="background-color:'+coulb[i]+';opacity:1;width:'+largcol+'px;border:0.1px solid #E9E9E9 "  onmouseover="grossiH(\'B'+i+'\','+Hbi.length+');libelhistomultiover2(this)" onmouseout="reduitH(\'B'+i+'\','+fsize+','+Hbi.length+');libelhistomultiout(this)"></td><td style="background-color:transparent;width:'+larginter+'px"></td>'
histola+='</tr>'
if(Hbi[i]>0 ){var valx=-VALXB[i].donnees+percent}else{var valx=""}
if((Hhi.length+Hbi.length)/2>22 || GrandHisto==0){fsize=0}
histola+='<tr align="center"><td id="B'+i+'" style="font-size:'+fsize+'px"><div style="position:absolute;"><div style="position:relative;top:0px;width:0px;height:0px"  ><span id="B'+i+'s" style="background-color:transparent;opacity:0.5">'+valx+'</span></div></div></td></tr>'
histola+='</table>'
histola+='</td>'
}

//--------------------------------------------------------------------------------fin de NEGATIFSonmouseout="libelhistomultiout(this)" onmouseover="libelhistomultiover(this)"
						histola+='</tr>'
						
					
						histola+='<tr><td><div><div style="position:absolute;left:5px"><div style="position:relative;top:-10px" id="aflibel"> </div></div></div></td></tr>'
						histola+='</table>'

						
						
						
						
histola+='</td></tr></table>'
histola+='</td>'
histola+='<td style="width:20px"></td><td>'
// --------------------------------------------------------------------------------------------------------LEGENDE
if(libel.length<20){

histola+='<div style="position:relative"><table border="0" cellpadding="0" cellspacing="0">'
for(i=1;i<libel.length;i++){
if(libel.length>13 & libel[i].length>(10) ){if(GrandHisto==0){libel[i]=libel[i].substr(0,10).replace(","," ").replace(";"," ")}else{libel[i]=libel[i].substr(0,30).replace(","," ").replace(";"," ")}}
histola+='<tr style="height:0px"><td valign="middle" >'
histola+='<table border="0" cellpadding="0" cellspacing="0"><tr style="height:1px">'
if(libel[i]=="" || libel[i]==" "){var Xcoulici="transparent"}else{var Xcoulici=coulh[i]}
histola+='<td style="width:10px;background-color:'+Xcoulici+';color:transparent;font-size:8px">x</td></tr><tr style="height:1px"><td></td>'
histola+='</tr></table>'
histola+='</td><td style="width:3px"></td><td style="font-size:8px" title="'+libel[i]+'"><table border="0" cellpadding="0" cellspacing="0"><tr ><td>'+libel[i]+'</td></tr><tr style="height:1px"><td style="background-color:white;width:100%"></td></tr></table></td><td style="width:2px"></td></tr>'

}

histola+='</table></div>'
}
//------------------------------------------------------------------------------------------------------------Fin de LEGEBDE
histola+='</td></tr></table>'

histola+='</td></tr></table>'	
HISTOLA=histola
// RADAR
if(menuSujet[iSujet][3][0]==1 & menuSujet[iSujet][3][1]==3){HISTOLA='<div style="position: absolute;top:-20px;left:5px"><div style="position:relative;left:-5px"><table style="background-color:white;border : solid black 0px;-moz-border-radius: 5px 5px 0px 0px;-moz-border-top-right-radius: 5px;"><tr><td><a style="opacity:0.5" id="commandeTialleHisto" href="javascript:EtatHisto()">'+agred+'</a></td></tr></table></div></div><iframe id="zam2" name="zam2" width="200px" height="200px" scrolling="no" frameborder="0" src="GRAPH-RADAR/radar.xml" ></iframe>';histola=HISTOLA

}//

if(GrandHisto==1  ){ 
//alert("ici simple")
if(HistomultiTEMP==1 & Histomulti==0){
//alert("baisser sommet") 
HistomultiTEMP=0
document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-(largeurHistoGRAND-200)/2)+0+200)+"px"
}


}
return histola
}else{ 
Histomulti=1
// cas HistoMulti--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// cas HistoMulti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// cas HistoMulti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// cas HistoMulti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// cas HistoMulti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// cas HistoMulti---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
DimH-=4
var Hhi=new Array()
var Hhix=new Array()//cumul
var Hbi=new Array()
var Hbix=new Array()

for(i=0;i<TAB.length;i++){
if(TAB[i]>=0){Hhi[i]=TAB[i];Hbi[i]=0}else{Hbi[i]=-TAB[i];Hhi[i]=0}

}

var TAB2=new Array()
var TAB3=new Array()
for(i=0;i<TAB.length;i++){
if(TAB[i]>=0){TAB2[i-1]=TAB[i];TAB3[i-1]=0}else{TAB3[i-1]=-TAB[i];TAB2[i-1]=0}

}


for(k=0;k<TAB2.length;k=k+parseFloat(menuSujet[iSujet][6])){
Hhix[k]=0
for(j=0;j<parseFloat(menuSujet[iSujet][6]);j++){
Hhix[k]+=parseFloat(TAB2[k+j]);
}
Hbix[k]=0

}
var Maxh=Hhix.max("return Max")
var Maxb=Hbix.max("return Max")


var VALXH=new Array()
var VALXB=new Array()
for(i=0;i<Hhi.length;i++){
VALXH[i]=new Nouvelle(Hhi[i])
VALXB[i]=new Nouvelle(Hbi[i])
}



Hhi.multipl(2*DimH/(Maxh))
Hbi.multipl(2*DimH/(Maxh))

histola+='<table  cellpadding="5" width="'+largeurHisto+'px"  cellspacing="0" style="border:0.5px solid gray;font-family:arial;background-color:#d7d7d7;"><tr><td>'
histola+='<table border="0" cellpadding="0" cellspacing="0"><tr><td>'



histola+='<table border="0" cellpadding="0" cellspacing="0"><tr height="20px" align="left"><td><div style="position: absolute;top:-20px"><div style="position:relative;left:-5px"><table style="background-color:white;border : solid black 0px;-moz-border-radius: 5px 5px 0px 0px;-moz-border-top-right-radius: 5px;"><tr><td><a style="opacity:0.5" id="commandeTialleHisto" href="javascript:EtatHisto()">'+agred+'</a></td></tr></table></div></div></td>'
var poltit0="13"
if(titreX[0].length>15){poltit0=9 }else{}
if(titreX[0].length>25){poltit0=8 }else{}
histola+='<td style="font-size:'+poltit0+'px;color:navy"><div  style="position:absolute"><div style="position:relative;top:-12px"><b>'+titreX[0]+'</b></div></div></td>'

var poltit="11"
if(titreX[1].length>55){poltit=9 ;titreX[1]=titreX[1].replace("<br/>","   ")}else{}
histola+='</tr><tr height="15px" align="left"><td></td><td style="font-size:'+poltit+'px;"><div  style="position:absolute"><div style="position:relative;top:-15px"><b>'+titreX[1]+'</b></div></div></td></tr><tr><td style="width:10px"></td><td>'
						histola+='<table border="0" cellpadding="0" cellspacing="0">'
						histola+='<tr height="20px"><td></td></tr><tr  style="height:'+(DimH+20)+'px" >'
//-------------------------------------------------------------POSITIFS
var fsize=8
var nbici=parseFloat(menuSujet[iSujet][7])
//alert(Hhi)
for(i=1;i<Hhi.length;i=i+parseFloat(menuSujet[iSujet][6])){
histola+='<td valign="bottom">'
histola+='<table border="0" cellpadding="0" cellspacing="0">'

if(Hhi[i]>0 ){var valx=VALXH[i].donnees+percent}else{var valx=""}
if((Hhi.length+Hbi.length)/2>10){fsize=0}
// affichage des valeurs
//histola+='<tr align="center"><td style="font-size:'+fsize+'px" id="H'+i+'"><div style="position:absolute;"><div style="position:relative;top:-15px"  >'+valx+'</div></div></td></tr>'
// fin affichage des valeurs
var pct=""
if(menuSujet[iSujet][11][0]==100){// diagramme en 100%
pct="%"
var denomici=0
var denomici2=0

for(j=1;j<parseFloat(menuSujet[iSujet][6])+1;j++){

denomici+=Hhi[i+j-1]
denomici2+=TAB[i+j-1]
}
for(j=1;j<parseFloat(menuSujet[iSujet][6])+1;j++){
Hhi[i+j-1]=2*DimH*Hhi[i+j-1]/denomici
TAB[i+j-1]=parseInt(100*TAB[i+j-1]/denomici2)

}

}
if(GrandHisto==1){if(xk==0){xk=1;sautl='|<br/>|<br/>'}else{xk=0;sautl=''}}
for(j=1;j<parseFloat(menuSujet[iSujet][6])+1;j++){
/*
histola+='<tr style="height:'+(Hhi[i]/2)+'px" title="'+libel[(i-1)/parseFloat(menuSujet[iSujet][6])]+' : '+TAB[i]+'"   >'
histola+='<td style="background-color:'+coulh[1]+';opacity:1;width:'+largcol+'px;border:0.1px solid #E9E9E9 ;"></td><td style="background-color:transparent;width:'+larginter+'px" ></td>'
histola+='</tr>'
*/
//alert(Hici)
var bord
var fsici=5

var libiciX=1+parseInt(i/parseFloat(menuSujet[iSujet][6]))


if(GrandHisto==0){

var libici=menuSujet[iSujet][4][(i-1)/parseFloat(menuSujet[iSujet][6])];bord=0.1
if(parseFloat(menuSujet[iSujet][7])>5){var libici=libiciX;larginter=0.1;bord=0.1;fsici=7}
if(parseFloat(menuSujet[iSujet][7])>10){var libici="...";larginter=0;bord=0;fsici=5}


}else{fsici=7.5;var libici='<span style="color:red">'+libiciX+'</span><br/>'+menuSujet[iSujet][4][(i-1)/parseFloat(menuSujet[iSujet][6])];bord=0.1; }
if(Hhi[i+j-1]==0){bord=0}
histola+='<tr style="height:'+(Hhi[i+j-1])+'px" title="'+libiciX+'-'+menuSujet[iSujet][5][j-1]+' '+menuSujet[iSujet][4][(i-1)/parseFloat(menuSujet[iSujet][6])]+' : '+TAB[i+j-1]+' '+pct+'"  onmouseout="libelhistomultiout(this)" onmouseover="libelhistomultiover2(this)" >'
histola+='<td style="background-color:'+coulh[j+1]+';opacity:1;width:'+largcol+'px;border:'+bord+'px solid #E9E9E9 ;"></td><td style="background-color:transparent;width:'+larginter+'px" ></td>'
histola+='</tr>'
}

//histola+='<tr align="center"><td ><div style="position:absolute;font-size:5px" onmouseout="libelhistomultiout(this)" onmouseover="libelhistomultiover(this)">'+libici+'</div></td></tr>'
histola+='<tr ><td ><div style="position:absolute;font-size:'+fsici+'px" ><div style="position:relative;left:-'+((largeurHisto/Hhi.length)-(2*1+larginter)*(i+1))+'px" ><table width="'+(largcol*0.6)+'px"><tr><td><center>'+(sautl+libici)+'</center></td></tr></table></div></div></td></tr>'

if(GrandHisto==1){
histola+='<br/><br/><br/>'
}
histola+='<tr><td><div><br/><div style="position:absolute;left:5px;font-size:9px" id="aflibel"> </div></div><br/></td></tr>'
histola+='</table>'

histola+='</td>'
}

//------------------------------------------------------------------Fin de POSITIFS
						histola+='</tr>'
						//histola+='<tr><td><table border="1px" width=100% cellpadding="0" cellspacing="0"><tr><td ></td></tr></table></tr></td>'
/*						
histola+='<tr style="height:'+(DimB+20)+'px">'
//--------------------------------------------------------------------NEGATIFS

for(i=1;i<nbici+1;i++){
histola+='<td valign="top"> '
histola+='<table border="0" cellpadding="0" cellspacing="0">'
histola+='<tr style="height:'+Hbi[i]+'px"  title="'+libel[i]+' : '+TAB[i]+'">'
histola+='<td style="background-color:'+coulb[i]+';opacity:1;width:'+largcol+'px;border:0.1px solid #E9E9E9 "  onmouseover="grossiH(\'B'+i+'\')" onmouseout="reduitH(\'B'+i+'\','+fsize+')"></td><td style="background-color:transparent;width:'+larginter+'px"></td>'
histola+='</tr>'
if(Hbi[i]>0 ){var valx=-VALXB[i].donnees+percent}else{var valx=""}
if((Hhi.length+Hbi.length)/2>10){fsize=0}
histola+='<tr align="center"><td id="B'+i+'" style="font-size:'+fsize+'px"><div style="position:absolute;">'+valx+'</div></td></tr>'
histola+='</table>'
histola+='</td>'
}

//--------------------------------------------------------------------------------fin de NEGATIFS
						histola+='</tr>'
*/
						histola+='</table>'
histola+='</td></tr></table>'
histola+='</td>'
histola+='<td style="width:20px"></td><td>'
// --------------------------------------------------------------------------------------------------------LEGENDE
histola+='<div style="position:relative"><table border="0" cellpadding="0" cellspacing="0">'
for(i=0;i<menuSujet[iSujet][5].length;i++){
histola+='<tr style="height:0px"><td valign="middle" >'
histola+='<table border="0" cellpadding="0" cellspacing="0"><tr style="height:1px">'
histola+='<td style="width:10px;background-color:'+coulh[i+2]+';color:transparent;font-size:8px">x</td></tr><tr style="height:1px"><td></td>'
histola+='</tr></table>'
histola+='</td><td style="width:3px"></td><td style="font-size:8px" title="'+menuSujet[iSujet][5][i]+'"><table border="0" cellpadding="0" cellspacing="0"><tr ><td>'+menuSujet[iSujet][5][i]+'</td></tr><tr style="height:1px"><td style="background-color:white;width:100%"></td></tr></table></td><td style="width:2px"></td></tr>'

}

histola+='</table></div>'

//------------------------------------------------------------------------------------------------------------Fin de LEGEBDE
histola+='</td></tr></table>'

histola+='</td></tr></table>'	
HISTOLA=histola
// COURBE
LaCourbe=0
//alert(menuSujet[iSujet][3])
if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){;HISTOLA='<div style="position: absolute;top:-20px;left:5px"><div style="position:relative;left:-5px"><table style="background-color:white;border : solid black 0px;-moz-border-radius: 5px 5px 0px 0px;-moz-border-top-right-radius: 5px;"><tr><td><a style="opacity:0.5" id="commandeTialleHisto" href="javascript:EtatHisto()">'+agred+'</a></td></tr></table></div></div><iframe id="zam2" name="zam2" width="200px" height="200px" scrolling="no" frameborder="0" src="GRAPH-COURBE/courbe.xml" ></iframe>';histola=HISTOLA
LaCourbe=1

}
if(GrandHisto==1 ){ 
//alert("là multi")
if(HistomultiTEMP==0 & Histomulti==1 & LaCourbe==0){
//alert("monter sommet")
HistomultiTEMP=1;
document.getElementById("innerhisto").style.top=(topHisto-(largeurHistoGRAND-(largeurHistoGRAND-200)/2)-45+200)+"px"
}
}
return histola
}


}			
 
function libelhistomultiover(a){
document.getElementById("aflibel").innerHTML=a.innerHTML
}
function libelhistomultiout(a){
if(sommeTAB - parseInt(sommeTAB)!=0){sommeTAB = parseInt(100*sommeTAB)/100}
if(sommeTAB==0){var mes=""}else{var mes="Somme graphique = "+sommeTAB}
if(menuSujet[iSujet][3][0]==3 & menuSujet[iSujet][3][1]==1){}else{
document.getElementById("aflibel").innerHTML=mes//""
}
}
function libelhistomultiover2(a){

document.getElementById("aflibel").innerHTML=a.title
}

//histo(DimH,DimB,Hhx,Hbx,TAB,1,largcol,larginter,coulhX,coulbX,libel,titreX,percent)
function initmenu(){
document.getElementById("popup").selectedIndex=0 // menu icones ponctuels
document.getElementById("popup1").selectedIndex=0 //menu des Graphiques
document.getElementById("popup2").selectedIndex=0 // menu quantiles
document.getElementById("popup3").selectedIndex=0 //menu palette de couleur
}




/*
Icone=0 // (rang-1) dans le menu Icones : valeur au démarrage
dernierecouche=2 // position fond ou ione au départ ( ce parametre gère aussi le check dans la fonction de réglage des positions initiales reglagePanels()
pal=2
col=palcol[pal]

iSujet=1 // -> (rang -1) dans le menuSujet : valeur au démarrage
NoDatx=0// simule la séléction de l'aire  de la carte
numeroTemp=NoDatx //positionne dernier l'aire d'amorçage comme pseudo sélection antécédente
calculIcone(Icone)
dernierecouche=1
pal=1
col=palcol[pal]
calculIcone(3)
//calculHisto(NoDatx,iSujet)
*/
initmenu()

//document.getElementById("dragin").addEventListener("mouseup",disable,true)
document.getElementById("dragin").addEventListener("mousemove",moveZoomBox,true)
document.getElementById("dragin").addEventListener("mousedown",initXY,true)