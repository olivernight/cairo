

var numtot=10000000 /* numero de l'aire géo ajoutée pour le total = grand chiffre pour échapper au test sans le cas où le total n'est pas activé dans parametres.js*/

//PARAMETRES ET FILTRES
// Gestion des affichages des ronds dans les encadrés
			var idcarteNormal=new Array() //ex: new Array(0,77,94,95,96) toujours commencer avec un  0 -  vecteur des aires géographiques de référence (celles qui ont des données dans les fichiers principal et complémentaire)
			var idcarteEncadre=new Array()//ex: new Array(0,98,99,100,101) toujours commencer avec un  0 - vecteur des aires correspondantes qui sont positionnés dans les encadrés et pourlesquelles il n'y a pas de données dans les fichiers principal et complémentaire/
//**************************************************************************************************************************************************************
//Affichage d'un carré résumant d'ensemble de la carte ( totaux etc.;;)
var visiontotal=1 /* 1=affichage, 0=pas d'affichage */


//**************************************************************************************************************************************************************
// données de synthèse : 
//		0-> pas de données de synthèse
//		1-> affichage des données de synthèse
var DonneesDeSynthese=0
// exeception sur les données de synthèses

// 1 - exceptions sur les aires géographiques : on indique dans l'array() les rangs lignes des aires à ne pas prendre en compte dans le calcul de synthèse
var exceptionArray=new Array()//

// 2 - exceptions sur les variables : 
//on indique dans les array() et les rangs colonnes des variables  Sujet à ne pas prendre en compte dans le calcul de synthèse
var exceptionColArraySujet=new Array()//SI c'est une seule colone, il faut la doubler par exemple new Array(4,4)360,1250,230,231,232,338,339,340,341,342,343,344,345,346,347,348,349,230,231,232,233,234,235,236,237,238,239,240,241,1657,1658,1659,1660,1661,1662,1663,1664,1665,1666,1667,1668

//on indique dans les array()  et les rangs colonnes des variables Other à ne pas prendre en compte dans le calcul de synthèse
var exceptionColArrayOther=new Array()//SI c'est une seule colone, il faut la doubler par exemple new Array(4,4)

//***************************************************************************************************************************************************************
// MODE FICHE et TEXTE : 
var FicheEtTexte=1// 1=> texte seul ; 2 => Fiche et Texte ; 3 => Fiche seule

//**************************************************************************************************************************************************************
//Filtre pour la somme automatique dans les histogrammes simples
var SomTab=0

function SOMMETAB(TAB,titreX,libel){
sommeTAB=0
if(SomTab==1){
var ttest=libel+""+titreX

for(v=0;v<TAB.length;v++){if(TAB[v]!=-99999){sommeTAB+=TAB[v]}}
if(ttest.indexOf("%")>=0 || ttest.indexOf("(!)")>=0 || ttest.indexOf("Taux")>=0 || ttest.indexOf("taux")>=0){sommeTAB=0}
}
return sommeTAB
}

//*************************************************************************************************************************************************************
//AFFICHAGE DES VALEUR POUR LES FLUX
var FS=0 //0 ou 12 -> font-size de l'affichage des nombre indiquant la valeur des flux