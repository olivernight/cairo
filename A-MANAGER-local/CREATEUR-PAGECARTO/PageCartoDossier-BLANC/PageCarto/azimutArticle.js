
//largeur de la fenêtre
Wsvg=350;
//hauteur de la fenêtre
Hsvg=300;
//correctif du zoom de la carte
coefZ0=0.70;
// décalage en x de la carte
Xdecal=10;
// décalage en y (- pour monter; + pour descendre)
Ydecal=-65;

/*--Azimut Carte Haut de page-*/
/*----------------------------*/

var posgraghforce=""//INACTIF

//extrait de texte qui sert de balise au positionnement de la carte. La carte sera placée à la première balise  "<a" suivante


/*--Azimut Graphique Haut de page*/
/*----------------------------*/

var ecartCarteGraph=1700

//longueur du texte en nbre de caratères qui séparent les points d'ancrage de la carte et du graphique

/*--autorister REPLIQUE OUI NON-*/
/*----------------------------*/

var RepliqueOuiNon=3000

//longueur de texte minimum pour répliquer : 3000 ou plus pour que ce soit utile
//1000000000000 pour ne pas répliquer


/*--Azimut REPLIQUE Carte -*/
/*----------------------------*/

var PercentText=8.5/15
//% longueur du texte

/*------------------Azimut REPLIQUE Graphique -*/
/*----------------------------*/
var ecartCarteGraph2=1350

/*------------------LARGEUR EMBASE GRAPHIQUE -*/
/*----------------------------*/
var lageambasegraphique=250







/*----------------------------*/
/*----------------------------*/
/*------Ne pas toucher--------*/
/*----------------------------*/
/*----------------------------*/
var parametreCarteInTexte=new Array(Wsvg,Hsvg,coefZ0,Xdecal,Ydecal,posgraghforce,ecartCarteGraph,RepliqueOuiNon,PercentText,ecartCarteGraph2,lageambasegraphique);

parent.recupVecteurParametres(parametreCarteInTexte)










