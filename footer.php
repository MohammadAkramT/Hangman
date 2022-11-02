<div class="foot">
<?php
    if (isset($_SESSION['user'])) {
?>
    <h3 class="leaderboard-link"><a href="hangman.php">Back to the Game</a> | <a href="leaderboard.php">Leaderboard</a> | <a href="summary.php">Project Summary</a> | <a href="./auth/log_out.php">Log Out</a> </h3>
<?php
    } else {
?>
    <h3 class="leaderboard-link"><a href="index.php">Register</a> | <a href="log_in.php">Login</a> | <a href="leaderboard.php">Leaderboard</a> | <a href="summary.php">Project Summary</a> </h3>
<?php
    }
?>
</div>