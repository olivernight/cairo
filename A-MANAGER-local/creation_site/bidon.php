<html>
<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
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

function appelextractetecrit($bufferX)
{
global $incr;
global $li;
global $var_inser;
$separateur=chr('9');
$fichier_data[$incr]=$bufferX;
$data=extract_data($fichier_data[$incr],$separateur);

$k=count($data)+1;
$var_inser[$incr]="";
for($i=1;$i<$k;$i++)
{
if($data[$i]==""){$data[$i]="-99999";}
if($data[$i]==" "){$data[$i]="-99999";}
$spe=chr('194');
$spe2=" ";
if($data[$i]==$spe){$data[$i]="-99999";}
if($data[$i]==$spe2){$data[$i]="-99999";}

if($incr==0 or $incr>($li-9) ){  
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr].");"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{
if($i==1){$var_inser[$incr]="base00[".$incr."]=new Array(";}

if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].");"; $var_inser[$incr]=$var_inser[$incr]."\n";}

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
//correction de fin de ligne pour fichier macintosh
if(substr($ligne,strlen($ligne),1)!="\n")
{
$ligne=$ligne."\n";
}

$len_1=strlen($ligne);
//on extrait les noms de champs marqués par des separateurs et on les stocke dans nom_champ[ ] incrementé par $k
$k=1;
$derniere_position=0;
for($i=0;$i<$len_1;$i++) //$i symbolise la position du curseur dans la chaine
{
$caractere=substr($ligne,$i,1);
	if($caractere==$separateur or $caractere=="\n")
	{
	$lenght=$i-$derniere_position;
	$data[$k]=substr($ligne,$derniere_position,$lenght);
	$derniere_position=$i+1;
	$k=$k+1;
	}
}

return $data;
}
///////////////////////////fin de fonction extract_data


$etape=$_REQUEST['etape'];
//DEBUT :
if($cible=="étalonner"){$etape=1;}
echo "<P>---| cible=<b>".$cible."</b></p> ";
if($etape=="")
{
//choix du fichier txt :
echo "<form enctype='multipart/form-data' action='".$PHP_SELF."?etape=2&REP=".$REP."&cible=".$cible."&RACINE=".$RACINE."' method='post'><input type='hidden' name='MAX_FILE_SIZE' value='600000000'>";
echo "<p><font face='Helvetica' size='2'><b>ATTLAS</b></font></p>";

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

echo "<P>---| Le nom du fichier final<b>".$FNOM."</b></p> ";
if($nom_fichier!="")
{
$nomDestination = $date_time."_".$nom_fichier;
if (eregi(".txt", $nom_fichier)==FALSE){ echo "<p><b>Le fichier ".$nom_fichier." doit etre au format .txt !</b>"; exit; }
    if (is_uploaded_file($_FILES[$varnom]["tmp_name"])) {
        if (rename($_FILES[$varnom]["tmp_name"],
                  // "../../A-MANAGER-local/txt_to_html-Num0/".$repertoireDestination.$nomDestination)) 
				   $repertoireDestination.$FNOMTXT)) 
				   {
            echo "<p><i>---| Le fichier <b>".$nom_fichier."</b> a été correctement téléchargé </i>";
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
$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture

fwrite($fichier2,$haut);//on insère l'entête de haut de fichier

$t=filesize($file_to_open);
echo '<br><b>nb de carractères dans le fichier txt = </b>'.$t.'<br><b>fichier.txt  cloné = </b>'.$file_to_open.' ';
$text =fread(fopen ($file_to_open, "r"),$t);

//------------------------------------------------------------------on compte le nb de lignes
$kw=1;
$derniere_positionw=0;
for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	$kw=$kw+1;
	}

}
//------------------------------------------------------------------------ on extrait les lignes du fichier text et on les écrit dans le nouveau fichier html
$li=$kw;
//echo '<br><b>nb de lignes=</b>'.($li-1).' <br>';
$kw=1;
$derniere_positionw=0;

for($h=0;$h<$t;$h++){

$caracterew=substr($text,$h,1);

	if($caracterew=="\n")
	{
	$lenght=$h-$derniere_positionw;
	$buffer[$kw]=substr($text,$derniere_positionw,$lenght);
	$derniere_positionw=$h+1;
	
	appelextractetecrit($buffer[$kw]);
	$kw=$kw+1;
	}

}

/////////}
$incr=$incr-1;
for($g=0;$g<$li-1;$g++)
{
fwrite($fichier2,$var_inser[$g]);
}

fwrite($fichier2,$bas);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);

//on réouvre et on enlèves les antislash
$file_to_write="../../".$REP."/".$FNOM;
$contenu = fread(fopen($file_to_write, "r"), filesize($file_to_write));
$contenu = stripslashes($contenu);

$op_file2 = fopen($file_to_write,"w+");
fwrite($op_file2,$contenu);
fclose($op_file2);




echo "<P>---| Le répertoire destination est :<b>".$repertoireDestination."</b> ";
echo "<P>---| Le fichier <b>".$html_file."</b> a ete genere";
echo "<p>---| <a href='".$file_to_write."'>  télécharger
</a> le et vérifier qu'il n'a pas engendré d'erreur <br><I>(ouvrir la console javascript de Firefox)</i>";


//---------------------------------------------------------------------------------------------------------------------- incription du nom de fichier dans DATA-mappocoord.js--------------------------------------------------------

if($cible=="étalonner"){}else{
$file_to_open="../../".$REP."/DATA-mappocoord.js";

//------------------------------------------------------------------

$rad=$_REQUEST['RD'];
if($rad=="principal")
{
$rad=0;
$changeligne="mappocoord[0]='".$FNOM."'\n";
}
else
{
$rad=1;
$changeligne="mappocoord[1]='".$FNOM."'\n";

}

if (is_file($file_to_open)) {
	if ($TabFich = file($file_to_open)) {
	}
	else {
	echo "Le fichier ne peut être lu...<br>";

	}
}
$fichier3 = fopen ($file_to_open, "w+");
$TabFich[$rad]=$changeligne;
for($i = 0; $i < count($TabFich); $i++){
fwrite($fichier3,$TabFich[$i]);
}


fclose ($fichier3);


echo "<br><input type='button' style='width:200px'  value='vérifier l étalonnage de votre fichier' onclick='window.location.href=\"../traitement de fichiers data/lignesmanquantes.html?REP=".$REP."&Xfile=".$FNOM."&Xcommand=0\"'>";


}//fin de cas étalon
//------------------------------------------------------------------------------------------------fin d'écriture dans DATA-mappocoord.js
}//fin de if($etape!="")else..


?>
</font>

</body>
</html>
