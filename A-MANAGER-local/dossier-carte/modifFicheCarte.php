<html>
<head><title>Altercarto.com : Création de site</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<script type='text/javascript'>
var sommableEchelle=new Array() // trois cas de figures codés 1 = sommable - 2 = sommable partiellement - 3 = NON sommable. Le code est inscrit en troisème terpme du vercteur sommableEchelle[sommableEchelle.length]=new Array("","","")
</script>

<script language="javascript" src="../../mapsILIADEmotpas.js"></script>


<script type='text/javascript' src='../Controle/Saisie/saisie.js'></script>
<script type='text/javascript' src='../Controle/Redondance/redondance.js'></script>
<script type='text/javascript' src='../Controle/bouton.js'></script>
<script type='text/javascript'>

var cefichier=window.location.href.split("?")[0]

function pasDeVirgules(a){
var b=document.getElementById(a).value.replace(/,/g,";" ).replace(/"/g,"'" )
document.getElementById(a).value=b
}
    function replacecarriagereturn(textarea,replaceWith) 
//trouvée sur http://blog.logiclabz.com/javascript/function-to-replace-carriage-return-to-br-in-html-textarea.aspx	
    {   
     textarea.value = escape(textarea.value);  
       //encode all characters in text area  
       //to find carriage return character  
     for(i=0; i < textarea.value.length; i++)  
     {   
      //loop through string, replacing carriage return   
      //encoding with HTML break tag  
      if(textarea.value.indexOf("%0D%0A") > -1)  
      {   
       //Windows encodes returns as \r\n hex  
       textarea.value=textarea.value.replace("%0D%0A",replaceWith);  
      }  
      else if(textarea.value.indexOf("%0A") > -1)  
      {   
       //Unix encodes returns as \n hex  
       textarea.value=textarea.value.replace("%0A",replaceWith);  
      }  
      else if(textarea.value.indexOf("%0D") > -1)  
      {   
       //Macintosh encodes returns as \r hex  
       textarea.value=textarea.value.replace("%0D",replaceWith);  
      }  
     }  
     //textarea.value=unescape(textarea.value);  
    //decode all characters in text area back  
	var contenuArea=unescape(textarea.value)
	return contenuArea
    }  
function NettoyeNCRLR(a){
var contien=document.getElementById(a).value.replace(/<br\/><br\/><small><i>/g,"").replace(/<\/i><\/small>/g,"")

document.getElementById(a).value=contien


var contenu=replacecarriagereturn(document.getElementById(a),' /// ')

document.getElementById(a).value=""+contenu+""//<br/><br/><small>   <i></i></small>

}
function test(){
if(document.getElementById("nf1").value==""){alert("Vous n'avez pas indiqué le nom de la carte")}
document.getElementById('nf0').value=document.getElementById('nf1').value

}

function Nx10(){
if(document.getElementById('nx101').value==""){document.getElementById('nx101').value="Non précisé"}
if(document.getElementById('nx102').value==""){document.getElementById('nx102').value="Non précisé"}
if(document.getElementById('nx103').value==""){document.getElementById('nx103').value="2"}
var nx10='"'+document.getElementById('nx101').value+'","'+document.getElementById('nx102').value+'","'+document.getElementById('nx103').value+'"'
document.getElementById('nx10').value=nx10
}

function Nx20(){
var nx20='"'+document.getElementById('nx201').value+'x@x'+document.getElementById('nx202').value+'x@x'+document.getElementById('nx203').value+'"'
document.getElementById('nx20').value=nx20
}

function NF4(){
var NFx4='['+document.getElementById('nx1').value+']<br/>'
NFx4+='[Maille : '+document.getElementById('nx2').value+']<br/>'
NFx4+='[Taille fichier : '+document.getElementById('nx3').value+']<br/>'
NFx4+='['+document.getElementById('nx4').value+']<br/>'
NFx4+='[pop de référence : '+document.getElementById('nx5').value+']<br/>'//pop de référence
NFx4+='['+document.getElementById('nx6').value+']<br/>'//lieu de sondage
NFx4+='[source : '+document.getElementById('nx7').value+']<br/>' //sources
NFx4+=document.getElementById('nx8').value // autres infos
document.getElementById('nf4').value=NFx4
pasDeVirgules("nf4")
}
function net(){

NettoyeNCRLR("nf10")

pasDeVirgules("nf1") 
pasDeVirgules("nf2") 
pasDeVirgules("nf3") 

pasDeVirgules("nf5") 
pasDeVirgules("nf6") 

pasDeVirgules("nx1") 
pasDeVirgules("nx2")
pasDeVirgules("nx3")
pasDeVirgules("nx4")
pasDeVirgules("nx5")
pasDeVirgules("nx6")
pasDeVirgules("nx7")
pasDeVirgules("nx8")

pasDeVirgules("nf10") 
pasDeVirgules("nf11") 
}
function pvalNo(){
document.getElementById("Pvalider").style.display="none"
document.getElementById("Psubmit").style.display="block"
}
function pvalYes(){
document.getElementById("Pvalider").style.display="block"
document.getElementById("Psubmit").style.display="none"
}
function valider(){
document.getElementById("template").style.display="block"

setTimeout('net();test();Nx20();Nx10();NF4();pvalNo();document.getElementById("template").style.display="none"',250)
}
function copyN2(){

var alerter=''; var inputs=new Array(document.getElementById('nf').value); detect(inputs,CaracteresInterdits1);


if(document.getElementById("nf").value=="Choisir.." || document.getElementById("nf").value=="Choisir.." ){
alert("Attention ! Vous n'avez pas indiqué les titres.")
}


}
var check_r='repertory';  var alerter=''; 
var menu1=""
var menu2=""
function affichmenusmaps(){
menu1='<option id="option0" value="javascript:rien2()">&nbsp;Cartes</option>'

var kc=0
for(i=0;i<mapX.length;i=i+5){
kc+=1

menu1+='<option id="option'
menu1+=kc


menu1+='"    VALUE="'+i+'">'//
menu1+=kc
menu1+="-"
menu1+=mapX[i+3]
menu1+='</option>'

}
document.getElementById("selectcartes").innerHTML=menu1
//------fin menu1
}

var ici=window.location.href.split('?')[0]

function change_site() {
var site = document.carte.selectcartes.selectedIndex;
site=parseInt(site)-1

window.location.href=ici+"?etape=1&Y="+site+"&R="+mapX[site+4]
}

</script>
<?php

$REPERT="";
$li=0;
$fichier="";
$add="";

$separateur=chr('9');
$FNOM="";
$etal=0;
$fichier="";
$fichier2="";
$file_to_open="";
$file_to_write="";





///////////////////////////fin de fonction extract_data


$etape=urldecode( $_GET['etape'] );
//DEBUT :


if($etape=="")
{

echo "<script type='text/javascript' src='../../mapsILIADE.js?updated=1234567890'></script>";


echo '<script type="text/javascript">
for(i=0;i<libelmap.length;i++){
libelmap[i][2]=libelmap[i][2].split("<br id=0 />")[0]
libelmap[i][3]=libelmap[i][3].replace("<br/><br/><small><i>","").replace("</i></small>","")
}
var temp_mapX=new Array()
temp_mapX=mapX

var mt
var idmt=0
var mt2="xxxxx"
var aw2=window.location.href
if(aw2.indexOf("mt=admin")<0){
mt="admin"//prompt("saisissez votre mot de passe",mt2);
for(i=0;i<mtpas.length;i++){
if(mt==mtpas[i]){idmt=1}

}
var retconfirm=false
if(idmt!=1){
retconfirm=confirm("désolé, votre mot de passe est incorrect, voulez vous recommencer?");
if(retconfirm==true){

window.location.href=aw2
}else{
window.location.href="../../vide.html"

}
}
}


</script>';
echo ' <div style="position:fixed;right:10px;top:10px"><input type="button" value="Fermer" onclick="window.location.href=\'../../vide.html\'"></input></div>';
echo ' <div style="position:fixed;right:10px;top:35px;text-align:right;font-family:arial"><input type="button" value="rafraichir" onclick="window.location.href=cefichier+\'?mt=admin\'"></input><br/><small>Please clear cache</small></div>';
echo '<div style="position: absolute; height: 24px; top: 75px; "><form name="carte"><select id="selectcartes" name="selectcartes" onchange="change_site()" onmouseoverx="document.carte.selectcartes.selectedIndex=0" onmouseoutx="document.carte.selectcartes.selectedIndex=postemp"  style="background-color: white; color: black;width:200px" size="1">';
// ici options
echo '</select></form></div>';

echo "<script type='text/javascript'>
affichmenusmaps()
</script>";	




}//fin de étape=""

if($etape==1)
{
$REP=urldecode( $_GET['R'] );;
$rg=urldecode( $_GET['Y'] );;

echo '<div id="template" style="display:none;position : fixed;top:150px;width:100%;"><center><table style="font-size:30px;font-family:arial;color:gray;background-color:white;width:90%;border:2px solid gray"><tr><td><center>normalisation des données du formulaire en cours<br/><img src="../../loading.gif"></center></td></tr></table></center></div>';

echo ' <div style="position:fixed;right:10px;top:10px"><input type="button" value="Fermer" onclick="window.location.href=\'../../vide.html\'"></input></div>';
echo ' <div style="position:fixed;right:10px;top:35px"><input type="button" value="retour" onclick="window.location.href=cefichier+\'?mt=admin\'"></input></div>';

echo "<script type='text/javascript' src='../../mapsILIADE.js?updated=1234567890'></script>";
echo '<script type="text/javascript">
for(i=0;i<libelmap.length;i++){
libelmap[i][2]=libelmap[i][2].split("<br id=0 />")[0]
libelmap[i][3]=libelmap[i][3].replace("<br/><br/><small><i>","").replace("</i></small>","")
}
var longx=libelmap.length;
var libelmapT=new Array()
var mapXT=new Array()
sommableEchelleT=new Array()

mapXT[0]=mapX['.(5*$rg).'];
mapXT[1]=mapX['.(5*$rg+1).'];
mapXT[2]=mapX['.(5*$rg+2).'];
mapXT[3]=mapX['.(5*$rg+3).'].replace(/\'/g," ");
mapXT[4]=mapX['.(5*$rg+4).'];
libelmapT[0]=libelmap['.$rg.'];
sommableEchelleT[0]=sommableEchelle['.$rg.'];
var echelle=libelmap['.$rg.'][0];
var maille=libelmap['.$rg.'][1];

var commentTitrecarteT=libelmap['.$rg.'][2].replace("Maille : ","").replace("maille : ","").replace("taille fichier : ","").replace("Taille fichier : ","").replace("Pop de référence : ","").replace("pop de référence : ","").replace("Source : ","").replace("source : ","").replace(/\'/g," ").replace(/,/g,";").replace(/\]\[/g,"]<br/>[");
var commentaireschampT=libelmap['.$rg.'][3].replace(/,/g,";").replace(/\'/g," ");
var themeT=libelmap['.$rg.'][4];

var autrescommntT=libelmap['.$rg.'][5].replace(/,/g,";").replace(/\'/g," ");
var originalauthorsT=libelmap['.$rg.'][6];
var otherauthorsT=libelmap['.$rg.'][7];


var mapX=new Array();
var libelmap=new Array();
var sommableEchelle=new Array();

mapX=mapXT;
sommableEchelle[0]=sommableEchelleT[0];
var commentTitrecarte=commentTitrecarteT;
var commentaireschamp=commentaireschampT.replace("<br/><br/><small><i>","").replace("</i></small>","");
var theme=themeT;
var autrescommnt=autrescommntT;
var originalauthors=originalauthorsT;
var otherauthors=otherauthorsT;
libelmap[0]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);
</script>';

//
echo "<form action='".$PHP_SELF."?etape=2' method='post' Onkeyup='javascript: var alerter=\"\"; var inputs=new Array(document.getElementById(\"nf0\").value,document.getElementById(\"nf1\").value,document.getElementById(\"nf2\").value,document.getElementById(\"nf3\").value,document.getElementById(\"nf4\").value); detect(inputs,CaracteresInterdits3);' onkeypress='refuserToucheEntree(event);'>";

echo "<script type='text/javascript'>var nomrep0=\"\";var nomrep1=\"\"; var nomrep2=\"\"; var nomrep3=\"\"; var nomrep4=\"\"; var nomrep5=\"\"; var nomrep5=\"\";</script>";
echo "<input id='rep' type='text' style='visibility:hidden' name='R[0]' value=mapXT[4]><br>";// répertoire 
echo "<script type='text/javascript'>document.getElementById(\"rep\").setAttribute(\"value\",mapXT[4]); document.getElementById(\"rep\").value=mapXT[4]</script>";
echo "<input id='mapici' type='text' style='display:none' name='M[0]' value=''><br>";// rang de la carte
echo "<script type='text/javascript'>var remaps=".$rg.";document.getElementById(\"mapici\").setAttribute(\"value\",remaps); document.getElementById(\"mapici\").value=remaps</script>";


echo "<input id='long' type='text' style='display:none' name='M[1]' value=''><br>";// length = nb cartes + 1
echo "<script type='text/javascript'>document.getElementById('long').setAttribute('value',longx); document.getElementById('long').value=longx</script>";


echo "<div id='alert'></div>";

echo "<table style='border:2px solid gray;font-family:arial;background-color:#EAA643'><tr><td><center><b>Données sur le menu Cartes et le registre de gestion de la plateforme</b></center></td></tr><tr><td>";// 1ère partie du formulaire : Registre de la plateforme -> menu carte
			echo "<div style='display:none'>";
			echo "<p><font face='Helvetica' size='2' >Choisissez le nom de la Carte <br><i>(ie. Le nom qui sera affiché sur le fond d'écran dans certaines versions de GaïaMundi)</i></font></p>";
			echo "<input onmousedown='javascript:pvalYes()'  id='nf0' type='text' onmouseout='javascript:nomrep0=this.value' name='N[0]'  value='xxx'>";// nom de la carte / affichage fond de carte
			echo "</div>";
			echo"<script type='text/javascript'>;document.getElementById('nf0').setAttribute('value',mapX[3]);document.getElementById('nf0').value=mapX[3]</script>";

			echo "<p><font face='Helvetica' size='2'>Code Maille de la carte <br><small><small><i style='color:red'>(ATTENTION:  donnée sensible qui sert aux moteurs de recherche, aux tables de passage, aux sélections lors des transferts de données.</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' id='nfmaille' type='text'  name='E[0]'  value=''>";// Code Maille
			echo"<script type='text/javascript'>document.getElementById(\"nfmaille\").setAttribute(\"value\",mapX[0]);document.getElementById(\"nfmaille\").value=mapX[0]</script>";

			echo "<p><font face='Helvetica' size='2' >Désgnation synthétique du dossier Carte+données dans le menu<br><small><small><i style='color:red'>(ie. Le nom inscrit dans la ligne du menu des cartes et en sous titre de la fiche Rose des Vents. Introduire asserz d'information pour en comprendre l'objet. Par exemple ; France communes : Emplois au lieu de travail par sexe, statut et secteur d'activité économique RGP 2008)<br/>Attention : si vous mettez des noms restreints, évitez les confusions. Mettez un numéro par exemple en cas d'identité des contours</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%' id='nf1' type='text' onmouseout='javascript:nomrep1=this.value' name='N[1]'  value=''>";// nom de la carte / ligne de menu maps
			echo"<script type='text/javascript'>;document.getElementById('nf0').setAttribute('value',mapX[3]);document.getElementById('nf0').value=mapX[3]</script>";

			echo"<script type='text/javascript'>document.getElementById(\"nf1\").setAttribute(\"value\",mapX[3]);document.getElementById(\"nf1\").value=mapX[3]</script>";


			echo "<p><font face='Helvetica' size='2'>Contour (échelle) en format résumé<br><small><small><i>(ex: Europe,  France , région X...)</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' style='width:60%' id='nf2' type='text' onmouseout='javascript:nomrep2=this.value' name='N[2]'  value=''>";// contour ou échelle
			echo"<script type='text/javascript'>document.getElementById(\"nf2\").setAttribute(\"value\",echelle);document.getElementById(\"nf2\").value=echelle</script>";



			echo "<p><font face='Helvetica' size='2'>Maille (découpage) en format littéral résumé<br><small><small><i>(ex:pays,  région , communes, zones d'emploi, IRIS...)</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' id='nf3' type='text' onmouseout='javascript:nomrep3=this.value' name='N[3]'  value=''>";// maille
			echo"<script type='text/javascript'>document.getElementById(\"nf3\").setAttribute(\"value\",maille);document.getElementById(\"nf3\").value=maille</script>";

echo "</td></tr></table>";

//------------------------------------------------------------------début de nouvelle version --------------------------------------------------
echo "<br/><table style='border:2px solid gray;font-family:arial;background-color:#C2D69B'><tr><td><center><b>Données relatives au Serpent de Mer et à la Rose des vents</b><br/><small><i>il métadonnées pour les moteurs de recherche</i></center></td></tr><tr><td>";// 1ère partie du formulaire : Registre de la plateforme -> menu carte
		echo "<textarea onmousedown='javascript:pvalYes()'  id='nf4' type='text' style='display:none' onmouseout='javascript:nomrep4=this.value' name='N[4]' value=''></textarea>";// libellé long ou commentaire sur carte commentTitrecarte

		echo "<p><font face='Helvetica' size='2'>Contour (échelle) détaillé (dont date de validité)<br><small><small><i>(ex: FRANCE entière - Découpage géographique au 01/01/2010, projection lambert 93 IGN/insee)</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' style='width:70%'  id='nx1' type='text' onmouseout='javascript:NF4()'  value=''>";// pourtour dont date de validité[FRANCE entière - Découpage géographique au 01/01/2010]
			
		echo "<p><font face='Helvetica' size='2'>Maille (découpage) en clair avec spécificités éventuelles<br><small><small><i>(ex:Communes. avec arrondissements municipaux seulement pour Paris)</i></small></small></font></p>";	
			echo "<input onmousedown='javascript:pvalYes()'  style='width:70%'  id='nx2' type='text' onmouseout='javascript:NF4()'   value=''>";// [maille : communes et arrondissements municipaux]

		echo "<p><font face='Helvetica' size='2'>Taille estimative maximale des fichiers<br><small><small><i>(ex: 42 802 Ko) NB. Respecter la nutation  Ko. Dans le cas de deux fichiers, principal et complémentaire, on met une seule valeur : la maximale</i></small></small></font></p>";	
			echo "<input onmousedown='javascript:pvalYes()' id='nx3' type='text' onmouseout='javascript:nomrep2=this.value'   value=''>";// [taille  des fichiers de données: principal 42 802 Ko et complémentaire 20 000 Ko ]

		echo "<p><font face='Helvetica' size='2'>Thématique(s) détaillée(s) <br/><small><small><i>(ex: Actifs ayant un emploi, sexe, Catégorie socioprofessionnelle détaillée (31 postes), Secteur d'activité regroupé en 5 postes)</i></small></small></font></p>";	
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%'  id='nx4' type='text' onmouseout='javascript:NF4()'   value=''>";// thématique semin détaillée (ex : Actifs ayant un emploi, sexe, Catégorie socioprofessionnelle détaillée (31 postes), Secteur d'activité regroupé en 5 postes,)	

		echo "<p><font face='Helvetica' size='2'>Populations de référence<br><small><small><i>(ex: actifs de 16-64 ans en Emploi)</i></small></small></font></p>";		
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%'  id='nx5' type='text' onmouseout='javascript:NF4()'   value=''>";// populations de référence(ex: actifs de 16-64 ans en Emploi)
			
		echo "<p><font face='Helvetica' size='2'>Lieu de sondage<br><small><small><i>(ex: au lieu de résidence ou au lieu de travail,... sinon vide)</i></small></small></font></p>";		
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%'  id='nx6' type='text' onmouseout='javascript:NF4()'   value=''>";// lieu de sondage(ex: au lieu de résidence ou au lieu de travail,... sinon vide)
			
			
		echo "<p><font face='Helvetica' size='2'>Sources, avec la date de validité, la spécificité du type de sondage et/ou de secret<br><small><small><i>(ex: Sources : Insee, Recensements de la population 2008 RP 2008 exploitation complémentaire - pas de secret - CLAP Insee 2008 - avec secret (Cf documentation))</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%'  id='nx7' type='text' onmouseout='javascript:NF4()'   value=''>";// Sources précisant les dates de validité, les spécificités des types de sondage ou de secret (ex: Sources : Insee, Recensements de la population 2008 RP 2008 exploitation complémentaire - pas de secret - CLAP Insee 2008 - avec secret (Cf documentation)) 
			
		echo "<p><font face='Helvetica' size='2'>Autres informations importantes<br><small><small><i>(ex: signalement des spécificités importantes ou des réserves sur les données ou la géographie)</i></small></small></font></p>";
			echo "<input onmousedown='javascript:pvalYes()' style='width:100%'  id='nx8' type='text' onmouseout='javascript:NF4()'   value=''>";//Autres informations (ex : signalement des spécificités importantes ou des réserves sur les données ou la géographie) 
	
						echo "<br/><br/><table style='background-color:#E8E8FF;'><tr><td>";
						echo "<input onmousedown='javascript:pvalYes()' id='nx20' type='text' style='display:none' onmouseout='javascript:nomrep2=this.value' name='N[9]'  value=''>";// Contrôle
			
						echo "<table><tr><td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Contrôle 1<br><small><small><small><small><i>(comparaison à la source)</i></small></small></font></p>";
							echo "<input onmousedown='javascript:pvalYes()' id='nx201' type='text' onmouseout='javascript:Nx20()'   value=''></td>";// Contrôle 1
						
						echo "<td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Contrôle 2<br><small><small><i>(controle des sommes)</i></small></small></font></p>";
							echo "<input onmousedown='javascript:pvalYes()' id='nx202' type='text' onmouseout='javascript:Nx20()'   value=''></td>";// Contrôle 2
						
						echo "<td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Contrôle 3<br><small><small><i>(controle de cohérence)</i></small></small></font></p>";
							echo "<input onmousedown='javascript:pvalYes()' id='nx203' type='text' onmouseout='javascript:Nx20()'   value=''></td></tr></table>";// Contrôle 3
							
							
							echo"<script type='text/javascript'>
							
							if(typeof(theme)!='object'   ){
							if(theme.length==0){document.getElementById('nx201').value=''}else{
							document.getElementById('nx201').value=theme}
							document.getElementById('nx202').value=''
							document.getElementById('nx203').value=''
							}else{
							
							if(theme[0]){
							document.getElementById('nx201').value=theme[0]}else{document.getElementById('nx201').value=''}
							if(theme[1]){
							document.getElementById('nx202').value=theme[1]}else{document.getElementById('nx202').value=''}
							if(theme[2]){
							document.getElementById('nx203').value=theme[2]}else{document.getElementById('nx203').value=''}
							Nx20()
							}
							</script>";
			
						echo "</td></tr></table>";
	
	
	
	
	
echo"<script type='text/javascript'>

if(commentTitrecarte.split('<br/>')[0]){document.getElementById('nx1').value=commentTitrecarte.split('<br/>')[0].replace('\"','').replace('[','').replace(']','')}//échelle (pourtour) détaillé
if(commentTitrecarte.split('<br/>')[1]){document.getElementById('nx2').value=commentTitrecarte.split('<br/>')[1].replace('[','').replace(']','')} //Maille en clair
if(commentTitrecarte.split('<br/>')[2]){document.getElementById('nx3').value=commentTitrecarte.split('<br/>')[2].replace('[','').replace(']','')}//taille fichier
if(commentTitrecarte.split('<br/>')[3]){document.getElementById('nx4').value=commentTitrecarte.split('<br/>')[3].replace('[','').replace(']','')} //thématique 
if(commentTitrecarte.split('<br/>')[4]){document.getElementById('nx5').value=commentTitrecarte.split('<br/>')[4].replace('[','').replace(']','')}//pop de référence
if(commentTitrecarte.split('<br/>')[5]){document.getElementById('nx6').value=commentTitrecarte.split('<br/>')[5].replace('[','').replace(']','')} //lieu de recensement
if(commentTitrecarte.split('<br/>')[6]){document.getElementById('nx7').value=commentTitrecarte.split('<br/>')[6].replace('[','').replace(']','')} //

if(commentTitrecarte.split('<br/>')[7]){document.getElementById('nx8').value=commentTitrecarte.split('<br/>')[7]}
NF4()

</script>";


				echo "<br/><table  style='background-color:#E8E8FF'><tr><td>";
				echo "<input onmousedown='javascript:pvalYes()' id='nx10' type='text' style='display:none' onmouseout='javascript:nomrep2=this.value' name='Y[0]'  value=''>";// sommabilité
	
				echo "<table><tr><td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Sommabilité en clair<br><small><small><i>(ex: sommable, partiellement sommable, non sommable)</i></small></small></font></p>";
					echo "<input onmousedown='javascript:pvalYes()' id='nx101' type='text' onmouseout='javascript:Nx10()'  value=''></td>";// sommabilité 1
				
				echo "<td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Argument<br><small><small><i>(ex: non sommable à cause d'une clause de secret, lacunaire... ou au contraire , sommable car décompte exhaustif....)</i></small></small></font></p>";
					echo "<input onmousedown='javascript:pvalYes()' id='nx102' type='text' onmouseout='javascript:Nx10()'   value=''></td>";// sommabilité 2
				
				echo "<td style='vertical-align: bottom;'><p><font face='Helvetica' size='2'>Code de sommabilité <br><small><small><i>(trois cas de figures codés 1 = sommable - 2 = sommable partiellement - 3 = NON sommable. Le code est inscrit en troisème terme du vercteur)</i></small></small></font></p>";
					echo "<input onmousedown='javascript:pvalYes()' id='nx103' type='text' onmouseout='javascript:Nx10()'   value=''></td></tr></table>";// sommabilité 3 : trois cas de figures codés 1 = sommable - 2 = sommable partiellement - 3 = NON sommable. Le code est inscrit en troisème terme du vercteur sommableEchelle[sommableEchelle.length]=new Array("","","")
					
					
					echo"<script type='text/javascript'>
					if(sommableEchelle){
					document.getElementById('nx101').value=sommableEchelle[sommableEchelle.length-1][0]
					document.getElementById('nx102').value=sommableEchelle[sommableEchelle.length-1][1]
					document.getElementById('nx103').value=sommableEchelle[sommableEchelle.length-1][2]
					Nx10()
					}
					</script>";
				echo "</td></tr></table><br/>";
				

//---------partie pour le contenu des fichiers (libellés des colonnes ou autres formulation utiles pour les moteurs de recherche)---------

echo "<p><font face='Helvetica' size='2'><b><u>Informations aussi détaillées que possible sur le contenu du fichier.</u></b>le plus éfficace consiste à recopier le Libellés des colonnes de données. Pour celà, aller dans l'onglet bas architecture des données, affichez les entêtes des fichiers et copiers les dans le champ de saisie. Ne vous préoccupez pas des balises html de début et de fin, l'interface de saisie les place automatiquement<br><small><small>Dans le cas de deux fichiers, introduire les balises suivantes :&lt;br/&gt; &lt;br/&gt; 	&lt;br/&gt; (copier-coller) entre les deux séries d'entêtes correspondant aux deux fichiers<br/><br><i>(A défaut de procéder comme ci-dessus, écrire d'autres formulations littérales utiles pour les moteurs de recherche)</i></small></small></font></p>";
echo "<textarea onmousedown='javascript:pvalYes()'  id='nf10' style='width:100%;height:80px' name='N[7]'  value=''></textarea>";// libellés de colonnes ou contenus du fichier
echo"<script type='text/javascript'>document.getElementById(\"nf10\").setAttribute(\"value\",commentaireschamp.replace('<br/><br/><small><i>','').replace('</i></small>',''));document.getElementById(\"nf10\").value=commentaireschamp</script>";

echo "<p><font face='Helvetica' size='2'>Autres commentaires<br><small><small><i  style='color:red' >(NB: si vous écrivez 'none' dans ce champ, la carte sera occultée dans le menu de GaïaMundi, sans que les registres d'index soient transformés ( la carte existe, elle n'est simplement pas visible))</i></small></small></font></p>";
echo "<input onmousedown='javascript:pvalYes()' id='nf11' type='text' name='N[8]'  value=''>";// Autres commentaires ('none' pour occulte la carte dans le menu de GaïaMundi)
echo"<script type='text/javascript'>document.getElementById(\"nf11\").setAttribute(\"value\",autrescommnt);document.getElementById(\"nf11\").value=autrescommnt</script>";


echo "<br/><br/></td></tr></table>";
//-------------------------------------------------------------------------fin de nouvelle version-----------------------------------------


echo "<br/><table  style='background-color:#E8E8FF'><tr><td style='vertical-align: bottom;width:50%'><p><font face='Helvetica' size='2'>Auteurs de la Carte<br><small><small><i>(Si posssible, respecter la présentation suivante : auteur1 : adresse1 --- auteur2 : adresse2)</i></small></small></font></p>";
echo "<textarea onmousedown='javascript:pvalYes()'  style='width:100%'  id='nf5' type='text' style='visibility:visible' onmouseout='javascript:nomrep5=this.value' name='N[5]' value=''></textarea>";// auteurs originaux
								echo"<script type='text/javascript'>

								var autorig=''
								if(typeof(originalauthors)!='object' ){
								document.getElementById('nf5').setAttribute('value',originalauthors.replace(/\undefined/g,' '));
								document.getElementById('nf5').value=originalauthors.replace(/\undefined/g,' ');
								}
								else
								{
								if(otherauthors.length==1){autorig=originalauthors[0]}else{
								autorig=originalauthors[0]+' : '+originalauthors[1]
								for(d=2;d<originalauthors.length;d+=2){
								autorig+=' --- '+originalauthors[d]+' : '+originalauthors[d+1]
								}
								}
								document.getElementById('nf5').setAttribute('value',autorig.replace(/\undefined/g,' '));
								document.getElementById('nf5').value=autorig.replace(/\undefined/g,' ');
								}  </script>";// auteurs originaux
echo "</td><td style='vertical-align: bottom;width:50%'>";
echo "<p><font face='Helvetica' size='2'>Autres auteurs du dossier<br/>cartes + données<br><small><small><i>(Si posssible, respecter la présentation suivante  auteur1 : adresse1 --- auteur2 : adresse2)</i></small></small></font></p>";
echo "<textarea onmousedown='javascript:pvalYes()'  style='width:100%'  id='nf6' type='text' style='visibility:visible' onmouseout='javascript:nomrep6=this.value' name='N[6]' value=''></textarea>";// autres auteurs
								echo"<script type='text/javascript'>

								var autother=''
								if(typeof(otherauthors)!='object'){
								document.getElementById('nf6').setAttribute('value',otherauthors.replace(/\undefined/g,' '));
								document.getElementById('nf6').value=otherauthors.replace(/\undefined/g,' ');
								}
								else
								{
								if(otherauthors.length==1){autother=otherauthors[0]}else{
								autother=otherauthors[0]+' : '+otherauthors[1]
								for(d=2;d<otherauthors.length;d+=2){
								autother+=' --- '+otherauthors[d]+' : '+otherauthors[d+1]
								}
								}
								document.getElementById('nf6').setAttribute('value',autother.replace(/\undefined/g,' '));
								document.getElementById('nf6').value=autother.replace(/\undefined/g,' ');
								
								}  </script>";// autres auteurs

echo "</td></tr></table>";// 


echo '<input type="submit" id="submit2" value="Valider" disabled="disabled" style="display:none;">';
echo "<p id='Pvalider' style='display:block'><input  onclick='javascript:valider()' type='button'   value='Valider'></p>"; 
echo "<p id='Psubmit' style='display:none'><input   type='submit' id='submit' name='valid' value='Enregistrer'></p>"; 
echo "</form>";


}//fin de ietape=1
//----------------------------------------------------------------------------consolidation des contenus de MapsIliade---------------------------------
if($etape==2)
{
echo "<script type='text/javascript' src='../../mapsILIADE.js?updated=1234567890'></script>";
echo '<script type="text/javascript">
for(i=0;i<libelmap.length;i++){
libelmap[i][2]=libelmap[i][2].split("<br id=0 />")[0]
libelmap[i][3]=libelmap[i][3].replace("<br/><br/><small><i>","").replace("</i></small>","")
}
for(i=0;i<libelmap.length;i++){
libelmap[i][0]=libelmap[i][0].replace(/\'/g,"").replace(/,/g,";")
libelmap[i][1]=libelmap[i][1].replace(/\'/g,"").replace(/,/g,";")
libelmap[i][2]=libelmap[i][2].replace(/\'/g,"").replace(/,/g,";")
libelmap[i][3]=libelmap[i][3].replace(/\'/g,"").replace(/,/g,";")

libelmap[i][5]=libelmap[i][5].replace(/\'/g,"").replace(/,/g,";")
//--------------theme===contrôle
				if(typeof(libelmap[i][4])!="object"){
libelmap[i][5]=libelmap[i][5].replace("undefined","").replace("undefined","")
				}else{
				var ixi=""
				if(libelmap[i][4].length==1){ixi=libelmap[i][4][0].replace("undefined","")}else{
				ixi=libelmap[i][4][0]
				for(k=1;k<libelmap[i][4].length;k++){
				if(libelmap[i][4][k]){if(libelmap[i][4][k]=="undefined"){libelmap[i][4][k]=libelmap[i][4][k].replace("undefined","")}}else{libelmap[i][4][k]=""}
				
				ixi+="x@x"+libelmap[i][4][k]}
				libelmap[i][4]=ixi  }
				}
//--------------auteurs de la carte
				if(typeof(libelmap[i][6])!="object"){
				libelmap[i][6]=libelmap[i][6].replace("undefined","").replace("undefined","")
				}else{
				//
				var ixi=""
				if(libelmap[i][6].length==1){ixi=libelmap[i][6][0].replace("undefined","")}else{
				
				if(libelmap[i][6][0]){libelmap[i][6][0]=libelmap[i][6][0].replace("undefined","")}else{libelmap[i][6][0]=""}
				if(libelmap[i][6][1]){libelmap[i][6][1]=libelmap[i][6][1].replace("undefined","")}else{libelmap[i][6][1]=""}
				
				ixi=libelmap[i][6][0]+" : "+libelmap[i][6][1]
				for(k=2;k<libelmap[i][6].length;k+=2){
				if(libelmap[i][6][k]){libelmap[i][6][k]=libelmap[i][6][k].replace("undefined","")}else{libelmap[i][6][k]=""}
				if(libelmap[i][6][k+1]){libelmap[i][6][k+1]=libelmap[i][6][k+1].replace("undefined","")}else{libelmap[i][6][k+1]=""}
				ixi+=" --- "+libelmap[i][6][k]+" : "+libelmap[i][6][k+1]}
				}
				libelmap[i][6]=ixi  
				}
				
//--------------auteurs du façonnage des données
				if(typeof(libelmap[i][7])!="object"){
				libelmap[i][7]=libelmap[i][7].replace("undefined","").replace("undefined","")
				}else{
				//
				var ixi=""
				if(libelmap[i][7].length==1){ixi=libelmap[i][7][0].replace("undefined","")}else{
				
				if(libelmap[i][7][0]){libelmap[i][7][0]=libelmap[i][7][0].replace("undefined","")}else{libelmap[i][7][0]=""}
				if(libelmap[i][7][1]){libelmap[i][7][1]=libelmap[i][7][1].replace("undefined","")}else{libelmap[i][7][1]=""}
				
				ixi=libelmap[i][7][0]+" : "+libelmap[i][7][1]
				for(k=2;k<libelmap[i][7].length;k+=2){
				if(libelmap[i][7][k]){libelmap[i][7][k]=libelmap[i][7][k].replace("undefined","")}else{libelmap[i][7][k]=""}
				if(libelmap[i][7][k+1]){libelmap[i][7][k+1]=libelmap[i][7][k+1].replace("undefined","")}else{libelmap[i][7][k+1]=""}
				ixi+=" --- "+libelmap[i][7][k]+" : "+libelmap[i][7][k+1]}
				}
				libelmap[i][7]=ixi  
				
				}			
}








</script>';

$Maille=$_REQUEST['E'];//maille
$Nnom=$_REQUEST['N'];//
$Ssommable=$_REQUEST['Y'];// veteur sommabilité
$noncarte=$Nnom[0];//nom carte
$REP = $_REQUEST['R'];// prendre REP[0]
$numMaps=$_REQUEST['M'];//rang
$rg=$numMaps[0];
$long=$numMaps[1];



echo '<script type="text/javascript">

//var libelmap=new Array()
//var mapX=new Array()
//sommableEchelle=new Array()


mapX['.(5*$rg).']=="'.$Maille[0].'";;
mapX['.(5*$rg+1).']="CARTOSVG.svg";
mapX['.(5*$rg+2).']="datacarte.html";
mapX['.(5*$rg+3).']="'.$Nnom[1].'";
mapX['.(5*$rg+4).']="'.$REP[0].'";



sommableEchelle['.$rg.']=new Array('.$Ssommable[0].');

var echelleT="'.$Nnom[2].'";
var mailleT="'.$Nnom[3].'";
var commentTitrecarteT="'.$Nnom[4].'";
var commentaireschampT="'.$Nnom[7].'";
var tT='.$Nnom[9].'.replace(/\undefined/g," ")
var themeT=new Array(tT);
var autrescommntT="'.$Nnom[8].'";
var originalauthorsT=new Array("'.$Nnom[5].'");
var otherauthorsT=new Array("'.$Nnom[6].'");
libelmap['.$rg.']=new Array(echelleT,mailleT,commentTitrecarteT,commentaireschampT,themeT,autrescommntT,originalauthorsT,otherauthorsT);


</script>';//

echo "<form name='forminter' action='".$PHP_SELF."?etape=3' method='post' >";
for($i=0;$i<(5*$long);$i=$i+1){
echo "<div style='display:none'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='a".$i."' type='text' name='A[".$i."]'  value=''>";// mapx
echo"<script type='text/javascript'>;document.getElementById('a".$i."').setAttribute('value','\"'+mapX[".$i."]+'\"'); </script></div>";//alert('\"'+mapX[".$i."]+'\"')
}
for($i=0;$i<$long;$i=$i+1){
echo "<div style='display:none'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='b".$i."' type='text' name='B[".$i."]'  value=''>";// sommableEchelle
echo"<script type='text/javascript'>document.getElementById(\"b".$i."\").setAttribute(\"value\",sommableEchelle[".$i."]); document.getElementById(\"b".$i."\").value=sommableEchelle[".$i."]</script></div>";

echo "<div style='display:block'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='c".$i."' type='text' name='C[".$i."]'  value=''>";// libelmap
echo"<script type='text/javascript'>;document.getElementById('c".$i."').setAttribute('value',libelmap[".$i."]); document.getElementById('c".$i."').value=libelmap[".$i."]</script></div>";
}
echo "<div style='display:none'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='nf4' type='text' name='D[0]'  value=''>";// repertoire du bloc carte modifié
echo"<script type='text/javascript'>document.getElementById('nf4').setAttribute('value','".$REP[0]."'); document.getElementById('nf4').value='".$REP[0]."'</script></div>";

echo "<div style='display:none'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='nf5' type='text' name='N[0]'  value=''>";// nom de la carte modifiée
echo"<script type='text/javascript'>document.getElementById('nf5').setAttribute(\"value\",'".$Nnom[1]."'); document.getElementById('nf5').value='".$Nnom[1]."'</script></div>";

echo "<div style='display:none'  ><p><font face='Helvetica' size='2'>xxxxxxxx<br><small><small><i>(ex:xxxxxxxxxxx)</i></small></small></font></p>";
echo "<input id='nf6' type='text' name='M[0]'  value=''>";//  length = nb cartes + 1
echo"<script type='text/javascript'>document.getElementById('nf6').setAttribute(\"value\",'".$long."'); document.getElementById('nf6').value='".$long."'</script></div>";
echo "</form>";


echo '<script type="text/javascript">document.forminter.submit()</script>';
}
//-----------------------------------------ECRITURE DE mappocoord.js-et mapsIliade.js----------------------------------------
if($etape==3)
{
echo "<script type='text/javascript' src='../../mapsILIADE.js?updated=1234567890'></script>";
echo '<script type="text/javascript">
for(i=0;i<libelmap.length;i++){
libelmap[i][2]=libelmap[i][2].split("<br id=0 />")[0]
libelmap[i][3]=libelmap[i][3].replace("<br/><br/><small><i>","").replace("</i></small>","")
}
</script>';

$N=$_REQUEST['N'];
$A=$_REQUEST['A'];
$B=$_REQUEST['B'];
$C=$_REQUEST['C'];

$mapX=$A;
$Ssommable=$B;
$libel=$C;


$D=$_REQUEST['D'];
$L=$_REQUEST['M'];
$nbcartes=$L[0];



$m='mappocoord[0]="principal.html";
mappocoord[1]="complementaire.html";
mappocoord[2]="1" //? position du menu Sujet à l ouverture =1 par défaut;
mappocoord[3]="1" //? position du menu Sujet à l ouverture =1 par défaut;
mappocoord[4]="'.$N[0].'"; // titre de la carte;
mappocoord[5]="0" //?;
mappocoord[6]="'.$D[0].'"//répertoire où se trouve le fichier .html  des données sujet;
mappocoord[7]="'.$D[0].'"//répertoire où se trouve le fichier .html  des données Other ;
mappocoord[8]="0" // couches graphiques supplémentaires sur le fond de carte;
mappocoord[9]="0" // 0 si pas d images diaporama ; 1 s il y une ou des images diaporama;
mappocoord[10]="0" // 0 si il n y a pas d arrière plan, 1 s il y une ou des images d arrière plan;


top.frames.Num0.document.getElementById("divguide").style.visibility="hidden" // rend le lien GUIDE invisible
top.frames.Num0.document.getElementById("validite").style.visibility="hidden" // rend la frame validité invisible';



$op_file = fopen("../../".$D[0]."/DATA-mappocoord.js","w+");
fwrite($op_file,$m);
fclose($op_file);

include("../Controle/Sauv/sauv.php");
$array=array("15");
sauv($file,$array);	






$op_file = fopen("../../mapsILIADE.js","a+");


$m="";
for($i=0;$i<$nbcartes;$i=$i+1){

if($i==0){
		$m=$m."var mapX=new Array();var libelmap=new Array();var sommableEchelle=new Array() // trois cas de figures codés 1 = sommable - 2 = sommable partiellement - 3 = NON sommable. Le code est inscrit en troisème terme du vecteur sommableEchelle[sommableEchelle.length]=new Array('','','')";
		}
		
$sy='"'.$Ssommable[$i];
$so=explode(",",$sy);		

$l='"'.$libel[$i];
$lo=explode(",",$l);

$to=str_replace('x@x','","',$lo[4]);	

$repdoc=str_replace('"','',$mapX[5*$i+4]);

		
$m=$m."\n\n//****************\  CARTE n°".($i+1)."  /***************************************************\n";
$m=$m.'mapX[mapX.length]='.$mapX[5*$i].';;
mapX[mapX.length]='.$mapX[5*$i+1].';
mapX[mapX.length]='.$mapX[5*$i+2].';
mapX[mapX.length]='.$mapX[5*$i+3].';
mapX[mapX.length]='.$mapX[5*$i+4].';
sommableEchelle[sommableEchelle.length]= new Array('.$so[0].'","'.$so[1].'","'.$so[2].'");
var echelle='.$lo[0].'";
var maille="'.$lo[1].'";
var commentTitrecarte="'.$lo[2].'<br id=0 /><a href=\''.$repdoc.'/documentation.pdf\' target=\'_blank\'>documentation</a>";
var commentaireschamp="<br/><br/><small><i>'.$lo[3].'</i></small>";
var theme=new Array("'.$to.'");
var autrescommnt="'.$lo[5].'";
var originalauthors="'.$lo[6].'";
var otherauthors="'.$lo[7].'";
libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);';



}


$op_file = fopen("../../mapsILIADE.js","w+");
fwrite($op_file,"\n\n");
fwrite($op_file,$m);
fclose($op_file);


echo"<script type='text/javascript'>window.location.href=cefichier+'?mt=admin'</script>";

}//fin de étape3



?>
</font>

</body>
</html>
