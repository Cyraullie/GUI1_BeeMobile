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
        $logs = $this->log->GetLogs()->findOne(["hiveid" => $_SESSION['hiveid']]);
        $next = false;
        foreach ($logs['content'] as $content) {
            if ($content['hour'] == date("h:i")) {
                $next = false;
            }else{
                $next = true;
            }
        }
        if ($next) {
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
                        array("hiveid" => $_SESSION['hiveid'], "date" => $today),
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
        } else {
            $message = "Veuillez patienter un petit moment avant de rajouter un log.";
            $type_message = "error";
            header('Location: ?action=CreateLog');
        }
    }

    function edit($logDate, $oldHour)
    {
        $date = $logDate;
        $logs = $this->log->GetLogs()->findOne(['date' => $logDate, 'hiveid' => $_SESSION['hiveid']]);

        require "View/EditLog.php";
    }


    function update($logDate, $oldHour, $newText)
    {
        $hiveid = $_SESSION['hiveid'];
        $logs = $this->log->GetLogs()->findOne(['date' => $logDate, 'hiveid' => $hiveid]);
        foreach ($logs['content'] as $content) {
            if ($content['hour'] == $oldHour) {

                $this->log->GetLogs()->updateOne(
                    array("hiveid" => $hiveid, "date" => $logDate, "content.hour" => $oldHour),
                    array('$set' => array("content.$.text" => $newText))
                );
                header('Location: ?action=JDB&postSave=' . $hiveid);
            }
        }
    }

    function delete($logDate, $oldHour)
    {
        $hiveid = $_SESSION['hiveid'];
        $logs = $this->log->GetLogs()->findOne(['date' => $logDate, 'hiveid' => $hiveid]);
        foreach ($logs['content'] as $content) {
            if ($content['hour'] == $oldHour) {
                if (sizeof($logs['content']) === 1) {
                    $logs = $this->log->GetLogs()->deleteOne(['date' => $logDate, 'hiveid' => $hiveid]);
                } else {
                    $this->log->GetLogs()->updateOne(
                        array("hiveid" => $hiveid, "date" => $logDate, "content.hour" => $oldHour),
                        array('$pull' => array("content" => array("hour" => $oldHour)))
                    );
                }
                header('Location: ?action=JDB&postSave=' . $hiveid);
            }
        }
    }


}