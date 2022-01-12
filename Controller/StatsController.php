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

        $user = $this->collection->find(['name'=>"Cyril"]);
        require "View/Stat.php";
    }
}