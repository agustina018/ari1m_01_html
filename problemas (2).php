		<h2>Ejercicio 1</h2>
		<h3>Se quiere construir un jardín de 1 m de ancho alrededor de una fuente circular de 4 m de diámetro. Si los paquetes de césped fuesen de 7 m2, ¿cuántos paquetes harían falta comprar para cubrir el jardín?</h3>
		<img src="fuente.PNG">
		<form>
			Ancho del jardín
			<input id="ancho" name="ancho" onkeyup="calcular()" value="1" />
			Diámetro de la fuente
			<input id="d" name="d" onkeyup="calcular()"/ value="4">
			<button>calcular</button>
		</form>
		<div id="paquetes" style="
		padding:20px;
		background-color:lightGray;">Resultado</div>
		<script>
		function calcular(){
			ancho=document.getElementById("ancho").value;
			d=document.getElementById("d").value;
			areaancho=1*3.14*ancho;
			aread=4*3.14*d;
			paq=areaancho-aread;
			paq=Math.round(paq*100)/100;
			document.getElementById('paquetes').innerHTML= paq;
			}calcular();
		</script>

		<h2>Ejercicio 2</h2>
		<h3>Halla la apotema de un hexágono regular de 20 cm de lado.</h3>
		<img src="rectangulo.PNG">
		<form method="get">
		Lado
		<input id="L" name="L" placeholder="lado" value="20" onkeyup="calcular2()"/>
		Nº Lados
		<input id="N" name="N" placeholder="numero lados" value="6" onkeyup="calcular2()"/>
		<button onclick="calcular2()">Calcular</button>
		</form>
		<div id="aptm" style="
		padding:20px;
		background-color:lightGray;">
		Resultado
		</div>
		<script>
		function calcular2(){
			L=document.getElementById("L").value;
			N=document.getElementById("N").value;
			aptm=L/(2*Math.tan(Math.PI/N));
			aptm=Math.round(aptm*100)/100;
			document.getElementById('aptm').innerHTML= aptm+'cm';
			}calcular2();
		</script>
		<?php
			if (isset($_GET['L'])) {
					$L=$_GET['L'];
					$N=$_GET['N'];
				echo 'resultado=' . ($L/(2*tan(M_PI/$N)));
				}
		?>

		<h2>Ejercicio 3</h2>
		<h3>En una oposición que consta de un test, una persona contesta 45 preguntas y obtiene 183 puntos.Por cada pregunta bien contestada dan 5 puntos y por cada una mal contestada quitan 2 puntos.¿Cuántas contesto bien y cuántas mal?</h3>
		<form method ='get'>
		Numero de preguntas
		<input id ="num" name ="num" onkeyup="calcular3()" value="45"/>
		Puntos
		<input id ="puntos" name ="puntos" onkeyup="calcular3()" value="183"/>
		<button>Calcular</button>
		</form>
		<div id="aciertos" style="
		padding:20px;
		background-color:lightgreen;
		">
		Aciertos
		</div>
		<div id="fallos" style="
		padding:20px;
		background-color:#ffcccb; 
		">
		Fallos
		</div>
		<script>
			function calcular3(){
			num=document.getElementById("num").value;
			puntos=document.getElementById("puntos").value;
			y=(5*num-puntos)/7;
            x=num-y;
			document.getElementById('aciertos').innerHTML= x;
			document.getElementById('fallos').innerHTML= y;
			}calcular3();
		</script>

			
			