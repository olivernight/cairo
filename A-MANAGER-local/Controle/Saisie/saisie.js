var CaracteresInterdits1 = ""
var CaracteresInterdits2 = ""
var CaracteresInterdits3 = ""
var carac = ""

function detect(chaine,classe){
		
//Liste des Caractères interdits
CaracteresInterdits1="\`\²\%\*\,\?\;\:\§\!\#\$\£\¤\(\)\~\/\\\'\=\+\{\}\[\]|^@&\"\"\<\>©®ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ"

//Choisissez le nom de la Carte (ie. Le nom qui sera affiché sur le fond d'écran)
CaracteresInterdits2="\`\²\%\*\§\#\$\£\¤\~\/\\\'\=\{\}\[\]|^@&\"\"\<\>©®ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕØÙÚÛÜÝÞßàáâãäåæçëìíîðñòóõøùúûýþÿ"

// SaisieIco-sujet.php etc
CaracteresInterdits3="\`\§\#\$\£\¤\~\\|^&©®ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÕØÙÚÝÞßãåìíðñòóõøýþÿ"
	
var Result=true
var i=0
var Compteur=0
var liste=""

	//Boucle qui extrait chaque lettre de 'chaine' et qui regarde si elle correspond à un caractère interdit
	for(z=0;z<chaine.length;z++){
		contenu=chaine[z]
		fin=contenu.length
		for (var i=0; i<fin; i++){
			carac=contenu.substring(i,i+1)
			if (classe.indexOf(carac)!=(-1)){
				Result=false		
				liste+=carac		
			}				
		}
		if(Result==false){ alerter="Caractère(s) interdit(s): "+liste } else { alerter="" }	
	}
	if(Result==false){
		no_bouton()
	} else{
		bouton()	
	}
}	

function refuserToucheEntree(event)
{
    // Compatibilité IE / Firefox
    if(!event && window.event) {
        event=window.event
    }
    // IE
    if(event.keyCode == 13) {
        event.returnValue=false
        event.cancelBubble=true
    }
    // DOM
    if(event.which==13) {
        event.preventDefault()
        event.stopPropagation()
    }
}