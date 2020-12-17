<?php
/*

An array A consisting of N integers is given. A triplet (P, Q, R) is triangular if 0 ≤ P < Q < R < N and:

        A[P] + A[Q] > A[R],
        A[Q] + A[R] > A[P],
        A[R] + A[P] > A[Q].

For example, consider array A such that:
  A[0] = 10    A[1] = 2    A[2] = 5
  A[3] = 1     A[4] = 8    A[5] = 20

Triplet (0, 2, 4) is triangular.

Write a function:

    class Solution { public int solution(int[] A); }

that, given an array A consisting of N integers, returns 1 if there exists a triangular triplet for this array and returns 0 otherwise.

For example, given array A such that:
  A[0] = 10    A[1] = 2    A[2] = 5
  A[3] = 1     A[4] = 8    A[5] = 20

the function should return 1, as explained above. Given array A such that:
  A[0] = 10    A[1] = 50    A[2] = 5
  A[3] = 1

the function should return 0.
*/
include('helpers.php');
function solution($A) {
    $sizeOfA = sizeof($A);

    if($sizeOfA < 3)
        return 0;

    sort($A, SORT_NUMERIC);

    $i = 0;
    $p = null;
	$q = $A[$i++];
    $r = $A[$i++];
    do{
        $p = $q; // 1 //2 //5
        $q = $r; // 2 //5 //8
        $r = $A[$i++]; // 5 //8 //10
        if($p + $q > $r)
            return 1;
    }while($i < $sizeOfA);
    return 0;
}


$A = array(10, 2, 5, 1, 8, 20);

echo solution($A);
