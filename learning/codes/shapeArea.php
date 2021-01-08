<?php
include('helpers.php');
//related image in image-code-challenge
function shapeArea($n) {
    return ($n*$n)+(($n-1)*($n-1));
}
 echo (shapeArea(2) );

//I am trying to find the area of a n-interesting polygon, where (n=1, A=1, n=2, A=5, n=3, A=13, n=4, A=25, and so on). So the formula for an n-interesting polygon is the area of an (n-1)-interesting polygon+(n-1)*4. When running the program, a hidden test shows that the code is wrong. I can't figure out what is wrong with my code.
//?>
