<?php 
	include 'BLProducto.php';
	include 'Producto.php';//incluir esta clase donde vas a necesiar instanciar de Producto

	class TestProducto{
		private $bl = null;
		public function registrar(){
			$bl = new BLProducto();
			
			$producto = new Producto();
			$producto->setProducto("Frugos");
			$producto->setStock(50);
			$producto->setPrecio(3.5);

			print_r( $bl->registrar( $producto ) );
			/*imprime 1, si se a registrado correctamente, si no, imprime vacio*/
		}

		public function listar(){
			$bl = new BLProducto();			
			$bl->listar();
		}
	}

	$prueba = new TestProducto();
	//$prueba->registrar();
	$prueba->listar();