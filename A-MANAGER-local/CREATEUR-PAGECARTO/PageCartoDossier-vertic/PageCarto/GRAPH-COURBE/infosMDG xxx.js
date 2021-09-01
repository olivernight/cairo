

if(lang=="En"){
METADATA="Metadata"
Close1="Close"

function infosMDG(valdep, valobj, valproject,valpercentobj){
if(menu[6]>1 & paramMDGs[4]+paramMDGs[5]+paramMDGs[6]=="MDG" || PasdObjectif==0){}else{
if(valdep>-999999999999 & valdep!=-99999){}else{valdep="NA"}
if(valobj>-999999999999 & valobj!=-99999){}else{valobj="NA"}

if(valproject>-999999999999 & valproject!=-99999){}else{valproject="NA"}
if(valpercentobj>-999999999999 & valpercentobj!=-99999 ){}else{valpercentobj="NA"}
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,"black",leg1,gras, " estimating the initial value")
zf+=1;FicheMDG(zf,"black",valdep,gras,valdep)
if(PasdObjectif==0 & paramMDGs[4]+paramMDGs[5]+paramMDGs[6]=="MDG"){}else{
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,coul[0],leg2,gras, "Calculated from the starting value defined above")
zf+=1;FicheMDG(zf,coul[0],valobj,gras,valobj)
}
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,coul[1],leg3,gras,"Curve of estimation (See methodology)")
zf+=1;FicheMDG(zf,coul[1],valproject,gras,valproject)
/*
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,"#282029",leg4,gras, "differences (objective-start) / (projection-start) as a percentage")
zf+=1;FicheMDG(zf,"#282029",valpercentobj+" %",gras,valpercentobj+" %")
*/
}
}

document.getElementById("tbt1").setAttribute("title","Estimate by the linear regression line")
document.getElementById("tbt2").setAttribute("title","Estimate by the curve of moving averages (1/3) and by the graphic projection model (See the methodology)")
document.getElementById("tbt3").setAttribute("title","Shows the estimate by the line connecting the first to the last measurement")
document.getElementById("tbt4").setAttribute("title","Displays measurements")
}else{
METADATA="Métadonnées"
Close1="Fermer"

function infosMDG(valdep, valobj, valproject,valpercentobj){
if(menu[6]>1 & paramMDGs[4]+paramMDGs[5]+paramMDGs[6]=="MDG" || PasdObjectif==0){}else{
if(valdep>-999999999999 & valdep!=-99999){}else{valdep="NA"}
if(valobj>-999999999999 & valobj!=-99999){}else{valobj="NA"}

if(valproject>-999999999999 & valproject!=-99999){}else{valproject="NA"}
if(valpercentobj>-999999999999 & valpercentobj!=-99999 ){}else{valpercentobj="NA"}
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,"black",leg1,gras, " estime la valeur initiale")
zf+=1;FicheMDG(zf,"black",valdep,gras,valdep)
if(PasdObjectif==0 & paramMDGs[4]+paramMDGs[5]+paramMDGs[6]=="MDG"){}else{
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,coul[0],leg2,gras, "calculée à partir dela valeur initiale données au dessus")
zf+=1;FicheMDG(zf,coul[0],valobj,gras,valobj)
}
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,coul[1],leg3,gras,"Courbe d'estimation (voir la méthodologie)")
zf+=1;FicheMDG(zf,coul[1],valproject,gras,valproject)
/*
zf+=1;FicheMDG(zf,"gray","--------------------",gras,"")
zf+=1;FicheMDG(zf,"#282029",leg4,gras, "differences (objective-start) / (projection-start) as a percentage")
zf+=1;FicheMDG(zf,"#282029",valpercentobj+" %",gras,valpercentobj+" %")
*/
}
}

}