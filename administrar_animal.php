<?php
//incluye la clase Animal y CrudAnimal
require_once('crud_animal.php');
require_once('animal.php');
 
$crud= new CrudAnimal();
$animal= new Animal();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un animal
	if (isset($_POST['insertar'])) {
		$animal->setNombre($_POST['nombre']);
		//llama a la función insertar definida en el crud
		$crud->insertar($animal);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el animal
	}elseif(isset($_POST['actualizar'])){
		$animal->setId($_POST['id']);
		$animal->setNombre($_POST['nombre']);
		$crud->actualizar($animal);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un animal
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>