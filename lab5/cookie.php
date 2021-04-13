<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<?php
		if(isset($_GET["czas"])) {
			setcookie("nazwa", "wartość", time() + $_GET["czas"], "/");
		}
	?>
	<a href="index1.php">Wstecz</a>
	</body>
</html>