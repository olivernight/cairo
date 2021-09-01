<?php


/**
* This method unzips a directory within a zip-archive
*
* @author Florian 'x!sign.dll' Wolf
* @license LGPL v2 or later
* @link http://www.xsigndll.de
* @link http://www.clansuite.com
*/

$import=$_REQUEST['Z'];
//echo '<script language="javascript">alert("'.$import.'")</script>';
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
    return true;
}

// The call to exctract a path within the zip file
extractZip( $import.'.zip', $import );
echo '<script language="javascript">window.location.href="A-MANAGER-local/listerepMAJinfo.php"</script>';
?>