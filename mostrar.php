<?php
//incluye la clase Animal y CrudAnimal
require_once('crud_animal.php');
require_once('animal.php');
$crud=new CrudAnimal();
$libro= new Animal();
//obtiene todos los libros con el método mostrar de la clase crud
$listaAnimales=$crud->mostrar();
?>
 
<html>
<head>
	<title>Mostrar Animales</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
	<table class="table table-bordered table-striped">
		<head>
			<td>Nombre</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaAnimales as $animal) {?>
			<tr>
				<td><?php echo $animal->getNombre() ?></td>
				<td><a href="actualizar.php?id=<?php echo $animal->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_animal.php?id=<?php echo $animal->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>