<?php
#connection establish
include 'classes/usercheck.php';

$usernameInfo=$_POST['username'];
$passwordInfo=$_POST['password'];
$passwordInfo=md5($passwordinfo);

$user=new User;
$user->insertUser($usernameInfo,$passwordInfo);
