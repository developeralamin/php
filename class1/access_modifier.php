<?php
class User 
{
    public $name;
    private $roll;
    protected $registrationId = 254544;

    public function setRoll($roll)
    {
        //set roll
        $this->roll = $roll;
    }

    public function getRoll()
    {
        return $this->roll;
    }
}


$user  = new User;
// echo $user->name= "alamin";
 $user->setRoll(900233);
// echo $user->registrationId;
echo $user->getRoll();