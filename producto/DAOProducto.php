<?php 
	include (dirname(__FILE__) . '/../comunes/Consultas.php'); 
	include (dirname(__FILE__) . '/../comunes/Conexion.php');	

	class DAOProducto implements Consultas{

		private $conexion = null;

		public function registrar( $objeto ) : bool{
			$conexion = new Conexion();
			$respuesta = false;
			try{
				$cnn = $conexion->getConexion();
				$sql = "INSERT INTO producto (producto, stock, precio) VALUES(?,?,?);";
				$statement = $cnn->prepare( $sql );
				$statement->bindParam(1, $objeto->getProducto(), PDO::PARAM_STR);
				$statement->bindParam(2, $objeto->getStock(), PDO::PARAM_INT);
				$statement->bindParam(3, $objeto->getPrecio(), PDO::PARAM_INT);
				
				$respuesta = $statement->execute();//devuelve true, si no hubo error.
				
			}catch(Exception $e){
				echo "EXCEPCIÓN ".$e->getMessage();
			}finally{
				$statement->closeCursor();
				$conexion = null;
			}
			return $respuesta;
		}

		public function modificar( $objeto ) : bool{
			return true;
		}

		public function listar(){
			$conexion = new Conexion();
			try{
				$cnn = $conexion->getConexion();
				$sql = "SELECT * FROM producto;";
				$statement = $cnn->prepare( $sql );
				$statement->execute();

				if( $statement->fetch( PDO::FETCH_ASSOC) == NULL ){
					throw new Exception("No hay registros en la tabla producto");
				}else{

					while( $resultado = $statement->fetch( PDO::FETCH_ASSOC)){
						/*echo "Producto: ".$resultado['producto']." <br>".
							"Sotck: ".$resultado['stock']."<br>".
							"Precio: ".$resultado['precio']."<br>";*/
						$data["data"][] = $resultado;
					}
					echo json_encode($data);
				}
			}catch(Exception $e){
				echo $e->getMessage();
			}finally{
				$statement->closeCursor();
				$conexion = null;
			}
		}

		public function listarPorID(int $id){
			echo "listar por ID";
		}
	}