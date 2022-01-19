<?php
namespace BeeMobile\Controller;
use BeeMobile\Model\DatabaseManager;
class AuthController
{
    private $collection;

    public function __construct()
    {
        $DB = new DatabaseManager();
        $this->collection = $DB->ConnectDB();
    }

    function indexLogin()
    {
        require "View/Login.php";
    }

    function checkLogin()
    {
        $user = $this->collection->find(['name' => $_POST['username']]);

        foreach ($user as $client) {
            if ($_POST['password'] != $client['password']) {
                require "View/Login.php";
            } else {
                $_SESSION['user'] = $_POST['username'];
                require "View/Home.php";
                break;
            }
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

        if ($_POST['password'] == $_POST['confirm_password']) {
            $this->collection->insertOne(['name' => $_POST['username'], 'password' => $_POST['password'], 'hives' => [], 'calendars' => []]);
            $_SESSION['user'] = $_POST['username'];
            require "View/Home.php";
        } else {
            require "View/Register.php";
        }
    }
}