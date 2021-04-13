<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>POST</title>
		<meta charset = 'UTF-8' />
	</head>
	<body>
    <form action = "form06_redirect.php" method = "POST">
            id_prac <input type = "number" name = "id_prac"><br>
            nazwisko <input type = "text" name = "nazwisko"><br>
            <input type = "submit" value = "Wstaw">
            <input type = "reset" value = "Wyczysc">
	</body>
    <br>
    <?php 
        if(isset($_SESSION["text"])){
            echo $_SESSION["text"];
            $_SESSION["text"] = "";
        }
    ?>
    <br>
    <br>
    <h2><a href="form06_get.php">form06_get.php</a></h2>
</html>