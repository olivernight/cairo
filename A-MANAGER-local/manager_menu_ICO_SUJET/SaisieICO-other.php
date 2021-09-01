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
var menuIconeSup=new Array()
var mappocoord=new Array()
</script>
<?php

$REP = urldecode( $_GET['REP'] );
$cible = urldecode( $_GET['cible'] );
$alea=mt_rand();
echo '<script  language="javascript" src="../../'.$REP.'/'.$cible.'?updated='.$alea.'"></script>';
echo '<script  language="javascript" src="../../'.$REP.'/DATA-mappocoord.js?updated=1234567890"></script>';
echo '<script type="text/javascript" src="../Controle/Saisie/saisie.js"></script>';
echo '<script type="text/javascript" src="../Controle/bouton.js"></script>';
?>
<script type="text/javascript">


    
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

<?php

echo '<script language="javascript" src="../../mapsILIADE.js?updated='.$alea.'"></script>';
?>

<script language="javascript">
var defalq=0// décallage du nombre de colonne si on utilise l'option principal au lieu de complémentaire
var lignelibelPrincipal=0 //nombre de colonne de principal

titre=menuIconeSup

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
var typici="2,0"

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
	}
	if(a==5){ // Effacer
		k=k
		rgd=k
	}
	if(a==6){ // Déplacer
		k=parseInt(document.getElementById("deplace").value-1)
		posTo=k
		rgd=k
	}
	if(a==7){ // Dupliquer
		k=parseInt(document.getElementById("dupliqx").value-1)
		posToDupl=k
		rgd=k
	}
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
if(titre2[k]){}else{titre2[k]=new Array("","","","2,0","","","","","","","",""," ")}
//alert("deb")
document.getElementById("DataSeuil").value=-99999
document.getElementById("S1").value=-99999
document.getElementById("S2").value=-99999
document.getElementById("force").value=-99999
document.getElementById("S21").value=-99999
document.getElementById("S22").value=-99999
document.getElementById("M1").value=-99999
	pointancre(k)
	var xt=""
	
	var xtl=new Array()
	if(titre2[k]){}else{titre2[k]=new Array("","","","2,0","","","","","","","",""," ")}
	var textarecup=titre2[k]
	for(i=0;i<13;i++){
		xt=textarecup[i]


if(i==6){

document.getElementById("PC_2").checked=true;PC=2;document.getElementById('input6').value="complementaire"
if(xt=="principal"){xtTEMP="principal";document.getElementById("PC_1").checked=true;PC=1;if(lignelibelcomplementaire==0){decalColonnesComplementaire()};chargePrincipal();;}

if(PC==2 & xtTEMP=="principal"){chargeComplementaire();document.getElementById("PC_2").checked=true;PC=2;defalq=0;lignelibelPrincipal=0}
}		
		if(i==4 || i==5 || i==7 || i==8 || i==10 ){//|| i==11  || i==6 
			document.getElementById('input'+i).style.visibility="hidden"
			
			document.getElementById('input'+i).value = xt;
			

		} 
		else{


//if(i==3){alert(xt)}
					if(i==0 & k<(titre2.length)){
					var vnm
					var vdenum
					if( typeof(xt)=="string"){xtl=textarecup[i].split(',')}else{xtl=textarecup[i]}
	

					if(typeof(textarecup[3])=="string"){typici=textarecup[3][0]+","+textarecup[3][2]}else{typici=textarecup[3][0]+","+textarecup[3][1]}		
					if(typici!="2,4" ){ //si c'est différent de somme simple   ///
					vdenum=1
					vnm=xtl.length-2
							if(typici=="2,5" || typici=="2,6"){
							for(h=0;h<xtl.length;h++){if(xtl[h]=="10000001"){vnm = h;vdenum = xtl.length-vnm-1}}
							
							}
	//alert("itération  "+vnm+"  "+vdenum)
					}else{vdenum=0;vnm=xtl.length-1}
					
					var vnum=xtl[0]
					if(vdenum>1){

					var valdenum=new Array()
					valdenum[0] =xtl[vnm+1]
					for(w=vnm+2;w<xtl.length;w++){
						valdenum+=","+xtl[w]
					}			
					}else{

					if(vdenum==1){var valdenum=xtl[xtl.length-1]}else{var valdenum=0}					
					}
					
					for(w=1;w<vnm+1;w++){///////////////////////////////////////////////////////////////////
					vnum+=","+xtl[w]	
					}

					//alert("lalal")
					document.getElementById("num").value = vnum
					document.getElementById("denom").value = valdenum
					
					
					}	
					if(i==3) { 
						if(typeof(xt)=="string"){xtl=textarecup[i].split(',')}else{xtl=textarecup[i]}
						if(xtl[0]==2 & xtl[1]==0){ // valeur a 1
							document.getElementById("Q_1").checked="true"
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')						
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:hidden')
							document.getElementById("nbcol").value=1
							document.getElementById("nblign").value=0
							document.getElementById("nblign").style.visibility="hidden";
						}                                        
						if(xtl[0]==2 & xtl[1]==1){ // Pourcentage 1 valeur a/b% 4 
							document.getElementById("Q_4").checked="true"
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')						
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:visible')
							document.getElementById("nbcol").value=1
							document.getElementById("nblign").value=1
							document.getElementById("nblign").style.visibility="hidden";
						}               
						if(xtl[0]==2 & xtl[1]==2){ // Pourcentage de variation (b-a)/c%   5
							document.getElementById("Q_5").checked="true"
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')						
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:visible')
							document.getElementById("nbcol").value=2
							document.getElementById("nblign").value=1
							document.getElementById("nblign").style.visibility="hidden";
						}     
						if(xtl[0]==2 & xtl[1]==3){ // (a+b+c...+n)/d%    3 
							document.getElementById("Q_3").checked="true"
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')						
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:visible')
							document.getElementById("nbcol").value=document.getElementById("num").value.split(',').length
							document.getElementById("nblign").value=1
							document.getElementById("nblign").style.visibility="hidden";
						}                              
						if(xtl[0]==2 & xtl[1]==4){ // somme simple (a+b+c...+n)  2
							document.getElementById("Q_2").checked="true"
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')						
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:hidden')
							document.getElementById("nbcol").value=document.getElementById("num").value.split(',').length
							document.getElementById("nblign").value=0
							document.getElementById("nblign").style.visibility="hidden";
							//document.getElementById("nbcol").value = xtl.length	
						} 
						if(xtl[0]==2 & (xtl[1]==5 || xtl[1]==6)){ // somme/somme%  2
							if(xtl[1]==5){document.getElementById("Q_6").checked="true"}
							if(xtl[1]==6){document.getElementById("Q_7").checked="true"}
							document.getElementById("num").setAttribute('style','background-color:white;width:40px;visibility:visible')
							
							if(document.getElementById("num").value.indexOf("10000001")>=0){
							var numla=document.getElementById("num").value.split(",")
							var lg=numla.length
							
							var numla2=numla[0]
							for(p=1;p<lg;p++){if(numla[p]!="10000001"){numla2+=","+numla[p]}}
							
							if(numla2.split(",").length==1 & xtl[1]==6){
							numla2+=",0"
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length
							var Xip1=Xip0[0]+",0"
							for(p=1;p<lgx;p++){Xip1+=","+Xip0[p]}
							}
							
							
							document.getElementById("num").value=numla2
							}

							if(xtl[1]==6){var numvis="hidden"}else{var numvis="visible"}
							document.getElementById("nbcol").setAttribute('style','background-color:white;width:40px;visibility:'+numvis)
							
							
							
							document.getElementById("denom").setAttribute('style','background-color:white;width:40px;visibility:visible')
							if(document.getElementById("num").value.indexOf(",")){
							document.getElementById("nbcol").value=document.getElementById("num").value.split(',').length
							}else{document.getElementById("nbcol").value=1}
							document.getElementById("nblign").value=document.getElementById("denom").value.split(',').length
							document.getElementById("nblign").style.visibility="visible";

						} 
					}
					document.getElementById('input'+i).style.visibility="visible"
					if(i==12){if(xt==""){xt=" "}}// s'il ny a pas de texte mettre un blanc pour autoriser la validation avec le commentaire vide
					document.getElementById('input'+i).value = xt;
					if(i==3){
					var Xinput30=document.getElementById("input3").value
					var Xinput3=new Array() 
					for(n=0;n<10;n++){if(Xinput30.split(',')[n]){Xinput3[n]=Xinput30.split(',')[n]}else{Xinput3[n]=-99999}}
					if(Xinput3[2]!=''){}else{Xinput3[2]=-99999};document.getElementById("DataSeuil").value=Xinput3[2]
					if(Xinput3[3]!=''){}else{Xinput3[3]=-99999};document.getElementById("S1").value=Xinput3[3]
					if(Xinput3[4]!=''){}else{Xinput3[4]=-99999};document.getElementById("S2").value=Xinput3[4]
					if(Xinput3[5]!=''){}else{Xinput3[5]=-99999};document.getElementById("force").value=Xinput3[5]
					if(Xinput3[6]!=''){}else{Xinput3[6]=-99999};document.getElementById("S21").value=Xinput3[6]
					if(Xinput3[7]!=''){}else{Xinput3[7]=-99999};document.getElementById("S22").value=Xinput3[7]
					if(Xinput3[8]!=''){}else{Xinput3[8]=-99999};document.getElementById("M1").value=Xinput3[8]
					if(Xinput3[9]!=''){}else{Xinput3[9]=-99999};document.getElementById("P1").value=Xinput3[9]
					}
		}
	}
//alert("ici")
	actualise()
	document.getElementById('submit').style.visibility="hidden"
	
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

	texteliste+="<div style='position:relative;top:-20px;z-index:3'><b style='font-size: 12px;'>Menu</b><br/></div><div id='liste'  style='height:340px; width:300px; border: 1px black; overflow:scroll; background-color: white;position:relative;top:-20px'><table style='font-size: 10px; font-family: arial'>"
	for(m=0;m<titre2.length;m++){
	if(m<pointe){statdispl="none"}else{statdispl="block"}
		entete=titre2[m][9]
		entete_num=m+1
		if(m==k){ backcolor="yellow" } else{
			if(pair(m)==1){ backcolor="#E3E3E3" } else if(pair(m)==0){ backcolor="#FFFFFF" } 
		}
	texteliste+="<tr id='tr"+m+"'  style='display:"+statdispl+";align:left;width:300px'><td  style='background-color:"+backcolor+";'><a name='ancre"+m+"' id='lien"+m+"' class='lienmenu' href='#' onclick='javascript:setrgergd(3,"+m+");aff(rgd);' style='text-decoration:none;'><b>"+entete_num+". "+entete+"</a></td></tr>"	
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
			if(b==1) {
				for(j=0;j<13;j++){
					if(j==3) {
						temp[j] = new Array(2,0)
					} else {
						temp[j] = ""
					}
				}
				nouvo[i]=temp // ajoute le nouveau tableau vierge
			} else if(b==-1){
				// ajoute tab+1
				nouvo[i]=avModif[i+1]
			}
		} else if(i > a){
			if(b==1) {
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

function validationxxxxx(){
//	alert('attention: modification du formulaire!')
	document.getElementById('submit').style.visibility="visible"
	document.getElementById('enreg').style.visibility="hidden"	
}


var tsi=new Array(0,1,2,3,9,12)
var bonpourvalidation=1

function validation(){//$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
indicvalid=0
var tOK=1
for(n=0;n<tsi.length;n++){
if(document.getElementById("input"+tsi[n]).value==""){tOK=0;}
}
var denomzero=0
var numzero=0
var mesag0="Attention : vous devrez affecter des données"
var mesag1=""
var mesag2=""
var mesag3=""
var testnum=document.getElementById("num").value.split(',')
var testdenom=document.getElementById("denom").value.split(',')

var test=testnum
for(i=0;i<test.length;i++){
if(test[i]=="0"){numzero+=1; mesag1=" au numérateur"}
}
var test=testdenom
if(typici!="2,4" & typici!="2,0"){
for(i=0;i<test.length;i++){
if(test[i]=="0"){denomzero+=1; mesag3=" au dénominateur"}
}
}
if(denomzero!=0 & numzero!=0){mesag2=" et"}
if(denomzero!=0 || numzero!=0){

alert(mesag0+mesag1+mesag2+mesag3)
tOK=0
}

/*
var testcoord=document.getElementById("input0").value
testcoord=testcoord.indexOf('0')
if(typici!="2,0" && testcoord>0 & tOK==1){alert( "vous devez sélectionner les données");tOK=0}
*/


//alert('tOK='+tOK)
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
//alert("validatoionc")
//valider déclenche le report des seuils inférieurs et supérieurs dans le type icone (input3)
var Xinput00=document.getElementById("input0").value
var Xinput0=Xinput00.split(',')
var Xinput30=document.getElementById("input3").value
var Xinput3=Xinput30.split(',')
Xinput3[2]=document.getElementById("DataSeuil").value
Xinput3[3]=document.getElementById("S1").value
Xinput3[4]=document.getElementById("S2").value
Xinput3[5]=document.getElementById("force").value
Xinput3[6]=document.getElementById("S21").value
Xinput3[7]=document.getElementById("S22").value
Xinput3[8]=document.getElementById("M1").value
Xinput3[9]=document.getElementById("P1").value
//alert(Xinput3[5])
if(Xinput3[2]!=''){}else{Xinput3[2]=-99999;document.getElementById("DataSeuil").value=Xinput3[2]}
if(Xinput3[3]!=''){}else{Xinput3[3]=-99999;document.getElementById("S1").value=Xinput3[3]}
if(Xinput3[4]!=''){}else{Xinput3[4]=-99999;document.getElementById("S2").value=Xinput3[4]}
if(Xinput3[5]!=''){}else{Xinput3[5]=-99999;document.getElementById("force").value=Xinput3[5]}
if(Xinput3[6]!=''){}else{Xinput3[6]=-99999;document.getElementById("S21").value=Xinput3[6]}
if(Xinput3[7]!=''){}else{Xinput3[7]=-99999;document.getElementById("S22").value=Xinput3[7]}
if(Xinput3[8]!=''){}else{Xinput3[8]=-99999;document.getElementById("M1").value=Xinput3[8]}
if(Xinput3[9]!=''){}else{Xinput3[9]=-99999;document.getElementById("P1").value=Xinput3[9]}

document.getElementById("input3").value=Xinput3[0]+","+Xinput3[1]+","+Xinput3[2]+","+Xinput3[3]+","+Xinput3[4]+","+Xinput3[5]+","+Xinput3[6]+","+Xinput3[7]+","+Xinput3[8]+","+Xinput3[9]
//if(Xinput3[5]){document.getElementById("input3").value+=","+Xinput3[5]}
if(Xinput3[0]==2 && Xinput0[1]==""){Xinput0[1]=0;document.getElementById("input0").value=Xinput0[0]+","+Xinput0[1]}
//fin du  report des seuils inférieurs et supérieurs dans le type icone (input3)
	var temp3=new Array()
	for(i=0;i<13;i++){
	
			
		var templa=document.getElementById("input"+i).value
		if(i==1 || i==2 || i==9 || i==12){
		templa=templa.replace(/,/g," ")
		templa=templa.replace(/'/g," ")
		templa=templa.replace(/  /g," ")
		}
	
	
	
	
		temp3[i]=templa//document.getElementById("input"+i).value
		
		//if(c==0 & i==12){alert(temp3[i])}
	}
	//alert('attention: validation du formulaire!')
	titre2[c]=temp3
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
	var y=0
	var genereinput=""
	var form=""
	var tab=new Array()
	for(p=0;p<titre2.length;p++){
		tab=titre2[p]
		for(q=0;q<13;q++){
	//	if(p==0 & q==12){alert("<input type='text' name='N["+y+"]' value='"+tab[q]+"' style='visibility:hidden'>"	)}
			genereinput+="<input type=\"text\" name=\"N["+y+"]\" value=\""+tab[q]+"\" style=\"visibility:hidden\">"	
			y=y+1
		}	
	}
	form+="<form name='send_var' method='post' action='MANAGERIco.php'>";
	form+=genereinput;
	form+="<input type='hidden' name='REP' value='"+REP+"'><input type='hidden' name='cible' value='"+cible+"'></form>";
	document.getElementById("generation_input").innerHTML=form
	//alert(form)
	document.send_var.submit()
}
// ------------------------------------------ Gestion popup data -------------------------------------
var nbcoltemp
function testnbcol(){
if(typici=="2,4" || typici=="2,3" ){ //somme et somme/d%
if(document.getElementById("nbcol").value<2){alert("désolé, il doit y avoir au moins deux termes pour une somme")
document.getElementById("nbcol").value=nbcoltemp
}
}
if(typici=="2,0" || typici=="2,1" ){ //valeur a  et (a/b)%
if(document.getElementById("nbcol").value>1){alert("désolé, ici, le numérateur ne doit comprendre qu'une seule valeur")
document.getElementById("nbcol").value=nbcoltemp
}
}
if(typici=="2,5" ){ //somme/somme%
if(document.getElementById("nbcol").value<1){alert("désolé, il doit y avoir au moins 1 terme pour le numérateur")
document.getElementById("nbcol").value=nbcoltemp
}
}
if(typici=="2,6" ){ //somme/somme%
if(document.getElementById("nbcol").value>2){alert("désolé, il doit y avoir au maximum 2 termes pour le numérateur")
document.getElementById("nbcol").value=nbcoltemp
}
if(document.getElementById("nbcol").value<2){alert("désolé, il doit y avoir au moins 2 termes pour le numérateur")
document.getElementById("nbcol").value=nbcoltemp
}
}
}

var nbligntemp
function testnblign(){
if(typici=="2,5"  || typici=="2,6" ){ //somme/somme%
if(document.getElementById("nblign").value<1){alert("désolé, il doit y avoir au moins 1 terme pour le dénominateur")
document.getElementById("nblign").value=nbligntemp
}
}
}
var stock5
function affectType(a,b){
document.getElementById('submit').style.visibility="visible"
var valtypencours=document.getElementById("input3").value
var valcolici=document.getElementById("input0").value.split(",")//titre2[b][0] /////////////////////////////////////////////


if(a!="valeur a"){

if( typeof(valcolici)=="string"){valcolici=valcolici.split(',')}else{}
var valnbcolencours=valcolici.length-1

if(a=="somme"){

var valnbcolencours=valcolici.length
}
//alert(titre2[b][0])

var valdenomencours=valcolici[valcolici.length-1]

}
if(a=="[S1/S2]%" || a=="[(a-b)/S]%"){

var valnbcolencours=document.getElementById("nbcol").value
var valnbDENOMcours=document.getElementById("nblign").value

var valdenomencours=valcolici[valcolici.length-valnbDENOMcours]

					for(w=(valcolici.length-valnbDENOMcours+1);w<valcolici.length;w++){
						valdenomencours+=","+valcolici[w]}
						

						
}

if(a=="valeur a"){document.getElementById("Q_1").checked="true";
	document.getElementById("denom").style.visibility="hidden";
	document.getElementById("denom").value = "0"
	document.getElementById("input3").value = "2,0"
	document.getElementById("nbcol").value = "1"
	document.getElementById("nblign").value = "0"
	document.getElementById("nblign").style.visibility="hidden";
	document.getElementById("input0").value=document.getElementById("num").value.split(',')[0]+',0'
	document.getElementById("num").value=document.getElementById("input0").value.split(',')[0]
	typici=codetyp[1-1]
	// valeur a           1
}											
if(a=="(a/b)%"){document.getElementById("Q_4").checked="true";
	document.getElementById("denom").style.visibility="visible";
	document.getElementById("denom").value = valdenomencours
	document.getElementById("input3").value = "2,1"
	document.getElementById("nbcol").value = "1"
	document.getElementById("nblign").value = "1"
	document.getElementById("nblign").style.visibility="hidden";
	document.getElementById("num").value=document.getElementById("input0").value.split(',')[0]
	document.getElementById("input0").value=document.getElementById("num").value+','+document.getElementById("denom").value
	// Pourcentage 1 valeur a/b%       4
	typici=codetyp[4-1]
}										  
if(a=="[(a-b)/c]%"){document.getElementById("Q_5").checked="true";
	document.getElementById("denom").style.visibility="visible";
	document.getElementById("denom").value = valdenomencours
	document.getElementById("input3").value = "2,2"
	document.getElementById("nbcol").value = "2"
	document.getElementById("nblign").value = "1"
	document.getElementById("nblign").style.visibility="hidden";
	document.getElementById("num").value=document.getElementById("input0").value.split(',')[0]+','+document.getElementById("input0").value.split(',')[1]
	document.getElementById("input0").value=document.getElementById("num").value+','+document.getElementById("denom").value
	// Pourcentage de variation (a-b)/c%     5
	typici=codetyp[5-1]
	
	
	
	
								var numla=document.getElementById("num").value.split(",")
							var lg=numla.length
						
							var numla2=numla[0]
							for(p=1;p<lg;p++){if(numla[p]!="10000001"){numla2+=","+numla[p]}}

							if(numla2.split(",").length==1 & typici==codetyp[5-1]){
							numla2+=",0"
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length
							var Xip1=Xip0[0]+",0"
							for(p=1;p<lgx;p++){if(Xip0[p]!="10000001"){Xip1+=","+Xip0[p]}}
							document.getElementById('input0').value=Xip1
							}
							
							
							if(numla2.split(",").length>2 & typici==codetyp[5-1]){
							numla2=numla[0]+','+numla[1]
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length
							var Xip1=Xip0[0]+","+Xip0[1]+',10000001,'+document.getElementById("denom").value
							//for(p=1;p<lgx;p++){Xip1+=","+Xip0[p]}
							
							document.getElementById('input0').value=Xip1
							}
	
							document.getElementById("nbcol").value=numla2.split(',').length
							document.getElementById("num").value=numla2
	
	
	
	
	
}										  
if(a=="(somme/d)%"){document.getElementById("Q_3").checked="true";
	document.getElementById("denom").style.visibility="visible";
	document.getElementById("denom").value = valdenomencours
	document.getElementById("input3").value = "2,3"
	document.getElementById("nbcol").value = valnbcolencours+1
	document.getElementById("nblign").value = "1"
	document.getElementById("nblign").style.visibility="hidden";
	if(valnbcolencours==1){
	document.getElementById("num").value+=',0'
	//document.getElementById("nbcol").value = valnbcolencours+1
	}
	document.getElementById("input0").value=document.getElementById("num").value+','+document.getElementById("denom").value
	document.getElementById("nbcol").value=document.getElementById("input0").value.split(',').length-1
	
	
	// a+b+c...+n)/d%        3
	typici=codetyp[3-1]
}										  
if(a=="somme"){document.getElementById("Q_2").checked="true";
	document.getElementById("denom").style.visibility="hidden";
	document.getElementById("denom").value = ""
	document.getElementById("input3").value = "2,4"
	document.getElementById("nbcol").value = valnbcolencours
	document.getElementById("nblign").value = "0"
	document.getElementById("nblign").style.visibility="hidden";
	document.getElementById("num").value=document.getElementById("input0").value
	if(document.getElementById("num").value.split(',').length==1){
	
	var numici=new Array()
	numici[0]=document.getElementById("num").value
	numici[1]=0
	document.getElementById("num").value=numici
	
	document.getElementById("input0").value=numici
	}
	// somme simple (a+b+c...+n)        2
	typici=codetyp[2-1]
	
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length	
							var Xip1=Xip0[0]
							for(p=1;p<lgx;p++){if(Xip0[p]!="10000001"){Xip1+=","+Xip0[p]}else{p=lgx}}
							document.getElementById('input0').value=Xip1
							document.getElementById('num').value=Xip1
							document.getElementById('nbcol').value=Xip1.split(',').length
	
	
	
	
}

if(a=="[S1/S2]%" || a=="[(a-b)/S]%"){
if(a=="[(a-b)/S]%"){
document.getElementById("Q_7").checked="true";document.getElementById("input3").value = "2,6"
typici=codetyp[7-1]
document.getElementById("nbcol").value = "2"
}else{
document.getElementById("Q_6").checked="true";document.getElementById("input3").value = "2,5"
typici=codetyp[6-1]
}
	document.getElementById("denom").style.visibility="visible";
	document.getElementById("nblign").style.visibility="visible";


	if(valnbcolencours==0){
	if(a=="[(a-b)/S]%"){
	document.getElementById("nbcol").value = 2}else{document.getElementById("nbcol").value = 1}
	
	}else{document.getElementById("nbcol").value = valnbcolencours}
	
	if(valdenomencours){
	document.getElementById("nblign").value = valdenomencours.split(",").length;
	document.getElementById("denom").value = valdenomencours
	}else{
	document.getElementById("nblign").value = 1;
	document.getElementById("denom").value=1
	}

	
	document.getElementById("input0").value=document.getElementById("num").value+',10000001,'+document.getElementById("denom").value
	
							
							var numla=document.getElementById("num").value.split(",")
							var lg=numla.length
						
							var numla2=numla[0]
							for(p=1;p<lg;p++){if(numla[p]!="10000001"){numla2+=","+numla[p]}}

							if(numla2.split(",").length==1 & typici==codetyp[7-1]){
							numla2+=",0"
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length
							var Xip1=Xip0[0]+",0"
							for(p=1;p<lgx;p++){Xip1+=","+Xip0[p]}
							document.getElementById('input0').value=Xip1
							}
							
							
							if(numla2.split(",").length>2 & typici==codetyp[7-1]){
							numla2=numla[0]+','+numla[1]
							var Xip0=document.getElementById('input0').value.split(',')
							var lgx=Xip0.length
							var Xip1=Xip0[0]+","+Xip0[1]+',10000001,'+document.getElementById("denom").value
							//for(p=1;p<lgx;p++){Xip1+=","+Xip0[p]}
							
							document.getElementById('input0').value=Xip1
							}
							
							
							
							document.getElementById("nbcol").value=numla2.split(',').length
							document.getElementById("num").value=numla2
							

							if(a=="[(a-b)/S]%"){var numvis="hidden"}else{var numvis="visible"}
							document.getElementById("nbcol").setAttribute('style','background-color:white;width:40px;visibility:'+numvis)	
	
}

//alert( "affect type("+a+","+b+")")
validation2(b)
validation()
}

var tableauligncol=new Array()

function addtableauligncol(a,b){
tableauligncol[a]=b
}
var IDnumdenum
var nbc=0
var nbl=0
var nbcTemp=0
var nblTemp=0

function ouvtableau(b,idnumdenum){//zencours
//if(PC==2){chargeComplementaire();document.getElementById("PC_2").checked=true;PC=2;defalq=0;lignelibelPrincipal=0}

if(PC==1){
decalColonnesPrincipal();
decalTableauPrincipal(1)
}else{}
IDnumdenum=idnumdenum// indique soit le numérateur soit le dénominateur ( =num ou bien  = denom)
var I=0
for(i=1;i<typ.length+1;i++){
//alert(document.getElementById("Q_"+i).checked)
if(document.getElementById("Q_"+i).checked==true){I=i}
}
/*
if(I==1){typici="2,0"}
if(I==2){typici="2,4"}
if(I==3){typici="2,3"}
if(I==4){typici="2,1"}
if(I==5){typici="2,2"}*/
typici=codetyp[I-1]
if(IDnumdenum=="num"){nbc=document.getElementById("nbcol").value;
//alert("nb colonnes num = "+nbc)
}else{nbc=document.getElementById("nblign").value;
//alert("nb colonnes denom = "+nbc)
}
nbl=1
//document.getElementById("nblign").value=1 // FORCER à 1
zencours=b
ouvtableauSuite(b,IDnumdenum)
}
function ouvtableauSuite(b,idnumdenum){
IDnumdenum=idnumdenum// indique soit le numérateur soit le dénominateur ( =num ou bien  = denom)


if(nbc>0){

libel(b,0)
}else{alert("désolé : saisie des données incomplète ") }

}
function change_ici(a){
var indexla=window.frames.framedata.document.getElementsByTagName("select")[a].selectedIndex
window.frames.framedata.document.getElementById("popup"+a).title=lignelibel[indexla+2]
addtableauligncol(a,indexla+2)
}
function libel(u,rien){ //u=zencours      affichage des entêtes de colonne du fichier de données


tableauligncol=new Array()
tabl=""
rgtab=0
for(c=0;c<nbc;c++){ // d'abord les colones
for(l=0;l<nbl;l++){ // ensuite les lignes

tableauligncol[rgtab]=0
rgtab+=1
}
}

init1=0
menudata=""
window.frames.framedata.document.getElementById("ici").innerHTML=""
zencours=u
document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:visible;z-index:5")

if(init1==0){//récupère les entêtes de colone dans le fichier de données
window.frames.filedata.rgappel(0)
LLx=window.frames.filedata.longueurdata("return longa")+8

lignelibel=window.frames.filedata.transbas00de0("return lignelabel")
//alert("lignelabel = "+lignelibel)
init1=1
rgtab=0 // rang dans la mémoire correspondant au tableau colonne par colonne en partant du haut à gauche
// formation du tableau
tabl+="<br><br><br><br>"
tabl+='<table><tr>'
for(c=0;c<nbc;c++){ // d'abord les colones
//___________________________________
if(c==0){// d'abord la colonne des libélés dans les lignes du tableau
tabl+='<td ><table ><TR><td>n° variable</td></tr>'
for(l=0;l<nbl;l++){ // ensuite les lignes

tabl+='<TR height="45px"><td  id="l0'+l+'" name="c0'+c+'">'
tabl+='<form><input id="Tlign'+l+'" type="text" style="width:60px;visibility:hidden" value="" /></form>'
tabl+='</td></TR>'
}
tabl+='<TR><td><input  type="text" value="zz" style="width:60px;visibility:hidden" /></td></tr></table></td>'

}// fin de la colonne des libélés lds lignes du tableau
//____________________________________
tabl+='<td ><table ><TR><td>'+(c+1)+'</td></tr>'
for(l=0;l<nbl;l++){ // ensuite les lignes
tabl+='<TR height="45px" ><td  id="l'+l+'" name="c'+c+'"><form id="menu'+rgtab+'" NAME="menu'+rgtab+'"><select onchange="parent.change_ici('+rgtab+')" id="popup'+rgtab+'" NAME="popup'+rgtab+'" style="width:60px;color:red;font-size:15px" title="xxx" >'
tabl+='<option      > </option>'
//alert("lignelibel.length = "+lignelibel.length)
for(i=3;i<lignelibel.length;i++){//forme le menu des entêtes de colonne de données   
//alert("lignelibel["+i+"] = "+lignelibel[i])
if(lignelibel[i]!=0){ //sauf dans le cas de la dernière colone de zéros
lignelibel[i]=(lignelibel[i]+"").replace("'","&#146;")
}
tabl+='<option id="'+rgtab+'_'+i+'"  title="'+lignelibel[i]+'"  style="color:navy;font-size:15px" ad="'+lignelibel[i]+'">n°'+i+' - '+lignelibel[i]+'</option>'
}
rgtab+=1
tabl+='</select></form></td></TR>'
}
tabl+='<TR><td><input id="Tcol'+c+'" type="text" style="width:60px;visibility:hidden" value=""/></td></tr></table></td>'
}


tabl+='</tr></table>'
menudata+=tabl
}
menudata+='<div id="divfermer" style="position:fixed;top:45px;right:0px;visibility:visible;z-index:5"><input type="button" name="datafermer" onclick="javascript:parent.fermermenudata()" value="fermer le menu de données"></input></div>'
menudata+='<div id="divfermer2" style="position: fixed; top: 1px; right: 20px; visibility: visible;"><dt>charger le libellé long et la date</dt><input id="T_1" type="radio" onclick="parent.indicrecuplibelLdate(this.value);" value="1" name="T"/>oui<input id="T_2" type="radio" value="2" onclick="parent.indicrecuplibelLdate(this.value)" name="T"/>non</div>'
window.frames.framedata.document.getElementById("ici").innerHTML=menudata
window.frames.framedata.document.getElementById("T_1").checked=true
indicrecuplibelLdate(1)
if(IDnumdenum!="num"){
window.frames.framedata.document.getElementById("T_2").checked=true
indicrecuplibelLdate(2)
}


// gestion des entêtes de colone et préselection des menus dans le tableau

if(PC==1){
//lignelibelPrincipal=window.frames.filedata.transbas00de0("return lignelabel")
//defalq=lignelibelPrincipal.length-2-3
//decalColonnesPrincipal()

}

var xtlici=document.getElementById(IDnumdenum).value
if(xtlici){}else{xtlici="3"}
xtlici=xtlici.split(',')

if(IDnumdenum=="num"){bornici=document.getElementById("nbcol").value}else{bornici=document.getElementById("nblign").value}

for(w=0;w<bornici;w++){

			tableauligncol[w]=xtlici[w]			
				
			if(xtlici[w]){
			var Xselect=xtlici[w]-2
			}else{var Xselect=0}
				window.frames.framedata.document.getElementsByTagName("select")[w].selectedIndex=Xselect+defalq//(xtlici[w]-2)
				if(xtlici[w]){
				
				var titleici=window.frames.framedata.document.getElementById(w+"_"+(parseInt(xtlici[w])+defalq)).firstChild.data
				}else{var titleici=""}
				
				window.frames.framedata.document.getElementsByTagName("select")[w].title=titleici
			
					}
				
				
zencourstemp=zencours
cibleXtemp=cibleX
}
//===========================================================================================================================================================
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
document.getElementById('submit').style.visibility="visible"
//alert("tableauligncol dans fermeturedata=   "+tableauligncol)
if(document.getElementById("PC_1").checked==true){PC=1}else{PC=2}
if(PC==1){

decalColonnesPrincipal()
decalTableauPrincipal(-1)
}else{lignelibelPrincipal=0;defalq=0}
document.getElementById("divfiledata").setAttribute("style","position:fixed;top:100;right:40;visibility:hidden")


var XNum=document.getElementById('num').value;
var dercarNum=XNum[XNum.length-1]// dernier carractère du numétateur :

if(IDnumdenum=="num"){
if(typici=="2,0" || typici=="2,1" ){// valeur et %
attrib(tableauligncol[0])// récupère les libéllés du fichier de données

}
}


if(IDnumdenum=="num"){

if(typici=="2,0" || typici=="2,1" ){// valeur et %

document.getElementById("input0").value = tableauligncol+","+document.getElementById('denom').value 
}



if(typici=="2,4"){ //somme
												if(tableauligncol.length==1 && XNum.split(',').length==1){
document.getElementById("input0").value = tableauligncol+",0"
document.getElementById("num").value = tableauligncol+",0"
}else{
document.getElementById("input0").value = tableauligncol
document.getElementById("num").value = tableauligncol
}
document.getElementById("nbcol").value=document.getElementById("input0").value.split(',').length
}
if(typici=="2,2" || typici=="2,3"){// (a-b)/c% et somme/d%

document.getElementById("num").value = tableauligncol
document.getElementById("input0").value = document.getElementById("num").value+","+document.getElementById('denom').value 
//document.getElementById("input0").value = tableauligncol
//
}
if(typici=="2,5"  || typici=="2,6" ){// [somme1/somme2%]

document.getElementById("num").value = tableauligncol
document.getElementById("input0").value = document.getElementById("num").value+",10000001,"+document.getElementById('denom').value 
//document.getElementById("input0").value = tableauligncol
//
}
}else{
if(IDnumdenum=="denom"){
var XNum=document.getElementById('num').value;
//alert("là denom : num="+XNum+"   denom="+tableauligncol)


var dercarNum=XNum[XNum.length-1]// dernier carractère du numétateur :
						
						if(dercarNum==","){var virg="";}else{var virg=",";}
document.getElementById("denom").value = tableauligncol
var tpi=typici.split(',')

if(tpi[1]==5 || tpi[1]==6){document.getElementById("input0").value = document.getElementById('num').value+virg+"10000001,"+tableauligncol}else{
document.getElementById("input0").value = document.getElementById('num').value+virg+tableauligncol}
}
if(IDnumdenum=="DataSeuil"){


document.getElementById("DataSeuil").value = tableauligncol

}
}
//alert("pause")
var virg=""
var libc=""
for(i=0;i<nbc;i++){
var dfg=window.frames.framedata.document.getElementById("Tcol"+i).value
if(i>0){var virg=','}
if(dfg.substr(0,1)=='"'){dfg=virg+dfg}else{dfg=virg+'"'+dfg+'"'}
libc+=dfg
}
document.getElementById("input4").setAttribute("value",libc)
	
var virg=""
var libl=""
for(i=0;i<nbl;i++){
var dfg=window.frames.framedata.document.getElementById("Tlign"+i).value
if(i>0){var virg=','}
if(dfg.substr(0,1)=='"'){dfg=virg+dfg}else{dfg=virg+'"'+dfg+'"'}
libl+=dfg
}
document.getElementById("input5").setAttribute("value",libl)
validation2(k);aff(k)//appsubmit();$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
validation()

}







var indiclibeldate=1









function indicrecuplibelLdate(a){
indiclibeldate=a
}

function attrib(b){ // 
valeur=b

document.getElementById(cibleXtemp).setAttribute("style","background-color:white")
document.getElementById(cibleX).setAttribute("style","background-color:pink")
document.getElementById(cibleX).value=valeur


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
document.getElementById('input6').value="principal"
}
function chargeComplementaire(){
window.frames.filedata.location.href="../../"+urlvar["REP"]+"/complementaire.html?alea="+Math.random()
//document.getElementById('input6').value="complementaire"
}
</script>
</head>
<center >
<body style="font-family:arial;font-size:10px;background-color:#E6E4E3;">
  <div style="position:absolute;left:90px"><a HREF="#" onclick="document.location.reload();return(false)"><b>Rafraîchir le cadre</b></a>
   <a HREF="#" onclick="top.popuaideMENUSDATA('modifier-menus-manuellement')"><b>aide</b></a></div><br>
<div id="divfiledata" style="position:absolute;top:100px;left:40px;visibility:hidden;z-index: 5"><iframe id="framedata" name="framedata" style="background-color: #F9FAFD;opacity:1"  src="vide.htm" width="310" height="350" ></iframe></div>
<div id="divdeplac" style="position:fixed;font-size:12px;top:110;left:50;visibility:hidden;color:red;font-weight:bold;z-index:1;background-color:white">déplacer <span id="depl"></span> vers n° <input id="deplace" type="text" style="width:40px" name="deplace" value="" title=""><input id="OKdeplace" type="button"  name="OKdeplace" value="OK" onClick="setrgergd(6);deplace();aff(rgd)" title=""></div>
<div id="divduplic" style="position:fixed;font-size:12px;top:110;left:50;visibility:hidden;color:red;font-weight:bold;z-index:1;background-color:white">dupliquer <span id="dupl"></span> vers n° <input id="dupliqx" type="text" style="width:40px" name="dupliqx" value="" title=""><input id="OKduplique" type="button"  name="OKduplique" value="OK" onClick="setrgergd(7);dupliquex();aff(rgd)" title=""></div>
<div style="position:fixed;top:42;left:10;">
<input id="submit" type="button" value="Valider" onClick="validation2(k);appsubmit();aff(k)" title="enregistre les données">
</div>
<div style="position:fixed;top:32;left:10;">
<input id="submit2" type="submit" value="Valider" disabled="disabled" style="display:none;">
</div>
<table width="554" align="center" style="font-size: 10px; font-family: Arial, Helvetica, sans-serif;">
<tr align="center">
<td width="341" valign="top">
<form method="post" Onkeyup="javascript: setTimeout('validation()',500); var alerter=''; var inputs=new Array(document.getElementById('input0').value,document.getElementById('input1').value,document.getElementById('input2').value,document.getElementById('input3').value,document.getElementById('input9').value,document.getElementById('input12').value); detect(inputs,CaracteresInterdits3);" onkeypress="refuserToucheEntree(event);" name="saisie">
<div id="formulaire">
<a id="inser" href="#" onClick="validation2(k);setrgergd(4);insert(rgd,1);aff(rgd);affectType('valeur a',rgd)">Insérer</a> - 
<a id="suppr" href="javascript:setrgergd(5);insert(rgd,-1);liste();aff(rgd)">Effacer</a> - 
<a id="depl" href="javascript:validation2(k);positionFrom(k);">Déplacer vers</a> - 
<a id="dupl" href="javascript:validation2(k);positionFromdupl(k)">Dupliquer vers</a>
<br><br><input type="text" id="menutitre" value="" name="menutitre" size="10" style="text-align:center;" readonly><br>
<table border=0 style="display : none ; font-size:8px"><tr>
<td align=center ><input type="radio" id="PC_2" name="PC" checked onClick="defalq=0;PC=2;chargeComplementaire()" /></td><td align=center ><input type="radio" id="PC_1" name="PC"  onClick="PC=1;chargePrincipal();" /></td>
</tr>
<tr>
<td>complementaire</td><td style="color:red">principal</td>
</tr>

</table>

</div>
<br>
choix du type de calcul
<br>
<script language="javascript">

document.getElementById("PC_2").checked=true


//boutons radios
  var typ=new Array("valeur a","somme","(somme/d)%","(a/b)%","[(a-b)/c]%","[S1/S2]%","[(a-b)/S]%") // on peut en rajouter
  var codetyp=new Array("2,0","2,4","2,3","2,1","2,2","2,5","2,6")
  var saut3=0
for(i=0;i<typ.length;i++){
saut3+=1

document.write('<input type="radio" id="Q_'+(i+1)+'" name="Q" value="'+typ[i]+'" onClick="affectType(this.value,k)">'+typ[i]+'</input>')
if(saut3==3){document.write('<br>');saut3=0}
}
document.write('<br>')
//choix des nb colonnes et nb lignes -------2 input  bouton OK : si les deux remplis enclenchent l'affiche du tableau ligne et collone sinin alert( sasir les deux)
document.write('<div>Nb Colonnes du numérateur et du dénominateur<br><input style="width:20px" id="nbcol" value="0" type="text" onmouseover="nbcoltemp=this.value" onkeyup="setTimeout(\'testnbcol()\',20)" onclick="javascript:zencours='+k+';" />--')
document.write('-<input style="width:20px;visibility:hidden"  id="nblign" value="1" type="text"  onmouseover="nbligntemp=this.value" onkeyup="setTimeout(\'testnblign()\',20)" onclick="javascript:zencours='+k+'" /></div>')
document.write('<div id="numdenum">numérateur--------dénominateur</div>')
document.write('<div id="ef100"><input style="width:40px" id="num" type="text" onclick="javascript:document.getElementById(this.id).setAttribute(\'style\',\'background-color:red\');zencours='+k+';ouvtableau(zencours,this.id)" />---<input style="width:40px;visibility:hidden"  id="denom" value="0" type="text" onclick="javascript:document.getElementById(this.id).setAttribute(\'style\',\'background-color:red\');zencours='+k+';ouvtableau(zencours,this.id)"></div>')

document.write('<div id="divseuils">Donnée test--------seuil inférieur--------seuil supérieur<br>')

document.write('<input id="DataSeuil" type="text" style="width:50px" value="" onclick="javascript:document.getElementById(this.id).setAttribute(\'style\',\'background-color:red;width:50px\');zencours='+k+';; nbcTemp=nbc;nblTemp=nbl;nbc=1;nbl=1;ouvtableauSuite(zencours,this.id);nbc=nbcTemp;nbl=nblTemp"></input>--------<input id="S1" type="text" style="width:50px" value=""></input>--------<input id="S2" type="text" style="width:50px" value=""></input>')

document.write('</div>')
document.write('<div id="divseuils">Q2 forcé ------- Résultat >= à ------- Résultat <= à<br>')

document.write('<input id="force"  style="width:50px" value=""></input>--------<input id="S21" type="text" style="width:50px" value=""></input>--------<input id="S22" type="text" style="width:50px" value=""></input><br>coef * <input id="M1" type="text" style="width:50px" value=""></input> <span title="(Résultat du calcul*coef) - Norme de référence">Norme<input id="P1" type="text" style="width:50px" value=""></input></span>')
document.write('</div>')




document.getElementById("Q_1").checked="true"
document.getElementById("nbcol").value = "1"
</script>
<br>
<div id="alert" style="visibility:hidden"></div>
<br>
0- n° colonnes<br>
<input type="text" id="input0" name="input0" value="" size="40">
<br>
1- titre légende<br>
<input type="text" id="input1" name="input1" value="" size="40">
<br>
2- source<br>
<input type="text" id="input2" name="input2" value="" size="40">
<br>
3- type icône<br>
<input type="text" id="input3" name="input3" value="" size="40">
<br>
6 - Fichier des données
<input type="text" id="input6" name="input6" value="complementaire" style="background-color:gray" size="40" readonly >
<br>
9- item menu<br>
<input type="text" id="input9" name="input9" value="" size="40">
<br>
9- Vecteur flux<br>
<input type="text" id="input11" name="input11" value="" size="40">
<br>
12- libellé long<br>
<textarea id="input12" name="input12" rows="3" cols="30"></textarea>
<br>
<input type="text" id="input4" name="input4" value="" size="40">
<input type="text" id="input5" name="input5" value="" size="40">

<input type="text" id="input7" name="input7" value="" size="40">
<input type="text" id="input8" name="input8" value="" size="40">
<input type="text" id="input10" name="input10" value="" size="40">

</div>
<div style="position:fixed;top:42;left:10;visibility:hidden"><input id="enreg" type="button" name="submit" value="Enregistrer" onClick="javascript: enregistrer()"></div>
</form>
</td>
<td width="28" valign="top">
<div id="bouton" style="position:fixed;top:-15px;left:270px;">
<br><br>
<a href="#" onClick="javascript:if(bonpourvalidation==1){fermerdiv();setrgergd(1,k);aff(rgd)}" title="-1"><img src="haut.jpg" width="20" height="20" style="border:none;"></a>
<br><br>
<a href="#" onClick="javascript:if(bonpourvalidation==1){fermerdiv();setrgergd(2,k);aff(rgd)}" title="+1"><img src="bas.jpg" width="20" height="20" style="border:none;"></a>
</div>
</td>
<td width="169" valign="top">
<br>
<div id="menu"  style="vertical-align: top;z-index:1">

</div>
<script>
liste();
aff(k);
</script>

</td>
</tr>
</table>
<div id="generation_input" style="visibility:hidden"></div>
<script>
document.write('<div style="visibility:hidden"><iframe id="filedata" name="filedata"  src="../../'+mappocoord[6]+'/'+mappocoord[1]+'?alea='+Math.random()+'"></iframe></div>')
</script>
</body>
</center>
</html>