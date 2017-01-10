<?php 

	class Producto{

		private $idproducto;
		private $producto;
		private $stock;
		private $precio;


		public function Producto(){//contructor vacio
			$this->idproducto = 0;
			$this->producto = "";
			$this->stock = 0;
			$this->precio = 0.0;
		}

		public function getProducto() : string{
			return $this->producto;
		}

		public function setProducto(string $producto){
			$this->producto = $producto;
		}

		public function getStock() : int{
			return $this->stock;
		}

		public function setStock(int $stock){
			$this->stock = $stock;
		}

		public function getPrecio() : float{
			return $this->precio;
		}

		public function setPrecio(float $precio){
			$this->precio = $precio;
		}

	}