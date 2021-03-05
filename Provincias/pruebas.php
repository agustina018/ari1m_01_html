<center><h2>Ejercicio 29</h2></center>
<h3>¿Cuánto mide el nombre de autonomía más corto?</h3>
<?php
$numero = 100;
$menor = " ";
foreach($provincias as $var1){
	if($numero > strlen($var1['autonomias'])){
		$numero = strlen($var1['autonomias']);
		$menor=$var1;
		echo $menor['autonomias'] . " con " . $numero . " caracteres";
	}
}
?>
<?php
include('datos.php')
print_r($provincias);
foreach ($provincias as $p) {
	# code...
}
echo $p['provincias'];
?>





<?php
$autonomias=[];
foreach ($provincias as $p ) {
	$a=$p ['autonomia'];
	$autonomias[$a]= $autonomias [$a]
	+$p ['superficie']
	# code...
}
?>

