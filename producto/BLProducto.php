<?php 
	include 'DAOProducto.php';

	class BLProducto{

		private $dao = null;

		public function registrar( $objeto ) : bool{
			$rpt = false;
			$dao = new DAOProducto();
			if( !empty( $objeto->getProducto() ) 
				&& $objeto->getStock() > 0 
				&& $objeto->getPrecio() > 0 ){
				$dao->registrar( $objeto );
				$rpt = true;
			}			
			return $rpt;
		}

		public function modificar( $objeto ) : bool{
			return true;
		}

		public function listar(){
			$dao = new DAOProducto();
			$dao->listar();			
		}

		public function listarPorID(int $id){
			echo "listar por ID";
		}
	}

	