<?php
 
//let's declare variables
$a = 5;
$b = 10;
 
print 'Original value of a and b is ' . $a . ' & ' . $b . '<br>';
 
print '<br>After exchanging: <br>';
 
//now exchange the values without introducing a 3rd variable
list($a, $b) = array($b, $a); 
 
print 'Exchanged value of a and b is ' . $a . ' & ' . $b;
 
?>