<?php 
// static method & static properties
// class name PascalCase
// method name will be camelCase
class Vechile
{
    public static $name="BMD";

    public static function getRide()
    {
        echo "Miles to go per hour 1km";
    }
    public function __construct()
    {
       //use static method here
        self::getRide();
    }

    public function useStaticMethod()
    {
        self::getRide();
    }

}
$vechile = new Vechile;
$vechile->useStaticMethod();
echo  Vechile::$name;
// echo  Vechile::getRide();

class Car 
{
    public function rideSharing()
    {
        Vechile::getRide();
    }
}
$car = new Car;
$car->rideSharing();