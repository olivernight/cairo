
			TestFichierUnionExist=1
			//Variable qui indique que ce fichier DATA-Union Existe

			var idcarteNormal=new Array() //0,27,26 vecteur des aires g�ographiques de r�f�rence (celles qui ont des donn�es dans les fichiers principal et compl�mentaire)
			var idcarteEncadre=new Array()//0,34,36 vecteur des aires correspondantes qui sont positionn�s dans les encadr�s et pourlesquelles il n'y a pas de donn�es dans les fichiers principal et compl�mentaire/

			
			function affectEncadre1(){// agit sur l'�talon int�gr�  dans le fichier carte  .xml
			
base00[24][2]=999999	// neutralisation de l'Eritea en changeant son code ref ISO	
base00[23][2]=999999	// neutralisation de l'Ethiopia en changeant son code ref ISO	
base00[25][2]=999999	// neutralisation d'Isra�l en changeant son code ref ISO		
for(h=1;h<idcarteNormal.length;h++){// 

base00[idcarteEncadre[h]][1]=base00[idcarteNormal[h]][1]// nom des aires
base00[idcarteEncadre[h]][2]=base00[idcarteNormal[h]][2] // code ref des aires
//for(k=3;k<transbaseTemp[idcarteEncadre[h]].length;k++){
//transbaseTemp[idcarteEncadre[h]][k]=transbaseTemp[idcarteNormal[h]][k]
//}

}			
	}
	
