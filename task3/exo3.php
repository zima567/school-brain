<?php
$n = 11;
$k = 9;
$arrStrNum = array();
$tempVal="";

for($i=1; $i<=$n; $i++){
    array_push($arrStrNum, (string)$i);
}

$arrLen = count($arrStrNum);

for($i=0; $i<$arrLen; $i++){
    for($j=0; $j<$arrLen-1-$i; $j++){
        if(strcmp($arrStrNum[$j], $arrStrNum[$j+1])>0){
            $tempVal = $arrStrNum[$j];
            $arrStrNum[$j] = $arrStrNum[$j+1];
            $arrStrNum[$j+1] = $tempVal;
        }
    }
}

$key = array_search((string)$k, $arrStrNum) +1;

echo $key;
