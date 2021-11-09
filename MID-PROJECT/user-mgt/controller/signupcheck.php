<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
	    $email    = $_POST['email']; 
        $password = $_POST['password'];

		if($username !="") {
	    if($password !="") {
		if($email !="") {
	
					$myfile = fopen('../model/data.txt', 'a');
					$myuser = $username."|".$password."|".$email."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: ../views/signin.html');
				}else{
					echo "Invalid Email,Try Again....";
				}
			}else{
				echo "Invalid Password,Try Again....";
			}
		}else{
			echo "Invalid Username,Try Again";
		}
	}


?>
