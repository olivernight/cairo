

var ly
var ly1
var xx=new Array()

LLx0=base00.length-8
var i=0
var essai=new Array()




// gestion des opération sur fichier destination dans le transfert de données (fichier processus : vide_add_inseretjs.html dans A-MANAGER-loca/transdata)
//if(parent.indicRezo()){alert("indicRezo")}
var pfile=parent.location.href

var herefile=window.location.href
//alert(herefile +    "dans enteteDATAbas.js")
if(herefile.indexOf("etalon",0)<0){ //MODULES de TRANSFERT de données ou menus /  activation des commandes inclues dans le {} sauf si c'est le fichier étalon qui s'ouvre
if(pfile){
if (pfile.indexOf("vide_add_insertjs",0)>0){setTimeout('parent.chargedatadestininit()',1000)}//transfert : fichier Destination
if (pfile.indexOf("vide_insertjs",0)>0){setTimeout('parent.OkChargedataOrigine()',1000)} //transfert : fichier Origine
if (pfile.indexOf("IdCodesEtNoms.html",0)>0){setTimeout('parent.FileDataActualiste2()',1000)}// module synchronisation des DATA files  .html->.txt
}
// fin de gestion des opérations sur fichier destination
if(top.frames.Num0){
var indicouvcarte=top.frames.Num0.frames.pilote.transindicouvcarte("return indicouvcarte")
if (indicouvcarte==0){
top.frames.Num0.frames.couches.location.href="../carte.htm"
}else{
top.frames.Num0.frames.datacarte.choixdata()}

}
}