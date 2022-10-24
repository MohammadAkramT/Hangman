<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: log_in.php");
        exit();

        if(isset($_GET['logout'])) {
            unset($_SESSION['user']);
            header("location: log_in.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Home</title>
</head>
<body>
    <?php
        include_once "./header.php";
    ?>

    <div>
        <h1>Hangman</h1>
        <h4>By Brendan Krafty, Justin Heyer, and Mohammad Tuffaha</h2>
    </div>
    
</body>
</html>