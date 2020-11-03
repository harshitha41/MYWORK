<?php
$submit = $_GET['submit']; //command
$arr = explode(" ", $submit); 
if( sizeof($arr) < 3 ){
    echo "No operands!";
    die();
}
$op1 = $arr[0];
$operator = $arr[1];
$op2 = $arr[2];
$result = 0; 
switch($operator){
    case 'add':
        $result = $op1 + $op2;
        break;
    case 'sub':
        $result = $op1 - $op2;
        break;
    case 'mul':
        $result = $op1 * $op2;
    break;
    case 'div':
        $result = $op1 / $op2;
        break;
    case 'mod':
        $result = $op1 % $op2;
        break;
    default:
        echo "Operation is Invalid! use only: add, sub, mul, div, mod";
        die();
    break;
}
//output
echo "<br> Submit = $submit";
echo "<br> Result = $result";
?>