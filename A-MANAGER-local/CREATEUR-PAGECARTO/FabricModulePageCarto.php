<html>

<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">

<?php


$COLLAB = urldecode( $_GET['COLLAB'] );
$MODELE = urldecode( $_GET['MODELE'] );
$REP = urldecode( $_GET['CARTE'] );
$LISTE = explode(",", urldecode( $_GET['LISTE'] ));
$PACKAGE = explode(",", urldecode( $_GET['PACK'] ));
$longliste = count($LISTE);
$azimut=urldecode( $_GET['AZIMUT'] );
$fromgejson=urldecode( $_GET['FROMGEOJSON'] );
$FetT = urldecode( $_GET['FT'] );
$synt = urldecode( $_GET['SY'] );
$SomTab = urldecode( $_GET['ST'] );
$TotTab = urldecode( $_GET['TT'] );
$chem = urldecode( $_GET['CHEM'] );



include("entetes.php");
//include("entetes-IE.php");
$MODELEnb=$MODELE;
include("entetes-PANO.php");
include("entetes-vertic.php");
include("entetes-COLLAB-vertic.php");
include("entetes-BLANC.php");
//include("entetes-IE-vertic.php");
$OptionCOLLAB=0;

//echo '<script>alert("ici modele '.$MODELE.'")</script>';
if($MODELE==1){

}else{
if($MODELE==4){	
$haut=$hautPANO;
$bas=$basPANO;
}
if($MODELE==2){
$haut=$hautvertic;
$bas=$basvertic;
}
if($MODELE==5){
$haut=$hautBLANC;
$bas=$basBLANC;
}
if($MODELE==3){
$OptionCOLLAB=1;
}
}

/*
if($MODELE==5){
mkdir ("../../".$REP."/PageCartoDossier-BLANC");



mkdir ("../../".$REP."/PageCartoDossier-BLANC/PageCarto");
mkdir ("../../".$REP."/PageCartoDossier-BLANC/PageCarto/info");
mkdir ("../../".$REP."/PageCartoDossier-BLANC/PageCarto/GRAPH-COURBE");
mkdir ("../../".$REP."/PageCartoDossier-BLANC/PageCarto/GRAPH-RADAR");

}else
	*/

if($MODELE==5){	$PCdossier="PageCartoDossier-BLANC";
			  }else{
				$PCdossier="PageCartoDossier";						
			  }



{
mkdir ("../../".$REP."/".$PCdossier);
if($OptionCOLLAB==1){//cas COLLAB
mkdir ("../../".$REP."/".$PCdossier."/telechargements");
mkdir ("../../".$REP."/".$PCdossier."/images");
mkdir ("../../".$REP."/".$PCdossier."/A-MANAGER-local");
mkdir ("../../".$REP."/".$PCdossier."/A-MANAGER-local/Utilisateurs-DISCUSSION");

}


mkdir ("../../".$REP."/".$PCdossier."/PageCarto");
mkdir ("../../".$REP."/".$PCdossier."/PageCarto/info");
mkdir ("../../".$REP."/".$PCdossier."/PageCarto/GRAPH-COURBE");
mkdir ("../../".$REP."/".$PCdossier."/PageCarto/GRAPH-RADAR");

}

$moduleXML=0;
for($i=0;$i<$longliste;$i++){
if(strpos($LISTE[$i],'le-PageCarto.xml')){$moduleXML=1;}
}


//Section W3C ///////////// -Section W3C ///////////// -Section W3C ///////////// -Section W3C ///////////// -Section W3C ///////////// -

$file_to_write4="../../".$REP."/".$PCdossier."/PageCarto/parametres.js";
$file_to_write15="../../".$REP."/".$PCdossier."/nomcarte.js";
if($moduleXML==1 || $OptionCOLLAB==1){


$file_to_open="../../".$REP."/CARTOSVG.svg";
$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule




$t=filesize($file_to_open);

$text =file_get_contents($file_to_open);
//transformation en modèle unixoïde
$text=str_replace("\r\n","xx@xx",$text);
$text=str_replace("\r","\n",$text);//cas mac;
$text=str_replace("xx@xx","\n",$text);
$text=str_replace('linejoin="miter"','linejoin="round"',$text);

//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;

// compter le nb de lignes
$indexnpath=0;
$tableau = explode("\n", $text);
$occurences = count($tableau);



$file_to_write="../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto.xml";
$file_to_write3="../../".$REP."/".$PCdossier."/PageCarto/Module-PageCartoCOLLAB.xml";


if($moduleXML==1){
			$fichier2 = fopen ($file_to_write, "w+"); //fichier ouvert en écriture
			/////////}
			fwrite($fichier2,$haut."\n");//on insère l'entête de haut de fichier
if($MODELEnb!=4){
			$indicnpath=0;
			$indicimagesfond2=0;

			for($h=0;$h<($occurences);$h++){
			$ligneici=strval($tableau[$h]).chr('13');


			if($indicnpath==0 & strpos($ligneici,'id="npath') ){$indicnpath=1;}

			if($indicimagesfond2==1 & $indicnpath<2){

			if(strpos($ligneici,'zoneico')){$ligneici='<text y="-400" x="0" font-size="18" style="font-family: Arial; text-anchor: start;" transform="matrix(1, 0, 0, 1, 0, 0)" id="affichNOM">Nom de zone
				</text>'.chr('13').$ligneici;}
			fwrite($fichier2,$ligneici);
			}

			if($indicimagesfond2==0 & strpos($ligneici,'imagesfond2')>0 ){$indicimagesfond2=1;}
			if($indicnpath==1 & strpos($ligneici,'id="npath')<1 ){$indicnpath=2;}
			}

			fwrite($fichier2,'<circle  r="0" cy="0" cx="0" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt"  stroke-width="2.5px" stroke="blue" fill="none" id="cercleR"></circle>'.chr('13'));
}
			fwrite($fichier2,$bas);//on insère l'entête de fin de fichier
			fclose ($fichier2);				
}			

if($OptionCOLLAB==1){//cas COLLAB			
			$fichier3 = fopen ($file_to_write3, "w+"); //fichier ouvert en écriture
			/////////}
			fwrite($fichier3,$hautverticCOLLAB."\n");//on insère l'entête de haut de fichier

			$indicnpath=0;
			$indicimagesfond2=0;

			for($h=0;$h<($occurences);$h++){
			$ligneici=strval($tableau[$h]).chr('13');


			if($indicnpath==0 & strpos($ligneici,'id="npath') ){$indicnpath=1;}

			if($indicimagesfond2==1 & $indicnpath<2){

			if(strpos($ligneici,'zoneico')){$ligneici='<text y="-400" x="0" font-size="18" style="font-family: Arial; text-anchor: start;" transform="matrix(1, 0, 0, 1, 0, 0)" id="affichNOM">Nom de zone
				</text>'.chr('13').$ligneici;}
			fwrite($fichier3,$ligneici);
			}

			if($indicimagesfond2==0 & strpos($ligneici,'imagesfond2')>0 ){$indicimagesfond2=1;}
			if($indicnpath==1 & strpos($ligneici,'id="npath')<1 ){$indicnpath=2;}
			}

			fwrite($fichier3,'<circle  r="0" cy="0" cx="0" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt"  stroke-width="2.5px" stroke="blue" fill="none" id="cercleR"></circle>'.chr('13'));
			fwrite($fichier3,$basverticCOLLAB);//on insère l'entête de fin de fichier
			
			fclose ($fichier3);	

}	 	
				
				
				
				
				


fclose ($fichier);
			//on réouvre et on enlèves les antislash
if($moduleXML==1){
			//on réouvre et on enlèves les antislash
			$contenu = file_get_contents($file_to_write);
			$contenu = stripslashes($contenu);
			$contenu=str_replace("@@","\\",$contenu);
			$contenu=str_replace("top.frames.Num0.frames.couches.zoom.SVGaffichN()","",$contenu);
			$contenu=str_replace("NoDatx=id","",$contenu);
			$op_file2 = fopen($file_to_write,"w+");
			fwrite($op_file2,$contenu);
			fclose($op_file2);
}
if($OptionCOLLAB==1){//cas COLLAB
			//on réouvre et on enlèves les antislash
			$contenu = file_get_contents($file_to_write3);
			$contenu = stripslashes($contenu);
			$contenu=str_replace("@@","\\",$contenu);
			$contenu=str_replace("top.frames.Num0.frames.couches.zoom.SVGaffichN()","",$contenu);
			$contenu=str_replace("NoDatx=id","",$contenu);
			$op_file3 = fopen($file_to_write3,"w+");
			fwrite($op_file3,$contenu);
			fclose($op_file3);
			
}	




}
//section IE /////////// -section IE /////////// -section IE /////////// -section IE /////////// -section IE /////////// -
for($i=0;$i<$longliste;$i++){
/*
if(strpos($LISTE[$i],'RTOSVG-IE.svg')){


$file_to_open="../../".$REP."/CARTOSVG.svg";
$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule




$t=filesize($file_to_open);

$text =file_get_contents($file_to_open);
//transformation en modèle unixoïde
$text=str_replace("\r\n","xx@xx",$text);
$text=str_replace("\r","\n",$text);//cas mac;
$text=str_replace("xx@xx","\n",$text);
//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;

// compter le nb de lignes
$indexnpath=0;
$tableau = explode("\n", $text);
$occurences = count($tableau);




$file_to_write="../../".$REP."/".$PCdossier."/PageCarto/CARTOSVG-IE.svg";


$fichier2 = fopen ($file_to_write, "w+"); //fichier ouvert en écriture
/////////}
fwrite($fichier2,$hautIE."\n");//on insère l'entête de haut de fichier


$indicnpath=0;
$indicimagesfond2=0;

for($h=0;$h<($occurences);$h++){
$ligneici=strval($tableau[$h]).chr('13');


if($indicnpath==0 & strpos($ligneici,'id="npath') ){$indicnpath=1;}

if($indicimagesfond2==1 & $indicnpath<2){

if(strpos($ligneici,'zoneico')){$ligneici='<text y="-400" x="0" font-size="18" style="font-family: Arial; text-anchor: start;" transform="matrix(1, 0, 0, 1, 0, 0)" id="affichNOM">Nom de zone
	</text>'.chr('13').$ligneici;}
fwrite($fichier2,$ligneici);
}

if($indicimagesfond2==0 & strpos($ligneici,'imagesfond2')>0 ){$indicimagesfond2=1;}
if($indicnpath==1 & strpos($ligneici,'id="npath')<1 ){$indicnpath=2;}
}


fwrite($fichier2,'<circle  r="0" cy="0" cx="0" stroke-opacity="1" stroke-linejoin="miter" stroke-linecap="butt"  stroke-width="2.5px" stroke="blue" fill="none" id="cercleR"></circle>'.chr('13'));
fwrite($fichier2,$basIE);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);

//on réouvre et on enlèves les antislash

;
$contenu = file_get_contents($file_to_write);
$contenu = stripslashes($contenu);
$contenu=str_replace("top.frames.Num0.frames.couches.zoom.SVGaffichN()","",$contenu);
$contenu=str_replace("NoDatx=id","",$contenu);
$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);

}
*/


//section fichiers de données //////// - section fichiers de données //////// - section fichiers de données //////// - section fichiers de données //////// -





if(strpos($LISTE[$i],'incipal.js') || strpos($LISTE[$i],'lementaire.js') ){


if (file_exists("../../".$REP."/".$LISTE[$i])){
rename("../../".$REP."/".$LISTE[$i], "../../".$REP."/xax".$LISTE[$i]);

}

$file_to_open="../../".$REP."/".str_replace(".js",".html",$LISTE[$i]);




$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule




$t=filesize($file_to_open);

$text =file_get_contents($file_to_open);
//transformation en modèle unixoïde
$text=str_replace("\r\n","xx@xx",$text);
$text=str_replace("\r","\n",$text);//cas mac;
$text=str_replace("xx@xx","\n",$text);
$text=$text;
//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;

// compter le nb de lignes
$indexnpath=0;
$tableau = explode("\n", $text);
$occurences = count($tableau);





$file_to_write="../../".$REP."/".$PCdossier."/PageCarto/".$LISTE[$i];
$pointTxt=str_replace('.js','.txt',$LISTE[$i]);
$file_to_write2="../../".$REP."/".$PCdossier."/PageCarto/info/".$pointTxt;

$fichier2 = fopen ($file_to_write, "w+"); //fichier ouvert en écriture
$fichier3 = fopen ($file_to_write2, "w+"); //fichier ouvert en écriture

$g=0;
for($h=0;$h<($occurences);$h++){
$ligneici=strval($tableau[$h]).chr('13');
$ligneici2=$ligneici;
if( strpos($ligneici,'ase00[') || (strpos($ligneici,'<')===false  )){
fwrite($fichier2,$ligneici);
//$basXX='base00['.$g.']=new Array("';
$ligneici2=substr($ligneici2, strpos($ligneici2, '(')+1,strlen($ligneici2));
//$ligneici2=str_replace($basXX,'',$ligneici2);
$ligneici2=str_replace(',',chr('9'),$ligneici2);
$ligneici2=str_replace('"','',$ligneici2);
$ligneici2=str_replace(';','',$ligneici2);
$ligneici2=str_replace(')','',$ligneici2);
if($h>0 & $h<$occurences-9){
$ligneici2=str_replace('.',',',$ligneici2);
}

fwrite($fichier3,$ligneici2);
$g=$g+1;
}
}


fclose ($fichier);
fclose ($fichier2);
fclose ($fichier3);


//on réouvre et on enlèves les antislash

;


}

if(strpos($LISTE[$i],'le-PageCarto.xml') || strpos($LISTE[$i],'RTOSVG-IE.svg') ){} else{
//echo '<script>alert("'.$LISTE[$i].'")</script>';
copy("../../".$REP."/".$LISTE[$i],"../../".$REP."/".$PCdossier."/PageCarto/".$LISTE[$i]);

}

}




if($MODELE==1){$MODELE="PageCartoDossier";}else{
	
	if($MODELE==2){$MODELE="PageCartoDossier-vertic";}
	if($MODELE==4){$MODELE="PageCartoDossier-PANO";}
	if($MODELE==5){$MODELE="PageCartoDossier-BLANC";}
	}



//Package /////////////////////

if($OptionCOLLAB==1){
$MODELE_COLLAB="PageCartoDossier-COLLAB";
// dans le dossier carte REP
copy("ModerationCOLLAB/editpas.js","../../".$REP."/editpas.js");
copy("ModerationCOLLAB/MENUchantier.html","../../".$REP."/MENUchantier.html");
copy("ModerationCOLLAB/Moderation.htm","../../".$REP."/Moderation.htm");
copy("ModerationCOLLAB/MODIFaide.html","../../".$REP."/MODIFaide.html");

// dans rep PageCartoDossier-

copy($MODELE_COLLAB."/hypertexte.js","../../".$REP."/".$PCdossier."/hypertexte.js");
copy($MODELE_COLLAB."/listeaide.js","../../".$REP."/".$PCdossier."/listeaide.js");
copy($MODELE_COLLAB."/Wysiwyg.js","../../".$REP."/".$PCdossier."/Wysiwyg.js");
copy($MODELE_COLLAB."/Wysiwyg.css","../../".$REP."/".$PCdossier."/Wysiwyg.css");
copy($MODELE_COLLAB."/ajoutMessage.php","../../".$REP."/".$PCdossier."/ajoutMessage.php");
copy($MODELE_COLLAB."/ajoutUpload.php","../../".$REP."/".$PCdossier."/ajoutUpload.php");
copy($MODELE_COLLAB."/breve.php","../../".$REP."/".$PCdossier."/breve.php");
copy($MODELE_COLLAB."/download.php","../../".$REP."/".$PCdossier."/download.php");
copy($MODELE_COLLAB."/entetes.php","../../".$REP."/".$PCdossier."/entetes.php");
copy($MODELE_COLLAB."/recharge.php","../../".$REP."/".$PCdossier."/recharge.php");
copy($MODELE_COLLAB."/AccueilSDM.html","../../".$REP."/".$PCdossier."/AccueilSDM.html");
copy($MODELE_COLLAB."/ecrit_hypertext.html","../../".$REP."/".$PCdossier."/ecrit_hypertext.html");
copy($MODELE_COLLAB."/InterfaceDiscussion.html","../../".$REP."/".$PCdossier."/InterfaceDiscussion.html");
copy($MODELE_COLLAB."/version-pour-fouiller-COLLAB.html","../../".$REP."/".$PCdossier."/version-pour-fouiller-COLLAB.html");
copy($MODELE_COLLAB."/vide.html","../../".$REP."/".$PCdossier."/vide.html");

// dans rep PageCartoDossier/images/ 
copy($MODELE_COLLAB."/images/anchor.gif","../../".$REP."/".$PCdossier."/images/anchor.gif");

copy($MODELE_COLLAB."/images/bgcolor.gif","../../".$REP."/".$PCdossier."/images/bgcolor.gif");
copy($MODELE_COLLAB."/images/bold.gif","../../".$REP."/".$PCdossier."/images/bold.gif");
copy($MODELE_COLLAB."/images/center.gif","../../".$REP."/".$PCdossier."/images/center.gif");
copy($MODELE_COLLAB."/images/cir_0.gif","../../".$REP."/".$PCdossier."/images/cir_0.gif");
copy($MODELE_COLLAB."/images/cir_bleu.gif","../../".$REP."/".$PCdossier."/images/cir_bleu.gif");

copy($MODELE_COLLAB."/images/copy.gif","../../".$REP."/".$PCdossier."/images/copy.gif");
copy($MODELE_COLLAB."/images/erase.gif","../../".$REP."/".$PCdossier."/images/erase.gif");
copy($MODELE_COLLAB."/images/hr.gif","../../".$REP."/".$PCdossier."/images/hr.gif");
copy($MODELE_COLLAB."/images/image.gif","../../".$REP."/".$PCdossier."/images/image.gif");
copy($MODELE_COLLAB."/images/indent.gif","../../".$REP."/".$PCdossier."/images/indent.gif");
copy($MODELE_COLLAB."/images/italic.gif","../../".$REP."/".$PCdossier."/images/italic.gif");
copy($MODELE_COLLAB."/images/justify.gif","../../".$REP."/".$PCdossier."/images/justify.gif");
copy($MODELE_COLLAB."/images/left.gif","../../".$REP."/".$PCdossier."/images/left.gif");

copy($MODELE_COLLAB."/images/link.gif","../../".$REP."/".$PCdossier."/images/link.gif");
copy($MODELE_COLLAB."/images/mail.gif","../../".$REP."/".$PCdossier."/images/mail.gif");
copy($MODELE_COLLAB."/images/ol.gif","../../".$REP."/".$PCdossier."/images/ol.gif");
copy($MODELE_COLLAB."/images/outdent.gif","../../".$REP."/".$PCdossier."/images/outdent.gif");
copy($MODELE_COLLAB."/images/paste.gif","../../".$REP."/".$PCdossier."/images/paste.gif");
copy($MODELE_COLLAB."/images/redo.gif","../../".$REP."/".$PCdossier."/images/redo.gif");
copy($MODELE_COLLAB."/images/right.gif","../../".$REP."/".$PCdossier."/images/right.gif");
copy($MODELE_COLLAB."/images/strike.gif","../../".$REP."/".$PCdossier."/images/strike.gif");
copy($MODELE_COLLAB."/images/textcolor.gif","../../".$REP."/".$PCdossier."/images/textcolor.gif");
copy($MODELE_COLLAB."/images/ul.gif","../../".$REP."/".$PCdossier."/images/ul.gif");
copy($MODELE_COLLAB."/images/underline.gif","../../".$REP."/".$PCdossier."/images/underline.gif");
copy($MODELE_COLLAB."/images/undo.gif","../../".$REP."/".$PCdossier."/images/undo.gif");

// dans rep PageCartoDossier/A-MANAGER-local/Utilisateurs-DISCUSSION/
copy($MODELE_COLLAB."/A-MANAGER-local/Utilisateurs-DISCUSSION/creaCompte.php","../../".$REP."/".$PCdossier."/A-MANAGER-local/Utilisateurs-DISCUSSION/creaCompte.php");
	if($COLLAB[0]==1){// registre des participants
	copy($MODELE_COLLAB."/A-MANAGER-local/Utilisateurs-DISCUSSION/listeUtil.js","../../".$REP."/".$PCdossier."/A-MANAGER-local/Utilisateurs-DISCUSSION/listeUtil.js");
	}

// dans rep PageCartoDossier/PageCarto/

copy($MODELE_COLLAB."/PageCarto/hypertexte.js","../../".$REP."/".$PCdossier."/PageCarto/hypertexte.js");
copy($MODELE_COLLAB."/PageCarto/section1-COLLAB.js","../../".$REP."/".$PCdossier."/PageCarto/section1-COLLAB.js");
copy($MODELE_COLLAB."/PageCarto/section2-COLLAB.js","../../".$REP."/".$PCdossier."/PageCarto/section2-COLLAB.js");
copy($MODELE_COLLAB."/PageCarto/section4-COLLAB.js","../../".$REP."/".$PCdossier."/PageCarto/section4-COLLAB.js");
copy($MODELE_COLLAB."/PageCarto/ListeDocs.html","../../".$REP."/".$PCdossier."/PageCarto/ListeDocs.html");
copy($MODELE_COLLAB."/PageCarto/Module-PageCarto-CompletCOLLAB.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-CompletCOLLAB.html");
}



if($PACKAGE[0]==1){

copy($MODELE."/PageCarto/hypertexte.htm","../../".$REP."/".$PCdossier."/PageCarto/hypertexte.htm");
}
if($PACKAGE[1]==1){
copy($MODELE."/COPYING GNU.txt","../../".$REP."/".$PCdossier."/COPYING GNU.txt");
if($MODELE!="PageCartoDossier-BLANC"){
copy($MODELE."/ENTRER.html","../../".$REP."/".$PCdossier."/ENTRER.html");
copy($MODELE."/GRAND pour Firefox.html","../../".$REP."/".$PCdossier."/GRAND pour Firefox.html");
copy($MODELE."/Normal.html","../../".$REP."/".$PCdossier."/Normal.html");
copy($MODELE."/REDUIT.html","../../".$REP."/".$PCdossier."/REDUIT.html");

copy($MODELE."/indexVoirCarte.html","../../".$REP."/".$PCdossier."/indexVoirCarte.html");
copy($MODELE."/scriptleHeader.js","../../".$REP."/".$PCdossier."/scriptleHeader.js");
copy($MODELE."/redesignPCcomplet.js","../../".$REP."/".$PCdossier."/redesignPCcomplet.js");
copy($MODELE."/Logo-altercarto.jpg","../../".$REP."/".$PCdossier."/Logo-altercarto.jpg");

}
copy($MODELE."/version-pour-fouiller.html","../../".$REP."/".$PCdossier."/version-pour-fouiller.html");

if($MODELE=="PageCartoDossier-BLANC"){
copy($MODELE."/PageCarto/azimutArticle.js","../../".$REP."/".$PCdossier."/PageCarto/azimutArticle.js");
copy($MODELE."/chgazimut.php","../../".$REP."/".$PCdossier."/chgazimut.php");
copy($MODELE."/Normal-BLANC-ajustMap.html","../../".$REP."/".$PCdossier."/Normal-BLANC-ajustMap.html");
copy($MODELE."/REGLAGE taille Carte.txt","../../".$REP."/".$PCdossier."/REGLAGE taille Carte.txt");
copy($MODELE."/Normal-BLANC.html","../../".$REP."/".$PCdossier."/Normal-BLANC.html");
copy($MODELE."/OO capture.htm","../../".$REP."/".$PCdossier."/OO capture.htm");
copy($MODELE."/transparent.jpg","../../".$REP."/".$PCdossier."/transparent.jpg");	
copy($MODELE."/vide.html","../../".$REP."/".$PCdossier."/vide.html");	
	
	
}



copy($MODELE."/PageCarto/creation_CarteExport.php","../../".$REP."/".$PCdossier."/PageCarto/creation_CarteExport.php");
copy($MODELE."/PageCarto/zipexportMap.php","../../".$REP."/".$PCdossier."/PageCarto/zipexportMap.php");

copy($MODELE."/PageCarto/export_Map.html","../../".$REP."/".$PCdossier."/PageCarto/export_Map.html");

copy($MODELE."/PageCarto/contourXML.html","../../".$REP."/".$PCdossier."/PageCarto/contourXML.html");


copy($MODELE."/PageCarto/fiche.htm","../../".$REP."/".$PCdossier."/PageCarto/fiche.htm");
copy($MODELE."/PageCarto/fiche.js","../../".$REP."/".$PCdossier."/PageCarto/fiche.js");

copy($MODELE."/PageCarto/hypertexte.js","../../".$REP."/".$PCdossier."/PageCarto/hypertexte.js");
//copy($MODELE."/PageCarto/icomoins.jpg","../../".$REP."/".$PCdossier."/PageCarto/icomoins.jpg");
//copy($MODELE."/PageCarto/icoplus.jpg","../../".$REP."/".$PCdossier."/PageCarto/icoplus.jpg");
//copy($MODELE."/PageCarto/index.svg","../../".$REP."/".$PCdossier."/PageCarto/index.svg");
//copy($MODELE."/PageCarto/logoPageCarto.jpg","../../".$REP."/".$PCdossier."/PageCarto/logoPageCarto.jpg");
copy($MODELE."/PageCarto/Module-PageCarto-Allege.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-Allege.html");
//copy($MODELE."/PageCarto/Module-PageCarto-allegee-fiche-fixe-IE.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-allegee-fiche-fixe-IE.html");
//copy($MODELE."/PageCarto/Module-PageCarto-allegee-fiche-fixe-IE-Reduit.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-allegee-fiche-fixe-IE-Reduit.html");
copy($MODELE."/PageCarto/Module-PageCarto-Allege-Reduit.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-Allege-Reduit.html");
copy($MODELE."/PageCarto/Module-PageCarto-Complet.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-Complet.html");
//copy($MODELE."/PageCarto/Module-PageCarto-complete-fiche-fixe-IE.html","../../".$REP."/".$PCdossier."/PageCarto/Module-PageCarto-complete-fiche-fixe-IE.html");

copy($MODELE."/PageCarto/Logo-x.jpg","../../".$REP."/".$PCdossier."/PageCarto/Logo-x.jpg");
copy($MODELE."/PageCarto/PageCarto.jpg","../../".$REP."/".$PCdossier."/PageCarto/PageCarto.jpg");
copy($MODELE."/PageCarto/PageCarto-cadre.jpg","../../".$REP."/".$PCdossier."/PageCarto/PageCarto-cadre.jpg");
copy($MODELE."/PageCarto/section1.js","../../".$REP."/".$PCdossier."/PageCarto/section1.js");
copy($MODELE."/PageCarto/section2.js","../../".$REP."/".$PCdossier."/PageCarto/section2.js");
copy($MODELE."/PageCarto/section3.js","../../".$REP."/".$PCdossier."/PageCarto/section3.js");
copy($MODELE."/PageCarto/section4.js","../../".$REP."/".$PCdossier."/PageCarto/section4.js");
copy($MODELE."/PageCarto/numeroationHyperTexte.js","../../".$REP."/".$PCdossier."/PageCarto/numeroationHyperTexte.js");
copy($MODELE."/PageCarto/lang.js","../../".$REP."/".$PCdossier."/PageCarto/lang.js");

copy($MODELE."/PageCarto/addparamenuIco.js","../../".$REP."/".$PCdossier."/PageCarto/addparamenuIco.js");
copy($MODELE."/PageCarto/addparamenuGraph.js","../../".$REP."/".$PCdossier."/PageCarto/addparamenuGraph.js");

copy($MODELE."/PageCarto/libelleAnglaisFrancais.js","../../".$REP."/".$PCdossier."/PageCarto/libelleAnglaisFrancais.js");
copy($MODELE."/PageCarto/supportTechnique.jpg","../../".$REP."/".$PCdossier."/PageCarto/supportTechnique.jpg");
copy($MODELE."/PageCarto/transparent.png","../../".$REP."/".$PCdossier."/PageCarto/transparent.png");
copy($MODELE."/PageCarto/vide.htm","../../".$REP."/".$PCdossier."/PageCarto/vide.htm");
//copy($MODELE."/PageCarto/zmoins.jpg","../../".$REP."/".$PCdossier."/PageCarto/zmoins.jpg");
//copy($MODELE."/PageCarto/zplus.jpg","../../".$REP."/".$PCdossier."/PageCarto/zplus.jpg");
//copy($MODELE."/PageCarto/logoPageCarto0.jpg","../../".$REP."/".$PCdossier."/PageCarto/logoPageCarto0.jpg");

copy($MODELE."/PageCarto/listeAdditifContoursSVG.js","../../".$REP."/".$PCdossier."/PageCarto/listeAdditifContoursSVG.js");
copy($MODELE."/PageCarto/listeLegNap.js","../../".$REP."/".$PCdossier."/PageCarto/listeLegNap.js");


copy($MODELE."/PageCarto/GRAPH-COURBE/courbe.xml","../../".$REP."/".$PCdossier."/PageCarto/GRAPH-COURBE/courbe.xml");
copy($MODELE."/PageCarto/GRAPH-COURBE/infosMDG.js","../../".$REP."/".$PCdossier."/PageCarto/GRAPH-COURBE/infosMDG.js");
copy($MODELE."/PageCarto/GRAPH-COURBE/parametresCourbe.js","../../".$REP."/".$PCdossier."/PageCarto/GRAPH-COURBE/parametresCourbe.js");


copy($MODELE."/PageCarto/GRAPH-RADAR/radar.xml","../../".$REP."/".$PCdossier."/PageCarto/GRAPH-RADAR/radar.xml");







copy("index.html","../../".$REP."/index.html");
copy("motpasPC.js","../../".$REP."/motpasPC.js");


//copy("4_LOGOS/logo1.jpg","../../".$REP."/".$PCdossier."/PageCarto/logo1.jpg");
//copy("4_LOGOS/logo2.jpg","../../".$REP."/".$PCdossier."/PageCarto/logo2.jpg");
//copy("4_LOGOS/logo3.jpg","../../".$REP."/".$PCdossier."/PageCarto/logo3.jpg");
//copy("4_LOGOS/logo4.jpg","../../".$REP."/".$PCdossier."/PageCarto/logo4.jpg");



}
if($PACKAGE[4]==1){

copy($MODELE."/PageCarto/parametres.js","../../".$REP."/".$PCdossier."/PageCarto/parametres.js");

$file_to_write5="../../".$REP."/".$PCdossier."/PageCarto/azimut.js";

$fichier5 = fopen ($file_to_write5, "w+"); //fichier ouvert en écriture
$azimut2='var MaxMin=new Array('.$azimut.')';
fwrite($fichier5,$azimut2);
fwrite($fichier5,"\n");
fwrite($fichier5,"fromgeojson=".$fromgejson.";");
fclose ($fichier5);



}
if($PACKAGE[5]==1){


if($MODELE=="PageCartoDossier"){
//copy($MODELE."/PageCarto/zoomIE.js","../../".$REP."/".$PCdossier."/PageCarto/zoomIE.js");
copy($MODELE."/PageCarto/zoomW3C.js","../../".$REP."/".$PCdossier."/PageCarto/zoomW3C.js");
}else{
//copy($MODELE."/PageCarto/zoomIE-vertic.js","../../".$REP."/".$PCdossier."/PageCarto/zoomIE-vertic.js");
copy($MODELE."/PageCarto/zoomW3C-vertic.js","../../".$REP."/".$PCdossier."/PageCarto/zoomW3C-vertic.js");
}
}
if($PACKAGE[3]==1){
//copy($MODELE."/PageCarto/info/infos.htm","../../".$REP."/".$PCdossier."/PageCarto/info/infos.htm");
//copy($MODELE."/PageCarto/info/contenuPageCarto.jpg","../../".$REP."/".$PCdossier."/PageCarto/info/contenuPageCarto.jpg");
//copy($MODELE."/PageCarto/info/lois-de-distribution-spatiale.jpg","../../".$REP."/".$PCdossier."/PageCarto/info/lois-de-distribution-spatiale.jpg");
copy($MODELE."/PageCarto/info/altercarto.jpg","../../".$REP."/".$PCdossier."/PageCarto/info/altercarto.jpg");
copy($MODELE."/PageCarto/info/Nomenclatures-et-definitions.html","../../".$REP."/".$PCdossier."/PageCarto/info/Nomenclatures-et-definitions.html");
copy($MODELE."/PageCarto/info/fiche-exploitation.pdf","../../".$REP."/".$PCdossier."/PageCarto/info/fiche-exploitation.pdf");
//copy($MODELE."/PageCarto/info/exemple proto enquete.pdf","../../".$REP."/".$PCdossier."/PageCarto/info/exemple proto enquete.pdf");
//copy($MODELE."/PageCarto/info/enquete-representation.jpg","../../".$REP."/".$PCdossier."/PageCarto/info/enquete-representation.jpg");
copy($MODELE."/PageCarto/info/documentation METHODOLOGIE.pdf","../../".$REP."/".$PCdossier."/PageCarto/info/documentation METHODOLOGIE.pdf");
copy($MODELE."/PageCarto/info/documentation USAGE.pdf","../../".$REP."/".$PCdossier."/PageCarto/info/documentation USAGE.pdf");
}
if($PACKAGE[4]==1){
//copy($MODELE."/PageCarto/info/infos.htm","../../".$REP."/".$PCdossier."/PageCarto/info/infos.htm");
}
if($PACKAGE[2]==1){
copy($MODELE."/PageCarto/entete.js","../../".$REP."/".$PCdossier."/PageCarto/entete.js");
}
if (file_exists("../../".$REP."/xaxprincipal.js")){
rename("../../".$REP."/xaxprincipal.js","../../".$REP."/principal.js" );
};

if (file_exists("../../".$REP."/xaxcomplementaire.js")){
rename("../../".$REP."/xaxcomplementaire.js","../../".$REP."/complementaire.js" );
}
// Fiche et Texte ********************************************************************************
			$contenu = file_get_contents($file_to_write4);

			
if($FetT==1){$FetT2="var FicheEtTexte=2" ; $FetT3="var FicheEtTexte=3";};
if($FetT==2){$FetT2="var FicheEtTexte=1" ; $FetT3="var FicheEtTexte=3";};
if($FetT==3){$FetT2="var FicheEtTexte=2" ; $FetT3="var FicheEtTexte=1";};
$FetT="var FicheEtTexte=".$FetT ;
			$contenu=str_replace($FetT2,$FetT,$contenu);
			$contenu=str_replace($FetT3,$FetT,$contenu);
			
if($synt==0){$syntbis="var DonneesDeSynthese=1";}
if($synt==1){$syntbis="var DonneesDeSynthese=0";}
$synt="var DonneesDeSynthese=".$synt;
			$contenu=str_replace($syntbis,$synt,$contenu);
			
if($SomTab==1){$SomTabbis="var SomTab=0";}// affichage des sommes sur les histogrammes simples
if($SomTab==0){$SomTabbis="var SomTab=1";}// pas de somme sur les histogrammes simples
$SomTab="var SomTab=".$SomTab;
			$contenu=str_replace($SomTabbis,$SomTab,$contenu);			
			
if($TotTab==1){$TotTabbis="var visiontotal=0";}// affichage des sommes sur les histogrammes simples
if($TotTab==0){$TotTabbis="var visiontotal=1";}// pas de somme sur les histogrammes simples
$TotTab="var visiontotal=".$TotTab;
			$contenu=str_replace($TotTabbis,$TotTab,$contenu);				
			
			$op_file4 = fopen($file_to_write4,"w+");
		
			fwrite($op_file4,$contenu);
			fclose($op_file4);
						
						
			$op_file15 = fopen($file_to_write15,"w+");
		
			fwrite($op_file15,'var nomcarte="'.$REP.'"');
			fclose($op_file15);
			
			/**/
//************************************************************************************************




echo '<b><big><span style="font-family:arial">création OK pour les éléments choisis du Module PageCarto '.$REP.'</span></big></b><br><br>';


$dos_a_zipper='../../zipDossierCarteTTtypes.php?REPDEPART='.$REP.'/'.$PCdossier.'/&NOMZIP='.$PCdossier.'-'.$REP.'.zip&REPDESTINATION='.$REP.'/';


echo '<iframe style="display:none" src="'.$dos_a_zipper.'"></iframe><br>';      

echo '<ul style="font-family:arial">';
if($MODELE!="PageCartoDossier-BLANC"){	        
echo '<li><small>la version&nbsp; <a
 style="font-weight: bold; color: rgb(51, 102, 255);" href="../../'.$REP.'/'.$PCdossier.'/Normal.html"
 target="_blank">Normale</a></small></li>';
 
}
echo '<li><small>la version "<a
 style="font-weight: bold; color: rgb(51, 102, 255);"
 href="../../'.$REP.'/'.$PCdossier.'/version-pour-fouiller.html" target="_blank">pour fouiller</a>"</small></li>';
if($MODELE!="PageCartoDossier-BLANC"){
 echo '<li><small>la version </small><small>"<a
 style="font-weight: bold; color: rgb(51, 102, 255);"
 href="../../'.$REP.'/'.$PCdossier.'/GRAND%20pour%20Firefox.html" target="_blank">Grand Format</a>"</small><small>
( uniquement avec FireFox ou Google Chrome)</small></li>
        <li><small>la version </small><small>"<a
 style="font-weight: bold; color: rgb(51, 102, 255);" href="../../'.$REP.'/'.$PCdossier.'/REDUIT.html"
 target="_blank">réduite</a>"</small><small> ( conçue pour faciliter
l\'intégration dans une page web)</small></li>
<li><small>la version </small><small>"<a
 style="font-weight: bold; color: rgb(51, 102, 255);" href="../../'.$REP.'/'.$PCdossier.'/indexVoirCarte.html"
 target="_blank">Page Voir Carte</a>"</small><small> ( nouveau design)</small></li>';
}    
if($MODELE=="PageCartoDossier-BLANC"){	  
echo '<li><small>la version </small><small>"<a
 style="font-weight: bold; color: rgb(51, 102, 255);" href="../../'.$REP.'/'.$PCdossier.'/Normal-BLANC.html"
 target="_blank">Article </a>"</small><small> ( conçue pour faciliter
l\'intégration dans une page web)</small>
<br><br>
<ul><li><small>Ajustement de la carte dans l\'article : <br></small><small>"<a
 style="font-weight: bold; color: rgb(51, 102, 255);" href="../../'.$REP.'/'.$PCdossier.'/Normal-BLANC-ajustMap.html"
 target="_blank">Module de réglage </a>"</small><small></small></li></ul>
<br><br><i>
<b>code intégration de l\'article dans une page du site : </b><br>
<small><small>
 &lt;span onmouseout="document.getElementById(\'how\').innerHTML=\'\'"&gt;
&lt;img style="opacity:0.5; cursor : pointer" onmouseover="document.getElementById(\'how\').innerHTML=\'&lt;i&gt;Cliquez sur les aires géographiques pour afficher leur graphique.&lt;br&gt;Placez la flèche au dessus des aires ou des barres du graphique pour voir les valeurs&lt;/i&gt;\'" src="iconesfree/Question.png" width="15px"&gt;
&lt;/span&gt;
&lt;span id="how" style="color:brown;"&gt;
&lt;/span&gt;
&lt;br&gt; &lt;iframe id="fra" name="fra" src="'.$chem.'/PageCartoDossier-BLANC/Normal-BLANC.html?posgraph=" scrolling="no" width="100%" height="922px"&gt; &lt;/iframe&gt; 
&lt;br&gt;
</small></small>
</i>
</li>';
  
}	  
echo ' </ul><script language="javascript">
	  function retourpara(){
	  window.location.href="choixlistefichiers.html?REP='.$REP.'&MODELE='.$MODELEnb.'"
	  }
	  </script>
<input type="button" value="retour vers parametres" onclick="retourpara()"></input>';




?>

</body>
</html>
