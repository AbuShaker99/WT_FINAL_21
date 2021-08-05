<?php 
session_start();
if(!isset($_COOKIE["loggeduser"]))
{header("Location: index.php");
}
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h1 align ="center"style="color: red; ">Welcome <?php echo $_SESSION["loggeduser"] ; ?> </h2>
<a href="add product.php">Add product</a>
<a>All product</a>
<a>All User</a>


</body>
</html>