<?php
session_start();
if(isset($_SESSION['flag']))
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
    .vr{
        width:300px;
        height="300px";
        border-right: 1px solid black;
        border-height:400px;
       
    }
    </style>
</head>
<body>
  <table border="1" width="100%" rules="rows">
  <tr>
  
            <td width="60%"> <h1>xCompany</h1></td>
            <td align="right">Logged in as <?=$_SESSION['user']['username']?></td>
            <td align="center"><a href="logout_check.php">Logout</a>
 
  </tr>
  <tr>
  <td>
  
  <div class="vr">
  Account
 
  <hr>
  <ul>
 <li> <a href="dashboard.php">Dashboard</a></li>
 <li> <a href="viewprofile.php">View Profile</a></li>
 <li> <a href="editprofile.php">Edit Profile</a></li>
 <li> <a href="profile_pic_change.php">Change Profile Picture</a></li>
 <li> <a href="changepass.php">Change Password</a></li>
 <li> <a href="logout_check.php">Logout</a></li>
  </ul>
  </div>
  
  </td>
  <td valign="top">
  <h3>
  Welcome <?=$_SESSION['user']['username']?>
  </h3></td>
  </tr>
  <tr align="center">
  <td colspan="4">
  copyright @2017
  </td>
  </tr>
  </border>  
</body>
</html>
<?php
}
else{
  header('location:login.php');
}

?>