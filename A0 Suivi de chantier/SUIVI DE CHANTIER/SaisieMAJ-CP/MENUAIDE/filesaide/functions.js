var NoDatx=0

var iSujet=0
var tailleICO=0
var marron="marron"
var rouge="rouge"
var chinois="chinois"
var Nonchinois="Nonchinois"
var timer = 2500
var Carteencours
var egalcarte=0 // 0 pour différent et 1 pour égal




function testCarte(){
Carteencours=parent.parent.retcarteencours()

Carteencours=Carteencours.replace("/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete","")
var longC=Carteencours.split("/").length
Carteencours=Carteencours.split("/")[longC-1].replace(/%20/g," ")
nomdos=nomdos.replace(/%20/g," ")
if(Carteencours==nomdos){egalcarte=1}else{egalcarte=0}
return egalcarte
}
var deja=0
function CPonctuel(a,b,c,d,e){ 

var egcart=testCarte()
if(egcart==1){
parent.parent.frames.framediv.hypertexte.CPonctuel(a,b,c,d,e)

}else{
parent.parent.frames.framediv.location.href="../../../../../"+nomdos+"/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete";

setTimeout("parent.parent.val2carteencours('"+nomdos+"')",(1.6*timer))
deja=1
setTimeout("parent.parent.frames.framediv.hypertexte.CPonctuel("+a+","+b+","+c+","+d+","+e+")",1.2*timer)
}
parent.parent.divF.style.display="block"
parent.parent.Xzindex1()
setTimeout("deja=0",timer)
}
function Cfond(a,b,c){ 
var egcart=testCarte()
if(egcart==1){
parent.parent.frames.framediv.hypertexte.Cfond(a,b,c)
} else{
setTimeout("parent.parent.frames.framediv.hypertexte.Cfond("+a+","+b+","+c+")",1.2*timer)
}
}
function Cgraph(a,b){
iSujet=a
var egcart=testCarte()
if(egcart==1){
parent.parent.frames.framediv.hypertexte.Cgraph(a,b)
}else{
		if(deja==0){

		parent.parent.frames.framediv.location.href="../../../../../"+nomdos+"/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete";
		

		setTimeout("parent.parent.val2carteencours('"+nomdos+"')",(1.6*timer))
		}		
setTimeout("parent.parent.frames.framediv.hypertexte.Cgraph("+a+","+b+")",1.5*timer)

}
parent.parent.divF.style.display="block"
parent.parent.Xzindex1()
}

function calculHisto(a,b){}

function marqueurcarte(){


var egcart=testCarte()
if(egcart==1){
iSujet=parent.parent.frames.framediv.retiSujet()
parent.parent.frames.framediv.forceNoDatx(NoDatx)

parent.parent.frames.framediv.hypertexte.calculHisto(NoDatx,iSujet)
parent.parent.frames.framediv.hypertexte.marqueurcarte()
parent.parent.frames.framediv.forceNoDatx(NoDatx);

}else{
		if(deja==0){

		parent.parent.frames.framediv.location.href="../../../../../"+nomdos+"/PageCartoDossier/PageCarto/Module-PageCarto.xml?format=complete";
		

		setTimeout("parent.parent.val2carteencours('"+nomdos+"')",(1.6*timer))
		}		
		
setTimeout("parent.parent.frames.framediv.forceNoDatx("+NoDatx+");iSujet=parent.parent.frames.framediv.retiSujet();parent.parent.frames.framediv.marqueurcarte();parent.parent.frames.framediv.calculHisto("+NoDatx+","+iSujet+")",1.5*timer)

}
parent.parent.divF.style.display="block"
parent.parent.Xzindex1()

}
function XGraph(){
var egcart=testCarte()
if(egcart==1){
parent.parent.frames.framediv.hypertexte.XGraph()}else{
setTimeout("parent.parent.frames.framediv.hypertexte.XGraph()",1.5*timer)
}
}
