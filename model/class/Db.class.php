<?php

/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 3/8/2017
 * Time: 12:42 AM
 */
class Db
{
    private static $instance = NULL;
    private static $dsn = "mysql:dbname=shop;host=localhost;charset=utf8";
    private static $user = "root";
    private static $pass = "";
    private function __construct() {}
    private function __clone() {}
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
        }
        return self::$instance;
    }
}