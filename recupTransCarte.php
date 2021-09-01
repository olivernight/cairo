<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="expires" content="0">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache, must-revalidate"> 
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">  
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<link rel=stylesheet type='text/css' href='style.css'>

</head><body>


<?php

//echo'<script language="javascript" >alert("recupTransCarte")</script>';

$nummapx=urldecode( $_GET['nummapx'] );

$chgt = urldecode( $_GET['chgt'] ); // indique quoi faire : 
															//1 -> créer un nouveau répertoire et ajouter le block MapsIliale.js (a+)
														    //0 -> écrire dans un répertoire existant et ne pas toucher à mapsIliade.js
$REPDEPModif = urldecode( $_GET['repcible'] );	// nom du répertoire à créer ou dans lequel on écrit	
		$REPDEPModif=str_replace(" ","%20",$REPDEPModif);	
		
$REPDEPART = urldecode( $_GET['rep'] ); // répertoire  ( nom du répertoire  carte à copier)
		//$REPDEPART=str_replace("%20"," ",$REPDEPART);

//$REPorigine = $REPDEPART;


$plateforme_distante = urldecode( $_GET['plateforme'] ); // nom de la plateforme distante où se situe le dossier carte à copier  dans la plateforme courante
		$plateforme_distante=str_replace("%20"," ",$plateforme_distante);

$pdd = urldecode( $_GET['pdd'] ); // nom de la plateforme de travail où l'on va copier le dossier carte ( plateforme de départ du travail en cours)
		$pdd=str_replace("%20"," ",$pdd);





function extractZip( $zipFile = '', $dirFromZip = '' )
{   

    define(DIRECTORY_SEPARATOR, '/');

    $zipDir = getcwd() . DIRECTORY_SEPARATOR;
	
    $zip = zip_open($zipDir.$zipFile);

    if ($zip)
    {
        while ($zip_entry = zip_read($zip))
        {
			
            $completePath = $zipDir . dirname(zip_entry_name($zip_entry));
            $completeName = $zipDir . zip_entry_name($zip_entry);
           
            // Walk through path to create non existing directories
            // This won't apply to empty directories ! They are created further below
			
            if(!file_exists($completePath) && preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
            {
				
                $tmp = '';
                foreach(explode('/',$completePath) AS $k)
                {
				 	$exp=explode('/',$completePath);
					
                    $tmp .= $k.'/';
					
                    if(!file_exists($tmp) )
                    {
						
                        @mkdir($tmp, 0777);
						
                    }
                }
            }
          
            if (zip_entry_open($zip, $zip_entry, "r"))
            {
				
                if( preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
                {
                    if ($fd = @fopen($completeName, 'w+'))
                    {
						
                        fwrite($fd, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
                        fclose($fd);
                    }
                    else
                    {
                        // We think this was an empty directory
                        mkdir($completeName, 0777);
						
                    }
                    zip_entry_close($zip_entry);
                }
            }
        }
        zip_close($zip);
		
    }
	zip_close($zip);
	
    return true;
}

function testDeZipLa($zipdist,$ziplocal){

	

if(is_file($ziplocal)){
	
extractZip( $ziplocal, str_replace(".zip","",$ziplocal) );

unlink($ziplocal);
//echo'<script language="javascript" >parent.deleteZipCartedist()</script>';
//sleep(3);
echo'<script language="javascript" >parent.modifMapsAndMappocoord()</script>';
}else{
sleep(1);
testDeZipLa($zipdist,$ziplocal);

}

}


function testZipdistant($zipdist,$ziplocal){
		

if(is_file($ziplocal)){

testDeZipLa( $zipdist,$ziplocal );

}else{

sleep(1);

copy($zipdist,'./'.$ziplocal);

rename('./'.$ziplocal,'./'.str_replace("%20"," ",$ziplocal));
		if(strpos($ziplocal,"20%")>0){
		unlink($ziplocal);
		}
$ziplocal=str_replace("%20"," ",$ziplocal);

testZipdistant($zipdist,$ziplocal);
}

}


testZipdistant($plateforme_distante.$REPDEPModif.'.zip',$REPDEPModif.".zip");

/**
* extractZip : This method unzips a directory within a zip-archive
*
* @author Florian 'x!sign.dll' Wolf
* @license LGPL v2 or later
* @link http://www.xsigndll.de
* @link http://www.clansuite.com
*/
?>

</body></html>