<?php

	require_once('db.php');

	function validate($username, $password){
		$con = getConnection();
		$sql = "select * from prodect-list where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);

		if($data != null){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql = "insert into product-list values('2', '{$user['name']}', '{$user['buyingPrice']}', '{$user['sellingPrice']}')";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql = "select * from product-list";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUserById($id){
		$con = getConnection();
		$sql = "select * from product-list where id={$id}";
		$result = mysqli_query($con, $sql);
		$data = mysqli_fetch_assoc($result);
		return $data;
	}

	function getUserByName($name){
		$con = getConnection();
		$sql = "select * from product-list where name={$name}";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function editUser($user){
		$con = getConnection();
		$sql = "update product-list set name='{$user['name']}', buyingPrice='{$user['buyingPrice']}', sellingPrice='{$user['sellingPrice']}' where id={$user['id']}";

		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql = "delete from product-list where id={$id}";
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
