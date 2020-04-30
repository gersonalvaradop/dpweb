<?php  include ('cabeza.php') ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<<<<<<< HEAD
	 <script src="assets/js/pinterest_grid.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
=======
	<script src="assets/js/pinterest_grid.js"></script>

>>>>>>> 25704798a1df9494f1cd204830387ac4c7d8f7ec
<div class="container">
	<div class="row">
		<?php include ('conexion.php');
		$query = "SELECT * FROM producto";
		$resultado = $conexion-> query($query);
		while ($row=$resultado->fetch_assoc()) {
?>

	<div class="col-lg-4">
					<div class="card" >
					  <?php  echo "<img style='height:150px;	' class='card-img-top' src=data:image/png;base64," . (base64_encode(($row['imagen']))) . " >"; ?>
					  <div class="card-body">
					  <h3 class="card-title"><?php echo $row['nombre']; ?></h3>
					   <p class="card-text"><?php echo $row['descripcion']; ?></p>
					  <a href="#" class="btn-lg btn-success btn-block"> PRECIO: $ <?php echo $row['precio']; ?></a><br>
					  	 <div class="row">
					        <div class="col-lg-6">
					        	<a href="#" class="btn-lg btn-warning btn-block">Comprar</a>
					        </div>
					        <div class="col-lg-6" align="right">
					        	<a href="#" class="btn-lg btn-danger btn-block" style="font-size: 16px;">No me gusta</a>
					        </div>
					    </div>
					  </div>
					</div>
				</div>
			<?php } ?>	
	</div>
</div>

<?php include 'pie.php'; ?>