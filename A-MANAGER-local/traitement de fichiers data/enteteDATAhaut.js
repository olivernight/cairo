
var base00 = new Array()
var k=2
var colox=new Array()
var colox0=new Array()
var base00Aselect= new Array()
var base00select= new Array()
var LL
var LLx0
var typeicone0=new Array()
var kb=0
var trabas0=new Array()
function longueurdata(){
longa=LLx0
return longa
}
var rangappel=0
function rgappel(a){
rangappel=a
}
function transbas00de0(){
var lignelabel=base00[rangappel]
return lignelabel
}

function recuptypeiconeonmap(){
SL=top.frames.Num0.frames.selectana.selectvar("return selectx")
if(SL==1){
typeicone0=top.frames.Num0.frames.ico.transiconetypex("return iconetypex")
}else{
typeicone0=top.frames.Num0.frames.analyse.transiconetypex("return iconetypex")
}
}

function recuptypeiconeencadre(){
typeicone0=top.frames.Num0.frames.precarte.transiconetypex("return iconetypex")
}
function recuptypehistomulti(){
typeicone0=top.frames.Num0.frames.precarte.transiconetypex("return iconetypex")
addressDATA0=top.frames.Num0.frames.precarte.transaddressDATAx("return addressDATAx")
}

function Nouvelle(a){
this.donnees=a;
}

function Nouvelle2(a){
this.donnees=a;
}


function ajouter(a){
base00[base00.length]=new Nouvelle(a)
}

function ajouter2(a){
var bastrans=new Array()
base00Aselect[base00Aselect.length]=new Nouvelle2(a)

//if(kb<LLx0+1){
bastrans=base00Aselect[base00Aselect.length-1].donnees.split(',')
base00select[kb]=bastrans
kb+=1
//}
}


function calculcolox0(){
if(typeicone0[0]==1 || typeicone0[0]==2){

colox[0]=0
colox[colox0.length+1]=1
for(i=1;i<colox0.length+1;i++){colox[i]=colox0[i-1]}

}
if(typeicone0[0]==3){

colox[0]=0
colox[1]=1
for(i=2;i<colox0.length+2;i++){colox[i]=colox0[i-2]}

}
}


function calculbaseselct(){
kb=0
colox=new Array()
colox0=new Array()
base00select= new Array()
base00Aselect=new Array()
if(typeicone0[0]==1 || typeicone0[0]==3){

colox0=top.frames.Num0.frames.precarte.transcolonx("return colonx")//varaible tableau contenant les nÃ&#8218;Â°de colonne des donnÃ&#402;Â©es de l\'histo dans la base
calculcolox0()
}
if(typeicone0[0]==2){
if(SL==1){

colox0=top.frames.Num0.frames.ico.transcolonx("return colonx")//varaible tableau contenant les nÃ&#8218;Â°de colonne des donnÃ&#402;Â©es  dans la base

calculcolox0()
}else{
colox0=top.frames.Num0.frames.analyse.transcolonx("return colonx")
calculcolox0()
}
}


for (i=0;i<LLx0+1;i++){

var transitici=""
var lignbase00=new Array()
lignbase00=base00[i]

for (j=0;j<colox.length;j++){
//alert(lignbase00[colox[j]])

if(j==0){transitici+=lignbase00[colox[j]]}else{transitici+=","+lignbase00[colox[j]]}
if(j==0 && i==0){

if(typeicone0[0]==1 ){transitici=top.frames.Num0.frames.precarte.transtitrex("return titrex")}
if(typeicone0[0]==2){
var LLx01=LLx0+1; 
if(SL==1){
transitici=top.frames.Num0.frames.ico.transtitrex("return titrex")+","+LLx01;
}else{
transitici=top.frames.Num0.frames.analyse.transtitrex("return titrex")+","+LLx01;
}

}


}
if(j==colox.length-2 && i==0 && typeicone0[0]==1){transitici+=","+top.frames.Num0.frames.precarte.transsourcex("return sourcex")}
if(j==0 && i>0 && typeicone0[0]==3){transitici+=","+addressDATA0}

}//fin boucle j
if(typeicone0[0]==3 && i==0){transitici=top.frames.Num0.frames.precarte.transtitrex("return titrex")}
if(typeicone0[0]==3 && i==LLx0){transitici=i+","+0+",ensemble"}

if(typeicone0[0]==2 & typeicone0[1]==1 & i>0 & i<LLx0-1){//CAS type ico(2,1) qui correspond Ã  pourcentage premiÃ¨re colonne sur deuxiÃ¨me colonne

var trici=transitici.split(',')

if(trici[1]==-99999 || trici[2]==-99999 || trici[2]==0){percentici=-99999}else{
var percentici=parseInt(100*trici[1]/trici[2]*100)/100
}
transitici=new Array()
transitici=trici[0]+","+percentici+","+trici[3]

}




ajouter2(transitici)
//alert(transitici)
}//fin boucle i
//alert(base00select[188].donnees.split(','))


// --------------------- dÃ&#402;Â©but calcul des donnÃ&#402;Â©es de lÃ&#402;Â©gende de l\'histo

if(typeicone0[0]!=3){ 
for (j=0;j<colox.length-2;j++){
var transitici=""
var kx=0

if(typeicone0[0]==[1]){kx=6}
if(typeicone0[0]==[2]){kx=2}

for (i=1;i<kx;i++){
var lignbase00=new Array()
lignbase00=base00[i+LLx0]


//alert(lignbase00[colox[j+1]])

if(i==1){transitici+=lignbase00[colox[j+1]]}else{transitici+=","+lignbase00[colox[j+1]]}





}// fin de boucle en i

ajouter2(transitici)

}//fin boucle j
}

// --------------------- dÃ&#402;Â©but calcul ddes commentaires dÃ&#402;Â©taillÃ&#402;Â©s
if(typeicone0[0]==[1]){
var transitici=""
var lignbase00=new Array()
lignbase00=base00[7+LLx0]
for (j=0;j<colox.length-2;j++){
transitici=lignbase00[colox[j+1]]

ajouter2(transitici)
}
}


if(typeicone0[0]==[3]){
var debj=1
var transitici=""
var lignbase00=new Array()
lignbase00=base00[1+LLx0]
for (j=0;j<colox.length-2;j++){
transitici=lignbase00[colox[j+1+debj]]

ajouter2(transitici)
}
}





//-------------------dÃ&#402;Â©clachement de l\'affichage
if(typeicone0[0]==1 || typeicone0[0]==3){



top.frames.Num0.frames.precarte.recupbaseinit() //dÃ&#402;Â©clenche le chargement de donnÃ&#402;Â©es dans le fichier Data-histo... lui mÃ&#402;Âªme ouvert par selection dans un menu de pilote
}
if(typeicone0[0]==2){
if(SL==1){
top.frames.Num0.frames.ico.recupbaseinit() //dÃ&#402;Â©clenche le chargement de donnÃ&#402;Â©es dans le fichier Data-ico... lui mÃ&#402;Âªme ouvert par selection dans un menu de pilote2
}else{
top.frames.Num0.frames.analyse.recupbaseinit()
}


}
}//fin function
function actubase0(){
for(i=0;i<LLx0+1;i++){
base00select[i]=base00Aselect[i].donnees.split(',')
}
trabas0=base00select
return trabas0
}
function transbase00(){
return base00Aselect
}
function transbase0(){

var trabas0=base00select
return trabas0
};