<?php
// incluye la clase Db
require_once('conexion.php');
 
	class CrudAnimal{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo animal
		public function insertar($animal){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO animales values(NULL,:nombre)');
			$insert->bindValue('nombre',$animal->getNombre());
			$insert->execute();
 
		}
 
		// método para mostrar todos los animales
		public function mostrar(){
			$db=Db::conectar();
			$listaanimales=[];
			$select=$db->query('SELECT * FROM animales');
 
			foreach($select->fetchAll() as $animal){
				$myanimal= new Animal();
				$myanimal->setId($animal['id']);
				$myanimal->setNombre($animal['nombre']);
				$listaanimales[]=$myanimal;
			}
			return $listaanimales;
		}
 
		// método para eliminar un animal, recibe como parámetro el id del animal
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM animales WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un animal, recibe como parámetro el id del animal
		public function obtenerAnimal($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM animales WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$animal=$select->fetch();
			$myanimal= new animal();
			$myanimal->setId($animal['id']);
			return $myanimal;
		}
 
		// método para actualizar un animal, recibe como parámetro el animal
		public function actualizar($animal){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE animales SET nombre=:nombre WHERE ID=:id');
			$actualizar->bindValue('id',$animal->getId());
			$actualizar->bindValue('nombre',$animal->getNombre());
			$actualizar->execute();
		}
	}
?>