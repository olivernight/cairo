
<?php
global $X;
global $filter;
global $contents;
$contents2=array();
include('MAJ_lister_simplement.class.php');
include('dirMAJinfo.php');




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Module MAJ</title>
<script language="javascript">
var MAJ=new Array()
var liensSites=new Array()
var listpubcartovision=new Array()
var rangliste=new Array()
</script>
<script language="javascript" src="../../mapsILIADE.js"></script>
<script language="javascript" src="../../A-MANAGER-local/creation_site/liensSites.js"></script>
<script language="javascript">

var k=0
var initpop=0

function popupX(page,var1,var2) {
initpop=1
document.open(page,var1,var2)
pop=document.open(page,var1,var2)
}

function popupfichMAJ(a){
if(initpop==1){
pop.close()
}
popupX('popupMAJ.html#_'+a,'fiche MAJ','width=450,height=500,top=150px,left=650px,toolbar=0,menuBar=1,scrollbars=1,resizable=1')
window.blur()
}







var N=0

function toutselect(){
for (n=0;n<N;n++){
document.getElementById('N['+n+']').checked=true
document.getElementById('N['+n+']').value=document.getElementById('N['+n+']').parentNode.id
//alert(document.getElementById('N['+n+']').parentNode.id)
}
}
function rienselect(){
for (n=0;n<N;n++){
document.getElementById('N['+n+']').checked=false
document.getElementById('N['+n+']').value=""
}
}
function checkit(a){

if(a.checked==false){a.value=""}else{a.value=a.parentNode.id}
}
</script>


</head>



<body>

<form name="maj" method='post' action='MAJ.php'>

<div style="position:fixed;top:50px;left:30px;display:none">
<input type="button" value="exécuter la mise à jour" onclick="document.maj.submit()">
<br>
<input type="button" value="tout cocher" onclick="toutselect()">
<br>
<input type="button" value="ne rien cocher" onclick="rienselect()">
</div>
<!--span style="position:absolute;left:250px;top:20px;color:#008080;font-family:arial" ><center><big><b>GaïaMundi<br>Interface de Mise à Jour des fichiers d'application</b></big></center></span>
<span style="position:absolute;left:250px;top:80px;color:red;font-family:arial" ><b>liste des MAJ téléchargeables (datées) </b></span -->
<span style="position:absolute;left:80px;top:30px" id="debut"></span>

<?php



$X=0;

$REP="";
$contents1=listingFolder($REP);


$X=listedir ($contents1,$X,$REP);
echo '<script language="javascript">
var list1dir=listedir
document.getElementById("debut").innerHTML=ecritfile+ecrit;
</script>';



/*

for($i=0;$i<count($contents1);$i++){
$REP2=$contents1[$i][1];
$contents2=listingFolder($REP2);
$X=listedir ($contents2,$X,$REP2);
//echo '<script language="javascript">alert(ecrit)</script>';
//echo '<script language="javascript">var list2dir=listedir;document.getElementById(list1dir['.$i.'][0]).innerHTML=ecrit</script>';
echo '<script language="javascript">
var list2dir=listedir;
for(z=0;z<list1dir.length;z++){
if(list1dir[z][0]=="'.$contents1[$i][1].'"){
document.getElementById(list1dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';



for($j=0;$j<count($contents2);$j++){
$REP3=$REP2."/".$contents2[$j][1];
$contents3=listingFolder($REP3);
$X=listedir ($contents3,$X,$REP3);
//echo '<script language="javascript">alert(ecrit)</script>';
echo '<script language="javascript">
var list3dir=listedir;
for(z=0;z<list2dir.length;z++){
if(list2dir[z][0]=="'.$contents2[$j][1].'"){
document.getElementById(list2dir[z][0]).innerHTML=ecritfile+ecrit}

}
</script>';

for($k=0;$k<count($contents3);$k++){
$REP4=$REP3."/".$contents3[$k][1];
$contents4=listingFolder($REP4);
$X=listedir ($contents4,$X,$REP4);

//echo '<script language="javascript">var list4dir=listedir;document.getElementById(list3dir['.$k.'][0]).innerHTML=ecrit</script>';


echo '<script language="javascript">
var list4dir=listedir;
for(z=0;z<list3dir.length;z++){
if(list3dir[z][0]=="'.$contents3[$k][1].'"){
document.getElementById(list3dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';






for($l=0;$l<count($contents4);$l++){
$REP5=$REP4."/".$contents4[$l][1];
$contents5=listingFolder($REP5);
$X=listedir ($contents5,$X,$REP5);
//echo '<script language="javascript">var list5dir=listedir;document.getElementById(list4dir['.$l.'][0]).innerHTML=ecrit</script>';
echo '<script language="javascript">
var list5dir=listedir;
for(z=0;z<list4dir.length;z++){
if(list4dir[z][0]=="'.$contents4[$l][1].'"){
document.getElementById(list4dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


for($m=0;$m<count($contents5);$m++){
$REP6=$REP5."/".$contents5[$m][1];
$contents6=listingFolder($REP6);
$X=listedir ($contents6,$X,$REP6);
//echo '<script language="javascript">var list5dir=listedir;document.getElementById(list4dir['.$l.'][0]).innerHTML=ecrit</script>';
echo '<script language="javascript">
var list6dir=listedir;
for(z=0;z<list5dir.length;z++){
if(list5dir[z][0]=="'.$contents5[$m][1].'"){
document.getElementById(list5dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';

}

}

}

}

}
*/









?>

</form>

<script language="javascript">
// mettre les images ? dans les balises <img

for(i=0;i<k;i++){
document.getElementById("im"+i).src="help.png"

}
//toutselect()

</script>
<div style="position:fixed;top:0px;text-align:center;font-family:arial;width:100%;font-size:11px;background-color:#E9E2F4">
<span style="font-family: Arial;"><b><big>
Séléctionnez pour exécuter</big></b></span>






</div>
<div style="position:absolute;top:3000px;font-family:arial;color:gray">GaïaMundi - H.Paris/Altercarto/Cité Publique [2006-229] GNU GPL</div>

</body></html>