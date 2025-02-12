<?php
function strToArr($str){
    $arr=[];
    for($i=0;$i<strlen($str);$i++){
        $arr[]=$str[$i];
    }
    return $arr;
};
echo "<pre>";
print_r(strToArr("hello word")); 
echo "<pre>";

?>
