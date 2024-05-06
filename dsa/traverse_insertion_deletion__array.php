<?php
$LA = ["apple",'banana',"jully",'mango'];

// array_unshift($LA,"orange");
// array_push($LA,"orange");
array_splice($LA ,1);
print_r($LA);
// foreach($LA AS $AL){
//     print_r($AL);
// }
// echo $LA[0];
$cars = array("Volvo", "BMW", "Toyota");
// array_splice($cars, 1, 1);
// $cars[1] = "Sujiki";
// var_dump($cars);

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key =  array_search('blue',$array,true);
var_dump($key);


$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);