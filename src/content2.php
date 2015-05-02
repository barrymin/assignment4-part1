<?php
error_reporting(E_ALL);
ini_set('didspllay_errors',1);

session_start();
if(session_status() == PHP_SESSION_ACTIVE){
     if(isset($_SESSION["username"])){
		echo "<p>Hello $_SESSION[username]. Click <a href=\"content1.php\">here</a> to go to content1.</p>";
	
  }else{
    echo 'please enter a username and login <a href="login.php">here</a>';
  }
}
?>