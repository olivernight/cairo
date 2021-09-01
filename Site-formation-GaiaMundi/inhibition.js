
// ce fichier est inséré en src dans PageA1.html et dans ecrit-hypertexte.html

var inhib=new Array("","infos","lien")//laisser le premier vide et ajouter ou effacer pour supprimer ceux dont on veut inhiber l'édition et dont on veut en même temps qu'il soit référé au site zero pour actualisation par abonnement


for(i=0;i<inhib.length;i++){
if(radical==inhib[i] & repsite!="Site-0"){lacible="../Site-0/"+lacible;visibBoutonE="hidden"}
// ajouter éventuellement d'autres inhibitions pour les pages rattacéhes au Site-0
}


