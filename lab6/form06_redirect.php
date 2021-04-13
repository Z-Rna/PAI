<?php
    session_start();
    $naz = $_POST["nazwisko"];
    $id = $_POST["id_prac"];
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    $sql = "SELECT id_prac FROM pracownicy";
    $result = $link->query($sql);
    $_SESSION["text"] = "";
    foreach ($result as $v) {
        if($id == $v["id_prac"]){
            $_SESSION["text"] = "Error: id isn't unique";
        }
    }
    if($_SESSION["text"] == "Record added" &&
    isset($_POST['id_prac']) &&
    is_numeric($_POST['id_prac']) &&
    is_string($_POST['nazwisko'])) {
        $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
        $result = $stmt->execute();
        if (!$result) {
            printf("Query failed: %s\n", mysqli_error($link));
        }
        $stmt->close();
        header("Location: form06_get.php");
    }
    else {
        header("Location: form06_post.php");
    }
?>