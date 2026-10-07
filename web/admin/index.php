
<?php
$user=$_POST['user']??'';
$pass=$_POST['pass']??'';
if ($user==='vaultadmin' && $pass==='VaultLegacy17'){
   echo "<h1>Administration console</h1>";
   echo "<p>Deployment service status: active</p>";
   echo "<p>Configuration backup available</p>";
   echo "<p>Deployment account:operator</p>";
} else {
?>
<html>
<body>
<h1>ShadowVault Administration</h1>
<form method="POST">
User:<input type="text"
name="user"><br><br>
Pass:<input type="password"
name="pass"><br><br>
<input type="submit" value="Login">
</form>
</body>
</html>
<?php
}
?>
