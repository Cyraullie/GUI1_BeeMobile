<?php

class AuthController
{
    private $collection;

    public function __construct()
    {
        $DB = new Database();
        $this->collection = $DB->ConnectDB();
    }

    function indexLogin(){
        require "View/Login.php";
    }

    function checkLogin(){
        $user = $this->collection->find(['name'=>$_POST['username']]);

        foreach ($user as $client){
            if($_POST['password'] != $client['password']){
                require "View/Login.php";
            }else{
                $_SESSION['user'] = $user;
                require "View/Home.php";
                break;
            }
        }



    }


}