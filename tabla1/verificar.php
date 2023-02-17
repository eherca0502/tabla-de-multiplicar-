<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar - Resultados</title>
	<style type="text/css">
		.correcto {
			color: green;
			font-weight: bold;
		}
		.incorrecto {
			color: red;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<form action="index.html" align="center">
	<h1>Tabla de multiplicar - Resultados</h1>
	<table border="1" align="center">
		<tr>
			<th>Multiplicando</th>
			<th>Resultado Ingresado</th>
			<th>Verificación</th>
		</tr>
		<?php
		$numero = $_POST['numero'];
		$resultados = $_POST['resultados'];
		$correctos=0;
		$incorrectos=0;
		for ($i = 1; $i <= 10; $i++) {
			$resultado_esperado = $numero * $i;
			$resultado_ingresado = $resultados[$i-1];
			if ($resultado_esperado == $resultado_ingresado) {
				$verificacion = "<span class='correcto'>Correcto</span>";
				$correctos++;
			} else {
				$verificacion = "<span class='incorrecto'>Incorrecto</span>";
				$incorrectos++;
			}
			echo "<tr>";
			echo "<td>$numero X $i =</td>";
		
			echo "<td>$resultado_ingresado</td>";
			echo "<td>$verificacion</td>";
			echo "</tr>";
		}
		
		?>
	</form>
	</table><?php
	if($correctos==10)
		{
			echo '<label>FELICIDADES</label><br>';
		}
		?>
	    <br><label>Correctos = <?php echo $correctos ?></label><br>
		<label>Incorrectos = <?php echo $incorrectos ?></label><br><br>
	<button type="submit">Regresar</button>

</body>
</html>

