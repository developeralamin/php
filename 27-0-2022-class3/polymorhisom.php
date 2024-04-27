<?php 
//  polymorphism - different behaivor
// inheritance - child class extends parent class
// method overriding


class Person 
{
    public function greateMan()
    {

    }

    public function commmonMethod()
    {
        return "This is common method for person";
    }
}

// 
class English extends Person
{
    public function greateMan()
    {
        return "English man comes to england";
    }

    public function commmonMethod()
    {
        echo parent::commmonMethod();
        return "This is common method for English person";
    }

}

class German extends Person
{
    public function greateMan()
    {
        return "German man comes to Germany";
    }
}


$person = new English;
echo $person->greateMan();
echo $person->commmonMethod();

// $german = new German;
// echo $german->greateMan();