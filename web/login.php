<?php
$username=$_POST['username']??'';
$password=$_POST['password']??'';
if ($username==='admin' && $password==='shadow123'){
   echo "<h1>Login Successfull</h1>";
   echo "<p>Welcome to ShadowVault administration portal</p>";
}else{
   echo "<h1>Login Failed</h1>";
   echo "<p>Invalid username or password</p>";
}
?>
