<?php 
// car same -- 10 ton -> over -15 ton
// same method (para)
// class Calculate 
// {
//     public function sum($number1,$number2)
//     {
//         return $number1 + $number2;
//     }
//     public function sum($number1,$number2,$number3)
//     {
//         return $number1 + $number2 +$number3;
//     }

// }

// $calculate = new Calculate;
// echo $calculate->sum(10,5);

// __call(function,arguments)

class Calculate 
{
    function __call($function_name,$arguments)
     {
        if($function_name == "sum"){
            if(count($arguments) == 2){
                return array_sum($arguments);
            }else if(count($arguments) == 3){
                return array_sum($arguments);
            }
        }
     }
}

$calculate = new Calculate;
echo $calculate->sum(2,2);
echo $calculate->sum(2,2,4);