<?php
/**
 * 
 * A page that accepts and displays GET and POST parameters 
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
//check request type
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (count($_GET)) {
        $arr = array("type" => "GET", "parameters" => $_GET);
        echo json_encode($arr);
    } else {
        echo json_encode(array("type" => "GET","parameters" => "NULL"));
    }
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (count($_POST)) {
            $arr = array("type" => "POST", "parameters" => $_POST);
            echo json_encode($arr);
        } else {
            echo json_encode(array("type" => "POST","parameters" => "NULL"));
        }
    }
}
?>