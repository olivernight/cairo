<?php

?>
<html><head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
<script type="text/javascript">
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
</script>
<?php
$REP = urldecode( $_GET['REP'] );
$cible = urldecode( $_GET['cible'] );
//echo '<script  language="javascript">alert("../../'.$REP.'/'.$cible.'")</script>';
echo '<script  language="javascript" src="../../'.$REP.'/'.$cible.'"></script>';
echo '<script  language="javascript" src="../../'.$REP.'/DATA-mappocoord.js"></script>';
?>
<script type="text/javascript">


    
    //* <!--
    var urlvar=""
    
    if (window.location.search != "") {
    longueur = window.location.search.length - 1;
    
    data = window.location.search.substr(1,longueur);
    donnees = data.split("&");
    urlvar = new Array();
    urlvarnum = new Array();
    for (var i=0; i < donnees.length; i++) {
    position = donnees[i].indexOf("=");
    variable = donnees[i].substr(0,position);
    pos = position + 1;
    valeur = decodeURI(donnees[i].substr(pos,donnees[i].length));
    while (valeur.search(/\+/) != -1)
    valeur = valeur.replace(/\+/," ");
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }
    //alert(urlvarnum)
    //alert(urlvar['cible'])
     //si l'adresse de départ est "http://www.mapage.com/index.htm?nom=dupond&prenom=jean&age=50+ans", alors urlvar['nom'] vaut 'dupond', urlvar['prenom'] vaut 'jean', et urlvar['age'] vaut '50 ans'
     //-->
    </script>

<script language="javascript">


//
//var breve=new Array()                                                                    src="DATA-IcoSujet.js" 
</script>

<script language="javascript" src="../../maps.js"></script>

<script language="javascript">

titre=menuIconeEchelle
var pointeur2=0
var titre2=titre
//var breve2=breve
var titrex=new Array()
var brevex=new Array()
var TitreEtBreve=new Array()
for(i=0;i<titre.length;i++){}
var LLx //longuer du fichier de données situé dans la frame filedata
var lignedata=new Array()
var libellong,libelsource,libeldate
var rang=0
var i2=0
var z=0
var z2=0
var premierpassage=0
var nm=new Array()
var pointeur=0
var passage=0
var tramedebase=""
function rien(){}
var init1=0
var zencours=0
var zencourstemp=0
var menudata=""
var lignelibel=new Array()
var valeur
var nouvo=new Array()
var nouvo0=new Array()
for(t=0;t<13;t++){nouvo0[t]="";if(t==0){nouvo0[0]=new Array("","")};}
var depldupl=0
var depdup=0 //=1 si l'on est dans une procédure déplacement ou duplication
var depdup2=0 //=1 si l'on est dans une procédure déplacement ou duplication, dedup2 passe à 1 por décaler les rang dans le module inser(a,b)
var posTo=0
var posFrom=0
var transit=new Array()// stocke le bloc de données à déplacer ou dupliquer
var ancre
function affichemessage(){
document.getElementById("divmessagex").innerHTML="EN COURS de TRAITEMENT<br>Merci de Patienter"
document.getElementById("divduplic").style.visibility="hidden"
document.getElementById("divdeplac").style.visibility="hidden"
}
function pointancre(a){
ancre="#ancre"+a
}
function positionFrom(a){// prang de départ de déplacer

document.getElementById("divdeplac").style.visibility="visible"
document.getElementById("divduplic").style.visibility="hidden"
posFrom=a
}
function positionFromdupl(a){// prang de départ de dupliquer
document.getElementById("divduplic").style.visibility="visible"
document.getElementById("divdeplac").style.visibility="hidden"

posFrom=a
}
function positionTo(){ //rang de destination
posTo=document.getElementById("deplace").value-1
pointancre(posTo)
}
function positionTodupl(){ //rang de destination
posTo=document.getElementById("dupliqx").value-1
pointancre(posTo)
}
function dupliquex(){
depldupl=1
actualisetitre2()
pointeur2=1
affichemessage();
transit=titre2[posFrom]
var titretemp=new Array()
titretemp=titre2
//if(posTo==titre2.length-1){;alert("ici");titretemp[titretemp.length]=nouvo0}
titre2=new Array()
p=0
for(c=0;c<titretemp.length;c++){
if(c==posTo){titre2[c]=transit;p=1}
titre2[c+p]=titretemp[c]
}
opereEnDOM()
depldupl=0
}

function deplace(){
depldupl=1
actualisetitre2()
pointeur2=1
affichemessage()
transit=titre2[posFrom]
var titretemp=new Array()
var p=0
for(c=0;c<titre2.length-1;c++){ // --------------------EFFACE--le rang posFrom dans la table titre2-----------
if(c==posFrom){p=1}
titretemp[c]=titre2[c+p]
}

if(posTo==titre2.length-1){;titretemp[titretemp.length]=nouvo0}
titre2=new Array()
p=0

for(c=0;c<titretemp.length;c++){

if(c==posTo){;titre2[c]=transit;p=1}
titre2[c+p]=titretemp[c]
}
opereEnDOM()

depldupl=0
}

//-------------------------------------------------------------------------------------------------------------------------

function actualisetitre2(){
titre2=new Array()

for(i=0;i<pointeur+1;i++){
nouvo=new Array()
for(j=0;j<13;j++){
nouvo[j]=document.getElementById("textar1"+(i*13+j)).value
}
titre2[i]=nouvo
}

}








function fermermenudata(){
document.getElementById("textar1"+zencourstemp).setAttribute("style","background-color:white")
document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:hidden")
document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:105;right:32;visibility:hidden")
}

function attrib(b){ // lorsqu'on clique sur  un bouton radio du menu des données 
valeur=b
document.getElementById("textar1"+zencourstemp).setAttribute("style","background-color:white")
document.getElementById("textar1"+zencours).setAttribute("style","background-color:pink")
document.getElementById("textar1"+zencours).value=valeur
//libelé le long
window.frames.filedata.rgappel(LLx-6)
lignedata=window.frames.filedata.transbas00de0("return lignelabel");
if(lignedata[valeur]=="-99999" || lignedata[valeur]==(-99999)){lignedata[valeur]=""}
document.getElementById("textar1"+(zencours+12)).value=lignedata[valeur];
// source
window.frames.filedata.rgappel(LLx-5)
lignedata=window.frames.filedata.transbas00de0("return lignelabel")
//document.getElementById("textar1"+(zencours+1)).value=lignedata[valeur]
var sourceici=lignedata[valeur]
if(lignedata[valeur]=="-99999" || lignedata[valeur]==-99999){sourceici="source?"}
//date de validité
window.frames.filedata.rgappel(LLx-4)
lignedata=window.frames.filedata.transbas00de0("return lignelabel")
if(lignedata[valeur]=="-99999" || lignedata[valeur]==-99999){lignedata[valeur]="date?"}
document.getElementById("textar1"+(zencours+2)).value=sourceici+" "+lignedata[valeur]
}


function libel(u){ //affichage des entêtes de colonne dans le fichier de données
zencours=u
document.getElementById("textar1"+zencourstemp).setAttribute("style","background-color:white")
document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:visible")
document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:110;right:32;visibility:visible")
//if(zencours!=zencourstemp){init1=0}
if(init1==0){//récupère les entêtes de colone dans le fichier de données
window.frames.filedata.rgappel(0)
LLx=window.frames.filedata.longueurdata("return longa")+8
lignelibel=window.frames.filedata.transbas00de0("return lignelabel")
init1=1


for(i=3;i<lignelibel.length-1;i++){//affiche les entêtes en liste précédée d'un bouton radio en mode exclusif
menudata+='<dt><INPUT id="Q'+(i)+'_1" TYPE = "RADIO" NAME ="Q" VALUE = "'+i+'" onclick="javascript:valeur=this.value;parent.attrib(valeur)"><label for="Q'+(i)+'"><b style="color:red">'+i+'</b> - '+lignelibel[i]+'</label></dt>'
}
}
menudata+='<div id="divfermer" style="position:fixed;top:20;right:0;visibility:visible"><input type="button" name="datafermer" onclick="javascript:parent.fermermenudata()" value="fermer le menu de données"></input></div>'
window.frames.framedata.document.getElementById("ici").innerHTML=menudata
zencourstemp=zencours
}


function insert(a,b){  //action sur le tableau de données en mémoire : b=1 si insertion et b=-1 si effacement
pointancre(a) //défini l'ancre correpondant au point d'insertion ou de suppression
affichemessage() // affiche le message d'attente
pointeur2=1 //à l'ouverture pointeur2=0 -> l'indicateur ksup=1 et la boucle initiale d'écriture DOM crée une cas vide supllémentaire à la fin. APrès pointeur2=1->ksup=0
var z=0
var z2=0
var z3=0
var p=0
if(b==-1){z3=-1}
titre2=new Array()
for(i=0;i<pointeur+1+z3;i++){
if(i==a){
if(b==1){
titre2[a]=nouvo0;z=1;

}else{z2=1}
}
i2=i+z
nouvo=new Array()
for(t=0;t<13;t++){
nouvo[t]=document.getElementById("textar1"+((i+z2)*13+t)).value
}
if(i==(pointeur+z3)){nouvo=nouvo0}
titre2[i2]=nouvo
}
}

function opereEnDOM(){ // execute en DOM les opération réalisées sur le tableau titre2
document.getElementById("DTcache").innerHTML=""
document.getElementById("passage").innerHTML=""
ecrittramebase()
dessinetextaera()
document.getElementById("divmessagex").innerHTML=""
window.location.href=ancre//positionne les tableaux de saisie sur l'ancre correpondant au point d'insertion ou de suppression


}



function ecrittramebase(){ // boucle qui écrit k  balises <span avev id de rang k sur lesquelles se greffe l'écriture dynamique des textareas
if(pointeur2==0){ksup=1}else{ksup=0}

for(k=0;k<(titre2.length+ksup);k++){
				  var noeudmaps=document.createElement("dt") //
				  noeudmaps.setAttribute("id","span"+k)
				  document.getElementById("passage").appendChild(noeudmaps)
}
for(k=0;k<(titre2.length+ksup);k++){
				    
document.getElementById("span"+k).innerHTML='<dt style="font-family:arial;font-size:11px"><center ><a name="ancre'+k+'"></a><a id="inser'+k+'" href="javascript:a='+k+';insert(a,1);opereEnDOM()" >Insérer</a> - <a id="suppr'+k+'" href="javascript:a='+k+';insert(a,-1);opereEnDOM()">Effacer</a> - <a id="depl'+k+'" href="javascript:a='+k+';positionFrom(a);">Déplacer vers</a> - <a id="dupl'+k+'" href="javascript:a='+k+';positionFromdupl(a);">Dupliquer vers</a><br>---------------'+(k+1)+'--------------------------<br><DT id="DT1'+k+'"></DT><br></p></center></dt>'

}

}
function metBR(){ //transforme <br> en \n pour l'affichage dans l'interface de saisie (à l'ouvertrure de la page)
for(j=0;j<titre2.length;j++){
var newvlu=""
var newvlub=""
var vlu=document.getElementById("textar1"+j).value
for(i=0;i<vlu.length;i++){
if(vlu.substr(i,4)=='<br>' || vlu.substr(i,4)=='<BR>'){newvlu+="\n";i=i+3}else{newvlu+=vlu.substr(i,1)}
}
document.getElementById("textar1"+j).value=newvlu
}
}


function supprimCRLF(){ // transforme \n en <br>  (commandé par le bouton 'valider')
for(j=0;j<titre2.length;j++){
var newvlu=""
var newvlub=""
var vlu=document.getElementById("textar1"+j).value// titre
for(i=0;i<vlu.length;i++){

if(vlu.substr(i,1)!='\n'){newvlu+=vlu.substr(i,1)}else{newvlu+="<br>"}
}
document.getElementById("textar1"+j).value=newvlu

}
document.getElementById("submit").style.visibility="visible"
}



// à l'ouverture de la page : écriture d'une trame de base sur laquelle va se greffer l'action DOM de création des textarea et leur gestion (effacer  et insérer)
document.write('<table><tr><td><div id="divfiledata2" style="position:fixed;top:102px;left:42px;visibility:hidden"><img width="310" height="350" src="Image2.gif"></div><div id="divfiledata" style="position:fixed;top:100px;left:40px;visibility:hidden"><iframe id="framedata" name="framedata" style="background-color: #F9FAFD;opacity:1"  src="vide.htm" width="310" height="350" ></iframe></div></td><td><div id="divdeplac" style="position:fixed;top:200;left:120;visibility:hidden">déplacer vers n°<input id="deplace" type="text" style="width:40px" name="deplace" value="" title=""><input id="OKdeplace" type="button"  name="OKdeplace" value="OK" onclick="positionTo();deplace()" title=""></div></td><td><div id="divduplic" style="position:fixed;top:240;left:120;visibility:hidden">dupliquer vers n°<input id="dupliqx" type="text" style="width:40px" name="dupliqx" value="" title=""><input id="OKduplique" type="button"  name="OKduplique" value="OK" onclick="positionTodupl();dupliquex()" title=""></div></td><td><div style="position:fixed;top:20;left:10;visibility:visible"><input type="button" name="essaibr" onclick="javascript:supprimCRLF()" value="Valider" title="transforme les sauts de ligne en balise <br>"><br><p id="divmessagex" style="font-size:36;visibility:visible"></p></div><form  method="post" action="MANAGERIco.php?REP='+urlvar["REP"]+'&cible='+urlvar["cible"]+'" name="saisie1"><div style="position:fixed;top:32;left:10;visibility:hidden"><input id="submit" type="submit"  name="submit" value="enregister" title="enregistre les données dans le fichier breves.js"></div><span id="passage">')
for(k=0;k<(titre2.length+1);k++){
document.write('<dt style="font-family:arial;font-size:11px" id="span'+k+'"><center ><a name="ancre'+k+'"></a><a id="inser'+k+'" href="javascript:a='+k+';insert(a,1);opereEnDOM()" >Insérer</a> - <a id="suppr'+k+'" href="javascript:a='+k+';insert(a,-1);opereEnDOM()">Effacer</a> - <a id="depl'+k+'" href="javascript:a='+k+';positionFrom(a);">Déplacer vers</a> - <a id="dupl'+k+'" href="javascript:a='+k+';positionFromdupl(a);">Dupliquer vers</a><br>---------------'+(k+1)+'--------------------------<br><DT id="DT1'+k+'"></DT><br></p></center></dt>')
}
document.write('</span><dt  id="DTcache" style="visibility:hidden"></form></dt>')

// à l'ouverture de la page : création des textaeras avec dedans les données texte de breve.js
dessinetextaera()
//
function dessinetextaera(){//création des textaeras avec dedans les données du temporaires titre2 et breve2 
var ksup
pointeur=0
if(pointeur2==0){ksup=1}else{ksup=0}
for(k=0;k<(titre2.length+ksup);k++){		
for(i=0;i<13;i++){		   
				  
				  
				  var noeudmaps=document.createElement("dt") 
				  document.getElementById("DT1"+k).appendChild(noeudmaps);
				 if(i==12){var noeudmaps=document.createElement("textarea")} else {var noeudmaps=document.createElement("input") }
				    var z=(k*13+i)
				    var nm="N["+z+"]" 
				
				  noeudmaps.setAttribute("name",nm)
				  noeudmaps.setAttribute("id","textar1"+z)
				  if(i==0){noeudmaps.setAttribute("onclick","javascript:document.getElementById(this.id).setAttribute('style','background-color:red');zencours="+z+";libel("+z+")")}
				  noeudmaps.setAttribute("rows",3)
				  noeudmaps.setAttribute("cols",60)
				  noeudmaps.setAttribute("style","visibility:visible")
				  if( i==4 || i==5 || i==6 || i==7 || i==8 || i==10 || i==11){
				  noeudmaps.setAttribute("style","visibility:hidden")
				 document.getElementById("DTcache").appendChild(noeudmaps)
				  }else{
				  document.getElementById("DT1"+k).appendChild(noeudmaps);
				  }
				  				  
			var textarecup=titre2[k]		
			if(k!=(titre2.length)){
			var xt=document.createTextNode(textarecup[i]).data
			
			if(i==0 & depldupl==0){
			var xt1=textarecup[0];var xt=xt1[0]
			if(xt>0){}else{xt=""}
			}
			}
			else
			{xt=""}// dernier vide 
				if(i==12){if(k!=(titre2.length)){xt=document.createTextNode(textarecup[i]);document.getElementById("textar1"+z).appendChild(xt)}else{xt=""}}
				else
				{  document.getElementById("textar1"+z).setAttribute("value",(xt))}
}				   
				 
pointeur+=1  	  
}
pointeur-=1

}
document.write('</td></tr></table>')
//metBR()
</script>


<head>
<body style="font-family:arial;font-size:13px">



<script language="javascript">
document.write('<div  style="visibility:hidden" ><iframe id="filedata" name="filedata"  src="../../'+urlvar["REP"]+'/'+mappocoord[0]+'"></iframe></div>')
</script>
</body>
</html>