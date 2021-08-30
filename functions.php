<?php
    function myCalculator($num1, $oper, $num2){
       $sum;
       $favcolor = "red";

switch ($oper) {
  case "add":
    $sum = $num1 + $num2;
    break;
  case "sub":
    $sum = $num1 - $num2;
    break;
  case "mul":
    $sum = $num1 * $num2;
    break;
  case "mul":
    $sum = $num1 / $num2;
    break;
  default:
    $sum = "Error";
    break;
    } 
    return $sum;
    }

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $oper = $_GET["oper"];

    echo "Value : ". myCalculator($num1, $oper, $num2);
?>