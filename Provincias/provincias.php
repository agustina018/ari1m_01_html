<center><h2>Ejercicio 46</h2></center>
<h3>Autonomía con más provincias</h3>
<?php
include('datos.php');
$autonomias=[];
foreach ($provincias as $p) {
	$a=$p ['autonomia'];
	$autonomias[$a] = 0;
	
}
foreach ($provincias as $p) {
	$a=$p ['autonomia'];
	$autonomias[$a] ++;
}
foreach ($autonomias as $p) {
	$a=$p ['autonomia'];
	$autonomias[$a] ++;
}
print_r($autonomias);
