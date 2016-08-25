<?php

$var = "no";

function test() {
	$GLOBALS['var'] = "hello";
}

test();
echo $var;

?>