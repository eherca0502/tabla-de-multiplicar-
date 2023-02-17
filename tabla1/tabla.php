<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
</head>
<body>
	<?php
	$numero =$_POST['numero'];
	?>
	<h1>Tabla de multiplicar</h1>
	<form method="post" action="verificar.php">
		<input type="hidden" name="numero" value="<?php echo $numero ?>">
	
		<table border="1">
			<tr>
				<th>Multiplicando</th>
				
				<th>Resultado</th>
			</tr>
			<?php
			
			for ($i = 1; $i <= 10; $i++) {
			
				echo "<tr>";
				echo "<td>$numero X $i =</td>";
				
				echo "<td><input type='number' name='resultados[]' required></td>";
				echo "</tr>";
			}
			?>
		</table>
		<br>
		<input type="submit" value="Verificar">
	</form>
</body>
</html>