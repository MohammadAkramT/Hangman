<?php
    session_start();
    require("./auth/log_in.class.php");
?>

<?php
    if (isset($_POST['submit'])) {
        $user = new LoginUser($_POST['uid'], $_POST['pwd']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Log In</title>
</head>
<body>
    <?php
        include_once "./header.php";
    ?>
    <h1>Hangman</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Log In Form</h1>
        <h4>All fields are required</h4>

        <label for="uid">Username:</label>
        <input type="text" name="uid" required>

        <label for="pwd">Password:</label>
        <input type="text" name="pwd" required>

        <button type="submit" name="submit">Log in</button>

        <p class="error"><?php echo @$user -> error; ?></p>
        <p class="success"><?php echo @$user -> success; ?></p>
    </form>
</body>
</html>