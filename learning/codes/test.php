<?php
include('helpers.php');
$N = 4;
$A = [1, 2, 4, 4, 3];
$B = [2, 3, 1, 3, 1];

$A = [1, 2, 1, 3];
$B = [2, 4, 3, 4];
function solution($N, $A, $B) {
    // write your code in PHP7.0
    $combine = array_merge($A,$B);
    sort($combine);
    $combine = array_unique($combine);
    printPre($combine);
    $returnValue = 'false';
    for($i = 1; $i<=sizeof($combine);$i++){
        if(in_array($i,$combine)){
            $returnValue = 'true';
        }

    }
    return $returnValue;

}

echo printPre(solution($N, $A, $B));
?>

c@bl3-c@t-6