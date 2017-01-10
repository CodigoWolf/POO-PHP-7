<?php 
	//include (dirname(__FILE__) . '/../producto/Producto.php');

	interface Consultas{
		public function registrar($objeto) : bool;
		public function modificar($objeto) : bool;
		public function listar();
		public function listarPorID(int $id);
	}