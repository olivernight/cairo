<?php

// ATTENTION : voire la variable $inhib=10000; //10000 si on veut inhiber l'affichage des fichiers ; 0 si on veut afficher les fichiers
// ATTENTION : voire les filtres 

// *********************************************************

$nummapx=urldecode( $_GET['nummapx'] );

$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire : 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
														    //0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$REPcible = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit															
$REP = urldecode( $_GET['rep'] ); // répertoire  ( nom du répertoire  carte à copier)
$REPorigine = $REP;
$plateforme_distante = urldecode( $_GET['plateforme'] ); // nom de la plateforme distante où se situe le dossier carte à copier  dans la plateforme courante
$pdd = urldecode( $_GET['pdd'] ); // nom de la plateforme de travail où l'on va copier le dossier carte ( plateforme de départ du travail en cours)

function listingFolder($REPx){
echo '<script language="javascript">var listefile=new Array();var listedir=new Array();var ecrit="";var ecritfile=""</script>';
$result2 = array();

$mydir="../".$REPx."/";//





		// Ensemble des fichiers et répertoires à ignorés.
		$filter = array( 'lister');
		$filterB = array( );//'',''

		
		$contents = get_folder_listing( $mydir, $filter );
$result2=$contents;

return $result2;
}


function listedir ($contents,$X,$REPx){ // liste les fichiers puis les répertoires contenus dans le répertoire $REPx
//echo'<script language="javascript"> alert("'.$REPx.'");</script>';
//echo '<script language="javascript">var listefile=new Array();var listedir=new Array();var ecrit="";var ecritfile=""</script>';

		if ($contents) {

			
				
$inhib1=0; // 0 pour activer le listage des répertoires
			
			for ( $i = $inhib1; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				//if ( $fileinfo[0] != "file" ) {} else {
				if (strpos( $fileinfo[1],"." ) > 0){
				
				echo'<script language="javascript"> 
				//alert("'.$fileinfo[1].'")
				var testdir="'.$REPx.'";
				
				var testdirDepot_cartes=testdir.indexOf("Depot_cartes")
				var testdircarte=testdir.indexOf("Cartes")
				var testdirSite=testdir.indexOf("Site")
				var testspacial=0
				if(testdirDepot_cartes>=0){testspacial=1}
				if(testdircarte==0){testspacial=1}
				if(testdirSite==0){testspacial=1}
				if(testspacial==1){
				if(testdircarte>=0){
				for(i=0;i<mapX.length;i=i+5){

				
				var repCartesici="'.$REPx.'"
				repCartesici=mapX[i+4]+repCartesici.replace("Cartes","")

				
				listefile[listefile.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');/*   */
				ecritfile+="<span style=\"position:relative;left:-50px;font-family:arial;font-size:12px;color:red\"><b title=\""+libelmap[i/5][2]+"\">"+mapX[i+3]+"  </b><i>(répertoire : "+mapX[i+4]+")</i></span><br><span id=\""+repCartesici+"/'.$fileinfo[1].'\" style=\"position:relative;left:-50px;font-family:arial;font-size:11px;color:blue\"><input type=\"checkbox\" id=\"xN["+N+"]\"  name=\"xN["+N+"]\" onclick=\'checkit(this,"+N+")\'  ><b>'.$fileinfo[1].'<br></b></span><input type=\"radio\" id=\"N["+N+"]\"  name=\"N["+N+"]\"  style=\"display:none\" value=\"'.$fileinfo[1].'\" ><input type=\"text\" value=\"'.$REPx.'/'.$fileinfo[1].'\" style=\"display:none\" name=\"K["+N+"]\">"
				
				

				ecritfile+="<input type=\"text\" value=\""+repCartesici+"/\"  style=\"display:none\" name=\"R["+N+"]\">"
				
				
				N+=1
					
				}
				}
				

				
				if(testdirSite>=0){
for(i=0;i<liensSites.length;i++){
				
				
				listefile[listefile.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');
				ecritfile+="<span style=\"position:relative;left:-50px;font-family:arial;font-size:12px;color:green\"><b>"+liensSites[i]+"  </b></span><br><span id=\""+liensSites[i]+"/'.$fileinfo[1].'\" style=\"position:relative;left:-50px;font-family:arial;font-size:11px;color:blue\"><input type=\"checkbox\" id=\"xN["+N+"]\"  name=\"xN["+N+"]\" onclick=\'checkit(this)\'  value=\"'.$fileinfo[1].'\"><b>'.$fileinfo[1].'<br></b></span><input type=\"radio\" id=\"N["+N+"]\"  name=\"N["+N+"]\" style=\"display:none\"   value=\"'.$fileinfo[1].'\"><input type=\"text\" value=\"Site/'.$fileinfo[1].'\" style=\"display:none\" name=\"K["+N+"]\"><input type=\"text\" value=\""+liensSites[i]+"/\"  style=\"display:none\" name=\"R["+N+"]\">"
				
				
				N+=1	
				
				
				}
				}
				
					if(testdirDepot_cartes>=0){
				
				listefile[listefile.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');
				ecritfile+="<span id=\"../'.$REPx.'/'.$fileinfo[1].'\" style=\"position:relative;left:-50px;font-family:arial;font-size:11px;color:blue\"><input type=\"checkbox\" id=\"xN["+N+"]\"  name=\"xN["+N+"]\" onclick=\'checkit(this)\'  value=\"'.$fileinfo[1].'\"><b>'.$fileinfo[1].'<br></b></span><input type=\"radio\" id=\"N["+N+"]\"  name=\"N["+N+"]\" style=\"display:none\"   value=\"'.$fileinfo[1].'\"><input type=\"text\" value=\"'.$REPx.'/'.$fileinfo[1].'\"  style=\"display:none\" name=\"K["+N+"]\"><input type=\"text\" value=\"../'.$REPx.'/\"  style=\"display:none\" name=\"R["+N+"]\">"
				
				N+=1	
			
				}
				}else{
			
			
				listefile[listefile.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\');
				
				ecritfile+="<span id=\"'.$REPx.'/'.$fileinfo[1].'\" style=\"position:relative;left:-50px;font-family:arial;font-size:11px;color:blue\"><input type=\"checkbox\" id=\"xN["+N+"]\"  name=\"xN["+N+"]\" onclick=\'checkit(this)\'  value=\"'.$fileinfo[1].'\"><b>'.$fileinfo[1].'<br></b></span><input type=\"radio\" id=\"N["+N+"]\"  name=\"N["+N+"]\" style=\"display:none\" value=\"'.$fileinfo[1].'\"><input type=\"text\" value=\"\" style=\"display:none\" name=\"K["+N+"]\"><input type=\"text\" value=\"'.$REPx.'/\"  style=\"display:none\" name=\"R["+N+"]\">"
				N+=1
				
				}
				
				</script>';
				
				$X+=1;	
				
				}
				
			}			
			
			
			
$inhib2=0; // 0 pour activer le listage des répertoires

			for ( $i = $inhib2; $i < count( $contents ); $i++ ) {// liste des répertoires compris dans le répertoire $REPx
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				//if ( $fileinfo[0] == "file" ) {} else {
				if (strpos( $fileinfo[1],"." ) == false){
				echo'<script language="javascript"> 
				//alert("'.$fileinfo[1].'")
				listedir[listedir.length]=new Array(\''.$fileinfo[1].'\',\''.$fileinfo[2].'\',\''.$fileinfo[3].'\',doss);
				ecrit+="<span style=\"font-family:arial;font-size:12px;color:gray; opacity:1\"><b>'.$fileinfo[1].'<div style=\'position:relative;left:50px\' id=\'"+doss+"-'.$fileinfo[1].'\'></div>"
				
				doss=doss+1;
				</script>';
				
				
				}
			}
			//
			
		}
return $X;
}
				?>

