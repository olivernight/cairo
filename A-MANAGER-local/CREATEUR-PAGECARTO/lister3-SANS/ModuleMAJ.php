
<?php


global $X;
global $filter;
global $contents;
$contents2=array();
include('lister_simplement.class.php');
include('dir.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>Module MAJ</title>
<script language="javascript">
var liensSites=new Array()
var listpubcartovision=new Array()
var rangliste=new Array()
</script>
<!--script language="javascript" src="../../../mapsILIADE.js"></script>
<script language="javascript" src="../../../A-MANAGER-local/creation_site/liensSites.js"></script-->
<script language="javascript">

var doss=0
var N=0
var ici0=window.location.href
ici=ici0
//alert(ici)
var d1=0
var d2=0
var f=0
for(i=ici.length-1;i>=0;i-=1){
if(ici.substr(i,1)=="/"){i=-1}
d1+=1
}
ici=ici.substr(0,ici.length-d1)

for(i=ici.length;i>=0;i-=1){
if(ici.substr(i,1)=="/"){i=-1}
d2+=1
}
ici=ici.substr(0,ici.length-d2+1)
//alert(ici)
for(i=ici.length;i>=0;i-=1){
if(ici.substr(i,1)=="/"){i=-1}
f+=1
}
var DateMaj=ici0.substr(ici0.length-(d1+d2+f-3),f-2)


function toutselect(){

for (n=0;n<N;n++){
if(document.getElementById('xN['+n+']')){
document.getElementById('xN['+n+']').checked=true
document.getElementById('xN['+n+']').value="yes"
document.getElementById('N['+n+']').checked=true

document.getElementById('N['+n+']').value=document.getElementById('xN['+n+']').parentNode.id
}

}
}
function rienselect(){
for (n=0;n<N;n++){
if(document.getElementById('xN['+n+']')){
document.getElementById('xN['+n+']').checked=false
document.getElementById('xN['+n+']').value="no"
document.getElementById('N['+n+']').value="xyx"
}
}
}
function checkit(a){
n=a.id.replace("xN[","").replace("]","")


if(document.getElementById('xN['+n+']')){
if(document.getElementById('xN['+n+']').value=="yes" ){
document.getElementById('xN['+n+']').checked=false
document.getElementById('xN['+n+']').value="no"
document.getElementById('N['+n+']').setAttribute("value","xyx")
document.getElementById('N['+n+']').value="xyx"
}else{
document.getElementById('xN['+n+']').value="yes"
document.getElementById('xN['+n+']').checked=true
document.getElementById('N['+n+']').setAttribute("value",document.getElementById('N['+n+']').parentNode.id)
document.getElementById('N['+n+']').value=document.getElementById('xN['+n+']').parentNode.id
}

}
}
</script>


</head>



<body>
<script language="javascript">

</script>
<form id="maj" name="maj" method='post' action=''>

<div style="position:fixed;top:50px;left:30px">
<input type="button" value="exécuter le transfert" onclick="document.maj.submit()">
<br>
<input type="button" value="tout cocher" onclick="toutselect()">
<br>
<input type="button" value="ne rien cocher" onclick="rienselect()">
</div>
<span style="position:absolute;left:250px;top:0px;color:#008080;font-family:arial" ><big><b>Interface de transfert de dossier carte<br></b></big></span>
<span style="position:absolute;left:250px;top:25px;color:navy;font-family:arial;font-size:12px" ><b>Répertoire à récupérer : <br><span id="doscarte">carte</span><br>
Les fichiers seront placés dans le répertoire <span id="doscartedest">carte</span>
</b></span>

<span style="position:absolute;left:300px;top:130px" id="debut"></span>

<?php


$X=0;


$contents1=listingFolder($REP);

for($i=0;$i<count($contents1);$i++){


}




echo '<script language="javascript">
var cartici="'.$REP.'".replace("../../","")
//alert("count(contents1)='.count($contents1).'")
//alert("cartici="+cartici)
var cartila="'.$REPcible.'".replace("../../","")
var plt="'.$plateforme_distante.'".replace("&pdd='.$pdd.'","")
document.getElementById("doscarte").innerHTML=plt+"<span style=\'color:red\'><big>"+cartici+"</big></span>";
document.getElementById("doscartedest").innerHTML="'.$pdd.'<span style=\'color:red\'><big>"+cartila+"</big></span>";
document.getElementById("maj").setAttribute("action","'.$pdd.'A-MANAGER-local/CREATEUR-PAGECARTO/lister3-SANS/transcarte.php?platef='.$plateforme_distante.'&pdd='.$pdd.'&chgt='.$chgt.'&repcible='.$REPcible.'&reporigine='.$REPorigine.'");



</script>';
$X=listedir ($contents1,$X,$REP);
echo '<script language="javascript">
var list1dir=listedir
document.getElementById("debut").innerHTML=ecritfile+ecrit;
</script>';





for($i=0;$i<count($contents1);$i++){



$REP2=$REP."/".$contents1[$i][1];


$contents2=listingFolder($REP2);
$X=listedir ($contents2,$X,$REP2);
echo '<script language="javascript">
var list2dir=listedir;
for(z=0;z<list1dir.length;z++){
if(list1dir[z][0]=="'.$contents1[$i][1].'"){
document.getElementById(list1dir[z][3]+"-"+list1dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';



for($j=0;$j<count($contents2);$j++){
$REP3=$REP2."/".$contents2[$j][1];

$contents3=listingFolder($REP3);
$X=listedir ($contents3,$X,$REP3);
echo '<script language="javascript">
var list3dir=listedir;
for(z=0;z<list2dir.length;z++){
if(list2dir[z][0]=="'.$contents2[$j][1].'"){
document.getElementById(list2dir[z][3]+"-"+list2dir[z][0]).innerHTML=ecritfile+ecrit}
}
</script>';

for($k=0;$k<count($contents3);$k++){// 
$REP4=$REP3."/".$contents3[$k][1];

$contents4=listingFolder($REP4);
$X=listedir ($contents4,$X,$REP4);
echo '<script language="javascript">
var list4dir=listedir;
for(z=0;z<list3dir.length;z++){
if(list3dir[z][0]=="'.$contents3[$k][1].'"){
document.getElementById(list3dir[z][3]+"-"+list3dir[z][0]).innerHTML=ecritfile+ecrit}
}
</script>';

for($l=0;$l<count($contents4);$l++){//
$REP5=$REP4."/".$contents4[$l][1];

$contents5=listingFolder($REP5);
$X=listedir ($contents5,$X,$REP5);
echo '<script language="javascript">
var list5dir=listedir;
for(z=0;z<list4dir.length;z++){
if(list4dir[z][0]=="'.$contents4[$l][1].'"){
document.getElementById(list4dir[z][3]+"-"+list4dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


for($m=0;$m<count($contents5);$m++){

$REP6=$REP5."/".$contents5[$m][1];

$contents6=listingFolder($REP6);
$X=listedir ($contents6,$X,$REP6);
echo '<script language="javascript">
var list6dir=listedir;
for(z=0;z<list5dir.length;z++){
if(list5dir[z][0]=="'.$contents5[$m][1].'"){
document.getElementById(list5dir[z][3]+"-"+list5dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


for($m1=0;$m1<count($contents6);$m1++){
$REP7=$REP6."/".$contents6[$m1][1];

$contents7=listingFolder($REP7);
$X=listedir ($contents7,$X,$REP7);
echo '<script language="javascript">
var list7dir=listedir;
for(z=0;z<list6dir.length;z++){
if(list6dir[z][0]=="'.$contents6[$m1][1].'"){
document.getElementById(list6dir[z][3]+"-"+list6dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


for($m2=0;$m2<count($contents7);$m2++){

$REP8=$REP7."/".$contents7[$m2][1];

$contents8=listingFolder($REP8);
$X=listedir ($contents8,$X,$REP8);
echo '<script language="javascript">
var list8dir=listedir;
for(z=0;z<list7dir.length;z++){
if(list7dir[z][0]=="'.$contents7[$m2][1].'"){
document.getElementById(list7dir[z][3]+"-"+list7dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';



for($m3=0;$m3<count($contents8);$m3++){
$REP9=$REP8."/".$contents8[$m3][1];

$contents9=listingFolder($REP9);
$X=listedir ($contents9,$X,$REP9);
echo '<script language="javascript">
var list9dir=listedir;
for(z=0;z<list8dir.length;z++){
if(list8dir[z][0]=="'.$contents8[$m3][1].'"){
document.getElementById(list8dir[z][3]+"-"+list8dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';



for($m4=0;$m4<count($contents9);$m4++){
$REP10=$REP9."/".$contents9[$m4][1];

$contents10=listingFolder($REP10);
$X=listedir ($contents10,$X,$REP10);
echo '<script language="javascript">
var list10dir=listedir;
for(z=0;z<list9dir.length;z++){
if(list9dir[z][0]=="'.$contents9[$m4][1].'"){
document.getElementById(list9dir[z][3]+"-"+list9dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';

for($m5=0;$m5<count($contents10);$m5++){

$REP11=$REP10."/".$contents10[$m5][1];

$contents11=listingFolder($REP11);
$X=listedir ($contents11,$X,$REP11);
echo '<script language="javascript">
var list11dir=listedir;
for(z=0;z<list10dir.length;z++){
if(list10dir[z][0]=="'.$contents10[$m5][1].'"){
document.getElementById(list10dir[z][3]+"-"+list10dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


for($m6=0;$m6<count($contents11);$m6++){
$REP12=$REP11."/".$contents11[$m6][1];

$contents12=listingFolder($REP12);
$X=listedir ($contents12,$X,$REP12);
echo '<script language="javascript">
var list12dir=listedir;
for(z=0;z<list11dir.length;z++){
if(list11dir[z][0]=="'.$contents11[$m6][1].'"){
document.getElementById(list11dir[z][3]+"-"+list11dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';

for($m7=0;$m7<count($contents12);$m7++){

$REP13=$REP12."/".$contents12[$m7][1];

$contents13=listingFolder($REP13);
$X=listedir ($contents13,$X,$REP13);
echo '<script language="javascript">
var list13dir=listedir;
for(z=0;z<list12dir.length;z++){
if(list12dir[z][0]=="'.$contents12[$m7][1].'"){
document.getElementById(list12dir[z][3]+"-"+list12dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';

for($m8=0;$m8<count($contents13);$m8++){

$REP14=$REP13."/".$contents13[$m8][1];

$contents14=listingFolder($REP14);
$X=listedir ($contents14,$X,$REP14);
echo '<script language="javascript">
var list14dir=listedir;
for(z=0;z<list13dir.length;z++){
if(list13dir[z][0]=="'.$contents13[$m8][1].'"){
document.getElementById(list13dir[z][3]+"-"+list13dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';

for($m9=0;$m9<count($contents14);$m9++){

$REP15=$REP14."/".$contents14[$m9][1];

$contents15=listingFolder($REP15);
$X=listedir ($contents15,$X,$REP15);
echo '<script language="javascript">
var list15dir=listedir;
for(z=0;z<list14dir.length;z++){
if(list14dir[z][0]=="'.$contents14[$m9][1].'"){
document.getElementById(list14dir[z][3]+"-"+list14dir[z][0]).innerHTML=ecritfile+ecrit
}
}
</script>';


}

}

}



}

}

}

}

}

}

}

}

}

}

}










?>
<div style="display:none"><input name="L[0]" id="L[0]" type="text" value=""></div>
<!--div style="position: absolute;display:block; top:300px" id="mapXandCo">wwwwwwwww</div-->
</form>

<script language="javascript">

toutselect()


document.getElementById("L[0]").value=DateMaj
/*
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
    var nummapx=parseInt(urlvar['nummapx'])




var xf=''
for(z=0;z<5;z++){
xf+='<input name="M['+z+']"  type="text" value="'+mapX[(nummapx+z)]+'"><br>'

}
xf+='<input name="S[0]"  type="text" value="'+sommableEchelle[nummapx/5]+'"><br>'
xf+='<input name="X[0]"  type="text" value="'+libelmap[nummapx/5][0]+'"><br>'
xf+='<input name="X[1]"  type="text" value="'+libelmap[nummapx/5][1]+'"><br>'
xf+='<input name="X[2]"  type="text" value="'+libelmap[nummapx/5][2]+'"><br>'
xf+='<input name="X[3]"  type="text" value="'+libelmap[nummapx/5][3]+'"><br>'
xf+='<input name="X[4]"  type="text" value="'+libelmap[nummapx/5][4]+'"><br>'
xf+='<input name="X[5]"  type="text" value="'+libelmap[nummapx/5][5]+'"><br>'
xf+='<input name="X[6]"  type="text" value="'+libelmap[nummapx/5][6]+'"><br>'
xf+='<input name="X[7]"  type="text" value="'+libelmap[nummapx/5][7]+'"><br>'



document.getElementById("mapXandCo").innerHTML=xf
*/
</script>

<div style="position:absolute;top:3000px;font-family:arial;color:gray">GaïaMundi - H.Paris/Altercarto/Cité Publique [2006-229] GNU GPL</div>

</body></html>