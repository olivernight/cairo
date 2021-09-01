var nomtab = ""
var check_r = ""	
var compteur = 0
var existant = new Array()

function check_redondance(input,check_r,nomtab){
	Result = true
	if(check_r=="file"){
		existant = nomtab
		for(z=0;z<input.length;z++){	
			for(i=0;i<existant.length;i++){			
				contenu = input[z]
				if(contenu.length == 0){
					Result=false
					alerter = "Saisie obligatoire"
				} else if(existant[i].toLowerCase()==contenu.toLowerCase()){
					Result=false
					alerter = "Nom déjà existant : "+contenu				
				}
			}
		}	
	} else if(check_r=="repertory"){
		existant = nomtab
		for(z=0;z<input.length;z++){	
			for(i=4;i<existant.length;i++){			
				contenu = input[z]
				if(contenu.length == 0){
					Result=false
					alerter = "Saisie obligatoire"
				} else if(existant[i].toLowerCase()==contenu.toLowerCase()){
					Result=false
					alerter = "Répertoire déjà existant : "+existant[i]			
				}
				i=i+4
			}
		}	
	} else if(check_r=="repertory_site"){
		existant = nomtab
		for(z=0;z<input.length;z++){	
			for(i=0;i<existant.length;i++){			
				contenu = input[z]
				if(contenu.length == 0){
					Result=false
					alerter = "Saisie obligatoire"
				} else if(existant[i].toLowerCase()=='site-'+contenu.toLowerCase()){
					Result=false
					alerter = "Répertoire déjà existant : "+existant[i]				
				}
			}			
		}	
	}
	if(Result==false){
	no_bouton()
	}
}