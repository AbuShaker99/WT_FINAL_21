<?php 
session_start();
if(!isset($_COOKIE["loggeduser"]))
{header("Location: index.php");
}
?> 
<html >
<body>
<h1 align="center">Welcome Username</h1>
    
<form action="" method="post">
Id: <input type="text" name="uname" value=""><span><br>
Name: <input type="password" name="pass" value=""><span><br>
<input type="submit" value="Login">
</form>
</body>
</html>