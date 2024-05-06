<?php 
// we can achevie multiple inheritance using traits
// trait TraitClass{
// }
// use TraitClass;
trait Reader{
    public function add()
    {
        return "This method works for addition";
    }
}
trait File{
    public function data()
    {
        return "This method works for save data";
    }
}

class User
{
    use Reader ,File;
    // use File;
}
$user = new User;
echo $user->add();
echo $user->data();