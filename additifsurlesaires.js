
function additifsurlesaires(){

if(REPDATA=="irisvienne"){a1=0;b1=0;c1=0;d1=0;e1=0;f1=0}
if(REPDATA=="iris90" || REPDATA=="iris99" || REPDATA=="pourcent-iris99-90"){a1=19;b1=37;c1=37;d1=44;e1=44;f1=56}
if(REPDATA=="FRANCE_DEP" || REPDATA=="FRANCE_DEP_sante1"){a1=104;b1=105;c1=0;d1=0;e1=0;f1=0}
if(REPDATA=="Forez 4 zone Loire 3 ZE1"){a1=1;b1=4;c1=0;d1=0;e1=0;f1=0}
if(REPDATA=="Forez 4 zone Loire 3 ZE1"){a1=8;b1=9;c1=0;d1=0;e1=0;f1=0}
if(REPDATA=="xxcommunes"){a1=19;b1=37;c1=37;d1=44;e1=0;f1=0}
grisees(a1,b1)
contournoir(c1,d1)
fondtransparent(e1,f1)

}

function grisees(a1,b1){
//REGION GRISEES
for(i=a1;i<b1;i++){
var idg=i//Xregion[i]
if(brsr=="ei"){
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","gray")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","0.5")
}else{
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","gray")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill-opacity",0.3)
//htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","0")
}
}
}
function contournoir(c1,d1){
//REGION CONTOUR NOIR
for(i=c1;i<d1;i++){
var idg=i//Xregion[i]
if(brsr=="ei"){
//window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","gray")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","2")
}else{
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","blue")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","2")
}
}
}

function fondtransparent(e1,f1){
for(i=e1;i<f1;i++){
var idg=i//Xregion[i]
if(brsr=="ei"){
//window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","gray")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
window.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","2")
}else{
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill-opacity",0.8)
//htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("fill","none")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke","black")
htmldocument.trans.getSVGDocument().getElementById("p"+idg).setAttribute("stroke-width","0.5")
}
}
}