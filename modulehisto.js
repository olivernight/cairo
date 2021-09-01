var histola=""
var DimH=40  // demi hauteur du graphique
var DimB=DimH
var Hhx=9 //borne échelle max
var Hbx=0 //borne échelle Min
var TAB=new Array()// valeurs pour histo la première est nulle. Les valeur commencent au rang 1
var libel=new Array() //le premier élément est "", les valeurs commencent au rang 1 avec autant d'élements que de libellés
var libeltitre=new Array() // bulle d'info développé des libellés : le premier élément est "", les valeurs commencent au rang 1 avec autant d'élements que de libellés
var TitreX=new Array() // 2 variables : titre du graphique et sous titre
var absol_relat=1 // 1 pour absolu, 2 pour relatif=100% de l'espace graphique
var coulhX=new Array("black","gray","Navy","blue","orange","red","green","violet","yellow")//"red"
var coulbX=coulhX
var largcol=22 // largeur barre
var larginter=3 // écart interbarres
var percent="%" // percent="%" si pourcentage sinon ""

function Nouvelle(a){
this.donnees=a;
//alert("nouvelle")
}

function histo(DimH,DimB,Hhx,Hbx,TAB,absol_relat,largcol,larginter,coulh,coulb,libel,TitreX,percent){

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

histola+='<table border=1 cellpadding="5" cellspacing="0" style="font-family:arial;background-color:white"><tr><TD >'
histola+='<table border=0 cellpadding="0" cellspacing="0"><tr><TD >'



histola+='<table border=0 cellpadding="0" cellspacing="0"><tr align="left"><TD></TD>'
histola+='<TD style="font-size:12px"><b>'+TitreX[0]+'</b></TD>'
histola+='</TR><TR align="left"><TD></TD><TD style="font-size:11px">'+TitreX[1]+'</TD></TR><tr><TD style="width:10px"></TD><TD>'
						histola+='<table border=0 cellpadding="0" cellspacing="0">'
						histola+='<tr  style="height:'+(DimH+20)+'px">'
//-------------------------------------------------------------POSITIFS

for(i=1;i<Hhi.length;i++){
histola+='<TD valign="bottom">'
histola+='<table border=0 cellpadding="0" cellspacing="0">'
if(Hhi[i]>0){var valx=VALXH[i].donnees+percent}else{var valx=""}
histola+='<tr align="center"><TD style="font-size:9px">'+valx+'</TD></TR>'

histola+='<tr style="height:'+Hhi[i]+'px">'
histola+='<TD style="background-color:'+coulh[i]+';width:'+largcol+'px;"></TD><TD style="background-color:transparent;width:'+larginter+'px"></TD>'
histola+='</tr>'
histola+='</table>'
histola+='</TD>'
}
//------------------------------------------------------------------Fin de POSITIFS
						histola+='</TR>'
						//histola+='<TR><TD><table border="1px" width=100% cellpadding="0" cellspacing="0"><TR><TD ></TD></tr></table></TR></TD>'
						histola+='<TR style="height:'+(DimB+20)+'px">'
//--------------------------------------------------------------------NEGATIFS
for(i=1;i<Hbi.length;i++){
histola+='<TD valign="top"> '
histola+='<table border=0 cellpadding="0" cellspacing="0">'
histola+='<tr style="height:'+Hbi[i]+'px" >'
histola+='<TD style="background-color:'+coulb[i]+';width:'+largcol+'px;"></TD><TD style="background-color:transparent;width:'+larginter+'px"></TD>'
histola+='</tr>'
if(Hbi[i]>0){var valx=VALXB[i].donnees+percent}else{var valx=""}
histola+='<tr align="center"><TD style="font-size:9px">'+valx+'</TD></TR>'
histola+='</table>'
histola+='</TD>'
}
//--------------------------------------------------------------------------------fin de NEGATIFS
						histola+='</tr>'
						histola+='</table>'
histola+='</TD></TR></TABLE>'
histola+='</TD>'
histola+='<TD style="width:20px"></TD><TD>'
// --------------------------------------------------------------------------------------------------------LEGENDE
histola+='<table border=0 cellpadding="0" cellspacing="0">'
for(i=1;i<libel.length;i++){
histola+='<TR style="height:0px"><TD valign="middle" >'
histola+='<table border=0 cellpadding="0" cellspacing="0"><TR style="height:10px">'
histola+='<TD style="width:10px;background-color:'+coulh[i]+'"></TD>'
histola+='</TR></table>'
histola+='</TD><TD style="width:5px"></TD><TD style="font-size:11px" title="'+libeltitre[i]+'">'+libel[i]+'</TD><TD style="width:10px"></TD></TR>'

}

histola+='</TR></table>'
//------------------------------------------------------------------------------------------------------------Fin de LEGEBDE
histola+='</TD></TR></TABLE>'
histola+='</TD></TR></TABLE>'	
return histola
}	