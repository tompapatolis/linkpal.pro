<?php 

/**
 * Function to create random passwords
 * @param  integer $length Length of password
 * @param  boolean $secure Use special characters
 * @return String          The password
 */
function passgen($length = 8, $secure = false){
	if($secure) {
		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
	} else {
		$chars =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.
            '0123456789';
	}

  $str = '';
  $max = strlen($chars) - 1;

  for ($i=0; $i < $length; $i++)
    $str .= $chars[random_int(0, $max)];

  return $str;
}


function getCategories() {
    $dir   = 'links';
    $files = scandir($dir);
    $files = array_diff($files, array('..', '.'));
    return $files;
}

function getTitle($file) {
   $title = substr($file, 3);
   $title = str_replace('_',' ',$title);
   $title = str_replace('.links','',$title);
   $title = ucwords($title);
   return $title;
}

function getLinks($file){
    $rows   = file('links/'.$file);
    $links  = array();
    $parts  = array();

    foreach ($rows as $row) {
        $line = explode(';',$row);
        if (!array_key_exists(1, $line)) {continue;} //Empty Line
        $parts['url']       = $line[0];
        $parts['title']     = $line[1];
        $parts['desc']      = $line[2];
        $parts['class']     = '';
        if (array_key_exists(3, $line)) {
            $parts['class']     = $line[3];
        }
        array_push($links,$parts);
    }

    return $links;

}

?>