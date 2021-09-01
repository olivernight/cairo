


function selectTablePass(codeMailleData, codeMailleMap, tailCarte){
//alert(codeMailleData+", "+codeMailleMap)
var tableChoisie=""
if(codeMailleData==codeMailleMap ){testTableExiste=0;cartechoisie2(tailCarte)}
					else{
					tablePAS=new Array()// vide la table en service s'il en existe une
					testTableExiste=0
					if(codeMailleData=="11" & codeMailleMap=="15"){testTableExiste=1;tableChoisie="TDP-France-communes-2010-00011-vers-cantons-2010-00015"}
					if(codeMailleData=="11" & codeMailleMap=="20"){testTableExiste=1;tableChoisie="TDP-France-communes-2010-00011-vers-departements-2010-00020"}
					if(codeMailleData=="11" & codeMailleMap=="30"){testTableExiste=1;tableChoisie="TDP-France-communes-2010-00011-vers-regions-2010-00030"}
					if(codeMailleData=="11" & codeMailleMap=="40"){testTableExiste=1;tableChoisie="TDP-France-communes-2010-00011-vers-ZE1990-00040"}


					}
					
		if(testTableExiste==1){window.frames.tabpassage.location.href="ChargeTable.html?Xtable="+tableChoisie+"&tailCarte="+tailCarte}
}

function rienX(){}
var NomsTableIci=new Array()

function recupNomsTable(NomsTable){
NomsTableIci=NomsTable



}


function recupTable(a,tailCarte){
tablePAS=a
cartechoisie2(tailCarte)
}
var BaseTable= new Array()
function calculBaseTable(){
BaseTable= new Array()
BaseTable[0]=new Array("idcarte","libel","codeINSEE")
for(i=0;i<tablePAS.length;i++){
LignebaseTable=new Array()
LignebaseTable[0]=i+1
LignebaseTable[1]=NomsTableIci[i]
LignebaseTable[2]=tablePAS[i][0]
BaseTable[BaseTable.length]=LignebaseTable
}
BaseTable[BaseTable.length]=new Array(BaseTable.length,"ensemble",0);
BaseTable[BaseTable.length]=new Array(BaseTable.length,"libel","codeINSEE");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"-99999","-99999");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"-99999","-99999");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"-99999","-99999");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"-99999","-99999");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"-99999","-99999");
BaseTable[BaseTable.length]=new Array(BaseTable.length,"libel","codeINSEE");

}

var indexOrg=new Array()
function calculTable(transbas){
indexOrg=new Array()
calculBaseTable()
//alert("ici BaseTable="+BaseTable)
var base=BaseTable
var dataToAdd=transbas
larg=base[0].length-1
for(w=0;w<transbas.length;w++){
var NomAssociation=""+transbas[w][2]+""

indexOrg[NomAssociation]=transbas[w][0]

} // création d'un tableau associatif pour les reqettes dans orig

var lignbase0=base[0]
//normalisation des n° de colonnes dans les menus à transférer
var indicvide=0
if(indicvide==1){larg=3}
var k=larg
var k=larg
var xk
var KX
var kz=0 // compte les colonnes effectives sans double compte : nb de colonnes effectives = nb de valeurs -1 dans comptedouble
//var comptedouble=parent.transcomptedesdoublons("return comptedesdoublons")

//écriture des données+ données adjointes
var datx=""
transbasTemp=new Array()

for(d=0;d<base.length;d++){// 	on démarre par une boucle  sur les lignes de labase de destination
var lignbase=base[d]
var bornelignbase

//façonnage des lignes à transférer ----------------------------------------------------------------------------------------------------------------------------------


if(indicvide==0){bornelignbase=lignbase.length}else{bornelignbase=3}
datx=d+','+lignbase[1]  

				if(d==0 ){//ligne des libéllé entête de colonne
				//façonnage de la partie de la ligne de DESTNATION à conserver (colonnes jusqu'à bornelignbase)
						for(l=2;l<bornelignbase;l++){datx+=','+lignbase[l]}
						var ligndataToAdd=dataToAdd[0]
						var largDatatoAdd=ligndataToAdd.length
						//AJOUT des données à transférer
						for(m=3;m<ligndataToAdd.length;m++){datx+=','+ligndataToAdd[m]}

				}else
				
				{// les autres lignes

						//façonnage de la partie  à conserver  des autres lignes
						if(d>=base.length-7){ //dont façonnage de la partie  à conserver  du bloc des lignes du bas

							for(l=2;l<bornelignbase;l++){datx+=','+lignbase[l]}
						}else{// dont façonnage de la partie  à conserver  des lignes de données proprement dites
							for(l=2;l<bornelignbase;l++){datx+=','+lignbase[l]}
						}

						//AJOUT des données à transférer dans chacune des autres lignes 
						//Introduction des tables de réduction d'échelle--------------------------------------------------

		

if(d<base.length-7){
var oKligne=0
								for(t=0;t<tablePAS.length;t++){
										//si une des clés de rang 0 de la table de passage trouve son équivalent dans la ligne de destination  courante
										if(parseInt(lignbase[2],10)==parseInt(tablePAS[t][0],10)){ 
oKligne=1

										
														var ligndataToAdd0=dataToAdd[0]
														for(m=3;m<ligndataToAdd0.length;m++){
																var ligndataToAddCAS2=0  
																for(h=1;h<tablePAS[t].length;h++){
												
																		var rangIdCarteOrig=indexOrg[""+tablePAS[t][h]+""]// adressage par le tableau associatif
																		
																		if(dataToAdd[rangIdCarteOrig]){
																		if(dataToAdd[rangIdCarteOrig][m]!=-99999){ligndataToAddCAS2+=dataToAdd[rangIdCarteOrig][m]}
																		}

																		
																}
																datx+=','+ligndataToAddCAS2;
																
														}
										t=tablePAS.length				
										}
								}
if(oKligne==0){for(m=3;m<largDatatoAdd;m++){datx+=",-99999"}}

}
if(d>=base.length-7){ 

var z1=(transbas.length-(base.length-d))
var ligndataToAdd=dataToAdd[z1]

for(m=3;m<ligndataToAdd.length;m++){datx+=','+ligndataToAdd[m]+''}
}

}
var Xdatx=new Array()
Xdatx=datx.split(',')

transbasTemp[transbasTemp.length]=Xdatx
}
}