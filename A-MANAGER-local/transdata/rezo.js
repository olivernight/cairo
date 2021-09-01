var rezoIci=window.location.href
rezoIci=rezoIci.replace("A-MANAGER-local/transdata_rezo/transmenu.htm","")
rezoIci=rezoIci.replace("A-MANAGER-local/transdata_DBHtml/transmenu.htm","")
rezoIci=rezoIci.replace("readLibelDATA-REC-MODULE.html","")
rezoIci=rezoIci.replace("readLibelDATA-REC-MODULE-MENU.html","")

//------------------------cette plateforme
rezo[rezo.length]=rezoIci
nomrezo[nomrezo.length]="Cette Plateforme  "+window.location.href.split("/")[window.location.href.split("/").length-2]
//-------------------------------------------
alert("ici")