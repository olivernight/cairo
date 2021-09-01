var optionwiki=new Array()
var scrx ; var scry; // variable utilisée pour gérer le scroilling dans les cadres des frames

var menuencaps=new Array()
var aw=document.location.href

var longx2=0
for(i=0;i<aw.length;i++){
if(aw.substr((aw.length-i),1,1)=="?"){longx2=i}
}

aw=aw.substr(aw.length-longx2+1,longx2,1)
aw=0 //Dans le CAS ILIADE ON INHIBE cette fonctionnalité d'adressage direct de la page d'hyper texte de commanbde de carte (utilisé dans carto vision et encapsulage normal) car elle est en conflit avec les paramètres utilisateurs transmis par l'url. Ce n'est pas un problème car cela n'a pas d'utilité ici
function valaw(){
return aw
}

function retournemenuencaps(){
return menuencaps}
//------------------------------------------------------------------------------DEPLACE dans le fichier init0.js POUR ILIADE
var log=new Array() 
var vert="vert"
var rouge="rouge"
var deb
var arret
var idbarre=0
var nombarre=0
var score=0
var commentancre=0
var xtemp=2
var paramattribarre=new Array()
paramattribarre[nombarre]=new Array(nombarre,score,commentancre)