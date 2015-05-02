<?php
error_reporting(E_ALL);
ini_set('didspllay_errors',1);

session_start();
if (session_status() == PHP_SESSION_ACTIVE) {
    if (isset($_POST["username"]) && $_POST["username"] !== "") {
        if (!isset($_SESSION["username"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["visits"] = 0;
        }
    }
    if (isset($_SESSION["username"]) && isset($_SESSION["visits"])) {
        $_SESSION["visits"]++;
        echo "<p>Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before. Click <a href=\"login.php?logout\">here</a> to logout.</p>";
        echo "Click <a href=\"content2.php\">here</a> to go to content2.</p>";
    } else {
        echo 'please enter a username and login <a href="login.php">here</a>';
    }
}
?>