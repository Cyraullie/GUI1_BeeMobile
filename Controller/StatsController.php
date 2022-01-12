<?php
include "Model/Database.php";

class StatsController{

    private $collection;

    public function __construct()
    {
        $DB = new Database();
        $this->collection = $DB->ConnectDB();
    }

    function index() {

        $user = $this->collection->find(['name'=>$_SESSION['user']["name"]]);
        require "View/Stat.php";
    }
}