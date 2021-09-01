
//PARAMETRES ET FILTRES
// Gestion des affichages des ronds dans les encadrés
			var idcarteNormal=new Array() //ex: new Array(0,77,94,95,96) toujours commencer avec un  0 -  vecteur des aires géographiques de référence (celles qui ont des données dans les fichiers principal et complémentaire)
			var idcarteEncadre=new Array()//ex: new Array(0,98,99,100,101) toujours commencer avec un  0 - vecteur des aires correspondantes qui sont positionnés dans les encadrés et pourlesquelles il n'y a pas de données dans les fichiers principal et complémentaire/


//**************************************************************************************************************************************************************
// donées de synthèse : 
//		0-> pas de données de synthèse
//		1-> affichage des données de synthèse
var DonneesDeSynthese=0
// exeception sur les données de synthèses

// 1 - exceptions sur les aires géographiques : on indique dans l'array() les rangs lignes des aires à ne pas prendre en compte dans le calcul de synthèse
var exceptionArray=new Array()//

// 2 - exceptions sur les variables : 
//on indique dans les array() et les rangs colonnes des variables  Sujet à ne pas prendre en compte dans le calcul de synthèse
var exceptionColArraySujet=new Array()//SI c'est une seule colone, il faut la doubler par exemple new Array(4,4)

//on indique dans les array()  et les rangs colonnes des variables Other à ne pas prendre en compte dans le calcul de synthèse
var exceptionColArrayOther=new Array()//SI c'est une seule colone, il faut la doubler par exemple new Array(4,4)
//***************************************************************************************************************************************************************
//Filtre pour la somme automatique dans les histogrammes simples


function SOMMETAB(TAB,titreX,libel){
sommeTAB=0
var ttest=libel+""+titreX

for(v=0;v<TAB.length;v++){if(TAB[v]!=-99999){sommeTAB+=TAB[v]}}
if(ttest.indexOf("%")>=0 || ttest.indexOf("(!)")>=0 || ttest.indexOf("dont ")>=0){sommeTAB=0}

 //sommeTAB=0 enlever cette ligne pour activer l'affichage des sommes sur les graphiques histogrammes simples
return sommeTAB
}

//*************************************************************************************************************************************************************
