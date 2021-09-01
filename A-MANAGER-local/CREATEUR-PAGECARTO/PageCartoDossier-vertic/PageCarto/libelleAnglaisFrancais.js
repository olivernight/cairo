
if(lang=="En"){

			var legCircle="Legend of circles"
			var legbackground="Legend of the background color"



			var Xreset="Reset"
			var XreadMe="Read Me"
			var Xeffro="Clear Circles"
			var Xefffo="Clear Background"
			var Xagrond="Enlarge the size of the circles"
			var Xredrond="Reduce the size of the circles"
			var Zmore="Zoom More"
			var Zless="Zoom Less"

}else{

			var legCircle="légende des cercles"
			var legbackground="Légende de la couleur de fond"

			var Xreset="Rafraîchir"
			var XreadMe="Lisez moi"
			var Xeffro="Efface les cercles"
			var Xefffo="Efface le fond"
			var Xagrond="Agrandir la taille des cercles"
			var Xredrond="Réduire la taille des cercles"
			var Zmore="Zoom Plus"
			var Zless="Zoom Moins"

}

document.getElementById("rondleg").innerHTML=legCircle
document.getElementById("fondleg").innerHTML=legbackground
document.getElementById("Reset").innerHTML=Xreset
document.getElementById("ReadMe").innerHTML=XreadMe
document.getElementById("effRond").innerHTML=Xeffro
document.getElementById("effFond").innerHTML=Xefffo

changeInBaliseTitre("x20",Xagrond);changeInBaliseTitre("x21",Xagrond)
changeInBaliseTitre("x22",Xredrond);changeInBaliseTitre("x23",Xredrond)

changeInBaliseTitre("x30",Zmore);changeInBaliseTitre("x31",Zmore)
changeInBaliseTitre("x32",Zless);changeInBaliseTitre("x33",Zless)
