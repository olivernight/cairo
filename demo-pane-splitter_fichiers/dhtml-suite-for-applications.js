/*[FILE_START:dhtmlSuite-common.js] */
 if(!document.getElementById) document.getElementById=function (id) {
 return eval("document.all."+id);
 }

 if(document.all) {

 document.getElementsByName=function (name) {

 var el=document.all,result=new Array(),j=0;
 for(var i=0;i<el.length;i++) if(el[i].name.toLowerCase()==name.toLowerCase()) result[j++]=el[i];
 return result;
 }}
 if(!document.getElementsByTagName) document.getElementsByTagName=function (tagName) {
 var el=document.all,result=new Array(),j=0;
 for(var i=0;i<el.length;i++) if(el[i].tagName.toLowerCase()==tagName.toLowerCase()) result[j++]=el[i];
 return result;
 }



/************************************************************************************************************
	@fileoverview
	DHTML Suite for Applications.
	Copyright (C) 2006  Alf Magne Kalleland(post@dhtmlgoodies.com)<br>
	<br>
	This library is free software; you can redistribute it and/or<br>
	modify it under the terms of the GNU Lesser General Public<br>
	License as published by the Free Software Foundation; either<br>
	version 2.1 of the License, or (at your option) any later version.<br>
	<br>
	This library is distributed in the hope that it will be useful,<br>
	but WITHOUT ANY WARRANTY; without even the implied warranty of<br>
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU<br>
	Lesser General Public License for more details.<br>
	<br>
	You should have received a copy of the GNU Lesser General Public<br>
	License along with this library; if not, write to the Free Software<br>
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA<br>
	<br>
	<br>
	www.dhtmlgoodies.com<br> 
	Alf Magne Kalleland<br>

************************************************************************************************************/

/**
 * 
 * @package DHTMLSuite for applications
 * @copyright Copyright &copy; 2006, www.dhtmlgoodies.com
 * @author Alf Magne Kalleland <post@dhtmlgoodies.com>
 */

/****** 
Some prototypes:
**/

	// Creating a trim method
if(!String.trim)String.prototype.trim = function() { return this.replace(/^\s+|\s+$/, ''); };
var DHTMLSuite_funcs = new Object();
if(!window.DHTML_SUITE_THEME)var DHTML_SUITE_THEME = 'blue';
if(!window.DHTML_SUITE_THEME_FOLDER)var DHTML_SUITE_THEME_FOLDER = '../themes/';
if(!window.DHTML_SUITE_JS_FOLDER)var DHTML_SUITE_JS_FOLDER = '../js/separateFiles/';

/************************************************************************************************************
*
* Global variables
*
************************************************************************************************************/

	// {{{ DHTMLSuite.createStandardObjects()
/**
 * Create objects used by all scripts
 *
 * @public
 */

var DHTMLSuite = new Object();

var standardObjectsCreated = false;	// The classes below will check this variable, if it is false, default help objects will be created
DHTMLSuite.eventEls = new Array();	// Array of elements that has been assigned to an event handler.

var widgetDep = new Object();
	// Widget dependencies
widgetDep['formValidator'] = ['dhtmlSuite-formUtil.js'];	// Form validator widget
widgetDep['paneSplitter'] = ['dhtmlSuite-paneSplitter.js','dhtmlSuite-paneSplitterModel.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['menuBar'] = ['dhtmlSuite-menuBar.js','dhtmlSuite-menuItem.js','dhtmlSuite-menuModel.js'];
widgetDep['windowWidget'] = ['dhtmlSuite-windowWidget.js','dhtmlSuite-resize.js','dhtmlSuite-dragDropSimple.js','ajax.js','dhtmlSuite-dynamicContent.js'];
widgetDep['colorWidget'] = ['dhtmlSuite-colorWidgets.js','dhtmlSuite-colorUtil.js'];
widgetDep['colorSlider'] = ['dhtmlSuite-colorWidgets.js','dhtmlSuite-colorUtil.js','dhtmlSuite-slider.js'];
widgetDep['colorPalette'] = ['dhtmlSuite-colorWidgets.js','dhtmlSuite-colorUtil.js'];
widgetDep['calendar'] = ['dhtmlSuite-calendar.js','dhtmlSuite-dragDropSimple.js'];
widgetDep['dragDropTree'] = ['dhtmlSuite-dragDropTree.js'];
widgetDep['slider'] = ['dhtmlSuite-slider.js'];
widgetDep['dragDrop'] = ['dhtmlSuite-dragDrop.js'];
widgetDep['imageEnlarger'] = ['dhtmlSuite-imageEnlarger.js','dhtmlSuite-dragDropSimple.js'];
widgetDep['imageSelection'] = ['dhtmlSuite-imageSelection.js'];
widgetDep['floatingGallery'] = ['dhtmlSuite-floatingGallery.js','dhtmlSuite-mediaModel.js'];
widgetDep['contextMenu'] = ['dhtmlSuite-contextMenu.js','dhtmlSuite-menuBar.js','dhtmlSuite-menuItem.js','dhtmlSuite-menuModel.js'];
widgetDep['dynamicContent'] = ['dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['textEdit'] = ['dhtmlSuite-textEdit.js','dhtmlSuite-textEditModel.js','dhtmlSuite-listModel.js'];
widgetDep['listModel'] = ['dhtmlSuite-listModel.js'];
widgetDep['resize'] = ['dhtmlSuite-resize.js'];
widgetDep['dragDropSimple'] = ['dhtmlSuite-dragDropSimple.js'];
widgetDep['dynamicTooltip'] = ['dhtmlSuite-dynamicTooltip.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['modalMessage'] = ['dhtmlSuite-modalMessage.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['tableWidget'] = ['dhtmlSuite-tableWidget.js','ajax.js'];
widgetDep['progressBar'] = ['dhtmlSuite-progressBar.js'];
widgetDep['tabView'] = ['dhtmlSuite-tabView.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['infoPanel'] = ['dhtmlSuite-infoPanel.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['form'] = ['dhtmlSuite-formUtil.js','dhtmlSuite-dynamicContent.js','ajax.js'];
widgetDep['autoComplete']=['dhtmlSuite-autoComplete.js','ajax.js'];
widgetDep['chainedSelect']=['dhtmlSuite-chainedSelect.js','ajax.js'];

var depCache = new Object();

DHTMLSuite.include = function(widget){
	if(!widgetDep[widget]){
		alert('Cannot find the files for widget ' + widget + '. Please verify that the name is correct');
		return;
	}
	var files = widgetDep[widget];
	for(var no=0;no<files.length;no++){
		if(!depCache[files[no]]){
			document.write('<' + 'script');
			document.write(' language="javascript"');
			document.write(' type="text/javascript"');
			document.write(' src="' + DHTML_SUITE_JS_FOLDER + files[no] + '">');
			document.write('</' + 'script' + '>');
			depCache[files[no]] = true;
		}
	}
}

DHTMLSuite.discardElement = function(element) { 
	element = DHTMLSuite.commonObj.getEl(element);
	var gBin = document.getElementById('IELeakGBin'); 
	if (!gBin) { 
		gBin = document.createElement('DIV'); 
		gBin.id = 'IELeakGBin'; 
		gBin.style.display = 'none'; 
		document.body.appendChild(gBin); 
	} 
	// move the element to the garbage bin 
	gBin.appendChild(element); 
	gBin.innerHTML = ''; 
} 

DHTMLSuite.createStandardObjects = function(){
	DHTMLSuite.clientInfoObj = new DHTMLSuite.clientInfo();	// Create browser info object
	DHTMLSuite.clientInfoObj.init();
	if(!DHTMLSuite.configObj){	// If this object isn't allready created, create it.
		DHTMLSuite.configObj = new DHTMLSuite.config();	// Create configuration object.
		DHTMLSuite.configObj.init();
	}
	DHTMLSuite.commonObj = new DHTMLSuite.common();	// Create configuration object.
	DHTMLSuite.variableStorage = new DHTMLSuite.globalVariableStorage();;	// Create configuration object.
	DHTMLSuite.commonObj.init();
	DHTMLSuite.domQueryObj = new DHTMLSuite.domQuery();

	DHTMLSuite.commonObj.addEvent(window,'unload',function(){ DHTMLSuite.commonObj.__clearMemoryGarbage(); });

	standardObjectsCreated = true;
}

/************************************************************************************************************
*	Configuration class used by most of the scripts
*
*	Created:			August, 19th, 2006
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Store global variables/configurations used by the classes below. Example: If you want to  
*		 change the path to the images used by the scripts, change it here. An object of this
*		 class will always be available to the other classes. The name of this object is 
*		"DHTMLSuite.configObj".	<br><br>
*
*		If you want to create an object of this class manually, remember to name it "DHTMLSuite.configObj"
*		This object should then be created before any other objects. This is nescessary if you want
*		the other objects to use the values you have put into the object. <br>
* @version				1.0
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
**/
DHTMLSuite.config = function(){
	var imagePath;	// Path to images used by the classes. 
	var cssPath;	// Path to CSS files used by the DHTML suite.

	var defaultCssPath;
	var defaultImagePath;
}

DHTMLSuite.config.prototype = {
	// {{{ init()
	/**
	 * 	Initializes the config object - the config class is used to store global properties used by almost all widgets
	 *
	 * @public
	 */
	init : function(){
		this.imagePath = DHTML_SUITE_THEME_FOLDER + DHTML_SUITE_THEME + '/images/';	// Path to images
		this.cssPath = DHTML_SUITE_THEME_FOLDER + DHTML_SUITE_THEME + '/css/';	// Path to images

		this.defaultCssPath = this.cssPath;
		this.defaultImagePath = this.imagePath;

	}
	// }}}
	,
	// {{{ setCssPath()
	/**
	 * This method will save a new CSS path, i.e. where the css files of the dhtml suite are located(the folder).
	 *	This method is rarely used. Default value is the variable DHTML_SUITE_THEME_FOLDER + DHTML_SUITE_THEME + '/css',
	 *	which means that the css path is set dynamically based on which theme you choose.
	 *
	 * @param string newCssPath = New path to css files(folder - remember to have a slash(/) at the end)
	 * @public
	 */

	setCssPath : function(newCssPath){
		this.cssPath = newCssPath;
	}
	// }}}
	,
	// {{{ resetCssPath()
	/**
	 * @deprecated
	 * Resets css path back to default value which is ../css_dhtmlsuite/
	 * This method is deprecated.
	 *
	 * @public
	 */
	resetCssPath : function(){
		this.cssPath = this.defaultCssPath;
	}
	// }}}
	,
	// {{{ resetImagePath()
	/**
	 * @deprecated
	 *
	 * Resets css path back to default path which is DHTML_SUITE_THEME_FOLDER + DHTML_SUITE_THEME + '/css'
	 * This method is deprecated. 
	 * @public
	 */
	resetImagePath : function(){
		this.imagePath = this.defaultImagePath;
	}
	// }}}
	,
	// {{{ setImagePath()
	/**
	 * This method will save a new image file path, i.e. where the image files used by the dhtml suite ar located
	 *
	 * @param string newImagePath = New path to image files (remember to have a slash(/) at the end)
	 * @public
	 */
	setImagePath : function(newImagePath){
		this.imagePath = newImagePath;
	}
	// }}}
}

DHTMLSuite.globalVariableStorage = function(){
	var menuBar_highlightedItems;	// Array of highlighted menu bar items
	this.menuBar_highlightedItems = new Array();

	var arrayDSObjects;	// Array of objects of class menuItem.
	var arrayOfDhtmlSuiteObjects;
	this.arrayDSObjects = new Array();
	this.arrayOfDhtmlSuiteObjects = this.arrayDSObjects;
	var ajaxObjects;
	this.ajaxObjects = new Array();
}

DHTMLSuite.globalVariableStorage.prototype = {

}

/************************************************************************************************************
*	A class with general methods used by most of the scripts
*
*	Created:			August, 19th, 2006
*	Purpose of class:	A class containing common method used by one or more of the gui classes below, 
* 						example: loadCSS. 
*						An object("DHTMLSuite.commonObj") of this  class will always be available to the other classes. 
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class A class containing common method used by one or more of the gui classes below, example: loadCSS. An object("DHTMLSuite.commonObj") of this  class will always be available to the other classes. 
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
**/
var indicclick=0
DHTMLSuite.common = function(){
	var loadedCSSFiles;	// Array of loaded CSS files. Prevent same CSS file from being loaded twice.
	var cssCacheStatus;	// Css cache status
	var eventEls;
	var isOkToSelect;	// Boolean variable indicating if it's ok to make text selections

	this.okToSelect = true;
	this.cssCacheStatus = true;	// Caching of css files = on(Default)
	this.eventEls = new Array();
}

DHTMLSuite.common.prototype = {

	// {{{ init()
	/**
	 * This method initializes the DHTMLSuite_common object.
	 *	This class contains a lot of useful methods used by most widgets.
	 *
	 * @public
	 */
	init : function(){
		this.loadedCSSFiles = new Array();
	}
	// }}}
	,
	// {{{ loadCSS()
	/**
	 * This method loads a CSS file(Cascading Style Sheet) dynamically - i.e. an alternative to <link> tag in the document.
	 *
	 * @param string cssFile = Name of css file. It will be loaded from the path specified in the DHTMLSuite.common object
	 * @param Boolean prefixConfigPath = Use config path as prefix.
	 * @public
	 */
	loadCSS : function(cssFile,prefixConfigPath){
		if(!prefixConfigPath && prefixConfigPath!==false)prefixConfigPath=true;
		if(!this.loadedCSSFiles[cssFile]){
			this.loadedCSSFiles[cssFile] = true;
			var lt = document.createElement('LINK');
			if(!this.cssCacheStatus){
				if(cssFile.indexOf('?')>=0)cssFile = cssFile + '&'; else cssFile = cssFile + '?';
				cssFile = cssFile + 'rand='+ Math.random();	// To prevent caching
			}
			if(prefixConfigPath){
				lt.href = DHTMLSuite.configObj.cssPath + cssFile;
			}else{
				lt.href = cssFile;
			}
			lt.rel = 'stylesheet';
			lt.media = 'screen';
			lt.type = 'text/css';
			document.getElementsByTagName('HEAD')[0].appendChild(lt);
		}
	}
	// }}}
	,
	// {{{ __setTextSelOk()
	/**
	 * Is it ok to make text selections ?
	 *
	 * @param Boolean okToSelect 
	 * @private
	 */
	__setTextSelOk : function(okToSelect){
		this.okToSelect = okToSelect;
	}
	// }}}
	,
	// {{{ __setTextSelOk()
	/**
	 * Returns true if it's ok to make text selections, false otherwise.
	 *
	 * @return Boolean okToSelect 
	 * @private
	 */
	__isTextSelOk : function(){
		return this.okToSelect;
	}
	// }}}
	,
	// {{{ setCssCacheStatus()
	/**
	 * Specify if css files should be cached or not. 
	 *
	 *	@param Boolean cssCacheStatus = true = cache on, false = cache off
	 *
	 * @public
	 */
	setCssCacheStatus : function(cssCacheStatus){
	  this.cssCacheStatus = cssCacheStatus;
	}
	// }}}
	,
	// {{{ getEl()
	/**
	 * Return a reference to an object
	 *
	 * @param Object elRef = Id, name or direct reference to element
	 * @return Object HTMLElement - direct reference to element
	 * @public
	 */
	getEl : function(elRef){
		if(typeof elRef=='string'){
			if(document.getElementById(elRef))return document.getElementById(elRef);
			if(document.forms[elRef])return document.forms[elRef];
			if(document[elRef])return document[elRef];
			if(window[elRef])return window[elRef];
		}
		return elRef;	// Return original ref.

	}
	// }}}
	,
	// {{{ isArray()
	/**
	 * Return true if element is an array
	 *
	 * @param Object el = Reference to HTML element
	 * @public
	 */
	isArray : function(el){
		if(el.constructor.toString().indexOf("Array") != -1)return true;
		return false;
	}
	// }}}
	,
	// {{{ getStyle()
	/**
	 * Return specific style attribute for an element
	 *
	 * @param Object el = Reference to HTML element
	 * @param String property = Css property
	 * @public
	 */
	getStyle : function(el,property){
		el = this.getEl(el);
		if (document.defaultView && document.defaultView.getComputedStyle) {
			var retVal = null;
			var comp = document.defaultView.getComputedStyle(el, '');
			if (comp){
				retVal = comp[property];
			}
			return el.style[property] || retVal;
		}
		if (document.documentElement.currentStyle && DHTMLSuite.clientInfoObj.isMSIE){
			var retVal = null;
			if(el.currentStyle)value = el.currentStyle[property];
			return (el.style[property] || retVal);
		}
		return el.style[property];
	}
	// }}}
	,
	// {{{ getLeftPos()
	/**
	 * This method will return the left coordinate(pixel) of an HTML element
	 *
	 * @param Object el = Reference to HTML element
	 * @public
	 */
	getLeftPos : function(el){	 
		/*
		if(el.getBoundingClientRect){ // IE
			var box = el.getBoundingClientRect();
			return (box.left/1 + Math.max(document.body.scrollLeft,document.documentElement.scrollLeft));
		}
		*/
		if(document.getBoxObjectFor){
			if(el.tagName!='INPUT' && el.tagName!='SELECT' && el.tagName!='TEXTAREA')return document.getBoxObjectFor(el).x
		}		 
		var returnValue = el.offsetLeft;
		while((el = el.offsetParent) != null){
			if(el.tagName!='HTML'){
				returnValue += el.offsetLeft;
				if(document.all)returnValue+=el.clientLeft;
			}
		}
		return returnValue;
	}
	// }}}
	,
	// {{{ getTopPos()
	/**
	 * This method will return the top coordinate(pixel) of an HTML element/tag
	 *
	 * @param Object el = Reference to HTML element
	 * @public
	 */
	getTopPos : function(el){
		/*
		if(el.getBoundingClientRect){	// IE
			var box = el.getBoundingClientRect();
			return (box.top/1 + Math.max(document.body.scrollTop,document.documentElement.scrollTop));
		}
		*/
		if(document.getBoxObjectFor){
			if(el.tagName!='INPUT' && el.tagName!='SELECT' && el.tagName!='TEXTAREA')return document.getBoxObjectFor(el).y
		}

		var returnValue = el.offsetTop;
		while((el = el.offsetParent) != null){
			if(el.tagName!='HTML'){
				returnValue += (el.offsetTop - el.scrollTop);
				if(document.all)returnValue+=el.clientTop;
			}
		} 
		return returnValue;
	}
	// }}}
	,
	// {{{ getCookie()
	/**
	 *
	 * 	These cookie functions are downloaded from 
	 * 	http://www.mach5.com/support/analyzer/manual/html/General/CookiesJavaScript.htm
	 *
	 *  This function returns the value of a cookie
	 *
	 * @param String name = Name of cookie
	 * @param Object inputObj = Reference to HTML element
	 * @public
	 */
	getCookie : function(name) { 
		var start = document.cookie.indexOf(name+"="); 
		var len = start+name.length+1; 
		if ((!start) && (name != document.cookie.substring(0,name.length))) return null; 
		if (start == -1) return null; 
		var end = document.cookie.indexOf(";",len); 
		if (end == -1) end = document.cookie.length; 
		return unescape(document.cookie.substring(len,end)); 
	} 
	// }}}
	,
	// {{{ setCookie()
	/**
	 *
	 * 	These cookie functions are downloaded from 
	 * 	http://www.mach5.com/support/analyzer/manual/html/General/CookiesJavaScript.htm
	 *
	 *  This function creates a cookie. (This method has been slighhtly modified)
	 *
	 * @param String name = Name of cookie
	 * @param String value = Value of cookie
	 * @param Int expires = Timestamp - days
	 * @param String path = Path for cookie (Usually left empty)
	 * @param String domain = Cookie domain
	 * @param Boolean secure = Secure cookie(SSL)
	 * 
	 * @public
	 */
	setCookie : function(name,value,expires,path,domain,secure) { 
		expires = expires * 60*60*24*1000;
		var today = new Date();
		var expires_date = new Date( today.getTime() + (expires) );
		var cookieString = name + "=" +escape(value) + 
			( (expires) ? ";expires=" + expires_date.toGMTString() : "") + 
			( (path) ? ";path=" + path : "") + 
			( (domain) ? ";domain=" + domain : "") + 
			( (secure) ? ";secure" : ""); 
		document.cookie = cookieString; 
	}
	// }}}
	,
	// {{{ deleteCookie()
	/**
	 *
	 *  This function deletes a cookie. (This method has been slighhtly modified)
	 *
	 * @param String name = Name of cookie
	 * @param String path = Path for cookie (Usually left empty)
	 * @param String domain = Cookie domain
	 * 
	 * @public
	 */
	deleteCookie : function( name, path, domain ) 
	{
		if ( this.getCookie( name ) ) document.cookie = name + "=" +
		( ( path ) ? ";path=" + path : "") +
		( ( domain ) ? ";domain=" + domain : "" ) +
		";expires=Thu, 01-Jan-1970 00:00:01 GMT";
	}
	// }}}
	,
	// {{{ cancelEvent()
	/**
	 *
	 *  This function only returns false. It is used to cancel selections and drag
	 *
	 * 
	 * @public
	 */

	cancelEvent : function(){
		return false;
	}
	// }}}
	,
	// {{{ addEvent()
	/**
	 *
	 *  This function adds an event listener to an element on the page.
	 *
	 *	@param Object whichObject = Reference to HTML element(Which object to assigne the event)
	 *	@param String eventType = Which type of event, example "mousemove" or "mouseup" (NOT "onmousemove")
	 *	@param functionName = Name of function to execute. 
	 * 
	 * @public
	 */
	addEvent : function( obj, type, fn,suffix ) {
	//alert(fn)
		if(!suffix)suffix = '';
		if ( obj.attachEvent ) {
			if ( typeof DHTMLSuite_funcs[type+fn+suffix] != 'function') {
				DHTMLSuite_funcs[type+fn+suffix] = function() {
					fn.apply(window.event.srcElement);
				};
				obj.attachEvent('on'+type, DHTMLSuite_funcs[type+fn+suffix] );
			}
			obj = null;
		} else {
			obj.addEventListener( type, fn, false );
		}
		this.__addEventEl(obj);
		
	}

	// }}}
	,
	// {{{ removeEvent()
	/**
	 *
	 *  This function removes an event listener from an element on the page.
	 *
	 *	@param Object whichObject = Reference to HTML element(Which object to assigne the event)
	 *	@param String eventType = Which type of event, example "mousemove" or "mouseup"
	 *	@param functionName = Name of function to execute. 
	 * 
	 * @public
	 */
	removeEvent : function(obj,type,fn,suffix){ 
		if ( obj.detachEvent ) {
		obj.detachEvent( 'on'+type, DHTMLSuite_funcs[type+fn+suffix] );
			DHTMLSuite_funcs[type+fn+suffix] = null;
			obj = null;
		} else {
			obj.removeEventListener( type, fn, false );
		}
	} 
	// }}}
	,
	// {{{ __clearMemoryGarbage()
	/**
	 *
	 *  This function is used for Internet Explorer in order to clear memory when the page unloads.
	 *
	 * 
	 * @private
	 */
	__clearMemoryGarbage : function(){
			/* Example of event which causes memory leakage in IE 
			DHTMLSuite.commonObj.addEvent(expandRef,"click",function(){ window.refToMyMenuBar[index].__changeMenuBarState(this); })
			We got a circular reference.
			*/
		if(!DHTMLSuite.clientInfoObj.isMSIE)return;

		for(var no=0;no<DHTMLSuite.eventEls.length;no++){
			try{
				var el = DHTMLSuite.eventEls[no];
				el.onclick = null;
				el.onmousedown = null;
				el.onmousemove = null;
				el.onmouseout = null;
				el.onmouseover = null;
				el.onmouseup = null;
				el.onfocus = null;
				el.onblur = null;
				el.onkeydown = null;
				el.onkeypress = null;
				el.onkeyup = null;
				el.onselectstart = null;
				el.ondragstart = null;
				el.oncontextmenu = null;
				el.onscroll = null;
				el = null; 
			}catch(e){
			}
		}

		for(var no in DHTMLSuite.variableStorage.arrayDSObjects){
			DHTMLSuite.variableStorage.arrayDSObjects[no] = null;
		}

		window.onbeforeunload = null;
		window.onunload = null;
		DHTMLSuite = null;
	}
	// }}}
	,
	// {{{ __addEventEl()
	/**
	 *
	 *  Add element to garbage collection array. The script will loop through this array and remove event handlers onload in ie.
	 *
	 * 
	 * @private
	 */
	__addEventEl : function(el){
		DHTMLSuite.eventEls[DHTMLSuite.eventEls.length] = el;
	}
	// }}}
	,
	// {{{ getSrcElement()
	/**
	 *
	 *  Returns a reference to the HTML element which triggered an event.
	 *	@param Event e = Event object
	 *
	 * 
	 * @public
	 */
	getSrcElement : function(e){
		var el;
		if (e.target) el = e.target;
			else if (e.srcElement) el = e.srcElement;
			if (el.nodeType == 3) // defeat Safari bug
				el = el.parentNode;
		return el;
	}
	// }}}
	,
	// {{{ getKeyFromEvent()
	/**
	 *
	 *  Returns key from event object
	 *	@param Event e = Event object
	 * 
	 * @public
	 */		 
	getKeyFromEvent : function(e){
		var code = this.getKeyCode(e);
		return String.fromCharCode(code);
	}
	// }}}
	,
	// {{{ getKeyCode()
	/**
	 *
	 *  Returns key code from event
	 *	@param Event e = Event object
	 * 
	 * @public
	 */		 
	getKeyCode : function(e){
		if (e.keyCode) code = e.keyCode; else if (e.which) code = e.which;  
		return code;
	}
	// }}}
	,
	// {{{ isObjectClicked()
	/**
	 *
	 *  Returns true if an object is clicked, false otherwise. This method will also return true if you clicked on a sub element
	 *	@param Object obj = Reference to HTML element
	 *	@param Event e = Event object
	 *
	 * 
	 * @public
	 */		  
	isObjectClicked : function(obj,e){
		var src = this.getSrcElement(e);
		var string = src.tagName + '(' + src.className + ')';
		if(src==obj)return true;
		while(src.parentNode && src.tagName.toLowerCase()!='html'){
			src = src.parentNode;
			string = string + ',' + src.tagName + '(' + src.className + ')';
			if(src==obj)return true;
		}
		return false;
	}
	// }}}
	,
	// {{{ getObjectByClassName()
	/**
	 *
	 *  Walks up the DOM tree and returns first found object with a given class name
	 *
	 *	@param Event e = Event object
	 *	@param String className = CSS - Class name
	 *
	 * 
	 * @public
	 */	 
	getObjectByClassName : function(e,className){
		var src = this.getSrcElement(e);
		if(src.className==className)return src;
		while(src && src.tagName.toLowerCase()!='html'){
			src = src.parentNode;
			if(src.className==className)return src;
		}
		return false;
	}
	//}}}
	,
	// {{{ getObjectByAttribute()
	/**
	 *
	 *  Walks up the DOM tree and returns first found object with a given attribute set
	 *
	 *	@param Event e = Event object
	 *	@param String attribute = Custom attribute
	 *
	 * 
	 * @public
	 */	 
	getObjectByAttribute : function(e,attribute){
		var src = this.getSrcElement(e);
		var att = src.getAttribute(attribute);
		if(!att)att = src[attribute];
		if(att)return src;
		while(src && src.tagName.toLowerCase()!='html'){
			src = src.parentNode;
			var att = src.getAttribute('attribute');
			if(!att)att = src[attribute];
			if(att)return src;
		}
		return false;
	}
	//}}}
	,
	// {{{ getUniqueId()
	/**
	 *
	 *  Returns a unique numeric id
	 *
	 *
	 * 
	 * @public
	 */
	getUniqueId : function(){
		var no = Math.random() + '';
		no = no.replace('.','');
		var no2 = Math.random() + '';
		no2 = no2.replace('.','');
		return no + no2;
	}
	// }}}
	,
	// {{{ getAssociativeArrayFromString()
	/**
	 *
	 *  Returns an associative array from a comma delimited string
	 *  @param String propertyString - commaseparated string(example: "id:myid,title:My title,contentUrl:includes/tab.inc")
	 *
	 *	@return Associative array of keys + property value(example: key: id, value : myId)
	 * @public
	 */
	getAssociativeArrayFromString : function(propertyString){
		if(!propertyString)return;
		var retArray = new Array();
		var items = propertyString.split(/,/g);
		for(var no=0;no<items.length;no++){
			var tokens = items[no].split(/:/);
			retArray[tokens[0]] = tokens[1];
		}
		return retArray;
	}
	// }}}
	,
	// {{{ correctPng()
	/**
	 *
	 *  Correct png for old IE browsers
	 *  @param Object el - Id or direct reference to image
	 *
	 * @public
	 */
	correctPng : function(el){
		el = DHTMLSuite.commonObj.getEl(el);
		var img = el;
		var width = img.width;
		var height = img.height;
		var html = '<span style="display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'' + img.src + '\',sizingMethod=\'scale\');width:' + width + ';height:' + height + '"></span>';
		img.outerHTML = html;

	}
	,
	// {{{ __evaluateJs()
	/**
	 * Evaluate Javascript in the inserted content
	 *
	 * @private
	 */
	__evaluateJs : function(obj){
		obj = this.getEl(obj);
		var scriptTags = obj.getElementsByTagName('SCRIPT');
		var string = '';
		var jsCode = '';
		for(var no=0;no<scriptTags.length;no++){
			if(scriptTags[no].src){
				var head = document.getElementsByTagName("head")[0];
				var scriptObj = document.createElement("script");

				scriptObj.setAttribute("type", "text/javascript");
				scriptObj.setAttribute("src", scriptTags[no].src);  
			}else{
				if(DHTMLSuite.clientInfoObj.isOpera){
					jsCode = jsCode + scriptTags[no].text + '\n';
				}
				else
					jsCode = jsCode + scriptTags[no].innerHTML;
			}
		}
		if(jsCode)this.__installScript(jsCode);
	}
	// }}}
	,
	// {{{ __installScript()
	/**
	 *  "Installs" the content of a <script> tag.
	 *
	 * @private
	 */
	__installScript : function ( script ){
		try{
			if (!script)
				return;
			if (window.execScript){
				window.execScript(script)
			}else if(window.jQuery && jQuery.browser.safari){ // safari detection in jQuery
				window.setTimeout(script,0);
			}else{
				window.setTimeout( script, 0 );
			} 
		}catch(e){

		}
	}
	// }}}
	,
	// {{{ __evaluateCss()
	/**
	 *  Evaluates css
	 *
	 * @private
	 */
	__evaluateCss : function(obj){
		obj = this.getEl(obj);
		var cssTags = obj.getElementsByTagName('STYLE');
		var head = document.getElementsByTagName('HEAD')[0];
		for(var no=0;no<cssTags.length;no++){
			head.appendChild(cssTags[no]);
		}
	}
}

/************************************************************************************************************
*	Client info class
*
*	Created:			August, 18th, 2006
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class: Provide browser information to the classes below. Instead of checking for
*		 browser versions and browser types in the classes below, they should check this
*		 easily by referncing properties in the class below. An object("DHTMLSuite.clientInfoObj") of this 
*		 class will always be accessible to the other classes. * @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
**/

DHTMLSuite.clientInfo = function(){
	var browser;			// Complete user agent information

	var isOpera;			// Is the browser "Opera"
	var isMSIE;				// Is the browser "Internet Explorer"
	var isOldMSIE;			// Is this browser and older version of Internet Explorer ( by older, we refer to version 6.0 or lower)
	var isFirefox;			// Is the browser "Firefox"
	var navigatorVersion;	// Browser version
	var isOldMSIE;
}

DHTMLSuite.clientInfo.prototype = {

	// {{{ init()
	/**
	 *  This method initializes the clientInfo object. This is done automatically when you create a widget object.
	 *
	 * @public
	 */
	init : function(){
		this.browser = navigator.userAgent;
		this.isOpera = (this.browser.toLowerCase().indexOf('opera')>=0)?true:false;
		this.isFirefox = (this.browser.toLowerCase().indexOf('firefox')>=0)?true:false;
		this.isMSIE = (this.browser.toLowerCase().indexOf('msie')>=0)?true:false;
		this.isOldMSIE = (this.browser.toLowerCase().match(/msie\s[0-6]/gi))?true:false;
		this.isSafari = (this.browser.toLowerCase().indexOf('safari')>=0)?true:false;
		this.navigatorVersion = navigator.appVersion.replace(/.*?MSIE\s(\d\.\d).*/g,'$1')/1;
		this.isOldMSIE = (this.isMSIE&&this.navigatorVersion<7)?true:false;
	}
	// }}}
	,
	// {{{ getBrowserWidth()
	/**
	 *
	 *
	 *  This method returns the width of the browser window(i.e. inner width)
	 *
	 * 
	 * @public
	 */
	getBrowserWidth : function(){
		if(self.innerWidth)return self.innerWidth;
		return document.documentElement.offsetWidth;
	}
	// }}}
	,
	// {{{ getBrowserHeight()
	/**
	 *
	 *
	 *  This method returns the height of the browser window(i.e. inner height)
	 *
	 * 
	 * @public
	 */
	getBrowserHeight : function(){
		if(self.innerHeight)return self.innerHeight;
		return document.documentElement.offsetHeight;
	}
}

/************************************************************************************************************
*	DOM query class 
*
*	Created:			August, 31th, 2006
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class:	Gives you a set of methods for querying elements on a webpage. When an object
*		 of this class has been created, the method will also be available via the document object.
*		 Example: var elements = document.getElementsByClassName('myClass');
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
**/

DHTMLSuite.domQuery = function(){
	// Make methods of this class a member of the document object. 
	document.getElementsByClassName = this.getElementsByClassName;
	document.getElementsByAttribute = this.getElementsByAttribute;
}

DHTMLSuite.domQuery.prototype = {
}



/*[FILE_START:dhtmlSuite-menuModel.js] */
/************************************************************************************************************
*	DHTML menu model item class
*
*	Created:						October, 30th, 2006
*	@class Purpose of class:		Save data about a menu item.
*
*
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class The purpose of this class is to store data about a menu item. menuModelItem
* @version				1.0
* @version 1.0
* 
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
**/

DHTMLSuite.menuModelItem = function(){
	var id;					// id of this menu item.
	var itemText;			// Text for this menu item
	var itemIcon;			// Icon for this menu item.
	var url;				// url when click on this menu item
	var parentId;			// id of parent element
	var separator;			// is this menu item a separator
	var jsFunction;			// Js function to call onclick
	var depth;				// Depth of this menu item.
	var hasSubs;			// Does this menu item have sub items.
	var type;				// Menu item type - possible values: "top" or "sub". 
	var helpText;			// Help text for this item - appear when you move your mouse over the item.
	var state;
	var submenuWidth;		// Width of sub menu items.
	var visible;			// Visibility of menu item.

	this.state = 'regular';
}

DHTMLSuite.menuModelItem.prototype = {

	setMenuVars : function(id,itemText,itemIcon,url,parentId,helpText,jsFunction,type,submenuWidth){
		this.id = id;
		this.itemText = itemText;
		this.itemIcon = itemIcon;
		this.url = url;
		this.parentId = parentId;
		this.jsFunction = jsFunction;
		this.separator = false;
		this.depth = false;
		this.hasSubs = false;
		this.helpText = helpText;
		this.submenuWidth = submenuWidth;
		this.visible = true;
		if(!type){
			if(this.parentId)this.type = 'top'; else this.type='sub';
		}else this.type = type;

	}
	// }}}
	,
	// {{{ setState()
	/**
	 *	Update the state attribute of a menu item.
	 *
	 *  @param String newState New state of this item
	 * @public
	 */
	setAsSeparator : function(id,parentId){
		this.id = id;
		this.parentId = parentId;
		this.separator = true;
		this.visible = true;
		if(this.parentId)this.type = 'top'; else this.type='sub';
	}
	// }}}
	,
	// {{{ setState()
	/**
	 *	Update the visible attribute of a menu item.
	 *
	 *  @param Boolean visible true = visible, false = hidden.
	 * @public
	 */
	setVisibility : function(visible){
		this.visible = visible;
	}
	// }}}
	,
	// {{{ getState()
	/**
	 *	Return the state attribute of a menu item.
	 *
	 * @public
	 */
	getState : function(){
		return this.state;
	}
	// }}}
	,
	// {{{ setState()
	/**
	 *	Update the state attribute of a menu item.
	 *
	 *  @param String newState New state of this item
	 * @public
	 */
	setState : function(newState){
		this.state = newState;
	}
	// }}}
	,
	// {{{ setSubMenuWidth()
	/**
	 *	Specify width of direct subs of this item.
	 *
	 *  @param int newWidth Width of sub menu group(direct sub of this item)
	 * @public
	 */
	setSubMenuWidth : function(newWidth){
		this.submenuWidth = newWidth;
	}
	// }}}
	,
	// {{{ setIcon()
	/**
	 *	Specify new menu icon
	 *
	 *  @param String iconPath Path to new menu icon
	 * @public
	 */
	setIcon : function(iconPath){
		this.itemIcon = iconPath;
	}
	// }}}
	,
	// {{{ setText()
	/**
	 *	Specify new text for the menu item.
	 *
	 *  @param String newText New text for the menu item.
	 * @public
	 */
	setText : function(newText){
		this.itemText = newText;
	}
}

/************************************************************************************************************
*	DHTML menu model class
*
*	Created:						October, 30th, 2006
*	@class Purpose of class:		Saves menu item data
*
*
*	Demos of this class:			demo-menu-strip.html
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class:	Organize menu items for different menu widgets. demos of menus: (<a href="../../demos/demo-menu-strip.html" target="_blank">Demo</a>)
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

DHTMLSuite.menuModel = function(){
	var menuItems;					// Array of menuModelItem objects
	var menuItemsOrder;			// This array is needed in order to preserve the correct order of the array above. the array above is associative
									// And some browsers will loop through that array in different orders than Firefox and IE.
	var submenuType;				// Direction of menu items(one item for each depth)
	var mainMenuGroupWidth;			// Width of menu group - useful if the first group of items are listed below each other
	this.menuItems = new Object();
	this.menuItemsOrder = new Array();
	this.submenuType = new Array();
	this.submenuType[1] = 'top';
	for(var no=2;no<20;no++){
		this.submenuType[no] = 'sub';
	}
	try{
		if(!standardObjectsCreated)DHTMLSuite.createStandardObjects();
	}catch(e){
		alert('You need to include the dhtmlSuite-common.js file');
	}
}

DHTMLSuite.menuModel.prototype = {
	// {{{ addItem()
	/**
	 *	Add separator (special type of menu item)
	 *
 	 *
	 *
	 *  @param int id of menu item
	 *  @param string itemText = text of menu item
	 *  @param string itemIcon = file name of menu icon(in front of menu text. Path will be imagePath for the DHTMLSuite + file name)
	 *  @param string url = Url of menu item
	 *  @param int parent id of menu item	 
	 *  @param String jsFunction Name of javascript function to execute. It will replace the url param. The function with this name will be called and the element triggering the action will be 
	 *					sent as argument. Name of the element which triggered the menu action may also be sent as a second argument. That depends on the widget. The context menu is an example where
	 *					the element triggering the context menu is sent as second argument to this function.
	 *
	 * @public
	 */
	addItem : function(id,itemText,itemIcon,url,parentId,helpText,jsFunction,type,submenuWidth){
		if(!id)id = this.__getUniqueId();	// id not present - create it dynamically.
		try{
			this.menuItems[id] = new DHTMLSuite.menuModelItem();
		}catch(e){
			alert('Error: You need to include dhtmlSuite-menuModel.js in your html file');
		}
		this.menuItems[id].setMenuVars(id,itemText,itemIcon,url,parentId,helpText,jsFunction,type,submenuWidth);
		this.menuItemsOrder[this.menuItemsOrder.length] = id;
		return this.menuItems[id];
	}
	,
	// {{{ addItemsFromMarkup()
	/**
	 *	This method creates all the menuModelItem objects by reading it from existing markup on your page.
	 *	Example of HTML markup:
	 *<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul id="menuModel">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="50000" itemIcon="../images/disk.gif">&lt;a href="#" title="Open the file menu">File&lt;/a>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul width="150">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500001" jsFunction="saveWork()" itemIcon="../images/disk.gif">&lt;a href="#" title="Save your work">Save&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500002">&lt;a href="#">Save As&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500004" itemType="separator">&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500003">&lt;a href="#">Open&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="50001">&lt;a href="#">View&lt;/a>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul width="130">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500011">&lt;a href="#">Source&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500012">&lt;a href="#">Debug info&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="500013">&lt;a href="#">Layout&lt;/a>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;ul width="150">
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="5000131">&lt;a href="#">CSS&lt;/a>&nbsp;&nbsp;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="5000132">&lt;a href="#">HTML&lt;/a>&nbsp;&nbsp;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="5000133">&lt;a href="#">Javascript&lt;/a>&nbsp;&nbsp;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="50003" itemType="separator">&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;li id="50002">&lt;a href="#">Tools&lt;/a>&lt;/li>
		<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/ul>&nbsp;&nbsp;	 
	 *
	 *  @param String ulId = ID of <UL> tag on your page.
	 *
	 * @public
	 */
	addItemsFromMarkup : function(ulId){
		if(!document.getElementById(ulId)){
			alert('<UL> tag with id ' + ulId + ' does not exist');
			return;
		}
		var ulObj = document.getElementById(ulId);
		var liTags = ulObj.getElementsByTagName('LI');
		for(var no=0;no<liTags.length;no++){	// Walking through all <li> tags in the <ul> tree

			var id = liTags[no].id.replace(/[^0-9]/gi,'');	// Get id of item.
			if(!id || this.menuItems[id])id = this.__getUniqueId();
			try{
				this.menuItems[id] = new DHTMLSuite.menuModelItem();	// Creating new menuModelItem object
			}catch(e){
				alert('Error: You need to include dhtmlSuite-menuModel.js in your html file');
			}
			this.menuItemsOrder[this.menuItemsOrder.length] = id;
			// Get the attributes for this new menu item.

			var parentId = 0;	// Default parent id
			if(liTags[no].parentNode!=ulObj)parentId = liTags[no].parentNode.parentNode.id;	// parent node exists, set parentId equal to id of parent <li>.

			/* Checking type */
			var type = liTags[no].getAttribute('itemType');
			if(!type)type = liTags[no].itemType;
			if(type=='separator'){	// Menu item of type "separator"
				this.menuItems[id].setAsSeparator(id,parentId);
				continue;
			}
			if(parentId)type='sub'; else type = 'top';

			var aTag = liTags[no].getElementsByTagName('A')[0];	// Get a reference to sub <a> tag
			if(!aTag){
				continue;
			}
			if(aTag)var itemText = aTag.innerHTML;	// Item text is set to the innerHTML of the <a> tag.
			var itemIcon = liTags[no].getAttribute('itemIcon');	// Item icon is set from the itemIcon attribute of the <li> tag.
			var url = aTag.href;	// url is set to the href attribute of the <a> tag
			if(url=='#' || url.substr(url.length-1,1)=='#')url='';	// # = empty url.

			var jsFunction = liTags[no].getAttribute('jsFunction');	// jsFunction is set from the jsFunction attribute of the <li> tag.

			var submenuWidth = false;	// Not set from the <li> tag. 
			var helpText = aTag.getAttribute('title');
			if(!helpText)helpText = aTag.title;

			this.menuItems[id].setMenuVars(id,itemText,itemIcon,url,parentId,helpText,jsFunction,type,submenuWidth);
		}
		var subUls = ulObj.getElementsByTagName('UL');
		for(var no=0;no<subUls.length;no++){
			var width = subUls[no].getAttribute('width');
			if(!width)width = subUls[no].width;
			if(width){
				var id = subUls[no].parentNode.id.replace(/[^0-9]/gi,'');
				this.setSubMenuWidth(id,width);
			}
		}
		ulObj.style.display='none';

	}
	// }}}
	,
	// {{{ setSubMenuWidth()
	/**
	 *	This method specifies the width of a sub menu group. This is a useful method in order to get a correct width in IE6 and prior.
	 *
	 *  @param int id = ID of parent menu item
	 *  @param String newWidth = Width of sub menu items.
	 * @public
	 */
	setSubMenuWidth : function(id,newWidth){
		this.menuItems[id].setSubMenuWidth(newWidth);
	}
	,
	// {{{ setMainMenuGroupWidth()
	/**
	 *	Add separator (special type of menu item)
	 *
	 *  @param String newWidth = Size of a menu group
	 *  @param int parent id of menu item
	 * @public
	 */
	setMainMenuGroupWidth : function(newWidth){
		this.mainMenuGroupWidth = newWidth;
	}
	,
	// {{{ addSeparator()
	/**
	 *	Add separator (special type of menu item)
	 *
	 *  @param int parent id of menu item
	 * @public
	 */
	addSeparator : function(parentId){
		id = this.__getUniqueId();	// Get unique id
		if(!parentId)parentId = 0;
		try{
			this.menuItems[id] = new DHTMLSuite.menuModelItem();
		}catch(e){
			alert('Error: You need to include dhtmlSuite-menuModel.js in your html file');
		}
		this.menuItems[id].setAsSeparator(id,parentId);
		this.menuItemsOrder[this.menuItemsOrder.length] = id;
		return this.menuItems[id];
	}
	,
	// {{{ init()
	/**
	 *	Initilizes the menu model. This method should be called when all items has been added to the model.
	 *
	 *
	 * @public
	 */
	init : function(){
		this.__getDepths();
		this.__setHasSubs();

	}
	// }}}
	,
	// {{{ setMenuItemVisibility()
	/**
	 *	Save visibility of a menu item.
	 * 
	 *	@param int id = Id of menu item..
	 *	@param Boolean visible = Visibility of menu item.
	 *
	 * @public
	 */
	setMenuItemVisibility : function(id,visible){
		this.menuItems[id].setVisibility(visible);
	}
	// }}}
	,
	// {{{ setSubMenuType()
	/**
	 *	Set menu type for a specific menu depth.
	 * 
	 *	@param int depth = 1 = Top menu, 2 = Sub level 1...
	 *	@param String newType = New menu type(possible values: "top" or "sub")
	 *
	 * @public
	 */
	setSubMenuType : function(depth,newType){
		this.submenuType[depth] = newType;
		this.__getDepths();

	}
	// }}}
	,
	// {{{ getItems()
	/**
	 *	return an array of all menu items or a branch of menu items.
	 *	@param String parentId - id of parent node
	 * 
	 *
	 * @public
	 */
	getItems : function(parentId,returnArray){
		if(!parentId)return this.menuItems;
		if(!returnArray)returnArray = new Array();
		for(var no=0;no<this.menuItemsOrder.length;no++){
			var id = this.menuItemsOrder[no];
			if(!id)continue;
			if(this.menuItems[id].parentId==parentId){
				returnArray[returnArray.length] = this.menuItems[id];
				if(this.menuItems[id].hasSubs)return this.getItems(this.menuItems[id].id,returnArray);
			}
		}
		return returnArray;

	}
	// }}}
	,
	// {{{ __getUniqueId()
	/**
	 *	Returns a unique id for a menu item. This method is used by the addSeparator function in case an id isn't sent to the method.
	 * 
	 *
	 * @private
	 */
	__getUniqueId : function(){
		var num = Math.random() + '';
		num = num.replace('.','');
		num = '99' + num;
		num = num /1;
		while(this.menuItems[num]){
			num = Math.random() + '';
			num = num.replace('.','');
			num = num /1;
		}
		return num;
	}
	// }}}
	,
	// {{{ __getDepths()
	/**
	 *	Create variable for the depth of each menu item.
	 * 
	 *
	 * @private
	 */
	__getDepths : function(){
		for(var no=0;no<this.menuItemsOrder.length;no++){
			var id = this.menuItemsOrder[no];
			if(!id)continue;
			this.menuItems[id].depth = 1;
			if(this.menuItems[id].parentId){
				this.menuItems[id].depth = this.menuItems[this.menuItems[id].parentId].depth+1;
 
			}  
			this.menuItems[id].type = this.submenuType[this.menuItems[id].depth];	// Save menu direction for this menu item.  
		}
	}
	// }}}
	,
	// {{{ __setHasSubs()
	/**
	 *	Create variable for the depth of each menu item.
	 * 
	 *
	 * @private
	 */
	__setHasSubs : function(){
		for(var no=0;no<this.menuItemsOrder.length;no++){
			var id = this.menuItemsOrder[no];
			if(!id)continue;
			if(this.menuItems[id].parentId){
				this.menuItems[this.menuItems[id].parentId].hasSubs = 1;

			}
		}
	}
	// }}}
	,
	// {{{ __hasSubs()
	/**
	 *	Does a menu item have sub elements ?
	 * 
	 *
	 * @private
	 */
	// }}}
	__hasSubs : function(id){
		for(var no=0;no<this.menuItemsOrder.length;no++){
			var id = this.menuItemsOrder[no];
			if(!id)continue;
			if(this.menuItems[id].parentId==id)return true;
		}
		return false;
	}
	// }}}
	,
	// {{{ __deleteChildNodes()
	/**
	 *	Deleting child nodes of a specific parent id
	 * 
	 *	@param int parentId
	 *
	 * @private
	 */
	// }}}
	__deleteChildNodes : function(parentId,recursive){
		var itemsToDeleteFromOrderArray = new Array();
		for(var prop=0;prop<this.menuItemsOrder.length;prop++){
			var id = this.menuItemsOrder[prop];
			if(!id)continue;

			if(this.menuItems[id].parentId==parentId && parentId){
				this.menuItems[id] = false;
				itemsToDeleteFromOrderArray[itemsToDeleteFromOrderArray.length] = id;
				this.__deleteChildNodes(id,true);	// Recursive call.
			}
		}

		if(!recursive){
			for(var prop=0;prop<itemsToDeleteFromOrderArray.length;prop++){
				if(!itemsToDeleteFromOrderArray[prop])continue;
				this.__deleteItemFromItemOrderArray(itemsToDeleteFromOrderArray[prop]);
			}
		}
		this.__setHasSubs();
	}
	// }}}
	,
	// {{{ __deleteANode()
	/**
	 *	Deleting a specific node from the menu model
	 * 
	 *	@param int id = Id of node to delete.
	 *
	 * @private
	 */
	// }}}
	__deleteANode : function(id){
		this.menuItems[id] = false;
		this.__deleteItemFromItemOrderArray(id);
	}
	,
	// {{{ __deleteItemFromItemOrderArray()
	/**
	 *	Deleting a specific node from the menuItemsOrder array(The array controlling the order of the menu items).
	 * 
	 *	@param int id = Id of node to delete.
	 *
	 * @private
	 */
	// }}}
	__deleteItemFromItemOrderArray : function(id){
		for(var no=0;no<this.menuItemsOrder.length;no++){
			var tmpId = this.menuItemsOrder[no];
			if(!tmpId)continue;
			if(this.menuItemsOrder[no]==id){
				this.menuItemsOrder.splice(no,1);
				return;
			}
		}

	}
	// }}}
	,
	// {{{ __appendMenuModel()
	/**
	 *	Replace the sub items of a menu item with items from a new menuModel.
	 * 
	 *	@param menuModel newModel = An object of class menuModel - the items of this menu model will be appended to the existing menu items.
	 *	@param Int parentId = Id of parent element of the appended items.
	 *
	 * @private
	 */
	// }}}
	__appendMenuModel : function(newModel,parentId){
		if(!newModel)return;
		var items = newModel.getItems();
		for(var no=0;no<newModel.menuItemsOrder.length;no++){
			var id = newModel.menuItemsOrder[no];
			if(!id)continue;
			if(!items[id].parentId)items[id].parentId = parentId;
			this.menuItems[id] = items[id];
			for(var no2=0;no2<this.menuItemsOrder.length;no2++){	// Check to see if this item allready exists in the menuItemsOrder array, if it does, remove it. 
				if(!this.menuItemsOrder[no2])continue;
				if(this.menuItemsOrder[no2]==items[id].id){
					this.menuItemsOrder.splice(no2,1);
				}
			}
			this.menuItemsOrder[this.menuItemsOrder.length] = items[id].id;
		}
		this.__getDepths();
		this.__setHasSubs();
	}
	// }}}
}

/*[FILE_START:dhtmlSuite-menuItem.js] */
/************************************************************************************************************
*	DHTML menu item class
*
*	Created:						October, 21st, 2006
*	@class Purpose of class:		Creates the HTML for a single menu item.
*
*	Css files used by this script:	menu-item.css
*
*	Demos of this class:			demo-menu-strip.html
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class:	Creates the div(s) for a menu item. This class is used by the menuBar class. You can 
*	also create a menu item and add it where you want on your page. the createItem() method will return the div
*	for the item. You can use the appendChild() method to add it to your page. 
*
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

DHTMLSuite.menuItem = function(){
	var layoutCSS;
	var divElement;							// the <div> element created for this menu item
	var expandElement;						// Reference to the arrow div (expand sub items)
	var cssPrefix;							// Css prefix for the menu items.
	var modelItemRef;						// Reference to menuModelItem

	this.layoutCSS = 'menu-item.css';
	this.cssPrefix = 'DHTMLSuite_';

	try{
		if(!standardObjectsCreated)DHTMLSuite.createStandardObjects();
	}catch(e){
		alert('You need to include the dhtmlSuite-common.js file');
	}

	var objectIndex;
	this.objectIndex = DHTMLSuite.variableStorage.arrayDSObjects.length;

}

DHTMLSuite.menuItem.prototype = 
{

	/*
	*	Create a menu item.
	*
	*	@param menuModelItem menuModelItemObj = An object of class menuModelItem
	*/
	createItem : function(menuModelItemObj){
		DHTMLSuite.commonObj.loadCSS(this.layoutCSS);	// Load css

		DHTMLSuite.variableStorage.arrayDSObjects[this.objectIndex] = this;

		this.modelItemRef = menuModelItemObj;

		this.divElement = 'DHTMLSuite_menuItem' + menuModelItemObj.id;

		var div = document.createElement('DIV');	// Create main div
		document.body.appendChild(div);
		div.id = this.divElement;	// Giving this menu item it's unque id
		div.className = this.cssPrefix + 'menuItem_' + menuModelItemObj.type + '_regular'; 
		div.onselectstart = function() { return false; };
		if(menuModelItemObj.helpText){	// Add "title" attribute to the div tag if helpText is defined
			div.title = menuModelItemObj.helpText;
		}

		// Menu item of type "top"
		if(menuModelItemObj.type=='top'){
			this.__createMenuElementsOfTypeTop(div);
		}

		if(menuModelItemObj.type=='sub'){
			this.__createMenuElementsOfTypeSub(div);
		}

		if(menuModelItemObj.separator){
			div.className = this.cssPrefix + 'menuItem_separator_' + menuModelItemObj.type;
			div.innerHTML = '<span></span>';
		}else{
			/* Add events */
			var tmpVar = this.objectIndex/1;
			div.onclick = function(e) { DHTMLSuite.variableStorage.arrayDSObjects[tmpVar].__navigate(e); }
			div.onmousedown = this.__clickMenuItem;			// on mouse down effect
			div.onmouseup = this.__rolloverMenuItem;		// on mouse up effect
			div.onmouseover = this.__rolloverMenuItem;		// mouse over effect
			div.onmouseout = this.__rolloutMenuItem;		// mouse out effect.

		}
		DHTMLSuite.commonObj.__addEventEl(div);
		return div;
	}
	// }}}
	,
	// {{{ setLayoutCss()
	/**
	 *	Creates the different parts of a menu item of type "top".
	 *
	 *  @param String newLayoutCss = Name of css file used for the menu items.
	 *
	 * @public
	 */
	setLayoutCss : function(newLayoutCss){
		this.layoutCSS = newLayoutCss;

	}
	// }}}
	,
	// {{{ __createMenuElementsOfTypeTop()
	/**
	 *	Creates the different parts of a menu item of type "top".
	 *
	 *  @param menuModelItem menuModelItemObj = Object of type menuModelItemObj
	 *  @param Object parentEl = Reference to parent element
	 *
	 * @private
	 */
	__createMenuElementsOfTypeTop : function(parentEl){
		if(this.modelItemRef.itemIcon){
			var iconDiv = document.createElement('DIV');
			iconDiv.innerHTML = '<img src="' + this.modelItemRef.itemIcon + '">';
			iconDiv.id = 'menuItemIcon' + this.modelItemRef.id
			parentEl.appendChild(iconDiv);
		}
		if(this.modelItemRef.itemText){
			var div = document.createElement('DIV');
			div.innerHTML = this.modelItemRef.itemText;
			div.className = this.cssPrefix + 'menuItem_textContent';
			div.id = 'menuItemText' + this.modelItemRef.id;
			parentEl.appendChild(div);
		}
		if(this.modelItemRef.hasSubs){
			/* Create div for the arrow -> Show sub items */
			var div = document.createElement('DIV');
			div.className = this.cssPrefix + 'menuItem_top_arrowShowSub';
			div.id = 'DHTMLSuite_menuBar_arrow' + this.modelItemRef.id;
			parentEl.appendChild(div);
			this.expandElement = div.id;
		}

	}
	// }}}
	,

	// {{{ __createMenuElementsOfTypeSub()
	/**
	 *	Creates the different parts of a menu item of type "sub".
	 *
	 *  @param menuModelItem menuModelItemObj = Object of type menuModelItemObj
	 *  @param Object parentEl = Reference to parent element
	 *
	 * @private
	 */
	__createMenuElementsOfTypeSub : function(parentEl){
		if(this.modelItemRef.itemIcon){
			parentEl.style.backgroundImage = 'url(\'' + this.modelItemRef.itemIcon + '\')';
			parentEl.style.backgroundRepeat = 'no-repeat';
			parentEl.style.backgroundPosition = 'left center';
		}
		if(this.modelItemRef.itemText){
			var div = document.createElement('DIV');
			div.className = 'DHTMLSuite_textContent';
			div.innerHTML = this.modelItemRef.itemText;
			div.className = this.cssPrefix + 'menuItem_textContent';
			div.id = 'menuItemText' + this.modelItemRef.id;
			parentEl.appendChild(div);
		}

		if(this.modelItemRef.hasSubs){
			/* Create div for the arrow -> Show sub items */
			var div = document.createElement('DIV');
			div.className = this.cssPrefix + 'menuItem_sub_arrowShowSub';
			parentEl.appendChild(div);
			div.id = 'DHTMLSuite_menuBar_arrow' + this.modelItemRef.id;
			this.expandElement = div.id;
			div.previousSibling.style.paddingRight = '15px';
		}
	}
	// }}}
	,
	// {{{ setCssPrefix()
	/**
	 *	Set css prefix for the menu item. default is 'DHTMLSuite_'. This is useful in case you want to have different menus on a page with different layout.
	 *
	 *  @param String cssPrefix = New css prefix. 
	 *
	 * @public
	 */
	setCssPrefix : function(cssPrefix){
		this.cssPrefix = cssPrefix;
	}
	// }}}
	,
	// {{{ setMenuIcon()
	/**
	 *	Replace menu icon.
	 *
	 *	@param String newPath - Path to new icon (false if no icon);
	 *
	 * @public
	 */
	setIcon : function(newPath){
		this.modelItemRef.setIcon(newPath);
		if(this.modelItemRef.type=='top'){	// Menu item is of type "top"
			var div = document.getElementById('menuItemIcon' + this.modelItemRef.id);	// Get a reference to the div where the icon is located.
			var img = div.getElementsByTagName('IMG')[0];	// Find the image
			if(!img){	// Image doesn't exists ?
				img = document.createElement('IMG');	// Create new image
				div.appendChild(img);
			}
			img.src = newPath;	// Set image path
			if(!newPath)DHTMLSuite.discardElement(img);	// No newPath defined, remove the image.
		}
		if(this.modelItemRef.type=='sub'){	// Menu item is of type "sub"
			document.getElementById(this.divElement).style.backgroundImage = 'url(\'' + newPath + '\')';		// Set backgroundImage for the main div(i.e. menu item div)
		}
	}
	// }}}
	,
	// {{{ setText()
	/**
	 *	Replace the text of a menu item
	 *
	 *	@param String newText - New text for the menu item.
	 *
	 * @public
	 */
	setText : function(newText){
		this.modelItemRef.setText(newText);
		document.getElementById('menuItemText' + this.modelItemRef.id).innerHTML = newText;

	}

	// }}}
	,
	// {{{ __clickMenuItem()
	/**
	 *	Effect - click on menu item
	 *
	 *
	 * @private
	 */
	__clickMenuItem : function(){
		this.className = this.className.replace('_regular','_click');
		this.className = this.className.replace('_over','_click');
	}
	// }}}
	,
	// {{{ __rolloverMenuItem()
	/**
	 *	Roll over effect
	 *
	 *
	 * @private
	 */
	__rolloverMenuItem : function(){
		this.className = this.className.replace('_regular','_over');
		this.className = this.className.replace('_click','_over');
	}
	// }}}
	,
	// {{{ __rolloutMenuItem()
	/**
	 *	Roll out effect
	 *
	 *
	 * @private
	 */
	__rolloutMenuItem : function(){
		this.className = this.className.replace('_over','_regular');

	}
	// }}}
	,
	// {{{ setState()
	/**
	 *	Set state of a menu item.
	 *
	 *	@param String newState = New state for the menu item
	 *
	 * @public
	 */
	setState : function(newState){
		document.getElementById(this.divElement).className = this.cssPrefix + 'menuItem_' + this.modelItemRef.type + '_' + newState; 
		this.modelItemRef.setState(newState);
	}
	// }}}
	,
	// {{{ getState()
	/**
	 *	Return state of a menu item. 
	 *
	 *
	 * @public
	 */
	getState : function(){
		var state = this.modelItemRef.getState();
		if(!state){
			if(document.getElementById(this.divElement).className.indexOf('_over')>=0)state = 'over';
			if(document.getElementById(this.divElement).className.indexOf('_click')>=0)state = 'click';
			this.modelItemRef.setState(state);
		}
		return state;
	}
	// }}}
	,
	// {{{ __setHasSub()
	/**
	 *	Update the item, i.e. show/hide the arrow if the element has subs or not. 
	 *
	 *
	 * @private
	 */
	__setHasSub : function(hasSubs){
		this.modelItemRef.hasSubs = hasSubs;
		if(!hasSubs){
			document.getElementById(this.cssPrefix +'menuBar_arrow' + this.modelItemRef.id).style.display='none';
		}else{
			document.getElementById(this.cssPrefix +'menuBar_arrow' + this.modelItemRef.id).style.display='block';
		}
	}
	// }}}
	,
	// {{{ hide()
	/**
	 *	Hide the menu item.
	 *
	 *
	 * @public
	 */
	hide : function(){
		this.modelItemRef.setVisibility(false);
		document.getElementById(this.divElement).style.display='none';
	}
	,
 	// {{{ show()
	/**
	 *	Show the menu item.
	 *
	 *
	 * @public
	 */		 
	show : function(){
		this.modelItemRef.setVisibility(true);
		document.getElementById(this.divElement).style.display='block';
	}
	// }}}
	,
	// {{{ __hideGroup()
	/**
	 *	Hide the group the menu item is a part of. Example: if we're dealing with menu item 2.1, hide the group for all sub items of 2
	 *
	 *
	 * @private
	 */
	__hideGroup : function(){
		if(this.modelItemRef.parentId){
			document.getElementById(this.divElement).parentNode.style.visibility='hidden';
			if(DHTMLSuite.clientInfoObj.isMSIE){
				try{
					var tmpId = document.getElementById(this.divElement).parentNode.id.replace(/[^0-9]/gi,'');
					document.getElementById('DHTMLSuite_menuBarIframe_' + tmpId).style.visibility = 'hidden';
				}catch(e){
					// IFRAME hasn't been created.
				}
			}
		}

	}
	// }}}
	,
	// {{{ __navigate()
	/**
	 *	Navigate after click on a menu item.
	 *
	 *
	 * @private
	 */
	__navigate : function(e){
		/* Check to see if the expand sub arrow is clicked. if it is, we shouldn't navigate from this click */
		if(document.all)e = event;
		if(e){
			var srcEl = DHTMLSuite.commonObj.getSrcElement(e);
			if(srcEl.id.indexOf('arrow')>=0)return;
		}
		if(this.modelItemRef.state=='disabled')return;
		if(this.modelItemRef.url){
			location.href = this.modelItemRef.url;
		}
		if(this.modelItemRef.jsFunction){
			try{
				eval(this.modelItemRef.jsFunction);
			}catch(e){
				alert('Defined Javascript code for the menu item( ' + this.modelItemRef.jsFunction + ' ) cannot be executed');
			}
		}
	} 
}

/*[FILE_START:dhtmlSuite-menuBar.js] */
/************************************************************************************************************
*	DHTML menu bar class
*
*	Created:						October, 21st, 2006
*	@class Purpose of class:		Creates a top bar menu
*
*	Css files used by this script:	menu-bar.css
*
*	Demos of this class:			demo-menu-bar.html
*
* 	Update log:
*
************************************************************************************************************/
/**
* @constructor
* @class Purpose of class:	Creates a top bar menu strip. Demos: <br>
*	<ul>
*	<li>(<a href="../../demos/demo-menu-bar-2.html" target="_blank">A menu with a detailed description on how it is created</a>)</li>
*	<li>(<a href="../../demos/demo-pane-splitter.html" target="_blank">Menu bar in a pane splitter pane</a>)</li>
*	</ul>
*
*	<a href="../images/menu-bar-1.gif" target="_blank">Image describing the classes</a> <br><br>
*
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

DHTMLSuite.menuBar = function(){
	var menuItemObj;
	var layoutCSS;					// Name of css file
	var menuBarBackgroundImage;		// Name of background image
	var menuItem_objects;			// Array of menu items - html elements.
	var menuBarObj;					// Reference to the main dib
	var menuBarHeight;
	var menuItems;					// Reference to objects of class menuModelItem
	var highlightedItems;			// Array of currently highlighted menu items.
	var menuBarState;				// Menu bar state - true or false - 1 = expand items on mouse over
	var activeSubItemsOnMouseOver;	// Activate sub items on mouse over	(instead of onclick)

	var submenuGroups;				// Array of div elements for the sub menus
	var submenuIframes;				// Array of sub menu iframes used to cover select boxes in old IE browsers.
	var createIframesForOldIeBrowsers;	// true if we want the script to create iframes in order to cover select boxes in older ie browsers.
	var targetId;					// Id of element where the menu will be inserted.
	var menuItemCssPrefix;			// Css prefix of menu items.
	var cssPrefix;					// Css prefix for the menu bar
	var menuItemLayoutCss;			// Css path for the menu items of this menu bar
	var objectIndex;			// Global index of this object - used to refer to the object of this class outside
	this.cssPrefix = 'DHTMLSuite_';
	this.menuItemLayoutCss = false;	// false = use default for the menuItem class.
	this.layoutCSS = 'menu-bar.css';
	this.menuBarBackgroundImage = 'menu_strip_bg.jpg';
	this.menuItem_objects = new Object();
	DHTMLSuite.variableStorage.menuBar_highlightedItems = new Array();

	this.menuBarState = false;

	this.menuBarObj = false;
	this.menuBarHeight = 15;
	this.submenuGroups = new Array();
	this.submenuIframes = new Array();
	this.targetId = false;
	this.activeSubItemsOnMouseOver = false;
	this.menuItemCssPrefix = false;
	this.createIframesForOldIeBrowsers = true;
	try{
		if(!standardObjectsCreated)DHTMLSuite.createStandardObjects();
	}catch(e){
		alert('You need to include the dhtmlSuite-common.js file');
	}

	this.objectIndex = DHTMLSuite.variableStorage.arrayDSObjects.length;;
	DHTMLSuite.variableStorage.arrayDSObjects[this.objectIndex] = this;
}

DHTMLSuite.menuBar.prototype = {
	// {{{ init()
	/**
	 *	Initilizes the script - This method should be called after your set methods.
	 *
	 *
	 * @public
	 */
	init : function(){

		DHTMLSuite.commonObj.loadCSS(this.layoutCSS);
		this.__createMainMenuDiv();	// Create general divs
		this.__createMenuItems();	// Create menu items
		this.__setBasicEvents();	// Set basic events.
		window.refToThismenuBar = this;
	}
	// }}}
	,
	// {{{ setTarget()
	/**
	 *	Specify where this menu bar will be inserted. the element with this id will be parent of the menu bar.
	 *
	 *  @param String idOfHTMLElement = Id of element where the menu will be inserted. 
	 *
	 * @public
	 */
	setTarget : function(idOfHTMLElement){
		this.targetId = idOfHTMLElement;

	}
	// }}}
	,
	// {{{ setLayoutCss()
	/**
	 *	Specify the css file for this menu bar
	 *
	 *  @param String nameOfNewCssFile = Name of new css file. 
	 *
	 * @public
	 */
	setLayoutCss : function(nameOfNewCssFile){
		this.layoutCSS = nameOfNewCssFile;

	}
	// }}}
	,
	// {{{ setMenuItemLayoutCss()
	/**
	 *	Specify the css file for the menu items
	 *
	 *  @param String nameOfNewCssFile = Name of new css file. 
	 *
	 * @public
	 */
	setMenuItemLayoutCss : function(nameOfNewCssFile){
		this.menuItemLayoutCss = nameOfNewCssFile;

	}
	// }}}
	,
	// {{{ setCreateIframesForOldIeBrowsers()
	/**
	 *	This method specifies if you want to the script to create iframes behind sub menu groups in order to cover eventual select boxes. This
	 *	is needed if you have users with older IE browsers(prior to version 7) and when there's a chance that a sub menu could appear on top
	 *	of a select box.
	 *
	 *  @param Boolean createIframesForOldIeBrowsers = true if you want the script to create iframes to cover select boxes in older ie browsers.
	 *
	 * @public
	 */
	setCreateIframesForOldIeBrowsers : function(createIframesForOldIeBrowsers){
		this.createIframesForOldIeBrowsers = createIframesForOldIeBrowsers;

	}
	// }}}
	,
	// {{{ addMenuItems()
	/**
	 *	Add menu items
	 *
	 *  @param DHTMLSuite.menuModel menuModel Object of class DHTMLSuite.menuModel which holds menu data 
	 *
	 * @public
	 */
	addMenuItems : function(menuItemObj){
		this.menuItemObj = menuItemObj;
		this.menuItems = menuItemObj.getItems();
	}
	// }}}
	,
	// {{{ setActiveSubItemsOnMouseOver()
	/**
	 *	 Specify if sub menus should be activated on mouse over(i.e. no matter what the menuState property is). 
	 *
	 *	@param Boolean activateSubOnMouseOver - Specify if sub menus should be activated on mouse over(i.e. no matter what the menuState property is).
	 *
	 * @public
	 */
	setActiveSubItemsOnMouseOver : function(activateSubOnMouseOver){
		this.activeSubItemsOnMouseOver = activateSubOnMouseOver;
	}
	// }}}
	,
	// {{{ setMenuItemState()
	/**
	 *	This method changes the state of the menu bar(expanded or collapsed). This method is called when someone clicks on the arrow at the right of menu items.
	 * 
	 *	@param Number menuItemId - ID of the menu item we want to switch state for
	 * 	@param String state - New state(example: "disabled")
	 *
	 * @public
	 */
	setMenuItemState : function(menuItemId,state){
		try{
			this.menuItem_objects[menuItemId].setState(state);
		}catch(e){
			alert('menu item with id ' + menuItemId + ' does not exists or you have called the setMenuItemState method before the menu has been initialized');
		}

	}
	// }}}
	,
	// {{{ setMenuItemCssPrefix()
	/**
	 *	Specify prefix of css classes used for the menu items. Default css prefix is "DHTMLSuite_". If you wish have some custom styling for some of your menus, 
	 *	create a separate css file and replace DHTMLSuite_ for the class names with your new prefix.  This is useful if you want to have two menus on the same page
	 *	with different stylings.
	 * 
	 *	@param String newCssPrefix - New css prefix for menu items.
	 *
	 * @public
	 */
	setMenuItemCssPrefix : function(newCssPrefix){
		this.menuItemCssPrefix = newCssPrefix;
	}
	// }}}
	,
	// {{{ setCssPrefix()
	/**
	 *	Specify prefix of css classes used for the menu bar. Default css prefix is "DHTMLSuite_" and that's the prefix of all css classes inside menu-bar.css(the default css file). 
	 *	If you want some custom menu bars, create and include your own css files, replace DHTMLSuite_ in the class names with your own prefix and set the new prefix by calling
	 *	this method. This is useful if you want to have two menus on the same page with different stylings.
	 * 
	 *	@param String newCssPrefix - New css prefix for the menu bar classes.
	 *
	 * @public
	 */
	setCssPrefix : function(newCssPrefix){
		this.cssPrefix = newCssPrefix;
	}
	// }}}
	,
	// {{{ deleteAllMenuItems()
	/**
	 *	Delete all menu items. This is useful if you want to replace the entire menu model. Remember to call init() after new model has been added.
	 *
	 * @private
	 */
	deleteAllMenuItems : function(){
		this.hideSubMenus(); // Hide all sub menus
		this.__deleteMenuItems(0,false);
		this.__clearAllMenuItems();
	}
	// }}}
	,
	// {{{ replaceSubMenus()
	/**
	 *	This method replaces existing sub menu items with a new subset (To replace all menu items, pass 0 as idOfParentMenuItem)
	 *
	 * 
	 *	@param Number idOfParentMenuItem - ID of parent element ( 0 if top node) - if set, all sub elements will be deleted and replaced with the new menu model.
	 *	@param menuModel newMenuModel - Reference to object of class menuModel
	 *
	 * @private
	 */
	replaceMenuItems : function(idOfParentMenuItem,newMenuModel){
		this.hideSubMenus();	// Hide all sub menus
		this.__deleteMenuItems(idOfParentMenuItem);	// Delete old menu items.
		this.menuItemObj.__appendMenuModel(newMenuModel,idOfParentMenuItem);	// Appending new menu items to the menu model.
		this.__clearAllMenuItems();
		this.__createMenuItems();
	}
	// }}}
	,
	// {{{ deleteMenuItems()
	/**
	 *	This method deletes menu items from the menu dynamically
	 * 
	 *	@param Number idOfParentMenuItem - Parent id - parent id of the elements to delete.
	 *	@param Boolean deleteParentElement - Should parent element also be deleted, or only sub elements?
	 *
	 * @public
	 */
	deleteMenuItems : function(idOfParentMenuItem,deleteParentElement){
		//this.hideSubMenus();	// Hide all sub menus
		this.__deleteMenuItems(idOfParentMenuItem,deleteParentElement);
		this.__clearAllMenuItems();
		this.__createMenuItems();
	}
	// }}}
	,
	// {{{ appendMenuItems()
	/**
	 *	This method appends menu items to the menu dynamically
	 * 
	 *	@param Integer idOfParentMenuItem - Parent id - where to append the new items.
	 *	@param menuModel newMenuModel - Object of type menuModel. This menuModel will be appended as sub elements of defined idOfParentMenuItem
	 *
	 * @public
	 */
	appendMenuItems : function(idOfParentMenuItem,newMenuModel){
		this.hideSubMenus();	// Hide all sub menus
		this.menuItemObj.__appendMenuModel(newMenuModel,idOfParentMenuItem);	// Appending new menu items to the menu model.
		this.__clearAllMenuItems();
		this.__createMenuItems();
	}
	// }}}
	,
	// {{{ hideMenuItem()
	/**
	 *	This method doesn't delete menu items. it hides them only.
	 * 
	 *	@param Number menuItemId - Id of the item you want to hide.
	 *
	 * @public
	 */
	hideMenuItem : function(menuItemId){
		this.menuItem_objects[menuItemId].hide();

	}
	// }}}
	,
	// {{{ showMenuItem()
	/**
	 *	This method shows a menu item. If the item isn't hidden, nothing is done.
	 * 
	 *	@param Number menuItemId - Id of the item you want to show
	 *
	 * @public
	 */
	showMenuItem : function(menuItemId){
		this.menuItem_objects[menuItemId].show();
	}
	// }}}
	,
	// {{{ setText()
	/**
	 *	Replace the text for a menu item
	 * 
	 *	@param Integer menuItemId - Id of menu item.
	 *	@param String newText - New text for the menu item.
	 *
	 * @public
	 */
	setText : function(menuItemId,newText){
		this.menuItem_objects[menuItemId].setText(newText);
	}
	// }}}
	,
	// {{{ setIcon()
	/**
	 *	Replace menu icon for a menu item. 
	 * 
	 *	@param Integer menuItemId - Id of menu item.
	 *	@param String newPath - Path to new menu icon. Pass blank or false if you want to clear the menu item.
	 *
	 * @public
	 */
	setIcon : function(menuItemId,newPath){
		this.menuItem_objects[menuItemId].setIcon(newPath);
	}
	// }}}
	,
	// {{{ __clearAllMenuItems()
	/**
	 *	Delete HTML elements for all menu items.
	 *
	 * @private
	 */
	__clearAllMenuItems : function(){
		for(var prop=0;prop<this.menuItemObj.menuItemsOrder.length;prop++){
			var id = this.menuItemObj.menuItemsOrder[prop];
			if(!id)continue;
			if(this.submenuGroups[id]){
				var div = document.getElementById(this.submenuGroups[id]);
				DHTMLSuite.discardElement(div);
				this.submenuGroups[id] = null;
			}
			if(this.submenuIframes[id]){
				var ref = document.getElementById(this.submenuIframes[id]);
				DHTMLSuite.discardElement(ref);
				this.submenuIframes[id] = null;
			}
		}
		this.submenuGroups = new Array();
		this.submenuIframes = new Array();
		this.menuBarObj.innerHTML = '';
	}
	// }}}
	,
	// {{{ __deleteMenuItems()
	/**
	 *	This method deletes menu items from the menu, i.e. menu model and the div elements for these items.
	 * 
	 *	@param Integer idOfParentMenuItem - Parent id - where to start the delete process.
	 *	@param Boolean includeParent - Delete parent menu item in addition to the sub menu items.
	 *
	 * @private
	 */
	__deleteMenuItems : function(idOfParentMenuItem,includeParent){
		if(includeParent)this.menuItemObj.__deleteANode(idOfParentMenuItem);
		if(!this.submenuGroups[idOfParentMenuItem])return;	// No sub items exists.
		this.menuItem_objects[idOfParentMenuItem].__setHasSub(false);	// Delete existing sub menu divs.
		this.menuItemObj.__deleteChildNodes(idOfParentMenuItem);	// Delete existing child nodes from menu model
		var groupBox = document.getElementById(this.submenuGroups[idOfParentMenuItem]);
		DHTMLSuite.discardElement(groupBox);// Delete sub menu group box. 
		if(this.submenuIframes[idOfParentMenuItem]){
			DHTMLSuite.discardElement(this.submenuIframes[idOfParentMenuItem]);
		}
		this.submenuGroups.splice(idOfParentMenuItem,1);
		this.submenuIframes.splice(idOfParentMenuItem,1);
	}
	// }}}
	,
	// {{{ __changeMenuBarState()
	/**
	 *	This method changes the state of the menu bar(expanded or collapsed). This method is called when someone clicks on the arrow at the right of menu items.
	 * 
	 *
	 * @private
	 */
	__changeMenuBarState : function(){
		var objectIndex = this.getAttribute('objectRef');
		var obj = DHTMLSuite.variableStorage.arrayDSObjects[objectIndex];
		var parentId = this.id.replace(/[^0-9]/gi,'');

		var state = obj.menuItem_objects[parentId].getState();

		if(state=='disabled')return;
		obj.menuBarState = !obj.menuBarState;
		if(!obj.menuBarState)obj.hideSubMenus();else{
			obj.hideSubMenus();
			setTimeout('DHTMLSuite.variableStorage.arrayDSObjects[' + objectIndex + '].__expandGroup(' + parentId+ ')',10);
		}
	}
	// }}}
	,
	// {{{ __createDivs()
	/**
	 *	Create the main HTML elements for this menu dynamically
	 * 
	 *
	 * @private
	 */
	__createMainMenuDiv : function(){
		window.refTomenuBar = this;	// Reference to menu strip object

		this.menuBarObj = document.createElement('DIV');
		this.menuBarObj.className = this.cssPrefix + 'menuBar_' + this.menuItemObj.submenuType[1];

		if(!document.getElementById(this.targetId)){
			alert('No target defined for the menu object');
			return;
		}
		// Appending menu bar object as a sub of defined target element.
		var target = document.getElementById(this.targetId);
		target.appendChild(this.menuBarObj);
	}
	// }}}
	,
	// {{{ hideSubMenus()
	/**
	 *	Deactivate all sub menus ( collapse and set state back to regular )
	 *	In case you have a menu inside a scrollable container, call this method in an onscroll event for that element
	 *	example document.getElementById('textContent').onscroll = menuBar.__hideSubMenus;
	 * 
	 *	@param Event e - this variable is present if this method is called from an event. You will never use this parameter
	 *
	 * @public
	 */
	hideSubMenus : function(e){
		if(this && this.tagName){	/* Method called from event */
			if(document.all)e = event;
			var srcEl = DHTMLSuite.commonObj.getSrcElement(e);
			if(srcEl.tagName.toLowerCase()=='img')srcEl = srcEl.parentNode;
			if(srcEl.className && srcEl.className.indexOf('arrow')>=0){
				return;
			}

		}
		for(var no=0;no<DHTMLSuite.variableStorage.menuBar_highlightedItems.length;no++){
			if(DHTMLSuite.variableStorage.menuBar_highlightedItems[no].getState()!='disabled')DHTMLSuite.variableStorage.menuBar_highlightedItems[no].setState('regular');	// Set state back to regular
			DHTMLSuite.variableStorage.menuBar_highlightedItems[no].__hideGroup();	// Hide eventual sub menus
		}
		DHTMLSuite.variableStorage.menuBar_highlightedItems = new Array();
	}
	,
	// {{{ __hideSubMenusAfterSmallDelay()
	/**
	 *	Hide sub menu items after a small delay - mouse down event for the HTML elemnet
	 *
	 *
	 * @private
	 */
	__hideSubMenusAfterSmallDelay : function(){
		var ind = this.objectIndex;
		setTimeout('DHTMLSuite.variableStorage.arrayDSObjects[' + ind + '].hideSubMenus()',15);
	}
	// }}}
	,
	// {{{ __expandGroup()
	/**
	 *	Expand a group of sub items.
	 *
	 * 	@param integer idOfParentMenuItem - Id of parent element
	 *
	 * @private
	 */
	__expandGroup : function(idOfParentMenuItem){
		var groupRef = document.getElementById(this.submenuGroups[idOfParentMenuItem]);
		var subDiv = groupRef.getElementsByTagName('DIV')[0];
//alert(subDiv.id)
		var numericId = subDiv.id.replace(/[^0-9]/g,'');

		groupRef.style.visibility='visible';	// Show menu group.
		if(this.submenuIframes[idOfParentMenuItem])document.getElementById(this.submenuIframes[idOfParentMenuItem]).style.visibility = 'visible';	// Show iframe if it exists.
		DHTMLSuite.variableStorage.menuBar_highlightedItems[DHTMLSuite.variableStorage.menuBar_highlightedItems.length] = this.menuItem_objects[numericId];
		this.__positionSubMenu(idOfParentMenuItem);

		if(DHTMLSuite.clientInfoObj.isOpera){	/* Opera fix in order to get correct height of sub menu group */
			var subDiv = groupRef.getElementsByTagName('DIV')[0];	/* Find first menu item */
			subDiv.className = subDiv.className.replace('_over','_over');	/* By "touching" the class of the menu item, we are able to fix a layout problem in Opera */
		}
	}

	,
	// {{{ __activateMenuElements()
	/**
	 *	Traverse up the menu items and highlight them.
	 * 
	 *	@param HTMLElement parentMenuItemObject - Reference to the DIV tag(menu element) triggering the event. This would be the parent menu item of the sub menu to expand
	 *	@param Object menuBarObjectRef - Reference to this menuBar object
	 *	@param Boolean firstIteration - First iteration of this method, i.e. not recursive ? 
	 *
	 * @private
	 */
	__activateMenuElements : function(e,firstIteration,parentMenuItemObject){
		if(!parentMenuItemObject){
			if(document.all)e = event;
			parentMenuItemObject = DHTMLSuite.commonObj.getSrcElement(e);
			if(!parentMenuItemObject.getAttribute('DHTMLSuite_menuItem'))parentMenuItemObject = parentMenuItemObject.parentNode;
			if(!parentMenuItemObject.getAttribute('DHTMLSuite_menuItem'))parentMenuItemObject = parentMenuItemObject.parentNode;

		}
		var numericId = parentMenuItemObject.id.replace(/[^0-9]/g,'');	// Get a numeric reference to current menu item.
		var state = this.menuItem_objects[numericId].getState();	// Get state of this menu item.
		if(state=='disabled')return;	// This menu item is disabled - return from function without doing anything.
		this.menuItem_objects[numericId].setState('over');	// Switch state of menu item.

		if(!this.menuBarState && !this.activeSubItemsOnMouseOver)return;	// Menu is not activated and it shouldn't be activated on mouse over.

		if(firstIteration && DHTMLSuite.variableStorage.menuBar_highlightedItems.length>0){
			this.hideSubMenus();	// First iteration of this function=> Hide other sub menus. 
		}

		// What should be the state of this menu item -> If it's the one the mouse is over, state should be "over". If it's a parent element, state should be "active".
		var newState = 'over';
		if(!firstIteration)newState = 'active';	// State should be set to 'over' for the menu item the mouse is currently over.

		this.menuItem_objects[numericId].setState(newState);	// Switch state of menu item.
		if(this.submenuGroups[numericId]){	// Sub menu group exists. call the __expandGroup method. 
			this.__expandGroup(numericId);	// Expand sub menu group
		}
		DHTMLSuite.variableStorage.menuBar_highlightedItems[DHTMLSuite.variableStorage.menuBar_highlightedItems.length] = this.menuItem_objects[numericId];	// Save this menu item in the array of highlighted elements.
		if(this.menuItems[numericId].parentId){	// A parent element exists. Call this method over again with parent element as input argument.
			this.__activateMenuElements(false,false,document.getElementById(this.menuItem_objects[this.menuItems[numericId].parentId].divElement));
		}
	}
	// }}}
	,
	// {{{ __createMenuItems()
	/**
	 *	Creates the HTML elements for the menu items.
	 * 
	 *
	 * @private
	 */
	__createMenuItems : function(){

		var index = this.objectIndex;
		// Find first child of the body element. trying to insert the element before first child instead of appending it to the <body> tag, ref: problems in ie
		var firstChild = false;
		var firstChilds = document.getElementsByTagName('DIV');
		if(firstChilds.length>0)firstChild = firstChilds[0]

		for(var no=0;no<this.menuItemObj.menuItemsOrder.length;no++){	// Looping through menu items
			var indexThis = this.menuItemObj.menuItemsOrder[no];
			if(!this.menuItems[indexThis].id)continue;
			try{
				this.menuItem_objects[this.menuItems[indexThis].id] = new DHTMLSuite.menuItem(); 
			}catch(e){
				alert('Error: You need to include dhtmlSuite-menuItem.js in your html file');
			}
			if(this.menuItemCssPrefix)this.menuItem_objects[this.menuItems[indexThis].id].setCssPrefix(this.menuItemCssPrefix);	// Custom css prefix set
			if(this.menuItemLayoutCss)this.menuItem_objects[this.menuItems[indexThis].id].setLayoutCss(this.menuItemLayoutCss);	// Custom css file name

			var ref = this.menuItem_objects[this.menuItems[indexThis].id].createItem(this.menuItems[indexThis]); // Create div for this menu item.
			ref.setAttribute('DHTMLSuite_menuItem',1);
			// Actiave sub elements when someone moves the mouse over the menu item - exception: not on separators.
			if(!this.menuItems[indexThis].separator){
				ref.onmouseover = function(e){ DHTMLSuite.variableStorage.arrayDSObjects[index].__activateMenuElements(e,true); }
			}

			if(!this.menuItems[indexThis].jsFunction && !this.menuItems[indexThis].url){
				ref.setAttribute('objectRef',index);	/* saving the index of this object in the DHTMLSuite.variableStorage array as a property of the tag - We need to do this in order to avoid circular references and thus memory leakage in IE */
				ref.onclick = this.__changeMenuBarState;
			}
			DHTMLSuite.commonObj.__addEventEl(ref);
			if(this.menuItem_objects[this.menuItems[indexThis].id].expandElement && 1==2){	/* Small arrow at the right of the menu item exists - expand subs */
				try{
					var expandRef = document.getElementById(this.menuItem_objects[this.menuItems[indexThis].id].expandElement);	/* Creating reference to expand div/arrow div */
					var parentId = DHTMLSuite.variableStorage.arrayDSObjects[index].menuItems[indexThis].parentId + '';	// Get parent id.
					var tmpId = expandRef.id.replace(/[^0-9]/gi,'');
					expandRef.setAttribute('objectRef',index/1);	/* saving the index of this object in the DHTMLSuite.variableStorage array as a property of the tag - We need to do this in order to avoid circular references and thus memory leakage in IE */
					expandRef.objectRef = index/1;
				}catch(e){

				}
			}
			var target = this.menuBarObj;	// Temporary variable - target of newly created menu item. target can be the main menu object or a sub menu group(see below where target is updated).

			if(this.menuItems[indexThis].depth==1 && this.menuItemObj.submenuType[this.menuItems[indexThis].depth]!='top' && this.menuItemObj.mainMenuGroupWidth){	/* Main menu item group width set */
				var tmpWidth = this.menuItemObj.mainMenuGroupWidth + '';
				if(tmpWidth.indexOf('%')==-1)tmpWidth = tmpWidth + 'px';
				target.style.width = tmpWidth;
			}

			if(this.menuItems[indexThis].depth=='1'){	/* Top level item */
				if(this.menuItemObj.submenuType[this.menuItems[indexThis].depth]=='top'){	/* Type = "top" - menu items side by side */
					ref.style.styleFloat = 'left';
					ref.style.cssText = 'float:left';
				}
			}else{
				if(!this.menuItems[indexThis].depth){
					alert('Error in menu model(depth not defined for a menu item). Remember to call the init() method for the menuModel object.');
					return;
				}
				if(!this.submenuGroups[this.menuItems[indexThis].parentId]){	// Sub menu div doesn't exist - > Create it.

					this.submenuGroups[this.menuItems[indexThis].parentId] = 'DHTMLSuite_menuBarSubGroup' + this.menuItems[indexThis].parentId;
					var div = document.createElement('DIV');
					div.style.zIndex = 30000;
					div.style.position = 'absolute';
					div.id = this.submenuGroups[this.menuItems[indexThis].parentId];
					div.style.visibility = 'hidden';	// Initially hidden.
					div.className = this.cssPrefix + 'menuBar_' + this.menuItemObj.submenuType[this.menuItems[indexThis].depth];

					if(firstChild){
						firstChild.parentNode.insertBefore(div,firstChild);
					}else{
						document.body.appendChild(div);
					}

					if(DHTMLSuite.clientInfoObj.isMSIE && this.createIframesForOldIeBrowsers){	// Create iframe object in order to conver select boxes in older IE browsers(windows).
						this.submenuIframes[this.menuItems[indexThis].parentId] = 'DHTMLSuite_menuBarIframe_' + this.menuItems[indexThis].parentId;
						
						//var iframe = document.createElement('<IFRAME src="about:blank" frameborder=0>');
						var iframe = document.createElement('iframe');
						//iframe.setAttribute("src";"about:blank")
						iframe.setAttribute("frameborder","0")
						iframe.id = this.submenuIframes[this.menuItems[indexThis].parentId];
						iframe.style.position = 'absolute';
						iframe.style.zIndex = 9000;
						iframe.style.visibility = 'hidden';
						if(firstChild){
							firstChild.parentNode.insertBefore(iframe,firstChild);
						}else{
							document.body.appendChild(iframe);
						}
					}
				}
				target = document.getElementById(this.submenuGroups[this.menuItems[indexThis].parentId]);	// Change target of newly created menu item. It should be appended to the sub menu div("A group box").
			}
			target.appendChild(ref); // Append menu item to the document.

			if(this.menuItems[indexThis].visible == false)this.hideMenuItem(this.menuItems[indexThis].id);	// Menu item hidden, call the hideMenuItem method.
			if(this.menuItems[indexThis].state != 'regular')this.menuItem_objects[this.menuItems[indexThis].id].setState(this.menuItems[indexThis].state);	// Menu item hidden, call the hideMenuItem method.

		}

		this.__setSizeOfAllSubMenus();	// Set size of all sub menu groups
		this.__positionAllSubMenus();	// Position all sub menu groups.
		if(DHTMLSuite.clientInfoObj.isOpera)this.__fixMenuLayoutForOperaBrowser();	// Call a function which fixes some layout issues in Opera.
	}
	// }}}
	,
	// {{{ __fixMenuLayoutForOperaBrowser()
	/**
	 *	A method used to fix the menu layout in Opera. 
	 *
	 *
	 * @private
	 */
	__fixMenuLayoutForOperaBrowser : function(){
		for(var no=0;no<this.menuItemObj.menuItemsOrder.length;no++){
			var id = this.menuItemObj.menuItemsOrder[no];
			if(!id)continue;
			document.getElementById(this.menuItem_objects[id].divElement).className = document.getElementById(this.menuItem_objects[id].divElement).className.replace('_regular','_regular');	// Nothing is done but by "touching" the class of the menu items in Opera, we make them appear correctly
		}
	}

	// }}}
	,
	// {{{ __setSizeOfAllSubMenus()
	/**
	 *	*	Walk through all sub menu groups and call the positioning method for each one of them.
	 *
	 *
	 * @private
	 */
	__setSizeOfAllSubMenus : function(){
		for(var no=0;no<this.menuItemObj.menuItemsOrder.length;no++){
			var prop = this.menuItemObj.menuItemsOrder[no];
			if(!prop)continue;
			this.__setSizeOfSubMenus(prop);
		}
	}
	// }}}
	,
	// {{{ __positionAllSubMenus()
	/**
	 *	Walk through all sub menu groups and call the positioning method for each one of them.
	 *
	 *
	 * @private
	 */
	__positionAllSubMenus : function(){
		for(var no=0;no<this.menuItemObj.menuItemsOrder.length;no++){
			var prop = this.menuItemObj.menuItemsOrder[no];
			if(!prop)continue;
			if(this.submenuGroups[prop])this.__positionSubMenu(prop);
		}
	}
	// }}}
	,
	// {{{ __positionSubMenu(parentId)
	/**
	 *	Position a sub menu group
	 *
	 *	@param parentId  
	 *
	 * @private
	 */
	__positionSubMenu : function(parentId){
		try{
		
			var shortRef = document.getElementById(this.submenuGroups[parentId]);

			var depth = this.menuItems[parentId].depth;
			var dir = this.menuItemObj.submenuType[depth];

			var ref = document.getElementById(this.menuItem_objects[parentId].divElement);
			
			if(dir=='top'){
				shortRef.style.left = DHTMLSuite.commonObj.getLeftPos(ref) + 'px';
				shortRef.style.top = (DHTMLSuite.commonObj.getTopPos(ref) + ref.offsetHeight) + 'px';
				//alert(ref.offsetHeight)
			}else{
				shortRef.style.left = (DHTMLSuite.commonObj.getLeftPos(ref) + ref.offsetWidth) + 'px';
				shortRef.style.top = (DHTMLSuite.commonObj.getTopPos(ref)) + 'px';
			}

			if(DHTMLSuite.clientInfoObj.isMSIE){
				var iframeRef = document.getElementById(this.submenuIframes[parentId]);
				iframeRef.style.left = shortRef.style.left;
				iframeRef.style.top = shortRef.style.top;
				iframeRef.style.width = shortRef.clientWidth + 'px';
				iframeRef.style.height = shortRef.clientHeight + 'px';
			}
		}catch(e){

		}
	}
	// }}}
	,
	// {{{ __setSizeOfSubMenus(parentId)
	/**
	 *	Set size of a sub menu group
	 *
	 *	@param parentId  
	 *
	 * @private
	 */
	__setSizeOfSubMenus : function(parentId){
	
		try{
			var shortRef = document.getElementById(this.submenuGroups[parentId]);
			var subWidth = Math.max(shortRef.offsetWidth,document.getElementById(this.menuItem_objects[parentId].divElement).offsetWidth);
			if(this.menuItems[parentId].submenuWidth)subWidth = this.menuItems[parentId].submenuWidth;
			if(subWidth>400)subWidth = 150;	// Hack for IE 6 -> force a small width when width is too large.
			subWidth = subWidth + '';
			if(subWidth.indexOf('%')==-1)subWidth = subWidth + 'px';
			shortRef.style.width = subWidth;
			if(DHTMLSuite.clientInfoObj.isMSIE){
				var ref = document.getElementById(this.submenuIframes[parentId]);
				ref.style.width = shortRef.style.width;
				ref.style.height = shortRef.style.height;
				
			}
		}catch(e){

		}

	}
	// }}}
	,
	// {{{ __repositionMenu()
	/**
	 *	Position menu items.
	 * 
	 *
	 * @private
	 */
	__repositionMenu : function(inputObj){
		inputObj.menuBarObj.style.top = document.documentElement.scrollTop + 'px';

	}
	// }}}
	,
	// {{{ __menuItemRollOver()
	/**
	 *	Position menu items.
	 * 
	 *
	 * @private
	 */
	__menuItemRollOver : function(menuItemHTMLElementRef){
		var numericId = menuItemHTMLElementRef.id.replace(/[^0-9]/g,'');
		menuItemHTMLElementRef.className = 'DHTMLSuite_menuBar_menuItem_over_' + this.menuItems[numericId]['depth'];
	}
	// }}}
	,
	// {{{ __menuItemRollOut()
	/**
	 *	Position menu items.
	 * 
	 *
	 * @private
	 */
	__menuItemRollOut : function(menuItemHTMLElementRef){
		var numericId = menuItemHTMLElementRef.id.replace(/[^0-9]/g,'');
		menuItemHTMLElementRef.className = 'DHTMLSuite_menuBar_menuItem_' + this.menuItems[numericId]['depth'];
	}
	// }}}
	,
	// {{{ __menuNavigate()
	/**
	 *	Navigate by click on a menu item
	 * 
	 *
	 * @private
	 */
	__menuNavigate : function(menuItemHTMLElementRef){
		var numericIndex = menuItemHTMLElementRef.id.replace(/[^0-9]/g,'');
		var url = this.menuItems[numericIndex]['url'];
		if(!url)return;
	}
	// }}}
	,
	// {{{ __setBasicEvents()
	/**
	 *	Set basic events for the menu widget.
	 * 
	 *
	 * @private
	 */
	__setBasicEvents : function(){
		var ind = this.objectIndex;

		DHTMLSuite.commonObj.addEvent(document.documentElement,"click",this.hideSubMenus);
		DHTMLSuite.commonObj.addEvent(document.documentElement,"mouseup",this.hideSubMenus);

	}
}

/*[FILE_START:dhtmlSuite-paneSplitterModel.js] */
/************************************************************************************************************
*	Data model for a pane splitter
*
*	Created:						November, 28th, 2006
*	@class Purpose of class:		Data source for the pane splitter
*
*	Css files used by this script:
*
*	@param Array arrayOfProperties - pane splitter properties - associative array. possible keys:
*			collapseButtonsInTitleBars - true if you want collapse/expand buttons in the title bar instead of at the middle of the resize handle
*
*	Demos of this class:
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class:	Store metadata about a pane splitter widget
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/
DHTMLSuite.paneSplitterModel = function(arrayOfProperties){

	var panes;		// Array of paneSplitterPaneModel objects
	var collapseButtonsInTitleBars;		// Place collapse button inside title bars ?
	this.collapseButtonsInTitleBars = false;

	this.panes = new Array();
	try{
		if(!standardObjectsCreated)DHTMLSuite.createStandardObjects();
	}catch(e){
		alert('You need to include the dhtmlSuite-common.js file');
	}
	this.__setInitProps(arrayOfProperties);
}

DHTMLSuite.paneSplitterModel.prototype = 
{
	// {{{ addPane()
	/**
	*	Add a pane to the paneSplitterModel
	*
	*	@param paneModelRef paneModelRefect of class DHTMLSuite.paneSplitterPaneModel
	*
	*	@public
	*/
	addPane : function(paneModelRef){
		this.panes[this.panes.length] = paneModelRef;
	}
	// }}}
	,
	// {{{ getItems()
	/**
	*	Add a pane to the paneSplitterModel
	*
	*	@return Array of DHTMLSuite.paneSplitterPaneModel objects
	*
	*	@public
	*/
	getItems : function(){
		return this.panes;
	}
	// }}}
	,
	// {{{ __setInitProps()
	/**
	*	Save initial properties
	*
	*	@param Array associative array of properties
	*
	*	@private
	*/
	__setInitProps : function(propArray){
		if(!propArray)return;
		if(propArray.collapseButtonsInTitleBars || propArray.collapseButtonsInTitleBars===false)this.collapseButtonsInTitleBars = propArray.collapseButtonsInTitleBars;
	}
}

/**
* @constructor
* @class Purpose of class:	Store metadata about a pane
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

/************************************************************************************************************
*	Data model for a pane 
*
*	Created:						November, 28th, 2006
*	@class Purpose of class:		Data source for the pane splitter
*
*	Css files used by this script:
*
*	Demos of this class:
*
* 	Update log:
*
************************************************************************************************************/
DHTMLSuite.paneSplitterPaneModel = function(inputArray){
	var id;					// Unique id of pane, in case you want to perform operations on this particular pane.
	var position;			// Position, possible values: "West","East","North","South" and "Center"
	var size;				// Current size of pane(for west and east, the size is equal to width, for south and north, size is equal to height)
	var minSize;			// Minimum size(height or width) of the pane
	var maxSize;			// Maximum size(height or width) of the pane.
	var resizable;			// Boolean - true or false, is the pane resizable
	var visible;			// Boolean - true or false, is the pane visible?
	var scrollbars;			// Boolean - true or false, visibility of scrollbars when content size is bigger than visible area(default = true)
	var contents;			// Array of paneSplitterContentModel objects
	var collapsable;		// Boolean - true or false, is this pane collapsable
	var state;				// State of a pane, possible values, "expanded","collapsed"; (default = expanded)
	var callbackOnCollapse;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnHide;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnShow;		// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnExpand;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnSlideOut;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnSlideIn;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnCloseContent;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnBeforeCloseContent;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnTabSwitch;	// Call back function - if ony function name is give, a reference to this model will be passed to the function with that name
	var callbackOnResize;	// Call back function - called whenever a tab has been resized manually by dragging the "handle".

	this.contents = new Array();
	this.scrollbars = true;
	this.resizable = true;
	this.collapsable = true;
	this.state = 'expanded';
	this.visible = true;
	if(inputArray)this.setData(inputArray);

}

DHTMLSuite.paneSplitterPaneModel.prototype = 
{
	// {{{ setData()
	/**
	*	One method which makes it possible to set all properties
	*
	*	@param Array inputArray associative array of properties
	*			properties: id,position,title,tabTitle,closable,resizable,size,minSize,maxSize,htmlElementId,contentUrl,collapsable,state(expanded or collapsed),visible
	*						callbackOnCollapse,callbackOnHide,callbackOnShow,callbackOnExpand,callbackOnSlideIn,
	*						callbackOnSlideOut,callbackOnCloseContent,callbackOnBeforeCloseContent,callbackOnTabSwitch,callbackOnResize
	*
	*	@public
	*/
	setData : function(inputArray){
		if(inputArray["collapsable"])inputArray["collapsable"]=eval(inputArray["collapsable"]);
		if(inputArray["id"])this.id = inputArray["id"];
		if(inputArray["position"])this.position = inputArray["position"];
		if(inputArray["resizable"]===false || inputArray["resizable"]===true)this.resizable = inputArray["resizable"];
		if(inputArray["size"])this.size = inputArray["size"];
		if(inputArray["minSize"])this.minSize = inputArray["minSize"];
		if(inputArray["maxSize"])this.maxSize = inputArray["maxSize"];
		if(inputArray["visible"]===false || inputArray["visible"]===true)this.visible = inputArray["visible"];
		if(inputArray["collapsable"]===false || inputArray["collapsable"]===true)this.collapsable = inputArray["collapsable"];
		if(inputArray["scrollbars"]===false || inputArray["scrollbars"]===true)this.scrollbars = inputArray["scrollbars"];
		if(inputArray["state"])this.state = inputArray["state"];
		if(inputArray["callbackOnCollapse"])this.callbackOnCollapse = inputArray["callbackOnCollapse"];
		if(inputArray["callbackOnHide"])this.callbackOnHide = inputArray["callbackOnHide"];
		if(inputArray["callbackOnShow"])this.callbackOnShow = inputArray["callbackOnShow"];
		if(inputArray["callbackOnExpand"])this.callbackOnExpand = inputArray["callbackOnExpand"];
		if(inputArray["callbackOnSlideIn"])this.callbackOnSlideIn = inputArray["callbackOnSlideIn"];
		if(inputArray["callbackOnSlideOut"])this.callbackOnSlideOut = inputArray["callbackOnSlideOut"];
		if(inputArray["callbackOnCloseContent"])this.callbackOnCloseContent = inputArray["callbackOnCloseContent"];
		if(inputArray["callbackOnBeforeCloseContent"])this.callbackOnBeforeCloseContent = inputArray["callbackOnBeforeCloseContent"];
		if(inputArray["callbackOnTabSwitch"])this.callbackOnTabSwitch = inputArray["callbackOnTabSwitch"];
		if(inputArray["callbackOnResize"])this.callbackOnResize = inputArray["callbackOnResize"];

	}
	// }}}
	,
	// {{{ setSize()
	/**
	*	Set size of pane
	*
	*	@param Integer newSizeInPixels = Size of new pane ( for "west" and "east", it would be width, for "north" and "south", it's height.
	*
	*	@public
	*/
	setSize : function(newSizeInPixels){
		this.size = newSizeInPixels;
	}
	// }}}
	,
	// {{{ addContent()
	/**
	*	Add content to a pane.
	*	This method should only be called before the paneSplitter has been initialized, i.e. before it has been displayed on the screen
	*	After it has been displayed, use the addContent method of the DHTMLSuite.paneSplitter class to add content to panes.
	*
	*	@param Object paneSplitterContentObj = An object of class DHTMLSuite.paneSplitterContentModel
	*	@return Boolean Success = true if content were added, false otherwise, i.e. if conten allready exists
	*	@private
	*/
	addContent : function(paneSplitterContentObj){
		//alert(paneSplitterContentObj)
		// Check if content with this id allready exists. if it does, escape from the function.
		for(var no=0;no<this.contents.length;no++){
			if(this.contents[no].id==paneSplitterContentObj.id)return false;
		}
		this.contents[this.contents.length] = paneSplitterContentObj;	// Add content to the array of content objects.
		return true;
	}
	// }}}
	,
	// {{{ getContents()
	/**
	*	Return an array of content objects
	*
	*	@return Array of DHTMLSuite.paneSplitterContentModel objects
	*
	*	@public
	*/
	getContents : function(){
		return this.contents;
	}
	// }}}
	,
	// {{{ getCountContent()
	/**
	*	Return number of content objects inside this paneModel
	*
	*	@return Integer Number of DHTMLSuite.paneSplitterContentModel objects
	*
	*	@public
	*/
	getCountContent : function(){
		return this.contents.length;
	}
	// }}}
	,
	// {{{ getPosition()
	/**
	*	Return position of this pane
	*
	*	@return String Position of pane ( lowercase, "north","west","east","south" or "center" )
	*
	*	@public
	*/
	getPosition : function(){
		return this.position.toLowerCase();
	}

	,
	// {{{ __setState()
	/**
	*	Update the state attribute
	*
	*	@param String state = state of pane ( "expanded" or "collapsed" )
	*
	*	@private
	*/
	__setState : function(state){
		this.state = state;
	}
	// }}
	,
	// {{{ __getState()
	/**
	*	Update the state attribute
	*
	*	@return String state - state of pane
	*	@private
	*/
	__getState : function(state){
		return this.state;
	}
	,
	// {{{ __deleteContent()
	/**
	*	Delete content from a pane.
	*
	*	@param Integer indexOfContentObjectToDelete - Content index
	*	@return Integer - Index of new active pane.
	*	@private
	*/
	__deleteContent : function(indexOfContentObjectToDelete){
		try{
			this.contents.splice(indexOfContentObjectToDelete,1);
		}catch(e){
		}

		var retVal = indexOfContentObjectToDelete;
		if(this.contents.length>(indexOfContentObjectToDelete-1))retVal--;
		if(retVal<0 && this.contents.length==0)return false;
		if(retVal<0)retVal=0;
		return retVal;
	}
	// }}}
	,
	// {{{ __getIndexById()
	/**
	*	Return index of content with a specific content id
	*
	*	@param String id - id of content
	*	@return Integer index - Index of content
	*	@private
	*/
	__getIndexById : function(id){
		for(var no=0;no<this.contents.length;no++){
			if(this.contents[no].id==id)return no;
		}
		return false;

	}
	// }}}
	,
	// {{{ __setVisible()
	/**
	*	Set pane visibility
	*
	*	@param Boolean visible - true = visible, false = hidden
	*
	*	@private
	*/
	__setVisible : function(visible){
		this.visible = visible;
	}
}

/**
* @constructor
* @class Purpose of class:	Store metadata about the content of a pane
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

/************************************************************************************************************
*	Data source for the content of a pane splitter pane
*
*	Created:						November, 28th, 2006
*	@class Purpose of class:		Data source for the pane splitter pane
*
*	Css files used by this script:
*
*	Demos of this class:
*
* 	Update log:
*
************************************************************************************************************/

DHTMLSuite.paneSplitterContentModel = function(inputArray){
	var id;					// Unique id of pane, in case you want to perform operations on this particular pane.
	var htmlElementId;		// Id of element on the page - if present, the content of this pane will be set to the content of this element
	var title;				// Title of pane
	var tabTitle;			// If more than one pane is present at this position, what's the tab title of this one.
	var closable;			// Boolean - true or false, should it be possible to close this pane
	var contentUrl;			// Url to content - used in case you want the script to fetch content from the server. the path is relative to your html page.
	this.closable = true;	// Default value
	var refreshAfterSeconds;
	var displayRefreshButton;

	this.displayRefreshButton = false;
	this.refreshAfterSeconds = 0;

	if(inputArray)this.setData(inputArray);	// Input array present, call the setData method.
}

DHTMLSuite.paneSplitterContentModel.prototype = 
{
	// {{{ setData()
	/**
	*	One method which makes it possible to set all properties
	*
	*	@param Array associative array of properties
	*			properties: id,position,title,tabTitle,closable,htmlElementId,contentUrl,refreshAfterSeconds
	*
	*	@public
	*/
	setData : function(inputArray){
		if(inputArray["id"])this.id = inputArray["id"]; else this.id = inputArray['htmlElementId'];
		if(inputArray["closable"]===false || inputArray["closable"]===true)this.closable = inputArray["closable"];
		if(inputArray["displayRefreshButton"]===false || inputArray["displayRefreshButton"])this.displayRefreshButton = inputArray["displayRefreshButton"];
		if(inputArray["title"])this.title = inputArray["title"];
		if(inputArray["tabTitle"])this.tabTitle = inputArray["tabTitle"];
		if(inputArray["contentUrl"])this.contentUrl = inputArray["contentUrl"];
		if(inputArray["htmlElementId"])this.htmlElementId = inputArray["htmlElementId"];
		if(inputArray["refreshAfterSeconds"])this.refreshAfterSeconds = inputArray["refreshAfterSeconds"];

	}
	// }}}
	,
	// {{{ __setTitle()
	/**
	* 	 Set new title
	*
	*	@param String newTitle - New tab title
	*
	*	@private
	*/
	__setTitle : function(newTitle){
		this.title = newTitle;
	}
	// }}}
	,
	// {{{ __setTabTitle()
	/**
	* 	 Set new tab title
	*
	*	@param String newTabTitle - New tab title
	*
	*	@private
	*/
	__setTabTitle : function(newTabTitle){
		this.tabTitle = newTabTitle;
	}
	// }}}
	,
	// {{{ __setIdOfContentElement()
	/**
	* 	 Specify contentId
	*
	*	@param String htmlElementId - Id of content ( HTML Element on the page )
	*
	*	@private
	*/
	__setIdOfContentElement : function(htmlElementId){
		this.htmlElementId = htmlElementId;
	}
	// }}}
	,
	// {{{ __setRefreshAfterSeconds()
	/**
	* 	 Set reload content value ( seconds )
	*
	*	@param Integer refreshAfterSeconds - Refresh rate in seconds
	*
	*	@private
	*/
	__setRefreshAfterSeconds : function(refreshAfterSeconds){
		this.refreshAfterSeconds = refreshAfterSeconds;
	}
	// }}}
	,
	// {{{ __setContentUrl()
	/**
	* 	 Specifies external url for content
	*
	*	@param String contentUrl - Url of content
	*
	*	@private
	*/
	__setContentUrl : function(contentUrl){
		this.contentUrl = contentUrl;
	}
	/// }}}
	,
	// {{{ __getClosable()
	/**
	*	Return the closable attribute
	*	@private
	*/
	__getClosable : function(){
		return this.closable;
	}
}

/*[FILE_START:dhtmlSuite-paneSplitter.js] */
/************************************************************************************************************
*	DHTML pane splitter pane
*
*	Created:						November, 28th, 2006
*	@class Purpose of class:		Creates a pane for the pane splitter ( This is a private class )
*
*	Css files used by this script:	pane-splitter.css
*
*	Demos of this class:			demo-pane-splitter.html
*
* 	Update log:
*
************************************************************************************************************/
/**
* @constructor
* @class Purpose of class:	Creates the content for a pane in the pane splitter widget( This is a private class )
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/

DHTMLSuite.paneSplitterPane = function(parentRef){
	var divElement;		// Reference to a div element for the content
	var divElCollapsed;	// Reference to the div element for the content ( collapsed state )
	var divElCollapsedInner;	// Reference to the div element for the content ( collapsed state )
	var contentDiv;		// Div for the content
	var headerDiv;		// Reference to the header div
	var titleSpan;		// Reference to the <span> tag for the title
	var paneModel;		// An array of paneSplitterPaneView objects
	var resizeDiv;		// Div for the resize handle
	var tabDiv;			// Div for the tabs
	var divTransparentForResize;	// This transparent div is used to cover iframes when resize is in progress.
	var parentRef;		// Reference to paneSplitter object

	var divClose;		// Reference to close button
	var divCollapse;	// Reference to collapse button
	var divExpand;		// Reference to expand button
	var divRefresh;		// Reference to refresh button

	var slideIsInProgress;		// Internal variable used by the script to determine if slide is in progress or not
	var reloadIntervalHandlers;	// Array of setInterval objects, one for each content of this pane

	var contentScrollTopPositions;	// Array of contents scroll top positions in pixels.

	this.contents = new Array();
	this.reloadIntervalHandlers = new Object();
	this.contentScrollTopPositions = new Object();

	this.parentRef = parentRef;
	var activeContentIndex;	// Index of active content(default = 0)
	this.activeContentIndex = false;
	this.slideIsInProgress = false;
	var objectIndex;			// Index of this object in the variableStorage array
	this.objectIndex = DHTMLSuite.variableStorage.arrayDSObjects.length;
	DHTMLSuite.variableStorage.arrayDSObjects[this.objectIndex] = this;
}
DHTMLSuite.paneSplitterPane.prototype =
{
	// {{{ addDataSource()
	/**
	*	Add a data source to the pane
	*
	*	@param paneModelRef - Object of class DHTMLSuite.paneSplitterpaneModelRef
	*	@public
	*/
	addDataSource : function(paneModelRef){
		this.paneModel = paneModelRef;
	}
	// }}}
	,
	// {{{ addContent()
	/**
	* 	 Add a content model to the pane. 
	*
	*	@param DHTMLSuite.paneSplitterpaneContentModelObject paneContentModelObject - Object of class DHTMLSuite.paneSplitterpaneContentModelObject
	*	@param String jsCodeToExecuteWhenComplete - JS code to execute/evaluate when content has been successfully loaded.
	*	@return Boolean Success - true if content were added, false otherwise (i.e. content already exists)
	*
	*	@public
	*/		 
	addContent : function(paneContentModelObject,jsCodeToExecuteWhenComplete){
		var retValue = this.paneModel.addContent(paneContentModelObject);

		if(!retValue)return false;	// Content already exists - return from this method.
		this.__addOneContentDiv(paneContentModelObject,jsCodeToExecuteWhenComplete);
		this.__updateTabContent();
		this.__updateView();
		if(this.paneModel.getCountContent()==1)this.showContent(paneContentModelObject.id);
		return retValue
	}
	// }}}
	,
	// {{{ showContent()
	/**
	* 	Display content - the content with this id will be activated.(if content id doesn't exists, nothing is done)
	*
	*	@param String idOfContentObject - Id of the content to show
	*
	*	@public
	*/
	showContent : function(idOfContentObject){
		for(var no=0;no<this.paneModel.contents.length;no++){
			if(this.paneModel.contents[no].id==idOfContentObject){
				this.__updatePaneView(no);
				return;
			}
		}
	}
	// }}}
	,
	// {{{ loadContent()
	
	
	/**
	* 	loads content into a pane
	*
	*	@param String idOfContentObject - Id of the content object - where new content should be appended
	*	@param String url - url to content
	*	@param Integer refreshAfterSeconds		- Reload url after number of seconds. 0 = no refresh ( also default)
	*	@param internalCall Boolean	- Always false ( true only if this method is called by the script it's self )
	*	@param String onCompleteJsCode - Js code to execute when content has been successfully loaded.
	*
	*	@public
	*/
	loadContent : function(idOfContentObject,url,refreshAfterSeconds,internalCall,onCompleteJsCode){
	//alert(idOfContentObject+"  "+url+"  "+refreshAfterSeconds+"  "+internalCall+"  "+onCompleteJsCode)
	IdrecupContenuFichier=idOfContentObject
	Xurl=url
	
	setTimeout('recup()',250)



		
		if(!url)return;
		for(var no=0;no<this.paneModel.contents.length;no++){
			if(this.paneModel.contents[no].id==idOfContentObject){
				if(internalCall && !this.paneModel.contents[no].refreshAfterSeconds)return;	// Refresh rate has been cleared - no reload.
				var ajaxWaitMsg = this.parentRef.waitMessage;	// Please wait message
				this.paneModel.contents[no].__setContentUrl(url);
				if(refreshAfterSeconds && !internalCall){
					this.paneModel.contents[no].__setRefreshAfterSeconds(refreshAfterSeconds);
				}
				if(refreshAfterSeconds)this.__handleContentReload(idOfContentObject,refreshAfterSeconds);
				try{
					var dynContent = new DHTMLSuite.dynamicContent();
				}catch(e){
					alert('You need to include dhtmlSuite-dynamicContent.js');
				}
				dynContent.setWaitMessage(ajaxWaitMsg);
				dynContent.loadContent(this.paneModel.contents[no].htmlElementId,url,onCompleteJsCode);
				dynContent = false;
				return;
			}
		}   
	}
	// }}}
	,
	// {{{ isUrlLoadedInPane()
	/**
	* 	Check if url is allready loaded into a pane.
	*
	*	@param String idOfContentObject - Id of content
	*	@param String url - url to check
	*
	*	@public
	*/
	isUrlLoadedInPane : function(idOfContentObject,url){
		var contentIndex = this.paneModel.__getIndexById(idOfContentObject);
		if(contentIndex!==false){
			if(this.paneModel.contents[contentIndex].contentUrl==url)return true;
		}
		return false;

	}
	// }}}
	,
	// {{{ reloadContent()
	/**
	* 	Reloads content for a pane ( AJAX )
	*
	*	@param String idOfContentObject - Id of the content object - where new content should be appended
	*
	*	@public
	*/
	reloadContent : function(idOfContentObject){
		var contentIndex = this.paneModel.__getIndexById(idOfContentObject);
		if(contentIndex!==false){
			this.loadContent(idOfContentObject,this.paneModel.contents[contentIndex].contentUrl);
		}
	}
	// }}}
	,
	// {{{ setRefreshAfterSeconds()
	/**
	* 	Reloads content into a pane - sets a timeout for a new call to loadContent
	*
	*	@param String idOfContentObject - Id of the content object - id of content
	*	@param Integer refreshAfterSeconds - When to reload content, 0 = no reload of content.
	*
	*	@public
	*/
	setRefreshAfterSeconds : function(idOfContentObject,refreshAfterSeconds){
		for(var no=0;no<this.paneModel.contents.length;no++){
			if(this.paneModel.contents[no].id==idOfContentObject){
				if(!this.paneModel.contents[no].refreshAfterSeconds){
					this.loadContent(idOfContentObject,this.paneModel.contents[no].contentUrl,refreshAfterSeconds);
				}
				this.paneModel.contents[no].__setRefreshAfterSeconds(refreshAfterSeconds);
				this.__handleContentReload(idOfContentObject);
			}
		}
	}
	// }}}
	,
	// {{{ setContentTitle()
	/**
	* 	New tab title of content - i.e. the heading
	*
	*	@param String idOfContent - Id of content object
	*	@param String newTitle - New tab title
	*
	*	@public
	*/
	setContentTitle : function(idOfContent, newTitle){
		var contentModelIndex = this.paneModel.__getIndexById(idOfContent);	// Get a reference to the content object
		if(contentModelIndex!==false){
			var contentModelObj = this.paneModel.contents[contentModelIndex];
			contentModelObj.__setTitle(newTitle);
			this.__updateHeaderBar(this.activeContentIndex);
		}
	}
	// }}}
	,
	// {{{ setContentTabTitle()
	/**
	* 	New tab title for a specific tab(the clickable tab)
	*
	*	@param String idOfContent - Id of content object
	*	@param String newTitle - New tab title
	*
	*	@public
	*/
	setContentTabTitle : function(idOfContent, newTitle){
		var contentModelIndex = this.paneModel.__getIndexById(idOfContent);	// Get a reference to the content object
		if(contentModelIndex!==false){
			var contentModelObj = this.paneModel.contents[contentModelIndex];
			contentModelObj.__setTabTitle(newTitle);
			this.__updateTabContent();
		}
	}
	// }}}
	,
	// {{{ hidePane()
	/**
	* 	Hides the pane
	*
	*
	*	@public
	*/
	hidePane : function(){
		this.paneModel.__setVisible(false);	// Update the data source property
		this.expand();
		this.divElement.style.display='none';
		this.__executeCallBack("hide",this.paneModel.contents[this.activeContentIndex]);
	}
	// }}}
	,
	// {{{ showPane()
	/**
	* 	Make a pane visible
	*
	*
	*	@public
	*/
	showPane : function(){
		this.paneModel.__setVisible(true);
		this.divElement.style.display='block';
		this.__executeCallBack("show",this.paneModel.contents[this.activeContentIndex]);
	}
	// }}}
	,
	// {{{ collapse()
	/**
	* 	Collapses a pane
	*
	*
	*	@public
	*/
	collapse : function(){

		this.__collapse();
		if(!this.parentRef.dataModel.collapseButtonsInTitleBars)this.parentRef.__toggleCollapseExpandButton(this.paneModel.getPosition(),'collapse');
	}
	,
	// {{{ expand()
	/**
	* 	Expands a pane
	*
	*
	*	@public
	*/
	expand : function(){
		this.__expand();
		if(!this.parentRef.dataModel.collapseButtonsInTitleBars)this.parentRef.__toggleCollapseExpandButton(this.paneModel.getPosition(),'expand');
	}
	// }}}
	,
	// {{{ getIdOfCurrentlyDisplayedContent()
	/**
	* 	Returns id of the content currently being displayed - active tab.
	*
	*	@return String id of currently displayed content (active tab).
	*
	*	@private
	*/
	getIdOfCurrentlyDisplayedContent : function(){
		return this.paneModel.contents[this.activeContentIndex].id;
	}
	// }}}
	,
	// {{{ getHtmlElIdOfCurrentlyDisplayedContent()
	/**
	* 	Returns id of the HTML element for currently being displayed - active tab.
	*
	*	@return String htmlElementId of currently displayed content (active tab).
	*
	*	@private
	*/
	getHtmlElIdOfCurrentlyDisplayedContent : function(){
		return this.paneModel.contents[this.activeContentIndex].htmlElementId;
	}
	// }}}
	,
	// {{{ __getSizeOfPaneInPixels()
	/**
	*	Returns pane width in pixels
	*	@return Array - associative array with the keys "width" and "height"
	*
	*	@private
	*/
	__getSizeOfPaneInPixels : function(){
		var retArray = new Object();
		retArray.width = this.divElement.offsetWidth;
		retArray.height = this.divElement.offsetHeight;
		return retArray;
	}
	// }}}
	,
	// {{{ __reloadDisplayedContent()
	/**
	*	Reloads the displayed content if it got content url.
	*
	*	@private
	*/
	__reloadDisplayedContent : function(){
		this.reloadContent(this.paneModel.contents[this.activeContentIndex].id);
	}
	,
	// {{{ __getReferenceTomainDivEl()
	/**
	* 	Returns a reference to the main div element for this pane
	*
	*	@param String divElement - Reference to pane div element(top div of pane)
	*
	*	@private
	*/
	__getReferenceTomainDivEl : function(){
		return this.divElement;
	}
	// }}}
	,
	// {{{ __executeResizeCallBack()
	/**
	* 	Execute a resize pane call back - this method is called from the pane splitter
	*
	*	@private
	*/
	__executeResizeCallBack : function(){
		
		this.__executeCallBack('resize');
	}
	,
	// {{{ __executeCallBack()
	/**
	* 	Execute a call back function
	*
	*	@parem whichCallBackAction - which call back - event.
	*
	*	@private
	*/
	__executeCallBack : function(whichCallBackAction,contentObj){
	

		var callbackString = false;
		switch(whichCallBackAction){	/* Which call back string */
			case "show":
				if(!this.paneModel.callbackOnShow)return;
				callbackString = this.paneModel.callbackOnShow;
				break;
			case "collapse":
			if(contentObj.id="westContent" & this.paneModel.callbackOnCollapse){
			
			//document.getElementById("carreefface").height=2000//gestion taille de l'image transparente qui permet de déplacer le contenu de la pane pour éviter l'affichage résiduel (bug de westContent)
			}
				if(!this.paneModel.callbackOnCollapse)return;
				callbackString = this.paneModel.callbackOnCollapse;
				break;
			case "expand":
			if(contentObj.id="westContent" & this.paneModel.callbackOnExpand){
			//document.getElementById("carreefface").height=0//gestion taille de l'image transparente qui permet de déplacer le contenu de la pane pour éviter l'affichage résiduel (bug de westContent)
			}
				if(!this.paneModel.callbackOnExpand)return;
				callbackString = this.paneModel.callbackOnExpand;
				break;
			case "hide":
				if(!this.paneModel.callbackOnHide)return;
				callbackString = this.paneModel.callbackOnHide;
				break;
			case "slideIn":
			
			if(contentObj.id="westContent"){
			
			//document.getElementById("carreefface").height=2000//gestion taille de l'image transparente qui permet de déplacer le contenu de la pane pour éviter l'affichage résiduel (bug de westContent)
			}
				if(!this.paneModel.callbackOnSlideIn)return;
				callbackString = this.paneModel.callbackOnSlideIn;
				break;
			case "slideOut":
			
			
			if(contentObj.id="westContent" ){
			//document.getElementById("carreefface").height=0//gestion taille de l'image transparente qui permet de déplacer le contenu de la pane pour éviter l'affichage résiduel (bug de westContent)
			}
				if(!this.paneModel.callbackOnSlideOut)return;
				callbackString = this.paneModel.callbackOnSlideOut;
				break;
			case "closeContent":
				if(!this.paneModel.callbackOnCloseContent)return;
				callbackString = this.paneModel.callbackOnCloseContent;
				break;
			case "beforeCloseContent": 
				if(!this.paneModel.callbackOnBeforeCloseContent)return true;
				callbackString = this.paneModel.callbackOnBeforeCloseContent;
				break;
			case "tabSwitch":
				if(!this.paneModel.callbackOnTabSwitch)return;
				callbackString = this.paneModel.callbackOnTabSwitch;
				break;
			case "resize":
				if(!this.paneModel.callbackOnResize)return;
				callbackString = this.paneModel.callbackOnResize;
				//alert(callbackString)
				break;
		}
		if(!callbackString)return;
		if(!contentObj)contentObj=false;
		
		callbackString = this.__getCallBackString(callbackString,whichCallBackAction,contentObj);
		return this.__executeCallBackString(callbackString,contentObj);
	}
	// }}}
	,
	// {{{ __getCallBackString()
	/**
	* 	Parse a call back string. If parantheses are present, return it as it is, otherwise return  the name of the function and the paneModel as argument to that function
	*
	*	@param String callbackString - Call back string to parse
	*	@param String whichCallBackAction - Which callback action
	*	@param Object contentObj - Reference to pane content object(model)
	*
	*	@private
	*/
	__getCallBackString : function(callbackString,whichCallBackAction,contentObj){
		if(callbackString.indexOf('(')>=0)return callbackString;
		if(contentObj){
			callbackString = callbackString + '(this.paneModel,"' + whichCallBackAction + '",contentObj)';
		}else{
			callbackString = callbackString + '(this.paneModel,"' + whichCallBackAction + '")';
		}
		callbackString = callbackString;
		return callbackString;
	}
	// }}}
	,
	// {{{ __executeCallBackString()
	/**
	* 	Reloads content into a pane - sets a timeout for a new call to loadContent
	*
	*	@param String callbackString - Call back string to execute
	*	@param Object contentObj - Reference to pane content object(model)
	*
	*	@private
	*/
	__executeCallBackString : function(callbackString,contentObj){
		try{
			return eval(callbackString);
		}catch(e){
			alert('Could not execute specified call back function:\n' + callbackString + '\n\nError:\n' + e.name + '\n' + e.message + '\n' + '\nMake sure that there aren\'t any errors in your function.\nAlso remember that contentObj would not be present when you click close on the last tab\n(In case a close tab event triggered this callback function)');
		}
	}
	,
	// {{{ __handleContentReload()
	/**
	* 	Reloads content into a pane - sets a timeout for a new call to loadContent
	*
	*	@param String id - Id of the content object - id of content
	*
	*	@private
	*/
	__handleContentReload : function(id){
		var ind = this.objectIndex;
		var contentIndex = this.paneModel.__getIndexById(id);
		if(contentIndex!==false){
			var contentRef = this.paneModel.contents[contentIndex];
			if(contentRef.refreshAfterSeconds){
				if(this.reloadIntervalHandlers[id])clearInterval(this.reloadIntervalHandlers[id]);
				this.reloadIntervalHandlers[id] = setInterval('DHTMLSuite.variableStorage.arrayDSObjects[' + ind + '].loadContent("' + id + '","' + contentRef.contentUrl + '",' + contentRef.refreshAfterSeconds + ',true)',(contentRef.refreshAfterSeconds*1000));
			}else{
				if(this.reloadIntervalHandlers[id])clearInterval(this.reloadIntervalHandlers[id]);
			}
		}
	}
	// }}}
	,
	// {{{ __createPane()
	/**
	*	This method creates the div for a pane
	*
	*
	*	@private
	*/
	__createPane : function(){
		this.divElement = document.createElement('DIV');	// Create the div for a pane.
		this.divElement.style.position = 'absolute';
		this.divElement.className = 'DHTMLSuite_pane';
		this.divElement.id = 'DHTMLSuite_pane_' + this.paneModel.getPosition();
		document.body.appendChild(this.divElement);
		this.__createHeaderBar();	// Create the header
		this.__createContentPane();	// Create content pane.
		this.__createTabBar();	// Create content pane.
		this.__createCollapsedPane();	// Create div element ( collapsed state)
		this.__createTransparentDivForResize();	// Create transparent div for the resize;
		this.__updateView();	// Update the view
		this.__addContentDivs();
		this.__setSize();
	}
	// }}}
	,
	// {{{ __createTransparentDivForResize()
	/**
	*	Create div element used when content is being resized
	*
	*
	*	@private
	*/
	__createTransparentDivForResize : function(){
		this.divTransparentForResize = document.createElement('DIV');
		var ref = this.divTransparentForResize;
		ref.style.opacity = '0';
		ref.style.display='none';
		ref.style.filter = 'alpha(opacity=0)';
		ref.style.position = 'absolute';
		ref.style.left = '0px';
		ref.style.top = this.headerDiv.offsetHeight + 'px';
		ref.style.height = '90%';
		ref.style.width = '100%';
		ref.style.backgroundColor='#FFF';
		ref.style.zIndex = '1000';
		this.divElement.appendChild(ref);

	}
	// }}}
	,
	// {{{ __createCollapsedPane()
	/**
	*	Creates the div element - collapsed state
	*
	*
	*	@private
	*/
	__createCollapsedPane : function(){

		var ind = this.objectIndex;
		var pos = this.paneModel.getPosition();
		var buttonSuffix = 'Vertical';	// Suffix to the class names for the collapse and expand buttons
		if(pos=='west' || pos=='east')buttonSuffix = 'Horizontal';
		if(pos=='center')buttonSuffix = '';

		this.divElCollapsed = document.createElement('DIV');

		var obj = this.divElCollapsed;

		obj.className = 'DHTMLSuite_pane_collapsed_' + pos;
		obj.style.visibility='hidden';
		obj.style.position = 'absolute';

		this.divElCollapsedInner = document.createElement('DIV');
		this.divElCollapsedInner.className= 'DHTMLSuite_pane_collapsedInner';
		this.divElCollapsedInner.onmouseover = this.__mouseoverHeaderButton;
		this.divElCollapsedInner.onmouseout = this.__mouseoutHeaderButton;
		this.divElCollapsedInner.onclick = function(e){ DHTMLSuite.variableStorage.arrayDSObjects[ind].__slidePane(e); }
		DHTMLSuite.commonObj.__addEventEl(this.divElCollapsedInner);

		obj.appendChild(this.divElCollapsedInner);

		var buttonDiv = document.createElement('DIV');
		buttonDiv.className='buttonDiv';

		this.divElCollapsedInner.appendChild(buttonDiv);

		document.body.appendChild(obj);

		if(this.parentRef.dataModel.collapseButtonsInTitleBars){
			if(this.paneModel.getPosition()=='east' || this.paneModel.getPosition()=='west'){
				this.divElCollapsedInner.style.width = (this.parentRef.paneSizeCollapsed - 6) + 'px';
				this.divElCollapsed.style.width = (this.parentRef.paneSizeCollapsed) + 'px';
				if(this.paneModel.getPosition()=='east'){
					this.divElCollapsedInner.style.marginLeft = '3px';
				}
			}else{
				this.divElCollapsedInner.style.height = (this.parentRef.paneSizeCollapsed - 6) + 'px';
				this.divElCollapsed.style.height = (this.parentRef.paneSizeCollapsed) + 'px';
				buttonDiv.style.cssText = 'float:right;clear:both';
			}
			var pos = this.paneModel.getPosition();
			// Creating expand button
			this.divExpand = document.createElement('DIV');
			if(pos=='south' || pos=='east')
				this.divExpand.className='collapseButton' + buttonSuffix;
			else
				this.divExpand.className='expandButton' + buttonSuffix;

			this.divExpand.onclick = function() { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__expand(); } ;
			this.divExpand.onmouseover = this.__mouseoverHeaderButton;
			this.divExpand.onmouseout = this.__mouseoutHeaderButton;
			DHTMLSuite.commonObj.__addEventEl(this.divExpand);
			buttonDiv.appendChild(this.divExpand);
		}
	}
	// }}}
	,
	// {{{ __autoSlideInPane()
	/**
	*	Automatically slide in a pane when click outside of the pane. This will happen if the pane is currently in "slide out" mode.
	*
	*
	*	@private
	*/
	__autoSlideInPane : function(e){
		if(document.all)e = event;
		var state = this.paneModel.__getState();	// Get state of pane
		if(boutonaide!=1){//pour ne pas fermer le slide lorsque l'on clique sur le bouton aide : voire les commande sur le bouton aide avec un timer pour remettre  boutonaide=0
		if(state=='collapsed' && this.divElement.style.visibility!='hidden'){	// Element is collapsed but showing(i.e. temporary expanded)
			if(!DHTMLSuite.commonObj.isObjectClicked(this.divElement,e))this.__slidePane(e,true);	// Slide in pane if element clicked is not the expanded pane
		}
		}
		//---------------------------MODIFS HERVE --------------------gestion de la visibilité du pane west selon la dernière position du  Slide 
		
		
		if(this.paneModel.id=="westPane" && state=="collapsed"){ 
		if(this.divElement.style.visibility!='hidden'  ) {
		document.getElementById("divmenumotcle").style.display="none"//"block"
		document.getElementById("divaide").style.display="none"//"block"
	
		document.getElementById("westContent").style.display="block"
		}
		else
		{
		document.getElementById("divmenumotcle").style.display="none"
		document.getElementById("divaide").style.display="none"
		document.getElementById("westContent").style.display="none"
		}
		}
		if(this.paneModel.id=="westPane" & state=="expanded"){ 
		document.getElementById("westContent").style.display="block"
		document.getElementById("divaide").style.display="none"
		document.getElementById("divmenumotcle").style.display="block"
		}
		
		//-----------------------------  FIN MODIFS HERVE

		
	}
	// }}}
	,
	// {{{ __slidePane()
	/**
	*	The purpose of this method is to slide out a pane, but the state of the pane is still collapsed
	*
	*	@param Event e - Reference to event object
	*	@param Boolean forceSlide - force the slide action no matter which element the user clicked on. 
	*
	*	@private
	*/
	__slidePane : function(e,forceSlide){
	//alert(forceSlide)
		if(this.slideIsInProgress)return;
		this.parentRef.paneZIndexCounter++;
		if(document.all)e = event;	// IE
		var src = DHTMLSuite.commonObj.getSrcElement(e);	// Get a reference to the element triggering the event
		if(src.className=='buttonDiv')src = src.parentNode;
		if(src.className.indexOf('collapsed')<0 && !forceSlide)return;	// If a button on the collapsed pane triggered the event->Return from the method without doing anything.

		this.slideIsInProgress = true;
		var state = this.paneModel.__getState();	// Get state of pane.

		var hideWhenComplete = true;
		if(this.divElement.style.visibility=='hidden'){	// The pane is currently not visible, i.e. not slided out.
			this.__executeCallBack('slideOut',this.paneModel.contents[this.activeContentIndex]);
			this.__setSlideInitPosition();
			this.divElement.style.visibility='visible';
			this.divElement.style.zIndex = 16000 + this.parentRef.paneZIndexCounter;
			this.divElCollapsed.style.zIndex = 16000 + this.parentRef.paneZIndexCounter;

			var slideTo = this.__getSlideToCoordinates(true);	// Get coordinate, where to slide to
			hideWhenComplete = false;
			var slideSpeed = this.__getSlideSpeed(true); 

		}else{
			this.__executeCallBack('slideIn',this.paneModel.contents[this.activeContentIndex]);
			var slideTo = this.__getSlideToCoordinates(false);	// Get coordinate, where to slide to
			var slideSpeed = this.__getSlideSpeed(false);
		}

		this.__processSlideByPixels(slideTo,slideSpeed*this.parentRef.slideSpeed,this.__getCurrentCoordinateInPixels(),hideWhenComplete);

	}
	// }}}
	,
	// {{{ __setSlideInitPosition()
	/**
	*	Set position of pane before slide.
	*
	*
	*	@private
	*/
	__setSlideInitPosition : function(){
	//alert("slide")
		var bw = DHTMLSuite.clientInfoObj.getBrowserWidth();
		var bh = DHTMLSuite.clientInfoObj.getBrowserHeight();
		var pos = this.paneModel.getPosition();
		switch(pos){
			case "west":
				this.divElement.style.left = (0 - this.paneModel.size)+ 'px';
				break;
			case "east":
			
				this.divElement.style.left = bw + 'px';
				break;
			case "north":
				this.divElement.style.top = (0 - this.paneModel.size)+ 'px';
				break;
			case "south":
				this.divElement.style.top = bh + 'px';
				break;
		}
	}
	// }}}
	,
	// {{{ __getCurrentCoordinateInPixels()
	/**
	*	Return pixel coordinates for this pane. For left and east, it would be the left position. For top and south, it would be the top position.
	*
	*	@return Integer currentCoordinate	= Current coordinate for a pane ( top or left)
	*
	*	@private
	*/
	__getCurrentCoordinateInPixels : function(){

		var pos = this.paneModel.getPosition();
		var left = this.divElement.style.left.replace('px','')/1;
		var top = this.divElement.style.top.replace('px','')/1;
		
		

		switch(pos){
			case "west": return left;
			case "east": return left;
			case "south": return top;
			case "north": return top;
		}
	
	}
	// }}}
	,
	// {{{ __getSlideSpeed()
	/**
	*	Return pixel steps for the slide.
	*
	*	@param Boolean slideOut	= true if the element should slide out, false if it should slide back, i.e. be hidden.
	*
	*	@private
	*/
	__getSlideSpeed : function(slideOut){
		var pos = this.paneModel.getPosition();

		switch(pos){
			case "west": 
			case "north":
				if(slideOut)return 1;else return -1;
				break;
			case "south":
			case "east":
				if(slideOut)return -1;else return 1;
		}
	}

	// }}} 
	,
	// {{{ __processSlideByPixels()
	/**
	*	Slides in our out a pane - this method creates that animation
	*
	*	@param Integer slideTo	- coordinate where to slide to(top or left)
	*	@param Integer slidePixels	- pixels to slide in each iteration of this method
	*	@param Integer currentPos	- current slide position
	*	@param Boolean hideWhenComplete	- Hide pane when completed ?
	*
	*	@private
	*/
	__processSlideByPixels : function(slideTo,slidePixels,currentPos,hideWhenComplete){
		var pos = this.paneModel.getPosition();
		currentPos = currentPos + slidePixels;
		var repeatSlide = true;	// Repeat one more time ?
		if(slidePixels>0 && currentPos>slideTo){
			currentPos = slideTo;
			repeatSlide = false;
		}
		if(slidePixels<0 && currentPos<slideTo){
			currentPos = slideTo;
			repeatSlide = false;
		}

		switch(pos){
			case "west":
			case "east":
				this.divElement.style.left = currentPos + 'px';
				break;
			case "north":
			case "south":
				this.divElement.style.top = currentPos + 'px';
		}

		if(repeatSlide){
			var ind = this.objectIndex;
			setTimeout('DHTMLSuite.variableStorage.arrayDSObjects[' + ind + '].__processSlideByPixels(' + slideTo + ',' + slidePixels + ',' + currentPos + ',' + hideWhenComplete + ')',10);
		}else{
			if(hideWhenComplete){
				this.divElement.style.visibility='hidden';
				this.divElement.style.zIndex = 11000;
				this.divElCollapsed.style.zIndex = 12000;
			}
			this.slideIsInProgress = false;
		}
	}
	// }}}
	,
	// {{{ __getSlideToCoordinates()
	/**
	*	Return target coordinate for the slide, i.e. where to slide to
	*
	*	@param Boolean slideOut	= true if the element should slide out, false if it should slide back, i.e. be hidden.
	*
	*	@private
	*/
	__getSlideToCoordinates : function(slideOut){
		var bw = DHTMLSuite.clientInfoObj.getBrowserWidth();
		var bh = DHTMLSuite.clientInfoObj.getBrowserHeight();
		var pos = this.paneModel.getPosition();

		switch(pos){
			case "west":
				if(slideOut)
					return this.parentRef.paneSizeCollapsed + this.parentRef.verticalSplitterSize;	// End position is
				else
					return (0 - this.paneModel.size);
			case "east":
				if(slideOut)
					return bw - this.parentRef.paneSizeCollapsed - this.paneModel.size - this.parentRef.verticalSplitterSize -1;
				else
					return bw;
			case "north":
				if(slideOut)
					return this.parentRef.paneSizeCollapsed + this.parentRef.horizontalSplitterSize;	// End position is
				else
					return (0 - this.paneModel.size);
			case "south":
				if(slideOut)
					return bh - this.parentRef.paneSizeCollapsed  - this.paneModel.size - this.parentRef.horizontalSplitterSize -1;
				else
					return bh;
		}

	}

	// }}}
	,
	// {{{ __updateCollapsedSize()
	/**
	*	Automatically figure out the size of the pane when it's collapsed(the height or width of the small bar)
	*
	*
	*	@private
	*/
	
	__updateCollapsedSize : function(){



		var pos = this.paneModel.getPosition();
		var size;
		if(pos=='west' || pos=='east')size = this.divElCollapsed.offsetWidth;

		if(pos=='north' || pos=='south')size = this.divElCollapsed.offsetHeight;
		if(size)this.parentRef.__setPaneSizeCollapsed(size);
/*
if(pos=='west'){

indica=1
indiccollapse=1
westDeltaWidth=size-paneWest.size

paneEast.size=paneEast.size-westDeltaWidth

var posit="position:absolute"
var widthX=";width:"+paneEast.size+"px"
var topX=";top:"+document.getElementById("eastContent").parentNode.parentNode.style.top
var leftX=";left:"+document.getElementById("eastContent").parentNode.parentNode.style.left
var heightX=";height:"+document.getElementById("eastContent").parentNode.parentNode.style.height

var sty=posit+widthX+topX+leftX+heightX
document.getElementById("eastContent").parentNode.parentNode.setAttribute("style",sty)
//alert(document.getElementById("eastContent").parentNode.parentNode.getAttribute("style"))
document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
}
*/
	}
	// }}}
	,
	// {{{ __createHeaderBar()
	/**
	*	Creates the header bar for a pane
	*
	*
	*	@private
	*/
	__createHeaderBar : function(){
		var ind = this.objectIndex;	// Making it into a primitive variable
		var pos = this.paneModel.getPosition();	// Get position of this pane
		var buttonSuffix = 'Vertical';	// Suffix to the class names for the collapse and expand buttons
		if(pos=='west' || pos=='east')buttonSuffix = 'Horizontal';
		if(pos=='center')buttonSuffix = '';

		this.headerDiv = document.createElement('DIV');
		this.headerDiv.className = 'DHTMLSuite_paneHeader';
		this.headerDiv.style.position = 'relative';
		this.divElement.appendChild(this.headerDiv);

		this.titleSpan = document.createElement('SPAN');
		this.titleSpan.className = 'paneTitle';
		this.headerDiv.appendChild(this.titleSpan);

		var buttonDiv = document.createElement('DIV');
		buttonDiv.style.position = 'absolute';
		buttonDiv.style.right = '0px';
		buttonDiv.style.top = '0px';
		buttonDiv.style.width='50px';
		buttonDiv.className = 'DHTMLSuite_paneHeader_buttonDiv';
		this.headerDiv.appendChild(buttonDiv);

		// Creating close button
		this.divClose = document.createElement('DIV');
		this.divClose.className = 'closeButton';
		this.divClose.onmouseover = this.__mouseoverHeaderButton;
		this.divClose.onmouseout = this.__mouseoutHeaderButton;
		this.divClose.innerHTML = '<span></span>';
		this.divClose.onclick = function() { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__close(); } ;
		DHTMLSuite.commonObj.__addEventEl(this.divClose);
		buttonDiv.appendChild(this.divClose);

		// Creating collapse button
		if(pos!='center' && this.parentRef.dataModel.collapseButtonsInTitleBars){
			this.divCollapse = document.createElement('DIV');
			if(pos=='south' || pos=='east')
				this.divCollapse.className='expandButton' + buttonSuffix;
			else
				this.divCollapse.className='collapseButton' + buttonSuffix;
			this.divCollapse.innerHTML = '<span></span>';
			this.divCollapse.onclick = function() { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapse(); } ;
			this.divCollapse.onmouseover = this.__mouseoverHeaderButton;
			this.divCollapse.onmouseout = this.__mouseoutHeaderButton;
			DHTMLSuite.commonObj.__addEventEl(this.divCollapse);
			buttonDiv.appendChild(this.divCollapse);
		}

		// Creating refresh button
		this.divRefresh = document.createElement('DIV');
		this.divRefresh.className='refreshButton';
		this.divRefresh.onmouseover = this.__mouseoverHeaderButton;
		this.divRefresh.onmouseout = this.__mouseoutHeaderButton;
		this.divRefresh.onclick = function() { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__reloadDisplayedContent(); } ;
		DHTMLSuite.commonObj.__addEventEl(this.divRefresh);
		buttonDiv.appendChild(this.divRefresh);

		this.headerDiv.onselectstart = function(){ return false; };

	}
	// }}}
	,
	// {{{ __mouseoverHeaderButton()
	/**
	*	Mouse over effect - buttons
	*
	*
	*	@private
	*/
	__mouseoverHeaderButton : function(){
		if(this.className.indexOf('Over')==-1)this.className=this.className + 'Over';
	}
	// }}}
	,
	// {{{ __mouseoutHeaderButton()
	/**
	*	Mouse out effect - buttons
	*
	*
	*	@private
	*/
	__mouseoutHeaderButton : function(){
		this.className=this.className.replace('Over','');
	}
	,
	// {{{ __close()
	/**
	*	Close a pane
	*
	*	@param Event e = Reference to Event object
	*
	*	@private
	*/
	__close : function(e){
		// Check to see if there's an callbackOnBeforeCloseContent event
		var id = this.paneModel.contents[this.activeContentIndex].id;
		var ok = this.__getOnBeforeCloseResult(this.activeContentIndex);
		if(!ok)return;

		if(id){
			this.__executeCallBack('closeContent',this.paneModel.contents[this.activeContentIndex]);
			DHTMLSuite.discardElement(this.paneModel.contents[this.activeContentIndex].htmlElementId);
		}
		this.activeContentIndex = this.paneModel.__deleteContent(this.activeContentIndex);
		if(this.activeContentIndex||this.activeContentIndex==0){
			this.__executeCallBack('tabSwitch',this.paneModel.contents[this.activeContentIndex]);
		}
		this.__updatePaneView(this.activeContentIndex);
				
	}
	// }}}
	,
	// {{{ __closeAllClosableTabs()
	/**
	*	Close all closable tabs.
	*
	*
	*	@private
	*/
	__closeAllClosableTabs : function(){
		for(var no=0;no<this.paneModel.contents.length;no++){
			var closable = this.paneModel.contents[no].__getClosable();
			if(closable){
				var id = this.paneModel.contents[no].id;
				DHTMLSuite.discardElement(this.paneModel.contents[no].htmlElementId);
				this.activeContentIndex = this.paneModel.__deleteContent(no);
				this.__updatePaneView(this.activeContentIndex);
				no--;
			}
		}
	}
	// }}}
	,
	// {{{ __getOnBeforeCloseResult()
	/**
	*	Return result of onBeforeClose callback
	*
	*	@param Integer contentIndex - Index of content to close.
	*
	*	@private
	*/
	__getOnBeforeCloseResult : function(contentIndex){
		return this.__executeCallBack('beforeCloseContent',this.paneModel.contents[contentIndex]);

	}
	// }}}
	,
	// {{{ __deleteContentByIndex()
	/**
	*	Close a pane
	*
	*	@param Integer index of content to delete
	*
	*	@private
	*/
	__deleteContentByIndex : function(contentIndex){
		if(this.paneModel.getCountContent()==0)return;	// No content to delete
		if(!this.__getOnBeforeCloseResult(contentIndex))return;

		var htmlId = this.paneModel.contents[contentIndex].htmlElementId;
		if(htmlId){
			try{
				DHTMLSuite.discardElement(htmlId);
			}catch(e){
			}
		}

		var tmpIndex = this.paneModel.__deleteContent(contentIndex);
		if(contentIndex==this.activeContentIndex)this.activeContentIndex = tmpIndex;
		if(this.activeContentIndex > contentIndex)this.activeContentIndex--;
		if(tmpIndex===false)this.activeContentIndex=false;

		this.__updatePaneView(this.activeContentIndex);

	}
	// }}}
	,
	// {{{ __deleteContentById()
	/**
	*	Close/Delete content
	*
	*	@param String id = Id of content to delete/close
	*
	*	@private
	*/
	__deleteContentById : function(id){
		var index = this.paneModel.__getIndexById(id);
		if(index!==false)this.__deleteContentByIndex(index);
	}
	// }}}
	,
	// {{{ __collapse()
	/**
	*	Collapse a pane.
	*
	*
	*	@private
	*/
	__collapse : function(){
//alert("AAAA")
//westWidthTemp=paneWest.size
//eastWidthTemp=paneEast.size	
westDeltaWidth=0
//  ---------------MODIF HERVE
//westDeltaWidth=-(Centxsize-paneCenter.size)//(window.innerWidth-)-(window.innerWidth-Centxsize+paneWest.size)//+paneWest.size//paneWest.size-westWidthTemp
//paneEast.size=eastWidthTemp-westDeltaWidth

//alert(westDeltaWidth)
document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
if(EDit==1){top.frames.Num0txt.document.getElementsByTagName('iframe')[0].contentWindow.width=(parseInt(document.getElementById("Num0txt").width)-45)+"px"}
sizeCenterPane=Centxsize	

//this.__positionPanes()
// ------------------------------------------
indicolexp=this.paneModel.id
//alert("collapase +  "+indicolexp)
			if(indicolexp=="eastPane"){
			//alert("eastPane")
			document.getElementById('DHTMLSuite_pane_east').childNodes[1].childNodes[0].setAttribute("style","display: none;visibility:hidden")
document.getElementById('DHTMLSuite_pane_east').childNodes[1].childNodes[1].setAttribute("style","display: none;visibility:hidden ")

			}

		this.__updateCollapsedSize();
	
			//alert(this.divElCollapsed.offsetWidth)
	
		
		this.paneModel.__setState('collapsed');		// Updating the state property
		this.divElCollapsed.style.visibility='visible';
		this.divElement.style.visibility='hidden';
		this.__updateView();
		this.parentRef.__hideResizeHandle(this.paneModel.getPosition());
		this.parentRef.__positionPanes();	// Calling the positionPanes method of parent object
		this.__executeCallBack("collapse",this.paneModel.contents[this.activeContentIndex]);
		

	}
	,
	// {{{ __expand()
	/**
	*	Expand a pane
	*
	*
	*	@private
	*/

		__expand : function(){

//westWidthTemp=paneWest.size
eastWidthTemp=paneEast.size	
westDeltaWidth=0
//  ---------------MODIF HERVE
//westDeltaWidth=-(Centxsize-paneCenter.size)//+paneWest.size//paneWest.size-westWidthTemp
//paneEast.size=eastWidthTemp-westDeltaWidth

//alert(westDeltaWidth)
document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
if(EDit==1){top.frames.Num0txt.document.getElementsByTagName('iframe')[0].contentWindow.width=(parseInt(document.getElementById("Num0txt").width)-45)+"px"}
sizeCenterPane=Centxsize	

//this.__positionPanes()
// ------------------------------------------
indicolexp=this.paneModel.id
//alert("expand +  "+indicolexp)
			if(indicolexp=="westPane"){

			
			document.getElementById('DHTMLSuite_pane_west').childNodes[1].childNodes[0].setAttribute("style","display: block;visibility:visible")
document.getElementById('DHTMLSuite_pane_west').childNodes[1].childNodes[1].setAttribute("style","display: block;visibility:visible ")
			
			
			
			}
			
			// ------------------------------------------
//indicolexp=this.paneModel.id
//alert("expand +  "+indicolexp)
			if(indicolexp=="eastPane"){
			//alert("eastPane")
document.getElementById('DHTMLSuite_pane_east').childNodes[1].childNodes[0].setAttribute("style","display: block;visibility:visible")
document.getElementById('DHTMLSuite_pane_east').childNodes[1].childNodes[1].setAttribute("style","display: block;visibility:visible ")

			}
			
			
		this.paneModel.__setState('expanded');		// Updating the state property
		this.divElCollapsed.style.visibility='hidden';
		this.divElement.style.visibility='visible';

this.__updateView();
		this.parentRef.__showResizeHandle(this.paneModel.getPosition());
		
		
		this.parentRef.__positionPanes();	// Calling the positionPanes method of parent object
		this.__executeCallBack("expand",this.paneModel.contents[this.activeContentIndex]);

		//this.parentRef.__endResize()
		//alert(this.paneModel.id)
		
//alert(this.divElement.getAttribute("style"))
/*alert(this.divElement.id)
var XeastID=this.divElement.id.substr(this.divElement.id.length-4,4)
var DebteastID=this.divElement.id.substr(0,this.divElement.id.length-4)
alert(XeastID)
alert(DebteastID)
alert("westDeltaWidth="+westDeltaWidth)
alert(document.getElementById(DebteastID+"east").getAttribute("style"))
var pos="position:absolute"
var wid=";width:"+parseInt(document.getElementById(DebteastID+"east").style.width)
wid=";width:"+parseInt(wid)+parseInt(this.divElement.style.width)+"px"

var lef=";left:"+(parseInt(document.getElementById(DebteastID+"east").style.left)+parseInt(this.divElement.style.left))+"px"
//lef=";left:"+parseInt(document.getElementById(DebteastID+"east").style.left)+parseInt(this.divElement.style.left)+"px"
var hei=";height:"+document.getElementById(DebteastID+"east").style.height
var topi=";top:"+document.getElementById(DebteastID+"east").style.top
var sty=pos+wid+lef+hei+topi	
alert("sty="+sty)
	document.getElementById(DebteastID+"east").setAttribute("style",sty)
	alert(document.getElementById(DebteastID+"east").getAttribute("style"))
	*/
	}
	// }}}
	,
	// {{{ __updateHeaderBar()
	/**
	*	This method will automatically update the buttons in the header bare depending on the setings specified for currently displayed content.
	*
	*	@param Integer index - Index of currently displayed content
	*
	*	@private
	*/
	__updateHeaderBar : function(index){
		if(index===false){	// No content in this pane
			this.divClose.style.display='none';	// Hide close button
			this.divRefresh.style.display='none';
			try{
				if(this.paneModel.getPosition()!='center' && this.paneModel.collapsable)this.divCollapse.style.display='block';else this.divCollapse.style.display='none';	// Make collapse button visible for all panes except center
			}catch(e){
			}
			this.titleSpan.innerHTML = '';	// Set title bar empty
			return;	// Return from this method.
		}
		this.divClose.style.display='block';
		this.divRefresh.style.display='block';

		if(this.divCollapse)this.divCollapse.style.display='block';	// Center panes doesn't have collapse button, that's the reason for the if-statement
		this.titleSpan.innerHTML = this.paneModel.contents[index].title;
		var contentObj = this.paneModel.contents[index];
		if(!contentObj.closable)this.divClose.style.display='none';
		if(!contentObj.displayRefreshButton || !contentObj.contentUrl)this.divRefresh.style.display='none';
		if(!this.paneModel.collapsable){	// Pane is collapsable
			if(this.divCollapse)this.divCollapse.style.display='none';	// Center panes doesn't have collapse button, that's the reason for the if-statement
		}

	}
	// }}}
	,
	// {{{ __showButtons()
	/**
	*	Show the close and resize button - it is done by showing the parent element of these buttons
	*
	*
	*	@private
	*/
	__showButtons : function(){
		var div = this.headerDiv.getElementsByTagName('DIV')[0];
		div.style.visibility='visible';

	}
	// }}}
	,
	// {{{ __hideButtons()
	/**
	*	Hides the close and resize button - it is done by hiding the parent element of these buttons
	*
	*
	*	@private
	*/
	__hideButtons : function(){
		var div = this.headerDiv.getElementsByTagName('DIV')[0];
		div.style.visibility='hidden';

	}
	// }}}
	,
	// {{{ __updateView()
	/**
	* 	Hide or shows header div and tab div based on content
	*
	*
	*	@private
	*/
	__updateView : function(){
		if(this.paneModel.getCountContent()>0 && this.activeContentIndex===false)this.activeContentIndex = 0;	// No content existed, but content has been added.
		this.tabDiv.style.display='block';
		this.headerDiv.style.display='block';

		var pos = this.paneModel.getPosition();
		if(pos=='south' || pos=='north')this.divElCollapsed.style.height = this.parentRef.paneSizeCollapsed;

		if(this.paneModel.getCountContent()<2)this.tabDiv.style.display='none';
		if(this.activeContentIndex!==false)if(!this.paneModel.contents[this.activeContentIndex].title)this.headerDiv.style.display='none';	// Active content without title, hide header bar.

		if(this.paneModel.state=='expanded')this.__showButtons();else this.__hideButtons();

		this.__setSize();
	}
	// }}}
	,
	// {{{ __createContentPane()
	/**
	* 	Creates the content pane
	*
	*
	*	@private
	*/
	__createContentPane : function(){
		this.contentDiv = document.createElement('DIV');
		this.contentDiv.className = 'DHTMLSuite_paneContent';
		this.contentDiv.id = 'DHTMLSuite_paneContent' + this.paneModel.getPosition();
		if(!this.paneModel.scrollbars)this.contentDiv.style.overflow='hidden';
		this.divElement.appendChild(this.contentDiv);

	}
	// }}}
	,
	// {{{ __createTabBar()
	/**
	* 	Creates the top bar of a pane
	*
	*
	*	@private
	*/
	__createTabBar : function(){
		this.tabDiv = document.createElement('DIV');
		this.tabDiv.className = 'DHTMLSuite_paneTabs';
		this.divElement.appendChild(this.tabDiv);
		this.__updateTabContent();
	}
	// }}}
	,
	// {{{ __updateTabContent()
	/**
	* 	Reset and repaint the tabs of this pane
	*
	*
	*	@private
	*/
	__updateTabContent : function(){
		this.tabDiv.innerHTML = '';
		var tableObj = document.createElement('TABLE');

		tableObj.style.padding = '0px';
		tableObj.style.margin = '0px';
		tableObj.cellPadding = 0;
		tableObj.cellSpacing = 0;
		this.tabDiv.appendChild(tableObj);
		var tbody = document.createElement('TBODY');
		tableObj.appendChild(tbody);

		var row = tbody.insertRow(0);

		var contents = this.paneModel.getContents();
		var ind = this.objectIndex;
		for(var no=0;no<contents.length;no++){
			var cell = row.insertCell(-1);
			var divTag = document.createElement('DIV');
			divTag.className = 'paneSplitterInactiveTab';
			cell.appendChild(divTag);
			var aTag = document.createElement('A');
			aTag.title = contents[no].tabTitle;	// Setting title of tab - useful when the tab isn't wide enough to show the label.
			contents[no].tabTitle = contents[no].tabTitle + '';
			aTag.innerHTML = contents[no].tabTitle.replace(' ','&nbsp;') + '';
			aTag.id = 'paneTabLink' + no;
			//alert(no)
			aTag.href='#';
			aTag.onclick = function(e) {indicclick=1; return DHTMLSuite.variableStorage.arrayDSObjects[ind].__tabClick(e); } ;
			divTag.appendChild(aTag);
			DHTMLSuite.commonObj.__addEventEl(aTag);
			divTag.appendChild(document.createElement('SPAN'));
		}
		this.__updateTabView(0);
	}
	// }}}
	,
	// {{{ __updateTabView()
	/**
	* 	 Updates the tab view. Sets inactive and active tabs.
	*
	*	@param Integer activeTab - Index of active tab.
	*
	*	@private
	*/
	__updateTabView : function(activeTab){
		var tabDivs = this.tabDiv.getElementsByTagName('DIV');
		for(var no=0;no<tabDivs.length;no++){
			if(no==activeTab){
				tabDivs[no].className = 'paneSplitterActiveTab';
			}else tabDivs[no].className = 'paneSplitterInactiveTab';
		}
	}
	// }}}
	,
	// {{{ __tabClick()
	/**
	* 	 Click on a tab
	*
	*	@param Event e - Reference to the object triggering the event. Content index is the numeric part of this elements id.
	*
	*	@private
	*/
	__tabClick : function(e){
		// contentScrollTopPositions
		if(document.all)e = event;

		var inputObj = DHTMLSuite.commonObj.getSrcElement(e);
		if(inputObj.tagName!='A')inputObj = inputObj.parentNode;

		var numIdClickedTab = inputObj.id.replace(/[^0-9]/gi,'');
		if(numIdClickedTab!=this.activeContentIndex)this.__updatePaneContentScrollTopPosition(this.activeContentIndex,numIdClickedTab);
		this.__updatePaneView(numIdClickedTab);
		this.__executeCallBack("tabSwitch",this.paneModel.contents[this.activeContentIndex]);
		return false;
	}
	// }}}
	,
	// {{{ __updatePaneContentScrollTopPosition()
	/**
	* 	Changes the scrollTop position of the pane. This is useful when you move from tab to tab. This object remembers the scrollTop position of all it's tab and changes the
	*	scrollTop attribute 
	*
	*	@param String idOfContentToHide of content element to hide 
	*	@param String idOfContentToShow of content element to show 
	*
	*	@private
	*/
	__updatePaneContentScrollTopPosition : function(idOfContentToHide,idOfContentToShow){
		var newScrollTop = 0;
		if(this.contentScrollTopPositions[idOfContentToShow])newScrollTop = this.contentScrollTopPositions[idOfContentToShow];
		var contentParentContainer = document.getElementById(this.paneModel.contents[idOfContentToHide].htmlElementId).parentNode;
		this.contentScrollTopPositions[idOfContentToHide] = contentParentContainer.scrollTop;
		setTimeout('document.getElementById("' + contentParentContainer.id + '").scrollTop = ' + newScrollTop,20);	// A small delay so that content can be inserted into the div first.

	}
	// }}}
	,
	// {{{ __addContentDivs()
	/**
	* 	Add content div to a pane.
	*
	*	@param String onCompleteJsCode - Js code to execute when content has been succesfully loaded into the pane
	*
	*	@private
	*/
	__addContentDivs : function(onCompleteJsCode){
		var contents = this.paneModel.getContents();
		for(var no=0;no<contents.length;no++){
			this.__addOneContentDiv(this.paneModel.contents[no],onCompleteJsCode);
		}
		this.__updatePaneView(this.activeContentIndex);	// Display initial data
	}
	,
	// {{{ __addSingleContentToPane()
	/**
	* 
	*
	*	@param Object contentObj PaneSplitterContentModel object.
	*
	*	@private
	*/
	__addOneContentDiv : function(contentObj,onCompleteJsCode){
		var htmlElementId = contentObj.htmlElementId;	// Get a reference to content id
		var contentUrl = contentObj.contentUrl;	// Get a reference to content id
		var refreshAfterSeconds = contentObj.refreshAfterSeconds;	// Get a reference to content id
		if(htmlElementId){
			try{
				this.contentDiv.appendChild(document.getElementById(htmlElementId));
				document.getElementById(htmlElementId).className = 'DHTMLSuite_paneContentInner';
				document.getElementById(htmlElementId).style.display='none';
			}catch(e){
			}
		}
		if(contentUrl){	/* Url present */
			if(!contentObj.htmlElementId || htmlElementId.indexOf('dynamicCreatedDiv__')==-1){	// Has this content been loaded before ? Might have to figure out a smarter way of checking this.
				if(!document.getElementById(htmlElementId)){
					this.__createAContentDivDynamically(contentObj);
					this.loadContent(contentObj.id,contentUrl,refreshAfterSeconds,false,onCompleteJsCode);
				}
			}
		}
	}
	// }}}
	,
	// {{{ __createAContentDivDynamically()
	/**
	* 	Create the div for a tab dynamically (in case no content exists, i.e. content loaded from external file)
	*
	*	@param Object contentObj PaneSplitterContentModel object.
	*
	*	@private
	*/
	__createAContentDivDynamically : function(contentObj){
		var d = new Date();	// Create unique id for a new div
		var divId = 'dynamicCreatedDiv__' + d.getSeconds() + (Math.random()+'').replace('.','');
		if(!document.getElementById(contentObj.id))divId = contentObj.id;	// Give it the id of the element it's self if it doesn't alredy exists on the page.
		contentObj.__setIdOfContentElement(divId);
		var div = document.createElement('DIV');
		div.id = divId;
		div.className = 'DHTMLSuite_paneContentInner';
		if(contentObj.contentUrl)div.innerHTML = this.parentRef.waitMessage;	// Content url present - Display wait message until content has been loaded.
		this.contentDiv.appendChild(div);
		div.style.display='none';
	}
	// }}}
	,
	// {{{ __showHideContentDiv()
	/**
	* 	Updates the pane view. New content has been selected. call methods for update of header bars, content divs and tabs.
	*
	*	@param Integer index Index of active content ( false = no content exists)
	*
	*	@private
	*/
	__updatePaneView : function(index){
		if(!index && index!==0)index=this.activeContentIndex;
		this.__updateTabContent();
		this.__updateView();
		this.__updateHeaderBar(index);
		this.__showHideContentDiv(index);

		this.__updateTabView(index);
		this.activeContentIndex = index;
	}
	// }}}
	,
	// {{{ __showHideContentDiv()
	/**
	*	Switch between content divs(the inner div inside a pane )
	*
	*	@param Integer index Index of content to show(if false, then do nothing --- because there aren't any content in this pane)
	*
	*	@private
	*/
	__showHideContentDiv : function(index){
	//alert("ici xxxxxxxxxxxx")
		if(index!==false){	// Still content in this pane
			var htmlElementId = this.paneModel.contents[this.activeContentIndex].htmlElementId;
			try{
			/*modifs hp*/
			var qsdf=document.getElementById(htmlElementId).parentNode.id
			
			var qsdfC=qsdf.indexOf('center',0)
			var qsdfE=qsdf.indexOf('east',0)
			var qsdfW=qsdf.indexOf('west',0)
			//alert(qsdfE)
			//qsdf=qsdf.substr(qsdf.length-6,6)
			if(indicclick==1){ 
			/*-----------------------------------------*/
			if(qsdfC>0){/*center*/
			if( index!=0){document.getElementById('centerContent').style.visibility="hidden";document.getElementById(htmlElementId).style.display='block';document.getElementById('centerContent2').style.visibility="visible";}else{document.getElementById('centerContent').style.visibility="visible";document.getElementById(htmlElementId).style.display='block';document.getElementById('centerContent2').style.visibility="hidden";}
			}else{document.getElementById(htmlElementId).style.display='block';}
			/*-----------------------------------------*/
			
			if(qsdfE>0){/*east*/
			if( index!=0){document.getElementById('eastContent').style.visibility="hidden";document.getElementById(htmlElementId).style.display='block';document.getElementById('eastContent2').style.visibility="visible";}else{document.getElementById('eastContent').style.visibility="visible";document.getElementById(htmlElementId).style.display='block';document.getElementById('eastContent2').style.visibility="hidden";}
			}else{document.getElementById(htmlElementId).style.display='block';}
			/*-----------------------------------------*/
			if(qsdfW>0){/*east*/
			
			if( index!=0){document.getElementById('westContent').style.visibility="hidden";document.getElementById(htmlElementId).style.display='block';document.getElementById('westContent2').style.visibility="visible";}else{document.getElementById('westContent').style.visibility="visible";document.getElementById(htmlElementId).style.display='block';document.getElementById('westContent2').style.visibility="hidden";}
			}else{document.getElementById(htmlElementId).style.display='block';}
			/*-----------------------------------------*/
			}else{document.getElementById(htmlElementId).style.display='block';}
			//if(index==0 & htmlElementId=="centerPane"){document.getElementById(htmlElementId).style.visibility="hidden";}
				//document.getElementById(htmlElementId).style.display='none';
			
			}catch(e){
indicclick=0
			}
			var htmlElementId = this.paneModel.contents[index].htmlElementId;
			if(htmlElementId){
				try{
				
					document.getElementById(htmlElementId).style.display='block';
				}catch(e){
				}
			}
		}
	}
	// }}}
	,
	// {{{ __setSize()
	/**
	*	Set some size attributes for the panes
	*
	*	@param Boolean recursive
	*
	*	@private
	*/
	__setSize : function(recursive){
	
		var pos = this.paneModel.getPosition().toLowerCase();
		if(pos=='west' || pos=='east'){
			this.divElement.style.width = this.paneModel.size + 'px';
		}
		if(pos=='north' || pos=='south'){
		if(pos=='xxxxxxxxx'){this.divElement.style.height = (this.paneModel.size+ 100)+'px'}else{this.divElement.style.height = this.paneModel.size + 'px';}
			
			this.divElement.style.width = '100%';
			
		}
		if(this.contentDiv.id=='DHTMLSuite_paneContentwest'){
document.getElementById('westContent2').style.width=this.divElement.style.width
}
//DHTMLSuite_paneContentwest    this.contentDiv.style.width
		try{
		
			this.contentDiv.style.height = (this.divElement.clientHeight - this.tabDiv.offsetHeight - this.headerDiv.offsetHeight) + 'px';
		}catch(e){
		}

		if(!recursive){
			window.obj = this;
			setTimeout('window.obj.__setSize(true)',100);
		}

	}
	// }}}
	,
	// {{{ __setTopPosition()
	/**
	*	Set new top position for the pane
	*
	*	@param Integer newTop
	*
	*	@private
	*/
	__setTopPosition : function(newTop){
		this.divElement.style.top = newTop + 'px';
	}
	// }}}
	,
	// {{{ __setLeftPosition()
	/**
	*	Set new left position for the pane
	*
	*	@param Integer newLeft
	*
	*	@private
	*/
	__setLeftPosition : function(newLeft){
	//var westWidthTemp=paneWest.size
		this.divElement.style.left = newLeft + 'px';
	//var westDeltaWidth=paneWest.size-westWidthTemp
	//alert(westDeltaWidth)
//paneEast.size-=westDeltaWidth
//document.getElementById("eastContent").parentNode.parentNode.style.width=paneEast.size
	//document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
	//document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
	}
	// }}}
	,
	// {{{ __setWidth()
	/**
	*	Set width for the pane
	*
	*	@param Integer newWidth
	*
	*	@private
	*/
	__setWidth : function(newWidth){
	//alert("X6")


		if(this.paneModel.getPosition()=='west' || this.paneModel.getPosition()=='east')this.paneModel.setSize(newWidth);
		newWidth = newWidth + '';


		
		if(newWidth.indexOf('%')==-1)newWidth = Math.max(1,newWidth) + 'px';
		this.divElement.style.width = newWidth;



	}
	// }}}
	,
	// {{{ __setHeight()
	/**
	*	Set height for the pane
	*
	*	@param Integer newHeight
	*
	*	@private
	*/
	__setHeight : function(newHeight){
		if(this.paneModel.getPosition()=='north' || this.paneModel.getPosition()=='south')this.paneModel.setSize(newHeight);
		this.divElement.style.height = Math.max(1,newHeight) + 'px';
		this.__setSize();	// Set size of inner elements.
	}
	,
	// {{{ __showTransparentDivForResize()
	/**
	 *	Show transparent div used to cover iframes during resize 
	 *
	 *
	 * @private
	 */
	__showTransparentDivForResize : function(){
		this.divTransparentForResize.style.display = 'block';
		var ref = this.divTransparentForResize;
		ref.style.height = this.contentDiv.clientHeight + 'px';
		ref.style.width = this.contentDiv.clientWidth + 'px';

	}
	// }}}
	,
	// {{{ __hideTransparentDivForResize()
	/**
	 *	Hide transparent div used to cover iframes during resize  
	 *
	 *
	 * @private
	 */
	__hideTransparentDivForResize : function(){
		this.divTransparentForResize.style.display = 'none';
	}
	// }}}
}

/************************************************************************************************************
*	DHTML pane splitter
*
*	Created:						November, 28th, 2006
*	@class Purpose of class:		Creates a pane splitter
*
*	Css files used by this script:	pane-splitter.css
*
*	Demos of this class:			demo-pane-splitter.html
*
* 	Update log:
*
************************************************************************************************************/

/**
* @constructor
* @class Purpose of class:	Creates a pane splitter. (<a href="../../demos/demo-pane-splitter.html" target="_blank">Demo</a>)
* @version 1.0
* @author	Alf Magne Kalleland(www.dhtmlgoodies.com)
*/
var westWidthTemp=0// mesure la largeur de la pane west au déclenchement des évennements qui commendent resize voir //alert("X5")
var eastWidthTemp=0
var westDeltaWidth=0
var indiccollapse=0
var Westpos=''
var indica=0
var indicolexp=0
DHTMLSuite.paneSplitter = function(){

	var dataModel;				// An object of class DHTMLSuite.paneSplitterModel
	var panes;					// An array of DHTMLSuite.paneSplitterPane objects.
	var panesAssociative;		// An associative array of panes. used to get a quick access to the panes
	var paneContent;			// An array of DHTMLSuite.paneSplitterPaneView objects.
	var layoutCSS;				// Name/Path of css file

	var horizontalSplitterSize;	// Height of horizontal splitter
	var horizontalSplitterBorderSize;	// Height of horizontal splitter

	var verticalSplitterSize;	// 

	var paneSplitterHandles;				// Associative array of pane splitter handles
	var paneSplitterHandleOnResize;

	var resizeInProgress;					// Variable indicating if resize is in progress

	var resizeCounter;						// Internal variable used while resizing (-1 = no resize, 0 = waiting for resize)
	var currentResize;						// Which pane is currently being resized ( string, "west", "east", "north" or "south"
	var currentResize_min;
	var currentResize_max;

	var paneSizeCollapsed;					// Size of pane when it's collapsed ( the bar )
	var paneBorderLeftPlusRight;			// Sum of border left and right for panes ( needed in a calculation)

	var slideSpeed;							// Slide of pane slide
	var waitMessage;						// Ajax wait message
	var collapseExpandButtons;				// Reference to collapse and expand buttons
	var paneZIndexCounter;

	this.collapseExpandButtons = new Object();
	this.resizeCounter = -1;
	this.horizontalSplitterSize = 6;
	this.verticalSplitterSize = 6;
	this.paneBorderLeftPlusRight = 2;		// 1 pixel border at the right of panes, 1 pixel to the left
	this.slideSpeed = 10;

	this.horizontalSplitterBorderSize = 1;
	this.resizeInProgress = false;
	this.paneSplitterHandleOnResize = false;
	this.paneSizeCollapsed = 18;

	this.paneSplitterHandles = new Object();

	this.dataModel = false;		// Initial value
	this.layoutCSS = 'pane-splitter.css';
	this.waitMessage = 'Loading content - please wait';
	this.panes = new Array();
	this.panesAssociative = new Object();

	this.paneZIndexCounter = 1;

	try{
		if(!standardObjectsCreated)DHTMLSuite.createStandardObjects();
	}catch(e){
		alert('You need to include the dhtmlSuite-common.js file');
	}
	var objectIndex;			// Index of this object in the variableStorage array

	this.objectIndex = DHTMLSuite.variableStorage.arrayDSObjects.length;
	DHTMLSuite.variableStorage.arrayDSObjects[this.objectIndex] = this;
}

DHTMLSuite.paneSplitter.prototype = 
{
	// {{{ addModel()
	/**
	*	Add datasource for the pane splitter
	*
	*	@param Object newModel - Data source, object of class DHTMLSuite.paneSplitterModel
	*
	*	@public
	*/
	addModel : function(newModel){
		this.dataModel = newModel;
	}
	// }}}
	,
	// {{{ setLayoutCss()
	/**
	*	Specify name/path to a css file(default is 'pane-splitter.css')
	*
	*	@param String layoutCSS = Name(or relative path) of new css path
	*	@public
	*/
	setLayoutCss : function(layoutCSS){
		this.layoutCSS = layoutCSS;
	}
	// }}}
	,
	// {{{ setAjaxWaitMessage()
	/**
	*	Specify ajax wait message - message displayed in the pane when content is being loaded from the server.
	*
	*	@param String newWaitMessage = Wait message - plain text or HTML.
	*
	*	@public
	*/
	setAjaxWaitMessage : function(newWaitMessage){
		this.waitMessage = newWaitMessage;

	}
	// }}}
	,
	// {{{ setSizeOfPane()
	/**
	*	Set new size of pane
	*
	*	@param String panePosition = Position of pane(east,west,south or north)
	*	@param Integer newSize = New size of pane in pixels.
	*
	*	@public
	*/
	setSizeOfPane : function(panePosition,newSize){
//alert("X4")
		if(!this.panesAssociative[panePosition.toLowerCase()])return;
		if(panePosition=='east' || panePosition=='west'){

			this.panesAssociative[panePosition.toLowerCase()].__setWidth(newSize);
			

		}
		if(panePosition=='north' || panePosition=='south'){
			this.panesAssociative[panePosition.toLowerCase()].__setHeight(newSize);
		}

		this.__positionPanes();

	}
	// }}}
	,
	// {{{ setSlideSpeed()
	/**
	*	Set speed of slide animation.
	*
	*	@param Integer slideSpeed = new slide speed ( higher = faster ) - default = 10
	*
	*	@public
	*/
	setSlideSpeed : function(slideSpeed){
		this.slideSpeed = slideSpeed;
	}
	,
	// {{{ init()
	/**
	*	Initializes the script
	*
	*
	*	@public
	*/
	init : function(){
		DHTMLSuite.commonObj.loadCSS(this.layoutCSS);	// Load css.
		if(this.dataModel.collapseButtonsInTitleBars)this.paneSizeCollapsed = 25;
		this.__createPanes();	// Create the panes
		this.__positionPanes();	// Position panes
		this.__createResizeHandles();
		this.__addEvents();
		this.__initCollapsePanes();
		setTimeout("DHTMLSuite.variableStorage.arrayDSObjects[" + this.objectIndex + "].__positionPanes();",100);
		setTimeout("DHTMLSuite.variableStorage.arrayDSObjects[" + this.objectIndex + "].__positionPanes();",500);
		setTimeout("DHTMLSuite.variableStorage.arrayDSObjects[" + this.objectIndex + "].__positionPanes();",1500);
	}
	// }}}
	,

	// {{{ isUrlLoadedInPane()
	/**
	 *	This method returns true if content with a specific url exists inside a specific content container.
	 *
	 *	@param String id 		- id of content object
	 *	@param String url		- Url of file (Url to check on)
	 *
	 * @public
	 */

	isUrlLoadedInPane : function(id,url){
		var ref = this.__getPaneReferenceFromContentId(id);	// Get a reference to the pane where the content is.
		if(ref){	// Pane found
			return ref.isUrlLoadedInPane(id,url);
		}else return false;
	}
	// }}}
	,
	// {{{ loadContent()
	/**
	 *	This method loads content from server and inserts it into the pane with the given id 
	 *	If you want the content to be displayed directly, remember to call the showContent method too.
	 *
	 *	@param String id - id of content object where the element should be inserted
	 *	@param String url		- Url of file (the content of this file will be inserted into the define pane)
	 *	@param Integer refreshAfterSeconds		- Reload url after number of seconds. 0 = no refresh ( also default)
	 *	@param String onCompleteJsCode - Js code to evaluate when content has been successfully loaded(Callback) - example: "myFunction()". This string will be avaluated.
	 *
	 * @public
	 */

	loadContent : function(id,url,refreshAfterSeconds,onCompleteJsCode){
		var ref = this.__getPaneReferenceFromContentId(id);	// Get a reference to the pane where the content is.
		if(ref){	// Pane found
			ref.loadContent(id,url,refreshAfterSeconds,false,onCompleteJsCode);		// Call the loadContent method of this object. 
		}
	}
	// }}}
	,
	// {{{ reloadContent()
	/**
	 *	Reloads ajax content
	 *
	 *	@param String id - id of content object to reload.
	 *
	 * @public
	 */
	reloadContent : function(id){
		var ref = this.__getPaneReferenceFromContentId(id);	// Get a reference to the pane where the content is.
		if(ref){	// Pane found
			ref.reloadContent(id);		// Call the loadContent method of this object. 
		}
	}
	// }}}
	,
	// {{{ setRefreshAfterSeconds()
	/**
	 *	Specify a new value for when content should be reloaded. 
	 *
	 *	@param String idOfContentObject - id of content to add the value to
	 *	@param Integer refreshAfterSeconds - Refresh rate of content (0 = no refresh)
	 *
	 * @public
	 */
	setRefreshAfterSeconds : function(idOfContentObject,refreshAfterSeconds){
		var ref = this.__getPaneReferenceFromContentId(idOfContentObject);	// Get a reference to the pane where the content is.
		if(ref){	// Pane found
			ref.setRefreshAfterSeconds(idOfContentObject,refreshAfterSeconds);		// Call the loadContent method of this object. 
		}

	}
	// }}}
	,
	// {{{ setContentTabTitle()
	/**
	 *	New title of tab - i.e. the text inside the clickable tab.
	 *
	 *	@param String idOfContentObject - id of content object
	 *	@param String newTitle - New title of tab
	 *
	 * @public
	 */
	setContentTabTitle : function(idOfContentObject,newTitle){
		var ref = this.__getPaneReferenceFromContentId(idOfContentObject);	// Get a reference to the pane where the content is.
		if(ref)ref.setContentTabTitle(idOfContentObject,newTitle);

	}
	// }}}
	,
	// {{{ setContentTitle()
	/**
	 *	New title of content - i.e. the heading
	 *
	 *	@param String idOfContentObject - id of content object
	 *	@param String newTitle - New title of tab
	 *
	 * @public
	 */
	setContentTitle : function(idOfContentObject,newTitle){
		var ref = this.__getPaneReferenceFromContentId(idOfContentObject);	// Get a reference to the pane where the content is.
		if(ref)ref.setContentTitle(idOfContentObject,newTitle);

	}
	// }}}
	,
	// {{{ showContent()
	/**
	 *	Makes content with a specific id visible 
	 *
	 *	@param String id - id of content to make visible(remember to have unique id's on each of your content objects)
	 *
	 * @public
	 */
	showContent : function(id){
		var ref = this.__getPaneReferenceFromContentId(id);
		if(ref)ref.showContent(id);
	}
	// }}}
	,
	// {{{ closeAllClosableTabs()
	/**
	*	Close all closable tabs, i.e. tabs where the closable attribute is set to true.
	*
	*	@param String panePosition
	*
	*	@public
	*/
	closeAllClosableTabs : function(panePosition){
		if(this.panesAssociative[panePosition.toLowerCase()]) return this.panesAssociative[panePosition.toLowerCase()].__closeAllClosableTabs(); else return false;
	}
	// }}}
	,
	// {{{ addContent()
	/**
	*	Add content to a pane
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*	@param Object contentModel - Object of type DHTMLSuite.paneSplitterContentModel
	*	@param String onCompleteJsCode - Js code to execute when content is successfully loaded.
	*	@return Boolean Success - true if content were added successfully, false otherwise - false means that the pane don't exists or that content with this id allready has been added.
	*	@public
	*/
	addContent : function(panePosition,contentModel,onCompleteJsCode){
	//alert(panePosition+",  "+contentModel+",  "+onCompleteJsCode)
		if(this.panesAssociative[panePosition.toLowerCase()]) return this.panesAssociative[panePosition.toLowerCase()].addContent(contentModel,onCompleteJsCode); else return false;

	}
	// }}}
	,
	// {{{ getState()
	/**
	*	Get state of pane
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*	@return String state of pane - "collapsed" or "expanded".
	*	@public
	*/
	getState : function(panePosition){
		if(this.panesAssociative[panePosition.toLowerCase()]) return this.panesAssociative[panePosition.toLowerCase()].paneModel.__getState();

	}
	// }}}
	,
	// {{{ deleteContentById()
	/**
	*	Delete content from a pane by index
	*
	*	@param String id - Id of content to delete.
	*
	*	@public
	*/
	deleteContentById : function(id){
		var ref = this.__getPaneReferenceFromContentId(id);
		if(ref)ref.__deleteContentById(id);
	}
	// }}}
	,
	// {{{ deleteContentByIndex()
	/**
	*	Delete content from a pane by index
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*	@param Integer	contentIndex
	*
	*	@public
	*/
	deleteContentByIndex: function(panePosition,contentIndex){
		if(this.panesAssociative[panePosition]){//Pane exists
			this.panesAssociative[panePosition].__deleteContentByIndex(contentIndex);
		}
	}
	// }}}
	,
	// {{{ hidePane()
	/**
	*	Hide a pane
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*
	*	@public
	*/
	hidePane : function(panePosition){
		if(this.panesAssociative[panePosition] && panePosition!='center'){
			this.panesAssociative[panePosition].hidePane();				 // Call method in paneSplitterPane class
			if(this.paneSplitterHandles[panePosition])this.paneSplitterHandles[panePosition].style.display='none'; // Hide resize handle
			this.__positionPanes();										 // Reposition panes 
		}else return false;

	}
	,
	// {{{ showPane()
	/**
	*	Show a previously hidden pane
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*
	*	@public
	*/
	showPane : function(panePosition){

		if(this.panesAssociative[panePosition] && panePosition!='center'){
			this.panesAssociative[panePosition].showPane();					// Call method in paneSplitterPane class
			if(this.paneSplitterHandles[panePosition])this.paneSplitterHandles[panePosition].style.display='block';	// Show resize handle
			this.__positionPanes();											// Reposition panes
		}else return false;
	}
	// }}}
	,
	// {{{ getReferenceToMainDivElOfPane()
	/**
	*	Get reference to main div element of a pane. This can for example be useful if you're using the imageSelection class and want
	*	To restrict the area for a selection. Maybe you only want your users to start selection within the center pane, not the other panes.
	*
	*	@param String panePosition - Position of pane(west,north,center,east or south)
	*
	*	@public
	*/
	getReferenceToMainDivElOfPane : function(panePosition){
		if(this.panesAssociative[panePosition])return this.panesAssociative[panePosition].__getReferenceTomainDivEl();
		return false;
	}
	// }}}
	,
	// {{{ getIdOfCurrentlyDisplayedContent()
	/**
	* 	Returns id of the content currently being displayed - active tab.
	*
	*	@param String position - which pane. ("west","east","center","north","south")
	*	@return String id of currently displayed content (active tab).
	*
	*	@public
	*/
	getIdOfCurrentlyDisplayedContent : function(panePosition){
		if(this.panesAssociative[panePosition])return this.panesAssociative[panePosition].getIdOfCurrentlyDisplayedContent();
		return false;
	}
	// }}}
	,
	// {{{ getHtmlElIdOfCurrentlyDisplayedContent()
	/**
	* 	Returns html element id of the content currently being displayed - active tab.
	*
	*	@param String position - which pane. ("west","east","center","north","south")
	*	@return String id of currently displayed content(the HTML element) (active tab).
	*
	*	@public
	*/
	getHtmlElIdOfCurrentlyDisplayedContent : function(panePosition){
		if(this.panesAssociative[panePosition])return this.panesAssociative[panePosition].getHtmlElIdOfCurrentlyDisplayedContent();
		return false;
	}
	// }}}
	,
	// {{{ getSizeOfPaneInPixels()
	/**
	* 	Returns id of the content currently being displayed - active tab.
	*
	*	@param String position - which pane. ("west","east","center","north","south")
	*	@return Array - Assocative array representing width and height of the pane(keys in array: "width" and "height").
	*
	*	@public
	*/
	getSizeOfPaneInPixels : function(panePosition){
		if(this.panesAssociative[panePosition])return this.panesAssociative[panePosition].__getSizeOfPaneInPixels();
		return false;

	}
	// }}}
	,
	// {{{ expandPane()
	/**
	 *	Use this method when you manually want to expand a pane
	 *
	 *	@param String panePosition - Position of pane, west,east,north,south
	 *
	 * @public
	 */
	expandPane : function(panePosition){
		if(panePosition=='center')return;
		if(this.panesAssociative[panePosition])this.panesAssociative[panePosition].__expand();
		if(!this.dataModel.collapseButtonsInTitleBars)this.__toggleCollapseExpandButton(panePosition,'expand');
	}
	// }}}
	,
	// {{{ collapsePane()
	/**
	 *	Use this method when you manually want to collapse a pane
	 *
	 *	@param String panePosition - Position of pane, west,east,north,south
	 *
	 * @public
	 */
	collapsePane : function(panePosition){
		if(panePosition=='center')return;
		if(this.panesAssociative[panePosition])this.panesAssociative[panePosition].__collapse();
		if(!this.dataModel.collapseButtonsInTitleBars)this.__toggleCollapseExpandButton(panePosition,'collapse');
	}
	// }}}
	,
	// {{{ __setPaneSizeCollapsed()
	/**
	*	Automatically set size of collapsed pane ( called by a pane - the size is the offsetWidth or offsetHeight of the pane in collapsed state)
	*
	*
	*	@private
	*/
	__setPaneSizeCollapsed : function(newSize){
	
return;
		if(newSize>this.paneSizeCollapsed){
			this.paneSizeCollapsed = newSize;
		}

	}
	// }}}
	// }}}
	,
	// {{{ __createPanes()
	/**
	*	Creates the panes
	*
	*
	*	@private
	*/
	__createPanes : function(){
		var dataObjects = this.dataModel.getItems();	// An array of data source objects, i.e. panes.
		for(var no=0;no<dataObjects.length;no++){
			var index = this.panes.length;
			this.panes[index] = new DHTMLSuite.paneSplitterPane(this);
			this.panes[index].addDataSource(dataObjects[no]);
			this.panes[index].__createPane();
			this.panesAssociative[dataObjects[no].position.toLowerCase()] = this.panes[index];	// Save this pane in the associative array
		}
	}
	// }}}
	,
	// {{{ __collapseAPane()
	/**
	 *	Collapse a pane from button
	 *
	 *	@param Event e - Reference to event object, used to get a reference to the clicked butotn.
	 *	@param String panePosition - Position of pane, west,east,north,south
	 *
	 * @private
	 */
	__collapseAPane : function(e,panePosition){
		var ind = this.objectIndex;
		if(document.all) e = event;
		var src = DHTMLSuite.commonObj.getSrcElement(e);
		src.className = src.className.replace(' DHTMLSuite_collapseExpandOver','');
		this.__toggleCollapseExpandButton(panePosition,'collapse');
		if(this.panesAssociative[panePosition])this.panesAssociative[panePosition].__collapse();
		src.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__expandAPane(e,panePosition); } ;

	}
	// }}}
	,
	// {{{ __toggleCollapseExpandButton()
	/**
	 *	Toggle collapse/expand buttons
	 *
	 *	@param String panePosition - Position of pane, west,east,north,south
	 *	@param String state	- expand or collapse
	 *
	 * @private
	 */
	__toggleCollapseExpandButton : function(panePosition,state){
		var src = this.collapseExpandButtons[panePosition];
		var ind = this.objectIndex;
		if(state=='expand'){

			switch(panePosition){
				case "east":
					src.className = src.className.replace('Left','Right');
					src.parentNode.className = src.parentNode.className.replace(' DHTMLSuite_paneSplitter_vertical_noresize','');
					break;
				case "west":
					src.className = src.className.replace('Right','Left');
					src.parentNode.className = src.parentNode.className.replace(' DHTMLSuite_paneSplitter_vertical_noresize','');
					break;
				case "south":
					src.className = src.className.replace('Up','Down');
					src.parentNode.className = src.parentNode.className.replace(' DHTMLSuite_paneSplitter_horizontal_noresize','');
					break;
				case "north":
					src.className = src.className.replace('Down','Up');
					src.parentNode.className = src.parentNode.className.replace(' DHTMLSuite_paneSplitter_horizontal_noresize','');
					break;
			}
			src.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,panePosition); } ;
		}
		if(state=='collapse'){

			switch(panePosition){
				case "west":
					src.className = src.className.replace('Left','Right');
					src.parentNode.className = src.parentNode.className + ' DHTMLSuite_paneSplitter_vertical_noresize';
					break;
				case "east":
					src.className = src.className.replace('Right','Left');
					src.parentNode.className = src.parentNode.className + ' DHTMLSuite_paneSplitter_vertical_noresize';
					break;
				case "north":
					src.className = src.className.replace('Up','Down');
					src.parentNode.className = src.parentNode.className + ' DHTMLSuite_paneSplitter_horizontal_noresize';
					break;
				case "south":
					src.className = src.className.replace('Down','Up');
					src.parentNode.className = src.parentNode.className + ' DHTMLSuite_paneSplitter_horizontal_noresize';
					break;
			}
			src.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__expandAPane(e,panePosition); } ;

		}

	}
	// }}}
	,
	// {{{ __expandAPane()
	/**
	 *	Expand a pane by clicking on a button
	 *
	 *	@param Event e - Event object - used to find reference to clicked button
	 *	@param String panePosition - Position of pane, west,east,north,south
	 *
	 * @private
	 */
	__expandAPane : function(e,panePosition){
	//alert("lalalal")
		var ind = this.objectIndex;
		if(document.all) e = event;
		var src = DHTMLSuite.commonObj.getSrcElement(e);
		src.className = src.className.replace(' DHTMLSuite_collapseExpandOver','');
		this.__toggleCollapseExpandButton(panePosition,'expand');
		if(this.panesAssociative[panePosition])this.panesAssociative[panePosition].__expand();
		src.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,panePosition); } ;

	}
	// }}}
	,
	// {{{ __createResizeHandles()
	/**
	 *	Positions the resize handles correctly
	 *
	 *
	 * @private
	 */
	__createResizeHandles : function(){
		var ind = this.objectIndex;
		// Create splitter for the north pane
		if(this.panesAssociative['north'] && (this.panesAssociative['north'].paneModel.resizable || (this.panesAssociative['north'].paneModel.collapsable && !this.dataModel.collapseButtonsInTitleBars))){
			this.paneSplitterHandles['north'] = document.createElement('DIV');
			var obj = this.paneSplitterHandles['north'];
			obj.className = 'DHTMLSuite_paneSplitter_horizontal';
			obj.innerHTML = '<span></span>';
			obj.style.position = 'absolute';
			
			obj.style.height =this.horizontalSplitterSize + 'px';
			obj.style.width = '100%';
			obj.style.zIndex = 10000;
			obj.setAttribute('resizeHandle','1');
			DHTMLSuite.commonObj.addEvent(obj,'mousedown',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__initResizePane(e,'north'); });
			document.body.appendChild(obj);

			if(!this.dataModel.collapseButtonsInTitleBars){

				var subElement = document.createElement('DIV');
				subElement.className = 'DHTMLSuite_resizeButtonUp';
				subElement.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,'north'); } ;
				subElement.onmouseover = this.__mouseoverCollapseButton;
				subElement.onmouseout = this.__mouseoutCollapseButton;
				subElement.innerHTML = '<span></span>';
				DHTMLSuite.commonObj.__addEventEl(subElement);
				obj.appendChild(subElement);
				this.collapseExpandButtons['north'] = subElement;

				if(this.panesAssociative['north'].paneModel.state=='collapsed')this.__toggleCollapseExpandButton('north','collapse');

				if(!this.panesAssociative['north'].paneModel.collapsable){
					subElement.style.display='none';
					obj.className = obj.className + ' DHTMLSuite_paneSplitter_horizontal_expInTitle';
				}
			}else{
				obj.className = obj.className + ' DHTMLSuite_paneSplitter_horizontal_expInTitle';
			}
			if(!this.panesAssociative['north'].paneModel.resizable)obj.className = obj.className + ' DHTMLSuite_paneSplitter_horizontal_noresize';
		}
		// Create splitter for the west pane
		if(this.panesAssociative['west']){
			this.paneSplitterHandles['west'] = document.createElement('DIV');
			var obj = this.paneSplitterHandles['west'];
			obj.innerHTML = '<span></span>';
			obj.className = 'DHTMLSuite_paneSplitter_vertical';
			obj.style.position = 'absolute';
			obj.style.width = this.verticalSplitterSize + 'px';
			obj.style.zIndex = 11000;
			obj.setAttribute('resizeHandle','1');
			DHTMLSuite.commonObj.addEvent(obj,'mousedown',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__initResizePane(e,'west'); });
			document.body.appendChild(obj);

			if(!this.dataModel.collapseButtonsInTitleBars){
				var subElement = document.createElement('DIV');
				subElement.className = 'DHTMLSuite_resizeButtonLeft';
				subElement.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,'west'); } ;
				DHTMLSuite.commonObj.__addEventEl(subElement);
				subElement.onmouseover = this.__mouseoverCollapseButton;
				subElement.onmouseout = this.__mouseoutCollapseButton;
				subElement.innerHTML = '<span></span>';
				obj.appendChild(subElement);
				this.collapseExpandButtons['west'] = subElement;
				if(this.panesAssociative['west'].paneModel.state=='collapsed')this.__toggleCollapseExpandButton('west','collapse');
				if(!this.panesAssociative['west'].paneModel.collapsable){
					subElement.style.display='none';
					obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_expInTitle';
				}
			}else{
				obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_expInTitle';
			}

			if(!this.panesAssociative['west'].paneModel.resizable){
				obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_noresize';
			}
		}

		// Create splitter for the east pane
		if(this.panesAssociative['east']){
			this.paneSplitterHandles['east'] = document.createElement('DIV');
			var obj = this.paneSplitterHandles['east'];
			obj.innerHTML = '<span></span>';
			obj.className = 'DHTMLSuite_paneSplitter_vertical';
			obj.style.position = 'absolute';
			obj.style.width = this.verticalSplitterSize + 'px';
			obj.style.zIndex = 11000;
			obj.setAttribute('resizeHandle','1');
			DHTMLSuite.commonObj.addEvent(obj,'mousedown',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__initResizePane(e,'east'); });
			document.body.appendChild(obj);

			if(!this.dataModel.collapseButtonsInTitleBars){
				var subElement = document.createElement('DIV');
				subElement.className = 'DHTMLSuite_resizeButtonRight';
				subElement.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,'east'); } ;
				subElement.onmouseover = this.__mouseoverCollapseButton;
				subElement.onmouseout = this.__mouseoutCollapseButton;
				subElement.innerHTML = '<span></span>';
				DHTMLSuite.commonObj.__addEventEl(subElement);
				obj.appendChild(subElement);
				this.collapseExpandButtons['east'] = subElement;
				if(this.panesAssociative['east'].paneModel.state=='collapsed')this.__toggleCollapseExpandButton('east','collapse');
				if(!this.panesAssociative['east'].paneModel.collapsable){
					subElement.style.display='none';
					obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_expInTitle';
				}
			}else{
				obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_expInTitle';
			}
			if(!this.panesAssociative['east'].paneModel.resizable)obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_noresize';
		}

		// Create splitter for the south pane
		if(this.panesAssociative['south'] && (this.panesAssociative['south'].paneModel.resizable || (this.panesAssociative['south'].paneModel.collapsable && !this.dataModel.collapseButtonsInTitleBars))){
			this.paneSplitterHandles['south'] = document.createElement('DIV');
			var obj = this.paneSplitterHandles['south'];
			obj.innerHTML = '<span></span>';
			
			obj.className = 'DHTMLSuite_paneSplitter_horizontal';
			obj.style.position = 'absolute';
			obj.style.height = this.horizontalSplitterSize + 'px';
			obj.style.width = '100%';
			obj.setAttribute('resizeHandle','1');
			obj.style.zIndex = 10000;
			DHTMLSuite.commonObj.addEvent(obj,'mousedown',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__initResizePane(e,'south'); });
			document.body.appendChild(obj);

			if(!this.dataModel.collapseButtonsInTitleBars){
				var subElement = document.createElement('DIV');
				subElement.style.position='absolute';
				subElement.className = 'DHTMLSuite_resizeButtonDown';
				subElement.onclick = function(e) { return DHTMLSuite.variableStorage.arrayDSObjects[ind].__collapseAPane(e,'south'); } ;
				subElement.onmouseover = this.__mouseoverCollapseButton;
				subElement.onmouseout = this.__mouseoutCollapseButton;
				subElement.innerHTML = '<span></span>';
				DHTMLSuite.commonObj.__addEventEl(subElement);
				obj.appendChild(subElement);
				this.collapseExpandButtons['south'] = subElement;
				if(this.panesAssociative['south'].paneModel.state=='collapsed')this.__toggleCollapseExpandButton('south','collapse');
				if(!this.panesAssociative['south'].paneModel.collapsable){
					subElement.style.display='none';
					obj.className = obj.className + ' DHTMLSuite_paneSplitter_horizontal_expInTitle';
				}
			}else{
				obj.className = obj.className + ' DHTMLSuite_paneSplitter_horizontal_expInTitle';
			}
			if(!this.panesAssociative['south'].paneModel.resizable)obj.className = obj.className + ' DHTMLSuite_paneSplitter_vertical_noresize';
		}

		// Create onresize handle
		this.paneSplitterHandleOnResize = document.createElement('DIV');
		var obj = this.paneSplitterHandleOnResize;
		obj.innerHTML = '<span></span>';
		obj.className = 'DHTMLSuite_paneSplitter_onResize';
		obj.style.position = 'absolute';
		obj.style.zIndex = 955000;
		obj.style.display='none';
		document.body.appendChild(obj);

	}
	// }}}
	,
	// {{{ __mouseoverCollapseButton()
	/**
	 *	Mouse over - collapse button
	 *
	 *
	 * @private
	 */
	__mouseoverCollapseButton : function(){
		this.className = this.className + ' DHTMLSuite_collapseExpandOver';
	}
	// }}}
	,
	// {{{ __mouseoutCollapseButton()
	/**
	 *	Mouse out - collapse butotn
	 *
	 *
	 * @private
	 */
	__mouseoutCollapseButton : function(){
		this.className = this.className.replace(' DHTMLSuite_collapseExpandOver','');
	}
	// }}}
	,
	// {{{ __getPaneReferenceFromContentId()
	/**
	 *	Returns a reference to a pane from content id
	 *
	 *	@param String id - id of content
	 *
	 * @private
	 */
	__getPaneReferenceFromContentId : function(id){
		for(var no=0;no<this.panes.length;no++){
			var contents = this.panes[no].paneModel.getContents();
			for(var no2=0;no2<contents.length;no2++){
				if(contents[no2].id==id)return this.panes[no];
			}
		}
		return false;

	}
	// }}}
	,
	// {{{ __initCollapsePanes()
	/**
	 *	Initially collapse panes
	 *
	 *
	 * @private
	 */
	__initCollapsePanes : function(){
		for(var no=0;no<this.panes.length;no++){	/* Loop through panes */
			if(this.panes[no].paneModel.state=='collapsed'){	// State set to collapsed ?
				this.panes[no].__collapse();
			}
		}
	}
	// }}}
	,
	// {{{ __getMinimumPos()
	/**
	 *	Returns mininum pos in pixels
	 *
	 *	@param String pos ("west","north","east","south")
	 *
	 * @private
	 */
	__getMinimumPos : function(pos){
		var browserWidth = DHTMLSuite.clientInfoObj.getBrowserWidth();
		var browserHeight = DHTMLSuite.clientInfoObj.getBrowserHeight();

		if(pos=='west' || pos == 'north'){
			return 	this.panesAssociative[pos].paneModel.minSize;
		}else{
			if(pos=='east')return 	browserWidth - this.panesAssociative[pos].paneModel.maxSize;
			if(pos=='south')return 	browserHeight - this.panesAssociative[pos].paneModel.maxSize;
		}
	}
	// }}}
	,
	// {{{ __getMaximumPos()
	/**
	 *	Returns maximum pos in pixels
	 *
	 *	@param String pos ("west","north","east","south")
	 *
	 * @private
	 */
	__getMaximumPos : function(pos){
		var browserWidth = DHTMLSuite.clientInfoObj.getBrowserWidth();
		var browserHeight = DHTMLSuite.clientInfoObj.getBrowserHeight();

		if(pos=='west' || pos == 'north'){
			return 	this.panesAssociative[pos].paneModel.maxSize;
		}else{
			if(pos=='east')return 	browserWidth - this.panesAssociative[pos].paneModel.minSize;
			if(pos=='south')return 	browserHeight - this.panesAssociative[pos].paneModel.minSize;
		}
	}
	// }}}
	,
	// {{{ __initResizePane()
	/**
	 *	Mouse down on resize handle.
	 *
	 *	@param String pos ("west","north","east","south")
	 *
	 * @private
	 */
	__initResizePane : function(e,pos){
	
		if(document.all)e = event;
		var obj = DHTMLSuite.commonObj.getSrcElement(e);	// Reference to element triggering the event.
		var attr = obj.getAttribute('resizeHandle');
		if(!attr)attr = obj.resizeHandle;
		if(!attr)return;
		if(obj.className.indexOf('noresize')>=0)return;
		this.currentResize = pos;
		this.currentResize_min = this.__getMinimumPos(pos);
		this.currentResize_max = this.__getMaximumPos(pos);

		this.paneSplitterHandleOnResize.style.left = this.paneSplitterHandles[pos].style.left; 
		this.paneSplitterHandleOnResize.style.top = this.paneSplitterHandles[pos].style.top; 
		this.paneSplitterHandleOnResize.style.width = this.paneSplitterHandles[pos].offsetWidth + 'px'; 
		this.paneSplitterHandleOnResize.style.height = this.paneSplitterHandles[pos].offsetHeight + 'px'; 
		this.paneSplitterHandleOnResize.style.display='block';
		this.resizeCounter = 0;
		DHTMLSuite.commonObj.__setTextSelOk(false);
		this.__timerResizePane(pos);

	}
	// }}}
	,
	// {{{ __timerResizePane()
	/**
	 *	A small delay between mouse down and resize start
	 *
	 *	@param String pos - which pane to resize.
	 *
	 * @private
	 */
	__timerResizePane : function(pos){
		if(this.resizeCounter>=0 && this.resizeCounter<5){
			this.resizeCounter++;
			setTimeout('DHTMLSuite.variableStorage.arrayDSObjects[' + this.objectIndex + '].__timerResizePane()',2);
			return;
		}
		if(this.resizeCounter==5){
			this.__showTransparentDivForResize('show');
		}
	}
	// }}}
	,
	// {{{ __showTransparentDivForResize()
	/**
	 *	Show transparent divs used to cover iframes during resize
	 *
	 *	This is a solution to the problem where you're unable to drag the resize handle over iframes.
	 *
	 * @private
	 */
	__showTransparentDivForResize : function(){
		if(DHTMLSuite.clientInfoObj.isOpera)return;	// Opera doesn't support transparent div the same way as FF and IE.
		if(this.panesAssociative['west'])this.panesAssociative['west'].__showTransparentDivForResize();
		if(this.panesAssociative['south'])this.panesAssociative['south'].__showTransparentDivForResize();
		if(this.panesAssociative['east'])this.panesAssociative['east'].__showTransparentDivForResize();
		if(this.panesAssociative['north'])this.panesAssociative['north'].__showTransparentDivForResize();
		if(this.panesAssociative['center'])this.panesAssociative['center'].__showTransparentDivForResize();

	}
	// }}}
	,
	// {{{ __hideTransparentDivForResize()
	/**
	 *	Hide transparent divs used to cover iframes during resize
	 *
	 *
	 * @private
	 */
	__hideTransparentDivForResize : function(){
		if(this.panesAssociative['west'])this.panesAssociative['west'].__hideTransparentDivForResize();
		if(this.panesAssociative['south'])this.panesAssociative['south'].__hideTransparentDivForResize();
		if(this.panesAssociative['east'])this.panesAssociative['east'].__hideTransparentDivForResize();
		if(this.panesAssociative['north'])this.panesAssociative['north'].__hideTransparentDivForResize();
		if(this.panesAssociative['center'])this.panesAssociative['center'].__hideTransparentDivForResize();

	}
	// }}}
	,
	// {{{ __resizePane()
	/**
	 *	Position the resize handle 
	 *
	 *
	 * @private
	 */
	__resizePane : function(e){
	//alert("X3")
		if(document.all)e = event;	// Get reference to event object.

		if(DHTMLSuite.clientInfoObj.isMSIE && e.button!=1)this.__endResize();

		if(this.resizeCounter==5){	/* Resize in progress */
			if(this.currentResize=='west' || this.currentResize=='east'){
				var leftPos = e.clientX;
				if(leftPos<this.currentResize_min)leftPos = this.currentResize_min;
				if(leftPos>this.currentResize_max)leftPos = this.currentResize_max;
				this.paneSplitterHandleOnResize.style.left = leftPos + 'px';
			}else{
				var topPos = e.clientY;
				if(topPos<this.currentResize_min)topPos = this.currentResize_min;
				if(topPos>this.currentResize_max)topPos = this.currentResize_max;
				this.paneSplitterHandleOnResize.style.top = topPos + 'px';
			}
		}
	}
	// }}}
	,
	// {{{ __endResize()
	/**
	 *	End resizing	(mouse up event )
	 *
	 *
	 * @private
	 */
	__endResize : function(){
westWidthTemp=paneWest.size
eastWidthTemp=paneEast.size	
westDeltaWidth=0

		if(this.resizeCounter==5){	// Resize completed 
			this.__hideTransparentDivForResize();
			var browserWidth = DHTMLSuite.clientInfoObj.getBrowserWidth();
			var browserHeight = DHTMLSuite.clientInfoObj.getBrowserHeight();
			var obj = this.panesAssociative[this.currentResize];
			
			//alert( document.getElementsByClassName(this.paneSplitterHandleOnResize.getAttribute("class"))[0].getAttribute("style"))

			switch(this.currentResize){
				case "west": 

			


			obj.__setWidth(this.paneSplitterHandleOnResize.style.left.replace('px','')/1-2);

//  ---------------MODIF HERVE
westDeltaWidth=paneWest.size-westWidthTemp
paneEast.size=eastWidthTemp-westDeltaWidth


document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
if(EDit==1){top.frames.Num0txt.document.getElementsByTagName('iframe')[0].contentWindow.width=(parseInt(document.getElementById("Num0txt").width)-45)+"px"}
sizeCenterPane=Centxsize	

//this.__positionPanes()
// ------------------------------------------

					break;
				case "north":
					obj.__setHeight(this.paneSplitterHandleOnResize.style.top.replace('px','')/1);
					break;
				case "east":
					obj.__setWidth(browserWidth - this.paneSplitterHandleOnResize.style.left.replace('px','')/1-8);

westDeltaWidth=paneWest.size-westWidthTemp
paneEast.size=eastWidthTemp-westDeltaWidth

//alert(westDeltaWidth)
document.getElementById("Num0txt").width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-20)+"px";
if(EDit==1){top.frames.Num0txt.document.getElementsByTagName('iframe')[0].contentWindow.width=(parseInt(document.getElementById("Num0txt").width)-45)+"px"}
sizeCenterPane=Centxsize	

					
					
					break;
				case "south":
					obj.__setHeight(browserHeight - this.paneSplitterHandleOnResize.style.top.replace('px','')/1-7);
					//obj.__setHeight(300)
					break;
			}
			
			this.__positionPanes();
			obj.__executeResizeCallBack();

			this.paneSplitterHandleOnResize.style.display='none';
			this.resizeCounter = -1;
			DHTMLSuite.commonObj.__setTextSelOk(true);
			

		}
//alert("xxxxx detla="+westDeltaWidth)
//if(westDeltaWidth==0){}else{this.__positionPanes()}
	}
	// }}}
	,
	// {{{ __hideResizeHandle()
	/**
	 *	Hide resize handle.
	 *
	 *
	 * @private
	 */
	__hideResizeHandle : function(pos){
		if(!this.paneSplitterHandles[pos])return;
		switch(pos){
			case "east":
			case "west":
				this.paneSplitterHandles[pos].className = this.paneSplitterHandles[pos].className + ' DHTMLSuite_paneSplitter_vertical_noresize';
				break;
			case "north":
			case "south":
				this.paneSplitterHandles[pos].className = this.paneSplitterHandles[pos].className + ' DHTMLSuite_paneSplitter_horizontal_noresize';
		}
	}
	// }}}
	,
	// {{{ __showResizeHandle()
	/**
	 *	Make resize handle visible
	 *
	 *
	 * @private
	 */
	__showResizeHandle : function(pos){
		if(!this.paneSplitterHandles[pos])return;
		switch(pos){
			case "east":
			case "west":
				this.paneSplitterHandles[pos].className = this.paneSplitterHandles[pos].className.replace(' DHTMLSuite_paneSplitter_vertical_noresize','');
				break;
			case "north":
			case "south":
				this.paneSplitterHandles[pos].className = this.paneSplitterHandles[pos].className.replace(' DHTMLSuite_paneSplitter_horizontal_noresize','');
		}

	}
	// }}}
	,
	// {{{ __positionResizeHandles()
	/**
	 *	Positions the resize handles correctly
	 *	This method is called by the __positionPanes method. 
	 *
	 *
	 * @private
	 */
	__positionResizeHandles : function(){
	//alert("ici")
		if(this.paneSplitterHandles['north']){	// Position north splitter handle
			if(this.panesAssociative['north'].paneModel.state=='expanded'){
				this.paneSplitterHandles['north'].style.top = this.panesAssociative['north'].divElement.style.height.replace('px','')  + 'px';
			}else{
				this.paneSplitterHandles['north'].style.top = this.paneSizeCollapsed  + 'px';
			}
		}
		var heightHandler = this.panesAssociative['center'].divElement.offsetHeight+1;	// Initial height
		var topPos=0;
		if(this.panesAssociative['center'])topPos +=this.panesAssociative['center'].divElement.style.top.replace('px','')/1;

		if(this.paneSplitterHandles['west']){
			if(this.paneSplitterHandles['east'])heightHandler+=this.horizontalSplitterBorderSize/2;
			if(this.panesAssociative['west'].paneModel.state=='expanded'){
			
				this.paneSplitterHandles['west'].style.left = this.panesAssociative['west'].divElement.offsetWidth + 'px';
			}else{
				this.paneSplitterHandles['west'].style.left = this.paneSizeCollapsed + 'px';

			}
			this.paneSplitterHandles['west'].style.height = heightHandler + 'px';
			this.paneSplitterHandles['west'].style.top = topPos + 'px';
		}
		if(this.paneSplitterHandles['east']){
			var leftPos = this.panesAssociative['center'].divElement.style.left.replace('px','')/1 + this.panesAssociative['center'].divElement.offsetWidth;
			this.paneSplitterHandles['east'].style.left = leftPos + 'px';
			this.paneSplitterHandles['east'].style.height = heightHandler + 'px';
			this.paneSplitterHandles['east'].style.top = topPos + 'px';
		}
		if(this.paneSplitterHandles['south']){
			var topPos = this.panesAssociative['south'].divElement.style.top.replace('px','')/1;
			topPos = topPos - this.horizontalSplitterSize - this.horizontalSplitterBorderSize;
			this.paneSplitterHandles['south'].style.top = topPos + 'px';
		}
		this.resizeInProgress = false;

	}
	// }}}
	,
	// {{{ __positionPanes()
	/**
	 *	Positions the panes correctly
	 *
	 *
	 * @private
	 */
	__positionPanes : function(){
	//alert("icilawwwwww")
	

	
		if(this.resizeInProgress)return;
		var ind = this.objectIndex;
	
		this.resizeInProgress = true;
		var browserWidth = DHTMLSuite.clientInfoObj.getBrowserWidth();
		var browserHeight = DHTMLSuite.clientInfoObj.getBrowserHeight();

		// Position north pane
		var posTopMiddlePanes = 0;
		if(this.panesAssociative['north'] && this.panesAssociative['north'].paneModel.visible){
			if(this.panesAssociative['north'].paneModel.state=='expanded'){
				posTopMiddlePanes = this.panesAssociative['north'].divElement.offsetHeight;

				this.panesAssociative['north'].__setHeight(this.panesAssociative['north'].divElement.offsetHeight);
			}else{
				posTopMiddlePanes+=this.paneSizeCollapsed;
			}
			if(this.paneSplitterHandles['north'])posTopMiddlePanes+=(this.horizontalSplitterSize + this.horizontalSplitterBorderSize);
		}

		// Set top position of center,west and east pa
		if(this.panesAssociative['center'])this.panesAssociative['center'].__setTopPosition(posTopMiddlePanes);
		if(this.panesAssociative['west'])this.panesAssociative['west'].__setTopPosition(posTopMiddlePanes);
		if(this.panesAssociative['east'])this.panesAssociative['east'].__setTopPosition(posTopMiddlePanes);

		if(this.panesAssociative['west'])this.panesAssociative['west'].divElCollapsed.style.top = posTopMiddlePanes + 'px';
		if(this.panesAssociative['east'])this.panesAssociative['east'].divElCollapsed.style.top = posTopMiddlePanes + 'px';

		// Position center pane
		var posLeftCenterPane = 0;
		if(this.panesAssociative['west']){
			if(this.panesAssociative['west'].paneModel.state=='expanded'){	// West panel is expanded.
				posLeftCenterPane = this.panesAssociative['west'].divElement.offsetWidth;
				this.panesAssociative['west'].__setLeftPosition(0);

			}else{	// West panel is not expanded.
				posLeftCenterPane+=this.paneSizeCollapsed  ;
			}
			posLeftCenterPane+=(this.verticalSplitterSize);
		}

		this.panesAssociative['center'].__setLeftPosition(posLeftCenterPane);

		// Set size of center pane
		var sizeCenterPane = browserWidth;
		if(this.panesAssociative['west'] && this.panesAssociative['west'].paneModel.visible){	// Center pane exists and is visible - decrement width of center pane
			if(this.panesAssociative['west'].paneModel.state=='expanded')
				{sizeCenterPane -= this.panesAssociative['west'].divElement.offsetWidth;
				
				
				
				
				}
			else
			{
				sizeCenterPane -= this.paneSizeCollapsed;
				}
				
		}

		if(this.panesAssociative['east'] && this.panesAssociative['east'].paneModel.visible){	// East pane exists and is visible - decrement width of center pane
			 if(this.panesAssociative['east'].paneModel.state=='expanded')
			 	sizeCenterPane -= this.panesAssociative['east'].divElement.offsetWidth;
				
			 else{
			 	sizeCenterPane -= this.paneSizeCollapsed;
				
			 	if(DHTMLSuite.clientInfoObj.isOldMSIE)sizeCenterPane-=4;
			 } 
		}
		
		sizeCenterPane-=this.paneBorderLeftPlusRight;
		if(this.paneSplitterHandles['west'])sizeCenterPane-=(this.verticalSplitterSize);
		if(this.paneSplitterHandles['east'])sizeCenterPane-=(this.verticalSplitterSize);
		
//-----------------------------------------------MODIF HERVE
if(indicolexp!=0){

sizeCenterPane=Centxsize
}

if(this.currentResize=="east"){
sizeCenterPane-=westDeltaWidth
}else{		
sizeCenterPane=Centxsize//Centxsize est définie dans A0 encaps.html

}

	
	this.panesAssociative['center'].__setWidth(sizeCenterPane);
	//modif SOUTH herve
	this.panesAssociative['south'].__setHeight(Ssize);
	//fin de modif SOUTH herv
		this.verticalSplitterSize=10

		// Position east pane
		var posEastPane = posLeftCenterPane + sizeCenterPane
		//alert(posEastPane)
		
		
		if(this.paneSplitterHandles['east']){posEastPane+=(this.verticalSplitterSize);};
		if(this.panesAssociative['east']){
			if(this.panesAssociative['east'].paneModel.state=='expanded')this.panesAssociative['east'].__setLeftPosition(posEastPane);
			this.panesAssociative['east'].divElCollapsed.style.left = '';
			this.panesAssociative['east'].divElCollapsed.style.right = '0px';


		}
		//-----------------------------------------------MODIF HERVE			
//if(this.currentResize=="east"){}else{

document.getElementById("Num0txt").width=window.innerWidth-posEastPane-10-10//(parseInt(document.getElementById("eastContent").parentNode.parentNode.style.width)-10)+"px";
document.getElementById("selectcomment").style.width=(window.innerWidth-posEastPane-15-10)+"px"

if(EDit==1){top.frames.Num0txt.document.getElementsByTagName("iframe")[0].style.width=(parseInt(document.getElementById("Num0txt").width)-45)+'px'}

document.getElementById("eastContent").style.width=window.innerWidth-posEastPane
paneEast.size=window.innerWidth-posEastPane
//alert(paneWest.size)
if(document.getElementById("westContent").style.width=="0"){
//alert("lalal dans dom pnae splitter application")
document.getElementById("westContent").style.display="none"
}

//}

		// Set height of middle panes
		var heightMiddleFrames = window.innerHeight//400//browserHeight;
		if(this.panesAssociative['north'] && this.panesAssociative['north'].paneModel.visible){
			if(this.panesAssociative['north'].paneModel.state=='expanded'){
				heightMiddleFrames-= this.panesAssociative['north'].divElement.offsetHeight;

			}else
				heightMiddleFrames-= this.paneSizeCollapsed;
			if(this.paneSplitterHandles['north'])heightMiddleFrames-=(this.horizontalSplitterSize + this.horizontalSplitterBorderSize);

		}
		if(this.panesAssociative['south'] && this.panesAssociative['south'].paneModel.visible){
			if(this.panesAssociative['south'].paneModel.state=='expanded'){
				heightMiddleFrames-=this.panesAssociative['south'].divElement.offsetHeight;
			}else
			//modif herve pane south
				heightMiddleFrames-=Ssize+this.paneSizeCollapsed-18;
				//heightMiddleFrames-=this.paneSizeCollapsed; --------------------> ORIGINAL
			if(this.paneSplitterHandles['south'])heightMiddleFrames-=(this.horizontalSplitterSize + this.horizontalSplitterBorderSize);
		}

		if(this.panesAssociative['center'])this.panesAssociative['center'].__setHeight(heightMiddleFrames);
		if(this.panesAssociative['west'])this.panesAssociative['west'].__setHeight(heightMiddleFrames);
		if(this.panesAssociative['east'])this.panesAssociative['east'].__setHeight(heightMiddleFrames);

		// Position south pane
		var posSouth = 0;
		if(this.panesAssociative['north']){	/* Step 1 - get height of north pane */
			if(this.panesAssociative['north'].paneModel.state=='expanded'){
				posSouth = this.panesAssociative['north'].divElement.offsetHeight;
			}else
				posSouth = this.paneSizeCollapsed;
		}
//alert(heightMiddleFrames)
		posSouth += heightMiddleFrames;

		if(this.paneSplitterHandles['south']){
			posSouth+=(this.horizontalSplitterSize + this.horizontalSplitterBorderSize);
		}
		if(this.paneSplitterHandles['north']){
			posSouth+=(this.horizontalSplitterSize + this.horizontalSplitterBorderSize);
		}

		if(this.panesAssociative['south']){
			this.panesAssociative['south'].__setTopPosition(posSouth);
			this.panesAssociative['south'].divElCollapsed.style.top = posSouth + 'px';
			this.panesAssociative['south'].__setWidth('100%');
		}
		try{
			if(this.panesAssociative['west']){
				this.panesAssociative['west'].divElCollapsed.style.height = (heightMiddleFrames) + 'px';
				this.panesAssociative['west'].divElCollapsedInner.style.height = (heightMiddleFrames -1) + 'px';
			}
		}catch(e){

		}
		if(this.panesAssociative['east']){
			try{
				this.panesAssociative['east'].divElCollapsed.style.height = heightMiddleFrames + 'px';
				this.panesAssociative['east'].divElCollapsedInner.style.height = (heightMiddleFrames - 1) + 'px';
			}catch(e){
			}
		}
		if(this.panesAssociative['south']){
			this.panesAssociative['south'].divElCollapsed.style.width = browserWidth + 'px';

			if(this.panesAssociative['south'].paneModel.state=='collapsed' && this.panesAssociative['south'].divElCollapsed.offsetHeight){	// Increasing the size of the southern pane

				var rest = browserHeight -  this.panesAssociative['south'].divElCollapsed.style.top.replace('px','')/1 - this.panesAssociative['south'].divElCollapsed.offsetHeight;

				if(rest>0)this.panesAssociative['south'].divElCollapsed.style.height = (this.panesAssociative['south'].divElCollapsed.offsetHeight + rest) + 'px';
			}

		}

		if(this.panesAssociative['north']){
			this.panesAssociative['north'].divElCollapsed.style.width = browserWidth + 'px';
		}

		this.__positionResizeHandles();
		setTimeout('DHTMLSuite.variableStorage.arrayDSObjects[' + ind + '].__positionResizeHandles()',50);	// To get the tabs positioned correctly.
if(indicolexp!=0){

indicolexp=0
}
	}
	// }}}
	,
	// {{{ __autoSlideInPanes()
	/**
	 *	Automatically slide in panes .
	 *
	 *
	 * @private
	 */
	__autoSlideInPanes : function(e){
		if(document.all)e = event;
		if(this.panesAssociative['south'])this.panesAssociative['south'].__autoSlideInPane(e);
		if(this.panesAssociative['west'])this.panesAssociative['west'].__autoSlideInPane(e);
		if(this.panesAssociative['north'])this.panesAssociative['north'].__autoSlideInPane(e);
		if(this.panesAssociative['east'])this.panesAssociative['east'].__autoSlideInPane(e);

	}
	// }}}
	,
	// {{{ __addEvents()
	/**
	 *	Add basic events for the paneSplitter widget
	 *
	 *
	 * @private
	 */
	__addEvents : function(){
	//alert("X2")
		var ind = this.objectIndex;
		DHTMLSuite.commonObj.addEvent(window,'resize',function() { DHTMLSuite.variableStorage.arrayDSObjects[ind].__positionPanes(); });
		DHTMLSuite.commonObj.addEvent(document.documentElement,'mouseup',function() { DHTMLSuite.variableStorage.arrayDSObjects[ind].__endResize(); });
		DHTMLSuite.commonObj.addEvent(document.documentElement,'mousemove',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__resizePane(e); });
		DHTMLSuite.commonObj.addEvent(document.documentElement,'click',function(e) { DHTMLSuite.variableStorage.arrayDSObjects[ind].__autoSlideInPanes(e); });
		document.documentElement.onselectstart = function() { return DHTMLSuite.commonObj.__isTextSelOk(); };
		DHTMLSuite.commonObj.__addEventEl(window);
	}
}


