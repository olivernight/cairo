	//var rememberPositionedInCookie = true;
	//var rememberPosition_cookieName = 'demov2';
		function Oglt(o){
	
	onglet=o+1
	}
var onglet3=0
	if(onglet3==0){var visonglet="opacity:0"}else{var visonglet=''}
document.write('<div id="box2" class="dragableElementXxxxxx" style="position:relative; left:5px; top:-25px;'+visonglet+'"><span class="texte">Onglets </span><span class="texte" style="position:relative;left:450px"><big><big><b id="redgrand" onclick="reduit()">^</b></big></big></span></div><div id="box3"  style="position:absolute; left:5px; top:15px;"><div id="menuaide"></div></div>')
var panes
//liste des tabs
//var liste=Array('General','charger les fichiers','histogrammes','Diag. Triangulaire','Diag. des fleches')
var Wi='480'
var Hi='470'
var rep='MENUAIDE/'
var topX=window.location.href
topX=topX.indexOf("MODIF",0)
if(topX>0){
rep=''
}
function reduit(){
if(red==0){
document.getElementById("menuaide").innerHTML=""
document.getElementById("redgrand").innerHTML="^"
red=1
}else{
cadretab()
document.getElementById("redgrand").innerHTML="-"
generecadrespanes()
attribueContenuTab(Wi,Hi)
genetabView(Wi,Hi)
red=0
}
}


function cadretab(){
// définit le cadre des tabs
panes=""
panes+="<div id='DHTMLSuite_tabView1' >"
for(i=1;i<=liste.length;i++){
panes+="<div id='p"+i+"' class='DHTMLSuite_aTab'></div>"
}
panes+="</div>"
}

function generecadrespanes(){
//écrit le cadre des tabs
document.getElementById("menuaide").innerHTML=panes
}

function attribueContenuTab(a,b){

for(i=1;i<=liste.length;i++){

document.getElementById("p"+i).innerHTML="<iframe id='f"+i+"' src='"+rep+"filesaide/"+liste[i-1]+"' width="+a+"  height="+(b-22)+" frameborder=0></iframe>"
}

}
function genetabView(a,b){
//générateur du tab-view
var tabViewObj = new DHTMLSuite.tabView();
tabViewObj.setParentId('DHTMLSuite_tabView1');
tabViewObj.setTabTitles(liste);
tabViewObj.setCloseButtons(Array(false,false,false,false));
tabViewObj.setIndexActiveTab(0);
tabViewObj.setWidth(a);
tabViewObj.setHeight(b);
tabViewObj.init();

var iner=document.getElementsByTagName("body")[0].innerHTML
for(i=1;i<=liste.length;i++){
//window.frames[i-1].document.getElementsByTagName("body")[0].setAttribute("onclick","alert('"+i+"')")
//iner=iner.replace(liste[i-1],"n°"+i+"  "+liste[i-1])

document.getElementById("tabTabDHTMLSuite_tabView1_"+(i-1)).setAttribute("onmouseup","Oglt("+(i-1)+")")
}

}
cadretab()

generecadrespanes()
attribueContenuTab(Wi,Hi)
genetabView(Wi,Hi)

var red=0



//reduit()
