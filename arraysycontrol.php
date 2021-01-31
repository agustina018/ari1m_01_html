<?php
 // arrays
$nombres = [
	'1'=>'Andrei',
	'2'=>'Fabian',
	'3'=>'Héctor',
	'4'=>'Gabi',
	'5'=>'Nury',
	'6'=>'Dani',
	'7'=>'Macías',
	'8'=>'Isma',
	'9'=>'Jose',
	'10'=>'Jesus Alfonso',
	'11'=>'Sañudo',
	'12'=>'Rodras',
	'13'=>'Tresgo',
	'14'=>'Luis',
	'15'=>'Rule(Darius)',
	'16'=>'Ivi',
	'17'=>'Teje',
	];
	echo $nombres [rand(1,17)];
	print_r($nombres);
?>
<?php
$semana = [
	'lunes',
	'martes',
	'miercoles',
	'jueves',
	'viernes',
	'sabado',
	'domingo',
];
//dias de la semana con la R
	echo "Dias de la semana con la R:<br>";
	foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}
?>













