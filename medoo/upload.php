<?php
	if(isset($_FILES['imagem'])){

		$img_name = $_FILES['imagem']['name'];
		$dir = "imagens/";
		$ext = strtolower(substr($_FILES['imagem']['name'],-4));

		if($ext == ".jpg" || $ext == ".png" || $ext == ".gif"){
			move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$img_name);
		}else{
			echo "Formato não permitido";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="imagem">
		<input type="submit" value="Enviar">
	</form>
	
</body>
</html>