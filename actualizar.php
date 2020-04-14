<div class="container">
	<div class="container">
		

<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Modificar Productos</title>
	<meta charset="utf-8">
	
	<style type="text/css">
		#brown{
			color:brown;
			text-align: center;
		}
		
		#azul{
			color:blue;
		}
		
	</style>
</head>
<body>


						<?php include ('conexion.php');
						$idpro = $_request[[´id´]];
					$query = "SELECT * FROM producto where id = '$idpro'";
					$resultado = $conexion-> query($query);
					$row=$resultado->fetch_assoc();
						?>



	<header>
		<div align="center">
			<h1 id="brown">MODIFICAR DATOS DEL PRODUCTO.</h1>
		</div>
		<div align="center"  >
			<form name="Producto" id="prod" method="post" enctype="multipart/form-data" action="guardar.php">
				<table border="0" id="azul">
					<tr align="center">
						<td align="center"><?php  echo "<img width='140' height='125' src=data:image/png;base64," . (base64_encode(($row['imagen']))) . " >"; ?>
						</td>
					</tr>
					<tr height="50">
						<td height="50">Ingrese Nombre del Producto<span lang="en-us">:</span> </td>
						<td><input type="text" name="Nombre" id="Nombre" class="selection"  required placeholder="Escriba un nombre" pattern="^[a-zA-Z ]*$" value="<?php echo $row['nombre']; ?>"></td>
					</tr>	
					<tr height="50">
						<td>Categoria:</td>
						<td>
							<select name="Categoria" id="categoria">
								<option value="1">Herramientas</option>
								<option value="2">Decoracion</option>
								<option value="3">Plantas</option>
								<option value="4">Otra</option>
							</select>
						</td>
					</tr>	
					<tr height="50">
						<td>Ingrese Cantidad:</td>
						<td><input type="text" name="Cantidad" id="Cantidad" pattern="^\d+$" placeholder="Ingrese solo numeros" required="Solo puede ingresar numeros"></td>
					</tr>	
					<tr height="50">
						<td>Precio Unitario</td>
						<td><input type="text" name="Precio" id="precio" pattern="^[0-9]{1,3}([\\,][0-9]{3})*[\\.][0-9]{2}$" placeholder="0.00 " required></td>
					</tr>
					<tr height="50">
						<td>Provedor</td>
						<td><input type="text" name="Provedor" id="provedor" placeholder="Nombre de provedor" required></td>
					</tr>	
					<tr height="50">
						<td>Imagen del Producto: </td>
						<td>
							<input type="file" id="archivoInput" name="Imagen" placeholder="Seleccione Archivo" required />
						</td>
					</tr -->
					<tr height="50">
						<td>Descripcion: </td>
						<td><textarea name="Comentario" id="comentario" rows="2" cols="44" maxlength="100"> </textarea></td>
					</tr>	
					<tr height="50">
						<td colspan="2" align="center">

							<input type="submit" name="btn" value="Guardar" >
						</td>
					</tr>
					
					
					

				</table>

			</form>
			
		</div>


	</header>
		</body>
</html>

</div> 
<?php include 'pie.php'; ?>