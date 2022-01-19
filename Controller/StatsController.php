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

        require "View/EditStat.php";
    }
}
