<?php
/**
 * 
 * This is the page displayed after a user logs in
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
//check if sessions are disabled
if (session_status() == PHP_SESSION_ACTIVE) {
    //check for request to log in
    if (isset($_POST["username"]) && $_POST["username"] !== "") {
        if (!isset($_SESSION["username"])) {
            //log in if user wasn't already logged in
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["visits"] = 0;
        }
    }
    //check if user is logged in
    if (isset($_SESSION["username"]) && isset($_SESSION["visits"])) {
        $_SESSION["visits"]++;
        echo "<p>Hello $_SESSION[username], you have visited this page $_SESSION[visits] times before. Click <a href=\"login.php?logout\">here</a> to logout.</p>";
        echo "Click <a href=\"content2.php\">here</a> to go to content2.</p>";
    } else {
        echo 'please enter a username and login <a href="login.php">here</a>';
    }
}
?>