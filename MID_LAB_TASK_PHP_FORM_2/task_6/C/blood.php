<?php

if(isset($_REQUEST['submit']))
{
	$BG=$_REQUEST['BG'];
	if($BG=="A+")
	{
		echo'A+';
	}
	else if($BG=='B+')
	{
		echo 'B+';
	}
    else if($BG=='AB+')
    {
        echo 'AB+';
    }
    else if($BG==' O+')
    {
        echo 'O+';
    }
}
else 
{
echo "Choose One";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Data</title>
</head>
<body>
	<form method="post" >
		<fieldset>
			<legend><h3>Gender</h3></legend>

            
            <select name="BG">
            <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="O+">O+</option> 
            />
       <br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>