<?php
	require_once('../model/usersModel.php');

	if(isset($_POST['delete'])){

    $id = $_REQUEST['id'];
  	$status = deleteUser($id);
  
  	if($status){
  		header('location: ../views/Display.php');
  	}else{
  		echo "Data deleting failed";
  	}
	}
?>
