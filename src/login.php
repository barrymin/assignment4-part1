<?php
/**
 * 
 * Login page 
 * 
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @author     Minna Barry
 */

error_reporting(E_ALL);
ini_set('didspllay_errors',1);

session_start();
//logout code
if (isset($_GET["logout"])) {
    $_SESSION = array();
    session_destroy();
}
//already logged in code
if (isset($_SESSION["username"])) {
    echo "<p> you are already logged in.</p>";
} else {
    //logging in code
    ?>
    <form action="content1.php" method="post">
        <label>username:</label>
        <input type="text" name="username">
        <button type="submit">login</button>
    </form>
    <?php
}
?>