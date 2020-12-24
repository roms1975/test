<?php

    /*
    $str = "Привет! Давно не виделись.";
    $result = revertCharacters($str);
    echo $result . "\n";
    */

    function revertCharacters($str) {
    	$line = preg_replace_callback(
	    '/\b(\w+)\b/u', 
	    function($matches) {
		$in_str = $matches[0];
		
		preg_match_all('/./us', $in_str, $array);


	        $str = join('', array_reverse($array[0]));
		if (mb_strtolower($in_str) != $in_str) {
			$str = mb_convert_case($str, MB_CASE_TITLE);
		}

		return $str;
	    },
	    $str
	);


	return $line;
    }

?>