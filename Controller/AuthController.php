<?php

class AuthController
{
    private $collection;
    private $db;

    public function __construct()
    {
        $NewDb = new DatabaseManager();
        $this->db = $NewDb->ConnectDB();
        $this->collection = $this->db->users;
    }

    function indexLogin()
    {
        require "View/Login.php";
    }

    function checkLogin()
    {
        $user = $this->collection->findOne(['name' => $_POST['username']]);
            if ($_POST['password'] != $user['password']) {
                require "View/Login.php";
            } else {
                $_SESSION['user'] = $_POST['username'];
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
            $_SESSION['user'] = $_POST['username'];
            require "View/Home.php";
        } else {
            require "View/Register.php";
        }
    }
}