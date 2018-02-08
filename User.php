<?php
/**
 * Created by PhpStorm.
 * User: scottmedlock
 * Date: 2/8/18
 * Time: 10:11 AM
 */

class User {

    private $username;
    private $password;
    private $loggedIn;

    /**
     * User constructor.
     * @param string $username
     * @param string $password
     * @param string $loggedIn
     */
    function __construct($username="", $password="", $loggedIn="false") {
        $this->username = $username;
        $this->password = $password;
        $this->loggedIn = $loggedIn;
    }

    function getUser() {
        return $username;
    }

    function setUser($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        if (strlen($password) > 5) {
            $this->password = $password;
        } else {
            echo 'your password must be 6 characters or more';
        }
    }

    function login($username, $password) {
        include ('users.php');
        if ($loginInfos[$username] == $password) {
            echo "$username is logged in";
            $this->loggedIn = true;
        } else {
            echo "Login error";
        }
    }

    function logout() {
        $this->username = "";
        $this->password = "";
        $this->loggedIn = false;
    }
}