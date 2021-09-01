var rezoIci=window.location.href


rezoIci=rezoIci.replace("A-MANAGER-local/transdata_rezo/transmenu.htm","")
rezoIci=rezoIci.replace("A-MANAGER-local/transdata_DBHtml/transmenu.htm","")
rezoIci=rezoIci.replace("readLibelDATA-REC-MODULE.html","")
rezoIci=rezoIci.replace("readLibelDATA-REC-MODULE-MENU.html","")
rezoIci=rezoIci.replace("bienvenueRDV.html","")
//------------------------cette plateforme
rezo[rezo.length]=rezoIci
nomrezo[nomrezo.length]="this Platform : "+window.location.href.split("/")[window.location.href.split("/").length-2]
InRezo[rezo.length-1]="pour changer le libellé de cette plateforme, allez dans le fichier A-MANAGER-local/transdata_rezo.js"
//-------------------------------------------


rezo[rezo.length]="http://altk.fr/coquelicot/sc1/"; //(par exemple : http://kcit.org/sc1/)
nomrezo[nomrezo.length]="http://altk.fr/coquelicot/sc1/ plateforme de démo en ligne"; //(par exemple : Carto Citoyenne-Tunisie)
InRezo[rezo.length-1]="plateforme de démo en ligne sur http://altk.fr/coquelicot/sc1";


rezo[rezo.length]="http://altk.fr/sc1/"; //(par exemple : http://kcit.org/sc1/)
nomrezo[nomrezo.length]="http://altk.fr/sc1/ plateforme du site altercarto.fr"; //(par exemple : Carto Citoyenne-Tunisie)
InRezo[rezo.length-1]="divers packages de cartes et données disponibles sur l\espace de partage du site altercarto.fr";

rezo[rezo.length]="http://gaiamundivdl.fr/sc1/"; //(par exemple : http://kcit.org/sc1/)
nomrezo[nomrezo.length]="http://gaiamundivdl.fr/sc1/"; //(par exemple : Carto Citoyenne-Tunisie)
InRezo[rezo.length-1]="http://gaiamundivdl.fr/sc1/";

rezo[rezo.length]="http://kcit.org/sc1/"; //(par exemple : http://kcit.org/sc1/)
nomrezo[nomrezo.length]="Carto Citoyenne-Tunisie"; //(par exemple : Carto Citoyenne-Tunisie)
InRezo[rezo.length-1]="Carto Citoyenne-Tunisie";



//------------------------Plateformes Package

//------------------------Plateforme SuiteCairo-Coquelicot
rezo[rezo.length]="http://localhost/pack_suitecairo_coquelicot/sc1/SuiteCairo-Coquelicot/"
nomrezo[nomrezo.length]="<i style='color:green'>Plateforme SuiteCairo-Coquelicot</i>"
InRezo[rezo.length-1]="plateforme :  SuiteCairo-Coquelicot : dans répertoire principal de ce package"

//-------------------------------------------