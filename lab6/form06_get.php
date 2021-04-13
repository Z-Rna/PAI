<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>GET</title>
		<meta charset = 'UTF-8' />
	</head>
	<body>
        <?php 
        $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
        $sql = "SELECT * FROM pracownicy";
        $result = $link->query($sql);
        printf("<table border=\"1\">");
        foreach ($result as $v) {
            // echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
            printf("<tr><td>%s</td><td>%s</td></tr>", $v["ID_PRAC"], $v["NAZWISKO"]);
        }
        printf("</table>");
        $result->free();
        $link->close();
        ?>
        <br>
        <?php
            if(isset($_SESSION["text"])){
                echo $_SESSION["text"];
                $_SESSION["text"] = "";
            }
        ?>
        <br>
        <a href = "form06_post.php">POST</a>
	</body>
</html>