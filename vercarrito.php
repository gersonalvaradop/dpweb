<?php  include ('cabeza.php') ?>

<?php

//Forma contractada del IF se usa cuando las intrucciones son UNA SOLA en ambas respuestas
if(isset($_SESSION['carro']))
    $carro=$_SESSION['carro'];else $carro=false;
?>
<!doctype html>
<html>
<head>
    <title>Carrito de Productos</title>
</head>
<body>

<h1 align="center">Productos Agregados al Carrito</h1>
<center>
    <?php
    if($carro)
    {
    ?>
        <table width="800" border="0">
        	<tr>
					<td colspan="12"><a href="productos.php" type="button" class="btn btn-primary btn-lg btn-block">SEGUIR COMPRANDO</a></td>
					<br>
				</tr>
            <tr>
                <td>Producto</td>
                <td>Precio</td>
                <td>Cantidad</td>
                <td>SubTotal</td>
                <td>Borrar</td>
                <td>Actualizar</td>
            </tr>
            <tr>
                <td colspan="6">
                    <hr>
                </td>
            </tr>
            <?php
            $suma=0;
            $subtotal=0;
            foreach ($carro as $indice => $items)
            {
                $subtotal=$items['cantidad']*$items['precio'];
                $suma=$suma+$subtotal;
                echo '<tr>';
                echo '<td>'.$items['nombre'].'</td>';
                echo '<td>$'.number_format($items['precio'],2).'</td>';
                echo '<td>'.$items['cantidad'].'</td>';
                echo '<td>$'.number_format($subtotal,2).'</td>';
                echo '<td><a href="borrarcarrito.php?acc=v&id='.$items['id'].'"><img src="img/br.png" width="24" height="28" border="0" title="Borrar del Carrito"/></td>';
                echo '<td>Actualizar</td>';
            }
            ?>
        </table>
        <div>Total Articulos: <?php echo count($carro); ?></div>
        <div>Total a Pagar: $<?php echo number_format($suma,2); ?></div>
    <?php
    }else{
        echo 'No hay productos en el carrito de compras<br>
        <a type="button" href="productos.php"><img src="img/continuar.png"></a>';

        
    }
    ?>
</center>
</body>
</html>    
<?php include 'pie.php'; ?>