﻿if(!window.DHTMLSuite)var DHTMLSuite=new Object();DHTMLSuite.dynamicContent=function(){var enableCache;var jsCache;var ajaxObjects;var waitMessage;this.enableCache=true;this.jsCache=new Object();this.ajaxObjects=new Array();this.waitMessage='Loading content-please wait...';this.waitImage='dynamic-content/ajax-loader-darkblue.gif';try{if(!standardObjectsCreated)DHTMLSuite.createStandardObjects()}catch(e){alert('Include the dhtmlSuite-common.js file')}
var objectIndex;this.objectIndex=DHTMLSuite.variableStorage.arrayDSObjects.length;DHTMLSuite.variableStorage.arrayDSObjects[this.objectIndex]=this}
DHTMLSuite.dynamicContent.prototype={loadContent:function(divId,url,functionToCallOnLoaded){var ind=this.objectIndex;if(this.enableCache&&this.jsCache[url]){document.getElementById(divId).innerHTML=this.jsCache[url];DHTMLSuite.commonObj.__evaluateJs(divId);DHTMLSuite.commonObj.__evaluateCss(divId);if(functionToCallOnLoaded)eval(functionToCallOnLoaded);return}


var ajaxIndex=0;var waitMessageToShow='';if(this.waitImage){waitMessageToShow=waitMessageToShow+'<div style="text-align:center;padding:10px"><img src="'+DHTMLSuite.configObj.imagePath+this.waitImage+'" border="0" alt=""></div>'}
if(this.waitMessage){waitMessageToShow=waitMessageToShow+'<div style="text-align:center">'+this.waitMessage+'</div>'}
if(this.waitMessage!=null&&this.waitImage!=null){try{if(waitMessageToShow.length>0)document.getElementById(divId).innerHTML=waitMessageToShow}catch(e){}}
waitMessageToShow=false;var ajaxIndex=this.ajaxObjects.length;try{this.ajaxObjects[ajaxIndex]=new sack()}catch(e){alert('Could not create ajax object. Please make sure that ajax.js is included')}
if(url.indexOf('?')>=0){this.ajaxObjects[ajaxIndex].method='GET';var string=url.substring(url.indexOf('?'));url=url.replace(string,'');string=string.replace('?','');var items=string.split(/&/g);for(var no=0;no<items.length;no++){var tokens=items[no].split('=');if(tokens.length==2){this.ajaxObjects[ajaxIndex].setVar(tokens[0],tokens[1])}}
url=url.replace(string,'')}
this.ajaxObjects[ajaxIndex].requestFile=url;this.ajaxObjects[ajaxIndex].onCompletion=function(){DHTMLSuite.variableStorage.arrayDSObjects[ind].__ajax_showContent(divId,ajaxIndex,url,functionToCallOnLoaded)};this.ajaxObjects[ajaxIndex].onError=function(){DHTMLSuite.variableStorage.arrayDSObjects[ind].__ajax_displayError(divId,ajaxIndex,url,functionToCallOnLoaded)};this.ajaxObjects[ajaxIndex].runAJAX()},setWaitMessage:function(newWaitMessage){this.waitMessage=newWaitMessage},setWaitImage:function(newWaitImage){this.waitImage=newWaitImage},setCache:function(enableCache){this.enableCache=enableCache},__ajax_showContent :function(divId,ajaxIndex,url,functionToCallOnLoaded){document.getElementById(divId).innerHTML='';document.getElementById(divId).innerHTML=this.ajaxObjects[ajaxIndex].response;if(this.enableCache){this.jsCache[url]=document.getElementById(divId).innerHTML+''}
DHTMLSuite.commonObj.__evaluateJs(divId);DHTMLSuite.commonObj.__evaluateCss(divId);if(functionToCallOnLoaded)eval(functionToCallOnLoaded);this.ajaxObjects[ajaxIndex]=null;return false},__ajax_displayError:function(divId,ajaxIndex,url,functionToCallOnLoaded){document.getElementById(divId).innerHTML='<h2>Message from DHTMLSuite.dynamicContent</h2><p>The ajax request for '+url+' failed</p>'}}
