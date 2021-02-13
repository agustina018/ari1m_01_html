<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
</head>
<h2>Ejercicio 1</h2>
<h3>Crea un array con el nombre de tus compañeros, en qué puesto se sienta y selecciona uno de ellos al azar indicando su nombre y puesto:</h3>
<br/>
<?php
$compis = [
	'1'=> 'Andrei',
	'2'=> 'Fabi',
	'3'=> 'Hector',
	'4'=> 'Gabi',
	'5'=> 'Nury',
	'6'=> 'Agus',
	'7'=> 'Daniel',
	'8'=> 'Jesús',
	'9'=> 'isma',
	'10'=> 'Pepe',
	'11'=> 'Fonso',
	'12'=> 'Sañudo',
	'13'=> 'Rodras',
	'14'=> 'Alvaro',
	'15'=> 'Darius',
	'16'=> 'Ivan',
	'17'=> 'Teje',
];
$i=rand(0,count($compis));
$c=0;
foreach($compis as $m=>$nombre){
		$c++;

		if($i==$c)
			echo $m. '-'.$nombre.'<br/>';
}
?>
<div id="n"></div>
<script>
compis = [
	'1 Andrei',
	'2 Fabi',
	'3 Hector',
	'4 Gabi',
	'5 Nury',
	'6 Agus',
	'8 Daniel',
	'7 Jesús',
	'9 Isma',
	'10 Pepe',
	'11 Fonso',
	'12 Sañudo',
	'13 Rodras',
	'14 Alvaro',
	'15 Darius',
	'16 Ivan',
	'17 Teje',
]
i=Math.random()*(compis.length -1);
i=Math.round(i);
console.log(i);
document.getElementById('n').innerHTML =compis[i];
</script>
<h2>Ejercicio 2</h2>
<h3>Almacena en un array la tabla de cuadrados perfectos y muestra el contenido del array:</h3>
<br/>
<pre>
<?php
//cuadrados perfectos
$cuadrados=[];
for ($i=0; $i <50 ; $i++) { 
	$cuadrados[]=$i*$i;
	# code...	
} 
print_r($cuadrados)
?>
</pre>
<div id="num"></div>
<script>
tabla=[];
for(i = 0;i<=50;i++){
    tabla[i]=i*i;
} console.log(tabla);
for(i in tabla)
document.getElementById('num').innerHTML =tabla;
</script>
<h2>Ejercicio 3</h2>
<h3>Muestra el listado ordenado de días de la semana que contengan la letra R:</h3>
<div id="se"></div>
<script>
	semana = [
		'lunes',
		'martes',
		'miercoles',
		'jueves',
		'viernes',
		'sabado',
		'domingo',
		];
		
for (i = 0; i < semana.length ; i++) {
	n = semana[i].indexOf("r");
	if (n > 0){
		document.getElementById('se').innerHTML += semana[i]+ "<br>";
	}}
</script></br>
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
	
	foreach ($semana as $c){
	if(strpos($c,"r")){
		echo "$c <br>";
	}
}
?>














