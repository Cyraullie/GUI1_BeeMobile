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


    function edit()
    {
        $AllStats = $this->stats->GetStats()->find(['hiveid' => intval($_GET['hive'])]);
        foreach ($AllStats as $stat) {
            if ($stat->getDate == substr($_GET['stat'], 1, -1)) {
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
        $this->index();
    }
}
