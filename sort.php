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


echo "<h2> Array in  Descendind order <h2/>";   
            $arr1=[1,7,2,4,8,3,0,5];
        $lenght=count($arr1);
       
        for($i=0;$i<$lenght-1;$i++){
            for($j=0;$j<($lenght-1);$j++){
                if($arr1[$j]<$arr1[$j+1]){
                    $temp=$arr1[$j];
                    $arr1[$j]=$arr1[$j+1];
                    $arr1[$j+1]=$temp;
                };
            };
        };
                        echo" <pre>";
                        print_r($arr1);   
                        echo "<pre>";
       
                








    ?>
   </div>
</body>
</html>
