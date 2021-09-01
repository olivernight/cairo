

var bandeauTexte='<table cellpadding="0" cellspacing="0"><tr>'
bandeauTexte+='<td width="10px"></td>'
/*
			bandeauTexte+='<td>'
			bandeauTexte+='<img src="Logo-Villeurbanne2.jpg" style="width: 210px">'
			bandeauTexte+='</td>'
			bandeauTexte+='<td width="10px"></td>'

*/
bandeauTexte+='<td style="vertical-align:middle">'
bandeauTexte+='<span style="color:#548DD4;font-size:26px;cursor:pointer" onclick="window.open(\'http://188.165.251.203/cairo/spip.php?article8\')">PageCarto</span>'
bandeauTexte+='<br>'
bandeauTexte+='<span style="color:gray;font-size:22px">Interface de Scénarisation</span>'
bandeauTexte+='</td>'
bandeauTexte+='<td width="10px"></td>'
bandeauTexte+='<td  ><br><br><img  src="redem.jpg" style="cursor: pointer" onclick="aleatoire = Math.random();window.location.href=PageIci+\'?rd=\'+aleatoire+\'&modif=\'+modif" title="redémarrer le module scénarisation"> </td>'
bandeauTexte+='</tr></table>'
document.getElementById("bandeauTexte").innerHTML=bandeauTexte