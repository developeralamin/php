<?php 

class User 
{
    private $email;

    public function setMail($anyMail)
    {
        //set mail
        if(!filter_var($anyMail,FILTER_VALIDATE_EMAIL)){
            echo "Emial is not valid";
        }
         $this->email = $anyMail;
    }

    public function getMail()
    {
       return strtolower($this->email);
    }
}

$user = new User;
$user->setMail("alamin@GMAIL.com");
echo $user->getMail();