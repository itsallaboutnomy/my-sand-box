<?php
include('helpers.php');
function getArrDominator($array){
   $halfLenArry = abs(count($array)/2); ;
 $_array = [];
 foreach($array as $k=>$v) {
   if(!array_key_exists($v,$_array)){
     $_array[$v]=1;
   }
     else{
       $_array[$v]+=1;
     }
   }
   // printPre($_array);
   $k =  array_search(max($_array), $_array);
   $ele = $_array[$k];
   if($ele > $halfLenArry){
    return 1;
   }
    else {
      return -1;
    }
 }

// $A = array(3,4,3,2,3,-1,3,3);
$A = array(1,2,3,4,4,4);
// echo getArrDominator($A);
printPre(getArrDominator($A));
