<?php
include('helpers.php');
function mergeStrings($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $sizeS1 = sizeof($s1);
    $sizeS2 = sizeof($s2);
    $length = ($sizeS1 > $sizeS2)? $sizeS1 : $sizeS2;
    $newStr = [];
    for($i = 0; $i<=$length;$i++){
        $str1 = '';
        $str2 = '';
        if(isset($s1[$i]))
            $str1 = $s1[$i];
        if(isset($s2[$i]))
            $str2 = $s2[$i];
        if($str1 == $str2){
            $newStr[] = $str1;
        }
        else{
            $newStr[] = $str1;
            $newStr[] = $str2;
        }
    }
    return implode('',$newStr);
}


$s1 = 'super';
$s2 = 'tower';
//stuopwer;
echo (mergeStrings($s1, $s2) );
?>
