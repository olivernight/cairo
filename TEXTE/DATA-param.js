mappocoord[0]="DATA-BRIGNAIS-IRIS.html" //nom fichier o� se trouvent les donn�es SUJET
mappocoord[1]="DATA-BRIGNAIS-IRIS.html" //nom fichier o� se trouvent les donn�es OTHER
mappocoord[2]=1 //ICD de d�part : N� de la fonction dans le  menu SUJET  � l'ouverture de la carte
mappocoord[3]=1 //rang dans le meu sujet  �  l'ouverture de la carte
mappocoord[4]="Brignais-Etude/PEL:contours Iris2���(Insee)"
mappocoord[5]=0
mappocoord[6]="DATA_BRIGNAIS_IRIS" //nom directory o� se trouvent les donn�es SUJET
mappocoord[7]="DATA_BRIGNAIS_IRIS" //nom directory o� se trouvent les donn�es OTHER
mappocoord[8]=3 //nb couches suppl�mentaires




paramHISTOX0[0]=new Array(25,26,27) // colones de la base
paramHISTOX0[1]="allocations/logement" //titre histo
paramHISTOX0[2]="(sources:CAF 2003)" // source
paramHISTOX0[3]=new Array(1,2) // icone type
paramHISTOX0[4]=new Array("alloc log familial","alloc log Social","APL")// libell� des barres  de l'histogramme
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="CAF: Allocations logement" // libell� dans le menu SUJET
paramHISTOX0[10]=1 //ICD param�tre de positionnement dans le menu SUJET
	var paramreglage=new Array()
	paramreglage[0]=""
	paramreglage[1]=""
	paramreglage[2]=""
	paramreglage[3]=20 //largeur colonne Histo
	paramreglage[4]=""
	paramreglage[5]=155
	paramreglage[6]=""
	paramreglage[7]=""
	paramreglage[8]=""
	paramreglage[9]=""
paramHISTOX0[11]=paramreglage
menuSujet[0]=paramHISTOX0
//menuSujettab()

paramHISTOX0=new Array()
paramHISTOX0[0]=new Array(58,59,60,61,62,63,64,65,66,67)
paramHISTOX0[1]="enfants/familles mono et couples"
paramHISTOX0[2]="Insee RGP99" // source
paramHISTOX0[3]=new Array(3,0) //icone type
paramHISTOX0[4]=new Array(3,7,11,16,24)// libell� axe des x (libell�s des barres d'histomulti)
paramHISTOX0[5]=new Array("enfant/mono","enfants/couple") // libell�s axe des y (fractions de barre de l'histomulti)
paramHISTOX0[6]=2 //nb de fractions d'histomulti
paramHISTOX0[7]=paramHISTOX0[0].length/paramHISTOX0[6] // nb de barres de l'histomulti
paramHISTOX0[8]=new Array("test",130,50) // �talon r�f�rence(n0=nom ref,n1=valeur 1�re fraction en partaant du haut, n2= valeur 2�me fraction, etc...) 
paramHISTOX0[9]="CAF: Allocations logement" // libell� dans le menu SUJET
paramHISTOX0[10]=2 //ICD param�tre de positionnement dans le menu SUJET
var paramreglage=new Array()
	paramreglage[0]=0	//=100 si c'est un histogramme 100% sinon=0. �a corrige les �carts dus aux arrondis
	paramreglage[1]=-23             //  permet de centrer les chiffres dans l'histo pour IE6
	paramreglage[2]=25            // �largi la bande vide � gauche pour IE6
	paramreglage[3]=10          // largeur colonnes
	paramreglage[4]=100     // joue sur l'ajustement vertical
	paramreglage[5]=155            // hauteur de la r�gle gradu.gif
	paramreglage[6]=1           // INHIBITION DU CALCUL DE FACTEUR D'ECHELLE=1
	paramreglage[7]=10        //�cart entre les barres
	paramreglage[8]=10          //seuil d'apparition des chiffres dans l'histogramme
	paramreglage[9]=-20		//r�gulation hauteur des chiffres affich�s par rapport au titre
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti

menuSujet[1]=paramHISTOX0
//menuSujettab()

paramHISTOX0=new Array()
paramHISTOX0[0]=new Array(141,142,143,144,145,146)
paramHISTOX0[1]="Ch�mage 90 & 99 --------------(RGP Insee)" //titre y compris sources
paramHISTOX0[2]="effectifs" // unit�s
paramHISTOX0[3]=new Array(3,1) //icone type
paramHISTOX0[4]=new Array("15-24","25-49","50+")// libell� axe des x (libell�s des barres d'histomulti)
paramHISTOX0[5]=new Array("ch�mage 90","ch�mage 99") // libell�s axe des y (fractions de barre de l'histomulti)
paramHISTOX0[6]=2 //nb de  courbes
paramHISTOX0[7]=paramHISTOX0[0].length/paramHISTOX0[6] // nb de points par courbe 
paramHISTOX0[8]="" 
paramHISTOX0[9]="INSEE: Ch�mage 90 & 99" // libell� dans le menu SUJET
paramHISTOX0[10]=3 //ICD param�tre de positionnement dans le menu SUJET
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""            
	paramreglage[2]=""            
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""        
	paramreglage[6]=""        
	paramreglage[7]=""        
	paramreglage[8]=""         
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti

menuSujet[2]=paramHISTOX0
//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
menuOther="menuother"


//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
paramHISTOX0=new Array()
paramHISTOX0[0]=new Array(15,0)
paramHISTOX0[1]="CAF 2003:Prestations/enfance"
paramHISTOX0[2]="source CAF 2003" // source
paramHISTOX0[3]=new Array(2,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="CAF: Allocations logement" // libell� dans le menu SUJET
paramHISTOX0[10]=2001 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	//=100 si c'est un histogramme 100% sinon=0. �a corrige les �carts dus aux arrondis
	paramreglage[1]=""             //  permet de centrer les chiffres dans l'histo pour IE6
	paramreglage[2]=""            // �largi la bande vide � gauche pour IE6
	paramreglage[3]=""          // largeur colonnes
	paramreglage[4]=""     // joue sur l'ajustement vertical
	paramreglage[5]=""            // hauteur de la r�gle gradu.gif
	paramreglage[6]=""          // INHIBITION DU CALCUL DE FACTEUR D'ECHELLE=1
	paramreglage[7]=""        //�cart entre les barres
	paramreglage[8]=""          //seuil d'apparition des chiffres dans l'histogramme
	paramreglage[9]=-""		//r�gulation hauteur des chiffres affich�s par rapport au titre
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menuIconeEchelle[0]=paramHISTOX0 //"icone  base de donn�es �chelle"

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
paramHISTOX0=new Array()
paramHISTOX0[0]=new Array(16,0)
paramHISTOX0[1]="APEJ"
paramHISTOX0[2]="source CAF 2003" // source
paramHISTOX0[3]=new Array(2,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="CAF: APEJ" // libell� dans le menu Icone
paramHISTOX0[10]=1001 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""             
	paramreglage[2]=""           
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""          
	paramreglage[6]=""           
	paramreglage[7]=""        
	paramreglage[8]=""        
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menuIconeSup[0]=paramHISTOX0 //"icone  base de donn�es �chelle"
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
paramHISTOX0=new Array()
paramHISTOX0[0]="IMAGETEXE1" // nom du r�pertoire d'image et texte
paramHISTOX0[1]=""
paramHISTOX0[2]=""
paramHISTOX0[3]=new Array(4,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="essai FAORNE" // libell� dans le menu Icone
paramHISTOX0[10]=4001 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""             
	paramreglage[2]=""           
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""          
	paramreglage[6]=""           
	paramreglage[7]=""        
	paramreglage[8]=""        
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menuImagetext[0]=paramHISTOX0


//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
paramHISTOX0=new Array()
paramHISTOX0[0]="CONTOURS IRIS SEULS cvl.gif" // nom du r�pertoire d'image et texte
paramHISTOX0[1]=""
paramHISTOX0[2]=""
paramHISTOX0[3]=new Array(0,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="Contour Insee" // libell� dans le menu Icone
paramHISTOX0[10]=3001 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""             
	paramreglage[2]=""           
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""          
	paramreglage[6]=""           
	paramreglage[7]=""        
	paramreglage[8]=""        
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menucouchesupl[0]=paramHISTOX0

paramHISTOX0=new Array()
paramHISTOX0[0]="bati.gif" // nom du r�pertoire d'image et texte
paramHISTOX0[1]=""
paramHISTOX0[2]=""
paramHISTOX0[3]=new Array(0,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="bati" // libell� dans le menu Icone
paramHISTOX0[10]=3002 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""             
	paramreglage[2]=""           
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""          
	paramreglage[6]=""           
	paramreglage[7]=""        
	paramreglage[8]=""        
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menucouchesupl[1]=paramHISTOX0

paramHISTOX0=new Array()
paramHISTOX0[0]="rues.gif" // nom du r�pertoire d'image et texte
paramHISTOX0[1]=""
paramHISTOX0[2]=""
paramHISTOX0[3]=new Array(0,0) //icone type
paramHISTOX0[4]=""
paramHISTOX0[5]=""
paramHISTOX0[6]=""
paramHISTOX0[7]=""
paramHISTOX0[8]=""
paramHISTOX0[9]="rues" // libell� dans le menu Icone
paramHISTOX0[10]=3003 //ICD param�tre de positionnement dans le menu ICONE
var paramreglage=new Array()
	paramreglage[0]=""	
	paramreglage[1]=""             
	paramreglage[2]=""           
	paramreglage[3]=""          
	paramreglage[4]=""    
	paramreglage[5]=""          
	paramreglage[6]=""           
	paramreglage[7]=""        
	paramreglage[8]=""        
	paramreglage[9]=""		
paramHISTOX0[11]=paramreglage // param�tres de r�glage histomulti


menucouchesupl[2]=paramHISTOX0
