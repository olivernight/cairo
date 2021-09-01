var items=new Array()


  var adrlong=window.location.href.replace("/PageCartoDossier/PageCarto/hypertexte.htm","").split("/").length
  var adres=window.location.href.replace("/PageCartoDossier/PageCarto/hypertexte.htm","").split("/")[adrlong-1]  
  
  var nbbal=0
    var nba=document.getElementsByTagName("a").length;if(topX>0){nba=0}
 var txtTotal=document.getElementsByTagName("body")[0].innerHTML
  for(i=0;i<nba;i++){
  var ela=document.getElementsByTagName("a")[i]
  var outh=ela.outerHTML
  //if(i<20){alert(inh)}
  if((outh.indexOf("CPonc")>=0 || (outh.indexOf("Cgrap")>=0) & (ela.outerHTML!="")) || (outh.indexOf("NoDatx")>=0 || outh.indexOf('id="contour"')>=0 )){  
  var Gra=""
  if(outh.indexOf("CPonc")<0 & outh.indexOf("Cgrap")>=0){Gra="G"}
  nbbal+=1
	
			var attrib=ela.getAttribute("href").replace("javascript:","javascript:var nomdos=\""+adres+"\";")
				
				ela.setAttribute("href",attrib)				
				
	if(outh.indexOf('id="contour"')>=0){nbbal-=1}else{			
				inh=ela.innerHTML
				//inh='<span style="color:brown">'+nbbal+' '+Gra+'</span> - '+inh
				//ela.innerHTML=inh
				document.getElementsByTagName("a")[i].setAttribute("name",nbbal)
  }
  
  
var renvoiEla=outh.replace("CPon","window.frames.mapw1.hypertexte.CPon")
renvoiEla=renvoiEla.replace("Cfon","window.frames.mapw1.hypertexte.Cfon")
renvoiEla=renvoiEla.replace("Cgra","window.frames.mapw1.hypertexte.Cgra")
renvoiEla=renvoiEla.replace("javascript:","javascript:gotou("+nbbal+");")
  var it=new Array(nbbal,(nbbal+" "+Gra+" - "+renvoiEla)  )//ela.innerHTML

    items[items.length]=it
	
  }
  }
 var omd=new Array("1-liste",(nbbal+1)+"-fin")

 

function retItems(){
return items
}
function affm(){
if(parent.parent.affmenu){
parent.parent.affmenu(items,omd)
}
}
//affm()
 //