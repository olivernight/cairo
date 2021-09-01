<html>
<head>
<title>Sauvegarde - Restauration</title>
<script language="javascript" src="mapsILIADEmotpas.js"></script>
<script type="text/javascript">
/*
var mt
var idmt=0
var mt2='xxxxx'
var aw2=window.location.href
mt=prompt('saisissez votre mot de passe',mt2);
for(i=0;i<mtpas.length;i++){
if(mt==mtpas[i]){idmt=1}

}
var retconfirm=false
if(idmt!=1){
retconfirm=confirm("désolé, votre mot de passe est incorrect, voulez vous recommencer?");
if(retconfirm==true){

window.location.href=aw2
}else{
window.location.href="vide.html"

}
}
*/


var control=""
 var urlvar=''
    
    if (window.location.search != '') {
    longueur = window.location.search.length - 1;
    
    data = window.location.search.substr(1,longueur);
    donnees = data.split('&');
    urlvar = new Array();
    urlvarnum = new Array();
    for (var i=0; i < donnees.length; i++) {
    position = donnees[i].indexOf('=');
    variable = donnees[i].substr(0,position);
    pos = position + 1;
    valeur = decodeURI(donnees[i].substr(pos,donnees[i].length));
    while (valeur.search(/\+/) != -1)
    valeur = valeur.replace(/\+/,' ');
    urlvar[variable] = valeur;
    urlvarnum[i] = valeur;
    }
    }
    //alert(urlvarnum)
    
/*if(urlvar['control']){control=(urlvar['control'])}else{}

if(control!=1){window.location.href="vide.html"}
*/
var repici=urlvar['url'].split("/A0 PageCarto")[0].split("/");
repici=repici[repici.length-1];
//alert(repici)
</script>
</head>
<body style="margin-left:50px;margin-top:50px;font-family:arial;font-size:10px;">


<?php
$suitecairoName = urldecode( $_GET['url'] );
$suitecairoName2=explode("/A0 PageCarto",$suitecairoName);
$suitecairoName3=$suitecairoName2[0];
$suitecairoName4=explode("SuiteCairo-",$suitecairoName3);
$suitecairoName="SuiteCairo-".$suitecairoName4[1];
copy("zipper_repertoire_recursif.php","../zipper_repertoire_recursif.php");
echo '

<iframe name="zip_and_download" style="display:none;width:0px"></iframe>
<script language="javascript">
function zip_and_telecharge(a,b,c){
	
window.frames.zip_and_download.location.href="../zipper_repertoire_recursif.php?REPDEPART="+a+"&NOMZIP="+b+"&REPDESTINATION="+c		
}

/*
var rep0=window.location.href.split("/");
var replateformeSuiteCairo=rep0[rep0.length-2];
*/

function zipztelecharge(){
zip_and_telecharge("'.$suitecairoName.'","'.$suitecairoName.'.zip","");	

}

function telecharge(a){
window.frames.zip_and_download.location.href=a	
}
document.write("<center><span id=\"t1\" style=\"display:none\"><h3><b id=\"ici\" onclick=\"\" style=\"cursor:pointer;color:blue;\"><u>Téléchargez <b style=\"color:green\"> '.$suitecairoName.'.zip</b></u></b><br>( <span id=\"dt\"></span> )</h3><br><big>Ou bien : </big><br><br></span><h3><b id=\"la\" onclick=\"zipztelecharge()\" style=\"cursor:pointer;color:blue\"><u><span id=\"re\"></span>Zippez et téléchargez <b style=\"color:green\"> '.$suitecairoName.'.zip</b> et toutes ses cartes et données</u></b></h3><br><br><big>NB. Cela peut prendre plusieurs minutes.<br><b style=\"color:orange\">Attendez le signal de téléchargement.</b></big></center>");

</script>';

$MyDirectory = opendir("../");
    while (false !== ($file = @readdir($MyDirectory))) {

    if ($file == $suitecairoName.'.zip') {
		//echo'<script>alert("'.$suitecairoName.'.zip")</script>';
		//echo "$filename a été modifié le : " . date ("F d Y H:i:s.", filemtime('../'.$file));
		echo '<script language="javascript">
		document.getElementById("t1").style.display="block";
		document.getElementById("re").innerHTML="re-";
		document.getElementById("ici").setAttribute("onclick","telecharge(\"../'.$file.'\")");
		document.getElementById("dt").innerHTML="dernière mise à jour : '.date ('F d Y H:i:s.', filemtime('../'.$file)).'";
		
		</script>';
		}

		

    }
closedir($MyDirectory);
/**/

?>
</body>
</html>