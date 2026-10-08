?php
// Variables de partida
$a = 10;
$b = "10";
$c = 5;
$d = 'Hola pepe';
$e = 'Hola luis';
$f = 'hola';

// Comprobamos las expresiones
var_dump($a == $b); // true, porque el valor es el mismo aunque el tipo sea diferente
var_dump($a === $b); // false, porque el tipo es diferente (int vs string)
var_dump($a !== $b); // true, porque el tipo es diferente
var_dump($c > $a); // false, porque 5 es menor que 10
var_dump($a != $c); // true, porque 10 es diferente de 5
var_dump($a <> $c); // true, porque 10 es diferente de 5
var_dump($d == $e); // false, porque los valores son diferentes

// Comparación de cadenas
var_dump($d[0] == $e[0]); // true, porque ambos comienzan con 'H'
var_dump($d[0] === $f[0]); // false, porque 'H' (mayúscula) no es igual a 'h' (minúscula)

?>