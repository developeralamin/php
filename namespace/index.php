<?php 
use App\Http\Controller;

require 'user.php';
require 'student.php';

// use App\User;
use Student\User as StdUser;

$user = new App\User;
$user->get();

$user2 = new StdUser;
$user2->get();


