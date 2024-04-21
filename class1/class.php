<?php 
//oop -- object oriented programming
// $name = "alamin";
class User 
{
    public $name="alamin";
    //access modifier , function , function_name
    public function setName()
    {
        echo "Alamin Islam";
    }
}

$user =  new User;
if($user instanceof User ){
    echo "This is valid calss";
}
// var_dump($user->name);
var_dump($user->setName());
