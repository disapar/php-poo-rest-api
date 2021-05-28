<?php

include_once "model/todos.php";



if(!$_POST['name'] == ""){

$data = new Todos();

$data->upUser($_POST['name'], $_POST['email'],$_POST['doc'], $_POST['gener']);

}else{
	echo json_encode('error');
}
?>
