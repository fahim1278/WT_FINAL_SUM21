<?php
	session_start();
	if(!isset($_SESSION["loggeduser"]))
	{
		header("Location: index.php");
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1 align="center">Welcome <?php echo $_SESSION["loggeduser"]?>;</h1>
	<form action="" method="post">
		Id: <input type="text" name="uname" value="">
		<br>
		Name: <input type="text" name="uname" value="">
		<br>
		Price: <input type="text" name="uname" value="">
		<br>
		Qty: <input type="text" name="uname" value="">
		<br>
		<input type="submit" value="Add">

	</form>

</body>
</html>