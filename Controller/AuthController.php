<?php

class AuthController
{
    private $collection;
    private $db;

    public function __construct()
    {

    }

    function indexLogin()
    {
        require "View/Login.php";
    }

    function checkLogin()
    {
        $this->db = DatabaseManager::ConnectDB();
        $this->collection = $this->db->users;

        $user = $this->db->users->findOne(['name' => $_POST['username']]);
        var_dump($user->userid);
            if ($_POST['password'] != $user['password']) {
                require "View/Login.php";
            } else {
                $_SESSION['user'] = $user->userid;
                require "View/Home.php";
            }
        require "View/Login.php";
    }

    function indexRegister()
    {
        require "View/Register.php";
    }

    function checkRegister()
    {
        $user = $this->collection->find(['name' => $_POST['username']]);

        foreach ($user as $client) {
            if ($client['name'] != null) {
                require "View/Login.php";
            }
        }

        $users = $this->db->users->find();
        $id = 0;
        foreach ($users as $client){
           $id++;
        }

        if ($_POST['password'] == $_POST['confirm_password']) {
            $this->collection->insertOne(['userid' => $id,'name' => $_POST['username'], 'password' => $_POST['password']]);
            $_SESSION['user'] = $_POST['userid'];
            require "View/Home.php";
        } else {
            require "View/Register.php";
        }
    }
}