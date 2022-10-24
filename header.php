<?php
    if (isset($_SESSION['user'])) {
?>
<div>
    <nav id="header">
        <ul>
            <li><a href="./auth/log_out.php">LOG OUT</a></li>
        </ul>
    </nav>
</div>
<?php
    } else {
?>
<div>
    <nav id="header">
        <ul>
            <li><a href="./index.php">CREATE ACCOUNT</a></li>
            <li><a href="./log_in.php">SIGN IN</a></li>
        </ul>
    </nav>
</div>
<?php
    }