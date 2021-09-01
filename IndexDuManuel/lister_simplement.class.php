<?php 
	// Lister Simplement
	// ------------------------------
	// Afficher le contenu d'un répertoire très simplement..
	
	// Created by: PHPVIK@gmail.com
	
	// Code basé sur
	// The Simple File Browser is released under the GNU Public License.
		
	function get_folder_listing( $dir, $ext_array ) {
	//echo '<script language="javascript">alert("dans get_folder_listing $dir=  '.$dir .'")</script>';
		//echo '<script language="javascript">alert("dans get_folder_listing $ext_array[0]=  '.$ext_array[0] .'")</script>';
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
	
?>