<?php
class base{
    public $name="Rohan";
    public function fun1(){
        echo $this->name;
    }
}


class derived extends base{
    public $name="Rahul";
    public function fun1(){
        echo $this->name;
    }
}


$obj=new base();
$obj->fun1();

$obj2=new derived();
$obj2->fun1();




?>