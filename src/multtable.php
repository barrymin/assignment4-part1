<?php
error_reporting(E_ALL);
ini_set('didspllay_errors',1);
echo '<head><link rel="stylesheet" href="style2.css"></head>';
$minnd=0;
$maxnd=0;
$miner=0;
$maxer=0;

function conditions () {
  $check = 1;
  if(!isset($_GET['min-multiplicand'])){
    echo '<P>min-multiplicand is missing</P>';
	$check = 0;
  }
  if(!isset($_GET['max-multiplicand'])){
    echo "<P>max-multiplicand is missing</P>";
	$check = 0;
  }
  if(!isset($_GET['min-multiplier'])){
    echo "<P>min-multiplier is missing</P>";
	$check = 0;
  }
  if(!isset($_GET['max-multiplier'])){
    echo "<P>max-multiplier is missing</P>";
	$check = 0;
  }

  if($check){
   	//check if input is numbers
    if(is_numeric($_GET['min-multiplicand'])){
	  $minnd = intval($_GET['min-multiplicand']);
    }
    else{
	  echo '<P>min-multiplicand is not a number</P>';
      $check =0;
	}
	if(is_numeric($_GET['max-multiplicand'])){
      $maxnd = intval($_GET['max-multiplicand']);
    }
    else{
	  echo "<P>max-multiplicand is not a number</P>";
      $check =0;
	}
    if(is_numeric($_GET['min-multiplier'])){
      $miner = intval($_GET['min-multiplier']);
    }
    else{
	  echo "<P>min-multiplier is not a number</P>";
      $check =0;
	}
    if(is_numeric($_GET['max-multiplier'])){
      $maxer = intval($_GET['max-multiplier']);
    }
    else{
	  echo "<P>max-multiplier is not a number</P>";
      $check =0;
	}
    if($check){
      //check if min is less than max
      if($_GET['min-multiplicand'] > $_GET['max-multiplicand']){
	    echo "<p>min-multiplicand is greater than max-multiplicand</P>";
	    $check = 0;
	  }
      if($_GET['min-multiplier'] > $_GET['max-multiplier']){
	    echo "<p>min-multiplier is greater than max-multiplier</P>";
	    $check = 0;
	  }
	}
  }
  //if all conditions passed check=1
  if(check){
    echo "<table>";
    for($i=($minnd - 1) ; $i <= $maxnd; $i++){
	  echo "<tr>";
	  if($i >= $minnd){
      echo "<td>$i";
	  }
      for($j=($miner-1); $j <= $maxer; $j++){
        if($i < $minnd && $j<$miner){
      	  echo "<td>x";
          continue;
        }
        if($i< $minnd && $j>=$miner){
	      echo "<td> $j";
          continue;
	    }
        if($j>=$miner){		
	      echo "<td>".($j*$i);
		}
      }	
    }
  }
}
conditions();
?>


