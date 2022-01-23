<?php

require_once "Model/Stat.php";
require_once "Model/Hive.php";

class StatsController
{
    private Stat $stats;
    private User $users;
    private Hive $hives;

    public function __construct()
    {
        $this->stats = new Stat();
        $this->users = new User();
        $this->hives = new Hive();
    }

    function index()
    {
        $hives = $this->hives->GetHives()->find(['userid' => $_SESSION['user']]);
        $stats = $this->stats->GetStats();
        require "View/Stat.php";
    }

    function create()
    {
        require "View/CreateStat.php";
    }

    function save()
    {
        $stats = $this->stats->GetStats()->find();
        foreach ($stats as $stat) {
            if ($stat['hiveid'] === intval($_POST['hive'])) {
                if ($stat['date'] == date("d/m/Y")) {
                    $message = "Vous avez déjà des stats pour aujourd'hui";
                    $type_message = "error";
                    require "View/CreateStat.php";
                }
            }
        }
        $this->stats->GetStats()->insertOne(['hiveid'=> intval($_POST['hive']),'date' => date("d/m/Y"), 'weight' => $_POST['weight'], 'humidity' => $_POST['humidity'], 'temperature' => $_POST['temp']]);

        header('Location: ?action=Stats');
    }


    function edit()
    {
        $AllStats = $this->stats->GetStats()->find(['hiveid' => intval($_GET['hive'])]);
        foreach ($AllStats as $stat) {
            if ($stat->date == substr($_GET['stat'], 1, -1)) {
                $stats = $stat;
                break;
            }
        }
        require "View/EditStat.php";
    }

    function update()
    {
        $this->stats->GetStats()->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_POST['stat'])],
            ['$set' => ["humidity" => intval($_POST['humidity']),
                "temperature" => intval($_POST['temp']),
                "weight" => intval($_POST['weight']),
            ]]
        );
        header('Location: ?action=Stats');
    }

    function delete(){
        $this->stats->GetStats()->deleteOne(['date' => substr($_GET['statDate'], 1, -1)]);

        header('Location: ?action=Stats');
    }
}
