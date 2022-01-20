<?php

require_once "Model/Log.php";
class LogsController
{
    private $log;

    function index()
    {
        $user = $this->log->db->connectDb()->find(['name'=>$_SESSION['user']]);
        require "View/JDB.php";
    }

    public function __construct()
    {
        $this->log = new Log();
    }

}