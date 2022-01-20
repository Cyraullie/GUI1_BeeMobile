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
            $this->hiveid = this->log->GetHives()->findOne(['userid'=>$_SESSION['user']])->hiveid;
        }else{
            $this->hiveid = $hiveid;
        }
        //$logs = $this->log->GetLogs()->find(['hiveid'=>$hiveid]);
        require "View/JDB.php";
    }

}