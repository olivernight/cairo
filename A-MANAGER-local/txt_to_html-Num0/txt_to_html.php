<html>
<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<iframe id="ajout" name="ajout" frameborder="0" style="display:none;border:0px solid none;width:100%;height:150px"></iframe>
<font face="Helvetica" size="2">
<script type="text/javascript">
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
</script>
<?php

$REP = urldecode( $_GET['REP'] );
$cible = urldecode( $_GET['cible'] );
$RACINE= urldecode( $_GET['RACINE'] );
$option= urldecode( $_GET['opt'] );

$yi=0; // index de position dans une chaine (voir plus bas)
//echo '<script  language="javascript">alert("../../'.$REP.'/'.$cible.'")</script>';
//echo '<script  language="javascript" src="../../'.$REP.'/'.$cible.'"></script>';
echo '<script  language="javascript" src="../../'.$REP.'/DATA-mappocoord.js"></script>';
echo '<script language="javascript" src="../../mapsILIADE.js"></script>';

include("entetes.php");

//FONCTIONS :
$li=0;
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');

function appelextractetecrit($bufferX,$incr,$occurences)
{
$li=$occurences;


global $var_inser;
$separateur=chr('9');

$data=extract_data($bufferX,$separateur);

$k=count($data)+1;
$var_inser[$incr]="";
for($i=1;$i<$k;$i++)
{
if($i==3){// Cas de la CORSE

if(strpos($data[$i], "A")>0){$data[$i]=str_replace("A","101",$data[$i]);}
if(strpos($data[$i], "B")>0){$data[$i]=str_replace("B","102",$data[$i]);}
}
if($data[$i]==""){$data[$i]="-99999";}
if($data[$i]==" "){$data[$i]="-99999";}
$spe=chr('194');
$spe2=" ";
if($data[$i]==$spe){$data[$i]="-99999";}
if($data[$i]==$spe2){$data[$i]="-99999";}

if($incr==0 or $incr>($li-9) ){  
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}
//if($i<($k-1)){
$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";
//}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr]."0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}

if($i==2 || $i==3){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
	//echo '<script  language="javascript">alert("ici")</script>';
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].",0);"; $var_inser[$incr]=$var_inser[$incr]."\n";}

}


}
}


$incr=$incr+1;
}


function extract_data($ligne,$separateur)// cette fonction permet d'extraire les données dans un ligne, séparées par $separateur
// la fonction renvoie le array $data[ ]
{

global $incr;
//echo $incr;
//correction de fin de ligne dans le cas CRLF
$xi=substr($ligne,strlen($ligne)-1,1);

if(substr($xi,0,1)==chr(13)){
//echo"<script language='javascript' >alert('".$ei."')</script>";
$yi=1;
}
//correction de fin de ligne pour fichier macintosh


if(substr($ligne,strlen($ligne),1)!="\n")
{
//echo"<script language='javascript' >alert('ici')</script>";
$ligne=$ligne."\n";
}

$len_1=strlen($ligne);
//on extrait les noms de champs marqués par des separateurs et on les stocke dans nom_champ[ ] incrementé par $k


$derniere_positionw2=0;
$kw2=1;
$tableau2 = explode($separateur, $ligne);
$occurences2 = count($tableau2);
for($h=0;$h<($occurences2-1);$h++){
	$xpos2=strpos ( $ligne , $separateur  , $derniere_positionw2  ) ;	
	$data[$kw2]=substr($ligne,$derniere_positionw2,$xpos2-$derniere_positionw2);	
	$derniere_positionw2=$xpos2+1;
	$kw2=$kw2+1;
}
$xpos2=strpos ( $ligne , "\n"  , $derniere_positionw2  ) ;
$data[$kw2]=substr($ligne,$derniere_positionw2,$xpos2-$derniere_positionw2);
return $data;
}
///////////////////////////fin de fonction extract_data


$etape=$_REQUEST['etape'];
//DEBUT :
if($cible=="étalonner"){$etape=1;}
//echo "<P>---| cible=<b>".$cible."</b></p> ";
if($etape=="")
{
//choix du fichier txt :
echo "<form enctype='multipart/form-data' action='".$PHP_SELF."?etape=2&REP=".$REP."&cible=".$cible."&RACINE=".$RACINE."&opt=".$option."' method='post'><input type='hidden' name='MAX_FILE_SIZE' value='80000000'>";

echo "<p><font face='Helvetica' size='2'>Choisissez le fichier de données originales</font></p>";
echo "<p>Fichier .txt: <input id='fichier' name='fichier' type='file'></p>";

echo "<p><font  face='Helvetica' size='2'>déterminez l'attribution des données</font></p>";

echo "<ul><li><input  id='rd1' name='RD' value='principal' onclick='document.getElementById(\"nf\").value=\"principal.html\"' type='radio'>Principal<I>(Sujet)</i></li>";
echo "<li><input id='rd2' name='RD' value='complementaire' onclick='document.getElementById(\"nf\").value=\"complementaire.html\"' type='radio'>Complémentaire<I>(Other)</i></li></ul>";
echo "<p style='visibility:hidden'>Fichier .html: <input  id='nf' name='final' value='' type='text'></p>";

/*
echo "<p><font face='Helvetica' size='2'>Modifiez les répertoire de cartes de destination<br><i><font color=red>ATTENTION</font> (cas d'un clônage par exemple)</i></font></p>";
echo "<p>Répertoire de destination: <input name='REP2' value='".$REP."' type='text'></p>";
*/
echo "<p><input type='submit' name='valid' onmouseover='if(document.getElementById(\"nf\").value==\"\"){alert(\"saisissez le nom du fichier final \")}' value='Valider'></p>";
echo "</form>";
}
else
{
if($cible!="étalonner"){
//upload et traitement du fichier

    $repertoireDestination = "fichiers/";

    $nom_fichier = $_FILES["fichier"]["name"];
	$FNOM=$_REQUEST['final'];
	    $varnom="fichier";


$date_time=date("d-m-Y-H-m-s");

$repertoireDestination ="../../".$REP."/datafiles/";

$len=strlen($FNOM)-5;
$FNOMTXT=substr($FNOM,0,$len).".txt";
//avant d'introduire un nouveau fichier texte : prend le fichier texte esistant dans datafiles et le renome en lui acollant la date du jour
rename($repertoireDestination.$FNOMTXT,$repertoireDestination.$date_time."_".$FNOMTXT);
chmod ($repertoireDestination.$date_time."_".$FNOMTXT, 0777);

echo "<P>---| Le nom du fichier final : <b>".$FNOM."</b></p> ";
if($nom_fichier!="")
{
$nomDestination = $date_time."_".$nom_fichier;
if (eregi(".txt", $nom_fichier)==FALSE){ echo "<p><b>Le fichier ".$nom_fichier." doit etre au format .txt !</b>"; exit; }
    if (is_uploaded_file($_FILES[$varnom]["tmp_name"])) {
        if (rename($_FILES[$varnom]["tmp_name"],
                  // "../../A-MANAGER-local/txt_to_html-Num0/".$repertoireDestination.$nomDestination)) 
				   $repertoireDestination.$FNOMTXT)) 
				   {
            echo "<p><i>---| <small>Le fichier <b>".$nom_fichier."</b> a été correctement téléchargé (une copie nommée (date)-principal.txt est conservée dans le répertoire ".$repertoireDestination."/datafiles/ </i></small><br>";
} else { echo "<p>Le déplacement du fichier temporaire a échoué vérifiez l'existence du répertoire ".$repertoireDestination." ainsi que les droits d'accès à ce repertoire.";	 exit;  } 
}else { echo "<p>Le fichier n'a pas été uploadé (trop gros ?)"; exit; }
}
$file_to_open=$repertoireDestination.$FNOMTXT;
/////////////////LECTURE DES DONNEES DU FICHIER :



}//fin de pas le cas etalon
else
{//cas etalon
$file_to_open="../../".$REP."/fichier_ID_CODE_NOM.txt";
$FNOM="etalon.html";

}



$html_file=$FNOM; 
$file_to_write="../../".$REP."/".$FNOM;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule

$t=filesize($file_to_open);
//echo '<br><b>nb de carractères dans le fichier txt = </b>'.$t.'<br><b>fichier.txt  cloné = </b>'.$file_to_open.' ';
//$text =fread(fopen ($file_to_open, "r"),$t);
$text =file_get_contents($file_to_open);
fclose ($fichier); // cloture du fichier ID_CODE_ET_NOMS.txt


//transformation en modèle unixoïde
$text=str_replace("\r\n","xx@xx",$text);
$text=str_replace("\r","\n",$text);//cas mac;
$text=str_replace("xx@xx","\n",$text);
//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;

// compter le nb de lignes
 
$tableau = explode("\n", $text);
$occurences = count($tableau);
//echo "<br>Il y a ".($occurences-1)." fois  \\n dans le fichier.";

for($h=0;$h<($occurences);$h++){


	$xpos=strpos ( $text , "\n"  , $derniere_positionw  ) ;
	
	$buffer[$kw]=substr($text,$derniere_positionw,$xpos-$derniere_positionw);
	//echo '<br><buffer['.$kw.']=</b>'.$buffer[$kw].' <br>';
	$derniere_positionw=$xpos+1;
	$incr=$kw-1;
	appelextractetecrit($buffer[$kw],$incr,$occurences);
	$kw=$kw+1;


}

//------------------------------------------------------------------------ on extrait les lignes du fichier text et on les écrit dans le nouveau fichier html


if($option==1){
		{// DEBIT du module d'écriture du fichier (avant normalisation)


				$li=$kw-1;

				echo '<br><b>nb de lignes = </b>'.($li-1).' <br>';


				$kw=1;
				$derniere_positionw=0;

				$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture
				fwrite($fichier2,$haut."\n");//on insère l'entête de haut de fichier

				$incr=$incr-1;
				for($g=0;$g<$li-1;$g++)
				{
				fwrite($fichier2,$var_inser[$g]);
				}

				fwrite($fichier2,$bas);//on insère l'entête de fin de fichier


				fclose ($fichier2);

				//on réouvre et on enlèves les antislash
				$file_to_write="../../".$REP."/".$FNOM;
				//$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
				$contenu = file_get_contents($file_to_write);
				$contenu = stripslashes($contenu);
				$contenu=str_replace('""','"',$contenu);// supression des doubles guillements hérités en mode caché de la normalisation UTF-8 des fichiers excel 2007
				$op_file2 = fopen($file_to_write,"w+");
				fwrite($op_file2,$contenu);
				fclose($op_file2);

		}// FIN d'écriture du fichier avant normalisation				
		

// -----------------------------------------------------------------------------------------------------------------------------------
		{// DEBUT de NORMALISATION ----------------------------------------------------------------------------------------------
				
				echo "<P>---| Le fichier <b><a target='_blank' href='".$file_to_write."'>".$html_file."</a></b> a ete genere";
				

				//----------------------------nb de lignes : test de l'écart avec l'étalon
								$file_to_open="../../".$REP."/etalon.html";
								//$text =fread(fopen ($file_to_open, "r"),$t);
								$text =file_get_contents($file_to_open);
								//transformation en modèle unixoïde
								$text=str_replace("\r\n","xx@xx",$text);
								$text=str_replace("\r","\n",$text);//cas mac;
								$text=str_replace("xx@xx","\n",$text);


								// compter le nb de lignes
								 
								$tableau2 = explode("new", $text);
								$occurences2 = count($tableau2);
				
				echo '<br><br> <b style="color:red">Etalonnage : </b><br>';
				
				echo "<br><input type='button' style='width:200px'  value='Etalonnez de votre fichier' onclick='window.location.href=\"../NormalisationTxtToHtml/transmenu.htm?opt=".$option."&REP=".$REP."&PC=".$FNOM."\"'><br><br>";				
				
				
				echo '<small>L\'étalonnage est a utiliser dans deux cas de figure : 
				<ul>
				<li>Si vous n\'avez pas utilisé la matrice de fichiers de données<br> associee à la carte (<i>vous risquez d\'avoir un décalage dans l\'odre des aires géographiques entraînant des résultats incohérents</i>)</li>
				<li>si vous avez un écart en nombre de lignes entre le fichier créé et le fichier étalon de la carte, l\'affichage ne fonctionnera pas<br>(Ici l\'écart [fichier créé - étalon] est de : <span style="color:red"><b>'.($occurences-1-($occurences2-1)).'</b></span> lignes)</li>
				<br>
				Il vous faut alors étalonner votre fichier.</small>';


		}// fin de normalisation----------------------------------------------------------------------------------------------------------------------
}else{

		{// DEBUT du module d'ajout de données au fichier existant :  écriture des données en javascript

				echo '<script language="javascript">var base00=new Array()
				function transbase00(){return base00}
				
				</script>';
				$li=$kw-1;

				echo '<br><b>nb de lignes = </b>'.($li-1).' <br>';


				$kw=1;
				$derniere_positionw=0;

				
				echo $haut."\n";//on écrit l'entête de haut de fichier

				$incr=$incr-1;
				for($g=0;$g<$li-1;$g++)
				{
				echo $var_inser[$g]."\n"; //écrit chaque lignées de données en javascript>
				}

				echo $bas;//on insère l'entête de fin de fichier

				echo '<script language="javascript">window.frames.ajout.location.href="../NormalisationTxtToHtml/transmenuAjout.htm?opt='.$option.'&REP='.$REP.'&PC='.$FNOM.'" ; document.getElementById("ajout").style.display="block"</script>';

		}// FIN d'écriture des données en javascript	
		
}//fin de else / option
//-------------------------------------------------------------------------------------------------------------------------------------------------
}//fin de if($etape!="")else..


?>
</font>

</body>
</html>
