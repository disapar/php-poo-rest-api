<?php 

require 'config/database.php';


class Todos extends Database {
	
	public function connection(){
		
		parent::__construct();

	}
	
// Call all students
	public function getUsers()
	{
		
		$query = "SELECT * FROM students  ORDER BY id DESC";;
		$resultado = $this->conn->prepare($query);
		$resultado->execute();

		$datos = $resultado->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($datos);
		exit;

	}
// call a Student
	public function getUser($id)
	{
		$query = "SELECT * FROM students WHERE id = '$id'";
		$consult = $this->conn->prepare($query);
		$consult->execute(array());
		$count = $consult->rowCount();

		if ($count == 0 ) {
			echo json_encode('The student is not exist');
			die;
		}else{

			$query = "SELECT * FROM students WHERE id= '$id'";
			$resultado = $this->conn->prepare($query);
			$resultado->execute();
			$datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
			echo json_encode($datos);
			die;
		}
	}
	// Add Student
	public function upUser($name, $email, $doc, $gener){

		$day = date("Y-m-d");    
		
		$query ="INSERT INTO students (name, email, doc, gener, day) values (:name, :email, :doc, :gener, :day)";
		$resultado = $this->conn->prepare($query);
		$resultado->execute(array(":name"=>$name, ":email"=>$email, ":doc"=>$doc, ":gener"=>$gener, ":day"=>$day));
		echo json_encode('Loaded data');
		exit;
	}

	// Edit student
	public function editUser($id,$name,$email,$doc, $gener){

		$day = date("Y-m-d");

		$query= "UPDATE students SET  name=:name, email=:email, day=:day, doc=:doc, gener=:gener WHERE id=:id";
		$result= $this->conn->prepare($query);
		$result->execute(array(":id"=>$id,":name"=>$name, ":email"=>$email, ":doc"=>$doc,":gener"=>$gener, ":day"=>$day));
		echo json_encode('Updated data');
		exit;

	}
	// delete students
	public function delUser($id){
	// Comprueba si el usuario existe
		$query = "SELECT * FROM students WHERE id=$id";

		$consult = $this->conn->prepare($query);
		$consult->execute(array());
		$count = $consult->rowCount();

		if ($count == 0) {
			echo json_encode('Student do not exist');
		}else{

			$query= "DELETE FROM students WHERE id= :id";
			$result = $this->conn->prepare($query);

			$result->execute(array(":id"=> $id));
			echo json_encode('Student deleted');
			exit;
		}
	}

}


?>