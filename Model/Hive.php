<?php
require_once 'Model/Utility.php';

class Hive extends Utility
{
    private string $name;
    private Log $logs;
    //private Stat $stats;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserHives($username){

        $user = $this->db->connectDb()->find(['name'=>$_SESSION['user']]);
        require "View/Stat.php";
    }


}