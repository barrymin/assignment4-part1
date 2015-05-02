<?php
error_reporting(E_ALL);
ini_set('didspllay_errors',1);

session_start();
if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_SESSION["username"])) {
    echo "<p> you are already logged in.</p>";
} else {
    ?>
    <form action="content1.php" method="post">
        <label>username:</label>
        <input type="text" name="username">
        <button type="submit">login</button>
    </form>
    <?php
}
?>