//****************  CARTE n°x  /***************************************************
mapX[mapX.length]="XXXXXXXXXXX";//code Maille : par exemple 00007 pour IRIS 2008 ou bien en clair au singulier et sans accent comme par exemple municipalite ou encore secteur
mapX[mapX.length]="CARTOSVG.svg";
mapX[mapX.length]="datacarte.html";
mapX[mapX.length]="";
mapX[mapX.length]="";
var echelle="XXXXXXXXXXX";
var maille="XXXXXXXXXXX";// dénomination du code MAILLE en clair ( accents autorisés)
var commentTitrecarte="XXXXXXXXXXX"; // Titre détaillé de la carte (par exemple carte des municpalités de Tunisie)
var commentaireschamp="";
var theme=new Array();
var autrescommnt="";
var originalauthors=new Array('H.Paris & JF Roche','altercarto@wanadoo.fr');
var otherauthors=new Array('','');
libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors);