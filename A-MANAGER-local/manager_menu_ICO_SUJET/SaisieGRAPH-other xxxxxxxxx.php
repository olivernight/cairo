<html><head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
<style>
a.lienmenu:link { color:black;}
a.lienmenu:visited { color:black;}
</style>
<script type="text/javascript">
var mapX=new Array()
var menuOther=new Array()
var mappocoord=new Array()
var defalq=0// décallage du nombre de colonne si on utilise l'option principal au lieu de complémentaire
var lignelibelPrincipal=0 //nombre de colonne de principal
</script>
<?php

$REP = urldecode( $_GET['REP'] );
$cible = urldecode( $_GET['cible'] );

echo '<script id="jscible" language="javascript" src="../../'.$REP.'/'.$cible.'?updated=1234567890"></script>';




echo '<script  language="javascript" src="../../'.$REP.'/DATA-mappocoord.js"></script>';
echo '<script type="text/javascript" src="../Controle/Saisie/saisie.js"></script>';
echo '<script type="text/javascript" src="../Controle/bouton_menu.js"></script>';
?>
<script type="text/javascript">


    var sauf=0
    //* <!--
	var cibleX="num"
	var cibleXtemp="num"
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
	var REP=urlvar['REP']
	var cible=urlvar['cible']	
    //alert(urlvarnum)
    //alert(urlvar['REP'])
    //alert(urlvar['cible'])
     //si l'adresse de départ est "http://www.mapage.com/index.htm?nom=dupond&prenom=jean&age=50+ans", alors urlvar['nom'] vaut 'dupond', urlvar['prenom'] vaut 'jean', et urlvar['age'] vaut '50 ans'
     //-->
    </script>

<script language="javascript" src="../../mapsILIADE.js?updated=1234567890"></script>

<script language="javascript">
var tsi=new Array()//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
titre=menuOther
var titre2=titre
if(titre2.length==0){var zerotitre2=new Array("0,0","","","","","","","","","","","","","");titre2[0]=zerotitre2}
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
var typici=""

var transit=new Array()// stocke le bloc de données à déplacer ou dupliquer
var ancre
var rgd=0
var k=0
var a=0
var c=0
var nombre=0
var x=0
var z=0
var ombre=0
var posFrom=0
var posTo=0
var posToDupl=0
var texteliste=""
var entete = new Array()

function setrgergd(a,x){


if(indicvalid==1){//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	if(a==1){ // bouton précédent
		k=k-1
		rgd=k
		if(k==-1){ 
			k=titre2.length-1 
			rgd=k
		}
	}
	if(a==2){ // bouton suivant
		k=k+1
		rgd=k
		if(k==titre2.length){ 
			k=0 
			rgd=k
		} 
	}
	if(a==3){ // choix menu
		k=x
		rgd=k
	}
	if(a==4){ // Insérer
		k=k+1
		rgd=k
		insert(rgd,1);indicvalid=0//$$$$$$$$$$
	}

	
	aff(rgd)//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	}else{
		if(bonpourvalidation==0){
			alert('Finissez de remplir le formulaire ou bien effacez le.')
		}else{
			alert('Validez le formulaire')
		}
	}	
	
	if(a==5){ // Effacer
		k=k
		rgd=k
		insert(rgd,-1);
		if(k!=0){
		k=k-1;rgd=rgd-1;
		}
		aff(rgd)//;liste()//$$$$$$$$$$
	}
	if(a==6){ // Déplacer
		k=parseInt(document.getElementById("deplace").value-1)
		posTo=k
		rgd=k
		;deplace()//$$$$$$$$$$
		indicvalid=0
		bonpourvalidation=1
		aff(rgd)
		validation()
	}
	if(a==7){ // Dupliquer
		k=parseInt(document.getElementById("dupliqx").value-1)
		posToDupl=k
		rgd=k
		dupliquex();//$$$$$$$$$$
		indicvalid=0
		bonpourvalidation=1
		aff(rgd)
		validation()
	}
	document.getElementById("enreg").style.visibility="hidden"
}

function actualise(){
	var menu=k+1
	var total=titre2.length
	document.getElementById('menutitre').value = "Menu "+menu+" / "+total
	document.getElementById('depl').innerHTML = "Menu "+menu
	document.getElementById('dupl').innerHTML = "Menu "+menu
	liste();
}
var xtTEMP=""
function aff(k){ 
if(caseffacefin!=0){k=0}
RAZcheckCurve()
RAZcheckrad()
sauf=0
	//alert(k)
	document.getElementById("paraCourbe").style.display="none"// Paramètres des Courbes occultés
	document.getElementById("paraRadar").style.display="none"// Paramètres des Radars occultés
	pointancre(k)	
	var xt=""
	var xtl=new Array()
	var textarecup=titre2[k]
	
	for(i=0;i<13;i++){
		xt=textarecup[i]
		
if(i==0){
if(xt==""){
titre2[k]=new Array("0,0","","","","","","","","","","","","","")
textarecup=titre2[k]
}
document.getElementById("PC_2").checked=true;PC=2;
var xtl1=xt
if( typeof(xt)=="string"){xtl1=xt.split(',')}else{xtl1=xt}

if(xtl1[0]<0){xtTEMP="principal";document.getElementById("PC_1").checked=true;PC=1;if(lignelibelcomplementaire==0){decalColonnesComplementaire()};chargePrincipal();;}

if(PC==2 & xtTEMP=="principal"){chargeComplementaire();document.getElementById("PC_2").checked=true;PC=2;defalq=0;lignelibelPrincipal=0}
}
				
		
		if(i==6 || i==7  || i==10){
			document.getElementById('input'+i).style.visibility="hidden"
			document.getElementById('input'+i).value = xt;
		} 
		else{	
					if(i==0){
						xt=""+textarecup[i]+""
						if( typeof(textarecup[i])=="string"){xtl=textarecup[i].split(',')}else{xtl=textarecup[i]}
						var zero=xtl	
						//document.getElementById("num"+k).setAttribute("value",xtl[0])
						//document.getElementById("denom"+k).setAttribute("value",xtl[1])
					}
					if(i==3) {
document.getElementById('spaninput8').style.display="none"					
document.getElementById("input11").setAttribute("style","visible;background-color:white")					
						if(typeof(xt)=="string"){xtl=textarecup[i].split(',')}else{xtl=textarecup[i]}
						var typq
						//alert('xtl= '+xtl)
document.getElementById("lblong").innerHTML="12 - liebellé long"						
if(xtl[0]==1 & xtl[1]==3){//radar
document.getElementById("lblong").innerHTML="12 - données de comparaison"
			var xtl11=new Array()
			if( typeof(textarecup[i])=="string"){xtl11=textarecup[11].split(',')}else{xtl11=textarecup[11]}
			var r11=xtl11[0]+","+xtl11[1]
			
			var r11la=1
if(r11=="0,0"){r11la=1}
if(r11=="1,0"){r11la=2}
if(r11=="1,1"){r11la=3}
if(r11=="2,0"){r11la=4}
if(r11=="2,1"){r11la=5}
if(r11=="3,0"){r11la=6}
if(r11=="3,1"){r11la=7}      
document.getElementById("ParamRad"+r11la).checked=true
			}						
						
						
						
			if(xtl[0]==3 & xtl[1]==1){//courbe
document.getElementById("lblong").innerHTML="12 - données de comparaison"			
			var xtl11=new Array()
			
			if( typeof(textarecup[i])=="string"){xtl11=textarecup[11].split(',')}else{xtl11=textarecup[11]}

document.getElementById("ParamCourb"+(parseInt(xtl11[0])+1)).checked=true
document.getElementById("ParamCourb"+(4+parseInt(xtl11[1])+1)).checked=true
			}							
			
			
			if(xtl[0]==3){nbc=textarecup[(i+4)];nbl=textarecup[(i+3)];var visib="visible";if(xtl[1]==0){typq=2}else{typq=3};
						
						
						
						
						
						
						document.getElementById("input5").setAttribute("style","visible;background-color:white")
			if(typq==3){document.getElementById("input11").setAttribute("style","visible;background-color:gray")
			document.getElementById('spaninput8').style.display="block"
			if(xtl[1]==1){document.getElementById("paraCourbe").style.display="block"}// paramètres des Courbes
			}
						}
						if(xtl[0]==1){nbc=zero.length;nbl=1;var visib="hidden";
						if(xtl[1]==2){typq=1}
						if(xtl[1]==3){typq=4}												
						document.getElementById("input5").setAttribute("style","visible;background-color:gray")
						if(xtl[1]==3){document.getElementById("paraRadar").style.display="block"
document.getElementById("input11").setAttribute("style","visible;background-color:gray")
sauf=1;											
						} // paramètres des Radars

						}
						if(xtl[0]>0 ){}else{nbc=zero.length;nbl=1;var visib="hidden";typq=1} // aucun type de graphique cas insertion au rang 0
				
						//tchecked
						document.getElementById("nblign").style.visibility=visib // ligns
						document.getElementById("nblign").value = nbl // ligns
						document.getElementById("nbcol").value = nbc  // colonnes
						//alert('nblign= '+nbl+' nbcol= '+nbc)
						//alert('typq= '+typq)
						document.getElementById("Q_"+typq).checked="true"
						if(xt==""){xt="1,2"}
					}//FIN DE i==3
					if(i==4 || i==5){
						//alert(typeof(textarecup[i]))
						if( typeof(textarecup[i])=="string"){xtl=textarecup[i].split(',')}else{xtl=textarecup[i]}
						if(xtl[0]){
			
			var tipla=document.getElementById("input3").value.split(',')

			if(tipla[0]==1  &  tipla[1]==3 & i==5){// Données de comparaison dansle cas RADAR
			xt=xtl.join()
			}else{
			
						if(typeof(xtl[0])=="number"){}else{
							if(xtl[0].substr(0,1)=='"'){xtl[0]=xtl[0].replace(/"/g,'')}
							}
							xt='"'+xtl[0]
							for(m=1;m<xtl.length;m++){	
							if(typeof(xtl[m])=="number"){}else{
								if(xtl[m].substr(0,1)=='"'){xtl[m]=xtl[m].replace(/"/g,'')}	
							}								
								xt+='","'+xtl[m]
							}
							xt+='"'
			}
							
							
						} else{xt=""}
					//	alert(xt)
					}
					document.getElementById('input'+i).style.visibility="visible"
					document.getElementById('input'+i).value = xt;
		}
	}
	document.getElementById('input3').style.visibility="hidden"			
	document.getElementById('submit').style.visibility="hidden"	
	actualise()
}


var pointe=0
var statdispl

function pointancre(a){
if(a==-1) { a=0 }

ancre="#ancre"+a
pointe=a
}


function complet(){
for(i=pointe;i>-1;i--){
document.getElementById("tr"+i).style.display="block"

}

}
var idscroly=0
function liste(){

	texteliste=""
	var backcolor
	var entete_num
	//onscroll='complet()' 

	texteliste+="<div style='position:relative;top:-20px;z-index:3'><b style='font-size: 12px;'>Menu</b><br/></div><div id='liste'  style='height:540px; width:300px; border: 1px black; overflow:scroll; background-color: white;position:relative;top:-20px'><table style='font-size: 10px; font-family: arial'>"
	for(m=0;m<titre2.length;m++){
	if(m<pointe){statdispl="none"}else{statdispl="block"}
		entete=titre2[m][9]
		entete_num=m+1
		if(m==k){ backcolor="yellow" } else{
			if(pair(m)==1){ backcolor="#E3E3E3" } else if(pair(m)==0){ backcolor="#FFFFFF" } 
		}
	texteliste+="<tr id='tr"+m+"'  style='display:"+statdispl+";align:left;width:300px'><td  style='background-color:"+backcolor+";'><a name='ancre"+m+"' id='lien"+m+"' class='lienmenu' href='#' onclick='javascript:setrgergd(3,"+m+");' style='text-decoration:none;'><b>"+entete_num+". "+entete+"</a></td></tr>"	
	entete=""
	}
	texteliste+="<tr><td><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></td></tr></table></div>"
	document.getElementById('menu').innerHTML = texteliste
	document.getElementById("liste").scrollTop=1
	setTimeout('document.getElementById("liste").setAttribute("onscroll","complet()")',20)
}

var caseffacefin=0
function insert(a,b){  //action sur le tableau de données en mémoire : b=1 si insertion et b=-1 si effacement
//	alert(a+' : '+b)
if(b==-1 & a==titre2.length-1){caseffacefin=a;k=0}
	var avModif = new Array()
	avModif=titre2
	if(b==1) {
	z=1
	} else if(b==-1) {
	z=-1
	}
	var nouvo = new Array()
	var temp = new Array()
	for(i=0;i<avModif.length+z;i++){
		if(i < a) {
			nouvo[i]=avModif[i]
		} else if(i == a){
			if(b==1){
				for(j=0;j<13;j++){
					if(j==3){
						temp[j] = new Array(1,2)
					} else if(j==11) {
						temp[j] = ""//new Array(0,0,0,20,0,155,0,0,0,0)
					} else{
						temp[j] = ""					
					}
				}
				nouvo[i]=temp // ajoute le nouveau tableau vierge
			} else if(b==-1){
				// ajoute tab+1
				nouvo[i]=avModif[i+1]
			}
		} else if(i > a){
			if(b==1){
				// dans le cas insérer
				nouvo[i]=avModif[i-1]
			} else if(b==-1){
				// dans le cas effacer
				nouvo[i]=avModif[i+1]
			}
		} 
	}
	titre2=nouvo
	a=0
	b=0
	z=0
	//validation()
}

// déplacer ; dupliqué
function positionFrom(a){// prang de départ de déplacer
document.getElementById("divdeplac").style.visibility="visible"
document.getElementById("divduplic").style.visibility="hidden"
posFrom=a
}
function positionFromdupl(a){// prang de départ de dupliquer
document.getElementById("divdeplac").style.visibility="hidden"	
document.getElementById("divduplic").style.visibility="visible"
posFrom=a
}
function deplace(){
de = parseInt(posFrom)+1
a = parseInt(posTo)+1
alert('Déplacer : '+de+' > '+a)
transit=titre2[posFrom]
insert(posFrom,-1)
var titre2cache = new Array()
titre2cache = titre2
	var titre2temp=new Array()
	for(i=0;i<titre2cache.length+1;i++){
		if(i < posTo){
			titre2temp[i]=titre2cache[i]
		} else if(i == posTo){
			titre2temp[i]=transit
		} else if(i > posTo){
			titre2temp[i]=titre2cache[i-1]
		}
	titre2=titre2temp
	}	
document.getElementById("divdeplac").style.visibility="hidden"
titre2temp="";
titre2cache="";
transit="";
}
function dupliquex(){
de = parseInt(posFrom)+1
a = parseInt(posToDupl)+1
alert('Dupliquer : '+de+' > '+a)
transit=titre2[posFrom]
var titre2cache = new Array()
titre2cache = titre2

	var titre2temp=new Array()
	for(i=0;i<titre2cache.length+1;i++){
		if(i < posToDupl){
			titre2temp[i]=titre2cache[i]
		} else if(i == posToDupl){
			titre2temp[i]=transit
		} else if(i > posToDupl){
			titre2temp[i]=titre2cache[i-1]
		}
	titre2=titre2temp
	}	
document.getElementById("divduplic").style.visibility="hidden"
titre2temp=""
titre2cache=""
transit=""
}
var indicvalid=1
var bonpourvalidation=1


function cacheEnreg(){
document.getElementById('submit').style.visibility="visible"
document.getElementById('enreg').style.visibility="hidden"	
indicvalid=0
bonpourvalidation=1
}


function validation(){//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
indicvalid=0
var tOK=1
for(n=0;n<tsi.length;n++){
if(document.getElementById("input"+tsi[n]).value==""){tOK=0;}
}

if( tOK==1 ){

//	alert('attention: modification du formulaire!')
	document.getElementById('submit').style.visibility="visible"
	document.getElementById('enreg').style.visibility="hidden"	
	bonpourvalidation=1
	}
	else{document.getElementById('submit').style.visibility="hidden"
	bonpourvalidation=0
	}
}
function validation2(c){

	var temp3=new Array()
	for(i=0;i<13;i++){
	
		/*
		if(i==0){	
		
			var tst=document.getElementById("input0").value.split(',')
if(tst[1]=="" & tst[0]!=""){ document.getElementById("input0").value=tst[0]+",0";
//document.getElementById("input3").value="2,0"
}
		temp3[i]=tst[0]+",0";
		*/
		//} else {
		

		var templa=document.getElementById("input"+i).value
		if(i==1 || i==2 || i==9 ){//|| i==12
		templa=templa.replace(/,/g," ")
		templa=templa.replace(/'/g," ")
		templa=templa.replace(/  /g," ")
		//if(i==12){alert("ici")}
		}
		if(i==4 || i==5){
var tipla=document.getElementById("input3").value.split(',')

if(tipla[0]==1  &  tipla[1]==3){templa=templa.replace(/"/g,"")}
		templa=templa.replace(/","/g,'"@"')
		templa=templa.replace(/'/g," ")
	
if(tipla[0]==1  &  tipla[1]==3){}else{
		templa=templa.replace(/,/g," ")
}
		
		templa=templa.replace(/  /g," ")
		templa=templa.replace(/"@"/g,'","')
		
		}
		temp3[i]=document.getElementById("input"+i).value
		}
//	if(i==0){ alert("input0: "+temp3[i]) }
	//}
	//alert('attention: validation du formulaire!')
	titre2[c]=temp3
	indicvalid=1
}

function pair(nombre){
   if(nombre/2 == Math.round(nombre/2)){
      return 1;
   }else{
      return 0;
   }
}

function fermerdiv(){
	document.getElementById("divduplic").style.visibility="hidden"
	document.getElementById("divdeplac").style.visibility="hidden"
}
function appsubmit(){
	document.getElementById('enreg').style.visibility="visible"
}
function enregistrer(){
	var xt=""
	var xtl=new Array()	
	var y=0
	var genereinput=""
	var form=""
	var tab=new Array()
		for(p=0;p<titre2.length;p++){
		tab=titre2[p]
for(q=0;q<13;q++){
			
					if(q==4 || q==5){
						if( typeof(tab[q])=="string"){xtl=tab[q].split(',')}else{xtl=tab[q]}
						if(xtl[0]){
						if(typeof(xtl[0])=="number"){}else{
							if(xtl[0].substr(0,1)=='"'){ xtl[0]=xtl[0].replace(/"/g,'')}
						}
							xt='"'+xtl[0]
							for(m=1;m<xtl.length;m++){	
				
							if(typeof(xtl[m])=="number"){}else{
								xtl[m]=xtl[m].replace(/'/g,"x@x")
								if(xtl[m].substr(0,1)=='"'){xtl[m]=xtl[m].replace(/"/g,'')}		
							}								
								xt+='","'+xtl[m]
							}
			
							xt+='"'
							
						} else{xt=""}
						tab[q] = xt
					}			
					
			
		
	
	
			if(q==4 || q==5){
			var xixi=tab[q]
			
			genereinput+="<input type='text' name='N["+y+"]' value=\'"+xixi+"\' style='visibility:hidden'>"}	
			else{genereinput+="<input type='text' name='N["+y+"]' value=\""+tab[q]+"\" style='visibility:hidden'>"}
			
				y=y+1;
		}	
	}
	form+="<form name='send_var' method='post' action='MANAGERIco2.php'>";
	form+=genereinput;
	form+="<input type='hidden' name='REP' value='"+REP+"'><input type='hidden' name='cible' value='"+cible+"'></form>";
	document.getElementById("generation_input").innerHTML=form
	//alert(form)
	document.send_var.submit()
}



// ------------------------------------------ Gestion popup data -------------------------------------
var typici=""
function tabtypici(a){
	typici=""//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
	if(a=="histosimple"){typici="1,2";document.getElementById("nblign").style.visibility="hidden";tsi=new Array(0,1,2,4,9,11,12);
	document.getElementById('spaninput8').style.display="none"	
	document.getElementById("input5").setAttribute("style","visible;background-color:gray")
	document.getElementById("input11").setAttribute("style","visible;background-color:white")
	}
	if(a=="histoMulti"){typici="3,0";document.getElementById("nblign").style.visibility="visible";tsi=new Array(0,1,2,4,5,9,11,12);
	document.getElementById('spaninput8').style.display="none"	
	document.getElementById("input5").setAttribute("style","visible;background-color:white")
	document.getElementById("input11").setAttribute("style","visible;background-color:white")
	}
	if(a=="courbe"){typici="3,1";document.getElementById("nblign").style.visibility="visible";tsi=new Array(0,1,2,4,5,8,9,11,12);
	document.getElementById('spaninput8').style.display="block"	
	document.getElementById("input5").setAttribute("style","visible;background-color:white")
	document.getElementById("input11").setAttribute("style","visible;background-color:gray")
	}
	if(a=="radar"){typici="1,3";document.getElementById("nblign").style.visibility="hidden";tsi=new Array(0,1,2,4,9,11,12);
	document.getElementById('spaninput8').style.display="none"	
	document.getElementById("input5").setAttribute("style","visible;background-color:gray")
	document.getElementById("input11").setAttribute("style","visible;background-color:white")
	document.getElementById("input11").setAttribute("style","visible;background-color:gray")
	sauf=1;
	}
	return a
}
var stock5
function affectType(a,b){
document.getElementById('submit').style.visibility="visible"	
if(a== "radar"){
	document.getElementById("paraRadar").style.display="inline"// Paramètres des Radars affichés
		document.getElementById("paraCourbe").style.display="none"// Paramètres des Courbes occultés

}
if(a=="courbe" ){
	document.getElementById("paraCourbe").style.display="inline"// Paramètres des Courbes affichés
		document.getElementById("paraRadar").style.display="none"// Paramètres des Radars affichés
}
if(a!="courbe" & a!= "radar"){
	document.getElementById("paraCourbe").style.display="none"// Paramètres des Courbes occultés
	document.getElementById("paraRadar").style.display="none"// Paramètres des Radars occultés
	}
	
	if(a=="histosimple" || a== "radar"){
		document.getElementById("input5").value = ""
		document.getElementById("input6").value = ""
		document.getElementById("input7").value = ""
	    document.getElementById("nblign").value=1
		tableauligncol=new Array()
				for(w=0;w<parseInt(document.getElementById("nbcol").value);w++){
				tableauligncol[w]=document.getElementById("input0").value.split(',')[w]
				}
		document.getElementById("input0").value=tableauligncol
	}
	if(a=="histoMulti" || a=="courbe"){
		document.getElementById("input6").value = nbl
		document.getElementById("input7").value = nbc
	}
	tabtypici(a)
	document.getElementById("input3").value = typici
	//validation()
	cacheEnreg()
}

var tableauligncol=new Array()

function addtableauligncol(a,b){
tableauligncol[a]=b
}
var IDnumdenum
var nbc=0
var nbl=0

function ouvtableau(b,idnumdenum){//zencours
IDnumdenum=idnumdenum // indique l'id de la balise d'appel de la fonction

if(PC==1){
decalColonnesPrincipal();
decalTableauPrincipal(1)
}else{}
var I=0

for(i=1;i<typ.length;i++){
//alert(document.getElementById("Q"+b+"_"+i).checked)
if(document.getElementById("Q_"+i).checked==true){I=i}
}

if(I==1){typici="1,2"}
if(I==2){typici="3,0"}
if(I==3){typici="3,1"}
if(I==4){typici="1,3"}
nbc=document.getElementById("nbcol").value
nbl=document.getElementById("nblign").value
zencours=b
ouvtableauSuite(b,IDnumdenum)
}
function ouvtableauSuite(b,idnumdenum){
IDnumdenum=idnumdenum// indique l'id de la balise d'appel de la fonction

//alert("nbc="+nbc+"    nbl="+nbl)
if((nbc>0 & nbl>0 ) || typici[0]==1){

if(typici[0]!=1 || (typici[0]==1 & typici[1]==3) ){
document.getElementById("input6").value = nbl
document.getElementById("input7").value = nbc
}else{
document.getElementById("input6").value = ""
document.getElementById("input7").value = ""
}
libel(b)
}else{alert("désolé : saisie incomplète /nb ligne et nb colone") }

}

function change_ici(a){
//alert("change_ici()")
var indexla=window.frames.framedata.document.getElementsByTagName("select")[a].selectedIndex
window.frames.framedata.document.getElementById("popup"+a).title=lignelibel[indexla+2]
addtableauligncol(a,indexla+2)
}
function libel(u){ //u=zencours      affichage des entêtes de colonne du fichier de données
//alert("libel(u)")
tabl=""
rgtab=0

tableauligncol=new Array()//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
for(c=0;c<nbc;c++){ // d'abord les colones
for(l=0;l<nbl;l++){ // ensuite les lignes

tableauligncol[rgtab]=0
rgtab+=1
}
}
//$$$$$$$  tableauligncol=new Array()   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
init1=0
menudata=""
window.frames.framedata.document.getElementById("ici").innerHTML=""
zencours=u
document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:visible;z-index:5")
//document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:110;right:32;visibility:visible;z-index:5")
if(init1==0){//récupère les entêtes de colone dans le fichier de données
window.frames.filedata.rgappel(0)
LLx=window.frames.filedata.longueurdata("return longa")+8
lignelibel=window.frames.filedata.transbas00de0("return lignelabel")
init1=1
rgtab=0 // rang dans la mémoire correspondant au tableau colonne par colonne en partant du haut à gauche
// formation du tableau
tabl+="<br><br><br><br>"
tabl+='<table><tr>'
for(c=0;c<nbc;c++){ // d'abord les colones
//___________________________________
if(c==0){// d'abord la colonne des libélés lds lignes du tableau
tabl+='<td ><table ><TR><td>Libellé</td></tr>'
for(l=0;l<nbl;l++){ // ensuite les lignes

tabl+='<TR height="45px"><td  id="l0'+l+'" name="c0'+c+'">'
tabl+='<form><input id="Tlign'+l+'" type="text" style="width:60px" value="" /></form>'
tabl+='</td></TR>'
}
tabl+='<TR><td><input  type="text" value="zz" style="width:60px;visibility:hidden" /></td></tr></table></td>'

}// fin de la colonne des libélés lds lignes du tableau
//____________________________________
tabl+='<td ><table ><TR><td>'+c+'</td></tr>'
for(l=0;l<nbl;l++){ // ensuite les lignes
tabl+='<TR height="45" ><td  id="l'+l+'" name="c'+c+'"><form id="menu'+rgtab+'" NAME="menu'+rgtab+'"><select onchange="parent.change_ici('+rgtab+')" id="popup'+rgtab+'" NAME="popup'+rgtab+'" style="width:60px;color:red;font-size:15px" title="xxx" >'
tabl+='<option  onclick="parent.addtableauligncol('+rgtab+',0);"     > </option>'
for(i=3;i<lignelibel.length;i++){//forme le menu des entêtes de colonne de données   alert(\'n° col données=\'+'+i+'+\'  rgtab=\'+'+rgtab+')
tabl+='<option id="'+rgtab+'_'+i+'"  title="'+lignelibel[i]+'"  style="color:navy;font-size:15px" ad="'+lignelibel[i]+'">n°'+i+' - '+lignelibel[i]+'</option>'
}
rgtab+=1
tabl+='</select></form></td></TR>'
}
tabl+='<TR><td><input id="Tcol'+c+'" type="text" style="width:60px" value=""/></td></tr></table></td>'
}
tabl+='</tr></table>'
menudata+=tabl
}
menudata+='<div id="divfermer" style="position:fixed;top:45px;right:0px;visibility:visible;z-index:5"><input type="button" name="datafermer" onclick="javascript:parent.fermermenudata()" value="fermer le menu de données"></input></div>'
window.frames.framedata.document.getElementById("ici").innerHTML=menudata

				// gestion des entêtes de colone et préselection des menus dans le tableau
				var xtlici=document.getElementById(IDnumdenum).value
				xtlici=xtlici.split(',')
				for(w=0;w<xtlici.length;w++){
				tableauligncol[w]=xtlici[w]
				window.frames.framedata.document.getElementsByTagName("select")[w].selectedIndex=(xtlici[w]-2+defalq)
				
				var titleici=window.frames.framedata.document.getElementById(w+"_"+(parseInt(xtlici[w])+defalq)).firstChild.data
				window.frames.framedata.document.getElementsByTagName("select")[w].title=titleici
				}
				
				// affichage des libélés de colonne du tableau
				var xtlici2=document.getElementById("input4").value
				xtlici2=xtlici2.split(',')
				for(c=0;c<nbc;c++){
					if(xtlici2[l]){
					window.frames.framedata.document.getElementById("Tcol"+c).setAttribute("value",xtlici2[c])
					window.frames.framedata.document.getElementById("Tcol"+c).setAttribute("title",xtlici2[c])
					}
				}

				var xtlici2=document.getElementById("input5").value
				
				xtlici2=xtlici2.split(',')
				for(l=0;l<nbl;l++){
					if(xtlici2[l]){
					window.frames.framedata.document.getElementById("Tlign"+l).setAttribute("value",xtlici2[l])
					window.frames.framedata.document.getElementById("Tlign"+l).setAttribute("title",xtlici2[l])
					}
				}
zencourstemp=zencours
cibleXtemp=cibleX
}
var list=new Array()
var standard=new Array()

function libel2(u){

if(sauf==0){
if(document.getElementById("input3").value=="3,1"){}else{
	window.frames.framedata.document.getElementById("ici").innerHTML=""
	document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:visible;z-index:5")
//	document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:110;right:32;visibility:visible;z-index:5")
	zencours=u

	paramhc="<b><big><dt id='titre'>paramètres des histo et courbes<dt></big></b><br><br><br><br><br><br><br>"
	// Stanndard ou valeurs fichier
	paramhc+='<div id="divfermer2" style="position:fixed;top:01;right:20;visibility:visible;z-index:5"><dt><font style="color:navy"><b>Charger les parametres</b></font></dt><input type="radio"  id="T1_1" name="T1" value="1" onClick=" parent.paramStandard();">fichier</input><input type="radio" id="T1_2" name="T1" value="2" onClick="parent.paramStandard()" value="0" type="text">Standard</imput></div>'
	// histo 100% ou normal
	paramhc+='<div id="divfermer3" style="position:fixed;top:35;right:27;visibility:visible;z-index:5"><dt ><font style="color:navy"><b>Mode absolu ou 100%</b></font></dt><input type="radio"  id="T2_1" name="T2" value="1" onClick=" parent.paramStandard();parent.bradiocentouabso(0)">absolu</input><input type="radio" id="T2_2" name="T2" value="2" onClick="parent.paramStandard();parent.bradiocentouabso(100)" value="0" type="text">100%</imput></div>'
	//bouton fermer
	paramhc+='<div id="divfermer" style="position:fixed;top:68;right:0;visibility:visible;z-index:5"><input type="button" name="datafermer" onclick="javascript:parent.fermermenudata2()" value="fermer le menu de données"></input></div>'
	// tableau des paramètres 

	paramhc+='<form name="param"><table style="font-size:9px;text-align: left; margin-left: auto; margin-right: auto; " border="1" cellpadding="0" cellspacing="0">'
	for(i=0;i<10;i++){
		paramhc+='<tr><td width="100px" id="Tparam'+i+'">azeer</td><td><input id="val'+i+'" type="text" style="width:50px" /></td><td width="50px" id="autre'+i+'">x</td></tr>'
	}
	paramhc+='</table></form>'

	window.frames.framedata.document.getElementById("ici").innerHTML=paramhc
	window.frames.framedata.document.getElementById("T1_"+1).checked="true"
	window.frames.framedata.document.getElementById("T2_"+1).checked="true"
	paramStandard()
}
}
}

var fich
var centpourcent
var standard=new Array()
var selection=new Array()

function paramStandard(){
	var I=0
	// test si on vet les données paramètre du chier ou les paramètres standards
	if(window.frames.framedata.document.getElementById("T1_1").checked==true){fich=1}else{fich=0}
	// test si absolu ou 100%
	if(window.frames.framedata.document.getElementById("T2_1").checked==true){centpourcent=0}else{centpourcent=1}

	//test type Graphique
	for(i=1;i<typ.length;i++){
	//alert(document.getElementById("Q_"+i).checked)
	if(document.getElementById("Q_"+i).checked==true){I=i}
	}
	if(I==1){
		window.frames.framedata.document.getElementById("titre").firstChild.data="Histogramme Simple"
		list=new Array("","","","largeur barre","","hauteur graph","","","","");
		selection=new Array(0,0,0,1,0,1,0,0,0,0)
		standard=new Array(0,0,0,20,0,155,0,0,0,0)
	}
	if(I==2){
		window.frames.framedata.document.getElementById("titre").firstChild.data="Histogramme Multiple"
		selection=new Array(1,0,0,1,0,0,0,1,1,0)
		list=new Array("absolu ou 100%","centrage chiffre /IE","largeur bord gauche","largeur barre","ajustement vertical","règle de gradution","facteur d'échelle","inter barres","seuil vision chiffre","hausse des chiffres");
		if(centpourcent==0){
			standard=new Array(20,-23,10,25,100,155,0,5,1000,-20)
		}else{
			standard=new Array(120,-23,10,25,100,155,0,5,1000,-20)
		}
	}
	if(I==3){
		window.frames.framedata.document.getElementById("titre").firstChild.data="Courbe"
	}
	if(fich==1){// CAS Fichier
		standard=document.getElementById("input11").value
		standard=standard.split(',')
	}
// affichage
	for(i=0;i<10;i++){
		window.frames.framedata.document.getElementById("Tparam"+i).firstChild.data=list[i]
		window.frames.framedata.document.getElementById("val"+i).setAttribute("value",standard[i])
		if(selection[i]==1){var sty="width:50px;font-weight:bold;color:navy"}else{var sty="width:50px;color:gray"}
		window.frames.framedata.document.getElementById("val"+i).setAttribute("style",sty)
		if(i==0 & I==2){
		bradiocentouabso(standard[0])//gère le bouton 100% ou absolu
		}
	}

}

function bradiocentouabso(a){ //gère le bouton 100% ou absolu
	if ((a==100 || a=="100")){
	window.frames.framedata.document.getElementById("val"+0).value = "100"
	window.frames.framedata.document.getElementById("T2_2").checked=true
	}else{
	window.frames.framedata.document.getElementById("val"+0).value = "0"
	window.frames.framedata.document.getElementById("T2_1").checked=true
	}
}

function fermermenudata2(){
	var std=window.frames.framedata.document.getElementById("val"+0).value
	for(i=1;i<10;i++){
		std+=","+window.frames.framedata.document.getElementById("val"+i).value
	}
	document.getElementById("input11").value=std
	document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:hidden")
//	document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:105;right:32;visibility:hidden")
	validation()
}

var lignelibelcomplementaire=0
function decalColonnesComplementaire(){
lignelibelcomplementaire=window.frames.filedata.transbas00de0("return lignelabel").length
}

function decalColonnesPrincipal(){
lignelibelPrincipal=window.frames.filedata2.transbas00de0("return lignelabel")
defalq=lignelibelPrincipal.length-3//+lignelibelcomplementaire-3
//alert(defalq)
}
function decalTableauPrincipal(a){

for(i=0;i<tableauligncol.length;i++){
if(tableauligncol[i]>=0){
tableauligncol[i]=parseInt(tableauligncol[i])+a*parseInt(defalq)
}
}

}

function returndefalq(){return defalq}

function fermermenudata(){
document.getElementById('submit').style.visibility="visible"	// affiche le bouton valider de validation du formulaire
if(document.getElementById("PC_1").checked==true){PC=1}else{PC=2}
if(PC==1){

decalColonnesPrincipal()
decalTableauPrincipal(-1)
}else{lignelibelPrincipal=0;defalq=0}

	document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:hidden;z-index:5")
//	document.getElementById("divfiledata2").setAttribute("style","position:fixed;top:105;right:32;visibility:hidden")
	//document.getElementById("input0").value = tableauligncol
document.getElementById(IDnumdenum).value = tableauligncol
	var virg=""
	var libc=""
	for(i=0;i<nbc;i++){
		var dfg=window.frames.framedata.document.getElementById("Tcol"+i).value
		if(i>0){var virg=','}
		if(dfg != ""){
			if(dfg.substr(0,1)=='"'){dfg=virg+dfg}else{dfg=virg+'"'+dfg+'"'}
			libc+=dfg
		}
	}
	if(IDnumdenum=="input5" || IDnumdenum=="input12" ){}else{
	document.getElementById("input4").value = libc //.replace(/"/g,'')
	}
	var virg=""
	var libl=""
	for(i=0;i<nbl;i++){
		var dfg=window.frames.framedata.document.getElementById("Tlign"+i).value
		if(i>0){var virg=','}
		if(dfg != ""){
			if(dfg.substr(0,1)=='"'){dfg=virg+dfg}else{dfg=virg+'"'+dfg+'"'}
			libl+=dfg
		}
	}
	//alert(z)
	var tipla=document.getElementById("input3").value.split(',')

if((tipla[0]==1  &  tipla[1]==3) || IDnumdenum=="input5" || IDnumdenum=="input12" ){}else{
	document.getElementById("input5").value = libl  //.replace(/"/g,'')
	}
	//alert(libc+' ; '+libl)
	if(nbc==1 & document.getElementById("input0").value.indexOf(',')<0){
	var truc=document.getElementById("input0").value
	truc+=",0"
	document.getElementById("input0").value=truc
	//attrib(tableauligncol[0])
	}	///////// modif_ici
	//validation2(k);appsubmit();aff(k)		
	//validation()	
}

var indiclibeldate=1
	
function indicrecuplibelLdate(a){
indiclibeldate=a
}

function attrib(b){ // lorsqu'on clique sur  un bouton radio du menu des données 
valeur=b

//document.getElementById(cibleXtemp).setAttribute("style","background-color:white")
//document.getElementById(cibleX).setAttribute("style","background-color:pink")
//document.getElementById(cibleX).value=valeur

if(indiclibeldate==1){ //1=oui à la question " charger les libélés longs et la date à partir du fichier"
//Attention : écrase les valeurs existantes dans les aréas
// mais les nouvelles valeurs ne sont pas inscrites dans le fichier .js tant qu'on n'a pas enregistré. En cas d'erreur, si on n'a pas enregistré,  on peut réactualiser 
valeur=parseInt(valeur)+defalq

//libelés courts pour le titre menu et le titre de la légende : récupère par défaut les entêtes de colonne dans le fichiers data-xxx.html
window.frames.filedata.rgappel(LLx-7)
lignedata=window.frames.filedata.transbas00de0("return lignelabel");
if(lignedata[valeur]=="-99999" || lignedata[valeur]==(-99999)){lignedata[valeur]=""}
document.getElementById("input1").value=lignedata[valeur];
document.getElementById("input9").value=lignedata[valeur];

//libellé le long
window.frames.filedata.rgappel(LLx-6)
lignedata=window.frames.filedata.transbas00de0("return lignelabel");
if(lignedata[valeur]=="-99999" || lignedata[valeur]==(-99999)){lignedata[valeur]=""}
document.getElementById("input12").value=lignedata[valeur];


// source
window.frames.filedata.rgappel(LLx-5)
lignedata=window.frames.filedata.transbas00de0("return lignelabel")

var sourceici=lignedata[valeur]
if(lignedata[valeur]=="-99999" || lignedata[valeur]==-99999){sourceici="source?"}
//date de validité
window.frames.filedata.rgappel(LLx-4)
lignedata=window.frames.filedata.transbas00de0("return lignelabel")
if(lignedata[valeur]=="-99999" || lignedata[valeur]==-99999){lignedata[valeur]="date?"}
document.getElementById("input2").value=sourceici+" "+lignedata[valeur]
}
}
var PC=2
function chargePrincipal(){
window.frames.filedata.location.href="../../"+urlvar["REP"]+"/principal.html?alea="+Math.random()
//PrincComp.htm?cible=../../"+urlvar["REP"]+"/PageCartoDossier/PageCarto/principal.js?updated=1234567890"//"
//if(document.getElementById('input2').indexOf(" (principal)")>0){document.getElementById('input2').value+=" (principal)"}
}
function chargeComplementaire(){
window.frames.filedata.location.href="../../"+urlvar["REP"]+"/complementaire.html?alea="+Math.random()
//"PrincComp.htm?cible=../../"+urlvar["REP"]+"/PageCartoDossier/PageCarto/complementaire.js?updated=1234567890"//
//document.getElementById('input6').value="complementaire"
}
</script>
</head>

<body style="font-family:arial;font-size:10px;background-color:#E6E4E3;">
<center >


<div id="divfiledata" style="position:fixed;top:100px;left:40px;visibility:hidden;z-index:5"><iframe id="framedata" name="framedata" style="background-color: #F9FAFD;opacity:1"  src="vide.htm" width="510" height="370" ></iframe></div><div id="divfiledata" style="position:fixed;top:100px;left:40px;visibility:hidden;z-index:5"><!--iframe id="framedata" name="framedata" style="background-color: #F9FAFD;opacity:1"  src="vide.htm" width="310" height="350" ></iframe--></div>
<div id="divfiledata2" style="position:fixed;top:102px;left:42px;visibility:hidden;z-index:5"><img width="510" height="370" src="Image2.gif"></div><div id="divfiledata" style="position:fixed;top:100px;left:40px;visibility:hidden;z-index:5"><!--iframe id="framedata" name="framedata" style="background-color: #F9FAFD;opacity:1"  src="vide.htm" width="510" height="370" ></iframe--></div>
<div id="divdeplac" style="position:fixed;font-size:12px;top:110;left:50;visibility:hidden;color:red;font-weight:bold;z-index:1;background-color:white">déplacer <span id="depl"></span> vers n° <input id="deplace" type="text" style="width:40px" name="deplace" value="" title=""><input id="OKdeplace" type="button"  name="OKdeplace" value="OK" onClick="setrgergd(6)" title=""></div>
<div id="divduplic" style="position:fixed;font-size:12px;top:110;left:50;visibility:hidden;color:red;font-weight:bold;z-index:1;background-color:white">dupliquer <span id="dupl"></span> vers n° <input id="dupliqx" type="text" style="width:40px" name="dupliqx" value="" title=""><input id="OKduplique" type="button"  name="OKduplique" value="OK" onClick="setrgergd(7)" title="">



</div>
<div style="position:fixed;top:2;left:2;">
<input id="submit" type="button" value="Valider" onClick="validation2(k);appsubmit();aff(k)" title="enregistre les données">
</div>
<!--div style="position:fixed;top:32;left:10;">
<input id="submit2" type="submit" value="Valider" disabled="disabled" style="display:none;">
</div-->
<table width="554" align="center" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif;">
<tr align="center">
<td width="341" valign="top"> 
  <!--   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  -->
  <a HREF="#" onclick="document.location.reload();return(false)"><b>Rafraîchir le cadre</b></a>      
   <a HREF="#" onclick="top.popuaideMENUSDATA('modifier-menus-manuellement')"><b>aide</b></a><br><br>
<form  method="post" Onkeyup="javascript: validation()  ; var alerter=''; var inputs=new Array(document.getElementById('input0').value,document.getElementById('input1').value,document.getElementById('input2').value,document.getElementById('input4').value,document.getElementById('input5').value,document.getElementById('input9').value,document.getElementById('input11').value,document.getElementById('input12').value); detect(inputs,CaracteresInterdits3);" onkeypress="refuserToucheEntree(event);" name="saisie">
<div id="formulaire">
<a id="inser" href="#" onClick="validation2(k);setrgergd(4)">Insérer</a> - 
<a id="suppr" href="javascript:indicvalid=1;setrgergd(5)">Effacer</a> - 
<a id="depl" href="javascript:validation2(k);positionFrom(k);">Déplacer vers</a> - 
<a id="dupl" href="javascript:validation2(k);positionFromdupl(k)">Dupliquer vers</a>
<br><br><input type="text" id="menutitre" value="" name="menutitre" size="10" style="text-align:center;" readonly>
<table border=0 style="font-size:8px"><tr>
<td align=center ><input type="radio" id="PC_2" name="PC" checked onClick="defalq=0;PC=2;chargeComplementaire()" /></td><td align=center ><input type="radio" id="PC_1" name="PC"  onClick="PC=1;chargePrincipal();" /></td>
</tr>
<tr>
<td>complementaire</td><td style="color:red">principal</td>
</tr>

</table>


</div>
<br>
choix du type de graphique
<br>
<script>
//boutons radios
  var typ=new Array("histosimple","histoMulti","courbe","radar") // on peut en rajouter
  var saut3=0	  
for(i=0;i<typ.length;i++){
saut3+=1	
document.write('<input type="radio" id="Q_'+(i+1)+'" name="Q" value="'+typ[i]+'" onClick="affectType(this.value,k)">'+typ[i]+'</input>')
if(saut3==3){document.write('<br>');saut3=0}
}
document.write('<br>')
//choix des nb colonnes et nb lignes -------2 input  bouton OK : si les deux remplis enclenchent l'affiche du tableau ligne et collone sinin alert( sasir les deux)
document.write('<div><input style="width:20px" id="nbcol" value="0" type="text" onclick="javascript:zencours='+k+';" />---<input style="width:20px;visibility:hidden"  id="nblign" value="1" type="text" onclick="javascript:zencours='+k+'" /></div>Nb Colonnes--------Nb lignes<input type="button" value="valider lignes+colonnes et voir tableau" onclick="zencours='+k+';z=zencours*13;ouvtableau(zencours, \'input0\')" />')

document.getElementById("Q_1").checked="true"
</script>
<br><br>
<div id="alert" style="visibility:hidden"></div><br>
0- n° colonnes<br>
<input type="text" id="input0" name="input0" value="" size="40">
<br>
1- titre légende<br>
<input type="text" id="input1" name="input1" value="" size="40">
<br>
2- source<br>
<input type="text" id="input2" name="input2" value="" size="40">
<br>
4- libellé des colonnes<br>
<input type="text" id="input4" name="input4" value="" size="40">
<br>
5- libellé des lignes<br>
<input type="text" id="input5" name="input5" value="" size="40" onclick="if(document.getElementById('Q_4').checked==true & document.getElementById('input11').value[0]==2){ouvtableau(zencours,'input5')}">
<br>
<span id="spaninput8">
8- unités<br>
<input type="text" id="input8" name="input8" value="" size="40">
<br>
</span>
9- item menu<br>
<input type="text" id="input9" name="input9" value="" size="40">
<br>
11- les paramètres<br>
<script language="javascript" >

function PRC3(a){
var paracurve=a.value.split(",")
var paracurve11=document.getElementById("input11").value.split(",")

if(paracurve11.length>0){
paracurve11[0]=paracurve[0]
paracurve11[1]=paracurve[1]
}else{paracurve11=paracurve}

document.getElementById("input11").value=paracurve11

document.getElementById('submit').style.visibility="visible"	// affiche le bouton valider de validation du formulaire
}


function PRC(a){
var paracurve=a.value.split(",")
if(document.getElementById("input11").value!=""){

paracurve[1]=document.getElementById("input11").value.split(",")[1]
}
document.getElementById("input11").value=paracurve

document.getElementById('submit').style.visibility="visible"	// affiche le bouton valider de validation du formulaire
}
function PRC2(a){

var par=document.getElementById("input11").value.split(",")
par[1]=a.value
document.getElementById("input11").value=par.join()
document.getElementById('submit').style.visibility="visible"	// affiche le bouton valider de validation du formulaire
}
function RAZcheckCurve(){
for(i=1;i<=10;i++){
document.getElementById("ParamCourb"+i).checked=false
}
}
function RAZcheckrad(){
for(i=1;i<=7;i++){
document.getElementById("ParamRad"+i).checked=false
}
}
</script>
<dt id="paraCourbe" style="display:none"><table style="font-size:8px;text-align:center"><tr>

<td>(0,x)<br><input title="Simple curve" onclick="PRC(this)" type="radio" id="ParamCourb1"  name="bcou"  value="0,2"></td>

<td>(1,x)<br><input title="2 curves : to compare with mean of all thee countries on the map, even if value = 0 for a country (Warning : the automatic mean is not weighted)"  onclick="PRC(this)" type="radio" id="ParamCourb2"  name="bcou" value="1,2"></td>

<td>(2,x)<br><input title="2 curves : to compare with a series of data identified by a series of column numbers manually included in menu[12] like 3,5,7,9,11"  onclick="PRC(this)" type="radio" id="ParamCourb3"  name="bcou" value="2,2"></td>

<td>(3,x)<br><input title="2 curves : to compare with a series of data identified by a series of one series of numbers manually included in menu[12] like 500,2500,4100,8000"  onclick="PRC(this)" type="radio" id="ParamCourb4"  name="bcou" value="3,2"></td>

<td> Design -> (default=2)</td>

<td>0<br><input title="Broken line" onclick="PRC2(this)" type="radio" id="ParamCourb5"  name="bcou2"  value="0"></td>

<td>1<br><input title="Bezier curve : dynamic 1" onclick="PRC2(this)" type="radio" id="ParamCourb6"  name="bcou2"  value="1"></td>

<td>2<br><input title="Bezier curve: dynamic 2"  onclick="PRC2(this)" type="radio" id="ParamCourb7"  name="bcou2" value="2"></td>

<td>3<br><input title="Bezier curve: dynamic 3"  onclick="PRC2(this)" type="radio" id="ParamCourb8"  name="bcou2" value="3"></td>

<td>4<br><input title="Bezier curve: dynamic 4"  onclick="PRC2(this)" type="radio" id="ParamCourb9"  name="bcou2" value="4"></td>

<td>5<br><input title="Bezier curve: dynamic 5"  onclick="PRC2(this)" type="radio" id="ParamCourb10"  name="bcou2" value="5"></td>

<tr></table></dt>

<dt id="paraRadar" style="display:none"><table style="font-size:8px;text-align:center"><tr>

<td >(0,0)<br><input  name="brad"  title="simple Radar ( Only one series of data)" onclick="PRC3(this)" type="radio" id="ParamRad1" value="0,0" ></td>

<td>(1,0)<br><input  name="brad"  title="To compare with mean of all the countries on the map, even if value = 0 for a country (Warning : the automatic mean is not weighted)" onclick="PRC3(this)" type="radio" id="ParamRad2" value="1,0"></td>

<td>(1,1)<br><input   name="brad"  title="To compare with Mean of all the countries on the map, even if value = 0 for a country (Warning : the automatic mean is not weighted) - The reference data are standardized and result is presented in percentage of standardized reference data" onclick="PRC3(this)" type="radio" id="ParamRad3" value="1,1"></td>

<td>(2,0)<br><input  name="brad"  title="To compare with data identified by a series of column numbers included in menu[5] like 3,5,7,9,11" onclick="PRC3(this)" type="radio" id="ParamRad4" value="2,0"></td>

<td>(2,1)<br><input  name="brad"   title="To compare with data identified by a series of column numbers manually included in menu[5] like 3,5,7,9,11 - The reference data are standardized and result are presented as percent of standardized reference data" onclick="PRC3(this)" type="radio" id="ParamRad5" value="2,1"></td>

<td>(3,0)<br><input  name="brad"  title="To compare with data manually included in menu[5] like 500,2500,4100,8000 - Result and référence data are presented as source value" onclick="PRC3(this)" type="radio" id="ParamRad6" value="3,0"></td>

<td>(3,1)<br><input  name="brad"  title="To compare with data manually included in menu[5] like 500,2500,4100,8000 - The reference data are standardized and result is presented in percentage of standardized reference data" onclick="PRC3(this)" type="radio" id="ParamRad7" value="3,1"></td>

<tr></table></dt>

<script language="javascript" >
for(z=1;z<8;z++){

document.getElementById("ParamRad"+z).checked=false

}
for(z=1;z<10;z++){

document.getElementById("ParamCourb"+z).checked=false

}
</script>

<input type="text" id="input11" name="input11" value="" size="40" onclick="javascript:libel2(k)">
<br>
<span id="lblong" >12- libellé long</span><br>
<textarea id="input12" name="input12" rows="3" cols="30"></textarea>
<br>
<input type="text" id="input3" name="input3" value="" size="40">
<input type="text" id="input6" name="input6" value="" size="40">
<input type="text" id="input7" name="input7" value="" size="40">
<!--input type="text" id="input8" name="input8" value="" size="40"-->
<input type="text" id="input10" name="input10" value="" size="40">
</div>
<div style="position:fixed;top:2;left:2;visibility:hidden"><input id="enreg" type="button" name="submit" value="Enregistrer" onClick="enregistrer()"></div>
</form>
</td>
<td width="28" valign="top">
<div id="bouton" style="position:fixed;top:-15px;left:270px;">
<br><br>
<a href="#" onClick="javascript:fermerdiv();setrgergd(1,k)" title="-1"><img src="haut.jpg" width="20" height="20" style="border:none;"></a>
<br><br>
<a href="#" onClick="javascript:fermerdiv();setrgergd(2,k)" title="+1"><img src="bas.jpg" width="20" height="20" style="border:none;"></a>
</div>
</td>
<td width="169" valign="top">
<br>
<div id="menu" style="vertical-align: top;z-index:1">

</div>
<script>

setTimeout("liste();aff(k)",500)
</script>
	
</td>
</tr>
</table>
<div id="generation_input" style="visibility:hidden"></div>
<script>
document.write('<div style="visibility:hidden"><iframe id="filedata" name="filedata"  src="../../'+mappocoord[7]+'/'+mappocoord[1]+'?alea='+Math.random()+'"></iframe></div>')
document.write('<div style="visibility:hidden"><iframe id="filedata2" name="filedata2"  src="../../'+mappocoord[6]+'/'+mappocoord[0]+'?alea='+Math.random()+'"></iframe></div>')
</script>
</center>
</body>

</html>