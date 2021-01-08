<?php
include('helpers.php');
$A =   ["pim","pom"];
$B =    [999999999, 777888999];
$P =    88999;
function solution($A, $B, $P) {
    // write your code in PHP7.0
    $results = [];
    foreach($B as $k=>$v){
        if(strpos((string)$v,(string)$P)){
            $results[$k] = $A[$k];
        }
    }
    ksort($results);
    if(sizeof($results))
        return current($results);
    else
        return 'NO CONTACT';
//    printPre($results);
}

printPre(solution($A,$B,$P));
?>
