<?php
/**
 * 
 * This is the second page displayed after a user logs in
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
if (session_status() == PHP_SESSION_ACTIVE) {
    if (isset($_SESSION["username"])) {
        echo "<p>Hello $_SESSION[username]. Click <a href=\"content1.php\">here</a> to go to content1.</p>";
    } else {
        echo 'please enter a username and login <a href="login.php">here</a>';
    }
}
?>