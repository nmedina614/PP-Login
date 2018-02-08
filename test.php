<?php
/**
 * Created by PhpStorm.
 * User: Nolan
 * Date: 2/8/2018
 * Time: 10:29 AM
 */

    include ('User.php');
    include ('Admin.php');

    $user1 = new User('george', '123456');
    $user2 = new User();
    $user3 = new Admin("Bob", 'iamtheboss',9001);


    $user2->setUser('Albert');
    $user2->setPassword('654321');
    echo $user2->getUser();
    echo "<br>";


    echo $user3->getUser()." Access Level: ". $user3->getAccess();
    echo "<br>";
    $user3->setAccess(1);
    echo $user3->getUser()." Access Level: ". $user3->getAccess();
    echo "<br>";

    $user1->login();
    echo "<br>";
    $user2->login();
    echo "<br>";
    $user3->editUser($user1);