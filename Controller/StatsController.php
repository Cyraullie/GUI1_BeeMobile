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

        $this->collection->find(array(), array('name' => "Cyril"));
        require "View/Stat.php";
    }
}