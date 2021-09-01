function bouton(){	
		document.getElementById("alert").style.visibility = "visible"
		document.getElementById("alert").setAttribute("style","display:block;color:transparent;font-size:12px;")
		document.getElementById("alert").innerHTML = alerter			
		document.getElementById("sub").style.visibility = "visible"	
		document.getElementById("sub").setAttribute("style","display:block;")
		//document.getElementById("submit2").style.visibility = "hidden"
		//document.getElementById("submit2").setAttribute("style","display:none;")	
}
function no_bouton(){	
		document.getElementById("alert").style.visibility = "hidden"
		document.getElementById("alert").setAttribute("style","display:block;color:red;font-size:12px;")
		document.getElementById("alert").innerHTML = alerter			
		document.getElementById("sub").style.visibility = "hidden"	
		document.getElementById("sub").setAttribute("style","display:none;")
		//document.getElementById("submit2").style.visibility = "visible"
		//document.getElementById("submit2").setAttribute("style","display:block;")	
}