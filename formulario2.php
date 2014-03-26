<!DOCTYPE html>
<html>
<head>
<title> Precios Productos </title>
</head>

<body>

<?php
 
 

$nombreuno = $_POST['nombreuno'];
$preciouno = $_POST['preciouno'];
$nombredos = $_POST['nombredos'];
$preciodos = $_POST['preciodos'];
$nombretres = $_POST['nombretres'];
$preciotres = $_POST['preciotres'];



$precioiva=1.16;
$totalArticulos=$preciouno+$preciodos+$preciotres;
$subtotal=$totalArticulos/$precioiva;
$iva=$subtotal*0.16;
$total=$subtotal+$iva;

?>

<h1>Inventario de Productos</h1>

	<table style='width:300px; FONT-SIZE: 12Pt; FONT-FAMILY: CAMBRIA';  border="1">
<tr>
  <td>#</td>
  <td>Producto</td> 
  <td>Precio</td>
</tr>
<tr>
  <td text align ="center">1</td>
  <td><?php echo $nombreuno; ?></td> 
  <td><?php echo $preciouno; ?></td>
</tr>

<tr>
  <td text align ="center">2</td>
  <td><?php echo $nombredos; ?></td> 
  <td><?php echo $preciodos; ?></td>
</tr>


<tr>
  <td text align ="center">3</td>
  <td><?php echo $nombretres; ?></td> 
  <td><?php echo $preciotres; ?></td>
</tr>
</table ><br>


<table style='width:300px; FONT-SIZE: 12Pt; FONT-FAMILY: CAMBRIA';  border="1" >
<tr>
<td>SUBTOTAL</td>
  <td>$<?php echo $subtotal;?></td> 
</tr>

<tr>
<td>Sin IVA</td>
  <td>$<?php echo $iva;?></td> 
</tr>

<tr>
<td>TOTAL</td>
  <td>$<?php echo $total;?></td> 
</tr>



    </table><br>

	<a href="formulario.php"><button style='width:90px; height:30px; color:#FF0000;  FONT-FAMILY: CAMBRIA' >Regresar</button></a> 


</body>
</html>