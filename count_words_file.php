<?php
	$f = "test_text.txt";
	 
	// read into string
	$str = file_get_contents($f);
	 
	// count characters
	$numChar = strlen($str);
	echo "This file have ". $numChar . " character(s)<br>";
	 
	// count characters withour spaces
	$str2 = ereg_replace('[[:space:]]+', '', $str);
	$numChar = strlen($str2);
	echo "This file have ". $numChar . " character(s) without spaces<br>";
	 
	// count words
	$numWords = str_word_count($str);
	echo "This file have ". $numWords . " words<br>";
	$str=strtolower($str);
	$wordfrequency = array_count_values( str_word_count( $str, 1,'0123456789') ); //including num as in the example
	
	echo "<p>Sorting alphabetically:</p>";
	
	ksort($wordfrequency,SORT_REGULAR);  //strtolower necessary for small and caps don't get separated //SORT_REGULAR sort num last
	foreach ($wordfrequency as $key => $val) {
	    echo "[" . $key . "] = " . $val . "<br>";
	}
	
	 
	?>