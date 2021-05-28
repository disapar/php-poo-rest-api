<?php
// header('Access-Control-Allow-Origin: *');
// header('Content-type: json');
// header('Access-Control-Allow-Headers: *');
include_once "model/todos.php";

$json = json_decode(file_get_contents('php://input'), true);



if (isset($json['id'])) {
	print_r($json);
	$data = new Todos();

	$data->editUser($json['id'], $json['name'], $json['email'], $json['doc'], $json['gener']);
} else {
	echo json_encode('there is no data');
}
?>