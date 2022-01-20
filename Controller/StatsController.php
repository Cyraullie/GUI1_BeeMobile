<?php

class StatsController
{

    private $db;

    public function __construct()
    {

        $NewDb = new DatabaseManager();
        $this->db = $NewDb->ConnectDB();
    }

    function index()
    {

        $user = $this->db->users->findOne(['name' => $_SESSION['user']]);
        $hives = $this->db->hives->find(['userid' => $user['userid']]);
        require "View/Stat.php";
    }


    function edit()
    {
        $AllStats = $this->db->stats->find(['hiveid' => intval($_GET['hive'])]);
        foreach ($AllStats as $stat){
            if($stat['date'] == substr($_GET['stat'], 1, -1)){
                $stats = $stat;
                break;
            }
        }
        require "View/EditStat.php";
    }

    function update()
    {
        $this->db->stats->updateOne(
            ['_id' => new MongoDB\BSON\ObjectID($_POST['stat'])],
            ['$set' => ["humidity" => intval($_POST['humidity']),
                        "temperature" => intval($_POST['temp']),
                        "weight" => intval($_POST['weight']),


                ]]
        );
        $this->index();
    }
}
