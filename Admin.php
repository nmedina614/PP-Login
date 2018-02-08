<?php
/**
 * Created by PhpStorm.
 * User: scottmedlock
 * Date: 2/8/18
 * Time: 10:49 AM
 */

class Admin extends User {

    private $accessLevel;

    function __construct($username="", $password="", $accessLevel=0) {
        $this->username = $username;
        $this->password = $password;
        $this->accessLevel = $accessLevel;
    }

    function setAccess($accessLevel){
        $this->accessLevel = $accessLevel;
    }

    function getAccess(){
        return $this->accessLevel;
    }

    function editUser($user){
        echo "editing ".$user->getUser();
    }

}