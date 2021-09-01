<html>
<head><title>Altercarto.com : Txt To HTML</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<?
// Altercarto.com
//Joseph Paris :: joseph_paris@gmail.com
// Txt To Html
// transforme un fichier de données txt en format HTML
include("entetes.php3");

//FONCTIONS :
function extract_data($ligne,$separateur)
{
// cette fonction permet d'extraire les données dans un ligne, séparées par $separateur
// la fonction renvoie le array $data[ ]

//correction de fin de ligne pour fichier macintosh
if(substr($ligne,strlen($ligne)-1,1)!="\n")
{
$ligne=$ligne."\n";
}

$len_1=strlen($ligne)+1;
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



//DEBUT :
// chargement du fichier REG.num et extraction du code zone puis placement du code dans un tableau $CODEREG[]
$file_to_open="REG.num";
$fichier3 = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$reg=0;
$CODEREGTEMP="";
$CODEREG[0]="";
while (!feof($fichier3)) {
// lire 4096 octets
$buffer = fgets($fichier3, 4096);
// on stocke dans le tableau la chaine lue

$code=substr($buffer,0,4);
if($code!=$CODEREGTEMP){
$CODEREG[$reg]=$code;
$CODEREGTEMP=$CODEREG[$reg];
echo "<P>---| c =<b>".$CODEREG[$reg]."</b> a ete genere";
$reg=$reg+1;
}
}
fclose ($fichier3);
$reg=$reg-1;








//fclose ($fichier3);
// fin du chargement des codes de REG.num-------------------------------------------------------------------------------------------
$etape=$_REQUEST['etape'];
if($etape=="")
{
//choix du fichier txt :
echo "<form enctype='multipart/form-data' action='".$PHP_SELF."?etape=2' method='post'>
<input type='hidden' name='MAX_FILE_SIZE' value='600000000'>";
echo "<p><font face='Helvetica' size='2'><b>Altercarto.com</b></font></p>";
echo "<p><font face='Helvetica' size='2'>Choisissez le fichier de données</font></p>";
echo "<p>Fichier : <input name='fichier' type='file'><input type='submit' name='valid' value='Valider'></p>";
echo "</form>";
}
else
{
//upload et traitement du fichier
    $repertoireDestination = "fichiers/";
    $nom_fichier = $_FILES["fichier"]["name"];
    $varnom="fichier";
if($nom_fichier!="")
{
$date_time=date("d-m-Y-H-m-s");
$nomDestination = $date_time."_".$nom_fichier;
if (eregi(".txt", $nom_fichier)==FALSE){ echo "<p><b>Le fichier ".$nom_fichier." doit etre au format .txt !</b>"; exit; }
    if (is_uploaded_file($_FILES[$varnom]["tmp_name"])) {
        if (rename($_FILES[$varnom]["tmp_name"],
                   $repertoireDestination.$nomDestination)) {
            echo "<p><i>---| Le fichier ".$nom_fichier." a été correctement téléchargé</i>";
} else { echo "<p>Le déplacement du fichier temporaire a échoué vérifiez l'existence du répertoire ".$repertoireDestination." ainsi que les droits d'accès à ce repertoire.";	 exit;  }          
} else { echo "<p>Le fichier n'a pas été uploadé (trop gros ?)"; exit; }
 }//fin de if $nom_fichier!=""   




/////////////////LECTURE DES DONNEES DU FICHIER :
$fichier="";
$add="";
$incr2=0;
$incr=0; //cette variable sert pour l'incrementation des lignes dans le fichier
$separateur=chr('9');
$file_to_open="fichiers/".$nomDestination;
$len=strlen($nomDestination)-4;
$html_file=substr($nomDestination,0,$len).".html";
$file_to_write="fichiers/".$html_file;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule
$fichier2 = fopen ($file_to_write, "w"); //fichier ouvert en écriture

fwrite($fichier2,$haut);//on insère l'entête de haut de fichier

// Tant qu'on est pas à  la fin calculer le nombre de lignes du tableau de données dans le fichier text
while (!feof($fichier)) {
// lire 4096 octets
$buffer = fgets($fichier, 4096);
// on stocke dans le tableau la chaine lue
$fichier_data[$incr2]=$buffer;
$data=extract_data($fichier_data[$incr2],$separateur);
$incr2=$incr2+1;
}
fclose ($fichier);
$incr2=$incr2-2;

$fichier = fopen ($file_to_open, "r"); //fichier ouvert en lecture seule

while (!feof($fichier)) {
// lire 4096 octets
$buffer = fgets($fichier, 4096);
// on stocke dans le tableau la chaine lue
$fichier_data[$incr]=$buffer;
$data=extract_data($fichier_data[$incr],$separateur);
$k=count($data)+1;
$var_inser[$incr]="";
//$var_inser[$incr]="base00[".$incr."]=new Array(";
for($i=1;$i<$k;$i++)
{
if($data[$i]==""){$data[$i]="-99999";}
if($data[$i]==" "){$data[$i]="-99999";}
$spe=chr('194');
$spe2=" ";
if($data[$i]==$spe){$data[$i]="-99999";}
if($data[$i]==$spe2){$data[$i]="-99999";}

if($incr==0 or $incr==($incr2-6) or $incr==($incr2)){
//if($i==1){$var_inser[$incr]="=new Array(";}
if($i>1){if($i<($k-1)){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}}
if($i==$k-1){$var_inser[$incr]=$var_inser[$incr].");"; $var_inser[$incr]=$var_inser[$incr]."\n";}
}else{
//if($i==1){$var_inser[$incr]="=new Array(";}

if($i==2){$var_inser[$incr]=$var_inser[$incr]."\"".$data[$i]."\"".",";}else{
if($i>1){if( $i<($k-1)){$var_inser[$incr]=$var_inser[$incr].$data[$i].",";}else{$var_inser[$incr]=$var_inser[$incr].$data[$i];}}
if($i==$k-1 ){$var_inser[$incr]=$var_inser[$incr].");"; $var_inser[$incr]=$var_inser[$incr]."\n";}
if($i==3){

//echo "<P>---| c =<b>".$data[$i]."</b> a ete genere";
$CODE[$incr]=$data[$i];
//echo "<P>---| c =<b>".$CODE[$incr]."</b> a ete genere";
}
}


}
}

//$var_inser[$incr]=$var_inser[$incr]."-99999)\n";
//fwrite($fichier2,$var_inser[$incr]);
$incr=$incr+1;
}
$incr=$incr-1;
$l=1;
fwrite($fichier2,"base00[0]=new Array(\"idcarte\",".$var_inser[0]);
for($g=0;$g<$reg;$g++)
{
for($z=1;$z<$incr-9;$z++){
//echo "<P>---|  <b>".$CODE[$z]."</b> ---------";
if($CODEREG[$g]==$CODE[$z]){
echo "<P>---|  <b>".$CODEREG[$g]."</b> ---------";
fwrite($fichier2,"base00[".$l."]=new Array(".$l.",".$var_inser[$z]);
$l=$l+1;
//echo "<P>---|  <b>".$var_inser[$g]."</b> ---------";
}
}
}
for($z=$incr-9;$z<$incr;$z++){
if($z==$incr-7 || $z==$incr-1)
{
fwrite($fichier2,"base00[".$l."]=new Array(\"".$l."\",".$var_inser[$z]);
}else{
fwrite($fichier2,"base00[".$l."]=new Array(".$l.",".$var_inser[$z]);
}
$l=$l+1;
//echo "<P>---|  <b>".$var_inser[$g]."</b> ---------";
}


fwrite($fichier2,$bas);//on insère l'entête de fin de fichier

fclose ($fichier);
fclose ($fichier2);



echo "<P>---| Le fichier <b>".$html_file."</b> a ete genere";
echo "<p>---| <a href='".$file_to_write."'>TELECHARGER</a>";



}//fin de if($etape!="")else..
?>
</font>
</body>
</html>
