<?php

include_once "model/todos.php";


if(!isset($_GET['id'])){
	echo json_encode('something went wrong');
	exit;
}
$data = new Todos();

$rows = $data->getUser($_GET['id']);
if (!empty($rows)) {
	foreach ($rows as $row) {
		$row;
	}

}else{
	echo json_encode('there is no data');
}
?>
