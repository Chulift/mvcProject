<?php
spl_autoload_register(function ($class_name) {
    require_once "class/" . $class_name . ".class.php";
});
/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 2/27/2017
 * Time: 2:27 PM
 */

function add_user()
{
    $conn = Db::getInstance();
    $sql = "INSERT INTO members(username,passwd,name,surname) VALUES ('','','','')";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (Exception $exception) {
        return null;
    }
}

function get_users()
{
    $users = array();
    $conn = Db::getInstance();
    $sql = "SELECT * FROM members";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    //return $stmt->fetchAll(PDO::FETCH_ASSOC);

    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        array_push($users, new Member($result));
    }
    return $users;

}

function get_user($username, $password)
{
    $conn = Db::getInstance();
    $sql = "SELECT * FROM members WHERE username = '$username' and passwd = '$password' LIMIT 1";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $member = new Member($result);
            return $member;
        } else {
            return null;
        }
    } catch (Exception $exception) {
        return null;
    }
}

function update_user($id, $new_username, $new_password, $new_name, $new_surname)
{
    $conn = Db::getInstance();

    $sql = "UPDATE members SET username = '$new_username', passwd = '$new_password', name = '$new_name', surname = '$new_surname' WHERE id = '$id'";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

function delete_user($id)
{
    $conn = Db::getInstance();

    $sql = "DELETE FROM members WHERE id = '$id'";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}