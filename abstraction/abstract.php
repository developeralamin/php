<?php
// card-password-amount-check_available_balance
// abstract method doesn't have body part
// abstract class doesn't create instance
// we can acheive abstract class using extends 

abstract class User
{
    abstract public function NID();
    abstract public function PHOTO();
    public function DOB(){}
    public function get()
    {
        echo "This is get method";
    }
}

class Rahim extends User
{
     public function NID(){}
     public function PHOTO(){}
}


$user = new Rahim;
$user->get();