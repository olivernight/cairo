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
copy ('http://altko.org/A0-MAJ-GAIAMUNDI/'.$import.'.zip', $import.'.zip');
echo '<script language="javascript">window.location.href="dzipMAJ.php?Z='.$import.'"</script>';
?>