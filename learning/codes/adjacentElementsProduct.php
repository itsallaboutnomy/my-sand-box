<?php
include('helpers.php');
function adjacentElementsProduct($inputArray) {
    $highest = null;
    $i = 0;
    foreach($inputArray as $k=>$v){
        if(isset( $inputArray[$i+1])){
            $_highest = $inputArray[$i] * $inputArray[$i+1];
        if($_highest > $highest){
            $highest = $_highest;
        }
        }
        $i++;
    }
    return !$highest?0:$highest;

}

$inputArray = [3, 6, -2, -5, 7, 3];
$inputArray = [-23, 4, -3, 8, -12];
 echo (adjacentElementsProduct($inputArray) );

?>
