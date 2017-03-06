<?php
require_once "../config.inc.php";
/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 2/20/2017
 * Time: 1:57 PM
 */
try {
    $conn = new PDO(DSN, DB_USER, DB_PASS);

} catch (PDOException $PDOException) {
    $message = $PDOException->getMessage();
    print $message;
}

function reconnect()
{
    global $conn;
    if ($conn == null)
    {
        try {
            $conn = new PDO(DSN, DB_USER, DB_PASS);

        } catch (PDOException $PDOException) {
            $message = $PDOException->getMessage();
            print $message;
        }
    }
}
function setUtf8()
{
    global $conn;
    $charset = "SET NAMES 'utf8'";
    try {
        $conn->exec($charset);
    } catch (PDOException $PDOException) {
        print $PDOException;
    }
}