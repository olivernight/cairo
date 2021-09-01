<?php
$nom = urldecode( $_GET['NOM'] );
//echo'<script>alert("PageCartoDossier-SANS-'.$nom.'.zip")</script>';


$MyDirectory = opendir("./".$nom);
    while (false !== ($file = @readdir($MyDirectory))) {

    if ($file == 'PageCartoDossier-SANS-'.$nom.'.zip') {

		echo '<script language="javascript">
		parent.document.getElementById("testtel").style.display="block";
		
		
		parent.document.getElementById("endate").innerHTML="daté du '.date ('F d Y H:i:s', filemtime("./".$nom.'/'.$file)).'<br><br>ou bien";
		
		</script>';
		}

		

    }
closedir($MyDirectory);
/**/

?>