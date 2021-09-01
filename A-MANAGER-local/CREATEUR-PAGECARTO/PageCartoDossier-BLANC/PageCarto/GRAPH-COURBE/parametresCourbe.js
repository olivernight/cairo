//Paramètre inhibition de la courbe de la courbe : si inhibproject==1 <=> inhibé. Si==0 <=> affichable
	inhibproject=0
	NumeroGraphiqueInhib=new Array() //liste des n° de graphiques pour lesquels on veut inhiber la courbede projection : par ex : NumeroGraphiqueInhib=new Array(2,4,12)
//Paramètre de rappel sur fonction retard1 (pour les cas de changements très brutaux (MDG-7 graphique 7)
rappel1=0// Ce paramètre varie de 0 à 1 et  agit sur la position du point de départ de la projection et sur l'amortissement de la fonction retard1
//Paramètres pour fonction retard2
	coefCorrecteurContresaut=1// // Cas du MDG-8 - standard =1
	facteurAvanceRetard2=0 // - standard =0
	//

//Paramètre pour prendre en compte ou non les zeros = 1 pour les prendre en compte, sinon 0. Dans le cas =1, les zeos sont remplés par 0.0001
CourbeAvecZeros=0 