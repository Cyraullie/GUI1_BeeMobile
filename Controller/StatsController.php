<?php

class StatsController{

    private $collection;

    public function __construct()
    {
        $DB = new DatabaseManager();
        $this->collection = $DB->ConnectDB();
    }

    function index() {

        $user = $this->collection->findOne(['name'=>$_SESSION['user']]);
        require "View/Stat.php";
    }


    function edit(){
        $user = $this->collection->findOne(['name'=>$_SESSION['user']]);
        for ($i = 0; $i < count($user['hives']); $i++){

            if($user['hives'][$i]['name'] == substr($_GET['hive'], 1, -1)) {
                $hive = $user['hives'][$i];
                for ($x = 0; $x < count($hive["stats"]); $x++)
                if ($hive["stats"][$i]['date'] == substr($_GET['stat'], 1, -1)){
                    $stats = $hive["stats"][$i];
                }
            }
        }

        require "View/EditStat.php";
    }
}
