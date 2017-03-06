<?php

/**
 * Created by PhpStorm.
 * User: chulift
 * Date: 2/22/2017
 * Time: 2:08 AM
 */
class Member
{
    private $id;
    private $username;
    private $password;
    private $name;
    private $surname;
    private $type;

    public function __construct($result)
    {
        $this->id = $result['id'];
        $this->username = $result['username'];
        $this->password = $result['passwd'];
        $this->name = $result['name'];
        $this->surname = $result['surname'];
        $this->type = $result['type'];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function toArray()
    {
        return array("username" => $this->username, "password" => $this->password, "name" => $this->name, "surname" => $this->surname, "type" => $this->type);
    }

    public function setProperty($key, $value)
    {
        $this->$key = $value;
    }
}