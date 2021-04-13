<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP</title>
		<meta charset='UTF-8' />
	</head>
	<body>
    <h1>Nasz system</h1>
    <?php
        require("funkcje.php");

        if(isset($_POST["zaloguj"])) {
            $login = test_input($_POST["login"]);
            $haslo = test_input($_POST["haslo"]);

            if((strcmp($login, $osoba1->login) == 0  and  strcmp($haslo, $osoba1->haslo) == 0) or (strcmp($login, $osoba2->login) == 0  and  strcmp($haslo, $osoba2->haslo) == 0)){
                $_SESSION["zalogowanyImie"] = $login.$haslo;
                $_SESSION["zalogowany"] = 1;
                header("Location: user.php");
            }
        }
        
    ?>
    <form action = "index1.php" method = "POST">
        Login: <input type=text name="login"/><br/>
        Hasło: <input type=text name="haslo"/><br/>
        <button type = "submit" name = "zaloguj">Zaloguj</button>
    </form>
    <br>
    <br>
    <form action = "cookie.php" method = "GET">
        Czas: <input type = number name = "czas"/><br/>
        <button type = "submit" name = "utworzCookie">Utworz cookie</button>
    </form>

    <?php
        if(isset($_COOKIE["nazwa"])) {
            echo $_COOKIE["nazwa"];
        }

        if(isset($_FILES["picture"]["name"])){
            $fileName = $_FILES["picture"]["name"];
            if($fileName != ""){
                echo '<img src="'.$fileName.'">'; 
            }
        }
        else {
            echo "<br>";
            echo "Obrazek niewgrany";
        }
    ?>
	</body>
</html>