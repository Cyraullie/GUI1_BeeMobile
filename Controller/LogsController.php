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

    function create()
    {
        require "View/CreateLog.php";
    }

    function show($hiveid)
    {
        if(is_null($hiveid)){
            $this->hiveid = $this->log->GetHives()->findOne(['userid'=>$_SESSION['user']])->hiveid;
        }else{
            $this->hiveid = $hiveid;
        }
        $hives = $this->log->GetHives()->find(['userid' => $_SESSION['user']]);
        $logs = $this->log->GetLogs()->find(['hiveid' => $this->hiveid]);
        require "View/JDB.php";
    }

    function save()
    {

        $today = date("d/m/Y");
        //if()
    }

}