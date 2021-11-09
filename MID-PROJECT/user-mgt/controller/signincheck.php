<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('../model/data.txt', 'r');
			
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
                         $_SESSION['flag']='true';
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../views/dashboard.php');
					}
				}

				echo "invalid username or password";

			}else{
				echo "Invalid Password,Try Again......";
			}
		}else{
			echo "invalid username,Try Again......";
		}
	}
?>