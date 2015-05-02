<?php
error_reporting(E_ALL);
ini_set('didspllay_errors',1);

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(count($_GET)){
    $arr = array("type" => "GET", "parameters" => $_GET);
    echo json_encode($arr);
  }else{
    echo json_encode(array("type" => "GET","parameters" => "NULL"));
  }
}else
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  if(count($_POST)){
    $arr = array("type" => "POST", "parameters" => $_POST);
    echo json_encode($arr);
  }else{
    echo json_encode(array("type" => "POST","parameters" => "NULL"));
  }
}
?>