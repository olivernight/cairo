function bouton(){	
		document.getElementById("alert").style.visibility = "visible"
		document.getElementById("alert").setAttribute("style","display:block;color:red;font-size:12px;")
		document.getElementById("alert").innerHTML = alerter	
		
		document.getElementById("submit").style.visibility = "visible"	
		validation()
		//document.getElementById("submit").setAttribute("style","display:block;")
		//document.getElementById("submit2").style.visibility = "hidden"
		//document.getElementById("submit2").setAttribute("style","display:none;")	
}
function no_bouton(){	
		document.getElementById("alert").style.visibility = "hidden"
		document.getElementById("alert").setAttribute("style","display:block;color:red;font-size:12px;")
		document.getElementById("alert").innerHTML = alerter			
		document.getElementById("submit").style.visibility = "hidden"	
		//document.getElementById("submit").setAttribute("style","display:none;")
		//document.getElementById("submit2").style.visibility = "visible"
		//document.getElementById("submit2").setAttribute("style","display:block;")	
		
		
}