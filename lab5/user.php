<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
		<?php
			if (!$_SESSION["zalogowany"] == 1){
				header("Location: index1.php");
			}
			require_once("funkcje.php");
			echo "Zalogowano";
			if(isset($_POST["wyloguj"])) {
				$_SESSION["zalogowany"] = 0;
				header("Location: index1.php");
			}
		?>
		<br>
		<br>
		<form enctype = "multipart/form-data" action = "index1.php" method = "POST" >
			<input type = "hidden" name = "MAX_FILE_SIZE" value = "512000" />
			<input type = "file" type = "file" name = "picture" accept = "image/x-png,image/jpg"/>
		<br>
		<br>
		<form action = "index1.php" method = "POST">
        	<button type = "submit" value = "wyloguj">Wyloguj</button>
    	</form>
		</form>
	</body>
</html>