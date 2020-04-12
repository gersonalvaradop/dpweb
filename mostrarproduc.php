<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Lista de productos.</title>
</head>
<body>
<center>
		<table border="1">
		<thead>	
		<tr>
			<td colspan="9"><a href="productosadmin.php">Ingresar Nuevo Producto</a></td>
		</tr>		
			<tr>

				<td>Producto</td>
				<td>precio Unitario</td>
				<td>Cantidad</td>
				<td>Provedor</td>
				<td>imagen</td>
				<td>Descripcion</td>
				<td>Categoria</td>
				<td colspan="2">Modificar/Eliminar</td>
			</tr>
			<tbody>
				<?php include ('conexion.php');
				$query = "SELECT * FROM producto";
				$resultado = $conexion-> query($query);
				while ($row=$resultado->fetch_assoc()) {
				 ?>;
				<tr>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['precio']; ?></td>
					<td><?php echo $row['cantidad']; ?></td>
					<td><?php echo $row['provedor']; ?></td>
					<td><img width="90" height="48" src="data:imagen/png;base64,<?php echo base64_encode($row['imagen'])?>;"></td>
					<td><?php echo $row['descripcion']; ?></td>
					<td><?php echo $row['categoria']; ?></td>
					<td><a href="#">Modificar</a></td>
					<td><a href="#">Eliminar</a></td>
				</tr>
				<?php 
					}
				 ?>

			</tbody>
		</thead>
	</table>
</center>
 </body>
</html>