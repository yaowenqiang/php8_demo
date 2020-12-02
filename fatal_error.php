<?php
$a = 'abc';
//var_dump($a{1});
$a = 'a';
$b = 'b';
$c = 'c';
$d = 'd';
$e = 'e';
$g = $a?$b:$c?$d:$e;
var_dump($g);
?>
