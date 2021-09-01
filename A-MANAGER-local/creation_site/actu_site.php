<html>
<head><title>Altercarto.com : Actualisation des sites</title><meta http-equiv="Content-type" content="text/html; charset=utf-8"></head>
<body bgcolor="#FFFFFF" text="#000000">
<font face="Helvetica" size="2">
<script type="text/javascript">
var nomrep=""
/*
var mapX=new Array()
var menuIconeEchelle=new Array()
var mappocoord=new Array()
*/
</script>
<?php

function get_folder_listing( $dir, $ext_array ) {
		// Return an array of files in a directory.
		//
		// Result:
		// Nested array. Each file or folder is represented as
		// an array in the following format.
		//
		// [ "file", filename:String, size:String, date:String ]
		// [ "folder", foldername:String, size:String, date:String ]
		
		clearstatcache();
		$result = array();
		
		if ( is_dir($dir) ) {
		//echo ' hhh  '.$dir.' hhh  ';
			$dhandle = opendir($dir);
			if ( $dhandle ) {
			
				// Loop through files
				$filename = readdir( $dhandle );
				while ( $filename ) {
				
					if ( is_file( $dir . $filename ) ) {
						if ( count( $ext_array ) > 0 ) {
						
							// Filter files by extension
							$ok = false;
							for ( $i = 0; $i < count( $ext_array ); $i++ ) {
							
								if (strrchr( $filename, '.' ) == $ext_array[$i]) {
								
									$ok = true;
									break;
								}
							}
							if ( $ok == false ) {
								if ( strpos( $filename, "." ) !== 0 ) {
									array_push( $result, file_properties( $dir, $filename ) );
									
								}
							}
						} else {
							// No filter
							
							if ( strpos( $filename, "." ) !== 0 ) {
								array_push( $result, file_properties( $dir, $filename ) );
							}
						}
					} else {
						if ( strpos( $filename, "." ) !== 0 ) {
							$ck=true;
								foreach($ext_array as $k => $v)
								{// FILTRE LES REPERTOIRE
								// DEBUG: echo "v=$v et k=$k et filename=$filename";
									if($filename==$v)
										$ck=false;
								}
								
								if($ck==true)
									array_push( $result, array( "folder", $filename, format_byte_string( filesize( $dir . $filename ) ), date( "D, m/d/y, g:i A", filemtime( $dir . $filename ) ) ) );
						}
					}
					$filename = readdir( $dhandle );
				}
			}
			closedir( $dhandle) ;
		}
		
		return( $result );
	}

function file_properties ( $dir, $filename ) {
		// Return an array with file property information
		
		$result = array();
		array_push( $result, "file" );
		array_push( $result, $filename );
		array_push( $result, format_byte_string( filesize( $dir . $filename ) ) );
		array_push( $result, date( "D, m/d/y, g:i A", filemtime( $dir . $filename ) ) );
		return( $result );
	}
		function format_byte_string($bytes, $precision = 2, $names = '' ) {
		// Convert bytes to a human readable string.
		
		if (!is_numeric($bytes) || $bytes < 0) {
			return false;
		}
		
		for ($level = 0; $bytes >= 1024; $level++) {	 	 
			$bytes /= 1024;	 	 	 
		}
		
		switch ($level)
		{
			case 0:
				$suffix = (isset($names[0])) ? $names[0] : 'Bytes';
				break;
			case 1:
				$suffix = (isset($names[1])) ? $names[1] : 'KB';
				break;
			case 2:
				$suffix = (isset($names[2])) ? $names[2] : 'MB';
				break;
			case 3:
				$suffix = (isset($names[3])) ? $names[3] : 'GB';
				break;	 	 	 
			case 4:
				$suffix = (isset($names[4])) ? $names[4] : 'TB';
				break;	 	 	 	 	 	 	 	 	 	 	 	 	 	 
			default:
				$suffix = (isset($names[$level])) ? $names[$level] : '';
				break;
		}
		
		if (empty($suffix)) {
			trigger_error('Unable to find suffix for case ' . $level);
			return false;
		}
		
		return round($bytes, $precision) . ' ' . $suffix;
	}

///////////////////////////fin de fonction extract_data


echo '<br><br><center><dt><big><b>Actualisation des pages de site</b></big></dt></center><br>';
echo '<br><br><center><dt>Sélectionnez le site de votre choix dans la liste</dt></center><br>';
$dir="../../";
$ext_array= array();
$contents = get_folder_listing( $dir, $ext_array );
echo '<dt><center>';
for ( $i = 0; $i < count( $contents ); $i++ ) {
			
				$fileinfo = $contents[$i];
				if ( $i % 2 ) {
				
					// Odd
					//echo '<tr id="row_odd">';
				} else {
					// Even
					//echo '<tr id="row_even">';
				}
				if ( $fileinfo[0] == "file" ) {} else {
					if(substr($fileinfo[1],0,5)=="Site-" & substr($fileinfo[1],0,6)!="Site-0" ){
					echo '<dt><a href="mtdepas-actusite.htm?REP='.$fileinfo[1].'&SIT=" target="_self">'.$fileinfo[1].'</a></dt>';
					}
					/*
					if ( $fileinfo[1] == $REP[0] ){
					echo"<script type='text/javascript'>alert('Le nom de répertoire ".$REP[0]."existe déjà : choisissez un autre nom pour votre site');window.location.href='creation_site.php'</script>";
					};
					*/

				}
			}
			echo '<br><dt>------------------------------</dt>';

echo '<dt><a href="mtdepas-actusite.htm?REP=&SIT=Global" target="_self">Global</a></dt>';
echo '<dt>------------------------------</dt>';
echo '<dt><a href="mtdepas-actusite.htm?REP=&SIT=TextesetNotes" target="_self">Textes et Notes</a></dt></center>';



?>
</font>

</body>
</html>
