<?php
	session_start();
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: sc1.php");
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"]; ?></h1>
	<a href="add_product.php">Add product</a>
	<a >All product</a>
	<a >All user</a>

</body>
</html>