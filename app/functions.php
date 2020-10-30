<?php 

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

function getJSON() {
  $json  = file_get_contents('./links.json');
  $links = json_decode($json, TRUE);
  usort($links, 'compare_order');
  return $links;
}

function compare_order($a, $b) {
  return strnatcmp($a['order'], $b['order']);
}

?>