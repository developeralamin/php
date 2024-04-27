<?php 
// method overrriding
// parent keyword

class Diploma 
{
    public function getResult(){
        echo "Get result in Diploma";
    }
}

class Student extends Diploma{
    public function getResult(){
        parent::getResult();
        echo "Student get result from online bteb website";
    }
}

$student = new Student;
$student->getResult();


