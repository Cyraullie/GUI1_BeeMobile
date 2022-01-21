<?php

require_once "Model/Log.php";
class LogsController
{
    private $hiveid;

    private $log;

    public function __construct()
    {
        $this->log = new Log();
    }

    function show($hiveid)
    {
        if(is_null($hiveid)){
            var_dump($_SESSION['user']);
            $this->hiveid = $this->log->GetHives()->findOne(['userid'=>$_SESSION['user']]);
            var_dump($this->hiveid);
        }else{
            $this->hiveid = $hiveid;
            var_dump($this->hiveid);
        }
        $hives = $this->log->GetHives()->find();
        //$logs = $this->log->GetLogs()->find(['hiveid'=>$hiveid]);
        require "View/JDB.php";
    }

}