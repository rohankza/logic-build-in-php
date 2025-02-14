<?php
// abstract class= atleast 1 abstarct function
// abstarct fun=must declare but not implement;
//     abstract classcould not  create obj
// abstract class,child class must contain abstract function

class demo{
    public $name;
    public $age;
    private $roll;
   function __construct($y,$ages,$roll_n){
        $this->name=$y;
        $this->age=$ages;
        $this->roll=$roll_n;
    }
    // function Parent(){
    //  echo "from parent";
        
    // }

}
class demo2 extends demo{
    
     public $skils="html";
     public $study="php";

    function fun1(){
        echo $this->name."<br>";
        echo $this->age."<br>";
        echo $this->roll."<br>";
        echo $this->skils."<br>";
        echo $this->study."<br>";
    }

};
$obj=new demo2("rohan",23,12);
$obj2=new demo2("sohan",24,22);
$obj->fun1();
echo "<br>";
$obj2->fun1();



?>