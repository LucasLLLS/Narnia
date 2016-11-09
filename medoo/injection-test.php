<?php
	
	if(isset($_POST['id'])){
		
		$conn = mysqli_connect("localhost", "root", "", "test");

		$query = "SELECT * FROM pessoas WHERE id=".$_POST['id'];

		mysqli_query($conn, $query);

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="post">
		<input type="text" name="id"> <br>
		<input type="submit" value="Enviar">
	</form>
	
</body>
</html>