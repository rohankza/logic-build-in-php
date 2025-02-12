<?php
//<!-- array('a','kk'=>array(1,2),1 => 2, arrray(hhh)); -->



$arr=array(
    // 'a',
    'kk'=>[1,2],
    // 1=>2,
    // ["hhh",[1,2,3]]
);

function recursive($arr2){
echo "<ul>";
foreach($arr2 as $attr=>$val){
   if(is_array($val)){
    echo "<li>";
    // echo $attr;

    recursive($val);
    echo "</li>";
   }else{
    echo "$attr=> $val\n";
   };
};
echo "<ul>";

};
recursive($arr)





?>