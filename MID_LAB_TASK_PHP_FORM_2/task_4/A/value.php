<?php

	$gender=$_REQUEST['gender'];
	if($gender=="Male")
	{
		echo'male';
	}
	else if($gender=='Female')
	{
		echo 'female';
	}
    else if($gender=='Other')
    {
        echo 'Other';
    }


?>