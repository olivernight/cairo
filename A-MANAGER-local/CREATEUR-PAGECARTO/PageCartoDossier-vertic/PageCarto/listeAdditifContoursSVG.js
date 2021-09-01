
/*
Exemples et indications pour modifier les réglages 


//listeAddContoursSVG[listeAddContoursSVG.length]=new Array("communes.js","#8D8DC4",1,1.002,0,0,1.002,1,-2)
//listeAddContoursSVG[listeAddContoursSVG.length]=new Array("Arrondissements.js","#5BC9D8",1,1.002,0,0,1.002,1,-2)
 
comment procéder pour ajouter une couche ?
copier un ligne existante
changer le nom.js, 
changer la couleur en clair (par : blue) ou en héxadécimal comme dans les exemples
régler l'épaisseur du trait. c'est la preier chiffre après la couleur  qui est = à 1 par défaut.

les quatre autre paramètres servent à régler le calage de la couche sur la carte au cas où elle soit légèrement décallée
si c'est le ca, on procède à taton
mais avant d'essayer de trouver le bon calage, il est préférable de tester la forme canonique suivant
 new Array("communes.js","#8D8DC4",1,1,0,0,1,0,0)
 new Array("communes.js","#8D8DC4",1,tx,rx,ry,ty,x,y)
 tx		facteur zoom sur l'axe x horizontal
 rx		facteur de distorsion sur l'axe x horizontal
 ry		facteur de distorsion sur l'axe x horizontal
 ty		facteur zoom sur l'axe y vertical
 x 		décalage en x
 y		décalage en y

En principe vous n'avez ps à toucher ry et ry facteurs de distorsion
ATTENTION Procéder par toute petite modifications en raison du fait que lorsqu'on change le zoom rx ry, le positionnement de la couche change en rasn du fait que cela change a distance au point d'origine de plan et non pas par rapport au centre de la carte

Notez que le décalage en y est en coordonnées inversées : une variation positiove de la valeur y fait descendre la couche et symétriquement une variation négative fait monter la couche

*/

//listeAddContoursSVG[listeAddContoursSVG.length]=new Array("communes.js","#8D8DC4",1,1.002,0,0,1.002,1,-2)
//listeAddContoursSVG[listeAddContoursSVG.length]=new Array("Arrondissements.js","#5BC9D8",1,1.002,0,0,1.002,1,-2)
