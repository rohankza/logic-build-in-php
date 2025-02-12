<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    #division{
        text-align:center;
    }
    h1{
        color:blue
    }
</style>
</head>
<body>
    <div id="division">
    <h1>SINGLE DIMENTIONAL ARRAY</h1>
    <?php
        $details= array(
            "name" => "Dave Punk",
            "mob" => "5689741523",
            "email" => "davepunk@gmail.com",
        );
        foreach($details as $key=>$val){
            echo "<pre>";
            echo "$key :$val ";
            echo "<pre>";
        };


       echo " <h1>MULTI DIMENTIONAL ARRAY</h1>";

     $favorites = array 
     (
        0=>array(
            0=>array(
           0=>array(
            array(
                "name" => "Dave Punk",
                "mob" => "5689741523",
                "email" => "davepunk@gmail.com",
            ),
            array(
                "name" => "Monty Smith",
                "mob" => "2584369721",
                "email" => "montysmith@gmail.com",
            ),
            array(
                "name" => "John Flinch",
                "mob" => "9875147536",
                "email" => "johnflinch@gmail.com",
            ),
           )
        ),
        )
    );
        
        
        
        foreach($favorites as $values){
           foreach($values as $values2){
          foreach($values2 as  $values3){
            foreach($values3 as $values4 ){
                foreach($values4 as $key => $values5){
                    echo $key."::".$values5."\n";
                }
            }
          }
           };
           echo "<br>";
        }
        

        echo " <h1>BREAK IN FOREACH</h1>";
        $nums=[1,2,3,4,5,6,7];
        foreach($nums as $ele){
            if($ele==5){
                break;
            }else{
                echo $ele."\n";
            }
            echo"<br>";
        };

        echo " <h1>CONTINUE IN FOREACH</h1>";
        foreach($nums as $ele){
            if($ele==5){
                continue;
            }else{
                echo $ele."\n";
            }
        };

        

    ?>
    </div>
   
</body>
</html><?php

