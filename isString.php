<?php
include "header.php";
?>
    <div>
    <h1>CHECKING VALUE IS STRING OR NOT IN ARRAY</h1>
    <?php
    
    $arr=[1,2,"e",5,"f","3"];
    foreach($arr as $ele){
        if(is_string($ele)){
            echo "$ele is String <br>";
        }else{
            echo "$ele is Not String <br>"  ;
        }
    }
    
    strToArr
    ?>
    </div>
</body>
</html>