<?php
//PageCarto.fr

// FabricModulePageCarto
// entetes de fichiers


//au dessus des données de la carte
$hautvertic='<?xml version="1.0"?>
<!DOCTYPE html      PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
création Cité Publique : cite.publique@wanadoo.fr
auteur : Hervé Paris - 2009-2011
Licence GNU GPL
-->
<html id="html balise" xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <title>PageCarto</title>
   <meta http-equiv="Content-Type" content="text/HTML; charset=utf-8"  />
 <script language="javascript" ><![CDATA[ 
	  var listeLegNappes=new Array();
	  var lang="Fr"
	  var DataUnion=new Array();
]]></script>
<script language="javascript" src="listeLegNap.js"><![CDATA[]]></script>  
<script language="javascript" src="lang.js"><![CDATA[]]></script>  
<script language="javascript" src="DATA-Union.js?updated=1234567890"><![CDATA[]]></script>   
 
<script type="text/javascript" ><![CDATA[
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
    while (valeur.search(/@@+/) != -1)
    valeur = valeur.replace(/@@+/," ");
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }
	var visiblebalise=urlvar[\'balisevisible\']
var format=urlvar[\'format\']
var fromgeojson=0;
]]></script>
<script language="javascript" src="azimut.js?updated=1234567890"><![CDATA[ // données 
]]></script>
<script id="section1" type="text/javascript" src="section1.js?updated=1234567890" ><![CDATA[
]]></script>
<script  type="text/javascript" src="zoomW3C-vertic.js?updated=1234567890" ><![CDATA[
]]></script>

<script language="javascript" src="principal.js?updated=1234567890"><![CDATA[ // données 
]]></script>
<script language="javascript" ><![CDATA[ 
base00principal=base00
var base00=new Array()
var FS=0
]]></script>
<script language="javascript" src="complementaire.js"><![CDATA[ // données 
]]></script>

<script language="javascript" src="parametres.js?updated=1234567890"><![CDATA[ // données 
]]></script>
<script language="javascript" ><![CDATA[ 
var longeurligneprincipal=base00principal[0].length-1
if(base00[0]){
for(i=0;i<base00principal.length;i++){
for(j=3;j<base00[i].length;j++){
base00principal[i][base00principal[i].length]=base00[i][j]
}
}
}
base00=new Array()
base00=base00principal
base00principal=new Array()


//DECALAGE DES COLONNES D\'EXCEPTTION issues de complémentaire.js dans le calcul des données de synthèse
var exceptionColArray=exceptionColArraySujet
for(k=0;k<exceptionColArrayOther.length;k++){
exceptionColArray[exceptionColArray.length]=exceptionColArrayOther[k]+longeurligneprincipal-2
}

]]></script>
<script language="javascript" src="DATA-IcoSujet.js?updated=1234567890"><![CDATA[ //  menu icones
]]></script>
<script language="javascript" src="DATA-Sujet.js?updated=1234567890"><![CDATA[ // menus graphiques
]]></script>
<script language="javascript" ><![CDATA[ 
var menuIconeSup=new Array()
var menuOther=new Array()
]]></script>

<script language="javascript" src="DATA-IcoOther.js?updated=1234567890"><![CDATA[ //  menu icones
]]></script>
<script language="javascript" src="DATA-Other.js?updated=1234567890"><![CDATA[ // menus graphiques
]]></script>

<script language="javascript" ><![CDATA[ 
// ajout menu icone Other à menu Icone Sujet
var longueurMenuIcoSujet=menuIconeEchelle.length-1
for(i=0;i<menuIconeSup.length;i++){
for(j=0;j<menuIconeSup[i][0].length;j++){// décallage des rangs de colonne
menuIconeSup[i][0][j]=menuIconeSup[i][0][j]+longeurligneprincipal-2
}
menuIconeSup[i][10]+=1000
if(menuIconeSup[i][3].length>2){if(menuIconeSup[i][3][2]!=-99999){menuIconeSup[i][3][2]+=(longeurligneprincipal-2)}}
menuIconeEchelle[menuIconeEchelle.length]=menuIconeSup[i]

}

// ajout menu graphique Other à menu graphique Sujet
var longueurMenuGraphiqueSujet=menuSujet.length-1
for(i=0;i<menuOther.length;i++){
for(j=0;j<menuOther[i][0].length;j++){// décallage des rangs de colonne
menuOther[i][0][j]=menuOther[i][0][j]+longeurligneprincipal-2
}
menuOther[i][10]-=100

menuSujet[menuSujet.length]=menuOther[i]

}

function retournelongueurIcoSujet(){
return longueurMenuIcoSujet
}
function retournelongueurGraphiqueSujet(){
return longueurMenuGraphiqueSujet
}
function retournelongueurPrincipal(){
return longeurligneprincipal
}
]]></script>
<script language="javascript" ><![CDATA[ 


var listeAddContoursSVG=new Array()

]]></script>
<script language="javascript" src="listeAdditifContoursSVG.js?updated=1234567890"><![CDATA[ // données 
]]></script>
<script language="javascript" src="section2.js?updated=1234567890"><![CDATA[ // données 
]]></script>
<style type="text/css">


	/* CSS for the demo. CSS needed for the scripts are loaded dynamically by the scripts */




	#box3{
		
		width:30px;
		
	
		/*background-color:#FFF;	*/
		float:left;
		
		/*border:1px dotted #000;*/
		padding:0px;
		margin-left:0px;
		/*
	filter:alpha(opacity=70);
	opacity: 0.7;
	*/
	background-image:url(\'haut_box.png\');
	background-repeat: repeat-x;
	}
	

	</style>	
  </head>
  <body id="bodyx" style="font-family:arial;font-size:11px;background-color:white" >
  <iframe name="frameContour" id="frameContour" style="visibility:hidden"  />
  <script ><![CDATA[

  ]]></script>  
  <div id="divcompage" style="position:absolute;top:-5px;left:20px;opacity:0.7;z-index:5000;display:none"></div>
<p id="pinsertici" style="position:absolute;top:-33px;left:20px"><table id="Tinsertici"  width=\'370\' border="0" style="color:#666666"><tbody><tr height="25px"><td > </td></tr><tr><td id="insertici" style="line-height: 1.2;">Exemple</td></tr></tbody></table></p>

<div id="divMenuIco" style="position:absolute;top:70px;left:20px">
<form id="menu" NAME="menu">
<select title="choisissez une variable" id="popup" name="popup" onchange="setTimeout(\'changeVariable()\',15)"
  style="background-color:#EFF2F9;border:0.5px dotted gray; color:gray;width:200px" size="1" >
  
  </select>

</form>
</div>

  
<div id="divMenuHisto" style="position:absolute;top:70px;left:20px">
<form id="menu1" NAME="menu1">
<select title="choisissez un graphique" id="popup1" name="popup1" onchange="changeGraphique()"
  style="background-color:#EFF2F9;border:0.5px dotted gray; color:gray;width:200px" size="1" >
  
  </select>

</form>
</div>



<script ><![CDATA[ // calcule les menus de données icones et graphique
adoption()

function rien(){}

function CacheNappes(){
for(i=0;i<listeLegNappes.length;i++){

document.getElementById(listeLegNappes[i][0]).setAttribute("visibility","hidden")
}
}


var rechOui=0
function recherche(a){

var j=0
var resultici=\'<div style="background-color:white;color:blue;position:fixed;width:153px" ><center><b><a href="javascript:fermerrecherche()">Fermer la liste </a></b></center></div><br/><br/><span style="position: relative;top:-5px;font-size:9px"><u><b><center>Résultat de la recherche</center></b></u></span>\'
for(i=1;i<base00.length-9;i++){
var nom= base00[i][1]//document.getElementById(i).getAttribute("title")
if(nom.toLowerCase().indexOf(a.toLowerCase(),0)>-1){
j+=1
			var codeIns=base00[i][2]+""
			var longcodeIns=(base00[parseInt(base00.length/2)][2]+"").length

//if(codeIns.length<=3){
//if(base00[i][4]!=-99999){
if(codeIns.length<=longcodeIns){
resultici+=\' - <a href="javascript:rien()" onclick="rechOui=1;NoDatx=\'+i+\';marqueurcarte();calculHisto(NoDatx,iSujet)" style="color:blue;font-size:9px">\'+nom+\'</a><br/>\'
}
}
}
document.getElementById("resultats").innerHTML=resultici

//document.getElementById("resultats").setAttribute("style","width:200px;border: 1px dotted #EB3B38;background-color:white ")
//if(j>7){
document.getElementById("resultats").setAttribute("style","width:200px;height:103px;overflow-y:scroll;border: 1px dotted #EB3B38;background-color:white ")
//}
rechOui=1
}
function fermerrecherche(){

document.getElementById("rech").value=""
document.getElementById("resultats").setAttribute("style","")
document.getElementById("resultats").innerHTML=""
rechOui=0
}

]]></script>

<div id="divlegende" style="position:absolute;top:70px;left:900px;z-index:0;background-color:white;border:0px solid gray;height:193px;font-size:9px">
<table     style="border:0px solid;height:193px"><tr><td valign="bottom" >

<table     style="border:0px solid"><tr><td valign="bottom"  >
<table id="tableg1"  width="210px" style="background-color:#E4E4E4;opacity:0.8"  >
<tr  style="background-color:white">
<td style="border:0.5px solid gray" valign="bottom" >
<!-- libéllé donnée icones -->
<table cellpadding="0" cellspacing="0" valign="middle"><tr  valign="middle"><td  valign="middle"><b id="rondleg">Légende des graphiques ponctuels</b></td><td style="width:115px;text-align:right" valign="middle"> <b>   <span style="color:red">log </span></b></td><td  valign="middle"><input checked="false" value="0" type="radio" id="checklog" onclick="palico=palicotemp0;pal=palicotemp0;cat=caticotemp0;dernierecouche=1;applicLog()" /></td></tr></table>
</td>
</tr>


<tr style="background-color:white">
<td id="legicotablibel" style="border:0.5px solid gray">
<!-- libéllé donnée icones -->

</td>
</tr>
<tr style="background-color:white">
<td id="legicotab" style="border:0.5px solid gray">
<!-- valeurs légende icones -->

</td>
</tr>

</table>

</td>
<!--tr height="20px"><td ></td-->
<!--/tr-->
<td valign="top" >


<table id="tableg2" width="210px" style="background-color:#E4E4E4;opacity:0.8">
<tr style="background-color:white">
<td style="border:0.5px solid gray" valign="bottom" >
<!-- libéllé donnée fond  -->
<b id="fondleg">Légende du fond de carte</b>
</td>
</tr>
<tr style="background-color:white">
<td id="legfondtablibel" style="border:0.5px solid gray">
<!-- libéllé donnée fond  -->

</td>
</tr>

<tr style="background-color:white">
<td id="legfondtab" style="border:0.5px solid gray">
<!-- valeur légende  fond-->

</td>
</tr>

</table>

</td></tr></table>

</td></tr></table>
</div>





<div id="divrecherche" style="position:absolute;top:70px;left:600px;z-index:2000;background-color:transparent;z-index:111000">
<div id="divrecherche2">
recherche par nom<br/>
<input id="rech" type="text" style="background-color:#EFF2F9;border:0.5px dotted gray; color:gray;width:157px"  title="saisissez un nom ou cliquez à vide pour avoir toute la liste"  /><input type="button" onclick="recherche(document.getElementById(\'rech\').value)" value="OK"  title="saisissez un nom ou cliquez à vide pour avoir toute la liste" />
<div id="resultats"    style=";background-color:white"></div>
</div>
</div>

<div id="divMenuQuantiles" style="position:absolute;top:70px;left:150px">
<form NAME="menu2">
<b><font  face="Arial" size="3" color="#400080"></font></b><select title="choix des quantiles (le nombre 2 est choisi par défaut)" id="popup2" name="popup2"
  style="background-color:#EFF2F9;border:0.5px dotted gray; color:gray;width:80px" size="1" onchange="javascript:quant=1;cat=document.getElementById(\'popup2\').selectedIndex;if(dernierecouche==1){caticotemp0=cat}else{catfondtemp0=cat};effacemaqueurcarte();effacemaqueurcarte();couche(dernierecouche);initselect=0;marqueurcarte();document.getElementById(\'popup2\').selectedIndex=cat">
<option VALUE="javascript:rien2()" >Quantiles</option>
<option > 1 Quantile </option>
<option > 2 Quantiles</option>
<option > 3 Quantiles</option>
<option > 4 Quantiles</option>
<option > 5 Quantiles</option>



</select> 

</form>
</div>

<div id="divMenuPalette" style="position:absolute;top:70px;left:320px">
<form NAME="menu3">
<b><font  face="Arial" size="3" color="#400080"></font></b><select title="choix de la palette (la palette 6 couleurs est choisie par défaut)" name="popup3" id="popup3"
  style="background-color:#EFF2F9;border:0.5px dotted gray; color:gray;width:80px" size="1" onchange="javascript:pal=document.getElementById(\'popup3\').selectedIndex;if(dernierecouche==1){palicotemp0=pal;ChangePalette(pal)}else{palfondtemp0=pal};effacemaqueurcarte();couche(dernierecouche);initselect=0;marqueurcarte();document.getElementById(\'popup3\').selectedIndex=pal">
<option VALUE="javascript:rien2()" >palettes</option>
<option > 5 couleurs </option>
<option > marron</option>
<option > rouge</option>
<option > 5 couleurs inversées</option>



</select> 


</form>
</div>
<div id="divMenuRadio" style="position:absolute;top:70px;left:460px">
<form name="menu4">
<input id="radio1" type= "radio" name="couche"   style="position:relative;bottom:-3px" onclick="palico=palicotemp0;pal=palicotemp0;cat=caticotemp0;dernierecouche=1;boutonprop(1)" /> Ronds   <span id="radioprop" title="Sélectionné=ronds proportionnels / Non Sélectionné=non proportionnels">: P o/n<input id="prop" type= "radio" name="Xprop"  style="position:relative;bottom:-3px"  onclick="applicProp()"  /></span><br/>
<input id="radio2" type= "radio" name="couche"  style="position:relative;bottom:-3px" onclick="pal=palfondtemp0;cat=catfondtemp0;dernierecouche=2;if(initaff==2){initaff=1};;boutonprop(0)" /> Fond de carte

</form>
</div>


<div id="PClogo2" style="position:absolute;top:8px;left:390px;;background-color:#E4E4E4"  onclick="open(\'http://altko.org/PageCartoGM/PageCarto/IndexPageCarto.html\')"><table width="130px"  ><tr height="55px"><td></td></tr></table></div>
<div id="PClogo1" style="position:absolute;top:8px;left:442px;;background-color:transparent" >

<svg id="bouton2" 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
xmlns:xul="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"

   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://web.resource.org/cc/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"

     width="80"
   height="80"
   >
    <metadata
     id="metadata7">
    <rdf:RDF>

      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>

<defs>

<radialGradient id="grad3" >
<stop class="begin" offset="0" style="stop-color:#58BDCF"/>

<stop class="end" offset="1" style="stop-color:white"/>
</radialGradient>
</defs>
<g>
<clipPath id="chemindecoupe">
<circle  cx="40" cy="40" r="35" />
</clipPath>



<rect x="0" y="0" width="80" height="80" id="rectmove2" style=" fill: url(#grad3) ; fill-opacity: 1; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(0.5 0 0 0.5 -3 5)"  clip-path="url(#chemindecoupe)"  onclick="open(\'http://altko.org/PageCartoGM/PageCarto/IndexPageCarto.html\')"  ></rect>
</g>
</svg> 
<div style="position:relative;top:-72px;left:-37px;" >
<b><span style="font-size:25px;color:gray;opacity:1" ></span></b>

</div >
<div style="position:relative;top:-72px;left:-37px;cursor:pointer ;" onclick="open(\'http://altko.org/PageCartoGM/PageCarto/IndexPageCarto.html\')">
<b><span style="font-size:20px;color:#9EA1A3;opacity:1">pag</span><span style="font-size:20px;color:white;opacity:0.9">eCa</span><span style="font-size:20px;color:#9EA1A3;opacity:1">rto</span></b>
</div >
</div >

<div id="panelCarte" style="position:absolute; top:300px;left:20px">
<!-- début de la scetion reprise du svg ////////////////:::::::::-->

<svg id="gene"  onmousemove="javascript:svggeneral()"
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
xmlns:xul="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"

   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://web.resource.org/cc/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"

 

   xmlns:sodipodi="http://inkscape.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
  

>


<script id="scrpt"  language="javascript" ><![CDATA[
var brsrici="ei"


function affichN(){
/*
//brsrici=document.getElementById("totalsvg").getAttribute("name")
if(brsrici=="ei"){window.SVGaffichN()}else{

}
*/
}
var strokewidthpas
var strokepas
var opacpas="1"
function passon(a){
strokepas=a.getAttribute(\'stroke\')
a.setAttribute(\'stroke\',\'navy\');
//opacpas=a.getAttribute(\'fill-opacity\')
a.setAttribute(\'fill-opacity\',\'0.5\')
passonnuage(a.id)
}
function passout(a){
a.setAttribute(\'fill-opacity\',opacpas)
a.setAttribute(\'stroke\',strokepas);
passoutnuage(a.id)  
}
function svggeneral(){

}
function svgdown(a){

}
function svgclick1(){

calculHisto(NoDatx,iSujet)
}

function svgclick2(){

calculHisto(NoDatx,iSujet)


}
function svgout(){

}
]]></script>

  <metadata
     id="metadata7">
    <rdf:RDF>

      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>

<defs>
    <filter
       inkscape:collect="always"
       id="filter10175">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="1.0006153"
         id="feGaussianBlur10177" />
    </filter>
<radialGradient id="grad1" >
 <stop class="begin" offset="0" style="stop-color:#5555AA"/>

 <stop class="end" offset="1" style="stop-color:white"/>
</radialGradient>
</defs>

<g space="preserve" opacity="1" transform="matrix(0.8, 0, 0, 0.8, -20, 20)" onmouseout="svgout()" onmousemove="svggeneral()" onmousedown="javascript:svgdown()" name="ns" id="totalsvg">



<rect y="-400" x="-350" height="1250" width="1550" id="rectmove" style="fill: url(#grad1) ; fill-opacity: 1; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0.5; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;"  transform="matrix(1, 0, 0, 1, 0, 60)" ></rect>



	 
	 
<g space="preserve" transform="matrix(0.85, 0, 0, 0.805498, 101, -148)"  id="insert">
	
 

</g>
<g id="dragin"  transform="matrix(1, 0, 0, 1, 0,0)">
<rect y="-400" x="-350" height="1250" width="1550" id="rectmovex" style="fill:transparent; fill-opacity: 0; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0.5; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" onclick="javascript:NoDatx=0;" transform="matrix(1, 0, 0, 1, 0, 60)" ></rect>


<image opacity="0" href="transparent.png" height="0" width="0" y="-60" x="0" transform="matrix(1, 0, 0, 1, 0, 0)" id="imagesfond1"/>

<image opacity="0" href="transparent.png" height="0" width="0" y="-60" x="0" transform="matrix(1, 0, 0, 1, 0, 0)" id="imagesfond2"/>

<!-- début des données de carte : on commence par les aires et on fini avec les npath -->

';

// en dessous des données de la carte
$basvertic='

<!--fin des des données de carte : on ne met pas les légendes -->

<!--Cercle de recherche-->
<circle  r="0" cy="0" cx="0" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt"  stroke-width="2.5px" stroke="blue" fill="none" id="cercleR"></circle>

</g>
<g id="images1" transform="matrix(1 0 0 1 0 0)" xml:space=\'preserve\'>
<image id="images11" transform="matrix(1 0 0 1 0 0)" x="0" y="-60" width="0" height="0" xlink:href="transparent.png"  opacity="0"   onmousedown="javascript:svgdown()"  onmousemove="svggeneral()"  onmouseout="svgout()" ></image>

<image id="images12" transform="matrix(1 0 0 1 0 0)" x="0" y="-60" width="0" height="0" xlink:href="transparent.png"  opacity="0"   onmousedown="javascript:svgdown()"  onmousemove="svggeneral()"  onmouseout="svgout()"></image>

</g>

	 </g>




<script><![CDATA[
CacheNappes()
CREATEX()



]]></script>


</svg>
</div>


<div id="effaffcouleurcarte" style="position:absolute; font-family:arial;font-size:10px;font-weight:bold;opacity:0.5">
<a href=\'#\' onclick=\'document.location.reload();return(false)\' ><b id="Reset">Rafraîchir</b></a>&nbsp;&nbsp;
<a href=\'#\' onclick=\'ouvraide()\'  ><b id="ReadMe">   Lisez moi      </b></a>&nbsp;&nbsp;
<a href="javascript:effaceIcone()" id="effRond">Efface les ronds</a>&nbsp;&nbsp;<a id="effFond" href="javascript:fondefface()">Efface les couleurs de fond</a>

</div>
<!-- fin de la section reprise du SVG ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div id="panelBoutons" style="position:absolute; ">


<svg id="bouton1" 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
xmlns:xul="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"

   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://web.resource.org/cc/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"

   width="170"
   height="40"

>
 <metadata
     id="metadata7">
    <rdf:RDF>

      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>

<defs>
<radialGradient id="grad2" >
<stop class="begin" offset="0" style="stop-color:#5555AA"/>

<stop class="end" offset="1" style="stop-color:white"/>
</radialGradient>
</defs>

<g space="preserve" opacity="1" transform="matrix(0.7, 0, 0, 0.7, 0, 0)"  name="ns1" >


<!-- liste des BOUTONS DE COMMANDE DE LACARTE  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<g space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)"  id="insert1"></g>

<!-- Bouton ZOOM PLUS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<rect rx="5"  y="5" x="5" height="22" width="22" id="rectmove1" style="fill: url(#grad2) ; fill-opacity: 0.5; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(1, 0, 0, 1, 0, 0)"  onclick="zoom(1.2);zoom(1)"></rect>
<circle title="Zoom PLUS"  r="10" cy="11" cx="12" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b1" onclick="zoom(1.2);zoom(1)" ><title id="x30">Zoom PLUS</title></circle>
<g id="PlusSign" title="Zoom PLUS" transform="matrix(0.18, 0, 0, 0.18, 3, 1.7)" >
<path id="plusS" fill="white" d="M 60,40 L 90,40 L 90,60 L 60,60 L 60,90 L 40,90 L 40,60 L 10,60 L 10,40 L 40,40 L 40,10 L 60,10 L 60,40 L 60,40 z "  onclick="zoom(1.2);zoom(1)" /><title id="x31">Zoom PLUS</title>
</g>
<!-- ZOOM MOINS  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<rect rx="5"  y="5" x="30" height="22" width="22" id="rectmove1" style="fill: url(#grad2) ; fill-opacity: 0.5; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(1, 0, 0, 1, 0, 0)" onclick="zoom(0.833333);;zoom(1)"  ></rect>
<circle title="Zoom MOINS"  r="10" cy="11" cx="37" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b2" onclick="zoom(0.833333);zoom(1)" ><title id="x32">Zoom MOINS</title></circle>
<g id="MinusSign" title="Zoom MOINS" transform="matrix(0.17, 0, 0, 0.25, 28.5, -29.2)">
<path id=" MoinsS" fill="white" d="M 10,150 L 90,150 L 90,170 L 10,170 L 10,150 z "  onclick="zoom(0.833333);zoom(1)" /><title id="x33">Zoom MOINS</title>
</g>		
	
<!-- Bouton zoom initial ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<rect rx="5"  y="5" x="57" height="22" width="22" id="rectmove1" style="fill: url(#grad2) ; fill-opacity: 0.5; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(1, 0, 0, 1, 0, 0)"  onclick="zoomZ()"></rect>
<circle title="Zoom Zero"  r="10" cy="11" cx="62" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b1" onclick="zoomZ()" ><title>Zoom Zero</title></circle>
<circle title="Zoom Zero"  r="7" cy="11" cx="62" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="white" id="b1" onclick="zoomZ()" ><title>Zoom Zero</title></circle>	
<circle title="Zoom Zero"  r="3" cy="11" cx="62" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b1" onclick="zoomZ()" ><title>Zoom Zero</title></circle>		
	
	
	
</g></svg>










<div id="panelBoutons2" style="position:absolute; top:0px;left:54px">
<!-- SVG cadre des BOUTONS DE COMMANDE DE LACARTE ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<svg id="bouton1" 
xmlns="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
xmlns:xul="http://www.mozilla.org/keymaster/gatekeeper/there.is.only.xul"

   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://web.resource.org/cc/"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"

   width="170"
   height="40"

>
 <metadata
     id="metadata7">
    <rdf:RDF>

      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>

<defs>
<radialGradient id="grad2" >
<stop class="begin" offset="0" style="stop-color:#5555AA"/>

<stop class="end" offset="1" style="stop-color:white"/>
</radialGradient>
</defs>

<g space="preserve" opacity="1" transform="matrix(0.7, 0, 0, 0.7, 0, 0)"  name="ns1" >


<!-- liste des BOUTONS DE COMMANDE DE LACARTE  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<g space="preserve" transform="matrix(1, 0, 0, 1, 0, 0)"  id="insert1"></g>


<!-- Boutons agrandir icones  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<rect rx="5"  y="5" x="5" height="22" width="22" id="rectmove1" style="fill: url(#grad2) ; fill-opacity: 0.5; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(1, 0, 0, 1, 0, 0)"  onclick="tailleicoplus()"></rect>
<circle  r="10" cy="11" cx="12" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b21" onclick="tailleicoplus()" ><title id="x20">agrandir les graphiques ponctuels</title></circle>
<g id="PlusSign" title="agrandir les graphiques ponctuels" transform="matrix(0.18, 0, 0, 0.18, 3, 1.7)" >
<path id="plusS" fill="yellow" d="M 60,40 L 90,40 L 90,60 L 60,60 L 60,90 L 40,90 L 40,60 L 10,60 L 10,40 L 40,40 L 40,10 L 60,10 L 60,40 L 60,40 z "  onclick="tailleicoplus()" title=""  /><title id="x21">agrandir les graphiques ponctuels</title>
</g>
	
<!-- réduire icones  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<rect rx="5"  y="5" x="32" height="22" width="22" id="rectmove1" style="fill: url(#grad2) ; fill-opacity: 0.5; fill-rule: evenodd; stroke: rgb(0, 0, 0); stroke-width: 0; stroke-linecap: butt; stroke-linejoin: miter; stroke-opacity: 1;" transform="matrix(1, 0, 0, 1, 0, 0)" onclick="tailleicomoins()"  ></rect>
<circle title="réduire les graphiques ponctuels"  r="10" cy="11" cx="39" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt" stroke-width="1px" stroke="gray" fill-rule="evenodd" fill-opacity="0.80" fill="#3D93C7" id="b22" onclick="tailleicomoins()" ><title id="x22">Réduire la taille des graphiques cercles</title></circle>
<g id="MinusSign" title="réduire les graphiques ponctuels" transform="matrix(0.17, 0, 0, 0.25, 30.5, -29.2)">
<path id="MoinsS" fill="yellow" d="M 10,150 L 90,150 L 90,170 L 10,170 L 10,150 z "  onclick="tailleicomoins()" /><title id="x23">Réduire la taille des cercles</title>
</g>

<!-- efface carte  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


	
</g> <!--  Fin de liste des BOUTONS DE COMMANDE DE LACARTE  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</svg> <!-- FIN du SVG cadre des BOUTONS DE COMMANDE DE LACARTE  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
</div>
</div>
<div id="innerhisto" class="dragableElementxx" style="position:absolute;top:420px;left:650px;background-color:#d7d7d7;z-index:10000000" title=""></div>

<script type="text/javascript" ><![CDATA[

]]></script>
<script type="text/javascript" src="section3.js?updated=1234567890"><![CDATA[

]]></script>
<div id="divapropos" style="position:absolute;top:90px;left:870px; background-color:white;height:580px;width:200px;overflow:scroll;z-index:120000;padding:3px;display:none">
<div style="background-color:white;height:15px; width:187px;position:fixed;z-index:7200; margin-top:-3px"><center><a href="javascript:fermaide()">Fermer</a></center></div>
<div style="text-align: left;position:relative;top:25px">
<center style="font-family: Calibri;">PageCarto est une
création<br />
&nbsp;<a href="http://www.citepublique.fr/"
 target="_blank">Cité Publique</a> <br/>
sous licence <a
 href="../COPYING GNU.txt"
 target="_blank">GNU GPL</a> <span
 style="font-style: italic;"><br/>
(lisez la licence en cliquant sur le lien).<br/>
<small><small>contact : <a
 href="mailto:cite.publique@wanadoo.fr">cite.publique@wanadoo.fr</a></small></small></span></center>
<big style="font-family: Calibri;"><br />
</big>
<hr style="width: 100%; height: 2px; font-family: Calibri;" /><big
 style="font-family: Calibri;"><small><small>
<center><span
 style="font-weight: bold; color: rgb(51, 102, 102);"><big>Comment
utiliser cette interface ?</big></span><br />
<br />
</center>
<big>Vous disposez de trois
solutions pour afficher des données sur la carte : <br />
<br />
<span style="font-weight: bold; color: rgb(51, 102, 102);">I
- le mode hypertexte</span>&nbsp;</big></small></small></big><big
 style="font-family: Calibri;"><small><small><big>,&nbsp;
dans lequel il suffit de cliquer
sur les liens pour que les données présélectionnées s\'affichent sur la
carte.</big></small></small></big><big
 style="font-family: Calibri;"><small><small><big>
<span style="font-style: italic;"><br />
<br />
(Pour afficher
l\'hypertexte, sélectionnez l\'onglet "Texte" </span></big></small></small></big><big
 style="font-family: Calibri; font-style: italic;"><small><small><big>en
haut à droite</big></small></small></big><big
 style="font-family: Calibri; font-style: italic;"><small><small><big>)</big></small></small></big><br />
<br />
<big style="font-family: Calibri;"><small><small><big><span
 style="font-weight: bold; color: rgb(51, 102, 102);">II
- le mode fiche</span> ou fiche signalétique d\'un territoire.</big></small></small></big><span
 style="font-style: italic;"><br />
</span><span style="font-family: Calibri;"><span
 style="text-decoration: underline;">Qu\'est-ce
que le Mode Fiche? </span><br />
La fiche présente une sélection de données pour chaque aire de la carte
(pays région, commune...) qui s\'inscrivent dans la fiche lorsque vous
cliquez sur une aire de la
carte ou lorsque vous sélectionnez une aire au moyen de la "recherche
par nom".</span><big style="font-family: Calibri;"><small><small><big><br />
</big></small></small></big><big
 style="font-family: Calibri;"><small><small><big><span
 style="font-style: italic;"><br />
(Pour afficher la Fiche, sélectionnez l\'onglet "Fiche" </span></big></small></small></big><big
 style="font-family: Calibri; font-style: italic;"><small><small><big>en
haut à droite</big></small></small></big>). <span
 style="font-style: italic;"><br />
</span><big style="font-family: Calibri;"><small><small><big><br />
Vous pouvez créer une carte avec les variables de la fiche dont le
libellé est de couleur bleu
(lien hypertexte) en cliquant sur ce libellé après avoir préalablement
choisi
le mode d\'affichage : sous forme d\'icônes ponctuels &nbsp;(ronds
proportionnel
à la valeur) ou en coloriage de fond de carte &nbsp;- <span
 style="font-style: italic;">Voir plus bas le mode manuel
</span>.<br />
</big></small></small></big><big
 style="font-family: Calibri;"><small><small><big><span
 style="font-style: italic;"></span></big></small></small></big><span
 style="font-style: italic;"></span><br />
<big style="font-family: Calibri;"><small><small><big><span
 style="color: rgb(51, 102, 102); font-weight: bold;">III
- Le mode manuel</span>.
<br />
Dans ce mode vous pouvez agir sur la carte de plusieurs manière: </big></small></small></big><big
 style="font-family: Calibri;"><small><small><big><br />
</big></small></small></big><br />
<br />
<span style="text-decoration: underline; font-family: Calibri;">1
- avec le menu "variables"</span><span
 style="font-family: Calibri;"> qui vous permet de gérer : </span><big
 style="font-family: Calibri;"><small><small><big><br />
Avant d\'utiliser ce
menu de données, vous devez avoir sélectionné sous quelle forme vous
voulez afficher les données : &nbsp;les icones (bouton "Ponctuels")
ou le
coloriage du fond de carte (bouton "Fond de carte")</big></small></small></big><big
 style="font-family: Calibri;"><small><small><big>
</big></small></small></big>
<ul style="font-family: Calibri;">
</ul>
<ul>
  <li><span
 style="font-weight: bold; font-family: Calibri; color: rgb(51, 102, 102);">l\'Affichage
d\'icones ponctuels</span><span
 style="font-family: Calibri; color: rgb(51, 102, 102);">
(ronds proprtionnels):</span><span
 style="font-family: Calibri;"> Sélectionner le bouton
"Ponctuels", puis sélectionnez une variable</span><span
 style="font-family: Calibri;"> dans le menu déroulant
"variables"</span><span style="font-family: Calibri;">.</span><span
 style="font-weight: bold; font-family: Calibri;"><span
 style="color: rgb(51, 102, 102);"></span></span></li>
  <li><span style="font-weight: bold; font-family: Calibri;"><span
 style="color: rgb(51, 102, 102);">le Coloriage du fond de
carte</span></span><span style="font-family: Calibri;"><span
 style="color: rgb(51, 102, 102);"> :</span> </span><span
 style="font-family: Calibri;">Sélectionnez le bouton
"fond de carte", puis sélectionnez une variable dans le menu déroulant
"variables".</span></li>
</ul>
<span style="text-decoration: underline; font-family: Calibri;">2
- avec le menu "Graphiques"</span>
<ul style="font-family: Calibri;">
  <li>la <span style="font-weight: bold;">sélection
de graphiques de synthèse</span> qui s\'afficheront lorsque vous
cliquez sur une aire de la carte</li>
</ul>
<br style="font-family: Calibri;" />
<span style="font-family: Calibri;">vous pouvez choisir
aussi : </span><br style="font-family: Calibri;" />
<ul style="font-family: Calibri;">
  <li>la
    <span style="font-weight: bold;"><span
 style="color: rgb(51, 102, 102);">game de couleur</span></span>
&nbsp;: menu "palettes"</li>
  <li>le
    <span style="font-weight: bold;"><span
 style="color: rgb(51, 102, 102);">découpage en classe</span></span>
par 1, 2, 3, 4, 5 quantiles : menu
"Quantiles".</li>
</ul>
<big style="font-family: Calibri;"><small><small><big>
<big><small><small><big>Pour<span
 style="color: rgb(51, 102, 102);"> </span><b
 style="color: rgb(51, 102, 102);">lire
la valeur d\'une donnée</b> pour une aire de la carte, placer le
curseur au
dessus de la surface colorée ou sur le rond affiché.</big></small></small></big><br />
<br />
<big><small><small><big>Pour <span
 style="font-weight: bold; color: rgb(51, 102, 102);">annuler
la sélection d\'un aire de
la carte</span>, cliquez dans le fond bleu de la carte<br />
</big></small></small></big>
<br />
Vous disposez aussi d\'un
<span style="font-weight: bold; color: rgb(51, 102, 102);">moteur
de recherche par nom</span>
dans les aires de la carte. Pour consulter la liste des noms d\'aires
géographiques : cliquez sur OK sans rien inscrire dans le cadre de
saisie. Pour recherche une aire particulière, indiquez le nom ou une
partie du nom et
cliquez sur OK <br style="text-align: left;" />
Vous disposez aussi de fonctions de gestion de la carte : <br />
<ul>
  <li><b><span style="color: rgb(51, 102, 102);">Déplacer
la carte</span> :</b> click gauche sur la
carte, déplacez le curseur, puis cliquer une nouvelle fois
lorsque vous avez fini le déplacement du curseur.&nbsp;
  </li>
  <li>
    <b><span style="color: rgb(51, 102, 102);">zoomer
    </span>:</b> bouton + et bouton - (motif blanc)
  </li>
  <li>
    <b><span style="color: rgb(51, 102, 102);">régler
la taille des icones</span> :</b> bouton + et bouton
- (motif jaune)
  </li>
</ul>
<span style="font-weight: bold; color: rgb(51, 102, 102);">Données
manquantes</span><br />
lorsqu\'une donnée est manquante pour une aire de la carte : <br />
</big></small></small></big>
<ul>
  <li><big style="font-family: Calibri;"><small><small><big>en
mode coloriage du fond, l\'aire concernée est coloré en mauve pâle.</big></small></small></big></li>
  <li><big style="font-family: Calibri;"><small><small><big>en
mode icones ponctuels, l\'icone est absente.</big></small></small></big></li>
</ul>
<big style="font-family: Calibri;"><small><small><big><b
 style="color: rgb(51, 102, 102);">Classification par
quantiles</b><br />
Les valeurs indiquées dans les légendes pour déterminer les classes
sont calculées par la méthode des quantiles qui consiste à répartir un
ensemble d\'objets (ici les aires de la carte) en groupes d\'effectifs
égaux .<br />
<br />
Lorsqu\'on prend l\'option 2 quantiles, la valeur qui sépare les deux
groupes est appelée la médiane : chacun des deux groupes représente
alors 50% de l\'ensemble des aires de la carte.
<br />
<br />
<br />
<br />
<br />
</big>
<br />
</small></small></big>





</div>
</div>
<div id="divbalise" style="position:absolute;bottom:500px;right:215px;display:none;z-index:6000"><table style="background-color:white;border:1px solid black"><tr><td height="20">Balise type : </td><td  id="balises1" style="width:200px;border:1px solid black" ><a id="boitebalise" href="" >balise en cours</a>&nbsp;</td></tr><tr><td>Balise graph : </td><td id="balises2"  style=";border:1px solid black"><a href="" id="balisegraph">graph</a>&nbsp;</td></tr><tr><td>Balise lien vers aire : </td><td id="balises3"  style=";border:1px solid black"><a id="boiteAirebalise" style="color: blue; font-size: 9px;" onclick="" href="javascript:rien()">nom de l\'aire</a>&nbsp;</td></tr></table></div>

<div id="divtexte" style="position:absolute;top:90px;left:870px;z-index:4000">
<iframe id="hypertexte" name="hypertexte" src="hypertexte.htm" width="200" height="500" frameborder="no" />
<div id="metaX" style="position:absolute;top:0px;left:0px;width:0px;height:0px;overflow:scroll;background-color:yellow;padding-left:8px">
</div>
</div>


<div id="divFiche2" style="position:absolute;top:90px;left:870px;z-index:40000;display:none">
<table  width="200" id="tabFiche2"><tr><td style="color:transparent"> <br/>  <br/> </td></tr><tr><td></td></tr><tr><td>
<iframe id="hyperFiche" name="hyperFiche" src="fiche.htm" width="200" height="500" frameborder="no" />
</td></tr></table></div>

<div id="divFiche" style="position:absolute;top:90px;left:870px;z-index:50000">
<table style="display:none" id="tabFiche" width="160" onmousedown="document.getElementById(\'hut\').innerHTML=xtx;" onmouseup="document.getElementById(\'hut\').innerHTML=\' @@n  @@n  \';" border="1"><tr><td style="color:transparent"> <br/>    <br/>  <br/>  <br/> </td></tr><tr ><td id="hut" style="color:transparent"></td></tr><tr><td></td></tr></table>
</div>
<div id="divclic" style="position:absolute;top:70px;left:870px;z-index:70000;display:block">
<table  cellpadding="2" cellspacing="3" width="205" id="tabclic" ><tr><td id="case1" onclick="this.style.opacity=0.7;document.getElementById(\'case2\').style.opacity=0.3;document.getElementById(\'divFiche2\').style.display=\'none\';fermaide()"  style="border:2px solid gray;background-color: rgb(228, 228, 228);opacity:0.7"><span style=""><center><b >Texte</b></center></span></td><td id="case2"  onclick="this.style.opacity=0.7;document.getElementById(\'case1\').style.opacity=0.3;document.getElementById(\'divFiche2\').style.display=\'block\';fermaide()"  style="border:2px solid gray;background-color: rgb(228, 228, 228);opacity:0.3"><span style=""><center><b>Fiche</b></center></span></td></tr></table>
</div>

<div id="syntheseCarte" style="position:absolute;top:0px;right:47px;width:175px;z-index:100000000;display:none">




<table id="xtabsynthe" style="width:175px;z-index:100000010;background-color:white;">
<tr><td>
<dt id="synthe1" style=";background-color:#F7DE8C;border:1px solid gray"></dt>
<dt  style=";background-color:transparent;line-height:2px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</dt>
<dt id="synthe2" style=";background-color:#FFB18B;border:1px solid gray"></dt>
</td></tr></table>

<center>
<table style="width:173px;z-index:100000010;background-color:white;border:1px solid gray; border-radius: 5px 5px 5px 5px;">
<tr style="text-align:center"><td><span style="color:gray;font-size:10px;">Données de synthèse</span>

</td><td>
<table style=";z-index:100000010;background-color:white;border:1px solid gray; border-radius: 5px 5px 5px 5px;cursor:pointer;" onclick="xclos()" title="Désactive le module de synthèse.Pour le réactiver, redémarrer PageCarto (raffraichir)">
<tr><td style="line-height:4px"><b> x </b></td></tr></table>
</td><td>
<table style=";z-index:100000010;background-color:white;border:1px solid gray; border-radius: 5px 5px 5px 5px;cursor:pointer;" onclick="xred()" title="Replie le module de synthèse. Pour le déplier cliquez sur (+)">
<tr><td style="line-height:4px"><b> - </b></td></tr></table>
</td><td>
<table style=";z-index:100000010;background-color:white;border:1px solid gray; border-radius: 5px 5px 5px 5px;cursor:pointer;" onclick="xouv()" title="Déplie le module de synthèse">
<tr><td style="line-height:4px"><b> + </b></td></tr></table>
 
 
 </td></tr></table>
</center>
</div>


<script type="text/javascript" src="section4.js?updated=1234567890">

</script>
<script id="scrpt"  language="javascript" src="libelleAnglaisFrancais.js?updated=1234567890"><![CDATA[]]></script>  
</body >
</html>



';

?>
