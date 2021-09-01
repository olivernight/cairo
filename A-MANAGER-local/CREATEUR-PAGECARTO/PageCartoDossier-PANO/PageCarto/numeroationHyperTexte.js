var items=new Array()
function gotou(a){}
function telecharge(a){}
//,"16-Children health","18-Youth employment","30-UnderNourished","32-Supplements","45-fin")
  var adrlong=window.location.href.split("/").length
  var adres=window.location.href.split("/")[adrlong-4]
  
  var nbbal=0
    var nba=document.getElementsByTagName("a").length;if(topX>0){nba=0}
 var txtTotal=document.getElementsByTagName("body")[0].innerHTML
  for(i=0;i<nba;i++){
  var ela=document.getElementsByTagName("a")[i]
  var outh=ela.outerHTML
  if((outh.indexOf("CPonc")>=0 || (outh.indexOf("Cgrap")>=0) & (ela.outerHTML!="")) || (outh.indexOf("NoDatx")>=0)){  
  var Gra=""
  if(outh.indexOf("CPonc")<0 & outh.indexOf("Cgrap")>=0){Gra="G"}
  nbbal+=1

	

				var attrib=ela.getAttribute("href").replace("javascript:","javascript:telecharge(\""+adres+"\");gotou("+nbbal+");")	
				ela.setAttribute("href",attrib)				
				ela.setAttribute("class","draggable")	
				
				inh=ela.innerHTML
				var inh2='<span style="color:brown">'+nbbal+' '+Gra+'</span> - '+inh
				ela.innerHTML=inh2
				document.getElementsByTagName("a")[i].setAttribute("name",nbbal)
  
  

	var it=new Array(nbbal,(nbbal+" "+Gra+" - "+inh)  )
    items[items.length]=it
	
  }
  }
 var omd=new Array("1-Poverty ratio","9-Employment",(nbbal+1)+"-fin")


function retItems(){
return items
}
function affm(){
adtitre();
parent.parent.affmenu(items,omd)
}
affm()
 //