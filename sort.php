<?php
include "header.php";
?>
   <div>
   <h1> SORTING ARRAY</h1>
    <?php
  
// ASCENDING ORDER
echo "<h2> Array in  Ascendind order <h2/>";   
            $arr1=[1,7,2,4,8,3,0,5];
        $lenght=count($arr1);
       
        for($i=0;$i<$lenght-1;$i++){
            for($j=0;$j<($lenght-1);$j++){
                if($arr1[$j]>$arr1[$j+1]){
                    $temp=$arr1[$j];
                    $arr1[$j]=$arr1[$j+1];
                    $arr1[$j+1]=$temp;
                };
            };
        };
                        echo" <pre>";
                        print_r($arr1);   
                        echo "<pre>";



       
                





// // DESCENDING ORDER   
// echo "<h2> Array in  Descendind order <h2/>";   
//             $newArr=[1,4,2,3,5,7,6];             
//                 function rsorting($arr1){
//                 rsort($arr1);
//                 echo" <pre>";
//                 print_r($arr1);   
//                     echo "<pre>";
//             };

//                 rsorting($newArr);


// //ASCENDING ORDER IN ASSOCIATION ARRRAY
// echo "<h2>Asociative array in Ascendind order <h2/>";   
             
//             $keyvalue=[
//                 "Name"=>"Rohan",
//                 "Batch"=>"Php Batch",
//                 "Age"=>23,
//             ];

//             asort($keyvalue);
//             print_r($keyvalue)



    ?>
   </div>
</body>
</html>