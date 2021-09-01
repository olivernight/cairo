
var leH="";
leH+='<div>';
leH+='<div style="position:relative;">';//left:80px
leH+='	<header style="width:1180px">';
    	
leH+='        <div >';//class="logo col_12 col"
leH+='        <table><tr>';
var lienverssite="";
if(typeof(linkbase)=='undefined'){
if(typeof(titrepage!='undefined')){	
	if(titrepage.indexOf('onclick="javascript')>=0){
	lienverssite=titrepage.split('onclick="javascript:window.open(\'')[1].split('\'')[0]
}else{
	lienverssite=titrepage.split("onclick='javascript:window.open(\"")[1].split("\"")[0]	
		
	}
	
	}else{lienverssite="http://suitecairo.fr"}
	
leH+='        <td style="vertical-align:top"><br><a href="'+lienverssite+'" target="_blank"><img src="PageCarto/Logo-x.jpg" width="160px"></a><br><div style="position relative"><div style="position:relative;left:0px"><!--a href="XXXXXXXXX.html" target="__blank" style="text-decoration:none;color:gray;font-size:62px"><b onmouseover="this.style.color=\'#0166B8\'" onmouseout="this.style.color=\'gray\'">XXXXXXXX</b></a--></div></div></td>';	
	}else{
		
	lienverssite=linkbase	
leH+='        <td style="vertical-align:top"><br><a href="'+lienverssite+'" target="_blank"><img src="../../../logomoyen.jpg" width="160px"></a><br><div style="position relative"><div style="position:relative;left:0px"><!--a href="XXXXXXXXX.html" target="__blank" style="text-decoration:none;color:gray;font-size:62px"><b onmouseover="this.style.color=\'#0166B8\'" onmouseout="this.style.color=\'gray\'">XXXXXXXX</b></a--></div></div></td>';		
	}


leH+='        <td style="vertical-align:top" width="297px"></td>';
//leH+='        <td style="vertical-align:top"><div style="position:relative;left:-300px;top:-0px"><br><a href="http://altercarto.fr" target="_blank"><img width="125px" src="Logo-altercarto.jpg" ></a></div></td>';
leH+='        <td style="vertical-align:top" width="0px"></td>';
leH+='        <td style="vertical-align:top">'
								leH+='        <nav style="margin-top:0px;">';
								//leH+='        	<ul style="float:right;">';
								//leH+='            	<li class="last" id="sommairesite" style="font-family:arial;font-weight:bold">';

								//leH+='				</li>';

								//leH+='            </ul>';
								leH+='        </nav>';
leH+='		  </td>';
leH+='        </tr></table>';
leH+='        </div>';
       

leH+='      <div class="clear"></div>';

if(typeof(linkbase)!='undefined'){

leH+='<div style="position:relative;left:0px"><span style="font-size:45px;color:gray" ><a href="../../../index.html" target="_blank" style="text-decoration:none;color:gray"><b onmouseover="this.style.color=\'#0166B8\'" onmouseout="this.style.color=\'gray\'">Cartes Données Scénarios</b></a></span></div>';
}
leH+='    </header>';
leH+='</div>';
leH+='</div>';

doc("leHeader").innerHTML=leH;






















