<?php 
require 'user.php';
require 'student.php';

use App\User;


$user = new User;
$user->get();