
function initDataFiche(){
var Xaire=parent.recupDataPourFiche(2) // aire sélectionnée

document.getElementById("titreAire").innerHTML=Xaire.replace(/_/g," ") // aire sélectionnée
document.getElementById("GdTitre").innerHTML=GrandTitre // aire sélectionnée
for(i=0;i<numMenu.length;i++){
document.getElementById("data"+i).innerHTML=parseInt(100*parent.recupDataMenuPourFiche(numMenu[i]))/100
}
}



var numMenu=new Array()
var titreItem=new Array
var FonctionItem=new Array()
var unitval=new Array()
var CommentItem=new Array()

var GrandTitre="Essai de fiche"

titreItem[titreItem.length]="titre 1"
FonctionItem[FonctionItem.length]="javascript:CPonctuel(1,chinois,2,2,1);Cfond(1,marron,5);Cgraph(1,0)"
unitval[unitval.length]="unités 1"
CommentItem[CommentItem.length]="commentaire 1 commentaire 1 commentaire 1 commentaire 1 commentaire 1 commentaire 1"
/*
titreItem[titreItem.length]="titre 2"
FonctionItem[FonctionItem.length]="javascript:CPonctuel(0,chinois,2,2,1);Cfond(3,marron,5);Cgraph(1,0)"
unitval[unitval.length]=""
CommentItem[CommentItem.length]="blabla2"

titreItem[titreItem.length]="titre 3"
FonctionItem[FonctionItem.length]="javascript:CPonctuel(4,chinois,2,2,1);Cfond(0,0,0);Cgraph(1,0)"
unitval[unitval.length]=""
CommentItem[CommentItem.length]="blabla3"
*/

var ContenuIci=""

for(i=0;i<titreItem.length;i++){
ContenuIci+='<b><span id="titre'+i+'" style="color: black;font-size:13px">'+titreItem[i]+'</span></b><br>'
var unitX=""
if(unitval[i]!=""){unitX="("+unitval[i]+")"}
ContenuIci+='<b><span id="val'+i+'"   style="color: rgb(102, 102, 102);"><a id="data'+i+'" href="'+FonctionItem[i]+'"></a>  '+unitX+'</span></b><br>'
ContenuIci+='<b><span id="com'+i+'"   style="color: rgb(102, 102, 102);">'+CommentItem[i]+'</span></b><br>'

if(FonctionItem[i].split("CPonctuel(")[1].split(",")[0]!=0){
numMenu[numMenu.length]=FonctionItem[i].split("CPonctuel(")[1].split(",")[0]
}else{
numMenu[numMenu.length]=FonctionItem[i].split("Cfond(")[1].split(",")[0]
}
}
document.getElementById("ContenuFiche").innerHTML=ContenuIci