<?php

interface DatabaseContract
{
    public function save($data);
}

class Mysql implements DatabaseContract
{
    public function save($data)
    {
        return ['data' => $data, 'Driver' => 'mysql'];
    }
}

class MongoDb implements DatabaseContract
{
    public function save($data)
    {
        return ['data' => $data, 'Driver' => 'mongodb'];
    }
}

class UserModel
{
    protected $database;

    public function __construct(DatabaseContract $database)
    {
        $this->database = $database;
    }

    public function createUser($data)
    {
        return $this->database->save($data);

    }
}

$userObject = new UserModel(new Mysql());
var_dump($userObject->createUser([
    'name' => 'ehsan',
    'email' => 'ehsanhossini@gmail.com'
]));