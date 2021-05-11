<?php

    $userId = $_GET['id'];

    include ('mysql.php');

    $sql_query = "DELETE FROM user WHERE id = $userId";

    mysqli_query($db_link,$sql_query);

    $db_link->close();

    header("Location: index.php");
?>