<?php

if(isset($_REQUEST['submit']))
{
	$dob=$_REQUEST['dob'];
	if($dob!="")
	{
		echo $dob;
	}
	else
	{
	 echo"Invalid dob";
	}
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
			<legend><h3>Date Of Birth</h3></legend>

	 <input type="date" name="dob" value="<?php if(isset($name)){ echo $name; }?>" /><br><br>
    
				<input type="submit" name="submit" value="Submit">
</fieldset>
                
	</form>
</body>
</html>