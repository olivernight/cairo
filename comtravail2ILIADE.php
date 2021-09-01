<html>
<head>

<script id="repertoiresite" language="javascript"></script>

<script language="javascript">
var repsite=top.transrepsite("return repsite")
document.getElementById("repertoiresite").src=repsite+"/permissionscartes.js?updated="+Math.random();
var listboutons=new Array("cartu","iconu","fondu","f-ico","encadru")
var listboutons2=new Array("cartu","iconu","fondu","fico","encadru")

var topX=top.location.href
var microsite=topX.indexOf("Site-",0)
topX=topX.indexOf("encaps.",0)
var typeicones=1
var tailleico=0
var colbalse=0;
var firsticone=0
var tixt="sélectionnez une variable ou une carte puis une variable"
var mapX=new Array()
</script>
<?php
$alea=mt_rand();
echo '<script src="mapsILIADE.js?updated='.$alea.'"></script>';
?>
<script>
// functions d'ajustement de la taille des icones. Commandée par les boutons PLUx et MOIx dans CartO2encapsule.htm
function tailleicoplus(){tailleico+=1}
function tailleicomoins(){tailleico-=1}
//--------------------------------------------------------------------------
function alacarte(){
top.frames.Num0.annulsansfondx()
top.frames.Num0.frames.couches.zatitre.document.getElementById("them2").firstChild.data=""
top.frames.Num0.frames.datacarte.indicnouvellecarte()
top.frames.Num0.frames.couches.zam3.indicarte21()
indicarte=1
top.frames.Num0.frames.couches.zam4.document.getElementById("enr").style.visibility="visible"
top.frames.Num0.frames.couches.zam3.grilleapplycarte()
}
function commandesvisibles(){

document.getElementById("alacarte").style.visibility="visible"
document.getElementById("choix").style.visibility="visible"
document.getElementById("choix2").style.visibility="visible"
document.getElementById("choixlibel").style.visibility="visible"
//document.getElementById("coloris").style.visibility="visible"
document.getElementById("plus").style.visibility="visible"
document.getElementById("moins").style.visibility="visible"
document.getElementById("choix22").style.visibility="visible"
document.sel.textbalise.value="Sélectionnez une balise et faite la glisser dans le wiki"

}


var initanal=0
function change_site3() {
if(firsticone==0){top.frames.Num0.onesansfondx();firsticone=1}
commandesvisibles()
var site = document.menu3.popup3.selectedIndex;
{
top.frames.Num0.frames.tab.document.menu3.popup3.selectedIndex=document.menu3.popup3.selectedIndex
top.frames.Num0.comptico0()// remet le compte de passage des boucles de métalanguage à zero ce qui évite que le graphique encadré ne soit repositionné aléatoirement
top.frames.Num0.frames.tab.change_site3()
//window.location.href =
//document.menu3.popup3.options[site].value;
//ka3=site
}

}
function retICDencours(){ICDencours=ICD; return ICDencours}
function razselectindex(){
document.menu3.popup3.selectedIndex=ka3
}
var numerocarte
function change_site() {


var site = document.menu.popup.selectedIndex;
{
numerocarte=document.menu.popup.options[site].id.replace("carte","")

top.frames.Num0.frames.pilote.document.menu.popup.selectedIndex=numerocarte//document.menu.popup.selectedIndex
top.frames.Num0.frames.pilote.change_site()

if(site==0){document.menu.popup.selectedIndex=0}else{document.menu.popup.selectedIndex=site}
if(site==0){ka1=0;repcarte=0}else{ka1=site}
}

}



function ECH1X(){
top.frames.Num0.frames.tab.ECH1X()
top.frames.Num0.frames.datacarte.ECH1()
ECHX=1
}
function ECH2X(){
top.frames.Num0.frames.tab.ECH2X()
top.frames.Num0.frames.datacarte.ECH2()
ECHX=2
}
function retourneech(){
return ECHX
}


var menucarte="<option VALUE='javascript:rien2()' >&nbsp;cartes</option>"
function affichmenucarte(){

if(microsite>0){
for(k=0;k<REPmapXsite.length;k=k+1){
var i=1+5*k
//alert(mapX[i+3])
if(listpubcartovision[k]==1){
menucarte+='<option  id="carte'+((i-1)/5+1)+'" VALUE="javascript:legendex='
menucarte+="'"
menucarte+=mapX[i+3]+"/"+mapX[i-1]
menucarte+="'"
menucarte+=';fondcarte='
menucarte+="'"

menucarte+=mapX[i+3]+"/"+mapX[i]
menucarte+="'"
menucarte+=';DATACARTE='
menucarte+="'"

menucarte+="datacarte.html"//mapX[i+1]
menucarte+="'"
menucarte+=';REPERTOIRE='
menucarte+="'"
menucarte+=mapX[i+3]
menucarte+="'"
if(mapX[i+3]=="TEXTE"){
menucarte+=';texte()'

menucarte+='" onmouseover="numerocarte='+((i-1)/5+1)+'">'+((i-1)/5+1)+'-'+mapX[i+2]+'</option>'}else{
menucarte+=';changeECHELLE()" onmouseover="numerocarte='+((i-1)/5+1)+'">'+((i-1)/5+1)+'-'+mapX[i+2]+'</option>'}
}
}
}
document.getElementById("popup").innerHTML=menucarte
}


</script>



</head>

<body STYLE="background-color: gray">
<span id="comtra2"></span>
<table ><TR><TD>

<div  style="position:absolute;left:2;top:2" >
<!----------------------------------------------------------------------------------------Menu MAPS-------------------------->
<form NAME="menu">
<select title="pour re-initialiser une carte,selectionnez Maps(init) puis reselectionnez la carte" id="popup" NAME="popup"
onChange="change_site();" onmouseover="if(document.all){top.frames.Num0.frames.couches.zoom0()}"  style="background-color:white; color:black;width:200px" size="1" >
<script>

if(microsite<0){
document.write("<option  VALUE='javascript:rien2()' >&nbsp;cartes</option>")
for(i=1;i<mapX.length+1;i=i+5){

document.write('<option  id="carte'+((i-1)/5+1)+'"  VALUE="javascript:legendex=')
document.write("'")
document.write(mapX[i+3]+"/"+mapX[i-1])
document.write("'")
document.write(';fondcarte=')
document.write("'")

document.write(mapX[i+3]+"/"+mapX[i])
document.write("'")
document.write(';DATACARTE=')
document.write("'")

document.write("datacarte.html")//mapX[i+1]
document.write("'")
document.write(';REPERTOIRE=')
document.write("'")
document.write(mapX[i+3])
document.write("'")
if(mapX[i+3]=="TEXTE"){
document.write(';texte()')

document.write(' " onmouseover="numerocarte='+((i-1)/5+1)+'">'+((i-1)/5+1)+'-'+mapX[i+2]+'</option>')}else{
document.write(';changeECHELLE()" onmouseover="numerocarte='+((i-1)/5+1)+'">'+((i-1)/5+1)+'-'+mapX[i+2]+'</option>')}
}
}

</script>
</select>

</form>
</div>

<div  style="position:absolute;left:2;top:25" >
<!-- DEBUT DU SCRIPT MENU DEROULANT icones ------------------->
<form NAME="menu3">
<select NAME="popup3"
onChange="change_site3();" onmouseover="if(document.all){top.frames.Num0.frames.couches.zoom0()};top.frames.Num0.frames.datacarte.iconeoucadre2();" style="background-color:white; color:black;width:200px" size="1">
<option VALUE="javascript:rien()">&nbsp;Icônes &nbsp;&nbsp;&nbsp;&nbsp;</option>
<script>

SEL2=top.frames.Num0.frames.datacarte.transfertmenuicone("return ISEL")

var SELad=top.frames.Num0.frames.datacarte.transfertmenuicone3("return ISEL3")
var FDS=SELad+SEL2
document.write(FDS)
</script>
</font>
</select>
</form>

</div>




<div style="position: absolute; left: 2px; top: 78px; height: 32px;visibility:visible"><!--form NAME="menu4"-->
<b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="fico"  style="visibility: hidden;width:62px" value="f-ico" size="1" onclick="top.frames.commande1.frames.recscenario.enregfico(this.value,typeicones,tailleico)" type="button"><!--/form--></div>


<div style="position: absolute; left: 2px; top: 98px;  height: 32px;visibility:visible"><!--form NAME="menu4"--><b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="encadru"  style="visibility: hidden;width:62px" value="encadre"  size="1" onclick="top.frames.commande1.frames.recscenario.enregencadre(this.value,typeicones,tailleico)" type="button"><!--/form--></div>

<div  style="position: absolute; left: 2px; top: 118px;  height: 32px;visibility:visible"><!--form NAME="menu4"--><b><font color="#400080" face="Arial" size="2"></font></b>
<input id="iconu" style="visibility: hidden;width:62px" value="Icones" size="1" onclick="top.frames.commande1.frames.recscenario.enregicones(this.value,typeicones,tailleico)" type="button"><!--/form--></div>


<div   style="position: absolute; left: 2px; top: 138px; height: 32px;visibility:visible"><!--form NAME="menu4"--><b><font color="#400080" face="Arial" size="2"></font></b>
<input id="fondu" style="visibility: hidden;width:62px" value="fond" size="1" onclick="top.frames.commande1.frames.recscenario.enregfond(this.value,typeicones,tailleico)" type="button"><!--/form--></div>

<div style="position: absolute; left: 2px; top: 58px; height: 32px;visibility:visible">
<b><font color="#400080" face="Arial" size="2"></font></b>
<input  id="cartu" style="visibility: hidden;width:62px" value="carte" size="1" onclick="top.frames.commande1.frames.recscenario.enregcarte(this.value)" type="button"></div>

<div style="position: absolute; top: 0px; left: 2px;"><iframe style="width: 1px; height: 1px;" id="recscenario" name="recscenario" frameborder=0 src="scenario.html"></iframe></div>




<script language="javascript">
a='<form name="sel"><div style="position: absolute; left: 2px; top: 190px; visibility:visible"><textarea name="textbalise" id="textbalise" input="text" style="font-family:arial;font-size:12" rows="1" cols="60" >'
a+='""'+tixt+'""'
a+='</textarea></div></form>'
document.write(a)

function valbalise(b){
//alert("valbalise")
if(microsite>0){
var edt=top.frames.editla.location.href
edt=edt.indexOf("ecrit_hypertext.html",0)

if(edt>=0){
top.document.sel.textbalise.value=b
//document.sel.textbalise.select()
}
}
document.sel.textbalise.value=b
document.sel.textbalise.select()
}
</script>

</TD></TR></table>

<div style="position: absolute; top: 58px; left: 150px;">
<dt><b><font color="white" face="Arial" size="2">Appliquer&nbsp;</font></b></dt>
<input id="alacarte" style="visibility: hidden;width:100px" value="appliquer fond" size="1" onclick="alacarte()" type="button">
</div>
<div style="position: absolute; top: 18px; left: 260px;"><form name="menulibel">
<dt><b><font color="white" face="Arial" size="2">libélé&nbsp;</font></b></dt>
<select id="choixlibel" name="choixlibel" onchange="changelibel()"   style="background-color: white; color: black; visibility: hidden;" size="1"><option value="javascript:rien()">&nbsp;&nbsp;&nbsp;choisir
&nbsp;&nbsp;&nbsp;</option><option onclick="javascript:var lib='libel1';top.frames.commande1.frames.recscenario.vallibel(lib)">avec libellé</option><option onclick="javascript:var lib='libel0';top.frames.commande1.frames.recscenario.vallibel(lib)">sans libellé</option></select>
</form></div>

<div style="position: absolute; top: 58px; left: 260px;"><form name="menu2">
<dt><b><font color="white" face="Arial" size="2">Palette&nbsp;</font></b></dt>
<select id="choix2" name="choix2" onchange="change2()"  onmouseover="if(document.all){top.frames.Num0.frames.couches.zoom0()}" style="background-color: white; color: black; visibility: hidden;" size="1"><option value="javascript:rien()">&nbsp;&nbsp;&nbsp;choisir
&nbsp;&nbsp;&nbsp;</option><option value="javascript:colbalse=0;top.frames.Num0.frames.couches.zam3.tbase(0);top.frames.Num0.frames.couches.zam3.appliquecouleur()">5
couleurs</option><option value="javascript:colbalse=1;top.frames.Num0.frames.couches.zam3.tbase(1);top.frames.Num0.frames.couches.zam3.appliquecouleur()">dég
rouge</option><option value="javascript:colbalse=2;top.frames.Num0.frames.couches.zam3.tbase(2);top.frames.Num0.frames.couches.zam3.appliquecouleur()">dég
marron</option></select>
</form></div>

<div style="position: absolute; top: 98px; left: 150px;">
<dt><b><font color="white" face="Arial" size="2">Quantiles&nbsp;</font></b></dt>
<form NAME="menua">
<select id="choix" NAME="choix" onchange="change()" style="background-color:white; color:black;visibility:hidden" size="1" >
<option  VALUE="javascript:rien()">choix</option>
<option  VALUE="javascript:rien()">Q5</option>
<option  VALUE="javascript:rien()">Q4</option>
<option  VALUE="javascript:rien()">Q3</option>
<option  VALUE="javascript:rien()">Q2</option>
</select>
</form></div>

<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<div style="position: absolute; top: 138px; left: 150px;">
<dt><b><font color="white" face="Arial" size="2">type icône&nbsp;</font></b></dt>
<form NAME="menua22">
<select id="choix22" NAME="choix22" onchange="change22()" style="background-color:white; color:black;visibility:hidden" size="1" >
<option  VALUE="javascript:rien()">rond</option>
<option  VALUE="javascript:rien()">étoile</option>
<option  VALUE="javascript:rien()">triangle</option>
<option  VALUE="javascript:rien()">flèche</option>
</select>
</form></div>
<div style="position: absolute; top: 138px; left: 260px;">
<dt><b><font color="white" face="Arial" size="2">taille icone&nbsp;</font></b></dt>
<input id="plus" style="visibility: hidden;width:30px" value=" + " size="1" onclick="tailleico+=1;top.tailleicoplus();top.frames.Num0.frames.tab.plusmoinsadistance(1)" type="button">
<input id="moins" style="visibility: hidden;width:30px" value=" - " size="1" onclick="tailleico-=1;top.tailleicomoins();top.frames.Num0.frames.tab.plusmoinsadistance(2)" type="button">
</div>

<script language="javascript">
function rien(){}
function change() {

{
top.frames.Num0.frames.couches.frames.zam3.document.menu.choix.selectedIndex=document.menua.choix.selectedIndex
top.frames.Num0.frames.couches.frames.zam3.change()
}
document.menua.choix.selectedIndex=0
}

function changelibel(){}

function change2() {
var site2 = document.menu2.choix2.selectedIndex;
{
document.location.href=document.menu2.choix2.options[site2].value;
indexoption2=site2
}
document.menu2.choix2.selectedIndex=0
}

function change22() {
var site22 = document.menua22.choix22.selectedIndex;
{
document.location.href=document.menua22.choix22.options[site22].value;
typeicones=site22
if(site22==0){typeicones=1}
if(site22==1){typeicones=2}
if(site22==2){typeicones=3}
if(site22==3){typeicones=4}
top.frames.Num0.frames.couches.zoom.choixICONE(typeicones)
top.TYPICO(typeicones)
top.frames.Num0.frames.couches.frames.zam3.IMCX1()
}
//document.menua22.choix22.selectedIndex=0
}
</script>

<script language="javascript">
if(microsite>0){setTimeout("affichmenucarte()",500)}
top.init()
if(microsite>0){top.attribkey16aide()}
</script>
</body >
</html>