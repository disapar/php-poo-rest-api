<?php
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
header('Access-Control-Allow-Headers: *');
include_once "model/todos.php";



$data = new Todos();
$rows = $data->getUsers();
if(!empty($rows)){
	foreach($rows as $row){ 
		$row;
	}
}
?>

