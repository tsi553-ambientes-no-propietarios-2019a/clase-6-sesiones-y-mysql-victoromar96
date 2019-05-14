<?php 
include('php/conection.php');

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>QUEJAS</title>
</head>
<body>
	<table border="2">
		<tr>
			<td>Nombre</td>
			<th>Queja</th>
			<th>Fecha</th>
		</tr>

		<?php
			$sqlquery = "SELECT * FROM quejas";
			$res = $conn->query($sqlquery);
			while ($mostrar = $res->fetch_assoc()) {
			
		?>
		<tr>
			<td><?php echo $mostrar['username']?></td>
			<td><?php echo $mostrar['descrip_queja']?></td>
			<td><?php echo $mostrar['fecha']?></td>
		</tr>

		<?php
			}
		?>

	</table>
</body>
</html>