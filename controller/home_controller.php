<?php
session_start();
spl_autoload_register(function ($class_name) {
    require_once "../model/class/" . $class_name . ".class.php";
});

require_once "../model/db_user.inc.php";
/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 2/23/2017
 * Time: 1:01 PM
 */
if (isset($_REQUEST['add'])) {
    add_user();
    include "../view/admin_home.php";
}

if (isset($_REQUEST['update'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $id = $_REQUEST['id'];
    update_user($id,$username, $password, $name, $surname);
    include "../view/admin_home.php";
}

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];
    delete_user($id);
    include "../view/admin_home.php";
}
if (isset($_REQUEST['login'])) {
    $user = Authentication::login($username = $_REQUEST['username'], $password = $_REQUEST['password']);
    //if ($login_result != null) {
    if (isset($user) && !empty($user)) {
        $member = $user->toArray();
        $_SESSION['member'] = serialize($user);
        $_SESSION['type'] = $member['type'];
        if ($member['type'] == "ADMIN") {
            //header("Location: ../view/admin_home.php");
            include "../view/admin_home.php";
        } else {
            //header("Location: ../view/user_home.php");
            include "../view/user_home.php";
        }
    } else {
        header("Location: ../index.php?login=false");
    }
}
