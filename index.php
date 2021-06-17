<?php
include_once "User.php";

$user = new User("Thinh","ngothinh@ymail.com",1);
$user->setName("Dung");
$user->setEmail("dung@mail.com");

echo $user->getInfo();
$user->isAdmin(1);