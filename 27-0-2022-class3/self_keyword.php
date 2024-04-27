<?php 
class User 
{
    public static $roll=3125;

     public function getRoll()
     {
       return self::$roll;
     }
}

$user = new User;
echo $user->getRoll();
