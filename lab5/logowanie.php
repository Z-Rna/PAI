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
            else {
                header("Location: index1.php");
            }
        }
    ?>
    <form action = "logowanie.php" method = "POST">
        Login: <input type=text name="login"/><br/>
        Hasło: <input type=text name="haslo"/><br/>
        <button type = "submit" name = "zaloguj">Zaloguj</button>
    </form>
	</body>
</html>