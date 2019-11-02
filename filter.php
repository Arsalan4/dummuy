
<?
if(filter_has_var(INPUT_POST, 'name')){
		echo 'Data Found';
	} else {
		echo 'No Data';
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>user Registartion</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="name">
	<input type="submit" name="submit">
</form>

</body>
</html>