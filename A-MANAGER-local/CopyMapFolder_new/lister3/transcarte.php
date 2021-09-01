
<html>
<head>



</head><body style="font-family:arial">
<iframe  name="lafr" style="display:none"></iframe>
<center id="testmessage" style="font-size:16px;color:gray"><br><b>Test transfert en cours</b></center>
<?php
$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire pour le registre de carte mapsIliade.js: 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
															//0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$etape= urldecode( $_GET['etape'] );
$mapx= $_REQUEST["M"];
$som= $_REQUEST["S"];
$libelmap= $_REQUEST["X"];															
$selectedrezoTemp = urldecode( $_GET['plateforme'] );//plateforme distante
$REPcible = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	
$repOrogi =	urldecode( $_GET['rep'] );	// nom du répertoire d'origine



echo'<script language="javascript">var lapage=window.location.href</script>';

$k=0;
if($REPcible !=""){
$REPcible='../../../'.$REPcible;

function testDeZipLa($REPciblela){
global $k;	
$k=$k+1;
if($k>=10){}else{
if(is_dir($REPciblela)){
}else{	
	sleep(2);
	testDeZipLa($REPciblela);
}
}
return $k;
}




	

if($etape==0){
testDeZipLa($REPcible);

if($k>=10){

echo '<script language="javascript">if(confirm("Le transfert semble rencontrer des problèmes, voulez-vous attendre 20 secondes suplémentaires?")){window.location.href=lapage;}else{window.location.href=lapage.replace("etape=0","etape=1");	}</script>';	
}else{
	
		echo'<script language="javascript">document.getElementById("testmessage").innerHTML=""</script>';
		
		echo  '<span id="fini" style="display : block">L\'opération de Transfert a été opéré vers la carte :<br/><span style="color:red"> '.str_replace("../../../","",$REPcible).'</span> dans cette plateforme<br>--------------------------------------<br/><br/><big><b>Redémarrez la plateforme pour charger la carte</b></big></span><br>';
		
		if($chgt==1){


		$op_file = fopen("../../../mapsILIADE.js","a+");
		fwrite($op_file,"\n\n");
		fwrite($op_file,'mapX[mapX.length]="'.$mapx[0].'"');fwrite($op_file,"\n");

		fwrite($op_file,'mapX[mapX.length]="'.$mapx[1].'"');fwrite($op_file,"\n");
		fwrite($op_file,'mapX[mapX.length]="'.$mapx[2].'"');fwrite($op_file,"\n");
		fwrite($op_file,'mapX[mapX.length]="'.str_replace('../../../','',$REPcible).'"');fwrite($op_file,"\n");
		fwrite($op_file,'mapX[mapX.length]="'.str_replace('../../../','',$REPcible).'"');fwrite($op_file,"\n");

		fwrite($op_file,'sommableEchelle[sommableEchelle.length]= new Array("'.str_replace(',','","',$som[0]).'")');fwrite($op_file,"\n");

		fwrite($op_file,'var echelle="'.$libelmap[0].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var maille="'.$libelmap[1].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var commentTitrecarte="'.$libelmap[2].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var commentaireschamp="'.$libelmap[3].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var theme=new Array("'.str_replace(',','","',$libelmap[4]).'")');fwrite($op_file,"\n");
		fwrite($op_file,'var autrescommnt="'.$libelmap[5].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var originalauthors="'.$libelmap[6].'"');fwrite($op_file,"\n");
		fwrite($op_file,'var otherauthors="'.$libelmap[7].'"');fwrite($op_file,"\n");
		fwrite($op_file,'libelmap[libelmap.length]=new Array(echelle,maille,commentTitrecarte,commentaireschamp,theme,autrescommnt,originalauthors,otherauthors)');


		fclose($op_file);
		}


		$file_to_open=$REPcible."/DATA-mappocoord.js";
		if(is_file($file_to_open)){
		$text =file_get_contents($file_to_open);

		$rep0=str_replace("../../","",$repOrogi);
		$rep0=str_replace("/","",$rep0);
		$rep0cible=str_replace("../../../","",$REPcible);
		
	
		$text=str_replace('"'.$rep0.'"','"'.$rep0cible.'"',$text);

		$fichier = fopen ($file_to_open, "w+"); //
		fwrite($fichier,$text);

		fclose($fichier);
		
		
		echo '<script language="javascript"> window.frames.lafr.location.href="'.$selectedrezoTemp.'A-MANAGER-local/CopyMapFolder_new/lister3/DeleteZipCarteDist.php?zipcarte='.$REPcible.'.zip"</script>';
		}	

}	

}	






if($etape==1){
echo '<br><center><span style="font-size:16px;color:red"><b>Un problème est survenu et le transfert a échoué :(<br>Essayez de nouveau</b></span></center>';
}

}






?>
</body></html>

