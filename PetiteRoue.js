var NumeroPlateforme="altercarto.fr : Visionneuse"


//----SECTION I---Module Petite Rose-----------------------------------------



							libelaxeB[libelaxeB.length]=new Array("population","!construit")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="green"


							libelaxeB[libelaxeB.length]=new Array("nationalité","*","*","français","immigré","étranger","étrangère")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="green"


							libelaxeB[libelaxeB.length]=new Array("scolarisé","diplôme","diplome","scol")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"


							libelaxeB[libelaxeB.length]=new Array("actifs","occupés","emploi","chôm","chom","demandeur","!permanente")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("navette","travail-domicile","études-domicile","travaille","migration","NAV2","NAV1","!habit","!immigration")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("entreprise","établissements","*","Etablissement","!chef","!permanente","!lits","!emp2","!act2b","!act3","!emp4")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("salaire")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("revenu")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"


							libelaxeB[libelaxeB.length]=new Array("équipement","*","*","equipements","!biens","!actif")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("famille","ménage","*","composition","!revenu")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("logement")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("habitant","emméganement","*","ancienneté","aménag","MIG1","MIG2","emménagé","!valeur","!salaire")//"déplacement","transport",
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

//------SECTION II-----module critères complémentaires------------------------------
							
							var TableCompSelect=""

TableCompSelect+='<table style="border:1px dotted black;background-color:transparent;width:310px;height:300px;font-size:10px;font-family:arial">'
TableCompSelect+='<tr><td style="text-align:center;background-color:#E6E6E6">'
TableCompSelect+='<big><b>filtres complémentaires</b></big><br/> <i>(chaque critère ajoute une condition logique "et" au fitre focus)</i>'
TableCompSelect+='<br/>Panier : '
TableCompSelect+='<input onclick=";SuiteCheck()"  type="radio" name="panier" id="pa_1"></input>oui'
TableCompSelect+='<input  onclick="SuiteCheck()" type="radio" name="panier" id="pa_2" value="checked"></input>non'
TableCompSelect+='</td></tr><tr><td  style="text-align:center">'
//************************** Début des paramètres insérés par l'utilisateur *********

TableCompSelect+='<b><u>Lieu de recensement</u></b><br/>'

TableCompSelect+='<input onclick=";SuiteCheck()"  type="radio" name="F1" id="F1_1"></input>résidence'
TableCompSelect+='<input  onclick="SuiteCheck()" type="radio" name="F1" id="F1_2"></input>travail'
TableCompSelect+='<input  onclick="SuiteCheck()"  type="radio" name="F1" id="F1_0"></input>indifferent'


							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#E6E6E6">'
							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#fff">'
						
							
TableCompSelect+='<b><u>Exploitation</u></b><br/>'


TableCompSelect+='<input onclick="SuiteCheck()"  type="radio" name="F1E" id="F1E_1"></input>principale'
TableCompSelect+='<input  onclick="SuiteCheck()" type="radio" name="F1E" id="F1E_2"></input>complémentaire'
TableCompSelect+='<input  onclick="SuiteCheck()" type="radio" name="F1E" id="F1E_0"></input>indifférent '


							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#E6E6E6">'
							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#fff">'

TableCompSelect+='<b><u>Sur l\'emploi et l\'activité</u></b><br/>'

TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F2" id="F2_1"></input>CSP'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F3" id="F3_1"></input>Secteurs'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F4" id="F4_1"></input>"CDI CDD ..."'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F5" id="F5_1"></input>Forme contrat<br/>'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F6" id="F6_1"></input>Salarié/non'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F7" id="F7_1"></input>Indépendants'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F8" id="F8_1"></input>âges'
TableCompSelect+='<input  onclick="SuiteCheck()" type="checkbox" name="F9" id="F9_1"></input>Sexe'

							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#E6E6E6">'
							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#fff">'

TableCompSelect+='<b><u>Niveau géographique (maille)</u></b><br/>'
TableCompSelect+='<input   onclick="SuiteCheck()" type="radio" name="F10" id="F10_1"></input>Commune'
TableCompSelect+='<input   onclick="SuiteCheck()" type="radio" name="F10" id="F10_2"></input>IRIS'
TableCompSelect+='<input   onclick="SuiteCheck()" type="radio" name="F10" id="F10_3"></input>Autre'
TableCompSelect+='<input   onclick="SuiteCheck()"   type="radio" name="F10" id="F10_0"></input>tout niveau'

//**************************fin des paramètres insérés par l'utilisateur *********************************************
TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#E6E6E6">'
TableCompSelect+='<br/>'
TableCompSelect+='<span style="; color: rgb(153, 153, 255);"  title="Insérez les mots clés séparés par un espace. Pour former une chaine de mots, reliez les avec le tiret bas \'_\'. Pour indiquer \'sauf\' : placez \'!\' devant le mot clé ou la chaîne_de_mots"  ><b><u>Règles pour la recherche</u></b></span><br/>'
TableCompSelect+='<textarea name="T1" id="T1_1" style="width:90%;height:40px"></textarea>'
TableCompSelect+='<input type="button" onclick="SuiteCheck()" value="envoyer"></input><br/>'
TableCompSelect+='<input type="button" onclick="annuleCheck()" value="annuler filtre complémentaire"></input>'
TableCompSelect+='<br/><br/><br/><br/><br/>'
TableCompSelect+='</td></tr>'
TableCompSelect+='</table>'


							function annuleCheck(){
//****************************Début insertion des critères*************							
document.getElementById("F1_0").checked=false
document.getElementById("F1_1").checked=false
document.getElementById("F1_2").checked=false

document.getElementById('F1E_0').checked=false
document.getElementById("F1E_1").checked=false
document.getElementById("F1E_2").checked=false

document.getElementById("F2_1").checked=false
document.getElementById("F3_1").checked=false
document.getElementById("F4_1").checked=false
document.getElementById("F5_1").checked=false
document.getElementById("F6_1").checked=false
document.getElementById("F7_1").checked=false
document.getElementById("F8_1").checked=false
document.getElementById("F9_1").checked=false

document.getElementById("F10_0").checked=false
document.getElementById("F10_1").checked=false
document.getElementById("F10_2").checked=false
document.getElementById("F10_3").checked=false
						
//****************************Fin insertion des critères*************							
							document.getElementById("T1_1").value=""
							document.getElementById("T1_1").innerHTML=""
							document.getElementById("pa_2").checked=true // panier non
							document.getElementById("pa_1").checked=false 
							SuiteCheck()
							}
							
							
function FiltreCompET(){
var transit=""
motcleET=""
//****************************Début insertion des critères*************
							
if(document.getElementById("F1_0").checked==true){}						
if(document.getElementById("F1_1").checked==true){motcleET+="résiden (LR)**"}
if(document.getElementById("F1_2").checked==true){motcleET+="lieu_de_travail (LT)**"}

if(document.getElementById("F1E_0").checked==true){}
if(document.getElementById("F1E_1").checked==true){motcleET+="principale (princ)**"}
if(document.getElementById("F1E_2").checked==true){motcleET+="complémentaire complementaire (compl)**"}

if(document.getElementById("F2_1").checked==true){motcleET+="cadres intermédiaire**"}
if(document.getElementById("F3_1").checked==true){motcleET+="industrie commerce**"}
if(document.getElementById("F4_1").checked==true){motcleET+="CDD déterminé**"}
if(document.getElementById("F5_1").checked==true){motcleET+="contrat**"}
if(document.getElementById("F6_1").checked==true){motcleET+="salarié**"}
if(document.getElementById("F7_1").checked==true){motcleET+="indépendant employeur**"}
if(document.getElementById("F8_1").checked==true){motcleET+="_ans**"}
if(document.getElementById("F9_1").checked==true){motcleET+="femme homme**"}


if(document.getElementById("F10_1").checked==true){motcleET+="commune**"}
if(document.getElementById("F10_2").checked==true){motcleET+="iris**"}
if(document.getElementById("F10_3").checked==true){motcleET+="!commune !iris**"}



// *******************fin insertion des critètes***********************
if(document.getElementById("pa_1").checked==true){}	
if(document.getElementById("pa_2").checked==true){motcleET+="!panier**"}							
transit=document.getElementById("T1_1").value
transit=transit.split(" ")

for(g=0;g<transit.length-1;g++){
motcleET+=transit[g]+"**"
}
motcleET+=transit[transit.length-1]
var lg=motcleET.length
//alert(motcleET.substring(motcleET.length-2,motcleET.length))
if(motcleET.substring(motcleET.length-2,motcleET.length)=="**"){
motcleET=motcleET.substring(0,motcleET.length-2)
}
}


							




