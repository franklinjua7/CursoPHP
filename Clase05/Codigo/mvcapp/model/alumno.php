<?php 
class Alumno{
	private $pdo;
	public $id;
	public $Nombre;
	public $Apellido;
	public $Sexo;
	public $FechaRegistro;
	public $FechaNacimiento;
	public $Correo;

	public function __CONSTRUCT(){
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Listar(){
		try {
			//$result=array();
			$stm=$this->pdo->prepare("SELECT * FROM alummnos");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Obtener($id){
		try {
			$stm=$this->pdo->prepare("SELECT * FROM alummnos WHERE id=?");
			$stm->execute(array($id));
			return $stm->fetchAll(PDO::FETCH_OBJ);
			
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Eliminar($id){
		try {
			$stm=$this->pdo->prepare("DELETE FROM alummnos WHERE id=?");
			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Actualizar($data){
		try {
			$sql="UPDATE alummnos SET
				Nombre=?,
				Apellido=?,
				Correo=?,
				Sexo=?,
				FechaNacimiento=?
				WHERE id =?";
			$this->pdo->prepare($sql)->execute(array($data->Nombre,
													$data->Correo,
													$data->Apellido,
													$data->Sexo,
													$data->FechaNacimiento,
													$data->id)
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function Registrar(Alumno $data){
		try {
			$sql="INSERT INTO alumnos (Nombre, Correo, Apellido, Sexo, FechaNacimiento,FechaRegistro)
			VALUES (?,?,?,?,?,?)";
			$this->pdo->prepare($sql)->execute(array($data->Nombe,
													$data->Correo,
													$data->Apellido,
													$data->Sexo,
													$data->FechaNacimiento,
													date('Y-m-d'))
			);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}

 ?>