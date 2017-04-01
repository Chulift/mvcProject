<?php
require_once "Member.class.php";

/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 2/22/2017
 * Time: 2:06 AM
 */
class Authentication
{
    private static $member;

    static function login($username, $password)
    {
        if (isset($username) && isset($password)) {
            self::$member = get_user($username, $password);
            if (self::$member != null) {
                return self::$member;
            } else return null;
        }
    }

    static function logout()
    {
        session_unset();
        session_destroy();
    }
}