<?php
/*


A string S consisting of N characters is considered to be properly nested if any of the following conditions is true:

        S is empty;
        S has the form "(U)" or "[U]" or "{U}" where U is a properly nested string;
        S has the form "VW" where V and W are properly nested strings.

For example, the string "{[()()]}" is properly nested but "([)()]" is not.

Write a function:

    class Solution { public int solution(String S); }

that, given a string S consisting of N characters, returns 1 if S is properly nested and 0 otherwise.

For example, given S = "{[()()]}", the function should return 1 and given S = "([)()]", the function should return 0, as explained above.

Write an efficient algorithm for the following assumptions:

        N is an integer within the range [0..200,000];
        string S consists only of the following characters: "(", "{", "[", "]", "}" and/or ")".


*/
include('helpers.php');
echo solution("{[()()]}");
function solution($S){
	/*
	 * 100%
	 */
	if(strlen($S) === 0 ) return 1;
	$expected = array();
	$expCursor = 0; //The first empty place of the expected
	$chars = str_split($S);
	$starting = array("(", "{", "[");
	$closing = array(")", "}", "]" );
	for($i=0; $i<count($chars); $i++){
		if( in_array($chars[$i], $starting ) ){
			$key = array_search($chars[$i], $starting);
			//If it's a starting element, add this to the expected
			$expected[$expCursor]=$closing[$key];
			$expCursor++;
		}
		else {
			//If it's an closing element, check if it matches the expected.
			if( $chars[$i] === $expected[$expCursor-1] ){
				unset($expected[$expCursor-1]);
				$expCursor--;
			}
			else {
				return 0;
			}
		}
	}
	if(empty($expected)) return 1;
	return 0;
}
// tapeEqu($array);
