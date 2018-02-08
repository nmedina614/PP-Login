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
     * Default Constructor for User
     * @param string $username - username of user
     * @param string $password - password of user
     * @param string $loggedIn - Logged In status
     */
    function __construct($username="", $password="", $loggedIn="false") {
        $this->username = $username;
        $this->password = $password;
        $this->loggedIn = $loggedIn;
    }


    /**
     * Gets the username and returns it
     * @return mixed - username of user
     */
    function getUser() {
        return $username;
    }


    /**
     * Sets the Username
     * @param $username - username of user
     */
    function setUser($username) {
        $this->username = $username;
    }

    /**
     * Sets Password for user that must be 6 char long at least
     * @param $password - Password for user
     */
    function setPassword($password) {
        if (strlen($password) > 5) {
            $this->password = $password;
        } else {
            echo 'your password must be 6 characters or more';
        }
    }


    /**
     * Attempts to login for the user.
     * @param $username - Username for user
     * @param $password - Password for user
     */
    function login($username, $password) {
        include ('users.php');
        if ($loginInfos[$username] == $password) {
            echo "$username is logged in";
            $this->loggedIn = true;
        } else {
            echo "Login error";
        }
    }


    /**
     * Log outs for the user.
     */
    function logout() {
        $this->username = "";
        $this->password = "";
        $this->loggedIn = false;
    }
}