
//<!--
//PLF- http://www.jejavascript.net/
var basemenucontxt=""
basemenucontxt+=('<div id="menu_context" style="z-index:500;position:absolute;width:'+taillebg+'px; border:2px solid #9D9DA1; background-color:'+colorbg+'; font-family:Verdana; font-size:10px; cursor:default; visibility:hidden;padding:3">');

for(a=0;a<menulien.length;a++)
{
if(menutexte[a].length > 0)
{
if(menulien[a].length > 0)
{
basemenucontxt+=('<div onMouseOver="top.menu_sel(1, this)" onMouseOut="top.menu_sel(0, this)"><A HREF="'+menulien[a]+'" TARGET="'+menutarget[a]+'" STYLE="text-decoration:none;color:'+colorlien+'">'+menutexte[a]+'</A></div>');
}
else
{
basemenucontxt+=('<div align="center" onMouseOver="top.menu_sel(1, this)" onMouseOut="top.menu_sel(0, this)">'+menutexte[a]+'</div>');
}
}
else
{
basemenucontxt+=('<div onMouseOver="top.menu_sel(1, this)" onMouseOut="top.menu_sel(0, this)"><hr width="'+(taillebg-5)+'" size="1" color="#9D9DA1" /></div>');
}
}
var noed=document.createElement("p")
noed.setAttribute("id","noedid")
document.getElementsByTagName("body")[0].appendChild(noed)
document.getElementById("noedid").innerHTML=basemenucontxt
if(document.all){

//document.getElementById("com").attachEvent("onmousemove",position)

}else{

//document.getElementsByTagName("body")[0].addEventListener("mousemove",top.positionX,true)

}



//-->
