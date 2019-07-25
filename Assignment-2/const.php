<?php 
//Two ways of defining constant
const a='Hello world<br>';
define(a,'Hellow World');
$c=7;
const b='Hi';
echo a,b.$c;
echo "Hello {$c}".a,b;
echo "Hey".a."We all are fine";


?>