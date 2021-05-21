<?php

include_once "model/todos.php";



if(isset($_POST['id'])){

$data = new Todos();

$data->editUser($_POST['id'],$_POST['name'], $_POST['email'],$_POST['doc'],$_POST['gener']);

}else{
	echo json_encode('no hay datos');
}
?>
