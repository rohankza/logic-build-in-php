<?php
// $student=[
//     "name" => "Dave Punk",
//     "mob" => "5689741523",
//     "email" => "davepunk@gmail.com",
//     "collection"=>["book"=>'intro to ml',
//                     'music'=>'rap',
//                      array(1,2)
//                   ]

// ];




// function arrahelper($values){

// foreach($student as $keys=>$val){
//     if(is_array($val)){
//         echo $keys;
//        arrahelper($val);
//     }else{
//         echo "$keys=>$val";
//     };
        
//     };
// };


// arrahelper($student);





$student = [
    // "name" => "Dave Punk",
    // "mob" => "5689741523",
    // "email" => "davepunk@gmail.com",
    "collection" => [
        "book" => 'intro to ml',
        "music" => 'rap',
        array(1, 2)
    ]
];

function arrahelper($values){
    foreach($values as $keys => $val) {
        if (is_array($val)) {
            echo $keys . "<br>"; 
            arrahelper($val);  
        } else {
            echo "$keys => $val\n"; 
        }
    }
}

arrahelper($student);










?>