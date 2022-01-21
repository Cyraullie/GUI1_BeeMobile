<?php

require_once "Model/Log.php";

class LogsController
{
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
        if (is_null($hiveid)) {
            $_SESSION['hiveid'] = $this->log->GetHives()->findOne(['userid' => $_SESSION['user']])->hiveid;
        } else {
            $_SESSION['hiveid'] = $hiveid;
        }
        $hives = $this->log->GetHives()->find(['userid' => $_SESSION['user']]);
        $logs = $this->log->GetLogs()->find(['hiveid' => $_SESSION['hiveid']]);
        require "View/JDB.php";
    }

    function save()
    {
        $today = date("d/m/Y");
        $query = $this->log->GetLogs()->countDocuments(['hiveid' => $_SESSION['hiveid']]);
        $secondQuery = $this->log->GetLogs()->countDocuments(['date' => $today]);
        if (empty($_POST['logName'])) {
            $message = "Veuillez remplir votre commentaire.";
            $type_message = "error";
            require "View/CreateLog.php";
        } else if ($query > 0) {
            if ($secondQuery > 0) {
                $new_task = array(
                    "text" => $_POST['logName'],
                    "hour" => date("h:i")
                );
                $this->log->GetLogs()->updateOne(
                    array("hiveid" => $_SESSION['hiveid'],"date" => $today),
                    array('$push' => array("content" => $new_task))
                );
                header('Location: ?action=JDB&postSave=' . $_SESSION['hiveid']);
            } else {
                $this->log->GetLogs()->insertOne(['hiveid' => $_SESSION['hiveid'], 'date' => $today, 'content' => [['text' => $_POST['logName'], 'hour' => date("h:i")]]]);
                header('Location: ?action=JDB&postSave=' . $_SESSION['hiveid']);
            }
        } else {
            $this->log->GetLogs()->insertOne(['hiveid' => $_SESSION['hiveid'], 'date' => $today, 'content' => [['text' => $_POST['logName'], 'hour' => date("h:i")]]]);
            header('Location: ?action=JDB&postSave=' . $_SESSION['hiveid']);
        }


        // if(is_null())

        //if()
    }

}