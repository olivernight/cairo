/* ajout de menus fixes pour l'ensemble des sites du réseau*/

var ItemMenu=new Array(); var LienItemMenu=new Array();var TitreItemMenu=new Array();var Xtarget=new Array();var listpagevision=new Array();

ItemMenu[ItemMenu.length]="Accueil";
LienItemMenu[LienItemMenu.length]="index.html"
TitreItemMenu[TitreItemMenu.length]="Page d'accueil du site"
Xtarget[Xtarget.length]="_top"
listpagevision[listpagevision.length]=1;


ItemMenu[ItemMenu.length]="Cartes";
LienItemMenu[LienItemMenu.length]=repsite+".htm" // ATTENTION : NE PAS MODIFIER !!!!!!!!!!!  !!!!!!!!!!!!!!!!!!!     !!!!!!!!!!!!!!!!!!!!!!!!!!        !!!!!!!!!!!!!!!!!!!!!!!!             !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
TitreItemMenu[TitreItemMenu.length]="cartes et commentaires"
Xtarget[Xtarget.length]="_top"
listpagevision[listpagevision.length]=1;

/*
ItemMenu[ItemMenu.length]="infos";
listpagevision[listpagevision.length]=1;
Xtarget[Xtarget.length]='_top';
LienItemMenu[LienItemMenu.length]="pageA1.html";
TitreItemMenu[TitreItemMenu.length]="infos";
*/