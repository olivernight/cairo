<html>
<head>

<script id="repertoiresite" language="javascript"></script>

<script language="javascript">
var repsite=top.transrepsite("return repsite")

document.getElementById("repertoiresite").src=repsite+"/permissionscartes.js?updated="+Math.random();
var topX=top.location.href
var microsite=topX.indexOf("Site-",0)

topX=topX.indexOf("encaps.",0)

var mapX=new Array()


var listboutons=new Array("cartu","iconu","fondu","f-ico","encadru")
var listboutons2=new Array("cartu","iconu","fondu","fico","encadru")
</script>
<?php
$alea=mt_rand();
echo '<script src="mapsILIADE.js?updated='.$alea.'"></script>';
?>
<script>
var initanal=0
function change_site3() {

top.frames.Num0.frames.tab.document.menu3.popup3.selectedIndex=document.menu3.popup3.selectedIndex
top.frames.Num0.frames.tab.change_site3()

var site = document.menu3.popup3.selectedIndex;
//{

window.location.href =
document.menu3.popup3.options[site].value;
ka3=site




//}
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
//alert("numerocarte= = "+document.menu.popup.options[site].id)
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
menucarte+='<option id="carte'+((i-1)/5+1)+'" VALUE="javascript:legendex='
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

<body STYLE="background-color: black" >
<!--div style="position:absolute;top:0;left:0"><img width=20 height=20 id="fcom" src="Q2.gif" ></div-->
<span id="comtra"></span>

<!----------------------------------------------------------------------------------------Menu MAPS-------------------------->
<form NAME="menu">
<p ><b><font face="Arial" size="3" color="#400080">Cartes&nbsp;&nbsp;</font></b><select title="pour re-initialiser une carte,selectionnez Maps(init) puis reselectionnez la carte" id="popup" NAME="popup"
onChange="change_site();"   style="background-color:white; color:black" size="1" >

<script>

if(microsite<0){
document.write("<option VALUE='javascript:rien2()' >&nbsp;cartes</option>")
for(i=1;i<mapX.length+1;i=i+5){

document.write('<option id="carte'+((i-1)/5+1)+'"  VALUE="javascript:legendex=')
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
document.write(';changeECHELLE()" onclick=";numerocarte='+((i-1)/5+1)+'">'+((i-1)/5+1)+'-'+mapX[i+2]+'</option>')}
}
}
</script>
</select> </p>

</form>







<script language="javascript">
top.init()
if(microsite>0){setTimeout("affichmenucarte()",500)}
if(microsite>0){top.attribkey16aide()}
</script>
</body >
</html>