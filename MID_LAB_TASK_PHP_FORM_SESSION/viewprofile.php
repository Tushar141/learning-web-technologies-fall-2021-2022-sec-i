<?php
session_start();
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
            <td align="center"><a href="logout.php">Logout</a>
 
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
 <li> <a href="changeprofilepic.php">Change Profile Picture</a></li>
 <li> <a href="changepass.php">Change Password</a></li>
 <li> <a href="logout.php">Logout</a></li>
  </ul>
  </div>
  
  </td>
  <td>
    <fieldset>
    <legend>PROFILE</legend>
    <label>Name: </label><label><?=$_SESSION['user']['username']?></label><hr>
    <label>Email: </label><label><?=$_SESSION['user']['email']?><hr>
    <img src="helpline.jpg" class="pimage" name="pimage">
   
    <label>Date of Birth: </label><label><?=$_SESSION['user']['dob']?>
    
    </fieldset>
  </tr>
  <tr align="center">
  <td colspan="4">
  copyright @2017
  </td>
  </tr>
  </border>  
</body>