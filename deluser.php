<?php

include_once "model/todos.php";



if(isset($_GET['id']) ){

$data = new Todos();

$data->delUser($_GET['id']);

}else{
	echo json_encode('erroneo');
}
?>
