var NumeroPlateforme="altercarto.fr : Visionneuse"

//------------Module Petite Rose-------------------------------------------------------


							libelaxeB[libelaxeB.length]=new Array("population","*","*","fertilityrate","Lifeexpectancy")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="green"

							libelaxeB[libelaxeB.length]=new Array("health","Lifeexpectancy","*","UNHIV","medical","immunization")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="green"

							libelaxeB[libelaxeB.length]=new Array("(Impact-of-humain-activity","on-Climat-Change)","*","*","ozone-depleting","Greenhouse_gas_emissions","energy","Sustainability")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"


							libelaxeB[libelaxeB.length]=new Array("(Climat-change","environnement-impact)","*","*","SLR","rain","desertification","impacts_on_crop_production")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"


							libelaxeB[libelaxeB.length]=new Array("rain","rainfall")//,"!bahrain"
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("water","!rain")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("Education")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("Labour","*","*","labour","unemployment","employment","economic activity" )
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("GDP","Income")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("Poverty","*","*")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("Aminities","services")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="red"

							libelaxeB[libelaxeB.length]=new Array("Housing","habitat")
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

							libelaxeB[libelaxeB.length]=new Array("(Food-Security)","Supply","Prod","*","Production","Import","Export","!/products")//"déplacement","transport",
							axescoteB[axescoteB.length]="1"
							coulB[coulB.length]="navy"

//--------------module critères complémentaires-----------------------------------------------------------------------------------------------------------
							
							var TableCompSelect=""

							TableCompSelect+='<table style="border:1px dotted black;background-color:transparent;width:310px;height:300px;font-size:10px;font-family:arial">'
							TableCompSelect+='<tr><td style="text-align:center;background-color:#E6E6E6">'
							TableCompSelect+='<big><b>complementary filters</b></big><br/> <i>(Warning : each button adds a logical condition "and" at the filter)</i>'

							TableCompSelect+='</td></tr><tr><td  style="text-align:center">'
				/*
				TableCompSelect+='<b><u>Lieu de recencement</u></b><br/>'
			

							TableCompSelect+='<input onclick="document.getElementById(\'F0_1\').checked=false;SuiteCheck()"  type="radio" name="F1" id="F1_1"></input>résidence'

							TableCompSelect+='<input  onclick="document.getElementById(\'F0_1\').checked=false;SuiteCheck()" type="radio" name="F1" id="F1_2"></input>travail'

							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F1_1\').checked=false;document.getElementById(\'F1_2\').checked=false;controlCheck(this)" type="radio" name="F0" id="F0_1"></input>indifférent '

							TableCompSelect+='<br/>'

				TableCompSelect+='<b><u>Exploitation</u></b><br/>'


							TableCompSelect+='<input onclick="document.getElementById(\'F0E_1\').checked=false;SuiteCheck()"  type="radio" name="F1E" id="F1E_1"></input>principale'

							TableCompSelect+='<input  onclick="document.getElementById(\'F0E_1\').checked=false;SuiteCheck()" type="radio" name="F1E" id="F1E_2"></input>complémentaire'

							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F1E_1\').checked=false;document.getElementById(\'F1E_2\').checked=false;controlCheck(this)" type="radio" name="F0E" id="F0E_1"></input>indifférent '

							TableCompSelect+='<br/>'
							TableCompSelect+='</td></tr><tr><td  style="text-align:center;background-color:#E6E6E6">'

				TableCompSelect+='<b><u>Sur l\'emploi et l\'activité</u></b><br/>'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F2" id="F2_1"></input>CSP'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F3" id="F3_1"></input>Secteurs'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F4" id="F4_1"></input>"CDI CDD ..."'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F5" id="F5_1"></input>Forme contrat<br/>'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F6" id="F6_1"></input>Salarié/non'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F7" id="F7_1"></input>Indépendants'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F8" id="F8_1"></input>âges'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="controlCheck(this)" type="radio" name="F9" id="F9_1"></input>Sexe'
							TableCompSelect+='<br/>'
							TableCompSelect+='</td></tr><tr><td  style="text-align:center">'
				*/
							TableCompSelect+='<b><u>Geographic scale</u></b><br/>'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F11_1\').checked=false;document.getElementById(\'F12_1\').checked=false;document.getElementById(\'F13_1\').checked=false;controlCheck(this)"  type="radio" name="F10" id="F10_1"></input>World countries'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F10_1\').checked=false;document.getElementById(\'F12_1\').checked=false;document.getElementById(\'F13_1\').checked=false;controlCheck(this)"  type="radio" name="F11" id="F11_1"></input>Arab countries'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F10_1\').checked=false;document.getElementById(\'F11_1\').checked=false;document.getElementById(\'F13_1\').checked=false;controlCheck(this)"  type="radio" name="F12" id="F12_1"></input>Yemen'
							TableCompSelect+='<input   onmouseover="overcontrolCheck(this)" onclick="document.getElementById(\'F10_1\').checked=false; document.getElementById(\'F11_1\').checked=false;document.getElementById(\'F12_1\').checked=false; controlCheck(this)"  type="radio" name="F13" id="F13_1"></input>All levels'
							TableCompSelect+='<br/>'
			
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
							/*
							document.getElementById("F0_1").checked=false
							document.getElementById('F0E_1').checked=false
							document.getElementById("F1_1").checked=false
							document.getElementById("F1_2").checked=false
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
							*/
							document.getElementById("F10_1").checked=false
							document.getElementById("F11_1").checked=false
							document.getElementById("F12_1").checked=false
							document.getElementById("F13_1").checked=false
							
							document.getElementById("T1_1").value=""
							document.getElementById("T1_1").innerHTML=""

							SuiteCheck()
							}
							
							
							function FiltreCompET(){
							var transit=""
							motcleET=""
							/*
							if(document.getElementById("F1_1").checked==true){motcleET+="résiden (LR)**"}
							if(document.getElementById("F1_2").checked==true){motcleET+="lieu_de_travail (LT)**"}
							if(document.getElementById("F1E_1").checked==true){motcleET+="principale (princ)**"}
							if(document.getElementById("F1E_2").checked==true){motcleET+="complémentaire complementaire (compl)**"}
							if(document.getElementById("F2_1").checked==true){motcleET+="cadres intermédiaire**"}
							if(document.getElementById("F3_1").checked==true){motcleET+="industrie commerce**"}
							if(document.getElementById("F4_1").checked==true){motcleET+="CDD déterminé**"}
							if(document.getElementById("F5_1").checked==true){motcleET+="contrat**"}
							if(document.getElementById("F6_1").checked==true){motcleET+="salarié**"}
							if(document.getElementById("F7_1").checked==true){motcleET+="indépendant employeur**"}
							if(document.getElementById("F8_1").checked==true){motcleET+="year old**"}
							if(document.getElementById("F9_1").checked==true){motcleET+="men women man woomen female male**"}
							*/
							if(document.getElementById("F10_1").checked==true){motcleET+="world monde !yemen !arab**"}
							if(document.getElementById("F11_1").checked==true){motcleET+="arab**"}
							if(document.getElementById("F12_1").checked==true){motcleET+="yemen**"}
							
							
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


							




