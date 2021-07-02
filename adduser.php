<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: json');
header('Access-Control-Allow-Headers: *');
include_once "model/todos.php";

$json = json_decode(file_get_contents('php://input'), true);


	
if(!$json["name"] == ""){
	print_r($json);
$data = new Todos();

$data->agregarComercio($json["name"], $json['email'],$json['doc'], $json['gener']);

}else{
	echo json_encode('error');
}
?>