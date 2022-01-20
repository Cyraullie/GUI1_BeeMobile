<?php
require_once "Model/User.php";
class AuthController
{
    private User $users;

    public function __construct()
    {
        $this->users = new User();
    }

    function indexGuest(){
        require "View/Welcome.php";
    }

    function indexLogin()
    {
        require "View/Login.php";
    }

    function checkLogin()
    {
        $user = $this->users->GetUsers()->findOne(['name' => $_POST['username']]);

            if ($_POST['password'] != $user->password) {
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
        $user = $this->users->GetUsers()->findOne(['name' => $_POST['username']]);

        if ($user->getName != null) {
            require "View/Login.php";
        }

        $users = $this->users->GetUsers()->find();
        $id = 0;
        $alreadyExist = false;
        foreach ($users as $client){
           $id++;
            if($client->getName == $_POST['username']){
                $alreadyExist = true;
            }
        }

        if ($_POST['password'] == $_POST['confirm_password'] AND !$alreadyExist) {
            $this->users->GetUsers()->insertOne(['userid' => $id,'name' => $_POST['username'], 'password' => $_POST['password']]);
            $_SESSION['user'] = $id;
            header( "Location: ?action=Home");
        }elseif ($alreadyExist){
            header( "Location: ?action=Login");
        }else {
            header( "Location: ?action=Register");
        }
    }
}