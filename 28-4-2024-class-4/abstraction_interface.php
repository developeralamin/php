<?php 
// Abstraction 
//abstraction - data hiding process
// we can acheive abstraction in 2 ways - interface , abstract 

abstract class User{
    // NID, PHOTO, DOB,NAME
    abstract public function NID();
    abstract public function PHOTO();
    public function DOB(){
        
    }
}