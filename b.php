<?php

$cp = 0;

$letters = implode('',array_merge(range('a','z')));

for ($i = 0; $i < 1000; $i++) {

  $word = substr(str_shuffle($letters),0,rand(3,5));
	
	if (strrev($word) == $word) {
	
	 $cp++;
	
	}
	
	echo ($i+1).' '.$word.'<br />';
		
}

echo "Palidromes Qty: ".$cp;

?>